// ------------------------------------------
// ---- [ MAIN MODULE VARs ] ----
// ------------------------------------------
var ALL_RATES = {};
var FIAT_RATES = getJSONData('../saved_data/usd_rates.json');
var TOP_CC = getJSONData('../saved_data/topCC.json');
// var ALL_DATA = getJSONData('../loaded_data/all_data.json');
// ------------------------------------------

// ------------------------------------------
// --------- [ FUNCTIONS ] ----------
// ------------------------------------------
function parseTimeLastUpdate(S) { // CMC UTC TIME (+3 for MSK)
   S= S[0].last_updated.split('T')[1].split('.')[0].split(':').slice(0, 2).join(':') + ' UTC';
	return S;
}

function getAllUSDRates(TOP_CC_ARR) {
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

function calcCoinEqv(inputBTCeqv, coin) { // Calculates BTC eqv. for output
   switch (coin) {
      case 'ETH':
         return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdETH).toFixed(8);
      case 'LTC':
         return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdLTC).toFixed(8);
      case 'UFO':
         return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdUFO).toFixed(2);
      case 'BCH':
         return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdBCH).toFixed(8);
      case 'XMR':
         return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdXMR).toFixed(8);
      case 'ZEC':
         return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdZEC).toFixed(8);
      case 'XRP':
         return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdXRP).toFixed(4);
      case 'DASH':
         return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdDASH).toFixed(8);
      case 'ETC':
         return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdETC).toFixed(8);
      case 'WAVES':
         return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdWAVES).toFixed(8);
      case 'DOGE':
         return ((inputBTCeqv * ALL_RATES.usdBTC) / ALL_RATES.usdDOGE).toFixed(2);
         // --- FIATS ---
      case 'USD':
         return (inputBTCeqv * ALL_RATES.usdBTC).toFixed(6);
      case 'EUR':
         return ((inputBTCeqv * ALL_RATES.usdBTC) * FIAT_RATES.rates.EUR).toFixed(6);
      case 'CNY':
         return ((inputBTCeqv * ALL_RATES.usdBTC) * FIAT_RATES.rates.CNY).toFixed(4);
      case 'RUB':
         return ((inputBTCeqv * ALL_RATES.usdBTC) * FIAT_RATES.rates.RUB).toFixed(2);
      case 'HKD':
         return ((inputBTCeqv * ALL_RATES.usdBTC) * FIAT_RATES.rates.HKD).toFixed(4);
      case 'GBP':
         return ((inputBTCeqv * ALL_RATES.usdBTC) * FIAT_RATES.rates.GBP).toFixed(6);
      case 'KRW':
         return ((inputBTCeqv * ALL_RATES.usdBTC) * FIAT_RATES.rates.KRW).toFixed(4);
      case 'JPY':
         return ((inputBTCeqv * ALL_RATES.usdBTC) * FIAT_RATES.rates.JPY).toFixed(2);
      default:
   }
}

function calcCoinEqvInput(inputValue, coin) { // Calculates BTC eqv. of input
   switch (coin) {
      case 'ETH':
         return (inputValue * ALL_RATES.usdETH) / ALL_RATES.usdBTC;
      case 'LTC':
         return (inputValue * ALL_RATES.usdLTC) / ALL_RATES.usdBTC;
      case 'UFO':
         return (inputValue * ALL_RATES.usdUFO) / ALL_RATES.usdBTC;
      case 'BCH':
         return (inputValue * ALL_RATES.usdBCH) / ALL_RATES.usdBTC;
      case 'XMR':
         return (inputValue * ALL_RATES.usdXMR) / ALL_RATES.usdBTC;
      case 'ZEC':
         return (inputValue * ALL_RATES.usdZEC) / ALL_RATES.usdBTC;
      case 'XRP':
         return (inputValue * ALL_RATES.usdXRP) / ALL_RATES.usdBTC;
      case 'DASH':
         return (inputValue * ALL_RATES.usdDASH) / ALL_RATES.usdBTC;
      case 'ETC':
         return (inputValue * ALL_RATES.usdETC) / ALL_RATES.usdBTC;
      case 'WAVES':
         return (inputValue * ALL_RATES.usdWAVES) / ALL_RATES.usdBTC;
      case 'DOGE':
         return (inputValue * ALL_RATES.usdDOGE) / ALL_RATES.usdBTC;
         // --- FIATS ---
      case 'USD':
         return inputValue / ALL_RATES.usdBTC;
      case 'EUR':
         return (inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.EUR));
      case 'CNY':
         return (inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.CNY));
      case 'RUB':
         return (inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.RUB));
      case 'HKD':
         return (inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.HKD));
      case 'GBP':
         return (inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.GBP));
      case 'KRW':
         return (inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.KRW));
      case 'JPY':
         return (inputValue / (ALL_RATES.usdBTC * FIAT_RATES.rates.JPY));
      default:
   }
}

