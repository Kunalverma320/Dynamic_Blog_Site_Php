window._wpemojiSettings = {
  baseUrl: "https://s.w.org/images/core/emoji/14.0.0/72x72/",
  ext: ".png",
  svgUrl: "https://s.w.org/images/core/emoji/14.0.0/svg/",
  svgExt: ".svg",
  source: {
    concatemoji:
      "https://demo.tagdiv.com/newspaper_photography/wp-includes/js/wp-emoji-release.min.js?ver=6.4.1",
  },
};
/*! This file is auto-generated */
!(function (i, n) {
  var o, s, e;
  function c(e) {
    try {
      var t = { supportTests: e, timestamp: new Date().valueOf() };
      sessionStorage.setItem(o, JSON.stringify(t));
    } catch (e) {}
  }
  function p(e, t, n) {
    e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
    var t = new Uint32Array(
        e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
      ),
      r =
        (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
        e.fillText(n, 0, 0),
        new Uint32Array(
          e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
        ));
    return t.every(function (e, t) {
      return e === r[t];
    });
  }
  function u(e, t, n) {
    switch (t) {
      case "flag":
        return n(
          e,
          "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
          "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
        )
          ? !1
          : !n(
              e,
              "\ud83c\uddfa\ud83c\uddf3",
              "\ud83c\uddfa\u200b\ud83c\uddf3"
            ) &&
              !n(
                e,
                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
              );
      case "emoji":
        return !n(
          e,
          "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
          "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff"
        );
    }
    return !1;
  }
  function f(e, t, n) {
    var r =
        "undefined" != typeof WorkerGlobalScope &&
        self instanceof WorkerGlobalScope
          ? new OffscreenCanvas(300, 150)
          : i.createElement("canvas"),
      a = r.getContext("2d", { willReadFrequently: !0 }),
      o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
    return (
      e.forEach(function (e) {
        o[e] = t(a, e, n);
      }),
      o
    );
  }
  function t(e) {
    var t = i.createElement("script");
    (t.src = e), (t.defer = !0), i.head.appendChild(t);
  }
  "undefined" != typeof Promise &&
    ((o = "wpEmojiSettingsSupports"),
    (s = ["flag", "emoji"]),
    (n.supports = { everything: !0, everythingExceptFlag: !0 }),
    (e = new Promise(function (e) {
      i.addEventListener("DOMContentLoaded", e, { once: !0 });
    })),
    new Promise(function (t) {
      var n = (function () {
        try {
          var e = JSON.parse(sessionStorage.getItem(o));
          if (
            "object" == typeof e &&
            "number" == typeof e.timestamp &&
            new Date().valueOf() < e.timestamp + 604800 &&
            "object" == typeof e.supportTests
          )
            return e.supportTests;
        } catch (e) {}
        return null;
      })();
      if (!n) {
        if (
          "undefined" != typeof Worker &&
          "undefined" != typeof OffscreenCanvas &&
          "undefined" != typeof URL &&
          URL.createObjectURL &&
          "undefined" != typeof Blob
        )
          try {
            var e =
                "postMessage(" +
                f.toString() +
                "(" +
                [JSON.stringify(s), u.toString(), p.toString()].join(",") +
                "));",
              r = new Blob([e], { type: "text/javascript" }),
              a = new Worker(URL.createObjectURL(r), {
                name: "wpTestEmojiSupports",
              });
            return void (a.onmessage = function (e) {
              c((n = e.data)), a.terminate(), t(n);
            });
          } catch (e) {}
        c((n = f(s, u, p)));
      }
      t(n);
    })
      .then(function (e) {
        for (var t in e)
          (n.supports[t] = e[t]),
            (n.supports.everything = n.supports.everything && n.supports[t]),
            "flag" !== t &&
              (n.supports.everythingExceptFlag =
                n.supports.everythingExceptFlag && n.supports[t]);
        (n.supports.everythingExceptFlag =
          n.supports.everythingExceptFlag && !n.supports.flag),
          (n.DOMReady = !1),
          (n.readyCallback = function () {
            n.DOMReady = !0;
          });
      })
      .then(function () {
        return e;
      })
      .then(function () {
        var e;
        n.supports.everything ||
          (n.readyCallback(),
          (e = n.source || {}).concatemoji
            ? t(e.concatemoji)
            : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
      }));
})((window, document), window._wpemojiSettings);
window.tdb_global_vars = {
  wpRestUrl: "https://demo.tagdiv.com/newspaper_photography/wp-json/",
  permalinkStructure: "/%postname%/",
};
window.tdb_p_autoload_vars = {
  isAjax: false,
  isAdminBarShowing: false,
  autoloadScrollPercent: 50,
};
var tdBlocksArray = []; //here we store all the items for the current page

// td_block class - each ajax block uses a object of this class for requests
function tdBlock() {
  this.id = "";
  this.block_type = 1; //block type id (1-234 etc)
  this.atts = "";
  this.td_column_number = "";
  this.td_current_page = 1; //
  this.post_count = 0; //from wp
  this.found_posts = 0; //from wp
  this.max_num_pages = 0; //from wp
  this.td_filter_value = ""; //current live filter value
  this.is_ajax_running = false;
  this.td_user_action = ""; // load more or infinite loader (used by the animation)
  this.header_color = "";
  this.ajax_pagination_infinite_stop = ""; //show load more at page x
}

// td_js_generator - mini detector
(function () {
  var htmlTag = document.getElementsByTagName("html")[0];

  if (navigator.userAgent.indexOf("MSIE 10.0") > -1) {
    htmlTag.className += " ie10";
  }

  if (!!navigator.userAgent.match(/Trident.*rv\:11\./)) {
    htmlTag.className += " ie11";
  }

  if (navigator.userAgent.indexOf("Edge") > -1) {
    htmlTag.className += " ieEdge";
  }

  if (/(iPad|iPhone|iPod)/g.test(navigator.userAgent)) {
    htmlTag.className += " td-md-is-ios";
  }

  var user_agent = navigator.userAgent.toLowerCase();
  if (user_agent.indexOf("android") > -1) {
    htmlTag.className += " td-md-is-android";
  }

  if (-1 !== navigator.userAgent.indexOf("Mac OS X")) {
    htmlTag.className += " td-md-is-os-x";
  }

  if (/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())) {
    htmlTag.className += " td-md-is-chrome";
  }

  if (-1 !== navigator.userAgent.indexOf("Firefox")) {
    htmlTag.className += " td-md-is-firefox";
  }

  if (
    -1 !== navigator.userAgent.indexOf("Safari") &&
    -1 === navigator.userAgent.indexOf("Chrome")
  ) {
    htmlTag.className += " td-md-is-safari";
  }

  if (-1 !== navigator.userAgent.indexOf("IEMobile")) {
    htmlTag.className += " td-md-is-iemobile";
  }
})();

