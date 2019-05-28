/*jshint esversion: 6 */
// ------------------------------------------
// --------- [ FUNCTIONS ] ----------
// ------------------------------------------
function sortPriceChange1h($ccA, $ccB) {
  return $ccA.quote.USD.percent_change_1h - $ccB.quote.USD.percent_change_1h;
}

function sortPriceChange24h($ccA, $ccB) {
  return $ccA.quote.USD.percent_change_24h - $ccB.quote.USD.percent_change_24h;
}

function sortPriceChange7d($ccA, $ccB) {
  return $ccA.quote.USD.percent_change_7d - $ccB.quote.USD.percent_change_7d;
}

function $drawTable($arr, $type, $ccTotalCount, $BTC_PRICE) {
  // start
  var $title, $tableID, $data;
  if ($type == "cc1h") {
    $title = "One hour Cryptocurrency ";
    $tableID = "table-1_hour";
    $data = '<div id="price-drop-timestamp">time</div>';
  }
  if ($type == "cc24h") {
    $title = "24 hours Cryptocurrency ";
    $tableID = "table-24_hours";
    $data = "";
  }
  if ($type == "cc1d") {
    $title = "7 days Cryptocurrency ";
    $tableID = "table-7_days";
    $data = "";
  }
  var $htmlData = $data;

  $htmlData =
    $htmlData +
    "<h1>" +
    $title +
    " price change</h1><span><u>Coins</u>: " +
    $arr.length +
    " | <u>Total coins</u>: " +
    $ccTotalCount +
    '</span><table class="base-table" id="' +
    $tableID +
    '"><tr><th class="table-th1">#</th><th class="table-th2">Name</th><th class="table-th3">Symbol</th><th class="table-th4">Price (sat.)</th><th class="table-th5">Price ($)</th><th class="table-th6">Volume (24h)</th><th class="th-1h table-th7">% 1h</th><th class="th-24h table-th8">% 24h</th><th class="th-7d table-th9">% 7d</th></tr>';

  for (var i = 0; i < $arr.length; i++) {
    var rank = $arr[i].cmc_rank;
    var id = $arr[i].id;
    var name = $arr[i].name;
    var slug = $arr[i].slug;

    if (name.length > 20) {
      name = name.substr(0, 20) + "...";
    }

    var symbol = $arr[i].symbol;
    var usdPrice = $arr[i].quote.USD.price.toFixed(4);
    var eqvBTC = usdPrice / $BTC_PRICE;
    eqvBTC = eqvBTC.toFixed(8);
    eqvBTC = eqvBTC.replace(/\B(?=(\d{3})+(?!\d))/g, " ");

    var change1h = $arr[i].quote.USD.percent_change_1h;
    change1h = change1h === null ? null : change1h.toFixed(1);

    var change24h = $arr[i].quote.USD.percent_change_24h;
    change24h = change24h === null ? null : change24h.toFixed(1);

    var change7d = $arr[i].quote.USD.percent_change_7d;
    change7d = change7d === null ? null : change7d.toFixed(1);

    var volume_24h;

    if ($arr[i].quote.USD.volume_24h === null) {
      volume_24h = $arr[i].quote.USD.volume_24h;
    } else {
      volume_24h = $arr[i].quote.USD.volume_24h.toFixed(0);
      volume_24h = volume_24h.replace(/\B(?=(\d{3})+(?!\d))/g, " ");
    }

    $htmlData =
      $htmlData +
      '<tr><td class="td-pos table-td1">' +
      rank +
      '</td><td class="td-name table-td2"><img src="https://s2.coinmarketcap.com/static/img/coins/16x16/' +
      id +
      '.png"  alt="Bitcoin" height="16" width="16"><a target="_blank" href="https://coinmarketcap.com/currencies/' +
      slug +
      '/">' +
      name +
      '</a></td><td class="td-abr table-td3">' +
      symbol +
      '</td><td class="td-sat table-td4">' +
      eqvBTC +
      '</td><td class="td-price table-td5"><a target="_blank" href="https://coinmarketcap.com/assets/' +
      slug +
      '/#markets">' +
      usdPrice +
      '</a></td><td class="td-volume-24 table-td6">' +
      volume_24h +
      '<td class="td-1h-change table-td7">' +
      change1h +
      '</td><td class="td-24h-change table-td8">' +
      change24h +
      '</td><td class="td-7d-change table-td9">' +
      change7d +
      "</td></tr>";
  }

  $htmlData = $htmlData + "</tabde>";
  $("#main-div-cc-" + $type).html($htmlData);
} // end

function parseTimeLastUpdatet(S) {
  // CMC UTC TIME (+3 for MSK)
  var date = S.split("T")[0];
  S =
    "Last update at: " +
    date +
    " _" +
    S.split("T")[1]
      .split(".")[0]
      .split(":")
      .slice(0, 2)
      .join(":") +
    "_ UTC";
  return S;
}

function startPriceDrop(isFirst) {
  $(function() {
    var ALL_DATA = getJSONData("../saved_data/all_data.json");

    var TIME_DATA_RECIVED = ALL_DATA.status.timestamp;
    TIME_DATA_RECIVED = parseTimeLastUpdatet(TIME_DATA_RECIVED);

    var BTC_PRICE = ALL_DATA.data[0].quote.USD.price.toFixed(4);
    var ALL_COINS_COUNT = ALL_DATA.data.length;
    ALL_DATA = "";

    var CHANGE_1H = getJSONData("../saved_data/change1h.json");
    var CHANGE_24H = getJSONData("../saved_data/change24h.json");
    var CHANGE_7D = getJSONData("../saved_data/change7d.json");

    CHANGE_1H = CHANGE_1H.sort(sortPriceChange1h);
    CHANGE_24H = CHANGE_24H.sort(sortPriceChange24h);
    CHANGE_7D = CHANGE_7D.sort(sortPriceChange7d);

    $drawTable(CHANGE_1H, "cc1h", ALL_COINS_COUNT, BTC_PRICE);
    $drawTable(CHANGE_24H, "cc24h", ALL_COINS_COUNT, BTC_PRICE);
    $drawTable(CHANGE_7D, "cc1d", ALL_COINS_COUNT, BTC_PRICE);

    $("#price-drop-timestamp").html(TIME_DATA_RECIVED);

    if (isFirst) {
      console.log("First Launch");
    } else {
      console.log("Reload");
    }
  });
}
// ------------------------------------------
