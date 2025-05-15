<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Shopping Cart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

  <style>
    body {
      background-color:rgb(0, 176, 234);
    }

    .cart-container,
    .order-summary {
      background: #ffffff;
      border-radius: 0.75rem;
      padding: 40px;
      padding-top: 25px;
      position: relative;
      overflow: hidden;
      /* This keeps ::before inside the rounded border */
    }



    .cart-container::before,
    .order-summary::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: 0.25rem;
      width: 100%;
      background: linear-gradient(90deg, rgb(0, 176, 234), color-mix(in srgb, rgb(0, 176, 234), transparent 50%));
    }

@media (max-width: 460px) {
  .cart-container {
    padding: 10px;
  }
}

    .product-header {
      font-weight: bold;
      border-bottom: 1px solid color-mix(in srgb, #212529, transparent 90%);
      padding-bottom: 15px;
      margin-bottom: 15px;
    }

    .headingstyle {
      font-family: 'Nunito', sans-serif;
      font-size: 0.9rem;
      font-weight: 600;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      color: #2d465e;

    }

    .product-row {
      background-color: #fff;
      border: 1px solid color-mix(in srgb, #212529, transparent 90%);
      border-radius: 0.75rem;
      padding: 25px;
      margin-bottom: 20px;
    }

    .item-img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 0.75rem;
    }

    .input-group-sm {
      width: 100px;
    
    }
   .lorem-font {font-weight: 600; margin-bottom: 0.5rem; font-size: 1.05rem; color:#2d465e; transition: color 0.3s ease;}
/* Quantity Custom Style */
.quantity-control {
  display: inline-flex;
  align-items: center;
  border-radius: 2rem;
  overflow: hidden;
  background: color-mix(in srgb, rgb(112, 219, 255), transparent 50%);
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.03);
  transition: all 0.3s ease;
  height: 2.25rem;
}

.quantity-control button {
  background: none;
  border: none;
  padding: 0.4rem 0.4rem;
  font-size: 1rem;
  color: #fff;
  background-color: rgb(0, 176, 234);
}

.quantity-control::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: color-mix(in srgb, rgb(0, 176, 234), transparent 50%);
  transform: scale(0);
  border-radius: 50%;
  transition: transform 0.3s ease;
  z-index: -1;
}

.quantity-control input {
  width: 40px;
  text-align: center;
  border: none;
  outline: none;
  background: transparent;
}

small {
  display: inline-flex;
  color: #fff;
  align-items: center;
  padding: 0.25rem 0.5rem;
  background-color: color-mix(in srgb, rgb(0, 176, 234), transparent 20%);
  border-radius: 0.375rem;
  border: 1px solid color-mix(in srgb, rgb(0, 176, 234), transparent 90%);
  margin-bottom: 0.55rem;
  font-size: 0.8125rem;
}

.price {
  position: relative;
  color: rgb(0, 176, 234);
  font-weight: 700;
  font-size: 1.125rem;
  text-align: center;
}

.price::after {
  content: "";
  position: absolute;
  bottom: -4px;
  left: 50%;
  transform: translateX(-50%);
  width: 50%;
  height: 2px;
  background: linear-gradient(90deg, rgb(0, 176, 234), transparent);
  border-radius: 1px;
}

/* Responsive Adjustments */
@media (max-width: 1292px) { /* Tablet view */


  .price {
    font-size: 1rem;
  }

  .price::after {
    width: 40%;
  }

  .col-md-2, .col-3 {
    font-size: 0.9rem;
  }
}

@media (max-width: 768px) { /* Mobile view */
  .product-row {
    padding:5px;
  }
.cart-container {
    padding: 20px;
  }
.lorem-font {
  font-size:.9rem;
}
  .price {
    font-size: 0.9rem;
  }

  .price::after {
    width: 35%;
  }

  .col-md-2, .col-3 {
    font-size: 0.85rem;
  }
}
@media (max-width: 576px) {
.lorem-font {
  font-size:.75rem;
}
}
@media (max-width: 460px) {

}
@media (max-width: 460px) {

}
.quantity-control button,
.quantity-control input {
  min-width: 10px;
}

