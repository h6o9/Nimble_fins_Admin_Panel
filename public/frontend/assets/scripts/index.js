// Easy Responsive Tabs Plugin
// Author: Samson.Onna <Email : samson3d@gmail.com>
(function ($) {
  $.fn.extend({
    easyResponsiveTabs: function (options) {
      //Set the default values, use comma to separate the settings, example:
      var defaults = {
        type: "default", //default, vertical, accordion;
        width: "auto",
        fit: false,
        closed: false,
        activate: function () {},
      };
      //Variables
      var options = $.extend(defaults, options);
      var opt = options,
        jtype = opt.type,
        jfit = opt.fit,
        jwidth = opt.width,
        vtabs = "vertical",
        accord = "accordion";
      var hash = window.location.hash;
      var historyApi = !!(window.history && history.replaceState);

      //Events
      $(this).bind("tabactivate", function (e, currentTab) {
        if (typeof options.activate === "function") {
          options.activate.call(currentTab, e);
        }
      });

      //Main function
      this.each(function () {
        var $respTabs = $(this);
        var $respTabsList = $respTabs.find("ul.resp-tabs-list");
        var respTabsId = $respTabs.attr("id");
        $respTabs.find("ul.resp-tabs-list li").addClass("resp-tab-item");
        //                $respTabs.css({
        //                    'display': 'block',
        //                    'width': jwidth
        //                });

        $respTabs
          .find(".resp-tabs-container > div")
          .addClass("resp-tab-content");
        jtab_options();
        //Properties Function
        function jtab_options() {
          if (jtype == vtabs) {
            $respTabs.addClass("resp-vtabs");
          }
          if (jfit == true) {
            $respTabs.css({
              width: "100%",
              margin: "0px",
            });
          }
          if (jtype == accord) {
            $respTabs.addClass("resp-easy-accordion");
            $respTabs.find(".resp-tabs-list").css("display", "none");
          }
        }

        //Assigning the h2 markup to accordion title
        var $tabItemh2;
        $respTabs
          .find(".resp-tab-content")
          .before("<div class='resp-accordion accordion' role='tab'></div>");

        var itemCount = 0;
        $respTabs.find(".resp-accordion").each(function () {
          $tabItemh2 = $(this);
          var $tabItem = $respTabs.find(".resp-tab-item:eq(" + itemCount + ")");
          var $accItem = $respTabs.find(
            ".resp-accordion:eq(" + itemCount + ")"
          );
          $accItem.append($tabItem.html());
          $accItem.data($tabItem.data());
          $tabItemh2.attr("aria-controls", "tab_item-" + itemCount);
          itemCount++;
        });

        //Assigning the 'aria-controls' to Tab items
        var count = 0,
          $tabContent;
        $respTabs.find(".resp-tab-item").each(function () {
          $tabItem = $(this);
          $tabItem.attr("aria-controls", "tab_item-" + count);
          $tabItem.attr("role", "tab");

          //Assigning the 'aria-labelledby' attr to tab-content
          var tabcount = 0;
          $respTabs.find(".resp-tab-content").each(function () {
            $tabContent = $(this);
            $tabContent.attr("aria-labelledby", "tab_item-" + tabcount);
            tabcount++;
          });
          count++;
        });

        // Show correct content area
        var tabNum = 0;
        if (hash != "") {
          var matches = hash.match(new RegExp(respTabsId + "([0-9]+)"));
          if (matches !== null && matches.length === 2) {
            tabNum = parseInt(matches[1], 10) - 1;
            if (tabNum > count) {
              tabNum = 0;
            }
          }
        }

        //Active correct tab
        $($respTabs.find(".resp-tab-item")[tabNum]).addClass("resp-tab-active");

        //keep closed if option = 'closed' or option is 'accordion' and the element is in accordion mode
        if (
          options.closed !== true &&
          !(options.closed === "accordion" && !$respTabsList.is(":visible")) &&
          !(options.closed === "tabs" && $respTabsList.is(":visible"))
        ) {
          $($respTabs.find(".resp-accordion")[tabNum]).addClass(
            "resp-tab-active"
          );
          $($respTabs.find(".resp-tab-content")[tabNum])
            .addClass("resp-tab-content-active")
            .attr("style", "display:block");
        }
        //assign proper classes for when tabs mode is activated before making a selection in accordion mode
        else {
          $($respTabs.find(".resp-tab-content")[tabNum]).addClass(
            "resp-tab-content-active resp-accordion-closed"
          );
        }

        //Tab Click action function
        $respTabs.find("[role=tab]").each(function () {
          var $currentTab = $(this);
          $currentTab.click(function () {
            var $currentTab = $(this);
            var $tabAria = $currentTab.attr("aria-controls");

            if (
              $currentTab.hasClass("resp-accordion") &&
              $currentTab.hasClass("resp-tab-active")
            ) {
              $respTabs
                .find(".resp-tab-content-active")
                .slideUp("", function () {
                  $(this).addClass("resp-accordion-closed");
                });
              $currentTab.removeClass("resp-tab-active");
              return false;
            }
            if (
              !$currentTab.hasClass("resp-tab-active") &&
              $currentTab.hasClass("resp-accordion")
            ) {
              $respTabs.find(".resp-tab-active").removeClass("resp-tab-active");
              $respTabs
                .find(".resp-tab-content-active")
                .slideUp()
                .removeClass("resp-tab-content-active resp-accordion-closed");
              $respTabs
                .find("[aria-controls=" + $tabAria + "]")
                .addClass("resp-tab-active");

              $respTabs
                .find(".resp-tab-content[aria-labelledby = " + $tabAria + "]")
                .slideDown()
                .addClass("resp-tab-content-active");
            } else {
              $respTabs.find(".resp-tab-active").removeClass("resp-tab-active");
              $respTabs
                .find(".resp-tab-content-active")
                .removeAttr("style")
                .removeClass("resp-tab-content-active")
                .removeClass("resp-accordion-closed");
              $respTabs
                .find("[aria-controls=" + $tabAria + "]")
                .addClass("resp-tab-active");
              $respTabs
                .find(".resp-tab-content[aria-labelledby = " + $tabAria + "]")
                .addClass("resp-tab-content-active")
                .attr("style", "display:block");
            }
            //Trigger tab activation event
            $currentTab.trigger("tabactivate", $currentTab);

            //Update Browser History
            if (historyApi) {
              var currentHash = window.location.hash;
              var newHash =
                respTabsId +
                (parseInt($tabAria.substring(9), 10) + 1).toString();
              if (currentHash != "") {
                var re = new RegExp(respTabsId + "[0-9]+");
                if (currentHash.match(re) != null) {
                  newHash = currentHash.replace(re, newHash);
                } else {
                  newHash = currentHash + "|" + newHash;
                }
              } else {
                newHash = "#" + newHash;
              }

              history.replaceState(null, null, newHash);
            }
          });
        });

        //Window resize function
        $(window).resize(function () {
          $respTabs.find(".resp-accordion-closed").removeAttr("style");
        });
      });
    },
  });
})(jQuery);

