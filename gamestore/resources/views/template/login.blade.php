@extends('template.template')

@section('custom_style')


<style>
    .accordion-button {
            box-shadow: none !important;
        }
        
        .product .box {
            margin-bottom: 40px;
        }
</style>


@endsection


@section('content')
@if(Auth::check())
    @if(Auth()->user()->role == 'Member' || Auth()->user()->role == 'Platinum' || Auth()->user()->role == 'Gold')
<nav class="navbar navbar-expand-lg d-flex fixed-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="{{url('')}}{{ !$config ? '' : $config->logo_header }}" alt="" width="100" onclick="window.location='{{url('')}}'">
    </a>
    <div class="search-item">
                    <div class="">
                        <div class="nav-item dropdown">
                            <div class="input-group search-bar" aria-haspopup="true" id="dropsearchdown" aria-expanded="false">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                                    <input type="text" name="q" placeholder="Cari..." id="searchProds" class="form-control input-box" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
            
            <div class="hasil-cari">
                <ul class="position-absolute resultsearch shadow dropdown-menu" aria-labelledby="dropsearchdown"></ul>
            </div>
    
            <button class="navbar-toggler border-0 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
              <span><i class="fa fa-bars-staggered text-light"></i></span>
            </button>
            <div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                    <img src="{{url('')}}{{ !$config ? '' : $config->logo_header }}" alt="" width="100" onclick="window.location='{{url('')}}'">
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
		      <div class="offcanvas-body d-lg-none">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="{{url('')}}"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/user/edit/profile')}}"><i class="fa-solid fa-user-pen"></i> Edit Profile</a>
          </li>
          <div class="card bg-card mt-2 mb-2">
            <div class="card-body">
                <span class="py-1 px-2 float-end rounded bg-warning text-dark" style="font-size: 12px;">{{Str::title(Auth()->user()->role)}}</span>
                <h5 class="card-title">{{Str::title(Auth()->user()->name)}}</h5>
                <p class="card-text">Rp {{ number_format(Auth::user()->balance, 0, ',', '.') }}</p>
             </div>
          </div>
                    
          <div class"mt-2">
                                                          </div>
                        <button onclick="logout();" class="btn bg-white border-0 text-danger mt-2">Logout</button>
                    </ul>
    </div>
  </div>
    <div class="collapse navbar-collapse text-right d-none d-md-none d-lg-block">
      <div class="navbar-nav ms-auto nav-stacked">
        <a class="nav-link" href="{{url('')}}"><i class="fa-solid fa-house"></i> Home</a>
        <a class="nav-link" href="{{url('/user/edit/profile')}}"><i class="fa-solid fa-user-pen"></i> Edit Profile</a>
        <a class="nav-link text-primary" href="{{url('/dashboard')}}"><i class="fa-solid fa-arrow-right-to-bracket""></i> Dashboard</a>
</div>
  </div>
</nav>
@else
<nav class="navbar navbar-expand-lg d-flex fixed-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="{{url('')}}{{ !$config ? '' : $config->logo_header }}" alt="" width="100" onclick="window.location='{{url('')}}'">
    </a>
    <div class="search-item">
                    <div class="">
                        <div class="nav-item dropdown">
                            <div class="input-group search-bar" aria-haspopup="true" id="dropsearchdown" aria-expanded="false">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                                    <input type="text" name="q" placeholder="Cari..." id="searchProds" class="form-control input-box" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
            
            <div class="hasil-cari">
                <ul class="position-absolute resultsearch shadow dropdown-menu" aria-labelledby="dropsearchdown"></ul>
            </div>
    
            <button class="navbar-toggler border-0 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
              <span><i class="fa fa-bars-staggered text-light"></i></span>
            </button>
            <div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                    <img src="{{url('')}}{{ !$config ? '' : $config->logo_header }}" alt="" width="100" onclick="window.location='{{url('')}}'">
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
		      <div class="offcanvas-body d-lg-none">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="{{url('')}}"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/user/edit/profile')}}"><i class="fa-solid fa-user-pen"></i> Edit Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="{{url('/dashboard')}}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Dashboard</a>
          </li>
                    </ul>
    </div>
  </div>
    <div class="collapse navbar-collapse text-right d-none d-md-none d-lg-block">
      <div class="navbar-nav ms-auto nav-stacked">
        <a class="nav-link" href="{{url('')}}"><i class="fa-solid fa-house"></i> Home</a>
        <a class="nav-link" href="{{url('/user/edit/profile')}}"><i class="fa-solid fa-user-pen"></i> Edit Profile</a>
        <a class="nav-link text-primary" href="{{url('/dashboard')}}"><i class="fa-solid fa-arrow-right-to-bracket""></i> Dashboard</a>
