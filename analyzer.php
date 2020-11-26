<!DOCTYPE html>
<html>
  <head>
    <title>Cryptocurrency price drop tracker | To-the-moon</title>

    <!-- ___META___(START)___ -->
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="keywords"
      content="cryptocurrency analytics tool, find cryptocurrency, иснтрумент для аналитики криптовалют, поиск криптовалют"
    />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://to-the-moon.me/img/moon_3.jpg" />
    <meta property="og:title" content="Cryptocurrency Analyzer | To-the-moon" />
    <meta
      name="description"
      content="Cryptocurrency analytics tool, helps to find and check cryptocurrency"
    />
    <meta
      property="og:description"
      content="Cryptocurrency analytics tool, helps to find and check cryptocurrency"
    />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@SpaceRabbitMaco" />
    <meta name="twitter:title" content="Cryptocurrency Analyzer" />
    <meta
      name="twitter:description"
      content="Cryptocurrency analytics tool, helps to find and check cryptocurrency"
    />
    <meta
      name="twitter:image"
      content="https://to-the-moon.me/img/moon_3.jpg"
    />
    <meta name="twitter:image:alt" content="Moon" />
    <!-- ___META___(END)___ -->

    <!-- ___CSS___(START)___ -->
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
    <link href="css/all_views_all.css" rel="stylesheet" type="text/css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Merriweather"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/analyzer.css" rel="stylesheet" type="text/css" />
    <link
      href="css/datepicker/datepicker.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- ___CSS___(END)___ -->
    <!-- ___CSS___(END)___ -->

    <!-- ___JS___(START)___ -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
      integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
      crossorigin="anonymous"
    ></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/analyzer.js"></script>
    <script src="js/datepicker/datepicker.js"></script>
    <script src="js/datepicker/datepicker.en.js"></script>
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
    <div id="menu">
      <nav>
        <span><a href="/">Moon</a></span>
        <span><a href="calc.php">Calc</a></span>
        <span><a href="analyzer.php" class="nav-a-selected">Analyzer</a></span>
        <span><a href="faq.php">FAQ</a></span>
        <span><a href="donate.php">Donate</a></span>
      </nav>
    </div>

    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Cryptocurrency Analyzer</h1>
          <form>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label"
                >Price (sat.)</label
              >
              <div class="col-5">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">More than</div>
                  </div>
                  <input
                    type="number"
                    class="form-control a-input"
                    id="a-price-more"
                    autocomplete="off"
                  />
                </div>
              </div>
              <div class="col-5">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Less than</div>
                  </div>
                  <input
                    type="number"
                    class="form-control a-input"
                    id="a-price-less"
                    autocomplete="off"
                  />
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label"
                >Max Supply</label
              >
              <div class="col-5">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">More than</div>
                  </div>
                  <input
                    type="number"
                    class="form-control a-input"
                    id="a-max-more"
                    autocomplete="off"
                  />
                </div>
              </div>
              <div class="col-5">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Less than</div>
                  </div>
                  <input
                    type="number"
                    class="form-control a-input"
                    id="a-max-less"
                    autocomplete="off"
                  />
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label"
                >Circulating Supply</label
              >
              <div class="col-5">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">More than</div>
                  </div>
                  <input
                    type="number"
                    class="form-control a-input"
                    id="a-circ-more"
                    autocomplete="off"
                  />
                </div>
              </div>
              <div class="col-5">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Less than</div>
                  </div>
                  <input
                    type="number"
                    class="form-control a-input"
                    id="a-circ-less"
                    autocomplete="off"
                  />
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label"
                >Date added</label
              >
              <div class="col-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text input-group-text-date">
                      From
                    </div>
                  </div>
                  <input
                    type="text"
                    class="datepicker-here form-control a-input"
                    id="a-add-from"
                    data-language="en"
                    autocomplete="off"
                  />
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label"
                >Platform</label
              >
              <div class="col-sm-5">
                <select class="custom-select a-input" id="a-platform">
                  <option value="Any Platform" selected>Any Platform</option>
                  <option value="None">None</option>
                  <option value="Ethereum">Ethereum</option>
                  <option value="NEO">NEO</option>
                  <option value="Waves">Waves</option>
                  <option value="BitShares">BitShares</option>
                  <option value="Stellar">Stellar</option>
                  <option value="Qtum">Qtum</option>
                  <option value="Omni">Omni</option>
                  <option value="NEM">NEM</option>
                  <option value="Counterparty">Counterparty</option>
                  <option value="Ubiq">Ubiq</option>
                  <option value="EOS">EOS</option>
                  <option value="Nxt">Nxt</option>
                  <option value="Ardor">Ardor</option>
                  <option value="Nebulas">Nebulas</option>
                  <option value="NuBits">NuBits</option>
                  <option value="Vechain [Token]">Vechain [Token]</option>
                  <option value="Ontology">Ontology</option>
                  <option value="Achain">Achain</option>
                  <option value="Ethereum Classic">Ethereum Classic</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label"
                >Mineable — <i style="vertical-align: middle;" class="fas fa-gem"></i></label
              >
              <div class="col-sm-5">
                <select class="custom-select a-input" id="a-mineable">
                  <option value="Any" selected>Any</option>
                  <option value="Mineable">Mineable</option>
                  <option value="Not Mineable">Not Mineable</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-10">
                <button id="a-btn" class="btn btn-primary">
                  Search
                </button>
                <button id="a-btn-reset" class="btn btn-primary">
                  Reset
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="row">
        <div class="col" id="result"></div>
      </div>
    </div>

    <div id="bottom-fixed" class="fixed-bottom-hack">
      <span
        >Made by
        <a href="https://twitter.com/SpaceRabbitMaco" target="_blank"
          >@SpaceRabbitMaco</a
        ></span
      >
      ◑
      <span id="bottom-CMC"
        >All data from
        <a href="https://coinmarketcap.com/" target="_blank">CMC</a></span
      >
    </div>

    <script type="text/javascript">
      // $(function() {
      //   startPriceDrop(true); // initialising

      //   var $timerID = setInterval(function() {
      //     // set interval for information refresh
      //     startPriceDrop(false);
      //   }, 3600000);
      // });
    </script>
  </body>

  <script>
    $(function() {
      appINIT();
      $("#a-add-from").datepicker();
      $("#a-add-from").data("datepicker");
    });
  </script>
</html>