(function () {
  "use strict";
  var f,
    g = [];

  function l(a) {
    g.push(a);
    1 == g.length && f();
  }

  function m() {
    for (; g.length; ) g[0](), g.shift();
  }
  f = function () {
    setTimeout(m);
  };

  function n(a) {
    this.a = p;
    this.b = void 0;
    this.f = [];
    var b = this;
    try {
      a(
        function (a) {
          q(b, a);
        },
        function (a) {
          r(b, a);
        }
      );
    } catch (c) {
      r(b, c);
    }
  }
  var p = 2;

  function t(a) {
    return new n(function (b, c) {
      c(a);
    });
  }

  function u(a) {
    return new n(function (b) {
      b(a);
    });
  }

  function q(a, b) {
    if (a.a == p) {
      if (b == a) throw new TypeError();
      var c = !1;
      try {
        var d = b && b.then;
        if (null != b && "object" == typeof b && "function" == typeof d) {
          d.call(
            b,
            function (b) {
              c || q(a, b);
              c = !0;
            },
            function (b) {
              c || r(a, b);
              c = !0;
            }
          );
          return;
        }
      } catch (e) {
        c || r(a, e);
        return;
      }
      a.a = 0;
      a.b = b;
      v(a);
    }
  }

  function r(a, b) {
    if (a.a == p) {
      if (b == a) throw new TypeError();
      a.a = 1;
      a.b = b;
      v(a);
    }
  }

  function v(a) {
    l(function () {
      if (a.a != p)
        for (; a.f.length; ) {
          var b = a.f.shift(),
            c = b[0],
            d = b[1],
            e = b[2],
            b = b[3];
          try {
            0 == a.a
              ? "function" == typeof c
                ? e(c.call(void 0, a.b))
                : e(a.b)
              : 1 == a.a &&
                ("function" == typeof d ? e(d.call(void 0, a.b)) : b(a.b));
          } catch (h) {
            b(h);
          }
        }
    });
  }
  n.prototype.g = function (a) {
    return this.c(void 0, a);
  };
  n.prototype.c = function (a, b) {
    var c = this;
    return new n(function (d, e) {
      c.f.push([a, b, d, e]);
      v(c);
    });
  };

  function w(a) {
    return new n(function (b, c) {
      function d(c) {
        return function (d) {
          h[c] = d;
          e += 1;
          e == a.length && b(h);
        };
      }
      var e = 0,
        h = [];
      0 == a.length && b(h);
      for (var k = 0; k < a.length; k += 1) u(a[k]).c(d(k), c);
    });
  }

  function x(a) {
    return new n(function (b, c) {
      for (var d = 0; d < a.length; d += 1) u(a[d]).c(b, c);
    });
  }
  window.Promise ||
    ((window.Promise = n),
    (window.Promise.resolve = u),
    (window.Promise.reject = t),
    (window.Promise.race = x),
    (window.Promise.all = w),
    (window.Promise.prototype.then = n.prototype.c),
    (window.Promise.prototype["catch"] = n.prototype.g));
})();

(function () {
  function l(a, b) {
    document.addEventListener
      ? a.addEventListener("scroll", b, !1)
      : a.attachEvent("scroll", b);
  }

  function m(a) {
    document.body
      ? a()
      : document.addEventListener
      ? document.addEventListener("DOMContentLoaded", function c() {
          document.removeEventListener("DOMContentLoaded", c);
          a();
        })
      : document.attachEvent("onreadystatechange", function k() {
          if (
            "interactive" == document.readyState ||
            "complete" == document.readyState
          )
            document.detachEvent("onreadystatechange", k), a();
        });
  }

  function q(a) {
    this.a = document.createElement("div");
    this.a.setAttribute("aria-hidden", "true");
    this.a.appendChild(document.createTextNode(a));
    this.b = document.createElement("span");
    this.c = document.createElement("span");
    this.h = document.createElement("span");
    this.f = document.createElement("span");
    this.g = -1;
    this.b.style.cssText =
      "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
    this.c.style.cssText =
      "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
    this.f.style.cssText =
      "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
    this.h.style.cssText =
      "display:inline-block;width:200%;height:200%;font-size:16px;max-width:none;";
    this.b.appendChild(this.h);
    this.c.appendChild(this.f);
    this.a.appendChild(this.b);
    this.a.appendChild(this.c);
  }

  function w(a, b) {
    a.a.style.cssText =
      "max-width:none;min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;left:-999px;white-space:nowrap;font:" +
      b +
      ";";
  }

  function x(a) {
    var b = a.a.offsetWidth,
      c = b + 100;
    a.f.style.width = c + "px";
    a.c.scrollLeft = c;
    a.b.scrollLeft = a.b.scrollWidth + 100;
    return a.g !== b ? ((a.g = b), !0) : !1;
  }

  function z(a, b) {
    function c() {
      var a = k;
      x(a) && null !== a.a.parentNode && b(a.g);
    }
    var k = a;
    l(a.b, c);
    l(a.c, c);
    x(a);
  }

  function A(a, b) {
    var c = b || {};
    this.family = a;
    this.style = c.style || "normal";
    this.weight = c.weight || "normal";
    this.stretch = c.stretch || "normal";
  }
  var B = null,
    C = null,
    D = null;

  function H() {
    if (null === C) {
      var a = document.createElement("div");
      try {
        a.style.font = "condensed 100px sans-serif";
      } catch (b) {}
      C = "" !== a.style.font;
    }
    return C;
  }

  function I(a, b) {
    return [a.style, a.weight, H() ? a.stretch : "", "100px", b].join(" ");
  }
  A.prototype.load = function (a, b) {
    var c = this,
      k = a || "BESbswy",
      y = b || 3e3,
      E = new Date().getTime();
    return new Promise(function (a, b) {
      null === D && (D = !!window.FontFace);
      if (D) {
        var J = new Promise(function (a, b) {
            function e() {
              new Date().getTime() - E >= y
                ? b()
                : document.fonts.load(I(c, c.family), k).then(
                    function (c) {
                      1 <= c.length ? a() : setTimeout(e, 25);
                    },
                    function () {
                      b();
                    }
                  );
            }
            e();
          }),
          K = new Promise(function (a, c) {
            setTimeout(c, y);
          });
        Promise.race([K, J]).then(
          function () {
            a(c);
          },
          function () {
            b(c);
          }
        );
      } else
        m(function () {
          function r() {
            var b;
            if (
              (b =
                (-1 != f && -1 != g) ||
                (-1 != f && -1 != h) ||
                (-1 != g && -1 != h))
            )
              (b = f != g && f != h && g != h) ||
                (null === B &&
                  ((b = /AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(
                    window.navigator.userAgent
                  )),
                  (B =
                    !!b &&
                    (536 > parseInt(b[1], 10) ||
                      (536 === parseInt(b[1], 10) &&
                        11 >= parseInt(b[2], 10))))),
                (b =
                  B &&
                  ((f == t && g == t && h == t) ||
                    (f == u && g == u && h == u) ||
                    (f == v && g == v && h == v)))),
                (b = !b);
            b &&
              (null !== d.parentNode && d.parentNode.removeChild(d),
              clearTimeout(G),
              a(c));
          }

          function F() {
            if (new Date().getTime() - E >= y)
              null !== d.parentNode && d.parentNode.removeChild(d), b(c);
            else {
              var a = document.hidden;
              if (!0 === a || void 0 === a)
                (f = e.a.offsetWidth),
                  (g = n.a.offsetWidth),
                  (h = p.a.offsetWidth),
                  r();
              G = setTimeout(F, 50);
            }
          }
          var e = new q(k),
            n = new q(k),
            p = new q(k),
            f = -1,
            g = -1,
            h = -1,
            t = -1,
            u = -1,
            v = -1,
            d = document.createElement("div"),
            G = 0;
          d.dir = "ltr";
          w(e, I(c, "sans-serif"));
          w(n, I(c, "serif"));
          w(p, I(c, "monospace"));
          d.appendChild(e.a);
          d.appendChild(n.a);
          d.appendChild(p.a);
          document.body.appendChild(d);
          t = e.a.offsetWidth;
          u = n.a.offsetWidth;
          v = p.a.offsetWidth;
          F();
          z(e, function (a) {
            f = a;
            r();
          });
          w(e, I(c, '"' + c.family + '",sans-serif'));
          z(n, function (a) {
            g = a;
            r();
          });
          w(n, I(c, '"' + c.family + '",serif'));
          z(p, function (a) {
            h = a;
            r();
          });
          w(p, I(c, '"' + c.family + '",monospace'));
        });
    });
  };
  "undefined" !== typeof module
    ? (module.exports = A)
    : ((window.FontFaceObserver = A),
      (window.FontFaceObserver.prototype.load = A.prototype.load));
})();

