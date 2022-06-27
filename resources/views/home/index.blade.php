@extends('layouts.app-master')

@section('content')
 <div class="bg-light p-5 rounded">
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Welcome to Excel Developmnet Bank Online Account opening portal.</p>
        <a class="btn btn-lg btn-primary" href="https://www.edb.com.np/" target="_blank" role="button">Welcome to Excel bank &raquo;</a>
      <div class="container mt-2">
<div class="row">
  <div class="col-lg-6 margin-tb">
      <div class="pull-left mb-2">
         <h2>Add Customers</h2>
     </div>
   </div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form name="form1" id="dropdownMenuButton" action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<div class="row">
  <div class="dropdown show">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Type of Clients
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">001 Indivduals</a>
      <a class="dropdown-item" href="#">002 Corporate </a>
    </div>
  </div>
  <script>
    document.addEventListener('click', function(event) {
      let id = event.target.dataset.toggleId;
      if (!id) return;
      let elem = document.getElementById(id);
      elem.hidden = !elem.hidden;
    });
  </script>
<form name="form2" id="dropdownMenuButton" action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
  <div class="dropdown show">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Type
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Pvt. Ltd</a>
      <a class="dropdown-item" href="#">Public limited</a>
      <a class="dropdown-item" href="#">Sole propritership</a>
      <a class="dropdown-item" href="#">Partnership</a>
      <a class="dropdown-item" href="#">Government</a>
      <a class="dropdown-item" href="#">Semi-Government</a>
      <a class="dropdown-item" href="#">Others</a>
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
    <div class="form-group">
         <strong>Main Code:</strong>
         <input type="number" min="0" name="Maincode" class="form-control" placeholder="Main Code">
           @error('name')
             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
           @enderror
     </div>
</div>



  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
    <div class="form-group">
         <strong>Branch:</strong>
         <input type="number" min="0" name="branch" class="form-control" placeholder="Branch">
           @error('name')
             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
           @enderror
    </div>
  </div>
  
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
      <div class="form-group">
           <strong>Main Code:</strong>
           <input type="number" min="0" name="Maincode" class="form-control" placeholder="Main Code">
             @error('name')
               <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
             @enderror
       </div>
  </div>
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <div class="form-group">
             <strong>Client Code:</strong>
             <input type="number" min="0" name="clientcode" class="form-control" placeholder="Client Code">
               @error('name')
                 <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
         </div>
       </div>
 </div>
</div>
<div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
     <div class="form-group">
          <strong>Customer Name:</strong>
          <input type="text" name="name" class="form-control" placeholder="Customer Name">
            @error('name')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
      </div>
  </div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
  <div class="form-group">
    <strong>Customer Father name:</strong>
     <input type="text" name="fname" class="form-control" placeholder="Customer Father name">
      @error('fname')
      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
      @enderror
   </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
  <div class="form-group">
  <strong>Customer Mother name:</strong>
  <input type="text" name="mname" class="form-control" placeholder="Customer Mother name">
  @error('mname')
  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
  @enderror
  </div>
  </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
    <div class="form-group">
    <strong>Customer Date of birth:</strong>
    <input type="date" name="dob" class="form-control" placeholder="Enter customer Date of birth">
    @error('dob')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
<div class="form-group"> 
<strong>Customer Permanent Address:</strong>
<input type="text" name="cpaddress" class="form-control" placeholder="Customer Address">
@error('cpaddress')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
  <div class="form-group"> 
  <strong>Customer current Address:</strong>
  <input type="text" name="ccaddress" class="form-control" placeholder="Customer Current Address">
  @error('ccaddress')
  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
  @enderror
  </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
    <div class="form-group"> 
    <strong>Address as per Citizenship:</strong>
    <input type="text" name="addctz" class="form-control" placeholder="Address as per Citizenship">
    @error('addctz')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
      <div class="form-group"> 
      <strong>Contact Number:</strong>
      <input type="number" name="connumber" class="form-control" placeholder="Contact Number">
      @error('connumber')
      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
      @enderror
      </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <div class="form-group"> 
        <strong>Citizenship Number:</strong>
        <input type="number" name="ctznumber" class="form-control" placeholder="Citizenship Number">
        @error('ctznumber')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
          <div class="form-group"> 
          <strong>Citizenship issues District:</strong>
          <input type="text" name="ctzissdis" class="form-control" placeholder="Citizenship issues District:">
          @error('ctzissdis')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
          </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
              <div class="form-group"> 
              <strong>Photo Upload:</strong>
                <label for="Image" class="form-label">Upload file limit 2MB</label>
                <input class="form-control" type="file" id="formFile" onchange="preview()">
              <!--  <button onclick="clearImage()" class="btn btn-primary mt-3">Clear Image</button> -->
            
          
            <img id="frame" src="" class="img-fluid" />
        <script>
            function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
            function clearImage() {
                document.getElementById('formFile').value = null;
                frame.src = "";
            }
        </script>
          </div>
        </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <strong>A/C Opening forms Upload:</strong>
          <label for="formFileMultiple" class="form-label">Upload file limit 2MB</label>
          <input class="form-control form-control-sm" type="file" id="formFileMultiple" multiple />
        </div>

        <div class="row">
          <div class="form-group"> 
            <div class="d-flex justify-content-center">   
              <button type="submit" class="btn btn-primary">Submit</button>
                 <a class="btn btn-primary" href="{{ route('companies.index') }}"> Back</a>
              </div>
          </div>  
         
</form>
</div>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection