<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">

<link href="https://fonts.googleapis.com/css?family=Oswald|Rammetto+One" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
<meta charset="utf-8">
<title>Ritalin Drinks</title>
<style>


body{
   overflow-x: hidden;
   

}

#current {
    color: #fb9e01;
}

.button {
    color: #b7b7b7;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 17px;
    font-family: 'Oswald', sans-serif;
    letter-spacing: 3px;
    transition-duration: 500ms;
    margin-top: 20px;
       
}

.button:hover {
    transform: scale(1.1);
    color: #fb9e01;
}

input,
textarea,
label {
    outline: 0;
}

#search {
    text-align: center;
    position: relative;
    top: 20px;
}

#search input {
    padding: 12px;
    width: 200px;
    height: 48px;
    border-radius: 20px;
}

#search input[type="submit"] {
    width: 55px;
    height: 48px;
    background: #333 url(img/search_icon_sprite.png) no-repeat top right;
    border: none;
    cursor: pointer;
    padding: 0;
    opacity: 0.5;
    color: #EEE;
}

#search input[type="submit"] + input {
    background-position: top left;
}

#search input[type="submit"]:hover {
    background-color: #0073f4;
}

#shortcuts-zone {
    position: relative;
    margin: 0 auto;
    width: 452px;
}
.grid1 {
    display: grid;
    grid-template-columns: repeat(auto-fill, 150px);
    background-color: #282828;
    border-bottom: solid 20px #474747;
    
}

.footer {
    
    background-color: #3a3a3a;
}
.footer p {
    font-family: 'Oswald', sans-serif;
    color: white;
    text-align: center;
    margin-top: 100px;
}

.logobanner img {
    width: 250px;
}

.logobanner {
    grid-column-end;
}









.bannertext{
    display: none;
    font-family: 'Oswald', sans-serif;
    text-align: center;
}

.container{
    display: grid;
    grid-template-columns: 20% 60% 20%;
}

.container2{
    margin-top:5%;
    margin-left: 10%;
    display: grid;
    grid-gap:5%;
    grid-template-columns: 20% 20% 20% 20%;
    margin-bottom: 5%;
    font-family: 'Oswald', sans-serif;
}

.container3{
    margin-top: 5%;
    margin-left: 15%;
    display: grid;
    grid-template-columns: 25% 25% 25%;
    grid-gap: 5%;
    padding-bottom: 5%;
}

.container4{
    display: grid;
    grid-template-columns: 20% 40%;
    grid-gap: 5%;
    margin-left: 15%;
    margin-top: 10%;
    font-family: 'Oswald', sans-serif;
}

.container5{
        display: grid;
    grid-template-columns: 20% 40%;
    grid-gap: 5%;
    margin-left: 15%;
    margin-top: 5%;
    font-family: 'Oswald', sans-serif;
    margin-bottom: 5%;
}

.event{
   margin-top: 20%;
    font-family: 'Oswald', sans-serif;
    padding-bottom: 10%;
    
    
}


.box{
    
    margin-top:0%;
    padding: 5% 0;
    border-bottom: solid 5px;
    border-color: #2d2d2d;
}

.eventpic{
    margin-left: 10%;
    width: 20%;
    padding-bottom:  0%;
  
}

.eventxt{

    display: inline-block;
   width: 40%;
    margin-left: 5%;
    
    
    
}


.flag{
    width: 3%;
}


h1{
    line-height: 1px;
}



.footer{
    border-style: solid;
    background:#1F150C;
    margin-bottom: -3%;
    width: 102%;
    margin-left: -1%;
    color: white;
    
}

#emailform{
    margin-left: 60%;
    font-family: 'Oswald', sans-serif;
     margin-top: -5%;
}



.item2{
    
    color: #FF6D00;
   font-family: 'Oswald', sans-serif;
    text-align: center;
    font-size: 120%;
    border-bottom: dotted;
}

