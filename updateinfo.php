<html>
 <head>
  <title>Flower Info</title>
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
    width: 500px;
    background: rgba(255, 165, 0, 0.95);
    padding: 0.8em 0.5em 0.8em 0.5em;
    margin: auto;
    margin-bottom: 20px;
    font-size: 35px;
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

.topbtn:hover {
    background-color: #FFD887;
}
.descrip{
color: white;
    font-family:Courier;
    text-align: center;
    border: 5px double white;
    background-color: rgba(255, 165, 0, .95);
    padding: 0.7em 0.5em 0.7em 0.5em;
    border-radius: 5px;
    width: 500px;
    display:block;
    margin-left: auto;
    margin-right: auto;
    font-size: 16px;
    margin-bottom: 10px;
    cursor: pointer;
}
.descrip:hover {
    background-color: #FFD887;
}
.flows{
    color: white;
    font-family:Courier;
    text-align: center;
    border: 5px double white;
    background-color: rgba(255, 165, 0, .9);
    padding: 0.7em 0.5em 0.7em 0.5em;
    border-radius: 20px;
    width: 425px;
    display:block;
    margin-left: auto;
    margin-right: auto;
    font-size: 16px;
}
</style>
</head>
<body>
<button class = "button" onclick="location.href='home.php'">Return to home</button>
<h2 class = "heading">Flower Database</h2>

<button class = "descrip" onclick="location.href='updating.php'"><i>Click here to update any flower's information!</i></button>

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

    $sql = "SELECT * FROM FLOWERS ORDER BY COMNAME";
    
    $ret = $db->query($sql);
    while($row = $ret->fetchArray(SQLITE3_ASSOC))
    {
        $gen = $row['GENUS'];
        $spe = $row['SPECIES'];
        $flo = $row['COMNAME'];
        echo "<p class = 'flows'> Common name: $flo <br/> Genus: $gen <br/> Species: $spe <br/>";
    }
    
    $db->close();

?>
