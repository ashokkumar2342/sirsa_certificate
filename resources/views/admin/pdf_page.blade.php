
 <!DOCTYPE html>
<html>
<head>
	<title>Certificate</title>
</head>
<style type="text/css">
	@page{margin:0;}
@php
$backgroundImg =storage_path('app/background/PLEDGE-1.jpg');
@endphp
	@page first{
		background-image: url('{{ $backgroundImg }}');
       	background-repeat:no-repeat;
       	margin-top:0px;
       	margin-bottom:0px;
       	background-image-resize: 6;
   	}
	

div.first{
	page:first;
} 
img {
  border: 2px solid #fd7e14;
}
</style>
<body>
	
	<div class="first">
		<div style="padding-top: 412px;margin-left:180px;color:#212529;"><b>{{$rs_user->name}}</b></div>		
		<div style="padding-top: 185px;margin-left:208px;color:#212529;font-size: 10px"><b>{{$rs_user->id}}</b></div>		
		<div style="padding-top: -18px;margin-left:288px;color:#212529;"><b>{{date('d-m-Y',strtotime($rs_user->date))}}</b></div>		
	</div>
	
	
</body>
</html>