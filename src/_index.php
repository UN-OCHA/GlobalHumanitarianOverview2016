<!DOCTYPE html>
<?php
  $json = file_get_contents("https://sheetsu.com/apis/8d5a8d76");

  // print_r($json);
  $content = json_decode($json);
  // echo "<pre>";
  // print_r($content);
  // echo "</pre>";

  $popup_id = isset($_GET['t']) ? $_GET['t'] : "";
  $page_id = isset($_GET['p']) ? $_GET['t'] : "";

  $target = array_values(array_filter($content->result, function($d) use ($popup_id) { return $d->id == $popup_id; }));

?>
<?php if (count($target) > 0): ?>
  <meta property="og:url" content="http://www.unocha.org/humanity360/index.php?t=<?php echo $popup_id ?>#p=<?php echo $page_id ?>&t=<?php echo $popup_id ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="The Challenges We Face Today, and Building a Better Tomorrow" />
  <title>The Challenges We Face Today, and Building a Better Tomorrow</title>
  <meta property="og:description" content="<?php echo strip_tags(str_replace('"', '', $target[0]->content)) . ""; ?>" />
  <meta property="og:image" content="<?php echo $target[0]->socialImage ?>" />
  <meta property="og:image:url" content="<?php echo $target[0]->socialImage ?>" />
<?php else: ?>
  <meta property="og:url" content="http://www.unocha.org/humanity360/index.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="The Challenges We Face Today, and Building a Better Tomorrow" />
  <meta property="og:description" content="Highlights major trends challenges and opportunities in the nature of humanitarian crises, showing how the humanitarian landscape is evolving in a rapidly changing world. And exploring what humanitarian effectiveness means in today's world ‐ better meeting the needs of people in crisis, better moving people out of crisis." />
  <meta property="og:image" content="https://ocha.smugmug.com/Countries/IRQ/May-2015-CSB-mission/i-vhzsxjj/0/XL/605A3700-XL.jpg" />
  <meta property="og:image:url" content="https://ocha.smugmug.com/Countries/IRQ/May-2015-CSB-mission/i-vhzsxjj/0/XL/605A3700-XL.jpg" />
  <title>The Challenges We Face Today, and Building a Better Tomorrow</title>
<?php endif; ?>
<meta property="description" content="Highlights major trends challenges and opportunities in the nature of humanitarian crises, showing how the humanitarian landscape is evolving in a rapidly changing world. And exploring what humanitarian effectiveness means in today's world ‐ better meeting the needs of people in crisis, better moving people out of crisis." />


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<link href='./assets/css/base.css' rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'>
<section id='un-whdt-more' class='subpage'>
  <div class='viewport'>
    <article id='whdt-more-content' class='content'>
      <div class='half-content left-cont'></div>
      <div class='half-content right-cont'>
        <div class='subsection'>
          <h1>World Humanitarian Data and Trends 2015</h1>
        </div>
        <nav>
          <ul>
            <li><a href='http://online.fliphtml5.com/srhi/mtgf/' class='pop-change link-icon' target='_blank'>
                  <i class='spr icon spr-book'></i>
                  <span>View Online Version</span></a></li>
            <li> <a href='https://docs.unocha.org/sites/dms/Documents/WHDT2015.pdf' target='_blank' class='link-icon'>
                  <i class='spr icon spr-dl'></i><span>Download PDF</span>
                </a>
            </li>
            <li> <a href='https://docs.unocha.org/sites/dms/Documents/WHDT_2015%20Global%20Landscape%20ART.pdf' target='_blank' class='link-icon'>
                  <i class='spr icon spr-dl'></i><span>Download Global Landscape handout</span>
                </a>
            </li>
            <li> <a href='https://docs.unocha.org/sites/dms/Documents/WHDT_2015%20Highlights(ART)2.pdf' target='_blank' class='link-icon'>
                  <i class='spr icon spr-dl'></i><span>Download Highlights handout</span>
                </a>
            </li>
            <li>
              <a href='https://goo.gl/N7q66N' target='_blank' class='link-icon'>
                <i class='spr icon spr-dl'></i><span>Go to Dataset</span>
              </a>

            </li>
            <li>&nbsp;</li>
            <li><a href='javascript: void(null)' onclick='NavControl.toWHDT()' class='link-icon'>
                  <i class='spr icon spr-whdt'></i>
                  <span>Back</span></a></li>
            <li><a href='javascript: void(null)' onclick='NavControl.toHome()' class='link-icon'>
                  <i class='spr icon spr-un'></i>
                  <span>Home</span></a></li>
        </nav>
        <div class='subsection information-gap'>
          <h1>Information Gap</h1>
          <p>Due to the complexity of humanitarian crises, there are many gaps in the available information. Even the concepts of humanitarian needs and assistance are flexible, and there are also inherent biases in the information. To truly understand and measure impact, the humanitarian community will need to continue working on better standards and ways of collecting, sharing and using data.</p>
        </div>
      </div>
    </article>
  </div>