.item2:hover{
    font-size: 130%;
    transition: .5s;
    cursor: pointer
}


.foto1{
    margin-top: 5%;
    width: 100%;
}

.foto2{
    width: 100%;
}


.foto2:hover{
    width: 120%;
    margin-left: -10%;
    transition: 1s;
}

.footer p{
    margin-left: -50%;
}



.foto4{
    width: 100%;
}

.logo2{
    width: 20%;
}







    

    
    
    
    
    
    







</style>
    
    
    
    

    
    
    
    
    <?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "energy";

$connie = mysqli_connect($host , $user, $pass, $db);

if(!$connie){
    die("niet goed");
}


$sql= "SELECT * FROM artiest";
$result = mysqli_query($connie, $sql);

if(!$result){
    
    echo"qeury niet goed";
}


while ($array = mysqli_fetch_row($result)) {
    
    
    
}

echo $array ['artiestnam'];



mysqli_free_result($result);
 
mysqli_close($connie);





?>
    
    
    
    
</head>
<body>
    
    
    <div class="grid1">
            <div class="logobanner"><img src="../producten/img/logo.png"    alt="Logo"></div>s
            <a href="../HTML/index.php" class="button">HOME</a>
             <a  href="../producten/producten.php" class="button">PRODUCTEN</a>
            <a id="current" href="../HTML/event.php" class="button">EVENTS</a>
            <a href="artiesten.html" class="button">ARTIESTEN</a>
            <a href="acties.html" class="button">ACTIES</a>
            <div id="shortcuts-zone">
                <form id="search">
                    <input type="search" placeholder="Search..." />
                    <input type="submit" value="Search" />
                </form>
            </div>

        </div>
    
      
    

    
    
    
    
    
     <div class="container">
        <div> </div>
        <div class="item"><img class="foto1" src="../../pic/BANNER.png"> </div>
        <div></div>
    </div>
    
    
  
    
    
   
    
    
    
<div class="event">
       
       <div class="box">
        <img class="eventpic" src="../../pic/1520975884_82123022c41ae4aa4931f8404f6e538a.jpg">
        
        
        <div class="eventxt">
        #eminem 12-7-2018<img  src="../../pic/Netherlands-Flag.png" class="flag">
        <h1><b>eminem revival tour 2018 </b></h1>
        <p>He’s the real Slim Shady! Met zijn humoristische, controversiële,
            maar vooral oprechte teksten die ondersteund worden door complexe
            rijmschema’s en ritmes, is hij een pionier in subgenres als horrorcore,
            comedy hiphop en hardcore hiphop. Zijn nieuwste wapenfeit ‘Revival’
            kwam vorig jaar uit en bereikte direct de nummer 1 positie.
            In juli bestijgt de rapgod het podium van het Goffertpark
            voor een piekfijne show.
            
            </p></div>
        </div>
        
        
        
        
        
<div class="box">
        <img class="eventpic" src="../../pic/1520975884_82123022c41ae4aa4931f8404f6e538a.jpg">
        
        
        <div class="eventxt">
        #eminem 12-7-2018<img  src="../../pic/Netherlands-Flag.png" class="flag">
        <h1><b>eminem revival tour 2018 </b></h1>
        <p>He’s the real Slim Shady! Met zijn humoristische, controversiële,
            maar vooral oprechte teksten die ondersteund worden door complexe
            rijmschema’s en ritmes, is hij een pionier in subgenres als horrorcore,
            comedy hiphop en hardcore hiphop. Zijn nieuwste wapenfeit ‘Revival’
            kwam vorig jaar uit en bereikte direct de nummer 1 positie.
            In juli bestijgt de rapgod het podium van het Goffertpark
            voor een piekfijne show.
            
            </p></div>
        </div>
        
        
        
