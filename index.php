<?php
include ('Project_II/about_html.php');
include ('Project_II/introduction_html.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i|Titillium+Web:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<!-- landing -->
	
   <div class="Landing">
	   <div class="WrapperLanding">
	       <h1><?php $var = int_html();
               echo $var[0]['text_content'];?></h1>
		   <div id="Icon">
	       </div>  	   
	       <div id="Nav">
		       <li><a href="#AboutMe" class="Scrollto"><span class="NavText">About</span></a></li>
			   <li><a href="#Portfolio" class="Scrollto"><span class="NavText">Portfolio</span></a></li>
			   <li><a href="#Contacts" class="Scrollto"><span class="NavText">Contact</span></a></li>
		   </div>	  
       </div> 
   </div>
   
   <!--AboutMe-->
   
   <section id="AboutMe">
		<div class="WrapperAboutMe">  
		    <div class="Me">
                </div>
            <div class="CSM_text">
                <p class="Text"><?php $var = about_html();
                                 echo $var[0]['text_content'];?></p>
            </div>

                <p><span class="Text"><?php $var = optional_p_1_html();
                    echo $var[0]['text_content'];?></span></p>
        </div>
   </section>

               <!--Portfolio-->
   
   <section id="Portfolio">
	   <div class="WrapperPortfolio">
		   <h2><span class="TextP">Portfolio</span></h2>
           <h3><span class="Text"><?php $var = optional_p_2_html();
               echo $var[0]['text_content'];?></span></h3>
	   </div>   
   <div class="List">
	    <div class="ContainerImg">
		<a href="HTLM 30.08/html.html" style="text-decoration:none;">	
			<img src="logo-vertical.png" alt="MaydenLogo" class="LogoPic">
		    <div class="TextImg">
				<h3 class="TextPic">First Mayden build</h3>
			</div>
		</div>
	    </a> 
		<div class="ContainerImg">    
	    <a href="HTML 31.08/html.html" style="text-decoration:none;">
			<img src="logo-vertical.png" alt="MaydenLogo" class="LogoPic">		
		    <div class="TextImg">
				<h3 class="TextPic">Second Mayden build</h3>
			</div>
		</div>
	    </a>	
		<div class="ContainerImg">
	    <a href="Chalenge/index.html" style="text-decoration:none;">
			<img src="logo-vertical.png" alt="MaydenLogo" class="LogoPic">
            <div class="TextImg3">
			    <h3 class="TextPic">The Challenge</h3>
		    </div>
		</div>
	    </a>
		</div>	
    </section>				   
       
	   <!--Contacts-->
	   
	<div id="Contacts">Contacts     
	      <div class="ContactText"><?php $var = contacts_html();
              echo $var[0]['text_content'];?>
	      <p1>
			  <a href="mailto:pdkanew1@gmail.com">
				  <img src="gmail-64.png" style="width:64;height:64px;" class="IconLink"></a>
			  <a href="https://www.linkedin.com/in/peter-kanew-a73a9446/">
				  <img src="square-linkedin-64.png" style="width:64;height:64px;" class="IconLink"></a>
		      <a href="https://plus.google.com/u/0/103123635477463376367">
				  <img src="square-google-plus-64.png" style="width:64;height:64px;" class="IconLink"></a>
			  <a href="https://github.com/pdkoding"> 
				  <img src="if_icon-social-github_211904.png" style="width:64;height:64px;" class="IconLink"></a>
		  </p1>
	      </div>
	 </div>
	 
	 <footer class="FinishLine">Finish line
		  <span class="ExtraText"><?php $var = finish_html();
              echo $var[0]['text_content'];?> </span>
	 </footer>
</body>
</html>