/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - http://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {
  window.vp = window.vp || {};

  $(document).ready(function () {
    var html = document.getElementsByTagName("html")[0];

    // Uses https://fontfaceobserver.com/
    // And the "Optimize for caching" pattern here https://www.bramstein.com/writing/web-font-loading-patterns.html
    if (!localStorage.vpFontsLoaded) {
      var font = new FontFaceObserver("Source Sans Pro");
      font.load().then(
        function () {
          html.classList.add("fonts-loaded");
          localStorage.vpFontsLoaded = true;
        },
        function () {
          html.classList.remove("fonts-loaded");
          localStorage.vpFontsLoaded = false;
        }
      );
    }

    function showTooltip() {
      $(this).siblings(".Tooltip--root").show();
      $("body").on("click", hideTooltip);
    }

    function hideTooltip() {
      $(".Tooltip--root").hide();
      $("body").off("click", hideTooltip);
    }

    $("body").on("click", ".advertiser-disclosure > a", showTooltip);
    $("body").on("click", ".AdvertiserDisclosure--link", showTooltip);

    $("body").on("click", ".input-toggle", function () {
      $(this).parent().toggleClass("isOpen");
    });

    vp_track_event("click", true);

    (function () {
      function eventTrigger(eventName) {
        var customEvent = new CustomEvent(eventName);
        window.dispatchEvent(customEvent);
      }

      function eventListen(eventName, callback) {
        window.addEventListener(eventName, callback);
      }

      vp.events = {
        trigger: eventTrigger,
        listen: eventListen,
      };
    })();

    (function scrollToPagination() {
      var params = getQueryParams();
      if ("page" in params) {
        setTimeout(function () {
          window.location.hash = "#paginated-section";
        }, 250);
      }
    })();
  });

  function vp_track_event(event, debug) {
    if ((typeof ga != "undefined" && ga) || debug) {
      jQuery(".js-event-" + event).on(event, function () {
        var event_target = jQuery(this);
        var _event_action = event;
        var _event_category = event_target.text();
        var _event_label = event_target.attr("href") || "";
        var event_action = event_target.data("eventaction") || _event_action;
        var event_category =
          event_target.data("eventcategory") || _event_category;
        var event_label = event_target.data("eventlabel") || _event_label;
        var event_object = {
          hitType: "event",
          eventCategory: event_category,
          eventAction: event_action,
          eventLabel: event_label,
        };
        if (debug) {
          console.log(event_object);
        }
        if (typeof ga != "undefined" && ga) {
          ga("send", event_object);
        }
      });
    }
  }
})(jQuery, Drupal, this, this.document);

// Cookie Functions, from http://www.quirksmode.org/js/cookies.html
function createCookie(name, value, days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    var expires = "; expires=" + date.toGMTString();
  } else var expires = "";
  document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}

function eraseCookie(name) {
  createCookie(name, "", -1);
}

// Get Query Params
function getQueryParams() {
  var querystring = window.location.search.slice(1);
  var pairs = querystring.split("&");
  var params = {};
  for (i = 0; i < pairs.length; ++i) {
    var keyval = pairs[i].split("=");
    params[keyval[0]] = keyval[1];
  }
  return params;
}

/*! loadCSS: load a CSS file asynchronously. [c]2016 @scottjehl, Filament Group, Inc. Licensed MIT */
// https://github.com/filamentgroup/loadCSS
(function (w) {
  "use strict";
  /* exported loadCSS */
  var loadCSS = function (href, before, media) {
    // Arguments explained:
    // `href` [REQUIRED] is the URL for your CSS file.
    // `before` [OPTIONAL] is the element the script should use as a reference for injecting our stylesheet <link> before
    // By default, loadCSS attempts to inject the link after the last stylesheet or script in the DOM. However, you might desire a more specific location in your document.
    // `media` [OPTIONAL] is the media type or query of the stylesheet. By default it will be 'all'
    var doc = w.document;
    var ss = doc.createElement("link");
    var ref;
    if (before) {
      ref = before;
    } else {
      var refs = (doc.body || doc.getElementsByTagName("head")[0]).childNodes;
      ref = refs[refs.length - 1];
    }

    var sheets = doc.styleSheets;
    ss.rel = "stylesheet";
    ss.href = href;
    // temporarily set media to something inapplicable to ensure it'll fetch without blocking render
    ss.media = "only x";

    // wait until body is defined before injecting link. This ensures a non-blocking load in IE11.
    function ready(cb) {
      if (doc.body) {
        return cb();
      }
      setTimeout(function () {
        ready(cb);
      });
    }

    // Inject link
    // Note: the ternary preserves the existing behavior of "before" argument, but we could choose to change the argument to "after" in a later release and standardize on ref.nextSibling for all refs
    // Note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
    ready(function () {
      ref.parentNode.insertBefore(ss, before ? ref : ref.nextSibling);
    });
    // A method (exposed on return object for external use) that mimics onload by polling document.styleSheets until it includes the new sheet.
    var onloadcssdefined = function (cb) {
      var resolvedHref = ss.href;
      var i = sheets.length;
      while (i--) {
        if (sheets[i].href === resolvedHref) {
          return cb();
        }
      }
      setTimeout(function () {
        onloadcssdefined(cb);
      });
    };

    function loadCB() {
      if (ss.addEventListener) {
        ss.removeEventListener("load", loadCB);
      }
      ss.media = media || "all";
    }

    // once loaded, set link's media back to `all` so that the stylesheet applies once it loads
    if (ss.addEventListener) {
      ss.addEventListener("load", loadCB);
    }
    ss.onloadcssdefined = onloadcssdefined;
    onloadcssdefined(loadCB);
    return ss;
  };
  // commonjs
  if (typeof exports !== "undefined") {
    exports.loadCSS = loadCSS;
  } else {
    w.loadCSS = loadCSS;
  }
})(typeof global !== "undefined" ? global : this);

/**
 * CustomEvent Polyfill
 * https://developer.mozilla.org/en-US/docs/Web/API/CustomEvent/CustomEvent
 */
(function () {
  if (typeof window.CustomEvent === "function") return false;

  function CustomEvent(event, params) {
    params = params || {
      bubbles: false,
      cancelable: false,
      detail: undefined,
    };
    var evt = document.createEvent("CustomEvent");
    evt.initCustomEvent(
      event,
      params.bubbles,
      params.cancelable,
      params.detail
    );
    return evt;
  }

  CustomEvent.prototype = window.Event.prototype;

  window.CustomEvent = CustomEvent;
})();

/*! CSS rel=preload polyfill. Depends on loadCSS function. [c]2016 @scottjehl, Filament Group, Inc. Licensed MIT  */
(function (w) {
  // rel=preload support test
  if (!w.loadCSS) {
    return;
  }
  var rp = (loadCSS.relpreload = {});
  rp.support = function () {
    try {
      return w.document.createElement("link").relList.supports("preload");
    } catch (e) {
      return false;
    }
  };

  // loop preload links and fetch using loadCSS
  rp.poly = function () {
    var links = w.document.getElementsByTagName("link");
    for (var i = 0; i < links.length; i++) {
      var link = links[i];
      if (link.rel === "preload" && link.getAttribute("as") === "style") {
        w.loadCSS(link.href, link);
        link.rel = null;
      }
    }
  };

  // if link[rel=preload] is not supported, we must fetch the CSS manually using loadCSS
  if (!rp.support()) {
    rp.poly();
    var run = w.setInterval(rp.poly, 300);
    if (w.addEventListener) {
      w.addEventListener("load", function () {
        w.clearInterval(run);
      });
    }
    if (w.attachEvent) {
      w.attachEvent("onload", function () {
        w.clearInterval(run);
      });
    }
  }
})(this);

var Drupal = Drupal || {
  settings: {},
  behaviors: {},
  locale: {},
};

