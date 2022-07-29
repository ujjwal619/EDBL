@extends('layouts.app-master')
@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-12">
                    <p class="lead"><h1>Welcome to Excel Developmnet Bank Online A/C opening portal.</h1></p>
                    <h2>Edit Customers</h2>
                </div>
                @if (session('status'))
                    <div class="alert alert-success mb-1 mt-1">
                        {{ session('status') }}
                    </div>
            </div>
                @endif
                <div class="bg-light p-2 rounded">
                    <div class="row g-1">
                        <div class="col-3">
                            <form name="form1" a href="{{ route('customers.update', $customer->id) }}" method="PUT"
                                enctype="multipart/form-data">
                                @csrf
                                {{-- @method('PUT') --}}

                                <strong>Select Client Type:</strong>
                                <select id="selectform" class="form-select form-select-md mb-6"
                                    aria-label=".form-select-md-6 example">
                                    <option value="1">Select</option>
                                    <option value="1">001 Indivduals</option>
                                    <option value="2">002 Corporate</option>
                                </select>
                        </div>
                        <div class="col-2">
                            <strong>Branch:</strong>
                            <input type="text" readonly min="0" id="branch" value="{{ $customer->BranchCode }}"
                                name="_method" class="form-control">
                            @error('name')
                                <div class="alert alert-danger mt-1 mb-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                            <div class="col-4">
                                <strong>Main Code:</strong>
                                <input type="text" min="0" id="Maincode" name="MainCode" class="form-control"
                                    value="{{ $customer->MainCode }}">
                                @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            <div class="col-3">
                                <strong>Client Code:</strong>
                                <input type="number" min="0" name="ClientCode" class="form-control"
                                    value="{{ $customer->ClientCode }}">
                                @error('ClientCode')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    </div>
                    <div class="row g-1 mt-1" >
                    <div class="col-4">
                        <strong>Customer Name:</strong>
                        <input type="text" name="cusname" class="form-control" value="{{ $customer->CustomerName }}">
                        @error('cusname')
                            <div class="alert alert-danger mt-1 mb-1">
                                {{ $message }}</div>
                        @enderror
                </div>
                    <div class="col-4">
                        <strong>Customer Father name:</strong>
                        <input type="text" name="cusfname" class="form-control" value="{{ $customer->CustomerFName }}">
                        @error('cusfname')
                            <div class="alert alert-danger mt-1 mb-1">
                                {{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="col-4">
                        <strong>Customer Mother name:</strong>
                        <input type="text" name="cusmname" class="form-control" value="{{ $customer->CustomerMName }}">
                        @error('cusmname')
                            <div class="alert alert-danger mt-1 mb-1">
                                {{ $message }}</div>
                        @enderror
                    </div>
                </div>
            <div class="row g-1 mt-1" >
                    <div class="col-4">
                        <strong>Customer Date of birth:</strong>
                        <input type="date" name="cusdob" class="form-control" value="{{ $customer->CusDOB }}">
                        @error('cusdob')
                            <div class="alert alert-danger mt-1 mb-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                 <div class="col-4">
                        <strong>Customer Permanent Address:</strong>
                        <input type="text" name="cpaddress" class="form-control" value="{{ $customer->CustomerPAdd }}">
                        @error('cpaddress')
                            <div class="alert alert-danger mt-1 mb-1">
                                {{ $message }}</div>
                        @enderror
                    </div>
                 <div class="col-4">
                        <strong>Customer current Address:</strong>
                        <input type="text" name="ccaddress" class="form-control" value="{{ $customer->CustomerCAdd }}">
                        @error('ccaddress')
                            <div class="alert alert-danger mt-1 mb-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-2 mt-1" >
                    <div class="col-4">
                        <strong>Address as per Citizenship:</strong>
                        <input type="text" name="addctz" class="form-control" value="{{ $customer->Addressofctzshp }}">
                        @error('addctz')
                            <div class="alert alert-danger mt-1 mb-1">
                                {{ $message }}</div>
                        @enderror
                    </div>
                <div class="col-4">
                        <strong>Contact Number:</strong>
                        <input type="number" name="connumber" class="form-control" value="{{ $customer->CusContactNum }}">
                        @error('connumber')
                            <div class="alert alert-danger mt-1 mb-1">
                                {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-4">
                        <strong>Citizenship Number:</strong>
                        <input type="number" name="ctznumber" class="form-control"
                            value="{{ $customer->CusCtnshpNum }}">
                        @error('ctznumber')
                            <div class="alert alert-danger mt-1 mb-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row g-2 mt-1" >
                <div class="col-4">
                        <strong>Citizenship issues District:</strong>
                        <input type="text" name="ctzissdis" class="form-control"
                            value="{{ $customer->CusCtzshpDistrict }}">
                        @error('ctzissdis')
                            <div class="alert alert-danger mt-1 mb-1">
                                {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row g-2 mt-1">
                    <div class="col-6">
                            <strong>Photo Upload:</strong>
                            <label for="Image" readonly class="form-label">Upload file limit 2MB</label>
                            <input class="form-control" type="file" id="formFile" onchange="preview()">
                            {{-- <button onclick="clearImage()" class="btn btn-primary mt-3">Clear Image</button> --}}
                            @php
                                //echo App\Http\Controllers\GetAcInfo::customerdetails();
                            @endphp
                            <img id="frame" src="" class="img-fluid" />

                            <script>
                                axios.get('/user', {
                                        params: {
                                            branch: 12345,
                                            main_code: 334,
                                        }
                                    })
                                    .then(function(response) {
                                        // things to do with response
                                        // fill rest form with this data
                                    })
                                    .catch(function(error) {
                                        // handle error
                                    })

                                console.log(2331111);
                                const form = document.getElementById('Maincode');
                                form.addEventListener('focusout', (event) => {
                                    event.target.style.background = 'purple';
                                    // event.target.tagname;

                                    // axios.get('/call-post', {params: {'branch_name': 'itahari'}})
                                    //   .then(function (response) {
                                    //     handle success
                                    //   js code for putting name in field
                                    //   })
                                });

                                function preview() {
                                    frame.src = URL.createObjectURL(event.target.files[0]);
                                }

                                function clearImage() {
                                    document.getElementById('formFile').value = null;
                                    frame.src = "";
                                }
                            </script>
                        </div>
                    <div class="col-6">
                            <strong>A/C Opening forms Upload:</strong>
                            <label for="formFileMultiple" class="form-label">Upload file limit 2MB</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple />
                        </div>
                    </div>
                            <div class="row g-2 mt-1">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                        <strong>Select Legal Status:</strong> 
                                            <select id="selectform" class="form-select form-select-md mb-6" required name="legalstatus"
                                                aria-label=".form-select-md-6 example">
                                                <option selected>Legal Status</option>
                                                <option value="Indivduals">Pvt. Ltd</option>
                                                <option value="Corporate">Public limited</option>
                                                <option value="Corporate">Sole propritership</option>
                                                <option value="Indivduals">Partnership</option>
                                                <option value="Corporate">Government</option>
                                                <option value="Corporate">Semi-Government</option>
                                                <option value="Corporate">Others</option>
                                                @error('legalstatus')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                            </select>
                                        </div>  
                                </div>           
                                <div class="row g-2 mt-1">
                                    <div class ="col-3">
                                    <strong>Company Registration No.</strong>
                                    <input type="number" name="comregno" class="form-control" min="0"
                                        placeholder="Company Registration No.">
                                    @error('comregno')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class ="col-2">
                                    <strong>Pan No.</strong>
                                    <input type="number" name="panno" class="form-control" min="0"
                                        placeholder="Pan No.">
                                    @error('panno')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            <div class ="col-3">
                                    <strong>Major Promoters / Proprietors</strong>
                                    <input type="text" name="majorpro2" class="form-control"
                                        placeholder="Enter Promoters / Proprietors">
                                    @error('majorpro2')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class ="col-4">
                                        <strong>Firm Address:</strong>
                                        <input type="text" name="firmadd" class="form-control" placeholder="Firm Address">
                                        @error('firmadd')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                        </div>
                        <div class="row g-2 mt-1">
                            <div class ="col-6">
                            <strong>Is Vat</strong>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                    checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    No
                                </label>
                            </div>
                            </div>
                            </div>
                        <div class="row g-2 mt-1">
                                <div class="d-flex justify-content-left">
                                    <div class ="col-4">
                                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                                    <a class="btn btn-primary ml-3" href="{{ route('customers.index') }}">
                                        Back</a>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endauth
        @guest
            <h1>Homepage</h1>
            <p class="lead">Your viewing the home page. Please login to view
                the restricted data.</p>
        @endguest
    </div>
    </div>
@endsection
