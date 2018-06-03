var $BTC, $ETH, $LTC, $UFO, $DOGE, $BCH, $XMR, $ZEC, $XRP, $BTC_EUR, $BTC_CNY, $BTC_RUB, $BTC_HKD, $BTC_GBP, $BTC_KRW, $BTC_JPY;

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

var calculateAndSet = function($CC_to_BTCeqv, $inputValue, $CC) {
	var $BTCeqv, $ETHeqv, $LTCeqv, $UFOeqv, $BCHeqv, $XMReqv, $ZECeqv, $XRPeqv, $DASHeqv, $ETCeqv, $WAVESeqv, $DOGEeqv,  $CCeqv, $USDeqv, $EUReqv, $CNYeqv, $RUBeqv, $HKDeqv, $GBPeqv, $KRWeqv, $JPYeqv;
	var $imputs = $('.cc-calc-input');
	$.each($imputs, function( index, value ) { // Идем по всем импутам, считаем и пишем значения в них
		if (value.id == 'input-' + $CC) { // Если это импут, который вызвал функцию, то выходим из функции(цикла)
			return;
		}
		else  {
			switch (value.id ) {
				// LIST OF __CC__ INPUTS
				case 'input-BTC':
					$BTCeqv = ($inputValue * $CC_to_BTCeqv).toFixed(8);
					$('#input-BTC')[0].value = $BTCeqv;
					break;
				case 'input-ETH':
					$ETHeqv = (($CC_to_BTCeqv / $ETH.price_btc) * $inputValue).toFixed(8);
					$('#input-ETH')[0].value = $ETHeqv;
					break;
				case 'input-LTC':
					$LTCeqv = (($CC_to_BTCeqv / $LTC.price_btc) * $inputValue).toFixed(8);
					$('#input-LTC')[0].value = $LTCeqv;
					break;
				case 'input-UFO':
					$UFOeqv = (($CC_to_BTCeqv / $UFO.price_btc) * $inputValue).toFixed(8);
					$('#input-UFO')[0].value = $UFOeqv;
					break;
				case 'input-BCH':
					$BCHeqv = (($CC_to_BTCeqv / $BCH.price_btc) * $inputValue).toFixed(8);
					$('#input-BCH')[0].value = $BCHeqv;
					break;
				case 'input-XMR':
					$XMReqv = (($CC_to_BTCeqv / $XMR.price_btc) * $inputValue).toFixed(8);
					$('#input-XMR')[0].value = $XMReqv;
					break;
				case 'input-ZEC':
					$ZECeqv = (($CC_to_BTCeqv / $ZEC.price_btc) * $inputValue).toFixed(8);
					$('#input-ZEC')[0].value = $ZECeqv;
					break;
				case 'input-XRP':
					$XRPeqv = (($CC_to_BTCeqv / $XRP.price_btc) * $inputValue).toFixed(8);
					$('#input-XRP')[0].value = $XRPeqv;
					break;
				case 'input-DASH':
					$DASHeqv = (($CC_to_BTCeqv / $DASH.price_btc) * $inputValue).toFixed(8);
					$('#input-DASH')[0].value = $DASHeqv;
					break;
				case 'input-ETC':
					$ETCeqv = (($CC_to_BTCeqv / $ETC.price_btc) * $inputValue).toFixed(8);
					$('#input-ETC')[0].value = $ETCeqv;
					break;
				case 'input-WAVES':
					$WAVESeqv = (($CC_to_BTCeqv / $WAVES.price_btc) * $inputValue).toFixed(8);
					$('#input-WAVES')[0].value = $WAVESeqv;
					break;
				case 'input-DOGE':
					$DOGEeqv = (($CC_to_BTCeqv / $DOGE.price_btc) * $inputValue).toFixed(4);
					$('#input-DOGE')[0].value = $DOGEeqv;
					break;

				//LIST OF __FIATS__ INPUTS
				case 'input-USD':
					$USDeqv = (($CC_to_BTCeqv * $BTC.price_usd) * $inputValue).toFixed(6);
					$('#input-USD')[0].value = $USDeqv;
					break;
				case 'input-EUR':
					$EUReqv = (($CC_to_BTCeqv * $BTC_EUR[0].price_eur) * $inputValue).toFixed(6);
					$('#input-EUR')[0].value = $EUReqv;
					break;
				case 'input-CNY':
					$CNYeqv = (($CC_to_BTCeqv * $BTC_CNY[0].price_cny) * $inputValue).toFixed(6);
					$('#input-CNY')[0].value = $CNYeqv;
					break;
				case 'input-RUB':
					$RUBeqv = (($CC_to_BTCeqv * $BTC_RUB[0].price_rub) * $inputValue).toFixed(6);
					$('#input-RUB')[0].value = $RUBeqv;
					break;
				case 'input-HKD':
					$HKDeqv = (($CC_to_BTCeqv * $BTC_HKD[0].price_hkd) * $inputValue).toFixed(6);
					$('#input-HKD')[0].value = $HKDeqv;
					break;
				case 'input-GBP':
					$GBPeqv = (($CC_to_BTCeqv * $BTC_GBP[0].price_gbp) * $inputValue).toFixed(6);
					$('#input-GBP')[0].value = $GBPeqv;
					break;
				case 'input-KRW':
					$KRWeqv = (($CC_to_BTCeqv * $BTC_KRW[0].price_krw) * $inputValue).toFixed(6);
					$('#input-KRW')[0].value = $KRWeqv;
					break;
				case 'input-JPY':
					$JPYeqv = (($CC_to_BTCeqv * $BTC_JPY[0].price_jpy) * $inputValue).toFixed(6);
					$('#input-JPY')[0].value = $JPYeqv;
					break;
			}
		}
	});
};

