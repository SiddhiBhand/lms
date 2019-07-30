
   
@extends('partials.layout')

@section("content")
<div class="content-wrapper">
    <div class="panel" style="">
      <div class="panel-heading">
        <div class="panel-title">Edit Client</div>
      </div>

    <div class="panel-body" style="background: white;">
      <form class="form-horizontal" method="POST" autocomplete="off" enctype="multipart/form-data">
                {{ csrf_field() }}



                    <div class="form-group">
                    <label class="control-label"><b>Cname</b></label>
                    <p>{{$client->cname}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Constitution</b></label>
                    <p>{{$client->constitution}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Address</b></label>
                    <p>{{$client->address}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>City</b></label>
                    <p>{{$client->city}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Contperson</b></label>
                    <p>{{$client->contperson}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Email</b></label>
                    <p>{{$client->email}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Bank</b></label>
                    <p>{{$client->bank}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Texposure</b></label>
                    <p>{{$client->texposure}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Ratedexpo</b></label>
                    <p>{{$client->Ratedexpo}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Ratinghist</b></label>
                    <p>{{$client->ratinghist}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Nextfolloup</b></label>
                    <p>{{$client->nextfolloup}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Industrytype</b></label>
                    <p>{{$client->industrytype}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Purpose</b></label>
                    <p>{{$client->purpose}}"</p>
                    </div>    
                

                    <div class="form-group">
                    <label class="control-label"><b>Status</b></label>
                    <p>{{$client->status}}"</p>
                    </div>    
                  
 

                          <button type="submit" style="border-radius: 5px;color: white;background: #41b08a;" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button style="border-radius: 5px;color: white;background: #41b08a;" class="btn btn-light">Cancel</button>

          </form>
    </div>
</div>
</div>

  <!-- /.content-wrapper -->
<!--   <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer> -->


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

@endsection
