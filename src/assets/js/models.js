var Popup =(function($) {
  return function(id, content, events) {
    this.id = id;
    this.content = $.extend({
      className: "",
      image: "",
      header: "",
      subheader: "",
      tagline: "",
      content: "",
      fbLink: null,
      twLink: null,
      closeText: "close"
    }, content);

    this.events = $.extend(true, {
      onClose: function() {
        var that = this;
        // that.close();
      }, onOpen : function(container, event) {
        // that.close();
      }
    }, events);

    this.rendered = null;
    this.close = function() {
      var that = this;
      // console.log(that);
      that.rendered.hide();
    };

    this.open = function() {
      var that = this;
      that.rendered.show();

      that.rendered.trigger("popup-open");
    }

    this.initialize = function() {
      var that = this;

      //produce popup
      that.rendered = function() {
        // console.log(that.content.image);
          var rendered = $("<div class='popup "+ that.content.className +"'/>").attr("id", that.id).attr("data-id", that.id)
						  .append("<div class='popup-close' />")
                          .append(
                            $("<div class='popup-content'/>")
                              .css("backgroundImage", that.content.image ? "url("+ that.content.image + ")" : "none")
                              .append(
                              $("<div class='text-area' />")
                                .append($("<h1 />").text(that.content.header))
                                .append($("<h2 />").text(that.content.subheader))
                                .append($("<h5 />").text(that.content.tagline))
                                .append($("<div class='popup-text-content' />").html(that.content.content))
                                .append($("<p class='social-area'/>")
                                  .append(
                                          $("<ul class='nav' />")
                                          .append($("<li class='flipbook-popup-link'/>").append(
                                        $("<a href='javascript: void(null);' class='pop-change more-link link-icon red-link'/>")
                                        .attr("data-target", "flipbook-" + that.id)
                                        .html("READ MORE<i style='display: none' class='spr spr-social-more icon'></i>")
                                      ))
                                      .append(
                                          $("<li />").append(
                                            $("<a href='javascript: void(null);' class='facebook-share-button red-link'/>").html("SHARE<i class='spr spr-social-fb' style='display: none'></i>")
                                              .attr("data-fb",that.content.fbLink)
                                              .attr("data-title", that.content.subheader)
                                              .attr("data-desc", that.content.tagline)
                                              .attr("data-image", that.content.image)
                                          )
                                      )
                                      .append($("<li/>").append(
                                        $("<a href='javascript: void(null);' class='twitter-share-button red-link'/>")
                                          .attr("data-tweet", that.content.tweet)
                                          .attr("data-twLink", that.content.twLink)
                                          .html("TWEET<i class='spr spr-social-tw'></i>"))
                                      )
                                    )
                                )
                                .append($("<p class='close-area'/>")
                                      .append(
                                            $("<a href='javascript: void(null);' class='close-popup'/>").text(that.content.closeText))
                                )
                            )
                     );
          return rendered;
        }();

      that.rendered.on("popup-open", function(event) {
        that.events.onOpen.call(that, that.rendered, event);
      });
      that.rendered.on("popup-close", function() { that.events.onClose.call(that); });
      that.rendered.find(".close-popup, .popup-close").on("click", function() {
        that.close();
        that.rendered.trigger("popup-close"); });
      $("body").append(that.rendered);
    };

    this.initialize();
  };
}(jQuery));

Popup.helper = function(id, className, image, header, subheader, tagline, content, fbLink, twLink) {
  return new Popup(id, {image: image, className: className, header: header, subheader: subheader, tagline: tagline, content: content, fbLink: fbLink, twLink: twLink});
}

var Section = (function($) {
  return function(target, options) {
    this.id = target;
    this.const = {
      hide: { display: "none" },
      show: { display: "block" }
    };
    this.isShowing = false;
    this.container = $(target);
    this.options = $.extend({
                    isShowing: false,
                    hide: { opacity: 0},
                    show: { opacity: 1 },
                    duration: 1000,
                    onHide: null,
                    onShow: null
                   }, options);

    this.show = function() {
      var that = this;
      if ( !that.isShowing ) {
        that.container.css(that.const.show);
        that.container.css(that.options.hide);
        that.container.animate(that.options.show, that.options.duration);
        that.container.trigger("section-mod-show");
        that.isShowing = true;
      }
    };

    this.hide = function() {
      var that = this;
      that.isShowing = false;
      that.container.animate(that.options.hide, that.options.duration,
        function() { that.container.css(that.const.hide); });

      that.container.trigger("section-mod-hide");

    };

    this.initialize = function() {
      var that = this;
      if (that.options.isShowing) {
        // this.isShowing = true;
        that.container.css(that.const.show);
        that.container.css(that.options.show);
      } else {
        that.container.css(that.options.hide);
        that.container.css(that.const.hide);
      }

      // if (that.options.onHide && typeof that.options.onHide == "function") {
        that.container.on("section-mod-hide", function(event) {

          if (that.options.onHide && typeof that.options.onHide == "function") {
            that.options.onHide();
          }

          event.stopPropagation();

        });
      // }

      // if (that.options.onShow && typeof that.options.onShow == "function") {
        that.container.on("section-mod-show", function(event) {
          if (that.options.onShow && typeof that.options.onShow == "function") {
            that.options.onShow(that.container, event);
          }
          event.stopPropagation(); });
      // }
    };

    this.initialize();
  };

})(jQuery);


var SectionManager = function(sectionArray) {
  /***
    sections: array of sections
  */
  var sections = sectionArray;

  return {
    show: function(selector) {
      sections
        .filter(function(d) { return selector != d.id })
        .forEach(function(d) { d.hide(); });

      var targ = sections.filter(function(d) { return selector == d.id })[0];
      targ.show();
    },

    showAll: function() {
      sections.forEach(function(d) { d.show(); });
    },
    hideAll: function() {
      sections.forEach(function(d) { d.hide(); });
    }

  }
};

var PopupManager = function(popupArray) {
  var popups = popupArray || [];
  var currentPopup = null;

  return {
    add: function(items) {
      if ( items && items instanceof Array && items[0] instanceof Popup) {
        popups.concat(items);
      } else if (items && items instanceof Popup) {
        popups.push(items);
      } else {
        throw "PopupManager.add : Unacceptable object. Should be arrayof Popup or one Popup";
      }
    },
    currentPopup: function() { return currentPopup; },
    show: function(id) {
      if(currentPopup) { currentPopup.close(); }

      if (id != "") {
        currentPopup = popups.filter(function(d){ return d.id == id; })[0];
        currentPopup.open();
      }
    },
    hide: function() {
      if (currentPopup) {
        currentPopup.close();
        currentPopup = null;
      }
    }
  }
}
