<title>Comment is sent</title>
<?php
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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

	/*Body*/
	.box{
		width: 1127px;
		height: 614px;
		margin: 94px auto;
		background-color: #D3CFCF;
		border-radius: 94px;
		justify-content: center;
	}
	.box h1{
		padding-top: 144px;
		font-weight: bold;
		font-size: 32px;
		font-style: normal;
		line-height: 37px;
		font-weight: 700;
		font-size: 32px;
		color: #474443;
		text-align: center;
	}
	.box p{
		font-size: 36px;
		margin: 93px auto;
		width: 399px;
		height: 168px;
		text-align: center;
		color: #474443;
	}

.text-yellow{
	color: #FFC731;
}

	</style>
<body>
	<div class="box">
		<h1>Send <span class="text-yellow">Comment </span></h1>
		<p>Comment has been sent <br>Thanks for Comment</p>
		
	</div>	
</body>
</html>
<?php
	include 'footer.php';
?>