<div class="box">
        <img class="eventpic" src="../../pic/1520975884_82123022c41ae4aa4931f8404f6e538a.jpg">
        
        
        <div class="eventxt">
        #eminem 12-7-2018<img  src="../../pic/Netherlands-Flag.png" class="flag">
        <h1><b>eminem revival tour 2018 </b></h1>
        <p>He’s the real Slim Shady! Met zijn humoristische, controversiële,
            maar vooral oprechte teksten die ondersteund worden door complexe
            rijmschema’s en ritmes, is hij een pionier in subgenres als horrorcore,
            comedy hiphop en hardcore hiphop. Zijn nieuwste wapenfeit ‘Revival’
            kwam vorig jaar uit en bereikte direct de nummer 1 positie.
            In juli bestijgt de rapgod het podium van het Goffertpark
            voor een piekfijne show.
            
            </p></div>
        </div>
        
        
        
        
<div class="box">
        <img class="eventpic" src="../../pic/1520975884_82123022c41ae4aa4931f8404f6e538a.jpg">
        
        
        <div class="eventxt">
        #eminem 12-7-2018<img  src="../../pic/Netherlands-Flag.png" class="flag">
        <h1><b>eminem revival tour 2018 </b></h1>
        <p>He’s the real Slim Shady! Met zijn humoristische, controversiële,
            maar vooral oprechte teksten die ondersteund worden door complexe
            rijmschema’s en ritmes, is hij een pionier in subgenres als horrorcore,
            comedy hiphop en hardcore hiphop. Zijn nieuwste wapenfeit ‘Revival’
            kwam vorig jaar uit en bereikte direct de nummer 1 positie.
            In juli bestijgt de rapgod het podium van het Goffertpark
            voor een piekfijne show.
            
            </p></div>
        </div>
        
        
        
        
        
<div class="box">
        <img class="eventpic" src="../../pic/1520975884_82123022c41ae4aa4931f8404f6e538a.jpg">
        
        
        <div class="eventxt">
        #eminem 12-7-2018<img  src="../../pic/Netherlands-Flag.png" class="flag">
        <h1><b>eminem revival tour 2018 </b></h1>
        <p>He’s the real Slim Shady! Met zijn humoristische, controversiële,
            maar vooral oprechte teksten die ondersteund worden door complexe
            rijmschema’s en ritmes, is hij een pionier in subgenres als horrorcore,
            comedy hiphop en hardcore hiphop. Zijn nieuwste wapenfeit ‘Revival’
            kwam vorig jaar uit en bereikte direct de nummer 1 positie.
            In juli bestijgt de rapgod het podium van het Goffertpark
            voor een piekfijne show.
            
            </p></div>
        </div>
        
        
        
        
<div class="box">
        <img class="eventpic" src="../../pic/1520975884_82123022c41ae4aa4931f8404f6e538a.jpg">
        
        
        <div class="eventxt">
        #eminem 12-7-2018  <img  src="../../pic/Netherlands-Flag.png" class="flag">
        <h1><b>eminem revival tour 2018 </b></h1>
        <p>He’s the real Slim Shady! Met zijn humoristische, controversiële,
            maar vooral oprechte teksten die ondersteund worden door complexe
            rijmschema’s en ritmes, is hij een pionier in subgenres als horrorcore,
            comedy hiphop en hardcore hiphop. Zijn nieuwste wapenfeit ‘Revival’
            kwam vorig jaar uit en bereikte direct de nummer 1 positie.
            In juli bestijgt de rapgod het podium van het Goffertpark
            voor een piekfijne show.
            
            </p></div>
        </div>
    </div>       
        
        
       
        
    
    
    
   
    
    
   
    
   
    
    <div class="footer" >
    <p>Copyright © 2009 - 2018 - All Rights Reserved - Ritalin Drinks</p>
        
<div id="emailform">   
        
     <form name="contactform" method="post" >
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">  
 </td>
</tr>
</table>
</form>
        
 </div>            
    </div>
    
    
    
    
</body>
</html>
