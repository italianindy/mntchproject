
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
		<form action="saverec_parent.php" method="post" id="form1">
		
              <label for="lblparentid">เลขบัตรปชช.ผู้ปกครอง :</label>
            <input name="txtparentid" type="text" id="txtparentid" value="" maxlength="13"  />
              <label for="lblgenderp">เพศผู้ปกครอง :</label>
            <input name="txtgenderp" type="text" id="txtgenderp" value="" maxlength="10"  />
             <label for="lblprefixp">คำนำหน้าผู้ปกครอง :</label>
            <input name="txtprefixp" type="text" id="txtprefixp" value="" maxlength="10"  />
           <label for="lblfnamep">ชื่อผู้ปกครอง :</label>
            <input name="txtfnamep" type="text" id="txtfnamep" value="" maxlength="50"  />
              <label for="lbllnamep">นามสกุลผู้ปกครอง :</label>
            <input name="txtlnamep" type="text" id="txtlnamep" value="" maxlength="50"  />
              <label for="lbltel">เบอร์โทรผู้ปกครอง :</label>
            <input name="txttel" type="text" id="txttel" value="" maxlength="10"  />
              <label for="lbluserp">ชื่อผู้ใช้ผู้ปกครอง :</label>
            <input name="txtuserp" type="text" id="txtuserp" value="" maxlength="13"  />
             <label for="lblpassp">รหัสผ่านผู้ปกครอง :</label>
            <input name="txtpassp" type="text" id="txtpassp" value="" maxlength="13"  />
      
          

         
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