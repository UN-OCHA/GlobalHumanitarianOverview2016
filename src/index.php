<?php $json = file_get_contents("https://sheetsu.com/apis/ac727b26"); ?>
<!DOCTYPE html>
<meta property="og:url" content="http://www.unocha.org/stateofaid" />
<meta property="og:type" content="article" />
<meta property="og:title" content="The Challenges We Face Today, and Building a Better Tomorrow" />
<meta property="og:description" content="Highlights major trends challenges and opportunities in the nature of humanitarian crises, showing how the humanitarian landscape is evolving in a rapidly changing world. And exploring what humanitarian effectiveness means in today's world ‐ better meeting the needs of people in crisis, better moving people out of crisis." />
<meta property="og:image" content="http://www.unocha.org/stateofaid/assets/img/fb.png" />
<meta property="og:image:url" content="http://www.unocha.org/stateofaid/assets/img/fb.png" />
<title>Global Humanitarian Overview</title>

<meta property="description" content="A consolidated appeal to support people affected by disaster and conflict." />


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<link href='./assets/css/c3.min.css' rel="stylesheet" type="text/css" />
<link href='./assets/css/base.css' rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,100,600,800' rel='stylesheet' type='text/css'>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.12.0/mapbox-gl.css' rel='stylesheet' />

<form id='un-gha-form'>
  <input type='hidden' name='p' name='page'/>
  <input type='hidden' name='t' title='target'/>
</form>

<section id='un-home' data-isShowing='true' class='subpage'>
  <div class='viewport' width="100%" height="100%">
    <div class='video-bg-area'>
      <video src="./assets/mov/faces.webm" id='home-video' muted="true" autoplay="true">
        <source src="./assets/mov/faces.webm" type='video/webm'/>
      </video>
    </div>
    <article class='footer'>
      <a href='http://www.unocha.org' target='_blank'><i class='icon i-logo'></i></a>
    </article>
    <?php include('_menu.php'); ?>
    <article id='home-quote' class='zoomable'>
      <div class='about-text-area'>
        <p>
          <span style='font-size: 15px;'>"Suffering in the world has reached levels not seen in a generation.
          Conflicts and disasters have driven millions of children, women and men to the edge of survival. They desperately need our help."</span>
          <br/><br/>
          <span>&mdash; Stephen O'Brien<br/>
            UN Under-Secretary-General for Humanitarian Affairs and <br/>
            Emergency Relief Coordinator</span>
        </p>
      </div>
    </article>
    <article id="home-brand" class='home-brand subsubpage content' NavControl.toHome();>
      <div id='home-brand-container'>
        <h1>Global</h1>
        <h4>Humanitarian</h4>
        <h3>Overview</h3>
        <h2>20<br/>16</h2>
      </div>
    </article>
    <article id='home-title' class='zoomable'>
      <h3 style='position: relative; background-color: rgba(240, 246, 251, 0.8);'><span style='letter-spacing: 1.2px;'>$20.1 billion to provide aid</span><br/>
          <span style='color: #0092c0;letter-spacing: -0.05px;'>to 87.6 million people in need</span>
          <span id='in-2016'>in 2016</span></h3>
    </article>
    <article id="home-chart" class='zoomable'>
      <div id="bar-chart"></div>
    </article>
  </div>
</section>

<section id='un-gha-video' class='subpage'>
  <div class='viewport'>
    <article id="" class='home-brand subsubpage content'  onclick='NavControl.toHome();'>
      <div id='home-brand-container'>
        <h1>Global</h1>
        <h4>Humanitarian</h4>
        <h3>Overview</h3>
        <h2>20<br/>16</h2>
      </div>
    </article>

    <?php include('_menu.php'); ?>
    <article id='main-video' class='subsubpage content zoomable'>
        <iframe id='gha-video'></iframe>
    </article>
    <article id='mobile-video'>
      <video controls src='./assets/mov/gho-final.mp4'></video>
    </article>
  </div>
