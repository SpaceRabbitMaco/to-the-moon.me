function $formatDigits($tdSearch) {
	var $digits = document.getElementsByClassName($tdSearch);

	for (var i = 0; i < $digits.length; i++) {
		var $value = $digits[i].innerHTML;
		$value = $value.replace(/\B(?=(\d{3})+(?!\d))/g, " ");
		$digits[i].innerHTML = $value;
	}
}

function footerToBottom () {
	var $footer = document.getElementById('bottom-fixed');
	$footerBottom = $footer.getBoundingClientRect().bottom;

	var $bodytHeight = document.body.clientHeight;

	var $footerMargTop = $bodytHeight - $footerBottom;
	if ($footerMargTop < 100) {	$footerMargTop = 100; }
	$footer.setAttribute("style", "margin-top:" + $footerMargTop + "px");
}
