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
            // database connection code
            if(isset($_POST['fname']))
            {
               signUp();
            }
            ?>
        </div>
    </div>
    <?php include 'includes/footer.php' ?>
