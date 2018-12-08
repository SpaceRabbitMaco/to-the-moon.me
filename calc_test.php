<!DOCTYPE html>
<html>
	<head>
		<title>Cryptocurrency Converter Calculator | To-the-moon</title>

		<!-- ___META___(START)___ -->
		<meta charset="utf-8">
		<meta content='IE=edge' http-equiv='X-UA-Compatible'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="crypto calculator, crypto converter, cryptocurrency converter, cryptocurrency calculator, btc to eth, btc to ltc, конвертер криптовалют, калькулятор криптовалют, биток в эфир, биток в лайткоин" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="/img/moon.jpg" />
		<meta property="og:title" content="Cryptocurrency Converter Calculator | To-the-moon" />
		<meta name="description" content="Cryptocurrency converter calculator tool, helps to convert popular cryptocurrency, also a price tracker" />
		<meta property="og:description" content="Cryptocurrency converter calculator tool, helps to convert popular cryptocurrency, also a price tracker" />
		<!-- ___META___(END)___ -->


		<!-- ___CSS___(START)___ -->
		<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
		<!-- ___CSS___(END)___ -->

		<!-- ___JS___(START)___ -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->

		<script
		  src="https://code.jquery.com/jquery-3.3.1.js"
		  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		  crossorigin="anonymous"></script>

		<script src="js/calc.js"></script>
		<script src="js/main.js"></script>
		<script src="js/send_mail.js"></script>
		<!-- ___JS___(END)___ -->

		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

