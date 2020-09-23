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
.formstyle{
    color: white;
    font-family:Courier;
    font-size: 30px;
    text-align: center;
    border: 5px double white;
    background-color: rgba(255, 165, 0, .9);
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
    background-color: rgba(255, 165, 0, .9);
}
.descrip{
    color: white;
    font-family:Courier;
    text-align: center;
    border: 5px double white;
    background-color: rgba(255, 165, 0, .95);
    padding: 0.7em 0.5em 0.7em 0.5em;
    border-radius: 5px;
    width: 400px;
    display:block;
    margin-left: auto;
    margin-right: auto;
    font-size: 16px;
    margin-bottom: 10px;
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

<button class = "button" onclick="location.href='updating.php'">Back</button>
<h2 class = "heading" >Update Form</h2>
<p class = "descrip"><i>Must enter correct old species!</i></p>

<form class = 'formstyle' action='' method = 'POST'>
Old species: <input type='text' name='old'><br>
New species: <input type='text' name='new'><br>
<input class = 'button2' type='submit' name = 'update' value='Update'>
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
    
    if(isset($_POST['update']))
    {
        $old = $_POST['old'];
        $new = $_POST['new'];
        if($old != NULL && $new != NULL)
        {
            checkFlower($old, $new);
        }
        else
        {
            echo "<p class = 'styled' > You didn't complete the form! </p>";
        }
    }
    
    function checkFlower($old, $new)
    {
        $db2 = new MyDB();
        $check = "SELECT COUNT(*) FROM FLOWERS WHERE GENUS LIKE '$old'";
        $run = $db2->query($check);
        $num = $run->fetchArray(SQLITE3_ASSOC);
        $test = array_values($num);
        $db2->close();
        #if flower exists in db, update given user input
        if($test[0] == 1)
        {
            update($old, $new);
        }
        else
        {
            echo "<p class = 'styled' > Sorry, this flower does not exist in database! </p>";
        }
    }
    
    function update($old, $new)
    {
        $db = new MyDB();
        $sql = "UPDATE FLOWERS SET SPECIES = '$new' WHERE SPECIES LIKE '$old'";
        $ret = $db->exec($sql);
        $db->close();
        echo "<p class = 'styled' > The flower's species has been updated! </p>";
    }
    ?>