var tdLocalCache = {};

(function () {
  "use strict";

  tdLocalCache = {
    data: {},
    remove: function (resource_id) {
      delete tdLocalCache.data[resource_id];
    },
    exist: function (resource_id) {
      return (
        tdLocalCache.data.hasOwnProperty(resource_id) &&
        tdLocalCache.data[resource_id] !== null
      );
    },
    get: function (resource_id) {
      return tdLocalCache.data[resource_id];
    },
    set: function (resource_id, cachedData) {
      tdLocalCache.remove(resource_id);
      tdLocalCache.data[resource_id] = cachedData;
    },
  };
})();

var td_viewport_interval_list = [
  { limitBottom: 767, sidebarWidth: 228 },
  { limitBottom: 1018, sidebarWidth: 300 },
  { limitBottom: 1140, sidebarWidth: 324 },
];
var td_animation_stack_effect = "type0";
var tds_animation_stack = true;
var td_animation_stack_specific_selectors = ".entry-thumb, img, .td-lazy-img";
var td_animation_stack_general_selectors =
  ".td-animation-stack img, .td-animation-stack .entry-thumb, .post img, .td-animation-stack .td-lazy-img";
var tds_general_modal_image = "yes";
var tdc_is_installed = "yes";
var td_ajax_url =
  "index.html//demo.tagdiv.com/newspaper_photography/wp-admin/admin-ajax.php?td_theme_name=Newspaper&v=12.6.2_d82";
var td_get_template_directory_uri =
  "index.html//demo.tagdiv.com/newspaper_photography/wp-content/plugins/td-composer/legacy/common";
var tds_snap_menu = "";
var tds_logo_on_sticky = "";
var tds_header_style = "5";
var td_please_wait = "Please wait...";
var td_email_user_pass_incorrect = "User or password incorrect!";
var td_email_user_incorrect = "Email or username incorrect!";
var td_email_incorrect = "Email incorrect!";
var td_user_incorrect = "Username incorrect!";
var td_email_user_empty = "Email or username empty!";
var td_pass_empty = "Pass empty!";
var td_pass_pattern_incorrect = "Invalid Pass Pattern!";
var td_retype_pass_incorrect = "Retyped Pass incorrect!";
var tds_more_articles_on_post_enable = "";
var tds_more_articles_on_post_time_to_wait = "";
var tds_more_articles_on_post_pages_distance_from_top = 0;
var tds_captcha = "";
var tds_theme_color_site_wide = "#1680d3";
var tds_smart_sidebar = "";
var tdThemeName = "Newspaper";
var tdThemeNameWl = "Newspaper";
var td_magnific_popup_translation_tPrev = "Previous (Left arrow key)";
var td_magnific_popup_translation_tNext = "Next (Right arrow key)";
var td_magnific_popup_translation_tCounter = "%curr% of %total%";
var td_magnific_popup_translation_ajax_tError =
  "The content from %url% could not be loaded.";
