<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Albums</title>
    </head>
    <body>
        <?php
    session_start();
    require('Header.html');
    include_once 'MySQLConnect.php';
    
    $Connect = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($Connect, 'DataBaseConnection');
    
        $ID = $_SESSION['MemberSession'];
        $Find = "SELECT id,name,size,type,content FROM music WHERE id = '$ID'";
        $Data = mysqli_query($Connect, $Find);
        $Fetch = mysqli_fetch_array($Data,MYSQLI_BOTH);
        
        $name=$Fetch['name'];
        $size=$Fetch['size'];
        $type=$Fetch['type'];
        $content=$Fetch['content'];
    
        ?>
        
        
        <?php
                if(isset($_SESSION['MemberSession'])){
                   echo'
            <p><font size="6">Globus</font></h1></p>
    <p><img src="Picture/GlobusImg.PNG" style="width:140px;height:140px;"></p>
    <p><b>Globus - Europa</b></p>
    <p> <audio controls>
            <source src="Music/Globus - Europa.mp3" type="audio/mpeg">
        Your browser does not support the audio.
        </audio></p>
    <br>
    <p><b>Globus - Crusaders of the Light</b></p>
    <p> <audio controls>
            <source src="Music/Globus - Crusaders of the Light.mp3" type="audio/mpeg">
        Your browser does not support the audio.
        </audio></p>
    <br>
    <p><b>Globus - The Promise</b></p>
    <p> <audio controls>
            <source src="Music/Globus - The Promise.mp3" type="audio/mpeg">
        Your browser does not support the audio.
        </audio></p>
    <br>
    <p><b>Globus - Preliator</b></p>
    <p> <audio controls>
            <source src="Music/Globus - Preliator.mp3" type="audio/mpeg">
        Your browser does not support the audio.
        </audio></p>
    <br>
    <hr>
    <p><font size="6">NCS Release</font></h1></p>
    <p><img src="Picture/NCSImg.PNG"></p>
    <p><b>Alex Skrindo - Get Up Again (feat. Axol)</b></p>
    <p> <audio controls>
            <source src="Music/Alex Skrindo - Get Up Again (feat. Axol) [NCS Release].mp3" type="audio/mpeg">
        Your browser does not support the audio.
        </audio></p>
    <br>
    
    <p><b>Electro-Light - Throwback</b></p>
    <p> <audio controls>
            <source src="Music/Electro-Light - Throwback [NCS Release].mp3" type="audio/mpeg">
        Your browser does not support the audio.
        </audio></p>
    <br>
    <p><b>Inukshuk - We Were Infinite</b></p>
    <p> <audio controls>
            <source src="Music/Inukshuk - We Were Infinite [NCS Release].mp3" type="audio/mpeg">
        Your browser does not support the audio.
        </audio></p>
    <br>
    <p><b>Kasger - Out Here</b></p>
    <p> <audio controls>
            <source src="Music/Kasger - Out Here [NCS Release].mp3" type="audio/mpeg">
        Your browser does not support the audio.
        </audio></p>
    <br>    
    <p><b>Phantom Sage - Silence (feat. Byndy)</b></p>
    <p> <audio controls>
            <source src="Music/Phantom Sage - Silence (feat. Byndy) [NCS Release].mp3" type="audio/mpeg">
        Your browser does not support the audio.
        </audio></p>
    <br>      
    <hr>
    
    
    <p><font size="6">MISC</font></h1></p>


            ';
    }
                else{
                    echo'<font size="8">Preview</font>
        <p><font size="6">Globus</font></p>
    <p><img src="Picture/GlobusImg.PNG" style="width:140px;height:140px;"></p>
        <br>
    <hr>
    <p><font size="6">NCS Release</font></h1></p>
    <p><img src="Picture/NCSImg.PNG"></p>
        <br>
    <hr>';
                }
                ?>
        
        
        <?php
        require('Footer.php');
        ?>
    </body>
</html>
