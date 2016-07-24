<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Profile</title>
    </head>
    <body>
        <?php
        
    session_start();
    require('Header.html');
    include_once 'MySQLConnect.php';
    
    $Connect = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($Connect, 'DataBaseConnection');
        $User = $_SESSION['MemberSession'];
        $Find = "SELECT RealName,Password,Email,Date FROM test WHERE User = '$User'";
        $Data = mysqli_query($Connect, $Find);
        $Fetch = mysqli_fetch_array($Data,MYSQLI_BOTH);
        
        $name=$Fetch['RealName'];
        $pass=$Fetch['Password'];
        $email=$Fetch['Email'];
        $dob=$Fetch['Date'];
        
    if(isset($_POST['submit'])){ 
        $username = $_SESSION['MemberSession'];
        $name = $MySQLi_CON->real_escape_string(trim($_POST['name']));
        $password= $MySQLi_CON->real_escape_string(trim($_POST['password']));
        $email= $MySQLi_CON->real_escape_string(trim($_POST['email']));
        $date= $MySQLi_CON->real_escape_string(trim($_POST['date']));
        $query = "UPDATE test SET RealName='$name',Password='$password',Email='$email',Date='$date' WHERE User='$User'";
        header("Location: Members.php");
        if($MySQLi_CON->query($query)){
			$msg = "<div class='alert alert-success' align='center'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Update Successfull
					</div>";
                        echo $msg;
		}
		else
		{
			$msg = "<div class='alert alert-danger' align='center'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Update Error
					</div>";
                        echo $msg;
		}
    }    
    
    
    
    
        ?>
        
        <form action="EditMember.php" method="post">
    <table align="center">
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
                </tr>
                
                
                <tr>
                    <td>New Password: </td>
                    <td><input type="text" name="password" value="<?php echo $pass; ?>"></td>
                </tr>   
                
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
                </tr>
                
                <tr>
                    <td>Birthday: </td>
                    <td><input type="date" name="date" value="<?php echo $dob; ?>"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" align="center" value="Submit"/></td>
                </tr>
                
            </table>
        </form>
        
    <?php
    require('Footer.php');
    ?>    
        
        
    </body>
</html>