// Allow other JavaScript libraries to use $.
jQuery.noConflict();

(function ($) {
  /**
   * Override jQuery.fn.init to guard against XSS attacks.
   *
   * See http://bugs.jquery.com/ticket/9521
   */
  var jquery_init = $.fn.init;
  $.fn.init = function (selector, context, rootjQuery) {
    // If the string contains a "#" before a "<", treat it as invalid HTML.
    if (selector && typeof selector === "string") {
      var hash_position = selector.indexOf("#");
      if (hash_position >= 0) {
        var bracket_position = selector.indexOf("<");
        if (bracket_position > hash_position) {
          throw "Syntax error, unrecognized expression: " + selector;
        }
      }
    }
    return jquery_init.call(this, selector, context, rootjQuery);
  };
  $.fn.init.prototype = jquery_init.prototype;

  /**
   * Pre-filter Ajax requests to guard against XSS attacks.
   *
   * See https://github.com/jquery/jquery/issues/2432
   */
  if ($.ajaxPrefilter) {
    // For newer versions of jQuery, use an Ajax prefilter to prevent
    // auto-executing script tags from untrusted domains. This is similar to the
    // fix that is built in to jQuery 3.0 and higher.
    $.ajaxPrefilter(function (s) {
      if (s.crossDomain) {
        s.contents.script = false;
      }
    });
  } else if ($.httpData) {
    // For the version of jQuery that ships with Drupal core, override
    // jQuery.httpData to prevent auto-detecting "script" data types from
    // untrusted domains.
    var jquery_httpData = $.httpData;
    $.httpData = function (xhr, type, s) {
      // @todo Consider backporting code from newer jQuery versions to check for
      //   a cross-domain request here, rather than using Drupal.urlIsLocal() to
      //   block scripts from all URLs that are not on the same site.
      if (!type && !Drupal.urlIsLocal(s.url)) {
        var content_type = xhr.getResponseHeader("content-type") || "";
        if (content_type.indexOf("javascript") >= 0) {
          // Default to a safe data type.
          type = "text";
        }
      }
      return jquery_httpData.call(this, xhr, type, s);
    };
    $.httpData.prototype = jquery_httpData.prototype;
  }

  /**
   * Attach all registered behaviors to a page element.
   *
   * Behaviors are event-triggered actions that attach to page elements, enhancing
   * default non-JavaScript UIs. Behaviors are registered in the Drupal.behaviors
   * object using the method 'attach' and optionally also 'detach' as follows:
   * @code
   *    Drupal.behaviors.behaviorName = {
   *      attach: function (context, settings) {
   *        ...
   *      },
   *      detach: function (context, settings, trigger) {
   *        ...
   *      }
   *    };
   * @endcode
   *
   * Drupal.attachBehaviors is added below to the jQuery ready event and so
   * runs on initial page load. Developers implementing AHAH/Ajax in their
   * solutions should also call this function after new page content has been
   * loaded, feeding in an element to be processed, in order to attach all
   * behaviors to the new content.
   *
   * Behaviors should use
   * @code
   *   $(selector).once('behavior-name', function () {
   *     ...
   *   });
   * @endcode
   * to ensure the behavior is attached only once to a given element. (Doing so
   * enables the reprocessing of given elements, which may be needed on occasion
   * despite the ability to limit behavior attachment to a particular element.)
   *
   * @param context
   *   An element to attach behaviors to. If none is given, the document element
   *   is used.
   * @param settings
   *   An object containing settings for the current context. If none given, the
   *   global Drupal.settings object is used.
   */
  Drupal.attachBehaviors = function (context, settings) {
    context = context || document;
    settings = settings || Drupal.settings;
    // Execute all of them.
    $.each(Drupal.behaviors, function () {
      if ($.isFunction(this.attach)) {
        this.attach(context, settings);
      }
    });
  };

  /**
   * Detach registered behaviors from a page element.
   *
   * Developers implementing AHAH/Ajax in their solutions should call this
   * function before page content is about to be removed, feeding in an element
   * to be processed, in order to allow special behaviors to detach from the
   * content.
   *
   * Such implementations should look for the class name that was added in their
   * corresponding Drupal.behaviors.behaviorName.attach implementation, i.e.
   * behaviorName-processed, to ensure the behavior is detached only from
   * previously processed elements.
   *
   * @param context
   *   An element to detach behaviors from. If none is given, the document element
   *   is used.
   * @param settings
   *   An object containing settings for the current context. If none given, the
   *   global Drupal.settings object is used.
   * @param trigger
   *   A string containing what's causing the behaviors to be detached. The
   *   possible triggers are:
   *   - unload: (default) The context element is being removed from the DOM.
   *   - move: The element is about to be moved within the DOM (for example,
   *     during a tabledrag row swap). After the move is completed,
   *     Drupal.attachBehaviors() is called, so that the behavior can undo
   *     whatever it did in response to the move. Many behaviors won't need to
   *     do anything simply in response to the element being moved, but because
   *     IFRAME elements reload their "src" when being moved within the DOM,
   *     behaviors bound to IFRAME elements (like WYSIWYG editors) may need to
   *     take some action.
   *   - serialize: When an Ajax form is submitted, this is called with the
   *     form as the context. This provides every behavior within the form an
   *     opportunity to ensure that the field elements have correct content
   *     in them before the form is serialized. The canonical use-case is so
   *     that WYSIWYG editors can update the hidden textarea to which they are
   *     bound.
   *
   * @see Drupal.attachBehaviors
   */
  Drupal.detachBehaviors = function (context, settings, trigger) {
    context = context || document;
    settings = settings || Drupal.settings;
    trigger = trigger || "unload";
    // Execute all of them.
    $.each(Drupal.behaviors, function () {
      if ($.isFunction(this.detach)) {
        this.detach(context, settings, trigger);
      }
    });
  };

  /**
   * Encode special characters in a plain-text string for display as HTML.
   *
   * @ingroup sanitization
   */
  Drupal.checkPlain = function (str) {
    var character,
      regex,
      replace = {
        "&": "&amp;",
        "'": "&#39;",
        '"': "&quot;",
        "<": "&lt;",
        ">": "&gt;",
      };
    str = String(str);
    for (character in replace) {
      if (replace.hasOwnProperty(character)) {
        regex = new RegExp(character, "g");
        str = str.replace(regex, replace[character]);
      }
    }
    return str;
  };

  /**
   * Replace placeholders with sanitized values in a string.
   *
   * @param str
   *   A string with placeholders.
   * @param args
   *   An object of replacements pairs to make. Incidences of any key in this
   *   array are replaced with the corresponding value. Based on the first
   *   character of the key, the value is escaped and/or themed:
   *    - !variable: inserted as is
   *    - @variable: escape plain text to HTML (Drupal.checkPlain)
   *    - %variable: escape text and theme as a placeholder for user-submitted
   *      content (checkPlain + Drupal.theme('placeholder'))
   *
   * @see Drupal.t()
   * @ingroup sanitization
   */
  Drupal.formatString = function (str, args) {
    // Transform arguments before inserting them.
    for (var key in args) {
      if (args.hasOwnProperty(key)) {
        switch (key.charAt(0)) {
          // Escaped only.
          case "@":
            args[key] = Drupal.checkPlain(args[key]);
            break;
          // Pass-through.
          case "!":
            break;
          // Escaped and placeholder.
          default:
            args[key] = Drupal.theme("placeholder", args[key]);
            break;
        }
      }
    }

    return Drupal.stringReplace(str, args, null);
  };

  /**
   * Replace substring.
   *
   * The longest keys will be tried first. Once a substring has been replaced,
   * its new value will not be searched again.
   *
   * @param {String} str
   *   A string with placeholders.
   * @param {Object} args
   *   Key-value pairs.
   * @param {Array|null} keys
   *   Array of keys from the "args".  Internal use only.
   *
   * @return {String}
   *   Returns the replaced string.
   */
  Drupal.stringReplace = function (str, args, keys) {
    if (str.length === 0) {
      return str;
    }

    // If the array of keys is not passed then collect the keys from the args.
    if (!$.isArray(keys)) {
      keys = [];
      for (var k in args) {
        if (args.hasOwnProperty(k)) {
          keys.push(k);
        }
      }

      // Order the keys by the character length. The shortest one is the first.
      keys.sort(function (a, b) {
        return a.length - b.length;
      });
    }

    if (keys.length === 0) {
      return str;
    }

    // Take next longest one from the end.
    var key = keys.pop();
    var fragments = str.split(key);

    if (keys.length) {
      for (var i = 0; i < fragments.length; i++) {
        // Process each fragment with a copy of remaining keys.
        fragments[i] = Drupal.stringReplace(fragments[i], args, keys.slice(0));
      }
    }

    return fragments.join(args[key]);
  };

  /**
   * Translate strings to the page language or a given language.
   *
   * See the documentation of the server-side t() function for further details.
   *
   * @param str
   *   A string containing the English string to translate.
   * @param args
   *   An object of replacements pairs to make after translation. Incidences
   *   of any key in this array are replaced with the corresponding value.
   *   See Drupal.formatString().
   *
   * @param options
   *   - 'context' (defaults to the empty context): The context the source string
   *     belongs to.
   *
   * @return
   *   The translated string.
   */
  Drupal.t = function (str, args, options) {
    options = options || {};
    options.context = options.context || "";

    // Fetch the localized version of the string.
    if (
      Drupal.locale.strings &&
      Drupal.locale.strings[options.context] &&
      Drupal.locale.strings[options.context][str]
    ) {
      str = Drupal.locale.strings[options.context][str];
    }

    if (args) {
      str = Drupal.formatString(str, args);
    }
    return str;
  };

  /**
   * Format a string containing a count of items.
   *
   * This function ensures that the string is pluralized correctly. Since Drupal.t() is
   * called by this function, make sure not to pass already-localized strings to it.
   *
   * See the documentation of the server-side format_plural() function for further details.
   *
   * @param count
   *   The item count to display.
   * @param singular
   *   The string for the singular case. Please make sure it is clear this is
   *   singular, to ease translation (e.g. use "1 new comment" instead of "1 new").
   *   Do not use @count in the singular string.
   * @param plural
   *   The string for the plural case. Please make sure it is clear this is plural,
   *   to ease translation. Use @count in place of the item count, as in "@count
   *   new comments".
   * @param args
   *   An object of replacements pairs to make after translation. Incidences
   *   of any key in this array are replaced with the corresponding value.
   *   See Drupal.formatString().
   *   Note that you do not need to include @count in this array.
   *   This replacement is done automatically for the plural case.
   * @param options
   *   The options to pass to the Drupal.t() function.
   * @return
   *   A translated string.
   */
  Drupal.formatPlural = function (count, singular, plural, args, options) {
    args = args || {};
    args["@count"] = count;
    // Determine the index of the plural form.
    var index = Drupal.locale.pluralFormula
      ? Drupal.locale.pluralFormula(args["@count"])
      : args["@count"] == 1
      ? 0
      : 1;

    if (index == 0) {
      return Drupal.t(singular, args, options);
    } else if (index == 1) {
      return Drupal.t(plural, args, options);
    } else {
      args["@count[" + index + "]"] = args["@count"];
      delete args["@count"];
      return Drupal.t(
        plural.replace("@count", "@count[" + index + "]"),
        args,
        options
      );
    }
  };

  /**
   * Returns the passed in URL as an absolute URL.
   *
   * @param url
   *   The URL string to be normalized to an absolute URL.
   *
   * @return
   *   The normalized, absolute URL.
   *
   * @see https://github.com/angular/angular.js/blob/v1.4.4/src/ng/urlUtils.js
   * @see https://grack.com/blog/2009/11/17/absolutizing-url-in-javascript
   * @see https://github.com/jquery/jquery-ui/blob/1.11.4/ui/tabs.js#L53
   */
  Drupal.absoluteUrl = function (url) {
    var urlParsingNode = document.createElement("a");

    // Decode the URL first; this is required by IE <= 6. Decoding non-UTF-8
    // strings may throw an exception.
    try {
      url = decodeURIComponent(url);
    } catch (e) {}

    urlParsingNode.setAttribute("href", url);

    // IE <= 7 normalizes the URL when assigned to the anchor node similar to
    // the other browsers.
    return urlParsingNode.cloneNode(false).href;
  };

  /**
   * Returns true if the URL is within Drupal's base path.
   *
   * @param url
   *   The URL string to be tested.
   *
   * @return
   *   Boolean true if local.
   *
   * @see https://github.com/jquery/jquery-ui/blob/1.11.4/ui/tabs.js#L58
   */
  Drupal.urlIsLocal = function (url) {
    // Always use browser-derived absolute URLs in the comparison, to avoid
    // attempts to break out of the base path using directory traversal.
    var absoluteUrl = Drupal.absoluteUrl(url);
    var protocol = location.protocol;

    // Consider URLs that match this site's base URL but use HTTPS instead of HTTP
    // as local as well.
    if (protocol === "http:" && absoluteUrl.indexOf("https:") === 0) {
      protocol = "https:";
    }
    var baseUrl =
      protocol + "//" + location.host + Drupal.settings.basePath.slice(0, -1);

    // Decoding non-UTF-8 strings may throw an exception.
    try {
      absoluteUrl = decodeURIComponent(absoluteUrl);
    } catch (e) {}
    try {
      baseUrl = decodeURIComponent(baseUrl);
    } catch (e) {}

    // The given URL matches the site's base URL, or has a path under the site's
    // base URL.
    return absoluteUrl === baseUrl || absoluteUrl.indexOf(baseUrl + "/") === 0;
  };

  /**
   * Sanitizes a URL for use with jQuery.ajax().
   *
   * @param url
   *   The URL string to be sanitized.
   *
   * @return
   *   The sanitized URL.
   */
  Drupal.sanitizeAjaxUrl = function (url) {
    var regex = /\=\?(&|$)/;
    while (url.match(regex)) {
      url = url.replace(regex, "");
    }
    return url;
  };

  /**
   * Generate the themed representation of a Drupal object.
   *
   * All requests for themed output must go through this function. It examines
   * the request and routes it to the appropriate theme function. If the current
   * theme does not provide an override function, the generic theme function is
   * called.
   *
   * For example, to retrieve the HTML for text that should be emphasized and
   * displayed as a placeholder inside a sentence, call
   * Drupal.theme('placeholder', text).
   *
   * @param func
   *   The name of the theme function to call.
   * @param ...
   *   Additional arguments to pass along to the theme function.
   * @return
   *   Any data the theme function returns. This could be a plain HTML string,
   *   but also a complex object.
   */
  Drupal.theme = function (func) {
    var args = Array.prototype.slice.apply(arguments, [1]);

    return (Drupal.theme[func] || Drupal.theme.prototype[func]).apply(
      this,
      args
    );
  };

  /**
   * Freeze the current body height (as minimum height). Used to prevent
   * unnecessary upwards scrolling when doing DOM manipulations.
   */
  Drupal.freezeHeight = function () {
    Drupal.unfreezeHeight();
    $('<div id="freeze-height"></div>')
      .css({
        position: "absolute",
        top: "0px",
        left: "0px",
        width: "1px",
        height: $("body").css("height"),
      })
      .appendTo("body");
  };

  /**
   * Unfreeze the body height.
   */
  Drupal.unfreezeHeight = function () {
    $("#freeze-height").remove();
  };

  /**
   * Encodes a Drupal path for use in a URL.
   *
   * For aesthetic reasons slashes are not escaped.
   */
  Drupal.encodePath = function (item, uri) {
    uri = uri || location.href;
    return encodeURIComponent(item).replace(/%2F/g, "/");
  };

  /**
   * Get the text selection in a textarea.
   */
  Drupal.getSelection = function (element) {
    if (typeof element.selectionStart != "number" && document.selection) {
      // The current selection.
      var range1 = document.selection.createRange();
      var range2 = range1.duplicate();
      // Select all text.
      range2.moveToElementText(element);
      // Now move 'dummy' end point to end point of original range.
      range2.setEndPoint("EndToEnd", range1);
      // Now we can calculate start and end points.
      var start = range2.text.length - range1.text.length;
      var end = start + range1.text.length;
      return {
        start: start,
        end: end,
      };
    }
    return {
      start: element.selectionStart,
      end: element.selectionEnd,
    };
  };

  /**
   * Add a global variable which determines if the window is being unloaded.
   *
   * This is primarily used by Drupal.displayAjaxError().
   */
  Drupal.beforeUnloadCalled = false;
  $(window).bind("beforeunload pagehide", function () {
    Drupal.beforeUnloadCalled = true;
  });

  /**
   * Displays a JavaScript error from an Ajax response when appropriate to do so.
   */
  Drupal.displayAjaxError = function (message) {
    // Skip displaying the message if the user deliberately aborted (for example,
    // by reloading the page or navigating to a different page) while the Ajax
    // request was still ongoing. See, for example, the discussion at
    // http://stackoverflow.com/questions/699941/handle-ajax-error-when-a-user-clicks-refresh.
    if (!Drupal.beforeUnloadCalled) {
      alert(message);
    }
  };

  /**
   * Build an error message from an Ajax response.
   */
  Drupal.ajaxError = function (xmlhttp, uri, customMessage) {
    var statusCode, statusText, pathText, responseText, readyStateText, message;
    if (xmlhttp.status) {
      statusCode =
        "\n" +
        Drupal.t("An AJAX HTTP error occurred.") +
        "\n" +
        Drupal.t("HTTP Result Code: !status", {
          "!status": xmlhttp.status,
        });
    } else {
      statusCode =
        "\n" + Drupal.t("An AJAX HTTP request terminated abnormally.");
    }
    statusCode += "\n" + Drupal.t("Debugging information follows.");
    pathText =
      "\n" +
      Drupal.t("Path: !uri", {
        "!uri": uri,
      });
    statusText = "";
    // In some cases, when statusCode == 0, xmlhttp.statusText may not be defined.
    // Unfortunately, testing for it with typeof, etc, doesn't seem to catch that
    // and the test causes an exception. So we need to catch the exception here.
    try {
      statusText =
        "\n" +
        Drupal.t("StatusText: !statusText", {
          "!statusText": $.trim(xmlhttp.statusText),
        });
    } catch (e) {}

    responseText = "";
    // Again, we don't have a way to know for sure whether accessing
    // xmlhttp.responseText is going to throw an exception. So we'll catch it.
    try {
      responseText =
        "\n" +
        Drupal.t("ResponseText: !responseText", {
          "!responseText": $.trim(xmlhttp.responseText),
        });
    } catch (e) {}

    // Make the responseText more readable by stripping HTML tags and newlines.
    responseText = responseText.replace(/<("[^"]*"|'[^']*'|[^'">])*>/gi, "");
    responseText = responseText.replace(/[\n]+\s+/g, "\n");

    // We don't need readyState except for status == 0.
    readyStateText =
      xmlhttp.status == 0
        ? "\n" +
          Drupal.t("ReadyState: !readyState", {
            "!readyState": xmlhttp.readyState,
          })
        : "";

    // Additional message beyond what the xmlhttp object provides.
    customMessage = customMessage
      ? "\n" +
        Drupal.t("CustomMessage: !customMessage", {
          "!customMessage": customMessage,
        })
      : "";

    message =
      statusCode +
      pathText +
      statusText +
      customMessage +
      responseText +
      readyStateText;
    return message;
  };

  // Class indicating that JS is enabled; used for styling purpose.
  $("html").addClass("js");

  // 'js enabled' cookie.
  document.cookie = "has_js=1; path=/";

  /**
   * Additions to jQuery.support.
   */
  $(function () {
    /**
     * Boolean indicating whether or not position:fixed is supported.
     */
    if (jQuery.support.positionFixed === undefined) {
      var el = $('<div style="position:fixed; top:10px" />').appendTo(
        document.body
      );
      jQuery.support.positionFixed = el[0].offsetTop === 10;
      el.remove();
    }
  });

  //Attach all behaviors.
  $(function () {
    Drupal.attachBehaviors(document, Drupal.settings);
  });

  /**
   * The default themes.
   */
  Drupal.theme.prototype = {
    /**
     * Formats text for emphasized display in a placeholder inside a sentence.
     *
     * @param str
     *   The text to format (plain-text).
     * @return
     *   The formatted text (html).
     */
    placeholder: function (str) {
      return '<em class="placeholder">' + Drupal.checkPlain(str) + "</em>";
    },
  };
})(jQuery);

