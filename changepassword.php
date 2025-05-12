<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>MKCE Trayo - Smart Canteen</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="assets/img/KR_LOGO.png"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <?php include('header.php'); ?>

      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom" style="background-color:rgb(0, 176, 234);"
          >
            <div class="container-fluid" >
              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
              </nav>

              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li
                  class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                >
                 
                  <ul class="dropdown-menu dropdown-search animated fadeIn">
                    <form class="navbar-left navbar-form nav-search">
                      <div class="input-group">
                        <input
                          type="text"
                          placeholder="Search ..."
                          class="form-control"
                        />
                      </div>
                    </form>
                  </ul>
                </li>

                <li class="nav-item topbar-user dropdown hidden-caret">
                 <a class="dropdown-item" href="#" style="font-size: larger;color:#fff;"><i class="
                        fas fa-sign-out-alt" style="font-size: medium;"></i>&nbsp; Logout</a>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">CHANGE PASSWORD
                <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="index.php">
                    <i class="fa fa-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="changepassword.php">Change Password</a>
                </li>
              </ul></h3>
              </div>
              
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                        <i class="fas fa-key"></i> &nbsp;&nbsp;Change Password
                        </div>
                    </div>
                    <div class="card-body">
                    <form id="changePasswordForm">
  <div class="row">
    <!-- Select Dashboard -->
    <div class="col-md-4">
      <div class="form-group">
        <label for="dashboard">Select Dashboard</label>
        <select class="form-control custom-select" id="dashboard" name="dashboard">
          <option value="counter_a">Counter A</option>
          <option value="counter_b">Counter B</option>
          <option value="main_dashboard">Main Dashboard</option>
        </select>
      </div>
    </div>

    <!-- Old Password -->
    <div class="col-md-4">
      <div class="form-group">
        <label for="oldPassword">Old Password</label>
        <div class="input-group">
          <input
            type="password"
            class="form-control custom-input"
            id="oldPassword"
            name="oldPassword"
            placeholder="Enter Old Password"
          />
          <span class="input-group-text eye-icon" id="oldPasswordEye">
            <i class="fas fa-eye"></i>
          </span>
        </div>
      </div>
    </div>

    <!-- New Password -->
    <div class="col-md-4">
      <div class="form-group">
        <label for="newPassword">New Password</label>
        <div class="input-group">
          <input
            type="password"
            class="form-control custom-input"
            id="newPassword"
            name="newPassword"
            placeholder="Enter New Password"
          />
          <span class="input-group-text eye-icon" id="newPasswordEye">
            <i class="fas fa-eye"></i>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="text-end mt-3">
    <button
      type="submit"
      class="btn custom-submit-btn"
    >Change Password</button>
  </div>
</form>

<style>
/* Form container padding (if needed) */
#changePasswordForm {
  padding: 20px;
  font-family: 'Segoe UI', sans-serif;
}

/* Label styling */
label {
  font-weight: 600;
  margin-bottom: 5px;
}

/* Custom Select Dropdown */
.custom-select {
  border-radius: 10px;
  padding: 10px;
  font-size: 15px;
  transition: 0.3s;
}



/* Custom Input */
.custom-input {
  border-radius: 10px 0 0 10px;
  padding: 10px;
  font-size: 15px;
  transition: border 0.3s ease;
}


/* Eye Icon */
.eye-icon {
  background-color: #f8f9fa;
  border: 2px solid #ccc;
  border-left: none;
  border-radius: 0 10px 10px 0;
  transition: background 0.3s;
}

.eye-icon:hover {
  background-color: #e1f5fe;
}

/* Submit Button */
.custom-submit-btn {
  border-radius: 25px;
  background-color: rgb(0, 176, 234);
  color: white;
  padding: 10px 25px;
  font-weight: 600;
  transition: background-color 0.3s ease;
  border: none;
}

.custom-submit-btn:hover {
  background-color: #00a6d6;
}
select#dashboard option {
  background-color: #f0f8ff; /* light blue background */
  color: #333;               /* dark gray text */
  padding: 10px;
  font-size: 16px;
}

</style>

                    </div>
                    </div>
                </div>
                </div>




          </div>
        </div>

        <?php include 'footer.php'; ?>

      </div>


      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>
    
<script>
  // Show/hide password functionality
  document.getElementById("oldPasswordEye").addEventListener("click", function () {
    const oldPasswordInput = document.getElementById("oldPassword");
    if (oldPasswordInput.type === "password") {
      oldPasswordInput.type = "text";
    } else {
      oldPasswordInput.type = "password";
    }
  });

  document.getElementById("newPasswordEye").addEventListener("click", function () {
    const newPasswordInput = document.getElementById("newPassword");
    if (newPasswordInput.type === "password") {
      newPasswordInput.type = "text";
    } else {
      newPasswordInput.type = "password";
    }
  });

  // Display old password based on selected dashboard
  document.getElementById("dashboard").addEventListener("change", function () {
    const dashboard = this.value;
    const oldPasswordInput = document.getElementById("oldPassword");

    // Here, add logic to fetch the old password from your backend based on the selected dashboard.
    // For now, I'm just adding dummy data for demonstration purposes.
    if (dashboard === "counter_a") {
      oldPasswordInput.value = "counter_a_password"; // Replace with actual data
    } else if (dashboard === "counter_b") {
      oldPasswordInput.value = "counter_b_password"; // Replace with actual data
    } else {
      oldPasswordInput.value = ""; // Clear the input for Main Dashboard
    }
  });
</script>


  </body>
</html>
