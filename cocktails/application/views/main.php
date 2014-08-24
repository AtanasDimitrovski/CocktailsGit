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
           <div></div>
           <div></div>
           <div></div>
           <div></div>
           <div></div>
       </div>
   </div>  
   <!-- Menu cocktail -->  
     <div id="cocktails-by-letter" >
        <span style="padding-left: 35px; font-size: 20px; color: white;">Choose a cocktail:</span>
        <ul class="letters">
         <?php for($i=65; $i <= 90; $i++){ ?> 
         	 <li class="letter-link"><a href="google.com"><?php print(chr($i))?> </a></li> | 
         	<?php 
         }?>
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