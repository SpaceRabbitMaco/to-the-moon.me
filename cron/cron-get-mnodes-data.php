<?php

$fullPath = '/var/www/to_the_moonme/data/www/to-the-moon.me/';

// ----------------------------------------------------------------------------------------
//-------------- [ FUNCTIONS ] ----------------------------------------------------
// ----------------------------------------------------------------------------------------
function writeJSON2File($filePath, $data) {
	global $fullPath;
	$dataJson = json_encode($data);
	$file = fopen($fullPath.$filePath, 'wt');
	fwrite($file, $dataJson);
	fclose($file);
}

function getAllNodesData() {

}

// function priceDropAlalytics($arr) {
// 	global $change1hArr;
// 	global $change24hArr;
// 	global $change7dArr;
// 	global $topCC;

// 	foreach ($arr as $key => $value) {
// 		$valMC = (int)$value['quote']['USD']['market_cap'];
// 		$change1h = (int)$value['quote']['USD']['percent_change_1h'];
// 		$change24h = (int)$value['quote']['USD']['percent_change_24h'];
// 		$change7d = (int)$value['quote']['USD']['percent_change_7d'];

// 		if ($valMC >= 4000000 && $change1h <= -5) { array_push($change1hArr, $value);	}
// 		if ($valMC >= 4000000 && $change24h <= -15) { array_push($change24hArr, $value); }
// 		if ($valMC >= 4000000 && $change7d <= -25) { array_push($change7dArr, $value); }

// 		if ($value['id'] === 1 || $value['id'] === 1027 || $value['id'] === 52 || $value['id'] === 1831 || $value['id'] === 2 || $value['id'] === 328 || $value['id'] === 1321 || $value['id'] === 131 || $value['id'] === 1437 || $value['id'] === 1274 || $value['id'] === 74 || $value['id'] === 168)
// 		{
// 		 	array_push($topCC, $value);
// 		}

// 		writeJSON2File('/saved_data/change1h.json', $change1hArr);
// 		writeJSON2File('/saved_data/change24h.json', $change24hArr);
// 		writeJSON2File('/saved_data/change7d.json', $change7dArr);
// 		writeJSON2File('/saved_data/topCC.json', $topCC);
// 	}
// }


function getDataINIT() {

	$allDataCMC = getAllDataFromCMC();
	writeJSON2File('/saved_data/all_data.json', $allDataCMC);
	priceDropAlalytics($allDataCMC['data']);

	$USDRates = getUSDRates();
	writeJSON2File('/saved_data/usd_rates.json', $USDRates);

	echo "<script>console.log('Data loaded and saved: OK')</script>";
}
// ----------------------------------------------------------------------------------------

// ----------------------------------------------------------------------------------------
//-------------- [ MAIN CODE ] -----------------------------------------------------
// ----------------------------------------------------------------------------------------

$allNodes = array();

// $change1hArr = array();
// $change24hArr = array();
// $change7dArr = array();

getDataINIT();

?>
