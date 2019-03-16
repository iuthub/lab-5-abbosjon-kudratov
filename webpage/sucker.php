<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
<?php 
//($_SERVER["REQUEST_METHOD"]=="POST") {
	$name=$_POST["name"];
	$section=$_POST["section"];
	$cardNumber=$_POST["cardNumber"];
	$cardType=$_POST["cardType"];

	$isNameError=isset($name);
	$isFormError=$isNameError;



	file_put_contents("suckers.txt", $name,FILE_APPEND);

?>

<?php if($isNameError){

 ?>
<h1>Thanks sucker!</h1>
<p>Your information has been recorded.</p>

<h2>Your info:</h2>

<?= $isNameError?>
<dl> <dt><h4> Name:</h4></dt>
	<dd><p>		<?= $name?></p></dd>
<dt><h4> Section:</h4></dt>
	<dd><p>		<?= $section?></p></dd>
<dt><h4> Credit Card: </h4></dt>
	<dd><p>		<?= $cardNumber?> (<?= $cardType?>)</p></dd>

</dl>


<p>Here is the list of all suckers:</p>
<pre>
<?php file_get_contents("suckers.txt"); ?>
</pre>

<?php 
}	


else {?>
	<h1>Thanks sucker!</h1> 
<?php  }

?>