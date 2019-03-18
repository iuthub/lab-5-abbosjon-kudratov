<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
<?php 
	error_reporting(0);
	$name=$_POST["name"];
	$section=$_POST["section"];
	$cardNumber=$_POST["cardNumber"];
	$cardType=$_POST["cardType"];

	$isNameError=empty($name);
	$isSectionError=empty($section);
	$isCardNumberError=empty($cardNumber);
	$isCardTypeError=empty($cardType);
	$isFormError=$isNameError||$isSectionError ||$isCardNumberError ||
	$isCardTypeError;


?>

<?php if(!$isFormError){
	$list=$name.";".$section.";".$cardNumber.";".$cardType."\n";
	file_put_contents("suckers.txt", $list,FILE_APPEND);

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

<br />
<p>Here is the list of all suckers:</p>
<pre>
<?=file_get_contents("suckers.txt"); ?>
</pre>

<?php 
}	


else {?>
	<h1>Something wrong sucker!</h1> 
	<h3>Please go  back and fill the <a href="buyagrade.html">form</a> again!</h3>
<?php  }

?>