/* Additional Adjustments for screens between 290px and 460px */
@media (max-width: 460px) { /* Small mobile screens */
  
  .lorem-font {
    font-size: .9rem;
  }}

@media (max-width: 290px) { /* Extremely small screens */
  .quantity-control {
    height: 1.25rem; /* Very small height for extreme cases */
  }

  .quantity-control button {
    padding: 0.15rem 0.3rem; /* Minimized button padding */
    font-size: 0.65rem; /* Minimized font size */
  }

  .quantity-control input {
    width: 20px; /* Extremely small input field */
  }

  .price {
    font-size: 0.75rem; /* Smaller font size for price */
  }

  .price::after {
    width: 25%; /* Very small underline */
  }

  .col-md-2, .col-3 {
    font-size: 0.7rem; /* Smaller font size for extreme small screens */
  }
}
.stack-on-mobile {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem; /* spacing between control and price */
}


    .order-summary {
      position: relative;
      background: #ffffff;
      border-radius: 0.75rem;
      padding-top: 16px;
      /* Create space for pseudo-element */
    }

    .order-summary::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: .25rem;
      width: 100%;
      background: linear-gradient(90deg, color-mix(in srgb, rgb(0, 176, 234), transparent 50%), rgb(0, 176, 234));
      border-top-left-radius: 0.75rem;
      border-top-right-radius: 0.75rem;
      box-sizing: border-box;
    }


    .btn-outline-secondary,
    .btn-outline-danger {
      border-radius: 10px;
    }


    .product-row:hover {
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
      border-color: color-mix(in srgb, rgb(0, 176, 234), transparent 70%);
    }

    /* Remove Button with Trash Icon */
    .remove-btn {
      background: none;
      border: none;
      padding: 0;
      font-size: 0.8125rem;
      color: color-mix(in srgb, #212529, transparent 30%);
      display: inline-flex;
      align-items: center;
      gap: 0.25rem;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      text-decoration: none;
    }

    .remove-btn:hover {
      color: rgb(0, 176, 234);
    }

    .remove-btn i {
      font-size: 0.875rem;
      transition: transform 0.3s ease;
    }

    .remove-btn:hover i {
      transform: rotate(15deg);
      color: rgb(0, 176, 234);
    }

   
    .btn-custom {
      font-size: 0.875rem;
      padding: 0.5rem 1.25rem;
      display: inline-flex;
      align-items: center;
      gap: 0.375rem;
      transition: all 0.3s ease;
      border-radius: 2rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      /* raised effect */
    }

    /* Update button */
    .btn-update {
      color: rgb(0, 176, 234);
      border: 1px solid rgb(0, 176, 234);
      background-color: transparent;
    }

    .btn-update:hover {
      background-color: rgb(0, 176, 234);
      color: #fff;
    }

    .btn-update:hover i {
      transform: rotate(360deg);
    }

    /* Clear button */
    .btn-clear {
      color: rgb(0, 176, 234);
      border: 1px solid rgb(0, 176, 234);
      background-color: transparent;
    }

    .btn-clear:hover {
      background-color: rgb(0, 176, 234);
      color: #fff;
    }

    .btn-clear:hover i {
      transform: rotate(20deg);
    }

    .summary-title {
      font-size: 1.25rem;
      font-weight: 600;
      margin-bottom: 1.5rem;
      padding-bottom: 0.75rem;
      border-bottom: 1px solid color-mix(in srgb, #212529, transparent 90%);
      position: relative;
    }

    /* Define color variables if not already */
    :root {
      --accent-color: rgb(0, 176, 234);
      --background-color: #ffffff;
      --default-color: #d0d0d0;
      --heading-color: #2d465e;
    }

    /* Container with background, spacing, and gradient */
    .summary-total {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 1.75rem 0;
      padding: 1.25rem;
      border-radius: 0.75rem;
      background: linear-gradient(145deg,
          color-mix(in srgb, rgb(0, 129, 172), transparent 75%),
          color-mix(in srgb, var(--background-color), transparent 95%));
      border: 2px solid color-mix(in srgb, rgb(4, 127, 168), transparent 92%);
    }

    .form-check-input:checked {
      background-color: rgb(0, 176, 234);
      border-color: rgb(0, 176, 234);
    }

    /* Left Label */
    .summary-label {
      font-size: 1.125rem;
      font-weight: 600;
      color: var(--heading-color);
    }

    /* Right Price Value */
    .summary-value {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--heading-color);
      position: relative;
    }

    .hero-section {
      position: relative;
      background-color: rgb(0, 176, 234);
      color: white;
      width: 100%;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem 1rem;
      flex-direction: column;
      text-align: center;
    }

    /* Logo Styling */
    .hero-logo {
      width: 160px;
      height: auto;
    }

    /* Text box in mobile */
    .hero-content {
      z-index: 2;
      position: relative;
      padding: 2rem 1rem;
    }

    .hero-title {
      font-size: 2rem;
      font-weight: 700;
    }

    .hero-subtitle {
      font-size: 1.25rem;
      font-style: italic;
    }

    /* Desktop only parallelograms */
    .parallelogram,
    .parallelogram2 {
      position: absolute;
      top: 0;
      height: 100%;
      width: 500px;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .parallelogram {
      right: 0;
      clip-path: polygon(20% 0, 100% 0, 100% 100%, 0% 100%);
    }

    .parallelogram2 {
      left: 0;
      clip-path: polygon(0 0, 100% 0, 80% 100%, 0% 100%);
    }

    .parallelogram img,
    .parallelogram2 img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* Mobile-only style */
    @media (max-width: 1332px) {

      .parallelogram,
      .parallelogram2 {
        display: none !important;
      }

      .hero-section {
        background-color: rgb(0, 176, 234);
        padding: 2rem 1rem;
      }

      .hero-content {
        background-color: #fff;
        color: #333;
        border-bottom: 5px solid rgb(0, 176, 234);
        border-radius: 0.5rem;
        padding: 2rem 1rem;
      }

      .hero-logo {
        width: 140px;
      }

      .hero-title {
        color: rgb(0, 176, 234);
      }

      .hero-subtitle {
        font-size: 1rem;
        color: rgb(0, 176, 234);
      }
    }

    .btn-customa {
      font-size: 1.2rem;
      padding: 0.5rem 1.25rem;
      display: flex;
      /* changed from inline-flex to flex */
      align-items: center;
      justify-content: center;
      /* horizontal centering */
      gap: 0.675rem;
      transition: all 0.3s ease;
      border-radius: 2rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      /* raised effect */
    }

    @media (max-width: 600px) {
      .btn-customa {
        font-size: 1rem;
        padding: 0.4rem 1rem;
      }
    }

    .btn-checkout {
      background-color: rgb(0, 176, 234);
      color: #fff;
    }

    .btn-checkout:hover {
      background-color: rgb(0, 176, 234);
      color: #fff;
    }

    .btn-checkout:hover i {
      transform: rotate(360deg);
      transition: transform 0.5s ease;
    }


    .custom-footer {
      background-color: #fff;
      clip-path: polygon(0 60px, 100% 0, 100% 100%, 0% 100%);
      text-align: center;
      padding: 4rem 1rem 2rem;
      color: #333;
      position: relative;
      z-index: 10;
      box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.05);
    }


    .footer-icons {
      font-size: 1.5rem;
      margin-bottom: 1rem;
      display: flex;
      justify-content: center;
      gap: 1rem;
      color: rgb(0, 176, 234);
    }


    .custom-footer {
      background-color: #fff;
      clip-path: polygon(0 60px, 100% 0, 100% 100%, 0% 100%);
      text-align: center;
      padding: 5rem 1rem 3rem;
      color: #333;
      position: relative;
      z-index: 10;
      box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.05);
      overflow: hidden;
    }

    /* Random icons across footer */
    .footer-icons-random {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
    }

    .footer-icons-random i {
      position: absolute;
      color: rgb(0, 176, 234);
      font-size: 1.5rem;
      opacity: 0.3;
      transform: rotate(var(--rotate));
      animation: floatIcons 10s infinite alternate;
    }

    /* Randomize icon positions and rotations */
    .footer-icons-random i:nth-child(1) {
      top: 10%;
      left: 5%;
      --rotate: -20deg;
    }

    .footer-icons-random i:nth-child(2) {
      top: 20%;
      right: 10%;
      --rotate: 30deg;
    }

    .footer-icons-random i:nth-child(3) {
      bottom: 30%;
      left: 8%;
      --rotate: 45deg;
    }

    .footer-icons-random i:nth-child(4) {
      top: 40%;
      right: 5%;
      --rotate: -15deg;
    }

    .footer-icons-random i:nth-child(5) {
      bottom: 20%;
      right: 12%;
      --rotate: 25deg;
    }

    .footer-icons-random i:nth-child(6) {
      bottom: 10%;
      left: 15%;
      --rotate: -35deg;
    }

    @keyframes floatIcons {
      0% {
        transform: translateY(0) rotate(var(--rotate));
      }

      100% {
        transform: translateY(-10px) rotate(calc(var(--rotate) + 10deg));
      }
    }

    /* Quote Styling */
    .footer-quote {
      font-size: 1.30rem;
      font-weight: 600;
      margin-bottom: 1.5rem;
      color: rgb(0, 176, 234);
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 0.5rem;
    }

    .quote-icon {
      font-size: 1.7rem;
    }

    /* Footer Text */
    .footer-text {
      font-size: .9rem;
      color: #333;
      line-height: 1.5;
      position: relative;
      z-index: 2;
    }

    .mobile-br {
  display: none;
}

