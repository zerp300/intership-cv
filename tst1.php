
<!DOCTYPE html>
<html>
<head>
	<title> Menu on test </title>
	<meta charset="utf-8">

</head>
<style type="text/css">
	body{background-color:#f9f9fb;}

    .top-menu
    {
    	
    	display: block;
    	width: 100%;
    	height: 100px;
    	padding-bottom: 50px;
    	border-top: 1px solid rgba(0,0,0,0.2);
    	border-bottom: 1px solid rgba(0,0,0,0.2);
    }
    .top-menu-element 
    {
    	box-sizing: border-box;
    	border-right: 1px solid rgba(0,0,0,0.2);
    	height: 150px;
    	float: left;
    	position: relative;
    	margin-left: 10px;
    	padding-right: 10px;
    	
    }  
    .top-menu-element p img
    {   padding-top: 70px;
    	width: 25px;
    	height: 30px;
    	
    }
    #logo
    {margin-left: 150px}
    #search
    {padding-top:20px;}
    #search input
    {	height: 50px; 
    	width:600px;
    	margin-top:50px;
        border:none;
    }
    #search form  :hover
    {
    	box-shadow: 0px 2px 7px  red;
    }
   
 
     #signin img ,#signup img
     {
  		padding-right:10px;
    	width:35px;
    	height:35px;	
    	display: inline;
    }
    
</style>
<body>
<div class="top-menu">
	<div class="top-menu-element" style="" id="logo" >
		<a href="tst1.php" >
			<img src="wh.jpeg" style="width: 200px;width: 200px ;padding-top: 10px">
		</a>
	</div>
	<div class="top-menu-element"  id="search">
		<form action="" method="get" >
			<input type="text" placeholder="Search Something ...." >
		</form>	
		
	</div>
	<div class="top-menu-element" id="signup">
		<p><img src="ico-top.png">Sign Up</p>
	</div>
	<div class="top-menu-element" id="signin">
		 
		 <p><img src="ico-top.png" >Sign In</p>
	</div>

</div>

</body>
</html>