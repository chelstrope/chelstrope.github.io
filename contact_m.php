<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
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