</section>

<section id='un-he-more' class='subpage'>
  <div class='viewport'>
    <article id='whdt-more-content' class='content'>
      <div class='half-content left-cont'>
        <div id='pyramid-top' class='pyramid-level'>
          <input type='checkbox' id='pyramid-top-check' checked='checked'/>
          <label for='pyramid-top-check'><span class='mark'></span> <span class='pyramid-description'>Crisis-affected people have the right to assistance and protection that is</span></label>
          <div class='pyramid-list'>
            <div class='pyramid-item pyramid-item-3'>
              <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-relevant'>Relevant</a>
            </div>
            <div class='pyramid-item pyramid-item-3'>
              <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-timely'>Timely</a>
            </div>
            <div class='pyramid-item pyramid-item-3'>
              <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-accountable'>Accountable</a>
            </div>
          </div>
          <sub><strong>Results:</strong> these elements describe the desired results, as a result of humanitarian action</sub>
        </div>
        <!-- Mid -->
        <div id='pyramid-mid' class='pyramid-level'>
            <input type='checkbox' id='pyramid-mid-check' checked='checked'/>
            <label for='pyramid-mid-check'>
              <span class='mark'></span>
              <span class='pyramid-description'>Those Reaching Crisis-affected people should be</span>
            </label>
            <div class='pyramid-list'>
              <div class='pyramid-item pyramid-item-4'>
                <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-complementary'>Complementary</a>
              </div>
              <div class='pyramid-item pyramid-item-4'>
                <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-connected'>Connected</a>
              </div>
              <div class='pyramid-item pyramid-item-4'>
                <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-coherent'>Coherent</a>
              </div>
              <div class='pyramid-item pyramid-item-4'>
                <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-nimble'>Nimble</a>
              </div>
            </div>
            <sub><strong>Practice:</strong> these elements describe the desired behaviour and approach for any actor in achieving results.</sub>
        </div>

        <!-- bottom -->
        <div id='pyramid-bot' class='pyramid-level'>
          <input type='checkbox' id='pyramid-bot-check' checked='checked'/>
          <label for='pyramid-bot-check'>
            <span class='mark'></span>
            <span class='pyramid-description'>The environment for humanitarian action must be enabled by</span>
          </label>
          <div class='pyramid-list'>
            <div class='pyramid-item pyramid-item-5'>
              <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-respect'>Respect for Principles</a>
            </div>
            <div class='pyramid-item pyramid-item-5'>
              <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-leadership'>Leadership</a>
            </div>
            <div class='pyramid-item pyramid-item-5'>
              <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-resources'>Resources</a>
            </div>
            <div class='pyramid-item pyramid-item-5'>
              <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-info'>Information and Evidence</a>
            </div>
            <div class='pyramid-item pyramid-item-5'>
              <a href='javascript: null(void)' class='pop-change' data-target='flipbook-more-governance'>Governance</a>
            </div>
          </div>
          <sub><strong>Enablers:</strong> These are some of the essential enabled that must be part of the operating environment in order to achieve results.</sub>
        </div>
      </div>
      <div class='half-content right-cont'>
        <div class='subsection'>
          <h1>Framework of Effectiveness</h1>
          <p>The elements above summarize the study's findings on critical aspects of humanitarian effectiveness. The five policy shifts are meant to support these three tiers of results, practice, and enablers.</p>
          <p style='font-size: 11px; margin-bottom: 10px; margin-top: 10px;'>Click on an element for more information.</p>
        </div>
        <nav>
          <ul>
            <li><a href='http://online.fliphtml5.com/dcnr/xpqh/' class='link-icon' target='_blank'>
                  <i class='spr icon spr-book'></i>
                  <span>View Online Version</span></a>
            </li>
            <li> <a href='https://docs.unocha.org/sites/dms/Documents/HEStudy_20151109_Small.pdf' target='_blank' class='link-icon'>
                  <i class='spr icon spr-dl'></i><span>Download PDF</span>
                </a>
            </li>

            <li>&nbsp;<br/>&nbsp;</li>
            <li><a href='javascript: void(null)' onclick='NavControl.toHE()' class='link-icon'>
                  <i class='spr icon spr-he'></i>
                  <span>Back</span></a></li>
            <li><a href='javascript: void(null)' onclick='NavControl.toHome()' class='link-icon'>
                  <i class='spr icon spr-un'></i>
                  <span>Home</span></a></li>
        </nav>
      </div>
    </article>
  </div>
