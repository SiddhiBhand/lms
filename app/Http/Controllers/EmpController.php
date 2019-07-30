<?php

namespace App\Http\Controllers;

use App\Emp;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('createemp');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function create(Request $request)
    {
    	$emp = new Emp();

		 $emp->id = $request->input('id');
		 $emp->fname = $request->input('fname');
		 $emp->lname = $request->input('lname');
		 $emp->email = $request->input('email');
		 $emp->address = $request->input('address');
		 $emp->gender = $request->input('gender');
		 $emp->dob = $request->input('dob');
		 $emp->mobileno = $request->input('mobileno');
		 $emp->education = $request->input('education');
		 $emp->bloodgrp = $request->input('bloodgrp');
		 $emp->emp_per_name = $request->input('emp_per_name');
		 $emp->emp_per_mob = $request->input('emp_per_mob');
		 $emp->status = $request->input('status');
		 $emp->roles = $request->input('roles');
		 $emp->acc_name = $request->input('acc_name');
		 $emp->acc_no = $request->input('acc_no');
		 $emp->bank_name = $request->input('bank_name');
		 $emp->branch = $request->input('branch');
		 $emp->ifsc_code = $request->input('ifsc_code');
		 $emp->join_date = $request->input('join_date');
		 $emp->pan_no = $request->input('pan_no');
		 $emp->adhar_no = $request->input('adhar_no');
		 $emp->upload_adhar = $request->input('upload_adhar');
		 $emp->upload_pan = $request->input('upload_pan');
		 $emp->upload_resume = $request->input('upload_resume');
		 $emp->designation = $request->input('designation');
	 $emp->save();
      return redirect('empall');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function all(Request $request)
    {
        $emp = Emp::all();
        return view('empall')->with(compact('emp'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
             $emp = Emp::find($id);
        return view('viewemp')->with(compact('emp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp = Emp::find($id);
        return view('editemp')->with(compact('emp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $emp = Emp::find($request->input('id'));

		 $emp->id = $request->input('id');
		 $emp->fname = $request->input('fname');
		 $emp->lname = $request->input('lname');
		 $emp->email = $request->input('email');
		 $emp->address = $request->input('address');
		 $emp->gender = $request->input('gender');
		 $emp->dob = $request->input('dob');
		 $emp->mobileno = $request->input('mobileno');
		 $emp->education = $request->input('education');
		 $emp->bloodgrp = $request->input('bloodgrp');
		 $emp->emp_per_name = $request->input('emp_per_name');
		 $emp->emp_per_mob = $request->input('emp_per_mob');
		 $emp->status = $request->input('status');
		 $emp->roles = $request->input('roles');
		 $emp->acc_name = $request->input('acc_name');
		 $emp->acc_no = $request->input('acc_no');
		 $emp->bank_name = $request->input('bank_name');
		 $emp->branch = $request->input('branch');
		 $emp->ifsc_code = $request->input('ifsc_code');
		 $emp->join_date = $request->input('join_date');
		 $emp->pan_no = $request->input('pan_no');
		 $emp->adhar_no = $request->input('adhar_no');
		 $emp->upload_adhar = $request->input('upload_adhar');
		 $emp->upload_pan = $request->input('upload_pan');
		 $emp->upload_resume = $request->input('upload_resume');
		 $emp->designation = $request->input('designation');
	 $emp->save();
        return redirect('empall');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $emp = Emp::findOrFail($id);
 
            $emp->delete();
            return redirect('empall');
    }
}