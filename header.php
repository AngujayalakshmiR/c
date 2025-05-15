<?php
  $currentPage = basename($_SERVER['PHP_SELF']); // Get current file name
?>
<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <div class="logo-header" data-background-color="dark">
      <a href="#" class="logo">
        <img src="assets/img/MKCE_FULL_LOGO.png" alt="navbar brand" class="navbar-brand" height="80" />
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar"><i class="gg-menu-right"></i></button>
        <button class="btn btn-toggle sidenav-toggler"><i class="gg-menu-left"></i></button>
      </div>
      <button class="topbar-toggler more"><i class="gg-more-vertical-alt"></i></button>
    </div>
  </div>

  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-item <?= ($currentPage == 'canteendashboard.php') ? 'active' : '' ?>">
          <a href="canteendashboard.php">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item <?= ($currentPage == 'foodtypes.php') ? 'active' : '' ?>">
          <a href="foodtypes.php">
            <i class="fas fa-cart-plus"></i>
            <p>New Food Items</p>
          </a>
        </li>
        <li class="nav-item <?= ($currentPage == 'fooditems.php') ? 'active' : '' ?>">
          <a href="fooditems.php">
            <i class="fas fa-clipboard-list"></i>
            <p>Available Food Items - Qty.</p>
          </a>
        </li>
        <li class="nav-item <?= ($currentPage == 'cashorders.php') ? 'active' : '' ?>">
          <a href="cashorders.php">
            <i class="fas fa-money-check-alt"></i>
            <p>Cash Orders</p>
          </a>
        </li>
        <li class="nav-item <?= ($currentPage == 'changepassword.php') ? 'active' : '' ?>">
          <a href="changepassword.php">
            <i class="fas fa-lock"></i>
            <p>Change Password</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
