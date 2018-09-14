<?php

namespace App\Http\Controllers;

use App\Students;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    

    public function index()
              {
                $students = Students::all();
                 return view('welcome',compact('students'));
              }


    public function create()
              {
                 return view('create');
              } 
    public function store(Request $request)
              {
                // return $request->all();
    $this->validate($request,[
               'roll'=>'required',
               'average'=>'required'
                             ]);

     $student = new Students ;
     $student->roll = $request->roll;
     $student->average = $request->average;
      

    $student->save();
    return redirect(route('home'))->with('successMsg','Students Data   Successfully Added !');
              }

    public function edit($id)
                      {
                        $student=Students::find($id);
                        return view('edit',compact('student'));
                      }          



    public function update(Request $request,$id)
                        {
                          $this->validate($request,[
               'roll'=>'required',
               'average'=>'required'
                             ]);

                                                   $student =  Students::find($id) ;
                                                   $student->roll = $request->roll;
                                $student->average = $request->average;

                                                  $student->save();
                                                  return redirect(route('home'))->with('successMsg','Student Successfully Updated !');




                        }

     public function delete($id)
                 {

             Students::find($id)->delete();
  return redirect(route('home'))->with('successMsg','Student Successfully Deleted !');

                  }                   


}


