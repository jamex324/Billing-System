<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YearLevel;
use App\Models\Subject;
use App\Models\Student;
use App\Models\EnrollmentRecord;
use App\Models\Course;
use App\Models\EnrolledSubject;
use App\Models\Semester;

class EnrollmentController extends Controller
{
    public function addYear(Request $request)
    {
        $validatedData = $request->validate([
            'year' => 'required',
        ]);

        $year = YearLevel::create($validatedData);

        return response()->json($year, 201);
    }

    public function addSubject(Request $request)
    {
        $subjects = $request->validate([
            'subject' => 'required|string',
            'unit' => 'required|integer|min:1|max:4',
            'course_id' => 'required|integer|exists:courses,id',
            'year_id' => 'required|integer|exists:year_levels,id',
        ]);

        $subject = Subject::create($subjects);

        return response()->json([
            'success' => true,
            'message' => 'Successfully created',
            'subject' => $subject,
        ], 201);
    }

    public function addCourse(Request $request)
    {
        $validatedData = $request->validate([
            'course_name' => 'required|string',
        ]);

        $course = Course::create($validatedData);

        return response()->json($course, 201);
    }

    public function addStudent(Request $request)
    {
        $validatedData = $request->validate([
            'school_id' => 'required|string|max:10',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|digits_between:10,11',
            'email' => 'required|email|unique:students,email',
        ]);

        $student = Student::create($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Successfully created',
            'student' => $student,
        ], 201);
    }

    public function enrolledListBsit()
    {
        $studentBsit = EnrollmentRecord::with(['student', 'course', 'yearLevel'])
            ->whereHas('course', function ($query) {
                $query->where('course_name', '=', 'BSIT');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json($studentBsit, 200);
    }

    public function enrolledListBeed()
    {
        $studentBeed = EnrollmentRecord::with(['student', 'course', 'yearLevel'])
            ->whereHas('course', function ($query) {
                $query->where('course_name', '=', 'BEED');
            })
            ->get();

        return response()->json($studentBeed, 200);
    }

    public function enrolledListBsed()
    {
        $studentBsed = EnrollmentRecord::with(['student', 'course', 'yearLevel'])
            ->whereHas('course', function ($query) {
                $query->where('course_name', '=', 'BSED');
            })
            ->get();

        return response()->json($studentBsed, 200);
    }

    public function enrolledListBsbafm()
    {
        $studentBsbafm = EnrollmentRecord::with(['student', 'course', 'yearLevel'])
            ->whereHas('course', function ($query) {
                $query->where('course_name', '=', 'BSBA-FM');
            })
            ->get();

        return response()->json($studentBsbafm, 200);
    }

    public function enrolledListBsbamm()
    {
        $studentBsbamm = EnrollmentRecord::with(['student', 'course', 'yearLevel'])
            ->whereHas('course', function ($query) {
                $query->where('course_name', '=', 'BSBA-MM');
            })
            ->get();

        return response()->json($studentBsbamm, 200);
    }

    public function student($id)
{
    $student = Student::with(['enrollmentRecords.course', 'enrollmentRecords.yearLevel'])
        ->where('id', '=', $id)
        ->first();

    if (!$student) {
        return response()->json([
           'success' => false,
           'message' => 'Student not found',
        ], 404);
    }

    return response()->json($student, 200);
}

public function enrollmentRecord($id)
{
    // Check if the student exists first
    $enrollmentRecords = EnrollmentRecord::with(['student', 'course','semester', 'yearLevel', 'enrolledSubjects.subjects'])
    ->where('id', '=', $id)
    ->get();


   

    if ($enrollmentRecords->isEmpty()) {
        return response()->json(['message' => 'No records found for student ID ' . $id], 404);
    }

    return response()->json(['enrollment_records' => $enrollmentRecords], 200);
}


public function totalUnit($id)
{
    $enrollmentRecords = EnrollmentRecord::with(['enrolledSubjects.subjects'])
        ->where('id', '=', $id)
        ->get();

    // Calculate total unit
    $total_unit = $enrollmentRecords->flatMap(function ($record) {
        return $record->enrolledSubjects->pluck('subjects.unit'); 
    })->sum();

    $unit_fee = $total_unit * 150;

    return response()->json(['total_unit' => $total_unit, 'unit_fee' => $unit_fee], 200);
}

   
}
