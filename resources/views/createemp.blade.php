
   
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
        Employee Detail
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="/empall"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Employees</li>
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
          
 <form class="form-horizontal" action="{{ URL::to('/registeremp')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
 {{ csrf_field() }}



<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>First Name</label><r style="color: red">*</r>
<input type="text" class="form-control" name="fname" placeholder="First Name">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Last Name</label><r style="color: red">*</r>
 <input type="text" class="form-control" name="lname" placeholder="Last Name">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Email</label><r style="color: red">*</r>
<input type="text" class="form-control" name="email" placeholder="Enter email">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Address</label><r style="color: red">*</r>
<input type="text" class="form-control" name="address" placeholder="Address">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Gender</label><r style="color: red">*</r>
<input type="text" class="form-control" name="gender" placeholder="Gender">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>DOB</label><r style="color: red">*</r>
<input type="text" class="form-control" name="dob" placeholder="DOB">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Mobile</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="mobileno" placeholder="Mobile Number">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Education</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="education" placeholder="Education">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Blood Group</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="bloodgrp" placeholder="Blood Group">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Emergency person name</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="emp_per_name" placeholder="Emergency person name">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Emergency person mobile no.</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="emp_per_mob" placeholder="Emergency person mobile no.">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Status</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="status" placeholder="Status">
<br></div>


<div class="form-group col-lg-3" style="padding-top: 63px">
<a href="/clientall"><input class="btn btn-info" name='cancel' value="Cancel"></a>
</div>

<div class="form-group col-lg-3" style="padding-top: 63px">
<input class="btn btn-success " onclick="document.getElementById('tb2').click()"  name='Next' value="Next">
</div>

</div>
</div>
<!-- /.tab-pane -->
<div class="tab-pane " id="tab_2">
<div class="box-body">
     

<div class="form-group col-lg-3">
 <label>Account Name</label><r style="color: red">*</r>
<input type="text" class="form-control" name="acc_name" placeholder="Bank">
<br></div>

<div class="form-group col-lg-3">
<label>Account No.</label><r style="color: red">*</r>
<input type="text" class="form-control" name="acc_no" placeholder="Account No.">
<br></div>

<div class="form-group col-lg-3">
<label>Bank Name</label><r style="color: red">*</r>
<input type="text" class="form-control" name="bank_name" placeholder="Bank Name">
<br></div>

<div class="form-group col-lg-3">
<label>Branch</label><r style="color: red">*</r>
<input type="text" class="form-control" name="branch" placeholder="Branch">
<br></div>

<div class="form-group col-lg-3">
 <label>IFSC Code</label><r style="color: red">*</r>
<input type="text" class="form-control" name="ifsc_code" placeholder="IFSC Code">
<br></div><br>

<div class="form-group col-lg-3" style="padding-top: 18px">
<a href="/empall"><input class="btn btn-info" name='cancel' value="Cancel"></a>
</div>
<div class="form-group col-lg-3" style="padding-top: 18px">
<input class="btn btn-success" onclick="document.getElementById('tb3').click()" name='Next' value="Next">
<br>
</div>

 </div>
</div>


<!-- /.tab-pane -->
<div class="tab-pane " id="tab_3">
<div class="box-body">           

<div class="form-group col-lg-3">
<label>Join Date</label>
<input type="text" class="form-control" name="join_date" placeholder="Join Date">
<br></div>

<div class="form-group col-lg-3">
<label>Pan No.</label>
<input type="text" class="form-control" name="pan_no" placeholder="Pan No.">
<br></div>

<div class="form-group col-lg-3">
<label>Adhar No.</label>
<input type="text" class="form-control" name="adhar_no" placeholder="Adhar No.">
<br></div>

<div class="form-group col-lg-3">
<label>Upload Adhar</label>
<input type="text" class="form-control" name="upload_adhar" placeholder="Upload Adhar">
<br></div>

<div class="form-group col-lg-3">
<label>Upload Pan</label>
<input type="text" class="form-control" name="upload_pan" placeholder="Upload Pan">
<br></div>

<div class="form-group col-lg-3">
<label>Upload Resume</label>
<input type="text" class="form-control" name="upload_resume" placeholder="Adhar No.">
<br></div>

<div class="form-group col-lg-3" style="padding-top: 18px">
<a href="/empall"><input class="btn btn-info" name='cancel' value="Cancel"></a>
</div>
<div class="form-group col-lg-3" style="padding-top: 18px">
<input class="btn btn-success" onclick="document.getElementById('tb4').click()" name='Next' value="Next">
<br>
</div>

</div>
</div>

<!-- /.tab-pane -->
<div class="tab-pane " id="tab_4">
<div class="box-body">

<div class="form-group col-lg-3">
<label>Designation</label>
<input type="text" class="form-control" name="designation" placeholder="Designation">
<br></div>

<div class=" col-lg-3" style="padding-left: 26px;">
<input type='submit' class="btn btn-success " name='submit' value="Create">
</div>

</form>
</div>
</div>

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
