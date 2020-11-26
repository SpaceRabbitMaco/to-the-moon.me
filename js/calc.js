// ------------------------------------------
// ---- [ MAIN MODULE VARs ] ----
// ------------------------------------------
var ALL_RATES = {};
var FIAT_RATES = getJSONData("../saved_data/usd_rates.json");
var TOP_CC = getJSONData("../saved_data/topCC.json");
// var ALL_DATA = getJSONData('../loaded_data/all_data.json');
// ------------------------------------------

// ------------------------------------------
// --------- [ FUNCTIONS ] ----------
// ------------------------------------------
function parseTimeLastUpdateAndSet(S) {
  // CMC UTC TIME (+3 for MSK)
  var date = S[0].last_updated.split("T")[0];
  S =
    "Last update at: " +
    date +
    " _" +
    S[0].last_updated
      .split("T")[1]
      .split(".")[0]
      .split(":")
      .slice(0, 2)
      .join(":") +
    "_ UTC";
  $("#calc-timestamp").html(S);
}

function getAllUSDRates() {
  $.each(TOP_CC, function(key, value) {
    if (value.id == 1) {
      ALL_RATES.usdBTC = value.quote.USD.price;
    } else if (value.id == 1027) {
      ALL_RATES.usdETH = value.quote.USD.price;
    } else if (value.id == 52) {
      ALL_RATES.usdXRP = value.quote.USD.price;
    } else if (value.id == 1831) {
      ALL_RATES.usdBCH = value.quote.USD.price;
    } else if (value.id == 2) {
      ALL_RATES.usdLTC = value.quote.USD.price;
    } else if (value.id == 328) {
      ALL_RATES.usdXMR = value.quote.USD.price;
    } else if (value.id == 1321) {
      ALL_RATES.usdETC = value.quote.USD.price;
    } else if (value.id == 131) {
      ALL_RATES.usdDASH = value.quote.USD.price;
    } else if (value.id == 1437) {
      ALL_RATES.usdZEC = value.quote.USD.price;
    } else if (value.id == 74) {
      ALL_RATES.usdDOGE = value.quote.USD.price;
    } else if (value.id == 74) {
      ALL_RATES.usdDOGE = value.quote.USD.price;
    } else if (value.id == 1274) {
      ALL_RATES.usdWAVES = value.quote.USD.price;
    } else if (value.id == 168) {
      ALL_RATES.usdUFO = value.quote.USD.price;
    }
  });
}

function calcCoinEqv(inputBTCeqv, coin) {
  // Calculates BTC eqv. for output
  switch (coin) {
    case "ETH":
      return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdETH).toFixed(8);
    case "LTC":
      return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdLTC).toFixed(8);
    case "UFO":
      return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdUFO).toFixed(2);
    case "BCH":
      return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdBCH).toFixed(8);
    case "XMR":
      return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdXMR).toFixed(8);
    case "ZEC":
      return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdZEC).toFixed(8);
    case "XRP":
      return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdXRP).toFixed(4);
    case "DASH":
      return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdDASH).toFixed(8);
    case "ETC":
      return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdETC).toFixed(8);
    case "WAVES":
      return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdWAVES).toFixed(8);
    case "DOGE":
      return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdDOGE).toFixed(2);
    // --- FIATS ---
    case "USD":
      return (inputBTCeqv * ALL_RATES.usdBTC).toFixed(6);
    case "EUR":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.EUR).toFixed(6);
    case "CNY":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.CNY).toFixed(4);
    case "RUB":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.RUB).toFixed(2);
    case "HKD":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.HKD).toFixed(4);
    case "GBP":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.GBP).toFixed(6);
    case "KRW":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.KRW).toFixed(2);
    case "JPY":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.JPY).toFixed(2);
    case "BRL":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.BRL).toFixed(4);
    case "TRY":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.TRY).toFixed(4);
    case "PLN":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.PLN).toFixed(4);
    case "ZAR":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.ZAR).toFixed(4);

    case "AUD":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.AUD).toFixed(4);
    case "CAD":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.CAD).toFixed(4);
    case "NZD":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.NZD).toFixed(4);
    case "SGD":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.SGD).toFixed(4);

    case "CHF":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.CHF).toFixed(4);
    case "MXN":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.MXN).toFixed(4);
    case "INR":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.INR).toFixed(4);
    case "IDR":
      return (inputBTCeqv * ALL_RATES.usdBTC * FIAT_RATES.rates.IDR).toFixed(1);

    default:
  }
}

