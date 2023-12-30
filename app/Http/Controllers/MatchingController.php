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
            // return to the previous location with validation errors 
            // and retain the inputs
            notify()->error('Some fields are required.');
            return redirect()->back()->withErrors($validate)->withInput();
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
        if($request->has('middleName'))
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
            $message .= "Student details saved successfully. Hurray!! Matching Allocation found";
        } else {
            // Handle unmatched student
            $message .= "Student details saved successfully. Oops!! No matching Allocation found";
        }
        // Save the student details
        $newStudent->save();

        // set notification
        notify()->success($message);
        
        return redirect()->route('student-sucess');
        
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

    public function regSupervisor(Request $request)
    {

        $supervisor = $request->all();
        $validate = Validator::make($supervisor, [
            'title' => 'required|string',
            'email' => 'required|string|email',
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'school' => 'required|string',
            'department' => 'required|string',
            'status' => 'required|string',
            'keywords' => 'required|string',
            'areaExpertise' => 'required|string',
            'researchArea' => 'required|string',

        ]);

        if ($validate->fails()) {
            // return to the previous location with validation errors 
            // and retain the inputs
            notify()->error('Some fields are required.');
            return redirect()->back()->withErrors($validate)->withInput();
        }
        
        
        // create new student object
        $newSupervisor = new Supervisor();
        $newSupervisor->title = $supervisor['title'];
        $newSupervisor->email = $supervisor['email'];
        $newSupervisor->firstName = $supervisor['firstName'];
        if($request->has('middleName'))
            $newSupervisor->middleName = $supervisor['middleName'];
        $newSupervisor->lastName = $supervisor['lastName'];
        $newSupervisor->school = $supervisor['school'];
        $newSupervisor->department = $supervisor['department'];
        $newSupervisor->status = $supervisor['status'];
        $newSupervisor->keywords = $supervisor['keywords'];
        $newSupervisor->areaExpertise = $supervisor['areaExpertise'];
        $newSupervisor->researchArea = $supervisor['researchArea'];
        if($request->has('MajResearchArea'))
            $newSupervisor->MajResearchArea = $supervisor['MajResearchArea'];

        if($request->has('MinResearchArea'))
            $newSupervisor->MajResearchArea = $supervisor['MinResearchArea'];

        $message = "Supervisor details saved successfully.";
        
        // Save the supervisor details
        $newSupervisor->save();

        // set notification
        notify()->success($message);
        
        return redirect()->route('supervisor-sucess');
        
        // }
    }
}