function updateTopCardsCC(ArrCC) { // Updates top CC cards
	var LAST_UPDATE = parseTimeLastUpdate(TOP_CC);
	var topBTC, topETH, topLTC, topUFO;
	var siteTOP = Array();
	var topBTCPrice;

	$.each(ArrCC, function(key, value) {
      switch (value.symbol) {
         case 'BTC':
            topBTC = value;
				siteTOP.push(topBTC);
				topBTCPrice = value.quote.USD.price;
            break;
         case 'ETH':
            topETH = value;
				siteTOP.push(topETH);
            break;
         case 'LTC':
            topLTC = value;
				siteTOP.push(topLTC);
            break;
         case 'UFO':
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
			$('#' + value.slug + '-div-1h').css({
				'background-color': 'rgba(76, 175, 80, 0.20)'
			});
			$('#' + value.slug + '-1h-change').css({
				'color': '#4CAF50'
			});
		} else {
			$('#' + value.slug + '-div-1h').css({
				'background-color': 'rgba(255, 152, 0, 0.20)'
			});
			$('#' + value.slug + '-1h-change').css({
				'color': '#FF5722'
			});
		}

		$('#'+value.slug).text(value.quote.USD.price.toFixed(4));
		$('#' + value.slug + '-1h-change').text(value.quote.USD.percent_change_1h.toFixed(2) + '%');
		$('#' + value.slug + '-last-update').text(LAST_UPDATE);

		if (value.symbol == 'ETH') {
			priceCC = topETH.quote.USD.price  / topBTCPrice;
			priceCC = priceCC.toFixed(8).replace(/\B(?=(\d{3})+(?!\d))/g, " ");
			$('#' + value.slug + '-BTC').text(priceCC);
		}
		if (value.symbol == 'LTC') {
			priceCC = topLTC.quote.USD.price  / topBTCPrice;
			priceCC = priceCC.toFixed(8).replace(/\B(?=(\d{3})+(?!\d))/g, " ");
			$('#' + value.slug + '-BTC').text(priceCC);
		}
		if (value.symbol == 'UFO') {
			priceCC = topUFO.quote.USD.price  / topBTCPrice;
			priceCC = priceCC.toFixed(8).replace(/\B(?=(\d{3})+(?!\d))/g, " ");
			$('#' + value.slug + '-BTC').text(priceCC);
		}
	});
}

