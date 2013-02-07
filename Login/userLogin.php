 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<title>Login Page</title>
 
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #000000;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
	color: #FFFFFF;
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color:#ffffff;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #ffffff;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ this container surrounds all other divs giving them their percentage-based width ~~ */
.container {
	width: 80%;
	max-width: 1260px;/* a max-width may be desirable to keep this layout from getting too wide on a large monitor. This keeps line length more readable. IE6 does not respect this declaration. */
	min-width: 780px;/* a min-width may be desirable to keep this layout from getting too narrow. This keeps line length more readable in the side columns. IE6 does not respect this declaration. */
	background-color: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout. It is not needed if you set the .container's width to 100%. */
}

/* ~~the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo~~ */
.header {
	background-color: #CCCCCC;
}

/* ~~ This is the layout information. ~~ 

1) Padding is only placed on the top and/or bottom of the div. The elements within this div have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

*/
.content {
	padding: 10px 0;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The footer ~~ */
.footer {
	padding: 10px 0;
	background-color: #6F7D94;
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the #footer is removed or taken out of the #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
  <link href="/resources/demos/style.css" rel="stylesheet" type="text/css" />
   <script src="js/create.js"></script>
   <script src="js/login.js"></script>
   
   <style>
    body {
	font-size: 62.5%;
	background-color: #FFFFFF;
}
    label, input { display:block; }
    input.text { margin-bottom:12px; width:95%; padding: .4em; }
    fieldset { padding:0; border:0; margin-top:25px; }
    h1 { font-size: 1.2em; margin: .6em 0; }
    div#users-contain { width: 350px; margin: 20px 0; }
    div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
    div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
    .ui-dialog .ui-state-error { padding: .3em; }
    .validateTips { border: 1px solid transparent; padding: 0.3em; }
	
	
	   .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #eeeeee;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
	   }
	   
	 /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    
	
   </style>

 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../bootstrap/docs/assets/css ../bootstrap.css" rel="stylesheet">
 
    <link href="../bootstrap/docs/assets/css ../bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">
    body,td,th {
	color: #000000;
	background-color: #FFF;
}
    </style>
</head>

<body bgcolor="#FF0000">

<div class="container">
  <div class="header">
<p>&nbsp;</p><div class="container">
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container"><!--/.nav-collapse -->
        </div>
      </div>
  </div>
  
  
    <div align="center">
    
      
      <p>
      
        
        </head>
        <body>
      </p>
      <p>&nbsp; </p>
      <div class="container">
        <p><img src="../monoGuy2.gif" width="241" height="169"></p>
        <p>
          <label for="searchBox">Search City or Zip Code</label>
          <input name="searchBox" type="text" id="searchBox" value="">
        </p>
      <p>
        
        <a href="/homeopoly/search.php" class="btn btn-primary btn-large">Search</a>        </p>
       

  <div class="content"><!-- end .content --></div>
 
  <!-- end .container --></div>
  
  
   <div id="login-form4" title="Create new user"></div>
        
          <div align="center" >
            <button id="create-user"   >
              <font color="#000000"><div align="center">Register</div></font>
            </button>
            
              <button id="login-user"   >
                <font color="#000000"><div align="center">Login</div></font>
              </button>
      </div>
       
    </div>
      </form>

    </div>  
</div>
  <div id="dialog-form" title="Create new user">
    <p class="validateTips">Register:</p>
 
  <form>
  <fieldset>
  <p align="center">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all" />
    
    <label for="email">Enter Email</label>
    <input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all" />
    <label for="password">Create Password</label>
    <input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all" />
    <img src="../bwLogo.jpg" alt="" width="457" height="122">
  </fieldset>
  </form>
  
   
  
  
</div>
 
 
<div id="login-contain" class="ui-widget">
  
</div>


<div id="login-form" title="Login">
    <p class="validateTips">Login:</p>
 
  <form>
  <fieldset>
    
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all" />
    <label for="password">Password</label>
    <input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all" />
  </fieldset>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p align="center"><img src="../bwLogo.jpg" width="457" height="122"></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
 </div>
</body>
</html>