<link href="css/calc.css" rel='stylesheet' type='text/css'>
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
						<div class='cc-div-conteiner' id='bitcoin-div-1h'>
							<p>
								<span class='symbol'>BTC: </span>
								<span class='cc-usd-price' id='bitcoin'>None</span>
								<span class='cc-1h-change' id='bitcoin-1h-change'>None</span>
							</p>
							<p>
								<span class='elem-hidden'>.</span>
							</p>
							<p>
								<span class='last'>Last update: </span>
								<span class='last' id='bitcoin-last-update'>None</span>
							</p>
						</div>
						<div class='cc-div-conteiner' id='ethereum-div-1h'>
							<p>
								<span class='symbol'>ETH: </span>
								<span class='cc-usd-price' id='ethereum'>None</span>
								<span class='cc-1h-change' id='ethereum-1h-change'>None</span>
							</p>
							<p>
								<span>ETH/BTC: </span>
								<span id='ethereum-BTC'>None</span>
							</p>
							<p>
								<span class='last'>Last update: </span>
								<span class='last' id='ethereum-last-update'>None</span>
							</p>
						</div>
						<div class='cc-div-conteiner' id='litecoin-div-1h'>
							<p>
								<span class='symbol'>LTC: </span>
								<span class='cc-usd-price' id='litecoin'>None</span>
								<span class='cc-1h-change' id='litecoin-1h-change'>None</span>
							</p>
							<p>
								<span>LTC/BTC: </span>
								<span id='litecoin-BTC'>None</span>
							</p>
							<p>
								<span class='last'>Last update: </span>
								<span class='last' id='litecoin-last-update'>None</span>
							</p>
						</div>
						<div class='cc-div-conteiner' id='uniform-fiscal-object-div-1h'>
							<p>
								<span class='symbol'>UFO: </span>
								<span class='cc-usd-price' id='uniform-fiscal-object'>None</span>
								<span class='cc-1h-change' id='uniform-fiscal-object-1h-change'>None</span>
							</p>
							<p>
								<span>UFO/BTC: </span>
								<span id='uniform-fiscal-object-BTC'>None</span>
							</p>
							<p>
								<span class='last'>Last update: </span>
								<span class='last' id='uniform-fiscal-object-last-update'>None</span>
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
								     <input id='input-BTC' type="number" class="form-control cc-calc-input">
							     </div>
						     </div>
						     <div class="col-lg-3">
							    <div class="input-group">
								    <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ethereum">ETH</span>
								    <input id='input-ETH' type="number" class="form-control cc-calc-input">
							    </div>
						    </div>
						    <div class="col-lg-3">
							   <div class="input-group">
								   <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Litecoin">LTC</span>
								   <input id='input-LTC' type="number" class="form-control cc-calc-input">
							   </div>
						   </div>
						   <div class="col-lg-3">
							  <div class="input-group">
								  <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Uniform Fiscal Object" style="padding-left: 0.3em;padding-right: 0.3em;">UFO</span>
								  <input id='input-UFO' type="number" class="form-control cc-calc-input">
							  </div>
						  </div>
					     </div><!-- div-row -->

					     <div class="row marg-bot-1em"><!-- div-row -->
						     <div class="col-lg-3">
							    <div class="input-group">
								    <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bitcoin Cash">BCH</span>
								    <input id="input-BCH" type="number" class="form-control cc-calc-input">
							    </div>
						    </div>
						    <div class="col-lg-3">
							   <div class="input-group">
								   <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Monero" style="padding-left: 0.65em;padding-right:0.65em;">XMR</span>
								   <input id="input-XMR" type="number" class="form-control cc-calc-input">
							   </div>
						   </div>
						   <div class="col-lg-3">
							  <div class="input-group">
								  <span style="padding-left: 0.65em;padding-right:0.65em;" class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Zcash">ZEC</span>
								  <input id="input-ZEC" type="number" class="form-control cc-calc-input">
							  </div>
						  </div>
						  <div class="col-lg-3">
							 <div class="input-group">
								 <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ripple">XRP</span>
								 <input id="input-XRP" type="number" class="form-control cc-calc-input">
							 </div>
						 </div>
					     </div><!-- div-row -->

					     <div class="row marg-bot-2em"><!-- div-row -->
					     	<div class="col-lg-3">
					     	     <div class="input-group">
					     		     <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Dash" style="padding-left: 0.3em;padding-right: 0.3em;">DASH</span>
					     		     <input id="input-DASH" type="number" class="form-control cc-calc-input">
					     	     </div>
					          </div>
					          <div class="col-lg-3">
					     	    <div class="input-group">
					     		    <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ethereum Classic" style="padding-left: 0.65em;padding-right:0.65em;">ETC</span>
					     		    <input id="input-ETC" type="number" class="form-control cc-calc-input">
					     	    </div>
					         </div>
					         <div class="col-lg-3">
					     	   <div class="input-group">
					     		   <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Waves" style="padding-left: 0.1em;padding-right: 0.1em;">WAVES</span>
					     		   <input id="input-WAVES" type="number" class="form-control cc-calc-input">
					     	   </div>
					        </div>
					        <div class="col-lg-3">
					     	  <div class="input-group">
					     		  <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Dogecoin" style="padding-left: 0.3em;padding-right: 0.3em;">DOGE</span>
					     		  <input id="input-DOGE" type="number" class="form-control cc-calc-input">
					     	  </div>
					       </div>
					     </div><!-- div-row -->

					     <h1 class="one"><span>Fiat</span></h1>
					     <div class="row marg-bot-1em"><!-- div-row -->
						     <div class="col-lg-3">
							    <div class="input-group">
								    <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="United States dollar">USD</span>
								    <input id="input-USD" type="text" class="form-control cc-calc-input">
							    </div>
						    </div>
						    <div class="col-lg-3">
							   <div class="input-group">
								   <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Euro">EUR</span>
								   <input id="input-EUR" type="text" class="form-control cc-calc-input">
							   </div>
						   </div>
						   <div class="col-lg-3">
							  <div class="input-group">
								  <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chinese yuan">CNY</span>
								  <input id="input-CNY" type="text" class="form-control cc-calc-input">
							  </div>
						  </div>
						  <div class="col-lg-3">
							 <div class="input-group">
								 <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Russian ruble">RUB</span>
								 <input id="input-RUB" type="text" class="form-control cc-calc-input">
							 </div>
						 </div>
					    </div><!-- div-row -->

					    <div class="row marg-bot-2em"><!-- div-row -->
						    <div class="col-lg-3">
							   <div class="input-group">
								   <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Hong Kong dollar">HKD</span>
								   <input id="input-HKD" type="text" class="form-control cc-calc-input">
							   </div>
						   </div>
						   <div class="col-lg-3">
							  <div class="input-group">
								  <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Pound sterling">GBP</span>
								  <input id="input-GBP" type="text" class="form-control cc-calc-input">
							  </div>
						  </div>
						  <div class="col-lg-3">
							 <div class="input-group">
								 <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="South Korean won" style="padding-left: 0.63em;padding-right:0.63em;">KRW</span>
								 <input id="input-KRW" type="text" class="form-control cc-calc-input">
							 </div>
						 </div>
						 <div class="col-lg-3">
							<div class="input-group">
								<span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Japanese yen" style="padding-left: 0.9em;padding-right:0.9em;">JPY</span>
								<input id="input-JPY" type="text" class="form-control cc-calc-input">
							</div>
						</div>
					   </div><!-- div-row -->

					   <h1 class="one"><span>Profit Calc</span></h1>


					  <div class="row"><!-- div-row -->
						  <div class="col-lg-6 marg-bot-1em">
							 <div class="input-group">
								<select class="selectpicker" data-live-search="true" name="" id='new-select-cc-was'></select>

								<span class="input-group-addon input-profit-title title-cursor" data-toggle="tooltip" data-width="50px" data-placement="bottom" title="" data-original-title="">Was</span>

								 <input id="new-btc-was" type="text" class="form-control cc-calc-input">
							 </div>
						 </div>
						 <div class="col-lg-6">
							<div class="input-group">
								<select class="selectpicker" data-live-search="true" name=""
								 id='new-select-cc-now'>
								 <option value="">1234124134</option>
							</select>

							     <span class="input-group-addon input-profit-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">Now</span>

							     <input id="new-btc-now" type="text" class="form-control cc-calc-input">
							</div>
						</div>
					</div><!-- div-row -->

					<div class="row"><!-- div-row -->
						<div class="col-lg-4">
						     <div class="input-group">
							      <span class="input-group-addon input-profit-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">Sat.</span>

							     <input id="new-btc-profit-sat" type="text" class="form-control cc-calc-input">
						     </div>
					     </div>
					     <div class="col-lg-4">
						    <div class="input-group">
							<span class="input-group-addon input-profit-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">%</span>

							<input id="new-btc-profit-prnt" type="text" class="form-control cc-calc-input">
						    </div>
					    </div>

					    <div class="col-lg-4">
						   <div class="input-group">
						     <span class="input-group-addon input-profit-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">X</span>

						     <input id="new-btc-profit-x" type="text" class="form-control cc-calc-input">
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
	setTimeout(appINIT, 300); // app init
	var timerId1 = setInterval(appINIT, 300000); // app reload

	//setTimeout(updateFiats, 500); // fiat init
	//var timerId2 = setInterval(updateFiats, 300000); // fiat reload

	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})

	footerToBottom();