</section>
<section id='un-gha-map' class='subpage'>
  <div class='viewport'>
    <article id="" class='home-brand subsubpage content'  onclick='NavControl.toHome();'>
      <div id='home-brand-container'>
        <h1>Global</h1>
        <h4>Humanitarian</h4>
        <h3>Overview</h3>
        <h2>20<br/>16</h2>
      </div>
    </article>
    <article id='disclaimer'>
      <p><strong>DISCLAIMER:</strong> The boundaries and names shown and the designations used on this product do not imply official endorsement or acceptance by the United Nations.</p>
    </article>
    <?php include('_menu.php'); ?>

    <article id='map-container' class='subsubpage content'>
      <div id='map'></div>
    </article>
    <article id='backup-map' class='zoomable'>
      <div id='backup-map-container'>
        <img src="./assets/img/map-image.png" alt="" usemap="#image-map" />
        <map name="image-map" id='image-map-links'>
        </map>
      </div>
    </article>
  </div>
</section>

<script type='text/javascript'>
  window.ALLDATA = <?php echo $json; ?>;
</script>
<script src='./assets/js/jquery.min.js'></script>
<script src='./assets/js/deparam.min.js'></script>
<script src='./assets/js/c3.js'></script>
<script src='./assets/js/d3.js'></script>

<!-- For Mapbox -->
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.12.0/mapbox-gl.js'></script>

<script src='./assets/js/models.js'></script>
<script src='./assets/js/gho.js'></script>
<script type='text/javascript'>
var original = {p: "", t: ""};
var NavControl = function() {
  return {
    toHome : function() {
      $("#un-gha-form input[name=t]").val("");
      $("#un-gha-form input[name=p]").val("un-home");
      $("#un-gha-form").submit();
    },
    toMap : function() {
      $("#un-gha-form input[name=t]").val("");
      $("#un-gha-form input[name=p]").val("un-gha-map");
      $("#un-gha-form").submit();
    },
    toVideo : function() {
      $("#un-gha-form input[name=t]").val("");
      $("#un-gha-form input[name=p]").val("un-gha-video");
      $("#un-gha-form").submit();
    },
    toPopup : function(popupId) {
      $("#un-gha-form input[name=t]").val(popupId);
      $("#un-gha-form").submit();
    },
    clearPopup: function() {
      $("#un-gha-form input[name=t]").val("");
      $("#un-gha-form").submit();
    }
  };
}();

// var heSectionManager = SectionManager([
//     new Section("article#un-he-1", { duration: 250 }),
//     new Section("article#un-he-2", { duration: 500 }),
//     new Section("article#un-he-3", { duration: 750 }),
//     new Section("article#un-he-4", { duration: 1000 }),
//     new Section("article#un-he-5", { duration: 1250 }),
//   ]);

// var whdtSectionManager = SectionManager([
//     new Section("article#un-whdt-1", { duration: 1000 }),
//     new Section("article#un-whdt-2", { duration: 500 }),
//     new Section("article#un-whdt-3", { duration: 250 }),
//     new Section("article#un-whdt-4", { duration: 1250 }),
//     new Section("article#un-whdt-5", { duration: 750 }),
//   ]);

var mainMap = null;
var mainChart = null;
var CURRENTDATA = [
  { label: "2005", requirement: 5000000000, targeted: 40000000},
  { label: "2006",  requirement: 4800000000, targeted: 32000000},
  { label: "2007",  requirement: 4400000000, targeted: 26000000},
  { label: "2008",  requirement: 6300000000, targeted: 28000000},
  { label: "2009",  requirement: 9500000000, targeted: 43000000},
  { label: "2010",  requirement: 9500000000, targeted: 53000000},
  { label: "2011",  requirement: 7900000000, targeted: 65000000},
  { label: "2012",  requirement: 8800000000, targeted: 62000000},
  { label: "2013",  requirement: 12900000000, targeted: 73000000},
  { label: "2014",  requirement: 16800000000, targeted: 76000000},
  { label: "2015", requirement: 19900000000, targeted: 82500000},
  { label: "2016", requirement: 20100000000, targeted: 87600000}];

var oldDateFormat = d3.time.format("%m-%Y");

