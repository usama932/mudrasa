<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instructor;
use Whoops\Exception\Inspector;

class InstructorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = Instructor::all();
        return view('admin.instructor.instructor',compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Instructor::create([
            'full_name' => $request->full_name,
            'last_degree' => $request->last_degree,
            'phone_number' => $request->phone_number,
            'experiance' => $request->experiance,
            'address' => $request->address,
            'about_description' => $request->about_description
        ]);
        return redirect()->route('instructors.index')->with('success', 'Instructor added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        Instructor::where('id',$id)->update([
            'full_name' => $request->full_name,
            'last_degree' => $request->last_degree,
            'phone_number' => $request->phone_number,
            'experiance' => $request->experiance,
            'address' => $request->address,
            'about_description' => $request->about_description
        ]);
        return redirect()->route('instructors.index')->with('success', 'Instructor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instructor = Instructor::find($id);
        $instructor->delete();
        return redirect()->route('instructors.index')->with('success', 'Instructor deleted successfully');
    }
}
