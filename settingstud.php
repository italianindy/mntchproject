
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


$strSQL = "SELECT * FROM student INNER JOIN parent ON student.parent_id=parent.parent_id WHERE student.stud_id='".$_GET["sid"]."'";



$objQuery = mysql_query($strSQL) or die (mysql_error());

$objResult = mysql_fetch_array($objQuery);
?>
<?

$strSQL2 = "SELECT SUBSTR(level_id,1,1) AS nrow
           
            
            FROM student 
            
            WHERE stud_id='".$_GET["sid"]."'";



$objQuery2 = mysql_query($strSQL2) or die (mysql_error());

$objResult2 = mysql_fetch_array($objQuery2);
?>

         

<div data-role="page" id="pagRecstudentcome">
	<div data-role="header">
     <a href="http://112.121.150.67/mntchproject/findstud.php?rlid=<?=$objResult2["nrow"];?>" data-icon="back" data-iconpos="notext" data-direction="reverse" >Back</a>
		<h1><font size="3">Manage Data</font></h1>
	</div>
	<div data-role="content">	
    <div align="center">
     <img src="pic/gtschool2.png" width="250" height="120">
     </div>
		<form action="updatestud.php?sid=<?=$objResult["stud_id"];?>&pid=<?=$objResult["parent_id"];?>" method="post" id="form1">
		
            <label for="lblstudid">เลขบัตรปชช.นักเรียน :</label>
            
            <input name="txtstudid" type="text" id="txtstudid" value="<? echo $objResult["stud_id"];?>" maxlength="13"  />
              <label for="lbllevelid">รหัสระดับชั้น :</label>
            <input name="txtlevelid" type="text" id="txtlevelid" value="<? echo $objResult["level_id"];?>" maxlength="4"  />
              <label for="lblparentid">เลขบัตรปชช.ผู้ปกครอง :</label>
            <input name="txtparentid" type="text" id="txtparentid" value="<? echo $objResult["parent_id"];?>" maxlength="13"  />
            <label for="lblgender">เพศ :</label>
            <input name="txtgender" type="text" id="txtgender" value="<? echo $objResult["stud_gender"];?>" maxlength="10"  />
            <label for="lblprefix">คำนำหน้า :</label>
            <input name="txtprefix" type="text" id="txtprefix" value="<? echo $objResult["stud_prefix"];?>" maxlength="10"  />
            <label for="lblfname">ชื่อ :</label>
            <input name="txtfname" type="text" id="txtfname" value="<? echo $objResult["stud_fname"];?>" maxlength="50"  />
            <label for="lbllname">นามสกุล :</label>
            <input name="txtlname" type="text" id="txtlname" value="<? echo $objResult["stud_lname"];?>" maxlength="50"  />
             <label for="lblprefixe">คำนำหน้าอังกฤษ :</label>
            <input name="txtprefixe" type="text" id="txtprefixe" value="<? echo $objResult["stud_prefixeng"];?>" maxlength="10"  />
            <label for="lblfnamee">ชื่ออังกฤษ :</label>
            <input name="txtfnamee" type="text" id="txtfnamee" value="<? echo $objResult["stud_fnameeng"];?>" maxlength="50"  />
            <label for="lbllnamee">นามสกุลอังกฤษ :</label>
            <input name="txtlnamee" type="text" id="txtlnamee" value="<? echo $objResult["stud_lnameeng"];?>" maxlength="50"  />

            <p>สถานะ : <? echo $objResult["stud_status"];?>  </p>
		    <select name="selectstatus" id="selectstatus">
		      <option value="ปกติ">ปกติ</option>
		      <option value="แขวนลอย">แขวนลอย</option>
		      <option value="แลกเปลี่ยน">แลกเปลี่ยน</option>
              <option value="ไม่ปกติ">ไม่ปกติ</option>
            </select>
         <label for="lbluser">ชื่อผู้ใช้ :</label>
            <input name="txtuser" type="text" id="txtuser" value="<? echo $objResult["stud_username"];?>" maxlength="13"  />
             <label for="lblpass">รหัสผ่าน :</label>
            <input name="txtpass" type="text" id="txtpass" value="<? echo $objResult["stud_password"];?>" maxlength="13"  />
              <label for="lblblood">หมู่เลือด :</label>
            <input name="txtblood" type="text" id="txtblood" value="<? echo $objResult["stud_blood"];?>" maxlength="2"  />
            <label for="lblcard">การ์ด :</label>
            <input name="txtcard" type="text" id="txtcard" value="<? echo $objResult["stud_card"];?>" maxlength="15"  />
      <label for="lblnumber">เลขที่ :</label>
            <input name="txtnumber" type="text" id="txtnumber" value="<? echo $objResult["stud_number"];?>" maxlength="2"  />
            <label for="lblpic">ตำแหน่งรูป :</label>
            <input name="txtpic" type="text" id="txtpic" value="<? echo $objResult["stud_pic"];?>" maxlength="25"  />
            <label for="lblcode">รหัสประจำตัวนักเรียน :</label>
            <input name="txtcode" type="text" id="txtcode" value="<? echo $objResult["stud_code"];?>" maxlength="5"  />
            <label for="lblgenderp">เพศผู้ปกครอง :</label>
            <input name="txtgenderp" type="text" id="txtgenderp" value="<? echo $objResult["parent_gender"];?>" maxlength="10"  />
             <label for="lblprefixp">คำนำหน้าผู้ปกครอง :</label>
            <input name="txtprefixp" type="text" id="txtprefixp" value="<? echo $objResult["parent_prefix"];?>" maxlength="10"  />
           <label for="lblfnamep">ชื่อผู้ปกครอง :</label>
            <input name="txtfnamep" type="text" id="txtfnamep" value="<? echo $objResult["parent_fname"];?>" maxlength="50"  />
              <label for="lbllnamep">นามสกุลผู้ปกครอง :</label>
            <input name="txtlnamep" type="text" id="txtlnamep" value="<? echo $objResult["parent_lname"];?>" maxlength="50"  />
              <label for="lbltel">เบอร์โทรผู้ปกครอง :</label>
            <input name="txttel" type="text" id="txttel" value="<? echo $objResult["parent_tel"];?>" maxlength="10"  />
              <label for="lbluserp">ชื่อผู้ใช้ผู้ปกครอง :</label>
            <input name="txtuserp" type="text" id="txtuserp" value="<? echo $objResult["parent_username"];?>" maxlength="13"  />
             <label for="lblpassp">รหัสผ่านผู้ปกครอง :</label>
            <input name="txtpassp" type="text" id="txtpassp" value="<? echo $objResult["parent_password"];?>" maxlength="13"  />
      
          
         
         <div align="center">
	        
		  <div data-role="controlgroup" data-type="horizontal">
		    <input name="btnsubmit" type="submit" id="btnsubmit" value="Update" />
            
		    <input name="Reset" type="reset" value="Cancel" />
	      </div>
          </div>
              
        </form>
      
	</div>
    
	<div data-role="footer"  data-position="fixed">
		<div data-role="navbar">
          <ul>
            <li><a href="http://112.121.150.67/mntchproject/findstud.php?rlid=<?=$objResult2["nrow"];?>"><font size="3">Back</font></a></li>
        
           
          </ul>
        </div>
  </div>	

</div>

</body>
</html>