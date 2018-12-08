/*jshint esversion: 6 */
// ===___FUNCTIONS_START___===

function getJSONData(path) {
   var data = {};
   var xhr = new XMLHttpRequest();

   xhr.open('GET', path, false);
   xhr.send();

   if (xhr.status != 200) {
      alert(xhr.status + ': ' + xhr.statusText); // пример вывода: 404: Not Found
   } else {
      data = xhr.responseText;
      data = JSON.parse(data);
      return data;
   }
}

function $formatDigits($tdSearch) {
   var $digits = document.getElementsByClassName($tdSearch);

   for (var i = 0; i < $digits.length; i++) {
      var $value = $digits[i].innerHTML;
      $value = $value.replace(/\B(?=(\d{3})+(?!\d))/g, " ");
      $digits[i].innerHTML = $value;
   }
}

function footerToBottom() {
   var $footer = document.getElementById('bottom-fixed');
   $footerBottom = $footer.getBoundingClientRect().bottom;

   var $bodytHeight = document.body.clientHeight;

   var $footerMargTop = $bodytHeight - $footerBottom;
   if ($footerMargTop < 100) {
      $footerMargTop = 100;
   }
   $footer.setAttribute("style", "margin-top:" + $footerMargTop + "px");
}
