<!DOCTYPE html>
<html>
    <body>
        <main class="container">
            <h1>Member Login</h1>
            <p>
                For new members, please go to the
                <a href="register.php">Register page</a>.
            </p>
            <form action="process_login.php" method="post">
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

                <div  class="form-group">
                    <button class="btn btn-primary" type="submit">Log In</button>
                </div>

            </form>
        </main>
    </body>
</html>