function calculateAndSet($CC_to_BTCeqv, $CC) {
   var usdBTC = ALL_RATES.usdBTC;

   var $imputs = $('.cc-calc-input');
   $.each($imputs, function(index, value) { // Идем по всем импутам, считаем и пишем значения в них
      if (value.id == 'input-' + $CC) { // Если это импут, который вызвал функцию, то выходим из функции(цикла)
         return;
      } else {
         switch (value.id) {
            // LIST OF __CC__ INPUTS
            case 'input-BTC':
               $('#input-BTC')[0].value = $CC_to_BTCeqv.toFixed(8);
               break;
            case 'input-ETH':
               $('#input-ETH')[0].value = calcCoinEqv($CC_to_BTCeqv, 'ETH');
               break;
            case 'input-LTC':
               $('#input-LTC')[0].value = calcCoinEqv($CC_to_BTCeqv, 'LTC');
               break;
            case 'input-UFO':
            	$('#input-UFO')[0].value = calcCoinEqv($CC_to_BTCeqv, 'UFO');
            	break;
            case 'input-BCH':
               $('#input-BCH')[0].value = calcCoinEqv($CC_to_BTCeqv, 'BCH');
               break;
            case 'input-XMR':
               $('#input-XMR')[0].value = calcCoinEqv($CC_to_BTCeqv, 'XMR');
               break;
            case 'input-ZEC':
               $('#input-ZEC')[0].value = calcCoinEqv($CC_to_BTCeqv, 'ZEC');
               break;
            case 'input-XRP':
               $('#input-XRP')[0].value = calcCoinEqv($CC_to_BTCeqv, 'XRP');
               break;
            case 'input-DASH':
               $('#input-DASH')[0].value = calcCoinEqv($CC_to_BTCeqv, 'DASH');
               break;
            case 'input-ETC':
               $('#input-ETC')[0].value = calcCoinEqv($CC_to_BTCeqv, 'ETC');
               break;
            case 'input-WAVES':
               $('#input-WAVES')[0].value = calcCoinEqv($CC_to_BTCeqv, 'WAVES');
               break;
            case 'input-DOGE':
               $('#input-DOGE')[0].value = calcCoinEqv($CC_to_BTCeqv, 'DOGE');
               break;

               //LIST OF __FIATS__ INPUTS
            case 'input-USD':
               $('#input-USD')[0].value = calcCoinEqv($CC_to_BTCeqv, 'USD');
               break;
            case 'input-EUR':
               $('#input-EUR')[0].value = calcCoinEqv($CC_to_BTCeqv, 'EUR');
               break;
            case 'input-CNY':
               $('#input-CNY')[0].value = calcCoinEqv($CC_to_BTCeqv, 'CNY');
               break;
            case 'input-RUB':
               $('#input-RUB')[0].value = calcCoinEqv($CC_to_BTCeqv, 'RUB');
               break;
            case 'input-HKD':
               $('#input-HKD')[0].value = calcCoinEqv($CC_to_BTCeqv, 'HKD');
               break;
            case 'input-GBP':
               $('#input-GBP')[0].value = calcCoinEqv($CC_to_BTCeqv, 'GBP');
               break;
            case 'input-KRW':
               $('#input-KRW')[0].value = calcCoinEqv($CC_to_BTCeqv, 'KRW');
               break;
            case 'input-JPY':
               $('#input-JPY')[0].value = calcCoinEqv($CC_to_BTCeqv, 'JPY');
               break;
         }
      }
   });
}

function appINIT() {
	FIAT_RATES = getJSONData('../saved_data/usd_rates.json');
	TOP_CC = getJSONData('../saved_data/topCC.json');

	getAllUSDRates(TOP_CC);
	updateTopCardsCC(TOP_CC);

	// ------------------------------------------
	// ----- [ OLD STYLE CODE ] ------
	// ------------------------------------------
   // var $imputBTC = document.getElementById('input-BTC');
   // var $imputETH = document.getElementById('input-ETH');
   // var $imputLTC = document.getElementById('input-LTC');
   // var $imputUFO = document.getElementById('input-UFO');
   // var $imputBCH = document.getElementById('input-BCH');
   // var $imputXMR = document.getElementById('input-XMR');
   // var $imputZEC = document.getElementById('input-ZEC');
   // var $imputXRP = document.getElementById('input-XRP');
   // var $imputDOGE = document.getElementById('input-DOGE');
   // var $imputDASH = document.getElementById('input-DASH');
   // var $imputETC = document.getElementById('input-ETC');
   // var $imputWAVES = document.getElementById('input-WAVES');
   // var $imputUSD = document.getElementById('input-USD');
   // var $imputEUR = document.getElementById('input-EUR');
   // var $imputCNY = document.getElementById('input-CNY');
   // var $imputRUB = document.getElementById('input-RUB');
   // var $imputHKD = document.getElementById('input-HKD');
   // var $imputGBP = document.getElementById('input-GBP');
   // var $imputKRW = document.getElementById('input-KRW');
   // var $imputJPY = document.getElementById('input-JPY');

	// ------------------------------------------
	// ----- [ NEW STYLE CODE ] ------
	// ------------------------------------------
	var ALL_INPUTS = $('.cc-calc-input');

	$.each(ALL_INPUTS, function(key, value) {
		var inputID = value.id.split('-')[1];

		if (inputID == 'BTC') {
			value.oninput = function() {
		      calculateAndSet(value.value, inputID);
		   };
		} else {
			value.oninput = function() {
		      calculateAndSet(calcCoinEqvInput(value.value, inputID), inputID);
		   };
		}
	});

	// ------------------------------------------
	// ----- [ OLD STYLE CODE ] ------
	// ------------------------------------------
   // $imputBTC.oninput = function() {
   //    calculateAndSet($imputBTC.value, 'BTC');
   // };
	//
   // $imputETH.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputETH.value, 'ETH'), 'ETH');
   // };
	//
   // $imputLTC.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputLTC.value, 'LTC'), 'LTC');
   // };
	//
   // $imputUFO.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputUFO.value, 'UFO'), 'UFO');
   // };
	//
   // $imputBCH.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputBCH.value, 'BCH'), 'BCH');
   // };
	//
   // $imputXMR.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputXMR.value, 'XMR'), 'XMR');
   // };
	//
   // $imputZEC.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputZEC.value, 'ZEC'), 'ZEC');
   // };
	//
   // $imputXRP.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputXRP.value, 'XRP'), 'XRP');
   // };
	//
   // $imputDASH.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputDASH.value, 'DASH'), 'DASH');
   // };
	//
   // $imputETC.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputETC.value, 'ETC'), 'ETC');
   // };
	//
   // $imputWAVES.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputWAVES.value, 'WAVES'), 'WAVES');
   // };
	//
   // $imputDOGE.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputDOGE.value, 'DOGE'), 'DOGE');
   // };
	//
   // $imputUSD.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputUSD.value, 'USD'), 'USD');
   // };
	//
   // $imputEUR.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputEUR.value, 'EUR'), 'EUR');
   // };
	//
   // $imputCNY.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputCNY.value, 'CNY'), 'CNY');
   // };
	//
   // $imputRUB.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputRUB.value, 'RUB'), 'RUB');
   // };
	//
   // $imputHKD.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputHKD.value, 'HKD'), 'HKD');
   // };
	//
   // $imputGBP.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputGBP.value, 'GBP'), 'GBP');
   // };
	//
   // $imputKRW.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputKRW.value, 'KRW'), 'KRW');
   // };
	//
   // $imputJPY.oninput = function() {
   //    calculateAndSet(calcCoinEqvInput($imputJPY.value, 'JPY'), 'JPY');
   // };
}
// ------------------------------------------

