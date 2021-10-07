<title>news</title>
<?php
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <style>
        body {
            background-image:url(img/bg.jpg); 
        width:100%;
		margin: 0;
		font-family: Roboto, sans-serif;
		background-color: #f5fdfd;
        background-position: left top;
        background-repeat: no-repeat;

        }
        h1{
            text-align: center;
            margin-top: 50px;
            color: #474443;
        }
        .list-update{
            margin-left: 60px;
            color: #474443;
        }
        .list-news{
            margin: 20px;
            display: flex;
            color: #474443;
        }
        .list-news ul {
            list-style-type: none;
            width: 500px;
        }
 
        .list-news h3 {
            font: bold 20px;
        }
 
        .list-news img {
            float: left;
            margin: 0 15px 0 0;
            height: 143px;
            width: 333px;
        }
 
        .list-news p {
            font: 200 12px;
        }
         
        .list-news li {
            padding: 10px;
            overflow: auto;
            width: 1216px;
        }
         
        .list-news li:hover {
            background: #FFC731;
            cursor: pointer;
        }

        .news-card img {
            display: block;
            border: 0;
            width: 100%;
            height: 269px;
            border-top-right-radius: 58px;
            border-top-left-radius: 58px;
        }
        .news-card {
            background: #FFC731;
            margin: 50px;
            width: 403px;
            height: 570px;
            border-radius: 58px;
            color: #474443;
            text-align: center;
        }

        .news-card a {
            color: #474443;
            text-decoration: none;
        }

        .news-card a:hover {
            box-shadow: 3px 3px 8px hsl(0, 0%, 80%);
        }

        .news-card-content {
            padding: 1.4em;
        }

        .news-card-content h2 {
            margin-top: 0;
            margin-bottom: .5em;
            font-weight: bold;
            
        }

        .news-card-content p {
            font-size: 80%;
        }

        /* Flexbox stuff */

        .news-cards {
           display: flex;
           flex-wrap: wrap;
           justify-content: space-between;
        }

        .button {
            margin-left: 30%;
            width: 40%;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>NEWS</h1>
    <section class="news-cards">
        <article class="news-card">
            <img src="img/mu.jpg" alt="Manchester United">
            <div class="news-card-content">
                <a href="#"><h2>Pulang ke Manchester United, Cristiano Ronaldo Pakai Nomor Punggung Berapa?</h2></a>
                <p>Suara.com - Cristiano Ronaldo resmi kembali ke Manchester United, Jumat (27/8/2021) malam WIB. Lalu penyerang 36 tahun itu akan mengenakan nomor punggung berapa dalam periode keduanya merumput di Old Trafford? .....</p>
            </div><!-- .card-content -->
        </article><!-- .card -->

        <article class="news-card">
            <img src="img/positivity.jpg" alt="Positivity Rate">
            <div class="news-card-content">
                <a href="#"><h2>468 Kasus Baru Covid-19 di Jakarta Hari Ini, Positivity Rate di Bawah Batas Aman WHO</h2></a>
                <p>JAKARTA, KOMPAS.com - Pemprov DKI Jakarta kembali mengumumkan perkembangan terbaru kasus Covid-19 di Ibukota pada Sabtu (28/8/2021). Berikut rinciannya: ...</p>
            </div><!-- .card-content -->
        </article><!-- .card -->

        <article class="news-card">
            <img src="img/blood.jpg" alt="Vaksin Covid-19">
            <div class="news-card-content">
                <a href="#"><h2>Beruntung Bagi yang Sudah Vaksin Covid-19, Penelitian Ini Ungkap Perbedaan Kondisi Orang Sebelum dan Sesudah Vaksin Jik Terinfeksi Covid-19, Ternyata Begini Kondisi Darahnya <br>....</h2></a>
            </div><!-- .card-content -->
        </article><!-- .card -->
    </section><!-- .cards -->

    <table class="button" id="button">
            <tbody>
              <tr>
                <th colspan="6"></th>
              </tr>
              <tr>
			  <td><a href="#1" target="_blank"><img src="img/1.png"></a></td>
              <td><a href="#2" target="_blank"><img src="img/2.png"></a></td>
              <td><a href="#3" target="_blank"><img src="img/3.png"></a></td>
              <td><a href="#4" target="_blank"><img src="img/4.png"></a></td>
              <td><a href="#5" target="_blank"><img src="img/5.png"></a></td>
              <td><a href="#6" target="_blank"><img src="img/6.png"></a></td>
              </tr>
            </tbody>
        </table>

    <div class="list-news">
        <ul>
            <li>
                <img src="img/mu.jpg" alt="Manchester United">
                <h3>Pulang ke Manchester United, Cristiano Ronaldo Pakai Nomor Punggung Berapa?</h3>
                <p>Suara.com - Cristiano Ronaldo resmi kembali ke Manchester United, Jumat (27/8/2021) malam WIB. Lalu penyerang 36 tahun itu akan mengenakan nomor punggung berapa dalam periode keduanya merumput di Old Trafford? .....</p>
            </li>
              
            <li>
                <img src="img/positivity.jpg" alt="Positivity Rate">
                <h3>468 Kasus Baru Covid-19 di Jakarta Hari Ini, Positivity Rate di Bawah Batas Aman WHO</h3>
                <p>JAKARTA, KOMPAS.com - Pemprov DKI Jakarta kembali mengumumkan perkembangan terbaru kasus Covid-19 di Ibukota pada Sabtu (28/8/2021). Berikut rinciannya: ...</p>
            </li>
         
            <li>
                <img src="img/blood.jpg" alt="Vaksin Covid-19">
                <h3>Beruntung Bagi yang Sudah Vaksin Covid-19, Penelitian Ini Ungkap Perbedaan Kondisi Orang Sebelum dan Sesudah Vaksin Jik Terinfeksi Covid-19, Ternyata Begini Kondisi Darahnya ....</h3>
            </li>
          </ul>
    </div>
</body>
</html>
<?php
	include 'footer.php';
?>