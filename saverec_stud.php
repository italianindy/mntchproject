
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


$studid=$_POST['txtstudid'];
$levelid=$_POST['txtlevelid'];
$parentid=$_POST['txtparentid'];
$gender=$_POST['txtgender'];
$prefix=$_POST['txtprefix'];
$fname=$_POST['txtfname'];
$lname=$_POST['txtlname'];
$prefixeng=$_POST['txtprefixe'];
$fnameeng=$_POST['txtfnamee'];
$lnameeng=$_POST['txtlnamee'];
$status=$_POST['selectstatus'];
$username=$_POST['txtuser'];
$password=$_POST['txtpass'];
$blood=$_POST['txtblood'];
$card=$_POST['txtcard'];
$number=$_POST['txtnumber'];
$pic=$_POST['txtpic'];
$code=$_POST['txtcode'];


$success = false;


$strSQL  = "INSERT INTO  student 
(stud_id,
level_id, 
parent_id, 
stud_gender, 
stud_prefix, 
stud_fname, 
stud_lname, 
stud_prefixeng, 
stud_fnameeng, 
stud_lnameeng, 
stud_status, 
stud_username, 
stud_password, 
stud_blood, 
stud_card, 
stud_number,
stud_pic,
stud_code)

VALUES ('$studid', '$levelid','$parentid','$gender','$prefix','$fname','$lname','$prefixeng','$fnameeng','$lnameeng','$status','$username','$password','$blood','$card','$number','$pic','$code')";


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



$studid=$_POST['txtstudid'];
$levelid=$_POST['txtlevelid'];
$parentid=$_POST['txtparentid'];
$gender=$_POST['txtgender'];
$prefix=$_POST['txtprefix'];
$fname=$_POST['txtfname'];
$lname=$_POST['txtlname'];
$prefixeng=$_POST['txtprefixe'];
$fnameeng=$_POST['txtfnamee'];
$lnameeng=$_POST['txtlnamee'];
$status=$_POST['selectstatus'];
$username=$_POST['txtuser'];
$password=$_POST['txtpass'];
$blood=$_POST['txtblood'];
$card=$_POST['txtcard'];
$number=$_POST['txtnumber'];
$pic=$_POST['txtpic'];
$code=$_POST['txtcode'];


$success2 = false;


$strSQL2  = "INSERT INTO  student 
(stud_id,
level_id, 
parent_id, 
stud_gender, 
stud_prefix, 
stud_fname, 
stud_lname, 
stud_prefixeng, 
stud_fnameeng, 
stud_lnameeng, 
stud_status, 
stud_username, 
stud_password, 
stud_blood, 
stud_card, 
stud_number,
stud_pic,
stud_code)

VALUES ('$studid', '$levelid','$parentid','$gender','$prefix','$fname','$lname','$prefixeng','$fnameeng','$lnameeng','$status','$username','$password','$blood','$card','$number','$pic','$code')";


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
       <font size="5" ><b>    <a href="http://112.121.150.67/mntchproject/rec_stud.php" data-role="button">Finish</a>	</b></font>
        
      
        </div>
        <? } else if ($success == false and $success2 == true) {?>
        <div style="text-align: center">
        <h2>Database A Disconnect</h2>	
        <p>FAILED</p>
       <font size="5" ><b>    <a href="http://112.121.150.67/mntchproject/rec_stud.php" data-role="button">Try Again</a>	</b></font>
        
      
        </div>
         <? } else if ($success == true and $success2 == false) {?>
        <div style="text-align: center">
        <h2>Database B Disconnect</h2>	
        <p>FAILED</p>
       <font size="5" ><b>    <a href="http://112.121.150.67/mntchproject/rec_stud.php" data-role="button">Try Again</a>	</b></font>
        
      
        </div>
        <? } else { ?>
        <div style="text-align:center">
        <h2>FAILED</h2>
        <p style="color:#F00">Not Insert</p>
        <p style="color:#F00">&nbsp;<a href="http://112.121.150.67/mntchproject/rec_stud.php" data-role="button" data-icon="back">Try Again</a></p>
        </div>
        <? }?>
	</div>
</div>



</body>
</html>