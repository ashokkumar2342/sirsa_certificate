
<!DOCTYPE html>
<html>
<head>
	<title>Certificate</title>
</head>
<style type="text/css">
@page{margin:0;}
@php
if ($proses_by==1) {
	$backgroundImg =storage_path('app/background/PLEDGE-3.jpg');
}else{
	$backgroundImg =storage_path('app/background/PLEDGE-2.jpg');	
}

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

</style>
<body>

	<div class="first">
		@if($proses_by==1)
			<div style="padding-top: 419px;margin-left:248px">
				<table style="width:100%">
					<tr>
						<td style="width:25%;"><b>{{$rs_user->name}}</b></td>
						<td style="width:15%;"><b>{{$rs_user->age}}</b></td>
						<td style="width:60%;"><b>{{$rs_user->address}} ({{$rs_user->mobile_no}})</b></td>
					</tr>
				</table>
			</div>
			<div style="padding-top: 158px;margin-left:248px">
				<table style="width:100%">
					<tr>
						<td><b>{{$rs_user->id}}</b></td>
					</tr>
				</table>
			</div>
			<div style="padding-top: 24px;margin-left:248px">
				<table style="width:100%">
					<tr>
						<td><b>{{date('d-m-Y',strtotime($rs_user->date))}}</b></td>
					</tr>
				</table>
			</div>
		@else
		<div style="padding-top: 419px;margin-left:200px">
			<table style="width:100%">
				<tr>
					<td style="width:23%;"><b>{{$rs_user->name}}</b></td>
					<td style="width:10%;"><b>{{$rs_user->age}}</b></td>
					<td style="width:67%;"><b>{{$rs_user->address}} ({{$rs_user->mobile_no}})</b></td>
				</tr>
			</table>
		</div>
		<div style="padding-top: 150px;margin-left:248px">
			<table style="width:100%">
				<tr>
					<td><b>{{$rs_user->id}}</b></td>
				</tr>
			</table>
		</div>
		<div style="padding-top: 24px;margin-left:248px">
			<table style="width:100%">
				<tr>
					<td><b>{{date('d-m-Y',strtotime($rs_user->date))}}</b></td>
				</tr>
			</table>
		</div>
		@endif
	</div>


</body>
</html>