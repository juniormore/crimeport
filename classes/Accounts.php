<?php
include 'config.inc.php';
class Accounts
{
    public function signIn()
    {
        $con=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die('Failed'.mysqli_error());
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

    public function signUp()
    {
        // connection details
        $con=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die('Failed'.mysqli_error());

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
        else
        {
            echo "Something went wrong.";
        }
        mysqli_close();
    }
}
?>