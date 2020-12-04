<?php

$fullPath = '/var/www/to_the_moonme/data/www/to-the-moon.me/';

// ----------------------------------------------------------------------------------------
//-------------- [ FUNCTIONS ] ----------------------------------------------------
// ----------------------------------------------------------------------------------------
function writeJSON2File($filePath, $data)
{
	global $fullPath;
	$dataJson = json_encode($data);
	$file = fopen($fullPath . $filePath, 'wt');
	fwrite($file, $dataJson);
	fclose($file);
}

function priceDropAlalytics($arr)
{
	global $change1hArr;
	global $change24hArr;
	global $change7dArr;
	global $topCC;

	foreach ($arr as $key => $value) {
		$valMC = (int)$value['quote']['USD']['market_cap'];
		$change1h = (int)$value['quote']['USD']['percent_change_1h'];
		$change24h = (int)$value['quote']['USD']['percent_change_24h'];
		$change7d = (int)$value['quote']['USD']['percent_change_7d'];

		if ($valMC >= 4000000 && $change1h <= -5) {
			array_push($change1hArr, $value);
		}
		if ($valMC >= 4000000 && $change24h <= -15) {
			array_push($change24hArr, $value);
		}
		if ($valMC >= 4000000 && $change7d <= -25) {
			array_push($change7dArr, $value);
		}

		if ($value['id'] === 1 || $value['id'] === 1027 || $value['id'] === 52 || $value['id'] === 1831 || $value['id'] === 2 || $value['id'] === 328 || $value['id'] === 1321 || $value['id'] === 131 || $value['id'] === 1437 || $value['id'] === 1274 || $value['id'] === 74 || $value['id'] === 168) {
			array_push($topCC, $value);
		}

		writeJSON2File('/saved_data/change1h.json', $change1hArr);
		writeJSON2File('/saved_data/change24h.json', $change24hArr);
		writeJSON2File('/saved_data/change7d.json', $change7dArr);
		writeJSON2File('/saved_data/topCC.json', $topCC);
	}
}

function getAllDataFromCMC()
{
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?start=1&limit=5000&CMC_PRO_API_KEY=' . CMC_API_KEY);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 2);
	$data = curl_exec($ch);
	curl_close($ch);

	$data = json_decode($data, true);
	return $data;
}

function getUSDRates()
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://api.exchangeratesapi.io/latest?base=USD');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 2);
	$data = curl_exec($ch);
	curl_close($ch);

	$data = json_decode($data, true);
	return $data;
}

function getDataINIT()
{
	$allDataCMC = getAllDataFromCMC();

	if ($allDataCMC['status']['credit_count'] === 0) {
		sleep(1000);
		$allDataCMC = getAllDataFromCMC();

		if ($allDataCMC['status']['credit_count'] === 0) {
			sleep(1000);
			$allDataCMC = getAllDataFromCMC();

			if ($allDataCMC['status']['credit_count'] === 0) {
				sleep(1000);
				$allDataCMC = getAllDataFromCMC();
			}
		}
	}

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
define("IS_ALLOW_GET_API_KEY", true);
include_once($fullPath . 'cron/cmc-api-key.php');

$topCC = array();
$change1hArr = array();
$change24hArr = array();
$change7dArr = array();

getDataINIT();
