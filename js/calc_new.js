var $BTC, $ETH, $LTC, $XMR, $BCH, $XMR, $ZEC, $XRP, $BTC_EUR, $BTC_CNY, $BTC_RUB, $BTC_HKD, $BTC_GBP, $BTC_KRW, $BTC_JPY;
var $ALL_Calc_CC = ['USD','EUR','CNY','RUB','HKD','GBP','KRW','JPY','ETH','LTC','DOGE','BCH','XMR','ZEC','XRP'];

function updateFiats() {
	var fiats = ['eur', 'cny', 'rub', 'hkd', 'gbp', 'krw', 'jpy'];
	for (var i = 0; i < fiats.length; i++) {
		getFIAT(fiats[i]);
	}
}

function getFIAT($fiat_cur) {
	$.ajax({
		url: 'https://api.coinmarketcap.com/v1/ticker/bitcoin/?convert=' +$fiat_cur,
		dataType : "json",
		success: function (data, textStatus) {
			switch ($fiat_cur) {
				case 'eur':
					$BTC_EUR = data;
					break;
				case 'cny':
					$BTC_CNY = data;
					break;
				case 'rub':
					$BTC_RUB = data;
					break;
				case 'hkd':
					$BTC_HKD = data;
					break;
				case 'gbp':
					$BTC_GBP = data;
					break;
				case 'krw':
					$BTC_KRW = data;
					break;
				case 'jpy':
					$BTC_JPY = data;
					break;
				default:

			}
		}
	});
}

function getDateLastUpdate($cc){

			var $lastUpdate = +$cc.last_updated;
			$lastUpdate = new Date($lastUpdate*1000);

			var $day = $lastUpdate.getDate();
			var $month = $lastUpdate.getMonth() + 1;
			var $year = $lastUpdate.getFullYear();
			var $hours = $lastUpdate.getHours();
			var $minutes = $lastUpdate.getMinutes();

			if($minutes < 10) {
				$minutes = '0' + $minutes;
			}

			if($hours < 10) {
				$hours = '0' + $hours;
			}

			$lastUpdate = $hours + ':' + $minutes;

			return $lastUpdate;
}


function getData($url) {
	$.ajax({
		url: $url,
		dataType : "json",
		success: function (data, textStatus) {


		var $ccObj = data[0]; // .name, .symbol, .percent_change_1h, price_btc, price_usd

		if ($ccObj.percent_change_1h > 0) {
			$ccObj.percent_change_1h = '+' + $ccObj.percent_change_1h;
			$('#' + $ccObj.name + '-div-1h').css({'background-color' : 'rgba(76, 175, 80, 0.20)'});
			$('#' + $ccObj.name + '-1h-change').css({'color' : '#4CAF50'});
		} else {
			$('#' + $ccObj.name + '-div-1h').css({'background-color' : 'rgba(255, 152, 0, 0.20)'});
			$('#' + $ccObj.name + '-1h-change').css({'color' : '#FF5722'});
		}

		var $lastUpdate = getDateLastUpdate($ccObj);

		$('#' + $ccObj.name).text($ccObj.price_usd);
		$('#' + $ccObj.name + '-last-update').text($lastUpdate);
		$('#' + $ccObj.name + '-1h-change').text($ccObj.percent_change_1h + '%');

		if ($ccObj.name != 'Bitcoin') {
			$ccObj.price_btc = parseFloat($ccObj.price_btc).toFixed(8);
			$('#' + $ccObj.name + '-BTC').text($ccObj.price_btc);
		}


		if ($ccObj.symbol == 'BTC') {
			$BTC = $ccObj;
		}
		if ($ccObj.symbol == 'LTC') {
			$LTC = $ccObj;
		}
		if ($ccObj.symbol == 'ETH') {
			$ETH = $ccObj;
		}
		if ($ccObj.symbol == 'DOGE') {
			$DOGE = $ccObj;
		}
		if ($ccObj.symbol == 'BCH') {
			$BCH = $ccObj;
		}
		if ($ccObj.symbol == 'XMR') {
			$XMR = $ccObj;
		}
		if ($ccObj.symbol == 'ZEC') {
			$ZEC = $ccObj;
		}
		if ($ccObj.symbol == 'XRP') {
			$XRP = $ccObj;
		}

		return $ccObj;
		}
	});
}

