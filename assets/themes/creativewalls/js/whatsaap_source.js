/* eslint-disable no-unused-expressions */
/* eslint-disable no-sequences */
/* eslint-disable no-undef */
$(document).ready(function () {
  // $(window).bind("load", function () {
  function readCookies(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca?.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == " ") c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  }
  $LeadType = "";
  $CampaignSource = "";
  $LeadSource = "";
  var whatsapp_link = "";

  var url = new URL(window.location.href);
  var c = url.searchParams.get("utm_source");
  var dcnw = url.searchParams.get("DC_nw");
  var dcc = url.searchParams.get("DC_c");
  var DC_nw = dcnw ? dcnw : readCookies("DC_nw");
  var source = c ? c : dcnw ? "AdWords" : readCookies("source");

  const queryString = window.location.search;
  // console.log(queryString);
  const urlParams = new URLSearchParams(queryString);
  const utm_campaign = urlParams.get("utm_campaign");
  const utm_medium = urlParams.get("utm_medium");
  const utm_source = urlParams.get("utm_source");

  if (readCookies["35BpQ2686"]) {
    $xuid = readCookies["35BpQ2686"];
  } else {
    $xuid = "";
  }
  if (readCookies["gclid"]) {
    $gclidc = readCookies["gclid"];
  } else if (readCookies["wbraid"]) {
    $gclidc = readCookies["wbraid"];
  } else if (readCookies["gbraid"]) {
    $gclidc = readCookies["gbraid"];
  } else {
    $gclidc = "";
  }

  if (readCookies["fbclid"]) {
    $fbclidc = readCookies["fbclid"];
  } else {
    $fbclidc = "";
  }

  if (readCookies["DC_dev"]) {
    if (readCookies["DC_dev"] == "m") {
      $DC_dev = "Mobile";
    } else if (readCookies["DC_dev"] == "t") {
      $DC_dev = "Tablet";
    } else if (readCookies["DC_dev"] == "c") {
      $DC_dev = "Computer";
      console.log($DC_dev);
    } else {
      $DC_dev = "";
    }
  }

  // var ChannelType = $Channel_Type;
  if (source != null && source != "") {
    var lastSource = source.split("|");

    lastSource = lastSource.slice(-1).pop();
    if (lastSource === "AdWords") {
      if (DC_nw != null && DC_nw != "") {
        if (DC_nw == "d") {
          whatsapp_link =
            "https://api.whatsapp.com/send?phone=918766443223&text=Hi%20Design%20Cafe%20Team,%20I%20am%20interested%20to%20know%20more%20about%20your%20interior%20design%20services.";
        } else if (DC_nw == "discovery" || DC_nw == "Discovery") {
          whatsapp_link =
            "https://api.whatsapp.com/send?phone=918766443223&text=Hi%20Design%20Cafe%20Team,%20I%20am%20interested%20to%20know%20more%20about%20your%20home%20interior%20services.";
        } else if (DC_nw == "yt") {
          console.log("Google Youtube Ads");
          whatsapp_link =
            "https://api.whatsapp.com/send?phone=918766443223&text=Hi%20Design%20Cafe%20Team,%20I%20am%20interested%20to%20know%20more%20about%20your%20interior%20services.";
        } else if (dcc?.includes("BNG-PMAX")) {
          whatsapp_link =
            "https://api.whatsapp.com/send?phone=918766443223&text=Hello%20Team%20DesignCafe,%20I%20am%20interested%20to%20know%20more%20about%20your%20end-to-end%20home%20interior%20design%20services.";
        } else {
          console.log("Google Search Ads");
          whatsapp_link =
            "https://api.whatsapp.com/send?phone=918766443223&text=Hi%20Design%20Cafe%20Team,%20I%20am%20interested%20to%20know%20more%20about%20your%20home%20interior%20design%20services.";
        }
      } else {
        whatsapp_link =
          "https://api.whatsapp.com/send?phone=918766443223&text=Hi%20Design%20Cafe%20Team,%20I%20am%20interested%20to%20know%20more%20about%20your%20home%20interior%20design%20services.";
      }
    } else if (lastSource == "bing") {
      $LeadType = "Paid";
      $CampaignSource = "Bing Ads";
      $LeadSource = "Bing Search Ads";
      // console.log($LeadType);
      whatsapp_link =
        "https://api.whatsapp.com/send?phone=918766443223&text=Hi%20Team,%20I%20am%20interested%20to%20know%20more%20about%20your%20home%20interior%20design%20services.";
    } else if (lastSource == "Facebook_Paid_Website") {
      $LeadType = "Paid";
      $CampaignSource = "Social Media - Paid";
      $LeadSource = "Facebook Paid Website";
      console.log("Facebook Paid Website");
      whatsapp_link =
        "https://api.whatsapp.com/send?phone=918766443223&text=Hi,%20I%20am%20interested%20to%20know%20more%20about%20your%20home%20interior%20design%20services.";
    } else if (
      lastSource == "www.facebook.com" ||
      lastSource == "l.facebook.com" ||
      lastSource == "facebook.com" ||
      lastSource == "lm.facebook.com" ||
      lastSource == "m.facebook.com"
    ) {
      console.log("Facebook Organic");
      $LeadType = "Organic";
      $CampaignSource = "Social Media - Organic";
      $LeadSource = "Facebook Organic";
      whatsapp_link =
        "https://api.whatsapp.com/send?phone=918766443223&text=Hello%20DC%20Team,%20I%20am%20interested%20to%20know%20more%20about%20your%20home%20interior%20services.";
    } else if (
      lastSource == "Instagram" ||
      lastSource == "instagram.com" ||
      lastSource == "l.instagram.com"
    ) {
      console.log("Instagram Organic");
      $LeadType = "Organic";
      $CampaignSource = "Social Media - Organic";
      $LeadSource = "Instagram Organic";
      whatsapp_link =
        "https://api.whatsapp.com/send?phone=918766443223&text=Hello%20DC%20Team,%20I%20am%20interested%20to%20know%20more%20about%20your%20home%20interior%20design%20services.";
    } else if (
      lastSource == "linkedin.com" ||
      lastSource == "www.linkedin.com" ||
      lastSource == "lnkd.in" ||
      lastSource == "in.linkedin.com"
    ) {
      console.log("LinkedIn Organic");
      $LeadType = "Organic";
      $CampaignSource = "Social Media - Organic";
      $LeadSource = "LinkedIn Organic";
      whatsapp_link =
        "https://api.whatsapp.com/send?phone=918766443223&text=Hello%20DC%20Team,%20I%20am%20interested%20to%20know%20more%20about%20your%20services.";
    } else if (
      lastSource == "youtube.com" ||
      lastSource == "m.youtube.com" ||
      lastSource == "Youtube" ||
      lastSource == "www.youtube.com"
    ) {
      console.log("YouTube Organic");
      LeadType = "Organic";
      $CampaignSource = "Social Media - Organic";
      // $LeadSource = "YouTube Organic";
      if (utm_campaign) {
        $LeadSource = utm_campaign.replace("_", " ");
      } else {
        $LeadSource = "YouTube Organic";
      }
      whatsapp_link =
        "https://api.whatsapp.com/send?phone=918766443223&text=Hello%20DC%20Team,%20I%20am%20interested%20to%20know%20more%20about%20your%20interior%20design%20services.";
    } else if (
      lastSource == "quora.com" ||
      lastSource == "www.quora.com" ||
      lastSource == "designcafe.quora.com"
    ) {
      $LeadType = "Organic";
      $CampaignSource = "Social Media - Organic";
      // console.log('fgfgvhgg',$CampaignSource);
      $LeadSource = "Quora Organic";
    } else if (lastSource == "t.co" || lastSource == "twitter.com") {
      $LeadType = "Organic";
      $CampaignSource = "Social Media - Organic";
      $LeadSource = "Twitter Organic";
    } else if (lastSource == "branding" || lastSource == "Branding") {
      // $leadsrc1 = explode("_", $lastSource);
      $Channel_Type = "Branding";
      // $leadsrc = array_pop($leadsrc1);
      //$campsrc = array_pop($leadsrc1);
      $LeadType = "Branding";
      // console.log('fgff' , $LeadType);
      if (utm_campaign) {
        $LeadSource = utm_campaign.replace("_", " ");
      } else {
        $LeadSource = "";
      }
      if (utm_medium) {
        $CampaignSource = utm_medium.replace("_", " ");
      } else {
        $CampaignSource = "";
      }
      // $CampaignSource = $UtmMedium;
    } else if (lastSource == "blogger") {
      // $leadsrc1 = explode("_", $lastSource);
      $Channel_Type = "Online";
      // $leadsrc = array_pop($leadsrc1);
      //$campsrc = array_pop($leadsrc1);
      $LeadType = "Organic";
      $CampaignSource = "Social Media - Organic";
      if (utm_campaign) {
        $LeadSource = utm_campaign.replace("_", " ");
      } else {
        $LeadSource = "";
      }
    } else if (lastSource == "client_referral") {
      $Channel_Type = "Referral";
      $LeadType = "Referral";
      $CampaignSource = "Online Referral";
      if (utm_source) {
        $LeadSource = utm_source.replace("_", " ");
      } else {
        $LeadSource = "";
      }
    } else if (lastSource == "general_referral") {
      $Channel_Type = "Referral";
      $LeadType = "Referral";
      $CampaignSource = "Online Referral";
      if (utm_source) {
        $LeadSource = utm_source.replace("_", " ");
      } else {
        $LeadSource = "";
      }
    } else if (
      lastSource == "pinterest" ||
      lastSource == "pinterest.com" ||
      lastSource == "www.pinterest.com" ||
      lastSource == "in.pinterest.com"
    ) {
      $LeadType = "Organic";
      $CampaignSource = "Social Media - Organic";
      $LeadSource = "Pinterest Organic";
    } else if (lastSource == "Taboola") {
      whatsapp_link =
        "https://api.whatsapp.com/send?phone=918766443223&text=Hello%20DesignCafe%20Team,%20I%20am%20interested%20to%20know%20about%20your%20end%20to%20end%20home%20interior%20design%20services.";
    } else if (utm_campaign == "Sattva") {
      whatsapp_link =
        "https://api.whatsapp.com/send?phone=918766443223&text=Hello%20Team,%20I%20am%20interested%20to%20know%20more%20DesignCafe's%20end-to-end%20home%20interior%20design%20services.";
    } else {
      whatsapp_link =
        "https://api.whatsapp.com/send?phone=918766443223&text=Hello%20Design%20Cafe%20Team,%20I%20am%20interested%20to%20know%20more%20about%20your%20home%20interior%20design%20services.";
    }
  } else {
    console.log("Direct");
    whatsapp_link =
      "https://api.whatsapp.com/send?phone=918766443223&text=Hello%20Design%20Cafe%20Team,%20I%20am%20interested%20to%20know%20more%20about%20your%20home%20interior%20design%20services.";
  }

  $(".whatsapp_class_unique").attr("href", whatsapp_link);

  // ym script
  var sourceCookieym = undefined;
  var dcNwCookie = undefined;
  try {
    var cookieArr = document.cookie.split(";");
    for (var i = 0; i < cookieArr.length; i++) {
      var cookiePair = cookieArr[i].split("=");
      if ("source" == cookiePair[0].trim()) {
        sourceCookieym = decodeURIComponent(cookiePair[1]);
      } else if ("DC_nw" == cookiePair[0].trim()) {
        dcNwCookie = decodeURIComponent(cookiePair[1]);
      }
    }
  } catch (error) {
    sourceCookieym = "Direct";
  }

  //end Ym Script
  // });
});
