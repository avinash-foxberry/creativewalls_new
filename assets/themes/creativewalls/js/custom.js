jQuery.noConflict();
jQuery(document).ready(function ($) {
  // country code plugin for popup form
  jQuery(function ($) {
    var input_blog = document.querySelector("#cntry_field");
    var iti = window.intlTelInput(input_blog, {
      preferredCountries: ["us", "gb"],
      separateDialCode: true,
      onlyCountries: true,
      initialCountry: "in",
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

    // Update flag image and country code on change
    input_blog.addEventListener("change", function () {
      var selectedCountry = iti.getSelectedCountryData();
      $("#flag").html(
        "<img src='https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/flags/4x3/" +
          selectedCountry.iso2 +
          ".svg'> +" +
          selectedCountry.dialCode
      );
    });

    $(document).on(
      "click",
      "#AffiliatesPopupForm li .iti__dial-code",
      function () {
        $(".dc-cntry-code").val($(this).text());
      }
    );

    $(document).on("keypress", "#cntry_field", function () {
      $(".dc-cntry-code").val($(".dc-cntry-code").val());
    });

    if (window.location.href.indexOf("blog") > -1) {
      // county code for blog from
      var input_blog = document.querySelector("#blog_cntry_field");
      var iti = window.intlTelInput(input_blog, {
        preferredCountries: ["us", "gb"],
        separateDialCode: true,
        onlyCountries: true,
        initialCountry: "in",
        utilsScript:
          "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
      });

      // Update flag image and country code on change
      input_blog.addEventListener("change", function () {
        var selectedCountry = iti.getSelectedCountryData();
        $("#blog_flag").html(
          "<img src='https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/flags/4x3/" +
            selectedCountry.iso2 +
            ".svg'> +" +
            selectedCountry.dialCode
        );
      });

      //Get country code on change
      input_blog.addEventListener("keypress", function () {
        var selectedCountry = iti.getSelectedCountryData();
        var countryCode = selectedCountry.dialCode;
        $(".blog_dc-cntry-code").val("+" + countryCode);
      });

      $(document).on(
        "click",
        "#ContactUsFormMain li .iti__dial-code",
        function () {
          var selectedCountry = iti.getSelectedCountryData();
          var countryCode = selectedCountry.dialCode;
          $(".blog_dc-cntry-code").val("+" + countryCode);
        }
      );
      setTimeout(function () {
        //county code for blog bottom from
        var bottam_input_blog = document.querySelector(
          "#blog_bottom_form-control"
        );
        var iti = window.intlTelInput(bottam_input_blog, {
          preferredCountries: ["us", "gb"],
          separateDialCode: true,
          onlyCountries: true,
          initialCountry: "in",
          utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });

        // Update flag image and country code on change
        bottam_input_blog.addEventListener("change", function () {
          var selectedCountry = iti.getSelectedCountryData();
          $("#blog_bottom_flag").html(
            "<img src='https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/flags/4x3/" +
              selectedCountry.iso2 +
              ".svg'> +" +
              selectedCountry.dialCode
          );
        });

        // Get country code on change
        input_blog.addEventListener("keypress", function () {
          var selectedCountry = iti.getSelectedCountryData();
          var countryCode = selectedCountry.dialCode;
          $(".blog-bottom-form").val("+" + countryCode);
        });

        $(document).on(
          "click",
          "#blogContactUsFormMain li .iti__dial-code",
          function () {
            var selectedCountry = iti.getSelectedCountryData();
            var countryCode = selectedCountry.dialCode;
            $(".blog-bottom-form").val("+" + countryCode);
          }
        );
      }, 1000);
    } else if (window.location.href.indexOf("contact-us") > -1) {
      // county code for contact from
      var input_blog = document.querySelector("#contact_cntry_field");
      var iti = window.intlTelInput(input_blog, {
        preferredCountries: ["us", "gb"],
        separateDialCode: true,
        onlyCountries: true,
        initialCountry: "in",
        utilsScript:
          "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
      });

      // Update flag image and country code on change
      input_blog.addEventListener("change", function () {
        var selectedCountry = iti.getSelectedCountryData();
        $("#contact_flag").html(
          "<img src='https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/flags/4x3/" +
            selectedCountry.iso2 +
            ".svg'> +" +
            selectedCountry.dialCode
        );
      });

      // Get country code on change
      input_blog.addEventListener("keypress", function () {
        var selectedCountry = iti.getSelectedCountryData();
        var countryCode = selectedCountry.dialCode;
        $(".contact-dc-cntry-code").val("+" + countryCode);
      });

      $(document).on("click", "li .iti__dial-code", function () {
        var selectedCountry = iti.getSelectedCountryData();
        var countryCode = selectedCountry.dialCode;
        $(".contact-dc-cntry-code").val("+" + countryCode);
      });
    }
  });

  $(".close-btn-text").click(function () {
    $(".animation-element").slideUp(200);
  });
  $("#user-step-1-cta").click(function () {
    $(".user-research-step-1").slideUp(200);
    $("#user-research-step-2").slideDown(200);
  });
  if ($(window).width() > 768) {
    // Notice scroll function Start
    // Initial state
    var scrollPos = 0;
    // adding scroll event
    window.addEventListener("scroll", function () {
      if (sessionStorage.getItem("notify") !== "1") {
        // detects new state and compares it with the new one
        if (document.body.getBoundingClientRect().top > scrollPos) {
          $("body").addClass("fixed-body");
          // $(".custom-notify").css({'display':'block'});
          $(".custom-notify").slideDown(200);
          if (document.URL.indexOf("/thank-you") !== -1) {
            // $("body").removeClass("fixed-body");
            $(".fixed-top").css("top", "40px");
          } else if ($(window).width() > 1023) {
            $(".fixed-top").css("top", "40px");
            $(".fixed-collection-desk-lst").addClass("contact-tab-with-noty");
            $(".fixed-collection-mob-lst").addClass("contact-tab-with-noty");
            $(".contact-tab-with-noty").css("top", "108px");
            $(".contact-tab-fixed").addClass("contact-tab-with-noty");
            $(".project-template-wrap").addClass("project-tab-with-noty");
            $(".project-tab-with-noty").css("top", "18px");
            // setTimeout(function() { $(".fixed-top").css("top", "40px"); }, 200)
          } else if ($(window).width() < 1024 && $(window).width() > 767) {
            $(".fixed-top").css("top", "40px");
            $(".contact-tab-fixed").addClass("contact-tab-with-noty");
            $(".fixed-collection-desk-lst").addClass("contact-tab-with-noty");
            $(".fixed-collection-mob-lst").addClass("contact-tab-with-noty");
            $(".contact-tab-without-noty").css("top", "92px");
            // setTimeout(function() { $(".fixed-top").css("top", "58px"); }, 200)
          } else if ($(window).width() > 359 && $(window).width() < 767) {
            $(".fixed-top").css("top", "70px");
            $(".contact-tab-fixed").addClass("contact-tab-with-noty");
            $(".fixed-collection-desk-lst").addClass("contact-tab-with-noty");
            $(".fixed-collection-mob-lst").addClass("contact-tab-with-noty");
            $(".contact-tab-without-noty").css("top", "130px");
            // setTimeout(function() { $(".fixed-top").css("top", "84px"); }, 200)
          } else if ($(window).width() >= 320 && $(window).width() < 359) {
            $(".fixed-top").css("top", "104px");
            $(".contact-tab-fixed").addClass("contact-tab-with-noty");
            $(".fixed-collection-desk-lst").addClass("contact-tab-with-noty");
            // setTimeout(function() { $(".fixed-top").css("top", "84px"); }, 200)
          }
        } else {
          $("body").removeClass("fixed-body");
          $(".custom-notify").slideUp(200);
          $(".fixed-top").css("top", "0");
          // $('.fixed-collection-desk-lst').addClass('contact-tab-with-noty');
          $(".contact-tab-with-noty").css("top", "78px");
          $(".project-tab-with-noty").css("top", "0px");
          // $('.fixed-collection-mob-lst').addClass('contact-tab-with-noty');
          // $(".contact-tab-with-noty").css("top", "60px");
          // $(".contact-tab-without-noty").css("top", "78px");
        }
        // saves the new position for iteration.
        scrollPos = document.body.getBoundingClientRect().top;
      }
    });
    // Notice scroll function End
  } else {
    // Notice scroll function Start

    // Initial state
    var scrollPos = 0;
    // adding scroll event

    window.addEventListener("scroll", function () {
      if (sessionStorage.getItem("notify") !== "1") {
        // detects new state and compares it with the new one
        if (document.body.getBoundingClientRect().top > scrollPos) {
          $("body").addClass("fixed-body");
          $(".custom-notify").css({ display: "block" });

          if (document.URL.indexOf("/thank-you") !== -1) {
            // $("body").removeClass("fixed-body");
            $(".fixed-top").css("top", "86px");
          } else if ($(window).width() > 1023) {
            $(".fixed-top").css("top", "40px");
            // $('.fixed-collection-mob-lst').addClass('contact-tab-with-noty');
          } else if ($(window).width() < 1024 && $(window).width() > 767) {
            $(".fixed-top").css("top", "40px");
            $(".fixed-collection-mob-lst").addClass("contact-tab-with-noty");
            $(".contact-tab-with-noty").css("top", "118px");
            // $('.fixed-collection-mob-lst').addClass('contact-tab-with-noty');
          } else if ($(window).width() > 359 && $(window).width() < 767) {
            $(".fixed-top").css("top", "0px");
            $(".contact-tab-fixed").addClass("contact-tab-with-noty");
            $(".fixed-collection-mob-lst").addClass("contact-tab-with-noty");
            $(".contact-tab-with-noty").css("top", "62px");
            // $('.fixed-collection-mob-lst').addClass('contact-tab-with-noty');
          } else if ($(window).width() >= 320 && $(window).width() < 359) {
            $(".fixed-top").css("top", "84px");
            $(".fixed-collection-mob-lst").addClass("contact-tab-with-noty");
            $(".contact-tab-with-noty").css("top", "128px");
            // $('.fixed-collection-mob-lst').addClass('contact-tab-with-noty');
          }
        } else {
          $("body").removeClass("fixed-body");
          $(".custom-notify").css(
            "display",
            "none",
            "transition",
            "opacity 1s ease-out"
          );
          $(".fixed-top").css("top", "0");
          // $('.fixed-collection-desk-lst').addClass('contact-tab-with-noty');
          // $('.fixed-collection-mob-lst').addClass('contact-tab-with-noty');
          $(".contact-tab-with-noty").css("top", "58px");
        }
        // saves the new position for iteration.
        scrollPos = document.body.getBoundingClientRect().top;
      }
    });

    // Notice scroll function End
  }
  if (sessionStorage.getItem("notify") !== "1") {
    $(function () {
      // createNoty("Love At First Design.", 'info');
      createNoty(
        "FREE Modular Kitchen worth Rs. 2 Lakh. Hurry, Book Before 30th Nov!",
        "info"
      );
      // createNoty('success', 'success');
      // createNoty('warning', 'warning');
      // createNoty('danger', 'danger');
      // createNoty('info', 'info');
      $(".page-alert .close").click(function (e) {
        e.preventDefault();
        sessionStorage.setItem("notify", 1);
        $(this).closest(".page-alert").slideUp(300);
        $("body").removeClass("fixed-body");
        $(".fixed-top").css("top", "0");
        // $('.fixed-collection-desk-lst').addClass('contact-tab-with-noty');
        // $('.fixed-collection-mob-lst').addClass('contact-tab-with-noty');
        $(".contact-tab-with-noty").css("top", "78px");
        $(".project-tab-with-noty").css("top", "0px");
      });
    });
  }

  if (sessionStorage.getItem("notify") == "1") {
    $(function () {
      $("body").removeClass("fixed-body");
      $(".custom-notify").css(
        "display",
        "none",
        "transition",
        "opacity 1s ease-out"
      );
      $(".fixed-top").css("top", "0");
      // $('.fixed-collection-desk-lst').addClass('contact-tab-with-noty');
      // $('.fixed-collection-mob-lst').removeClass('contact-tab-with-noty');
      $(".contact-tab-with-noty").css("top", "78px");
      // $(".project-tab-with-noty").css("top", "0px");
    });
  }

  //  COOKIE SAVE FOR USER DETAILS START

  function setCook(name, value, daysToExpire) {
    var cookie = [name, "=", JSON.stringify(value)].join("");

    document.cookie = cookie + "; expires=" + daysToExpire + "; path=/";
  }

  function eraseCookie(name) {
    setCook("user-track", "", -1);
  }

  function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == " ") c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) === 0) {
        return JSON.parse(c.substring(nameEQ.length, c.length));
      }
    }
    return null;
  }

  function checkCookie(finalTime) {
    if (readCookie("user-track") == null || readCookie("user-track") == "") {
      let tmpObj = {
        url: `${window.location.href}`,
        start_time: `${dateObject}`,
        total_time: `${finalTime}`,
      };
      let tmpArr = [];
      tmpArr.push(tmpObj);
      setCook("user-track", tmpArr, 864000);
    }
  }

  var startDateObject = new Date();
  var dateObject = moment(startDateObject).format("MMMM Do YYYY, h:mm:ss a");
  var startTime = startDateObject.getTime();
  window.onbeforeunload = function (event) {
    var endDateObject = new Date();
    var endTime = endDateObject.getTime();
    var timeSpent = endTime - startTime;
    var minutes = Math.floor(timeSpent / 60000);
    var seconds = ((timeSpent % 60000) / 1000).toFixed(0);
    var finalTime = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
    checkCookie(finalTime);
    let obj = readCookie("user-track");
    if (obj !== null) {
      obj.push({
        url: `${window.location.href}`,
        start_time: `${dateObject}`,
        total_time: `${finalTime}`,
      });
      // eraseCookie('user-track');
      setCook("user-track", obj, 864000);
      if (obj.length > 5) {
        let finalObj = obj.slice(-5);
        setCook("user-track", finalObj, 864000);
      }
    }
  };

  $.getJSON("https://jsonip.com?callback=?", function (data) {
    // console.log("_user_ip_", data);
    let key = "_user_ip_";
    var expires = new Date();
    expires.setTime(expires.getTime() + 1 * 24 * 60 * 60 * 1000);
    document.cookie = key + "=" + data.ip + ";expires=" + expires.toUTCString();
  });

  window.addEventListener("load", function () {
    if (readCookie("_os_") == null) {
      var OSName = "Unknown OS";
      if (navigator.appVersion.indexOf("Win") != -1) OSName = "Windows";
      if (navigator.appVersion.indexOf("Mac") != -1) OSName = "MacOS";
      if (navigator.appVersion.indexOf("X11") != -1) OSName = "UNIX";
      if (navigator.appVersion.indexOf("Linux") != -1) OSName = "Linux";

      setCook("_os_", OSName, 864000);
    }

    var nVer = navigator.appVersion;
    var nAgt = navigator.userAgent;
    var browserName = navigator.appName;
    var fullVersion = "" + parseFloat(navigator.appVersion);
    var majorVersion = parseInt(navigator.appVersion, 10);
    var nameOffset, verOffset, ix;

    // In Opera, the true version is after "Opera" or after "Version"
    if ((verOffset = nAgt.indexOf("Opera")) != -1) {
      browserName = "Opera";
      fullVersion = nAgt.substring(verOffset + 6);
      if ((verOffset = nAgt.indexOf("Version")) != -1)
        fullVersion = nAgt.substring(verOffset + 8);
    }
    // In MSIE, the true version is after "MSIE" in userAgent
    else if ((verOffset = nAgt.indexOf("MSIE")) != -1) {
      browserName = "Microsoft Internet Explorer";
      fullVersion = nAgt.substring(verOffset + 5);
    }
    // In Chrome, the true version is after "Chrome"
    else if ((verOffset = nAgt.indexOf("Chrome")) != -1) {
      browserName = "Chrome";
      fullVersion = nAgt.substring(verOffset + 7);
    }
    // In Safari, the true version is after "Safari" or after "Version"
    else if ((verOffset = nAgt.indexOf("Safari")) != -1) {
      browserName = "Safari";
      fullVersion = nAgt.substring(verOffset + 7);
      if ((verOffset = nAgt.indexOf("Version")) != -1)
        fullVersion = nAgt.substring(verOffset + 8);
    }
    // In Firefox, the true version is after "Firefox"
    else if ((verOffset = nAgt.indexOf("Firefox")) != -1) {
      browserName = "Firefox";
      fullVersion = nAgt.substring(verOffset + 8);
    }
    // In most other browsers, "name/version" is at the end of userAgent
    else if (
      (nameOffset = nAgt.lastIndexOf(" ") + 1) <
      (verOffset = nAgt.lastIndexOf("/"))
    ) {
      browserName = nAgt.substring(nameOffset, verOffset);
      fullVersion = nAgt.substring(verOffset + 1);
      if (browserName.toLowerCase() == browserName.toUpperCase()) {
        browserName = navigator.appName;
      }
    }
    // trim the fullVersion string at semicolon/space if present
    if ((ix = fullVersion.indexOf(";")) != -1)
      fullVersion = fullVersion.substring(0, ix);
    if ((ix = fullVersion.indexOf(" ")) != -1)
      fullVersion = fullVersion.substring(0, ix);

    majorVersion = parseInt("" + fullVersion, 10);
    if (isNaN(majorVersion)) {
      fullVersion = "" + parseFloat(navigator.appVersion);
      majorVersion = parseInt(navigator.appVersion, 10);
    }

    if (readCookie("_browser_") == null) {
      setCook("_browser_", browserName, 864000);
    }
  });

  //  COOKIE SAVE FOR USER DETAILS END
  /*Local Page slider*/
  $(".owl-local-slider").owlCarousel({
    /*loop:true,*/
    margin: 20,
    items: 2,
    dots: false,
    itemsMobile: [320, 2],
    nav: true,
    loop: true,
    autoplay: false,
    navText: [
      '<img src="' + templateUrl + '/images/ic_previous_1_1.png"/>',
      '<img src="' + templateUrl + '/images/ic_next.png"/>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      320: {
        items: 1,
        loop: true,
        autoHeight: false,
        nav: false,
        dots: true,
        margin: 5,
      },
      480: {
        items: 1,
        loop: true,
        autoHeight: false,
        nav: false,
        dots: true,
        margin: 0,
      },
      768: {
        items: 1,
        loop: true,
        autoHeight: false,
        nav: false,
        dots: true,
        margin: 5,
      },
      1000: {
        items: 3,
      },
    },
  });
  $(".location-main-image").owlCarousel({
    items: 1,
    nav: true,
    loop: true,
    autoplay: false,
    navText: [
      '<img src="https://media.designcafe.com/wp-content/uploads/2021/03/25020913/slider-nav-left.png"/>',
      '<img src="https://media.designcafe.com/wp-content/uploads/2021/03/25020910/slider-nav-r.png"/>',
    ],
    dots: false,
  });
  $(".local .exp-sli").owlCarousel({
    items: 1,
    nav: true,
    loop: true,
    autoplay: false,
    navText: [
      '<img src="https://media.designcafe.com/wp-content/uploads/2021/03/25020913/slider-nav-left.png"/>',
      '<img src="https://media.designcafe.com/wp-content/uploads/2021/03/25020910/slider-nav-r.png"/>',
    ],
    dots: false,
  });
  $(".local .owl-carousel-adwards").owlCarousel({
    loop: true,
    margin: 15,
    items: 2,
    autoplay: false,
    autoplayTimeout: 1000,
    dots: true,
    itemsMobile: [320, 2],
    nav: false,
    navText: [
      '<img src="https://media.designcafe.com/wp-content/uploads/2021/03/25020913/slider-nav-left.png"/>',
      '<img src="https://media.designcafe.com/wp-content/uploads/2021/03/25020910/slider-nav-r.png"/>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      320: {
        items: 1,
        loop: true,
        autoHeight: true,
        nav: false,
        dots: true,
        margin: 5,
      },
      480: {
        items: 2,
        loop: true,
        autoHeight: true,
        nav: false,
        dots: true,
        margin: 0,
      },
      768: {
        items: 3,
        loop: true,
        autoHeight: true,
        nav: false,
        dots: true,
        margin: 5,
      },
      1000: {
        items: 4,
      },
    },
  });
  /*End Local pages slider*/
  $(".owl-carousel-adwards-home").owlCarousel({
    loop: true,
    margin: 15,
    items: 2,
    autoplay: false,
    autoplayTimeout: 1000,
    dots: true,
    itemsMobile: [320, 2],
    nav: false,
    navText: [
      '<img src="https://media.designcafe.com/wp-content/uploads/2021/03/25020913/slider-nav-left.png"/>',
      '<img src="https://media.designcafe.com/wp-content/uploads/2021/03/25020910/slider-nav-r.png"/>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      320: {
        items: 1,
        loop: true,
        autoHeight: true,
        nav: false,
        dots: true,
        margin: 5,
      },
      480: {
        items: 2,
        loop: true,
        autoHeight: true,
        nav: false,
        dots: true,
        margin: 0,
      },
      768: {
        items: 3,
        loop: true,
        autoHeight: true,
        nav: false,
        dots: true,
        margin: 5,
      },
      1000: {
        items: 4,
      },
    },
  });

  $(".owl-slider-new-top-cat").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 5,
    nav: true,
    rewind: true,
    dots: true,
    autoHeight: true,
    // lazyLoad: true,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        margin: 5,
        nav: false,
        loop: false,
      },
      480: {
        items: 2,
        margin: 5,
        nav: false,
        loop: false,
      },
      768: {
        items: 3,
        margin: 5,
        nav: false,
        loop: false,
      },
      1000: {
        items: 4,
        dots: false,
        margin: 5,
        nav: true,
        navText: [
          '<img src="' + templateUrl + '/images/ic_previous_1_1.png"/>',
          '<img src="' + templateUrl + '/images/ic_next.png"/>',
        ],
      },
    },
  });
  $("#owl-why-dc-designer").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 5,
    nav: true,
    rewind: false,
    dots: true,
    autoHeight: false,
    lazyload: true,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        margin: 5,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        margin: 5,
        nav: false,
        loop: false,
      },
      768: {
        items: 3,
        margin: 5,
        nav: false,
        loop: false,
      },
      1000: {
        items: 3,
        dots: false,
        margin: 5,
        nav: true,
        navText: [
          '<img src="' + templateUrl + '/images/ic_previous_1_1.png"/>',
          '<img src="' + templateUrl + '/images/ic_next.png"/>',
        ],
      },
    },
  });
  $("#owl-how-it-works").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 25,
    nav: true,
    rewind: false,
    dots: true,
    autoHeight: false,
    lazyload: true,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        margin: 5,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        margin: 5,
        nav: false,
        loop: false,
      },
      768: {
        items: 3,
        margin: 5,
        nav: false,
        loop: false,
      },
      1000: {
        items: 3,
        dots: false,
        margin: 25,
        nav: true,
        navText: [
          '<img src="' + templateUrl + '/images/ic_previous_1_1.png"/>',
          '<img src="' + templateUrl + '/images/ic_next.png"/>',
        ],
      },
    },
  });

  $(".home-guide-listing-desktop").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 5,
    nav: true,
    rewind: true,
    dots: true,
    startPosition: 0,
    lazyload: true,
    autoHeight: false,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        margin: 0,
        nav: false,
      },
      480: {
        items: 1,
        margin: 0,
        nav: false,
      },
      768: {
        items: 2,
        margin: 10,
        nav: false,
      },
      1000: {
        items: 2,
        dots: true,
        margin: 10,
        nav: true,
        navText: [
          '<img src="' + templateUrl + '/images/ic_previous_1_1.png"/>',
          '<img src="' + templateUrl + '/images/ic_next.png"/>',
        ],
      },
    },
  });
  $(".home-guide-listing-mobile").owlCarousel({
    loop: true,
    autoplay: false,
    center: false,
    margin: 5,
    merge: true,
    nav: true,
    rewind: true,
    dots: true,
    startPosition: 1,
    lazyload: true,
    autoHeight: false,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      320: {
        items: 1,
        margin: 10,
        nav: false,
      },
      480: {
        items: 1,
        margin: 10,
        nav: false,
      },
    },
  });

  $("#owl-testimonial-for-you").owlCarousel({
    // loop:true,
    // autoplay:true,
    margin: 50,
    nav: true,
    rewind: true,
    // lazyLoad: true,
    autoHeight: false,
    dots: true,
    navText: [
      '<img src="' + templateUrl + '/images/ic_previous_1_1.png"/>',
      '<img src="' + templateUrl + '/images/ic_next.png"/>',
    ],
    responsive: {
      0: {
        items: 1,
        nav: false,
      },

      600: {
        items: 1,
        nav: false,
      },
      768: {
        items: 1,
        nav: false,
      },
      1000: {
        items: 3,
        dots: false,
      },
    },
  });

  $(".owl-experince-slider").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 50,
    nav: true,
    autoHeight: true,
    lazyLoad: true,
    dots: true,
    navText: [
      '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      '<i class="fa fa-angle-right" aria-hidden="true"></i>',
    ],
    responsive: {
      0: {
        items: 1,
        autoWidth: false,
        mergeFit: true,
        nav: false,
      },
      600: {
        items: 1,
        autoWidth: false,
        nav: false,
      },
      1000: {
        items: 1,
      },
    },
  });

  $("#owl-whatsapp-video").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 15,
    nav: true,
    autoHeight: false,
    // lazyLoad: true,
    dots: true,
    responsive: {
      0: {
        items: 1,
        autoWidth: false,
        mergeFit: true,
      },
      320: {
        items: 1,
        nav: false,
        loop: true,
        dots: true,
      },
      768: {
        items: 2,
        nav: false,
        loop: true,
        dots: true,
      },
      1024: {
        items: 3,
        dots: false,
        navText: [
          '<i class="fa fa-angle-left" aria-hidden="true"></i>',
          '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        ],
        dots: true,
      },
      1280: {
        items: 4,
        dots: false,
        navText: [
          '<i class="fa fa-angle-left" aria-hidden="true"></i>',
          '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        ],
        dots: true,
      },
    },
  });

  $().fancybox({
    selector: ".owl-item:not(.cloned) .fancy-box-tag",
    backFocus: false,
    hash: false,
    closeClick: true,
    thumbs: {
      autoStart: false,
    },
    buttons: ["zoom", "download", "close"],
  });

  $(".owl-career-location").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 20,
    stagePadding: 150,
    nav: true,
    dots: true,
    autoHeight: false,
    lazyLoad: true,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
        stagePadding: 0,
        loop: true,
      },
      320: {
        items: 1,
        stagePadding: 0,
        margin: 0,
        nav: false,
        loop: true,
        dots: true,
      },
      480: {
        items: 1,
        stagePadding: 0,
        margin: 0,
        nav: false,
        loop: true,
        dots: true,
      },
      768: {
        items: 1,
        stagePadding: 0,
        margin: 0,
        nav: false,
        loop: true,
        dots: true,
      },
      1000: {
        items: 3,
        dots: true,
        nav: true,
        navText: [
          '<i class="fa fa-angle-left" aria-hidden="true"></i>',
          '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        ],
      },
    },
  });

  $(".owl-collecttion-listing").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 45,
    stagePadding: 150,
    nav: true,
    rewind: true,
    dots: true,
    autoHeight: false,
    lazyLoad: true,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        stagePadding: 0,
        margin: 15,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        stagePadding: 0,
        margin: 15,
        nav: false,
        loop: false,
      },
      768: {
        items: 1,
        stagePadding: 0,
        margin: 40,
        nav: false,
        loop: false,
      },
      1000: {
        items: 2,
        dots: true,
        nav: true,
        navText: [
          '<i class="fa fa-angle-left" aria-hidden="true"></i>',
          '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        ],
      },
    },
  });

  // if ($(window).width() > 1023) {
  $(".owl-slider-new-list").owlCarousel({
    onRefreshed: checkHeightnew,
    loop: true,
    autoplay: false,
    margin: 15,
    nav: true,
    rewind: true,
    dots: true,
    autoHeight: true,
    lazyLoad: true,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        margin: 15,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        margin: 15,
        nav: false,
        loop: false,
      },
      768: {
        items: 1,
        margin: 40,
        nav: false,
        loop: false,
      },
      1000: {
        items: 3,
        dots: false,
        nav: true,
        navText: [
          '<img src="' + templateUrl + '/images/ic_previous_1_1.png"/>',
          '<img src="' + templateUrl + '/images/ic_next.png"/>',
        ],
      },
    },
  });
  $(".owl-slider-blog-project").owlCarousel({
    onRefreshed: checkHeightnew,
    loop: true,
    autoplay: false,
    margin: 10,
    nav: true,
    rewind: true,
    dots: true,
    autoHeight: false,
    lazyLoad: true,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        margin: 5,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        margin: 5,
        nav: false,
        loop: false,
      },
      768: {
        items: 1,
        margin: 10,
        nav: false,
        loop: false,
      },
      1000: {
        items: 3,
        dots: false,
        nav: true,
        navText: [
          '<img src="' + templateUrl + '/images/ic_previous_1_1.png"/>',
          '<img src="' + templateUrl + '/images/ic_next.png"/>',
        ],
      },
    },
  });
  $(".owl-slider-blog-gallery").owlCarousel({
    onRefreshed: checkHeightnew,
    loop: true,
    autoplay: false,
    margin: 10,
    nav: true,
    rewind: true,
    dots: true,
    autoHeight: false,
    lazyLoad: true,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        margin: 5,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        margin: 5,
        nav: false,
        loop: false,
      },
      768: {
        items: 1,
        margin: 10,
        nav: false,
        loop: false,
      },
      1000: {
        items: 3,
        dots: false,
        nav: true,
        navText: [
          '<img src="' + templateUrl + '/images/ic_previous_1_1.png"/>',
          '<img src="' + templateUrl + '/images/ic_next.png"/>',
        ],
      },
    },
  });
  // }
  // else {
  //     // $('.owl-slider-new-list').removeClass('owl-carousel owl-theme')

  // }
  $(".owl-trending-collection-listing").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 45,
    stagePadding: 150,
    nav: true,
    rewind: true,
    dots: true,
    autoHeight: false,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        stagePadding: 20,
        margin: 15,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        stagePadding: 20,
        margin: 15,
        nav: false,
        loop: false,
      },
      768: {
        items: 1,
        stagePadding: 100,
        margin: 40,
        nav: false,
        loop: false,
      },
      1000: {
        items: 2,
        dots: true,
        nav: true,
        navText: [
          '<i class="fa fa-angle-left" aria-hidden="true"></i>',
          '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        ],
      },
    },
  });

  $(".hero-slider").owlCarousel({
    items: 1,
    loop: true,
    autoplay: false,
    nav: false,
    dots: true,
  });
  // var home_slider = $('.home-slider');
  $(".home-slider").owlCarousel({
    items: 1,
    onRefreshed: checkHeight,
    loop: false,
    autoplay: false,
    rewind: true,
    //lazyLoad: true,
    nav: true,
    dots: true,
    autoHeight: true,
    navText: [
      '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      '<i class="fa fa-angle-right" aria-hidden="true"></i>',
    ],
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        nav: false,
        loop: false,
        rewind: true,
      },
      768: {},
      1000: {},
    },
  });

  $("#franchisee-banner-slider").owlCarousel({
    items: 1,
    onRefreshed: checkHeight,
    loop: false,
    autoplay: false,
    rewind: true,
    //lazyLoad: true,
    nav: true,
    dots: true,
    autoHeight: true,
    navText: [
      '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      '<i class="fa fa-angle-right" aria-hidden="true"></i>',
    ],
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        nav: false,
        loop: false,
        rewind: true,
      },
      768: {},
      1000: {},
    },
  });

  function checkHeight() {
    setTimeout(function () {
      $(".homepage-banner-row").removeClass("homepage-min-ht-slider");
      $(".franchisee-banner-row").removeClass("franchisee-min-ht-slider");
    }, 2000);
  }

  function checkHeightnew() {
    setTimeout(function () {
      $(".custon-interior-design").removeClass("homepage-min-ht-slider");
      $(".custon-interior-design").removeClass("homepage-min-ht-mobile-slider");
    }, 2000);
  }
  setTimeout(function () {
    $(".custom-row-blg").removeClass("featured-blog-cls");
    $(".blog-home-first-section").removeClass("custom-blg-ht");
  }, 2000);

  window.almComplete = function (alm) {
    if (wpcf7) {
      wpcf7.initForm($(".wpcf7-form"));
    }
  };

  $(".owl-collection-slider").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 50,
    nav: true,
    dots: true,
    autoHeight: false,
    lazyLoad: true,
    navText: [
      '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      '<i class="fa fa-angle-right" aria-hidden="true"></i>',
    ],
    responsive: {
      0: {
        items: 1,
        autoWidth: false,
        mergeFit: true,
        nav: false,
      },
      600: {
        items: 1,
        autoWidth: false,
        nav: false,
      },
      1000: {
        items: 1,
      },
    },
  });

  window.almOnLoad = function (alm) {
    $(".owl-collection-slider").owlCarousel({
      loop: true,
      autoplay: false,
      margin: 50,
      nav: true,
      dots: true,
      navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>',
      ],
      responsive: {
        0: {
          items: 1,
          autoWidth: false,
          mergeFit: true,
          nav: false,
        },
        600: {
          items: 1,
          autoWidth: false,
          nav: false,
        },
        1000: {
          items: 1,
        },
      },
    });

    $(".owl-project-slider").owlCarousel({
      loop: true,
      autoplay: false,
      margin: 50,
      items: 1,
      autoWidth: false,
      nav: true,
      center: true,
      dots: true,
      mergeFit: true,
      autoHeight: false,
      navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>',
      ],
      responsive: {
        0: {
          items: 1,
          //autoWidth:false,
          //mergeFit:true,
          nav: false,
        },
        320: {
          items: 1,
          //autoWidth:false,
          nav: false,
          dots: true,
          loop: true,
          autoHeight: false,
          //mergeFit:true,
        },
        480: {
          items: 1,
          //autoWidth:false,
          nav: false,
          dots: true,
          loop: true,
          autoHeight: false,
          //mergeFit:true,
        },
        768: {
          items: 1,
          //autoWidth:false,
          nav: false,
          dots: true,
          loop: true,
          mergeFit: true,
        },
        600: {
          items: 1,
          autoWidth: false,
          //mergeFit:true,
        },
        1000: {
          items: 1,
        },
      },
    });
    $(".owl-new-detail-slider").owlCarousel({
      loop: true,
      autoplay: false,
      margin: 15,
      nav: true,
      rewind: true,
      dots: true,
      autoHeight: false,
      responsive: {
        0: {
          items: 1,
          autoWidth: true,
          nav: false,
        },
        320: {
          items: 1,
          margin: 0,
          nav: false,
          loop: false,
        },
        480: {
          items: 1,
          margin: 0,
          nav: false,
          loop: false,
        },
        768: {
          items: 1,
          margin: 0,
          nav: false,
          loop: false,
        },
        1000: {
          items: 1,
          dots: true,
          nav: true,
          navText: [
            '<img src="' + templateUrl + '/images/ic_previous_1_1.png"/>',
            '<img src="' + templateUrl + '/images/ic_next.png"/>',
          ],
        },
      },
    });

    $(".guide-single-content .owl-carousel")
      .addClass("owl-carosal-arrow")
      .addClass("owl-theme")
      .removeClass("sa_owl_theme");
  };

  window.almComplete = function (alm) {
    $(".guide-single-content .owl-carousel")
      .addClass("owl-carosal-arrow")
      .addClass("owl-theme")
      .removeClass("sa_owl_theme");
    $(".owl-collection-slider").owlCarousel({
      loop: true,
      autoplay: false,
      margin: 50,
      nav: true,
      dots: true,
      navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>',
      ],
      responsive: {
        0: {
          items: 1,
          autoWidth: false,
          mergeFit: true,
          nav: false,
        },
        600: {
          items: 1,
          autoWidth: false,
          nav: false,
        },
        1000: {
          items: 1,
        },
      },
    });

    $(".owl-project-slider").owlCarousel({
      loop: true,
      autoplay: false,
      margin: 50,
      items: 1,
      autoWidth: false,
      nav: true,
      center: true,
      dots: true,
      mergeFit: true,
      autoHeight: false,
      navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>',
      ],
      responsive: {
        0: {
          items: 1,
          //autoWidth:false,
          //mergeFit:true,
          nav: false,
        },
        320: {
          items: 1,
          //autoWidth:false,
          nav: false,
          dots: true,
          loop: true,
          autoHeight: false,
          //mergeFit:true,
        },
        480: {
          items: 1,
          //autoWidth:false,
          nav: false,
          dots: true,
          loop: true,
          autoHeight: false,
          //mergeFit:true,
        },
        768: {
          items: 1,
          //autoWidth:false,
          nav: false,
          dots: true,
          loop: true,
          mergeFit: true,
        },
        600: {
          items: 1,
          autoWidth: false,
          //mergeFit:true,
        },
        1000: {
          items: 1,
        },
      },
    });
    $(".owl-new-detail-slider").owlCarousel({
      loop: true,
      autoplay: false,
      margin: 15,
      nav: true,
      rewind: true,
      dots: true,
      autoHeight: false,
      responsive: {
        0: {
          items: 1,
          autoWidth: true,
          nav: false,
        },
        320: {
          items: 1,
          margin: 0,
          nav: false,
          loop: false,
        },
        480: {
          items: 1,
          margin: 0,
          nav: false,
          loop: false,
        },
        768: {
          items: 1,
          margin: 0,
          nav: false,
          loop: false,
        },
        1000: {
          items: 1,
          dots: true,
          nav: true,
          navText: [
            '<img src="' + templateUrl + '/images/ic_previous_1_1.png"/>',
            '<img src="' + templateUrl + '/images/ic_next.png"/>',
          ],
        },
      },
    });
  };

  window.almDone = function () {
    $(".guide-single-content .owl-carousel")
      .addClass("owl-carosal-arrow")
      .removeClass("sa_owl_theme");
  };
  window.almFilterComplete = function () {
    $(".filter-expand-section").collapse("hide");
  };

  //----- Toggle ------//
  $(".second-button").on("click", function () {
    $(".animated-icon2").toggleClass("open");
  });

  $(".container-fluid").on("click", function () {
    if ($(".animated-icon2").hasClass("open")) {
      $(".navbar-brand").removeClass("nav-bar-mobile-div");
      $("#navbarNavDropdown").removeClass("show");
      $(".animated-icon2").removeClass("open");
    }
  });

  $(".container-fluid").scroll(function () {
    if ($(".animated-icon2").hasClass("open")) {
      $(".navbar-brand").removeClass("nav-bar-mobile-div");
      // $('#navbarNavDropdown').removeClass('show');
      // $('.animated-icon2').removeClass('open');
    }
  });

  window.addEventListener("scroll", function (e) {
    if ($(".animated-icon2").hasClass("open")) {
      $(".navbar-brand").removeClass("nav-bar-mobile-div");
      // $('#navbarNavDropdown').removeClass('show');
      // $('.animated-icon2').removeClass('open');
    }
  });

  // ----- Footer Stickey ------//
  // $(window).scroll(function() {
  //     if ($(window).scrollTop() > 0) {
  //         $('.footer-stickey-mobile').show();
  //     } else {
  //         $('.footer-stickey-mobile').hide();
  //     }
  // });

  // ====== YouTube Thumbnail ======
  $(".ytvideo[data-video]").one("click", function () {
    var $this = $(this);
    var width = $this.attr("width");
    var height = $this.attr("height");

    $this.html(
      '<iframe src="https://www.youtube.com/embed/' +
        $this.data("video") +
        '?rel=0&amp;controls=1&amp;showinfo=0&amp;autoplay=1&amp;mute=0&amp;cc_load_policy=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
    );
  });

  $(".blogVdo[data-video]").one("click", function () {
    var $this = $(this);
    var blogwidth = $($this).width();
    var blogheight = $($this).height();
    console.log("trsr", blogheight);
    $this.html(
      '<iframe src="https://www.youtube.com/embed/' +
        $this.data("video") +
        '?rel=0&amp;controls=1&amp;showinfo=0;autoplay=1&mute=0" width="' +
        blogwidth +
        '" height="' +
        blogheight +
        '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
    );
  });
  // pattern js file

  $.validator.addMethod(
    "pattern",
    function (value, element, param) {
      if (this.optional(element)) {
        return true;
      }
      if (typeof param === "string") {
        param = new RegExp("^(?:" + param + ")$");
      }
      return param.test(value);
    },
    "Invalid format."
  );

  $("a[rel^='prettyPhoto']").prettyPhoto();

  function clearContactUsForm() {
    $("#AffiliatesPopupForm").trigger("reset");
    $("#AffiliatesPopupForm").validate().resetForm();
    $("#AffiliatesPopupForm .selectpicker")
      .val("default")
      .selectpicker("refresh");
    $("#book-appt-lead-form").prop("disabled", false);
    $("#book-appt-lead-form i").css("display", "none");
  }
  $("#AffiliatesPopupForm").validate({
    onfocusout: function (element) {
      this.element(element);
    },
    errorPlacement: function (error, element) {
      if (element.attr("name") == "your-name") {
        $("#form-name-message").show();
        $("#form-name-message").css("visibility", "visible");

        $("#text-form-message-name-1").hide();
        $("#error-message-show").show().text("Enter your valid name");
        $("#error-message-show").addClass("error");
      } else if (element.attr("name") == "your-mobilenumber") {
        $("#form-in-message").css("display", "inline-block");
        $("#form-in-message").css("visibility", "visible");
        $("#text-form-message-phone").replaceWith(error.insertAfter(element));
        $(".error").addClass("form-select-message");
      } else if (element.attr("name") == "email") {
        $("#form-email-message").show();
        $("#error-email-message-show").replaceWith(error.insertAfter(element));
        $(".error").addClass("form-select-message");
      } else if (
        element.attr("name") == "your-city" &&
        $("#cityname :selected").text() == "Property Location"
      ) {
        console.log("slectiond");
        $("#location-message").show();
        $("#location-message").css("visibility", "visible");
        $("#location-message-change").text("Please select a location.");
        $("#location-message-change").css("color", "#e61323");
      }
    },
    success: function (label, element) {
      if (label.attr("for") == "form-input-name") {
        $("#text-form-message-name-1").show();
        $("#error-message-show").hide();
      }
      if (label.attr("for") == "popup-phone") {
        // if($('#popup-phone').attr("name") == "your-mobilenumber") {
        label
          .addClass("valid")
          .text("Do pick up when we call. Our numbers start with 080-680");
        // $(".submit-wraper, .form-terms-cond").show(300);
      }
    },
    rules: {
      "your-name": {
        required: true,
        pattern: /^[a-zA-Z]+(([ ][a-zA-Z ])?[a-zA-Z]*)*$/,
      },
      "your-mobilenumber": {
        required: true,
        maxlength: function () {
          var country = $(".dc-cntry-code").val();

          if (country == "+44") {
            return 11;
          } else {
            return 10;
          }
        },

        pattern: function (element) {
          var cntryCode = $(".dc-cntry-code").val();
          if (cntryCode == "+91" || !cntryCode) {
            var check_country_code = /^[1-9]\d{9}$|^[1-9]\d{9}$/;
            return check_country_code;
          } else {
            //console.log('akash');
            var check_country_code = /^[1-9]\d{4,10}$|^[1-9]\d{4,10}$/;

            return check_country_code;
          }
        },
      },
      email: {
        required: false,
        pattern:
          /^(.+)@((?:[a-zA-Z0-9])+)\.([a-zA-z]{2,4})([\.][a-zA-Z]{2,4}){0,1}$/,
      },
      "PropertyType[]": {
        required: true,
      },
      "your-city": {
        required: true,
      },
    },
    messages: {
      "your-name": {
        required: "Enter your name.",
        pattern: "Enter a valid name",
      },
      "your-mobilenumber": {
        required: "Enter a valid mobile phone number.",
        maxlength: "Enter a valid mobile phone number.",
        minlength: "Enter a valid mobile phone number.",
        pattern: "Enter a valid mobile phone number.",
      },
      email: {
        required: "Enter a valid email address.",
        pattern: "Enter a valid email address.",
      },
      "PropertyType[]": {
        required: "Please select property type.",
      },
      "your-city": {
        required: "Please select a location.",
      },
    },
    submitHandler: function (form) {
      try {
        var formURL = $("#AffiliatesPopupForm").attr("action");
        var formData = $("#AffiliatesPopupForm").serializeArray();
        //console.log("data1", formData);
        console.log(formData[2].value);
        console.log(formData[4].value);
        webengage.track("Free_Consultation_Booked");
        webengage.user.login(formData[4].value); // Phone number
        webengage.user.setAttribute("we_phone", formData[4].value);
        webengage.user.setAttribute("we_first_name", formData[2].value);
        $.ajax({
          url: formURL,
          type: "POST",
          data: formData,
          beforeSend: function () {
            $("#LeadPopFormSubmitBtnAffiliates").prop("disabled", true);
            $("#LeadPopFormSubmitBtnAffiliates .lds-ring").css(
              "display",
              "inline-block"
            );
            $("#errorMsgPopAffiliates").text("");
          },
          success: function (data, textStatus, jqXHR) {
            data = JSON.parse(data);
            console.log("data2", data);
            if (
              data.redirect_url &&
              !window.location.href.match(data.redirect_url)
            ) {
              clearContactUsForm();
              window.location =
                window.location.origin +
                "/thank-you/?ref=" +
                window.location.href;
            } else {
              $("#LeadPopFormSubmitBtnAffiliates").prop("disabled", false);
              $("#LeadPopFormSubmitBtnAffiliates .lds-ring").css(
                "display",
                "none"
              );
              // $('#errorMsgPopAffiliates').text("Something went wrong, please try again later!");
              clearContactUsForm();
              window.location =
                window.location.origin +
                "/thank-you/?ref=" +
                window.location.href;
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
            $(".LeadPopFormSubmitBtnAffiliates").prop("disabled", false);
            $(".LeadPopFormSubmitBtnAffiliates .lds-ring").css(
              "display",
              "none"
            );
            // $('#errorMsgPopAffiliates').text("Something went wrong, please try again later!");
            clearContactUsForm();
            //window.location = window.location.origin + '/thank-you/?ref=' + window.location.href;
          },
        });
      } catch (e) {
        $("#LeadPopFormSubmitBtnAffiliates").prop("disabled", false);
        $("#LeadPopFormSubmitBtnAffiliates .lds-ring").css("display", "none");
        clearContactUsForm();
        window.location =
          window.location.origin + "/thank-you/?ref=" + window.location.href;
      }
    },
  });

  $("#AffiliatesLeadFormClose").on("click", function () {
    clearAffiliatesPopupForm();
  });

  $("#AffiliatesPopupForm .selectpicker").on("change", function () {
    $(this).valid();
  });
  setTimeout(function () {
    $("#formModalpopupAds").modal("show");
  }, 30000);

  $("input[name='PropertyType[]'], input[name='your-city']").on(
    "change",
    function () {
      if (
        $(this).val() !== "" &&
        $("input[name='your-city']").is(":checked") &&
        $("input[name='PropertyType[]']").is(":checked") == true
      ) {
        $(".form-text-section").show(300);
        $(".submit-wraper, .form-terms-cond").show(300);
      }
    }
  );
  /*$('#popup-phone').on('keypress keydown keyup', function() {
        var phone_ext = $('#phone-no-ext').val();
        if (phone_ext == "+91") {
            var value = $(".mobile-phone-ext:input[type='tel']").val();
            if ($(".mobile-phone-ext:input[type='tel']").val() !== "" && value.length == 10) {
                $('#text-form-message-phone').text('Do pick up when we call. Our numbers start with 080-680');
                $('#text-form-message-phone').removeClass('error-msg');
            } else if ($(".mobile-phone-ext:input[type='tel']").val() !== "" && value.length >= 4 && value.length <= 11) {
                $('#text-form-message-phone').text('Enter a valid mobile phone number');
                $('#text-form-message-phone').addClass('error-msg');
            }
        }
    });*/

  $("input[name='PropertyType[]']").on("change", function () {
    if ($(this).val() !== "") {
      $("#property-message").show(200);
      $("#property-message").css("visibility", "visible");

      $("input[name='PropertyType[]'] + label").css("color", "#cfcece");
      $("input[name='PropertyType[]'] + label").css("border-color", "#cfcece");
      $(".form-radio-gp input[type=radio]:checked + label").css(
        "color",
        "#666666"
      );
      $(".form-radio-gp input[type=radio]:checked + label").css(
        "border-color",
        "#cea779"
      );

      console.log("sdfsd");
      var radioValue = $("input[name='PropertyType[]']:checked").val();
      if (radioValue == "1 BHK") {
        $("#property-message-change").text("We find hidden space in 1BHKs");
      } else if (radioValue == "2 BHK") {
        $("#property-message-change").text(
          "We've got smart designs for your 2 bedroom home"
        );
      } else if (radioValue == "3 BHK") {
        $("#property-message-change").text(
          "Our designs satisfy all family members"
        );
      } else if (radioValue == "4+ BHK / Duplex") {
        $("#property-message-change").text(
          "Our designs satisfy all family members"
        );
      } else if (radioValue == "Independent Home / Villa") {
        $("#property-message-change").text(
          "We can design all spaces of your sprawling home"
        );
      }
    }
  });
  $("#cityname").change(function () {
    if ($(this).val() !== "") {
      $("#location-message").show(200);
      $("#location-message").css("visibility", "visible");

      $("#location-message-change").css("color", "#000");
      $("input[name='your-city'] + label").css("color", "#cfcece");
      $("input[name='your-city'] + label").css("border-color", "#cfcece");
      $(".form-radio-gp input[type=radio]:checked + label").css(
        "color",
        "#666666"
      );
      $(".form-radio-gp input[type=radio]:checked + label").css(
        "border-color",
        "#cea779"
      );
      var radioValue1 = $(this).val();
      $("#location-message").css("color", "#cfcece");
      if (radioValue1 == "Outstation") {
        $("#form-input-location-name").show(200);
        $("#form-input-location-name").css("visibility", "visible");
        $("#location-message").hide();
        $("#location-message").css("visibility", "hidden");
        // $("#location-message-change").text("Please select a location.");
        // $("#location-message-change").css("color", "#e61323");
      } else {
        $("#form-input-location-name").hide();
        $("#form-input-location-name").css("visibility", "hidden");
      }

      if (radioValue1 == "Mumbai") {
        $("#location-message-change").text(
          "Mumbaikars love the extra space we create "
        );
        $(".city-img").attr("alt", "Home Interiors Mumbai");
        $("#location-image-change").attr(
          "src",
          "https://media.designcafe.com/wp-content/uploads/2024/05/03115246/ic_mumbai.png"
        );
      } else if (radioValue1 == "Navi Mumbai") {
        $("#location-message-change").text(
          "Mumbaikars love the extra space we create "
        );
        $(".city-img").attr("alt", "Home Interiors Navi Mumbai");
        $("#location-image-change").attr(
          "src",
          "https://media.designcafe.com/wp-content/uploads/2024/05/03115246/ic_mumbai.png"
        );
      } else if (radioValue1 == "Mysore") {
        $("#location-message-change").text("Come meet our designers in Mysore");
        $(".city-img").attr("alt", "Home Interiors Mysore");
        $("#location-image-change").attr(
          "src",
          "https://media.designcafe.com/wp-content/uploads/2024/05/03115232/ic_mysore.jpg"
        );
      } else if (radioValue1 == "Bengaluru") {
        $("#location-message-change").text(
          "Our hometown too! - with many happy customers"
        );
        $(".city-img").attr("alt", "Home Interiors Bangalore");
        $("#location-image-change").attr(
          "src",
          "https://media.designcafe.com/wp-content/uploads/2024/05/03115254/konark-sun-temple-bangalore.png"
        );
      } else if (radioValue1 == "Hyderabad") {
        $("#location-message-change").text(
          "Visit our dazzling experience centre in Banjara hills and Gachibowli"
        );
        $(".city-img").attr("alt", "Home Interiors Hyderabad");
        $("#location-image-change").attr(
          "src",
          "https://media.designcafe.com/wp-content/uploads/2024/05/03115250/hyderabad-charminar.png"
        );
      } else if (radioValue1 == "Chennai") {
        $("#location-message-change").text(
          "The city of art, culture, beaches and heritage - a designer's dream!"
        );
        $(".city-img").attr("alt", "Home Interiors Chennai");
        $("#location-image-change").attr(
          "src",
          "https://media.designcafe.com/wp-content/uploads/2024/05/03115155/chennai-black.png"
        );
      } else if (radioValue1 == "Thane") {
        $("#location-message-change").text("Come meet our designers in Thane");
        $(".city-img").attr("alt", "Home Interiors Thane");
        $("#location-image-change").attr(
          "src",
          "https://media.designcafe.com/wp-content/uploads/2024/05/03115237/thane.png"
        );
      } else if (radioValue1 == "Pune") {
        $("#location-message-change").text(
          "Oh the smartest city  - we love Pune!"
        );
        $(".city-img").attr("alt", "Home Interiors Pune");
        $("#location-image-change").attr(
          "src",
          "https://media.designcafe.com/wp-content/uploads/2024/05/03115226/ic_pune.jpg"
        );
      } else if (radioValue1 == "Coimbatore") {
        $("#location-message-change").text(
          "A city full of heritage and colour - we love it!"
        );
        $(".city-img").attr("alt", "Home Interiors Coimbatore");
        $("#location-image-change").attr(
          "src",
          "https://media.designcafe.com/wp-content/uploads/2022/09/06155354/coimbatore-icon.png"
        );
      } else if (radioValue1 == "Vizag") {
        $("#location-message-change").text(
          "The city of maritime experiences, temples and museums - we love it!"
        );
        $(".city-img").attr("alt", "Home Interiors Vizag");
        $("#location-image-change").attr(
          "src",
          "https://media.designcafe.com/wp-content/uploads/2022/12/15120744/vizag-icon-black.png"
        );
      } else if (
        radioValue1 == "Ahmedabad" ||
        radioValue1 == "Gandhinagar" ||
        radioValue1 == "Anand Nagar"
      ) {
        $("#location-message-change").text(
          "The city of old charm & pioneering progress!"
        );
        $(".city-img").attr("alt", "Home Interiors Vizag");
        $("#location-image-change").attr(
          "src",
          "https://www.designcafe.com/wp-content/uploads/2023/07/Ahmedabad-Icon-Black.png"
        );
      } else if (radioValue1 == "Kolkata") {
        $("#location-message-change").text(
          "The city of joy! Where heritage meets modernity"
        );
        $(".city-img").attr("alt", "Home Interiors Vizag");
        $("#location-image-change").attr(
          "src",
          "https://www.designcafe.com/wp-content/uploads/2023/07/Kolkata-Icon-Black.png"
        );
      } else if (radioValue1 == "Surat") {
        $("#location-message-change").text("Where heritage meets innovation!");
        $(".city-img").attr("alt", "Home Interiors Surat");
        $("#location-image-change").attr(
          "src",
          "https://media.designcafe.com/wp-content/uploads/2023/09/13114507/surat-Icon-black.png"
        );
      } else if (radioValue1 == "Vadodara") {
        $("#location-message-change").text(
          "The heart of tradition, heritage and artistry"
        );
        $(".city-img").attr("alt", "Home Interiors Vadodara");
        $("#location-image-change").attr(
          "src",
          "https://media.designcafe.com/wp-content/uploads/2023/09/13114503/vadodara-black-icon.png"
        );
      }
    }
  });
  $(".text-input-name:input[type='text']").on("focusout", function () {
    if ($(this).val() !== "") {
      $("#form-name-message").show(200);
      $("#form-name-message").css("visibility", "visible");

      var currentText = $(this).val();
      var firstWord = currentText.replace(/ .*/, "");
      $("#input-name-val").text(firstWord);
    }
  });

  $(".mobile-phone-ext:input[type='tel']").on("focusin", function () {
    $("#form-in-message").show(200);
    $("#form-in-message").css("visibility", "visible");
    var value = $(".mobile-phone-ext:input[type='tel']").val();
    if (value == 10) {
      $(".submit-wraper, .form-terms-cond").show(300);
    }
  });

  $(".mobile-phone-ext:input[type='tel']").focus(function () {
    if ($("#form-input-name").val() == "") {
      $("#text-form-message-name-1").hide();
      $("#form-name-message ").show();
      $("#form-name-message").css("visibility", "visible");
      $("#error-message-show").show().text("Enter your name");
    }
  });

  window.onpopstate = function (event) {
    var new_state = event.state;
  };

  var timeout = null;

  // Exit intent trigger
  var pathname = window.location.pathname;
  //console.log(pathname);
  if (
    pathname != "/p/thank-you/" &&
    pathname != "/thank-you/" &&
    pathname != "/refer-a-friend/" &&
    pathname != "/refer-and-earn/" &&
    pathname != "/franchisee/"
  ) {
    setTimeout(() => {
      $(document).on("mouseout", (evt) => {
        if (evt.toElement === null && evt.relatedTarget === null) {
          $(evt.currentTarget).off("mouseout");
          $("#contactUsModal").modal("show");
        }
      });
    }, 1000);
  }

  $("#ContactUsForm").validate({
    onfocusout: function (element) {
      this.element(element);
    },
    errorPlacement: function (error, element) {
      if (element.attr("name") == "your-city") {
        error.insertAfter(element.parent("div"));
      } else if (element.attr("name") == "PropertyType[]") {
        error.insertAfter(element.parent("div"));
      } else {
        error.insertAfter(element);
      }
    },
    rules: {
      "your-name": {
        required: true,
        pattern: /^[a-zA-Z]+(([ ][a-zA-Z ])?[a-zA-Z]*)*$/,
      },
      "your-mobilenumber": {
        required: true,
        minlength: 10,
        pattern: /^[1-9]\d{9}$|^[1-9]\d{9}$/,
      },
      email: {
        required: true,
        pattern:
          /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
      },
      "PropertyType[]": {
        required: true,
      },
      "your-city": {
        required: true,
      },
    },
    messages: {
      "your-name": {
        required: "Enter your name.",
      },
      "your-mobilenumber": {
        required: "Enter a valid mobile phone number.",
        minlength: "Enter a valid mobile phone number.",
        pattern: "Enter a valid mobile phone number.",
      },
      email: {
        required: "Enter a valid email address.",
        pattern: "Enter a valid email address.",
      },
      "PropertyType[]": {
        required: "Please select one or more property type.",
      },
      "your-city": {
        required: "Please select a location.",
      },
    },
    submitHandler: function (form) {
      try {
        var formURL = $("#ContactUsForm").attr("action");
        var formData = $("#ContactUsForm").serializeArray();
        $.ajax({
          url: formURL,
          type: "POST",
          data: formData,
          beforeSend: function () {
            $("#book-appt-lead-form").prop("disabled", true);
            $("#book-appt-lead-form i").css("display", "inline-block");
          },
          success: function (data, textStatus, jqXHR) {
            data = JSON.parse(data);
            if (
              data.redirect_url &&
              !window.location.href.match(data.redirect_url)
            ) {
              clearContactUsForm();
              window.location = data.redirect_url;
            } else {
              $("#book-appt-lead-form").prop("disabled", false);
              $("#book-appt-lead-form i").css("display", "none");
              // $('#errorMsg').text("Something went wrong, please try again later!");
              clearMumbaiLeadForm();
              window.location = window.location.origin + "/thank-you/";
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
            $("#book-appt-lead-form").prop("disabled", false);
            $("#book-appt-lead-form i").css("display", "none");
            // $('#errorMsg').text("Something went wrong, please try again later!");
            clearMumbaiLeadForm();
            window.location = window.location.origin + "/thank-you/";
          },
        });
      } catch (e) {
        $("#book-appt-lead-form").prop("disabled", false);
        $("#book-appt-lead-form i").css("display", "none");
        // $('#errorMsg').text("Something went wrong, please try again later!");
        clearMumbaiLeadForm();
        window.location = window.location.origin + "/thank-you/";
      }
    },
  });
  $("#ContactUsForm .leadform-input.selectpicker").on("change", function () {
    $(this).valid();
  });

  $("#ContactUsForm .leadform-input.selectpicker")
    .on("changed.bs.select", function (e) {
      $(this)
        .prevAll(".dropdown-toggle")
        .toggleClass("bs-placeholder", this.value === "");
    })
    .trigger("changed.bs.select");

  $(".leadform-close-btn").on("click", function (e) {
    clearContactUsForm();
  });

  $("#contactUsModal").on("hide.bs.modal", function () {
    // $("#AffiliatesPopupForm").validate().resetForm();
    // clearContactUsForm();
  });

  /* contact us form on contact us page */
  function clearContactUsFormMain() {
    $("#ContactUsFormMain").trigger("reset");
    $("#ContactUsFormMain").validate().resetForm();
    $("#ContactUsFormMain .leadform-input.selectpicker")
      .val("default")
      .selectpicker("refresh");
    $("#ContactFormSubmitBtn").prop("disabled", false);
    $("#ContactFormSubmitBtn i").css("display", "none");
  }
  $("#ContactUsFormMain").validate({
    onfocusout: function (element) {
      this.element(element);
    },
    errorPlacement: function (error, element) {
      if (element.attr("name") == "your-city") {
        error.insertAfter(element.parent("div"));
      } else if (element.attr("name") == "PropertyType[]") {
        error.insertAfter(element.parent("div"));
      } else {
        error.insertAfter(element);
      }
    },
    rules: {
      "your-name": {
        required: true,
        pattern: /^[a-zA-Z]+(([ ][a-zA-Z ])?[a-zA-Z]*)*$/,
      },
      "your-mobilenumber": {
        required: true,
        minlength: 10,
        pattern: /^[1-9]\d{9}$|^[1-9]\d{9}$/,
      },
      email: {
        required: true,
        pattern:
          /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
      },
      "PropertyType[]": {
        required: true,
      },
      "your-city": {
        required: true,
      },
    },
    messages: {
      "your-name": {
        required: "Enter your name.",
      },
      "your-mobilenumber": {
        required: "Enter a valid mobile phone number.",
        minlength: "Enter a valid mobile phone number.",
        pattern: "Enter a valid mobile phone number.",
      },
      email: {
        required: "Enter a valid email address.",
        pattern: "Enter a valid email address.",
      },
      "PropertyType[]": {
        required: "Please select property type.",
      },
      "your-city": {
        required: "Please select a location.",
      },
    },
    submitHandler: function (form) {
      try {
        var formURL = $("#ContactUsFormMain").attr("action");
        var formData = $("#ContactUsFormMain").serializeArray();
        $.ajax({
          url: formURL,
          type: "POST",
          data: formData,
          beforeSend: function () {
            $("#ContactFormSubmitBtn").prop("disabled", true);
            $("#ContactFormSubmitBtn i").css("display", "inline-block");
          },
          success: function (data, textStatus, jqXHR) {
            data = JSON.parse(data);
            //console.log(data);
            if (
              data.redirect_url &&
              !window.location.href.match(data.redirect_url)
            ) {
              clearContactUsFormMain();
              window.location = data.redirect_url;
              $("#contactErrorMsg").text(
                "Thank you for your message. It has been sent."
              );
              $("#contactErrorMsg").removeClass("text-danger");
              $("#contactErrorMsg").addClass("text-success");
            } else {
              $("#ContactFormSubmitBtn").prop("disabled", false);
              $("#ContactFormSubmitBtn i").css("display", "none");
              // $('#contactErrorMsg').text("Something went wrong, please try again later!");
              clearMumbaiLeadForm();
              window.location = window.location.origin + "/thank-you/";
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            //console.log(errorThrown);
            $("#ContactFormSubmitBtn").prop("disabled", false);
            $("#ContactFormSubmitBtn i").css("display", "none");
            // $('#contactErrorMsg').text("Something went wrong, please try again later!");
            clearMumbaiLeadForm();
            window.location = window.location.origin + "/thank-you/";
          },
        });
      } catch (e) {
        $("#ContactFormSubmitBtn").prop("disabled", false);
        $("#ContactFormSubmitBtn i").css("display", "none");
        // $('#contactErrorMsg').text("Something went wrong, please try again later!");
        clearMumbaiLeadForm();
        window.location = window.location.origin + "/thank-you/";
      }
    },
  });
  $("#ContactUsFormMain .leadform-input.selectpicker").on(
    "change",
    function () {
      $(this).valid();
    }
  );

  $("#ContactUsFormMain .leadform-input.selectpicker")
    .on("changed.bs.select", function (e) {
      $(this)
        .prevAll(".dropdown-toggle")
        .toggleClass("bs-placeholder", this.value === "");
    })
    .trigger("changed.bs.select");

  /* contact us form on contact us Homepage */
  /*bottom blog form*/
  function clearblogContactUsFormMain() {
    $("#blogContactUsFormMain").trigger("reset");
    $("#blogContactUsFormMain").validate().resetForm();
    $("#blogContactUsFormMain .leadform-input.selectpicker")
      .val("default")
      .selectpicker("refresh");
    $("#ContactFormSubmitBtn").prop("disabled", false);
    $("#ContactFormSubmitBtn i").css("display", "none");
  }
  $("#blogContactUsFormMain").validate({
    onfocusout: function (element) {
      this.element(element);
    },
    errorPlacement: function (error, element) {
      if (element.attr("name") == "your-city") {
        error.insertAfter(element.parent("div"));
      } else if (element.attr("name") == "PropertyType[]") {
        error.insertAfter(element.parent("div"));
      } else {
        error.insertAfter(element);
      }
    },
    rules: {
      "your-name": {
        required: true,
        pattern: /^[a-zA-Z]+(([ ][a-zA-Z ])?[a-zA-Z]*)*$/,
      },
      "your-mobilenumber": {
        required: true,
        minlength: 10,
        pattern: /^[1-9]\d{9}$|^[1-9]\d{9}$/,
      },
      email: {
        required: true,
        pattern:
          /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
      },
      "PropertyType[]": {
        required: true,
      },
      "your-city": {
        required: true,
      },
    },
    messages: {
      "your-name": {
        required: "Enter your name.",
      },
      "your-mobilenumber": {
        required: "Enter a valid mobile phone number.",
        minlength: "Enter a valid mobile phone number.",
        pattern: "Enter a valid mobile phone number.",
      },
      email: {
        required: "Enter a valid email address.",
        pattern: "Enter a valid email address.",
      },
      "PropertyType[]": {
        required: "Please select property type.",
      },
      "your-city": {
        required: "Please select a location.",
      },
    },
    submitHandler: function (form) {
      try {
        var formURL = $("#blogContactUsFormMain").attr("action");
        var formData = $("#blogContactUsFormMain").serializeArray();
        $.ajax({
          url: formURL,
          type: "POST",
          data: formData,
          beforeSend: function () {
            $("#ContactFormSubmitBtn").prop("disabled", true);
            $("#ContactFormSubmitBtn i").css("display", "inline-block");
          },
          success: function (data, textStatus, jqXHR) {
            data = JSON.parse(data);
            //console.log(data);
            if (
              data.redirect_url &&
              !window.location.href.match(data.redirect_url)
            ) {
              clearblogContactUsFormMain();
              window.location = data.redirect_url;
              $("#contactErrorMsg").text(
                "Thank you for your message. It has been sent."
              );
              $("#contactErrorMsg").removeClass("text-danger");
              $("#contactErrorMsg").addClass("text-success");
            } else {
              $("#ContactFormSubmitBtn").prop("disabled", false);
              $("#ContactFormSubmitBtn i").css("display", "none");
              // $('#contactErrorMsg').text("Something went wrong, please try again later!");
              clearMumbaiLeadForm();
              window.location = window.location.origin + "/thank-you/";
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            //console.log(errorThrown);
            $("#ContactFormSubmitBtn").prop("disabled", false);
            $("#ContactFormSubmitBtn i").css("display", "none");
            // $('#contactErrorMsg').text("Something went wrong, please try again later!");
            clearMumbaiLeadForm();
            window.location = window.location.origin + "/thank-you/";
          },
        });
      } catch (e) {
        $("#ContactFormSubmitBtn").prop("disabled", false);
        $("#ContactFormSubmitBtn i").css("display", "none");
        // $('#contactErrorMsg').text("Something went wrong, please try again later!");
        clearMumbaiLeadForm();
        window.location = window.location.origin + "/thank-you/";
      }
    },
  });
  $("#blogContactUsFormMain .leadform-input.selectpicker").on(
    "change",
    function () {
      $(this).valid();
    }
  );

  $("#blogContactUsFormMain .leadform-input.selectpicker")
    .on("changed.bs.select", function (e) {
      $(this)
        .prevAll(".dropdown-toggle")
        .toggleClass("bs-placeholder", this.value === "");
    })
    .trigger("changed.bs.select");

  /*bottomblog form end*/
  function clearContactUsFormMainHome() {
    $("#ContactUsFormMainHome").trigger("reset");
    $("#ContactUsFormMainHome").validate().resetForm();
    $("#ContactUsFormMainHome .leadform-input.selectpicker")
      .val("default")
      .selectpicker("refresh");
    $("#ContactFormSubmitBtn").prop("disabled", false);
    $("#ContactFormSubmitBtn i").css("display", "none");
  }
  $("#ContactUsFormMainHome").validate({
    onfocusout: function (element) {
      this.element(element);
    },
    errorPlacement: function (error, element) {
      if (element.attr("name") == "your-city") {
        error.insertAfter(element.parent("div"));
      } else if (element.attr("name") == "PropertyType[]") {
        error.insertAfter(element.parent("div"));
      } else {
        error.insertAfter(element);
      }
    },
    rules: {
      "your-name": {
        required: true,
        pattern: /^[a-zA-Z]+(([ ][a-zA-Z ])?[a-zA-Z]*)*$/,
      },
      "your-mobilenumber": {
        required: true,
        minlength: 10,
        pattern: /^[1-9]\d{9}$|^[1-9]\d{9}$/,
      },
      "PropertyType[]": {
        required: false,
      },
      "your-city": {
        required: true,
      },
    },
    messages: {
      "your-name": {
        required: "Enter your name.",
      },
      "your-mobilenumber": {
        required: "Enter a valid mobile phone number.",
        minlength: "Enter a valid mobile phone number.",
        pattern: "Enter a valid mobile phone number.",
      },
      "PropertyType[]": {
        required: "Please select one or more property type.",
      },
      "your-city": {
        required: "Please select a location.",
      },
    },
    submitHandler: function (form) {
      try {
        var formURL = $("#ContactUsFormMainHome").attr("action");
        var formData = $("#ContactUsFormMainHome").serializeArray();
        $.ajax({
          url: formURL,
          type: "POST",
          data: formData,
          beforeSend: function () {
            $("#ContactFormSubmitBtn").prop("disabled", true);
            $("#ContactFormSubmitBtn i").css("display", "inline-block");
          },
          success: function (data, textStatus, jqXHR) {
            data = JSON.parse(data);
            //console.log(data);
            if (
              data.redirect_url &&
              !window.location.href.match(data.redirect_url)
            ) {
              clearContactUsFormMainHome();
              $(".user-research-step-2").slideUp(200);
              $(".user-research-step-3").slideDown(200);
              $("#contactErrorMsg").text(
                "Thank you for your message. It has been sent."
              );
              $("#contactErrorMsg").removeClass("text-danger");
              $("#contactErrorMsg").addClass("text-success");
            } else {
              $("#ContactFormSubmitBtn").prop("disabled", false);
              $("#ContactFormSubmitBtn i").css("display", "none");
              // $('#contactErrorMsg').text("Something went wrong, please try again later!");
              clearMumbaiLeadForm();
              window.location = window.location.origin + "/thank-you/";
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            //console.log(errorThrown);
            $("#ContactFormSubmitBtn").prop("disabled", false);
            $("#ContactFormSubmitBtn i").css("display", "none");
            // $('#contactErrorMsg').text("Something went wrong, please try again later!");
            clearMumbaiLeadForm();
            window.location = window.location.origin + "/thank-you/";
          },
        });
      } catch (e) {
        $("#ContactFormSubmitBtn").prop("disabled", false);
        $("#ContactFormSubmitBtn i").css("display", "none");
        // $('#contactErrorMsg').text("Something went wrong, please try again later!");
        clearMumbaiLeadForm();
        window.location = window.location.origin + "/thank-you/";
      }
    },
  });
  $("#ContactUsFormMainHome .leadform-input.selectpicker").on(
    "change",
    function () {
      $(this).valid();
    }
  );

  $("#ContactUsFormMainHome .leadform-input.selectpicker")
    .on("changed.bs.select", function (e) {
      $(this)
        .prevAll(".dropdown-toggle")
        .toggleClass("bs-placeholder", this.value === "");
    })
    .trigger("changed.bs.select");

  /* reference and earn form */
  function clearRefNEarnForm() {
    $("#RefNEarnForm").trigger("reset");
    $("#RefNEarnForm").validate().resetForm();
    $("#RefNEarnForm .leadform-input.selectpicker")
      .val("default")
      .selectpicker("refresh");
    $("#RefNEarnFormSubmitBtn").prop("disabled", false);
    $("#RefNEarnFormSubmitBtn i").css("display", "none");
  }
  $("#RefNEarnForm").validate({
    onfocusout: function (element) {
      this.element(element);
    },
    errorPlacement: function (error, element) {
      if (element.attr("name") == "your-city") {
        error.insertAfter(element.parent("div"));
      } else if (element.attr("name") == "PropertyType[]") {
        error.insertAfter(element.parent("div"));
      } else {
        error.insertAfter(element);
      }
    },
    rules: {
      RefferedName: {
        required: true,
      },
      RefferedNumber: {
        required: true,
        minlength: 10,
        pattern: /^[1-9]\d{9}$|^[1-9]\d{9}$/,
      },
      RefferedEmail: {
        required: true,
        pattern:
          /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
      },
      "your-name": {
        required: true,
        pattern: /^[a-zA-Z]+(([ ][a-zA-Z ])?[a-zA-Z]*)*$/,
      },
      "your-mobilenumber": {
        required: true,
        minlength: 10,
        pattern: /^[1-9]\d{9}$|^[1-9]\d{9}$/,
      },
      email: {
        required: true,
        pattern:
          /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
      },
      "your-city": {
        required: true,
      },
    },
    messages: {
      RefferedName: {
        required: "Enter friend's name.",
      },
      RefferedNumber: {
        required: "Enter a valid mobile phone number.",
        minlength: "Enter a valid mobile phone number.",
        pattern: "Enter a valid mobile phone number.",
      },
      RefferedEmail: {
        required: "Enter a valid email address.",
        pattern: "Enter a valid email address.",
      },
      "your-name": {
        required: "Enter your name.",
      },
      "your-mobilenumber": {
        required: "Enter a valid mobile phone number.",
        minlength: "Enter a valid mobile phone number.",
        pattern: "Enter a valid mobile phone number.",
      },
      email: {
        required: "Enter a valid email address.",
        pattern: "Enter a valid email address.",
      },
      "your-city": {
        required: "Please select a location.",
      },
    },
    submitHandler: function (form) {
      try {
        var formURL = $("#RefNEarnForm").attr("action");
        var formData = $("#RefNEarnForm").serializeArray();
        $.ajax({
          url: formURL,
          type: "POST",
          data: formData,
          beforeSend: function () {
            $("#RefNEarnFormSubmitBtn").prop("disabled", true);
            $("#RefNEarnFormSubmitBtn i").css("display", "inline-block");
          },
          success: function (data, textStatus, jqXHR) {
            data = JSON.parse(data);
            //console.log(data);
            if (
              data.redirect_url &&
              !window.location.href.match(data.redirect_url)
            ) {
              clearRefNEarnForm();
              window.location = data.redirect_url;
              $("#referErrorMsg").text(
                "Thank you for your message. It has been sent."
              );
              $("#referErrorMsg").removeClass("text-danger");
              $("#referErrorMsg").addClass("text-success");
            } else {
              $("#RefNEarnFormSubmitBtn").prop("disabled", false);
              $("#RefNEarnFormSubmitBtn i").css("display", "none");
              // $('#referErrorMsg').text("Something went wrong, please try again later!");
              clearMumbaiLeadForm();
              window.location = window.location.origin + "/thank-you/";
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            //console.log(errorThrown);
            $("#RefNEarnFormSubmitBtn").prop("disabled", false);
            $("#RefNEarnFormSubmitBtn i").css("display", "none");
            // $('#referErrorMsg').text("Something went wrong, please try again later!");
            clearMumbaiLeadForm();
            window.location = window.location.origin + "/thank-you/";
          },
        });
      } catch (e) {
        $("#RefNEarnFormSubmitBtn").prop("disabled", false);
        $("#RefNEarnFormSubmitBtn i").css("display", "none");
        // $('#referErrorMsg').text("Something went wrong, please try again later!");
        clearMumbaiLeadForm();
        window.location = window.location.origin + "/thank-you/";
      }
    },
  });
  $("#RefNEarnForm .leadform-input.selectpicker").on("change", function () {
    $(this).valid();
  });

  $("#RefNEarnForm .leadform-input.selectpicker")
    .on("changed.bs.select", function (e) {
      $(this)
        .prevAll(".dropdown-toggle")
        .toggleClass("bs-placeholder", this.value === "");
    })
    .trigger("changed.bs.select");

  var mv = $(".contact-us-location-listing");

  var offsetVal = mv.offset();
  var offsetNew = offsetVal && offsetVal.top ? offsetVal.top : "";

  var headerHeight = $(".header-bg").height();
  var navheight = offsetNew - headerHeight;
  $(window).bind("scroll", function () {
    if ($(window).scrollTop() > navheight) {
      $(".contact-us-location-listing").addClass("contact-tab-fixed");
    } else {
      $(".contact-us-location-listing").removeClass("contact-tab-fixed");
    }
  });

  var tw = $(".collection-desk-lst");

  var offsetVal_collection = tw.offset();
  var offsetNew_collection =
    offsetVal_collection && offsetVal_collection.top
      ? offsetVal_collection.top
      : "";

  var headerHeight_new = $(".header-bg").height();
  var navheight_new = offsetNew_collection - headerHeight_new;
  $(window).bind("scroll", function () {
    if ($(window).scrollTop() > navheight_new) {
      $(".fixed-collection-desk-lst").addClass("contact-tab-fixed_new");
    } else {
      $(".fixed-collection-desk-lst").removeClass("contact-tab-fixed_new");
    }
  });
  var tz = $(".collection-mob-lst");

  var offsetVal_mobile = tz.offset();
  var offsetNew_mobile =
    offsetVal_mobile && offsetVal_mobile.top ? offsetVal_mobile.top : "";

  var headerHeight_main_mob = $(".header-bg").height();
  var sticky_new_height_mob = $("#noty-holder").height();
  if (sticky_new_height_mob > 0) {
    if ($(window).width() >= 320 && $(window).width() < 767) {
      $(".fixed-top").css("top", "80px");
    }
  }

  var headerHeight_new_mob = headerHeight_main_mob + sticky_new_height_mob;

  var navheight_new_mob =
    offsetNew_mobile > 0
      ? offsetNew_mobile - headerHeight_new_mob
      : sticky_new_height_mob;

  $(window).bind("scroll", function () {
    // if ($(window).scrollTop() > navheight_new_mob) {
    if ($(window).scrollTop() > 120) {
      $(".fixed-collection-mob-lst").addClass("contact-tab-fixed_new");
    } else {
      $(".fixed-collection-mob-lst").removeClass("contact-tab-fixed_new");
    }
  });
  //}
  if ($(window).width() > 991) {
    // only for mobile devices

    var windowSize = $(window).width();
    //console.log("offsetNew:::",windowSize);
    $(function () {
      if (windowSize >= 1024 && windowSize < 1280) {
        // console.log("offsetNew:::",windowSize);

        $(".guide-right-side").StickySidebar({
          // Settings
          additionalMarginTop: 120,
          updateSidebarHeight: false,
          containerSelector: ".guide-main-content",
        });
        $(".blog-widget-area").StickySidebar({
          // Settings
          additionalMarginTop: 120,
          updateSidebarHeight: false,
          containerSelector: ".guide-main-content",
        });
        $(".left-sidebar-guide").StickySidebar({
          // Settings
          additionalMarginTop: 120,
          updateSidebarHeight: false,
          containerSelector: ".guide-main-content-new",
        });
      } else if (windowSize >= 1280 && windowSize <= 1919) {
        // console.log("offsetNew:::",windowSize);

        $(".guide-right-side").StickySidebar({
          // Settings
          additionalMarginTop: 100,
          updateSidebarHeight: false,
          containerSelector: ".guide-main-content",
        });
        $(".blog-widget-area").StickySidebar({
          // Settings
          additionalMarginTop: 100,
          updateSidebarHeight: false,
          containerSelector: ".guide-main-content",
          updateSidebarHeight: true,
          sidebarBehavior: "modern",
        });
        $(".left-sidebar-guide").StickySidebar({
          // Settings
          additionalMarginTop: 100,
          updateSidebarHeight: false,
          containerSelector: ".guide-main-content-new",
          updateSidebarHeight: true,
          sidebarBehavior: "modern",
        });
      } else if (windowSize >= 1920) {
        // console.log("offsetNewtest:::",windowSize);
        $(".guide-right-side").StickySidebar({
          // Settings
          additionalMarginTop: 200,
          updateSidebarHeight: false,
          containerSelector: ".guide-main-content",
        });
        $(".blog-widget-area").StickySidebar({
          // Settings
          additionalMarginTop: 200,
          updateSidebarHeight: false,
          containerSelector: ".guide-main-content",
        });
      }
    });

    (function ($) {
      $.fn.StickySidebar = function (options) {
        var defaults = {
          containerSelector: "",
          additionalMarginTop: 0,
          additionalMarginBottom: 0,
          updateSidebarHeight: true,
          minWidth: 0,
          disableOnResponsiveLayouts: true,
          sidebarBehavior: "modern",
        };
        options = $.extend(defaults, options);

        // Validate options
        options.additionalMarginTop =
          parseInt(options.additionalMarginTop) || 0;
        options.additionalMarginBottom =
          parseInt(options.additionalMarginBottom) || 0;

        tryInitOrHookIntoEvents(options, this);

        // Try doing init, otherwise hook into window.resize and document.scroll and try again then.
        function tryInitOrHookIntoEvents(options, $that) {
          var success = tryInit(options, $that);

          if (!success) {
            //console.log('TST: Body width smaller than options.minWidth. Init is delayed.');

            $(document).scroll(
              (function (options, $that) {
                return function (evt) {
                  var success = tryInit(options, $that);

                  if (success) {
                    $(this).unbind(evt);
                  }
                };
              })(options, $that)
            );
            $(window).resize(
              (function (options, $that) {
                return function (evt) {
                  var success = tryInit(options, $that);

                  if (success) {
                    $(this).unbind(evt);
                  }
                };
              })(options, $that)
            );
          }
        }

        // Try doing init if proper conditions are met.
        function tryInit(options, $that) {
          if (options.initialized === true) {
            return true;
          }

          if ($("body").width() < options.minWidth) {
            return false;
          }

          init(options, $that);

          return true;
        }

        // Init the sticky sidebar(s).
        function init(options, $that) {
          options.initialized = true;

          // Add CSS
          $("head").append(
            $(
              '<style>.StickySidebar:after {content: ""; display: table; clear: both;}</style>'
            )
          );

          $that.each(function () {
            var o = {};

            o.sidebar = $(this);

            // Save options
            o.options = options || {};

            // Get container
            o.container = $(o.options.containerSelector);
            if (o.container.length == 0) {
              o.container = o.sidebar.parent();
            }

            // Create sticky sidebar
            o.sidebar.parents().css("-webkit-transform", "none"); // Fix for WebKit bug - https://code.google.com/p/chromium/issues/detail?id=20574
            o.sidebar.css({
              position: "relative",
              overflow: "visible",
              // The "box-sizing" must be set to "content-box" because we set a fixed height to this element when the sticky sidebar has a fixed position.
              "-webkit-box-sizing": "border-box",
              "-moz-box-sizing": "border-box",
              "box-sizing": "border-box",
            });

            // Get the sticky sidebar element. If none has been found, then create one.
            o.stickySidebar = o.sidebar.find(".StickySidebar");
            if (o.stickySidebar.length == 0) {
              o.sidebar.find("script").remove(); // Remove <script> tags, otherwise they will be run again on the next line.
              o.stickySidebar = $("<div>")
                .addClass("StickySidebar")
                .append(o.sidebar.children());
              o.sidebar.append(o.stickySidebar);
            }

            // Get existing top and bottom margins and paddings
            o.marginTop = parseInt(o.sidebar.css("margin-top"));
            o.marginBottom = parseInt(o.sidebar.css("margin-bottom"));
            o.paddingTop = parseInt(o.sidebar.css("padding-top"));
            o.paddingBottom = parseInt(o.sidebar.css("padding-bottom"));

            // Add a temporary padding rule to check for collapsable margins.
            var collapsedTopHeight = o.stickySidebar.offset().top;
            var collapsedBottomHeight = o.stickySidebar.outerHeight();
            o.stickySidebar.css("padding-top", 1);
            o.stickySidebar.css("padding-bottom", 1);
            collapsedTopHeight -= o.stickySidebar.offset().top;
            collapsedBottomHeight =
              o.stickySidebar.outerHeight() -
              collapsedBottomHeight -
              collapsedTopHeight;
            if (collapsedTopHeight == 0) {
              o.stickySidebar.css("padding-top", 0);
              o.stickySidebarPaddingTop = 0;
            } else {
              o.stickySidebarPaddingTop = 1;
            }

            if (collapsedBottomHeight == 0) {
              o.stickySidebar.css("padding-bottom", 0);
              o.stickySidebarPaddingBottom = 0;
            } else {
              o.stickySidebarPaddingBottom = 1;
            }

            // We use this to know whether the user is scrolling up or down.
            o.previousScrollTop = null;

            // Scroll top (value) when the sidebar has fixed position.
            o.fixedScrollTop = 0;

            // Set sidebar to default values.
            resetSidebar();

            o.onScroll = function (o) {
              // Stop if the sidebar isn't visible.
              if (!o.stickySidebar.is(":visible")) {
                return;
              }

              // Stop if the window is too small.
              if ($("body").width() < o.options.minWidth) {
                resetSidebar();
                return;
              }

              // Stop if the sidebar width is larger than the container width (e.g. the theme is responsive and the sidebar is now below the content)
              if (o.options.disableOnResponsiveLayouts) {
                var sidebarWidth = o.sidebar.outerWidth(
                  o.sidebar.css("float") == "none"
                );

                if (sidebarWidth + 50 > o.container.width()) {
                  resetSidebar();
                  return;
                }
              }

              var scrollTop = $(document).scrollTop();
              var position = "static";

              // If the user has scrolled down enough for the sidebar to be clipped at the top, then we can consider changing its position.
              if (
                scrollTop >=
                o.container.offset().top +
                  (o.paddingTop + o.marginTop - o.options.additionalMarginTop)
              ) {
                // The top and bottom offsets, used in various calculations.
                var offsetTop =
                  o.paddingTop + o.marginTop + options.additionalMarginTop;
                var offsetBottom =
                  o.paddingBottom +
                  o.marginBottom +
                  options.additionalMarginBottom;

                // All top and bottom positions are relative to the window, not to the parent elemnts.
                var containerTop = o.container.offset().top;
                var containerBottom =
                  o.container.offset().top + getClearedHeight(o.container);

                // The top and bottom offsets relative to the window screen top (zero) and bottom (window height).
                var windowOffsetTop = 0 + options.additionalMarginTop;
                var windowOffsetBottom;

                var sidebarSmallerThanWindow =
                  o.stickySidebar.outerHeight() + offsetTop + offsetBottom <
                  $(window).height();
                if (sidebarSmallerThanWindow) {
                  windowOffsetBottom =
                    windowOffsetTop + o.stickySidebar.outerHeight();
                } else {
                  windowOffsetBottom =
                    $(window).height() -
                    o.marginBottom -
                    o.paddingBottom -
                    options.additionalMarginBottom;
                }

                var staticLimitTop =
                  containerTop - scrollTop + o.paddingTop + o.marginTop;
                var staticLimitBottom =
                  containerBottom -
                  scrollTop -
                  o.paddingBottom -
                  o.marginBottom;

                var top = o.stickySidebar.offset().top - scrollTop;
                var scrollTopDiff = o.previousScrollTop - scrollTop;

                // If the sidebar position is fixed, then it won't move up or down by itself. So, we manually adjust the top coordinate.
                if (o.stickySidebar.css("position") == "fixed") {
                  if (o.options.sidebarBehavior == "modern") {
                    top += scrollTopDiff;
                  }
                }

                if (o.options.sidebarBehavior == "stick-to-top") {
                  top = options.additionalMarginTop;
                }

                if (o.options.sidebarBehavior == "stick-to-bottom") {
                  top = windowOffsetBottom - o.stickySidebar.outerHeight();
                }

                if (scrollTopDiff > 0) {
                  // If the user is scrolling up.
                  top = Math.min(top, windowOffsetTop);
                } else {
                  // If the user is scrolling down.
                  top = Math.max(
                    top,
                    windowOffsetBottom - o.stickySidebar.outerHeight()
                  );
                }

                top = Math.max(top, staticLimitTop);

                top = Math.min(
                  top,
                  staticLimitBottom - o.stickySidebar.outerHeight()
                );

                // If the sidebar is the same height as the container, we won't use fixed positioning.
                var sidebarSameHeightAsContainer =
                  o.container.height() == o.stickySidebar.outerHeight();

                if (!sidebarSameHeightAsContainer && top == windowOffsetTop) {
                  position = "fixed";
                } else if (
                  !sidebarSameHeightAsContainer &&
                  top == windowOffsetBottom - o.stickySidebar.outerHeight()
                ) {
                  position = "fixed";
                } else if (
                  scrollTop + top - o.sidebar.offset().top - o.paddingTop <=
                  options.additionalMarginTop
                ) {
                  // Stuck to the top of the page. No special behavior.
                  position = "static";
                } else {
                  // Stuck to the bottom of the page.
                  position = "absolute";
                }
              }

              /*
               * Performance notice: It's OK to set these CSS values at each resize/scroll, even if they don't change.
               * It's way slower to first check if the values have changed.
               */
              if (position == "fixed") {
                o.stickySidebar.css({
                  position: "fixed",
                  width: o.sidebar.width(),
                  top: top,
                  left:
                    o.sidebar.offset().left +
                    parseInt(o.sidebar.css("padding-left")),
                });
              } else if (position == "absolute") {
                var css = {};

                if (o.stickySidebar.css("position") != "absolute") {
                  css.position = "absolute";
                  css.top =
                    scrollTop +
                    top -
                    o.sidebar.offset().top -
                    o.stickySidebarPaddingTop -
                    o.stickySidebarPaddingBottom;
                }

                css.width = o.sidebar.width();
                css.left = "";

                o.stickySidebar.css(css);
              } else if (position == "static") {
                resetSidebar();
              }

              if (position != "static") {
                if (o.options.updateSidebarHeight == true) {
                  o.sidebar.css({
                    "min-height":
                      o.stickySidebar.outerHeight() +
                      o.stickySidebar.offset().top -
                      o.sidebar.offset().top +
                      o.paddingBottom,
                  });
                }
              }

              o.previousScrollTop = scrollTop;
            };

            // Initialize the sidebar's position.
            o.onScroll(o);

            // Recalculate the sidebar's position on every scroll and resize.
            $(document).scroll(
              (function (o) {
                return function () {
                  o.onScroll(o);
                };
              })(o)
            );
            $(window).resize(
              (function (o) {
                return function () {
                  o.stickySidebar.css({ position: "static" });
                  o.onScroll(o);
                };
              })(o)
            );

            // Reset the sidebar to its default state
            function resetSidebar() {
              o.fixedScrollTop = 0;
              o.sidebar.css({
                "min-height": "1px",
              });
              o.stickySidebar.css({
                position: "static",
                width: "",
              });
            }
            // Get the height of a div as if its floated children were cleared. Note that this function fails if the floats are more than one level deep.
            function getClearedHeight(e) {
              var height = e.height();
              e.children().each(function () {
                height = Math.max(height, $(this).height());
              });
              return height;
            }
          });
        }
      };
    })(jQuery);
  }

  // Blog slider page start
  $(".blog-slider-info").click(function () {
    $(".slider-blog-thumb-section").hide();
    if (
      $(".slider-blog-thumb-section").css("display") == "none" ||
      $(".slider-blog-thumb-section").css("visibility") == "hidden"
    ) {
      var owl = $(".single-blog-slider");

      owl.owlCarousel({
        items: 1,
        loop: true,
        // autoplay:true,
        dots: false,
        nav: true,
        lazyLoad: true,
        lazyLoadEager: 10000,
        autoHeight: false,
        touchDrag: false,
        mouseDrag: false,
      });
    }

    $(".slider-blog-section").show();
  });
  $(".slider-blog-section").hide();

  /*notify*/
  function createNoty(message, type) {
    var html =
      '<div class="alert alert-' +
      type +
      ' alert-dismissable page-alert custom-notify">';
    html +=
      '<button type="button" class="close notify-close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';
    html += message;
    // html += '<a href="#contactUsModal" data-toggle="modal"><span>Book A Date</span> </<span style="font-size: 10px; font-weight: 700;">&#9002;</span>/></a>';
    html +=
      '<a href="#contactUsModal" data-toggle="modal"><span>Get Offer</span> <span style="font-size: 10px; font-weight: 700;">&#9002;</span></a>';
    html += "</div>";
    $(html).hide().prependTo("#noty-holder").slideDown();
  }

  if ($("body").hasClass("page-template-thank-you-template-new")) {
    $("body").removeClass("fixed-body");
    // $(".fixed-top").css("top", "0");
  } else {
    $("body").addClass("fixed-body");
  }
  if ($("body").hasClass("page-template-thank-you-template")) {
    $("body").removeClass("fixed-body");
    // $(".fixed-top").css("top", "0");
  } else {
    $("body").addClass("fixed-body");
  }
  if ($("body").hasClass("page-template-thank-you-collection-category")) {
    $("body").removeClass("fixed-body");
    // $(".fixed-top").css("top", "0");
  } else {
    $("body").addClass("fixed-body");
  }

  if ($(window).width() < 991) {
    jQuery.fn.insertAt = function (index, element) {
      var lastIndex = this.children().size();
      if (index < 0) {
        index = Math.max(0, lastIndex + 1 + index);
      }
      this.append(element);
      if (index < lastIndex) {
        this.children().eq(index).before(this.children().last());
      }
      return this;
    };
    $(".header-navabar-nav-auto .menu-item-has-children").each(function (i) {
      $(this).insertAt(
        1,
        '<a class="mob-header-icon"><span class="plus-minus-toggle"></span></i></a>'
      );
    });
    $(".header-navabar-nav-auto .menu-item-has-children .mob-header-icon").each(
      function (index) {
        $(this).on("click", function (event) {
          var newIndex = index;

          $(this).next(".dropdown-menu").toggle(200);
          $(this).children(".plus-minus-toggle").toggleClass("collapsed-icon");
        });
      }
    );

    $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
      } else {
      }
    });
  }

  $("#owl-custom-guide1").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 0,
    nav: true,
    rewind: true,
    dots: true,
    items: 1,
    autoHeight: false,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        margin: 0,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        margin: 0,
        nav: false,
        loop: false,
      },
    },
  });
  $("#owl-custom-guide2").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 0,
    nav: true,
    rewind: true,
    dots: true,
    items: 1,
    autoHeight: false,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        margin: 0,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        margin: 0,
        nav: false,
        loop: false,
      },
    },
  });
  $("#owl-custom-guide3").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 0,
    nav: true,
    rewind: true,
    dots: true,
    items: 1,
    autoHeight: false,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        margin: 0,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        margin: 0,
        nav: false,
        loop: false,
      },
    },
  });
  $("#owl-custom-guide4").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 0,
    nav: true,
    rewind: true,
    dots: true,
    items: 1,
    autoHeight: false,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        margin: 0,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        margin: 0,
        nav: false,
        loop: false,
      },
    },
  });
  $("#owl-custom-guide5").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 0,
    nav: true,
    rewind: true,
    dots: true,
    items: 1,
    autoHeight: false,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        margin: 0,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        margin: 0,
        nav: false,
        loop: false,
      },
    },
  });
  $("#owl-custom-guide6").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 0,
    nav: true,
    rewind: true,
    dots: true,
    items: 1,
    autoHeight: false,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        margin: 0,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        margin: 0,
        nav: false,
        loop: false,
      },
    },
  });
  $("#owl-custom-guide7").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 0,
    nav: true,
    rewind: true,
    dots: true,
    items: 1,
    autoHeight: false,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        margin: 0,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        margin: 0,
        nav: false,
        loop: false,
      },
    },
  });
  $("#owl-custom-guide8").owlCarousel({
    loop: true,
    autoplay: false,
    margin: 0,
    nav: true,
    rewind: true,
    dots: true,
    items: 1,
    autoHeight: false,
    responsive: {
      0: {
        items: 1,
        autoWidth: true,
        nav: false,
      },
      320: {
        items: 1,
        margin: 0,
        nav: false,
        loop: false,
      },
      480: {
        items: 1,
        margin: 0,
        nav: false,
        loop: false,
      },
    },
  });

  $(document).click(function (e) {
    if (!$(e.target).is("#navbarSupportedContent")) {
      $(".custom-navbar-collapse").collapse("hide");
    }
  });

  $(".custom-guide-drp .custom-dropdown-item").click(function (e) {
    $(".custom-guide-drp .custom-dropdown-item").removeClass("active");

    var $this = $(this);
    if (!$this.hasClass("active")) {
      $this.addClass("active");
    }
  });
  setTimeout(function () {
    $("#menu-info-text").modal("show");
  }, 1);

  $(function () {
    $(".gallery-texture-image").tooltip();
  });
  $(".tool_tip_1")
    .attr("data-toggle", "tooltip")
    .attr("data-placement", "top")
    .attr("data-offset", "40% 0")
    // .attr('', '60 0');
    .tooltip({
      trigger: "manual",
      container: ".tool_tip_1",
      template:
        '<div class="tooltip progress-bar-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
    })
    .tooltip("show");
  $(".tool_tip_max_1")
    .attr("data-toggle", "tooltip")
    .attr("data-placement", "top")
    .attr("data-offset", "45% 0")
    // .attr('', '60 0');
    .tooltip({
      trigger: "manual",
      container: ".tool_tip_max_1",
      template:
        '<div class="tooltip progress-bar-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
    })
    .tooltip("show");

  /*2*/
  $(".tool_tip_2")
    .attr("data-toggle", "tooltip")
    .attr("data-placement", "top")
    .attr("data-offset", "40% 0")
    // .attr('', '60 0');
    .tooltip({
      trigger: "manual",
      container: ".tool_tip_2",
      template:
        '<div class="tooltip progress-bar-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
    })
    .tooltip("show");
  $(".tool_tip_max_2")
    .attr("data-toggle", "tooltip")
    .attr("data-placement", "top")
    .attr("data-offset", "45% 0")
    // .attr('', '60 0');
    .tooltip({
      trigger: "manual",
      container: ".tool_tip_max_2",
      template:
        '<div class="tooltip progress-bar-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
    })
    .tooltip("show");
  /*3*/
  $(".tool_tip_3")
    .attr("data-toggle", "tooltip")
    .attr("data-placement", "top")
    .attr("data-offset", "40% 0")
    // .attr('', '60 0');
    .tooltip({
      trigger: "manual",
      container: ".tool_tip_3",
      template:
        '<div class="tooltip progress-bar-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
    })
    .tooltip("show");
  $(".tool_tip_max_3")
    .attr("data-toggle", "tooltip")
    .attr("data-placement", "top")
    .attr("data-offset", "45% 0")
    .tooltip({
      trigger: "manual",
      container: ".tool_tip_max_3",
      template:
        '<div class="tooltip progress-bar-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
    })
    .tooltip("show");
  $(".tool_tip_4")
    .attr("data-toggle", "tooltip")
    .attr("data-placement", "top")
    .attr("data-offset", "45% 0")
    .tooltip({
      trigger: "manual",
      container: ".tool_tip_4",
      template:
        '<div class="tooltip progress-bar-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
    })
    .tooltip("show");

  // mail chimp validation
  ajaxMailChimpForm($("#mc-embedded-subscribe-form"), $("#subscribe-result"));

  // Turn the given MailChimp form into an ajax version of it.
  // If resultElement is given, the subscribe result is set as html to
  // that element.
  function ajaxMailChimpForm($form, $resultElement) {
    // Hijack the submission. We'll submit the form manually.
    $form.submit(function (e) {
      e.preventDefault();

      if (!isValidEmail($form)) {
        var error = "A valid email address must be provided.";
        $resultElement.html(error);
        $resultElement.css("color", "red");
      } else {
        $resultElement.css("color", "black");
        submitSubscribeForm($form, $resultElement);
      }
    });
  }

  // Validate the email address in the form
  function isValidEmail($form) {
    // If email is empty, show error message.
    // contains just one @
    var email = $form.find("input[type='email']").val();
    if (!email || !email.length) {
      return false;
    } else if (email.indexOf("@") == -1) {
      return false;
    }

    return true;
  }
  // response.setHeader("Set-Cookie", "HttpOnly;Secure;SameSite=Strict");
  // Submit the form with an ajax/jsonp request.
  // Based on http://stackoverflow.com/a/15120409/215821
  function submitSubscribeForm($form, $resultElement) {
    $.ajax({
      type: "GET",
      url: $form.attr("action"),
      data: $form.serialize(),
      cache: false,
      dataType: "jsonp",
      jsonp: "c", // trigger MailChimp to return a JSONP response
      contentType: "application/json; charset=utf-8",
      error: function (error) {
        // According to jquery docs, this is never called for cross-domain JSONP requests
      },
      success: function (data) {
        if (data.result != "success") {
          var message =
            data.msg || "Sorry. Unable to subscribe. Please try again later.";
          $resultElement.css("color", "red");
          if (data.msg && data.msg.indexOf("already subscribed") >= 0) {
            message = "You're already subscribed. Thank you.";
            $resultElement.css("color", "black");
          }
          $resultElement.html(message);
        } else {
          $resultElement.css("color", "black");
          $resultElement.html(
            "Thank you!<br>You must confirm the subscription in your inbox."
          );
        }
      },
    });
  }
  $(".guide-single-content .owl-carousel")
    .addClass("owl-carosal-arrow")
    .addClass("owl-theme")
    .removeClass("sa_owl_theme");
});

function showImage(imgPath, imgText) {
  console.log("Sdfkldsjf");
  var curImage = document.getElementById("currentImg");
  curImage.src = imgPath;
  curImage.alt = imgText;
  curImage.title = imgText;
}
