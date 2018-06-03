<?php // 
// It is a main functions
// all of them do some kind of stuff (parse a string, load data, etc.)

function remove_whites($str) { // func removes whitespaces and eol; takes string; returns string
	$str = trim(preg_replace('~\s+~s', '', $str));
	$str = preg_replace( "/\r|\n/", "", $str);
	$str = str_replace(array("\r", "\n"), '', $str);
	return $str;
} // remove_whites __END__


function compare_1h ($v1, $v2) { // sort array by key in intertal arrays, takes arr
	if ($v1["cc_1h_change"] == $v2["cc_1h_change"]) return 0;
	return ($v1["cc_1h_change"] < $v2["cc_1h_change"])? -1 : 1;
} // compare_1h __END__

function compare_24h ($v1, $v2) { // sort array by key in intertal arrays, takes arr
	if ($v1["cc_24h_change"] == $v2["cc_24h_change"]) return 0;
	return ($v1["cc_24h_change"] < $v2["cc_24h_change"])? -1 : 1;
} // compare_24h __END__


function compare_7d ($v1, $v2) { // sort array by key in intertal arrays, takes arr
	if ($v1["cc_7d_change"] == $v2["cc_7d_change"]) return 0;
	return ($v1["cc_7d_change"] < $v2["cc_7d_change"])? -1 : 1;
} // compare_7d __END__


