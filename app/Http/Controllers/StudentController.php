<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_all_student()
    {
        $students = Student::all();
        return view('pages.student_manage', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.student_add');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create([
            'fullname' => $request->fullname,
            'birthday' => $request->birthday,
            'address' => $request->address
        ]);
        return redirect('/students');
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
    public function get_student_by_id($id)
    {
        $student = DB::select("SELECT * FROM students WHERE id = '" . $id . "'");
        return view('pages.student_edit', compact('student'));
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
        // UPDATE students SET fullname = 'Vinh', birthday = '2001', address = 'Tien phong' WHERE id = 1;
        // DB::select("UPDATE students SET fullname = '" . $request->fullname . "', birthday = '" . $request->birthday . "', address = '" . $request->address . "' WHERE id = $id");
        // return redirect('students');
        DB::table('students')->where('id', $id)->update(['fullname' => $request->fullname, 'birthday' => $request->birthday, 'address' => $request->address]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect('/students');
    }
}
