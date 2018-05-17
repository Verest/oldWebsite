const hamburgerButton = document.getElementById("hamburger");
const navItems = document.getElementById("nav-ham");
const header = document.getElementsByTagName("header")[0];
const barTop = document.querySelector(".bar-top");
const barMid = document.querySelector(".bar-mid");
const barBot = document.querySelector(".bar-bot");

hamburgerButton.addEventListener("click",()=>{
  navItems.classList.toggle("nav-show");
  header.classList.toggle("header-show");

  barTop.classList.toggle("transition-bar-top");
  barMid.classList.toggle("transition-bar-mid");
  barBot.classList.toggle("transition-bar-bot");
});


var contentID = ["#one", "#two", "#three", "#four", "#five", "#six", "#seven", "#eight", "#nine", "#ten"];
var linkID = ["#linkOne", "#linkTwo", "#linkThree", "#linkFour", "#linkFive", "#linkSix", "#linkSeven", "#linkEight", "#linkNine", "#linkTen"];

function searchWiki(search) {
  console.log('insearch');
  $.ajax({
    dataType: "jsonp",
    url: "https://en.wikipedia.org/w/api.php?action=opensearch&format=json&search=" + search + "&limit=15&redirects=resolve",
    crossDomain: true,
    headers: {
      "Api-User-Agent": "codepen.io/Verest"
    },
    success: function(data) {
      console.log(data);
      var count = 0;
      //clear old seach content
      for (var i = 0; i < 10; i++) {
        $(contentID[i]).find("h4").empty();
        $(contentID[i]).find("p").empty();
        $(linkID[i]).removeAttr("href");
      }
      //more than 10 if some entries invalid
      for (var i = 0; i < data[1].length; i++) {
        if (count > 9) {
          break;
        }
        //get rid of disambiguation pages & no info pages
        if (/may refer to/i.test(data[2][i])||!data[2][i]) {
          continue;
        }
        //update html
        $(contentID[count]).find("h4").html(data[1][i]); //header
        $(contentID[count]).find("p").html(data[2][i]); //content
        $(linkID[count]).attr("href", data[3][i]); //link

        count++
      }
    }
  });
}

$(function() {
  $('#searchForm').submit(function(e) {
    $(".results").addClass("display-all");
    searchWiki($("#searchText").val());
    e.preventDefault();
    //return false;
  });
});
