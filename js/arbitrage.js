console.warn('Hello! It is an arbitration tool for a low price altcoins!');
console.warn('Made by @SpaceRabbitMaco! Yeah!');
console.error('Delisted: 1) fiat pairs, 2) if not "Recently" or vonume < 100$');
console.error('Ratio should be more than 1.15 to be added at the list (Yeah, greedy me!)');
console.warn('Currently we are checking for:',$ccArb);
console.log('---------   ALL MARKETS   ---------');


// $ccArb);

// init, data load, vars and function declaration =======

/* var $divData = document.getElementById('lisk-markets');
$divData.style.display = 'none'; */

/* var $elements = []; // array for all markets of some coin
var $goodElements = []; // array for all markets of some coin
var $finalMarkets = [];
var $marketsForArb = [];
var $ccForArb = []; */
var $ccForArb = [];
var $ccMarketsToPrint = [];

// =========__FUNCTIONS__=========
	function sPrice(a, b) {
		if (a[2] > b[2]) return 1;
		else if (a[2] < b[2]) return 0; else return -1;
	}

	function sRatio(a, b) {
		if (a[10] < b[10]) return 1;
		else if (a[10] > b[10]) return -1; else return 0;
	}
// ===============================

$( $ccArb ).each(function( $index, $ccName ) {

	$('#'+$ccName+'-markets').css('display', 'none');

	var $elements = []; // array for all markets of some coin
	var $goodElements = []; // array for all markets of some coin
	var $finalMarkets = [];
	var $marketsForArb = [];




	var $trArr = $('#'+$ccName+'-markets').find('tr').toArray(); // make arr from all 'tr'
	$trArr.shift(); // remove first element

	$( $trArr ).each(function( $index, $element ) {
	var $elem = [];
	var $chidren = $($element).children();
	var $href;

		$( $chidren ).each(function( $index, $element ) { // go td by td
			var $text = $( this ).text();
			$text = $text.trim();

			if ($index == 2) { // pair and link
				$href = $($element).children('a').attr('href');
				var $currency = $text.split('/')[1];

				if ( $currency == 'CNY' || $currency == 'USD' || $currency == 'EUR' || $currency == 'PLN' || $currency == 'ICN' || $currency == 'CRBIT' || $currency == 'BTS') {
					return true; // do not add fiat pairs or strange coins
				}
			}

			if ( $index == 3 ) { // remove ',' and '$' from prices
				$text = $text .slice(1);
				$text = $text.split(',');
				$text = $text.join('');
			}

			if ( $index == 4 ) { // remove '$' from prices
				$text = $text .slice(1);
			}

			if ( $index == $chidren.length - 2 ) { // remove '%' from volume
				$text = $text .slice(0, -1);
			}

			$elem.push($text); // push info to market

			if ( $index == $chidren.length - 1) {
				$elem.push($href);
			}
		});



	$elements.push($elem); // push market to arr
	});
	$trArr = null; // free ram

	$( $elements ).each(function( $index, $element ) { // if trade is newly and trade is big = good
		if ($element[6] == 'Recently' && $element[3] > 100) {
			$goodElements.push($element); // push to good markets arr
		}
	});
	$elements = null; // free ram

	$( $goodElements ).each(function( $index, $element ) { // make a final arr of markets
		$finalMarkets.push([$element[1], $element[2], $element[4], $element[7], $element[3]]);
	});

	$finalMarkets = $finalMarkets.sort(sPrice);
	console.log($ccName, $finalMarkets);

	$( $finalMarkets ).each(function( $index, $element ) { // find markets for arbitrage
		var $cur = $element;

		$( $finalMarkets ).each(function( $index, $element ) {
			if (+parseFloat($cur[2]/$element[2]).toFixed(2) > 1.15) { // check ratio
				$marketsForArb.push([
					$cur[0], $cur[1], $cur[3], $cur[4], $cur[2],
					$element[2], $element[4], $element[0], $element[1], $element[3],
					parseFloat($cur[2]/$element[2]).toFixed(2)
				]);
			}
		});
	});
	$finalMarkets = null; // free ram

	$marketsForArb = $marketsForArb.sort(sRatio);

	//$ccForArb.push($marketsForArb);
	$ccForArb[$ccName] = $marketsForArb;



});

console.log('---------       END       ---------');

console.warn('Good markets for Arbitrage:', $ccForArb);

for(var $cc in $ccForArb) {
	if($ccForArb[$cc].length != 0) {
		var arr = $ccForArb[$cc];
		arr.forEach(function(item, i, arr) {
			$ccMarketsToPrint.push(item);
		});
	}
}
$ccForArb = null; // free ram

$ccMarketsToPrint = $ccMarketsToPrint.sort(sRatio);

$('#selected-markets').html("");
$('#selected-markets').css('display', 'block');

var $mainDiv = document.getElementById('selected-markets');

console.warn('Pairs have sorted');
console.log($ccMarketsToPrint);

function drawCCArbTable () {
	var $htmltempl = '<table class="base-table big-table"><tr><th>Market</th><th>Vol ($)</th><th>Price ($)</th><th>Pair HI</th><th>Ratio</th><th>Pair LOW</th><th>Price ($) </th><th>Vol ($)</th><th>Market</th></tr>';

	$ccMarketsToPrint.forEach(function(item, i, $ccMarketsToPrint) {
		if (item[0] == item[7]) {
			var dataToHTML = '<tr><td class="same-markets">'+item[0]+'</td><td class="text-center">'+item[3]+'</td><td class="text-center price-hi">'+item[4]+'</td><td class="text-center"><a href="'+item[2]+'" target ="_blank">'+item[1]+'</a></td><td class="text-center td-arb-ratio">'+item[10]+'</td><td class="text-center"><a href="'
			+item[9]+'" target ="_blank">'+item[8]+'</a></td><td class="text-center price-low">'+item[5]+'</td><td class="text-center">'+item[6]+'</td><td class="same-markets">'+item[7]+'</td><tr>';
		} else {
			var dataToHTML = '<tr><td>'+item[0]+'</td><td class="text-center">'+item[3]+'</td><td class="text-center price-hi">'+item[4]+'</td><td class="text-center"><a href="'+item[2]+'" target ="_blank">'+item[1]+'</a></td><td class="text-center td-arb-ratio">'+item[10]+'</td><td class="text-center"><a href="'
			+item[9]+'" target ="_blank">'+item[8]+'</a></td><td class="text-center price-low">'+item[5]+'</td><td class="text-center">'+item[6]+'</td><td>'+item[7]+'</td><tr>';
		}

		$htmltempl = $htmltempl + dataToHTML;
	});

	$mainDiv.innerHTML = $htmltempl ;
}

drawCCArbTable();
$('base-div').css('width', '1200px');

$ccMarketsToPrint = null; // free ram
