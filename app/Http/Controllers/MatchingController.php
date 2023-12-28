<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Supervisor;
use Illuminate\Support\Facades\Validator;

class MatchingController extends Controller
{
    //
    

    public function getStudentAndAllocate(Request $request)
    {

        $student = $request->all();
        $validate = Validator::make($student, [
            'student_id' => 'required|string',
            'email' => 'required|string|email',
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'school' => 'required|string',
            'department' => 'required|string',
            'program' => 'required|string',
            'keywords' => 'required|string',
            'thesisTitle' => 'required|string',
            'researchArea' => 'required|string',

        ]);

        if ($validate->fails()) {
            $errors = $validate->messages();
            return View('admin', [$errors]);
        }
        
        // $unassignedStudents = Student::where('supervisor_id', null)->get();

        // foreach ($unassignedStudents as $student) {
        $eligibleSupervisors = Supervisor::has('students', '<', 2)->get();

        $matchingScores = [];
        foreach ($eligibleSupervisors as $supervisor) {
            $matchingScore = $this->calculateMatchingScore($request, $supervisor);
            $matchingScores[$supervisor->id] = $matchingScore;
        }

        $filteredSupervisors = array_filter($matchingScores, function ($score) {
            return $score > 0; // Adjust threshold as needed
        });

        // create new student object
        $newStudent = new Student();
        $newStudent->student_id = $student['student_id'];
        $newStudent->email = $student['email'];
        $newStudent->firstName = $student['firstName'];
        $newStudent->middleName = $student['middleName'];
        $newStudent->lastName = $student['lastName'];
        $newStudent->school = $student['school'];
        $newStudent->department = $student['department'];
        $newStudent->program = $student['program'];
        $newStudent->keywords = $student['keywords'];
        $newStudent->thesisTitle = $student['thesisTitle'];
        $newStudent->researchArea = $student['researchArea'];

        $message = "";

        if ($filteredSupervisors) {
            $selectedSupervisorId = array_rand($filteredSupervisors);
            $newStudent->supervisor_id = $selectedSupervisorId;
            // $newStudent->save();
            $message .= "Student details saved successfully. <br/>Matching Allocation found";
        } else {
            // Handle unmatched student
            $message .= "Student details saved successfully. <br/>No matching Allocation found";
        }

        $newStudent->save();
        
        return View('admin', compact('message'));
        
        // }
    }

    private function calculateMatchingScore($student, $supervisor)
    {
        $studentKeywords = array_merge(
            explode(',', $student->keywords),
            explode(',', $student->researchArea),
            explode(',', $student->thesisTitle)
        );
        $supervisorKeywords = array_merge(
            explode(',', $supervisor->areaExpertise),
            explode(',', $supervisor->researchArea),
            explode(',', $supervisor->MajResearchArea),
            explode(',', $supervisor->keywords),
            explode(',', $supervisor->MinResearchArea)
        );
    
        // Implement scoring logic (e.g., count shared words with weights)
        $matchingScore = count(array_intersect($studentKeywords, $supervisorKeywords));
    
        return $matchingScore;
    }

    public function allocateAutomatically(){
        $unassignedStudents = Student::where('supervisor_id', null)->get();

        foreach ($unassignedStudents as $student) {
            $eligibleSupervisors = Supervisor::has('students', '<', 2)->get();

            $matchingScores = [];
            foreach ($eligibleSupervisors as $supervisor) {
                $matchingScore = $this->calculateMatchingScore($student, $supervisor);
                $matchingScores[$supervisor->id] = $matchingScore;
            }

            $filteredSupervisors = array_filter($matchingScores, function ($score) {
                return $score > 0; // Adjust threshold as needed
            });

            if ($filteredSupervisors) {
                $selectedSupervisorId = array_rand($filteredSupervisors);
                $student->supervisor_id = $selectedSupervisorId;
                $student->save();
            } else {
                // Handle unmatched student using strategies mentioned earlier
            }
        }
    }
}
