<?php

$url='back_peacock_texture.jpg';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Personal Site Contact Form</title>


<style type="text/css">
body
{
    background-image:url('<?php echo $url ?>');
}
</style>

<!--links to css files-->
<link rel= "stylesheet" href="site.css" type="text/css" />
<!--end css file link-->

</head>

<body>

<!--nav bar-->
<style type="text/css">


body {
	background-image:url(back_peacock_texture.jpg); 
	background-repeat: repeat;
	font-family: 'Arial Narrow', Arial, sans-serif; 
	font-size:11pt; 
	text-align:center; 
	margin-left: -21px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

 
#navbar ul { 
font-family: 'Arial Narrow', Arial, sans-serif;
font-size: .71em;	
margin-left: 290px;
margin-top:-26px; 
padding: 0;		
list-style-type: none; 	
text-align: center;
color:#666;
width: 600px;	
 }  

#navbar ul li {
		padding: 9px 10px;  	
display: inline; 	}  

#navbar ul li a { 
text-decoration: none; 	
padding: .2em 1em; 	
color: #666; 		}  

#navbar ul li a:hover { 	
color: #91D5E8; 		}  

	/*footer start*/
.footer {
	font-family: 'Arial Narrow', Arial, sans-serif;
	text-align:center;
	position: fixed;
	bottom: 0;
	margin-top: 470px;
	background-color:#FFF;
	width:920px;
	height: 129px;
	color: #666;
	font-size: 0.45em;
	text-align:center;
	margin-left:-20px;
	/* [disabled]padding-bottom:20px; */
	background-color:;
	border-top: 1px solid #91D5E8;
	z-index:50;
	}
/*end footer*/

#wrap {
	font-size: 1.5em;
   width: 880px;
   height:850px;
   padding: 20px;
   margin: 0 auto; 
   position:relative;
   text-align:left;
   background-color:#FFF;
 }
.left {
		width: 240px;
		height: 322px;
		float: left;
		margin-left: 55px;
		margin-top: 94px;
		text-align:left;
	}
	
.right {
		font-family: 'Arial Narrow', Arial, sans-serif;
		width: 500px;
		float: left;
		margin-left: 45px;
		margin-top: 78px;
		text-align:left;
	}
	
h2 	{
	color: #CCC;
	padding-top: 4px;
	margin-bottom: 10px;
	font-size: 1.2em;
	font-family: 'Arial Narrow', Arial, sans-serif;
	}
	
</style>
<!--end nav-->

</head>
    <body id="page">
    
    <div id="wrap">
<!--name banner at top-->
<div id="logo">
<a href="index.html"><img src="myname.png" width="300" height="113" border="0" align="middle"/></a>
</div>

<div id="navbar">   
<ul> <li><a href="index.html">home</a></li> 	
<li><a href="about.html">about</a></li> 	
<li><a href="graphic.html">graphic design</a></li> 	
<li><a href="fine.html">fine art</a></li> 	
<li><a href="contact.html">contact</a></li></ul></div>

<div class="left">
<img src="images/thanks.png" alt="photo">
</div>

<div class="right">
<h2>thank you for your thoughts!</h2>
</div>

        <!--footer start-->
<div class= "footer">
<div class= "hyperlink2">
<br />
<br />
<a href="index.html">home</a>    . 
<a href="about.html">about</a>   . 
<a href="graphic.html">graphic design</a>   . 
<a href="fine.html">fine art</a>    .
<a href="contact.html">contact</a>    .
<a href= "http://www.linkedin.com/pub/chelsea-strope/63/577/b54/" target="_blank">linked in</a>

<br />
<h4 align="center" >
&copy; 2013 Chelsea Strope. All rights reserved.  Email:<a href="mailto:chelseastrope@gmail.com">chelseastrope@gmail.com</a>
</h4>
	</ul>
			</section>
        </div>
</div>


<?php

$stylesheet = @is_file($_GET['stylesheet']) && strtolower(substr(strrchr($file_name,'.'),1)) == 'css' ? $_GET['stylesheet'] : 'site.css';
  ?>


<!--begin php-->
<?php
//sends to my email
$mailto = "chelseastrope@gmail.com";
//subject of the email
$subject = "Personal Site Contact Form";
//what shows at the begining of the message
$message = "Contact Form:";
//applys to "email" textbox
$header = "From:" .$_POST ['email'];
  

//code that takes each value from the html form and places it inside the email.
foreach ($_POST as $key => $value)
{
	if (!is_array($value))
	{
		$message .= "\n".$key." : ".$value;
	}
	else
	{
		foreach ($_POST[$key] as $itemvale)
		{
			$message .= "\n".$key." : ".$itemvalue;
		}
	}
}

//sends the mail and complies all of the above info
mail($mailto, $subject, stripslashes($message), $header);

//endphp
?>


</body>
</html>
