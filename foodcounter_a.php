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
      type="image/x-icon" style="border-radius: 50%;"
    />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
<!-- Add this in your <head> if not already -->


    <style>
      /* For Chrome, Safari, Edge, Opera */
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* For Firefox */
input[type="number"] {
  -moz-appearance: textfield;
}

 .dataTables_filter {
    display: none;
  }

.table-white {
  background-color: #ffffff;
}

.table-gray {
  background-color: #f8f9fa;
}
.food-badge {
    background-color: #e9ecef;
    border-radius: 10px;
    padding: 4px 10px;
    margin: 3px 0;
    display: inline-block;
    width: 100%;
  }

  table th, table td {
      vertical-align: middle;
    }
    .table thead th {
      font-size:12px;
      text-transform: capitalize;
    }
    .table-custom {
      table-layout: fixed;
      width: 100%;
      border-radius: 15px;
      overflow: hidden;
    }
    .col-token { width: 15%; }
    .col-food { width: 30%; }
    .col-parcel { width: 13%; }
    .col-delivery { width: 12%; }
    .col-call { width: 12%; }
    .food-item {
      background-color: rgb(207, 231, 255);
      border-radius:5px;
      border: 2px solid rgb(43, 139, 235);
      padding: 4px 5px;
      margin-top:2px;
    }
    .food-item {
display: inline-block;
width: auto;
max-width: 100%;
}
    @media (max-width: 768px) {
.table-custom,
.table-responsive table {
table-layout: auto !important;
}

.col-token,
.col-food,
.col-parcel,
.col-call,
.col-delivery {
width: auto !important;
}
}
.table-responsive {
overflow-x: auto;
-webkit-overflow-scrolling: touch;
}

body, .container, .row {
overflow-x: hidden;
}
    </style>
    <style>
.order-count {
  background-color: #000;
  color: #fff;
  padding: 4px 10px;
  border-radius: 4px;
  display: inline-block;
  min-width: 24px;
  text-align: center;
}



  /* Container for all token notifications, fixed top-right corner */
  #token-notifications {
    position: fixed;
    top: 20px;
    right: 20px;
    width: 400px;
    z-index: 1050; /* above most elements */
  }

  /* Each notification box */
  .token-notification {
    background-color:rgba(217, 189, 97, 0.9); /* Bootstrap alert-success bg */
    color:rgb(255, 255, 255); /* Bootstrap alert-success text */
    border: 2px solid rgb(167, 158, 0);
    border-radius: 10px;
    padding: 10px 12px;
    margin-bottom: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 16px;
  }

  .token-text {
    flex-grow: 1;
    font-size:14px;
    margin-right: 8px;
  }

  .btn-wrong {
    border: none;
    background-color:rgba(217, 189, 97, 0.9);
    color:white;
    padding: 2px 8px;
    border-radius: 3px;
    cursor: pointer;
    font-size: 13px;
  }


</style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
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
        <li class="nav-item active">
          <a href="foodcounter.php">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
</ul>
</div>
</div></div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header" data-aos="fade-down" data-aos-delay="100">
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
            <div class="container-fluid">
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
                 <a class="dropdown-item" href="login.php" style="font-size: larger;color:#fff;"><i class="
                        fas fa-sign-out-alt" style="font-size: medium;"></i>&nbsp; Logout</a>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>


        <div id="token-notifications"></div>
<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <h3 class="fw-bold mb-3">COUNTER PANEL</h3>
      <ul class="breadcrumbs mb-3">
        <li class="nav-home">
          <a href="index.php">
            <i class="
fas fa-concierge-bell"></i>
          </a>
        </li>
        <li class="separator">
          <i class="icon-arrow-right"></i>
        </li>
        <li class="nav-item">
          <a href="foodtypes.php">Counter A</a>
        </li>
        <li class="separator">
          <i class="icon-arrow-right"></i>
        </li>
        <li class="nav-item">
          <a href="foodtypes.php">Pending Order: <span class="order-count">3</span></a>
        </li>
      </ul>
    </div>

    <div class="row">
  <div class="col-md-12">
    <div class="card" data-aos="fade-up" data-aos-delay="200">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive ">
              <table class="display table table-striped table-hover table-head-bg-info mt-4 mb-4" style="border-radius:20px;overflow:hidden;">
                <thead class="table-info">
                  <tr class="text-center">
                    <th class="col-token">Token No</th>
                    <th class="text-start col-food">Food Item (Qty)</th>
                    <th class="col-parcel">Parcel</th>
                    <th class="col-call">Call Token</th>
                    <th class="col-delivery">Delivery Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center table-white">
                    <td>101</td>
                    <td class="text-start">
                      <div class="food-item">Parotta (2)</div>
                      <div class="food-item">Chicken Manchurian (1)</div>
                    </td>
                    <td>Yes</td>
                    <td>
                      <button class="btn btn-warning btn-sm" onclick="callToken('101')">
                        <i class="fa-solid fa-volume-up" style="font-size:12px;"></i>
                      </button>
                    </td>
                    <td>
                      <button class="btn btn-success btn-sm" onclick="confirmDelivery('101')" style="font-weight:500;"><b>&#10003;</b></button>
                    </td>
                  </tr>

                  <tr class="text-center table-gray">
                    <td>103</td>
                    <td class="text-start">
                      <div class="food-item">Biriyani (1)</div>
                      <div class="food-item">Chicken Manchurian (1)</div>
                    </td>
                    <td>No</td>
                    <td>
                      <button class="btn btn-warning btn-sm" onclick="callToken('103')">
                        <i class="fa-solid fa-volume-up" style="font-size:12px;"></i>
                      </button>
                    </td>
                    <td>
                      <button class="btn btn-success btn-sm" onclick="confirmDelivery('103')" style="font-weight:500;"><b>&#10003;</b></button>
                    </td>
                  </tr>

                  <tr class="text-center table-white">
                    <td>105</td>
                    <td class="text-start">
                      <div class="food-item">Parotta (1)</div>
                      <div class="food-item">Chicken Manchurian (1)</div>
                    </td>
                    <td>Yes</td>
                    <td>
                      <button class="btn btn-warning btn-sm" onclick="callToken('105')">
                        <i class="fa-solid fa-volume-up" style="font-size:12px;"></i>
                      </button>
                    </td>
                    <td>
                      <button class="btn btn-success btn-sm" onclick="confirmDelivery('105')" style="font-weight:500;"><b>&#10003;</b></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div> <!-- /.row -->
          </div> <!-- /.card-body -->
        </div> <!-- /.card -->
      </div> <!-- /.col -->
    </div> <!-- /.row -->
  </div> <!-- /.page-inner -->
