<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>footer</title>
        <style>
            * {box-sizing: border-box;}
            body { 
                margin: 0;
                font-family: Roboto, sans-serif;
            }
            @media screen and (max-width: 500px) {
                  .header-left {
                      display: none;
                  }
            }
    /*Footer*/
.footer{
	background-color: #474443;
	position: relative;
	height: 384.19px;
	width: 100%;
	right: 0;
	bottom: 0;
	left: 0;
	display: flex;
	justify-content: space-between;
	align-items: baseline;
}
.footer h3.time{
    font-style: normal;
    font-size: 26px;
    font-weight: bold;
    line-height: 37.5px;
    display: flex;
    margin: 0 auto;
    align-items: center;
    color: #FFC731;
}
.footer h3.title{
    font-style: normal;
    font-size: 32px;
    font-weight: bold;
    line-height: 30px;
    display: flex;
    align-items: center;
    color: #FFC731;
}
.footer h3.contact{
    font-style: normal;
    font-size: 32px;
    font-weight: bold;
    line-height: 30px;
    display: flex;
    align-items: center;
    color: #FFC731;
}
.footer h5{
    font-size: 20px;
    font-weight: bold;
    line-height: 23px;
    margin: 0 auto;
    flex-wrap: wrap;
    align-items: center;
    color: #FFC731;
}
.footer p{
	width: 249px;
	color: #FFFFFF;
	font-size: 20px;
	font-weight: bold;
}
.logo {
    display: inline-block;
    white-space: nowrap;
    width: 245px;
	height: 82px;	
}
.card {
        width: 130px;
        height: 195px;
        background: url("/examples/images/card-back.jpg") no-repeat;
        margin: 50px;
    }
.card:hover {
        background: url("/examples/images/card-front.jpg") no-repeat;
    }

.fb{
    display: inline-block;
    white-space: nowrap;
    width: 51px;
	height: 58px;
    background: url("img/fb.png") no-repeat;
}
.fb-hover{
    position: relative;
    width: 64px;
	height: 60px;
    background: url("img/fb-hover.png") no-repeat;
}
.link {
    display: inline-block;
    white-space: nowrap;
    width: 48px;
	height: 39px;
    background: url("img/link.png") no-repeat;
    }
.link:hover {
    position: relative;
    width: 69px;
	height: 66px;
    background: url("img/link-hover.png") no-repeat;
    }
.left-footer{
	margin-top: 20px;
	margin-left: 50px;
	width: 245px;
}
.middle-footer{
	margin-left: 12px;
	padding-top: 42px;
}
.right-footer{
	margin-left: 12px;
	padding-top: 42px;
	padding-right: 50px;
}
.footer h3.follow{
    font-style: normal;
    font-size: 32px;
    font-weight: bold;
    line-height: 30px;
    display: flex;
    align-items: center;
    color: #FFC731;
}
.location{
	display: flex;
}
</style>
<body>


<div class="footer">
    <div class="left-footer">
      <img class="logo" src="img/logo.png">
      <h3 class="time">Monday - Friday : 9 AM - 7 PM (GMT+8)</h3>
    </div>
    <div class="middle-footer">
      <table id="location">
            <tbody>
              <tr>
                <th colspan="3"><h3 class="title">CONTACT US</h3></th>
              </tr>
              <tr>
                <td><h5>Singapore Head Office</h5></td>
                <td><h5>Indonesia Office</h5></td>
                <td><h5>London Office</h5></td>
              </tr>
              <tr>
                  <td><p>456 Alexandra Road, #04-02 Fragrance Empire Building Singapore 119962</p></td>
                  <td><p>Jl. Soga No.46 Tahunan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55167</p></td>
                  <td><p>71-75 Shelton Street London, Greater London WC2H 9JQ, United Kingdom</p></td>
              </tr>
              <tr>
                  <td><p>+65 8430 0677</p></td>
                  <td><p>+62 822-4223-3230</p></td>
                  <td></td>
                </tr>
            </tbody>
        </table>
      </div>
      <div class="right-footer">
    <table id="sosmed">
        <tbody>
          <tr>
            <th colspan="2"><h3 class="follow">FOLLOW US</h3></th>
          </tr>
          <tr>
          <td><a class="fb" href="https://www.facebook.com/codingcollective/" target="_blank"></a>            
          </td>
          <td><a class="link" href="https://www.linkedin.com/company/codingcollective/" target="_blank"></a></td>
          </tr>
        </tbody>
    </table>

        </div>
    </div>
</body>
</html>