</section>

<section id='un-home' data-isShowing='true'>
  <div class='separator'></div>
  <div class='logo'>
    <i class='spr spr-un-big'></i>
  </div>
  <article class='home-section' id='home-whdt'>
  <div class='gray-bg'></div>
  <div class='viewport-area'>
    <i class='spr spr-whdt-big'></i>
       <h1>The Challenges We Face Today</h1>
       <h3>
         <span>World Humanitarian<br/>Data and Trends</span>
         <!-- <i class='spr spr-whdt'></i> -->
       </h3>
       <p style='margin-top: 53px;'>Highlights major trends challenges and opportunities in the nature of humanitarian crises, showing how the humanitarian landscape is evolving in a rapidly changing world.</p>
       <p class='explore-button'>
         <a href='javascript: void(null);' class='white-border' onclick="NavControl.toWHDT()">Explore</a>
       </p>
  </div>
  </article>
  <article class='home-section' id='home-he'>
  <div class='gray-bg'></div>
  <div class='viewport-area'>
    <i class='spr spr-he-big'></i>
      <h1>Building a Better Tomorrow</h1>
      <h3>
        <!-- <i class='spr spr-he'></i> -->
        <span>Leaving no one behind:<br/>Humanitarian Effectiveness in the age<br/>of the sustainable development goals</span>
      </h3>
      <p>Exploring what humanitarian effectiveness means in today's world &dash; better meeting the needs of people in crisis, better moving people out of crisis.
      </p>
      <p class='explore-button'>
        <a href='javascript: void(null);' class='white-border' onclick="NavControl.toHE()">Explore</a>
      </p>
  </div>
  </article>
  <form id='un-he-whdt'>
    <input type='hidden' name='p' name='page'/>
    <input type='hidden' name='t' title='target'/>
  </form>
