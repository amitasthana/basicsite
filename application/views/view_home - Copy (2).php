<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<style type="text/css">
		body, html{margin: 0; padding: 0;}
		body{background-color:+EEE; }
		h1, h2, h3, h4, p, a, ul{
			font-family: arial, sans-serif;
			color: black;
			text-decoration: none;
		 }
		 #nav{
		 	margin: 50px auto;
		 	widows: 1000px;
		 	background-color: #888;
		 	height: 15px;
		 	padding: 20px;
		 }

		 #nav a:hover{
		 	color: green;

		 }

		 #nav ul{list-style: none;
		 	float: left;
		 	margin: 0 50px;
		 }

		 #nav ul li {
		 	display: inline;

		 }

		 #content {
		 	width: 1000px;
		 	min-height: 100%;
		 	margin: 0 auto;
		 	padding: 20 px
		 }

		 #footer{
		 	width: 400px;
		 	height: 15px;
		 	padding: 20px;
		 	margin: 0 auto;
		 	text-align: center;
		 }

		 #footer {
		 	color: #777;
		 }
	</style>


	
</head>
<body>

	<div id="container">
		<div id="nav">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>

		<div id="content">
			<h1>Home Page</h1>
			<p>This is the description of home page, welcome to the awesome site</p>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
		</div>

		<div id="footer">
			<h1></h1>
			<p>Copyright 2014, Bogus rights reserved</p>
			
		</div>


	</div>

</body>
</html>