/**
 * For jQuery versions less than 3.4.0, this replaces the jQuery.extend
 * function with the one from jQuery 3.4.0, slightly modified (documented
 * below) to be compatible with older jQuery versions and browsers.
 *
 * This provides the Object.prototype pollution vulnerability fix to Drupal
 * installations running older jQuery versions, including the versions shipped
 * with Drupal core and https://www.drupal.org/project/jquery_update.
 *
 * @see https://github.com/jquery/jquery/pull/4333
 */

(function (jQuery) {
  // Do not override jQuery.extend() if the jQuery version is already >=3.4.0.
  var versionParts = jQuery.fn.jquery.split(".");
  var majorVersion = parseInt(versionParts[0]);
  var minorVersion = parseInt(versionParts[1]);
  var patchVersion = parseInt(versionParts[2]);
  var isPreReleaseVersion = patchVersion.toString() !== versionParts[2];
  if (
    majorVersion > 3 ||
    (majorVersion === 3 && minorVersion > 4) ||
    (majorVersion === 3 && minorVersion === 4 && patchVersion > 0) ||
    (majorVersion === 3 &&
      minorVersion === 4 &&
      patchVersion === 0 &&
      !isPreReleaseVersion)
  ) {
    return;
  }

  /**
   * This is almost verbatim copied from jQuery 3.4.0.
   *
   * Only two minor changes have been made:
   * - The call to isFunction() is changed to jQuery.isFunction().
   * - The two calls to Array.isArray() is changed to jQuery.isArray().
   *
   * The above two changes ensure compatibility with all older jQuery versions
   * (1.4.4 - 3.3.1) and older browser versions (e.g., IE8).
   */
  jQuery.extend = jQuery.fn.extend = function () {
    var options,
      name,
      src,
      copy,
      copyIsArray,
      clone,
      target = arguments[0] || {},
      i = 1,
      length = arguments.length,
      deep = false;

    // Handle a deep copy situation
    if (typeof target === "boolean") {
      deep = target;

      // Skip the boolean and the target
      target = arguments[i] || {};
      i++;
    }

    // Handle case when target is a string or something (possible in deep copy)
    if (typeof target !== "object" && !jQuery.isFunction(target)) {
      target = {};
    }

    // Extend jQuery itself if only one argument is passed
    if (i === length) {
      target = this;
      i--;
    }

    for (; i < length; i++) {
      // Only deal with non-null/undefined values
      if ((options = arguments[i]) != null) {
        // Extend the base object
        for (name in options) {
          copy = options[name];

          // Prevent Object.prototype pollution
          // Prevent never-ending loop
          if (name === "__proto__" || target === copy) {
            continue;
          }

          // Recurse if we're merging plain objects or arrays
          if (
            deep &&
            copy &&
            (jQuery.isPlainObject(copy) || (copyIsArray = jQuery.isArray(copy)))
          ) {
            src = target[name];

            // Ensure proper type for the source value
            if (copyIsArray && !jQuery.isArray(src)) {
              clone = [];
            } else if (!copyIsArray && !jQuery.isPlainObject(src)) {
              clone = {};
            } else {
              clone = src;
            }
            copyIsArray = false;

            // Never move original objects, clone them
            target[name] = jQuery.extend(deep, clone, copy);

            // Don't bring in undefined values
          } else if (copy !== undefined) {
            target[name] = copy;
          }
        }
      }
    }

    // Return the modified object
    return target;
  };
})(jQuery);

