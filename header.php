<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>header</title>
	<style>
	* {box-sizing: border-box;}
	body { 
		margin: 0;
		font-family: Roboto, sans-serif;
		background-color: #FFC731;
	}
	@media screen and (max-width: 500px) {
  		.header-left {
  			display: none;
  		}
	}
	/*Header*/
	.header {
		background-color: #474443;
		height: 120px;
		padding: 20px ;
		align-items: center;
		display: flex;
		justify-content: space-between;
	}
	.header a {
		color: #FFFFFF;
		text-align: right;
		align-items: center;
		padding: 12px;
		text-decoration: none;
		font-size: 16px; 
		font-style: normal;
		font-weight: 900;
		font-family: Roboto, sans-serif;
		line-height: 18.75px;
		display: inline;
	}
	.header img {
		width: 241px;
		height: 80px;
		margin-left: 58px;
		vertical-align: middle;
	}
	.header a:hover {
		border-bottom: 4px solid #FFC731;
	}
	.header a.active {
		border-bottom: 4px solid #FFC731;
	}
	.header-right {
	  float: right;
	}

	</style>
<body>
	<div class="header bg-dark">
		<div class="header-left">
		<a href="index.php"><img src="img/logo.png" class="logo"></a>
		</div>
		<div class="header-right">
		    <a class="active" href="#home">PROFILES</a>
	    	<a href="#contact">NEWS</a>
	    	<a href="#about">ARTICLES</a>
	    	<a href="#about">COMMENTS</a>
  		</div>
	</div>
	
	</body>
</html>











