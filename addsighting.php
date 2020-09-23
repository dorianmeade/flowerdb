<html>
 <head>
  <title>New Flower Sighting</title>
<style>
body{
    background-image: url("be76be7b61e96c35ed68b315026c70b3.png");
    background-color: #FFFFE0;
    background-size: 300px;
    background-repeat: repeat;
}
.formstyle{
    color: white;
    font-family:Courier;
    font-size: 30px;
    text-align: center;
    border: 5px double white;
    background-color: rgba(255, 165, 0, .85);
    padding: 0.5em 0.5em 0.5em 0.5em;
    border-radius: 20px;
    width: 400px;
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
.button2 {
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
.button2:hover {
    background-color: rgba(255, 165, 0, .85);
}
.heading {
    color: white;
    font-family: Courier;
    text-align: center;
    border-radius: 20px;
    width: 300px;
    background: rgba(255, 165, 0, 0.95);
    padding: 0.5em 0.5em 0.5em 0.5em;
    margin: auto;
    margin-bottom: 20px;
    font-size: 35px;
}
.styled{
    color: white;
    font-family:Courier;
    font-size: 20px;
    text-align: center;
    background: rgba(50, 196, 84, 0.9);
    padding: 0.3em 0.3em 0.3em 0.3em;
    width: 400px;
    margin: auto;
}
</style>
 </head>
 <body>

<button class = "button" onclick="location.href='home.php'">Return to home</button>
<h2 class = "heading">Sightings Form</h2>
<form class = "formstyle" action="" method = "POST">
First Name: <input type="text" name="person"><br>
Flower Name: <input type="text" name="name"><br>
Date: <input type="text" name="sighted" maxlength="10" placeholder="YYYY-MM-DD"><br>
Location: <input type="text" name="location"><br>
<input class = "button2" type="submit" name = "submitBtn" value="Submit new sighting">
</form>

 </body>
</html>

<?php
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('flowers.db');
        }
    }
    
    if(isset($_POST['submitBtn'])){
        $first = $_POST['person'];
        $flower = $_POST['name'];
        $loc = $_POST['location'];
        $date = $_POST['sighted'];
        
        #check for input, then check if flower exists in db
        if($first != NULL && $flower != NULL && $loc != NULL && $date != NULL)
        {
            checkFlower($first, $flower, $loc, $date);
        }
        if($first == NULL && $flower == NULL && $loc == NULL && $date == NULL)
        {
            echo "<p class = 'styled' > You didn't complete the form! </p>";
        }
    }
    
    function checkFlower($first, $flower, $loc, $date)
    {
        $db2 = new MyDB();
        $check = "SELECT COUNT(*) FROM FLOWERS WHERE COMNAME LIKE '%$flower%'";
        $run = $db2->query($check);
        $num = $run->fetchArray(SQLITE3_ASSOC);
        $test = array_values($num);
        $db2->close();
        if($test[0] == 1)
        {
            #if flower exists, then check if location exists in db
            checkLocation($first, $flower, $loc, $date);
        }
        else
        {
            echo "<p class = 'styled' > Sorry, this flower does not exist in database! </p>";
        }
    }
    
    function checkLocation($first, $flower, $loc, $date)
    {
        $db3 = new MyDB();
        $check = "SELECT COUNT(*) FROM FEATURES WHERE LOCATION LIKE '%$loc%'";
        $run = $db3->query($check);
        $num = $run->fetchArray(SQLITE3_ASSOC);
        $test = array_values($num);
        $db3->close();
        if($test[0] == 1)
        {
            #if location exists, add new sighting
            addNew($first, $flower, $loc, $date);
        }
        else
        {
            echo "<p class = 'styled' > Sorry, this location does not exist in database! </p>";
        }
    }
    function addNew($first, $flower, $loc, $date)
    {
        $db = new MyDB();
        $sql = "INSERT INTO SIGHTINGS (name, person, location, sighted) VALUES ('$flower', '$first', '$loc', '$date')";
        $ret = $db->exec($sql);
        $db->close();
        
        echo "<p class = 'styled' > Your flower sighting has been added to the database! </p>";
    }

    ?>