</div>

<?php include 'footer.php'; ?>


      </div>

      <!-- Custom template | don't include it in your project! -->
      <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
          <div class="switcher">
            <div class="switch-block">
              <h4>Logo Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="selected changeLogoHeaderColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="purple"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="light-blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="red"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="white"
                ></button>
                <br />
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="dark2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="blue2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="purple2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="light-blue2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="red2"
                ></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Navbar Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="purple"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="light-blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="red"
                ></button>
                <button
                  type="button"
                  class="selected changeTopBarColor"
                  data-color="white"
                ></button>
                <br />
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="dark2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="blue2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="purple2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="light-blue2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="red2"
                ></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Sidebar</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="white"
                ></button>
                <button
                  type="button"
                  class="selected changeSideBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="dark2"
                ></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Custom template -->
    </div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
<script>
  const notifications = new Map();

  function callToken(token) {
    const container = document.getElementById('token-notifications');

    // Create notification div
    const notification = document.createElement('div');
    notification.className = 'token-notification';

    // Text span
    const textSpan = document.createElement('span');
    textSpan.className = 'token-text';
    textSpan.textContent = `Token Called: ${token}`;

    // Wrong button
const wrongBtn = document.createElement('button');
wrongBtn.className = 'btn-wrong';
wrongBtn.innerHTML = '<i class="fa-solid fas fa-window-close" style="color:white;font-size:25px;"></i>'; // or fa-times

    wrongBtn.onclick = () => {
      clearTimeout(notifications.get(notification));
      notifications.delete(notification);
      container.removeChild(notification);
    };

    notification.appendChild(textSpan);
    notification.appendChild(wrongBtn);

    // Add notification at the bottom (new notifications come below)
    container.appendChild(notification);

    // Auto remove after 6 seconds
    const timer = setTimeout(() => {
      if (container.contains(notification)) {
        container.removeChild(notification);
        notifications.delete(notification);
      }
    }, 6000);

    notifications.set(notification, timer);
  }




  function confirmDelivery(token) {
    Swal.fire({
      title: 'Do you want to mark this order delivered?',
      icon: 'question', // will be replaced by custom image
      imageWidth: 64,
      imageHeight: 64,
      imageAlt: 'Question Icon',
      showCancelButton: true,
      confirmButtonText: '<i class="fa fa-check"></i> Yes, Delivered',
      cancelButtonText: '<i class="fa fa-eye"></i> No, Not Delivered',
      reverseButtons: true, // Swap Yes/No positions so "No" left and "Yes" right
      customClass: {
        confirmButton: 'btn btn-success mx-2', // green
        cancelButton: 'btn btn-danger mx-2'   // red
      },
      buttonsStyling: false
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          icon: 'success',
          title: 'Delivered!',
          text: `Order with token ${token} marked as delivered.`,
          confirmButtonText: '<i class="fa fa-check"></i> OK',
          customClass: {
            confirmButton: 'btn btn-success'
          },
          buttonsStyling: false
        });
        // You can add your backend update logic here
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        Swal.fire({
          icon: 'error',
          title: 'Cancelled',
          text: 'Order not marked as delivered.',
          confirmButtonText: '<i class="fa fa-times"></i> OK',
          customClass: {
            confirmButton: 'btn btn-danger'
          },
          buttonsStyling: false
        });
      }
    });
  }
</script>
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
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });


      $("#add-row").DataTable({
          // pageLength: 3,
        });

        var action =
          '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-trash"></i> </button> </div> </td>';



    </script>

<script>
  function adjustQuantity(change) {
    const input = document.getElementById('foodQuantityInput');
    let value = parseInt(input.value) || 1;
    value = Math.max(1, value + change);
    input.value = value;
  }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init();
</script>

  </body>
</html>

