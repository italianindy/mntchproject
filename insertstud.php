
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


<div data-role="page" data-theme="c" id="pageMadmin">
	<div data-role="header" data-theme="a">
    <a href="managedatastud.php" data-icon="back" data-iconpos="notext" data-direction="reverse" >Back</a>
		<h1><font size="2" >TABLE RECORD</font></h1>
	</div>



	<div data-role="content">	
    <div align="center">
      <img src="pic/table.png" width="250" height="80"> 			</div>

        <font size="2" color="#990000"><a href="rec_stud.php" data-icon="grid" data-role="button" data-theme="a">TB Student</a></font>
        <font size="2" color="#990000"><a href="rec_parent.php" data-icon="grid" data-role="button" data-theme="a">TB Parent</a></font>
        
       
       
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