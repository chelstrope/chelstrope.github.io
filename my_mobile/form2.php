<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback Email Form</title>
</head>
<!--links to css files-->
<link rel= "stylesheet" href="mobile.css" type="text/css" />
<!--end css file link-->

<body>

<!--begin container-->
	
<!--header image start-->
<div id="header">
<img src="http://chelseastrope.com/smalltitle.png" width="80%" style="margin-left:10px" >
</div>
<!--end header image--> 

<!--this is the message users will see when they submit the form-->
<h1 style="	font-style:italic; font-size:14pt;
	color:#666;"> Thank you!</h1>
<a href="http://www.chelseastrope.com/my_mobile/index.html"><h2 style=" font-size:18px; color:#51CFE6;">Return to Site</h2></a>

<!--begin php-->
<?php
//sends to my email
$mailto = "chelseastrope@gmail.com";
//subject of the email
$subject = "personal website mobile form";
//what shows at the begining of the message
$message = "website form:";
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
