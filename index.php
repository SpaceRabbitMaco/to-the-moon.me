<!DOCTYPE html>
<html>

<head>
  <title>Cryptocurrency Converter Calculator | To-the-moon</title>

  <!-- ___META___(START)___ -->
  <meta charset="utf-8" />
  <meta content="IE=edge" http-equiv="X-UA-Compatible" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="crypto calculator, crypto converter, cryptocurrency converter, cryptocurrency calculator, btc to eth, btc to ltc, конвертер криптовалют, калькулятор криптовалют, биток в эфир, биток в лайткоин" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://to-the-moon.me/img/moon_3.jpg" />
  <meta property="og:title" content="Cryptocurrency Converter Calculator | To-the-moon" />
  <meta name="description" content="Cryptocurrency converter calculator tool, helps to convert popular cryptocurrency, also a price tracker" />
  <meta property="og:description" content="Cryptocurrency converter calculator tool, helps to convert popular cryptocurrency, also a price tracker" />

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@SpaceRabbitMaco" />
  <meta name="twitter:title" content="Cryptocurrency Converter Calculator" />
  <meta name="twitter:description" content="Cryptocurrency converter calculator tool, helps to convert popular cryptocurrency, also a price tracker" />
  <meta name="twitter:image" content="https://to-the-moon.me/img/moon_3.jpg" />
  <meta name="twitter:image:alt" content="Moon" />
  <!-- ___META___(END)___ -->

  <!-- ___CSS___(START)___ -->
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
  <link href="css/main.css" rel="stylesheet" type="text/css" />
  <link href="css/calc.css" rel="stylesheet" type="text/css" />
  <link href="css/ccArb.css" rel="stylesheet" type="text/css" />
  <link href="css/all_views_all.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet" />
  <!-- ___CSS___(END)___ -->

  <!-- ___JS___(START)___ -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/calc.js"></script>
  <script src="js/send_mail.js"></script>
  <!-- ___JS___(END)___ -->
</head>

