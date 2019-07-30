
   
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
        Client Detail
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="/clientall"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Clients</li>
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
<li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false" id="tb2"><h5>Rating</h5></a></li>
<li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false"  id="tb3"><h5>Details</h5></a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="tab_1">

<div class="box-body">
          
 <form class="form-horizontal" action="{{ URL::to('/registerclient')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
 {{ csrf_field() }}



<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Company name</label><r style="color: red">*</r>
<input type="text" class="form-control" name="cname" placeholder="Cname">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Address</label><r style="color: red">*</r>
 <input type="text" class="form-control" name="address" placeholder="Address">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Constitution</label><r style="color: red">*</r>
<input type="text" class="form-control" name="constitution" placeholder="Constitution">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>City</label><r style="color: red">*</r>
<input type="text" class="form-control" name="city" placeholder="City">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Contperson</label><r style="color: red">*</r>
<input type="text" class="form-control" name="contperson" placeholder="Contperson">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Email</label><r style="color: red">*</r>
<input type="text" class="form-control" name="email" placeholder="Email">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Active Status:</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="il" placeholder="status" disabled>
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
 <label>Bank</label><r style="color: red">*</r>
<input type="text" class="form-control" name="bank" placeholder="Bank">
<br></div>

<div class="form-group col-lg-3">
<label>Total exposure(Bank Limit)</label><r style="color: red">*</r>
<input type="text" class="form-control" name="texposure" placeholder="Texposure">
<br></div>

<div class="form-group col-lg-3">
<label>Rated Exposure</label><r style="color: red">*</r>
<input type="text" class="form-control" name="Ratedexpo" placeholder="Ratedexpo">
<br></div>

<div class="form-group col-lg-3">
<label>Rating History</label><r style="color: red">*</r>
<input type="text" class="form-control" name="ratinghist" placeholder="Ratinghist">
<br></div>

<div class="form-group col-lg-3">
 <label>Nextfolloup</label><r style="color: red">*</r>
<input type="text" class="form-control" name="nextfolloup" placeholder="Nextfolloup">
<br></div><br>

<div class="form-group col-lg-3" style="padding-top: 18px">
<a href="/clientall"><input class="btn btn-info" name='cancel' value="Cancel"></a>
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
<label>Industrytype</label>
<input type="text" class="form-control" name="industrytype" placeholder="Industrytype">
<br></div>

<div class="form-group col-lg-3">
<label>Purpose</label>
<input type="text" class="form-control" name="purpose" placeholder="Purpose">
<br></div>

<div class="form-group col-lg-3">
<label>Status</label>
<input type="text" class="form-control" name="status" placeholder="Status">
<br></div><br>

<div class=" col-lg-3" style="padding-left: 26px;">
<input type='submit' class="btn btn-success " name='submit' value="Create"  >
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
