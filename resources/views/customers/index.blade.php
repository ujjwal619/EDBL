@extends('layouts.app-master')

@section('content')
{{-- <!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Excel Development Bank</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body> --}}
@auth
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Excel Development Bank</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="/customers/create"> Create Customers</a>
<a href="/customers/report" class="btn btn-success">Report</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>Client Type</th>
<th>Branch Code</th>
<th>Main Code</th>
<th>Client Code</th>
<th>Customer Name</th>
<th>Customer Number</th>

<th width="200px">Action</th>
</tr>
@foreach ($customers as $customer)
<tr>
<td>{{ $customer->ClientType }}</td>
<td>{{ $customer->BranchCode }}</td>
<td>{{ $customer->MainCode }}</td>
<td>{{ $customer->ClientCode }}</td>
<td>{{ $customer->CustomerName }}</td>
<td>{{ $customer->CusContactNum }}</td>
<td>
    
<form action="{{ route('customers.delete', $customer->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $customers->links() !!}
@endauth
{{-- </body>
</html> --}}
@endsection