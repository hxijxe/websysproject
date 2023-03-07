<!DOCTYPE html>
<html>
    <body>
        <main class="container">
            <h1>Member Registration</h1>
            <p>
                For existing members, please go to the
                <a href="login.php">Sign In page</a>.
            </p>
            <form action="process_register.php" method="post" novalidate>


                <div  class="form-group">
                    <label for="fname">First Name:</label>
                    <input class="form-control" type="text" id="fname" 
                           name="fname"
                           maxlength="45"
                           placeholder="Enter first name">
                </div>

                <div  class="form-group">
                    <label for="lname">Last Name:</label>
                    <input class="form-control" type="text" id="lname" 
                           name="lname" required
                           maxlength="45"
                           placeholder="Enter last name">
                </div>

                <div  class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" 
                           name="email" required
                           placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input class="form-control" type="password" id="pwd" 
                           name="pwd" required
                           placeholder="Enter password">
                </div>

                <div class="form-group">
                    <label for="pwd_confirm">Confirm Password:</label>
                    <input class="form-control" type="password" id="pwd_confirm"
                           name="pwd_confirm" required
                           placeholder="Confirm password">
                </div>

                <div class="form-check">
                    <label>
                        <input type="checkbox" required name="agree">
                        Agree to terms and conditions.
                    </label>
                </div>

                <div  class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </main>
    </body>
</html>