var td_magnific_popup_translation_image_tError =
  "The image #%curr% could not be loaded.";
var tdBlockNonce = "4a583c92a5";
var tdMobileMenu = "enabled";
var tdMobileSearch = "enabled";
var tdDateNamesI18n = {
  month_names: [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ],
  month_names_short: [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
  ],
  day_names: [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ],
  day_names_short: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
};
var tdb_modal_confirm = "Save";
var tdb_modal_cancel = "Cancel";
var tdb_modal_confirm_alt = "Yes";
var tdb_modal_cancel_alt = "No";
var td_ad_background_click_link = "";
var td_ad_background_click_target = "";
var block_tdi_25 = new tdBlock();
block_tdi_25.id = "tdi_25";
block_tdi_25.atts =
  '{"custom_title":"Popular Photos","limit":"4","sort":"featured","block_type":"td_block_24","separator":"","custom_url":"","block_template_id":"","mx16_tl":"","mx16_el":"","m19_tl":"","m19_el":"","post_ids":"","category_id":"","taxonomies":"","category_ids":"","in_all_terms":"","tag_slug":"","autors_id":"","installed_post_types":"","include_cf_posts":"","exclude_cf_posts":"","linked_posts":"","favourite_only":"","offset":"","open_in_new_window":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","time_ago_txt_pos":"","review_source":"","el_class":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_family":"","f_header_font_size":"","f_header_font_line_height":"","f_header_font_style":"","f_header_font_weight":"","f_header_font_transform":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_family":"","f_more_font_size":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_weight":"","f_more_font_transform":"","f_more_font_spacing":"","f_more_":"","mx16f_title_font_header":"","mx16f_title_font_title":"Article title","mx16f_title_font_settings":"","mx16f_title_font_family":"","mx16f_title_font_size":"","mx16f_title_font_line_height":"","mx16f_title_font_style":"","mx16f_title_font_weight":"","mx16f_title_font_transform":"","mx16f_title_font_spacing":"","mx16f_title_":"","mx16f_cat_font_title":"Article category tag","mx16f_cat_font_settings":"","mx16f_cat_font_family":"","mx16f_cat_font_size":"","mx16f_cat_font_line_height":"","mx16f_cat_font_style":"","mx16f_cat_font_weight":"","mx16f_cat_font_transform":"","mx16f_cat_font_spacing":"","mx16f_cat_":"","mx16f_meta_font_title":"Article meta info","mx16f_meta_font_settings":"","mx16f_meta_font_family":"","mx16f_meta_font_size":"","mx16f_meta_font_line_height":"","mx16f_meta_font_style":"","mx16f_meta_font_weight":"","mx16f_meta_font_transform":"","mx16f_meta_font_spacing":"","mx16f_meta_":"","mx16f_ex_font_title":"Article excerpt","mx16f_ex_font_settings":"","mx16f_ex_font_family":"","mx16f_ex_font_size":"","mx16f_ex_font_line_height":"","mx16f_ex_font_style":"","mx16f_ex_font_weight":"","mx16f_ex_font_transform":"","mx16f_ex_font_spacing":"","mx16f_ex_":"","mx16f_btn_font_title":"Article read more button","mx16f_btn_font_settings":"","mx16f_btn_font_family":"","mx16f_btn_font_size":"","mx16f_btn_font_line_height":"","mx16f_btn_font_style":"","mx16f_btn_font_weight":"","mx16f_btn_font_transform":"","mx16f_btn_font_spacing":"","mx16f_btn_":"","m19f_title_font_header":"","m19f_title_font_title":"Article title","m19f_title_font_settings":"","m19f_title_font_family":"","m19f_title_font_size":"","m19f_title_font_line_height":"","m19f_title_font_style":"","m19f_title_font_weight":"","m19f_title_font_transform":"","m19f_title_font_spacing":"","m19f_title_":"","m19f_cat_font_title":"Article category tag","m19f_cat_font_settings":"","m19f_cat_font_family":"","m19f_cat_font_size":"","m19f_cat_font_line_height":"","m19f_cat_font_style":"","m19f_cat_font_weight":"","m19f_cat_font_transform":"","m19f_cat_font_spacing":"","m19f_cat_":"","m19f_meta_font_title":"Article meta info","m19f_meta_font_settings":"","m19f_meta_font_family":"","m19f_meta_font_size":"","m19f_meta_font_line_height":"","m19f_meta_font_style":"","m19f_meta_font_weight":"","m19f_meta_font_transform":"","m19f_meta_font_spacing":"","m19f_meta_":"","m19f_ex_font_title":"Article excerpt","m19f_ex_font_settings":"","m19f_ex_font_family":"","m19f_ex_font_size":"","m19f_ex_font_line_height":"","m19f_ex_font_style":"","m19f_ex_font_weight":"","m19f_ex_font_transform":"","m19f_ex_font_spacing":"","m19f_ex_":"","m19f_btn_font_title":"Article read more button","m19f_btn_font_settings":"","m19f_btn_font_family":"","m19f_btn_font_size":"","m19f_btn_font_line_height":"","m19f_btn_font_style":"","m19f_btn_font_weight":"","m19f_btn_font_transform":"","m19f_btn_font_spacing":"","m19f_btn_":"","ajax_pagination":"","ajax_pagination_next_prev_swipe":"","ajax_pagination_infinite_stop":"","css":"","tdc_css":"","td_column_number":3,"header_color":"","color_preset":"","border_top":"","class":"tdi_25","tdc_css_class":"tdi_25","tdc_css_class_style":"tdi_25_rand_style"}';
