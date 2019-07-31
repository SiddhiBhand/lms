
   
@extends("partials.layout")

@section("content")


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employee Update
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="/empall"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Employee</li>
      </ol>
    </section>

    <!-- Main content -->

<!--    <div class="content-wrapper">
<section class="content-header"> -->


<section class="content" style="overflow-x: scroll;">
<div class="emp-personal-info-view">
<div class="nav-tabs-custom">
<ul class="nav nav-tabs">
<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true" id="tb1"><h5>Basic Details</h5></a></li>
<li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false" id="tb2"><h5>Bank Details</h5></a></li>
<li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false"  id="tb3"><h5>Job Details</h5></a></li>
<li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false"  id="tb4"><h5>Profile</h5></a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="tab_1">

<div class="box-body">
          
  <form class="form-horizontal" action="{{ URL::to('/updateemp')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
 {{ csrf_field() }}

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>First Name</label><r style="color: red">*</r>
<input type="text" class="form-control" name="fname" placeholder="First Name" value="{{$emp->fname}}">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Last Name</label><r style="color: red">*</r>
 <input type="text" class="form-control" name="lname" placeholder="Last Name" value="{{$emp->lname}}">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Email</label><r style="color: red">*</r>
<input type="text" class="form-control" name="email" placeholder="Enter email" value="{{$emp->email}}">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Address</label><r style="color: red">*</r>
<input type="text" class="form-control" name="address" placeholder="Address" value="{{$emp->address}}">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Gender</label><r style="color: red">*</r>
<input type="text" class="form-control" name="gender" placeholder="Gender" value="{{$emp->gender}}">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>DOB</label><r style="color: red">*</r>
<input type="text" class="form-control" name="dob" placeholder="DOB" value="{{$emp->dob}}">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Mobile</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="mobileno" placeholder="Mobile Number" value="{{$emp->mobileno}}">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Education</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="education" placeholder="Education" value="{{$emp->education}}">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Blood Group</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="bloodgrp" placeholder="Blood Group" value="{{$emp->bloodgrp}}">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Emergency person name</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="emp_per_name" placeholder="Emergency person name" value="{{$emp->emp_per_name}}">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Emergency person mobile no.</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="emp_per_mob" placeholder="Emergency person mobile no." value="{{$emp->emp_per_mob}}">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Status</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="status" placeholder="Status" value="{{$emp->status}}">
<br></div>



<!-- <div class="form-group col-lg-3" style="padding-top: 18px">
<a href="/clientall"><input class="btn btn-info" name='cancel' value="Cancel"></a>
</div>

<div class="form-group col-lg-3" style="padding-top: 18px">
<input class="btn btn-success " onclick="document.getElementById('tb2').click()"  name='Next' value="Next">
</div> -->

</div>
</div>
<!-- /.tab-pane -->
<div class="tab-pane " id="tab_2">
<div class="box-body">
     

<div class="form-group col-lg-3">
 <label>Account Name</label><r style="color: red">*</r>
<input type="text" class="form-control" name="acc_name" placeholder="Bank" value="{{$emp->acc_name}}">
<br></div>

<div class="form-group col-lg-3">
<label>Account No.</label><r style="color: red">*</r>
<input type="text" class="form-control" name="acc_no" placeholder="Account No." value="{{$emp->acc_no}}">
<br></div>

<div class="form-group col-lg-3">
<label>Bank Name</label><r style="color: red">*</r>
<input type="text" class="form-control" name="bank_name" placeholder="Bank Name" value="{{$emp->bank_name}}">
<br></div>

<div class="form-group col-lg-3">
<label>Branch</label><r style="color: red">*</r>
<input type="text" class="form-control" name="branch" placeholder="Branch" value="{{$emp->branch}}">
<br></div>

<div class="form-group col-lg-3">
 <label>IFSC Code</label><r style="color: red">*</r>
<input type="text" class="form-control" name="ifsc_code" placeholder="IFSC Code" value="{{$emp->ifsc_code}}">
<br></div><br>

 </div>
</div>


<!-- /.tab-pane -->
<div class="tab-pane " id="tab_3">
<div class="box-body">           

<div class="form-group col-lg-3">
<label>Join Date</label>
<input type="text" class="form-control" name="join_date" placeholder="Join Date" value="{{$emp->join_date}}">
<br></div>

<div class="form-group col-lg-3">
<label>Pan No.</label>
<input type="text" class="form-control" name="pan_no" placeholder="Pan No." value="{{$emp->pan_no}}">
<br></div>

<div class="form-group col-lg-3">
<label>Adhar No.</label>
<input type="text" class="form-control" name="adhar_no" placeholder="Adhar No." value="{{$emp->adhar_no}}">
<br></div>

<div class="form-group col-lg-3">
<label>Upload Adhar</label>
<input type="text" class="form-control" name="upload_adhar" placeholder="Upload Adhar" value="{{$emp->upload_adhar}}">
<br></div>

<div class="form-group col-lg-3">
<label>Upload Pan</label>
<input type="text" class="form-control" name="upload_pan" placeholder="Upload Pan" value="{{$emp->upload_pan}}">
<br></div>

<div class="form-group col-lg-3">
<label>Upload Resume</label>
<input type="text" class="form-control" name="upload_resume" placeholder="Adhar No." value="{{$emp->upload_resume}}">
<br></div>


 </div>
</div>
<input type="hidden" value="{{$emp->id}}" name="id">


<div class="tab-pane " id="tab_4">
<div class="box-body">

<div class="form-group col-lg-3">
<label>Designation</label>
<input type="text" class="form-control" name="designation" placeholder="Designation" value="{{$emp->designation}}">
<br></div>












<!-- <div class=" col-lg-3" style="padding-left: 26px;">
<input type='submit' class="btn btn-success " name='submit' value="Submit"  >
</div> -->

<!-- <div class=" col-lg-3" style="padding-left: 26px;">
</div> -->
<div class="form-group col-lg-3" style="padding-top: 18px  width: 103px"  >
<a href=""><input type='submit' class="btn btn-success" name='Submit' value="Submit" ></a>
<br>
</div>

<div class="form-group col-lg-3" style="padding-top: 18px">
<a href="/empall"><input type='submit' class="btn btn-success" name='Cancel' value="Cancel"></a>
<br>
</div>

</div>
</div>
</form>


</div>
</div>
</div>
</section>


</div>
</body>
</html>
<script type="text/javascript">
    function check(){
        document.getElementById('tb2').click();
    }
</script>

@endsection
