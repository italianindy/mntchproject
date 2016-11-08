
<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Manage Touch</title>
<link href="jquery-mobile/jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="jquery-mobile/jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
<body> 
<?
$objConnect = mysql_connect("112.121.150.67","hdc","hdc") or die(mysql_error());

$objDB = mysql_select_db("student_db_urrw");
mysql_query("SET NAMES utf8", $objConnect);



$parentid=$_POST['txtparentid'];
$genderp=$_POST['txtgenderp'];
$prefixp=$_POST['txtprefixp'];
$fnamep=$_POST['txtfnamep'];
$lnamep=$_POST['txtlnamep'];
$tel=$_POST['txttel'];
$userp=$_POST['txtuserp'];
$passp=$_POST['txtpassp'];



$success = false;


$strSQL  = "INSERT INTO parent

(parent_id, 
parent_gender, 
parent_prefix, 
parent_fname, 
parent_lname, 
parent_tel,
parent_username, 
parent_password)

VALUES ('$parentid','$genderp','$prefixp','$fnamep','$lnamep','$tel','$userp','$passp')";



$objQuery = mysql_query($strSQL) ;


if ($objQuery){
	$success = true;
}else{
	$success = false;
}

$objResult = mysql_fetch_array($objQuery);


?>

<?
$obj2Connect = mysql_connect("180.183.251.26","ple","0810755815") or die(mysql_error());

$obj2DB = mysql_select_db("student_db_urrw");
mysql_query("SET NAMES utf8", $obj2Connect);



$parentid=$_POST['txtparentid'];
$genderp=$_POST['txtgenderp'];
$prefixp=$_POST['txtprefixp'];
$fnamep=$_POST['txtfnamep'];
$lnamep=$_POST['txtlnamep'];
$tel=$_POST['txttel'];
$userp=$_POST['txtuserp'];
$passp=$_POST['txtpassp'];


$success2 = false;


$strSQL2  = "INSERT INTO parent

(parent_id, 
parent_gender, 
parent_prefix, 
parent_fname, 
parent_lname, 
parent_tel,
parent_username, 
parent_password)

VALUES ('$parentid','$genderp','$prefixp','$fnamep','$lnamep','$tel','$userp','$passp')";


$obj2Query = mysql_query($strSQL2) ;


if ($obj2Query){
	$success2 = true;
}else{
	$success2 = false;
}

$obj2Result = mysql_fetch_array($obj2Query);



?>


<div data-role="page" id="pageedit">
	<div data-role="header">
		<h1>Inserting</h1>
	</div>
	<div data-role="content">	
		<? if ($success == true and $success2 == true) {?>
        <div style="text-align: center">
        <h2>Complete</h2>	
        <p>Thank you</p>
       <font size="5" ><b>    <a href="rec_parent.php" data-role="button">Finish</a>	</b></font>
        
      
        </div>
        <? } else if ($success == false and $success2 == true) {?>
        <div style="text-align: center">
        <h2>Database A Disconnect</h2>	
        <p>FAILED</p>
       <font size="5" ><b>    <a href="rec_parent.php" data-role="button">Try Again</a>	</b></font>
        
      
        </div>
         <? } else if ($success == true and $success2 == false) {?>
        <div style="text-align: center">
        <h2>Database B Disconnect</h2>	
        <p>FAILED</p>
       <font size="5" ><b>    <a href="rec_parent.php" data-role="button">Try Again</a>	</b></font>
        
      
        </div>
        <? } else { ?>
        <div style="text-align:center">
        <h2>FAILED</h2>
        <p style="color:#F00">Not Insert</p>
        <p style="color:#F00">&nbsp;<a href="rec_parent.php" data-role="button" data-icon="back">Try Again</a></p>
        </div>
        <? }?>
	</div>
</div>


</body>
</html>