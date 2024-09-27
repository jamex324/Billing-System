<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Billing;
use App\Models\Student;
use App\Models\Semester;
use App\Models\EnrollmentRecord;
use App\Models\EnrolledSubjects;
use App\Models\Course;
use App\Models\YearLevel;

class BillingController extends Controller
{
    public function addTransaction(Request $request){

        $students = $request->validate([
            'student_id' => 'required|integer|exists:students,id',
            'billing_id' => 'required|integer|exists:billings,id',
        ]);
        
        $transaction = Transaction::create($students);

        return response()->json($transaction, 201);
 }

 public function billing(Request $request)
 {
     // Validate the incoming request data
     $validatedData = $request->validate([
         'name' => 'required|string',
         'amount' => 'required|numeric', // Ensure amount is numeric
     ]);
 
     // Create a new billing record using the validated data
     $billing = Billing::create($validatedData);
 
     // Return a JSON response with the created billing record
     return response()->json($billing, 201);
 }
 
 public function tuitionFee($id)
 {
    
 }

 public function MSfee()
{
    // Get all billing records with the related amount
    $msFees = Billing::get();

    // Calculate the total sum of the amounts
    $totalAmount = $msFees->sum('amount'); // Assuming 'amount' is the field in the Billing model

    // Return the billing records and the total amount in a structured response
    return response()->json([
        'billing_data' => $msFees,
        'total_amount' => $totalAmount,
    ], 200);
}



}
