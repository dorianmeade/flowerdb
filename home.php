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
.heading {
    color: white;
    font-family: Courier;
    text-align: center;
    font-size: 35px;
    border-radius: 20px;
    background: rgba(255, 165, 0, 0.85);
    padding: 0.5em 0.5em 0.5em 0.5em;
}
.btn {
    background-color: #FFA500;
    border-style: outset;
    color: white;
    padding: 15px 25px;
    text-align: center;
    font-family: Courier;
    font-size: 16px;
    cursor: pointer;
    margin:auto;
    display:block;
    border-radius: 3px;
    width: 300px;
}
.btn:hover {
    background-color: #FFD887;
}
.btn2 {
    background-color: #FF8C00;
    border-style: outset;
    color: white;
    padding: 15px 25px;
    text-align: center;
    font-family: Courier;
    font-size: 16px;
    cursor: pointer;
    margin:auto;
    display:block;
    border-radius: 3px;
    width: 300px;
}
.btn2:hover {
    background-color: #FFCF90;
}
.btn3 {
    background-color: #C97302;
    border-style: outset;
    color: white;
    padding: 15px 25px;
    text-align: center;
    font-family: Courier;
    font-size: 16px;
    cursor: pointer;
    margin:auto;
    display:block;
    border-radius: 3px;
    width: 300px;
}
.btn3:hover {
    background-color: #C39860;
}
.btn4 {
    background-color: #915200;
    border-style: outset;
    color: white;
    padding: 15px 25px;
    text-align: center;
    font-family: Courier;
    font-size: 16px;
    cursor: pointer;
    margin:auto;
    display:block;
    border-radius: 3px;
    width: 300px;
}
.btn4:hover {
    background-color: #9B7748;
}
.btn5 {
    background-color: #FFBC00;
    border-style: outset;
    color: white;
    padding: 15px 25px;
    text-align: center;
    font-family: Courier;
    font-size: 16px;
    cursor: pointer;
    margin:auto;
    display:block;
    border-radius: 3px;
    width: 300px;
}
.btn5:hover {
    background-color: #FFDF84;
}
.styled{
    color: white;
    font-family:Courier;
    border: 10px double;
    border-radius: 5px;
    font-size: 20px;
    text-align: center;
    background: rgba(50, 196, 84, 0.95);
    padding: 0.3em 2em 0.3em 2em;
    width: auto;
    position: fixed;
    top: 90%;
    left: 50%;
    margin-top: -100px;
    margin-left: -150px;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
img.avatar {
    width: 30%;
    border-radius: 40%;
}
.container {
    padding: 16px;
}
span.psw {
    float: right;
    padding-top: 16px;
}
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    padding-top: 60px;
}
.modal-content {
    background-color: #fefefe;
    margin: .5% auto 15% auto;
    border: 1px solid #888;
    width: 50%;
}
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: orange;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: orange;
    cursor: pointer;
}
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}
@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}
@media screen and (max-width: 300px) {
    span.psw
    {
    display: block;
    float: none;
    }
    .cancelbtn
    {
        width: 100%;
    }
}
</style>
</head>
<body>

<h2 align="center" class = "heading" >❊✿❀Southern Sierra Wildflower Club❀✿❊</h2>
<button type="button" class = "btn5" onclick="location.href='updateinfo.php'">Browse Flowers
</button>
<p></p>
<button type="button" class = "btn" onclick="location.href='results.php'">Browse Flower Sightings
</button>
<p></p>
<button type="button" class = "btn2" onclick="location.href='addsighting.php'">Add New Sighting
</button>
<p></p>
<button type="button" class = "btn3" onclick="location.href='photos.php'">Browse Photos
</button>
<p></p>
<button class = "btn4" onclick="document.getElementById('id01').style.display='block'" >Login</button>

<div id="id01" class="modal">
    <form class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="Large_Transparent_Daisy_Clipart.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
        <p style="font-family: Courier; text-align: center">If you don't have an account, login will create one! <p>
        <label style = "font-family: Courier; color:orange;" for="uname"><b>Username</b></label>
        <input style = "font-family: Courier;" type="text" placeholder="Enter Username" name="uname" required>
        <label style = "font-family: Courier; color:orange;" for="psw"><b>Password</b></label>
        <input style = "font-family: Courier;" type="password" placeholder="Enter Password" name="psw" required>
        <button class = "btn" name = "login" type="submit">Login</button>
        <label style = "font-family: Courier;">
        <input type="checkbox" checked="checked" name="remember"> Remember me </label>
    </div>
    </form>
</div>

<script>
var modal = document.getElementById('id01');
window.onclick = function(event)
{
    if (event.target == modal)
    {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>

<?php
   
    if(isset($_POST['login']))
    {
        $user = $_POST['uname'];
        $pass = $_POST['psw'];
        
        class MyDB extends SQLite3
        {
            function __construct()
            {
                $this->open('flowers.db');
            }
        }
        $db = new MyDB();
        $sql = "CREATE TABLE IF NOT EXISTS logins(user TEXT PRIMARY KEY, pass TEXT, visits INT)";
        $ret = $db->exec($sql);
        $db->close();
        
        userLog($user, $pass);
    }
    
    
    function userLog($user, $pass)
    {
        class MyDB2 extends SQLite3
        {
            function __construct()
            {
                $this->open('flowers.db');
            }
        }
        
        $db2 = new MyDB2();
        
        $checkUser = "SELECT user FROM logins WHERE user = '$user'";
        $run = $db2->query($checkUser);
        $num = $run->fetchArray(SQLITE3_ASSOC);
        if(!$num)
        {
            $sql = "INSERT INTO logins VALUES ('$user', '$pass', 1)";
            $add = $db2->exec($sql);
            echo "<p class = 'styled'> Account Created!! </br> Welcome $user!! </p>";        }
        else
        {
            $checkPass = "SELECT PASS FROM LOGINS WHERE USER = '$user'";
            $run2 = $db2->query($checkPass);
            $num2 = $run2->fetchArray(SQLITE3_ASSOC);
            $test2 = array_values($num2);
            if($test2[0] == $pass)
            {
                $sql = "SELECT VISITS FROM LOGINS WHERE USER = '$user'";
                $run3 = $db2->query($sql);
                $num3 = $run3->fetchArray(SQLITE3_ASSOC);
                $test3 = array_values($num3);
                
                $cnt = $test3[0] + 1;
                
                $sql1 = "UPDATE logins SET visits = '$cnt' WHERE user = '$user'";
                $add1 = $db2->exec($sql1);
                echo "<p class = 'styled' > Welcome $user!! </p>";
            }
            else
            {
                echo "<p class = 'styled' > Incorrect password </p>";
            }
        }
         $db2->close();
    }
   
    ?>
