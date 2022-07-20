<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Invoice;
use Carbon\Carbon;
use Auth;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::latest()->get();
        $students = Student::all();
        return view('admin.invoice.invoice_list' ,compact('students','invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        return view('admin.invoice.create_invoice',compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->fees = '1')
        {
            $student= Student::where('id',$request->student_id)->first();
            if($student != null)
            {
                Invoice::create([
                    'amount'=>$request->amount,
                    'type'=> 'fees',
                    'description' => 'Monthly Fees',
                    'student_reg'=> $student->reg_no,
                    'student_Name'=>$student->name,
                    'student_id'=> $request->student_id,
                    'user_id' => auth()->user()->id,
                    'date' => Carbon::now(),
                ]);
                return redirect()->back()->with('success','Invoice Submitted Sccessfully/ انوائس کامیابی سے جمع کرائی گئی۔');

            }
        }

        if($request->fees = '2'){

            Invoice::create([
                'amount'=>$request->amount,
                'type'=> $request->fees,
                'student_Name'=>$request->student_name,
                'description' => $request->description,
                'user_id' => auth()->user()->id,
                'date' => Carbon::now(),
            ]);
            return redirect()->back()->with('success','Invoice Submitted Sccessfully/ انوائس کامیابی سے جمع کرائی گئی۔');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Invoice::where('id',$id)->first();

        $students = Student::where('id',$invoice->student_id)->first();
        return view('admin.invoice.invoice_detail',compact('students','invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
