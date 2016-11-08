
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
?>

<div data-role="page" data-theme="c" id="pageSstudentFcut">
	<div data-role="header" data-theme="a">
    <a href="managedatastud.php" data-icon="back" data-iconpos="notext" data-direction="reverse" >Back</a>
		<h1><font size="2" >Student Choose</font></h1>
	</div>

<?
$strSQL = " SELECT * FROM student inner join level on student.level_id=level.level_id inner join parent on student.parent_id=parent.parent_id WHERE student.level_id LIKE '".$_GET["rlid"]."%'";
$objQuery = mysql_query($strSQL) or die (mysql_error());

$objResult = mysql_fetch_array($objQuery);
?>

	<div data-role="content">	
    <div align="center">
      <img src="pic/student.png" width="250" height="120
      
      33"> 			</div>
      
      
      
      
      
      
      
		<ul data-inset="true" data-role="listview" data-theme="a" data-filter="true">
<?
while($objResult = mysql_fetch_array($objQuery)) {
?>




  <li><a href="#">
    <h3><font size="3" ><? echo $objResult["stud_fname"]?> <? echo $objResult["stud_lname"]?></font></h3>
    <font size="2">
    <p>เลขบัตรเด็ก : <? echo $objResult["stud_id"]?></p>
    <p>เลขบัตรเด็ก : <? echo $objResult["parent_id"]?></p>
    <p>ชื่อ-สกุลผู้ปกครอง : <? echo $objResult["parent_fname"]?> <? echo $objResult["parent_lname"]?></p>
    <p>เบอร์โทร : <? echo $objResult["parent_tel"]?></p></font>
  </a> <span class="ui-li-count"><? echo $objResult["level_name"]?></span>
  <a href="settingstud.php?sid=<?=$objResult["stud_id"];?>">รายละเอียด</a></li>
  
<?
}
?> 
</ul>
	</div>
    <div data-role="footer" data-theme="a" data-position="fixed">
		<div data-role="navbar">
          <ul>
          
             <li><a href="managedatastud.php"><font size="3">Back</font></a></li>
                
           
          </ul>
        </div>
  </div>
</div>

</body>
</html>