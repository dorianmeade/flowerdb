<html>
<head>
<title>SSWC</title>
<style>
body{
    background-image: url("be76be7b61e96c35ed68b315026c70b3.png");
    background-color: #FFFFE0;
    background-size: 300px;
    background-repeat: repeat;
}
button {
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
button:hover {
    background-color: #FFD887;
}
.descrip{
    color: white;
    font-family:Courier;
    text-align: center;
    border: 5px double white;
    background-color: rgba(255, 165, 0, .95);
    padding: 0.6em 0.5em 0.6em 0.5em;
    border-radius: 5px;
    width: 450px;
    display:block;
    margin-left: auto;
    margin-right: auto;
    font-size: 16px;
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
.styled{
    color: white;
    font-family:Courier;
    border: 10px double;
    border-radius: 5px;
    font-size: 20px;
    text-align: center;
    background: rgba(50, 196, 84, 0.95);
    padding: 0.3em 0.3em 0.3em 0.3em;
    width: 500px;
    margin: auto;
    position: fixed;
    top: 50%;
    left: 50%;
    margin-top: -100px;
    margin-left: -250px;
}
</style>
</head>

<body>
<button onclick="location.href='home.php'">Return to home</button>
<h2 class = "heading">Photo Database</h2>
<p class = "descrip"><i>Click on a flower to see its name!</i></p>
<button class = "topbtn" onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>

<form method="post">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="Aquilegia_alpina_001-1.JPG" style="width: 100%" name = "click" value="Alpine Columbine">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="Lewisia_pygmaea_image60.jpg" style="width: 100%" name = "click" value="Alpine Lewisia">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="060713-070-lyell-alpine-penstemon.jpg" style="width: 100%" name = "click" value="Alpine Penstemon">

<p style="clear: both;">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="053f47e9a3dd926d3146e2e4d1c44cfd.jpg" style="width: 100%" name = "click" value="Alpine Sheep Sorrel">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="5983732328_a9b79ff051_b.jpg" style="width: 100%" name = "click" value="Bridges Gilia">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="25282.jpg" style="width: 100%" name = "click" value="Broad-seeded rock-cress">

<p style="clear: both;">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="wfshl-butterandeggs2.jpg" style="width: 100%" name = "click" value="Butter and eggs">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="6a00d8341c630a53ef014e5f6ac93e970c-500wi.jpg" style="width: 100%" name = "click" value="California flannelbush">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="B204_1256.jpg" style="width: 100%" name = "click" value="Canyon dudleya">

<p style="clear: both;">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="0000_0000_0805_1373.jpeg" style="width: 100%" name = "click" value="Condensed phlox">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="35993177242_59c0d92082_b.jpg" style="width: 100%" name = "click" value="Cow parsnip">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="death-camas-1.jpg" style="width: 100%" name = "click" value="Death camas">

<p style="clear: both;">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="dsc04432-2.jpg" style="width: 100%" name = "click" value="Diamond clarkia">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="chaenactis-douglasii7.jpg" style="width: 100%" name = "click" value="Douglas dustymaiden">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="905b93260fff19b240f80a0f60a8ae24.jpg" style="width: 100%" name = "click" value="Doves-foot geranium">

<p style="clear: both;">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="Draperia_systyla.jpg" style="width: 100%" name = "click" value="Draperia">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="fireweed+with+bees.jpg" style="width: 100%" name = "click" value="Fireweed">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="flower cluster.jpg" style="width: 100%" name = "click" value="Globe gilia">

<p style="clear: both;">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="30294392136_8f7d536714_b.jpg" style="width: 100%" name = "click" value="Hartwegs wild ginger">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="Hoary Buckwheat 1.JPG" style="width: 100%" name = "click" value="Hoary buckwheat">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="ithuriels-spear.png" style="width: 100%" name = "click" value="Ithuriels spear">

<p style="clear: both;">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="Sandwort,king's_smooth-1.jpg" style="width: 100%" name = "click" value="Kings sandwort">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="false_solomons_seal_01-01-14.jpg" style="width: 100%" name = "click" value="Large false Solomons seal">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="Lupinus_Polyphyllus_Seeds_Large-leaved_Lupine_Flower_Seeds_Garden_Lupine_Yushan_Dou_3_1024x1024.jpg" style="width: 100%" name = "click" value="Large-leaved lupine">

<p style="clear: both;">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="leopardlily.jpg" style="width: 100%" name = "click" value="Leopard Lily">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="Herb-Lovage-HB153-Levisticum-off.jpg" style="width: 100%" name = "click" value="Lovage">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="29387_orig.jpg" style="width: 100%" name = "click" value="Mud sedge">

<p style="clear: both;">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="Modjeska Pk., Orange Co., CA.4-5-12 171.jpg" style="width: 100%" name = "click" value="Oak violet">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="Pussy_Paws-3.jpg" style="width: 100%" name = "click" value="One-seeded pussy paws">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="2797329545_73449b7dd2_b.jpg" style="width: 100%" name = "click" value="One-sided wintergreen">

<p style="clear: both;">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="Castilleja_exserta_image5.jpg" style="width: 100%" name = "click" value="Pale owls clover">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="Mimulus_primuloides_image4.jpg" style="width: 100%" name = "click" value="Primrose monkeyflower">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="7007-Polaris-Purple-Penstemon.jpg" style="width: 100%" name = "click" value="Purple penstemon">

<p style="clear: both;">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="sphenosciadium-capitellatum4.jpg" style="width: 100%" name = "click" value="Rangers buttons">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="Heather,red_mountain-4.jpg" style="width: 100%" name = "click" value="Red mountain heather">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="1656.jpeg" style="width: 100%" name = "click" value="Sheltons violet">

<p style="clear: both;">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="polemonium-pulcherrimum-bull-mtn-june-10-2014-v1.jpg" style="width: 100%" name = "click" value="Showy Jacobs ladder">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="matt-lavin-asclepias-speciosa.jpg" style="width: 100%" name = "click" value="Showy milkweed">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="Juncus-nevadensis-F-web_6.jpg" style="width: 100%" name = "click" value="Sierra Nevada rush">

<p style="clear: both;">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="Angelica lineariloba2_Hwy168-WhiteMtns_2002-07.04.jpg" style="width: 100%" name = "click" value="Sierra angelica">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="2149.jpeg" style="width: 100%" name = "click" value="Sierra daisy">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="2663150068_797fd1b43c_o.jpg" style="width: 100%" name = "click" value="Sierra stonecrop">

<p style="clear: both;">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="snow_plants_IsolinoFCC.jpg" style="width: 100%" name = "click" value="Snow plant">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="plant-Tinkers-Penny-bloom-big.jpg" style="width: 100%" name = "click" value="Tinkers penny">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="060414-30-hite-green-stink-bug-on-lomatium-utriculatum.jpg" style="width: 100%" name = "click" value="Torreys lomatium">

<p style="clear: both;">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="0774.jpeg" style="width: 100%" name = "click" value="Varied-leaved jewelflower">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="groundsel-poisoning-1.jpg" style="width: 100%" name = "click" value="Water groundsel">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="San Juan Loop Trail, Cleveland National Forest, Riverside Co., CA.   4-12-09 023.jpg" style="width: 100%" name = "click" value="Woodland star">

<p style="clear: both;">

<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px;" src="eriophyllum.jpg" style="width: 100%" name = "click" value="Woolly sunflower">
<input type= "image" style="float: left; font-family: Courier; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em; border: 10px double orange; border-radius: 5px; " src="18121573046_a3e0e94895_b.jpg" style="width: 100%" name = "click" value="Yellow-and-white monkeyflower">
<p style="clear: both;">

</form>

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
    if(isset($_POST['click']))
    {
        sciName($_POST['click']);
    }
    function sciName($name)
    {
        class MyDB extends SQLite3
        {
            function __construct()
            {
                $this->open('flowers.db');
            }
        }
        
        $db = new MyDB();
        
        $sql = "SELECT * FROM FLOWERS WHERE COMNAME LIKE '%$name%'";
       
        $ret = $db->query($sql);
        while($row = $ret->fetchArray(SQLITE3_ASSOC))
        {
            $gen = $row['GENUS'];
            $spe = $row['SPECIES'];
            $flo = $row['COMNAME'];
            
            echo "<p class= 'styled'> Commonly known as: $flo <br/> Scientific name: $gen $spe <br/>";
        }
        $db->close();
    }
    ?>

