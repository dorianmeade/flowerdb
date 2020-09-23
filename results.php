<html>
<head>
    <title>Flowers</title>
<style>
body{
    background-image: url("be76be7b61e96c35ed68b315026c70b3.png");
    background-color: #FFFFE0;
    background-size: 300px;
    background-repeat: repeat;
}
.heading {
color: white;
    font-family: Courier;
    text-align: center;
    border-radius: 20px;
    width: 400px;
    background: rgba(255, 165, 0, 0.95);
    padding: 0.8em 0.5em 0.8em 0.5em;
    margin: auto;
    margin-bottom: 20px;
    font-size: 35px;
}
.heading2 {
color: white;
    font-family: Courier;
    text-align: center;
    border-radius: 20px;
    width: 600px;
    background: rgba(4, 155, 39, 0.95);
    padding: 0.5em 0.5em 0.5em 0.5em;
    margin: auto;
    margin-bottom: 30px;
    font-size: 35px;
}
.descrip{
color: white;
    font-family:Courier;
    text-align: center;
    border: 5px double white;
    background-color: rgba(255, 165, 0, .95);
    padding: 0.5em 0.5em 0.5em 0.5em;
    border-radius: 5px;
    width: 500px;
    display:block;
    margin-left: auto;
    margin-right: auto;
    font-size: 16px;
}
.flows{
    color: white;
    font-family:Courier;
    text-align: center;
    border: 5px double white;
    background-color: rgba(255, 165, 0, .85);
    padding: 0.5em 0.5em 0.5em 0.5em;
    border-radius: 20px;
    width: 300px;
    display:block;
    margin-left: auto;
    margin-right: auto;
    font-size: 16px;
    cursor: pointer;
}
.flows:hover {
    background-color: #FFD887;
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
.topbtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 12px;
    background-color: #FFA500;
    border-style: outset;
    text-align: center;
    font-family: Courier;
    color: white;
    cursor: pointer;
    padding: 8px 12px;
    border-radius: 3px;
}

topbtn:hover {
    background-color: #FFD887;
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
<h2 class = "heading">Sightings Database</h2>
<p class = "descrip"><i>Click on a flower to see its most recent sightings!</i></p>
<button class = "topbtn" onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>
<script>
window.onscroll = function() {scrollFunction()};
function scrollFunction()
{
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)
    {
        document.getElementById("myBtn").style.display = "block";
    }
    else
    {
        document.getElementById("myBtn").style.display = "none";
    }
}
function topFunction()
{
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
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
$db = new MyDB();

$sql =<<<EOF
SELECT DISTINCT name FROM SIGHTINGS;
EOF;

    $ret = $db->query($sql);
    echo '<form method="POST">';
    while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
        $flowerz = $row['NAME'];
        echo "<input class = 'flows' type='submit' name='clicked' value='$flowerz' /><br/>";
        $flowerNames[] = $row['NAME'];
    }
    echo '</form>';
    
    if(isset($_POST['clicked']))
    {
        recentsightings($_POST['clicked']);
        echo "<script>";
        echo "document.getElementById('10most').scrollIntoView()";
        echo "</script>";
    }

$db->close();
    
    function recentsightings($flower)
    {
        class MyDB2 extends SQLite3 {
            function __construct() {
                $this->open('flowers.db');
            }
        }
        $db2 = new MyDB2();
        
        $sql = "SELECT * FROM sightings WHERE NAME = '$flower' ORDER BY sighted desc LIMIT 10";
        
        $ret = $db2->query($sql);
        $i = 1;
        
        echo "<p class = 'heading2' id = '10most' > Most Recent Sightings of:  " .$flower . "</p>";
        
        while($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            echo "<p class =\"styled\"> #" . $i."</p>";
            echo "<p class =\"styled\"><b>  LOCATED AT: </b>" . $row['LOCATION']."</p>";
            echo "<p class =\"styled\"><b>  SIGHTED BY: </b>" . $row['PERSON'] ."</p>";
            echo "<p class =\"styled\"><b>  ON: </b>" . $row['SIGHTED'] ."</p>";
            echo "<p></p>";
            $i++;
        }
        $db2->close();

    }

?>

