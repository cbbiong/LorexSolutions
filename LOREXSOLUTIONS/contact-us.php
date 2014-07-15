<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel = "stylesheet" type="text/css" href= "css/style.css" />
    <!--generate captcha--->
    <script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>	

    
    <title>Lorex Solutions in Ottawa, Monthly Bookkeeping in Ottawa|ABOUT US</title>
</head>

<body>

	<!--BEGIN WRaPPER-->
    <div id = "wrapper">
	
   
    <!--BEGIN HEADER-->
    <div id="header">
    
    	<div id="logo">
   	  		<img src="images/logo.png" width="360" height="109" alt="logo" /> </div>
    
    	<div id="menu">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about-us.html">About Us</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="contact-us.php">Contacts</a></li>
            </ul>
        </div>
        
         <!--BEGIN about Us-->
        
        
    </div><!--END HEADER-->
  
       
    <!--BEGIN CONTENT-->
    <div id="content">
    	<!--Begin mini-header--->
    <div id="mini-header">
        <h1> Contact Us </h1>
       </div><!--Begin mini-header--->
    	<h3 class="we_offer">"We offer multiple methods for our clients to  contact us and remain connected, at any time! Contact by phone, email or fill out the form below for a fast, efficient response, guaranteed."
​​		</h3>
		<p class="contact">Canada<br/>
		<span>2415 Holly Lane. Suite 200G (Corner of Walkley Rd. & Heron Rd.)
		Ottawa, ON. K1V 7P2
		613-255-8749<br/>
        Email: <a href="m.hassoun@lorexsolutions.com">m.hassoun@lorexsolutions.com</a></span></p>
        
   		<p class="followUs">Stay Connected & Follow Us
		<span><a href="https://www.facebook.com/lorexsolutions">Facebook.com/LorexSolutions<br/>@LorexSolutions</a></span></p>
        
        <table class="table_form">
        	<form method="POST" name="contact_form" action="form.php" class="contact_form"> 
        
            <tr>
            	<td><label for="email">Email: </label></td>
            	<td><input type="text" name="email" value="" /></td>
            </tr>
            
            <tr>
            	<td><label for="name">First Name: </label></td>
            	<td><input type="text" name="fname" value="" /></td>
            </tr>
            
            <tr>
            	<td><label for="name">Last Name: </label></td>
            	<td><input type="text" name="lname" value="" /></td>
            </tr>
                        
            <tr>
            	<td><label for="message">Message:</label> </td>
            	<td><textarea name="message" rows=8 cols=30></textarea></td>
            </tr>
            <tr>
              <td><img src="captcha_form.php?rand=<?php echo rand(); ?>"id="captchaimg" ></td>
			  <td><input id="6_letters_code" name="6_letters_code" type="text"></td> 
              <td><label for="message">Enter the code above here :</label></td>    
              <td><small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small></td>

            </tr> 
             <td colspan="4"><input type="button" value="Submit Message" name="submit" id="submit" /></td>
        </form>   
       </table>
       
    </div><!--END CONTENT-->
    	
    <!--BEGIN FOOTER-->	
    <div id="footer">
    	<h4>Ottawa, ON 2415 Holly Lane. Suite 200G(Corner of Walkey Rd. &sect; Heron Rd.)613-255-8749 <a href="">Email Us</a></h4> <!--END LOREX ADDRESS-->
        
        <form action="" class="submitForm">
        	<td><label>Newsletter</label><input type="text" id="email">
            <input type="button" value="Subscribe" class="subscribe">
        </form>
                                   
            <!--BEGIN SOCIAL ICONS-->
            <div class="social">
            	
                	<ul>
                    	<li><h3>Follow us on:</h3></li>
   	         			<li><a href="http://www.facebook.com/lorexsolutions"><img src="images/facebook.png" width="31" height="31" alt="fb"/></a></li>
                        <li><a href="http://www.twitter.com/lorexsolutions"><img src="images/twitter.png" width="31" height="31" alt="twitter"/></a></li>
                        <li><a href="http://www.google.com/b/108781317614486509008/108781317614486509008/about"><img src="images/google.png" width="31" height="31" alt="g"/></a></li>
             		</ul>
             </div><!--END SOCIAL ICONS-->
           
           <!--BEGIN LOREX ADDRESS--> 
         
       	<p id="copy">© 2010 - 2014 by Lorex Solutions. </p>  
   </div><!--END FOOTER-->
   </div><!--END WRAPPER-->

</body>
<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contact_form");
//remove the following two lines if you like error message box popups
frmvalidator.EnableOnPageErrorDisplaySingleBox();
frmvalidator.EnableMsgsTogether();

frmvalidator.addValidation("lname","fname","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>


</html>
