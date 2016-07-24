<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
                <script src="Check.js"> </script>

        <?php
    session_start();
    require('Header.html');
    include_once 'MySQLConnect.php';
    $Connect = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($Connect,'DataBaseConnection');
     
    
    if(isset($_POST['submitted'])){
        $User = $_POST['username'];
        $Find = "SELECT Password FROM test WHERE User = '$User'";
        $Data = mysqli_query($Connect, $Find);
        $Fetch = mysqli_fetch_array($Data,MYSQLI_BOTH);
        $Lock = $Fetch['Password'];
                if((!empty($_POST['username']))&&(!empty($_POST['password']))){
                if(($_POST['password']== $Lock)){
                    $_SESSION['MemberSession'] = $_POST['username'];
                    header("Location: index.php");
                }
                else{
                        echo '<p align="left"><b>Wrong password</b></p>';
                }
            }
            else{
                echo '<p align="left"><b>Please enter both your username and password</b></p>';
            }
            $MySQLi_CON->close();
    }
    else{
            print '<form action="login.php" method="post" onsubmit="return FormCheck(this);">'.
                '<table align="left">'.
                    
                '<tr><td>'.
                '<p><b>Username:</b></td><td>'.
                '<input type="text" name="username" size="20"/></p></td></tr>'.
                
                '<tr><td>'.
                '<p><b>password:</b></td><td>'.
                '<input type="password" name="password" size="20"/></p></td></tr>'.
                
                '<tr><td>'.    
                '<p><input type="submit" name="submit" value"login"/></p>'.
                '<input type="hidden" name="submitted" value="true"/></form></td></tr>'.
                '</table>';
    }
    
        require('Footer.php');
        ?>
    </body>
</html>
