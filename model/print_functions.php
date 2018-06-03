<?php // 
// It is a print functions
// all of them just draw a html

 
 function draw_cc_table($arr, $type_of_table, $count, $table_id) { // takes arr and string($type_of_table), draw a table
	global $cc_1h_count, $cc_24h_count, $cc_7d_count, $cc_delisted, $remaining_cc_names_count;
	
	echo "<div class='base-div'><h2>", $type_of_table, " price change</h2>";
	echo '<span><u>Coins</u>: ', $count, ' | <u>Coins delisted</u>: ', $cc_delisted, ' | <u>Total Coins</u>: ', $cc_delisted + $remaining_cc_names_count, '</span>';
		
	echo "<table class='base-table' id='table-", $table_id ,"'>";
	echo "<tr><th>#</th><th>Name</th><th>Symbol</th><th>Market Cap</th><th>Price ($)</th><th>Volume (24h)</th><th class='th-1h'>% 1h</th><th class='th-24h'>% 24h</th><th class='th-7d'>% 7d</th></tr>";
	
	foreach ($arr as $key => $value) {
//	var_dump($arr[$key]);
		echo "<tr>";
		echo "<td class='td-pos'>", $arr[$key]['cc_pos'], "</td>";
//	echo "<td><img src='", $arr[$key]['cc_img_link'], "'><img>";
		echo "<td class='td-name'><div class='", $arr[$key]['cc_img_link'], " currency-logo-sprite'></div>";
		echo "<a target='_blank' href='", $arr[$key]['cc_link'], "'>", $arr[$key]['cc_name'], "</a></td>";
		echo "<td class='td-abr'>", $arr[$key]['cc_abr'] , "</td>";
		echo "<td class='td-market-cup'>", $arr[$key]['cc_market_cup'] , "</td>";
		echo "<td class='td-price'><a target='_blank' href='", $arr[$key]['cc_price_link'], "'>", $arr[$key]['cc_price'], "</a></td>";
		echo "<td class='td-volume-24'>", $arr[$key]['cc_volume_24'], "</td>";
		echo "<td class='td-1h-change'>", $arr[$key]['cc_1h_change'], "</td>";
		echo "<td class='td-24h-change'>", $arr[$key]['cc_24h_change'], "</td>";
		echo "<td class='td-7d-change'>", $arr[$key]['cc_7d_change'], "</td>";
	}
	echo "</tr></table></div>";
}





   

?>