var popupArray = [];
//pseudo ajax call
(function(data) {
    window.geoJsonData = {
      "type": "geojson",
      "data": {
        "type": "FeatureCollection",

        //Start rendering datapoints
        "features": data.result.map(function(d) {
            return {
              "type": "Feature",
              "geometry": {
                "type": "Point",
                "coordinates": [parseFloat(d.lat), parseFloat(d.lon)]
              },
              "properties": d
            }
        })
        //end of feature rendering
      }
    }; //end of creating geoJson data

    var formatter = function(num) {
      if (num == "-") {
        return "&mdash;";
      } else if (num >= 1000000) {
        var fmt = d3.formatPrefix(num);
        if (fmt.symbol == "G") { fmt.symbol = "B"; }
        return d3.round(fmt.scale(num), 1) + fmt.symbol;
      }
      else {
        var fmt = d3.format(",");
        return fmt(num);
      }
    };
    //Create backup map
    data.result.forEach(function(item) {
      var bleep = $("<area />")
                    .attr("shape", "circle")
                    .attr("coords", item.imageMapCoords)
                    .attr("href", "javascript: void(null)")
                    .on("click", function() { NavControl.toPopup(item.iso) });
      $("#image-map-links").append(bleep);
    });

    var randomImage = data.result[Math.floor(Math.random() * data.result.length)];
    $("section#un-home")
        .css("backgroundImage", "url(" + randomImage.image + ")")
        .css("backgroundPosition", randomImage.className=="map-country push-right" ? "center left" : "center right");
    $("video#home-video").append(
      $("<img />").attr("src", randomImage.image)
    );
    //For each country item create the content on the popup
    data.result.forEach(function(item) {
      item.header = item.country;
      item.closeText = "X";
      item.content = function(d) { return "" +
          "<div class='country-info-area'>" +
            "<table><tbody>" +
              "<tr><td><h3>People in need</h3>" +
                  "<i class='icon i-stats i-in-need'></i><span class='ctr-amt'>" +
                    formatter(d.peopleInNeed)
                    + "</span></td>" +
                  "<td><h3>People Targeted</h3><i class='icon i-stats  i-targeted'></i><span class='ctr-amt'>" + formatter(d.peopleTargeted) +"</span></td>" +
                  "</tr>" + //first row
              "<tr><td><h3>Requirements (US$)</h3><i class='icon i-stats i-fund'></i><span class='ctr-amt'>$" + formatter(d.fundingRequired) +"</span></td>" +
              "<td>&nbsp;</td></tr>" + //2nd row
            "</tbody></table>" +
          "</div>" +
          "<div class='country-text'><p>" + d.blurb + "</p></div>"}(item);
      //End of item.content

      popupArray.push(new Popup(item.iso, item
        , {onClose: NavControl.clearPopup}
      ));
      //For flipbook
      popupArray.push(new Popup("flipbook-" + item.iso,
        {
          image: "",
          downloadLink: item.downloadLink,
          fbLink: item.fbLink,
          twLink: item.twLink,
          className: 'flipbook-item',
          content: "<iframe frameborder='0' data-iframe-src='" + item.flipbookLink + "'></iframe>",
          closeText: "X"
        },
        { //start of events
          onClose: NavControl.clearPopup,
          onOpen: function(target, event) {
            var $iframe = $(target).find("iframe[data-iframe-src]");
            $iframe.attr("src", $iframe.data().iframeSrc);
          }
        } // end of events
        ));
    });// end of forEach
  }(window.ALLDATA));
var popups = PopupManager(popupArray);

