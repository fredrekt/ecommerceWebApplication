<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/jpg" href="images/fred_logo.jpg">
<link rel="stylesheet" href="styles/orig.css">
<script type="text/javascript" src="script/index.js"></script>
</head>
<body>

  <!-- THIS IS PURE CSS!! hehehe
    Developer: Fred Garingo 
      Frameworks: None
      Languages used: HTML, CSS, Php, Javascript
      Date made: 4/28/19
          -->

	<title>Web Application Class</title>
	<div class="header">
      <img title="FredRekt Company" src="images/fred_logo.jpg">
    <div class="header-social">
      <ul>
        <li title="Twitter"><a href="#twitter"><img src="images/twt.png"></a></li>
        <li title="Instagram"><a href="#instagram"><img src="images/insta.png"></a></li>
        <li title="Facebook"><a href="#facebook"><img src="images/fb.png"></a></li>
      </ul>
    </div>
  </div>


	<div class="navbar">
    <ul>
      <li><a href="#Home" onclick="Home()">Home</a></li>
      <li><a href="#Products" onclick="showProd()">Products/Service</a></li>
      <li><a href="#about" onclick="showAbout()" >About Us</a></li>
      <li><a href="#contacts" onclick="showContacts()">Contact Us</a></li>
      <li id="login"><a href="index.html"><?php
session_start();
if (isset($_SESSION['user'])==true) {
  echo "Logout";
}
else{
  echo "Login";
}
?>
</a></li>
      
    </ul>
  </div>

  <div class="banner">
    <center>
      <img src="images/banner.jpg">    
    </center>
  </div>

  <!-- FOR MAIN HEHE -->
  <center>
    <h1 style="background-color:#222; padding:20px; margin-top: -2px;"> Counter - Strike Global Offensive Skins</h1>
    <?php 
    include('displayProducts.php');
    ?>
  <table id='Products' hidden>
    <tr>
      <td><img src="images/aug.jpg"></td>
      <td><img src="images/galil.jpg"></td>
      <td><img src="images/ump.jpg"></td>
      <td><img src="images/mp7.jpg"></td>
      <td><img src="images/mp5sd.jpg"></td>
    </tr>
    <tr id="skin">
      <td>Made by the french</td>
      <td>Made by the french</td>
      <td>Made by the french</td>
      <td>Made by the french</td>
      <td>Made by the french</td>
    </tr>
    <tr>
      <td>$200</td>
      <td>$520</td>
      <td>$120</td>
      <td>$720</td>
      <td>$1200</td>
    </tr>
     <tr>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
    </tr>

    <tr>
      <td><img src="images/shotgun.jpg"></td>
      <td><img src="images/awp.jpg"></td>
      <td><img src="images/nova.jpg"></td>
      <td><img src="images/bizon.jpg"></td>
      <td><img src="images/m41.jpg"></td>
    </tr>
    <tr id="skin">
      <td>Made by the french</td>
      <td>Made by the french</td>
      <td>Made by the french</td>
      <td>Made by the french</td>
      <td>Made by the french</td>
    </tr>
    <tr>
      <td>$920</td>
      <td>$430</td>
      <td>$4200</td>
      <td>$750</td>
      <td>$2100</td>
    </tr>
     <tr>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
    </tr>
    <tr>
      <td><img src="images/infernocollect.jpg"></td>
      <td><img src="images/gaygun.jpg"></td>
      <td><img src="images/famas.jpg"></td>
      <td><img src="images/awp2.jpg"></td>
      <td><img src="images/blood.jpg"></td>
    </tr>
    <tr id="skin">
      <td>Made by the french</td>
      <td>Made by the french</td>
      <td>Made by the french</td>
      <td>Made by the french</td>
      <td>Made by the french</td>
    </tr>
    <tr>
      <td>$9000</td>
      <td>$520</td>
      <td>$420</td>
      <td>$3500</td>
      <td>$820</td>
    </tr>
     <tr>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
    </tr>
    <tr>
      <td><img src="images/p902.jpg"></td>
      <td><img src="images/p250.jpg"></td>
      <td><img src="images/m43.jpg"></td>
      <td><img src="images/scout.jpg"></td>
      <td><img src="images/usp.jpg"></td>
    </tr>
    <tr id="skin">
      <td>Made by the french</td>
      <td>Made by the french</td>
      <td>Made by the french</td>
      <td>Made by the french</td>
      <td>Made by the french</td>
    </tr>
    <tr>
      <td>$500</td>
      <td>$850</td>
      <td>$120</td>
      <td>$350</td>
      <td>$2100</td>
    </tr>
     <tr>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
      <td><button class="myButton" onclick="toast()">Add to cart</button></td>
    </tr>
  </table>
  <!-- Ending of the Home page of my Ecommerce Website 
                                                        -->
	</center>

