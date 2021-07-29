<?php

if(isset($_POST['submit'])){ //if submit button is pressed
    $fst_name = $_POST['fst_name'];
    $lst_name = $_POST['lst_name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $psswd = $_POST['psswd'];
    $cnfrm_psswd = $_POST['cnfrm_psswd'];

    if($psswd==$cnfrm_psswd){  //If password & confirm password are equal
        session_start();   //Starting of session
        $_SESSION['fst_name'] = $fst_name;
        $_SESSION['lst_name'] = $lst_name;
        $_SESSION['email'] = $email;
        $_SESSION['dob'] = $dob;
        header('Location: Output.php');  //Directing to Output.php
    }

    else{
        echo "Password and Confirm Password must be same!!!";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration form</title>
        <link href="Static/Main.css" rel="stylesheet">
        <link src="Static/Clear.js" type="text/javascript"></script>
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    </head>

    <body>
        <header>
            <h1 class="center header-text">Registration form</h1>
        </header>

        <section class="container">
            <div class="form-container">
        <form action="index.php" method="POST">  <!--Form-->
            <label>First Name:</label>
            <input type="text" name="fst_name" id="fst_name" required><br>

            <label>Last Name:</label>
            <input type="text" name="lst_name" id="lst_name" required><br>

            <label>Email Address(Ex. somthing@example.com):</label>
            <input type="email" name="email" id="email" required><br>

            <label>Date of Birth(User must be atleast 18 years old):</label>
            <input type="date" name="dob" id="dob" required><br>

            <label>Password(Password must be atleast 8 characters long with atleast 1 speacial character(Ex. Adi@1234)):</label>
            <input type="password" name="psswd" id="psswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[0-9])(?=.*?[!@#$%^&*+`~=?\|<>/]).{8,}" required><br>

            <label>Confirm Password:</label>
            <input type="password" name="cnfrm_psswd" id="cnfrm_psswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[0-9])(?=.*?[!@#$%^&*+`~=?\|<>/]).{8,}" required><br>
            
            <div class="center">
            <input type="submit" class="btn" value="Submit" name="submit"> <!--Submit button-->
            
            <button class="btn" onclick="clear()">Clear</button><!--Clear button-->
        </div>
        </form>
    </div>
    </section>

    <footer class="orange footer-index">
     <p>&copy; Aditya Bikram Arandhara</p>
    </footer>


    </body>
</html>