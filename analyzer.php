<!DOCTYPE html>
<html>

<head>
  <title>Cryptocurrency analytics tool | To-the-moon</title>

  <!-- ___META___(START)___ -->
  <meta charset="utf-8" />
  <meta content="IE=edge" http-equiv="X-UA-Compatible" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="cryptocurrency analytics tool, find cryptocurrency, иснтрумент для аналитики криптовалют, поиск криптовалют" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://to-the-moon.me/img/moon_3.jpg" />
  <meta property="og:title" content="Cryptocurrency Analyzer | To-the-moon" />
  <meta name="description" content="Cryptocurrency analytics tool, helps to find and check cryptocurrency" />
  <meta property="og:description" content="Cryptocurrency analytics tool, helps to find and check cryptocurrency" />

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@SpaceRabbitMaco" />
  <meta name="twitter:title" content="Cryptocurrency Analyzer" />
  <meta name="twitter:description" content="Cryptocurrency analytics tool, helps to find and check cryptocurrency" />
  <meta name="twitter:image" content="https://to-the-moon.me/img/moon_3.jpg" />
  <meta name="twitter:image:alt" content="Moon" />
  <!-- ___META___(END)___ -->

  <!-- ___CSS___(START)___ -->
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
  <link href="css/all_views_all.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
  <link href="css/main.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <link href="css/analyzer.css" rel="stylesheet" type="text/css" />
  <link href="css/datepicker/datepicker.css" rel="stylesheet" type="text/css" />
  <!-- ___CSS___(END)___ -->
  <!-- ___CSS___(END)___ -->

  <!-- ___JS___(START)___ -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/analyzer.js"></script>
  <script src="js/datepicker/datepicker.js"></script>
  <script src="js/datepicker/datepicker.en.js"></script>
  <!-- ___JS___(END)___ -->
</head>