/**
 * For jQuery versions less than 3.5.0, this replaces the jQuery.htmlPrefilter()
 * function with one that fixes these security vulnerabilities while also
 * retaining the pre-3.5.0 behavior where it's safe to do so.
 * - https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2020-11022
 * - https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2020-11023
 *
 * Additionally, for jQuery versions that do not have a jQuery.htmlPrefilter()
 * function (1.x prior to 1.12 and 2.x prior to 2.2), this adds it, and
 * extends the functions that need to call it to do so.
 *
 * Drupal core's jQuery version is 1.4.4, but jQuery Update can provide a
 * different version, so this covers all versions between 1.4.4 and 3.4.1.
 * The GitHub links in the code comments below link to jQuery 1.5 code, because
 * 1.4.4 isn't on GitHub, but the referenced code didn't change from 1.4.4 to
 * 1.5.
 */

(function (jQuery) {
  // Parts of this backport differ by jQuery version.
  var versionParts = jQuery.fn.jquery.split(".");
  var majorVersion = parseInt(versionParts[0]);
  var minorVersion = parseInt(versionParts[1]);

  // No backport is needed if we're already on jQuery 3.5 or higher.
  if (majorVersion > 3 || (majorVersion === 3 && minorVersion >= 5)) {
    return;
  }

  // Prior to jQuery 3.5, jQuery converted XHTML-style self-closing tags to
  // their XML equivalent: e.g., "<div />" to "<div></div>". This is
  // problematic for several reasons, including that it's vulnerable to XSS
  // attacks. However, since this was jQuery's behavior for many years, many
  // Drupal modules and jQuery plugins may be relying on it. Therefore, we
  // preserve that behavior, but for a limited set of tags only, that we believe
  // to not be vulnerable. This is the set of HTML tags that satisfy all of the
  // following conditions:
  // - In DOMPurify's list of HTML tags. If an HTML tag isn't safe enough to
  //   appear in that list, then we don't want to mess with it here either.
  //   @see https://github.com/cure53/DOMPurify/blob/2.0.11/dist/purify.js#L128
  // - A normal element (not a void, template, text, or foreign element).
  //   @see https://html.spec.whatwg.org/multipage/syntax.html#elements-2
  // - An element that is still defined by the current HTML specification
  //   (not a deprecated element), because we do not want to rely on how
  //   browsers parse deprecated elements.
  //   @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element
  // - Not 'html', 'head', or 'body', because this pseudo-XHTML expansion is
  //   designed for fragments, not entire documents.
  // - Not 'colgroup', because due to an idiosyncrasy of jQuery's original
  //   regular expression, it didn't match on colgroup, and we don't want to
  //   introduce a behavior change for that.
  var selfClosingTagsToReplace = [
    "a",
    "abbr",
    "address",
    "article",
    "aside",
    "audio",
    "b",
    "bdi",
    "bdo",
    "blockquote",
    "button",
    "canvas",
    "caption",
    "cite",
    "code",
    "data",
    "datalist",
    "dd",
    "del",
    "details",
    "dfn",
    "div",
    "dl",
    "dt",
    "em",
    "fieldset",
    "figcaption",
    "figure",
    "footer",
    "form",
    "h1",
    "h2",
    "h3",
    "h4",
    "h5",
    "h6",
    "header",
    "hgroup",
    "i",
    "ins",
    "kbd",
    "label",
    "legend",
    "li",
    "main",
    "map",
    "mark",
    "menu",
    "meter",
    "nav",
    "ol",
    "optgroup",
    "option",
    "output",
    "p",
    "picture",
    "pre",
    "progress",
    "q",
    "rp",
    "rt",
    "ruby",
    "s",
    "samp",
    "section",
    "select",
    "small",
    "source",
    "span",
    "strong",
    "sub",
    "summary",
    "sup",
    "table",
    "tbody",
    "td",
    "tfoot",
    "th",
    "thead",
    "time",
    "tr",
    "u",
    "ul",
    "var",
    "video",
  ];

  // Define regular expressions for <TAG/> and <TAG ATTRIBUTES/>. Doing this as
  // two expressions makes it easier to target <a/> without also targeting
  // every tag that starts with "a".
  var xhtmlRegExpGroup = "(" + selfClosingTagsToReplace.join("|") + ")";
  var whitespace = "[\\x20\\t\\r\\n\\f]";
  var rxhtmlTagWithoutSpaceOrAttributes = new RegExp(
    "<" + xhtmlRegExpGroup + "\\/>",
    "gi"
  );
  var rxhtmlTagWithSpaceAndMaybeAttributes = new RegExp(
    "<" + xhtmlRegExpGroup + "(" + whitespace + "[^>]*)\\/>",
    "gi"
  );

  // jQuery 3.5 also fixed a vulnerability for when </select> appears within
  // an <option> or <optgroup>, but it did that in local code that we can't
  // backport directly. Instead, we filter such cases out. To do so, we need to
  // determine when jQuery would otherwise invoke the vulnerable code, which it
  // uses this regular expression to determine. The regular expression changed
  // for version 3.0.0 and changed again for 3.4.0.
  // @see https://github.com/jquery/jquery/blob/1.5/jquery.js#L4958
  // @see https://github.com/jquery/jquery/blob/3.0.0/dist/jquery.js#L4584
  // @see https://github.com/jquery/jquery/blob/3.4.0/dist/jquery.js#L4712
  var rtagName;
  if (majorVersion < 3) {
    rtagName = /<([\w:]+)/;
  } else if (minorVersion < 4) {
    rtagName = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i;
  } else {
    rtagName = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i;
  }

  // The regular expression that jQuery uses to determine which self-closing
  // tags to expand to open and close tags. This is vulnerable, because it
  // matches all tag names except the few excluded ones. We only use this
  // expression for determining vulnerability. The expression changed for
  // version 3, but we only need to check for vulnerability in versions 1 and 2,
  // so we use the expression from those versions.
  // @see https://github.com/jquery/jquery/blob/1.5/jquery.js#L4957
  var rxhtmlTag =
    /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi;

  jQuery.extend({
    htmlPrefilter: function (html) {
      // This is how jQuery determines the first tag in the HTML.
      // @see https://github.com/jquery/jquery/blob/1.5/jquery.js#L5521
      var tag = (rtagName.exec(html) || ["", ""])[1].toLowerCase();

      // It is not valid HTML for <option> or <optgroup> to have <select> as
      // either a descendant or sibling, and attempts to inject one can cause
      // XSS on jQuery versions before 3.5. Since this is invalid HTML and a
      // possible XSS attack, reject the entire string.
      // @see https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2020-11023
      if (
        (tag === "option" || tag === "optgroup") &&
        html.match(/<\/?select/i)
      ) {
        html = "";
      }

      // Retain jQuery's prior to 3.5 conversion of pseudo-XHTML, but for only
      // the tags in the `selfClosingTagsToReplace` list defined above.
      // @see https://github.com/jquery/jquery/blob/1.5/jquery.js#L5518
      // @see https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2020-11022
      html = html.replace(rxhtmlTagWithoutSpaceOrAttributes, "<$1></$1>");
      html = html.replace(rxhtmlTagWithSpaceAndMaybeAttributes, "<$1$2></$1>");

      // Prior to jQuery 1.12 and 2.2, this function gets called (via code later
      // in this file) in addition to, rather than instead of, the unsafe
      // expansion of self-closing tags (including ones not in the list above).
      // We can't prevent that unsafe expansion from running, so instead we
      // check to make sure that it doesn't affect the DOM returned by the
      // browser's parsing logic. If it does affect it, then it's vulnerable to
      // XSS, so we reject the entire string.
      if (
        (majorVersion === 1 && minorVersion < 12) ||
        (majorVersion === 2 && minorVersion < 2)
      ) {
        var htmlRisky = html.replace(rxhtmlTag, "<$1></$2>");
        if (htmlRisky !== html) {
          // Even though htmlRisky and html are different strings, they might
          // represent the same HTML structure once parsed, in which case,
          // htmlRisky is actually safe. We can ask the browser to parse both
          // to find out, but the browser can't parse table fragments (e.g., a
          // root-level "<td>"), so we need to wrap them. We just need this
          // technique to work on all supported browsers; we don't need to
          // copy from the specific jQuery version we're using.
          // @see https://github.com/jquery/jquery/blob/3.5.1/dist/jquery.js#L4939
          var wrapMap = {
            thead: [1, "<table>", "</table>"],
            col: [2, "<table><colgroup>", "</colgroup></table>"],
            tr: [2, "<table><tbody>", "</tbody></table>"],
            td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
          };
          wrapMap.tbody =
            wrapMap.tfoot =
            wrapMap.colgroup =
            wrapMap.caption =
              wrapMap.thead;
          wrapMap.th = wrapMap.td;

          // Function to wrap HTML into something that a browser can parse.
          // @see https://github.com/jquery/jquery/blob/3.5.1/dist/jquery.js#L5032
          var getWrappedHtml = function (html) {
            var wrap = wrapMap[tag];
            if (wrap) {
              html = wrap[1] + html + wrap[2];
            }
            return html;
          };

          // Function to return canonical HTML after parsing it. This parses
          // only; it doesn't execute scripts.
          // @see https://github.com/jquery/jquery-migrate/blob/3.3.0/src/jquery/manipulation.js#L5
          var getParsedHtml = function (html) {
            var doc = window.document.implementation.createHTMLDocument("");
            doc.body.innerHTML = html;
            return doc.body ? doc.body.innerHTML : "";
          };

          // If the browser couldn't parse either one successfully, or if
          // htmlRisky parses differently than html, then html is vulnerable,
          // so reject it.
          var htmlParsed = getParsedHtml(getWrappedHtml(html));
          var htmlRiskyParsed = getParsedHtml(getWrappedHtml(htmlRisky));
          if (
            htmlRiskyParsed === "" ||
            htmlParsed === "" ||
            htmlRiskyParsed !== htmlParsed
          ) {
            html = "";
          }
        }
      }

      return html;
    },
  });

  // Prior to jQuery 1.12 and 2.2, jQuery.clean(), jQuery.buildFragment(), and
  // jQuery.fn.html() did not call jQuery.htmlPrefilter(), so we add that.
  if (
    (majorVersion === 1 && minorVersion < 12) ||
    (majorVersion === 2 && minorVersion < 2)
  ) {
    // Filter the HTML coming into jQuery.fn.html().
    var fnOriginalHtml = jQuery.fn.html;
    jQuery.fn.extend({
      // @see https://github.com/jquery/jquery/blob/1.5/jquery.js#L5147
      html: function (value) {
        if (typeof value === "string") {
          value = jQuery.htmlPrefilter(value);
        }
        // .html() can be called as a setter (with an argument) or as a getter
        // (without an argument), so invoke fnOriginalHtml() the same way that
        // we were invoked.
        return fnOriginalHtml.apply(this, arguments.length ? [value] : []);
      },
    });

    // The regular expression that jQuery uses to determine if a string is HTML.
    // Used by both clean() and buildFragment().
    // @see https://github.com/jquery/jquery/blob/1.5/jquery.js#L4960
    var rhtml = /<|&#?\w+;/;

    // Filter HTML coming into:
    // - jQuery.clean() for versions prior to 1.9.
    // - jQuery.buildFragment() for 1.9 and above.
    //
    // The looping constructs in the two functions might be essentially
    // identical, but they're each expressed here in the way that most closely
    // matches their original expression in jQuery, so that we filter all of
    // the items and only the items that jQuery will treat as HTML strings.
    if (majorVersion === 1 && minorVersion < 9) {
      var originalClean = jQuery.clean;
      jQuery.extend({
        // @see https://github.com/jquery/jquery/blob/1.5/jquery.js#L5493
        clean: function (elems, context, fragment, scripts) {
          for (var i = 0, elem; (elem = elems[i]) != null; i++) {
            if (typeof elem === "string" && rhtml.test(elem)) {
              elems[i] = elem = jQuery.htmlPrefilter(elem);
            }
          }
          return originalClean.call(this, elems, context, fragment, scripts);
        },
      });
    } else {
      var originalBuildFragment = jQuery.buildFragment;
      jQuery.extend({
        // @see https://github.com/jquery/jquery/blob/1.9.0/jquery.js#L6419
        buildFragment: function (elems, context, scripts, selection) {
          var l = elems.length;
          for (var i = 0; i < l; i++) {
            var elem = elems[i];
            if (elem || elem === 0) {
              if (jQuery.type(elem) !== "object" && rhtml.test(elem)) {
                elems[i] = elem = jQuery.htmlPrefilter(elem);
              }
            }
          }
          return originalBuildFragment.call(
            this,
            elems,
            context,
            scripts,
            selection
          );
        },
      });
    }
  }
})(jQuery);