function calcCoinEqvInput(inputValue, coin) {
  // Calculates BTC eqv. of input
  switch (coin) {
    case "ETH":
      return (inputValue * ALL_RATES.usdETH) / ALL_RATES.usdBTC;
    case "LTC":
      return (inputValue * ALL_RATES.usdLTC) / ALL_RATES.usdBTC;
    case "UFO":
      return (inputValue * ALL_RATES.usdUFO) / ALL_RATES.usdBTC;
    case "BCH":
      return (inputValue * ALL_RATES.usdBCH) / ALL_RATES.usdBTC;
    case "XMR":
      return (inputValue * ALL_RATES.usdXMR) / ALL_RATES.usdBTC;
    case "ZEC":
      return (inputValue * ALL_RATES.usdZEC) / ALL_RATES.usdBTC;
    case "XRP":
      return (inputValue * ALL_RATES.usdXRP) / ALL_RATES.usdBTC;
    case "DASH":
      return (inputValue * ALL_RATES.usdDASH) / ALL_RATES.usdBTC;
    case "ETC":
      return (inputValue * ALL_RATES.usdETC) / ALL_RATES.usdBTC;
    case "WAVES":
      return (inputValue * ALL_RATES.usdWAVES) / ALL_RATES.usdBTC;
    case "DOGE":
      return (inputValue * ALL_RATES.usdDOGE) / ALL_RATES.usdBTC;
    // --- FIATS ---
    case "USD":
      return inputValue / ALL_RATES.usdBTC;
    case "EUR":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.EUR);
    case "CNY":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.CNY);
    case "RUB":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.RUB);
    case "HKD":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.HKD);
    case "GBP":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.GBP);
    case "KRW":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.KRW);
    case "JPY":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.JPY);
    case "BRL":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.BRL);
    case "TRY":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.TRY);
    case "PLN":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.PLN);
    case "ZAR":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.ZAR);

    case "AUD":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.AUD);
    case "CAD":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.CAD);
    case "NZD":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.NZD);
    case "SGD":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.SGD);

    case "CHF":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.CHF);
    case "MXN":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.MXN);
    case "INR":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.INR);
    case "IDR":
      return inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.IDR);
    
      default:
  }
}

function updateTopCardsCC(ArrCC) {
  // Updates top CC cards
  parseTimeLastUpdateAndSet(TOP_CC);
  var topBTC, topETH, topLTC, topUFO;
  var siteTOP = Array();
  var topBTCPrice;

  $.each(ArrCC, function(key, value) {
    switch (value.symbol) {
      case "BTC":
        topBTC = value;
        siteTOP.push(topBTC);
        topBTCPrice = value.quote.USD.price;
        break;
      case "ETH":
        topETH = value;
        siteTOP.push(topETH);
        break;
      case "LTC":
        topLTC = value;
        siteTOP.push(topLTC);
        break;
      case "UFO":
        topUFO = value;
        siteTOP.push(topUFO);
        break;
      default:
    }
  });

  $.each(siteTOP, function(key, value) {
    var p_ch_1h = value.quote.USD.percent_change_1h;
    var priceCC;

    if (p_ch_1h > 0) {
      $("#" + value.slug + "-div-1h").css({
        "background-color": "rgba(76, 175, 80, 0.20)"
      });
      $("#" + value.slug + "-1h-change").css({
        color: "#4CAF50"
      });
    } else {
      $("#" + value.slug + "-div-1h").css({
        "background-color": "rgba(255, 152, 0, 0.20)"
      });
      $("#" + value.slug + "-1h-change").css({
        color: "#FF5722"
      });
    }

    $("#" + value.slug).text(value.quote.USD.price.toFixed(4));
    $("#" + value.slug + "-1h-change").text(
      value.quote.USD.percent_change_1h.toFixed(2) + "%"
    );

    if (value.symbol == "ETH") {
      priceCC = topETH.quote.USD.price / topBTCPrice;
      priceCC = priceCC.toFixed(8).replace(/\B(?=(\d{3})+(?!\d))/g, " ");
      $("#" + value.slug + "-BTC").text(priceCC);
    }
    if (value.symbol == "LTC") {
      priceCC = topLTC.quote.USD.price / topBTCPrice;
      priceCC = priceCC.toFixed(8).replace(/\B(?=(\d{3})+(?!\d))/g, " ");
      $("#" + value.slug + "-BTC").text(priceCC);
    }
    if (value.symbol == "UFO") {
      priceCC = topUFO.quote.USD.price / topBTCPrice;
      priceCC = priceCC.toFixed(8).replace(/\B(?=(\d{3})+(?!\d))/g, " ");
      $("#" + value.slug + "-BTC").text(priceCC);
    }
  });
}