<body>
  <div id='menu'>
    <nav>
      <span><a href='/'>Calc</a></span>
      <span><a href='analyzer.php' class='nav-a-selected'>Analyzer</a></span>
      <span><a href='info.php'>Info</a></span>
      <span><a href='donate.php'>Donate</a></span>
    </nav>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Cryptocurrency Analyzer</h1>
        <form>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Price (sat.)</label>
            <div class="col-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">More than</div>
                </div>
                <input type="number" class="form-control a-input" id="a-price-more" autocomplete="off" />
              </div>
            </div>
            <div class="col-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">Less than</div>
                </div>
                <input type="number" class="form-control a-input" id="a-price-less" autocomplete="off" />
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Total Supply</label>
            <div class="col-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">More than</div>
                </div>
                <input type="number" class="form-control a-input" id="a-total-more" autocomplete="off" />
              </div>
            </div>
            <div class="col-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">Less than</div>
                </div>
                <input type="number" class="form-control a-input" id="a-total-less" autocomplete="off" />
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Date added</label>
            <div class="col-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-group-text-date">
                    From
                  </div>
                </div>
                <input type="text" class="datepicker-here form-control a-input" id="a-add-from" data-language="en" autocomplete="off" />
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Platform <i class="fas fa-cogs"></i></label>
            <div class="col-sm-5">
              <select class="custom-select a-input" id="a-platform">
                <option value="Any Platform" selected>Any Platform</option>
                <option value="None">None</option>
                <option value="Ethereum">Ethereum</option>
                <option value="Binance Coin">Binance Coin</option>
                <option value="TRON">TRON</option>
                <option value="Neo">Neo</option>
                <option value="EOS">EOS</option>
                <option value="IOST">IOST</option>
                <option value="Chiliz">Chiliz</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Mineable <i style="vertical-align: middle;" class="fas fa-gem"></i></label>
            <div class="col-sm-5">
              <select class="custom-select a-input" id="a-mineable">
                <option value="Any" selected>Any</option>
                <option value="Mineable">Mineable</option>
                <option value="Not Mineable">Not Mineable</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tags <i class='fas fa-tag'></i></label>
            <div class="col-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-group-text-date">Algo</div>
                </div>
                <select class="custom-select a-input" id="a-algo">
                  <option value="Any Algo" selected>Any Algo</option>
                  <option value="sha-256">SHA-256</option>
                  <option value="ethash">Ethash</option>
                  <option value="scrypt">Scrypt</option>
                  <option value="x11">X11</option>
                  <option value="equihash">Equihash</option>
                  <option value="blake256">Blake256</option>
                  <option value="blake2b">Blake2b</option>
                  <option value="sha-512">SHA-512</option>
                  <option value="lyra2re">Lyra2re</option>
                  <option value="x13">X13</option>
                  <option value="mimble-wimble">MimbleWimble</option>
                  <option value="quark">Quark</option>
                  <option value="cryptonight">CryptoNight</option>
                  <option value="groestl">Groestl</option>
                  <option value="cryptonight-lite">CryptoNight Lite</option>
                  <option value="neoscrypt">NeoScrypt</option>
                  <option value="argon2">Argon2</option>
                  <option value="xevan">Xevan</option>
                  <option value="hmq1725">HMQ1725</option>
                  <option value="x15">X15</option>
                  <option value="yescript">Yescript</option>
                  <option value="x11gost">X11 Gost</option>
                  <option value="scrypt-n">Scrypt-N</option>
                  <option value="dagger-hashimoto">Dagger-Hashimoto</option>
                  <option value="blake">Blake</option>
                  <option value="m7-pow">M7 POW</option>
                  <option value="blake2s">BLAKE2s</option>
                  <option value="x14">X14</option>
                  <option value="qubit">Qubit</option>
                  <option value="nist5">NIST5</option>
                </select>
              </div>
            </div>
            <div class="col-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">Proof type</div>
                </div>
                <select class="custom-select a-input" id="a-proof">
                  <option value="Any" selected>Any</option>
                  <option value="pow">PoW</option>
                  <option value="pos">PoS</option>
                  <option value="hybrid-pow-pos">Hybrid PoW/PoS</option>
                  <option value="hybrid-pow-npos">Hybrid PoW/nPoS</option>
                  <option value="hybrid-pos-lpos">Hybrid PoS/lPoS</option>
                  <option value="hybrid-pos-pop">Hybrid PoS/PoP</option>
                  <option value="hybrid-dpow-pow">Hybrid dPoW/PoW</option>
                  <option value="poi">PoI</option>
                  <option value="lpos">lPoS</option>
                  <option value="dpos">dPoS</option>
                  <option value="poc">PoC</option>
                  <option value="tpos">tPoS</option>
                  <option value="dpor">dPoR</option>
                  <option value="powt">PoWt</option>
                  <option value="pop">PoP</option>
                  <option value="post">PoSt</option>
                  <option value="pos-30">PoS 3.0</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tags <i class='fas fa-tag'></i></label>
            <div class="col-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">Bussines</div>
                </div>
                <select class="custom-select a-input" id="a-bfield">
                  <option value="Any" selected>Any</option>
                  <option value="payments">Payments</option>
                  <option value="crowdfunding">Crowdfunding</option>
                  <option value="marketplace">Marketplace</option>
                  <option value="oracles">Oracles</option>
                  <option value="defi">DeFi</option>
                  <option value="filesharing">File Sharing</option>
                  <option value="logistics">Logistics</option>
                  <option value="sharing-economy">Sharing Economy</option>
                  <option value="content-creation">Content Creation</option>
                  <option value="marketing">Marketing</option>
                  <option value="centralized-exchange">Centralized Exchange</option>
                  <option value="decentralized-exchange">Decentralized Exchange</option>
                  <option value="derivatives">Derivatives</option>
                  <option value="reputation">Reputation</option>
                  <option value="identity">Identity</option>
                  <option value="prediction-markets">Prediction Markets</option>
                  <option value="gaming">Gaming</option>
                  <option value="sports">Sports</option>
                  <option value="health">Health</option>
                  <option value="energy">Energy</option>
                  <option value="hospitality">Hospitality</option>
                  <option value="cybersecurity">Cybersecurity</option>
                  <option value="gambling">Gambling</option>
                  <option value="search-engine">Search Engine</option>
                  <option value="loyalty">Loyalty</option>
                  <option value="transport">Transport</option>
                  <option value="real-estate">Real Estate</option>
                  <option value="e-commerce">E-commerce</option>
                  <option value="retail">Retail</option>
                  <option value="commodities">Commodities</option>
                  <option value="crowdsourcing">Crowdsourcing</option>
                  <option value="entertainment">Entertainment</option>
                  <option value="jobs">Jobs</option>
                  <option value="education">Education</option>
                  <option value="events">Events</option>
                  <option value="music">Music</option>
                  <option value="art">Art</option>
                  <option value="adult">Adult</option>
                  <option value="philanthropy">Philanthropy</option>
                  <option value="food-beverage">Food Beverage</option>
                  <option value="agriculture">Agriculture</option>
                </select>
              </div>
            </div>
            <div class="col-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">Feachures</div>
                </div>
                <select class="custom-select a-input" id="a-feachures">
                  <option value="Any" selected>Any</option>
                  <option value="privacy">Privacy</option>
                  <option value="store-of-value">Store of Value</option>
                  <option value="enterprise-solutions">Enterprise Solutions</option>
                  <option value="medium-of-exchange">Medium of Exchange</option>
                  <option value="research">Research</option>
                  <option value="mobile">Mobile</option>
                  <option value="media">Media</option>
                  <option value="discount-token">Discount Token</option>
                  <option value="data-provenance">Data Provenance</option>
                  <option value="interoperability">Interoperability</option>
                  <option value="memes">Memes</option>
                  <option value="multiple-algorithms">Multiple Algorithms</option>
                  <option value="services">Services</option>
                  <option value="geospatial-services">Geospatial Services</option>
                  <option value="video">Video</option>
                  <option value="stablecoin-algorithmically-stabilized">Stablecoin Algorithmically Stabilized</option>
                  <option value="stablecoin-asset-backed">Stablecoin Asset Backed</option>
                  <option value="stablecoin">Stablecoin</option>
                  <option value="wallet">Wallet</option>
                  <option value="technology">Technology</option>
                  <option value="asset-management">Asset Management</option>
                  <option value="hardware">Hardware</option>
                  <option value="staking">Staking</option>
                  <option value="scaling">Scaling</option>
                  <option value="escrow">Escrow</option>
                  <option value="posign">Posign</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tags <i class='fas fa-tag'></i></label>
            <div class="col-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-group-text-date">Tech</div>
                </div>
                <select class="custom-select a-input" id="a-tech">
                  <option value="Any" selected>Any</option>
                  <option value="masternodes">Masternodes</option>
                  <option value="ringct">RingCT</option>
                  <option value="atomic-swaps">Atomic Swaps</option>
                  <option value="dapp">DApp</option>
                  <option value="vr-ar">VR/AR</option>
                  <option value="iot">IoT</option>
                  <option value="ai-big-data">AI/Big data</option>
                  <option value="distributed-computing">Distributed Computing</option>
                  <option value="zero-knowledge-proofs">Zero-knowledge proofs</option>
                  <option value="state-channels">State Channels</option>
                  <option value="smart-contracts">Smart Contracts</option>
                  <option value="dag">DAG</option>
                  <option value="collectibles-nfts">Collectibles NFTs</option>
                  <option value="quantum-resistant">Quantum Resistant</option>
                </select>
              </div>
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
    <span>Made by
      <a href="https://twitter.com/SpaceRabbitMaco" target="_blank">@SpaceRabbitMaco</a></span>
    ◑
    <span id="bottom-CMC">All data from
      <a href="https://coinmarketcap.com/" target="_blank">CMC</a></span>
  </div>
</body>

<script>
  $(function() {
    appINIT();
    $("#a-add-from").datepicker();
    $("#a-add-from").data("datepicker");
  });
</script>

</html>