/**
 * jQuery Once Plugin v1.2
 * http://plugins.jquery.com/project/once
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 */

(function ($) {
  var cache = {},
    uuid = 0;

  /**
   * Filters elements by whether they have not yet been processed.
   *
   * @param id
   *   (Optional) If this is a string, then it will be used as the CSS class
   *   name that is applied to the elements for determining whether it has
   *   already been processed. The elements will get a class in the form of
   *   "id-processed".
   *
   *   If the id parameter is a function, it will be passed off to the fn
   *   parameter and the id will become a unique identifier, represented as a
   *   number.
   *
   *   When the id is neither a string or a function, it becomes a unique
   *   identifier, depicted as a number. The element's class will then be
   *   represented in the form of "jquery-once-#-processed".
   *
   *   Take note that the id must be valid for usage as an element's class name.
   * @param fn
   *   (Optional) If given, this function will be called for each element that
   *   has not yet been processed. The function's return value follows the same
   *   logic as $.each(). Returning true will continue to the next matched
   *   element in the set, while returning false will entirely break the
   *   iteration.
   */
  $.fn.once = function (id, fn) {
    if (typeof id != "string") {
      // Generate a numeric ID if the id passed can't be used as a CSS class.
      if (!(id in cache)) {
        cache[id] = ++uuid;
      }
      // When the fn parameter is not passed, we interpret it from the id.
      if (!fn) {
        fn = id;
      }
      id = "jquery-once-" + cache[id];
    }
    // Remove elements from the set that have already been processed.
    var name = id + "-processed";
    var elements = this.not("." + name).addClass(name);

    return $.isFunction(fn) ? elements.each(fn) : elements;
  };

  /**
   * Filters elements that have been processed once already.
   *
   * @param id
   *   A required string representing the name of the class which should be used
   *   when filtering the elements. This only filters elements that have already
   *   been processed by the once function. The id should be the same id that
   *   was originally passed to the once() function.
   * @param fn
   *   (Optional) If given, this function will be called for each element that
   *   has not yet been processed. The function's return value follows the same
   *   logic as $.each(). Returning true will continue to the next matched
   *   element in the set, while returning false will entirely break the
   *   iteration.
   */
  $.fn.removeOnce = function (id, fn) {
    var name = id + "-processed";
    var elements = this.filter("." + name).removeClass(name);

    return $.isFunction(fn) ? elements.each(fn) : elements;
  };
})(jQuery);
