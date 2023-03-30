<?php
// Start the session
//include "includes/protect.php";
?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <!-- <script defer src="js/admin.js"></script> -->
    <title>Admin </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<?php
include "nav.inc.php";
?>

<body id=test>

    <main>
        <!-- ======= Contact Section ======= -->

        <div id=test>
            <h2>Dashboard</h2>
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1">Manage Classes</label>
            <input id="tab2" type="radio" name="tabs">
            <label for="tab2">Manage Blogposts</label>
            <input id="tab3" type="radio" name="tabs">
            <label for="tab3">Manage Feedback</label>

            <section id="content1">
                <?php
                retrieveDB();
                ?>


            </section>
            <section id="content2">
                <h3>Something</h3>
                <p>Aliquam condimentum hendrerit nisi, nec vestibulum mi feugiat ut. Donec lobortis nisi neque, in egestas eros venenatis eu. Vestibulum nulla nisi, venenatis at pretium id, fermentum quis risus. Quisque porta suscipit neque eu placerat. Etiam scelerisque, quam in sodales iaculis, velit velit mattis nunc, quis dapibus massa elit nec enim. Vivamus quis libero aliquam, volutpat nisl sed, consectetur ante. Donec aliquam semper felis, in placerat leo blandit in. Integer interdum elit quis felis tempor venenatis. In faucibus ac mauris id commodo. Proin in sapien tincidunt, luctus mi id, bibendum dui. Nunc tincidunt libero ut purus vehicula, sit amet tincidunt mi sollicitudin. Donec varius erat magna, sed convallis purus adipiscing ut. Duis sagittis ut leo ut auctor. Ut convallis nisl nec purus sollicitudin, nec iaculis felis rutrum. </p>
            </section>
            <section id="content3">
                <h3>Heading Text</h3>
                <p>Fusce pulvinar porttitor dui, eget ultrices nulla tincidunt vel. Suspendisse faucibus lacinia tellus, et viverra ligula. Suspendisse eget ipsum auctor, congue metus vel, dictum erat. Aenean tristique euismod molestie. Nulla rutrum accumsan nisl, ac semper sapien tincidunt et. Praesent tortor risus, commodo et sagittis nec, aliquam quis augue. Aenean non elit elementum, tempor metus at, aliquam felis.</p>
            </section>

        </div>
    </main>



    
    <div>
        <?php
        include "footer.inc.php";
        ?>
        <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
        </script>
        <!--Bootstrap JS-->
        <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
        </script>
        <script defer src="js/scripts.js"></script>
    </div>
</body>


</html>