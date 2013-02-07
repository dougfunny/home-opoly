<!DOCTYPE html>
<html lang="en">
<head>



<meta charset="utf-8">
<title>homeopoly</title>

 
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>

<script src="js/create.js"></script>
<script src="js/login.js"></script>
<script src="js/map.js"></script>
<link href="css/card.css" rel="stylesheet" type="text/css" />
 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script> <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<link rel="stylesheet" href="../css/search.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link href="../bootstrap/docs/assets/css/bootstrap.css" rel="stylesheet">
<link href="../bootstrap/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link href="../bootstrap/docs/assets/css/bootstrap.css" rel="stylesheet">
<link href="../bootstrap/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- Fav and touch icons -->

</head>

<body onload="initialize()">	

 
 


    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"></li>
              <li><a href="#about">help</a></li>
              <li><a href="userLogin.php">login</a></li>
            </ul>
            <ul class="nav">
              <li class="active"></li>
              <li></li>
              <li><a href="userLogin.php">myaccount</a></li>
            </ul>
            <form name="form1" method="post" action="">
              <label for="searchBar"></label>
            </form>
            <div align="right"><a href="userLogin.php">
              <input name="searchBar" type="text" id="searchBar" value="search City or Zip Code">
              <a class="btn btn-primary btn-large">Search</a>
            </a></div>
              
              
              
               
            <div align="right">
            
            </div>
          </div>
          <!--/.nav-collapse -->
       	 </div>
      </div>
</div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list"><li class="nav-header"></li>
              <li class="nav-header"></li>
              <li class="nav-header">
                <div align="center"></div>
              </li>
              <li class="nav-header"> </li>
              <li class="active"></li>
              <li class="active"></li>
              <li class="active"></li>
              <li class="active"></li>
              <li class="active"></li>
              
              
              
              <div class="footer">
  <div class="bs-docs-example">
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
                    <div align="center">
                     <img src="img/house1.jpg" alt="" width="265" height="198">
                    </div>
          <div class="carousel-caption">
                 
          </div>
        </div>
                  <div class="item">
                     <div align="center"><img src="img/house1.jpg" alt="" width="265" height="198"></div>
                    <div class="carousel-caption">
                      
                    </div>
                  </div>
                  <div class="item">
                    <div align="center"><img src="img/house1.jpg" alt="" width="265" height="198"></div>
                    <div class="carousel-caption">
                 
                    
                    </div>
                  </div>
              </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
    </div>


<div class="container">
  <div class="header">
    <div align="center">
      <p align="left">&nbsp;</p>
    </div> 
  <!-- end .header --></div>
  <div class="sidebar1">
<div style="display:none;">
      <div id="sub3">
            <div class="column">          
            
 
    
    </ul>
    
 
            <div align="center">
                
  <!-- 
              Inser recomendation slide images......
              -->
                
                
                
  <table width="259" height="77" id="table1">  
    <tr>
      <td width="241"><b>36 Yawkey Way</b>
        
        
        </td>
      </tr>
  </table>
                
                
              <table width="256" id="table2">
                  <tr>
                    <td>PRICE:   $ 500,000</td>
                  </tr>
                  <tr>
                    <td>BEDROOM: 4BR.</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="339">&nbsp;</td>      
                  </tr>
              </table>
              </div>
            <p>&nbsp;</p>
            </ul>
          </div>
          <p>&nbsp;</p>
        </div>
        <!--/span-->	
          
       
<div class="span9">
      <div class="hero-unit">
 
  <div align="center">
    <form id="addressForm" onsubmit="event.preventDefault();codeAddress();">
        <div>
          <p>
            <label for="address"></label>
            </p>
          <p>&nbsp;</p>
          <p>
            <input type="text" name="address" id="address" />
            <input type="submit" id="addressButton" value="Search" />
          </p>
        </div>
    </form>    

  <div id="map" style="width: 1000px; height: 500px;"></div>
    <p align="right">
      <!-- end .sidebar1 --></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    
    
    
    <?php
$username="root";
$password="baywatch";
$database="homeopoly";

mysql_connect("localhost",$username,$password);
mysql_select_db($database) or die( "Unable to select database");

$query="SELECT * FROM home";


$result=mysql_query($query);
$num=mysql_numrows($result);
 

$i=0;
for ($i; $i < $num; $i++){
	$f12=mysql_result($result,$i,"homeId");
	$f13=mysql_result($result,$i,"homePrice");
	$f14=mysql_result($result,$i,"numbedRm");
}

echo $f12." ".$f13." ".$f14." ";


?>
    
    
    
    
  </div>
      </div>
            
        </div>
         
 
    </div>
  
      <footer>
        <p>&copy; Company 2012
          
        </p>
      </footer>
    </div><!--/.fluid-container-->
    
    
    <!-- Placed at the end of the document so the pages load faster -->
<script src="../bootstrap/docs/assets/js/jquery.js"></script>
<script src="../bootstrap/docs/assets/js/bootstrap-transition.js"></script>
 
<script src="../bootstrap/docs/assets/js/bootstrap-carousel.js"></script>
 
 
</body>
</html>
