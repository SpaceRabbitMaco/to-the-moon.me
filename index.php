<!DOCTYPE html>
<html>
	<head>
		<title>Cryptocurrency price drop tracker | To-the-moon</title>

		<!-- ___META___(START)___ -->
		<meta charset="utf-8">
		<meta content='IE=edge' http-equiv='X-UA-Compatible'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="cryptocurrency price drop tracker, cryptocurrency low price, cryptocurrency to buy, дешевые криптовалюты, отслеживание цен на криптовалюту" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="/img/moon.jpg" />
		<meta property="og:title" content="Cryptocurrency price drop tracker | To-the-moon" />
		<meta name="description" content="Cryptocurrency price drop tracker, helps to buy cryptocurrency cheaper" />
		<meta property="og:description" content="Cryptocurrency price drop tracker, helps to buy cryptocurrency cheaper" />
		<!-- ___META___(END)___ -->

		<!-- ___CSS___(START)___ -->
		<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css'>
		<link href="font-awesome/css/font-awesome.css" rel='stylesheet' type='text/css'>
		<link href="css/main.css" rel='stylesheet' type='text/css'>
		<link href="css/all_views_all.css" rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
		<!-- ___CSS___(END)___ -->

		<!-- ___JS___(START)___ -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/priceDrop.js"></script>
		<script src="js/main.js"></script>
		<script src="js/send_mail.js"></script>
		<!-- ___JS___(END)___ -->

		<!-- Yandex.Metrika counter -->
		<!-- <script type="text/javascript" >
		    (function (d, w, c) {
		        (w[c] = w[c] || []).push(function() {
		            try {
		                w.yaCounter46115568 = new Ya.Metrika({
		                    id:46115568,
		                    clickmap:true,
		                    trackLinks:true,
		                    accurateTrackBounce:true
		                });
		            } catch(e) { }
		        });

		        var n = d.getElementsByTagName("script")[0],
		            s = d.createElement("script"),
		            f = function () { n.parentNode.insertBefore(s, n); };
		        s.type = "text/javascript";
		        s.async = true;
		        s.src = "https://mc.yandex.ru/metrika/watch.js";

		        if (w.opera == "[object Opera]") {
		            d.addEventListener("DOMContentLoaded", f, false);
		        } else { f(); }
		    })(document, window, "yandex_metrika_callbacks");
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/46115568" style="position:absolute; left:-9999px;" alt="" /></div></noscript> -->
		<!-- /Yandex.Metrika counter -->
	</head>

	<body>
		<div id='menu'>
			<nav>
				<span><a href='/' class='nav-a-selected'>To the Moon</a></span>
				<span><a href='calc.php'>Calc</a></span>
				<span><a href='faq.php'>FAQ</a></span>
				<span><a href='donate.php'>Donate</a></span>
			</nav>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xl-12 base-div" id='main-div-cc-cc1h'>
				 <h1>One hour Cryptocurrency price change</h1>
				</div>
			</div>
		</div>

		<div class="container" >
			<div class="row">
				<div class="col-xl-12 base-div marg-top-2em" id='main-div-cc-cc24h'>
				 <h1>24 hours Cryptocurrency price change</h1>
				</div>
			</div>
		</div>

		<div class="container" >
			<div class="row">
				<div class="col-xl-12 base-div marg-top-2em" id='main-div-cc-cc1d'>
				 <h1>7 days Cryptocurrency price change</h1>
				</div>
			</div>
		</div>

		<div id='bottom'>
			<span class="bottom-span-one">Made by <a href='https://twitter.com/SpaceRabbitMaco' target="_blank">@SpaceRabbitMaco</a></span>
			◑
			<span id='bottom-CMC'>All data from <a href='https://coinmarketcap.com/' target='_blank'>CMC</a></span>
		</div>

		<script type="text/javascript">
			$(function(){
				startPriceDrop(true); // initialising

				var $timerID = setInterval(function() { // set interval for information refresh
			      	startPriceDrop(false);
				}, 1200000);
			});
		</script>

	</body>
</html>
