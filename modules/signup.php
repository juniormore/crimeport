<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Crime Watch</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="header">
		<a href="#default" id="logo">Crime Watch</a>
		<div class="nav">
			<a class="active" href="index.php">Home</a>
			<a href="signup.php">Sign Up</a>
			<a href="signin.php">Sign In</a>
        </div>			
	</div>
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
            // database connection code
            if(isset($_POST['fname']))
            {
                // connection details
                $connection = mysqli_connect('localhost', 'root', 'RT@2001_5', 'crimewatch') or die('Failed'.mysql_error());

                // get the post records

                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $password = ($_POST['password']);

                // Insert code
                $sql = "INSERT INTO members VALUES ('$fname', '$lname', '$email', '".md5($password)."')";

                // insert in database 
                $result = mysqli_query($connection, $sql);
                if($result)
                {
	            echo "Sign up successful!";
                }
                mysqli_close();
            }
            ?>
        </div>
    </div>
    <footer>
        <p>&#169 2022 JEW. All rights reserved.</p>
    </footer>
</body>
</html>
