<!DOCTYPE html>
<html>
	<head>
		<title>Cryptocurrency Converter Calculator | To-the-moon</title>

		<!-- ___META___(START)___ -->
		<meta charset="utf-8">
		<meta content='IE=edge' http-equiv='X-UA-Compatible'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="cryptocurrency converter, cryptocurrency calculator, btc to eth, btc to ltc, конвертер криптовалют, калькулятор криптовалют, биток в эфир, биток в лайткоин" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="/img/moon.jpg" />
		<meta property="og:title" content="Cryptocurrency Converter Calculator | To-the-moon" />
		<meta name="description" content="Cryptocurrency converter calculator tool, helps to convert popular cryptocurrency, also a price tracker" />
		<meta property="og:description" content="Cryptocurrency converter calculator tool, helps to convert popular cryptocurrency, also a price tracker" />
		<!-- ___META___(END)___ -->

		<!-- ___CSS___(START)___ -->
		<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css'>
		<link href="font-awesome/css/font-awesome.css" rel='stylesheet' type='text/css'>
		<link href="css/main.css" rel='stylesheet' type='text/css'>
		<link href="css/calc.css" rel='stylesheet' type='text/css'>
		<link href="css/ccArb.css" rel='stylesheet' type='text/css'>
		<link href="css/all_views_all.css" rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
		<!-- ___CSS___(END)___ -->

		<!-- ___JS___(START)___ -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/calc_new.js"></script>
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
				<span><a href='/'>To the Moon</a></span>
				<span><a href='calc.php' class='nav-a-selected'>Calc</a></span>
				<span><a href='faq.php'>FAQ</a></span>
				<span><a href='donate.php'>Donate</a></span>
			</nav>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xl-12 base-div">
					<h2>Cryptocurrency Converter Calculator</h2>

					<div class='cc-main-div-conteiner'><!-- WIDGETS START -->
						<div class='cc-div-conteiner' id='Bitcoin-div-1h'>
							<p>
								<span class='symbol'>BTC: </span>
								<span class='cc-usd-price' id='Bitcoin'>None</span>
								<span class='cc-1h-change' id='Bitcoin-1h-change'>None</span>
							</p>
							<p>
								<span class='elem-hidden'>.</span>
							</p>
							<p>
								<span class='last'>Last update: </span>
								<span class='last' id='Bitcoin-last-update'>None</span>
							</p>
						</div>
						<div class='cc-div-conteiner' id='Ethereum-div-1h'>
							<p>
								<span class='symbol'>ETH: </span>
								<span class='cc-usd-price' id='Ethereum'>None</span>
								<span class='cc-1h-change' id='Ethereum-1h-change'>None</span>
							</p>
							<p>
								<span>ETH/BTC: </span>
								<span id='Ethereum-BTC'>None</span>
							</p>
							<p>
								<span class='last'>Last update: </span>
								<span class='last' id='Ethereum-last-update'>None</span>
							</p>
						</div>
						<div class='cc-div-conteiner' id='Litecoin-div-1h'>
							<p>
								<span class='symbol'>LTC: </span>
								<span class='cc-usd-price' id='Litecoin'>None</span>
								<span class='cc-1h-change' id='Litecoin-1h-change'>None</span>
							</p>
							<p>
								<span>LTC/BTC: </span>
								<span id='Litecoin-BTC'>None</span>
							</p>
							<p>
								<span class='last'>Last update: </span>
								<span class='last' id='Litecoin-last-update'>None</span>
							</p>
						</div>
						<div class='cc-div-conteiner' id='Dogecoin-div-1h'>
							<p>
								<span class='symbol'>DOGE: </span>
								<span class='cc-usd-price' id='Dogecoin'>None</span>
								<span class='cc-1h-change' id='Dogecoin-1h-change'>None</span>
							</p>
							<p>
								<span>DOGE/BTC: </span>
								<span id='Dogecoin-BTC'>None</span>
							</p>
							<p>
								<span class='last'>Last update: </span>
								<span class='last' id='Dogecoin-last-update'>None</span>
							</p>
						</div>
					</div><!-- WIDGETS END -->

					<div class="starter-template" style="padding-top:2em;padding-bottom:0.5em"><!-- starter-template -->

						<!-- <h2 class="test"><span class="test-span">Crypto</span></h2> -->

						<h1 class="one"><span>Crypto</span></h1>

						<div class="row marg-bot-1em"><!-- div-row -->
							<div class="col-lg-3">
							     <div class="input-group">
								     <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bitcoin">BTC</span>
								     <input id='input-BTC' type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
							     </div>
						     </div>
						     <div class="col-lg-3">
							    <div class="input-group">
								    <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ethereum">ETH</span>
								    <input id='input-ETH' type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
							    </div>
						    </div>
						    <div class="col-lg-3">
							   <div class="input-group">
								   <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Litecoin">LTC</span>
								   <input id='input-LTC' type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
							   </div>
						   </div>
						   <div class="col-lg-3">
							  <div class="input-group">
								  <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dogecoin" style="padding-left: 0.3em;padding-right: 0.3em;">DOGE</span>
								  <input id='input-DOGE' type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
							  </div>
						  </div>
					     </div><!-- div-row -->
					     <div class="row marg-bot-2em"><!-- div-row -->
						     <div class="col-lg-3">
							    <div class="input-group">
								    <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bitcoin Cash">BCH</span>
								    <input id="input-BCH" type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
							    </div>
						    </div>
						    <div class="col-lg-3">
							   <div class="input-group">
								   <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Monero" style="padding-left: 0.65em;padding-right:0.65em;">XMR</span>
								   <input id="input-XMR" type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
							   </div>
						   </div>
						   <div class="col-lg-3">
							  <div class="input-group">
								  <span style="padding-left: 0.65em;padding-right:0.65em;" class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Zcash">ZEC</span>
								  <input id="input-ZEC" type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
							  </div>
						  </div>
						  <div class="col-lg-3">
							 <div class="input-group">
								 <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ripple">XRP</span>
								 <input id="input-XRP" type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
							 </div>
						 </div>
					     </div><!-- div-row -->


					     <h1 class="one"><span>Fiat</span></h1>

					     <div class="row marg-bot-1em"><!-- div-row -->
						     <div class="col-lg-3">
							    <div class="input-group">
								    <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="United States dollar">USD</span>
								    <input id="input-USD"  disabled type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
							    </div>
						    </div>
						    <div class="col-lg-3">
							   <div class="input-group">
								   <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Euro">EUR</span>
								   <input id="input-EUR"  disabled type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
							   </div>
						   </div>
						   <div class="col-lg-3">
							  <div class="input-group">
								  <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chinese yuan">CNY</span>
								  <input id="input-CNY" disabled type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
							  </div>
						  </div>
						  <div class="col-lg-3">
							 <div class="input-group">
								 <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Russian ruble">RUB</span>
								 <input id="input-RUB" disabled type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
							 </div>
						 </div>
					    </div><!-- div-row -->

					    <div class="row"><!-- div-row -->
						    <div class="col-lg-3">
							   <div class="input-group">
								   <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Hong Kong dollar">HKD</span>
								   <input id="input-HKD" disabled type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
							   </div>
						   </div>
						   <div class="col-lg-3">
							  <div class="input-group">
								  <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Pound sterling">GBP</span>
								  <input id="input-GBP" disabled type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
							  </div>
						  </div>
						  <div class="col-lg-3">
							 <div class="input-group">
								 <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="South Korean won" style="padding-left: 0.63em;padding-right:0.63em;">KRW</span>
								 <input id="input-KRW" disabled type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
							 </div>
						 </div>
						 <div class="col-lg-3">
							<div class="input-group">
								<span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Japanese yen" style="padding-left: 0.9em;padding-right:0.9em;">JPY</span>
								<input id="input-JPY" disabled type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
							</div>
						</div>
					   </div><!-- div-row -->

					</div><!-- starter-template -->

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
	setTimeout(appINIT, 500); // app init
	var timerId1 = setInterval(appINIT, 300000); // app reload

	setTimeout(updateFiats, 500); // fiat init
	var timerId2 = setInterval(updateFiats, 300000); // fiat reload

	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})

	footerToBottom();

	console.log($ALL_Calc_CC);

 var $newURL = function () { // USD,EUR,ETH,ETC
 	var $base_url = 'https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=';
	var $url_cc = $ALL_Calc_CC.join(',');
	var $url_calc_full  = $base_url + $url_cc;
	console.log($url_calc_full);
}();

// 	$.ajax({
// 		url: $url,
// 		dataType : "json",
// 		success: function (data, textStatus) {
//
//
// 		var $ccObj = data[0]; // .name, .symbol, .percent_change_1h, price_btc, price_usd
//
// 		if ($ccObj.percent_change_1h > 0) {
// 			$ccObj.percent_change_1h = '+' + $ccObj.percent_change_1h;
// 			$('#' + $ccObj.name + '-div-1h').css({'background-color' : 'rgba(76, 175, 80, 0.20)'});
// 			$('#' + $ccObj.name + '-1h-change').css({'color' : '#4CAF50'});
// 		} else {
// 			$('#' + $ccObj.name + '-div-1h').css({'background-color' : 'rgba(255, 152, 0, 0.20)'});
// 			$('#' + $ccObj.name + '-1h-change').css({'color' : '#FF5722'});
// 		}
//
// 		var $lastUpdate = getDateLastUpdate($ccObj);
//
// 		$('#' + $ccObj.name).text($ccObj.price_usd);
// 		$('#' + $ccObj.name + '-last-update').text($lastUpdate);
// 		$('#' + $ccObj.name + '-1h-change').text($ccObj.percent_change_1h + '%');
//
//
// 	});
// }

</script>