</div>
  </div>
</nav>
@endif
@else

<nav class="navbar navbar-expand-lg d-flex fixed-top shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
        <img src="{{url('')}}{{ !$config ? '' : $config->logo_header }}" alt="" width="100" onclick="window.location='{{url('')}}'">
    </a>
    <div class="search-item">
                    <div class="">
                        <div class="nav-item dropdown">
                            <div class="input-group search-bar" aria-haspopup="true" id="dropsearchdown" aria-expanded="false">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                                    <input type="text" name="q" placeholder="Cari..." id="searchProds" class="form-control input-box" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
            
            <div class="hasil-cari">
                <ul class="position-absolute resultsearch shadow dropdown-menu" aria-labelledby="dropsearchdown"></ul>
            </div>
    
            <button class="navbar-toggler border-0 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
              <span><i class="fa fa-bars-staggered text-light"></i></span>
            </button>
            <div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                    <img src="{{url('')}}{{ !$config ? '' : $config->logo_header }}" alt="" width="100" onclick="window.location='{{url('')}}'">
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
		      <div class="offcanvas-body d-lg-none">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="{{url('')}}"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/user/edit/profile')}}"><i class="fa-solid fa-user-pen"></i> Edit Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/login')}}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
          </li>
                    </ul>
    </div>
  </div>
    <div class="collapse navbar-collapse text-right d-none d-md-none d-lg-block">
      <div class="navbar-nav ms-auto nav-stacked">
        <a class="nav-link" href="{{url('')}}"><i class="fa-solid fa-house"></i> Home</a>
        <a class="nav-link" href="{{url('/user/edit/profile')}}"><i class="fa-solid fa-user-pen"></i> Edit Profile</a>
         <a class="nav-link" href="{{url('/login')}}"><i class="fa-solid fa-arrow-right-to-bracket""></i> Login</a>
</div>
  </div>
</nav>
@endif
<div class="content-body">
			<div class="col-lg-6 mx-auto px-3 pt-3 mb-3">
			    @if(session('error'))
			    
			    <div class="alert alert-danger">
			       <ul>
			           <li>{{session('error')}}</li>
			       </ul>
			    </div>
			    
			    @endif
			    @if(session('success'))
			    
			    <div class="alert alert-success">
			       <ul>
			           <li>{{session('success')}}</li>
			       </ul>
			    </div>
			    
			    @endif
			    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
				<form action="{{url('/login')}}" method="POST" class="my-form">
				    @csrf
            <br><br><br><br>
					<div class="mb-3">
						<label>Username/No Handphone</label>
						<input type="text" class="form-control" autocomplete="off" name="username" required>
					</div>
					<div class="mb-3">
						<label>Password</label>
						<input type="password" class="form-control" name="password" required>
					</div>
					<div class="row mt-3">
						<div class="col-6">
							<div class="form-check">
								<input class="form-check-input mt-1" type="checkbox" value="" id="flexCheckDefault">
								<label class="form-check-label" for="flexCheckDefault">
									Remember me
								</label>
							</div>
						</div>
						<div class="col-6 text-end">
							<a class="text-decoration-none text-danger" href="{{url('/forgot-password')}}">Forgot password?</a>
						</div>
					</div>
					<div class="mt-3">
						<button class="btn btn-primary w-100" type="submit" name="tombol" value="submit"><i class="mdi mdi-exit-to-app mr-1"></i> Sign In</button>
					</div>
					<p class="mt-3">Belum memiliki akun? <a href="{{url('/register')}}" class="text-decoration-none text-primary">Daftar sekarang!</a></p>
				</form>
			</div>
		</div>
		
        









@push('custom_script')



@endpush




@endsection