</script>

<script>
var CC_a, CC_b;
			var CC_a_select = document.getElementById('new-select-cc-was');
			var CC_b_select = document.getElementById('new-select-cc-now');
			var BTC_was = document.getElementById('new-btc-was');
			var BTC_now = document.getElementById('new-btc-now');
			var BTC_profit = document.getElementById('new-btc-profit-sat');
			var BTC_profit_prnt = document.getElementById('new-btc-profit-prnt');
			var BTC_profit_x = document.getElementById('new-btc-profit-x');
			var CC_list;
			var CC_names_list = [];

			var printSelect = function(cc_names, select_id) {
				var target_element = document.getElementById(select_id);
				target_element = $(target_element);
				$.each(cc_names, function(index, value) {
					var id = value.split('###')[1];
					value = value.split('###')[0];
					target_element.append('<option value="'+id+'">'+value+'</option>');
				})

			}

			var init = function(data) {
				data = $(data);
				$.each(data, function(index, value) {
					if (value.name.length > 16) { value.name = value.name.substr(0, 16) + '...'; }
					CC_names_list.push(value.name + ' (' + value.symbol +')###' + value.id);
				})

				printSelect(CC_names_list, 'new-select-cc-was');
				printSelect(CC_names_list, 'new-select-cc-now');
			}

			var calcProfit = function() {
				var a_v = BTC_was.value;
				var b_v = BTC_now.value;
				var a_sat = a_v * CC_a.price_btc;
				var b_sat = b_v * CC_b.price_btc;
				console.log(a_sat, b_sat);

				BTC_profit.value = (b_sat - a_sat).toFixed(8);
				BTC_profit_prnt.value = (((b_sat /a_sat) * 100) - 100).toFixed(1);
				BTC_profit_x.value = (b_sat / a_sat).toFixed(2);
			}

			var initModule = function() {
				$.ajax({
					url: 'https://api.coinmarketcap.com/v1/ticker/?&limit=0',
					dataType : "json",
					success: function (data, textStatus) {
						CC_list = $(data);
						CC_a = CC_list[0];
						CC_b = CC_list[0];
						init(CC_list);

						BTC_was.oninput = function() { calcProfit(); }
						BTC_now.oninput = function() { calcProfit(); }
					}
				})
			}

			var setCC = function(cc_id, type) {
				$.each(CC_list, function (index, value) {
					if (value.id == cc_id && type == 'a') { CC_a = value; }
					if (value.id == cc_id && type == 'b') { CC_b = value; }
				} )
				calcProfit();
			}

			$( function() { initModule(); });


			(function($) {
				BTC_was.oninput = function() { calcProfit(); }
				BTC_now.oninput = function() { calcProfit(); }


			} );

			CC_a_select.onchange = function () { setCC(CC_a_select.value, 'a'); }
			CC_b_select.onchange = function () { setCC(CC_b_select.value, 'b'); }

</script>
