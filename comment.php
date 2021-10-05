<title>Comment</title>
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

	

	/*Form*/
	.box{
	    text-align: center;
		width: 1305px;
		height: 1006px;
		margin: 73px auto;
		background-color: #FFFFFF;
		border-radius: 94px;
		justify-content: center;
        
	}
      .span {
        
        padding: 144px;
        text-align: center;
        font-size: 32px;
		font-style: normal;
		line-height: 37px;
           margin-top: 50px;
           text-size: 36px;
          height: 50px;
        width: 266px;
        font-weight: 700;
        font-size: 32px;
      }
        .span0 {
           color: #000000;        
           
        }
                .span1 {
           color: #FFC731;
         
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
	.box button{
	    
		background: #474443;
            margin: 10%0px;
            width: 138px;
            height: 46px;
            border-radius: 84px;
            color: orange;
            font-weight: 900;
	}
	.box button:hover{		
		background-color: #FFC731;
	}

	input, textarea {
	  width: 751px;
	  padding: 12px;
	  border-bottom: 1px solid #474443;
	  border: none;
	}

	label {
	  padding: 12px 12px 12px 161px;
	  display: inline-block;
	  color: #474443;
	}



.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
	</style>
<body>
	
	<div class="box">
		<span class="span"><span class="span0">Send</span><span class="span1"> Comment</span></span>
	  <form>
		  <div class="row">
		    <div class="col-25">
		      <label for="name">Name</label>
		    </div>

		    <div class="col-75">
		      <input type="text" id="name" name="name" placeholder="Input Your Name..">
		    </div>
  		</div>

		  <div class="row">
		    <div class="col-25">
		      <label for="email">Email</label>
		    </div>

		    <div class="col-75">
		      <input type="text" id="email" name="email" placeholder="Input Your Email..">
		    </div>
  		</div>

		  <div class="row">
		    <div class="col-25">
		      <label for="comment">Comment</label>
		    </div>

		    <div class="col-75">
		      <textarea id="comment" name="comment" placeholder="Write something.."></textarea>
		    </div>
		    <button>SEND</button>
  		</div>
	  </form>
	</div>


	
</body>
</html>
<?php
	include 'footer.php';
?>