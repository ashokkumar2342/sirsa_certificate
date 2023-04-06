
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CERTIFICATE OF PLEDGE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome --> 
  <link rel="stylesheet" href="{{ asset('admin_asset/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('admin_asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin_asset/dist/css/AdminLTE.min.css')}}"> 
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
	<div class="card  card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist"> 
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="true">Register</a>
                  </li> 
                  
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Download</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent"> 
                  <div class="tab-pane fade active show" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                  	<form action="{{ url('register2') }}" method="post" target="_blank" enctype="multipart/form-data"> 
                  	{{csrf_field()}} 
                     <div class="row">
                     	<div class="col-lg-3 form-group">
                     		<label>Name</label>
                        <span class="fa fa-asterisk" style="color:red;"></span>
                     		<input type="text" name="name" class="form-control" maxlength="30" minlength="2" placeholder="Enter Your Name" required> 
                     	</div>
                      <div class="col-lg-3 form-group">
                        <label>Mobile No.</label>
                        <span class="fa fa-asterisk" style="color:red;"></span>
                        <input type="text" name="mobile_no" class="form-control" maxlength="10" minlength="10"  onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Enter Mobile No." required> 
                      </div>
                      <div class="col-lg-3 form-group">
                        <label>Age</label>
                        <span class="fa fa-asterisk" style="color:red;"></span>
                        <input type="text" name="age" class="form-control" maxlength="2" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Enter Your Age" required> 
                      </div>
                      <div class="col-lg-3 form-group">
                        <label>Address</label>
                        <span class="fa fa-asterisk" style="color:red;"></span>
                        <input type="text" name="address" class="form-control" maxlength="30" minlength="3" placeholder="Enter Your Address" required> 
                      </div>
                      <div class="col-lg-12 form-group">
                     <input type="hidden" name="proses_by" id="proses_by" value="0">
                     <table style="border-collapse: collapse; width:100%; height: 130px;" border="1">
                       <tbody>
                         <tr>
                           <td style="width: 50%;">
                            <p style="text-align: center;">I pledge not to use drugs in my life</p>
                            <p style="text-align: center;"><i class="fa fa-thumbs-up" style="font-size:48px;color:#ffc107;"></i></p>
                            <p style="text-align: center;">
                              <input type="submit" class="btn btn-warning" value="Download Certificate" onclick="$('#proses_by').val(1)">
                            </p>
                           </td>
                           <td style="width: 50%;">
                             <p style="text-align: center;">I have successfully defeated addiction problem</p>
                             <p style="text-align: center;"><i class="fa fa-thumbs-up" style="font-size:48px;color:green;"></i></p>
                             <p style="text-align: center;">
                              <input type="submit" class="btn btn-success" value="Download Certificate" onclick="$('#proses_by').val(2)">
                            </p>
                           </td>
                         </tr>
                       </tbody>
                     </table>
                   </div>
                       
                      
                      </div>
                      
                     </form>
                  </div> 
                  <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                    <form action="{{ url('download') }}" method="post" target="_blank">
                  	{{csrf_field()}}
                     	<div class="row">
                     	<div class="col-lg-12 form-group">
                     		<label>Certificate No.</label>
                     		<input type="text" name="certificate_no" class="form-control" maxlength="10" required>  
                     	</div> 
                     	<div class="col-lg-12 form-group"> 
                     		<input type="submit"  class="form-control btn-primary btn" value="Download">  
                     	</div> 
                     	</div>
                     	<div id="ddddd">
                     		
                     	</div>
                     </form>
                  </div>
                  
              </div>
              <!-- /.card -->
            </div> 
</body>
<script src="{{ asset('admin_asset/plugins/jQuery/jquery.min.js') }}"></script>

<!-- Bootstrap 4 -->
<script src="{{ asset('admin_asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('admin_asset/dist/js/adminlte.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

</html>

<!-- <script language="JavaScript">
        Webcam.set({
            width: 250,
            height: 250,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
     
        Webcam.attach( '#my_camera' );
     
        function take_snapshot() {
            Webcam.snap( function(data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
            } );
        }
</script> -->
