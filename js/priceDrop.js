/*jshint esversion: 6 */
// ===___FUNCTIONS_START___===

function $getSetTimeDate() { // start
      var $timeStamp = new Date();

      var $day = $timeStamp.getDate();
      var $month = $timeStamp.getMonth() + 1;
      var $year = $timeStamp.getFullYear();
      var $hours = $timeStamp.getHours();
      var $minutes = $timeStamp.getMinutes();

      if ($minutes < 10) {
            $minutes = '0' + $minutes;
      }
      if ($hours < 10) {
            $hours = '0' + $hours;
      }
      if ($day < 10) {
            $day = '0' + $day;
      }
      if ($month < 10) {
            $month = '0' + $month;
      }

      $timeStamp = 'Last update at: ' + $hours + ':' + $minutes + ' ' + $day + '-' + $month + '-' + $year;
      $('#price-drop-timestamp').html($timeStamp);
} // end


function $formatDigits($tdSearch) {
      var $digits = document.getElementsByClassName($tdSearch);

      for (var i = 0; i < $digits.length; i++) {
            var $value = $digits[i].innerHTML;
            $value = $value.replace(/\B(?=(\d{3})+(?!\d))/g, " ");
            $digits[i].innerHTML = $value;
      }
}

function $sPriceChange1h($ccA, $ccB) { // start
  return $ccA.percent_change_1h - $ccB.percent_change_1h;
} // end

function $sPriceChange24h($ccA, $ccB) { // start
  return $ccA.percent_change_24h - $ccB.percent_change_24h;
} // end

function $sPriceChange7d($ccA, $ccB) { // start
  return $ccA.percent_change_7d - $ccB.percent_change_7d;
} // end

function $toFixed ($elem) {
      $elem.market_cap_usd = +$elem.market_cap_usd;
      $elem.market_cap_usd = $elem.market_cap_usd.toFixed();

      $elem['24h_volume_usd'] = +$elem['24h_volume_usd'];
      $elem['24h_volume_usd'] = $elem['24h_volume_usd'].toFixed();
}

function $getData($isFirst) { // start
      $.ajax({
            url: 'https://api.coinmarketcap.com/v1/ticker/?limit=0',
            dataType : "json",
            success: function ($data, $textStatus) {
                  if ($isFirst) {
                        console.warn('___INIT_START___');
                        console.warn('Hello! It is a price drop checking tool!');
                        console.warn('Made by @SpaceRabbitMaco! Yeah!');
                        console.error('Delisted: 1) Coins with Market Cap less than 4 million dollars, 2) if The Market Cap is unknown ("?" on CMC), 3) If coins drop is less 5% for 1 hour, 15% for 24 hours, 35% for 7 days');
                        console.warn('Data reloads every 5 minutes');
                  } else {
                        console.clear();
                        console.warn('___RELOAD_START___');
                        console.warn('Hello! It is a price drop checking tool!');
                        console.warn('Made by @SpaceRabbitMaco! Yeah!');
                        console.error('Delisted: 1) Coins with Market Cap less than 4 million dollars, 2) if The Market Cap is unknown ("?" on CMC), 3) If coins drop is less 5% for 1 hour, 15% for 24 hours, 35% for 7 days');
                        console.warn('Data reloads every 5 minutes');
                  }

                  var $cc1h = [];
                   var $cc24h = [];
                  var $cc7d = [];
                  $result = $data; // .id, .name, .symbol, .rank, .price_usd, .price_btc, .24h_volume_usd, .market_cap_usd, .percent_change_1h, .percent_change_7d, .percent_change_24h
                  var $totalCoinsCount = $result.length;
                  $marketAnalysis($result, $cc1h, $cc24h, $cc7d);
                  console.warn('1h cc: ',$cc1h, '___END 1H___');
                  console.warn('24h cc: ',$cc24h, '___END 24H___');
                  console.warn('7d cc: ',$cc7d, '___END 7D___');
                  if ($isFirst) {
                        console.warn('___INIT_END___');
                  } else {console.warn('___RELOAD_END___');}

                  // sort all arr by price change
                  $cc1h = $cc1h.sort($sPriceChange1h);
                  $cc24h = $cc24h.sort($sPriceChange24h);
                  $cc7d = $cc7d.sort($sPriceChange7d);

                  // daw all arr
                  $drawTable($cc1h, 'cc1h', $totalCoinsCount);
                  $drawTable($cc24h, 'cc24h', $totalCoinsCount);
                  $drawTable($cc7d, 'cc1d', $totalCoinsCount);

                  // format big numbers
                  $formatDigits('td-market-cup');
                  $formatDigits('td-volume-24');
                  $getSetTimeDate();
            }
      });
} // end