<body>
  <div id="menu">
    <nav>
      <span><a href="calc.php" class="nav-a-selected">Calc</a></span>
      <span><a href='analyzer.php'>Analyzer</a></span>
      <span><a href="info.php">Info</a></span>
      <span><a href="donate.php">Donate</a></span>
    </nav>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-xl-12 base-div">
        <div id="calc-timestamp"></div>
        <h1>Cryptocurrency Converter Calculator</h1>

        <div class="cc-main-div-conteiner">
          <!-- WIDGETS START -->
          <div class="cc-div-conteiner" id="bitcoin-div-1h">
            <p>
              <span class="symbol">BTC: </span>
              <span class="cc-usd-price" id="bitcoin">None</span>
              <span class="cc-1h-change" id="bitcoin-1h-change">None</span>
            </p>
            <p>
              <span class="elem-hidden">.</span>
            </p>
          </div>
          <div class="cc-div-conteiner" id="ethereum-div-1h">
            <p>
              <span class="symbol">ETH: </span>
              <span class="cc-usd-price" id="ethereum">None</span>
              <span class="cc-1h-change" id="ethereum-1h-change">None</span>
            </p>
            <p>
              <span><strong>Sat</strong>: </span>
              <span id="ethereum-BTC">None</span>
            </p>
          </div>
          <div class="cc-div-conteiner" id="litecoin-div-1h">
            <p>
              <span class="symbol">LTC: </span>
              <span class="cc-usd-price" id="litecoin">None</span>
              <span class="cc-1h-change" id="litecoin-1h-change">None</span>
            </p>
            <p>
              <span><strong>Sat</strong>: </span>
              <span id="litecoin-BTC">None</span>
            </p>
          </div>
          <div class="cc-div-conteiner" id="uniform-fiscal-object-div-1h">
            <p>
              <span class="symbol">UFO: </span>
              <span class="cc-usd-price" id="uniform-fiscal-object">None</span>
              <span class="cc-1h-change" id="uniform-fiscal-object-1h-change">None</span>
            </p>
            <p>
              <span><strong>Sat</strong>: </span>
              <span id="uniform-fiscal-object-BTC">None</span>
            </p>
          </div>
        </div>
        <!-- WIDGETS END -->

        <div class="starter-template" style="padding-top:2em;padding-bottom:0.5em">
          <!-- starter-template -->

          <h1 class="one"><span>Crypto</span></h1>

          <div class="row marg-bot-1em">
            <!-- div-row -->
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bitcoin">BTC</span>
                <input id="input-BTC" type="number" class="form-control cc-calc-input" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ethereum">ETH</span>
                <input id="input-ETH" type="number" class="form-control cc-calc-input" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Litecoin">LTC</span>
                <input id="input-LTC" type="number" class="form-control cc-calc-input" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Uniform Fiscal Object" style="padding-left: 0.3em;padding-right: 0.3em;">UFO</span>
                <input id="input-UFO" type="number" class="form-control cc-calc-input" />
              </div>
            </div>
          </div>
          <!-- div-row -->

          <div class="row marg-bot-1em">
            <!-- div-row -->
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bitcoin Cash">BCH</span>
                <input id="input-BCH" type="number" class="form-control cc-calc-input" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Monero" style="padding-left: 0.65em;padding-right:0.65em;">XMR</span>
                <input id="input-XMR" type="number" class="form-control cc-calc-input" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span style="padding-left: 0.65em;padding-right:0.65em;" class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Zcash">ZEC</span>
                <input id="input-ZEC" type="number" class="form-control cc-calc-input" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ripple">XRP</span>
                <input id="input-XRP" type="number" class="form-control cc-calc-input" />
              </div>
            </div>
          </div>
          <!-- div-row -->

          <div class="row marg-bot-2em">
            <!-- div-row -->
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Dash" style="padding-left: 0.3em;padding-right: 0.3em;">DASH</span>
                <input id="input-DASH" type="number" class="form-control cc-calc-input" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ethereum Classic" style="padding-left: 0.65em;padding-right:0.65em;">ETC</span>
                <input id="input-ETC" type="number" class="form-control cc-calc-input" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Waves" style="padding-left: 0.1em;padding-right: 0.1em;">WAVES</span>
                <input id="input-WAVES" type="number" class="form-control cc-calc-input" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-cc-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Dogecoin" style="padding-left: 0.3em;padding-right: 0.3em;">DOGE</span>
                <input id="input-DOGE" type="number" class="form-control cc-calc-input" />
              </div>
            </div>
          </div>
          <!-- div-row -->

          <h1 class="one"><span>Fiat</span></h1>
          <div class="row marg-bot-1em">
            <!-- div-row -->
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="US Dollar">USD</span>
                <input id="input-USD" type="text" class="form-control cc-calc-input" />
                <span style="width:30px;padding:0;" class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="US Dollar">$</span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Euro">EUR</span>
                <input id="input-EUR" type="text" class="form-control cc-calc-input" />
                <span style="width:30px;padding:0;" class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Euro">€</span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chinese Yuan">CNY</span>
                <input id="input-CNY" type="text" class="form-control cc-calc-input" />
                <span style="width:30px;padding:0;" class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chinese Yuan">¥</span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Russian Ruble">RUB</span>
                <input id="input-RUB" type="text" class="form-control cc-calc-input" />
                <span style="width:30px;padding:0;" class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Russian Ruble">₽</span>
              </div>
            </div>
          </div>
          <!-- div-row -->

          <div class="row marg-bot-1em">
            <!-- div-row -->
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Hong Kong Dollar">HKD</span>
                <input id="input-HKD" type="text" class="form-control cc-calc-input" />
                <span style="width:46px;padding:0;" class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Hong Kong Dollar">HK$</span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="British Pound">GBP</span>
                <input id="input-GBP" type="text" class="form-control cc-calc-input" />
                <span style="width:30px;padding:0;" class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="British Pound">£</span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="South Korean Won" style="padding-left: 0.63em;padding-right:0.63em;">KRW</span>
                <input id="input-KRW" type="text" class="form-control cc-calc-input" />
                <span class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="South Korean Won" style="width:30px;padding:0;">₩</span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Japanese Yen" style="padding-left: 0.9em;padding-right:0.9em;">JPY</span>
                <input id="input-JPY" type="text" class="form-control cc-calc-input" />
                <span class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Japanese Yen" style="width:30px;padding:0;">¥</span>
              </div>
            </div>
          </div>
          <!-- div-row -->

          <div class="row marg-bot-1em">
            <!-- div-row -->
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Brazilian Real">BRL</span>
                <input id="input-BRL" type="text" class="form-control cc-calc-input" />
                <span style="width:30px;padding:0;" class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Brazilian Real">R$</span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Turkish Lira">TRY</span>
                <input id="input-TRY" type="text" class="form-control cc-calc-input" />
                <span style="width:30px;padding:0;" class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Turkish Lira">₺</span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Polish Złoty" style="padding-left: 0.63em;padding-right:0.63em;">PLN</span>
                <input id="input-PLN" type="text" class="form-control cc-calc-input" />
                <span class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Polish Złoty" style="width:30px;padding:0;">zł</span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="South African Rand" style="padding-left: 0.9em;padding-right:0.9em;">ZAR</span>
                <input id="input-ZAR" type="text" class="form-control cc-calc-input" />
                <span style="width:30px;padding:0;" class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="South African Rand">R</span>
              </div>
            </div>
          </div>
          <!-- div-row -->

          <div class="row marg-bot-1em">
            <!-- div-row -->
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Australian Dollar">AUD</span>
                <input id="input-AUD" type="text" class="form-control cc-calc-input" />
                <span style="width:30px;padding:0;" class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Australian Dollar">$</span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Canadian Dollar">CAD</span>
                <input id="input-CAD" type="text" class="form-control cc-calc-input" />
                <span style="width:30px;padding:0;" class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Canadian Dollar">$</span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="New Zealand Dollar" style="padding-left: 0.63em;padding-right:0.63em;">NZD</span>
                <input id="input-NZD" type="text" class="form-control cc-calc-input" />
                <span class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="New Zealand Dollar" style="width:30px;padding:0;">$</span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Singapore Dollar" style="padding-left: 0.9em;padding-right:0.9em;">SGD</span>
                <input id="input-SGD" type="text" class="form-control cc-calc-input" />
                <span style="width:30px;padding:0;" class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Singapore Dollar">$</span>
              </div>
            </div>
          </div>
          <!-- div-row -->

          <div class="row marg-bot-2em">
            <!-- div-row -->
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Swiss Franc" style="padding-left: 0.63em;padding-right:0.63em;">CHF</span>
                <input id="input-CHF" type="text" class="form-control cc-calc-input" />
                <span class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Swiss Franc" style="width:30px;padding:0;">Fr.</span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Mexican Peso">MXN</span>
                <input id="input-MXN" type="text" class="form-control cc-calc-input" />
                <span style="width:30px;padding:0;" class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Mexican Peso">$</span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Indian Rupee">INR</span>
                <input id="input-INR" type="text" class="form-control cc-calc-input" />
                <span style="width:30px;padding:0;" class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Indian Rupee">₹</span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon input-fiat-title title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Indonesian Rupiah" style="padding-left: 0.9em;padding-right:0.9em;">IDR</span>
                <input id="input-IDR" type="text" class="form-control cc-calc-input" />
                <span style="width:30px;padding:0;" class="input-group-addon title-cursor" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Indonesian Rupiah">Rp</span>
              </div>
            </div>
          </div>
          <!-- div-row -->

        </div>
        <!-- starter-template -->
      </div>
    </div>
  </div>

  <div id="bottom-fixed" class="fixed-bottom-hack">
    <span>Made by
      <a href="https://twitter.com/SpaceRabbitMaco" target="_blank">@SpaceRabbitMaco</a></span>
    ◑
    <span id="bottom-CMC">All data from
      <a href="https://coinmarketcap.com/" target="_blank">CMC</a></span>
  </div>
</body>

</html>

<script type="text/javascript">
  $(function() {
    setTimeout(appINIT, 300); // app init
    var timerId1 = setInterval(appINIT, 3600000); // app reload
  });

  $(function() {
    $('[data-toggle="tooltip"]').tooltip();
    footerToBottom();
  });
</script>