<!-- For Toast(Android Ref.)    -->
<script type="text/javascript">
  function toast(){
    if(confirm("Are you sure you want to add this to cart?")){
      alert("Item has been added to cart!")
    }
    else {
      alert("Please continue to Shop! :)")
    }
  }
</script>
<footer>
<!--
  <center>
    <table id="contacts">
      <th>
        Contact Us
      </th>
      <tr>
        <td>
          Email:
        </td>
      </tr>
          
      <tr>
        <td>
          <br>Phone:
        </td>
      </tr>
      <tr>
        <td>
          <br>Website:
        </td>
      </tr>
      <tr>
        <td>
          <br>Facebook:
        </td>
        <td>
        </td>
      </tr>
    </table>
  </center>
-->
  <center>
   <form action="filecomplaint.php" method="get">
    <table id="contacts" hidden style="margin-top: 20px; margin-bottom: 20px;">
       <th><h1 style="background-color:#babfc1;">Contact Us!</h1></th>
    
      <tr>
    <td> Name:<input type="text" name="name"></td>
      </tr>
      <tr>
    <td>Email:<input type="text" name="email"></td>
      </tr>
    <tr>
    <td>Contact:<input type="text" name="contact"></td>
      </tr>
      <tr>
    <td>Comment:<input type="text" name="comment"></td>
      </tr>
      <tr>
    <td id="aw"><input class="myButton" type="submit" value="Submit it!" name="submit"></td>
      </tr>
      </table>
    </form>
    
  </center>
</footer>
<center>
  <div id="about" hidden>
    <h1 id="about"style = 'font-family: courier'>About Us</h1>
    This E-Commerce Website is about Counter Strike - Global Offensive Skins or A.K.A the games' design of the weapons. 
    <br>Its Purpose is to make things good while playing and having a good time with friends.
    <br>Counter-Strike: Global Offensive (CS:GO) is a multiplayer first-person shooter video game developed by Hidden Path Entertainment and Valve Corporation. It <br>is the fourth game in the Counter-Strike series and was released for Microsoft Windows, OS X, Xbox 360, and PlayStation 3 on August 21, 2012, while the Linux<br> version was released in 2014.<br>

<br>The game pits two teams against each other: the Terrorists and the Counter-Terrorists. Both sides are tasked with eliminating the other while also completing <br>separate objectives. The Terrorists, depending on the game mode, must either plant the bomb or defend the hostages, while the Counter-Terrorists must either<br> prevent the bomb from being planted, defuse the bomb, or rescue the hostages. There are nine game modes, all of which have distinct characteristics specific to that<br> mode. The game also has matchmaking support that allows players to play on dedicated Valve servers, as well as allowing members of the community to host their<br>own servers with custom maps and game modes. A battle-royale game-mode, "Danger Zone", was introduced in 2018.<br><br>
<br>

Global Offensive received positive reviews from critics on release, who praised for its gameplay and faithfulness to predecessors, though it was criticized for some<br> of its early features and was noted for differences between the console and PC versions. Since its release, it has drawn in an estimated 11 million players per<br> month, and has gathered an active competitive scene, with many tournaments sponsored by Valve themselves. In December 2018, Valve transitioned the game to a<br> free-to-play model, focusing on revenue from cosmetic items.<br>
  </div>
</center>
<div class="footer2">
  <ul>
    <li><a href="#aw">Home</a></li>
    <li><a href="#aw">Products/Service</a></li>
    <li><a href="#aw">About Us</a></li>
  </ul>
</div>
                            
</body>
</html>