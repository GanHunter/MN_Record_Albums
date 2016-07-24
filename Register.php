
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
    </head>
    <body>
        <?php
session_start();
define('Title', 'Register');
require('Header.html');
include_once 'MySQLConnect.php';



    if(isset($_SESSION['MemberSession'])!="")
    {
            header("Location: index.php");
    }
    

    if(isset($_POST['submit'])){ 
        
            $User = $MySQLi_CON->real_escape_string(trim($_POST['username']));
            $RealName = $MySQLi_CON->real_escape_string(trim($_POST['name']));
            $Password= $MySQLi_CON->real_escape_string(trim($_POST['pass']));
            $Date= $MySQLi_CON->real_escape_string(trim($_POST['dob']));
            $Email= $MySQLi_CON->real_escape_string(trim($_POST['email']));
            
            $check_User = $MySQLi_CON->query("SELECT User FROM test WHERE User='$User'");
            $count=$check_User->num_rows;
        
            if($count==0){
            $Find = "INSERT INTO Test(User,RealName,Password,Email,Date) VALUES('$User','$RealName','$Password','$Email','$Date')";
            
            if($MySQLi_CON->query($Find)){
			$msg = "<div class='alert alert-success' align='center'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Register Successfull
					</div>";
                        echo $msg;
		}
		else
		{
			$msg = "<div class='alert alert-danger' align='center'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Registration Error
					</div>";
                        echo $msg;
		}
            }else{
		
		
		$msg = "<div class='alert alert-danger' align='center'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Sorry, Username is Taken !
				</div>";
                echo $msg;
			
	}
                $MySQLi_CON->close();
	}
	
            	

?>
        
        <script src="Check.js"> </script>
        
        <form action="Register.php" method="post" onsubmit="return FormCheck(this);">

            <p>Enter your particulars in the boxes below</p><br>
            <table align="left">
                
                <?php
            
            if(isset($msg)){
                echo $msg;
            }
            ?>
                <tr>
                    <td><p>Username: </td>
                    <td><input type="text" name="username"></p></td>
                </tr>
                
                <tr>
                    <td><p>Name: </td>
                    <td><input type="text" name="name"></p></td>
                </tr>
                
                <tr>
                    <td><p>Password: </td>
                    <td><input type="password" name="pass"></p></td>
                </tr>
                
                <tr>
                    <td><p>Confirm password: </td>
                    <td><input type="password" name="confirm"></p></td>
                </tr>    
                
                <tr>
                    <td><p>Birthday: </td>
                    <td><input type="date" name="dob"></p></td>
                </tr>
                
                <tr>
                    <td><p>E-mail: </td>
                    <td><input type="text" name="email"></p></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" align="center" value="Register"/></td>
                </tr>
                
            </table>
        </form>
        
        <?php
        require('Footer.php');
        ?>
    </body>
</html>