function appINIT() {
	$BTC = getData('https://api.coinmarketcap.com/v1/ticker/bitcoin/');
	$ETH = getData('https://api.coinmarketcap.com/v1/ticker/ethereum/');
	$LTC = getData('https://api.coinmarketcap.com/v1/ticker/litecoin/');
	$DOGE = getData('https://api.coinmarketcap.com/v1/ticker/dogecoin/');
	$BCH = getData('https://api.coinmarketcap.com/v1/ticker/bitcoin-cash/');
	$XMR = getData('https://api.coinmarketcap.com/v1/ticker/monero/');
	$ZEC = getData('https://api.coinmarketcap.com/v1/ticker/zcash/');
	$XRP = getData('https://api.coinmarketcap.com/v1/ticker/ripple/');

	var $imputBTC = document.getElementById('input-BTC');
	var $imputETH = document.getElementById('input-ETH');
	var $imputLTC = document.getElementById('input-LTC');
	var $imputDOGE = document.getElementById('input-DOGE');
	var $imputBCH = document.getElementById('input-BCH');
	var $imputXMR = document.getElementById('input-XMR');
	var $imputZEC = document.getElementById('input-ZEC');
	var $imputXRP = document.getElementById('input-XRP');

	$imputBTC.oninput = function() {
		var $BTCtoETH = $imputBTC.value / $ETH.price_btc;
		$BTCtoETH = $BTCtoETH.toFixed(8);
		$imputETH.value = $BTCtoETH;

		var $BTCtoLTC = $imputBTC.value / $LTC.price_btc;
		$BTCtoLTC = $BTCtoLTC.toFixed(8);
		$imputLTC.value = $BTCtoLTC;

		var $BTCtoDOGE = $imputBTC.value / $DOGE.price_btc;
		$BTCtoDOGE = $BTCtoDOGE.toFixed(2);
		$imputDOGE.value = $BTCtoDOGE;

		var $BTCtoBCH = $imputBTC.value / $BCH.price_btc;
		$BTCtoBCH = $BTCtoBCH.toFixed(8);
		$imputBCH.value = $BTCtoBCH;

		var $BTCtoXMR = $imputBTC.value / $XMR.price_btc;
		$BTCtoXMR = $BTCtoXMR.toFixed(8);
		$imputXMR.value = $BTCtoXMR;

		var $BTCtoZEC = $imputBTC.value / $ZEC.price_btc;
		$BTCtoZEC = $BTCtoZEC.toFixed(8);
		$imputZEC.value = $BTCtoZEC;

		var $BTCtoXRP = $imputBTC.value / $XRP.price_btc;
		$BTCtoXRP = $BTCtoXRP.toFixed(4);
		$imputXRP.value = $BTCtoXRP;

		udpateFiatsInputs($imputBTC.value);
	};

	$imputETH.oninput = function() {
		var $ETHtoBTC = $imputETH.value * $ETH.price_btc;
		$ETHtoBTC = $ETHtoBTC.toFixed(8);
		$imputBTC.value = $ETHtoBTC;

		var $ETHtoLTC = ($ETH.price_btc / $LTC.price_btc)*$imputETH.value;
		$ETHtoLTC = $ETHtoLTC.toFixed(8);
		$imputLTC.value = $ETHtoLTC;

		var $ETHtoDOGE = ($ETH.price_btc / $DOGE.price_btc)*$imputETH.value;
		$ETHtoDOGE = $ETHtoDOGE.toFixed(2);
		$imputDOGE.value = $ETHtoDOGE;

		var $ETHtoBCH = ($ETH.price_btc / $BCH.price_btc)*$imputETH.value;
		$ETHtoBCH = $ETHtoBCH.toFixed(8);
		$imputBCH.value = $ETHtoBCH;

		var $ETHtoXMR = ($ETH.price_btc / $XMR.price_btc)*$imputETH.value;
		$ETHtoXMR = $ETHtoXMR.toFixed(8);
		$imputXMR.value = $ETHtoXMR;

		var $ETHtoZEC = ($ETH.price_btc / $ZEC.price_btc)*$imputETH.value;
		$ETHtoZEC = $ETHtoZEC.toFixed(8);
		$imputZEC.value = $ETHtoZEC;

		var $ETHtoXRP = ($ETH.price_btc / $XRP.price_btc)*$imputETH.value;
		$ETHtoXRP = $ETHtoXRP.toFixed(4);
		$imputXRP.value = $ETHtoXRP;

		udpateFiatsInputs($ETHtoBTC);
	};

	$imputLTC.oninput = function() {
		var $LTCtoBTC = $imputLTC.value * $LTC.price_btc;
		$LTCtoBTC = $LTCtoBTC.toFixed(8);
		$imputBTC.value = $LTCtoBTC;

		var $LTCtoETH = ($LTC.price_btc / $ETH.price_btc)*$imputLTC.value;
		$LTCtoETH = $LTCtoETH.toFixed(8);
		$imputETH.value = $LTCtoETH;

		var $LTCtoDOGE = ($LTC.price_btc / $DOGE.price_btc)*$imputLTC.value;
		$LTCtoDOGE = $LTCtoDOGE.toFixed(2);
		$imputDOGE.value = $LTCtoDOGE;

		var $LTCtoBCH = ($LTC.price_btc / $BCH.price_btc)*$imputLTC.value;
		$LTCtoBCH = $LTCtoBCH.toFixed(8);
		$imputBCH.value = $LTCtoBCH;

		var $LTCtoXMR = ($LTC.price_btc / $XMR.price_btc)*$imputLTC.value;
		$LTCtoXMR = $LTCtoXMR.toFixed(8);
		$imputXMR.value = $LTCtoXMR;

		var $LTCtoZEC = ($LTC.price_btc / $ZEC.price_btc)*$imputLTC.value;
		$LTCtoZEC = $LTCtoZEC.toFixed(8);
		$imputZEC.value = $LTCtoZEC;

		var $LTCtoXRP = ($LTC.price_btc / $XRP.price_btc)*$imputLTC.value;
		$LTCtoXRP = $LTCtoXRP.toFixed(4);
		$imputXRP.value = $LTCtoXRP;

		udpateFiatsInputs($LTCtoBTC);
	};

	$imputDOGE.oninput = function() {
		var $DOGEtoBTC = $imputDOGE.value * $DOGE.price_btc;
		$DOGEtoBTC = $DOGEtoBTC.toFixed(8);
		$imputBTC.value = $DOGEtoBTC;

		var $DOGEtoETH = ($DOGE.price_btc / $ETH.price_btc)*$imputDOGE.value;
		$DOGEtoETH = $DOGEtoETH.toFixed(8);
		$imputETH.value = $DOGEtoETH;

		var $DOGEtoLTC = ($DOGE.price_btc / $LTC.price_btc)*$imputDOGE.value;
		$DOGEtoLTC = $DOGEtoLTC.toFixed(8);
		$imputLTC.value = $DOGEtoLTC;

		var $DOGEtoBCH = ($DOGE.price_btc / $BCH.price_btc)*$imputDOGE.value;
		$DOGEtoBCH = $DOGEtoBCH.toFixed(8);
		$imputBCH.value = $DOGEtoBCH;

		var $DOGEtoXMR = ($DOGE.price_btc / $XMR.price_btc)*$imputDOGE.value;
		$DOGEtoXMR = $DOGEtoXMR.toFixed(8);
		$imputXMR.value = $DOGEtoXMR;

		var $DOGEtoZEC = ($DOGE.price_btc / $ZEC.price_btc)*$imputDOGE.value;
		$DOGEtoZEC = $DOGEtoZEC.toFixed(8);
		$imputZEC.value = $DOGEtoZEC;

		var $DOGEtoXRP = ($DOGE.price_btc / $XRP.price_btc)*$imputDOGE.value;
		$DOGEtoXRP = $DOGEtoXRP.toFixed(4);
		$imputXRP.value = $DOGEtoXRP;

		udpateFiatsInputs($DOGEtoBTC);
	};

	$imputBCH.oninput = function() {
		var $BCHtoBTC = $imputBCH.value * $BCH.price_btc;
		$BCHtoBTC = $BCHtoBTC.toFixed(8);
		$imputBTC.value = $BCHtoBTC;

		var $BCHtoETH = ($BCH.price_btc / $ETH.price_btc)*$imputBCH.value;
		$BCHtoETH = $BCHtoETH.toFixed(8);
		$imputETH.value = $BCHtoETH;

		var $BCHtoLTC = ($BCH.price_btc / $LTC.price_btc)*$imputBCH.value;
		$BCHtoLTC = $BCHtoLTC.toFixed(8);
		$imputLTC.value = $BCHtoLTC;

		var $BCHtoDOGE = ($BCH.price_btc / $DOGE.price_btc)*$imputBCH.value;
		$BCHtoDOGE = $BCHtoDOGE.toFixed(2);
		$imputDOGE.value = $BCHtoDOGE;

		var $BCHtoXMR = ($BCH.price_btc / $XMR.price_btc)*$imputBCH.value;
		$BCHtoXMR = $BCHtoXMR.toFixed(8);
		$imputXMR.value = $BCHtoXMR;

		var $BCHtoZEC = ($BCH.price_btc / $ZEC.price_btc)*$imputBCH.value;
		$BCHtoZEC = $BCHtoZEC.toFixed(8);
		$imputZEC.value = $BCHtoZEC;

		var $BCHtoXRP = ($BCH.price_btc / $XRP.price_btc)*$imputBCH.value;
		$BCHtoXRP = $BCHtoXRP.toFixed(4);
		$imputXRP.value = $BCHtoXRP;

		udpateFiatsInputs($BCHtoBTC);
	};

	$imputXMR.oninput = function() {
		var $XMRtoBTC = $imputXMR.value * $XMR.price_btc;
		$XMRtoBTC = $XMRtoBTC.toFixed(8);
		$imputBTC.value = $XMRtoBTC;

		var $XMRtoETH = ($XMR.price_btc / $ETH.price_btc)*$imputXMR.value;
		$XMRtoETH = $XMRtoETH.toFixed(8);
		$imputETH.value = $XMRtoETH;

		var $XMRtoLTC = ($XMR.price_btc / $LTC.price_btc)*$imputXMR.value;
		$XMRtoLTC = $XMRtoLTC.toFixed(8);
		$imputLTC.value = $XMRtoLTC;

		var $XMRtoDOGE = ($XMR.price_btc / $DOGE.price_btc)*$imputXMR.value;
		$XMRtoDOGE = $XMRtoDOGE.toFixed(2);
		$imputDOGE.value = $XMRtoDOGE;

		var $XMRtoBCH = ($XMR.price_btc / $BCH.price_btc)*$imputXMR.value;
		$XMRtoBCH = $XMRtoBCH.toFixed(8);
		$imputBCH.value = $XMRtoBCH;

		var $XMRtoZEC = ($XMR.price_btc / $ZEC.price_btc)*$imputXMR.value;
		$XMRtoZEC = $XMRtoZEC.toFixed(8);
		$imputZEC.value = $XMRtoZEC;

		var $XMRtoXRP = ($XMR.price_btc / $XRP.price_btc)*$imputXMR.value;
		$XMRtoXRP = $XMRtoXRP.toFixed(4);
		$imputXRP.value = $XMRtoXRP;

		udpateFiatsInputs($XMRtoBTC);
	};

	$imputZEC.oninput = function() {
		var $ZECtoBTC = $imputZEC.value * $ZEC.price_btc;
		$ZECtoBTC = $ZECtoBTC.toFixed(8);
		$imputBTC.value = $ZECtoBTC;

		var $ZECtoETH = ($ZEC.price_btc / $ETH.price_btc)*$imputZEC.value;
		$ZECtoETH = $ZECtoETH.toFixed(8);
		$imputETH.value = $ZECtoETH;

		var $ZECtoLTC = ($ZEC.price_btc / $LTC.price_btc)*$imputZEC.value;
		$ZECtoLTC = $ZECtoLTC.toFixed(8);
		$imputLTC.value = $ZECtoLTC;

		var $ZECtoDOGE = ($ZEC.price_btc / $DOGE.price_btc)*$imputZEC.value;
		$ZECtoDOGE = $ZECtoDOGE.toFixed(2);
		$imputDOGE.value = $ZECtoDOGE;

		var $ZECtoBCH = ($ZEC.price_btc / $BCH.price_btc)*$imputZEC.value;
		$ZECtoBCH = $ZECtoBCH.toFixed(8);
		$imputBCH.value = $ZECtoBCH;

		var $ZECtoXMR = ($ZEC.price_btc / $XMR.price_btc)*$imputZEC.value;
		$ZECtoXMR = $ZECtoXMR.toFixed(8);
		$imputXMR.value = $ZECtoXMR;

		var $ZECtoXRP = ($ZEC.price_btc / $XRP.price_btc)*$imputZEC.value;
		$ZECtoXRP = $ZECtoXRP.toFixed(4);
		$imputXRP.value = $ZECtoXRP;

		udpateFiatsInputs($ZECtoBTC);
	};

	$imputXRP.oninput = function() {
		var $XRPtoBTC = $imputXRP.value * $XRP.price_btc;
		$XRPtoBTC = $XRPtoBTC.toFixed(8);
		$imputBTC.value = $XRPtoBTC;

		var $XRPtoETH = ($XRP.price_btc / $ETH.price_btc)*$imputXRP.value;
		$XRPtoETH = $XRPtoETH.toFixed(8);
		$imputETH.value = $XRPtoETH;

		var $XRPtoLTC = ($XRP.price_btc / $LTC.price_btc)*$imputXRP.value;
		$XRPtoLTC = $XRPtoLTC.toFixed(8);
		$imputLTC.value = $XRPtoLTC;

		var $XRPtoDOGE = ($XRP.price_btc / $DOGE.price_btc)*$imputXRP.value;
		$XRPtoDOGE = $XRPtoDOGE.toFixed(2);
		$imputDOGE.value = $XRPtoDOGE;

		var $XRPtoBCH = ($XRP.price_btc / $BCH.price_btc)*$imputXRP.value;
		$XRPtoBCH = $XRPtoBCH.toFixed(8);
		$imputBCH.value = $XRPtoBCH;

		var $XRPtoXMR = ($XRP.price_btc / $XMR.price_btc)*$imputXRP.value;
		$XRPtoXMR = $XRPtoXMR.toFixed(8);
		$imputXMR.value = $XRPtoXMR;

		var $XRPtoZEC = ($XRP.price_btc / $ZEC.price_btc)*$imputXRP.value;
		$XRPtoZEC = $XRPtoZEC.toFixed(4);
		$imputZEC.value = $XRPtoZEC;

		udpateFiatsInputs($XRPtoBTC);
	};
}

