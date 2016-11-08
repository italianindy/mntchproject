
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
$genderp5=$_POST['txtgenderp'];
$prefixp5=$_POST['txtprefixp'];
$fnamep5=$_POST['txtfnamep'];
$lnamep5=$_POST['txtlnamep'];
$tel5=$_POST['txttel'];
$userp5=$_POST['txtuserp'];
$passp5=$_POST['txtpassp'];


$success = false;

$strSQL  = "UPDATE student inner join parent on student.parent_id=parent.parent_id SET
student.stud_id='$studid',
student.level_id='$levelid', 
student.parent_id='$parentid', 
student.stud_gender='$gender', 
student.stud_prefix='$prefix', 
student.stud_fname='$fname', 
student.stud_lname='$lname', 
student.stud_prefixeng='$prefixeng', 
student.stud_fnameeng='$fnameeng', 
student.stud_lnameeng='$lnameeng', 
student.stud_status='$status', 
student.stud_username='$username', 
student.stud_password='$password', 
student.stud_blood='$blood', 
student.stud_card='$card', 
student.stud_number='$number',
student.stud_pic='$pic',
student.stud_code='$code', 
parent.parent_id='$parentid', 
parent.parent_gender='$genderp5', 
parent.parent_prefix='$prefixp5', 
parent.parent_fname='$fnamep5', 
parent.parent_lname='$lnamep5', 
parent.parent_tel='$tel5', 
parent.parent_username='$userp5', 
parent.parent_password='$passp5' 
WHERE student.stud_id='".$_GET["sid"]."'";




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
$genderp5=$_POST['txtgenderp'];
$prefixp5=$_POST['txtprefixp'];
$fnamep5=$_POST['txtfnamep'];
$lnamep5=$_POST['txtlnamep'];
$tel5=$_POST['txttel'];
$userp5=$_POST['txtuserp'];
$passp5=$_POST['txtpassp'];


$success2 = false;

$strSQL2  = "UPDATE student inner join parent on student.parent_id=parent.parent_id SET
student.stud_id='$studid',
student.level_id='$levelid', 
student.parent_id='$parentid', 
student.stud_gender='$gender', 
student.stud_prefix='$prefix', 
student.stud_fname='$fname', 
student.stud_lname='$lname', 
student.stud_prefixeng='$prefixeng', 
student.stud_fnameeng='$fnameeng', 
student.stud_lnameeng='$lnameeng', 
student.stud_status='$status', 
student.stud_username='$username', 
student.stud_password='$password', 
student.stud_blood='$blood', 
student.stud_card='$card', 
student.stud_number='$number',
student.stud_pic='$pic',
student.stud_code='$code', 
parent.parent_id='$parentid', 
parent.parent_gender='$genderp5', 
parent.parent_prefix='$prefixp5', 
parent.parent_fname='$fnamep5', 
parent.parent_lname='$lnamep5', 
parent.parent_tel='$tel5', 
parent.parent_username='$userp5', 
parent.parent_password='$passp5' 
WHERE student.stud_id='".$_GET["sid"]."'";

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
		<h1>ดำเนินการปรับสถานะ</h1>
	</div>
	<div data-role="content">	
		<? if ($success == true and $success2 == true) {?>
        <div style="text-align: center">
        <h2>สำเร็จ!</h2>	
        <p>ปรับสถานะเรียบร้อย</p>
       <font size="5" ><b>    <a href="managedatastud.php" data-role="button">เสร็จสิ้น</a>	</b></font>
        
      
        </div>
        <? } else if ($success == false and $success2 == true) {?>
        <div style="text-align: center">
        <h2>ฐาน 1 มี ปัญหา</h2>	
        <p>ผิดพลาด</p>
       <font size="5" ><b>    <a href="managedatastud.php" data-role="button">ลองใหม่</a>	</b></font>
        
      
        </div>
         <? } else if ($success == true and $success2 == false) {?>
        <div style="text-align: center">
        <h2>ฐาน 2 มี ปัญหา</h2>	
        <p>ผิดพลาด</p>
       <font size="5" ><b>    <a href="managedatastud.php" data-role="button">ลองใหม่</a>	</b></font>
        
      
        </div>
        <? } else { ?>
        <div style="text-align:center">
        <h2>ผิดพลาด</h2>
        <p style="color:#F00">เกิดข้อผิดพลาด</p>
        <p style="color:#F00">&nbsp;<a href="managedatastud.php" data-role="button" data-icon="back">ลองใหม่</a></p>
        </div>
        <? }?>
	</div>
</div>


</body>
</html>