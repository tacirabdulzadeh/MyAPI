<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return array
     */
    public function store(Request $request)
    {
        $student =  new Student($request->all());
        $student->save();
        return [
            "message"=> "Saved",
            "data"=>$student
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return array
     */
    public function show($id)
    {

        $student= Student::whereId()->get();

        if ($student->isEmpty())
            return [
                "message"=> "Failed"
            ];
        else
            return ["message"=>"success",
                "student"=>$student
        ];
        //
    }

    public function delete($id)
    {

        $student= Student::whereId()->get();

        if ($student->isEmpty())
            return [
                "message"=> "Failed"
            ];
        else {
            $student->delete();
            return ["message" => "success",
                "student" => $student
            ];
            //
        }
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
    public  function all(){
        return Student::all();

    }
}