@media (max-width: 600px) {
  .mobile-br {
    display: inline;
  }
}



.food-square-card {
  background-color: #fff;
  border: 1px solid #eee;
  border-radius: 1rem;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.08);
  overflow: hidden;
  aspect-ratio: 1 / 1;
  display: flex;
  flex-direction: column;
  position: relative;
  max-width: 90px;
  margin: 0 auto;
}

.food-square-card img {
  width: 100%;
  height: 80%;
  object-fit: cover;
  border-bottom: 1px solid #f0f0f0;
}

/* Food name with orange bg and white text */
.food-label {
  height: 20%;
  font-weight: 600;
  font-size: 0.7rem; /* reduced size */
  color: #fff;
  background-color: rgb(0, 176, 234);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0.25rem;
}

/* Availability count circle – orange bg and white text */
.availability-count {
  position: absolute;
  top: 0.4rem;
  left: 0.4rem;
  background-color: rgb(0, 176, 234);
  color: #fff;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  font-size: 0.7rem;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

/* Add (+) button – smaller and centered icon */
.add-btn {
  position: absolute;
  top: 0.4rem;
  right: 0.4rem;
  background-color: rgb(0, 176, 234);
  color: #fff;
  border: none;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  font-size: 0.75rem;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 0 1px 4px rgba(0,0,0,0.1);
}

.add-btn:hover {
  background-color: rgb(0, 176, 234);
}

/* 10px spacing between cards */
.custom-gap > .col-auto {
  padding-right: 15px; /* 5px on each side = 10px total */
}
/* Show full label by default, hide short one */
.full-label {
  display: inline;
}
.short-label {
  display: none;
}

@media (max-width: 460px) {
  /* On small screens, switch visibility */
  .full-label {
    display: none;
  }
  .short-label {
    display: inline;
  }
}
@media (max-width: 460px) {
  .headinigstyle{
    font-size:0.8rem;
  }
  .remove-btn{
    font-size:.7rem;
  }
  .btn-custom{
    font-size:.7rem;
  }
  .btn-customa{
    font-size:.7rem;
  }
  .quantity-control{
    height:25px;
    width:65px;
  }
      .col-md-2, .col-3,.col-7 {
        font-size:.7rem;
      }
  .lorem-font{
    font-size: .85rem; }
    small{
      font-size:.75rem;
    }
  .product-row {
    position: relative;
    flex-wrap: nowrap;
    padding-right: 100px; /* leave space for price/qty to float right */
  }

  .product-row .col-md-2.col-3 {
    width: auto;
    flex: none;
    position: absolute;
    right: 10px;
    background: white; /* optional: better visibility */
  }

  /* Quantity control goes to the top right */
  .product-row .col-md-2.col-3:nth-of-type(2) {
    top: 10px;
  }

  /* Price goes to the bottom right */
  .product-row .col-md-2.col-3:nth-of-type(3) {
    bottom: 10px;
  }

  .product-row .col-md-2.col-3 .quantity-control {
    flex-direction: row;
  }

  .product-row .price {
    font-size: 0.9rem;
  }
  .summary-title{
    font-size:1rem;
  }
  span{
    font-size:.75rem;
  }
  .form-check-label{
    font-size:.85rem;
  }
  .summary-value{
    font-size:1.2rem;
  }
  .quote{
    font-size:1.1rem;
  }
}



/* HERO SECTION ANIMATIONS */
.hero-section {
  animation: fadeInUp 1.2s ease-in-out;
}

.hero-logo {
  animation: scaleIn 1s ease-in-out;
  transition: transform 0.3s ease;
}

.hero-logo:hover {
  transform: scale(1.1);
}

.hero-title, .hero-subtitle {
  animation: slideInDown 1s ease forwards;
  transition: opacity 0.5s ease;
}

/* PARALLELOGRAM IMAGE ANIMATION */
.parallelogram img, .parallelogram2 img {
  animation: zoomFade 1.4s ease-in-out;
  transition: transform 0.3s ease;
}

.parallelogram img:hover,
.parallelogram2 img:hover {
  transform: scale(1.03);
}

/* FOOD CARD TRANSITIONS */
.food-square-card {
  animation: fadeInScale 0.8s ease-in-out;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.food-square-card:hover {
  transform: scale(1.05);
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.add-btn {
  transition: transform 0.3s ease;
}

.add-btn:hover {
  transform: rotate(90deg) scale(1.2);
}

/* CART ITEM ENTRY ANIMATION */
.product-row {
  animation: fadeInLeft 0.8s ease forwards;
}

/* QUANTITY BUTTON TRANSITIONS */
.quantity-control button {
  transition: background-color 0.3s ease, transform 0.2s ease;
}

.quantity-control button:hover {
  transform: scale(1.1);
}

/* REMOVE BUTTON ANIMATION */
.remove-btn {
  transition: color 0.3s ease;
}



/* ANIMATION KEYFRAMES */
@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes scaleIn {
  from { opacity: 0; transform: scale(0.6); }
  to { opacity: 1; transform: scale(1); }
}

@keyframes slideInDown {
  from { opacity: 0; transform: translateY(-30px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes zoomFade {
  0% { transform: scale(1.2); opacity: 0; }
  100% { transform: scale(1); opacity: 1; }
}

@keyframes fadeInScale {
  0% { opacity: 0; transform: scale(0.8); }
  100% { opacity: 1; transform: scale(1); }
}

@keyframes fadeInLeft {
  0% { opacity: 0; transform: translateX(-40px); }
  100% { opacity: 1; transform: translateX(0); }
}

/* General fade-in animation with delay */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

  </style>
</head>

<body>
  <div class="hero-section" data-aos="fade-up">
    <div class="hero-content container text-white py-2 text-center">
      <img src="assets/img/blue-logo.png" style="border-radius: 50%;" alt="Logo" class="hero-logo">
      <h1 class="hero-title">Welcome to MKCE Trayo</h1>
      <p class="hero-subtitle">"Where Technology Serves Taste."</p>
    </div>

    <div class="parallelogram d-none d-md-flex">
      <img src="assets/img/hero-section.jpg" alt="Hero Image">
    </div>

    <div class="parallelogram2 d-none d-md-flex">
      <img src="assets/img/hero-section.jpg" alt="Hero Image">
    </div>
  </div>



<div style="background-color: white;">
  <section class="container py-4 ">
  <div class="row g-2 justify-content-center custom-gap">
  <div class="col-auto">
      <div class="food-square-card position-relative" data-aos="fade-up">
        <div class="availability-count">5</div>
        <button class="add-btn"><i class="fas fa-plus"></i></button>
        <img src="assets/img/briyani.jpeg" alt="Briyani" class="card-img-top">
        <div class="food-label text-center">Briyani</div>
      </div>
    </div>
    <div class="col-auto">
      <div class="food-square-card position-relative" data-aos="fade-up">
        <div class="availability-count">5</div>
        <button class="add-btn"><i class="fas fa-plus"></i></button>
        <img src="assets/img/briyani.jpeg" alt="Briyani" class="card-img-top">
        <div class="food-label text-center">Briyani</div>
      </div>
    </div>
    <div class="col-auto">
      <div class="food-square-card position-relative" data-aos="fade-up">
        <div class="availability-count">5</div>
        <button class="add-btn"><i class="fas fa-plus"></i></button>
        <img src="assets/img/briyani.jpeg" alt="Briyani" class="card-img-top">
        <div class="food-label text-center">Briyani</div>
      </div>
    </div>
    <div class="col-auto">
      <div class="food-square-card position-relative" data-aos="fade-up">
        <div class="availability-count">5</div>
        <button class="add-btn"><i class="fas fa-plus"></i></button>
        <img src="assets/img/briyani.jpeg" alt="Briyani" class="card-img-top">
        <div class="food-label text-center">Briyani</div>
      </div>
    </div>
    <div class="col-auto">
      <div class="food-square-card position-relative" data-aos="fade-up">
        <div class="availability-count">5</div>
        <button class="add-btn"><i class="fas fa-plus"></i></button>
        <img src="assets/img/briyani.jpeg" alt="Briyani" class="card-img-top">
        <div class="food-label text-center">Briyani</div>
      </div>
    </div>
    <div class="col-auto">
      <div class="food-square-card position-relative" data-aos="fade-up">
        <div class="availability-count">5</div>
        <button class="add-btn"><i class="fas fa-plus"></i></button>
        <img src="assets/img/briyani.jpeg" alt="Briyani" class="card-img-top">
        <div class="food-label text-center">Briyani</div>
      </div>
    </div>
    <div class="col-auto">
      <div class="food-square-card position-relative" data-aos="fade-up">
        <div class="availability-count">5</div>
        <button class="add-btn"><i class="fas fa-plus"></i></button>
        <img src="assets/img/briyani.jpeg" alt="Briyani" class="card-img-top">
        <div class="food-label text-center">Briyani</div>
      </div>
    </div>
    <div class="col-auto">
      <div class="food-square-card position-relative" data-aos="fade-up">
        <div class="availability-count">5</div>
        <button class="add-btn"><i class="fas fa-plus"></i></button>
        <img src="assets/img/briyani.jpeg" alt="Briyani" class="card-img-top">
        <div class="food-label text-center">Briyani</div>
      </div>
    </div>
    <div class="col-auto">
      <div class="food-square-card position-relative" data-aos="fade-up">
        <div class="availability-count">5</div>
        <button class="add-btn"><i class="fas fa-plus"></i></button>
        <img src="assets/img/briyani.jpeg" alt="Briyani" class="card-img-top">
        <div class="food-label text-center">Briyani</div>
      </div>
    </div>
    <div class="col-auto">
      <div class="food-square-card position-relative" data-aos="fade-up">
        <div class="availability-count">5</div>
        <button class="add-btn"><i class="fas fa-plus"></i></button>
        <img src="assets/img/briyani.jpeg" alt="Briyani" class="card-img-top">
        <div class="food-label text-center">Briyani</div>
      </div>
    </div>

    <div class="col-auto">
      <div class="food-square-card position-relative" data-aos="fade-up">
        <div class="availability-count">5</div>
        <button class="add-btn"><i class="fas fa-plus"></i></button>
        <img src="assets/img/briyani.jpeg" alt="Briyani" class="card-img-top">
        <div class="food-label text-center">Briyani</div>
      </div>
    </div>
    <div class="col-auto">
      <div class="food-square-card position-relative" data-aos="fade-up">
        <div class="availability-count">5</div>
        <button class="add-btn"><i class="fas fa-plus"></i></button>
        <img src="assets/img/briyani.jpeg" alt="Briyani" class="card-img-top">
        <div class="food-label text-center">Briyani</div>
      </div>
    </div>
    <div class="col-auto">
      <div class="food-square-card position-relative" data-aos="fade-up">
        <div class="availability-count">5</div>
        <button class="add-btn"><i class="fas fa-plus"></i></button>
        <img src="assets/img/briyani.jpeg" alt="Briyani" class="card-img-top">
        <div class="food-label text-center">Briyani</div>
      </div>
    </div>
    <div class="col-auto">
      <div class="food-square-card position-relative" data-aos="fade-up">
        <div class="availability-count">5</div>
        <button class="add-btn"><i class="fas fa-plus"></i></button>
        <img src="assets/img/briyani.jpeg" alt="Briyani" class="card-img-top">
        <div class="food-label text-center">Briyani</div>
      </div>
    </div>
    <div class="col-auto">
      <div class="food-square-card position-relative" data-aos="fade-up">
        <div class="availability-count">5</div>
        <button class="add-btn"><i class="fas fa-plus"></i></button>
        <img src="assets/img/briyani.jpeg" alt="Briyani" class="card-img-top">
        <div class="food-label text-center">Briyani</div>
      </div>
    </div>

    <!-- Duplicate above col for other items -->
      </div>
</section>
    </div>









  <div class="container my-5">


    <div class="row">
      <!-- Left: Shopping Cart -->
      <div class="col-lg-8">
  <div class="cart-container" data-aos="fade-up">
    
    <!-- Column Headers -->
    <div class="row product-header text-center">
      <div class="col-md-8 col-7 text-start headingstyle">PRODUCT</div>
      <div class="col-md-2 col-3 headingstyle">
  <span class="full-label">QUANTITY</span>
  <span class="short-label">Qty</span>
      </div>

      <div class="col-md-2 col-2 headingstyle">TOTAL</div>
    </div>

    <!-- Item 1 -->
    <div class="row product-row align-items-center text-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-md-8 col-6 d-flex text-start align-items-center">
        <img src="assets/img/briyani.jpeg" class="item-img me-3" style="border:  1px solid color-mix(in srgb, #212529, transparent 90%);" alt="Product">
        <div>
          <div class="lorem-font">Lorem ipsum dolor</div>
          <small><span class="price-label">Price:</span> $89.99</small>
<br>
          <a href="#" class="remove-btn"><i class="bi bi-trash"></i> Remove</a> 
      </div>
    </div>
      <div class="col-md-2 col-3 d-flex justify-content-center">
  <div class="quantity-control">
    <button>-</button>
    <input type="text" value="1">
    <button>+</button>
      </div>
    </div>

<div class="col-md-2 col-3 d-flex justify-content-center align-items-center stack-on-mobile">
  <div class="price ">$49.99</div>
      </div>


    </div>

    <!-- Item 2 -->
    <div class="row product-row align-items-center text-center" data-aos="fade-up" data-aos-delay="200">
      <div class="col-md-8 col-6 d-flex text-start align-items-center">
        <img src="assets/img/parotta.jpeg" class="item-img me-3" style="border:  1px solid color-mix(in srgb, #212529, transparent 90%);" alt="Product">
        <div>
          <div class="lorem-font">Consectetur elit</div>
          <small><span class="price-label">Price:</span> $89.99</small>
<br>
          <a href="#" class="remove-btn"><i class="bi bi-trash"></i> Remove</a>
      </div>
    </div>
      <div class="col-md-2 col-3 d-flex justify-content-center ">
  <div class="quantity-control">
    <button>-</button>
    <input type="text" value="1">
    <button>+</button>
      </div>
    </div>

<div class="col-md-2 col-3 d-flex justify-content-center align-items-center stack-on-mobile">
  <div class="price">$49.99</div>
      </div>


    </div>

    <!-- Item 3 -->
    <div class="row product-row align-items-center text-center" data-aos="fade-up" data-aos-delay="300">
      <div class="col-md-8 col-6 d-flex text-start align-items-center">
        <img src="assets/img/samosa.jpg" class="item-img me-3" style="border:  1px solid color-mix(in srgb, #212529, transparent 90%);" alt="Product">
        <div>
          <div class="lorem-font">Sed do eiusmod</div>
          <small><span class="price-label">Price:</span> $89.99</small>
<br>
          <a href="#" class="remove-btn"><i class="bi bi-trash"></i> Remove</a>
      </div>
    </div>
      <div class="col-md-2 col-3 d-flex justify-content-center">
  <div class="quantity-control">
    <button>-</button>
    <input type="text" value="1">
    <button>+</button>
      </div>
    </div>

<div class="col-md-2 col-3 d-flex justify-content-center align-items-center stack-on-mobile">
  <div class="price">$49.99</div>
      </div>


    </div>

    <!-- Coupon and Buttons -->
    <div class="d-flex mt-2 justify-content-between flex-wrap gap-2">
      <div class="input-group w-50">
      </div>
      <div>
        <button class="btn btn-custom btn-update me-2">
          <i class="bi bi-arrow-clockwise" style="transition: transform 0.3s ease;"></i>Update
        </button>

        <button class="btn btn-custom btn-clear">
          <i class="bi bi-trash" style="transition: transform 0.3s ease;"></i>Clear
        </button>
    </div>
      </div>
    </div>
      </div>



      <!-- Right: Order Summary -->
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="order-summary" data-aos="fade-up">
          <h5 class="mb-3 mt-2 summary-title">Order Summary</h5>
          <div class="d-flex justify-content-between">
            <span>Subtotal</span>
            <span>$269.96</span>
    </div>
          <div class="my-3">
            <span class="d-block mb-1">Parcel</span>
            <div class="form-check ">
              <div class="row">
                <div class=" col-6">
                  <input class="form-check-input" type="radio" name="shipping" id="standard" value="4.99">
                  <label class="form-check-label" for="standard">Required</label>
      </div>
                <div class="col-6">
                  <input class="form-check-input" type="radio" name="shipping" id="express" value="12.99" checked>
                  <label class="form-check-label" for="express">Not Required</label>
    </div>
      </div>
    </div>
      </div>
          <div class="summary-total">
            <span class="summary-label">Total</span>
            <span class="summary-value">$301.95</span>
    </div>

          <button class="btn btn-customa btn-checkout w-100 mt-3">
            Proceed to Checkout <i class="bi bi-arrow-right"></i>
          </button>

      </div>
    </div>
      </div>
    </div>
  <footer class="custom-footer">
    <div class="footer-icons-random">
      <i class="fas fa-pizza-slice"></i>
      <i class="fas fa-ice-cream"></i>
      <i class="fas fa-hamburger"></i>
      <i class="fas fa-utensils"></i>
      <i class="fas fa-coffee"></i>
      <i class="fas fa-hotdog"></i>

      </div>

    <div class="footer-quote">
      <i class="fas fa-quote-left quote-icon"></i>
      <div class="quote">Have Food. Have Fun.</div>
      <i class="fas fa-quote-right quote-icon"></i>
    </div>

    <p class="footer-text">
  Powered by <strong>Team MKCE Trayo</strong>,<span class="mobile-br"><br></span> Technology Innovation Hub,<br>
  M Kumarasamy College of Engineering, Karur.
</p>

  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>