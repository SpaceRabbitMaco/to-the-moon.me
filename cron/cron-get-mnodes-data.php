<?php

include_once '../php_modules/simple_html_dom.php';
$fullPath = '/var/www/to_the_moonme/data/www/to-the-moon.me/';
//$fullPath = '../saved_data/';
$NodesList = array();
// ----------------------------------------------------------------------------------------
//-------------- [ FUNCTIONS ] ----------------------------------------------------
// ----------------------------------------------------------------------------------------
function writeJSON2File($filePath, $data) {
  global $fullPath;
  $dataJson = json_encode($data);
  $file = fopen($fullPath . $filePath, 'wt');
  fwrite($file, $dataJson);
  fclose($file);
}

function writeNodes($id, $name, $ticker, $nprice, $roi, $liq, $link, $nodes) {
  global $NodesList;

  if (array_key_exists($id, $NodesList)) {
    return false;
  }

  $NodesList[$id]['CCName'] = $name;
  $NodesList[$id]['CCTicker'] = $ticker;
  $NodesList[$id]['NodePrice'] = $nprice;
  $NodesList[$id]['ROI'] = $roi;
  $NodesList[$id]['Liqudity'] = $liq;
  $NodesList[$id]['Link'] = $link;
	$NodesList[$id]['Nodes'] = $nodes;
}

//Удаляем невидимные ASCII символны из строки
function remSpaces($str) {
  $str = trim($str, chr(0x20) . chr(38) . chr(110) . chr(98) . chr(115) . chr(112) . chr(59) . chr(32));
  return $str;
}

function get_mno_info() {
  $html = file_get_html('https://masternodes.online/');

  foreach ($html->find('table[id=masternodes_table] tr') as $tr) {
    $CCFullName = $tr->find('td', 2)->plaintext;
    $CCFullName = remSpaces($CCFullName);
    if ($CCFullName == '') {continue;}

    $CCName = trim(explode('(', $CCFullName)[0]);
    $CCTicker = trim(explode(')', explode('(', $CCFullName)[1])[0]);
    $CCID = $CCName . '_' . $CCTicker;

    $Href = $tr->find('a', 0)->href;
    $Href = 'https://masternodes.online' . $Href;

    $NodePrice = $tr->find('td', 10)->plaintext;
    $NodePrice = remSpaces($NodePrice);
    $NodePrice = substr($NodePrice, 1);
    $NodePrice = str_replace(',', '', $NodePrice);
    $NodePrice = floatval($NodePrice);

    $Roi = $tr->find('td', 7)->plaintext;
    $Roi = substr($Roi, 0, -2);
    $Roi = str_replace(',', '', $Roi);

    $Nodes = $tr->find('td', 8)->plaintext;
    $Nodes = str_replace(',', '', $Nodes);

    $Vol = $tr->find('td', 5)->plaintext;
    $Vol = remSpaces($Vol);
    $Vol = substr($Vol, 1);
    $Vol = str_replace(',', '', $Vol);
    $Vol = floatval($Vol);

    if ($NodePrice == 0) {
      $Liq = 'NAN';
    } else {
      $Liq = $Vol / $NodePrice;
      $Liq = round($Liq, 0);
      if ($Liq == 0) {
        $Liq = 'NAN';
      }

    }

    writeNodes($CCID, $CCName, $CCTicker, $NodePrice, $Roi, $Liq, $Href, $Nodes);
  }
}

function get_mncap_info() {
  $html = file_get_html('https://masternodecap.com/');

  foreach ($html->find('table[id=masternodes] tr') as $tr) {
    $CCFullName = $tr->find('td', 1)->plaintext;
    $CCFullName = remSpaces($CCFullName);
    if ($CCFullName == '') {continue;}

    $CCName = trim(explode('(', $CCFullName)[0]);
    $CCTicker = trim(explode(')', explode('(', $CCFullName)[1])[0]);
    $CCID = $CCName . '_' . $CCTicker;

    $Href = $tr->find('a', 0)->href;
    $Href = 'https://masternodecap.com' . $Href;

    $NodePrice = $tr->find('td', 9)->plaintext;
    $NodePrice = remSpaces($NodePrice);
    $NodePrice = substr($NodePrice, 1);
    $NodePrice = str_replace(',', '', $NodePrice);
    $NodePrice = floatval($NodePrice);

    $Roi = $tr->find('td', 4)->plaintext;
    $Roi = substr($Roi, 0, -2);
    $Roi = str_replace(',', '', $Roi);

    $Nodes = $tr->find('td', 7)->plaintext;
    $Nodes = str_replace(',', '', $Nodes);

    $Vol = $tr->find('td', 6)->plaintext;
    $Vol = remSpaces($Vol);
    $Vol = substr($Vol, 1);
    $Vol = str_replace(',', '', $Vol);
    $Vol = floatval($Vol);

    if ($NodePrice == 0) {
      $Liq = 'NAN';
    } else {
      $Liq = $Vol / $NodePrice;
      $Liq = round($Liq, 0);
      if ($Liq == 0) {
        $Liq = 'NAN';
      }

    }

    writeNodes($CCID, $CCName, $CCTicker, $NodePrice, $Roi, $Liq, $Href, $Nodes);
  }
}

