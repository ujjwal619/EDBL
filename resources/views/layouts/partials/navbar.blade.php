<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route ('customers.index') }}" class="nav-link px-2 text-white">Home</a></li>
         <li><a href="https://www.edb.com.np/" target="_blank" class="nav-link px-2 text-white">About</a></li>
         <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-2 text-white" href="#" data-bs-toggle="dropdown">Report</a>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/customers/report"> Loan Master List (LML) </a></li>
              <li><a class="dropdown-item" href="#"> Daily Summary Report (DSR) </a></li>
              <li><a class="dropdown-item" href="#"> Consolidating Trial Balance (CTBAB) </a></li>
              <li><a class="dropdown-item" href="#"> Dropdown item 2 &raquo; </a>
                 <ul class="submenu dropdown-menu">
                  <li><a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                    <ul class="submenu dropdown-menu">
                      <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                      <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                  </ul>
                  </li>
               </ul>
              </li>
              </ul>
          </li>
           </ul>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

      <script type="text/javascript">
        //	window.addEventListener("resize", function() {
        //		"use strict"; window.location.reload(); 
        //	});
          document.addEventListener("DOMContentLoaded", function(){
              /////// Prevent closing from click inside dropdown
            document.querySelectorAll('.dropdown-menu').forEach(function(element){
              element.addEventListener('click', function (e) {
                e.stopPropagation();
              });
            })
            // make it as accordion for smaller screens
            if (window.innerWidth < 992) {
              // close all inner dropdowns when parent is closed
              document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
                everydropdown.addEventListener('hidden.bs.dropdown', function () {
                  // after dropdown is hidden, then find all submenus
                    this.querySelectorAll('.submenu').forEach(function(everysubmenu){
                      // hide every submenu as well
                      everysubmenu.style.display = 'none';
                    });
                })
              });
              document.querySelectorAll('.dropdown-menu a').forEach(function(element){
                element.addEventListener('click', function (e) {
            
                    let nextEl = this.nextElementSibling;
                    if(nextEl && nextEl.classList.contains('submenu')) {	
                      // prevent opening link if link needs to open dropdown
                      e.preventDefault();
                      console.log(nextEl);
                      if(nextEl.style.display == 'block'){
                        nextEl.style.display = 'none';
                      } else {
                        nextEl.style.display = 'block';
                      }
                    }
                });
              })
            }
            // end if innerWidth
          }); 
          // DOMContentLoaded  end
        </script>

      @auth
        {{auth()->user()->name}}
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>           