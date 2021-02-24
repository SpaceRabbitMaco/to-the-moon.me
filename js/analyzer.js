const ALL_DATA = getJSONData("./saved_data/all_data.json");

const clearAll = function () {
  let imputs = document.querySelectorAll(".a-input");
  imputs.forEach((el) => {
    el.value = "";
  });
  $("#result").html("");
};

const algos = [
  "sha-256",
  "ethash",
  "scrypt",
  "x11",
  "equihash",
  "blake256",
  "blake2b",
  "sha-512",
  "lyra2re",
  "x13",
  "mimble-wimble",
  "quark",
  "cryptonight",
  "groestl",
  "cryptonight-lite",
  "neoscrypt",
  "argon2",
  "xevan",
  "hmq1725",
  "x15",
  "yescript",
  "x11gost",
  "scrypt-n",
  "dagger-hashimoto",
  "blake",
  "m7-pow",
  "blake2s",
  "x14",
  "qubit",
  "nist5",
];

const proofTypes = [
  "pow",
  "hybrid-pow-pos",
  "poi",
  "pos",
  "lpos",
  "dpos",
  "hybrid-dpow-pow",
  "poc",
  "tpos",
  "hybrid-pow-npos",
  "hybrid-pos-lpos",
  "dpor",
  "pos-30",
  "hybrid-pos-pop",
  "powt",
  "pop",
  "post",
];

