
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

 


         

<div data-role="page" id="pagRecstudentcome">
	<div data-role="header">
     <a href="http://112.121.150.67/mntchproject/managedatastud.php" data-icon="back" data-iconpos="notext" data-direction="reverse" >Back</a>
		<h1><font size="3">Manage Data</font></h1>
	</div>
	<div data-role="content">	
    <div align="center">
     <img src="pic/gtschool2.png" width="250" height="120">
     </div>
		<form action="saverec_stud.php" method="post" id="form1">
		
            <label for="lblstudid">เลขบัตรปชช.นักเรียน :</label>
            
            <input name="txtstudid" type="text" id="txtstudid" value="" maxlength="13"  />
              <label for="lbllevelid">รหัสระดับชั้น :</label>
            <input name="txtlevelid" type="text" id="txtlevelid" value="" maxlength="4"  />
              <label for="lblparentid">เลขบัตรปชช.ผู้ปกครอง :</label>
            <input name="txtparentid" type="text" id="txtparentid" value="" maxlength="13"  />
            <label for="lblgender">เพศ :</label>
            <input name="txtgender" type="text" id="txtgender" value="" maxlength="10"  />
            <label for="lblprefix">คำนำหน้า :</label>
            <input name="txtprefix" type="text" id="txtprefix" value="" maxlength="10"  />
            <label for="lblfname">ชื่อ :</label>
            <input name="txtfname" type="text" id="txtfname" value="" maxlength="50"  />
            <label for="lbllname">นามสกุล :</label>
            <input name="txtlname" type="text" id="txtlname" value="" maxlength="50"  />
             <label for="lblprefixe">คำนำหน้าอังกฤษ :</label>
            <input name="txtprefixe" type="text" id="txtprefixe" value="" maxlength="10"  />
            <label for="lblfnamee">ชื่ออังกฤษ :</label>
            <input name="txtfnamee" type="text" id="txtfnamee" value="" maxlength="50"  />
            <label for="lbllnamee">นามสกุลอังกฤษ :</label>
            <input name="txtlnamee" type="text" id="txtlnamee" value="" maxlength="50"  />

            <p>สถานะ : </p>
		    <select name="selectstatus" id="selectstatus">
		      <option value="ปกติ">ปกติ</option>
		      <option value="แขวนลอย">แขวนลอย</option>
		      <option value="แลกเปลี่ยน">แลกเปลี่ยน</option>
              <option value="ไม่ปกติ">ไม่ปกติ</option>
            </select>
         <label for="lbluser">ชื่อผู้ใช้ :</label>
            <input name="txtuser" type="text" id="txtuser" value="" maxlength="13"  />
             <label for="lblpass">รหัสผ่าน :</label>
            <input name="txtpass" type="text" id="txtpass" value="" maxlength="13"  />
              <label for="lblblood">หมู่เลือด :</label>
            <input name="txtblood" type="text" id="txtblood" value="" maxlength="2"  />
            <label for="lblcard">การ์ด :</label>
            <input name="txtcard" type="text" id="txtcard" value="" maxlength="15"  />
      <label for="lblnumber">เลขที่ :</label>
            <input name="txtnumber" type="text" id="txtnumber" value="99" maxlength="2"  />
            <label for="lblpic">ตำแหน่งรูป :</label>
            <input name="txtpic" type="text" id="txtpic" value="" maxlength="25"  />
            <label for="lblcode">รหัสประจำตัวนักเรียน :</label>
            <input name="txtcode" type="text" id="txtcode" value="" maxlength="5"  />

         
         <div align="center">
	        
		  <div data-role="controlgroup" data-type="horizontal">
		    <input name="btnsubmit" type="submit" id="btnsubmit" value="Insert" />
            
		    <input name="Reset" type="reset" value="Cancel" />
	      </div>
          </div>
              
        </form>
      
	</div>
    
	<div data-role="footer"  data-position="fixed">
		<div data-role="navbar">
          <ul>
            <li><a href="http://112.121.150.67/mntchproject/managedatastud.php"><font size="3">Back</font></a></li>
        
           
          </ul>
        </div>
  </div>	

</div>

</body>
</html>