block_tdi_25.td_column_number = "3";
block_tdi_25.block_type = "td_block_24";
block_tdi_25.post_count = "4";
block_tdi_25.found_posts = "9";
block_tdi_25.header_color = "";
block_tdi_25.ajax_pagination_infinite_stop = "";
block_tdi_25.max_num_pages = "3";
tdBlocksArray.push(block_tdi_25);

var block_tdi_34 = new tdBlock();
block_tdi_34.id = "tdi_34";
block_tdi_34.atts =
  '{"custom_title":"Popular Photos","custom_url":"","block_template_id":"","header_text_color":"#","limit":"6","offset":"","post_ids":"","category_id":"","category_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","sort":"featured","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","ajax_pagination":"","ajax_pagination_infinite_stop":"","class":"td_block_widget tdi_34","block_type":"td_block_21","separator":"","m16_tl":"","m16_el":"","taxonomies":"","in_all_terms":"","include_cf_posts":"","exclude_cf_posts":"","linked_posts":"","favourite_only":"","open_in_new_window":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","time_ago_txt_pos":"","review_source":"","el_class":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_family":"","f_header_font_size":"","f_header_font_line_height":"","f_header_font_style":"","f_header_font_weight":"","f_header_font_transform":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_family":"","f_more_font_size":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_weight":"","f_more_font_transform":"","f_more_font_spacing":"","f_more_":"","m16f_title_font_header":"","m16f_title_font_title":"Article title","m16f_title_font_settings":"","m16f_title_font_family":"","m16f_title_font_size":"","m16f_title_font_line_height":"","m16f_title_font_style":"","m16f_title_font_weight":"","m16f_title_font_transform":"","m16f_title_font_spacing":"","m16f_title_":"","m16f_cat_font_title":"Article category tag","m16f_cat_font_settings":"","m16f_cat_font_family":"","m16f_cat_font_size":"","m16f_cat_font_line_height":"","m16f_cat_font_style":"","m16f_cat_font_weight":"","m16f_cat_font_transform":"","m16f_cat_font_spacing":"","m16f_cat_":"","m16f_meta_font_title":"Article meta info","m16f_meta_font_settings":"","m16f_meta_font_family":"","m16f_meta_font_size":"","m16f_meta_font_line_height":"","m16f_meta_font_style":"","m16f_meta_font_weight":"","m16f_meta_font_transform":"","m16f_meta_font_spacing":"","m16f_meta_":"","m16f_ex_font_title":"Article excerpt","m16f_ex_font_settings":"","m16f_ex_font_family":"","m16f_ex_font_size":"","m16f_ex_font_line_height":"","m16f_ex_font_style":"","m16f_ex_font_weight":"","m16f_ex_font_transform":"","m16f_ex_font_spacing":"","m16f_ex_":"","ajax_pagination_next_prev_swipe":"","css":"","tdc_css":"","td_column_number":1,"header_color":"","color_preset":"","border_top":"","tdc_css_class":"tdi_34","tdc_css_class_style":"tdi_34_rand_style"}';
block_tdi_34.td_column_number = "1";
block_tdi_34.block_type = "td_block_21";
block_tdi_34.post_count = "6";
block_tdi_34.found_posts = "9";
block_tdi_34.header_color = "";
block_tdi_34.ajax_pagination_infinite_stop = "";
block_tdi_34.max_num_pages = "2";
tdBlocksArray.push(block_tdi_34);
var td_res_context_registered_atts = [
    "style_general_single_image",
    "style_general_text_with_title",
    "style_general_separator",
    "style_general_popular_categories",
  ];
