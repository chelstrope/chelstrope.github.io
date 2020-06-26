<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback Email Form</title>
</head>
<!--links to css files-->
<link rel= "stylesheet" href="back2.css" type="text/css" />
<!--end css file link-->

<body>
<!--this is the message users will see when they submit the form-->
<h1> Thank you for your thoughts!</h1>


<!--begin php-->
<?php
//sends to my email
$mailto = "ccstrope@aim.com";
//subject of the email
$subject = "Pacific Ocean Museum feedback form";
//what shows at the begining of the message
$message = "Suggestions from the web site form:";
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