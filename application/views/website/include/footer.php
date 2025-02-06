    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/page-scroll-to-id/js/page-scroll-to-id.min.js"
        id="page-scroll-to-id-plugin-script-js"></script>
    <script type="text/javascript" id="rocket-browser-checker-js-after">
        /* <![CDATA[ */
        "use strict"; var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor) } } return function (Constructor, protoProps, staticProps) { return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor } }(); function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function") } var RocketBrowserCompatibilityChecker = function () { function RocketBrowserCompatibilityChecker(options) { _classCallCheck(this, RocketBrowserCompatibilityChecker), this.passiveSupported = !1, this._checkPassiveOption(this), this.options = !!this.passiveSupported && options } return _createClass(RocketBrowserCompatibilityChecker, [{ key: "_checkPassiveOption", value: function (self) { try { var options = { get passive() { return !(self.passiveSupported = !0) } }; window.addEventListener("test", null, options), window.removeEventListener("test", null, options) } catch (err) { self.passiveSupported = !1 } } }, { key: "initRequestIdleCallback", value: function () { !1 in window && (window.requestIdleCallback = function (cb) { var start = Date.now(); return setTimeout(function () { cb({ didTimeout: !1, timeRemaining: function () { return Math.max(0, 50 - (Date.now() - start)) } }) }, 1) }), !1 in window && (window.cancelIdleCallback = function (id) { return clearTimeout(id) }) } }, { key: "isDataSaverModeOn", value: function () { return "connection" in navigator && !0 === navigator.connection.saveData } }, { key: "supportsLinkPrefetch", value: function () { var elem = document.createElement("link"); return elem.relList && elem.relList.supports && elem.relList.supports("prefetch") && window.IntersectionObserver && "isIntersecting" in IntersectionObserverEntry.prototype } }, { key: "isSlowConnection", value: function () { return "connection" in navigator && "effectiveType" in navigator.connection && ("2g" === navigator.connection.effectiveType || "slow-2g" === navigator.connection.effectiveType) } }]), RocketBrowserCompatibilityChecker }();
        /* ]]> */
    </script>
    <script type="text/javascript" id="rocket-preload-links-js-extra">
        /* <![CDATA[ */
        var RocketPreloadLinksConfig = { "excludeUris": "\/web-stories\/|\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/", "usesTrailingSlash": "1", "imageExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php", "fileExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm", "siteUrl": "https:\/\/www.thecreativewalls.in", "onHoverDelay": "100", "rateThrottle": "3" };
        /* ]]> */
    </script>
    <script type="text/javascript" id="rocket-preload-links-js-after">
        /* <![CDATA[ */
        (function () {
            "use strict"; var r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) { return typeof e } : function (e) { return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e }, e = function () { function i(e, t) { for (var n = 0; n < t.length; n++) { var i = t[n]; i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i) } } return function (e, t, n) { return t && i(e.prototype, t), n && i(e, n), e } }(); function i(e, t) { if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function") } var t = function () { function n(e, t) { i(this, n), this.browser = e, this.config = t, this.options = this.browser.options, this.prefetched = new Set, this.eventTime = null, this.threshold = 1111, this.numOnHover = 0 } return e(n, [{ key: "init", value: function () { !this.browser.supportsLinkPrefetch() || this.browser.isDataSaverModeOn() || this.browser.isSlowConnection() || (this.regex = { excludeUris: RegExp(this.config.excludeUris, "i"), images: RegExp(".(" + this.config.imageExt + ")$", "i"), fileExt: RegExp(".(" + this.config.fileExt + ")$", "i") }, this._initListeners(this)) } }, { key: "_initListeners", value: function (e) { -1 < this.config.onHoverDelay && document.addEventListener("mouseover", e.listener.bind(e), e.listenerOptions), document.addEventListener("mousedown", e.listener.bind(e), e.listenerOptions), document.addEventListener("touchstart", e.listener.bind(e), e.listenerOptions) } }, { key: "listener", value: function (e) { var t = e.target.closest("a"), n = this._prepareUrl(t); if (null !== n) switch (e.type) { case "mousedown": case "touchstart": this._addPrefetchLink(n); break; case "mouseover": this._earlyPrefetch(t, n, "mouseout") } } }, { key: "_earlyPrefetch", value: function (t, e, n) { var i = this, r = setTimeout(function () { if (r = null, 0 === i.numOnHover) setTimeout(function () { return i.numOnHover = 0 }, 1e3); else if (i.numOnHover > i.config.rateThrottle) return; i.numOnHover++, i._addPrefetchLink(e) }, this.config.onHoverDelay); t.addEventListener(n, function e() { t.removeEventListener(n, e, { passive: !0 }), null !== r && (clearTimeout(r), r = null) }, { passive: !0 }) } }, { key: "_addPrefetchLink", value: function (i) { return this.prefetched.add(i.href), new Promise(function (e, t) { var n = document.createElement("link"); n.rel = "prefetch", n.href = i.href, n.onload = e, n.onerror = t, document.head.appendChild(n) }).catch(function () { }) } }, { key: "_prepareUrl", value: function (e) { if (null === e || "object" !== (void 0 === e ? "undefined" : r(e)) || !1 in e || -1 === ["http:", "https:"].indexOf(e.protocol)) return null; var t = e.href.substring(0, this.config.siteUrl.length), n = this._getPathname(e.href, t), i = { original: e.href, protocol: e.protocol, origin: t, pathname: n, href: t + n }; return this._isLinkOk(i) ? i : null } }, { key: "_getPathname", value: function (e, t) { var n = t ? e.substring(this.config.siteUrl.length) : e; return n.startsWith("/") || (n = "/" + n), this._shouldAddTrailingSlash(n) ? n + "/" : n } }, { key: "_shouldAddTrailingSlash", value: function (e) { return this.config.usesTrailingSlash && !e.endsWith("/") && !this.regex.fileExt.test(e) } }, { key: "_isLinkOk", value: function (e) { return null !== e && "object" === (void 0 === e ? "undefined" : r(e)) && (!this.prefetched.has(e.href) && e.origin === this.config.siteUrl && -1 === e.href.indexOf("?") && -1 === e.href.indexOf("#") && !this.regex.excludeUris.test(e.href) && !this.regex.images.test(e.href)) } }], [{ key: "run", value: function () { "undefined" != typeof RocketPreloadLinksConfig && new n(new RocketBrowserCompatibilityChecker({ capture: !0, passive: !0 }), RocketPreloadLinksConfig).init() } }]), n }(); t.run();
        }());
        /* ]]> */
    </script>
    <script type="text/javascript" id="rocket_lazyload_css-js-extra">
        /* <![CDATA[ */
        var rocket_lazyload_css_data = { "threshold": "300" };
        /* ]]> */
    </script>
    <script type="text/javascript" id="rocket_lazyload_css-js-after">
        /* <![CDATA[ */
        !function o(n, c, a) { function u(t, e) { if (!c[t]) { if (!n[t]) { var r = "function" == typeof require && require; if (!e && r) return r(t, !0); if (s) return s(t, !0); throw (e = new Error("Cannot find module '" + t + "'")).code = "MODULE_NOT_FOUND", e } r = c[t] = { exports: {} }, n[t][0].call(r.exports, function (e) { return u(n[t][1][e] || e) }, r, r.exports, o, n, c, a) } return c[t].exports } for (var s = "function" == typeof require && require, e = 0; e < a.length; e++)u(a[e]); return u }({ 1: [function (e, t, r) { "use strict"; { const c = "undefined" == typeof rocket_pairs ? [] : rocket_pairs, a = (("undefined" == typeof rocket_excluded_pairs ? [] : rocket_excluded_pairs).map(t => { var e = t.selector; document.querySelectorAll(e).forEach(e => { e.setAttribute("data-rocket-lazy-bg-" + t.hash, "excluded") }) }), document.querySelector("#wpr-lazyload-bg-container")); var o = rocket_lazyload_css_data.threshold || 300; const u = new IntersectionObserver(e => { e.forEach(t => { t.isIntersecting && c.filter(e => t.target.matches(e.selector)).map(t => { var e; t && ((e = document.createElement("style")).textContent = t.style, a.insertAdjacentElement("afterend", e), t.elements.forEach(e => { u.unobserve(e), e.setAttribute("data-rocket-lazy-bg-" + t.hash, "loaded") })) }) }) }, { rootMargin: o + "px" }); function n() { 0 < (0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : []).length && c.forEach(t => { try { document.querySelectorAll(t.selector).forEach(e => { "loaded" !== e.getAttribute("data-rocket-lazy-bg-" + t.hash) && "excluded" !== e.getAttribute("data-rocket-lazy-bg-" + t.hash) && (u.observe(e), (t.elements ||= []).push(e)) }) } catch (e) { console.error(e) } }) } n(), function () { const r = window.MutationObserver; return function (e, t) { if (e && 1 === e.nodeType) return (t = new r(t)).observe(e, { attributes: !0, childList: !0, subtree: !0 }), t } }()(document.querySelector("body"), n) } }, {}] }, {}, [1]);
        //# sourceMappingURL=lazyload-css.min.js.map
        /* ]]> */
    </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/themes/creativewalls/js/child-theme.min.js"
        id="child-understrap-scripts-js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/themes/creativewalls/js/bootstrap-select.js"
        id="select-scripts-js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/themes/creativewalls/js/jquery.form.min.js"
        id="my_form_css-js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/themes/creativewalls/js/owl.carousel.min.js"
        id="my_owl_min-js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/themes/creativewalls/js/rows.js" id="my_row-js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/themes/creativewalls/js/jquery.prettyPhoto.js"
        id="my_prettyPhoto-js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/themes/creativewalls/js/jquery.fancybox.min.js"
        id="my_fancybox-js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/themes/creativewalls/js/jquery.validate.js"
        id="my_validate-js"></script>
    <script type="text/javascript"
        src="<?php echo base_url(); ?>assets/themes/creativewalls/js/whatsaap_source.js?1732931216&amp;ver=0.9.4.1573457087"
        id="whatsaap-js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/wp-includes/js/dist/vendor/wp-polyfill.min.js" id="wp-polyfill-js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/contact-form-7/modules/recaptcha/index.js"
        id="wpcf7-recaptcha-js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/wp-includes/js/dist/hooks.min.js" id="wp-hooks-js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/wp-includes/js/dist/i18n.min.js" id="wp-i18n-js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/contact-form-7/includes/swv/js/index.js"
        id="swv-js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/contact-form-7/includes/js/index.js"
        id="contact-form-7-js"></script>
        <script type="text/javascript" id="ajax-load-more-filters-js-extra">
		/* <![CDATA[ */
		var alm_filters_localize = { "remove_active_filter": "Remove filter " };
		/* ]]> */
	</script>
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/plugins/ajax-load-more-pro/pro/ajax-load-more-filters/dist/js/filters.min.js"
		id="ajax-load-more-filters-js"></script>
	<script type="text/javascript" id="ajax-load-more-js-extra">
		/* <![CDATA[ */
		var alm_localize = { "pluginurl": "<?php echo base_url(); ?>assets\/plugins\/ajax-load-more", "version": "7.1.2", "ajaxurl": "<?php echo base_url(); ?>assets\/admin-ajax.php", "alm_nonce": "36bcc1bb93", "rest_api_url": "", "rest_api": "https:\/\/www.designcafe.com\/wp-json\/", "rest_nonce": "772b13da8f", "trailing_slash": "true", "is_front_page": "false", "retain_querystring": "1", "speed": "250", "results_text": "Viewing {post_count} of {total_posts} results.", "no_results_text": "No results found.", "alm_debug": "", "a11y_focus": "1", "site_title": "DesignCafe", "site_tagline": "Complete Home Interiors | Best Home Interiors Company in Pune, Mumbai and Nagpur", "button_label": "Load More" };
		/* ]]> */
	</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/ajax-load-more/build/frontend/ajax-load-more.min.js"
		id="ajax-load-more-js"></script>
	<script>window.lazyLoadOptions = [{ elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]", data_src: "lazy-src", data_srcset: "lazy-srcset", data_sizes: "lazy-sizes", class_loading: "lazyloading", class_loaded: "lazyloaded", threshold: 300, callback_loaded: function (element) { if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") { if (element.classList.contains("lazyloaded")) { if (typeof window.jQuery != "undefined") { if (jQuery.fn.fitVids) { jQuery(element).parent().fitVids() } } } } } }, { elements_selector: ".rocket-lazyload", data_src: "lazy-src", data_srcset: "lazy-srcset", data_sizes: "lazy-sizes", class_loading: "lazyloading", class_loaded: "lazyloaded", threshold: 300, }]; window.addEventListener('LazyLoad::Initialized', function (e) {
			var lazyLoadInstance = e.detail.instance; if (window.MutationObserver) {
				var observer = new MutationObserver(function (mutations) {
					var image_count = 0; var iframe_count = 0; var rocketlazy_count = 0; mutations.forEach(function (mutation) {
						for (var i = 0; i < mutation.addedNodes.length; i++) {
							if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') { continue }
							if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') { continue }
							images = mutation.addedNodes[i].getElementsByTagName('img'); is_image = mutation.addedNodes[i].tagName == "IMG"; iframes = mutation.addedNodes[i].getElementsByTagName('iframe'); is_iframe = mutation.addedNodes[i].tagName == "IFRAME"; rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload'); image_count += images.length; iframe_count += iframes.length; rocketlazy_count += rocket_lazy.length; if (is_image) { image_count += 1 }
							if (is_iframe) { iframe_count += 1 }
						}
					}); if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) { lazyLoadInstance.update() }
				}); var b = document.getElementsByTagName("body")[0]; var config = { childList: !0, subtree: !0 }; observer.observe(b, config)
			}
		}, !1)</script>
	<script data-no-minify="1" async=""
		src="<?php echo base_url(); ?>assets/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script>
	<script>function lazyLoadThumb(e, alt, l) { var t = '<img data-lazy-src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"><noscript><img src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"></noscript>', a = '<button class="play" aria-label="play Youtube video"></button>'; if (l) { t = t.replace('data-lazy-', ''); t = t.replace('loading="lazy"', ''); t = t.replace(/<noscript>.*?<\/noscript>/g, ''); } t = t.replace('alt=""', 'alt="' + alt + '"'); return t.replace("ID", e) + a } function lazyLoadYoutubeIframe() { var e = document.createElement("iframe"), t = "ID?autoplay=1"; t += 0 === this.parentNode.dataset.query.length ? "" : "&" + this.parentNode.dataset.query; e.setAttribute("src", t.replace("ID", this.parentNode.dataset.src)), e.setAttribute("frameborder", "0"), e.setAttribute("allowfullscreen", "1"), e.setAttribute("allow", "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"), this.parentNode.parentNode.replaceChild(e, this.parentNode) } document.addEventListener("DOMContentLoaded", function () { var exclusions = ["https:\/\/media.designcafe.com\/wp-content\/uploads\/2024\/04\/30181516\/designcafe-summer-offer-on-home-interiors-d.jpg"]; var e, t, p, u, l, a = document.getElementsByClassName("rll-youtube-player"); for (t = 0; t < a.length; t++)(e = document.createElement("div")), (u = 'https://i.ytimg.com/vi/ID/hqdefault.jpg'), (u = u.replace('ID', a[t].dataset.id)), (l = exclusions.some(exclusion => u.includes(exclusion))), e.setAttribute("data-id", a[t].dataset.id), e.setAttribute("data-query", a[t].dataset.query), e.setAttribute("data-src", a[t].dataset.src), (e.innerHTML = lazyLoadThumb(a[t].dataset.id, a[t].dataset.alt, l)), a[t].appendChild(e), (p = e.querySelector(".play")), (p.onclick = lazyLoadYoutubeIframe) });</script>
</body>

</html>