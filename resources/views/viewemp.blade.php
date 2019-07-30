
   
@extends('partials.layout')

@section('content')




    <div class="panel" style="">
      <div class="panel-heading">
        <div class="panel-title">View Emp</div>
      </div>

    <div class="panel-body" style="background: white;">
      <form class="form-horizontal" method="POST" autocomplete="off" enctype="multipart/form-data">
                {{ csrf_field() }}



                    <div class="form-group">
                    <label class="control-label"><b>Id</b></label>
                    <p>{{$emp->id}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Fname</b></label>
                    <p>{{$emp->fname}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Lname</b></label>
                    <p>{{$emp->lname}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Email</b></label>
                    <p>{{$emp->email}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Address</b></label>
                    <p>{{$emp->address}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Gender</b></label>
                    <p>{{$emp->gender}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Dob</b></label>
                    <p>{{$emp->dob}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Mobileno</b></label>
                    <p>{{$emp->mobileno}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Education</b></label>
                    <p>{{$emp->education}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Bloodgrp</b></label>
                    <p>{{$emp->bloodgrp}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Emp_per_name</b></label>
                    <p>{{$emp->emp_per_name}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Emp_per_mob</b></label>
                    <p>{{$emp->emp_per_mob}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Status</b></label>
                    <p>{{$emp->status}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Roles</b></label>
                    <p>{{$emp->roles}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Acc_name</b></label>
                    <p>{{$emp->acc_name}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Acc_no</b></label>
                    <p>{{$emp->acc_no}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Bank_name</b></label>
                    <p>{{$emp->bank_name}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Branch</b></label>
                    <p>{{$emp->branch}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Ifsc_code</b></label>
                    <p>{{$emp->ifsc_code}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Join_date</b></label>
                    <p>{{$emp->join_date}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Pan_no</b></label>
                    <p>{{$emp->pan_no}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Adhar_no</b></label>
                    <p>{{$emp->adhar_no}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Upload_adhar</b></label>
                    <p>{{$emp->upload_adhar}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Upload_pan</b></label>
                    <p>{{$emp->upload_pan}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Upload_resume</b></label>
                    <p>{{$emp->upload_resume}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Designation</b></label>
                    <p>{{$emp->designation}}"</p>
                    </div>    
                  
 

                          <button type="submit" style="border-radius: 5px;color: white;background: #41b08a;" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button style="border-radius: 5px;color: white;background: #41b08a;" class="btn btn-light">Cancel</button>

          </form>
    </div>


@endsection
