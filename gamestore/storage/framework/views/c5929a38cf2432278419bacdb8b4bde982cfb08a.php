<?php $__env->startSection('custom_style'); ?>


<style>
    .btn:disabled{background:#8ba4b1;border-color:#8ba4b1}
    
    .box-profile{margin-top:-270px}
    .box-profile .body{border-radius:24px;height:425px;box-shadow:0 10px 15px -3px rgba(0,0,0,.1) , 0 4px 6px -2px rgba(0,0,0,.05)}
    .box-profile .body .img{width:100px;height:100px;border-radius:50%;text-align:center;line-height:100px;border:2px solid #fff;margin:-50px auto;font-size:22px}
</style>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<?php if(Auth::check()): ?>
    <?php if(Auth()->user()->role == 'Member' || Auth()->user()->role == 'Platinum' || Auth()->user()->role == 'Gold'): ?>
<nav class="navbar navbar-expand-lg d-flex fixed-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="<?php echo e(url('')); ?><?php echo e(!$config ? '' : $config->logo_header); ?>" alt="" width="100" onclick="window.location='<?php echo e(url('')); ?>'">
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
                    <img src="<?php echo e(url('')); ?><?php echo e(!$config ? '' : $config->logo_header); ?>" alt="" width="100" onclick="window.location='<?php echo e(url('')); ?>'">
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
		      <div class="offcanvas-body d-lg-none">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('')); ?>"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/user/edit/profile')); ?>"><i class="fa-solid fa-user-pen"></i> Edit Profile</a>
          </li>
          <div class="card bg-card mt-2 mb-2">
            <div class="card-body">
                <span class="py-1 px-2 float-end rounded bg-warning text-dark" style="font-size: 12px;"><?php echo e(Str::title(Auth()->user()->role)); ?></span>
                <h5 class="card-title"><?php echo e(Str::title(Auth()->user()->name)); ?></h5>
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
        <a class="nav-link" href="<?php echo e(url('')); ?>"><i class="fa-solid fa-house"></i> Home</a>
        <a class="nav-link" href="<?php echo e(url('/user/edit/profile')); ?>"><i class="fa-solid fa-user-pen"></i> Edit Profile</a>
        <a class="nav-link text-primary" href="<?php echo e(url('/dashboard')); ?>"><i class="fa-solid fa-arrow-right-to-bracket""></i> Dashboard</a>
</div>
  </div>
</nav>
<?php else: ?>
<nav class="navbar navbar-expand-lg d-flex fixed-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="<?php echo e(url('')); ?><?php echo e(!$config ? '' : $config->logo_header); ?>" alt="" width="100" onclick="window.location='<?php echo e(url('')); ?>'">
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
                    <img src="<?php echo e(url('')); ?><?php echo e(!$config ? '' : $config->logo_header); ?>" alt="" width="100" onclick="window.location='<?php echo e(url('')); ?>'">
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
		      <div class="offcanvas-body d-lg-none">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('')); ?>"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/user/edit/profile')); ?>"><i class="fa-solid fa-user-pen"></i> Edit Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="<?php echo e(url('/dashboard')); ?>"><i class="fa-solid fa-arrow-right-to-bracket"></i> Dashboard</a>
          </li>
                    </ul>
    </div>
  </div>
    <div class="collapse navbar-collapse text-right d-none d-md-none d-lg-block">
      <div class="navbar-nav ms-auto nav-stacked">
        <a class="nav-link" href="<?php echo e(url('')); ?>"><i class="fa-solid fa-house"></i> Home</a>
        <a class="nav-link" href="<?php echo e(url('/user/edit/profile')); ?>"><i class="fa-solid fa-user-pen"></i> Edit Profile</a>
        <a class="nav-link text-primary" href="<?php echo e(url('/dashboard')); ?>"><i class="fa-solid fa-arrow-right-to-bracket""></i> Dashboard</a>
</div>
  </div>
</nav>
<?php endif; ?>
<?php else: ?>

<nav class="navbar navbar-expand-lg d-flex fixed-top shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
        <img src="<?php echo e(url('')); ?><?php echo e(!$config ? '' : $config->logo_header); ?>" alt="" width="100" onclick="window.location='<?php echo e(url('')); ?>'">
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
                    <img src="<?php echo e(url('')); ?><?php echo e(!$config ? '' : $config->logo_header); ?>" alt="" width="100" onclick="window.location='<?php echo e(url('')); ?>'">
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
		      <div class="offcanvas-body d-lg-none">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('')); ?>"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/user/edit/profile')); ?>"><i class="fa-solid fa-user-pen"></i> Edit Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/login')); ?>"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
          </li>
                    </ul>
    </div>
  </div>
    <div class="collapse navbar-collapse text-right d-none d-md-none d-lg-block">
      <div class="navbar-nav ms-auto nav-stacked">
        <a class="nav-link" href="<?php echo e(url('')); ?>"><i class="fa-solid fa-house"></i> Home</a>
        <a class="nav-link" href="<?php echo e(url('/user/edit/profile')); ?>"><i class="fa-solid fa-user-pen"></i> Edit Profile</a>
         <a class="nav-link" href="<?php echo e(url('/login')); ?>"><i class="fa-solid fa-arrow-right-to-bracket""></i> Login</a>
</div>
  </div>
</nav>
<?php endif; ?>
<div class="content-body">
			<br><br><br>
			<div class="col-lg-6 mx-auto px-3 py-5 mt-4 box-profile">
				<div class="bg-card p-2 body">
					<div class="bg text-white img">Halo</div>
					<a href="<?php echo e(url('/user/edit/profile')); ?>">
						<i class="float-end me-3 mdi mdi-settings" style="font-size: 24px;color: #fff;"></i>
					</a>
					<div class="text-center" style="margin-top: 65px;">
						<h1><?php echo e(Str::title(Auth()->user()->name)); ?></h1>
						<hr style="border-color: #d5d5d5;">
						<span class="d-inline-block py-1 px-2 rounded bg-warning text-dark" style="font-size: 12px;">Member</span>
					</div>
					
					
					<div class="text-center mt-4 mb-3">
						<button onclick="logout();" class="bg-white border-0 text-danger fw-500">Logout</button>
					</div>
				</div>
			</div>
		</div>

<?php $__env->startPush('custom_script'); ?>

<script>
			var modal_logout = new bootstrap.Modal(document.getElementById('modal-logout'));

			function logout() {
				modal_logout.show();
			}
		</script>
		

<?php $__env->stopPush(); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GameWebStore\gamestore\resources\views/template/dashboard.blade.php ENDPATH**/ ?>