var sectionManager = SectionManager([
  new Section("section#un-home", { isShowing: true,
    onShow: function() {
      if (!mainChart) {
        mainChart = GHOObjects.initializeChart();
        mainChart.data.colors({"Funding Requirement": "rgb(240, 83, 86)"});
        mainChart.data.colors({"People Targeted": "#0092c0"});
      }
      $("#home-video")[0].play();
    },
    onHide: function() {
      $("#home-video")[0].pause();
    }
   }),
  new Section("section#un-gha-video", {
      // hide: { left: "-100vw" }, show: { left: "0vw" },
      duration: 1000,
      // ,
      onShow: function() {
        if ($("article#main-video").css("display") == "block") {
          $("section#un-gha-video iframe")[0].contentWindow.location.replace("http://player.vimeo.com/video/148039564?rel=0&wmode=transparent&autoplay=1");
        }
      },
      onHide: function() {
        if ($("article#main-video").css("display") == "block") {
          $("section#un-gha-video iframe")[0].contentWindow.location.replace("about:blank")
        }
      }
    }),
  new Section("section#un-gha-map", {
      // hide: { left: "100vw" }, show: { left: "0" },
      duration: 1000,
      onShow: function() {
        if (!mainMap) {
            try {
              mainMap = GHOObjects.initializeMap(window.geoJsonData, {
                oninit: function(data) {
                  // console.log("INIT DATA", data);
                },
                onclick: function(feature) {
                  console.log(feature);
                  NavControl.toPopup(feature.properties.iso);
                }
              });
            }  // end of try
            catch (e) {
              $("#backup-map").css("opacity", 1);
              $("#map-container").hide();
            } // end of catch
        }
      },
      onHide: function() {
      }
   })
  //,
  // new Section("section#un-whdt-more", { duration: 1000,
  //     show : { zIndex: 1000, opacity: 1 }, hide: {zIndex: 300, opacity: 0 } }),
  // new Section("section#un-he-more", { duration: 1000,
  //     show : { zIndex: 1000, opacity: 1 }, hide: {zIndex: 300, opacity: 0 } } )

]);


(function($) {
  /* Initial state */
  // var sections = [
  //   new Section("section#un-home"),
  //   new section("section#un-whdt"),
  //   new section("section#un-he")
  // ];
  $("#un-gha-form").on("submit", function() {
    var p = $("#un-gha-form").serialize();
    window.location.hash = p;

    // console.log(p);
    return false;
  });

  $(".pop-change").on("click", function() {
    var target = $(this).data().target;
    $("#un-gha-form input[name=t]").val(target);
    $("#un-gha-form").submit();
  });

  $(".facebook-share-button").on("click", function() {
    var data = $(this).data();

    // var u = data.fb;
    // console.log(data);
    var u = data.fb;
    var t = data.title;
    var leftPosition, topPosition, width=500, height=300;
    //Allow for borders.
    leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
    //Allow for title and status bars.
    topPosition = (window.screen.height / 2) - ((height / 2) + 50);

var windowFeatures = "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no";

        window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer', windowFeatures);
  });

  var win;
  $(".twitter-share-button").on("click", function() {
    if (win)
    {
      win.close();
    }
    var data = $(this).data();

    var show_text = data.tweet;
    var link = data.twlink;
    // console.log(data);
    var param = $.param({
      // url: link,
      // via: "",
      // hashtags: "",
      text: show_text
    });

    win = window.open("https://twitter.com/intent/tweet?" + param, "twitter", "height=300,width=600,modal=yes,alwaysRaised=yes");
    win.focus();
  });

  //   function fbShare(url, title, descr, image, winWidth, winHeight) {
  //       var winTop = (screen.height / 2) - (winHeight / 2);
  //       var winLeft = (screen.width / 2) - (winWidth / 2);
  //       window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
  //   }

  var currentPage = "";
  $(window).on("hashchange", function() {
    var _hash = window.location.hash.substr(1);

    var target = $.deparam(_hash);

    if (target.p) {
      if (currentPage != ("section#" + target.p)) {
        var page = "section#" + target.p;
        currentPage = page;
        sectionManager.show(page);
      }
    } else {
      var page = "section#un-home";
      sectionManager.show(page);
    }

    //Popup
    if (target.t || target.t == "") {
      popups.show(target.t);
    } else {
      popups.hide();
    }

    // console.log(target);
    //Reset values
    $("#un-gha-form input[name=p]").val(target.p);
    $("#un-gha-form input[name=t]").val(target.t);

  });

  /*initialize...*/
  var initialize = function() {
    var _hash = window.location.hash.substr(1);
    var target = $.deparam(_hash);

    $.extend(original, target);
    // console.log(target);
    $("#un-gha-form input[name=p]").val(target.p);
    $("#un-gha-form input[name=t]").val(target.t);
  };

  $(window).trigger("hashchange");
})(jQuery);
</script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1514256778903987',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1433955-15', 'auto');
  ga('send', 'pageview');

</script>