const drawTable = function (arr) {
  let html = `<span id="coins-count"><u>Coins</u>: ${arr.length} | <u>Total coins</u>: ${ALL_DATA["data"].length}</span><table class="base-table"><tr>
        <th class="table-a-th1">Name</th>
        <th class="table-a-th3">Total Supply</th>
        <th class="table-a-th4">Tags</th>
        <th class="table-a-th5"><i class="fas fa-gem"></i></th>
        <th class="table-a-th6">Platform</th>
        <th class="table-a-th7">Price</th>
        <th class="table-a-th9">Date add</th>
        </tr>`;

  arr.forEach((el) => {
    let isMineable;
    isMineable = el.tags.includes("mineable");

    let coinSymbol = el.symbol;
    let coinPlatform;
    let platformLink;
    let coinPriceSat;
    let coinName = el.name;
    let coinTotaleSupl = el.total_supply;
    let coinTags = el.tags;

    if (coinTotaleSupl == null) {
      coinTotaleSupl = "Null";
    } else {
      coinTotaleSupl = coinTotaleSupl.toFixed(0);
      coinTotaleSupl = coinTotaleSupl.replace(/\B(?=(\d{3})+(?!\d))/g, " ");
    }

    if (coinName.length > 17) {
      coinName = coinName.substr(0, 17) + "...";
    }

    if (coinSymbol.length > 5) {
      coinSymbol = coinSymbol.substr(0, 5) + "...";
    }

    coinPriceSat = (
      (el.quote.USD.price * 100000000) /
      ALL_DATA["data"][0].quote.USD.price
    ).toFixed(0);

    if (coinPriceSat > 1019900) {
      coinPriceSat = (coinPriceSat / 100000000).toFixed(4);
      coinPriceSat += ' <i class="fab fa-btc"></i>';
    } else {
      coinPriceSat += " sat.";
    }

    if (el.platform == null) {
      coinPlatform = "None";
      platformLink = "";
    } else {
      let platformHREF = "";

      switch (el.platform.name) {
        case "Ethereum":
          platformHREF =
            "https://etherscan.io/token/" + el.platform.token_address;
          break;

        case "Binance Smart Chain":
          platformHREF =
            "https://bscscan.com/token/" + el.platform.token_address;
          break;

        case "Binance Chain":
          platformHREF =
            "https://binance.mintscan.io/assets/" + el.platform.token_address;
          break;

        case "TRON":
          platformHREF =
            "https://tronscan.org/#/token/" + el.platform.token_address;
          if (el.platform.token_address.length > 10) {
            platformHREF =
              "https://tronscan.org/#/contract/" + el.platform.token_address;
          }
          break;

        case "Neo":
          platformHREF =
            "https://neotracker.io/contract/" + el.platform.token_address;
          if (el.platform.token_address.length > 40) {
            platformHREF =
              "https://neotracker.io/asset/" + el.platform.token_address;
          }
          break;

        case "EOS":
          platformHREF =
            "https://eosflare.io/account/" + el.platform.token_address;
          break;

        case "Chiliz":
          platformHREF =
            "https://explorer.chiliz.com/tokens/" + el.platform.token_address;
          break;

        case "Solana":
          platformHREF =
            "https://explorer.solana.com/address/" + el.platform.token_address;
          break;

        default:
          break;
      }

      coinPlatform = el.platform.name;

      platformLink = `<a href="${platformHREF}" target="_blank"><i class="fas fa-cogs"></i></a>`;
      if (coinPlatform == "IOST") {
        platformLink = '<i class="fas fa-cogs"></i>';
      }
    }

    html += `<tr>
            <td class="table-a-td1"><img src="https://s2.coinmarketcap.com/static/img/coins/16x16/${
              el.id
            }.png" height="16" width="16"><a target="_blank" href="https://coinmarketcap.com/currencies/${
      el.slug
    }/">${coinName} (${coinSymbol})</a></td>
        <td class="table-a-td3">${coinTotaleSupl}</td>
        <td class="table-a-td4">
        ${Object.keys(coinTags)
          .map(function (key) {
            let tagClass = "";
            tagClass = algos.includes(coinTags[key])
              ? "coin-tag-algo"
              : "coin-tag";
            if (proofTypes.includes(coinTags[key])) {
              tagClass = "coin-tag-ptype";
            }

            return (
              `<span class='${tagClass}'>` +
              "<i class='fas fa-tag'></i> " +
              coinTags[key] +
              "</span>"
            );
          })
          .join(" ")}
        </td>
        <td class="table-a-td5">${
          isMineable
            ? '<i style="color:#27AE60;" class="fas fa-gem"></i>'
            : '<i style="color:#cccccc;" class="fas fa-gem"></i>'
        }</td>
        <td class="table-a-td6">${coinPlatform} ${platformLink}</td>
        <td class="table-a-td7"><a target="_blank" href="https://coinmarketcap.com/currencies/${
          el.slug
        }/#markets">$${
      el.quote.USD.price === null ? null : el.quote.USD.price.toFixed(4)
    }</a><br><span class="coin-sat-price">${coinPriceSat}</span></td>
        <td class="table-a-td9">${el.date_added.split("T")[0]}</td>
        </tr>`;
  });
  html += `</table>`;
  $("#result").html(html);
};

