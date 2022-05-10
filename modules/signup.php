<?php include 'includes/header.php' ?>
    <div class="main">
        <div class="form">
            
            <div id="form-header">
                <h2>Sign up</h2>
            </div>

            <form action="" method="post">
                <div class="form-element">
                    <label for="fname">First Name</label> 
                    <input type="text" placeholder="Enter first name" name="fname"><br>
                </div>    
    
                <div class="form-element">
                    <label for="lname">Last Name</label>
                    <input type="text" placeholder="Enter last name" name="lname"><br>
                </div>
    
                <div class="form-element">
                    <label>Email</label>
                    <input type="text" placeholder="Enter email" name="email"><br>
                </div>
                
                <div class="form-element">
                    <label>Password</label>
                    <input type="password" placeholder="Enter password" name="password"><br>
                </div>

                <div class="form-element">
                    <!--<button type="button" class="button">Sign Up</button>-->
                    <input class="button" type="submit" value="Sign Up">
                </div>
            </form>

            <?php
            include 'classes/Database.php';
            // database connection code
            $db = new Database;
            if(isset($_POST['fname']))
            {
                // connection details
                //$connection = mysqli_connect('localhost', 'root', 'RT@2001_5', 'crimewatch') or die('Failed'.mysql_error());

                // get the post records

                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $password = ($_POST['password']);

                // Insert code
                $sql = "INSERT INTO members VALUES ('$fname', '$lname', '$email', '".md5($password)."')";

                // insert in database 
                $result = mysqli_query($sql);
                if($result)
                {
	            echo "Sign up successful!";
                }
                mysqli_close();
            }
            ?>
        </div>
    </div>
    <?php include 'includes/footer.php' ?>
