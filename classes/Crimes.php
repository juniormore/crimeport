<?php
include 'config.inc.php';
class Crimes
{
    public function getAllCrimes()
    {
        $con=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die('Failed'.mysqli_error());
        $query="SELECT name FROM crimes";
	    $result=mysql_query($query);
	    $crimes=array();
	    if($result)
        {
            while($row=mysql_fetch_array($result))
			{
			    $crimes[]=$row['name'];
			}
            return $crimes;
        }
    }
}
?>