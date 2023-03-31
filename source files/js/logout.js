document.addEventListener('DOMContentLoaded', () => {
// Set the session timeout to 5 mins
    var sessionTimeout = 300000;

// Set the initial delay to 25 mins
    var initialDelay = 1400000;

// Set the maximum number of prompts to 3
    var maxPrompts = 3;
    var numPrompts = 0;

// Set a variable to indicate whether the user is logged in
//     var isLoggedIn = false;

// Function to start the session timer and prompt the user to extend their session
    function startSessionTimer() {
        // Start the timer when the user logs in
        var timer = setInterval(function() {
            // Show a prompt to ask the user if they want to extend their session
            if (isLoggedIn() && numPrompts < maxPrompts) {
                var extendSession = confirm("Your session will expire in 15 minutes. Do you want to extend your session?");
                if (extendSession) {
                    // Reset the timer and start again
                    clearInterval(timer);
                    numPrompts++;
                } else {
                    // Log the user out
                    logout();
                }
            } else {
                // Log the user out if they have reached the maximum number of prompts
                logout();
                numPrompts++;
            }

        }, sessionTimeout);

        // Reset the timer on any user activity
        document.addEventListener('click', function() {
            clearTimeout(timer);
            numPrompts = 0;
        });
    }

// Function to recursively loop the startSessionTimer function
    function loopSessionTimer() {
        // Call the startSessionTimer function to start the session timer
        startSessionTimer();

        // Call the loopSessionTimer function again after the session ends
        setTimeout(loopSessionTimer, sessionTimeout);
    }

// Delay the initial call to loopSessionTimer by 1 hour
    setTimeout(loopSessionTimer, initialDelay);

// Function to log the user out
    function logout() {
        // Send an AJAX request to the server to destroy the session
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'logout.php', false);
        xhr.send();
        // Redirect the user to the logout page
        window.location.href = 'logout.php';
    }

// Function to set the isLoggedIn variable
    function isLoggedIn() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'check_login.php', false);
        xhr.send();

        if (xhr.status === 200 && xhr.responseText === "true") {
            // User is logged in
            return true;
        } else {
            // User is not logged in or there was an error
            return false;
        }
    }



});


