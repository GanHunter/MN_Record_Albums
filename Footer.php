<html>
    <head>
        <title><?php
            if(defined('TITLE')){
            print TITLE;
            }
            else{
            print 'Welcome to Music Network Record Albums';
            }
            ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
    </div>
        <div id='rightcontent' align='right'>
            <h2>Navigation</h2>
            <?php
                if(isset($_SESSION['MemberSession'])){
                   echo' <p>
                       <a href="index.php"><img src="Picture\HOME.png"></a></br>
                <a href="Albums.php"><img src="Picture\ALBUMS.png"></a></br>
                <a href="LogOut.php"><img src="Picture\LOGOUT.png"></a></br>
                <a href="Members.php"><img src="Picture\MEMBER.png"></a></br>
                            </p>';
                }
                else{
                    echo' <p>
                <a href="index.php"><img src="Picture\HOME.png"></a></br>
                <a href="Albums.php"><img src="Picture\ALBUMS.png"></a></br>
                <a href="Login.php"><img src="Picture\LOGIN.png"></a></br>
                <a href="Register.php"><img src="Picture\REGISTER.png"></a></br>
                            </p>';
                }
                ?>
                
            <p><em>
                <?php 
                date_default_timezone_set('Asia/Kuala_Lumpur');
                print date('g:i a l F j');
                ?>
            </em>    
            </p>
        </div>
        
    
    
    
    </body>
</html>
