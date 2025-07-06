<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="<?= base_url(); ?>" class="logo d-flex align-items-center">
      <img src="<?= base_url('/Niceadmin/assets/img/logo.png'); ?>" alt="">
      <span class="d-none d-lg-block">Toko</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End Search Bar -->

  <!-- ======= DISKON INFO BAR ======= -->
      <?php
    use App\Models\DiskonModel;
    $diskonModel = new DiskonModel();
    $hariIni = date('Y-m-d');
    $diskonHariIni = $diskonModel->where('tanggal', $hariIni)->first();
    ?>

    <?php if ($diskonHariIni) : ?>
      <div class="w-70 text-center">
        <div class="bg-success py-1 text-white mb-0 rounded-0" style="font-weight: 500;">
          Hari ini ada diskon <?= number_format($diskonHariIni['nominal']) ?> per item
        </div>
      </div>
    <?php endif; ?>

  <!-- ======= END DISKON INFO BAR ======= -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <!-- Search Icon (Mobile) -->
      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle" href="#">
          <i class="bi bi-search"></i>
        </a>
      </li>

      <!-- Notifications -->
      <li class="nav-item dropdown">
        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-bell"></i>
          <span class="badge bg-primary badge-number">4</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header">
            You have 4 new notifications
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li><hr class="dropdown-divider"></li>
          <!-- ... (notifikasi lainnya) ... -->
        </ul>
      </li>

      <!-- Messages -->
      <li class="nav-item dropdown">
        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-chat-left-text"></i>
          <span class="badge bg-success badge-number">3</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
          <li class="dropdown-header">
            You have 3 new messages
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li><hr class="dropdown-divider"></li>
          <!-- ... (pesan lainnya) ... -->
        </ul>
      </li>

      <!-- Profile -->
      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="<?= base_url('/Niceadmin/assets/img/profile.jpg'); ?>" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2">
            <?= session()->get('username'); ?> (<?= session()->get('role'); ?>)
          </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6><?= session()->get('username'); ?></h6>
            <span><?= session()->get('role'); ?></span>
          </li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-gear"></i>
              <span>Account Settings</span>
            </a>
          </li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-question-circle"></i>
              <span>Need Help?</span>
            </a>
          </li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="<?= base_url('logout'); ?>">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>
        </ul>
      </li><!-- End Profile -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
