const ALL_DATA = getJSONData("./saved_data/all_data.json");

const clearAll = function() {
  let imputs = document.querySelectorAll(".a-input");
  imputs.forEach(el => {
    el.value = "";
  });
  $("#result").html("");
};

const drawTable = function(arr) {
  let html = `<span id="coins-count"><u>Coins</u>: ${
    arr.length
  } | <u>Total coins</u>: ${
    ALL_DATA['data'].length}</span><table class="base-table"><tr>
        <th class="table-a-th1">Name</th>
        <th class="table-a-th2">Symbol</th>
        <th class="table-a-th3">Max Supply</th>
        <th class="table-a-th4">Circulating Supply</th>
        <th class="table-a-th5"><i class="fas fa-gem"></i></th>
        <th class="table-a-th6">Platform</th>
        <th class="table-a-th7">Price $</th>
        <th class="table-a-th8">Price (sat.)</th>
        <th class="table-a-th9">Date add</th>
        </tr>`;

  arr.forEach(el => {
    let isMineable;
    let platform;
    let coinPriceSat;
    let coinCircSupl = el.circulating_supply;
    let coinMaxSupl = el.max_supply;
    let coinName = el.name;

    if (coinName.length > 17) {
      coinName = coinName.substr(0, 17) + "...";
    }

    if (coinCircSupl == null) {
      coinMaxSupl == "Null";
    } else {
      coinCircSupl = coinCircSupl.toFixed(0);
    }

    if (coinMaxSupl == null) {
      coinMaxSupl == "Null";
    } else {
      coinMaxSupl = coinMaxSupl.toFixed(0);
    }

    coinPriceSat = (
      (el.quote.USD.price * 100000000) /
      ALL_DATA["data"][0].quote.USD.price
    ).toFixed(2);

    if (el.platform === null) {
      platform = "None";
    } else {
      platform = el.platform.name;
    }

    if (el.tags.length == 1) {
      isMineable = true;
    } else {
      isMineable = false;
    }

    html += `<tr>
             <td class="table-a-td1"><img src="https://s2.coinmarketcap.com/static/img/coins/16x16/${
               el.id
             }.png" height="16" width="16"><a target="_blank" href="https://coinmarketcap.com/currencies/${
      el.slug
    }/">${coinName}</a></td>
        <td class="table-a-td2">${el.symbol}</td>
        <td class="table-a-td3">${el.max_supply}</td>
        <td class="table-a-td4">${coinCircSupl}</td>
        <td class="table-a-td5">${
          isMineable
            ? '<i style="color:green;" class="fas fa-gem"></i>'
            : '<i style="color:red;" class="fas fa-gem"></i>'
        }</td>
        <td class="table-a-td6">${platform}</td>
        <td class="table-a-td7"><a target="_blank" href="https://coinmarketcap.com/currencies/${
          el.slug
        }/#markets">${el.quote.USD.price.toFixed(6)}</a></td>
        <td class="table-a-td8">${coinPriceSat}</td>
        <td class="table-a-td9">${el.date_added.split("T")[0]}</td>
        </tr>`;
  });
  html += `</table>`;
  $("#result").html(html);
};

const priceMoreCheck = function(el, priceMore) {
  if (priceMore == "") {
    return true;
  }

  let priceBTC = ALL_DATA["data"][0].quote.USD.price;

  let coinPrice = el.quote.USD.price;
  let coinSatPrice = (100000000 * coinPrice) / priceBTC;

  if (coinSatPrice > priceMore) {
    return true;
  } else {
    return false;
  }
};

const priceLessCheck = function(el, priceLess) {
  if (priceLess == "") {
    return true;
  }

  let priceBTC = ALL_DATA["data"][0].quote.USD.price;

  let coinPrice = el.quote.USD.price;
  let coinSatPrice = (100000000 * coinPrice) / priceBTC;

  if (coinSatPrice < priceLess) {
    return true;
  } else {
    return false;
  }
};

const maxMoreCheck = function(el, maxMore) {
  if (maxMore == "") {
    return true;
  }

  if (el.max_supply == null) {
    return false;
  }

  if (el.max_supply > maxMore) {
    return true;
  } else {
    return false;
  }
};

const maxLessCheck = function(el, maxLess) {
  if (maxLess == "") {
    return true;
  }

  if (el.max_supply == null) {
    return false;
  }

  if (el.max_supply < maxLess) {
    return true;
  } else {
    return false;
  }
};

