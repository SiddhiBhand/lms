
   
@extends('partials.layout')

@section('content')




    <div class="panel" style="">
      <div class="panel-heading">
        <div class="panel-title">Edit Emp</div>
      </div>

    <div class="panel-body" style="background: white;">
      <form class="form-horizontal" action="{{ URL::to('/updateemp')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                {{ csrf_field() }}



                    <div class="form-group">
                    <label class="control-label">Id</label>
                    <input type="text" class="form-control" value="{{$emp->id}}" name="id" placeholder="Id">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Fname</label>
                    <input type="text" class="form-control" value="{{$emp->fname}}" name="fname" placeholder="Fname">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Lname</label>
                    <input type="text" class="form-control" value="{{$emp->lname}}" name="lname" placeholder="Lname">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Email</label>
                    <input type="text" class="form-control" value="{{$emp->email}}" name="email" placeholder="Email">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Address</label>
                    <input type="text" class="form-control" value="{{$emp->address}}" name="address" placeholder="Address">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Gender</label>
                    <input type="text" class="form-control" value="{{$emp->gender}}" name="gender" placeholder="Gender">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Dob</label>
                    <input type="text" class="form-control" value="{{$emp->dob}}" name="dob" placeholder="Dob">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Mobileno</label>
                    <input type="text" class="form-control" value="{{$emp->mobileno}}" name="mobileno" placeholder="Mobileno">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Education</label>
                    <input type="text" class="form-control" value="{{$emp->education}}" name="education" placeholder="Education">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Bloodgrp</label>
                    <input type="text" class="form-control" value="{{$emp->bloodgrp}}" name="bloodgrp" placeholder="Bloodgrp">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Emp_per_name</label>
                    <input type="text" class="form-control" value="{{$emp->emp_per_name}}" name="emp_per_name" placeholder="Emp_per_name">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Emp_per_mob</label>
                    <input type="text" class="form-control" value="{{$emp->emp_per_mob}}" name="emp_per_mob" placeholder="Emp_per_mob">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Status</label>
                    <input type="text" class="form-control" value="{{$emp->status}}" name="status" placeholder="Status">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Roles</label>
                    <input type="text" class="form-control" value="{{$emp->roles}}" name="roles" placeholder="Roles">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Acc_name</label>
                    <input type="text" class="form-control" value="{{$emp->acc_name}}" name="acc_name" placeholder="Acc_name">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Acc_no</label>
                    <input type="text" class="form-control" value="{{$emp->acc_no}}" name="acc_no" placeholder="Acc_no">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Bank_name</label>
                    <input type="text" class="form-control" value="{{$emp->bank_name}}" name="bank_name" placeholder="Bank_name">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Branch</label>
                    <input type="text" class="form-control" value="{{$emp->branch}}" name="branch" placeholder="Branch">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Ifsc_code</label>
                    <input type="text" class="form-control" value="{{$emp->ifsc_code}}" name="ifsc_code" placeholder="Ifsc_code">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Join_date</label>
                    <input type="text" class="form-control" value="{{$emp->join_date}}" name="join_date" placeholder="Join_date">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Pan_no</label>
                    <input type="text" class="form-control" value="{{$emp->pan_no}}" name="pan_no" placeholder="Pan_no">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Adhar_no</label>
                    <input type="text" class="form-control" value="{{$emp->adhar_no}}" name="adhar_no" placeholder="Adhar_no">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Upload_adhar</label>
                    <input type="text" class="form-control" value="{{$emp->upload_adhar}}" name="upload_adhar" placeholder="Upload_adhar">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Upload_pan</label>
                    <input type="text" class="form-control" value="{{$emp->upload_pan}}" name="upload_pan" placeholder="Upload_pan">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Upload_resume</label>
                    <input type="text" class="form-control" value="{{$emp->upload_resume}}" name="upload_resume" placeholder="Upload_resume">
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label">Designation</label>
                    <input type="text" class="form-control" value="{{$emp->designation}}" name="designation" placeholder="Designation">
                    </div>    
                  
 

                          <button type="submit" style="border-radius: 5px;color: white;background: #41b08a;" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button style="border-radius: 5px;color: white;background: #41b08a;" class="btn btn-light">Cancel</button>

          </form>
    </div>


@endsection
