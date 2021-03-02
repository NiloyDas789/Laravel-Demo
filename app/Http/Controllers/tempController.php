<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class tempController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('studentsApp')->get();
        return view('temp2.tables',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=DB::table('studentsApp')->get();
        return view('temp2.register',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required|max:25',
            'lastName' => 'required|max:25|min:3',
            'email' => 'required|unique:studentsApp',
        ]);

        $data=array();
        $data['firstName']=$request->firstName;
        $data['lastName']=$request->lastName;
        $data['email']=$request->email;

        $catagory=DB::table('studentsApp')->insert($data);

        if ($catagory) {
            return redirect()->route('tables')->with('alert', 'Data Stored Successfully');
        }
        else{
            return redirect()->back('/');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=DB::table('studentsApp')->where('id',$id)->first();
        return view('temp2.edit')->with('edit',$edit);
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
        $validated = $request->validate([
            'firstName' => 'required|max:25',
            'lastName' => 'required|max:25|min:3',
            'email' => 'required',
        ]);

        $data=array();
        $data['firstName']=$request->firstName;
        $data['lastName']=$request->lastName;
        $data['email']=$request->email;

        $update=DB::table('studentsApp')->where('id',$id)->update($data);

        if ($update) {
            return redirect()->route('tables')->with('alert', 'Data Updated Successfully');
        }
        else{
            echo "Sorry, Delete failed";
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=DB::table('studentsApp')->where('id',$id)->delete();

        if ($delete) {
            return redirect()->route('tables')->with('alert', 'Data Deleted Successfully');
        }
        else{
            echo "Sorry, Delete failed";
        }

    }
}
