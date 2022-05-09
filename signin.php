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
                <h2>Sign In</h2>
            </div>

            <form action="">
                <div class="form-element">
                    <label>Email</label>
                    <input type="text" placeholder="Enter email" name="email"><br>
                </div>
                
                <div class="form-element">
                    <label>Password</label>
                    <input type="password" placeholder="Enter password" name="password"><br>
                </div>

                <div class="form-element">
                    <input class="button" type="submit" value="Sign in">
                </div>
            </form>
            <?php
            if(isset($_POST['email']))
            {
                $connection=mysqli_connect('127.0.0.1', 'root', 'juniorm', 'crimeport', '4000') or die('Failed'.mysqli_error());
		    $query="SELECT fname FROM members WHERE 
				(email='".$_POST['email']."') AND (password='".md5($_POST['password'])."')";
		    $result=mysqli_query($query);
		    if(mysqli_num_rows($result)==1)
		    {
			    echo 'Credentials valid. Not really sure where we go from here...';
		    }
            else
            {
                echo "Invalid login details. You suck.";   
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
