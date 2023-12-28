<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Supervisor;

class MatchingController extends Controller
{
    //

    public function getStudentAndAllocate(Request $request)
    {
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
}
