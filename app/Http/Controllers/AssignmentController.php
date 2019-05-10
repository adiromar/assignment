<?php

namespace App\Http\Controllers;

use App\cr;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cr = cr::all();
    return view('layouts.dashboard')->with('cr', $cr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        echo '<pre>';
        print_r($_POST);
        $cr = new Cr;
        $cr->subject_name = $request->subject_Name;
        $cr->pages = $request->Pages;
        $cr->due_Date = $request->Due_Date;
        $cr->due_Time = $request->Due_Time;
        $cr->work_Level = $request->Work_Level;
        // $cr->files = $request->files;
        $cr->reference_Style_Id = $request->Reference_Style_Id;
        $cr->weightage = $request->weightage;
        $cr->save();
        return redirect('/create');

      //   $subject_name = $request->input('subject_Name');
      //   $pages = $request->input('Pages');
      //   $due_Date = $request->input('Due_Date');
      //   $due_Time = $request->input('Due_Time');
      //   $work_Level = $request->input('Work_Level');
      //   $files = $request->input('files');
      //   $reference_Style_Id = $request->input('Reference_Style_Id');
      //   $weightage = $request->input('weightage');
      //   // echo $subject_name;die;
      // DB::insert('insert into assignments (subject_name,pages,due_Date,due_Time,work_Level,files,reference_Style_Id,weightage) values(?,?,?,?,?,?,?,?)',[$subject_name,$pages,$due_Date,$due_Time,$work_Level,$files,$reference_Style_Id,$weightage]);
      // echo "Record inserted successfully.<br/>";
      // echo '<a href = "/insert">Click Here</a> to go back.';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
