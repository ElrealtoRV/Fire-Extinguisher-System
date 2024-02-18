
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
        <body>
        <div class="container">
            <div class="LoginBox">
            <img src="img/fire.png" alt="Fire Extinguisher">
                <h2>Login</h2>
                <div class="card">
                    
                        <form method="POST" action="{{ route('Auth/head/login') }}">
                            @csrf
                            <div class="card">
                                <input type="text" id="username" name="username" placeholder="Enter your Username">
                                <input type="password" id="password" name="password" placeholder="Enter your Password" required>

                                <div class="remember-me">
                                    <div class="checkbox">
                                        <input type="checkbox" id="rememberMe" name="rememberMe">
                                        <label  class="me" for="rememberMe">Remember Me</label>
                                    </div>
                                    <div class="forgot-password">
                                        <a href="#">Forgot Your Password?</a>
                                    </div>
                                </div>

                                <button type="submit" class="btn">Login</button>
                            </div>
                            @if(session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif  
            </form>

                <p>Don't have an account? <a href="signup">Register</a></p>
            </div>
        </div>
        </body>
    </html>
