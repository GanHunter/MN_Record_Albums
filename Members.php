
<html>
    <head>
        <meta charset="UTF-8">
        <title>Member Profile</title>
    </head>
    <body>
        <?php
    session_start();
    require('Header.html');
    include_once 'MySQLConnect.php';
    
    $Connect = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($Connect, 'DataBaseConnection');
    
        $User = $_SESSION['MemberSession'];
        $Find = "SELECT RealName,Email,Date FROM test WHERE User = '$User'";
        $Data = mysqli_query($Connect, $Find);
        $Fetch = mysqli_fetch_array($Data,MYSQLI_BOTH);
        
        $name=$Fetch['RealName'];
        $email=$Fetch['Email'];
        $dob=$Fetch['Date'];
        
    if(isset($_POST['submit'])){ 
        header("Location: EditMember.php");
    }
    ?>
        
        
        <font size="8">Profile</font><br>
        <form action="Members.php" method="post">
    <table align="center">
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name" disabled="disabled" value="<?php echo $name; ?>"></td>
                </tr>
                <tr>
                      
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" disabled="disabled" value="<?php echo $email; ?>"></td>
                </tr>
                
                <tr>
                    <td>Birthday: </td>
                    <td><input type="date" name="date" disabled="disabled" value="<?php echo $dob; ?>"></td>
                </tr>
                <br>
                <tr>
                    <td>Do You want to Edit Profile?</td>
                    <td><input type="submit" name="submit" align="left" value="Change"/></td>
                </tr>
            </table>
        </form>
        
        
        
        <?php
        require('Footer.php');
        ?>
    </body>
</html>
