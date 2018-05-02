<!DOCTYPE html>
<html>
<head>
	<title>
		Good M0rning
	</title>
	<style>
	body
	{
		background-color: #ccffff;
	}
	.top-section
	{
		width:50%;
		height:300px;
		display: block;
		position: relative;		
		left:350px;
		top:20px;		
		background-color:#51244e ;
		border:2px solid red;
		overflow: hidden;
		box-shadow: 7px 7px 20px 5px rgba(0, 0, 0,0.2)
		margin-bottom:200px;

	}
	.logo
	{
		position:absolute;
		top:15px;
		left:10px;
		float: left;

	}

	.user-photo
	{
		position:absolute;
		right:40px;
		top:50px;
		border:2px solid red;
		text-align: center;
	}
	.menu-nav
	{
		position: absolute;
		left:0px;
		bottom:0px;	
		width: 100%;
		background-color: black;
		
		
	}
	.menu-nav ul
	{
		list-style-type: none;

	}
	.menu-nav li
	{
		display:inline;

	}
	.menu-nav li a
	{
		padding:8px;
		color:blue;
		text-align: left;
		text-decoration: none;
	}
	.menu-nav li a:hover
	{
		background-color: red;

	}
	.section2
	{   position: relative;
		margin-top: 100px;
		width:50%;
		height:600px;
		background-color:#51244e ;
		left:350px;
		overflow: auto;
	}
	.img-section2 img
	{   float:left;
		width:500px;
		height: 300px;
		padding:20px 0px 5px 90px;
		left:90px;
		top:20px;
	}
	.text-p 
	{
		color:white;
		clear:left;
		padding-left: 90px;
	}


	</style>
</head>
<body>
	<div class="top-section">

		<div class="logo">
			<img src="wh.jpeg" style="width: 200px;height: 200px;">

		</div>

		<div class="user-photo">
			<img src="Gw.png">
			<p>Username</p>

		</div>

		<div class="menu-nav">
			<ul>
				<li >
					<a href="tst.php">Menu</a>
				</li>
				<li>
					<a href="#">Link1</a>
				</li>
				<li>
					<a href="#">Link2</a>
				</li>
			</ul>

		</div>		
	</div>

	<div class="section2">

		<div class="img-section2">
			<img src="buver.jpg"><br>
		</div>

		<div class="text-p">
			<p > Les Gars A la maison </p>
		</div>

	</div>

</body>
</html>