function get_mnrank_info() {
  $html = file_get_html('https://mnrank.com/');

  foreach ($html->find('table[id=example] tr') as $tr) {
    $CCFullName = $tr->find('td', 0)->plaintext;
    $CCFullName = remSpaces($CCFullName);
    if ($CCFullName == '') {continue;}

    $CCName = trim(explode('(', $CCFullName)[0]);
    $CCTicker = trim(explode(')', explode('(', $CCFullName)[1])[0]);
    $CCID = $CCName . '_' . $CCTicker;

    $Href = $tr->find('a', 0)->href;
    $Href = 'https://mnrank.com' . $Href;

    $NodePrice = $tr->find('td', 6)->plaintext;
    $NodePrice = remSpaces($NodePrice);
    $NodePrice = substr($NodePrice, 1);
    $NodePrice = str_replace(',', '', $NodePrice);
    $NodePrice = floatval($NodePrice);

    $Roi = $tr->find('td', 1)->plaintext;
    $Roi = str_replace('%', '', $Roi);
    $Roi = trim($Roi);

    $Nodes = $tr->find('td', 8)->plaintext;
    $Nodes = str_replace(',', '', $Nodes);
    $Nodes = trim($Nodes);

    $Vol = $tr->find('td', 4)->plaintext;
    $Vol = remSpaces($Vol);
    $Vol = substr($Vol, 1);
    $Vol = str_replace(',', '', $Vol);
    $Vol = floatval($Vol);

    if ($NodePrice == 0) {
      $Liq = 'NAN';
    } else {
      $Liq = $Vol / $NodePrice;
      $Liq = round($Liq, 0);
    }

    if ($Liq == NAN) {
      $Liq = 'None';
    }

    writeNodes($CCID, $CCName, $CCTicker, $NodePrice, $Roi, $Liq, $Href, $Nodes);
  }
}

function get_mnlive_info() {
  $html = file_get_html('https://masternode.live/');

  foreach ($html->find('table[id=dataTable1] tr') as $tr) {
    $CCFullName = $tr->find('td', 0)->plaintext;
		$CCFullName = remSpaces($CCFullName);
    if ($CCFullName == '') {continue;}

    $CCName = trim(explode('(', $CCFullName)[0]);
    $CCTicker = trim(explode(')', explode('(', $CCFullName)[1])[0]);
    $CCID = $CCName . '_' . $CCTicker;

    $Href = $tr->find('a', 0)->href;

    $NodePrice = $tr->find('td', 4)->plaintext;
    $NodePrice = remSpaces($NodePrice);
    $NodePrice = substr($NodePrice, 1);
    $NodePrice = str_replace(',', '', $NodePrice);
    $NodePrice = floatval($NodePrice);

    $Roi = 'n.d.';

    $Nodes = $tr->find('td', 2)->plaintext;
    $Nodes = str_replace(',', '', $Nodes);
    $Nodes = trim($Nodes);

    $Vol = $tr->find('td', 6)->plaintext;
    $Vol = remSpaces($Vol);
    $Vol = str_replace(',', '', $Vol);
    $Vol = floatval($Vol);

    if ($NodePrice == 0) {
      $Liq = 'NAN';
    } else {
      $Liq = $Vol / $NodePrice;
      $Liq = round($Liq, 0);
    }

    if ($Liq == NAN) {
      $Liq = 'None';
    }

    writeNodes($CCID, $CCName, $CCTicker, $NodePrice, $Roi, $Liq, $Href, $Nodes);
  }
}


function app_init() {
  get_mno_info();
  get_mnrank_info();
  get_mncap_info();
  get_mnlive_info();
}


// ----------------------------------------------------------------------------------------

// ----------------------------------------------------------------------------------------
//-------------- [ MAIN CODE ] -----------------------------------------------------
// ----------------------------------------------------------------------------------------

app_init();
echo '<pre>';
print_r($NodesList);
echo '</pre>';
writeJSON2File('nodes_data.json',$NodesList);
?>
