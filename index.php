
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome to Music Network Record Albums</title>
    </head>
    <body>
        <?php
        session_start();
        require('Header.html');
        $Database = mysqli_connect('localhost', 'root', '');
        @mysql_query('CREATE DATABASE MainDatabase');
        @mysql_select_db('DataBaseConnection');
        ?>
        
        <h1>
                Welcome to Music Network, where all your songs and albums play
            </h1>
            <p>This site is to let members enjoy weekly selections of music
                played here for their daily dose of songs. </p>
            <br><br>
                <p>These Musics are 
                the works of the singers and musicians are not affiliated to
                the Music Network Record Album in any way, please pay tribute 
                to them on their respective social media as we promote their 
                songs and albums here.
            </p>
            
        
        
        <?php
        require('Footer.php');
        ?>
    </body>
</html>