function $marketAnalysis($allCC, $1h, $24h, $7d) { // start

      for (var i = 0; i < $allCC.length; i++) {
            if ( $allCC[i].market_cap_usd === '?' ) {
                  continue;
            }

            if ( $allCC[i].market_cap_usd > 4000000 && $allCC[i].percent_change_1h <= -5.0) {
                  $toFixed($allCC[i]);
                  $1h.push($allCC[i]);
            }

            if ( $allCC[i].market_cap_usd > 4000000 && $allCC[i].percent_change_24h <= -15.0) {
                  $toFixed($allCC[i]);
                  $24h.push($allCC[i]);
            }

            if ( $allCC[i].market_cap_usd > 4000000 && $allCC[i].percent_change_7d <= -25.0) {
                  $toFixed($allCC[i]);
                  $7d.push($allCC[i]);
            }
      }
} // end

function $drawTable($arr, $type, $ccTotalCount) { // start
      var $title, $tableID, $data;
      if ($type == 'cc1h') {$title = '1 hour'; $tableID = 'table-1_hour'; $data = '<div id="price-drop-timestamp">time</div>';}
      if ($type == 'cc24h') {$title = '24 hours'; $tableID = 'table-24_hours'; $data = '';}
      if ($type == 'cc1d') {$title = '7 days'; $tableID = 'table-7_days'; $data = '';}
      var $htmlData = $data;

      $htmlData = $htmlData + '<h2>' + $title + ' price change</h2><span><u>Coins</u>: ' + $arr.length + ' | <u>Total coins</u>: ' + $ccTotalCount + '</span><table class="base-table" id="' + $tableID + '"><tr><th class="table-th1">#</th><th class="table-th2">Name</th><th class="table-th3">Symbol</th><th class="table-th4">Market Cap</th><th class="table-th5">Price ($)</th><th class="table-th6">Volume (24h)</th><th class="th-1h table-th7">% 1h</th><th class="th-24h table-th8">% 24h</th><th class="th-7d table-th9">% 7d</th></tr>';

      for (var i = 0; i < $arr.length; i++) {
            var ccID = $arr[i].id, ccMapClass = 'NON-IN-MAP';
            if (ccMap[ccID]) { ccMapClass = ccMap[ccID][1]; }

            $htmlData = $htmlData + '<tr><td class="td-pos table-td1">' + $arr[i].rank + '</td><td class="td-name table-td2"><div class="s-s-' + $arr[i].id + ' ' + ccMapClass + ' currency-logo-sprite"></div><a target="_blank" href="https://coinmarketcap.com/currencies/' + $arr[i].id + '/">' + $arr[i].name + '</a></td><td class="td-abr table-td3">' + $arr[i].symbol + '</td><td class="td-market-cup table-td4">' +$arr[i].market_cap_usd + '</td><td class="td-price table-td5"><a target="_blank" href="https://coinmarketcap.com/assets/'  + $arr[i].id + '/#markets">' + $arr[i].price_usd + '</a></td><td class="td-volume-24 table-td6">' + $arr[i]['24h_volume_usd'] + '</td><td class="td-1h-change table-td7">' + $arr[i].percent_change_1h + '</td><td class="td-24h-change table-td8">' + $arr[i].percent_change_24h + '</td><td class="td-7d-change table-td9">' + $arr[i].percent_change_7d + '</td></tr>';
      }

      $htmlData = $htmlData + '</tabde>';
      $('#main-div-cc-' + $type).html($htmlData);

} // end

// ===___FUNCTIONS_END___===


$getData('true'); // initialising

var $timerID = setInterval(function() { // set interval for information refresh
      $getData('');
}, 300000);