</section>
<section id='un-whdt' class='subpage'>
  <div class='viewport'>
    <nav>
      <ul>
          <li style='margin-bottom: 70px'>
            <a href='javascript: void(null);' class='information-item link-icon' onclick='NavControl.toWHDTMore()'>
            <i class='spr spr-info icon'></i><span style='font-weight: 600; font-size: 24px;'>More information</span></a></li>
        <li><a href='javascript: void(null);' class='link-icon' onclick='NavControl.toHE()'>
          <i class='spr icon spr-he'></i><span>Building a Better Tomorrow</span></a></li>
        <li><a href='javascript: void(null);' class='link-icon' onclick='NavControl.toHome()'><i class='spr icon spr-un'></i><span>Home</span></a></li>

      </ul>
    </nav>
    <article id='un-whdt-1' class='subsubpage'>
      <div class='hover-item'>
        <h1>Challenge</h1><h3>The cost of humanitarian assistance</h3>
        <p>The budget for humanitarian operations now surpasses the budget for peacekeeping operations by approximately $2 billion.</p>
        <p><a href='javascript: void(null)' class='pop-change white-border' data-target='un-whdt-1'>View More</a></p>
      </div>
    </article>
    <article id='un-whdt-2' class='subsubpage'>
      <div class='hover-item'>
        <h1>Challenge</h1><h3>Long-term trends in conflict</h3>
        <p>The number of political conflicts, particularly intra-State political conflicts, has steadily increased by 18 conflicts per year.</p>
        <p><a href='javascript: void(null)' class='pop-change white-border' data-target='un-whdt-2'>View More</a></p>
      </div>
    </article>
    <article id='un-whdt-3' class='subsubpage'>
      <div class='hover-item'>
        <h1>Challenge</h1><h3>The impact of Explosive Weapons</h3>
        <p>The impact of explosive weapons on civilian populations.</p>
        <p><a href='javascript: void(null)' class='pop-change white-border' data-target='un-whdt-3'>View More</a></p>
      </div>
    </article>
    <article id='un-whdt-4' class='subsubpage'>
      <div class='hover-item'>
        <h1>Opportunity</h1><h3>Tools for data coordination and collection</h3>
        <p>Skype and Ebola: In August 2014, members of the humanitarian community began the Ebola IM/GIS Skype group.</p>
        <p><a href='javascript: void(null)' class='pop-change white-border' data-target='un-whdt-4'>View More</a></p>
      </div>
    </article>
    <article id='un-whdt-5' class='subsubpage'>
      <div class='hover-item'>
        <h1>Opportunity</h1><h3>Social Media</h3>
        <p>Social Media and humanitarian disasters: Typhoon Ruby.</p>
        <p><a href='javascript: void(null)' class='pop-change white-border' data-target='un-whdt-5'>View More</a></p>
      </div>
    </article>
  </div>
</section>
<section id='un-he' class='subpage'>
  <div class='viewport'>
    <article id='un-he-1' class='subsubpage'><div class='hover-item'>
      <h1>1</h1><h3>Reinforce</h3><h5>Don't replace</h5>
      <p>existing capacities and coping strategies.</p>
      <p><a href='javascript: void(null)' class='pop-change white-border' data-target='un-he-1'>View More</a></p>
    </div></article>
    <article id='un-he-2' class='subsubpage'><div class='hover-item'><h1>2</h1>
      <h3>Enter</h3><h5>With an Exit</h5>
      <p>Collaborate to reduce and end humanitarian need.</p>
      <p><a href='javascript: void(null)' class='pop-change white-border' data-target='un-he-2'>View More</a></p>
    </div></article>
    <article id='un-he-3' class='subsubpage'><div class='hover-item'><h1>3</h1><h3>Leverage</h3><h5>Comparative Advantage</h5>
    <p>Strengthen connectivity and strategic leadership.</p>
    <p><a href='javascript: void(null)' class='pop-change white-border' data-target='un-he-3'>View More</a></p>
    </div></article>
    <article id='un-he-4' class='subsubpage'><div class='hover-item'><h1>4</h1><h3>360 Degrees</h3><h5>Of Humanity</h5><p>Adopt a holistic, localized analysis of needs and risks.</p>
      <p><a href='javascript: void(null)' class='pop-change white-border' data-target='un-he-4'>View More</a></p>
    </article>
    <article id='un-he-5' class='subsubpage'><div class='hover-item'><h1>5</h1><h3>Shared Results</h3><h5>For Collective Accountability</h5><p></p>
      <p><a href='javascript: void(null)' class='pop-change white-border' data-target='un-he-5'>View More</a></p>
    </div></article>

    <nav>
      <div class='for-desktop'>
        <ul>
          <li id='he-what-next'><a href='javascript: void(null);' class='information-item link-icon' onclick='NavControl.toHEMore()'><i class='spr icon spr-info-big'></i></a></li>

          <li><a class='link-icon' href='javascript: void(null);' onclick='NavControl.toWHDT()'><i class='spr icon spr-whdt'></i></a></li>
          <li><a href='javascript: void(null);' class='link-icon' onclick='NavControl.toHome()'>
            <i class='spr icon spr-un'></i></a></li>

        </ul>
      </div>
      <div class='for-mobile'>
        <ul>
             <li style='margin-bottom: 70px'>
              <a href='javascript: void(null);' class='information-item link-icon' onclick='NavControl.toHEMore()()'>
              <i class='spr spr-info icon'></i><span style='font-weight: 600; font-size: 24px;'>What Next</span></a></li>
          <li><a href='javascript: void(null);' class='link-icon' onclick='NavControl.toWHDT()'>
            <i class='spr icon spr-whdt'></i><span>The Challenges we Face Today</span></a></li>
          <li><a href='javascript: void(null);' class='link-icon' onclick='NavControl.toHome()'><i class='spr icon spr-un'></i><span>Home</span></a></li>

        </ul>
      </div>
    </nav>
  </div>
