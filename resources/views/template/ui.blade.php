<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>

    

    <!-- container-fluid for contents-->
    <!-- vh-100 is for full height -->
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-2">
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="height:100%">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                      <span class="fs-4">Sidebar</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                      <li class="nav-item">
                        <a href="{{ route('home.index') }}" class="nav-link active" aria-current="page">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                          Home
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('login') }}" class="nav-link text-white">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                          Dashboard
                        </a>
                      </li>
                      <li>
                        <a href="#" class="nav-link text-white">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                          Orders
                        </a>
                      </li>
                      <li>
                        <a href="#" class="nav-link text-white">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                          Products
                        </a>
                      </li>
                      <li>
                        <a href="#" class="nav-link text-white">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                          Customers
                        </a>
                      </li>
                    </ul>
                    {{-- <hr> --}}
                    {{-- <div class="dropdown">
                      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>mdo</strong>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                      </ul>
                    </div> --}}
                  </div>
            </div>
            <div class="col-lg-10 p-4">
                @yield('content')
            </div>
        </div>
    </div>



    <footer>
        <div class="container-fluid bg-dark text-white">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="flash_error" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-danger text-white">
            <strong class="me-auto">Error</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            {{ Session::get('flash_error') }}
          </div>
        </div>
      </div>

      <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="flash_success" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-success text-white">
            <strong class="me-auto">Success</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            {{ Session::get('flash_success') }}
          </div>
        </div>
      </div>

      <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="flash_message" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-info text-dark">
            <strong class="me-auto">Information</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            {{ Session::get('flash_message') }}
          </div>
        </div>
      </div>
      <script type="text/javascript">
        @if (Session::has('flash_error'))
          const toast = new bootstrap.Toast(document.getElementById('flash_error'))
          toast.show()

        @elseif (Session::has('flash_message'))
          const toast = new bootstrap.Toast(document.getElementById('flash_message'))
          toast.show()

        @elseif (Session::has('flash_success'))
          const toast = new bootstrap.Toast(document.getElementById('flash_success'))
          toast.show()

        @endif
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>