function parse_cc($str) {// func parses string and returns an cc_object
	$curr = [];

	$search_in = $str;
	$search_for = 'center';
	$pos = stripos($search_in, $search_for) + 16;
	$search_in = substr($search_in, $pos); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';

	$search_for = '/td'; // search for cc_pos
	$pos = stripos($search_in, $search_for);
	$cc_pos = substr($search_in, 0, $pos - 4); // cc_pos
//	echo 'cc_pos: ', $cc_pos, '<hr>';

	$search_for = 'divclass='; // search for cc_img_link __START__
	$pos = stripos($search_in, $search_for);
	$search_in = substr($search_in, $pos + 15); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';

	$search_for = 'currency-logo-sprite'; // search for cc_img_link __END__
	$pos = stripos($search_in, $search_for);
	$cc_img_link = substr($search_in, 0, $pos); // cc_link
//	echo 'cc_img_link: ', $cc_img_link, '<hr>';

	$search_for = 'f='; // search for cc_link __START__
	$pos = stripos($search_in, $search_for);
	$search_in = substr($search_in, $pos + 8); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';
	$search_for = '&gt;'; // search for cc_link __END__
	$pos = stripos($search_in, $search_for);
	$cc_link = substr($search_in, 0, $pos - 6); // cc_link
//	echo 'cc_link: ', $cc_link, '<hr>';

	$search_in = substr($search_in, $pos + 4); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';
	$search_for = '&gt;'; // search for cc_name __END__
	$pos = stripos($search_in, $search_for);
	$cc_name = substr($search_in, 0, $pos - 6); // cc_name
//	echo 'cc_name: ', $cc_name, '<hr>';

	$search_for = 'left'; // search for cc_abr __START__
	$pos = stripos($search_in, $search_for);
	$search_in = substr($search_in, $pos + 14); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';
	$search_for = '&lt;'; // search for cc_abr __END__
	$pos = stripos($search_in, $search_for);
	$cc_abr = substr($search_in, 0, $pos); // cc_abr
//	echo 'cc_abr: ', $cc_abr, '<hr>';

	$search_for = 'data-btc='; // search for cc_market_cup __START__
	$pos = stripos($search_in, $search_for);
	$search_in = substr($search_in, $pos); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';
	$search_for = '&gt;'; // search for cc_market_cup __START__
	$pos = stripos($search_in, $search_for);
	$search_in = substr($search_in, $pos + 5); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';
	$search_for = '&lt;'; // search for cc_market_cup __END__
	$pos = stripos($search_in, $search_for);
	$cc_market_cup = substr($search_in, 0, $pos); // cc_market_cup
//	echo 'cc_market_cup: ', $cc_market_cup, '<hr>';

	$search_for = 'ahref='; // search for cc_price_link __START__
	$pos = stripos($search_in, $search_for);
	$search_in = substr($search_in, $pos + 12); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';
	$search_for = 'class'; // search for cc_price_link __END__
	$pos = stripos($search_in, $search_for);
	$cc_price_link = substr($search_in, 0, $pos - 6); // cc_price_link
//	echo 'cc_price_link: ', $cc_price_link, '<hr>';

	$search_for = '&gt;'; // search for cc_price __START__
	$pos = stripos($search_in, $search_for);
	$search_in = substr($search_in, $pos + 5); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';
	$search_for = '&lt;'; // search for cc_price __END__
	$pos = stripos($search_in, $search_for);
	$cc_price = substr($search_in, 0, $pos); // cc_price
//	echo 'cc_price: ', $cc_price, '<hr>';

	$search_for = 'data-usd='; // search for cc_volume_24 __START__
	$pos = stripos($search_in, $search_for);
	$search_in = substr($search_in, $pos); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';
	$search_for = '&gt;'; // search for cc_volume_24 __START__
	$pos = stripos($search_in, $search_for);
	$search_in = substr($search_in, $pos + 5); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';
	$search_for = '&lt;'; // search for cc_volume_24 __END__
	$pos = stripos($search_in, $search_for);
	$cc_volume_24 = substr($search_in, 0, $pos); // cc_volume_24
//	echo 'cc_volume_24: ', $cc_volume_24, '<hr>';

	$search_for = 'data-usd='; // search for cc_1h_change __START__
	$pos = stripos($search_in, $search_for);
	$search_in = substr($search_in, $pos); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';
	$search_for = '&gt;'; // search for cc_1h_change __START__
	$pos = stripos($search_in, $search_for);
	$search_in = substr($search_in, $pos + 4); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';
	$search_for = '&lt;'; // search for cc_1h_change __END__
	$pos = stripos($search_in, $search_for);
	$cc_1h_change = substr($search_in, 0, $pos - 1); // cc_1h_change
//	echo 'cc_1h_change: ', $cc_1h_change, '<hr>';

	$search_for = 'data-usd='; // search for cc_24h_change __START__
	$pos = stripos($search_in, $search_for);
	$search_in = substr($search_in, $pos); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';
	$search_for = '&gt;'; // search for cc_24h_change __START__
	$pos = stripos($search_in, $search_for);
	$search_in = substr($search_in, $pos + 4); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';
	$search_for = '&lt;'; // search for cc_24h_change __END__
	$pos = stripos($search_in, $search_for);
	$cc_24h_change = substr($search_in, 0, $pos - 1); // cc_24h_change
//	echo 'cc_24h_change: ', $cc_24h_change, '<hr>';

	$search_for = 'data-usd='; // search for cc_7d_change __START__
	$pos = stripos($search_in, $search_for);
	$search_in = substr($search_in, $pos); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';
	$search_for = '&gt;'; // search for cc_7d_change __START__
	$pos = stripos($search_in, $search_for);
	$search_in = substr($search_in, $pos + 4); // remove the start of string
//	echo 'search_in: ', $search_in, '<hr>';
	$search_for = '&lt;'; // search for cc_7d_change __END__
	$pos = stripos($search_in, $search_for);
	$cc_7d_change = substr($search_in, 0, $pos - 1); // cc_7d_change
//	echo 'cc_7d_change: ', $cc_7d_change, '<hr>';

	$curr['cc_name'] = $cc_name;
	$curr['cc_pos'] = (int)$cc_pos;
	$curr['cc_img_link'] = $cc_img_link;
	$curr['cc_link'] = "https://coinmarketcap.com" . $cc_link;
	$curr['cc_abr'] = $cc_abr;
	$curr['cc_market_cup'] = (int)implode('', explode(',', $cc_market_cup));
	$curr['cc_price'] = (float)$cc_price;
	$curr['cc_price_link'] = "https://coinmarketcap.com" . $cc_price_link;
	$curr['cc_volume_24'] = (int)implode('', explode(',', $cc_volume_24));
	$curr['cc_1h_change'] = (float)$cc_1h_change;
	$curr['cc_24h_change'] = (float)$cc_24h_change;
	$curr['cc_7d_change'] = (float)$cc_7d_change;

	return $curr;
}// parse_cc __END__