function getData($url) {
	$.ajax({
		url: $url,
		dataType : "json",
		success: function (data, textStatus) {

		var $ccObj = data[0]; // .name, .symbol, .percent_change_1h, price_btc, price_usd

		if ($ccObj.percent_change_1h > 0) {
			$ccObj.percent_change_1h = '+' + $ccObj.percent_change_1h;
			$('#' + $ccObj.id + '-div-1h').css({'background-color' : 'rgba(76, 175, 80, 0.20)'});
			$('#' + $ccObj.id + '-1h-change').css({'color' : '#4CAF50'});
		} else {
			$('#' + $ccObj.id + '-div-1h').css({'background-color' : 'rgba(255, 152, 0, 0.20)'});
			$('#' + $ccObj.id + '-1h-change').css({'color' : '#FF5722'});
		}

		var $lastUpdate = getDateLastUpdate($ccObj);

		$('#' + $ccObj.id).text($ccObj.price_usd);
		$('#' + $ccObj.id + '-last-update').text($lastUpdate);
		$('#' + $ccObj.id + '-1h-change').text($ccObj.percent_change_1h + '%');

		if ($ccObj.name != 'Bitcoin') {
			$ccObj.price_btc = parseFloat($ccObj.price_btc).toFixed(8);
			$('#' + $ccObj.id + '-BTC').text($ccObj.price_btc);
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
		if ($ccObj.symbol == 'UFO') {
			$UFO = $ccObj;
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
		if ($ccObj.symbol == 'DASH') {
			$DASH = $ccObj;
		}
		if ($ccObj.symbol == 'ETC') {
			$ETC = $ccObj;
		}
		if ($ccObj.symbol == 'WAVES') {
			$WAVES = $ccObj;
		}
		if ($ccObj.symbol == 'DOGE') {
			$DOGE = $ccObj;
		}

		return $ccObj;
		}
	});
}

function appINIT() {
	$BTC = getData('https://api.coinmarketcap.com/v1/ticker/bitcoin/');
	$ETH = getData('https://api.coinmarketcap.com/v1/ticker/ethereum/');
	$LTC = getData('https://api.coinmarketcap.com/v1/ticker/litecoin/');
	$UFO = getData('https://api.coinmarketcap.com/v1/ticker/uniform-fiscal-object/');
	$BCH = getData('https://api.coinmarketcap.com/v1/ticker/bitcoin-cash/');
	$XMR = getData('https://api.coinmarketcap.com/v1/ticker/monero/');
	$ZEC = getData('https://api.coinmarketcap.com/v1/ticker/zcash/');
	$XRP = getData('https://api.coinmarketcap.com/v1/ticker/ripple/');
	$DASH = getData('https://api.coinmarketcap.com/v1/ticker/dash/');
	$ETC = getData('https://api.coinmarketcap.com/v1/ticker/ethereum-classic/');
	$WAVES = getData('https://api.coinmarketcap.com/v1/ticker/waves/');
	$DOGE = getData('https://api.coinmarketcap.com/v1/ticker/dogecoin/');

	updateFiats();

	var $imputBTC = document.getElementById('input-BTC');
	var $imputETH = document.getElementById('input-ETH');
	var $imputLTC = document.getElementById('input-LTC');
	var $imputUFO = document.getElementById('input-UFO');
	var $imputBCH = document.getElementById('input-BCH');
	var $imputXMR = document.getElementById('input-XMR');
	var $imputZEC = document.getElementById('input-ZEC');
	var $imputXRP = document.getElementById('input-XRP');
	var $imputDOGE = document.getElementById('input-DOGE');
	var $imputDASH = document.getElementById('input-DASH');
	var $imputETC = document.getElementById('input-ETC');
	var $imputWAVES = document.getElementById('input-WAVES');
	var $imputUSD = document.getElementById('input-USD');
	var $imputEUR = document.getElementById('input-EUR');
	var $imputCNY= document.getElementById('input-CNY');
	var $imputRUB= document.getElementById('input-RUB');
	var $imputHKD= document.getElementById('input-HKD');
	var $imputGBP= document.getElementById('input-GBP');
	var $imputKRW= document.getElementById('input-KRW');
	var $imputJPY= document.getElementById('input-JPY');

	$imputBTC.oninput = function () {
		calculateAndSet($BTC.price_btc, $imputBTC.value, 'BTC');
	};

	$imputETH.oninput = function () {
		calculateAndSet($ETH.price_btc, $imputETH.value, 'ETH');
	};

	$imputLTC.oninput = function () {
		calculateAndSet($LTC.price_btc, $imputLTC.value, 'LTC');
	};

	$imputUFO.oninput = function () {
		calculateAndSet($UFO.price_btc, $imputUFO.value, 'UFO');
	};

	$imputBCH.oninput = function () {
		calculateAndSet($BCH.price_btc, $imputBCH.value, 'BCH');
	};

	$imputXMR.oninput = function () {
		calculateAndSet($XMR.price_btc, $imputXMR.value, 'XMR');
	};

	$imputZEC.oninput = function () {
		calculateAndSet($ZEC.price_btc, $imputZEC.value, 'ZEC');
	};

	$imputXRP.oninput = function () {
		calculateAndSet($XRP.price_btc, $imputXRP.value, 'XRP');
	};

	$imputDASH.oninput = function () {
		calculateAndSet($DASH.price_btc, $imputDASH.value, 'DASH');
	};

	$imputETC.oninput = function () {
		calculateAndSet($ETC.price_btc, $imputETC.value, 'ETC');
	};

	$imputWAVES.oninput = function () {
		calculateAndSet($WAVES.price_btc, $imputWAVES.value, 'WAVES');
	};

	$imputDOGE.oninput = function () {
		calculateAndSet($DOGE.price_btc, $imputDOGE.value, 'DOGE');
	};

	$imputUSD.oninput = function () {
		calculateAndSet((1/$BTC.price_usd), $imputUSD.value, 'USD');
	};

	$imputEUR.oninput = function () {
		calculateAndSet((1/$BTC_EUR[0].price_eur), $imputEUR.value, 'EUR');
	};

	$imputCNY.oninput = function () {
		calculateAndSet((1/$BTC_CNY[0].price_cny), $imputCNY.value, 'CNY');
	};

	$imputRUB.oninput = function () {
		calculateAndSet((1/$BTC_RUB[0].price_rub), $imputRUB.value, 'RUB');
	};

	$imputHKD.oninput = function () {
		calculateAndSet((1/$BTC_HKD[0].price_hkd), $imputHKD.value, 'HKD');
	};

	$imputGBP.oninput = function () {
		calculateAndSet((1/$BTC_GBP[0].price_gbp), $imputGBP.value, 'GBP');
	};

	$imputKRW.oninput = function () {
		calculateAndSet((1/$BTC_KRW[0].price_krw), $imputKRW.value, 'KRW');
	};

	$imputJPY.oninput = function () {
		calculateAndSet((1/$BTC_JPY[0].price_jpy), $imputJPY.value, 'JPY');
	};
}
