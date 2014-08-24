<html>
<head>
 <link rel="stylesheet" type="text/css" href="../cocktails/css/main.css">
</head>

<body>

  <div id="header">
     <div id="header-top">
         <div class="links links-header">
            <a>Home </a>|
            <a>About </a>|
            <a>Contact</a>
         </div>
     </div>
     <div id="header-middle">
     
     </div>
     <div id="header-bottom">
       
     </div>
  </div>
   
   <!-- main part -->
   
   <div id="middle-part">
       <div id="strawberry-cocktail">
       </div>
       <div id="cocktail-categories">
           <div class="box first-box"><span class="text-category">Tequilla</br> Based </br>Cocktails</span><img height="180" width="180" src="css/images/tequllaSunrise001.png" style=" position: absolute; padding-left: 110px;"></div>
           <div class="box second-box"><span class="text-category">Vodka</br> Based </br>Cocktails</span><img height="180" width="135" src="css/images/black-russian.png" style=" position: absolute; padding-left: 144px;"></div>
           <div class="box third-box"><span class="text-category">Whiskey</br> Based </br>Cocktails</span><img height="180" width="135" src="css/images/old-fashioned001.png" style=" position: absolute; padding-left: 143px;"></div>
           <div class="box fourth-box"><span class="text-category">Champagne</br> Based </br>Cocktails</span><img height="173" width="135" src="css/images/mimosa.png" style=" position: absolute; padding-left: 143px;"></div>
           <div class="box fifth-box"><span class="text-category">Gin</br> Based </br>Cocktails</span><img height="180" width="135" src="css/images/gimlet001.png" style=" position: absolute; padding-left: 129px;"></div>
       </div>
   </div>  
   <!-- Menu cocktail -->  
     <div id="cocktails-by-letter" >
        <span style="padding-left: 35px; font-size: 20px; color: white;">Choose a cocktail:</span>
        <ul class="letters">
         <?php for($i=65; $i < 90; $i++){ ?> 
         	 <li class="letter-link"><a href="http:\\google.com"><?php print(chr($i))?></a></li> <span style="color: white">|</span>
         	<?php 
         }?>
          <li class="letter-link"><a href="http:\\google.com">Z</a></li>
         </ul>
     </div>
     
	     <div id="cocktail-menu">
	         <?php echo @$cocktail_menu;?>
	      </div>
   
   <div id="footer">
    <div id="footer-top">
    </div>
    <div id="footer-middle">
    </div>
    <div id="footer-bottom">
       
    </div>
   </div>
   
   
</body>

</html>