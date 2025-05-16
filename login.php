<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKCE - Trayo Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            background: #f8f9fa;
        }

        .split-container {
            display: flex;
            width: 100%;
            min-height: 100vh;
        }

        .image-section {
            flex: 1.2;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                        url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            animation: slideIn 1.2s ease-out;
        }

        .image-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(0, 176, 234, 0.3), rgba(0, 176, 234, 0.1));
            animation: fadeIn 1.5s ease-out;
        }

        .image-content {
            color: white;
            text-align: center;
            z-index: 1;
            padding: 20px;
            animation: fadeInUp 1s ease-out 0.5s both;
            width: 100%;
            max-width: 600px;
        }

        .image-content h2 {
            font-family: 'Pacifico', cursive;
            font-size: 2.5em;
            margin-bottom: 40px;
            background: linear-gradient(45deg, #fff, #e0e0e0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shimmer 3s infinite;
            line-height: 1.8;
        }

        .image-content p {
            font-size: 1.6em;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            opacity: 0.9;
            font-weight: 300;
            letter-spacing: 1px;
            line-height: 1.4;
        }

        .login-section {
            flex: 0.8;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            animation: slideInRight 1.2s ease-out;
            background: white;
            position: relative;
            overflow: hidden;
        }

        .login-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 176, 234, 0.05) 0%, rgba(255, 255, 255, 0) 100%);
            z-index: 0;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 60px;
            animation: fadeInDown 1s ease-out;
        }

        .logo-container img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid rgb(0, 176, 234);
            padding: 5px;
            transition: all 0.4s ease;
            box-shadow: 0 5px 15px rgba(0, 176, 234, 0.2);
            background: white;
        }

        .logo-container img:hover {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 8px 25px rgba(0, 176, 234, 0.3);
        }

        .login-header {
            text-align: center;
            margin-bottom: 40px;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .login-header h1 {
            color: rgb(0, 176, 234);
            font-size: 1.8em;
            margin-bottom: 15px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-shadow: 1px 1px 2px rgba(0, 176, 234, 0.1);
            line-height: 1.3;
        }

        .form-group {
            margin-bottom: 25px;
            animation: fadeInUp 1s ease-out 0.5s both;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: #333;
            font-weight: 500;
            font-size: 1.1em;
            transition: all 0.3s ease;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            border: none;
            border-bottom: 2px solid #ddd;
            font-size: 1.1em;
            transition: all 0.3s ease;
            background: transparent;
        }

        .form-group input:focus {
            border-color: rgb(0, 176, 234);
            outline: none;
        }

        .form-group input:focus + label {
            color: rgb(0, 176, 234);
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            background: rgb(0, 176, 234);
            border: none;
            border-radius: 30px;
            color: white;
            font-size: 1.2em;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s ease;
            animation: fadeInUp 1s ease-out 0.7s both;
            margin-top: 20px;
            letter-spacing: 1px;
            text-transform: uppercase;
            position: relative;
            overflow: hidden;
        }

        .login-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .login-btn:hover::before {
            left: 100%;
        }

        .login-btn:hover {
            background: rgb(0, 156, 214);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 176, 234, 0.4);
        }

        .forgot-password {
            text-align: center;
            margin-top: 25px;
            animation: fadeInUp 1s ease-out 0.9s both;
        }

        .forgot-password a {
            color: rgb(0, 176, 234);
            text-decoration: none;
            font-size: 1em;
            transition: all 0.3s ease;
            font-weight: 500;
            position: relative;
        }

        .forgot-password a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: rgb(0, 176, 234);
            transition: width 0.3s ease;
        }

        .forgot-password a:hover::after {
            width: 100%;
        }

        @keyframes shimmer {
            0% {
                background-position: -200% center;
            }
            100% {
                background-position: 200% center;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

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

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Large screens (desktops, 1200px and up) */
        @media (min-width: 1200px) {
            .image-content h2 {
                font-size: 3.5em;
            }
            .image-content p {
                font-size: 1.8em;
            }
        }

        /* Medium screens (tablets, 992px and up) */
        @media (max-width: 991px) {
            body, .split-container {
                display: block !important;
                min-height: auto !important;
                height: auto !important;
                overflow-x: hidden;
            }
            .login-section {
                padding-top: 0 !important;
            }
            .logo-container {
                margin-top: 40px !important;
                margin-bottom: 30px !important;
            }
            .image-section {
                min-height: 250px;
                flex: 1;
                position: relative;
                z-index: 1;
            }
            .login-section {
                flex: 1;
                padding: 30px;
                position: relative;
                z-index: 2;
                background: white;
            }
            .image-content h2 {
                font-size: 2.2em;
            }
            .image-content p {
                font-size: 1.2em;
            }
            .login-container {
                max-width: 500px;
                background: none !important;
                border-radius: 0 !important;
                box-shadow: none !important;
                margin-top: 0 !important;
                padding: 0 10px !important;
            }
        }

        /* Small screens (landscape phones, 768px and up) */
        @media (max-width: 767px) {
            .image-section {
                min-height: 200px;
            }
            .image-content h2 {
                font-size: 2em;
            }
            .image-content p {
                font-size: 1.1em;
            }
            .login-section {
                padding: 20px;
            }
            .login-container {
                padding: 0 5px !important;
            }
            .logo-container {
                margin-top: 20px;
                margin-bottom: 15px;
            }
            .logo-container img {
                width: 100px;
                height: 100px;
            }
            .login-header h1 {
                font-size: 1.6em;
            }
        }

        /* Extra small screens (phones, 576px and up) */
        @media (max-width: 575px) {
            .image-section {
                min-height: 180px;
            }
            .image-content h2 {
                font-size: 1.8em;
            }
            .image-content p {
                font-size: 1em;
            }
            .login-section {
                padding-top: 0 !important;
            }
            .login-container {
                padding: 0 2px !important;
                margin-top: 0 !important;
            }
            .logo-container {
                margin-top: 60px !important;
                margin-bottom: 20px !important;
            }
            .logo-container img {
                width: 120px;
                height: 120px;
            }
        }

        /* Extra small screens (phones, 375px and up) */
        @media (max-width: 374px) {
            .image-content h2 {
                font-size: 1.6em;
            }
            .image-content p {
                font-size: 0.9em;
            }
            .logo-container img {
                width: 120px;
                height: 120px;
            }
            .login-header h1 {
                font-size: 1.3em;
            }
        }

        /* Custom styles for the dashboard select dropdown */
        .form-group select.form-control.custom-select {
            width: 100%;
            padding: 15px;
            border: none;
            border-bottom: 2px solid #ddd;
            font-size: 1.1em;
            background: transparent;
            color: #333;
            border-radius: 0;
            transition: border-color 0.3s, box-shadow 0.3s;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            outline: none;
        }
        .form-group select.form-control.custom-select:focus {
            border-color: rgb(0, 176, 234);
            box-shadow: 0 2px 8px rgba(0,176,234,0.08);
            background: #eaf8fd;
        }
        .form-group select.form-control.custom-select option {
            color: #333;
        }
        /* Add a custom arrow for the select */
        .form-group select.form-control.custom-select {
            background-image: url('data:image/svg+xml;utf8,<svg fill="%2300b0ea" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 24px 24px;
        }

        .password-wrapper {
            position: relative;
            width: 100%;
        }
        .password-wrapper input[type="password"],
        .password-wrapper input[type="text"] {
            width: 100%;
            padding-right: 44px;
        }
        .toggle-password {
            position: absolute;
            top: 50%;
            right: 12px;
            transform: translateY(-50%);
            cursor: pointer;
            width: 24px;
            height: 24px;
            fill: #bbb;
            transition: fill 0.2s;
        }
        .toggle-password.active {
            fill: rgb(0, 176, 234);
        }
        .toggle-password:hover {
            fill: #333;
        }
    </style>
</head>
<body>
    <div class="split-container">
        <div class="image-section">
            <div class="image-content">
                <h2>Welcome to MKCE - Trayo</h2>
                <p>Digital food experiences</p>
            </div>
        </div>
        
        <div class="login-section">
            <div class="login-container">
                <div class="logo-container">
                    <img src="assets/img/blue-logo.png" alt="Trayo Logo">
                </div>
                
                <div class="login-header">
                    <h1>MKCE - Trayo Login</h1>
                </div>

                <form action="#" id="loginForm" method="POST" onsubmit="return validateLogin()">
                    <div class="form-group">
                        <label for="dashboard">Select Dashboard</label>
                        <select class="form-control custom-select" id="username" name="username">
                          <option value="countera">Counter A</option>
                          <option value="counterb">Counter B</option>
                          <option value="dashboard">Main Dashboard</option>
                        </select>
                    </div>
                    
                    <div class="form-group password-group">
                        <label for="password">Password</label>
                        <div class="password-wrapper">
                            <input type="password" id="password" name="password" required placeholder="Password">
                            <svg class="toggle-password" id="togglePassword" viewBox="0 0 24 24">
                                <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5C21.27 7.61 17 4.5 12 4.5zm0 13c-3.31 0-6.31-2.01-7.74-5C5.69 9.51 8.69 7.5 12 7.5s6.31 2.01 7.74 5c-1.43 2.99-4.43 5-7.74 5zm0-8a3 3 0 100 6 3 3 0 000-6zm0 4.5a1.5 1.5 0 110-3 1.5 1.5 0 010 3z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <button type="submit" class="login-btn">Sign In</button>
                </form>
                
                <div class="forgot-password">
                    <a href="#">Digital Dining Revolution</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('active');
        });
    </script>
    <script>
function validateLogin() {
    const username = document.getElementById("username").value.trim().toLowerCase();
    const password = document.getElementById("password").value;

    if (username === "countera" && password === "123") {
        window.location.href = "foodcounter_a.php";
    } else if (username === "counterb" && password === "123") {
        window.location.href = "foodcounter_b.php"; // You may want to replace "123" with a valid URL
    } else if (username === "dashboard" && password === "123") {
        window.location.href = "canteendashboard.php";
    } else {
        alert("Invalid username or password!");
    }

    return false; // prevent form from submitting traditionally
}
</script>

</body>
</html>
