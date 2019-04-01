<!DOCTYPE html>
<html>
	<head>
		<title>FAQ | To-the-moon</title>

		<!-- ___META___(START)___ -->
		<meta charset="utf-8">
		<meta content='IE=edge' http-equiv='X-UA-Compatible'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta property="og:type" content="website" />
		<meta property="og:image" content="https://to-the-moon.me/img/moon_3.jpg" />
		<meta property="og:title" content="FAQ | To-the-moon" />
		<meta name="description" content="Frequenly Asked Questions (FAQ)" />
		<meta property="og:description" content="Frequenly Asked Questions (FAQ)" />

		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@SpaceRabbitMaco" />
		<meta name="twitter:title" content="FAQ" />
		<meta name="twitter:description" content="Cryptocurrency price drop tracker, helps to buy cryptocurrency cheaper" />
		<meta name="twitter:image" content="https://to-the-moon.me/img/moon_3.jpg" />
		<meta name="twitter:image:alt" content="Moon" />
		<!-- ___META___(END)___ -->

		<!-- ___CSS___(START)___ -->
		<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css'>
		<link href="font-awesome/css/font-awesome.css" rel='stylesheet' type='text/css'>
		<link href="css/main.css" rel='stylesheet' type='text/css'>
		<link href="css/faq.css" rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
		<!-- ___CSS___(END)___ -->

		<!-- ___JS___(START)___ -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
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
				<span><a href='/'>Moon</a></span>
				<span><a href='calc.php'>Calc</a></span>
				<span><a href='nodes.php'>Nodes</a></span>
				<span><a href='faq.php' class='nav-a-selected'>FAQ</a></span>
				<span><a href='donate.php'>Donate</a></span>
			</nav>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xl-12 base-div">
					<h1>FAQ</h1 >

					<div class="faq-div faq-div-left marg-bot-2em">
						<p class="faq-title">Мониторинг монет</p>
						<ul>
							<li>
								Монеты убираются, если выполнено любое из 	условий:
							</li>
								<ul>
									<li>Обьем рынка менее 4 млн. долларов</li>
									<li>Обьем рынка неизвестен ("?" на CMC)</li>
									<li>Нет падения хотя бы:</li>
									<ul>
										<li>На 5% за час</li>
										<li>На 15% за сутки</li>
										<li>На 25% за семь дней</li>
									</ul>
								</ul>
							<li>
								Данные обновляются автоматически каждые 20 минут
							</li>
							<li>
								Вся информация загружается с <a href='https://coinmarketcap.com/all/views/all/' target='_blank'>coinmarketcap.com</a>
							</li>
						</ul>

						<p class="faq-title marg-top-2em">Калькулятор Криптовалют</p>
						<ul>
							<li>
								Данные обновляются  каждые 20 минут
							</li>
							<li>
								Last update зависит от данных, которые приходят от  <a href="https://coinmarketcap.com" target="_blank">coinmarketcap.com</a>
							</li>
							<li>
								Курсы фиатных валют с <a href="https://exchangeratesapi.io/" target="_blank">exchangeratesapi.io</a>
							</li>
						</ul>

						<p class="faq-title marg-top-2em">Мониторинг Мастер нод</p>
						<ul>
							<li>
								Данные обновляются раз в 12 часов
							</li>
							<li>
								Данные загружаются с <a href="https://masternodes.online/" target="_blank">masternodes.online</a>, <a href="https://masternodecap.com/" target="_blank">masternodecap.com</a>, <a href="https://mnrank.com/" target="_blank">mnrank.com</a> и <a href="https://masternode.live/" target="_blank">masternode.live</a>
							</li>
							<li>
								Liquidity = Vol24 / Node Price (чем выше, тем лучше)
							</li>
							<li>
								Монеты убираются, если ROI < 20% или Liqudity < 1 (или неизвестно)
							</li>
						</ul>
					</div>

					<div class="faq-div faq-div-right marg-bot-2em">
						<p class="faq-title">Coin monitoring</p>
						<ul>
							<li>
								Coins are removed if any of the following conditions are true:
							</li>
								<ul>
									<li>The Market Cap is less than 4 million dollars</li>
									<li>The Market Cap is unknown ("?" on CMC)</li>
									<li>No drop at least:</li>
									<ul>
										<li>At 5% per hour</li>
										<li>At 15% per day</li>
										<li>25% over seven days</li>
									</ul>
								</ul>
							<li>
								Data is updated automatically every 20 minutes
							</li>
							<li>
								All information is downloaded from the <a href='https://coinmarketcap.com/all/views/all/' target='_blank'>coinmarketcap.com</a>
							</li>
						</ul>

						<p class="faq-title marg-top-2em">Cryptocurrency Calculator</p>
						<ul>
							<li>
								Data is updated automatically every 20 minutes
							</li>
							<li>
								Last update depends on the data, that comes from the <a href="https://coinmarketcap.com" target="_blank">coinmarketcap.com</a>
							</li>
							<li>
								Fiat rates from <a href="https://exchangeratesapi.io/" target="_blank">exchangeratesapi.io</a>
							</li>
						</ul>

						<p class="faq-title marg-top-2em">Masternodes monitoring</p>
						<ul>
							<li>
							Data is updated automatically every 12 hours
							</li>
							<li>
							All information is downloaded from <a href="https://masternodes.online/" target="_blank">masternodes.online</a>, <a href="https://masternodecap.com/" target="_blank">masternodecap.com</a>, <a href="https://mnrank.com/" target="_blank">mnrank.com</a> and <a href="https://masternode.live/" target="_blank">masternode.live</a>
							</li>
							<li>
								Liqudity = Vol24 / Node Price (the higher the better)
							</li>
							<li>
								Coins are removed if  ROI < 20% or Liquidity < 1 (or unknown)
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>


		<div id='bottom-fixed' class="fixed-bottom-hack">
				<span>Made by <a href='https://twitter.com/SpaceRabbitMaco' target="_blank">@SpaceRabbitMaco</a></span>
				◑
				<span id='bottom-CMC'>All data from <a href='https://coinmarketcap.com/' target='_blank'>CMC</a></span>
		</div>
	</body>
</html>

<script type="text/javascript">
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})

	footerToBottom();

	console.clear();
	console.warn('ver 2.0 (Adaptet for new CMC Pro API)');
	console.log('---');
	console.log('ver 1.9 (Fixed CC icons issue)');
	console.log('ver 1.8 (Calc update (more crypto, fiat inputs))');
	console.log('~ ver 1.7 (composer, bot (in progress))');
	console.log('~ ver 1.6 (https)');
	console.log('~ ver 1.5 (twitter)');
	console.log('~ ver 1.4 (cmc api has been changed, fix )');
	console.log('~ ver 1.3 (remake all makeup, minor fixes, adapted for mobile phones)');
	console.log('~ ver 1.2 (adaptive makeup and some fixes)');
	console.log('~ ver 1.1 (calc update, bootstrap, sitemap)');
	console.log('~ ver 1.0 (web roll out)');

</script>
