    @extends('layouts.app-master')
    @section('content')
    <div class="container">
        <div class="bg-light p-5 rounded">
            <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
            @auth
                <h4>Dashboard</h4>   
            <a class="btn btn-lg btn-primary" href="https://www.edb.com.np/" target="_blank" role="button">Visit our bank site 
                &raquo;</a>
                <p class="lead"><h3>Welcome to Excel Developmnet Bank Online A/C opening portal.</h3></p>
                    <div class="row">
                            <div class="pull-center mb-2">
                                <div class="bg-primary text-white text-center rounded" style="width:71rem;" >Add Customers</div>
                            </div>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success mb-3 mt-2">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="row g-1 mt-2">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <form name="form1" id="1" action="{{ route('customers.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <strong>Select Client Type:</strong>   
                                    <select id="selectform" class="form-select form-select-md mb-6" name="Clientstyp"
                                        aria-label=".form-select-md-6 example">
                                        
                                        <option selected>Type of Clients</option>
                                        <option value="Indivduals">001 Indivduals</option>
                                        <option value="Corporate">002 Corporate</option>
                                        @error('Clientstyp')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                                        <strong>Branch:</strong>
                                        <input type="text" min="0" id="branch" name="BranchCode"
                                            class="form-control" placeholder="Branch">
                                        @error('BranchCode')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                                        <strong>Main Code:</strong>
                                        <input type="text" min="0" id="Maincode" name="MainCode" class="form-control"
                                            placeholder="Main Code">
                                        @error('MainCode')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                                        <strong>Client Code:</strong>
                                        <input type="number" min="0" name="ClientCode" class="form-control"
                                            placeholder="Client Code">
                                        @error('ClientCode')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row g-1 mt-1">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                        <strong>Customer Name:</strong>
                                        <input type="text" name="cusname" class="form-control" placeholder="Customer Name">
                                        @error('cusname')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                        <strong>Customer Father name:</strong>
                                        <input type="text" name="cusfname" class="form-control"
                                            placeholder="Customer Father name">
                                        @error('cusfname')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                        <strong>Customer Mother name:</strong>
                                        <input type="text" name="cusmname" class="form-control"
                                            placeholder="Customer Mother name">
                                        @error('cusmname')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row g-1 mt-1">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                        <strong>Customer Date of birth:</strong>
                                        <input type="date" name="cusdob" class="form-control"
                                            placeholder="Enter customer Date of birth">
                                        @error('cusdob')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                        <strong>Customer Permanent Address:</strong>
                                        <input type="text" name="cpaddress" class="form-control"
                                            placeholder="Customer Address">
                                        @error('cpaddress')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                        <strong>Customer current Address:</strong>
                                        <input type="text" name="ccaddress" class="form-control"
                                            placeholder="Customer Current Address">
                                        @error('ccaddress')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row g-1 mt-1">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                        <strong>Address as per Citizenship:</strong>
                                        <input type="text" name="addctz" class="form-control"
                                            placeholder="Address as per Citizenship">
                                        @error('addctz')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                                        <strong>Contact Number:</strong>
                                        <input type="number" name="connumber" class="form-control"
                                            placeholder="Contact Number">
                                        @error('connumber')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                                        <strong>Citizenship Number:</strong>
                                        <input type="number" name="ctznumber" class="form-control"
                                            placeholder="Citizenship Number">
                                        @error('ctznumber')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                        <strong>Citizenship issues District:</strong>
                                        <input type="text" name="ctzissdis" class="form-control"
                                            placeholder="Citizenship issues District:">
                                        @error('ctzissdis')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row g-1 mt-1">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <strong>Photo Upload:</strong>
                                        <label for="Image" name="CusImage" class="form-label">Upload file limit
                                            2MB</label>
                                        <input class="form-control" name="CusImage" type="file" id="CusImage" onchange="preview()">
                                        <!--  <button onclick="clearImage()" class="btn btn-primary mt-3">Clear Image</button>  -->
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
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <strong>A/C Opening forms Upload:</strong>
                                        <label for="formFileMultiple" name="CusAcfile"class="form-label">Upload file limit
                                            2MB</label>
                                        <input class="form-control" type="file" id="formFileMultiple" multiple />
                                    </div>
                                </div>
                    <div class="row g-1">
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
                    <div class="row g-1 mt-1">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                <strong>Company Registration No.</strong>
                                <input type="number" name="comregno" class="form-control" min="0"
                                    placeholder="Company Registration No.">
                                @error('comregno')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                            <div class="form-group">
                                <strong>Pan No.</strong>
                                <input type="number" name="panno" class="form-control" min="0"
                                    placeholder="Pan No.">
                                @error('panno')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                                <strong>Firm Address:</strong>
                                <input type="text" name="firmadd" class="form-control" placeholder="Firm Address">
                                @error('firmadd')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                <strong>Major Promoters / Proprietors</strong>
                                <input type="text" name="majorpro2" class="form-control"
                                    placeholder="Enter Promoters / Proprietors">
                                @error('majorpro2')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                    </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                    <strong>Is Vat</strong>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            No
                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary ml-3">Submit</button>
                            <a class="btn btn-primary ml-3" href="{{ route('customers.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        @endauth
        @guest
            <h1>Homepage</h1>
            <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
        </div>
    @endsection
