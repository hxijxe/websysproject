document.addEventListener('DOMContentLoaded', () => {
    // Add an event listener to the window unload event
    window.addEventListener('beforeunload', function () {
        $.ajax({

            type: "POST",
            url: "logout.php",

        });
    });
});