</section>

<script src='./assets/js/jquery.min.js'></script>
<script src='./assets/js/deparam.min.js'></script>
<script src='./assets/js/models.js'></script>
<script type='text/javascript'>
  window.ALLDATA = <?php echo $json; ?>;
  window.ALLPOPUP = [
    {id: "relevant", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=36"},
    {id: "timely", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=39"},
    {id: "accountable", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=41"},
    {id: "complementary", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=44"},
    {id: "connected", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=49"},
    {id: "coherent", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=54"},
    {id: "nimble", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=57"},
    {id: "respect", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=59"},
    {id: "leadership", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=61"},
    {id: "resources", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=63"},
    {id: "info", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=66"},
    {id: "governance", flipbookLink: "http://online.fliphtml5.com/dcnr/xpqh/#p=68"},
  ];
</script>
<script type='text/javascript'>
var original = {p: "", t: ""};
var NavControl = function() {
  return {
    toHome : function() {
      $("#un-he-whdt input[name=t]").val("");
      $("#un-he-whdt input[name=p]").val("un-home");
      $("#un-he-whdt").submit();
    },
    toHE : function() {
      $("#un-he-whdt input[name=t]").val("");
      $("#un-he-whdt input[name=p]").val("un-he");
      $("#un-he-whdt").submit();
    },
    toWHDT : function() {
      $("#un-he-whdt input[name=t]").val("");
      $("#un-he-whdt input[name=p]").val("un-whdt");
      $("#un-he-whdt").submit();
    },
    toWHDTMore : function() {
      $("#un-he-whdt input[name=t]").val("");
      $("#un-he-whdt input[name=p]").val("un-whdt-more");
      $("#un-he-whdt").submit();
    },
    toHEMore : function() {
      $("#un-he-whdt input[name=t]").val("");
      $("#un-he-whdt input[name=p]").val("un-he-more");
      $("#un-he-whdt").submit();
    },
    clearPopup: function() {
      $("#un-he-whdt input[name=t]").val("");
      $("#un-he-whdt").submit();
    }
  };
}();

var heSectionManager = SectionManager([
    new Section("article#un-he-1", { duration: 250 }),
    new Section("article#un-he-2", { duration: 500 }),
    new Section("article#un-he-3", { duration: 750 }),
    new Section("article#un-he-4", { duration: 1000 }),
    new Section("article#un-he-5", { duration: 1250 }),
  ]);

var whdtSectionManager = SectionManager([
    new Section("article#un-whdt-1", { duration: 1000 }),
    new Section("article#un-whdt-2", { duration: 500 }),
    new Section("article#un-whdt-3", { duration: 250 }),
    new Section("article#un-whdt-4", { duration: 1250 }),
    new Section("article#un-whdt-5", { duration: 750 }),
  ]);

var sectionManager = SectionManager([
  new Section("section#un-home", { isShowing: true }),
  new Section("section#un-whdt",
    { hide: { left: "-100vw" }, show: { left: "0vw" },
      onShow: function() { whdtSectionManager.showAll(); },
      onHide: function() { whdtSectionManager.hideAll(); } }),
  new Section("section#un-he", { hide: { left: "100vw" }, show: { left: "0" },
      onShow: function() { heSectionManager.showAll(); },
      onHide: function() { heSectionManager.hideAll(); }
   }),
  new Section("section#un-whdt-more", { duration: 1000,
      show : { zIndex: 1000, opacity: 1 }, hide: {zIndex: 300, opacity: 0 } }),
  new Section("section#un-he-more", { duration: 1000,
      show : { zIndex: 1000, opacity: 1 }, hide: {zIndex: 300, opacity: 0 } } )

]);


var popupArray = [];
// $.ajax({
//       url: 'https://sheetsu.com/apis/8d5a8d76',
//       async: false,
//       dataType: 'json',
//       success: function(d) {
//         console.log(d);

  //Process data
  (function(d) {
        d.result.forEach(function(item) {
          popupArray.push(new Popup(item.id, item, {onClose: NavControl.clearPopup}));

          //For flipbook
          popupArray.push(new Popup("flipbook-" + item.id,
            {
              image: "",
              downloadLink: item.downloadLink,
              fbLink: item.fbLink,
              twLink: item.twLink,
              className: 'flipbook-item',
              content: "<iframe frameborder='0' data-iframe-src='" + item.flipbookLink + "'></iframe>",
              closeText: "X"
            },
            {onClose: NavControl.clearPopup,
              onOpen: function(target, event) {
                var $iframe = $(target).find("iframe[data-iframe-src]");
                $iframe.attr("src", $iframe.data().iframeSrc);
              }
            }));
        });
    }(window.ALLDATA));

    (function(arr) {
      arr.forEach(function(item) { popupArray.push(new Popup("flipbook-more-" + item.id,
          {
            className: 'flipbook-item he-more',
            content: "<iframe frameborder='0' data-iframe-src='" + item.flipbookLink + "'></iframe>",
            closeText: "X"
          },
          {onClose: NavControl.clearPopup,
            onOpen: function(target, event) {
              var $iframe = $(target).find("iframe[data-iframe-src]");
              $iframe.attr("src", $iframe.data().iframeSrc);
            }
          }));
      });
    })(window.ALLPOPUP);
  //     }
  // });

var popups = PopupManager(popupArray);


(function($) {
  /* Initial state */
  // var sections = [
  //   new Section("section#un-home"),
  //   new section("section#un-whdt"),
  //   new section("section#un-he")
  // ];
  $("#un-he-whdt").on("submit", function() {
    var p = $("#un-he-whdt").serialize();
    window.location.hash = p;

    // console.log(p);

    return false;
  });
  $(".pop-change").on("click", function() {
    var target = $(this).data().target;
    $("#un-he-whdt input[name=t]").val(target);
    $("#un-he-whdt").submit();
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
      url: link,
      via: "unocha",
      hashtags: "Humanity360",
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


  $(window).on("hashchange", function() {
    var _hash = window.location.hash.substr(1);

    var target = $.deparam(_hash);

    if (target.p) {
      var page = "section#" + target.p;
      sectionManager.show(page);
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
    $("#un-he-whdt input[name=p]").val(target.p);
    $("#un-he-whdt input[name=t]").val(target.t);

  });

  /*initialize...*/
  var initialize = function() {
    var _hash = window.location.hash.substr(1);
    var target = $.deparam(_hash);

    $.extend(original, target);
    // console.log(target);
    $("#un-he-whdt input[name=p]").val(target.p);
    $("#un-he-whdt input[name=t]").val(target.t);
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
