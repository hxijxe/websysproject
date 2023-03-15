<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">
    <script defer src="js/login.js"></script>
    <title>SIT Active Gym</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<body>
    <div class="container" id="container">
    
    <div class="form-container register-container">
        <form action="#">
        <h1>Register</h1>
        <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <button>Register</button>
        <span>or use your account</span>
        <div class="social-container">
        <a href="#" class="social">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-120 0 588 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
        </a>
        <a href="#" class="social">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-50 0 588 512"><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
        </a>
        </div>
        </form>
    </div>

    <div class="form-container login-container">
        <form action="#">
        <h1>Login</h1>
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <div class="content">
            <div class="checkbox">
            <input type="checkbox" name="checkbox" id="checkbox">
            <label>Remember me</label>
            </div> 
        </div>
        <div class="content">
            <div class="pass-link">
            <a href="#">Forgot password?</a>
            </div>  
        </div>
        <button>Login</button>
        <span>or use your account</span>
        <div class="social-container">
            <a href="#" class="social">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-120 0 588 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
            </a>
            <a href="#" class="social">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-50 0 588 512"><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
            </a>
        </div>
        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
        <div class="overlay-panel overlay-left">
            <h1 class="title">Hello <br>Sitizens</h1>
            <p>Have an account? <br> Click here to login.</p>
            <button class="ghost" id="login">Login<i class="lni lni-arrow-left login"></i>
            </button>
        </div>
        <div class="overlay-panel overlay-right">
            <h1 class="title">Not a member?<br>Start your journey with us</h1>
            <p>if you don't have an account yet, sign up and start your journey with us!</p>
            <button class="ghost" id="register">Register
            <i class="lni lni-arrow-right register"></i>
            </button>
        </div>
        </div>
    </div>  
    </div>
        <!-- <div class="column gx-4 gx-lg-5 justify-content-center">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFirstName">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" required maxlength="45" placeholder="Enter First Name">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleLastName">Last Name</label>
                <input type="text" class="form-control" id="lanme" name="lname" required maxlength="45" placeholder="Enter Last Name">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required placeholder="Password">
            </div>
            <br>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div> -->
</body>

</html>