// NEW FUNCTIONS AND NEW VARS FOR PROFIT CALC
// var BTC_was = document.getElementById('new-btc-was');
// var BTC_now = document.getElementById('new-btc-now');
// var BTC_profit = document.getElementById('new-btc-profit-sat');
// var BTC_profit_prnt = document.getElementById('new-btc-profit-prnt');
// var BTC_profit_x = document.getElementById('new-btc-profit-x');
// var CC_list;
// var CC_names_list = [];
//
// var printSelect = function(cc_names, select_id) {
// 	var target_element = document.getElementById(select_id);
// 	target_element = $(target_element);
// 	$.each(cc_names, function(index, value) {
// 		var id = value.split('###')[1];
// 		value = value.split('###')[0];
// 		target_element.append('<option value="'+id+'">'+value+'</option>');
// 	});
// };
//
// var init = function(data) {
// 	data = $(data);
// 	$.each(data, function(index, value) {
// 		if (value.name.length > 16) { value.name = value.name.substr(0, 16) + '...'; }
// 		CC_names_list.push(value.name + ' (' + value.symbol +')###' + value.id);
// 	});
// 	printSelect(CC_names_list, 'select-cc-was');
// 	printSelect(CC_names_list, 'select-cc-now');
// };
//
// var calcProfit = function() {
// 	if ( BTC_was.value == '' || BTC_now.value == '') { return; }
//
// 	BTC_profit.value = (BTC_now.value - BTC_was.value).toFixed(8);
// 	BTC_profit_prnt.value = (((BTC_now.value /BTC_was.value) * 100) - 100).toFixed(1);
// 	BTC_profit_x.value = (BTC_now.value /BTC_was.value).toFixed(1);
// };
//
// var initF = function() {
// 	$.ajax({
// 		url: 'https://api.coinmarketcap.com/v1/ticker/?&limit=0',
// 		dataType : "json",
// 		success: function (data, textStatus) {
// 			CC_list = $(data);
// 			init(CC_list);
// 		}
// 	});
// };
//
// $( function() { initF(); });
//
// BTC_was.oninput = function() { calcProfit(); };
// BTC_now.oninput = function() { calcProfit(); };