function calculateAndSet($CC_to_BTCeqv, $CC) {
  var usdBTC = ALL_RATES.usdBTC;

  var $imputs = $(".cc-calc-input");
  $.each($imputs, function(index, value) {
    // Идем по всем импутам, считаем и пишем значения в них
    if (value.id == "input-" + $CC) {
      // Если это импут, который вызвал функцию, то выходим из функции(цикла)
      return;
    } else {
      switch (value.id) {
        // LIST OF __CC__ INPUTS
        case "input-BTC":
          $("#input-BTC")[0].value = $CC_to_BTCeqv.toFixed(9);
          break;
        case "input-ETH":
          $("#input-ETH")[0].value = calcCoinEqv($CC_to_BTCeqv, "ETH");
          break;
        case "input-LTC":
          $("#input-LTC")[0].value = calcCoinEqv($CC_to_BTCeqv, "LTC");
          break;
        case "input-UFO":
          $("#input-UFO")[0].value = calcCoinEqv($CC_to_BTCeqv, "UFO");
          break;
        case "input-BCH":
          $("#input-BCH")[0].value = calcCoinEqv($CC_to_BTCeqv, "BCH");
          break;
        case "input-XMR":
          $("#input-XMR")[0].value = calcCoinEqv($CC_to_BTCeqv, "XMR");
          break;
        case "input-ZEC":
          $("#input-ZEC")[0].value = calcCoinEqv($CC_to_BTCeqv, "ZEC");
          break;
        case "input-XRP":
          $("#input-XRP")[0].value = calcCoinEqv($CC_to_BTCeqv, "XRP");
          break;
        case "input-DASH":
          $("#input-DASH")[0].value = calcCoinEqv($CC_to_BTCeqv, "DASH");
          break;
        case "input-ETC":
          $("#input-ETC")[0].value = calcCoinEqv($CC_to_BTCeqv, "ETC");
          break;
        case "input-WAVES":
          $("#input-WAVES")[0].value = calcCoinEqv($CC_to_BTCeqv, "WAVES");
          break;
        case "input-DOGE":
          $("#input-DOGE")[0].value = calcCoinEqv($CC_to_BTCeqv, "DOGE");
          break;

        //LIST OF __FIATS__ INPUTS
        case "input-USD":
          $("#input-USD")[0].value = calcCoinEqv($CC_to_BTCeqv, "USD");
          break;
        case "input-EUR":
          $("#input-EUR")[0].value = calcCoinEqv($CC_to_BTCeqv, "EUR");
          break;
        case "input-CNY":
          $("#input-CNY")[0].value = calcCoinEqv($CC_to_BTCeqv, "CNY");
          break;
        case "input-RUB":
          $("#input-RUB")[0].value = calcCoinEqv($CC_to_BTCeqv, "RUB");
          break;
        case "input-HKD":
          $("#input-HKD")[0].value = calcCoinEqv($CC_to_BTCeqv, "HKD");
          break;
        case "input-GBP":
          $("#input-GBP")[0].value = calcCoinEqv($CC_to_BTCeqv, "GBP");
          break;
        case "input-KRW":
          $("#input-KRW")[0].value = calcCoinEqv($CC_to_BTCeqv, "KRW");
          break;
        case "input-JPY":
          $("#input-JPY")[0].value = calcCoinEqv($CC_to_BTCeqv, "JPY");
          break;
        case "input-BRL":
          $("#input-BRL")[0].value = calcCoinEqv($CC_to_BTCeqv, "BRL");
          break;
        case "input-TRY":
          $("#input-TRY")[0].value = calcCoinEqv($CC_to_BTCeqv, "TRY");
          break;
        case "input-PLN":
          $("#input-PLN")[0].value = calcCoinEqv($CC_to_BTCeqv, "PLN");
          break;
        case "input-ZAR":
          $("#input-ZAR")[0].value = calcCoinEqv($CC_to_BTCeqv, "ZAR");
        
        case "input-AUD":
          $("#input-AUD")[0].value = calcCoinEqv($CC_to_BTCeqv, "AUD");
          break;
        case "input-CAD":
          $("#input-CAD")[0].value = calcCoinEqv($CC_to_BTCeqv, "CAD");
          break;
        case "input-NZD":
          $("#input-NZD")[0].value = calcCoinEqv($CC_to_BTCeqv, "NZD");
          break;
        case "input-SGD":
          $("#input-SGD")[0].value = calcCoinEqv($CC_to_BTCeqv, "SGD");
        
        case "input-CHF":
          $("#input-CHF")[0].value = calcCoinEqv($CC_to_BTCeqv, "CHF");
          break;
        case "input-MXN":
          $("#input-MXN")[0].value = calcCoinEqv($CC_to_BTCeqv, "MXN");
          break;
        case "input-INR":
          $("#input-INR")[0].value = calcCoinEqv($CC_to_BTCeqv, "INR");
          break;
        case "input-IDR":
          $("#input-IDR")[0].value = calcCoinEqv($CC_to_BTCeqv, "IDR");

          break;
      }
    }
  });
}

function appINIT() {
  FIAT_RATES = getJSONData("../saved_data/usd_rates.json");
  TOP_CC = getJSONData("../saved_data/topCC.json");

  getAllUSDRates();
  updateTopCardsCC(TOP_CC);

  var ALL_INPUTS = $(".cc-calc-input");

  $.each(ALL_INPUTS, function(key, value) {
    var inputID = value.id.split("-")[1];

    if (inputID == "BTC") {
      value.oninput = function() {
        calculateAndSet(value.value, inputID);
      };
    } else {
      value.oninput = function() {
        calculateAndSet(calcCoinEqvInput(value.value, inputID), inputID);
      };
    }
  });
}
// ------------------------------------------