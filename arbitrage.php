<link media="all and (min-width: 1550px)" href="css/main.css" rel='stylesheet' type='text/css'>
<link media="all and (max-width: 1549px)" href="css/low_res_main.css" rel='stylesheet' type='text/css'>
<link href="css/all_views_all.css" rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">


<style media="screen">
	.base-div {
		width: 1200px;
	}
</style>

<meta charset='utf-8'>
<meta content='IE=edge' http-equiv='X-UA-Compatible'>
<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

<script type="text/javascript" src="js/main.js"></script>
<script src="/js/jquery-1.8.3.js"></script>
<script src="/js/send_mail.js"></script>


<div id='menu'>
	<nav>
		<span><a href='#' class='nav-a-selected'>To the Moon</a></span>
		<span><a href='faq.php'>?</a></span>
		<span><a href='donate.php'>Donate</a></span>
	</nav>
</div>


<div id='wrap'>

<div class='base-div'>
	<h2>Arbitrage (low)</h2>

<?php
$cc_to_check = [
	'pivx',
];

$cc_to_check = [
	'scorecoin',
	'investfeed',
	'embercoin',
	'posw-coin',
	'linda',
	'bitcore',
	'okcash',
	'neutron',
	'nolimitcoin',
	'toacoin',
	'condensate',
	'unobtanium',
	'ark',
	'signatum',
	'verge',
	'coinonatx',
	'insanecoin-insn',
	'pivx',
	'dotcoin',
	'renos',
	'growers-international',
	'komodo',
	'808coin',
	'digital-developers-fund',
	'minereum',
	'feathercoin',
	'e-coin',
	'zclassic',
	'bitshares',
	'digibyte',
	'0x',
	'bytom',
	'stellar',
	'stox',
	'lisk',
	'basic-attention-token',
	'gamecredits',
	'counterparty',
	'cloakcoin'
];

/* echo '<script type="text/javascript">var $ccArb = ["lisk","scorecoin", "investfeed"];</script>'; */

echo '<script type="text/javascript">var $ccArb = [';

foreach ($cc_to_check as $value) {
	echo '"' . $value . '",' ;
}

echo '];</script>';

echo '<div id="selected-markets" style="display: none;">';

function get_markets_info($cc) {
	$data = file_get_contents('https://coinmarketcap.com/currencies/'.$cc.'/#markets');
	//$data = htmlspecialchars($data);
	//echo $data;

	$search_in = $data;
	$search_for = 'table';
	$pos = stripos($search_in, $search_for);
	$search_in = substr($search_in, $pos - 4); // remove the start of string
	$search_for = '/table';
	$pos = stripos($search_in, $search_for);
	$data = substr($search_in, 0, $pos + 9); // remove the end of string
	$data = htmlspecialchars_decode($data);
	$data = '<div id="'.$cc.'-markets">' . $data . '</div>';

	echo $data; // print a table
	unset($data);
}

foreach ($cc_to_check as $value) {
	get_markets_info($value);
}

echo '</div>';
echo '<script type="text/javascript" src="js/arbitrage.js"></script>';
/* End of php phase, js is up to go! */
?>

</div>

<div id='bottom'>
		<span>Made by <a href='https://twitter.com/SpaceRabbitMaco' target="_blank">Bucky O'Hare</a></span>
		◑
		<span id='bottom-CMC'>All data from <a href='https://coinmarketcap.com/' target='_blank'>CMC</a></span>
</div>

</div>
