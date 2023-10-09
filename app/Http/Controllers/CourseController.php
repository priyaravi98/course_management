<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Coursedetails; //add Student Model - Data is coming from the database via Model.
use App\Imports\CoursesImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\File;
 
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coursedetails = Coursedetails::all();
        return view ('coursedetails.index')->with('coursedetails', $coursedetails);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function create()
    {
        return view('coursedetails.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Coursedetails::create($input);
        return redirect('coursedetails')->with('flash_message', 'Student Addedd!');  
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coursedetails = Coursedetails::find($id);
        return view('coursedetails.show')->with('coursedetails', $coursedetails);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coursedetails = Coursedetails::find($id);
        return view('coursedetails.edit')->with('coursedetails', $coursedetails);
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
        $coursedetails = Coursedetails::find($id);
        $input = $request->all();
        $coursedetails->update($input);
        return redirect('coursedetails')->with('flash_message', 'coursedetails Updated!');  
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Coursedetails::destroy($id);
        return redirect('coursedetails')->with('flash_message', 'Student deleted!');  
    }

   public function import() 
    {
       Excel::import(new CoursesImport,request()->file('file_course'));
       return back();
    }

    
}