function udpateFiatsInputs($BTCSum) {
	var $imputUSD = document.getElementById('input-USD');
	var $imputEUR = document.getElementById('input-EUR');
	var $imputCNY = document.getElementById('input-CNY');
	var $imputRUB = document.getElementById('input-RUB');
	var $imputHKD = document.getElementById('input-HKD');
	var $imputGBP = document.getElementById('input-GBP');
	var $imputKRW = document.getElementById('input-KRW');
	var $imputJPY = document.getElementById('input-JPY');

	$imputUSD.value = ($BTCSum * $BTC.price_usd).toFixed(2);
	$imputEUR.value = ($BTCSum * $BTC_EUR[0].price_eur).toFixed(2);
	$imputCNY.value = ($BTCSum * $BTC_CNY[0].price_cny).toFixed(2);
	$imputRUB.value = ($BTCSum * $BTC_RUB[0].price_rub).toFixed(2);
	$imputHKD.value = ($BTCSum * $BTC_HKD[0].price_hkd).toFixed(2);
	$imputGBP.value = ($BTCSum * $BTC_GBP[0].price_gbp).toFixed(2);
	$imputKRW.value = ($BTCSum * $BTC_KRW[0].price_krw).toFixed(2);
	$imputJPY.value = ($BTCSum * $BTC_JPY[0].price_jpy).toFixed(2);
}
