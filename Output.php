<?php

session_start();

if($_SERVER['QUERY_STRING']=='logout'){ //code for logout
    //unset($_SESSION['name']);
    session_unset();
    header('Location: index.php '); //redirection to index.php
}

//giving values to the variables
$fst_name = $_SESSION['fst_name'];
$lst_name = $_SESSION['lst_name'];
$email = $_SESSION['email'];
$dob = $_SESSION['dob'];



?>

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Output page</title>
        <link href="Static/Main.css" rel="stylesheet">
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    </head>

    <body>
        <header>
            <h1 class="center header-text">Output</h1>
        </header>

        <section class="container">
            <div class="form-container"> <!--Displaying of inputted data-->
        <p>First Name: <?php echo $fst_name; ?></p>
        <p>Last Name: <?php echo $lst_name; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <p>Date of Birth: <?php echo $dob; ?></p>
        <a href="index.php?logout">Do new registration</a>
    </div>
    </section>

    <footer class="orange footer-output">
     <p>&copy; Aditya Bikram Arandhara</p>
    </footer>


    </body>
</html>