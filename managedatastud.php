
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


<div data-role="page" data-theme="c" id="pageMadmin">
	<div data-role="header" data-theme="a">
    <a href="http://112.121.150.67/mntchproject/menuadmin.php" data-icon="back" data-iconpos="notext" data-direction="reverse" >Back</a>
		<h1><font size="2" >Level Choose</font></h1>
	</div>

<?
$strSQL = " SELECT SUBSTR(level_id,1,1) AS nrow
           
            
            FROM student 
            
            WHERE stud_status!='ไม่ปกติ' and level_id!=''
            GROUP BY nrow";
$objQuery = mysql_query($strSQL) or die (mysql_error());


?>
<div data-role="content">	
    <div align="center">
      <img src="pic/level1.png" width="250" height="80
      
      33"> 			</div>
		<ul data-inset="true" data-role="listview" data-theme="a" >
<?
while($objResult = mysql_fetch_array($objQuery)) {
?>




  <li><a href="#">
    <h3><font size="3" >มัธยมศึกษาปีที่ <? echo $objResult["nrow"]?></font></h3>
  </a><a href="http://112.121.150.67/mntchproject/findstud.php?rlid=<?=$objResult["nrow"];?>">รายละเอียด</a></li>
<?
}
?> 
</ul>
	</div>
   
    <div data-role="footer" data-theme="a" data-position="fixed">
		<div data-role="navbar">
          <ul>
          
             <li><a href="http://112.121.150.67/mntchproject/menuadmin.php"><font size="3">Back</font></a></li>
               <li><a href="http://112.121.150.67/mntchproject/insertstud.php"><font size="3">Insert</font></a></li>
          </ul>
        </div>
  </div>
</div>

</body>
</html>