function init_all() { // main func; init load data and init parse
	$data = file_get_contents('https://coinmarketcap.com/all/views/all/#');
	$cc = [];
	$cc_formalized = []; // arr of forrmalized cc
	
	$haystack = $data;
	$needle = '<tbody>';
	$pos = stripos($haystack, $needle) + 10;
	$data = substr($data, $pos);
	$haystack = $data;
	$needle = '</tbody>';
	$pos = stripos($haystack, $needle);
	$data = substr($data, 0, $pos);
	$html = str_get_html($data); // make DOM obj

	foreach($html->find('tr') as $element) { // find all <tr> and make arr of them
		$inner_text = $element->innertext;
		$inner_text = htmlspecialchars($inner_text);
		array_push($cc, $inner_text);
	}
	
	unset($html, $data);
	
	foreach ($cc as $key => $value) { // remove whitespases from all strings and parse them
		$value = remove_whites($value);
		$value = parse_cc($value);
		array_push($cc_formalized, $value);
	}

	unset($cc);
	return $cc_formalized;
} // init_all __END__


function sort_arr_cc_to_3() { // sorts to 3 arrays
	global $cc_1h_price_drop, $cc_24h_price_drop, $cc_7d_price_drop, $cc_delisted, $cc_formalized, $cc_1h_change_TH, $cc_24h_change_TH, $cc_7d_change_TH, $cc_market_cup_TH, $cc_market_cup_BAD;
	
	foreach ($cc_formalized as $key => $value) { // foreach __START__
		if ($cc_formalized[$key]['cc_market_cup'] < $cc_market_cup_TH || // if cond __START__
		$cc_formalized[$key]['cc_market_cup'] === $cc_market_cup_BAD) // if cond __END__
		{
	//	echo $cc_1h_price_drop[$key]['cc_name'], '<br>';
		unset($cc_formalized[$key]);
		$cc_delisted++;
		continue;
		}

		if($cc_formalized[$key]['cc_1h_change'] <= $cc_1h_change_TH) {
			array_push($cc_1h_price_drop, $value);
		}

		if($cc_formalized[$key]['cc_24h_change'] <= $cc_24h_change_TH) {
			array_push($cc_24h_price_drop, $value);
		}

		if($cc_formalized[$key]['cc_7d_change'] <= $cc_7d_change_TH) {
			array_push($cc_7d_price_drop, $value);
		}

		if ($cc_formalized[$key]['cc_1h_change'] > $cc_1h_change_TH && // if cond __START__
			$cc_formalized[$key]['cc_24h_change'] > $cc_24h_change_TH &&
			$cc_formalized[$key]['cc_7d_change'] > $cc_7d_change_TH)
		//if cond __END__
		{
//		echo $cc_1h_price_drop[$key]['cc_name'], '<br>';
		unset($cc_formalized[$key]);
		$cc_delisted++;
		continue;
		}
	
	} // foreach __END__
} // sort_arr_cc_to_3 __END__


function get_remaining_cc_names($ar1, $ar2, $ar3) { // get names of all remaining cc names
	$names = [];
	foreach ($ar1 as $key => $value) {
		$name = $value['cc_name'];
		array_push($names, $name);
	}
	foreach ($ar2 as $key => $value) {
		$name = $value['cc_name'];
		array_push($names, $name);
	}
	foreach ($ar3 as $key => $value) {
		$name = $value['cc_name'];
		array_push($names, $name);
	}
	return $names;
} // get_remaining_cc_names __END__


































?>