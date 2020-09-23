<html>
<head>
<title>Updating</title>
<style>
body{
    background-image: url("be76be7b61e96c35ed68b315026c70b3.png");
    background-color: #FFFFE0;
    background-size: 300px;
    background-repeat: repeat;
}
.heading{
    color: white;
    font-family:Courier;
    font-size: 30px;
    text-align: center;
    border: 5px double white;
    background-color: rgba(255, 165, 0, .95);
    padding: 0.5em 0.5em 0.5em 0.5em;
    border-radius: 20px;
    width: 450px;
    margin-left: auto;
    margin-right: auto;
}
.button {
    background-color: #FFA500;
    border-style: outset;
    color: white;
    padding: 8px 12px;
    text-align: center;
    font-family: Courier;
    font-size: 12px;
    cursor: pointer;
    border-radius: 3px;
}
.button:hover {
    background-color: #FFD887;
}
.button2{
    color: white;
    font-family:Courier;
    text-align: center;
    border: 5px double white;
    background-color: rgba(255, 165, 0, .9);
    padding: 0.5em 0.5em 0.5em 0.5em;
    border-radius: 20px;
    width: 250px;
    display:block;
    margin-left: auto;
    margin-right: auto;
    font-size: 16px;
    cursor: pointer;
}
.button2:hover {
    background-color: #FFD887;
}
.button3 {
    background-color: rgb(255, 255, 255);
    border: 5px double gray;
    color: gray;
    padding: 8px 12px;
    text-align: center;
    font-family: Courier;
    font-size: 12px;
    cursor: pointer;
    border-radius: 3px;
    margin-top: 10px;
}
.button3:hover {
    background-color: rgba(50, 196, 84, 0.9);
}
</style>
</head>
<body>


<button class = "button" onclick="location.href='updateinfo.php'">Return to flower info</button>

<h2 class = "heading" >Select an item to update</h2>

<form method = "POST">
<input class = "button2" type='submit' name='comname' value='Common name' /><br/>
<input class = "button2" type='submit' name='genus' value='Genus' /><br/>
<input class = "button2" type='submit' name='species' value='Species' /><br/>
</form>

</body>
</html>


<?php
    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('flowers.db');
        }
    }
    
    if(isset($_POST['comname']))
    {
        echo "<script>";
        echo "document.location.href = 'updateName.php'";
        echo "</script>";
    }
    if(isset($_POST['genus']))
    {
        echo "<script>";
        echo "document.location.href = 'updateGenus.php'";
        echo "</script>";

    }
    if(isset($_POST['species']))
    {
        echo "<script>";
        echo "document.location.href = 'updateSpecies.php'";
        echo "</script>";
    }
    
    ?>
