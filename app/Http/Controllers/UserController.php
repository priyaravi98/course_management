<?php

namespace App\Http\Controllers;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use App\Models\Userdetails;

class UserController extends Controller
{
     /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $userdetails = Userdetails::all();
        return view('userdetails.index')->with('userdetails',$userdetails) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userdetails.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        


        $flight = new Userdetails;
 
        $flight->firstname = $request->firstname;

        $flight->email = $request->email;

        $flight->lastname = $request->lastname;

        $flight->country = $request->country;

        $flight->user_id = $request->user_id;

        $flight->active = "Y";
 
        $flight->save();
        
        return redirect('userdetails')->with('flash_message', 'User Addedd!');  
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userdetails = userdetails::find($id);
        return view('userdetails.show')->with('userdetails', $userdetails);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userdetails = Userdetails::find($id);
        return view('userdetails.edit')->with('userdetails', $userdetails);
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
        $userdetails = Userdetails::find($id);
        $input = $request->all();
        $userdetails->update($input);
        return redirect('userdetails')->with('flash_message', 'Userdetails Updated!');  
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Userdetails::destroy($id);
        return redirect('userdetails')->with('flash_message', 'Userdetail deleted!');  
    }

    /**
    * @return \Illuminate\Support\Collection
    */

   public function import() 
    {
        Excel::import(new UsersImport,request()->file('excel_file'));
        
       return back();
    }
    
    
    
}




