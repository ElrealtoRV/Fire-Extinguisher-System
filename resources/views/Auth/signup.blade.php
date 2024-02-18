<!-- resources/views/signup.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="container">
        <div class="LoginBox">
            <div class="logo">
                <img src="{{ asset('img/fire.png') }}" alt="Fire Extinguisher">
                <h2>Sign Up</h2>
            </div>
            <div class="card">
                <form id="signupForm" action="{{ route('signup.store') }}" method="POST">
                    @csrf

                    <input type="text" id="Email" name="email" placeholder="Email">
                    <input type="text" id="EmployeeID" name="employee_id" placeholder="ID">      
                    <span class="msg"></span>

                    <input type="date" id="bdate" name="birthdate" placeholder="Enter your birthdate">
                    <input type="text" id="Username" name="username" placeholder="Username">
                    <input type="text" id="Department" name="department" placeholder="Department">
                    <input type="password" id="Password" name="password" placeholder="Password" required>
                    <input type="password" id="re-Password" name="password_confirmation" placeholder="Confirm Password" required>

                    <button type="submit" class="btns">Sign Up</button>
                </form>
            </div>

            <p>Have an Account? <a href="{{ route('Auth/login') }}">Login Now!</a></p>
        </div>
    </div>

    <script src="{{ asset('js/signup.js') }}"></script>
</body>
</html>