const circMoreCheck = function(el, circMore) {
  if (circMore == "") {
    return true;
  }

  if (el.circulating_supply == null) {
    return false;
  }

  if (el.circulating_supply > circMore) {
    return true;
  } else {
    return false;
  }
};

const circLessCheck = function(el, circLess) {
  if (circLess == "") {
    return true;
  }

  if (el.circulating_supply == null) {
    return false;
  }

  if (el.circulating_supply < circLess) {
    return true;
  } else {
    return false;
  }
};

const platformCheck = function(el, platform) {
  if (platform == "") {
    return true;
  }

  let elPlatform;

  if (platform == "Any Platform") {
    return true;
  }

  if (el.platform == null) {
    elPlatform = "None";
  } else {
    elPlatform = el.platform.name;
  }

  if (elPlatform == platform) {
    return true;
  } else {
    return false;
  }
};

const isMineableCheck = function(el, isMineable) {
  if (isMineable == "") {
    return true;
  }

  let result;
  let isMine;

  if (el.tags.length == 1) {
    isMine = true;
  } else {
    isMine = false;
  }

  switch (isMineable) {
    case "Any":
      result = true;
      break;
    case "Mineable":
      if (isMine) {
        result = true;
      }
      break;
    case "Not Mineable":
      if (!isMine) {
        result = true;
      }
      break;
  }
  return result;
};

const dateCheck = function(el, date) {
  if (date == "") {
    return true;
  }

  date = new Date(date).getTime();

  let dateAdd = el.date_added.split("T")[0];
  dateAdd = new Date(dateAdd).getTime();

  if (date < dateAdd) {
    return true;
  } else {
    return false;
  }
};

const analyze = function(
  arr,
  isMineable,
  platform,
  priceMore,
  priceLess,
  maxMore,
  maxLess,
  circMore,
  circLess,
  date
) {
  let result = [];

  arr["data"].forEach(el => {
    let isMCheck,
      ptfCheck,
      prcMoreCheck,
      prcLessCheck,
      mxMoreCheck,
      mxLessCheck,
      crcMoreCheck,
      crcLessCheck,
      datCheck;

    isMCheck = isMineableCheck(el, isMineable);
    ptfCheck = platformCheck(el, platform);
    prcMoreCheck = priceMoreCheck(el, priceMore);
    prcLessCheck = priceLessCheck(el, priceLess);
    mxMoreCheck = maxMoreCheck(el, maxMore);
    mxLessCheck = maxLessCheck(el, maxLess);
    crcMoreCheck = circMoreCheck(el, circMore);
    crcLessCheck = circLessCheck(el, circLess);
    datCheck = dateCheck(el, date);

    if (
      isMCheck &&
      ptfCheck &&
      prcMoreCheck &&
      prcLessCheck &&
      mxMoreCheck &&
      mxLessCheck &&
      crcMoreCheck &&
      crcLessCheck &&
      datCheck
    ) {
      result.push(el);
    }
  });
  return result;
};

const makeAlalyze = function() {
  let fitCoins;

  let isMineable = document.querySelector("#a-mineable").value;
  let platform = document.querySelector("#a-platform").value;
  let priceMore = document.querySelector("#a-price-more").value;
  let priceLess = document.querySelector("#a-price-less").value;

  let maxMore = document.querySelector("#a-max-more").value;
  let maxLess = document.querySelector("#a-max-less").value;

  let circMore = document.querySelector("#a-circ-more").value;
  let circLess = document.querySelector("#a-circ-less").value;

  let date = document.querySelector("#a-add-from").value;

  fitCoins = analyze(
    ALL_DATA,
    isMineable,
    platform,
    priceMore,
    priceLess,
    maxMore,
    maxLess,
    circMore,
    circLess,
    date
  );
  drawTable(fitCoins);
};

const addEvListToBtn = function() {
  let btn = document.querySelector("#a-btn");
  let btn_r = document.querySelector("#a-btn-reset");

  btn.addEventListener("click", e => {
    e.preventDefault();
    e.stopPropagation();
    makeAlalyze();
  });

  btn.addEventListener("submit", e => {
    e.preventDefault();
    e.stopPropagation();
  });

  btn_r.addEventListener("click", e => {
    e.preventDefault();
    e.stopPropagation();
    clearAll();
  });

  btn_r.addEventListener("submit", e => {
    e.preventDefault();
    e.stopPropagation();
  });
};

const appINIT = function() {
  footerToBottom();
  addEvListToBtn();
};
