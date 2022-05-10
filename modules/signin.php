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
            include 'classes/Database.php';
            $db = new Database;
            if(isset($_POST['email']))
            {
            
                //$connection=mysqli_connect('localhost', 'root', 'RT@2001_5', 'crimewatch') or die('Failed'.mysqli_error());
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
            
        ?>
        </div>
    </div>
