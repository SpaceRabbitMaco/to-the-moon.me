/*jshint esversion: 6 */
// ------------------------------------------
// --------- [ FUNCTIONS ] ----------
// ------------------------------------------
function nodeSort(ccA, ccB) {
  return parseFloat(ccB.ROI) - parseFloat(ccA.ROI);
}

function nodesAnalyze(ccArr) {
  result = [];
  ccArr.forEach(el => {
    if (
      el.Liqudity != "NAN" &&
      el.Liqudity > 1 &&
      el.NodePrice > 1 &&
      el.ROI != "n.d." &&
      el.ROI > 20
    ) {
      result.push(el);
    }
  });
  return result;
}

function nodesROIAnalyze(ccArr, marker) {
  let result = [];

  if (marker === "TOP") {
    ccArr.forEach(el => {
      if (el.ROI >= 500) {
        result.push(el);
      }
    });
  } else if (marker === "MID") {
    ccArr.forEach(el => {
      if (el.ROI < 500 && el.ROI >= 100) {
        result.push(el);
      }
    });
  } else if (marker === "LOW") {
    ccArr.forEach(el => {
      if (el.ROI < 100) {
        result.push(el);
      }
    });
  }

  return result;
}

function getSortedArr(ccObj) {
  let result = [];
  Object.keys(ccObj).forEach(function(key) {
    result.push(ccObj[key]);
  });
  result = result.sort(nodeSort);
  return result;
}

function setLiqudityStyle(value) {
  let result = "";
  if (parseFloat(value) >= 50) {
    result = '<td class="td-liqudity td-liqudity-super">';
  } else if (parseFloat(value) >= 30 && parseFloat(value) < 50) {
    result = '<td class="td-liqudity td-liqudity-high">';
  } else if (parseFloat(value) >= 10 && parseFloat(value) < 30) {
    result = '<td class="td-liqudity td-liqudity-mid">';
  } else {
    result = '<td class="td-liqudity td-liqudity-low">';
  }
  return result;
}

function getCCImg(el) {
  let result;
  let site = el.Site;

  if (site === "masternodes.online") {
    result = `<div class="coin coin-${el.CCTicker}"></div>`;
  } else if (site === "masternodecap.com") {
    result = `<div class="non-mno-coin"><img src="https://masternodecap.com/img/1/coins/${
      el.CCTicker
    }.png"></div>`;
  } else {
    result = `<div></div>`;
  }

  return result;
}

function drawNodesTable(ccArr, marker) {
  let title;

  switch (marker) {
    case "top":
      title = `High ROI coins`;
      break;
    case "mid":
      title = `Medium ROI coins`;
      break;
    case "low":
      title = `Low ROI coins`;
      break;

    default:
      break;
  }

  let html = `<h1>${title}</h1><span><u>Coins</u>: ${
    ccArr.length
  }</span><table class="base-table"><tr>
  <th class="table-th1">Name</th>
  <th class="table-th2">Symbol</th>
  <th class="table-th3">ROI</th>
  <th class="table-th4">Liquidity</th>
  <th class="table-th5">Node Price</th>
  <th class="table-th6">Nodes</th></tr>`;

  ccArr.forEach(el => {
    let Liqudity = setLiqudityStyle(el.Liqudity);
    let img = getCCImg(el);

    html += `<tr><td>${img}<a target="_blank" href="${el.Link}">${
      el.CCName
    }</a></td>
    <td>${el.CCTicker}</td>
    <td>${el.ROI.split(".")[0]} %</td>
    ${Liqudity + el.Liqudity}</td>
    <td>$ ${el.NodePrice}</td>
    <td class="td-nodes-count">${el.Nodes}</td></tr>`;
  });

  html += `</table>`;
  $("#main-div-cc-roi-" + marker).html(html);
}

function startNodes() {
  let ALL_DATA = getJSONData("../saved_data/nodes_data.json");
  ALL_DATA = getSortedArr(ALL_DATA);
  ALL_DATA = nodesAnalyze(ALL_DATA);

  let ROI_TOP = nodesROIAnalyze(ALL_DATA, "TOP");
  let ROI_MID = nodesROIAnalyze(ALL_DATA, "MID");
  let ROI_LOW = nodesROIAnalyze(ALL_DATA, "LOW");

  drawNodesTable(ROI_TOP, "top");
  drawNodesTable(ROI_MID, "mid");
  drawNodesTable(ROI_LOW, "low");
}