const priceMoreCheck = function (el, priceMore) {
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

const priceLessCheck = function (el, priceLess) {
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

const totalMoreCheck = function (el, totalMore) {
  if (totalMore == "") {
    return true;
  }

  if (el.total_supply == null) {
    return false;
  }

  if (el.total_supply > totalMore) {
    return true;
  } else {
    return false;
  }
};

const totalLessCheck = function (el, totalLess) {
  if (totalLess == "") {
    return true;
  }

  if (el.total_supply == null) {
    return false;
  }

  if (el.total_supply < totalLess) {
    return true;
  } else {
    return false;
  }
};

const platformCheck = function (el, platform) {
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

const feachureCheck = function (el, feachure) {
  if (feachure == "") {
    return true;
  }

  if (feachure == "Any") {
    return true;
  }

  if (el.tags.includes(feachure)) {
    return true;
  } else {
    return false;
  }
};

const techCheck = function (el, tech) {
  if (tech == "") {
    return true;
  }

  if (tech == "Any") {
    return true;
  }

  if (el.tags.includes(tech)) {
    return true;
  } else {
    return false;
  }
};

const bfieldCheck = function (el, bfield) {
  if (bfield == "") {
    return true;
  }

  if (bfield == "Any") {
    return true;
  }

  if (el.tags.includes(bfield)) {
    return true;
  } else {
    return false;
  }
};

const proofCheck = function (el, proof) {
  if (proof == "") {
    return true;
  }

  if (proof == "Any") {
    return true;
  }

  if (el.tags.includes(proof)) {
    return true;
  } else {
    return false;
  }
};

const algoCheck = function (el, algo) {
  if (algo == "") {
    return true;
  }

  if (algo == "Any Algo") {
    return true;
  }

  if (el.tags.includes(algo)) {
    return true;
  } else {
    return false;
  }
};

const isMineableCheck = function (el, isMineable) {
  if (isMineable == "") {
    return true;
  }

  let result;
  let isMine;

  if (el.tags.includes("mineable")) {
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

const dateCheck = function (el, date) {
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

const analyze = function (
  arr,
  isMineable,
  platform,
  priceMore,
  priceLess,
  totalMore,
  totalLess,
  date,
  algo,
  proof,
  bfield,
  tech,
  feachure
) {
  let result = [];

  arr["data"].forEach((el) => {
    let isMCheck,
      ptfCheck,
      prcMoreCheck,
      prcLessCheck,
      toMoreCheck,
      toLessCheck,
      datCheck,
      alCheck,
      prCheck,
      bfCheck,
      teCheck,
      feCheck;

    isMCheck = isMineableCheck(el, isMineable);
    ptfCheck = platformCheck(el, platform);
    prcMoreCheck = priceMoreCheck(el, priceMore);
    prcLessCheck = priceLessCheck(el, priceLess);
    toMoreCheck = totalMoreCheck(el, totalMore);
    toLessCheck = totalLessCheck(el, totalLess);
    datCheck = dateCheck(el, date);
    alCheck = algoCheck(el, algo);
    prCheck = proofCheck(el, proof);
    bfCheck = bfieldCheck(el, bfield);
    teCheck = techCheck(el, tech);
    feCheck = feachureCheck(el, feachure);

    if (
      isMCheck &&
      ptfCheck &&
      prcMoreCheck &&
      prcLessCheck &&
      toMoreCheck &&
      toLessCheck &&
      datCheck &&
      alCheck &&
      prCheck &&
      bfCheck &&
      teCheck &&
      feCheck
    ) {
      result.push(el);
    }
  });
  return result;
};

const makeAlalyze = function () {
  let fitCoins;

  let isMineable = document.querySelector("#a-mineable").value;
  let platform = document.querySelector("#a-platform").value;
  let priceMore = document.querySelector("#a-price-more").value;
  let priceLess = document.querySelector("#a-price-less").value;

  let totalMore = document.querySelector("#a-total-more").value;
  let totalLess = document.querySelector("#a-total-less").value;

  let date = document.querySelector("#a-add-from").value;
  let algo = document.querySelector("#a-algo").value;

  let proof = document.querySelector("#a-proof").value;
  let bfield = document.querySelector("#a-bfield").value;

  let tech = document.querySelector("#a-tech").value;
  let feachure = document.querySelector("#a-feachures").value;

  fitCoins = analyze(
    ALL_DATA,
    isMineable,
    platform,
    priceMore,
    priceLess,
    totalMore,
    totalLess,
    date,
    algo,
    proof,
    bfield,
    tech,
    feachure
  );
  drawTable(fitCoins);
};

const addEvListToBtn = function () {
  let btn = document.querySelector("#a-btn");
  let btn_r = document.querySelector("#a-btn-reset");

  btn.addEventListener("click", (e) => {
    e.preventDefault();
    e.stopPropagation();
    makeAlalyze();
  });

  btn.addEventListener("submit", (e) => {
    e.preventDefault();
    e.stopPropagation();
  });

  btn_r.addEventListener("click", (e) => {
    e.preventDefault();
    e.stopPropagation();
    clearAll();
  });

  btn_r.addEventListener("submit", (e) => {
    e.preventDefault();
    e.stopPropagation();
  });
};

const appINIT = function () {
  footerToBottom();
  addEvListToBtn();
};
