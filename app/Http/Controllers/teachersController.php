<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class teachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niloy=DB::table('studentsapp')->join('teachers','studentsapp.id','teachers.student_id')->select('studentsapp.*','teachers.reg')->get();
        return view('temp2.allData',compact('niloy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temp2.teachersReg');
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
            'student_id' => 'required|max:25',
            'reg' => 'required|min:3',
            
        ]);

        $data=array();
        $data['student_id']=$request->student_id;
        $data['reg']=$request->reg;

        $catagory=DB::table('teachers')->insert($data);

        if ($catagory) {
            return redirect()->route('teachersReg')->with('alert', 'Data Stored Successfully');
        }
        else{
            return redirect()->back('/')->with('alert', 'Data Stored failed');
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
        $delete=DB::table('teachers')->where('id',$id)->delete();

        if ($delete) {
            return redirect()->route('allData')->with('alert', 'Data Deleted Successfully');
        }
        else{
            echo "Sorry, Delete failed";
        }
    }
}
