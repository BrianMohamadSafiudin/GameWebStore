

<?php $__env->startSection('custom_style'); ?>


<style>
    .accordion-button{box-shadow:none!important}
    .btn:disabled{background:#8ba4b1;border-color:#8ba4b1}
    
    .box-profile{margin-top:-300px}
    .box-profile .body{border-radius:24px;box-shadow:0 10px 15px -3px rgba(0,0,0,.1) , 0 4px 6px -2px rgba(0,0,0,.05)}
    .my-form div small{color:#718096}
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
            <a class="nav-link" href="<?php echo e(url('/cari')); ?>"><i class="fa-solid fa-magnifying-glass"></i> Cek Pesanan</a>
          </li>
                    <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/riwayat-pembelian')); ?>"><i class="fa-solid fa-clock-rotate-left"></i> Riwayat Pembelian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/deposit')); ?>"><i class="fa-solid fa-wallet"></i> Top Up Saldo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/user/edit/profile')); ?>"><i class="fa-solid fa-user-pen"></i> Edit Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/membership')); ?>"><i class="fa-solid fa-circle-up"></i> Upgrade Membership</a>
          </li>
          <div class="card bg-card mt-2 mb-2">
            <div class="card-body">
                <span class="py-1 px-2 float-end rounded bg-warning text-dark" style="font-size: 12px;"><?php echo e(Str::title(Auth()->user()->role)); ?></span>
                <h5 class="card-title"><?php echo e(Str::title(Auth()->user()->name)); ?></h5>
                <p class="card-text">Rp <?php echo e(number_format(Auth::user()->balance, 0, ',', '.')); ?></p>
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
        <a class="nav-link" href="<?php echo e(url('/cari')); ?>"><i class="fa-solid fa-magnifying-glass""></i> Cek Pesanan</a>
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
            <a class="nav-link" href="<?php echo e(url('/cari')); ?>"><i class="fa-solid fa-magnifying-glass"></i> Cek Pesanan</a>
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
        <a class="nav-link" href="<?php echo e(url('/cari')); ?>"><i class="fa-solid fa-magnifying-glass""></i> Cek Pesanan</a>
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
            <a class="nav-link" href="<?php echo e(url('/cari')); ?>"><i class="fa-solid fa-magnifying-glass"></i> Cek Pesanan</a>
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
        <a class="nav-link" href="<?php echo e(url('/cari')); ?>"><i class="fa-solid fa-magnifying-glass""></i> Cek Pesanan</a>
         <a class="nav-link" href="<?php echo e(url('/login')); ?>"><i class="fa-solid fa-arrow-right-to-bracket""></i> Login</a>
</div>
  </div>
</nav>
<?php endif; ?>
<div class="content-body">
			<div class="col-lg-6 mx-auto px-3 pt-3 mb-3">
				<div class="">
					<form action="<?php echo e(url('/deposit')); ?>" method="POST" class="my-form px-3 mt-3">
					    <?php echo csrf_field(); ?>
						<h5 class="text-center mb-4">Top Up Saldo</h5>
						
						 <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        
                        <?php if(session('success')): ?>
			    
        			    <div class="alert alert-success">
        			       <ul>
        			           <li><?php echo e(session('success')); ?></li>
        			       </ul>
        			    </div>
        			    
        			    <?php endif; ?>
						
						<p>Pilih Metode Pembayaran</p>
						
						<div class="mb-3">
							<select class="form-control" name="metode" required>
                                            <option value="BCA">BCA(MANUAL)</option>
                                            <option value="OVO">OVO(MANUAL)</option>
                                            <option value="GOPAY">GOPAY(MANUAL)</option>
                                            <option value="DANA">DANA(MANUAL)</option>
                                            <option value="SHOPEPAY">SHOPEPAY(MANUAL)</option>
                                            <option value="BRI">BRI(MANUAL)</option>
                            </select>
						</div>
						
						<p>Masukan nominal Top Up</p>
						
						<div class="mb-2">
							<input type="number" class="form-control" autocomplete="off" name="jumlah" placeholder="Nominal Top Up" required>
						</div>
						 <button class="btn btn-primary w-100 mb-3" type="submit" name="tombol" value="submit">Top Up</button>
						<span class="d-block mb-3">
				            <a class="btn btn-success btn-sm" href="<?php echo e(!$config ? '' : $config->url_wa); ?>">KONFIRMASI ADMIN</a>
				        </span>
					</form>
					
					
					 <div class="table-responsive">
                            <table class="table m-o table-bordered text-nowrap text-white">
                                <thead class="bg-none">
                                    <tr>
                                        <th>ID</th>
                                        <th>Jumlah</th>
                                        <th>Metode</th>
                                        <th>No Pembayaran</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                        		<?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <?php
                                    $zone = $pesanan->zone != null ? "-".$pesanan->zone : "";
                                    $label_pesanan = '';
                                    
                                    if($pesanan->status == "Pending" || $pesanan->status == "Batal"){
                                        $label_pesanan = 'warning';
                                    }else if($pesanan->status == "Processing"){
                                        $label_pesanan = 'info';
                                    }else if($pesanan->status == "Success"){
                                        $label_pesanan = 'success';
                                    }else{
                                        $label_pesanan = 'danger';
                                    }
                                ?>                        		
                        		<tr>
                        			<td><?php echo e($pesanan->id); ?></td>
                        			<td>Rp <?php echo e(number_format($pesanan->jumlah,0,',','.')); ?></td>
                        			<td><?php echo e($pesanan->metode); ?></td>
                        			<td><?php echo $pesanan->metode != "QRIS" ? $pesanan->no_pembayaran : '<a class="btn btn-primary" href="/assets/qrisdepo.png" target="_blank">Lihat QR</a>'; ?></td>
                        			<td><span class="badge bg-<?php echo e($label_pesanan); ?>"><?php echo e($pesanan->status); ?></span></td>
                        			<td><?php echo e($pesanan->created_at); ?></td>
                        		</tr>
                        		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        		<tr>
                        			<td align="center" colspan="6">Tidak ada riwayat</td>
                        		</tr>
                        		<?php endif; ?>
                        	</table>
                        </div>
				</div>
			</div>
		</div>
		
        

        






<?php $__env->startPush('custom_script'); ?>



<?php $__env->stopPush(); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GameWebStore\gamestore\resources\views/template/deposit.blade.php ENDPATH**/ ?>