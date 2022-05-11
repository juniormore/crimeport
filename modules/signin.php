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
            include 'classes/Accounts.php';
            if(isset($_POST['email']))
            {
                signIn();
            }   
        ?>
            
        ?>
        </div>
    </div>
