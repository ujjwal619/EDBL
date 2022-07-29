{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Excel Development Bank</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>

<body> --}}
@extends('layouts.app-master')
@section('content')
@auth

<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Excel Development Bank Reporting Sytem </h2>
</div>
<div class="pull-right mb-2">
    <a  href="{{ route('customers.index') }}" class="btn btn-outline-light me-2">Back</a>
</div>
</div>
</div>

<table class="table table-bordered">
<tr>
<th>S.No</th>
<th>Branch Code</th>
<th>AT</th>
<th>AcTypeDesc</th>
<th>Main Code</th>
<th>Name</th>
<th>Province</th>
<th>District Code</th>
<th>District Name</th>
<th>Local_Body</th>
<th>Address</th>
<th>Contact No</th>
<th>Client_Obligor</th>
<th>Master_Obligior</th>
<th>OpenDate</th>
<th>MatDate</th>
<th>Int%</th>
<th width="280px">Action</th>
</tr>
</table>
<a class="btn btn-primary ml-3" href="{{ route('customers.index') }}"> Back</a>
@endauth
{{-- </body>
</html> --}}
@endsection

