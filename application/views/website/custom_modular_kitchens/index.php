    <style id="wpr-usedcss">
.iti {
    position: relative;
    display: inline-block
}

.iti * {
    box-sizing: border-box;
    -moz-box-sizing: border-box
}

.iti__hide {
    display: none
}

.iti input,
.iti input[type=tel],
.iti input[type=text] {
    position: relative;
    z-index: 0;
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    padding-right: 36px;
    margin-right: 0
}

.iti__flag-container {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    padding: 1px
}

.iti__selected-flag {
    z-index: 1;
    position: relative;
    display: flex;
    align-items: center;
    height: 100%;
    padding: 0 6px 0 8px
}

.iti__arrow {
    margin-left: 6px;
    width: 0;
    height: 0;
    border-left: 3px solid transparent;
    border-right: 3px solid transparent;
    border-top: 4px solid #555
}

.iti__arrow--up {
    border-top: none;
    border-bottom: 4px solid #555
}

.iti__country-list {
    position: absolute;
    z-index: 2;
    list-style: none;
    text-align: left;
    padding: 0;
    margin: 0 0 0 -1px;
    box-shadow: 1px 1px 4px rgba(0, 0, 0, .2);
    background-color: #fff;
    border: 1px solid #ccc;
    white-space: nowrap;
    max-height: 200px;
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch
}

.iti__country-list--dropup {
    bottom: 100%;
    margin-bottom: -1px
}

@media (max-width:500px) {
    .iti__country-list {
        white-space: normal
    }
}

.iti__flag-box {
    display: inline-block;
    width: 20px
}

.iti__divider {
    padding-bottom: 5px;
    margin-bottom: 5px;
    border-bottom: 1px solid #ccc
}

.iti__country {
    padding: 5px 10px;
    outline: 0
}

.iti__dial-code {
    color: #999
}

.iti__country.iti__highlight {
    background-color: rgba(0, 0, 0, .05)
}

.iti__country-name,
.iti__dial-code,
.iti__flag-box {
    vertical-align: middle
}

.iti__country-name,
.iti__flag-box {
    margin-right: 6px
}

.iti--allow-dropdown input,
.iti--allow-dropdown input[type=tel],
.iti--allow-dropdown input[type=text],
.iti--separate-dial-code input,
.iti--separate-dial-code input[type=tel],
.iti--separate-dial-code input[type=text] {
    padding-right: 6px;
    padding-left: 52px;
    margin-left: 0
}

.iti--allow-dropdown .iti__flag-container,
.iti--separate-dial-code .iti__flag-container {
    right: auto;
    left: 0
}

.iti--allow-dropdown .iti__flag-container:hover {
    cursor: pointer
}

.iti--allow-dropdown .iti__flag-container:hover .iti__selected-flag {
    background-color: rgba(0, 0, 0, .05)
}

.iti--allow-dropdown input[disabled]+.iti__flag-container:hover {
    cursor: default
}

.iti--allow-dropdown input[disabled]+.iti__flag-container:hover .iti__selected-flag {
    background-color: transparent
}

.iti--separate-dial-code .iti__selected-flag {
    background-color: rgba(0, 0, 0, .05)
}

.iti--separate-dial-code .iti__selected-dial-code {
    margin-left: 6px
}

.iti--container {
    position: absolute;
    top: -1000px;
    left: -1000px;
    z-index: 1060;
    padding: 1px
}

.iti--container:hover {
    cursor: pointer
}

.iti-mobile .iti--container {
    top: 30px;
    bottom: 30px;
    left: 30px;
    right: 30px;
    position: fixed
}

.iti-mobile .iti__country-list {
    max-height: 100%;
    width: 100%
}

.iti-mobile .iti__country {
    padding: 10px;
    line-height: 1.5em
}

.iti__flag {
    width: 20px
}

.iti__flag {
    height: 15px;
    box-shadow: 0 0 1px 0 #888;
    background-image: url("../ajax/libs/intl-tel-input/17.0.8/img/flags.png");
    background-repeat: no-repeat;
    background-color: #dbdbdb;
    background-position: 20px 0
}

@media (-webkit-min-device-pixel-ratio:2),
(min-resolution:192dpi) {
    .iti__flag {
        background-size: 5652px 15px
    }

    .iti__flag {
        background-image: url("../ajax/libs/intl-tel-input/17.0.8/img/flags@2x.png")
    }
}

.contact-us-location-listing {
    text-align: center
}

.blog-widget-area .widget:first-child {
    padding: 0 0 35px
}

.search-form {
    align-items: center
}

@media(min-width:320px) and (max-width:479px) {
    .site-info {
        padding: 0 50px
    }

    .fa-facebook:before,
    .fa-linkedin:before,
    .fa-twitter:before,
    .fa-whatsapp:before {
        margin-right: 6px
    }
}

@media(min-width:480px) and (max-width:767px) {
    .site-info {
        padding: 0
    }

    .fa-facebook:before,
    .fa-linkedin:before,
    .fa-twitter:before,
    .fa-whatsapp:before {
        margin-right: 6px
    }
}

@media(min-width:768px) and (max-width:1023px) {
    .wpcf7-form:last-child {
        text-align: center;
        display: flex;
        flex-direction: column
    }

    .site-info {
        padding: 0
    }
}

.hero-slider .owl-item.active h1 {
    -animation: 1s .3s fadeInUp both
}

@media(max-width:1919px) {
    .container {
        max-width: 100% !important;
        padding: 0 60px
    }
}

@media(min-width:768px) and (max-width:1023px) {
    .container {
        max-width: 100% !important;
        padding: 0 5%
    }

    .hero-slider .owl-dots .owl-dot span {
        width: 10px;
        height: 10px
    }
}

@media (min-width:480px) and (max-width:767px) {
    .container {
        max-width: 100% !important;
        padding: 0 5%
    }
}

@media (min-width:320px) and (max-width:479px) {
    .container {
        max-width: 100% !important;
        padding: 0 5%
    }
}

@media(min-width:1024px) and (max-width:1279px) {
    .cta-header-btn {
        margin-left: 17px
    }

    .cta-header-btn a {
        font-size: 12px
    }

    .cta-action {
        margin-left: 28px;
        font-size: 12px
    }

    .cta-action a {
        padding: 12px 12px 10px
    }

    .header-navabar-nav .header-navabar-nav-auto {
        font-size: 12px
    }

    .common-link-button {
        font-size: 16px;
        padding: 12px 35px
    }
}

div.pp_default .pp_bottom,
div.pp_default .pp_bottom .pp_left,
div.pp_default .pp_bottom .pp_middle,
div.pp_default .pp_bottom .pp_right,
div.pp_default .pp_top,
div.pp_default .pp_top .pp_left,
div.pp_default .pp_top .pp_middle,
div.pp_default .pp_top .pp_right {
    height: 13px
}

div.pp_default .pp_top .pp_left {
    background: var(--wpr-bg-11ebd7c8-4a93-4a7b-8a3f-d59e13dc2329) -78px -93px no-repeat
}

div.pp_default .pp_top .pp_middle {
    background: var(--wpr-bg-a6f8fa31-b49a-45c3-9276-a60515da338e) top left repeat-x
}

div.pp_default .pp_top .pp_right {
    background: var(--wpr-bg-4ccc85a9-3c47-4c35-adb9-9e5612513164) -112px -93px no-repeat
}

div.pp_default .pp_content .ppt {
    color: #f8f8f8
}

div.pp_default .pp_content_container .pp_left {
    background: var(--wpr-bg-b72a6e72-2b45-4237-8fdb-ece973fc1bdc) -7px 0 repeat-y;
    padding-left: 13px
}

div.pp_default .pp_content_container .pp_right {
    background: var(--wpr-bg-22c552b1-55bc-424c-8f73-6de78f9c9c20) top right repeat-y;
    padding-right: 13px
}

div.pp_default .pp_next:hover {
    background: var(--wpr-bg-a9dc0761-11c0-4718-8d79-68e4c126fd84) center right no-repeat;
    cursor: pointer
}

div.pp_default .pp_previous:hover {
    background: var(--wpr-bg-f6717309-288c-4d25-8cf6-1f5a270dcd82) center left no-repeat;
    cursor: pointer
}

div.pp_default .pp_expand {
    background: var(--wpr-bg-b4ab2ade-3d0e-4d45-a941-ae96d5a0b489) 0 -29px no-repeat;
    cursor: pointer;
    width: 28px;
    height: 28px
}

div.pp_default .pp_expand:hover {
    background: var(--wpr-bg-c6bf13f4-a76f-455c-9580-47221ac061fa) 0 -56px no-repeat;
    cursor: pointer
}

div.pp_default .pp_contract {
    background: var(--wpr-bg-cf00b6f5-f93a-4a22-91fc-bb57db82d44f) 0 -84px no-repeat;
    cursor: pointer;
    width: 28px;
    height: 28px
}

div.pp_default .pp_contract:hover {
    background: var(--wpr-bg-d4c6a894-2385-43ee-9f86-92fe106781b6) 0 -113px no-repeat;
    cursor: pointer
}

div.pp_default .pp_close {
    width: 30px;
    height: 30px;
    background: var(--wpr-bg-739abd49-80bf-432e-87ea-dd4a9a250e74) 2px 1px no-repeat;
    cursor: pointer
}

div.pp_default .pp_gallery ul li a {
    background: var(--wpr-bg-b465abfc-df2e-4a4f-8150-8af6a9958a1c) center center #f8f8f8;
    border: 1px solid #aaa
}

div.pp_default .pp_social {
    margin-top: 7px
}

div.pp_default .pp_gallery a.pp_arrow_next,
div.pp_default .pp_gallery a.pp_arrow_previous {
    position: static;
    left: auto
}

div.pp_default .pp_nav .pp_pause,
div.pp_default .pp_nav .pp_play {
    background: var(--wpr-bg-32ba383a-6ea0-4b79-9dcf-26cc42715ef8) -51px 1px no-repeat;
    height: 30px;
    width: 30px
}

div.pp_default .pp_nav .pp_pause {
    background-position: -51px -29px
}

div.pp_default a.pp_arrow_next,
div.pp_default a.pp_arrow_previous {
    background: var(--wpr-bg-a6bf4023-1c1d-4928-bf9c-2ce0269e3b2c) -31px -3px no-repeat;
    height: 20px;
    width: 20px;
    margin: 4px 0 0
}

div.pp_default a.pp_arrow_next {
    left: 52px;
    background-position: -82px -3px
}

div.pp_default .pp_content_container .pp_details {
    margin-top: 5px
}

div.pp_default .pp_nav {
    clear: none;
    height: 30px;
    width: 110px;
    position: relative
}

div.pp_default .pp_nav .currentTextHolder {
    font-family: Georgia;
    font-style: italic;
    color: #999;
    font-size: 11px;
    left: 75px;
    line-height: 25px;
    position: absolute;
    top: 2px;
    margin: 0;
    padding: 0 0 0 10px
}

div.pp_default .pp_arrow_next:hover,
div.pp_default .pp_arrow_previous:hover,
div.pp_default .pp_close:hover,
div.pp_default .pp_nav .pp_pause:hover,
div.pp_default .pp_nav .pp_play:hover {
    opacity: .7
}

div.pp_default .pp_description {
    font-size: 11px;
    font-weight: 700;
    line-height: 14px;
    margin: 5px 50px 5px 0
}

div.pp_default .pp_bottom .pp_left {
    background: var(--wpr-bg-f7f7c59d-bbb3-4e6c-a003-f022167ec1fd) -78px -127px no-repeat
}

div.pp_default .pp_bottom .pp_middle {
    background: var(--wpr-bg-55156923-201c-46b4-a342-38c2f277fc12) bottom left repeat-x
}

div.pp_default .pp_bottom .pp_right {
    background: var(--wpr-bg-b32ec644-52bd-4d72-bc31-d2e5d4347d03) -112px -127px no-repeat
}

div.pp_default .pp_loaderIcon {
    background: var(--wpr-bg-74e57fc9-db95-435d-9a3d-810306f09587) center center no-repeat
}

div.facebook .pp_top .pp_left {
    background: var(--wpr-bg-9473c415-fdf1-419f-8fa2-f799e768c669) -88px -53px no-repeat
}

div.facebook .pp_top .pp_middle {
    background: var(--wpr-bg-d2dc4a81-4b10-47a7-aced-0259c3e98daf) top left repeat-x
}

div.facebook .pp_top .pp_right {
    background: var(--wpr-bg-283251f1-3426-4314-b7da-64f7602d8deb) -110px -53px no-repeat
}

div.facebook .pp_content_container .pp_left {
    background: var(--wpr-bg-dada0ce6-8a93-4589-aee9-08c0f7c7ed0d) top left repeat-y
}

div.facebook .pp_content_container .pp_right {
    background: var(--wpr-bg-c1c52507-c853-46d3-ae7b-6bc4eabec6d3) top right repeat-y
}

div.facebook .pp_expand {
    background: var(--wpr-bg-3ba9bbce-66f3-4529-b345-fa148bbf8d7c) -31px -26px no-repeat;
    cursor: pointer
}

div.facebook .pp_expand:hover {
    background: var(--wpr-bg-2097991e-daa4-463c-b9c7-9503f369fcaf) -31px -47px no-repeat;
    cursor: pointer
}

div.facebook .pp_contract {
    background: var(--wpr-bg-611264e8-0f80-48bb-aaa0-f37c60069842) 0 -26px no-repeat;
    cursor: pointer
}

div.facebook .pp_contract:hover {
    background: var(--wpr-bg-34ebba9b-81b5-4cf7-af05-1ebe6500283a) 0 -47px no-repeat;
    cursor: pointer
}

div.facebook .pp_close {
    width: 22px;
    height: 22px;
    background: var(--wpr-bg-1ca05260-2ce7-4721-8180-c700c97813e1) -1px -1px no-repeat;
    cursor: pointer
}

div.facebook .pp_description {
    margin: 0 37px 0 0
}

div.facebook .pp_loaderIcon {
    background: var(--wpr-bg-869c8d9d-d45b-4a04-a3ca-b987af7c68d6) center center no-repeat
}

div.facebook .pp_arrow_previous {
    background: var(--wpr-bg-2ccced9f-c26d-4e23-a794-92ccda3a3353) 0 -71px no-repeat;
    height: 22px;
    margin-top: 0;
    width: 22px
}

div.facebook .pp_arrow_previous.disabled {
    background-position: 0 -96px;
    cursor: default
}

div.facebook .pp_arrow_next {
    background: var(--wpr-bg-69d76b79-ee38-41cc-b069-76b37a9a12d9) -32px -71px no-repeat;
    height: 22px;
    margin-top: 0;
    width: 22px
}

div.facebook .pp_arrow_next.disabled {
    background-position: -32px -96px;
    cursor: default
}

div.facebook .pp_nav {
    margin-top: 0
}

div.facebook .pp_nav p {
    font-size: 15px;
    padding: 0 3px 0 4px
}

div.facebook .pp_nav .pp_play {
    background: var(--wpr-bg-20ea6fec-be51-4f72-a914-a0699428a2e7) -1px -123px no-repeat;
    height: 22px;
    width: 22px
}

div.facebook .pp_nav .pp_pause {
    background: var(--wpr-bg-3bd54dda-5f5f-47d4-bd49-574000a135ab) -32px -123px no-repeat;
    height: 22px;
    width: 22px
}

div.facebook .pp_next:hover {
    background: var(--wpr-bg-c2cb3c0d-4033-4857-b7f3-ff7f77be4bf6) center right no-repeat;
    cursor: pointer
}

div.facebook .pp_previous:hover {
    background: var(--wpr-bg-3ef0c421-a9ba-49e9-90c4-f362670d2f1c) center left no-repeat;
    cursor: pointer
}

div.facebook .pp_bottom .pp_left {
    background: var(--wpr-bg-d0c20c12-e980-4401-86ac-1190d041f6ff) -88px -80px no-repeat
}

div.facebook .pp_bottom .pp_middle {
    background: var(--wpr-bg-99d6399b-3d23-4708-9b77-fd9e26fa8ca3) top left repeat-x
}

div.facebook .pp_bottom .pp_right {
    background: var(--wpr-bg-9c3b1245-3b90-49c1-8391-4fb02c618d7d) -110px -80px no-repeat
}

div.pp_pic_holder a:focus {
    outline: 0
}

div.pp_overlay {
    background: #000;
    display: none;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 9500
}

div.pp_pic_holder {
    display: none;
    position: absolute;
    width: 100px;
    z-index: 10000
}

.pp_content {
    height: 40px;
    min-width: 40px
}

* html .pp_content {
    width: 40px
}

.pp_content_container {
    position: relative;
    text-align: left;
    width: 100%
}

.pp_content_container .pp_left {
    padding-left: 20px
}

.pp_content_container .pp_right {
    padding-right: 20px
}

.pp_content_container .pp_details {
    float: left;
    margin: 10px 0 2px
}

.pp_description {
    display: none;
    margin: 0
}

.pp_social {
    float: left;
    margin: 0
}

.pp_social .facebook {
    float: left;
    margin-left: 5px;
    width: 55px;
    overflow: hidden
}

.pp_nav {
    clear: right;
    float: left;
    margin: 3px 10px 0 0
}

.pp_nav p {
    float: left;
    white-space: nowrap;
    margin: 2px 4px
}

.pp_nav .pp_pause,
.pp_nav .pp_play {
    float: left;
    margin-right: 4px;
    text-indent: -10000px
}

a.pp_arrow_next,
a.pp_arrow_previous {
    display: block;
    float: left;
    height: 15px;
    margin-top: 3px;
    overflow: hidden;
    text-indent: -10000px;
    width: 14px
}

.pp_hoverContainer {
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 2000
}

.pp_gallery {
    display: none;
    left: 50%;
    margin-top: -50px;
    position: absolute;
    z-index: 10000
}

.pp_gallery div {
    float: left;
    overflow: hidden;
    position: relative
}

.pp_gallery ul {
    float: left;
    height: 35px;
    position: relative;
    white-space: nowrap;
    margin: 0 0 0 5px;
    padding: 0
}

.pp_gallery ul a {
    border: 1px solid rgba(0, 0, 0, .5);
    display: block;
    float: left;
    height: 33px;
    overflow: hidden
}

.pp_gallery ul a img {
    border: 0
}

.pp_gallery li {
    display: block;
    float: left;
    margin: 0 5px 0 0;
    padding: 0
}

.pp_gallery li.default a {
    background: var(--wpr-bg-297aefc8-88e0-4246-b22a-f0cf8b878603) no-repeat;
    display: block;
    height: 33px;
    width: 50px
}

.pp_gallery .pp_arrow_next,
.pp_gallery .pp_arrow_previous {
    margin-top: 7px !important
}

a.pp_next {
    background: var(--wpr-bg-d945836c-1272-4626-9f3b-3690cd216673) 10000px 10000px no-repeat;
    display: block;
    float: right;
    height: 100%;
    text-indent: -10000px;
    width: 49%
}

a.pp_previous {
    background: var(--wpr-bg-0eaa05db-307e-40ea-aef0-068406b3dfa8) 10000px 10000px no-repeat;
    display: block;
    float: left;
    height: 100%;
    text-indent: -10000px;
    width: 49%
}

a.pp_contract,
a.pp_expand {
    cursor: pointer;
    display: none;
    height: 20px;
    position: absolute;
    right: 30px;
    text-indent: -10000px;
    top: 10px;
    width: 20px;
    z-index: 20000
}

a.pp_close {
    position: absolute;
    right: 0;
    top: 0;
    display: block;
    line-height: 22px;
    text-indent: -10000px
}

.pp_loaderIcon {
    display: block;
    height: 24px;
    left: 50%;
    position: absolute;
    top: 50%;
    width: 24px;
    margin: -12px 0 0 -12px
}

#pp_full_res {
    line-height: 1 !important
}

#pp_full_res .pp_inline {
    text-align: left
}

#pp_full_res .pp_inline p {
    margin: 0 0 15px
}

div.ppt {
    color: #fff;
    display: none;
    font-size: 17px;
    z-index: 9999;
    margin: 0 0 5px 15px
}

div.pp_default .pp_content {
    background-color: #fff
}

div.facebook #pp_full_res .pp_inline,
div.facebook .pp_content .ppt,
div.pp_default #pp_full_res .pp_inline {
    color: #000
}

.pp_gallery li.selected a,
.pp_gallery ul a:hover,
div.pp_default .pp_gallery ul li a:hover,
div.pp_default .pp_gallery ul li.selected a {
    border-color: #fff
}

div.facebook .pp_details,
div.pp_default .pp_details {
    position: relative
}

div.facebook .pp_content {
    background: #fff
}

.pp_bottom,
.pp_top {
    height: 20px;
    position: relative
}

* html .pp_bottom,
* html .pp_top {
    padding: 0 20px
}

.pp_bottom .pp_left,
.pp_top .pp_left {
    height: 20px;
    left: 0;
    position: absolute;
    width: 20px
}

.pp_bottom .pp_middle,
.pp_top .pp_middle {
    height: 20px;
    left: 20px;
    position: absolute;
    right: 20px
}

* html .pp_bottom .pp_middle,
* html .pp_top .pp_middle {
    left: 0;
    position: static
}

.pp_bottom .pp_right,
.pp_top .pp_right {
    height: 20px;
    left: auto;
    position: absolute;
    right: 0;
    top: 0;
    width: 20px
}

.pp_fade,
.pp_gallery li.default a img {
    display: none
}

img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 .07em !important;
    vertical-align: -.1em !important;
    background: 0 0 !important;
    padding: 0 !important
}

:where(.wp-block-button__link) {
    border-radius: 9999px;
    box-shadow: none;
    padding: calc(.667em + 2px) calc(1.333em + 2px);
    text-decoration: none
}

:root :where(.wp-block-button .wp-block-button__link.is-style-outline),
:root :where(.wp-block-button.is-style-outline>.wp-block-button__link) {
    border: 2px solid;
    padding: .667em 1.333em
}

:root :where(.wp-block-button .wp-block-button__link.is-style-outline:not(.has-text-color)),
:root :where(.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color)) {
    color: currentColor
}

:root :where(.wp-block-button .wp-block-button__link.is-style-outline:not(.has-background)),
:root :where(.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-background)) {
    background-color: initial;
    background-image: none
}

:where(.wp-block-calendar table:not(.has-background) th) {
    background: #ddd
}

:where(.wp-block-columns) {
    margin-bottom: 1.75em
}

:where(.wp-block-columns.has-background) {
    padding: 1.25em 2.375em
}

:where(.wp-block-post-comments input[type=submit]) {
    border: none
}

:where(.wp-block-cover-image:not(.has-text-color)),
:where(.wp-block-cover:not(.has-text-color)) {
    color: #fff
}

:where(.wp-block-cover-image.is-light:not(.has-text-color)),
:where(.wp-block-cover.is-light:not(.has-text-color)) {
    color: #000
}

:root :where(.wp-block-cover h1:not(.has-text-color)),
:root :where(.wp-block-cover h2:not(.has-text-color)),
:root :where(.wp-block-cover h3:not(.has-text-color)),
:root :where(.wp-block-cover h4:not(.has-text-color)),
:root :where(.wp-block-cover h5:not(.has-text-color)),
:root :where(.wp-block-cover h6:not(.has-text-color)),
:root :where(.wp-block-cover p:not(.has-text-color)) {
    color: inherit
}

:where(.wp-block-file) {
    margin-bottom: 1.5em
}

:where(.wp-block-file__button) {
    border-radius: 2em;
    display: inline-block;
    padding: .5em 1em
}

:where(.wp-block-file__button):is(a):active,
:where(.wp-block-file__button):is(a):focus,
:where(.wp-block-file__button):is(a):hover,
:where(.wp-block-file__button):is(a):visited {
    box-shadow: none;
    color: #fff;
    opacity: .85;
    text-decoration: none
}

:where(.wp-block-group.wp-block-group-is-layout-constrained) {
    position: relative
}

:root :where(.wp-block-image.is-style-rounded img, .wp-block-image .is-style-rounded img) {
    border-radius: 9999px
}

:where(.wp-block-latest-comments:not([style*=line-height] .wp-block-latest-comments__comment)) {
    line-height: 1.1
}

:where(.wp-block-latest-comments:not([style*=line-height] .wp-block-latest-comments__comment-excerpt p)) {
    line-height: 1.8
}

:root :where(.wp-block-latest-posts.is-grid) {
    padding: 0
}

:root :where(.wp-block-latest-posts.wp-block-latest-posts__list) {
    padding-left: 0
}

ul {
    box-sizing: border-box
}

:root :where(ul.has-background, ol.has-background) {
    padding: 1.25em 2.375em
}

:where(.wp-block-navigation.has-background .wp-block-navigation-item a:not(.wp-element-button)),
:where(.wp-block-navigation.has-background .wp-block-navigation-submenu a:not(.wp-element-button)) {
    padding: .5em 1em
}

:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-item a:not(.wp-element-button)),
:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-submenu a:not(.wp-element-button)),
:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-submenu button.wp-block-navigation-item__content),
:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-pages-list__item button.wp-block-navigation-item__content) {
    padding: .5em 1em
}

:root :where(p.has-background) {
    padding: 1.25em 2.375em
}

:where(p.has-text-color:not(.has-link-color)) a {
    color: inherit
}

:where(.wp-block-post-comments-form) input:not([type=submit]),
:where(.wp-block-post-comments-form) textarea {
    border: 1px solid #949494;
    font-family: inherit;
    font-size: 1em
}

:where(.wp-block-post-comments-form) input:where(:not([type=submit]):not([type=checkbox])),
:where(.wp-block-post-comments-form) textarea {
    padding: calc(.667em + 2px)
}

:where(.wp-block-post-excerpt) {
    margin-bottom: var(--wp--style--block-gap);
    margin-top: var(--wp--style--block-gap)
}

:where(.wp-block-preformatted.has-background) {
    padding: 1.25em 2.375em
}

:where(.wp-block-search__button) {
    border: 1px solid #ccc;
    padding: 6px 10px
}

:where(.wp-block-search__input) {
    font-family: inherit;
    font-size: inherit;
    font-style: inherit;
    font-weight: inherit;
    letter-spacing: inherit;
    line-height: inherit;
    text-transform: inherit
}

:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) {
    border: 1px solid #949494;
    box-sizing: border-box;
    padding: 4px
}

:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) .wp-block-search__input {
    border: none;
    border-radius: 0;
    padding: 0 4px
}

:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) .wp-block-search__input:focus {
    outline: 0
}

:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) :where(.wp-block-search__button) {
    padding: 4px 8px
}

@media screen and (max-width:600px) {
    html :where(.is-position-sticky) {
        --wp-admin--admin-bar--position-offset: 0px
    }
}

:where(.is-layout-flex) {
    gap: .5em
}

:where(.is-layout-grid) {
    gap: .5em
}

:where(.wp-block-post-template.is-layout-flex) {
    gap: 1.25em
}

:where(.wp-block-post-template.is-layout-grid) {
    gap: 1.25em
}

:where(.wp-block-columns.is-layout-flex) {
    gap: 2em
}

:where(.wp-block-columns.is-layout-grid) {
    gap: 2em
}
div#noty-holder {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 99999
}

.custom-notify {
    text-align: center;
    background-color: #C85514;
    border-color: #C85514;
    color: #fff;
    border-radius: 0;
    font-size: 16px;
    padding: 10px;
    margin-bottom: 0;
    line-height: 1.2
}

.notify-close {
    color: #fff;
    opacity: 1;
    font-size: 2rem;
    line-height: 1;
    font-weight: 500;
    margin-top: -10px
}

.custom-notify a {
    margin-left: 5px
}

.custom-notify a span {
    color: #fff
}

.custom-notify a span:first-child {
    text-decoration: underline
}

.custom-notify a:hover span {
    text-decoration: initial
}

@media (min-width:1920px) {
    .fixed-body {
        top: 147px
    }

    .fixed-top {
        top: 40px
    }
}

@media (min-width:1440px) and (max-width:1919px) {
    .fixed-body {
        top: 118px
    }

    .fixed-top {
        top: 40px
    }
}

@media (min-width:1366px) and (max-width:1439px) {
    .fixed-body {
        top: 118px
    }

    .fixed-top {
        top: 40px
    }
}

@media (min-width:1280px) and (max-width:1365px) {
    .fixed-body {
        top: 118px
    }

    .fixed-top {
        top: 40px
    }
}

@media (min-width:1024px) and (max-width:1279px) {
    .fixed-body {
        top: 136px
    }

    .fixed-top {
        top: 40px
    }
}

@media (min-width:768px) and (max-width:1023px) {
    .fixed-body {
        top: 138px
    }

    .fixed-top {
        top: 58px
    }
}

@media (min-width:480px) and (max-width:767px) {
    .fixed-body {
        padding-top: 210px;
        top: -103px
    }

    .custom-notify {
        font-size: 14px !important;
        line-height: 20px
    }

    .fixed-top {
        z-index: 99999
    }
}

@media (min-width:331px) and (max-width:479px) {
    .fixed-top {
        top: 104px
    }

    .custom-notify {
        font-size: 14px !important;
        line-height: 20px
    }

    .fixed-top {
        z-index: 99999
    }
}

@media (min-width:360px) and (max-width:479px) {
    .fixed-top {
        top: 0
    }

    .custom-notify {
        font-size: 14px !important;
        line-height: 20px
    }

    .whatsapp.cta-header-btn {
        display: none
    }
}

@media (min-width:320px) and (max-width:360px) {
    .fixed-top {
        z-index: 99999
    }

    .fixed-body {
        top: 68px
    }

    .whatsapp.cta-header-btn {
        display: none
    }

    .custom-notify {
        font-size: 14px !important;
        line-height: 25px
    }
}

@media (min-width:361px) and (max-width:767px) {
    .custom-notify {
        font-size: 16px
    }

    .custom-notify a {
        margin-left: 5px;
        display: block
    }

    .custom-notify a span:first-child {
        text-decoration: underline;
        font-size: 16px
    }

    .whatsapp.cta-header-btn {
        display: none
    }
}

@media screen and (min-width:972px) {
    .custom-notify br {
        display: none
    }
}

.cta-action:hover a {
    font-size: 15px
}

.footer-description-text {
    font-size: 16px;
    line-height: 26px;
    letter-spacing: .5px;
    color: #484848;
    margin: 0;
    padding: 5px 0;
    text-align: center
}

@media (max-width:767px) {
    .footer-description-text {
        font-size: 10px;
        line-height: 16px
    }
}

body.compensate-for-scrollbar {
    overflow: hidden
}

.fancybox-active {
    height: auto
}

.fancybox-is-hidden {
    left: -9999px;
    margin: 0;
    position: absolute !important;
    top: -9999px;
    visibility: hidden
}

.fancybox-container {
    -webkit-backface-visibility: hidden;
    height: 100%;
    left: 0;
    outline: 0;
    position: fixed;
    -webkit-tap-highlight-color: transparent;
    top: 0;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    transform: translateZ(0);
    width: 100%;
    z-index: 99992
}

.fancybox-container * {
    box-sizing: border-box
}

.fancybox-bg,
.fancybox-inner,
.fancybox-outer,
.fancybox-stage {
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0
}

.fancybox-outer {
    -webkit-overflow-scrolling: touch;
    overflow-y: auto
}

.fancybox-bg {
    background: #1e1e1e;
    opacity: 0;
    transition-duration: inherit;
    transition-property: opacity;
    transition-timing-function: cubic-bezier(.47, 0, .74, .71)
}

.fancybox-is-open .fancybox-bg {
    opacity: .9;
    transition-timing-function: cubic-bezier(.22, .61, .36, 1)
}

.fancybox-caption,
.fancybox-infobar,
.fancybox-navigation .fancybox-button,
.fancybox-toolbar {
    direction: ltr;
    opacity: 0;
    position: absolute;
    transition: opacity .25s ease, visibility 0s ease .25s;
    visibility: hidden;
    z-index: 99997
}

.fancybox-show-caption .fancybox-caption,
.fancybox-show-infobar .fancybox-infobar,
.fancybox-show-nav .fancybox-navigation .fancybox-button,
.fancybox-show-toolbar .fancybox-toolbar {
    opacity: 1;
    transition: opacity .25s ease 0s, visibility 0s ease 0s;
    visibility: visible
}

.fancybox-infobar {
    color: #ccc;
    font-size: 13px;
    -webkit-font-smoothing: subpixel-antialiased;
    height: 44px;
    left: 0;
    line-height: 44px;
    min-width: 44px;
    mix-blend-mode: difference;
    padding: 0 10px;
    pointer-events: none;
    top: 0;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.fancybox-toolbar {
    right: 0;
    top: 0
}

.fancybox-stage {
    direction: ltr;
    overflow: visible;
    transform: translateZ(0);
    z-index: 99994
}

.fancybox-is-open .fancybox-stage {
    overflow: hidden
}

.fancybox-slide {
    -webkit-backface-visibility: hidden;
    display: none;
    height: 100%;
    left: 0;
    outline: 0;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
    padding: 44px;
    position: absolute;
    text-align: center;
    top: 0;
    transition-property: transform, opacity;
    white-space: normal;
    width: 100%;
    z-index: 99994
}

.fancybox-slide:before {
    content: "";
    display: inline-block;
    font-size: 0;
    height: 100%;
    vertical-align: middle;
    width: 0
}

.fancybox-is-sliding .fancybox-slide,
.fancybox-slide--current,
.fancybox-slide--next,
.fancybox-slide--previous {
    display: block
}

.fancybox-slide--image {
    overflow: hidden;
    padding: 44px 0
}

.fancybox-slide--image:before {
    display: none
}

.fancybox-slide--html {
    padding: 6px
}

.fancybox-content {
    background: #fff;
    display: inline-block;
    margin: 0;
    max-width: 100%;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
    padding: 44px;
    position: relative;
    text-align: left;
    vertical-align: middle
}

.fancybox-slide--image .fancybox-content {
    animation-timing-function: cubic-bezier(.5, 0, .14, 1);
    -webkit-backface-visibility: hidden;
    background: 0 0;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    left: 0;
    max-width: none;
    overflow: visible;
    padding: 0;
    position: absolute;
    top: 0;
    transform-origin: top left;
    transition-property: transform, opacity;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    z-index: 99995
}

.fancybox-can-zoomOut .fancybox-content {
    cursor: zoom-out
}

.fancybox-can-zoomIn .fancybox-content {
    cursor: zoom-in
}

.fancybox-can-pan .fancybox-content,
.fancybox-can-swipe .fancybox-content {
    cursor: grab
}

.fancybox-is-grabbing .fancybox-content {
    cursor: grabbing
}

.fancybox-container [data-selectable=true] {
    cursor: text
}

.fancybox-image,
.fancybox-spaceball {
    background: 0 0;
    border: 0;
    height: 100%;
    left: 0;
    margin: 0;
    max-height: none;
    max-width: none;
    padding: 0;
    position: absolute;
    top: 0;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    width: 100%
}

.fancybox-spaceball {
    z-index: 1
}

.fancybox-slide--iframe .fancybox-content,
.fancybox-slide--map .fancybox-content,
.fancybox-slide--pdf .fancybox-content,
.fancybox-slide--video .fancybox-content {
    height: 100%;
    overflow: visible;
    padding: 0;
    width: 100%
}

.fancybox-slide--video .fancybox-content {
    background: #000
}

.fancybox-slide--map .fancybox-content {
    background: #e5e3df
}

.fancybox-slide--iframe .fancybox-content {
    background: #fff
}

.fancybox-iframe,
.fancybox-video {
    background: 0 0;
    border: 0;
    display: block;
    height: 100%;
    margin: 0;
    overflow: hidden;
    padding: 0;
    width: 100%
}

.fancybox-iframe {
    left: 0;
    position: absolute;
    top: 0
}

.fancybox-error {
    background: #fff;
    cursor: default;
    max-width: 400px;
    padding: 40px;
    width: 100%
}

.fancybox-error p {
    color: #444;
    font-size: 16px;
    line-height: 20px;
    margin: 0;
    padding: 0
}

.fancybox-button {
    background: rgba(30, 30, 30, .6);
    border: 0;
    border-radius: 0;
    box-shadow: none;
    cursor: pointer;
    display: inline-block;
    height: 44px;
    margin: 0;
    padding: 10px;
    position: relative;
    transition: color .2s;
    vertical-align: top;
    visibility: inherit;
    width: 44px
}

.fancybox-button,
.fancybox-button:link,
.fancybox-button:visited {
    color: #ccc
}

.fancybox-button:hover {
    color: #fff
}

.fancybox-button:focus {
    outline: 0
}

.fancybox-button.fancybox-focus {
    outline: dotted 1px
}

.fancybox-button[disabled],
.fancybox-button[disabled]:hover {
    color: #888;
    cursor: default;
    outline: 0
}

.fancybox-button div {
    height: 100%
}

.fancybox-button svg {
    display: block;
    height: 100%;
    overflow: visible;
    position: relative;
    width: 100%
}

.fancybox-button svg path {
    fill: currentColor;
    stroke-width: 0
}

.fancybox-button--fsenter svg:nth-child(2),
.fancybox-button--fsexit svg:first-child,
.fancybox-button--pause svg:first-child,
.fancybox-button--play svg:nth-child(2) {
    display: none
}

.fancybox-progress {
    background: #ff5268;
    height: 2px;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transform: scaleX(0);
    transform-origin: 0;
    transition-property: transform;
    transition-timing-function: linear;
    z-index: 99998
}

.fancybox-close-small {
    background: 0 0;
    border: 0;
    border-radius: 0;
    color: #ccc;
    cursor: pointer;
    opacity: .8;
    padding: 8px;
    position: absolute;
    right: -12px;
    top: -44px;
    z-index: 401
}

.fancybox-close-small:hover {
    color: #fff;
    opacity: 1
}

.fancybox-slide--html .fancybox-close-small {
    color: currentColor;
    padding: 10px;
    right: 0;
    top: 0
}

.fancybox-slide--image.fancybox-is-scaling .fancybox-content {
    overflow: hidden
}

.fancybox-is-scaling .fancybox-close-small,
.fancybox-is-zoomable.fancybox-can-pan .fancybox-close-small {
    display: none
}

.fancybox-navigation .fancybox-button {
    background-clip: content-box;
    height: 100px;
    opacity: 0;
    position: absolute;
    top: calc(50% - 50px);
    width: 70px
}

.fancybox-navigation .fancybox-button div {
    padding: 7px
}

.fancybox-navigation .fancybox-button--arrow_left {
    left: calc(0px - env(safe-area-inset-left));
    padding: 31px 26px 31px 6px
}

.fancybox-navigation .fancybox-button--arrow_right {
    padding: 31px 6px 31px 26px;
    right: 0;
    right: env(safe-area-inset-right)
}

.fancybox-caption {
    background: linear-gradient(0deg, rgba(0, 0, 0, .85) 0, rgba(0, 0, 0, .3) 50%, rgba(0, 0, 0, .15) 65%, rgba(0, 0, 0, .075) 75.5%, rgba(0, 0, 0, .037) 82.85%, rgba(0, 0, 0, .019) 88%, transparent);
    bottom: 0;
    color: #eee;
    font-size: 14px;
    font-weight: 400;
    left: 0;
    line-height: 1.5;
    padding: 75px 44px 25px;
    pointer-events: none;
    right: 0;
    text-align: center;
    z-index: 99996
}

@supports (padding:max(0px)) {
    .fancybox-caption {
        padding: 75px max(44px, env(safe-area-inset-right)) max(25px, env(safe-area-inset-bottom)) max(44px, env(safe-area-inset-left))
    }
}

.fancybox-caption--separate {
    margin-top: -50px
}

.fancybox-caption__body {
    max-height: 50vh;
    overflow: auto;
    pointer-events: all
}

.fancybox-caption a,
.fancybox-caption a:link,
.fancybox-caption a:visited {
    color: #ccc;
    text-decoration: none
}

.fancybox-caption a:hover {
    color: #fff;
    text-decoration: underline
}

.fancybox-loading {
    animation: 1s linear infinite a;
    background: 0 0;
    border: 4px solid #888;
    border-bottom-color: #fff;
    border-radius: 50%;
    height: 50px;
    left: 50%;
    margin: -25px 0 0 -25px;
    opacity: .7;
    padding: 0;
    position: absolute;
    top: 50%;
    width: 50px;
    z-index: 99999
}

@keyframes a {
    to {
        transform: rotate(1turn)
    }
}

.fancybox-animated {
    transition-timing-function: cubic-bezier(0, 0, .25, 1)
}

.fancybox-fx-slide.fancybox-slide--previous {
    opacity: 0;
    transform: translate3d(-100%, 0, 0)
}

.fancybox-fx-slide.fancybox-slide--next {
    opacity: 0;
    transform: translate3d(100%, 0, 0)
}

.fancybox-fx-slide.fancybox-slide--current {
    opacity: 1;
    transform: translateZ(0)
}

.fancybox-fx-fade.fancybox-slide--next,
.fancybox-fx-fade.fancybox-slide--previous {
    opacity: 0;
    transition-timing-function: cubic-bezier(.19, 1, .22, 1)
}

.fancybox-fx-fade.fancybox-slide--current {
    opacity: 1
}

.fancybox-fx-zoom-in-out.fancybox-slide--previous {
    opacity: 0;
    transform: scale3d(1.5, 1.5, 1.5)
}

.fancybox-fx-zoom-in-out.fancybox-slide--next {
    opacity: 0;
    transform: scale3d(.5, .5, .5)
}

.fancybox-fx-zoom-in-out.fancybox-slide--current {
    opacity: 1;
    transform: scaleX(1)
}

.fancybox-fx-rotate.fancybox-slide--previous {
    opacity: 0;
    transform: rotate(-1turn)
}

.fancybox-fx-rotate.fancybox-slide--next {
    opacity: 0;
    transform: rotate(1turn)
}

.fancybox-fx-rotate.fancybox-slide--current {
    opacity: 1;
    transform: rotate(0)
}

.fancybox-fx-circular.fancybox-slide--previous {
    opacity: 0;
    transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0)
}

.fancybox-fx-circular.fancybox-slide--next {
    opacity: 0;
    transform: scale3d(0, 0, 0) translate3d(100%, 0, 0)
}

.fancybox-fx-circular.fancybox-slide--current {
    opacity: 1;
    transform: scaleX(1) translateZ(0)
}

.fancybox-fx-tube.fancybox-slide--previous {
    transform: translate3d(-100%, 0, 0) scale(.1) skew(-10deg)
}

.fancybox-fx-tube.fancybox-slide--next {
    transform: translate3d(100%, 0, 0) scale(.1) skew(10deg)
}

.fancybox-fx-tube.fancybox-slide--current {
    transform: translateZ(0) scale(1)
}

@media (max-height:576px) {
    .fancybox-slide {
        padding-left: 6px;
        padding-right: 6px
    }

    .fancybox-slide--image {
        padding: 6px 0
    }

    .fancybox-close-small {
        right: -6px
    }

    .fancybox-slide--image .fancybox-close-small {
        background: #4e4e4e;
        color: #f2f4f6;
        height: 36px;
        opacity: 1;
        padding: 6px;
        right: 0;
        top: 0;
        width: 36px
    }

    .fancybox-caption {
        padding-left: 12px;
        padding-right: 12px
    }

    @supports (padding:max(0px)) {
        .fancybox-caption {
            padding-left: max(12px, env(safe-area-inset-left));
            padding-right: max(12px, env(safe-area-inset-right))
        }
    }
}

.fancybox-share {
    background: #f4f4f4;
    border-radius: 3px;
    max-width: 90%;
    padding: 30px;
    text-align: center
}

.fancybox-share h1 {
    color: #222;
    font-size: 35px;
    font-weight: 700;
    margin: 0 0 20px
}

.fancybox-share p {
    margin: 0;
    padding: 0
}

.fancybox-share__button {
    border: 0;
    border-radius: 3px;
    display: inline-block;
    font-size: 14px;
    font-weight: 700;
    line-height: 40px;
    margin: 0 5px 10px;
    min-width: 130px;
    padding: 0 15px;
    text-decoration: none;
    transition: all .2s;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    white-space: nowrap
}

.fancybox-share__button:link,
.fancybox-share__button:visited {
    color: #fff
}

.fancybox-share__button:hover {
    text-decoration: none
}

.fancybox-share__button--fb {
    background: #3b5998
}

.fancybox-share__button--fb:hover {
    background: #344e86
}

.fancybox-share__button--pt {
    background: #bd081d
}

.fancybox-share__button--pt:hover {
    background: #aa0719
}

.fancybox-share__button--tw {
    background: #1da1f2
}

.fancybox-share__button--tw:hover {
    background: #0d95e8
}

.fancybox-share__button svg {
    height: 25px;
    margin-right: 7px;
    position: relative;
    top: -1px;
    vertical-align: middle;
    width: 25px
}

.fancybox-share__button svg path {
    fill: #fff
}

.fancybox-share__input {
    background: 0 0;
    border: 0;
    border-bottom: 1px solid #d7d7d7;
    border-radius: 0;
    color: #5d5b5b;
    font-size: 14px;
    margin: 10px 0 0;
    outline: 0;
    padding: 10px 15px;
    width: 100%
}

.fancybox-thumbs {
    background: #ddd;
    bottom: 0;
    display: none;
    margin: 0;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    padding: 2px 2px 4px;
    position: absolute;
    right: 0;
    -webkit-tap-highlight-color: transparent;
    top: 0;
    width: 212px;
    z-index: 99995
}

.fancybox-thumbs-x {
    overflow-x: auto;
    overflow-y: hidden
}

.fancybox-show-thumbs .fancybox-thumbs {
    display: block
}

.fancybox-show-thumbs .fancybox-inner {
    right: 212px
}

.fancybox-thumbs__list {
    font-size: 0;
    height: 100%;
    list-style: none;
    margin: 0;
    overflow-x: hidden;
    overflow-y: auto;
    padding: 0;
    position: absolute;
    position: relative;
    white-space: nowrap;
    width: 100%
}

.fancybox-thumbs-x .fancybox-thumbs__list {
    overflow: hidden
}

.fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar {
    width: 7px
}

.fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar-track {
    background: #fff;
    border-radius: 10px;
    box-shadow: inset 0 0 6px rgba(0, 0, 0, .3)
}

.fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar-thumb {
    background: #2a2a2a;
    border-radius: 10px
}

.fancybox-thumbs__list a {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    background-color: rgba(0, 0, 0, .1);
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: cover;
    cursor: pointer;
    float: left;
    height: 75px;
    margin: 2px;
    max-height: calc(100% - 8px);
    max-width: calc(50% - 4px);
    outline: 0;
    overflow: hidden;
    padding: 0;
    position: relative;
    -webkit-tap-highlight-color: transparent;
    width: 100px
}

.fancybox-thumbs__list a:before {
    border: 6px solid #ff5268;
    bottom: 0;
    content: "";
    left: 0;
    opacity: 0;
    position: absolute;
    right: 0;
    top: 0;
    transition: all .2s cubic-bezier(.25, .46, .45, .94);
    z-index: 99991
}

.fancybox-thumbs__list a:focus:before {
    opacity: .5
}

.fancybox-thumbs__list a.fancybox-thumbs-active:before {
    opacity: 1
}

@media (max-width:576px) {
    .fancybox-thumbs {
        width: 110px
    }

    .fancybox-show-thumbs .fancybox-inner {
        right: 110px
    }

    .fancybox-thumbs__list a {
        max-width: calc(100% - 10px)
    }
}

.owl-carousel,
.owl-carousel .owl-item {
    -webkit-tap-highlight-color: transparent;
    position: relative
}

.owl-carousel {
    display: none;
    width: 100%;
    z-index: 1
}

.owl-carousel .owl-stage {
    position: relative;
    -ms-touch-action: pan-Y;
    touch-action: manipulation;
    -moz-backface-visibility: hidden
}

.owl-carousel .owl-stage:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0
}

.owl-carousel .owl-stage-outer {
    position: relative;
    overflow: hidden;
    -webkit-transform: translate3d(0, 0, 0)
}

.owl-carousel .owl-item {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0)
}

.owl-carousel .owl-item {
    min-height: 1px;
    float: left;
    -webkit-backface-visibility: hidden;
    -webkit-touch-callout: none
}

.owl-carousel .owl-dots.disabled,
.owl-carousel .owl-nav.disabled {
    display: none
}

.no-js .owl-carousel,
.owl-carousel.owl-loaded {
    display: block
}

.owl-carousel .owl-dot,
.owl-carousel .owl-nav .owl-next,
.owl-carousel .owl-nav .owl-prev {
    cursor: pointer;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.owl-carousel .owl-nav button.owl-next,
.owl-carousel .owl-nav button.owl-prev,
.owl-carousel button.owl-dot {
    background: 0 0;
    color: inherit;
    border: none;
    padding: 0 !important;
    font: inherit
}

.owl-carousel.owl-loading {
    opacity: 0;
    display: block
}

.owl-carousel.owl-hidden {
    opacity: 0
}

.owl-carousel.owl-refresh .owl-item {
    visibility: hidden
}

.owl-carousel.owl-drag .owl-item {
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.owl-carousel.owl-grab {
    cursor: move;
    cursor: grab
}

.owl-carousel.owl-rtl {
    direction: rtl
}

.owl-carousel.owl-rtl .owl-item {
    float: right
}

.owl-carousel .animated {
    animation-duration: 1s;
    animation-fill-mode: both
}

.owl-carousel .owl-animated-in {
    z-index: 0
}

.owl-carousel .owl-animated-out {
    z-index: 1
}

.owl-height {
    transition: height .5s ease-in-out
}

.owl-carousel .owl-item .owl-lazy {
    opacity: 0;
    transition: opacity .4s ease
}

.owl-carousel .owl-item .owl-lazy:not([src]),
.owl-carousel .owl-item .owl-lazy[src^=""] {
    max-height: 0
}

.owl-carousel .owl-item img.owl-lazy {
    transform-style: preserve-3d
}

.owl-carousel .owl-video-wrapper {
    position: relative;
    height: 100%;
    background: #000
}

.owl-carousel .owl-video-play-icon {
    position: absolute;
    height: 80px;
    width: 80px;
    left: 50%;
    top: 50%;
    margin-left: -40px;
    margin-top: -40px;
    background: var(--wpr-bg-52a21c3c-04d0-4735-a6f0-0f2359028a10) no-repeat;
    cursor: pointer;
    z-index: 1;
    -webkit-backface-visibility: hidden;
    transition: transform .1s ease
}

.owl-carousel .owl-video-play-icon:hover {
    -ms-transform: scale(1.3, 1.3);
    transform: scale(1.3, 1.3)
}

.owl-carousel .owl-video-playing .owl-video-play-icon,
.owl-carousel .owl-video-playing .owl-video-tn {
    display: none
}

.owl-carousel .owl-video-tn {
    opacity: 0;
    height: 100%;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: contain;
    transition: opacity .4s ease
}

.owl-carousel .owl-video-frame {
    position: relative;
    z-index: 1;
    height: 100%;
    width: 100%
}

.owl-theme .owl-dots,
.owl-theme .owl-nav {
    text-align: center;
    -webkit-tap-highlight-color: transparent
}

.owl-theme .owl-nav {
    margin-top: 10px
}

.owl-theme .owl-nav [class*=owl-] {
    color: #fff;
    font-size: 14px;
    margin: 5px;
    padding: 4px 7px;
    background: #d6d6d6;
    display: inline-block;
    cursor: pointer;
    border-radius: 3px
}

.owl-theme .owl-nav [class*=owl-]:hover {
    background: #869791;
    color: #fff;
    text-decoration: none
}

.owl-theme .owl-nav .disabled {
    opacity: .5;
    cursor: default
}

.owl-theme .owl-nav.disabled+.owl-dots {
    margin-top: 10px
}

.owl-theme .owl-dots .owl-dot {
    display: inline-block;
    zoom: 1
}

.owl-theme .owl-dots .owl-dot span {
    width: 10px;
    height: 10px;
    margin: 5px 7px;
    background: #d6d6d6;
    display: block;
    -webkit-backface-visibility: visible;
    transition: opacity .2s ease;
    border-radius: 30px
}

.owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span {
    background: #869791
}

.bootstrap-select>select.bs-select-hidden,
select.bs-select-hidden,
select.selectpicker {
    display: none !important
}

.bootstrap-select {
    width: 220px;
    vertical-align: middle
}

.bootstrap-select>.dropdown-toggle {
    position: relative;
    width: 100%;
    text-align: right;
    white-space: nowrap;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.bootstrap-select>.dropdown-toggle:after {
    margin-top: -1px
}

.bootstrap-select>.dropdown-toggle.bs-placeholder,
.bootstrap-select>.dropdown-toggle.bs-placeholder:active,
.bootstrap-select>.dropdown-toggle.bs-placeholder:focus,
.bootstrap-select>.dropdown-toggle.bs-placeholder:hover {
    color: #999
}

.bootstrap-select>select {
    position: absolute !important;
    bottom: 0;
    left: 50%;
    display: block !important;
    width: .5px !important;
    height: 100% !important;
    padding: 0 !important;
    opacity: 0 !important;
    border: none;
    z-index: 0 !important
}

.bootstrap-select>select.mobile-device {
    top: 0;
    left: 0;
    display: block !important;
    width: 100% !important;
    z-index: 2 !important
}

.error .bootstrap-select .dropdown-toggle {
    border-color: #b94a48
}

.bootstrap-select.fit-width {
    width: auto !important
}

.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 220px
}

.bootstrap-select .dropdown-toggle:focus,
.bootstrap-select>select.mobile-device:focus+.dropdown-toggle {
    outline: #333333 dotted thin !important;
    outline: -webkit-focus-ring-color auto 5px !important;
    outline-offset: -2px
}

.bootstrap-select.form-control {
    margin-bottom: 0;
    padding: 0;
    border: none
}

:not(.input-group)>.bootstrap-select.form-control:not([class*=col-]) {
    width: 100%
}

.bootstrap-select.form-control.input-group-btn {
    float: none;
    z-index: auto
}

.bootstrap-select:not(.input-group-btn),
.bootstrap-select[class*=col-] {
    float: none;
    display: inline-block;
    margin-left: 0
}

.bootstrap-select.dropdown-menu-right,
.bootstrap-select[class*=col-].dropdown-menu-right,
.row .bootstrap-select[class*=col-].dropdown-menu-right {
    float: right
}

.form-group .bootstrap-select {
    margin-bottom: 0
}

.bootstrap-select.disabled,
.bootstrap-select>.disabled {
    cursor: not-allowed
}

.bootstrap-select.disabled:focus,
.bootstrap-select>.disabled:focus {
    outline: 0 !important
}

.bootstrap-select.bs-container {
    position: absolute;
    top: 0;
    left: 0;
    height: 0 !important;
    padding: 0 !important
}

.bootstrap-select.bs-container .dropdown-menu {
    z-index: 1060
}

.bootstrap-select .dropdown-toggle .filter-option {
    position: static;
    top: 0;
    left: 0;
    float: left;
    height: 100%;
    width: 100%;
    text-align: left;
    overflow: hidden;
    -webkit-box-flex: 0;
    -webkit-flex: 0 1 auto;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto
}

.bs3.bootstrap-select .dropdown-toggle .filter-option {
    padding-right: inherit
}

.input-group .bs3-has-addon.bootstrap-select .dropdown-toggle .filter-option {
    position: absolute;
    padding-top: inherit;
    padding-bottom: inherit;
    padding-left: inherit;
    float: none
}

.input-group .bs3-has-addon.bootstrap-select .dropdown-toggle .filter-option .filter-option-inner {
    padding-right: inherit
}

.bootstrap-select .dropdown-toggle .filter-option-inner-inner {
    overflow: hidden
}

.bootstrap-select .dropdown-toggle .filter-expand {
    width: 0 !important;
    float: left;
    opacity: 0 !important;
    overflow: hidden
}

.bootstrap-select .dropdown-toggle .caret {
    position: absolute;
    top: 50%;
    right: 12px;
    margin-top: -2px;
    vertical-align: middle
}

.input-group .bootstrap-select.form-control .dropdown-toggle {
    border-radius: inherit
}

.bootstrap-select[class*=col-] .dropdown-toggle {
    width: 100%
}

.bootstrap-select .dropdown-menu {
    min-width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.bootstrap-select .dropdown-menu>.inner:focus {
    outline: 0 !important
}

.bootstrap-select .dropdown-menu.inner {
    position: static;
    float: none;
    border: 0;
    padding: 0;
    margin: 0;
    border-radius: 0;
    -webkit-box-shadow: none;
    box-shadow: none
}

.bootstrap-select .dropdown-menu li {
    position: relative
}

.bootstrap-select .dropdown-menu li.active small {
    color: rgba(255, 255, 255, .5) !important
}

.bootstrap-select .dropdown-menu li.disabled a {
    cursor: not-allowed
}

.bootstrap-select .dropdown-menu li a {
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.bootstrap-select .dropdown-menu li a.opt {
    position: relative;
    padding-left: 2.25em
}

.bootstrap-select .dropdown-menu li a span.check-mark {
    display: none
}

.bootstrap-select .dropdown-menu li a span.text {
    display: inline-block
}

.bootstrap-select .dropdown-menu li small {
    padding-left: .5em
}

.bootstrap-select .dropdown-menu .notify {
    position: absolute;
    bottom: 5px;
    width: 96%;
    margin: 0 2%;
    min-height: 26px;
    padding: 3px 5px;
    background: #f5f5f5;
    border: 1px solid #e3e3e3;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    pointer-events: none;
    opacity: .9;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.bootstrap-select .no-results {
    padding: 3px;
    background: #f5f5f5;
    margin: 0 5px;
    white-space: nowrap
}

.bootstrap-select.fit-width .dropdown-toggle .filter-option {
    position: static;
    display: inline;
    padding: 0;
    width: auto
}

.bootstrap-select.fit-width .dropdown-toggle .filter-option-inner,
.bootstrap-select.fit-width .dropdown-toggle .filter-option-inner-inner {
    display: inline
}

.bootstrap-select.fit-width .dropdown-toggle .bs-caret:before {
    content: '\00a0'
}

.bootstrap-select.fit-width .dropdown-toggle .caret {
    position: static;
    top: auto;
    margin-top: -1px
}

.bootstrap-select.show-tick .dropdown-menu .selected span.check-mark {
    position: absolute;
    display: inline-block;
    right: 15px;
    top: 5px
}

.bootstrap-select.show-tick .dropdown-menu li a span.text {
    margin-right: 34px
}

.bootstrap-select .bs-ok-default:after {
    content: '';
    display: block;
    width: .5em;
    height: 1em;
    border-style: solid;
    border-width: 0 .26em .26em 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg)
}

.bs-actionsbox,
.bs-donebutton,
.bs-searchbox {
    padding: 4px 8px
}

.bs-actionsbox {
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.bs-actionsbox .btn-group button {
    width: 50%
}

.bs-donebutton {
    float: left;
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.bs-donebutton .btn-group button {
    width: 100%
}

.bs-searchbox+.bs-actionsbox {
    padding: 0 8px 4px
}

.bs-searchbox .form-control {
    margin-bottom: 0;
    width: 100%;
    float: none
}

#search-wrap {
    display: none
}

.collection-category-second-title .covid-sign-up-head {
    padding-top: 35px
}

.guide-main-content-new {
    padding-top: 55px
}

.contact-tab-fixed_new .collection-category-second-title {
    position: absolute;
    top: -78px
}

.franchisee-min-ht-slider,
.homepage-min-ht-slider {
    min-height: 80vh
}

.main-gallery-image-cls {
    min-height: 395px
}

#wrapper-navbar .skip-link {
    opacity: 0
}

@media only screen and (max-width:1023px) {

    .franchisee-min-ht-slider,
    .homepage-min-ht-slider {
        min-height: 70vh;
        background-size: 25px
    }

    .main-gallery-image-cls {
        min-height: 200px
    }
}

@media (min-width:320px) and (max-width:479px) {
    .iti-mobile .iti--container {
        position: absolute !important
    }
}

.footer-nav-link .footer-nav-link a:focus {
    color: #C85514
}

.footer-nav-link .footer-nav-link a:hover {
    color: #C85514
}

.footer-nav-link .footer-nav-link-menu-title {
    color: #C85514
}

.footer-nav-link .navbar-brand:hover,
.navbar-light .navbar-brand:focus {
    color: #C85514
}

.footer-nav-link li {
    display: inline-block;
    font-weight: 300;
    font-size: 16px;
    padding: 0 20px;
    margin: 0 0 10px
}

.footer-nav-link .footer-nav-link-menu-title {
    display: none
}

.footer-nav-link {
    text-align: center;
    margin: 0 40px 30px
}

.navbar-toggler>.close {
    display: inline
}

.navbar-toggler.collapsed>.close,
.navbar-toggler:not(.collapsed)>.navbar-toggler-icon {
    display: none;
    color: #fff
}

.footer-nav-link ul {
    list-style: none;
    padding: 0;
    margin: 0
}

.footer-collapes {
    justify-content: center
}

button.loading {
    background-image: var(--wpr-bg-4d9a24cd-dafe-4f5e-9d84-6c1cce33f407);
    background-repeat: no-repeat;
    background-size: 20px 20px;
    padding-left: 30px;
    background-position: left
}

button.loading {
    background-image: var(--wpr-bg-880fea59-0ca6-41ce-a751-374bf42579fa);
    background-repeat: no-repeat;
    background-size: 20px 20px;
    padding-left: 30px
}

.offer-section-row {
    background-color: #d5b58f;
    text-align: center
}

.offer-section-main p {
    font-size: 14px;
    margin-bottom: 0;
    padding: 8px 0
}

.offer-section-main a {
    color: #000;
    text-decoration: underline;
    text-transform: uppercase
}

.offer-section-col {
    padding-right: 0;
    padding-left: 0
}

.header-bg {
    padding: 5px 20px;
    background-color: #fff
}

.navbar-dark .navbar-nav .active>.nav-link,
.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .show>.nav-link {
    color: #C85514 !important
}

.navbar-dark .navbar-nav .nav-link {
    color: #C85514 !important;
    font-size: 14px;
    padding: 0 20px 0 0
}

.custom-logo-link img {
    width: 182px
}

.cta-header-btn {
    margin-left: 16px
}

.cta-header-btn a {
    color: #000;
    font-size: 14px
}

.cta-action {
    margin-left: 20px;
    font-size: 20px;
    position: relative;
    bottom: 3px
}

.cta-action a {
    color: #fff;
    background: #C85514;
    padding: 10px 12px;
    line-height: 0;
    font-size: 14px
}

.footer-wrapper {
    background-color: #000;
    padding: 50px 0 !important;
    color: #fff
}

.footer-title {
    font-size: 18px;
    position: relative;
    padding-bottom: 12px
}

.footer-title:after {
    content: "";
    position: absolute;
    width: 30px;
    background: #C85514;
    bottom: 0;
    height: 3px;
    left: 0
}

.footer-first-title .textwidget {
    margin-top: 18px;
    font-size: 14px;
    color: #ccc
}

.nav-tabs .nav-link.active {
    color: #000;
    font-size: 18px;
    font-weight: 700;
    cursor: pointer;
    margin-bottom: -5px
}

.nav-tabs .nav-link:focus,
.nav-tabs .nav-link:hover {
    cursor: pointer
}

.footer-sidebar p {
    color: #fff
}

#custom_html-2 {
    padding: 0
}

.widget-top-title {
    font-size: 28px;
    font-weight: 700
}

.footer-top-title p {
    font-size: 28px;
    font-weight: 700
}

.footer-top-title {
    text-align: center
}

.footer-top-title .custom-html-widget a {
    display: inline-block;
    color: #fff;
    background-color: #C85514;
    padding: 15px 30px;
    font-size: 18px;
    font-weight: 500;
    line-height: 18px
}

.footer-top-title .custom-html-widget a span {
    display: block;
    font-size: 14px;
    font-weight: 400;
    line-height: 12px;
    margin: 5px 0 0
}

.common-link-button {
    background-color: #C85514;
    color: #fff;
    display: inline-block;
    padding: 15px 30px;
    -webkit-transform: perspective(1px) translateZ(0);
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    -webkit-transition-property: color, background-color;
    transition-property: color, background-color
}

.common-link-button:hover {
    background-color: #062639;
    color: #fff;
    text-decoration: none;
    transition: .3s
}

.btn-link.focus,
.btn-link:focus {
    text-decoration: underline;
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-link:hover {
    color: #2600e6;
    text-decoration: underline
}

.widget-top-title {
    font-size: 28px;
    font-weight: 500;
    margin-bottom: 30px
}

.footer-top-title p {
    font-size: 28px;
    font-weight: 500;
    margin-bottom: 30px;
    color: #fff
}

.footer-top {
    padding-bottom: 40px
}

.footer-sidebar {
    padding-bottom: 24px
}

.footer-top-section {
    border-bottom: 1px solid rgba(255, 255, 255, .2)
}

.footer-wrapper {
    background-color: #000;
    padding: 50px 0 0 !important;
    color: #fff
}

.footer-bottom {
    padding: 20px 0
}

.footer-bottom a {
    color: #ccc
}

.footer-bottom a:hover {
    color: #fff
}

.footer-bottom p {
    font-size: 12px;
    color: #ccc;
    margin-bottom: 0
}

.site-footer {
    display: flex;
    align-items: center
}

.site-info {
    flex: 1
}

.social-icon {
    flex: 1;
    text-align: right
}

.owl-carousel .owl-item img {
    display: block;
    width: 100%
}

.owl-carousel.owl-slider-blog-gallery .owl-item img,
.owl-carousel.owl-slider-blog-project .owl-item img {
    display: block;
    width: 100%;
    height: 188px
}

.checked {
    color: #e3cf7a
}

.owl-collecttion-listing .owl-nav .owl-prev {
    left: -5%;
    transition: .4s;
    -webkit-transition: .4s;
    -moz-transition: .4s;
    -o-transition: .4s;
    -ms-transition: .4s
}

.owl-collecttion-listing .owl-nav .owl-next {
    right: -5%;
    transition: .4s;
    -webkit-transition: .4s;
    -moz-transition: .4s;
    -o-transition: .4s;
    -ms-transition: .4s
}

.owl-collecttion-listing .item {
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 20px;
    background-position: 10% center;
    background: linear-gradient(180deg, transparent 30%, #fff 0)
}

#owl-collection-slider .owl-nav.disabled+.owl-dots {
    margin-top: -25px;
    z-index: 999999999999999999;
    position: absolute;
    width: 100%
}

#owl-collection-slider .owl-dots .owl-dot span {
    background: 0 0;
    border: 2px solid #fff
}

#owl-collection-slider .owl-dots .owl-dot.active span,
#owl-collection-slider .owl-dots .owl-dot:hover span {
    background: #fff;
    border: 2px solid #fff
}

.owl-collecttion-listing .owl-stage {
    left: -150px
}

.owl-collecttion-listing .owl-nav .owl-next,
.owl-collecttion-listing .owl-nav .owl-prev {
    color: #fff;
    font-size: 18px;
    position: absolute;
    top: 23%;
    text-align: center;
    line-height: 39px;
    border: 1px solid #fff;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid #000 !important
}

.owl-collecttion-listing .owl-nav .owl-prev {
    left: -55px;
    transition: .4s;
    -webkit-transition: .4s;
    -moz-transition: .4s;
    -o-transition: .4s;
    -ms-transition: .4s
}

.owl-collecttion-listing .owl-nav .owl-next {
    right: -55px;
    transition: .4s;
    -webkit-transition: .4s;
    -moz-transition: .4s;
    -o-transition: .4s;
    -ms-transition: .4s
}

.owl-collecttion-listing .owl-nav .owl-next i,
.owl-collecttion-listing .owl-nav .owl-prev i {
    font-size: 34px
}

.owl-collecttion-listing .owl-nav [class*=owl-]:hover {
    background: initial;
    color: #000;
    text-decoration: none
}

.blog-widget-area .widget:first-child {
    padding: 0 0 12px
}

.blog-widget-area .widget {
    padding: 35px 0;
    border-bottom: 1px solid rgba(0, 0, 0, .2)
}

.search-form {
    align-items: center;
    padding: 20px 0
}

.slider-blog-thumb-section {
    position: relative
}

.blog-slider-info {
    position: absolute;
    right: 0;
    top: 25%;
    color: #fff;
    background-color: rgba(24, 155, 166, .9);
    padding: 15px 20px;
    display: flex;
    align-items: center;
    cursor: pointer
}

.slider-blog-section {
    -webkit-transition: .3s ease-in-out;
    transition: all .3s ease-in-out;
    -webkit-transition-property: opacity;
    transition-property: opacity
}

.hero-slider {
    position: relative
}

.hero-slider .owl-item.active h1 {
    -animation: 1s 0.3s fadeInUp both
}

.hero-slider .owl-item.active p {
    -webkit-animation: 1s .3s both fadeInUp;
    animation: 1s .3s both fadeInUp
}

.hero-slider .owl-nav button.owl-prev {
    background-color: #ff3547;
    position: absolute;
    left: 0;
    top: 50%;
    color: #fff;
    font-size: 30px;
    margin: -40px 0 0;
    border-radius: 0;
    height: 50px;
    width: 50px
}

.hero-slider .owl-nav button.owl-next {
    background-color: #ff3547;
    position: absolute;
    right: 0;
    top: 50%;
    color: #fff;
    font-size: 30px;
    margin: -40px 0 0;
    border-radius: 0;
    height: 50px;
    width: 50px
}

.hero-slider .owl-nav {
    margin-top: 0
}

.hero-slider .owl-dots {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 20px
}

.hero-slider .owl-dots .owl-dot span {
    width: 14px;
    height: 14px
}

.hero-slider .owl-dots .owl-dot span {
    background-color: transparent;
    border: 2px solid #fff
}

.hero-slider .owl-dots .owl-dot.active span,
.hero-slider .owl-theme .owl-dots .owl-dot:hover span {
    background: #fff
}

.contact-us-location-listing {
    text-align: center;
    background-color: #fff
}

.contact-tab-fixed {
    position: fixed;
    top: 78px;
    width: calc(100% - 60px);
    background: #fff;
    z-index: 999;
    display: block;
    height: 68px;
    display: flex;
    align-items: center;
    justify-content: center;
    left: 30px;
    border-bottom: 1px solid #f2f2f2;
    -webkit-transition: .4s ease-in-out;
    -moz-transition: .4s ease-in-out;
    -o-transition: .4s ease-in-out;
    -ms-transition: .4s ease-in-out
}

.guide-main-content {
    margin-top: 0
}

.bootstrap-select>.dropdown-toggle.bs-placeholder:active,
.bootstrap-select>.dropdown-toggle.bs-placeholder:focus,
.bootstrap-select>.dropdown-toggle.bs-placeholder:hover {
    background: #f6f5f5;
    font-size: 14px;
    padding: 10px 15px;
    font-family: Raleway, sans-serif;
    margin: 0 0 10px;
    height: auto;
    border-radius: 0;
    color: #222 !important;
    border: 1px solid #ced4da
}

.bootstrap-select>.dropdown-toggle {
    background: #f6f5f5;
    font-size: 14px;
    padding: 10px 15px;
    font-family: Raleway, sans-serif;
    margin: 0 0 10px;
    height: auto;
    border-radius: 0;
    color: #222 !important;
    border: 1px solid #ced4da
}

.leadform-close-btn.close {
    color: #fff;
    opacity: 1;
    font-weight: 300;
    font-size: 24px;
    background-color: #189aa6;
    padding: 0 6px;
    border-radius: 30px;
    top: -10px;
    position: absolute;
    right: -10px;
    z-index: 999;
    cursor: pointer;
    width: 25px;
    height: 25px
}

button.leadform-close-btn.close:hover {
    color: #fff;
    opacity: 1 !important;
    background-color: #d5b58f
}

.mobile-calling-sticky-wrap {
    display: none
}

.owl-career-location .owl-nav .owl-next,
.owl-career-location .owl-nav .owl-prev {
    color: #fff;
    font-size: 18px;
    position: absolute;
    top: 45%;
    text-align: center;
    line-height: 39px;
    border: 1px solid #fff;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid #000 !important
}

.owl-career-location .owl-nav .owl-prev {
    left: -55px;
    -webkit-transition: .4s;
    -moz-transition: .4s;
    -o-transition: .4s;
    -ms-transition: .4s
}

.owl-career-location .owl-nav .owl-next {
    right: -55px;
    -webkit-transition: .4s;
    -moz-transition: .4s;
    -o-transition: .4s;
    -ms-transition: .4s
}

.owl-career-location .owl-nav .owl-next i,
.owl-career-location .owl-nav .owl-prev i {
    font-size: 34px
}

.owl-career-location .owl-nav [class*=owl-]:hover {
    background: initial;
    color: #000;
    text-decoration: none
}

.owl-career-location .owl-stage {
    left: -150px
}

.video-img-container {
    position: relative;
    width: 100%;
    max-width: 400px
}

.video-img-container img {
    width: 100%;
    height: auto
}

.video-img-container .video-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: #C85514;
    color: #fff;
    font-size: 16px;
    height: 40px;
    width: 40px;
    border: none;
    cursor: pointer;
    border-radius: 100%;
    text-align: center;
    display: inline-flex;
    text-align: center;
    align-items: center;
    justify-content: center
}

.video-img-container .video-btn:hover {
    background-color: #000
}

.video-testimonial-meta {
    margin-top: 20px;
    margin-bottom: 20px
}

.video-testimonial-meta .vdo-testimonial-title {
    font-size: 16px;
    font-weight: 600;
    color: #000
}

.video-testimonial-meta h3 {
    font-size: 14px;
    font-weight: 500;
    color: #666
}

.owl-whatsapp-video .owl-nav .owl-next,
.owl-whatsapp-video .owl-nav .owl-prev {
    color: #fff;
    font-size: 18px;
    position: absolute;
    top: 23%;
    text-align: center;
    line-height: 39px;
    border: 1px solid #fff;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid #000 !important
}

.owl-whatsapp-video .owl-nav .owl-prev {
    left: -5%;
    -webkit-transition: .4s;
    -moz-transition: .4s;
    -o-transition: .4s;
    -ms-transition: .4s
}

.owl-whatsapp-video .owl-nav .owl-next {
    right: -5%;
    -webkit-transition: .4s;
    -moz-transition: .4s;
    -o-transition: .4s;
    -ms-transition: .4s
}

.owl-whatsapp-video .owl-nav .owl-next i,
.owl-whatsapp-video .owl-nav .owl-prev i {
    font-size: 34px
}

.owl-whatsapp-video .owl-nav [class*=owl-]:hover {
    background: initial;
    color: #000;
    text-decoration: none
}

.guide-single-content img {
    margin-bottom: 15px;
    max-width: 100%;
    width: 100%
}

.home-slider {
    position: relative
}

.home-slider .owl-item.active h1 {
    -animation: 1s 0.3s fadeInUp both
}

.home-slider .owl-item.active p {
    -webkit-animation: 1s .3s both fadeInUp;
    animation: 1s .3s both fadeInUp
}

.home-slider .owl-nav button.owl-prev {
    background-color: rgba(0, 0, 0, .5);
    position: absolute;
    left: 0;
    top: 50%;
    color: #fff;
    font-size: 30px;
    margin: -40px 0 0;
    border-radius: 0;
    height: 50px;
    width: 50px;
    opacity: 1
}

.home-slider .owl-nav button.owl-prev:hover {
    background: #000
}

.home-slider .owl-nav button.owl-next {
    background-color: rgba(0, 0, 0, .5);
    position: absolute;
    right: 0;
    top: 50%;
    color: #fff;
    font-size: 30px;
    margin: -40px 0 0;
    border-radius: 0;
    height: 50px;
    width: 50px;
    opacity: 1
}

.home-slider .owl-nav button.owl-next:hover {
    background: #000
}

.home-slider .owl-theme .owl-nav:hover {
    background-color: rgba(0, 0, 0, .5)
}

.home-slider .owl-theme .owl-nav:hover {
    background: #000;
    color: #fff;
    text-decoration: none
}

.home-slider .owl-nav {
    margin-top: 0
}

.home-slider .owl-theme .owl-nav .disabled {
    opacity: 1
}

.home-slider .owl-dots {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 20px;
    text-align: center;
    right: 5%
}

.home-slider .owl-dots .owl-dot span {
    width: 10px;
    height: 10px
}

.home-slider .owl-dots .owl-dot span {
    background-color: transparent;
    border: 2px solid #fff
}

.home-slider .owl-dots .owl-dot:hover span {
    background-color: #fff;
    border: 2px solid #fff
}

.home-slider .owl-dots .owl-dot.active span,
.home-slider .owl-theme .owl-dots .owl-dot:hover span {
    background: #fff
}

.sldier-cta-btn a {
    background-color: #C85514;
    color: #fff;
    display: inline-grid;
    padding: 15px 20px;
    -webkit-transform: perspective(1px) translateZ(0);
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    -webkit-transition-property: color, background-color;
    transition-property: color, background-color;
    font-size: 18px;
    font-weight: 500;
    text-align: center
}

.sldier-cta-btn a:hover {
    background-color: #062639;
    color: #fff;
    -webkit-transform: perspective(1px) translateZ(0);
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    -webkit-transition-property: color, background-color;
    transition-property: color, background-color;
    font-weight: 500;
    text-align: center
}

.sldier-cta-btn {
    margin-top: 20px
}

.sldier-cta-btn a span {
    display: inline-block;
    font-size: 16px;
    font-weight: 400
}

.owl-trending-collection-listing .owl-stage {
    left: -150px
}

.nav-bar-mobile-div {
    display: none
}

button.navbar-toggler.second-button:focus {
    outline: 0;
    border: 0;
    text-decoration: none
}

.animated-icon2 {
    width: 25px;
    height: 20px;
    position: relative;
    margin: 0;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transition: .5s ease-in-out;
    -moz-transition: .5s ease-in-out;
    -o-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
    cursor: pointer
}

.animated-icon2 span {
    display: block;
    position: absolute;
    height: 3px;
    width: 100%;
    border-radius: 9px;
    opacity: 1;
    left: 0;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transition: .25s ease-in-out;
    -moz-transition: .25s ease-in-out;
    -o-transition: .25s ease-in-out;
    transition: .25s ease-in-out
}

.animated-icon2 span {
    background: #222
}

.animated-icon2 span:first-child {
    top: 0
}

.animated-icon2 span:nth-child(2),
.animated-icon2 span:nth-child(3) {
    top: 8px
}

.animated-icon2 span:nth-child(4) {
    top: 17px
}

.animated-icon2.open span:first-child {
    top: 11px;
    width: 0%;
    left: 50%
}

.animated-icon2.open span:nth-child(2) {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg)
}

.animated-icon2.open span:nth-child(3) {
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg)
}

.animated-icon2.open span:nth-child(4) {
    top: 11px;
    width: 0%;
    left: 50%
}

.mobile-footer-navigation {
    display: none;
    margin: 0 0 30px
}

#accordion [data-toggle=collapse] .fa:before {
    content: "\f068"
}

#accordion [data-toggle=collapse].collapsed .fa:before {
    content: "\f067"
}

.card.mb-foot-nav {
    border-radius: 0;
    background: 0 0;
    padding: 0;
    margin: 0;
    border-top: 1px solid #fff;
    border-bottom: 1px solid #fff
}

.card-header.mb-foot-nav-head {
    padding: 0
}

.btn.btn-link.foot-nav-btn {
    margin: 0;
    padding: 10px 0 7px;
    color: #fff;
    font-weight: 300;
    width: 100%;
    text-align: left
}

i.fa.mb-foot-icons {
    text-align: right;
    justify-content: right;
    display: inline-block;
    width: 80%
}

.btn.btn-link.foot-nav-btn:hover {
    text-decoration: none
}

.quick-links-content section div ul {
    padding: 0;
    list-style: none
}

.quick-links-content section div ul li {
    margin: 0 0 12px;
    padding: 0
}

.new-cta-color-arrow-btn {
    background-color: transparent;
    color: #C85514;
    text-decoration: underline
}

.new-cta-color-arrow-btn:hover {
    background-color: transparent;
    color: #062639
}

@media (min-width:1920px) {
    .custom-logo-link img {
        width: auto
    }

    .widget-top-title {
        font-size: 36px;
        margin-bottom: 50px
    }

    .footer-top-title p {
        font-size: 36px;
        margin-bottom: 50px
    }

    .footer-top-title .custom-html-widget a span {
        font-size: 22px;
        font-weight: 300
    }

    .footer-top-title .custom-html-widget a {
        font-size: 25px;
        padding: 18px 40px
    }

    .footer-title {
        font-size: 25px
    }

    .footer-title:after {
        width: 45px
    }

    .footer-first-title .textwidget {
        font-size: 18px;
        line-height: 24px
    }

    .footer-top {
        padding-bottom: 100px
    }

    .footer-bottom p {
        font-size: 16px
    }

    .footer-wrapper {
        padding: 60px 0 0 !important
    }

    .navbar-dark .navbar-nav .nav-link {
        font-size: 20px;
        padding: 0 15px
    }

    .header-bg {
        padding: 5px 20px
    }

    body {
        padding-top: 0
    }

    .offer-section-row {
        background-color: #d5b58f;
        text-align: center
    }

    .offer-section-main p {
        font-size: 24px;
        margin-bottom: 0;
        padding: 18px 0
    }

    .offer-section-main a {
        color: #000;
        text-decoration: underline;
        text-transform: uppercase
    }

    .offer-section-col {
        padding-right: 0;
        padding-left: 0
    }

    .cta-header-btn a {
        color: #000;
        font-size: 20px
    }

    .cta-action a {
        color: #fff;
        background: #C85514;
        padding: 10px 12px;
        line-height: 0;
        font-size: 20px;
        padding: 12px 18px
    }

    .common-link-button {
        font-size: 23px
    }

    .nav-tabs .nav-link.active {
        font-size: 24px
    }

    .sldier-cta-btn {
        margin-top: 30px;
        line-height: 1.2
    }
}

@media (min-width:1024px) and (max-width:1279px) {
    body {
        padding-top: 0
    }

    .header-bg {
        padding: 14px 23px;
        background-color: #fff
    }

    .offer-section-row {
        background-color: #d5b58f;
        text-align: center
    }

    .offer-section-main p {
        font-size: 22px;
        margin-bottom: 0;
        padding: 16px 0
    }

    .offer-section-main a {
        color: #000;
        text-decoration: underline;
        text-transform: uppercase
    }

    .offer-section-col {
        padding-right: 0;
        padding-left: 0
    }

    .custom-notify {
        font-size: 15px
    }

    .custom-logo-link {
        width: 182px
    }

    .cta-header-btn {
        margin-left: 10px
    }

    .cta-header-btn a {
        font-size: 12px
    }

    .cta-action {
        margin-left: 14px;
        font-size: 12px;
        bottom: 0
    }

    .cta-action a {
        padding: 10px 12px
    }

    .header-navabar-nav .header-navabar-nav-auto {
        font-size: 12px
    }

    .navbar-dark .navbar-nav .nav-link {
        padding: 0 7px;
        font-size: 13px
    }

    .common-link-button {
        font-size: 16px;
        padding: 12px 35px
    }

    .widget-top-title {
        font-size: 26px
    }

    .footer-top-title p {
        font-size: 24px
    }

    .footer-top {
        padding-bottom: 50px
    }

    .footer-top-title .custom-html-widget a {
        padding: 11px 30px
    }

    .footer-title {
        padding-bottom: 16px
    }

    .footer-bottom {
        padding: 30px 0 40px
    }

    .contact-tab-fixed_new .collection-category-second-title {
        position: absolute;
        top: -8px
    }

    .cta-action a {
        font-size: 12px
    }

    .contact-tab-fixed {
        top: 124px;
        height: 74px
    }

    .sldier-cta-btn {
        margin-top: 30px
    }

    .sldier-cta-btn a {
        font-size: 16px;
        line-height: 1.3;
        padding: 10px
    }

    .sldier-cta-btn a span {
        font-weight: 400;
        font-size: 14px
    }
}

@media (min-width:768px) and (max-width:1023px) {
    .header-navabar-nav ul li {
        padding-top: 10px
    }

    .home-slider {
        margin-top: -2px
    }

    .custom-notify {
        font-size: 15px
    }

    .container {
        max-width: 100% !important;
        padding: 0 5%
    }

    body {
        line-height: 20px;
        color: #222;
        font-size: 14px
    }

    p {
        line-height: 20px;
        color: #222;
        font-size: 14px
    }

    .offer-section-row {
        background-color: #d5b58f;
        text-align: center
    }

    .offer-section-main p {
        font-size: 18px;
        margin-bottom: 0;
        padding: 16px 0
    }

    .offer-section-main a {
        color: #000;
        text-decoration: underline;
        text-transform: uppercase
    }

    .offer-section-col {
        padding-right: 0;
        padding-left: 0
    }

    .widget-top-title {
        font-size: 36px;
        margin-bottom: 50px
    }

    .footer-top-title p {
        font-size: 30px;
        margin-bottom: 50px
    }

    .footer-wrapper {
        padding: 60px 0 0 !important
    }

    .footer-top-title {
        text-align: left
    }

    .footer-top-title .custom-html-widget a {
        text-align: center;
        padding: 11px 26px
    }

    .footer-top {
        padding-bottom: 0
    }

    .footer-title {
        font-size: 20px;
        text-transform: uppercase;
        font-weight: 600;
        padding-bottom: 20px
    }

    .footer-title:after {
        width: 35px
    }

    .footer-first-title .textwidget {
        margin-top: 40px;
        line-height: 24px
    }

    .footer-first-title {
        padding-top: 20px
    }

    i.fa.mb-foot-icons {
        width: 90%
    }

    .footer-bottom a {
        color: #ccc
    }

    .footer-bottom p {
        color: #ccc
    }

    .contact-tab-fixed_new .collection-category-second-title {
        position: absolute;
        top: -30px
    }

    .owl-collecttion-listing .owl-stage {
        left: -100px
    }

    .project-template-wrap {
        padding: 25px 0 0
    }

    .video-testimonial-meta .vdo-testimonial-title {
        font-size: 20px;
        font-weight: 600
    }

    .video-testimonial-meta h3 {
        font-size: 18px;
        font-weight: 500;
        color: #666
    }

    .video-img-container {
        position: relative;
        width: 100%;
        max-width: 100%
    }

    .footer-top-title .custom-html-widget a span {
        line-height: 18px
    }

    .footer-bottom {
        padding: 30px 0
    }

    .wpcf7-form:last-child {
        text-align: center;
        display: flex;
        flex-direction: column
    }

    .site-info {
        padding: 0
    }

    .hero-slider .owl-dots .owl-dot span {
        width: 10px;
        height: 10px
    }

    .guide-main-content {
        margin-top: 10px
    }

    .footer-nav-link li {
        display: list-item;
        list-style: none;
        padding: 0;
        margin-bottom: 10px
    }

    .footer-nav-link .footer-nav-link-menu-title {
        display: block;
        color: #C85514;
        font-size: 18px
    }

    .footer-nav-link {
        border-top: 1px solid #fff;
        border-bottom: 1px solid #fff;
        padding: 10px 0
    }

    .footer-nav-link .close {
        font-size: 40px;
        font-weight: 300;
        opacity: 1;
        color: #C85514;
        text-shadow: none
    }

    .footer-nav-link {
        margin-top: 30px;
        margin-bottom: 0;
        display: none
    }

    .mobile-footer-navigation {
        display: block;
        margin: 30px 0
    }

    .sldier-cta-btn {
        margin-top: 20px
    }

    .sldier-cta-btn a {
        font-size: 16px;
        line-height: 1.3;
        padding: 10px
    }

    .sldier-cta-btn a span {
        font-weight: 400;
        font-size: 14px
    }

    .owl-career-location .owl-stage {
        left: 0
    }

    button.btn.dropdown-toggle.btn-light {
        background-color: #f6f5f5 !important;
        font-size: 14px;
        height: auto !important
    }

    .bootstrap-select>.dropdown-toggle {
        padding: 5px 10px;
        margin: 0 0 5px
    }

    .bootstrap-select>.dropdown-toggle.bs-placeholder:active,
    .bootstrap-select>.dropdown-toggle.bs-placeholder:focus,
    .bootstrap-select>.dropdown-toggle.bs-placeholder:hover {
        padding: 5px 10px;
        margin: 0 0 5px
    }

    .new-cta-color-arrow-btn {
        background-color: transparent;
        color: #C85514
    }
}

@media only screen and (max-width:600px) {
    .hero-slider .owl-nav button.owl-next {
        top: auto;
        margin: 0;
        bottom: 0
    }

    .hero-slider .owl-nav button.owl-prev {
        top: auto;
        margin: 0;
        bottom: 0
    }

    .hero-slider .owl-dots {
        bottom: 10px;
        left: 50px;
        right: 50px
    }
}

@media (min-width:480px) and (max-width:767px) {
    body {
        line-height: 20px;
        color: #222;
        font-size: 14px
    }

    .container {
        max-width: 100% !important;
        padding: 0 5%
    }

    .footer-sticky-btn {
        padding-left: 0
    }

    p {
        line-height: 20px;
        color: #222;
        font-size: 14px
    }

    .header-navabar-nav ul li {
        padding-top: 10px
    }

    .header-bg {
        padding: 18px 10px;
        background-color: #fff
    }

    .offer-section-row {
        background-color: #d5b58f;
        text-align: center
    }

    .offer-section-main p {
        font-size: 14px;
        margin-bottom: 0;
        padding: 10px 30px
    }

    .offer-section-main a {
        color: #000;
        text-decoration: underline;
        text-transform: uppercase
    }

    .offer-section-col {
        padding-right: 0;
        padding-left: 0
    }

    .common-link-button {
        font-size: 16px
    }

    .footer-wrapper {
        background-color: #000;
        padding: 40px 0 0 !important;
        color: #fff
    }

    .footer-top-title {
        text-align: left
    }

    .footer-top-title .custom-html-widget a {
        text-align: center;
        font-size: 16px;
        line-height: 18px
    }

    .widget-top-title {
        font-size: 24px;
        margin-bottom: 50px
    }

    .footer-top-title p {
        font-size: 24px;
        margin-bottom: 50px
    }

    .footer-top {
        padding-bottom: 0
    }

    .footer-first-title {
        margin-bottom: 50px
    }

    .footer-sidebar {
        padding-bottom: 0
    }

    .footer-bottom {
        padding: 30px 0
    }

    .custom-logo-link img {
        width: 187px
    }

    .collection-category-second-title {
        padding-top: 20px
    }

    .contact-tab-fixed_new .collection-category-second-title {
        position: absolute;
        top: -30px
    }

    .owl-collecttion-listing .owl-stage {
        left: -20px
    }

    .video-testimonial-meta .vdo-testimonial-title {
        font-size: 20px;
        font-weight: 600
    }

    .video-testimonial-meta h3 {
        font-size: 18px;
        font-weight: 500;
        color: #666
    }

    .video-img-container {
        position: relative;
        width: 100%;
        max-width: 100%
    }

    .video-testimonial-meta {
        margin-bottom: 0
    }

    .contact-tab-fixed {
        top: 106px;
        height: 40px
    }

    .hero-slider .owl-dots .owl-dot span {
        width: 6px;
        height: 6px
    }

    .blog-widget-area .widget:first-child {
        padding: 0 0 5px
    }

    .blog-widget-area .widget {
        padding: 20px 0;
        border-bottom: 1px solid rgba(0, 0, 0, .2)
    }

    .site-info {
        padding: 0
    }

    .guide-main-content {
        margin-top: 10px
    }

    .mobile-calling-sticky-wrap {
        display: block
    }

    .footer-stickey-mobile {
        background: #20b4c0;
        padding: 10px;
        display: none;
        width: 100%;
        max-width: 100%;
        position: fixed;
        bottom: 0;
        z-index: 999
    }

    .cta-container {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        align-items: center
    }

    .site-footer {
        margin-bottom: 30px
    }

    .blog-slider-info {
        padding: 5px 10px;
        top: 35%
    }

    .footer-nav-link li {
        display: list-item;
        list-style: none;
        padding: 0;
        margin-bottom: 10px
    }

    .footer-nav-link .footer-nav-link-menu-title {
        display: block;
        color: #C85514;
        font-size: 18px
    }

    .footer-nav-link {
        border-top: 1px solid #fff;
        border-bottom: 1px solid #fff;
        padding: 5px 0;
        display: none
    }

    .mobile-footer-navigation {
        display: block;
        margin: 30px 0
    }

    .footer-nav-link .close {
        font-size: 40px;
        font-weight: 300;
        opacity: 1;
        color: #C85514;
        text-shadow: none
    }

    .footer-nav-link {
        margin-top: 0
    }

    .sldier-cta-btn a {
        font-size: 14px;
        line-height: 1.3;
        padding: 10px
    }

    .sldier-cta-btn a span {
        font-weight: 400;
        font-size: 12px
    }

    .sldier-cta-btn {
        margin-top: 15px;
        line-height: 1.2
    }

    .owl-career-location .owl-stage {
        left: 0
    }

    button.btn.dropdown-toggle.btn-light {
        background-color: #f6f5f5 !important;
        font-size: 14px;
        height: auto !important
    }

    .bootstrap-select>.dropdown-toggle {
        padding: 5px 10px;
        margin: 0 0 5px
    }

    .bootstrap-select>.dropdown-toggle.bs-placeholder:active,
    .bootstrap-select>.dropdown-toggle.bs-placeholder:focus,
    .bootstrap-select>.dropdown-toggle.bs-placeholder:hover {
        padding: 5px 10px;
        margin: 0 0 5px
    }

    .page-template-homepage-template .fancybox-slide {
        padding-left: 0;
        padding-right: 0
    }

    .new-cta-color-arrow-btn {
        background-color: transparent;
        color: #C85514
    }
}

@media (min-width:320px) and (max-width:479px) {
    .footer-bottom p {
        font-size: 13px;
        color: #ccc;
        margin-bottom: 8px;
        text-align: center
    }

    body {
        top: 58px;
        line-height: 22px;
        color: #222;
        font-size: 14px;
        font-weight: 400
    }

    .container {
        max-width: 100% !important;
        padding: 0 5%
    }

    p {
        line-height: 22px;
        color: #222;
        font-size: 14px;
        font-weight: 400
    }

    .header-bg {
        padding: 5px 20px;
        background-color: #fff
    }

    .header-navabar-nav ul li {
        padding-top: 10px;
        padding-bottom: 10px
    }

    .header-navabar-nav ul li:first-child {
        padding-top: 15px
    }

    .offer-section-row {
        background-color: #d5b58f;
        text-align: center
    }

    .offer-section-main p {
        font-size: 14px;
        margin-bottom: 0;
        padding: 10px 15px
    }

    .offer-section-main a {
        color: #000;
        text-decoration: underline;
        text-transform: uppercase
    }

    .offer-section-col {
        padding-right: 0;
        padding-left: 0
    }

    .custom-logo-link {
        width: 161px
    }

    .common-link-button {
        font-size: 14px;
        padding: 8px 20px
    }

    .footer-wrapper {
        background-color: #000;
        padding: 40px 0 0 !important;
        color: #fff
    }

    .footer-top-title {
        text-align: left
    }

    .footer-top-title .custom-html-widget a {
        text-align: center;
        font-size: 16px;
        padding: 8px 13px;
        line-height: 16px
    }

    .widget-top-title {
        font-size: 16px;
        margin-bottom: 30px
    }

    .footer-top-title p {
        font-size: 18px;
        margin-bottom: 30px
    }

    .footer-title {
        font-size: 20px;
        font-weight: 500;
        padding-bottom: 20px;
        text-transform: uppercase
    }

    .footer-title:after {
        width: 35px
    }

    .footer-first-title .textwidget {
        margin-top: 40px
    }

    .footer-top {
        padding-bottom: 40px
    }

    .footer-first-title {
        margin-bottom: 50px
    }

    .footer-sidebar {
        padding-bottom: 0
    }

    .footer-bottom {
        padding: 30px 0
    }

    .site-footer {
        flex-direction: column
    }

    .mobile-footer-navigation {
        display: block
    }

    .collection-category-second-title {
        padding: 20px 4% 0
    }

    .contact-tab-fixed_new .collection-category-second-title {
        position: absolute;
        left: 0;
        top: -42px
    }

    .owl-collecttion-listing .owl-stage {
        left: -20px
    }

    .video-testimonial-meta .vdo-testimonial-title {
        font-size: 18px;
        font-weight: 600
    }

    .video-testimonial-meta h3 {
        font-size: 14px;
        font-weight: 500;
        color: #666
    }

    .video-testimonial-meta {
        margin-bottom: 0
    }

    .hero-slider .owl-dots .owl-dot span {
        width: 6px;
        height: 6px
    }

    .blog-widget-area .widget:first-child {
        padding: 0 0 5px
    }

    .blog-widget-area .widget {
        padding: 20px 0;
        border-bottom: 1px solid rgba(0, 0, 0, .2)
    }

    .contact-tab-fixed {
        top: 64px;
        height: 40px;
        overflow-x: auto;
        overflow-y: hidden;
        flex-wrap: nowrap;
        display: flex
    }

    .contact-us-location-listing {
        height: 34px;
        overflow-x: auto;
        overflow-y: hidden;
        flex-wrap: nowrap;
        display: flex
    }

    .site-info {
        padding: 0 50px
    }

    button.navbar-toggler {
        padding: 0
    }

    button.navbar-toggler img {
        max-width: 60%
    }

    .guide-main-content {
        margin-top: 10px
    }

    .mobile-calling-sticky-wrap {
        display: block
    }

    .footer-stickey-mobile {
        background: #20b4c0;
        padding: 10px;
        display: none;
        width: 100%;
        max-width: 100%;
        position: fixed;
        bottom: 0;
        z-index: 999
    }

    .cta-container {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        align-items: center
    }

    .footer-stickey-mobile .footer-sticky-btn {
        padding: 0 5px
    }

    .site-footer {
        margin-bottom: 60px
    }

    .blog-slider-info {
        padding: 5px 10px;
        top: 12%
    }

    .slider-blog-thumb-section {
        position: relative
    }

    .footer-nav-link li {
        display: list-item;
        list-style: none;
        padding: 0;
        margin-bottom: 10px;
        font-size: 14px
    }

    .footer-nav-link .footer-nav-link-menu-title {
        display: block;
        color: #C85514;
        font-size: 18px
    }

    .footer-nav-link {
        border-top: 1px solid #fff;
        border-bottom: 1px solid #fff;
        padding: 10px 0;
        display: none
    }

    .footer-nav-link .close {
        font-size: 40px;
        font-weight: 300;
        opacity: 1;
        color: #C85514;
        text-shadow: none
    }

    .sldier-cta-btn a {
        font-size: 14px;
        line-height: 1.3;
        padding: 10px
    }

    .sldier-cta-btn a span {
        font-weight: 400;
        font-size: 12px
    }

    .sldier-cta-btn {
        margin-top: 15px
    }

    .home-slider .owl-nav button.owl-next,
    .home-slider .owl-nav button.owl-prev {
        height: 30px;
        width: 30px;
        font-size: 20px
    }

    .owl-career-location .owl-stage {
        left: 0
    }

    button.btn.dropdown-toggle.btn-light {
        background-color: #f6f5f5 !important;
        font-size: 14px;
        height: auto !important
    }

    .bootstrap-select>.dropdown-toggle {
        padding: 5px 10px;
        margin: 0 0 5px
    }

    .bootstrap-select>.dropdown-toggle.bs-placeholder:active,
    .bootstrap-select>.dropdown-toggle.bs-placeholder:focus,
    .bootstrap-select>.dropdown-toggle.bs-placeholder:hover {
        padding: 5px 10px;
        margin: 0 0 5px
    }

    .page-template-homepage-template .fancybox-slide {
        padding-left: 0;
        padding-right: 0
    }

    .new-cta-color-arrow-btn {
        background-color: transparent;
        color: #C85514
    }

    .dropdown-menu[x-placement^=top] {
        top: 280px !important
    }
}

.fixed-top {
    border-bottom: 1px solid #f2f2f2
}

@media (min-width:360px) and (max-width:479px) {
    .fixed-top {
        top: 0
    }
}

@media (min-width:1440px) {
    .container {
        max-width: 1450px !important;
        padding: 0 60px
    }
}

@media (min-width:1024px) and (max-width:1439px) {
    .container {
        max-width: 100% !important;
        padding: 0 60px
    }
}

@media (min-width:1920px) {
    .container {
        min-width: 1450px;
        padding: 0
    }

    .contact-tab-fixed {
        top: 163px;
        height: 60px
    }

    .new-cta-color-arrow-btn {
        background-color: transparent;
        color: #C85514
    }
}

@media (min-width:1024px) {
    .footer-nav-link li {
        display: inline-block;
        font-weight: 300;
        font-size: 16px;
        padding: 0;
        margin: 0 0 10px;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
        text-align: left
    }

    .footer-nav-link ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .footer-nav-link {
        text-align: center;
        margin: 0 0 30px;
        padding: .5rem 0
    }
}

#ContactUsFormMain .select2-container,
.select2-drop {
    width: 83px !important
}

#ContactUsFormMain .form-control a {
    width: 72px !important;
    background: 0 0 !important;
    position: unset !important;
    border: none !important;
    text-decoration: none
}

.iti__country-name {
    display: none !important
}

.iti__country-list {
    width: 100px !important
}

.iti--separate-dial-code .iti__selected-dial-code,
.iti__dial-code {
    font-size: 16px !important
}

#flag {
    display: none
}

#blogContactUsFormMain .iti__selected-flag,
.ContactUsFormMain .iti__selected-flag {
    padding: 3px 6px 3px 8px !important;
    height: auto
}

.pop-up-right-form-section .iti--separate-dial-code {
    width: 100% !important
}

.pop-up-right-form-section .iti--separate-dial-code input {
    width: 44%
}

#ContactUsFormMain .form-group {
    width: 100%
}

.pop-up-right-form-section .whatsapp-optin span {
    color: #fff
}

.ContactUsFormMain .iti--allow-dropdown {
    margin-left: 5px !important;
    width: 97%
}

#blogContactUsFormMain .iti {
    position: relative;
    display: block !important
}

#AffiliatesPopupForm .iti--separate-dial-code .iti__selected-flag {
    background-color: transparent !important
}

#AffiliatesPopupForm .iti__arrow {
    border-top: 4px solid #f4f4f4
}

#AffiliatesPopupForm .iti__arrow--up {
    border-top: none;
    border-bottom: 4px solid #f4f4f4
}

#blog_bottom_flag,
#blog_flag,
#contact_flag {
    display: none
}

@media (min-width:320px) and (max-width:479px) {
    #blogContactUsFormMain .iti__selected-flag {
        padding: 3px 6px 11px 8px !important;
        height: auto
    }

    .pop-up-right-form-section .iti--separate-dial-code input {
        width: 244px !important;
        margin-left: -14px
    }
}

#home-slider .owl-stage-outer {
    height: auto !important
}

#home-slider .owl-dots {
    display: none !important
}

.contact-us-location-listing .contact-tab-fixed {
    display: block !important
}

@media (min-width:320px) and (max-width:479px) {
    #home-slider .owl-dots {
        display: block !important;
        bottom: -5px !important
    }

    .contact-us-location-listing {
        height: auto !important;
        display: block !important;
        width: 100% !important;
        left: 0 !important
    }

    #ymPluginDivContainerInitial {
        display: none !important
    }
}

.cta-action {
    animation: 2s infinite pulse
}

@keyframes pulse {
    0% {
        transform: scale(1)
    }

    50% {
        transform: scale(1.1)
    }

    100% {
        transform: scale(1)
    }
}

@media (min-width:320px) and (max-width:767px) {
    #ymPluginDivContainerInitial {
        display: none !important
    }
}

.tooltip.show {
    opacity: .9;
    top: -78px !important
}

.progress-bar-tooltip.tooltip.show {
    top: 0 !important
}

.local .sign-up-process-section {
    padding: 25px 0
}

.local .owl-local-slider .owl-item img {
    border-radius: 10px
}

.whatsapp-optin input {
    margin-right: 2px
}

.whatsapp-optin label {
    position: relative;
    cursor: pointer;
    margin-bottom: 0
}

.whatsapp-optin span {
    font-size: 13px;
    font-weight: 600;
    color: #666 !important
}

.whatsapp-optin {
    margin-bottom: 0;
    margin-top: 5px;
    display: flex;
    align-items: center
}

.home-slider .owl-item.active p {
    -webkit-animation: none;
    animation: none
}

@media only screen and (max-width:768px) {
    #openbtn1 {
        visibility: hidden
    }

    .pop-up-left-section {
        flex: 0 0 100%;
        max-width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        height: 130px;
        width: 100%;
        object-fit: cover
    }

    .form-radio-message p {
        margin-top: 10px
    }

    .modal-body {
        border-radius: 20px;
        background: #f9fafb
    }

    .pop-up-left-section {
        flex: 0 0 100%;
        max-width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        height: 130px;
        width: 100%;
        object-fit: cover;
        border-radius: 15px 15px 0 0 !important
    }

    .form-text-section {
        display: block
    }

    .form-terms-cond,
    .submit-wraper {
        display: block
    }

    .pop-up-right {
        margin: 0
    }

    .pop-up-right-section {
        flex: 100%;
        max-width: 100%;
        margin: 0 20px;
        padding: 0
    }

    .pop-up-right-head {
        font-size: 20px;
        margin-top: 0;
        background: #1a98a4;
        margin: 0 5px;
        text-align: left;
        padding: 5px;
        color: #fff
    }

    .pop-up-right-form-section {
        margin-top: 20px;
        padding: 0 10px
    }

    .form-radio-gp label {
        padding: 6px;
        border: 1px solid #d0d5dd;
        font-size: 11px
    }

    .form-radio-gp {
        margin-right: 6px;
        margin-bottom: 3px
    }

    .modal-body {
        padding-top: 0;
        padding: 0
    }

    .model-popup-btn {
        right: 2%
    }

    .form-radio-label {
        font-size: 14px
    }

    span.form-select-img {
        max-width: 15px
    }

    .form-select-message {
        font-size: .8rem;
        color: #000
    }

    .form-radio-message {
        margin-top: 15px
    }

    .form-terms-cond,
    .submit-wraper {
        text-align: center
    }

    .modal {
        z-index: 100000
    }

    .from-text-input {
        margin-bottom: 10px
    }

    .pop-right-image-desktop {
        display: none
    }

    .pop-right-image-mobile {
        display: block
    }

    .whatsapp-optin {
        margin: 10px 0;
        gap: 5px
    }

    .whatsapp-optin span {
        font-size: 11px
    }
}

.form-terms-cond a {
    color: #1a9ca9 !important
}

#cntry_field,
.text-input-name {
    width: 100%
}

.get-a-quote-collection {
    margin-top: 8px;
    text-align: center
}

.common-link-button-new {
    background-color: #C85514;
    color: #fff;
    display: inline-block;
    padding: 20px 50px;
    -webkit-transform: perspective(1px) translateZ(0);
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    -webkit-transition-property: color, background-color;
    transition-property: color, background-color;
    line-height: 1
}

.common-link-button-new:hover {
    background-color: #062639;
    color: #fff;
    text-decoration: none;
    transition: .3s
}

.owl-carosal-arrow .owl-nav .owl-next,
.owl-carosal-arrow .owl-nav .owl-prev {
    color: #ddd;
    font-size: 18px;
    position: absolute;
    top: 40%;
    text-align: center;
    line-height: 39px;
    bottom: 0;
    height: 29px;
    display: block
}

.owl-carosal-arrow .owl-dots .owl-dot span {
    width: 10px;
    height: 10px;
    border: 2px solid grey;
    background: 0 0;
    margin: 5px 4px
}

.owl-carosal-arrow .owl-dots .owl-dot:first-child span,
.owl-carosal-arrow .owl-dots .owl-dot:last-child span {
    height: 4px;
    width: 4px;
    background: grey;
    border: 0
}

.owl-carosal-arrow .owl-dots .owl-dot.active span,
.owl-carosal-arrow .owl-dots .owl-dot:hover span {
    background: grey;
    width: 10px;
    height: 10px;
    border: grey;
    margin: 5px 4px
}

.owl-carosal-arrow .owl-dots {
    text-align: center;
    -webkit-tap-highlight-color: transparent;
    display: flex;
    justify-content: center;
    align-items: center
}

.contact-tab-fixed_new {
    position: fixed;
    top: 76px;
    width: 100%;
    background: #fff;
    z-index: 999;
    display: block;
    height: 66px;
    display: flex;
    align-items: center;
    justify-content: left;
    left: 0;
    border-bottom: 1px solid #f2f2f2
}

.blog-home-first-section {
    position: relative
}

.form-terms-cond p a {
    color: #fff;
    font-weight: 600
}

.form-terms-cond p a:hover {
    color: #982420
}

.owl-slider-new-top-cat .owl-nav .owl-next,
.owl-slider-new-top-cat .owl-nav .owl-prev {
    top: 40%
}

.blog-widget-area .widget {
    padding: 30px 0;
    border-bottom: 1px solid rgba(0, 0, 0, .2)
}

.blog-widget-area .widget_text {
    padding: 30px 0
}

.sign-up-process-section {
    padding-top: 50px
}

.covid-sign-up-head {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 0
}

.lockdown-offer-content {
    text-align: center
}

.why-signing-up-title {
    margin-top: 50px;
    margin-bottom: 10px
}

.filter-expand-section {
    position: absolute;
    z-index: 99;
    width: 76%;
    right: 10%;
    max-width: 76%;
    margin-left: auto;
    padding-right: 9px
}

.project-template-wrap.contact-tab-without-noty.contact-tab-fixed_new {
    top: 64px;
    position: fixed;
    left: 15px;
    padding: 31px 22px;
    display: flex
}

.close-btn-text {
    position: absolute;
    right: 20px;
    top: 15px;
    font-size: 30px;
    font-weight: 700;
    cursor: pointer
}

.user-step-1-cta button span {
    display: block;
    font-size: 14px
}

.user-step-1-cta button {
    line-height: 1.5;
    margin-top: 30px;
    border: none
}

.user-research-step-1 {
    max-width: 500px;
    margin-left: auto;
    margin-right: auto
}

.user-research-step-2 {
    display: none
}

.user-research-step-2 {
    max-width: 500px;
    margin-left: auto;
    margin-right: auto
}

.user-research-step-3 {
    display: none
}

.user-research-step-3 {
    max-width: 500px;
    margin-left: auto;
    margin-right: auto
}

form#ContactUsFormMainHome input {
    text-align: center;
    border-radius: 5px
}

form#ContactUsFormMainHome .bootstrap-select .dropdown-toggle .filter-option-inner-inner {
    overflow: hidden;
    text-align: center
}

form#ContactUsFormMainHome {
    margin-top: 30px
}

.fancybox-container {
    z-index: 99999
}

.text-input::placeholder {
    color: #fff
}

.modal-body {
    padding: 0
}

.galler-thumbnail-tab-name-list {
    border: none;
    width: 100%;
    border-bottom: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
    text-align: center
}

.galler-thumbnail-tab-name-list>li {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33%;
    flex: 0 0 33.33%;
    max-width: 33.33%;
    padding-left: 5px;
    padding-right: 5px
}

.galler-thumbnail-tab-name a {
    display: block;
    background-color: #c59767;
    padding: 10px 0;
    line-height: 1;
    color: #fff;
    border: 1px solid #c59767
}

li.galler-thumbnail-tab-name a.active {
    color: #c59767;
    background-color: transparent
}

.galler-thumbnail-tab-name a:hover {
    color: #c59767;
    background-color: transparent
}

.galler-thumbnail-image-list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    text-align: center;
    width: 100%;
    margin-left: auto;
    margin-right: auto
}

.galler-thumbnail-image {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 20%;
    flex: 0 0 20%;
    max-width: 20%;
    padding-left: 15px;
    padding-right: 15px;
    margin-top: 40px
}

.galler-thumbnail-image img {
    cursor: pointer
}

.tooltip-inner {
    background-color: #c5996a
}

.gallery-title-content {
    margin-top: 30px
}

.progress-bar-tooltip {
    position: relative;
    float: right;
    z-index: 99
}

.progress {
    border-radius: 0;
    overflow: visible
}

.progress-bar-tooltip .arrow {
    left: 50% !important
}

#AffiliatesPopupForm .bootstrap-select+label.error,
#AffiliatesPopupForm input.error+label.error,
#AffiliatesPopupForm select.error+label.error {
    color: #dc3545;
    font-size: 12px;
    margin-bottom: 0
}

.lds-ring {
    display: inline-block;
    position: absolute;
    width: 15px;
    height: 15px;
    right: 10px;
    top: 15px
}

.lds-ring div:first-child {
    animation-delay: -.45s
}

.lds-ring div {
    box-sizing: border-box;
    display: block;
    position: absolute;
    width: 30px;
    height: 30px;
    margin: 8px;
    border: 4px solid #fff;
    border-radius: 50%;
    animation: 1.2s cubic-bezier(.5, 0, .5, 1) infinite;
    border-color: #fff transparent transparent
}

.modal-size {
    max-width: 760px
}

.new-popup-modal {
    border-radius: 20px
}

.pop-up-left-section {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 44%;
    flex: 0 0 44%;
    max-width: 44%;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-left: 15px
}

.pop-up-right-section {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 56%;
    flex: 0 0 56%;
    max-width: 56%;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding: 15px;
    background: #f9fafb;
    border-radius: 20px
}

.pop-up-right-head {
    font-size: 26px;
    color: #000;
    text-align: left;
    line-height: 1;
    margin-top: 8px
}

.form-select-message,
.form-terms-cond p,
.pop-up-right .form-radio-label p {
    color: #000
}

.form-radio-label p {
    line-height: 1;
    margin-bottom: 0;
    font-weight: 400
}

.pop-up-right-form-section {
    margin-top: 30px
}

.form-radio-section {
    margin-bottom: 16px
}

.form-text-section {
    margin-bottom: 16px
}

.form-radio-label {
    color: #848484;
    font-size: 14px;
    font-weight: 500;
    line-height: 1
}

.form-radio-message {
    margin-top: 5px
}

.form-radio-message p {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    align-items: center;
    line-height: 1;
    color: #0f0f10;
    font-size: 14px
}

.close {
    color: #000;
    opacity: 1
}

.close:hover {
    color: #000
}

.form-select-message {
    flex: 1;
    padding-left: 10px;
    font-size: 12px;
    color: #000
}

.pop-form-submit {
    width: 100%;
    text-align: center;
    padding: 10px;
    border-radius: 5px;
    line-height: 1;
    -webkit-box-align: center;
    -ms-flex-align: center;
    position: relative;
    font-size: 20px;
    border: 1px solid #B34304;
    color: #fff;
    background-color: #B34304
}

.form-terms-cond {
    margin-top: 4px
}

.form-terms-cond p {
    font-size: 11px
}

.text-input:focus {
    outline: initial
}

.form-text-section {
    display: block
}

.form-terms-cond,
.submit-wraper {
    display: block
}

.form-radio-message {
    visibility: hidden
}

.model-popup-btn {
    position: absolute;
    right: 1%;
    top: 1%;
    z-index: 99999
}

.lds-ring {
    border: 3px solid #fff;
    border-radius: 50%;
    border-top: 3px solid transparent;
    -webkit-animation: 2s linear infinite spin;
    animation: 2s linear infinite spin
}

@-webkit-keyframes spin {
    0% {
        -webkit-transform: rotate(0)
    }

    100% {
        -webkit-transform: rotate(360deg)
    }
}

@keyframes spin {
    0% {
        transform: rotate(0)
    }

    100% {
        transform: rotate(360deg)
    }
}

.form-select-message {
    margin-bottom: 0;
    font-weight: 500;
    color: #000
}

label.error.form-select-message {
    color: #e61323
}

label.error.form-select-message.valid {
    color: #000
}

#text-form-message-name.error {
    color: #e61323
}

#error-message-show {
    display: none;
    color: #e61323
}

.form-radio-gp {
    display: inline-block;
    margin-right: 8px
}

.form-radio-gp input[type=radio] {
    position: absolute;
    visibility: hidden;
    display: none
}

.form-radio-gp label {
    color: #666;
    display: inline-block;
    cursor: pointer;
    font-weight: 400;
    padding: 10px 8px;
    font-size: 14px;
    margin: 0;
    line-height: 1;
    border-radius: 8px;
    border: 1px solid #d0d5dd;
    background: #fff;
    box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05)
}

.form-radio-gp input[type=radio]:checked+label {
    color: #fff !important;
    background: #10676e;
    border-color: #10676e !important
}

.form-radio-gp label+.form-radio-gp input[type=radio]+label {
    border-bottom: 1px solid #000
}

.radio-group {
    display: inline-block;
    margin-top: 15px;
    overflow: hidden
}

.pop-form-submit {
    border-radius: 5px;
    padding: 10px 50px;
    font-weight: 500;
    line-height: 1
}

.red-btn {
    color: #fff;
    padding: 15px 30px;
    background-color: #B34304;
    font-size: 16px;
    line-height: 1;
    display: inline-block;
    border: 1px solid #B34304
}

.fancybox-slide {
    padding-left: 0 !important;
    padding-right: 0 !important
}

.guide-main-content-new {
    padding: 80px 0
}

.btn:focus {
    -webkit-box-shadow: initial;
    box-shadow: initial
}

.featured-blog-cls {
    min-height: 45vh
}

@media (min-width:1920px) {
    .get-a-quote-collection {
        margin-top: 8px;
        text-align: center
    }

    .common-link-button-new {
        background-color: #C85514;
        color: #fff;
        display: inline-block;
        padding: 20px 50px;
        -webkit-transform: perspective(1px) translateZ(0);
        -webkit-transition-duration: .3s;
        transition-duration: .3s;
        -webkit-transition-property: color, background-color;
        transition-property: color, background-color;
        line-height: 1;
        font-size: 22px
    }

    .common-link-button-new:hover {
        background-color: #062639;
        color: #fff;
        text-decoration: none;
        transition: .3s
    }

    .owl-carosal-arrow .owl-nav .owl-next,
    .owl-carosal-arrow .owl-nav .owl-prev {
        color: #ddd;
        font-size: 18px;
        position: absolute;
        top: 43%;
        text-align: center;
        line-height: 39px;
        bottom: 0;
        height: 29px;
        display: block
    }

    .owl-carosal-arrow .owl-dots .owl-dot span {
        width: 15px;
        height: 15px;
        border: 2px solid grey;
        background: 0 0;
        margin: 5px 4px
    }

    .owl-carosal-arrow .owl-dots .owl-dot:first-child span,
    .owl-carosal-arrow .owl-dots .owl-dot:last-child span {
        height: 7px;
        width: 7px;
        background: grey;
        border: 0
    }

    .owl-carosal-arrow .owl-dots .owl-dot.active span,
    .owl-carosal-arrow .owl-dots .owl-dot:hover span {
        background: grey;
        width: 15px;
        height: 15px;
        border: grey;
        margin: 5px 4px
    }

    .owl-carosal-arrow .owl-dots {
        text-align: center;
        -webkit-tap-highlight-color: transparent;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .contact-tab-fixed_new {
        position: fixed;
        top: 76px;
        width: 100%;
        background: #fff;
        z-index: 999;
        display: block;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: left;
        left: 0;
        border-bottom: initial;
        padding-left: 0;
        padding-right: 0;
        border-bottom: 1px solid #f2f2f2
    }

    .contact-tab-without-noty {
        top: 138px
    }

    .blog-home-first-section {
        position: relative
    }

    .owl-slider-new-top-cat .owl-nav .owl-next,
    .owl-slider-new-top-cat .owl-nav .owl-prev {
        top: 35%
    }

    .blog-widget-area .widget {
        padding: 30px 0;
        border-bottom: 1px solid rgba(0, 0, 0, .2)
    }

    .blog-widget-area .widget_text {
        padding: 30px 0
    }

    .sign-up-process-section {
        padding-top: 50px
    }

    .covid-sign-up-head {
        font-size: 30px;
        font-weight: 700
    }

    .lockdown-offer-content {
        text-align: center
    }

    .why-signing-up-title {
        margin-top: 50px
    }

    .filter-expand-section {
        position: absolute;
        z-index: 99;
        width: 75%;
        right: 10%;
        max-width: 75%;
        margin-left: auto;
        padding-right: 9px
    }

    .progress-bar-tooltip {
        position: relative;
        float: right
    }

    .progress {
        border-radius: 0;
        overflow: visible
    }

    .progress-bar-tooltip .arrow {
        left: 50% !important
    }
}

@media (min-width:1440px) and (max-width:1919px) {
    .get-a-quote-collection {
        margin-top: 8px;
        text-align: center
    }

    .common-link-button-new {
        background-color: #C85514;
        color: #fff;
        display: inline-block;
        padding: 20px 50px;
        -webkit-transform: perspective(1px) translateZ(0);
        -webkit-transition-duration: .3s;
        transition-duration: .3s;
        -webkit-transition-property: color, background-color;
        transition-property: color, background-color;
        line-height: 1;
        font-size: 22px
    }

    .common-link-button-new:hover {
        background-color: #062639;
        color: #fff;
        text-decoration: none;
        transition: .3s
    }

    .owl-carosal-arrow .owl-nav .owl-next,
    .owl-carosal-arrow .owl-nav .owl-prev {
        color: #ddd;
        font-size: 18px;
        position: absolute;
        top: 43%;
        text-align: center;
        line-height: 39px;
        bottom: 0;
        height: 29px;
        display: block
    }

    .owl-carosal-arrow .owl-dots .owl-dot span {
        width: 15px;
        height: 15px;
        border: 2px solid grey;
        background: 0 0;
        margin: 5px 4px
    }

    .owl-carosal-arrow .owl-dots .owl-dot:first-child span,
    .owl-carosal-arrow .owl-dots .owl-dot:last-child span {
        height: 7px;
        width: 7px;
        background: grey;
        border: 0
    }

    .owl-carosal-arrow .owl-dots .owl-dot.active span,
    .owl-carosal-arrow .owl-dots .owl-dot:hover span {
        background: grey;
        width: 15px;
        height: 15px;
        border: grey;
        margin: 5px 4px
    }

    .owl-carosal-arrow .owl-dots {
        text-align: center;
        -webkit-tap-highlight-color: transparent;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .contact-tab-without-noty {
        top: 78px
    }

    .blog-home-first-section {
        position: relative
    }

    .owl-slider-new-top-cat .owl-nav .owl-next,
    .owl-slider-new-top-cat .owl-nav .owl-prev {
        top: 35%
    }

    .blog-widget-area .widget {
        padding: 30px 0;
        border-bottom: 1px solid rgba(0, 0, 0, .2)
    }

    .blog-widget-area .widget_text {
        padding: 30px 0
    }

    .sign-up-process-section {
        padding-top: 50px
    }

    .covid-sign-up-head {
        font-size: 25px;
        font-weight: 700
    }

    .lockdown-offer-content {
        text-align: center
    }

    .why-signing-up-title {
        margin-top: 50px;
        margin-bottom: 10px
    }

    .filter-expand-section {
        position: absolute;
        z-index: 99;
        width: 76%;
        right: 10%;
        max-width: 76%;
        margin-left: auto;
        padding-right: 9px
    }

    .progress-bar-tooltip {
        position: relative;
        float: right
    }

    .progress {
        border-radius: 0;
        overflow: visible
    }

    .progress-bar-tooltip .arrow {
        left: 50% !important
    }

    .modal-size {
        max-width: 760px
    }

    .new-popup-modal {
        border-radius: 20px
    }

    .pop-up-left-section {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 46%;
        flex: 0 0 46%;
        max-width: 46%;
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-left: 15px
    }

    .pop-up-right-section {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 54%;
        flex: 0 0 54%;
        max-width: 54%;
        position: relative;
        width: 100%;
        min-height: 1px;
        padding: 15px;
        background: #f9fafb;
        border-radius: 20px
    }

    .pop-up-right-head {
        font-size: 24px;
        color: #000;
        line-height: 1;
        margin-top: 10px
    }

    .pop-up-right-form-section {
        margin-top: 20px
    }

    .form-radio-section {
        margin-bottom: 10px
    }

    .form-text-section {
        margin-bottom: 10px
    }

    .form-radio-label {
        color: #848484;
        font-size: 14px;
        font-weight: 500
    }

    .form-radio-message {
        margin-top: 5px
    }

    .form-number-section {
        margin: 0;
        padding: 0;
        line-height: 15px
    }

    .form-radio-message p {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        align-items: center;
        line-height: 1;
        color: #0f0f10
    }

    .form-select-message {
        flex: 1;
        padding-left: 10px
    }

    .text-input-name {
        width: 100%
    }

    .pop-form-submit {
        border-radius: 5px;
        padding: 10px 50px;
        font-weight: 500;
        line-height: 1
    }

    .form-terms-cond {
        margin-top: 10px
    }

    .form-terms-cond p {
        font-size: 12px
    }

    .text-input:focus {
        outline: initial
    }

    .form-radio-gp {
        display: inline-block;
        margin-right: 10px
    }

    .form-radio-gp input[type=radio] {
        position: absolute;
        visibility: hidden;
        display: none
    }

    .form-radio-gp label {
        color: #666;
        display: inline-block;
        cursor: pointer;
        font-weight: 400;
        padding: 10px 8px;
        font-size: 14px;
        margin: 0;
        line-height: 1;
        border-radius: 8px;
        border: 1px solid #d0d5dd;
        background: #fff;
        box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05)
    }

    .form-radio-gp input[type=radio]:checked+label {
        color: #fff !important;
        background: #10676e
    }

    .form-radio-gp label+.form-radio-gp input[type=radio]+label {
        border-bottom: 1px solid #000
    }

    .radio-group {
        display: inline-block;
        margin-top: 15px;
        overflow: hidden
    }
}

@media (min-width:1280px) and (max-width:1365px) {
    .get-a-quote-collection {
        margin-top: 8px;
        text-align: center
    }

    .common-link-button-new {
        background-color: #C85514;
        color: #fff;
        display: inline-block;
        padding: 20px 50px;
        -webkit-transform: perspective(1px) translateZ(0);
        -webkit-transition-duration: .3s;
        transition-duration: .3s;
        -webkit-transition-property: color, background-color;
        transition-property: color, background-color;
        line-height: 1
    }

    .common-link-button-new:hover {
        background-color: #062639;
        color: #fff;
        text-decoration: none;
        transition: .3s
    }

    .owl-carosal-arrow .owl-nav .owl-next,
    .owl-carosal-arrow .owl-nav .owl-prev {
        color: #ddd;
        font-size: 18px;
        position: absolute;
        top: 40%;
        text-align: center;
        line-height: 39px;
        bottom: 0;
        height: 29px;
        display: block
    }

    .owl-carosal-arrow .owl-dots .owl-dot span {
        width: 10px;
        height: 10px;
        border: 2px solid grey;
        background: 0 0;
        margin: 5px 4px
    }

    .owl-carosal-arrow .owl-dots .owl-dot:first-child span,
    .owl-carosal-arrow .owl-dots .owl-dot:last-child span {
        height: 4px;
        width: 4px;
        background: grey;
        border: 0
    }

    .owl-carosal-arrow .owl-dots .owl-dot.active span,
    .owl-carosal-arrow .owl-dots .owl-dot:hover span {
        background: grey;
        width: 10px;
        height: 10px;
        border: grey;
        margin: 5px 4px
    }

    .owl-carosal-arrow .owl-dots {
        text-align: center;
        -webkit-tap-highlight-color: transparent;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .blog-home-first-section {
        position: relative
    }

    .owl-slider-new-top-cat .owl-nav .owl-next,
    .owl-slider-new-top-cat .owl-nav .owl-prev {
        top: 35%
    }

    .blog-widget-area .widget {
        padding: 25px 0;
        border-bottom: 1px solid rgba(0, 0, 0, .2)
    }

    .blog-widget-area .widget_text {
        padding: 30px 0
    }

    .sign-up-process-section {
        padding-top: 50px
    }

    .covid-sign-up-head {
        font-size: 25px;
        font-weight: 700
    }

    .lockdown-offer-content {
        text-align: center
    }

    .why-signing-up-title {
        margin-top: 50px;
        margin-bottom: 10px
    }

    .filter-expand-section {
        position: absolute;
        z-index: 99;
        width: 78%;
        right: 10%;
        max-width: 78%;
        margin-left: auto;
        padding-right: 9px
    }

    .progress-bar-tooltip {
        position: relative;
        float: right
    }

    .progress {
        border-radius: 0;
        overflow: visible
    }

    .progress-bar-tooltip .arrow {
        left: 50% !important
    }
}

@media (min-width:1024px) and (max-width:1279px) {
    .get-a-quote-collection {
        margin-top: 8px;
        text-align: center
    }

    .common-link-button-new {
        background-color: #C85514;
        color: #fff;
        display: inline-block;
        padding: 15px 40px;
        -webkit-transform: perspective(1px) translateZ(0);
        -webkit-transition-duration: .3s;
        transition-duration: .3s;
        -webkit-transition-property: color, background-color;
        transition-property: color, background-color;
        line-height: 1
    }

    .common-link-button-new:hover {
        background-color: #062639;
        color: #fff;
        text-decoration: none;
        transition: .3s
    }

    .owl-carosal-arrow .owl-nav .owl-next,
    .owl-carosal-arrow .owl-nav .owl-prev {
        color: #ddd;
        font-size: 18px;
        position: absolute;
        top: 40%;
        text-align: center;
        line-height: 39px;
        bottom: 0;
        height: 29px;
        display: block
    }

    .owl-carosal-arrow .owl-dots .owl-dot span {
        width: 10px;
        height: 10px;
        border: 2px solid grey;
        background: 0 0;
        margin: 5px 4px
    }

    .owl-carosal-arrow .owl-dots .owl-dot:first-child span,
    .owl-carosal-arrow .owl-dots .owl-dot:last-child span {
        height: 4px;
        width: 4px;
        background: grey;
        border: 0
    }

    .owl-carosal-arrow .owl-dots .owl-dot.active span,
    .owl-carosal-arrow .owl-dots .owl-dot:hover span {
        background: grey;
        width: 10px;
        height: 10px;
        border: grey;
        margin: 5px 4px
    }

    .owl-carosal-arrow .owl-dots {
        text-align: center;
        -webkit-tap-highlight-color: transparent;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .contact-tab-fixed_new {
        top: 76px
    }

    .contact-tab-without-noty {
        top: 112px
    }

    .project-template-wrap.contact-tab-without-noty {
        top: 0
    }

    .project-template-wrap.contact-tab-without-noty.contact-tab-fixed_new {
        top: 64px;
        position: fixed;
        left: 15px;
        padding: 0 43px
    }

    .blog-home-first-section {
        position: relative
    }

    .owl-slider-new-top-cat .owl-nav .owl-next,
    .owl-slider-new-top-cat .owl-nav .owl-prev {
        top: 35%
    }

    .blog-widget-area .widget {
        padding: 25px 0;
        border-bottom: 1px solid rgba(0, 0, 0, .2)
    }

    .sign-up-process-section {
        padding-top: 40px
    }

    .covid-sign-up-head {
        font-size: 20px;
        font-weight: 700
    }

    .lockdown-offer-content {
        text-align: center
    }

    .why-signing-up-title {
        margin-top: 30px
    }

    .filter-expand-section {
        position: absolute;
        z-index: 99;
        width: 78%;
        right: 10%;
        max-width: 78%;
        margin-left: auto;
        padding-right: 9px
    }

    .footer-stickey-mobile {
        position: fixed;
        bottom: 0;
        width: 100%;
        z-index: 99999;
        display: none !important;
        background-color: #982620;
        padding: 10px 0
    }

    .modal-size {
        max-width: 760px
    }

    .new-popup-modal {
        border-radius: 20px
    }

    .pop-up-left-section {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 44%;
        flex: 0 0 44%;
        max-width: 44%;
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-left: 15px
    }

    .pop-up-right-section {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 56%;
        flex: 0 0 56%;
        max-width: 56%;
        position: relative;
        width: 100%;
        min-height: 1px;
        padding: 15px;
        border-radius: 20px
    }

    .pop-up-right-head {
        font-size: 28px;
        color: #000;
        line-height: 1;
        margin-top: 10px
    }

    .pop-up-right-form-section {
        margin-top: 30px
    }

    .form-radio-section {
        margin-bottom: 18px
    }

    .form-text-section {
        margin-bottom: 18px
    }

    .form-radio-label {
        color: #848484;
        font-size: 14px;
        font-weight: 500;
        line-height: 1
    }

    .form-radio-message {
        margin-top: 5px
    }

    .form-radio-message p {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        align-items: center;
        line-height: 1;
        color: #0f0f10;
        font-size: 14px
    }

    .form-select-message {
        flex: 1;
        padding-left: 5px;
        padding-top: 5px
    }

    .text-input-name {
        width: 100%
    }

    .pop-form-submit {
        border-radius: 5px;
        padding: 10px 50px;
        font-weight: 500;
        line-height: 1
    }

    .form-terms-cond {
        margin-top: 10px
    }

    .form-terms-cond p {
        font-size: 12px
    }

    .text-input:focus {
        outline: initial
    }

    span.form-select-img {
        max-width: 15px
    }

    .form-radio-gp {
        display: inline-block;
        margin-right: 5px
    }

    .form-radio-gp input[type=radio] {
        position: absolute;
        visibility: hidden;
        display: none
    }

    .form-radio-gp label {
        color: #666;
        display: inline-block;
        cursor: pointer;
        font-weight: 400;
        padding: 10px 8px;
        font-size: 14px;
        margin: 0;
        line-height: 1;
        border-radius: 8px;
        border: 1px solid #d0d5dd;
        background: #fff;
        box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05)
    }

    .form-radio-gp input[type=radio]:checked+label {
        color: #fff !important;
        background: #10676e
    }

    .form-radio-gp label+.form-radio-gp input[type=radio]+label {
        border-bottom: 1px solid #000
    }

    .radio-group {
        display: inline-block;
        margin-top: 10px;
        overflow: hidden
    }
}

@media (min-width:768px) and (max-width:1023px) {
    .get-a-quote-collection {
        margin-top: 8px;
        text-align: center
    }

    .common-link-button-new {
        background-color: #C85514;
        color: #fff;
        display: inline-block;
        padding: 20px 50px;
        -webkit-transform: perspective(1px) translateZ(0);
        -webkit-transition-duration: .3s;
        transition-duration: .3s;
        -webkit-transition-property: color, background-color;
        transition-property: color, background-color;
        line-height: 1;
        font-size: 16px
    }

    .common-link-button-new:hover {
        background-color: #062639;
        color: #fff;
        text-decoration: none;
        transition: .3s
    }

    .owl-carosal-arrow .owl-nav .owl-next,
    .owl-carosal-arrow .owl-nav .owl-prev {
        color: #ddd;
        font-size: 18px;
        position: absolute;
        top: 40%;
        text-align: center;
        line-height: 39px;
        bottom: 0;
        height: 29px;
        display: block
    }

    .owl-carosal-arrow .owl-dots .owl-dot span {
        width: 15px;
        height: 15px;
        border: 2px solid grey;
        background: 0 0;
        margin: 5px 4px
    }

    .owl-carosal-arrow .owl-dots .owl-dot:first-child span,
    .owl-carosal-arrow .owl-dots .owl-dot:last-child span {
        height: 7px;
        width: 7px;
        background: grey;
        border: 0
    }

    .owl-carosal-arrow .owl-dots .owl-dot.active span,
    .owl-carosal-arrow .owl-dots .owl-dot:hover span {
        background: grey;
        width: 15px;
        height: 15px;
        border: grey;
        margin: 5px 4px
    }

    .owl-carosal-arrow .owl-dots {
        text-align: center;
        -webkit-tap-highlight-color: transparent;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .owl-carosal-arrow .item {
        margin-bottom: 0
    }

    .contact-tab-fixed_new {
        position: fixed;
        top: 76px;
        width: 100%;
        background: #fff;
        z-index: 999;
        display: block;
        height: 114px
    }

    .contact-tab-without-noty {
        top: 78px
    }

    .owl-collecttion-listing .owl-stage {
        left: 0
    }

    .blog-home-first-section {
        position: relative;
        margin-bottom: 30px
    }

    .owl-slider-new-top-cat .owl-nav .owl-next,
    .owl-slider-new-top-cat .owl-nav .owl-prev {
        top: 40%
    }

    .blog-widget-area .widget {
        padding: 40px 0;
        border-bottom: 1px solid rgba(0, 0, 0, .2)
    }

    .fa-facebook:before,
    .fa-linkedin:before,
    .fa-twitter:before,
    .fa-whatsapp:before {
        margin-right: 0
    }

    .navbar-dark .header-navabar-nav-auto>li>.nav-link {
        font-size: 26px;
        padding: 30px 0;
        border-bottom: 1px solid #e2e2e2
    }

    .navbar-dark .header-navabar-nav-auto>li>.mob-header-icon {
        padding: 30px 0;
        border-bottom: 1px solid #e2e2e2;
        display: inherit
    }

    .header-navabar-nav-auto .dropdown-menu li a {
        font-size: 24px;
        color: #C85514;
        padding: 10px 40px
    }

    .plus-minus-toggle {
        cursor: pointer;
        height: 21px;
        position: relative;
        width: 21px;
        top: 45%
    }

    .plus-minus-toggle:after {
        transform: rotate(90deg)
    }

    .plus-minus-toggle:after,
    .plus-minus-toggle:before {
        background: #000;
        content: "";
        height: 5px;
        left: 0;
        position: absolute;
        top: 0;
        width: 21px;
        transition: transform .5s ease
    }

    .plus-minus-toggle:after {
        transform-origin: center
    }

    .plus-minus-toggle.collapsed-icon:after {
        transform: rotate(180deg)
    }

    .plus-minus-toggle.collapsed-icon:before {
        transform: rotate(180deg)
    }

    .sign-up-process-section {
        padding-top: 40px
    }

    .covid-sign-up-head {
        font-size: 28px;
        font-weight: 700
    }

    .lockdown-offer-content {
        text-align: center
    }

    .why-signing-up-title {
        margin-top: 30px
    }

    .filter-expand-section {
        position: absolute;
        z-index: 99;
        width: 100%;
        right: 0;
        max-width: 100%;
        margin-left: auto;
        padding-right: 0
    }

    .galler-thumbnail-tab-name-list {
        border: none;
        width: 100%;
        border-bottom: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: 0;
        margin-left: 0;
        text-align: center;
        margin-top: 15px
    }

    .galler-thumbnail-tab-name-list>li {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33%;
        flex: 0 0 33.33%;
        max-width: 33.33%;
        padding-left: 3px;
        padding-right: 3px
    }

    .galler-thumbnail-tab-name-list>li:first-child {
        padding-left: 0
    }

    .galler-thumbnail-tab-name-list>li:last-child {
        padding-right: 0
    }

    .galler-thumbnail-tab-name a {
        display: block;
        background-color: #c59767;
        padding: 10px 0;
        line-height: 1;
        color: #fff;
        border: 1px solid #c59767;
        font-size: 14px
    }

    li.galler-thumbnail-tab-name a.active {
        color: #c59767;
        background-color: transparent
    }

    .galler-thumbnail-tab-name a:hover {
        color: #c59767;
        background-color: transparent
    }

    .galler-thumbnail-image-list {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: auto;
        margin-left: auto;
        text-align: center;
        width: 100%;
        max-width: 70%
    }

    .galler-thumbnail-image {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 20%;
        flex: 0 0 20%;
        max-width: 20%;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 15px
    }

    .galler-thumbnail-image img {
        cursor: pointer
    }

    .gallery-title-content {
        margin-top: 20px
    }

    .gallery-title-content p {
        margin-bottom: 0
    }

    .modal-size {
        max-width: 700px
    }

    .new-popup-modal {
        border-radius: 20px
    }

    .pop-up-left-section {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 0;
        padding-left: 0;
        background-color: #27436c;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .pop-up-right-section {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
        padding: 30px 45px
    }

    .pop-up-right-head {
        font-size: 36px;
        color: #000;
        line-height: 1;
        margin-top: 10px
    }

    .pop-up-right-form-section {
        margin-top: 30px
    }

    .form-radio-section {
        margin-bottom: 18px
    }

    .form-text-section {
        margin-bottom: 18px
    }

    .form-radio-label {
        color: #848484;
        font-size: 18px;
        font-weight: 500;
        line-height: 1
    }

    .form-radio-message {
        margin-top: 0
    }

    .form-radio-message p {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        align-items: center;
        line-height: 1;
        color: #0f0f10;
        font-size: 20px
    }

    .form-select-message {
        flex: 1;
        padding-left: 5px;
        padding-top: 5px
    }

    #cntry_field,
    .text-input-name {
        width: 100%
    }

    .pop-form-submit {
        border-radius: 5px;
        padding: 10px 50px;
        font-weight: 500;
        line-height: 1
    }

    .form-terms-cond {
        margin-top: 10px;
        text-align: center
    }

    .form-terms-cond p {
        font-size: 12px
    }

    .text-input:focus {
        outline: initial
    }

    .new-popup-modal .modal-body {
        padding: 0
    }

    span.form-select-img {
        max-width: initial
    }

    .from-text-input {
        margin-bottom: 10px
    }

    .pop-form-submit {
        font-size: 24px
    }

    .submit-wraper {
        text-align: center
    }

    .lds-ring {
        display: inline-block;
        position: absolute;
        width: 20px;
        height: 20px;
        right: 10px;
        top: 15px
    }

    .model-popup-btn button {
        color: #fff;
        text-shadow: none;
        opacity: 1
    }

    .form-radio-gp {
        display: inline-block;
        margin-right: 5px;
        margin-bottom: 10px
    }

    .form-radio-gp input[type=radio] {
        position: absolute;
        visibility: hidden;
        display: none
    }

    .form-radio-gp label {
        color: #666;
        display: inline-block;
        cursor: pointer;
        font-weight: 400;
        padding: 10px 8px;
        font-size: 14px;
        margin: 0;
        line-height: 1;
        border-radius: 8px;
        border: 1px solid #d0d5dd;
        background: #fff;
        box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05)
    }

    .form-radio-gp input[type=radio]:checked+label {
        color: #fff !important;
        background: #10676e
    }

    .form-radio-gp label+.form-radio-gp input[type=radio]+label {
        border-bottom: 1px solid #000
    }

    .radio-group {
        display: inline-block;
        margin-top: 20px;
        overflow: hidden
    }
}

@media (min-width:480px) and (max-width:767px) {
    .get-a-quote-collection {
        margin-top: 8px;
        text-align: center
    }

    .common-link-button-new {
        background-color: #C85514;
        color: #fff;
        display: inline-block;
        padding: 15px 25px;
        -webkit-transform: perspective(1px) translateZ(0);
        -webkit-transition-duration: .3s;
        transition-duration: .3s;
        -webkit-transition-property: color, background-color;
        transition-property: color, background-color;
        line-height: 1;
        font-size: 16px
    }

    .common-link-button-new:hover {
        background-color: #062639;
        color: #fff;
        text-decoration: none;
        transition: .3s
    }

    .owl-carosal-arrow .owl-nav .owl-next,
    .owl-carosal-arrow .owl-nav .owl-prev {
        color: #ddd;
        font-size: 18px;
        position: absolute;
        top: 40%;
        text-align: center;
        line-height: 39px;
        bottom: 0;
        height: 29px;
        display: block
    }

    .owl-carosal-arrow .owl-dots .owl-dot span {
        width: 10px;
        height: 10px;
        border: 2px solid grey;
        background: 0 0;
        margin: 5px 4px
    }

    .owl-carosal-arrow .owl-dots .owl-dot:first-child span,
    .owl-carosal-arrow .owl-dots .owl-dot:last-child span {
        height: 4px;
        width: 4px;
        background: grey;
        border: 0
    }

    .owl-carosal-arrow .owl-dots .owl-dot.active span,
    .owl-carosal-arrow .owl-dots .owl-dot:hover span {
        background: grey;
        width: 10px;
        height: 10px;
        border: grey;
        margin: 5px 4px
    }

    .owl-carosal-arrow .owl-dots {
        text-align: center;
        -webkit-tap-highlight-color: transparent;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .owl-carosal-arrow .item {
        margin-bottom: 0
    }

    .contact-tab-fixed_new {
        position: fixed;
        top: 76px;
        width: 100%;
        background: #fff;
        z-index: 999;
        display: block;
        height: 92px
    }

    .contact-tab-without-noty {
        top: 105px
    }

    .blog-home-first-section {
        position: relative;
        margin-bottom: 10px
    }

    .owl-slider-new-top-cat .owl-nav .owl-next,
    .owl-slider-new-top-cat .owl-nav .owl-prev {
        top: 40%
    }

    .blog-widget-area .widget {
        padding: 20px 0;
        border-bottom: 1px solid rgba(0, 0, 0, .2)
    }

    .fa-facebook:before,
    .fa-linkedin:before,
    .fa-twitter:before,
    .fa-whatsapp:before {
        margin-right: 0
    }

    .navbar-dark .header-navabar-nav-auto>li>.nav-link {
        font-size: 22px;
        padding: 30px 0;
        border-bottom: 1px solid #e2e2e2
    }

    .navbar-dark .header-navabar-nav-auto>li>.mob-header-icon {
        padding: 30px 0;
        border-bottom: 1px solid #e2e2e2;
        display: inherit
    }

    .header-navabar-nav-auto .dropdown-menu li a {
        font-size: 18px;
        color: #C85514;
        padding: 10px 30px
    }

    .plus-minus-toggle {
        cursor: pointer;
        height: 21px;
        position: relative;
        width: 21px;
        top: 45%
    }

    .plus-minus-toggle:after {
        transform: rotate(90deg)
    }

    .plus-minus-toggle:after,
    .plus-minus-toggle:before {
        background: #6a6767;
        content: "";
        height: 5px;
        left: 0;
        position: absolute;
        top: 0;
        width: 21px;
        transition: transform .5s ease
    }

    .plus-minus-toggle:after {
        transform-origin: center
    }

    .plus-minus-toggle.collapsed-icon:after {
        transform: rotate(180deg)
    }

    .plus-minus-toggle.collapsed-icon:before {
        transform: rotate(180deg)
    }

    .sign-up-process-section {
        padding-top: 30px
    }

    .covid-sign-up-head {
        font-size: 22px;
        font-weight: 700
    }

    .lockdown-offer-content {
        text-align: center
    }

    .why-signing-up-title {
        margin-top: 30px
    }

    .filter-expand-section {
        position: absolute;
        z-index: 99;
        width: 100%;
        right: 0;
        max-width: 100%;
        margin-left: auto;
        padding-right: 0
    }

    form#ContactUsFormMainHome {
        margin-top: 20px
    }

    .close-btn-text {
        position: absolute;
        right: 10px;
        top: 15px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer
    }

    .user-step-1-cta button span {
        display: block;
        font-size: 12px
    }

    #owl-testimonial-for-you {
        margin-top: 20px
    }

    .galler-thumbnail-tab-name-list {
        border: none;
        width: 100%;
        border-bottom: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: 0;
        margin-left: 0;
        text-align: center;
        margin-top: 15px
    }

    .galler-thumbnail-tab-name-list>li {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33%;
        flex: 0 0 33.33%;
        max-width: 33.33%;
        padding-left: 3px;
        padding-right: 3px
    }

    .galler-thumbnail-tab-name-list>li:first-child {
        padding-left: 0
    }

    .galler-thumbnail-tab-name-list>li:last-child {
        padding-right: 0
    }

    .galler-thumbnail-tab-name a {
        display: block;
        background-color: #c59767;
        padding: 10px 0;
        line-height: 1;
        color: #fff;
        border: 1px solid #c59767;
        font-size: 14px
    }

    li.galler-thumbnail-tab-name a.active {
        color: #c59767;
        background-color: transparent
    }

    .galler-thumbnail-tab-name a:hover {
        color: #c59767;
        background-color: transparent
    }

    .galler-thumbnail-image-list {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: auto;
        margin-left: auto;
        text-align: center;
        width: 100%;
        max-width: 70%
    }

    .galler-thumbnail-image {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 20%;
        flex: 0 0 20%;
        max-width: 20%;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 15px
    }

    .galler-thumbnail-image img {
        cursor: pointer
    }

    .gallery-title-content {
        margin-top: 20px
    }

    .gallery-title-content p {
        margin-bottom: 0
    }

    .progress-bar-tooltip {
        position: relative;
        float: right
    }

    .progress {
        border-radius: 0;
        overflow: visible
    }

    .progress-bar-tooltip .arrow {
        left: 50% !important
    }

    #owl-how-it-works .owl-nav.disabled+.owl-dots {
        margin-top: 0
    }

    .modal-size {
        max-width: 100%;
        margin: auto;
        margin-left: 15px;
        margin-right: 15px
    }

    .new-popup-modal {
        border-radius: 20px
    }

    .pop-up-left-section {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 0;
        padding-left: 0;
        background-color: #27436c;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .pop-up-right-section {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
        padding: 30px
    }

    .pop-up-right-head {
        font-size: 24px;
        color: #000;
        line-height: 1;
        margin-top: 10px
    }

    .pop-up-right-form-section {
        margin-top: 30px
    }

    .form-radio-section {
        margin-bottom: 18px
    }

    .form-text-section {
        margin-bottom: 18px
    }

    .form-radio-label {
        color: #848484;
        font-size: 14px;
        font-weight: 500;
        line-height: 1
    }

    .form-radio-message {
        margin-top: 5px
    }

    .form-radio-message p {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        align-items: center;
        line-height: 1;
        color: #0f0f10;
        font-size: 14px
    }

    .form-select-message {
        flex: 1;
        padding-left: 5px;
        padding-top: 5px
    }

    .pop-form-submit {
        border-radius: 5px;
        padding: 10px 50px;
        font-weight: 500;
        line-height: 1
    }

    .form-terms-cond {
        margin-top: 10px;
        text-align: center
    }

    .form-terms-cond p {
        font-size: 12px
    }

    .text-input:focus {
        outline: initial
    }

    .new-popup-modal .modal-body {
        padding: 0
    }

    span.form-select-img {
        max-width: 15px
    }

    .from-text-input {
        margin-bottom: 10px
    }

    .pop-form-submit {
        font-size: 18px
    }

    .submit-wraper {
        text-align: center
    }

    .lds-ring {
        display: inline-block;
        position: absolute;
        width: 15px;
        height: 15px;
        right: 10px;
        top: 15px
    }

    .form-radio-gp {
        display: inline-block;
        margin-right: 5px;
        margin-bottom: 5px
    }

    .form-radio-gp input[type=radio] {
        position: absolute;
        visibility: hidden;
        display: none
    }

    .form-radio-gp label {
        color: #666;
        display: inline-block;
        cursor: pointer;
        font-weight: 400;
        padding: 10px 8px;
        font-size: 14px;
        margin: 0;
        line-height: 1;
        border-radius: 8px;
        border: 1px solid #d0d5dd;
        background: #fff;
        box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05)
    }

    .form-radio-gp input[type=radio]:checked+label {
        color: #fff !important;
        background: #10676e
    }

    .form-radio-gp label+.form-radio-gp input[type=radio]+label {
        border-bottom: 1px solid #000
    }

    .radio-group {
        display: inline-block;
        margin-top: 15px;
        overflow: hidden
    }
}

@media (min-width:320px) and (max-width:479px) {
    div#noty-holder {
        display: none;
        height: 0
    }

    .get-a-quote-collection {
        margin-top: 8px;
        text-align: center
    }

    .common-link-button-new {
        background-color: #C85514;
        color: #fff;
        display: inline-block;
        padding: 13px 16px;
        -webkit-transform: perspective(1px) translateZ(0);
        -webkit-transition-duration: .3s;
        transition-duration: .3s;
        -webkit-transition-property: color, background-color;
        transition-property: color, background-color;
        line-height: 1;
        font-size: 16px
    }

    .common-link-button-new:hover {
        background-color: #062639;
        color: #fff;
        text-decoration: none;
        transition: .3s
    }

    .owl-carosal-arrow .owl-nav .owl-next,
    .owl-carosal-arrow .owl-nav .owl-prev {
        color: #ddd;
        font-size: 18px;
        position: absolute;
        top: 40%;
        text-align: center;
        line-height: 39px;
        bottom: 0;
        height: 29px;
        display: block
    }

    .owl-carosal-arrow .owl-dots .owl-dot span {
        width: 10px;
        height: 10px;
        border: 2px solid grey;
        background: 0 0;
        margin: 5px 4px
    }

    .owl-carosal-arrow .owl-dots .owl-dot:first-child span,
    .owl-carosal-arrow .owl-dots .owl-dot:last-child span {
        height: 4px;
        width: 4px;
        background: grey;
        border: 0
    }

    .owl-carosal-arrow .owl-dots .owl-dot.active span,
    .owl-carosal-arrow .owl-dots .owl-dot:hover span {
        background: grey;
        width: 10px;
        height: 10px;
        border: grey;
        margin: 5px 4px
    }

    .owl-carosal-arrow .owl-dots {
        text-align: center;
        -webkit-tap-highlight-color: transparent;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .owl-carosal-arrow .item {
        margin-bottom: 0
    }

    .contact-tab-fixed_new {
        position: fixed;
        top: 58px;
        width: 100%;
        background: #fff;
        z-index: 999;
        display: block;
        height: 74px
    }

    .project-template-wrap.contact-tab-without-noty {
        top: 0
    }

    .project-template-wrap.contact-tab-without-noty.contact-tab-fixed_new {
        top: 78px;
        height: auto;
        left: 14px
    }

    .contact-tab-without-noty {
        top: 64px
    }

    .blog-home-first-section {
        position: relative;
        margin-bottom: 10px
    }

    .owl-slider-new-top-cat .owl-nav .owl-next,
    .owl-slider-new-top-cat .owl-nav .owl-prev {
        top: 40%
    }

    .blog-widget-area .widget {
        padding: 20px 0;
        border-bottom: 1px solid rgba(0, 0, 0, .2)
    }

    .fa-facebook:before,
    .fa-linkedin:before,
    .fa-twitter:before,
    .fa-whatsapp:before {
        margin-right: 0
    }

    .custom-logo-link img {
        width: 150px
    }

    .navbar-dark .header-navabar-nav-auto>li>.nav-link {
        font-size: 18px;
        padding: 20px 0;
        border-bottom: 1px solid #e2e2e2
    }

    .navbar-dark .header-navabar-nav-auto>li>.mob-header-icon {
        padding: 20px 0;
        border-bottom: 1px solid #e2e2e2;
        display: inherit
    }

    .header-navabar-nav-auto .dropdown-menu li a {
        font-size: 14px;
        color: #C85514;
        padding: 10px 20px
    }

    .plus-minus-toggle {
        cursor: pointer;
        height: 14px;
        position: relative;
        width: 14px;
        top: 45%
    }

    .plus-minus-toggle:after {
        transform: rotate(90deg)
    }

    .plus-minus-toggle:after,
    .plus-minus-toggle:before {
        background: #6a6767;
        content: "";
        height: 3px;
        left: 0;
        position: absolute;
        top: 0;
        width: 14px;
        transition: transform .5s ease
    }

    .plus-minus-toggle:after {
        transform-origin: center
    }

    .plus-minus-toggle.collapsed-icon:after {
        transform: rotate(180deg)
    }

    .plus-minus-toggle.collapsed-icon:before {
        transform: rotate(180deg)
    }

    .header-navabar-nav ul li {
        padding-top: 10px;
        padding-bottom: 0
    }

    .header-navabar-nav ul li:first-child {
        padding-top: 0
    }

    .sign-up-process-section {
        padding-top: 30px
    }

    .covid-sign-up-head {
        font-size: 18px;
        font-weight: 700
    }

    .lockdown-offer-content {
        text-align: center
    }

    .why-signing-up-title {
        margin-top: 30px
    }

    .filter-expand-section {
        position: absolute;
        z-index: 99;
        width: 100%;
        right: 0;
        max-width: 100%;
        margin-left: auto;
        padding-right: 0
    }

    form#ContactUsFormMainHome {
        margin-top: 20px
    }

    .close-btn-text {
        position: absolute;
        right: 10px;
        top: 15px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer
    }

    .user-step-1-cta button span {
        display: block;
        font-size: 10px
    }

    #owl-testimonial-for-you {
        margin-top: 20px
    }

    .galler-thumbnail-tab-name-list {
        border: none;
        width: 100%;
        border-bottom: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: 0;
        margin-left: 0;
        text-align: center;
        margin-top: 15px
    }

    .galler-thumbnail-tab-name-list>li {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33%;
        flex: 0 0 33.33%;
        max-width: 33.33%;
        padding-left: 3px;
        padding-right: 3px
    }

    .galler-thumbnail-tab-name-list>li:first-child {
        padding-left: 0
    }

    .galler-thumbnail-tab-name-list>li:last-child {
        padding-right: 0
    }

    .galler-thumbnail-tab-name a {
        display: block;
        background-color: #c59767;
        padding: 5px 0;
        line-height: 1;
        color: #fff;
        border: 1px solid #c59767;
        font-size: 11px
    }

    li.galler-thumbnail-tab-name a.active {
        color: #c59767;
        background-color: transparent
    }

    .galler-thumbnail-tab-name a:hover {
        color: #c59767;
        background-color: transparent
    }

    .galler-thumbnail-image-list {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: auto;
        margin-left: auto;
        text-align: center;
        width: 100%;
        max-width: 70%
    }

    .galler-thumbnail-image {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 20%;
        flex: 0 0 20%;
        max-width: 20%;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 15px
    }

    .galler-thumbnail-image img {
        cursor: pointer
    }

    .gallery-title-content {
        margin-top: 20px
    }

    .gallery-title-content p {
        margin-bottom: 0
    }

    .progress-bar-tooltip {
        position: relative;
        float: right
    }

    .progress {
        border-radius: 0;
        overflow: visible
    }

    .progress-bar-tooltip .arrow {
        left: 50% !important
    }

    #owl-how-it-works .owl-nav.disabled+.owl-dots {
        margin-top: 0
    }

    .modal-size {
        max-width: 100%;
        margin: auto;
        margin-left: 10px;
        margin-right: 10px
    }

    .new-popup-modal {
        border-radius: 20px
    }

    .pop-up-left-section {
        flex: 0 0 100%;
        max-width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        height: 130px;
        width: 100%;
        object-fit: cover
    }

    .pop-right-image-mobile {
        padding: 0;
        height: 100%
    }

    .pop-right-image-mobile img {
        width: 100%;
        border-radius: 15px 15px 0 0 !important;
        height: 100%;
        object-fit: cover
    }

    .pop-up-right-section {
        flex: 100%;
        max-width: 100%;
        margin: 0 20px;
        padding: 0
    }

    .pop-up-right-head {
        font-size: 20px;
        margin-top: 0;
        background: #1a98a4;
        margin: 0 -5px;
        text-align: center;
        padding: 5px;
        color: #fff
    }

    .pop-up-right-form-section {
        margin-top: 20px
    }

    .form-radio-section {
        margin-bottom: 18px
    }

    .form-text-section {
        margin-bottom: 18px
    }

    .form-radio-label {
        color: #848484;
        font-size: 12px;
        font-weight: 500;
        line-height: 1
    }

    .form-radio-message {
        margin-top: 5px;
        display: none
    }

    .form-radio-message p {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        align-items: center;
        line-height: 1;
        color: #0f0f10;
        font-size: 12px
    }

    .form-select-message {
        flex: 1;
        padding-left: 5px;
        padding-top: 5px
    }

    .pop-form-submit {
        border-radius: 5px;
        padding: 10px 50px;
        font-weight: 500;
        line-height: 1
    }

    .form-terms-cond {
        margin-top: 10px;
        text-align: center
    }

    .form-terms-cond p {
        font-size: 12px
    }

    .text-input:focus {
        outline: initial
    }

    .new-popup-modal .modal-body {
        padding: 0
    }

    span.form-select-img {
        max-width: 15px
    }

    .from-text-input {
        margin-bottom: 10px
    }

    .pop-form-submit {
        font-size: 20px;
        padding: 10px;
        font-weight: 500;
        display: inline-block
    }

    .submit-wraper {
        text-align: center
    }

    .form-radio-gp {
        display: inline-block;
        margin-right: 6px;
        margin-bottom: 3px
    }

    .form-radio-gp input[type=radio] {
        position: absolute;
        visibility: hidden;
        display: none
    }

    .input-group-text {
        border-right: none;
        background: #fff;
        border: 1px solid #d0d5dd;
        background: #fff;
        box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05);
        width: 100%;
        color: #667085;
        font-size: 16px;
        border-radius: 8px
    }

    .text-input-mobile {
        border: 1px solid #d0d5dd;
        background: #fff;
        box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05);
        width: 100%;
        padding: 7px;
        color: #667085;
        font-size: 16px;
        border-left: none;
        height: 40px;
        border-radius: 0 10px 10px 0 !important
    }

    .form-property-select {
        height: 40px;
        border-radius: 8px;
        border: 1px solid #d0d5dd;
        background: #fff;
        box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05);
        width: 100%;
        padding: 5px 10px;
        color: #667085;
        font-size: 16px;
        -webkit-appearance: none !important;
        -moz-appearance: none !important;
        width: 100%;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAUCAMAAACtdX32AAAAdVBMVEUAAAD///8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAhMdQaAAAAJ3RSTlMAAAECAwQGBwsOFBwkJTg5RUZ4eYCHkJefpaytrsXGy8zW3+Do8vNn0bsyAAAAYElEQVR42tXROwJDQAAA0Ymw1p9kiT+L5P5HVEi3qJn2lcPjtIuzUIJ/rhIGy762N3XaThqMN1ZPALsZPEzG1x8LrFL77DHBnEMxBewz0fJ6LyFHTPL7xhwzWYrJ9z22AqmQBV757MHfAAAAAElFTkSuQmCC);
        background-position: 100%;
        background-repeat: no-repeat
    }

    .form-property-select.form-control {
        padding: 0 24px
    }

    .form-property-select::after {
        right: 10px;
        position: absolute
    }

    .form-property-select .option {
        font-size: 13px
    }

    .form-radio-gp label {
        padding: 6px;
        border: 1px solid #d0d5dd;
        font-size: 11px
    }

    .form-radio-gp input[type=radio]:checked+label {
        color: #fff !important;
        background: #10676e;
        border: 1px solid #666
    }

    .form-radio-gp label+.form-radio-gp input[type=radio]+label {
        border-bottom: 1px solid #000
    }

    .radio-group {
        display: inline-block;
        margin-top: 10px;
        overflow: hidden
    }

    .lds-ring {
        display: inline-block;
        position: absolute;
        width: 12px;
        height: 12px;
        right: 10px;
        top: 10px
    }
}

.pop-right-image-desktop {
    height: 100%
}

.pop-right-image-desktop img {
    border-radius: 20px 0 0 20px;
    max-height: 100%;
    object-fit: fill;
    height: 100%
}

@media (max-width:1023px) {
    .custom-navbar-collapse {
        position: absolute;
        top: 64px;
        left: 0;
        padding-left: 0;
        padding-right: 0;
        padding-bottom: 15px;
        width: 80%;
        background-color: #fff;
        z-index: 999;
        overflow-y: scroll;
        height: calc(100vh - 64px);
        display: block
    }

    .custom-navbar-collapse.collapsing {
        height: auto;
        -webkit-transition: left .3s;
        -o-transition: left .3s;
        -moz-transition: left .3s;
        transition: left .3s ease;
        left: -100%
    }

    .custom-navbar-collapse.show {
        left: 0;
        -webkit-transition: left .3s ease-in;
        -o-transition: left .3s ease-in;
        -moz-transition: left .3s ease-in;
        transition: left .3s ease-in
    }

    .custom-dropdown-item {
        display: block;
        width: 100%;
        padding: 1rem;
        clear: both;
        font-weight: 400;
        color: #1c1919;
        text-align: inherit;
        white-space: normal;
        background-color: transparent;
        border: 0;
        font-size: 14px;
        border-bottom: 1px solid #e9ecef
    }

    .custom-dropdown-item.active,
    .custom-dropdown-item:active {
        color: #1c1919;
        text-decoration: none;
        background-color: #e1e1e1;
        border-right: 3px solid #C85514
    }

    .pop-right-image-desktop {
        display: none
    }
}

@media (max-width:990px) {
    .header-navabar-nav-auto .dropdown-menu {
        display: none
    }

    .menu-item-has-children {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .header-navabar-nav-auto .dropdown-menu {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        border-radius: 0;
        border: none;
        align-items: center
    }

    .header-navabar-nav-auto .dropdown-toggle {
        color: #C85514;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 95%;
        flex: 0 0 95%;
        max-width: 95%
    }

    .mob-header-icon {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 5%;
        flex: 0 0 5%;
        max-width: 5%
    }

    .header-navabar-nav-auto .dropdown-toggle::after {
        display: none
    }

    .header-navabar-nav-auto {
        line-height: 1
    }

    .header-navabar-nav .header-navabar-nav-auto li {
        padding-top: 0
    }

    .header-navabar-nav.show {
        display: block;
        overflow-y: scroll;
        max-height: 100%
    }

    .header-navabar-nav-auto .dropdown-item:focus,
    .header-navabar-nav-auto .dropdown-item:hover {
        color: #d2b088;
        text-decoration: none;
        background-color: #f1f1f1;
        outline: initial
    }

    .header-navabar-nav-auto .dropdown-item.active,
    .header-navabar-nav-auto .dropdown-item:active {
        color: #d2b088;
        text-decoration: none;
        background-color: #f1f1f1
    }
}

@media (min-width:991px) {
    .header-navabar-nav-auto .dropdown:hover .dropdown-menu {
        display: block
    }

    .header-navabar-nav-auto .dropdown-menu {
        border-radius: 0;
        border-top: 4px solid #d2b088;
        background-color: #f1f1f1
    }

    .header-navabar-nav-auto .dropdown-menu li a {
        color: #C85514
    }

    .header-navabar-nav-auto .dropdown-item:focus,
    .header-navabar-nav-auto .dropdown-item:hover {
        color: #d2b088;
        text-decoration: none;
        background-color: #f1f1f1;
        outline: initial
    }

    .header-navabar-nav-auto .dropdown-item.active,
    .header-navabar-nav-auto .dropdown-item:active {
        color: #d2b088;
        text-decoration: none;
        background-color: #f1f1f1
    }
}

@media (max-width:767px) {
    .custom-blg-ht {
        height: 100%
    }

    .featured-blog-cls {
        min-height: 70vh
    }
}

@media (min-width:320px) and (max-width:480px) {
    .form-terms-cond p {
        color: #000
    }
}

@media (min-width:768px) {
    .pop-right-image-mobile {
        display: none
    }

    .form-radio-section {
        margin-bottom: 0
    }

    .radio-group {
        display: inline-block;
        margin-top: 10px;
        overflow: hidden
    }
}

@media (min-width:768px) and (max-width:1023px) {
    .whatsapp.cta-header-btn {
        display: none
    }
}

select option {
    color: #000;
    background-color: #fff
}

.open-btn1 {
    position: absolute;
    top: 26px;
    right: 74px;
    background-size: 20px 20px;
    cursor: pointer;
    display: none
}

.open-btn1 i {
    color: #ababab
}

.open-btn1.btnactive {
    background: var(--wpr-bg-a3e8293f-a4c5-4697-9879-5774307a3dde) 15px center no-repeat;
    background-size: 18px 18px
}

#search-wrap {
    position: absolute;
    top: 150px;
    right: 20px;
    z-index: -1;
    opacity: 0;
    width: 0;
    transition: all .4s;
    border-radius: 5px
}

#search-wrap.panelactive {
    display: block;
    opacity: 1;
    z-index: 3;
    width: 348px;
    padding: 20px;
    top: 60px;
    background: #fff
}

#search-wrap input {
    -webkit-appearance: none;
    outline: 0;
    cursor: pointer;
    color: #666
}

#search-wrap input[type=text] {
    width: 100%;
    border: none;
    border-bottom: 2px solid #ccc;
    transition: all .5s;
    letter-spacing: .05em;
    height: 46px;
    padding: 10px
}

#search-wrap input[type=text]:focus {
    background: #eee
}

#search-wrap input[type=submit] {
    position: absolute;
    top: 10px;
    right: 30px;
    background: var(--wpr-bg-4e8c7e61-4860-46ec-aa6c-45410a853c9d) right no-repeat;
    background-size: 20px 20px;
    width: 30px;
    height: 60px;
    font-size: 0;
    border: none
}

.footerForm .select2-selection--single {
    background: 0 0 !important;
    border: none !important;
    border-bottom: 3px solid #fff !important;
    border-radius: 0 !important;
    font-size: 16px !important;
    color: #fff !important;
    background-position-x: 100% !important;
    background-size: 25% !important
}

.contactForm .select2-selection--single {
    background: #f6f5f5 !important;
    border: none !important;
    border-bottom: 3px solid #fff !important;
    border-radius: 5px !important;
    font-size: 16px !important;
    color: #fff !important;
    background-position-x: 100% !important;
    background-size: 25% !important;
    height: 40px;
    padding: 4px
}

.guideForm .select2-selection--single {
    background: #fff !important;
    border: 1px solid #ced4da !important;
    border-radius: 5px !important;
    font-size: 16px !important;
    color: #fff !important;
    background-position-x: 100% !important;
    background-size: 25% !important;
    height: 38px !important;
    padding: 4px
}

.footerForm .select2-selection--single p {
    color: #fff !important
}

.select2-results__options {
    max-height: 140px !important;
    overflow-x: hidden !important
}

.select2-results__option {
    padding: 0 5px !important
}

.select2-container--default .select2-results__option[aria-selected=true] {
    background: #fff
}

.footerForm .select2-container--default .select2-results__option--highlighted[aria-selected] {
    background: #b3d7ff !important
}

.select2-results__option p {
    line-height: 23px !important;
    font-size: 12pt !important
}

.footerForm .select2-selection--single .select2-selection__arrow b {
    border-color: #fff transparent transparent !important
}

.footerForm .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
    border-color: transparent transparent #fff !important
}

.select2-dropdown {
    z-index: 9999999
}

.contactForm .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 35px !important
}

.guideForm .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 35px !important
}

@media (min-width:320px) and (max-width:479px) {
    .footerForm .select2-selection--single {
        border-bottom: 3px solid #cfcece !important
    }

    .contactForm .select2-selection--single {
        border-bottom: 3px solid #cfcece !important
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        padding-right: 0 !important
    }
}

@media (min-width:480px) and (max-width:767px) {
    .footerForm .select2-selection--single {
        border-bottom: 3px solid #cfcece !important
    }

    .contactForm .select2-selection--single {
        border-bottom: 3px solid #cfcece !important
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        padding-right: 0 !important
    }
}

.input-group-text {
    border-right: none;
    background: #fff;
    border: 1px solid #d0d5dd;
    background: #fff;
    box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05);
    width: 100%;
    color: #667085;
    font-size: 16px;
    border-radius: 8px
}

.text-input-mobile {
    border: 1px solid #d0d5dd;
    background: #fff;
    box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05);
    width: 100%;
    padding: 7px;
    color: #667085;
    font-size: 16px;
    border-left: none;
    height: 40px;
    border-radius: 0 10px 10px 0 !important
}

.form-property-select {
    height: 40px;
    border-radius: 8px;
    border: 1px solid #d0d5dd;
    background: #fff;
    box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05);
    width: 100%;
    padding: 5px 10px;
    color: #667085;
    font-size: 16px;
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    width: 100%;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAUCAMAAACtdX32AAAAdVBMVEUAAAD///8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAhMdQaAAAAJ3RSTlMAAAECAwQGBwsOFBwkJTg5RUZ4eYCHkJefpaytrsXGy8zW3+Do8vNn0bsyAAAAYElEQVR42tXROwJDQAAA0Ymw1p9kiT+L5P5HVEi3qJn2lcPjtIuzUIJ/rhIGy762N3XaThqMN1ZPALsZPEzG1x8LrFL77DHBnEMxBewz0fJ6LyFHTPL7xhwzWYrJ9z22AqmQBV757MHfAAAAAElFTkSuQmCC);
    background-position: 100%;
    background-repeat: no-repeat
}

.form-property-select.form-control {
    padding: 0 24px
}

.form-property-select::after {
    right: 10px;
    position: absolute
}

.form-property-select .option {
    font-size: 13px
}

.mobile-dropdown {
    height: 40px
}

.text-input-name {
    height: 40px;
    border-radius: 8px;
    border: 1px solid #d0d5dd;
    background: #fff;
    box-shadow: 0 1px 2px 0 rgba(16, 24, 40, .05);
    width: 100%;
    padding: 5px 10px;
    color: #667085;
    font-size: 16px
}

.text-input-name::placeholder {
    color: #667085
}

.text-input-mobile::placeholder {
    color: #667085
}

.form-terms-cond {
    text-align: center
}

.form-radio-message p {
    padding: 0;
    margin: 0 0 5px;
    line-height: 1;
    font-size: 10px
}

.form-terms-cond p {
    margin: 0 !important;
    padding: 0 !important
}

.modal-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: #000;
    opacity: .5
}

.form-radio-gp {
    margin-bottom: 1%
}

.footerForm .select2-selection--single {
    width: 85px
}

#contactUsModal {
    z-index: 999999
}

.galler-thumbnail-image {
    max-width: 10%;
    padding-left: 3px;
    padding-right: 3px;
    margin-top: 6px
}

.tab-content.gallary-image-tab-content {
    max-height: 300px;
    overflow-y: scroll
}

.tooltip-inner {
    background-color: #C85514
}

@media (max-width:990px) {
    .header-navabar-nav.show {
        display: block;
        overflow-y: scroll;
        max-height: 70vh
    }
}

@media(min-width:1280px) and (max-width:1365px) {
    .navbar-dark .navbar-nav .nav-link {
        color: #C85514 !important;
        font-size: 14px;
        padding: 0 13px 0 0
    }
}

@media (max-width:479px) and (min-width:320px) {
    .form-radio-gp {
        margin-right: 5px !important
    }

    .form-radio-gp label {
        font-size: 10px
    }

    .navbar-dark .header-navabar-nav-auto>li>.mob-header-icon {
        padding: 0 !important
    }

    .galler-thumbnail-image {
        max-width: 14%;
        padding-left: 3px;
        padding-right: 3px;
        margin-top: 3px
    }

    .galler-thumbnail-image-list {
        max-width: 100%
    }

    .tab-content.gallary-image-tab-content {
        max-height: 150px
    }
}

.page-id-10103 .sign-up-process-section {
    padding: 30px 0
}

.page-id-10103 li.galler-thumbnail-tab-name:nth-child(4) {
    max-width: 50%;
    flex: 0 0 50%
}

.page-id-10103 li.galler-thumbnail-tab-name:nth-child(5) {
    max-width: 50%;
    flex: 0 0 50%
}

.page-id-10103 .galler-thumbnail-tab-name-list>li {
    margin-bottom: 10px
}

.owl-carousel .owl-item .owl-lazy {
    opacity: 1
}

@media (min-width:360px) and (max-width:479px) {
    .iti__country-list {
        top: 29rem !important
    }

    button.navbar-toggler {
        float: right;
        right: 24px
    }

    .custom-logo-link {
        width: 262px
    }

    .footer-stickey-mobile {
        height: 76px
    }
}

.iti-mobile .iti--container {
    z-index: 1000000 !important
}

.iti-mobile .iti__country-list {
    max-height: 30%
}

@media (min-width:320px) and (max-width:479px) {
    .model-popup-btn .close {
        color: #939090 !important
    }

    .iti__country-list {
        height: 229px;
        top: 253px;
        left: -10px
    }
}

.contact-us-location-listing {
    overflow: auto hidden;
    flex-wrap: nowrap;
    display: flex
}

@media(min-width:768px) {
    #contact-us-location-listing li:nth-child(4) {
        width: 200px
    }

    #contact-us-location-listing {
        height: 60px !important
    }
}

.StickySidebar:after {
    content: "";
    display: table;
    clear: both
}

@media(min-width :769px) {
    #nav {
        margin-top: 0
    }
}

.footer-stickey-mobile {
    background-color: #C85514 !important
}

.floting-cta-cont {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    text-align: center
}

.floting-cta-cont img {
    width: 40%;
    font-size: 0
}

.footer-stickey-mobile {
    background-color: #fff;
    -webkit-box-shadow: 0 -3px 3px rgba(50, 50, 50, .3);
    -moz-box-shadow: 0 -3px 3px rgba(50, 50, 50, .3);
    box-shadow: 0 -3px 3px rgba(50, 50, 50, .3)
}

.floting-cta-cont p {
    margin-bottom: 0;
    font-size: 12px;
    color: #fff;
    font-weight: 500
}

.select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle
}

.select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 28px;
    user-select: none;
    -webkit-user-select: none
}

.select2-container .select2-selection--single .select2-selection__rendered {
    display: block;
    padding-left: 8px;
    padding-right: 20px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.select2-container .select2-selection--single .select2-selection__clear {
    position: relative
}

.select2-container[dir=rtl] .select2-selection--single .select2-selection__rendered {
    padding-right: 8px;
    padding-left: 20px
}

.select2-container .select2-selection--multiple {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    min-height: 32px;
    user-select: none;
    -webkit-user-select: none
}

.select2-container .select2-selection--multiple .select2-selection__rendered {
    display: inline-block;
    overflow: hidden;
    padding-left: 8px;
    text-overflow: ellipsis;
    white-space: nowrap
}

.select2-container .select2-search--inline {
    float: left
}

.select2-container .select2-search--inline .select2-search__field {
    box-sizing: border-box;
    border: none;
    font-size: 100%;
    margin-top: 5px;
    padding: 0
}

.select2-container .select2-search--inline .select2-search__field::-webkit-search-cancel-button {
    -webkit-appearance: none
}

.select2-dropdown {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
    box-sizing: border-box;
    display: block;
    position: absolute;
    left: -100000px;
    width: 100%;
    z-index: 1051
}

.select2-results {
    display: block
}

.select2-results__options {
    list-style: none;
    margin: 0;
    padding: 0
}

.select2-results__option {
    padding: 6px;
    user-select: none;
    -webkit-user-select: none
}

.select2-results__option[aria-selected] {
    cursor: pointer
}

.select2-container--open .select2-dropdown {
    left: 0
}

.select2-container--open .select2-dropdown--above {
    border-bottom: none;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0
}

.select2-container--open .select2-dropdown--below {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.select2-search--dropdown {
    display: block;
    padding: 4px
}

.select2-search--dropdown .select2-search__field {
    padding: 4px;
    width: 100%;
    box-sizing: border-box
}

.select2-search--dropdown .select2-search__field::-webkit-search-cancel-button {
    -webkit-appearance: none
}

.select2-search--dropdown.select2-search--hide {
    display: none
}

.select2-close-mask {
    border: 0;
    margin: 0;
    padding: 0;
    display: block;
    position: fixed;
    left: 0;
    top: 0;
    min-height: 100%;
    min-width: 100%;
    height: auto;
    width: auto;
    opacity: 0;
    z-index: 99;
    background-color: #fff
}

.select2-hidden-accessible {
    border: 0 !important;
    clip: rect(0 0 0 0) !important;
    height: 1px !important;
    margin: -1px !important;
    overflow: hidden !important;
    padding: 0 !important;
    position: absolute !important;
    width: 1px !important
}

.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 28px
}

.select2-container--default .select2-selection--single .select2-selection__clear {
    cursor: pointer;
    float: right;
    font-weight: 700
}

.select2-container--default .select2-selection--single .select2-selection__placeholder {
    color: #999
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 26px;
    position: absolute;
    top: 1px;
    right: 1px;
    width: 20px
}

.select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: #888 transparent transparent;
    border-style: solid;
    border-width: 5px 4px 0;
    height: 0;
    left: 50%;
    margin-left: -4px;
    margin-top: -2px;
    position: absolute;
    top: 50%;
    width: 0
}

.select2-container--default[dir=rtl] .select2-selection--single .select2-selection__clear {
    float: left
}

.select2-container--default[dir=rtl] .select2-selection--single .select2-selection__arrow {
    left: 1px;
    right: auto
}

.select2-container--default.select2-container--disabled .select2-selection--single {
    background-color: #eee;
    cursor: default
}

.select2-container--default.select2-container--disabled .select2-selection--single .select2-selection__clear {
    display: none
}

.select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
    border-color: transparent transparent #888;
    border-width: 0 4px 5px
}

.select2-container--default .select2-selection--multiple {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: text
}

.select2-container--default .select2-selection--multiple .select2-selection__rendered {
    box-sizing: border-box;
    list-style: none;
    margin: 0;
    padding: 0 5px;
    width: 100%
}

.select2-container--default .select2-selection--multiple .select2-selection__rendered li {
    list-style: none
}

.select2-container--default .select2-selection--multiple .select2-selection__placeholder {
    color: #999;
    margin-top: 5px;
    float: left
}

.select2-container--default .select2-selection--multiple .select2-selection__clear {
    cursor: pointer;
    float: right;
    font-weight: 700;
    margin-top: 5px;
    margin-right: 10px
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #e4e4e4;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: default;
    float: left;
    margin-right: 5px;
    margin-top: 5px;
    padding: 0 5px
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    color: #999;
    cursor: pointer;
    display: inline-block;
    font-weight: 700;
    margin-right: 2px
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
    color: #333
}

.select2-container--default[dir=rtl] .select2-selection--multiple .select2-search--inline,
.select2-container--default[dir=rtl] .select2-selection--multiple .select2-selection__choice,
.select2-container--default[dir=rtl] .select2-selection--multiple .select2-selection__placeholder {
    float: right
}

.select2-container--default[dir=rtl] .select2-selection--multiple .select2-selection__choice {
    margin-left: 5px;
    margin-right: auto
}

.select2-container--default[dir=rtl] .select2-selection--multiple .select2-selection__choice__remove {
    margin-left: 2px;
    margin-right: auto
}

.select2-container--default.select2-container--focus .select2-selection--multiple {
    border: 1px solid #000;
    outline: 0
}

.select2-container--default.select2-container--disabled .select2-selection--multiple {
    background-color: #eee;
    cursor: default
}

.select2-container--default.select2-container--disabled .select2-selection__choice__remove {
    display: none
}

.select2-container--default.select2-container--open.select2-container--above .select2-selection--multiple,
.select2-container--default.select2-container--open.select2-container--above .select2-selection--single {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple,
.select2-container--default.select2-container--open.select2-container--below .select2-selection--single {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0
}

.select2-container--default .select2-search--dropdown .select2-search__field {
    border: 1px solid #aaa
}

.select2-container--default .select2-search--inline .select2-search__field {
    background: 0 0;
    border: none;
    outline: 0;
    box-shadow: none;
    -webkit-appearance: textfield
}

.select2-container--default .select2-results>.select2-results__options {
    max-height: 200px;
    overflow-y: auto
}

.select2-container--default .select2-results__option[role=group] {
    padding: 0
}

.select2-container--default .select2-results__option[aria-disabled=true] {
    color: #999
}

.select2-container--default .select2-results__option[aria-selected=true] {
    background-color: #ddd
}

.select2-container--default .select2-results__option .select2-results__option {
    padding-left: 1em
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__group {
    padding-left: 0
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -1em;
    padding-left: 2em
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -2em;
    padding-left: 3em
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -3em;
    padding-left: 4em
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -4em;
    padding-left: 5em
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -5em;
    padding-left: 6em
}

.select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #5897fb;
    color: #fff
}

.select2-container--default .select2-results__group {
    cursor: default;
    display: block;
    padding: 6px
}

.select2-container--classic .select2-selection--single {
    background-color: #f7f7f7;
    border: 1px solid #aaa;
    border-radius: 4px;
    outline: 0;
    background-image: -webkit-linear-gradient(top, #fff 50%, #eee 100%);
    background-image: -o-linear-gradient(top, #fff 50%, #eee 100%);
    background-image: linear-gradient(to bottom, #fff 50%, #eee 100%);
    background-repeat: repeat-x
}

.select2-container--classic .select2-selection--single:focus {
    border: 1px solid #5897fb
}

.select2-container--classic .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 28px
}

.select2-container--classic .select2-selection--single .select2-selection__clear {
    cursor: pointer;
    float: right;
    font-weight: 700;
    margin-right: 10px
}

.select2-container--classic .select2-selection--single .select2-selection__placeholder {
    color: #999
}

.select2-container--classic .select2-selection--single .select2-selection__arrow {
    background-color: #ddd;
    border: none;
    border-left: 1px solid #aaa;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    height: 26px;
    position: absolute;
    top: 1px;
    right: 1px;
    width: 20px;
    background-image: -webkit-linear-gradient(top, #eee 50%, #ccc 100%);
    background-image: -o-linear-gradient(top, #eee 50%, #ccc 100%);
    background-image: linear-gradient(to bottom, #eee 50%, #ccc 100%);
    background-repeat: repeat-x
}

.select2-container--classic .select2-selection--single .select2-selection__arrow b {
    border-color: #888 transparent transparent;
    border-style: solid;
    border-width: 5px 4px 0;
    height: 0;
    left: 50%;
    margin-left: -4px;
    margin-top: -2px;
    position: absolute;
    top: 50%;
    width: 0
}

.select2-container--classic[dir=rtl] .select2-selection--single .select2-selection__clear {
    float: left
}

.select2-container--classic[dir=rtl] .select2-selection--single .select2-selection__arrow {
    border: none;
    border-right: 1px solid #aaa;
    border-radius: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    left: 1px;
    right: auto
}

.select2-container--classic.select2-container--open .select2-selection--single {
    border: 1px solid #5897fb
}

.select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow {
    background: 0 0;
    border: none
}

.select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow b {
    border-color: transparent transparent #888;
    border-width: 0 4px 5px
}

.select2-container--classic.select2-container--open.select2-container--above .select2-selection--single {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-image: -webkit-linear-gradient(top, #fff 0, #eee 50%);
    background-image: -o-linear-gradient(top, #fff 0, #eee 50%);
    background-image: linear-gradient(to bottom, #fff 0, #eee 50%);
    background-repeat: repeat-x
}

.select2-container--classic.select2-container--open.select2-container--below .select2-selection--single {
    border-bottom: none;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    background-image: -webkit-linear-gradient(top, #eee 50%, #fff 100%);
    background-image: -o-linear-gradient(top, #eee 50%, #fff 100%);
    background-image: linear-gradient(to bottom, #eee 50%, #fff 100%);
    background-repeat: repeat-x
}

.select2-container--classic .select2-selection--multiple {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: text;
    outline: 0
}

.select2-container--classic .select2-selection--multiple:focus {
    border: 1px solid #5897fb
}

.select2-container--classic .select2-selection--multiple .select2-selection__rendered {
    list-style: none;
    margin: 0;
    padding: 0 5px
}

.select2-container--classic .select2-selection--multiple .select2-selection__clear {
    display: none
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice {
    background-color: #e4e4e4;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: default;
    float: left;
    margin-right: 5px;
    margin-top: 5px;
    padding: 0 5px
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice__remove {
    color: #888;
    cursor: pointer;
    display: inline-block;
    font-weight: 700;
    margin-right: 2px
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice__remove:hover {
    color: #555
}

.select2-container--classic[dir=rtl] .select2-selection--multiple .select2-selection__choice {
    float: right
}

.select2-container--classic[dir=rtl] .select2-selection--multiple .select2-selection__choice {
    margin-left: 5px;
    margin-right: auto
}

.select2-container--classic[dir=rtl] .select2-selection--multiple .select2-selection__choice__remove {
    margin-left: 2px;
    margin-right: auto
}

.select2-container--classic.select2-container--open .select2-selection--multiple {
    border: 1px solid #5897fb
}

.select2-container--classic.select2-container--open.select2-container--above .select2-selection--multiple {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.select2-container--classic.select2-container--open.select2-container--below .select2-selection--multiple {
    border-bottom: none;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0
}

.select2-container--classic .select2-search--dropdown .select2-search__field {
    border: 1px solid #aaa;
    outline: 0
}

.select2-container--classic .select2-search--inline .select2-search__field {
    outline: 0;
    box-shadow: none
}

.select2-container--classic .select2-dropdown {
    background-color: #fff;
    border: 1px solid transparent
}

.select2-container--classic .select2-dropdown--above {
    border-bottom: none
}

.select2-container--classic .select2-dropdown--below {
    border-top: none
}

.select2-container--classic .select2-results>.select2-results__options {
    max-height: 200px;
    overflow-y: auto
}

.select2-container--classic .select2-results__option[role=group] {
    padding: 0
}

.select2-container--classic .select2-results__option[aria-disabled=true] {
    color: grey
}

.select2-container--classic .select2-results__option--highlighted[aria-selected] {
    background-color: #3875d7;
    color: #fff
}

.select2-container--classic .select2-results__group {
    cursor: default;
    display: block;
    padding: 6px
}

.select2-container--classic.select2-container--open .select2-dropdown {
    border-color: #5897fb
}
    </style>
    <link rel="preload" data-rocket-preload="" as="image"
        href="<?php echo base_url(); ?>assets/uploads/2020/07/24234108/aqua-blue-lacquered-glass-modular-kitchen-interior-design.jpg"
        fetchpriority="high">
   
    <div class="container-fluid offer-section-row">
        <div class="row">
            <div class="col-md-12 offer-section-col">

                <div class="offer-section-main">
                </div>
            </div>
        </div>
    </div>
    <style type="text/css"></style>
    <script type="text/javascript">
jQuery(".open-btn1").click(function() {
    jQuery(this).toggleClass("btnactive");
    jQuery("#search-wrap").toggleClass("panelactive");
    jQuery("#search-text").focus();
});
    </script>
    <div class="container-fluid">
        <div class="row gallery-title-section" style="background-color: #F6F5F5;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="collection-category-second-title">
                            <h1 class="covid-sign-up-head">Customise Your Kitchen</h1>
                            <div class="gallery-title-content">
                                <p>Looking to customise your Kitchen? Check out the looks for the popular Modular
                                    Kitchen finishes amongst our 10,000+ customers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row sign-up-process-section" style="background-color: #F6F5F5;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="main-gallery-image main-gallery-image-cls">
                            <img fetchpriority="high" id="currentImg"
                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24234108/aqua-blue-lacquered-glass-modular-kitchen-interior-design.jpg"
                                alt="Aqua Blue Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                title="Blue Teacup" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="right-side-gallary">
                            <!-- Check for parent repeater row -->
                            <ul class="nav nav-tabs nav-justified galler-thumbnail-tab-name-list" role="tablist">
                                <li role="presentation" class="galler-thumbnail-tab-name active">
                                    <a href="#image-gallery-1" role="tab" data-toggle="tab" class="active">
                                        Lacquered Glass </a>
                                </li>
                                <li role="presentation" class="galler-thumbnail-tab-name ">
                                    <a href="#image-gallery-2" role="tab" data-toggle="tab" class="">
                                        Acrylics </a>
                                </li>
                                <li role="presentation" class="galler-thumbnail-tab-name ">
                                    <a href="#image-gallery-3" role="tab" data-toggle="tab" class="">
                                        Veneers </a>
                                </li>
                                <li role="presentation" class="galler-thumbnail-tab-name ">
                                    <a href="#image-gallery-4" role="tab" data-toggle="tab" class="">
                                        Standard Laminates </a>
                                </li>
                                <li role="presentation" class="galler-thumbnail-tab-name ">
                                    <a href="#image-gallery-5" role="tab" data-toggle="tab" class="">
                                        Premium Laminates </a>
                                </li>
                            </ul>
                            <div class="tab-content gallary-image-tab-content">
                                <div class="tab-pane active" id="image-gallery-1">
                                    <div class="galler-thumbnail-image-list">
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title=" Aqua Blue"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Aqua Blue Colour Lacquered Glass finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233603/aqua-blue-lacquered-glass.jpg"
                                                gallery-alt="Aqua Blue Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24234108/aqua-blue-lacquered-glass-modular-kitchen-interior-design.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24234108/aqua-blue-lacquered-glass-modular-kitchen-interior-design.jpg', 'Aqua Blue Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Argent Metallise"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Argent Metallise Lacquered Glass finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233613/argent-metallise-lacquered-glass.jpg"
                                                gallery-alt="Argent Metallise Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24234320/argent-metallise-lacquered-glass-modular-kitchen-interiors.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24234320/argent-metallise-lacquered-glass-modular-kitchen-interiors.jpg', 'Argent Metallise Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Atoll Blue"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Atoll Blue Lacquered Glass finish for Modular Kitchen`"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233618/atoll-blue-lacquered-glass.jpg"
                                                gallery-alt="Atoll Blue Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24234425/atoll-blue-lacquered-glass-modular-kitchen-interior-design.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24234425/atoll-blue-lacquered-glass-modular-kitchen-interior-design.jpg', 'Atoll Blue Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Black"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Black Lacquered Glass finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233623/black-lacquered-glass.jpg"
                                                gallery-alt="Black Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24234530/black-lacquered-glass-modular-kitchen-interior-design.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24234530/black-lacquered-glass-modular-kitchen-interior-design.jpg', 'Black Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Champagne"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Champagne Lacquered Glass finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233631/champagne-lacquered-glass.jpg"
                                                gallery-alt="Champagne Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24234749/champagne-lacquered-glass-modular-kitchen-interior-design.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24234749/champagne-lacquered-glass-modular-kitchen-interior-design.jpg', 'Champagne Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Flame Red"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Flame Red Lacquered Glass finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233641/flame-red-lacquered-glass.jpg"
                                                gallery-alt="Flame Red Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24235014/flame-red-lacquered-glass-modular-kitchen-interior-design.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24235014/flame-red-lacquered-glass-modular-kitchen-interior-design.jpg', 'Flame Red Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Olive Green"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Olive Green Lacquered Glass finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233653/olive-green-lacquered-glass.jpg"
                                                gallery-alt="Olive Green Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24235327/olive-green-lacquered-glass-modular-kitchen-design.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24235327/olive-green-lacquered-glass-modular-kitchen-design.jpg', 'Olive Green Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Petal Pink"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Petal Pink Lacquered Glass finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233543/petal-pink-lacquered-glass.jpg"
                                                gallery-alt="Petal Pink Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24234002/ammy-virk-lacquered-glass-modular-kitchen-interior-design.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24234002/ammy-virk-lacquered-glass-modular-kitchen-interior-design.jpg', 'Petal Pink Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Solar Yellow"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Solar Yellow Lacquered Glass finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233548/solar-yellow-lacquered-glass.jpg"
                                                gallery-alt="Solar Yellow Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24235537/solar-yellow-lacquered-glass-modular-kitchen-interior-design.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24235537/solar-yellow-lacquered-glass-modular-kitchen-interior-design.jpg', 'Solar Yellow Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Ultra White"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Ultra White Lacquered Glass finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233558/ultra-white-lacquered-glass.jpg"
                                                gallery-alt="Ultra White Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24233858/ultra-white-lacquered-glass-modular-kitchen-interior-design.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24233858/ultra-white-lacquered-glass-modular-kitchen-interior-design.jpg', 'Ultra White Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Opera Red"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Opera Red Lacquered Glass finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233658/opera-red-lacquered-glass.jpg"
                                                gallery-alt="Opera Red Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24235432/opera-red-lacquered-glass-modular-kitchen-interior-design.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24235432/opera-red-lacquered-glass-modular-kitchen-interior-design.jpg', 'Opera Red Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Mint Green"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Mint Green Lacquered Glass finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233649/mint-green-lacquered-glass.jpg"
                                                gallery-alt="Mint Green Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24235223/mint-green-lacquered-glass-modular-kitchen-interior-design.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24235223/mint-green-lacquered-glass-modular-kitchen-interior-design.jpg', 'Mint Green Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Ivory"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Ivory Lacquered Glass finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233645/ivory-lacquered-glass.jpg"
                                                gallery-alt="Ivory Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24235119/ivory-lacquered-glass-modular-kitchen-interior-design.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24235119/ivory-lacquered-glass-modular-kitchen-interior-design.jpg', 'Ivory Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Cool Earth"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Cool Earth Lacquered Glass finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233636/cool-earth-lacquered-glass.jpg"
                                                gallery-alt="Cool Earth Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24234901/cool-earth-lacquered-glass-modular-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24234901/cool-earth-lacquered-glass-modular-kitchen-interior-designs.jpg', 'Cool Earth Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Calm Sky"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Calm Sky Lacquered Glass finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233628/calm-sky-lacquered-glass.jpg"
                                                gallery-alt="Calm Sky Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24234635/calm-sky-lacquered-glass-modular-kitchen-interior-design.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24234635/calm-sky-lacquered-glass-modular-kitchen-interior-design.jpg', 'Calm Sky Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Aquamarine"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Aquamarine Lacquered Glass finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233608/aquamarine-lacquered-glass.jpg"
                                                gallery-alt="Aquamarine Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24234211/aquamarine-lacquered-glass-modular-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24234211/aquamarine-lacquered-glass-modular-kitchen-interior-designs.jpg', 'Aquamarine Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Titanium Grey"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Titanium Grey Lacquered Glass finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/24233553/titanium-grey-lacquered-glass.jpg"
                                                gallery-alt="Titanium Lacquered Glass Modular Kitchen designs customised for your kitchen interiors."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/24235648/titanium-grey-lacquered-glass-modular-kitchen-design.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/24235648/titanium-grey-lacquered-glass-modular-kitchen-design.jpg', 'Titanium Lacquered Glass Modular Kitchen designs customised for your kitchen interiors.')"
                                                data-pin-nopin="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="image-gallery-2">
                                    <div class="galler-thumbnail-image-list">
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Acrylux Red"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Acrylux red acrylics finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29190927/acrylux-red-1301-acrylics.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29190325/1-acrylux-red-1301-acrylics-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29190325/1-acrylux-red-1301-acrylics-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Acrylux Turquoise"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Acrylux Turquoise acrylics finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29190934/acrylux-turquoise-1327-acrylics.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29190439/2-acrylux-turquoise-1327-acrylics-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29190439/2-acrylux-turquoise-1327-acrylics-custom-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Acrylux Black"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Acrylux Black acrylics finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29190846/acrylux-black-1305-acrylics.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29190552/3-acrylux-black-1305-acrylics-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29190552/3-acrylux-black-1305-acrylics-custom-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Acryglo Brown"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Acryglo Brown acrylics finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29190832/acryglo-brown-1310-acrylics.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29190705/4-acryglo-brown-1310-acrylics-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29190705/4-acryglo-brown-1310-acrylics-custom-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Acrylux Cappucino"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Acrylux Cappucino acrylics finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29190851/acrylux-cappucino-1315-acrylics.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29190820/5-acrylux-cappucino-1315-acrylics-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29190820/5-acrylux-cappucino-1315-acrylics-custom-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Acrylux Slate Grey"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Acrylux Slate Grey acrylics finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29190930/acrylux-slate-grey-1339-acrylics.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29185127/6-acrylux-slate-grey-1339-acrylics-custom-modular-kitchen-interiors.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29185127/6-acrylux-slate-grey-1339-acrylics-custom-modular-kitchen-interiors.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Acrylux Metallic Grey"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Acrylux Metallic Grey acrylics finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29190918/acrylux-metallic-grey-1306-acrylics.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29185239/7-acrylux-metallic-grey-1306-acrylics-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29185239/7-acrylux-metallic-grey-1306-acrylics-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Acrylux Metallic Black"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Acrylux Metallic Black acrylics finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29190913/acrylux-metallic-black-1324-acrylics.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29185347/8-acrylux-metallic-black-1324-acrylics-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29185347/8-acrylux-metallic-black-1324-acrylics-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Acryglo Metallic White"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Acryglo Metallic White acrylics finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29190837/acryglo-metallic-white-2307-acrylics.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29185455/9-acryglo-metallic-white-2307-acrylics-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29185455/9-acryglo-metallic-white-2307-acrylics-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Acrylux Metallic Beige 1338"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Acrylux Metallic Beige 1338"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29190910/acrylux-metallic-beige-1338-acrylics.jpg"
                                                gallery-alt="Acrylux Metallic Beige 1338"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/06001950/acrylux-metallic-beige-1338-acrylics-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/06001950/acrylux-metallic-beige-1338-acrylics-custom-modular-kitchen-designs.jpg', 'Acrylux Metallic Beige 1338')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Acrylux Dark Grey"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Acrylux Dark Grey acrylics finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29190900/acrylux-dark-grey-1323-acrylics.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29185603/10-acrylux-dark-grey-1323-acrylics-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29185603/10-acrylux-dark-grey-1323-acrylics-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Acrylux Anthracite"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Acrylux Anthracite acrylics finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29190842/acrylux-anthracite-1322-acrylics.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29185728/11-acrylux-anthracite-1322-acrylics-modular-kitchen-interiors.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29185728/11-acrylux-anthracite-1322-acrylics-modular-kitchen-interiors.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Acrylux Cream"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Acrylux Cream acrylics finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29190856/acrylux-cream-1303-acrylics.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29185833/12-acrylux-cream-1303-acrylics-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29185833/12-acrylux-cream-1303-acrylics-custom-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Acrylux Grey"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Acrylux Grey acrylics finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29190904/acrylux-grey-1336-acrylics.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29185935/13-acrylux-grey-1336-acrylics-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29185935/13-acrylux-grey-1336-acrylics-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Acrylux Purple"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Acrylux Purple acrylics finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29190922/acrylux-purple-1317-acrylics.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29190054/14-acrylux-purple-1317-acrylics-customized-modular-kitchen-interiors.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29190054/14-acrylux-purple-1317-acrylics-customized-modular-kitchen-interiors.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Acrylux White"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Acrylux White acrylics finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29190827/acrylux-white-1302-acrylics.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29190205/15-acrylux-white-1302-acrylics-custom-modular-kitchen-interiors.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29190205/15-acrylux-white-1302-acrylics-custom-modular-kitchen-interiors.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="image-gallery-3">
                                    <div class="galler-thumbnail-image-list">
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="American Walnut Flower"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="American walnut flower veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221554/american-walnut-flower-veneers.jpg"
                                                gallery-alt="American Walnut Flower Veneers finish customised modular kitchen design for Indian homes."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02004618/american-walnut-flower-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02004618/american-walnut-flower-veneers-customised-modular-kitchen-designs.jpg', 'American Walnut Flower Veneers finish customised modular kitchen design for Indian homes.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Horizontal Figured Sycamore Grey"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Horizontal Figured Sycamore Grey veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221604/horizontal-figured-sycamore-grey-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29220342/horizontal-figured-sycamore-grey-veneers-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29220342/horizontal-figured-sycamore-grey-veneers-kitchen-interior-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Horizontal Smoked Larch"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Horizontal Smoked Larch veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221609/horizontal-smoked-larch-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29220507/horizontal-smoked-larch-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29220507/horizontal-smoked-larch-veneers-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Horizontal Ziricote"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Horizontal Ziricote veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221621/horizontal-ziricote-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29215723/vertical-ziricote-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29215723/vertical-ziricote-veneers-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Live Tree Hazelwood Bronze"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Live Tree Hazelwood bronze veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221626/live-tree-hazelwood-bronze-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29220909/live-tree-hazelwood-bronze-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29220909/live-tree-hazelwood-bronze-veneers-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Macassar Ebony"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Macassar Ebony veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221632/macassar-ebony-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29221020/macassar-ebony-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29221020/macassar-ebony-veneers-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Santos Palisander"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Santos Palisander veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221642/santos-palisander-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29221256/santos-palisander-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29221256/santos-palisander-veneers-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Vertical Smoked Larch"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Vertical Smoked Larch veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221703/vertical-smoked-larch-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29215454/vertical-smoked-larch-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29215454/vertical-smoked-larch-veneers-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Vertical Zebrano"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Vertical Zebrano veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221708/vertical-zebrano-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29215604/vertical-zebrano-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29215604/vertical-zebrano-veneers-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Vintage Oak"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Vintage Oak veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221543/vintage-oak-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29215837/vintage-oak-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29215837/vintage-oak-veneers-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="African Santos"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="African Santos veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221548/african-santos-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29215950/african-santos-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29215950/african-santos-veneers-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Horizontal Coreal"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Horizontal Coreal veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221559/horizontal-coreal-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29220231/horizontal-coreal-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29220231/horizontal-coreal-veneers-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Horizontal Zebrano"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Horizontal Zebrano veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221616/horizontal-zebrano-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29220633/horizontal-zebrano-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29220633/horizontal-zebrano-veneers-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Natural Teak"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Natural Teak veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221637/natural-teak-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29221132/natural-teak-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29221132/natural-teak-veneers-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Sapele"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Sapele veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221647/sapele-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29221413/sapele-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29221413/sapele-veneers-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Vertical Coreal"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Vertical Coreal veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221652/vertical-coreal-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29221536/vertical-coreal-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29221536/vertical-coreal-veneers-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Vertical Figured Sycamore Grey"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Vertical Figured Sycamore Grey veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221658/vertical-figured-sycamore-grey-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29215340/vertical-figured-sycamore-grey-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29215340/vertical-figured-sycamore-grey-veneers-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Vertical Ziricote"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Vertical Ziricote veneers finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/29221714/vertical-ziricote-veneers.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/29215723/vertical-ziricote-veneers-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/29215723/vertical-ziricote-veneers-customised-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="image-gallery-4">
                                    <div class="galler-thumbnail-image-list">
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Amazonia 10074 WV"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003548/amazonia-10074-wv-textured-laminates-kitchen-design.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01234451/amazonia-10074-wv-textured-laminates-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01234451/amazonia-10074-wv-textured-laminates-custom-modular-kitchen-designs.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="American Walnut 14538 VNR RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="American Walnut 14538 VNR RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003552/american-walnut-14538-vnr-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="American Walnut 14538 VNR RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01234558/american-walnut-14538-vnr-rh-textured-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01234558/american-walnut-14538-vnr-rh-textured-laminates-customised-modular-kitchen-designs.jpg', 'American Walnut 14538 VNR RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Ashen Krakato 44279 CMT RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Ashen Krakato 44279 CMT RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003557/ashen-krakato-44279-cmt-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Ashen Krakato 44279 CMT RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01234708/ashen-krakato-44279-cmt-rh-textured-laminates-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01234708/ashen-krakato-44279-cmt-rh-textured-laminates-custom-modular-kitchen-designs.jpg', 'Ashen Krakato 44279 CMT RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Black 21066 CFR"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Black 21066 CFR"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003602/black-21066-cfr-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Black 21066 CFR"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01234815/black-21066-cfr-textured-laminates-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01234815/black-21066-cfr-textured-laminates-custom-modular-kitchen-designs.jpg', 'Black 21066 CFR')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Black 21066 CMT"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Black 21066 CMT"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003607/black-21066-cmt-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Black 21066 CMT"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01234920/black-21066-cmt-textured-laminates-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01234920/black-21066-cmt-textured-laminates-custom-modular-kitchen-designs.jpg', 'Black 21066 CMT')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Black 21066 NL"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Black 21066 NL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003611/black-21066-nl-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Black 21066 NL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01235028/black-21066-nl-textured-laminates-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01235028/black-21066-nl-textured-laminates-custom-modular-kitchen-designs.jpg', 'Black 21066 NL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Bran Krakato 44282 CMT RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Bran Krakato 44282 CMT RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003616/bran-krakato-44282-cmt-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Bran Krakato 44282 CMT RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01235150/bran-krakato-44282-cmt-rh-textured-laminates-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01235150/bran-krakato-44282-cmt-rh-textured-laminates-custom-modular-kitchen-designs.jpg', 'Bran Krakato 44282 CMT RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Brown Woodscar 14624 SCT RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Brown Woodscar 14624 SCT RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003621/brown-woodscar-14624-sct-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Brown Woodscar 14624 SCT RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01235311/brown-woodscar-14624-sct-rh-textured-laminates-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01235311/brown-woodscar-14624-sct-rh-textured-laminates-custom-modular-kitchen-designs.jpg', 'Brown Woodscar 14624 SCT RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Canadian Walnut 10544 WV"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Canadian Walnut 10544 WV"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003626/canadian-walnut-10544-wv-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Canadian Walnut 10544 WV"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01235425/canadian-walnut-10544-wv-textured-laminates-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01235425/canadian-walnut-10544-wv-textured-laminates-custom-modular-kitchen-designs.jpg', 'Canadian Walnut 10544 WV')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Candy White 21941 NL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Candy White 21941 NL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003631/candy-white-21941-nl-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Candy White 21941 NL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01235537/candy-white-21941-nl-textured-laminates-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01235537/candy-white-21941-nl-textured-laminates-custom-modular-kitchen-designs.jpg', 'Candy White 21941 NL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Caramel 21155 CMT"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Caramel 21155 CMT"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003636/caramel-21155-cmt-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Caramel 21155 CMT"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01235651/caramel-21155-cmt-textured-laminates-customised-modular-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01235651/caramel-21155-cmt-textured-laminates-customised-modular-kitchen-interior-designs.jpg', 'Caramel 21155 CMT')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Cardinal 21065 NL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Cardinal 21065 NL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003640/cardinal-21065-nl-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Cardinal 21065 NL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01235810/cardinal-21065-nl-textured-laminates-customised-modular-kitchen-interiors.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01235810/cardinal-21065-nl-textured-laminates-customised-modular-kitchen-interiors.jpg', 'Cardinal 21065 NL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Carnival 21075 NL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Carnival 21075 NL textured modular kitchen laminates."
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003645/carnival-21075-nl-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Carnival 21075 NL textured customised modular kitchen designs."
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/06000832/carnival-21075-nl-textured-laminates-customised-modular-kitchen-interiors.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/06000832/carnival-21075-nl-textured-laminates-customised-modular-kitchen-interiors.jpg', 'Carnival 21075 NL textured customised modular kitchen designs.')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Celtic Ebony 10196 WV"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Celtic Ebony 10196 WV"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003650/celtic-ebony-10196-wv-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Celtic Ebony 10196 WV"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01235927/celtic-ebony-10196-wv-textured-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01235927/celtic-ebony-10196-wv-textured-laminates-customised-modular-kitchen-designs.jpg', 'Celtic Ebony 10196 WV')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Champagne 21187 CMT"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Champagne 21187 CMT"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003655/champagne-21187-cmt-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Champagne 21187 CMT"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02000056/champagne-21187-cmt-textured-laminates-custom-modular-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02000056/champagne-21187-cmt-textured-laminates-custom-modular-kitchen-interior-designs.jpg', 'Champagne 21187 CMT')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Champagne 21187 NL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Champagne 21187 NL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003700/champagne-21187-nl-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Champagne 21187 NL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02000207/champagne-21187-nl-textured-laminates-customised-modular-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02000207/champagne-21187-nl-textured-laminates-customised-modular-kitchen-interior-designs.jpg', 'Champagne 21187 NL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Chocolate 21028 NL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Chocolate 21028 NL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003705/chocolate-21028-nl-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Chocolate 21028 NL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02000318/chocolate-21028-nl-textured-laminates-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02000318/chocolate-21028-nl-textured-laminates-custom-modular-kitchen-designs.jpg', 'Chocolate 21028 NL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Cloudy Cambric 44754 LNN RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Cloudy Cambric 44754 LNN RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003708/cloudy-cambric-44754-lnn-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Cloudy Cambric 44754 LNN RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02000431/cloudy-cambric-44754-lnn-rh-textured-laminates-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02000431/cloudy-cambric-44754-lnn-rh-textured-laminates-custom-modular-kitchen-designs.jpg', 'Cloudy Cambric 44754 LNN RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Crochet Denim Splash 44783 GRN RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Crochet Denim Splash 44783 GRN RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003713/crochet-denim-splash-44783-grn-rh.jpg"
                                                gallery-alt="Crochet Denim Splash 44783 GRN RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02000545/crochet-denim-splash-44783-grn-rh-textured-laminates-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02000545/crochet-denim-splash-44783-grn-rh-textured-laminates-custom-modular-kitchen-designs.jpg', 'Crochet Denim Splash 44783 GRN RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Dorredos Cottage Pine 14613 STK RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Dorredos Cottage Pine 14613 STK RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003718/dorredos-cottage-pine-14613-stk-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Dorredos Cottage Pine 14613 STK RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02000657/dorredos-cottage-pine-14613-stk-rh-textured-laminates-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02000657/dorredos-cottage-pine-14613-stk-rh-textured-laminates-custom-modular-kitchen-designs.jpg', 'Dorredos Cottage Pine 14613 STK RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Ebony Aspen 14673 WV RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Ebony Aspen 14673 WV RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003725/ebony-aspen-14673-wv-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Ebony Aspen 14673 WV RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02000811/ebony-aspen-14673-wv-rh-textured-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02000811/ebony-aspen-14673-wv-rh-textured-laminates-customised-modular-kitchen-designs.jpg', 'Ebony Aspen 14673 WV RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Ebony Peat 14674 WV RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Ebony Peat 14674 WV RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003730/ebony-peat-14674-wv-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Ebony Peat 14674 WV RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02000925/ebony-peat-14674-wv-rh-textured-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02000925/ebony-peat-14674-wv-rh-textured-laminates-customised-modular-kitchen-designs.jpg', 'Ebony Peat 14674 WV RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Ebony Sepia 14675 WV RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Ebony Sepia 14675 WV RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003735/ebony-sepia-14675-wv-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Ebony Sepia 14675 WV RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01234329/ebony-sepia-14675-wv-rh-textured-laminates-custom-modular-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01234329/ebony-sepia-14675-wv-rh-textured-laminates-custom-modular-kitchen-interior-designs.jpg', 'Ebony Sepia 14675 WV RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Ethnic Denim Splash 44785 GRN RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Ethnic Denim Splash 44785 GRN RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003739/ethnic-denim-splash-44785-grn-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Ethnic Denim Splash 44785 GRN RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02001144/ethnic-denim-splash-44785-grn-rh-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02001144/ethnic-denim-splash-44785-grn-rh-textured-laminates-customised-kitchen-interior-designs.jpg', 'Ethnic Denim Splash 44785 GRN RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Frosty White 21091 CFR"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Frosty White 21091 CFR"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003743/frosty-white-21091-cfr-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Frosty White 21091 CFR"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02001252/frosty-white-21091-cfr-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02001252/frosty-white-21091-cfr-textured-laminates-customised-kitchen-interior-designs.jpg', 'Frosty White 21091 CFR')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Hazel Cambric 44753 LNN RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Hazel Cambric 44753 LNN RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003748/hazel-cambric-44753-lnn-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Hazel Cambric 44753 LNN RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02001405/hazel-cambric-44753-lnn-rh-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02001405/hazel-cambric-44753-lnn-rh-textured-laminates-customised-kitchen-interior-designs.jpg', 'Hazel Cambric 44753 LNN RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Jurasic Macassar 10193 WV"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Jurasic Macassar 10193 WV"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003753/jurasic-macassar-10193-wv-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Jurasic Macassar 10193 WV"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02001519/jurasic-macassar-10193-wv-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02001519/jurasic-macassar-10193-wv-textured-laminates-customised-kitchen-interior-designs.jpg', 'Jurasic Macassar 10193 WV')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Light Woodscar 14625 SCT RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Light Woodscar 14625 SCT RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003757/light-woodscar-14625-sct-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Light Woodscar 14625 SCT RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02001638/light-woodscar-14625-sct-rh-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02001638/light-woodscar-14625-sct-rh-textured-laminates-customised-kitchen-interior-designs.jpg', 'Light Woodscar 14625 SCT RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Livid Krakato 44281 CMT RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Livid Krakato 44281 CMT RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003800/livid-krakato-44281-cmt-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Livid Krakato 44281 CMT RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02001754/livid-krakato-44281-cmt-rh-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02001754/livid-krakato-44281-cmt-rh-textured-laminates-customised-kitchen-interior-designs.jpg', 'Livid Krakato 44281 CMT RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Misty Dreams Black 44703 NL RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Misty Dreams Black 44703 NL RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003805/misty-dreams-black-44703-nl-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Misty Dreams Black 44703 NL RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02001915/misty-dreams-black-44703-nl-rh-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02001915/misty-dreams-black-44703-nl-rh-textured-laminates-customised-kitchen-interior-designs.jpg', 'Misty Dreams Black 44703 NL RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Misty Dreams Cream 44708 NL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Misty Dreams Cream 44708 NL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003810/misty-dreams-cream-44708-nl-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Misty Dreams Cream 44708 NL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/06001507/misty-dreams-cream-44708-nl-rh-textured-laminates-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/06001507/misty-dreams-cream-44708-nl-rh-textured-laminates-custom-modular-kitchen-designs.jpg', 'Misty Dreams Cream 44708 NL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Misty Dreams White 44704 NL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Misty Dreams White 44704 NL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003814/misty-dreams-white-44704-nl-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Misty Dreams White 44704 NL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/06001616/misty-dreams-white-44704-nl-rh-textured-laminates-custom-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/06001616/misty-dreams-white-44704-nl-rh-textured-laminates-custom-modular-kitchen-designs.jpg', 'Misty Dreams White 44704 NL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Misty Grey 21039 NL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Misty Grey 21039 NL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003819/misty-grey-21039-nl-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Misty Grey 21039 NL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02002024/misty-grey-21039-nl-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02002024/misty-grey-21039-nl-textured-laminates-customised-kitchen-interior-designs.jpg', 'Misty Grey 21039 NL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Persian Walnut 14540 VNR"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Persian Walnut 14540 VNR"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003824/persian-walnut-14540-vnr-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Persian Walnut 14540 VNR"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02002150/persian-walnut-14540-vnr-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02002150/persian-walnut-14540-vnr-textured-laminates-customised-kitchen-interior-designs.jpg', 'Persian Walnut 14540 VNR')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Rusty Oxid Metal 44789 OPL RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Rusty Oxid Metal 44789 OPL RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003827/rusty-oxid-metal-44789-opl-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Rusty Oxid Metal 44789 OPL RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02002307/rusty-oxid-metal-44789-opl-rh-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02002307/rusty-oxid-metal-44789-opl-rh-textured-laminates-customised-kitchen-interior-designs.jpg', 'Rusty Oxid Metal 44789 OPL RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Sandal 21077 NL"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Sandal 21077 NL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003832/sandal-21077-nl-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Sandal 21077 NL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02002417/sandal-21077-nl-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02002417/sandal-21077-nl-textured-laminates-customised-kitchen-interior-designs.jpg', 'Sandal 21077 NL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Silver Grey 21069 CMT"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Silver Grey 21069 CMT"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003837/silver-grey-21069-cmt-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Silver Grey 21069 CMT"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02002532/silver-grey-21069-cmt-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02002532/silver-grey-21069-cmt-textured-laminates-customised-kitchen-interior-designs.jpg', 'Silver Grey 21069 CMT')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Slate 22099 CMT"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Slate 22099 CMT"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003840/slate-22099-cmt-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Slate 22099 CMT"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02002650/slate-22099-cmt-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02002650/slate-22099-cmt-textured-laminates-customised-kitchen-interior-designs.jpg', 'Slate 22099 CMT')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Tahiti Teak 10803 VNR"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Tahiti Teak 10803 VNR"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003844/tahiti-teak-10803-vnr-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Tahiti Teak 10803 VNR"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02002814/tahiti-teak-10803-vnr-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02002814/tahiti-teak-10803-vnr-textured-laminates-customised-kitchen-interior-designs.jpg', 'Tahiti Teak 10803 VNR')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Tan 21127 NL"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Tan 21127 NL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003849/tan-21127-nl-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Tan 21127 NL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02002927/tan-21127-nl-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02002927/tan-21127-nl-textured-laminates-customised-kitchen-interior-designs.jpg', 'Tan 21127 NL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Tan Cambric 44755 LNN RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Tan Cambric 44755 LNN RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003852/tan-cambric-44755-lnn-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Tan Cambric 44755 LNN RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/06003048/tan-cambric-44755-lnn-rh-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/06003048/tan-cambric-44755-lnn-rh-textured-laminates-customised-kitchen-interior-designs.jpg', 'Tan Cambric 44755 LNN RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Tigress Teak 10523"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Tigress Teak 10523"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003857/tigress-teak-10523-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Tigress Teak 10523"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/06003309/tigress-teak-10523-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/06003309/tigress-teak-10523-textured-laminates-customised-kitchen-interior-designs.jpg', 'Tigress Teak 10523')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Tramac Twill 44774 GRN"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Tramac Twill 44774 GRN"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003901/tramac-twill-44774-grn-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Tramac Twill 44774 GRN"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/06003158/tramac-twill-44774-grn-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/06003158/tramac-twill-44774-grn-textured-laminates-customised-kitchen-interior-designs.jpg', 'Tramac Twill 44774 GRN')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Vietnamese Bamboo 10513 VL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Vietnamese Bamboo 10513 VL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003905/vietnamese-bamboo-10513-vl-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Vietnamese Bamboo 10513 VL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02003412/vietnamese-bamboo-10513-vl-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02003412/vietnamese-bamboo-10513-vl-textured-laminates-customised-kitchen-interior-designs.jpg', 'Vietnamese Bamboo 10513 VL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Warmy Smoked Maple 14937 RH V"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Warmy Smoked Maple 14937 RH V"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003909/warmy-smoked-maple-14937-rh-v-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Warmy Smoked Maple 14937 RH V"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02003536/warmy-smoked-maple-14937-rh-v-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02003536/warmy-smoked-maple-14937-rh-v-textured-laminates-customised-kitchen-interior-designs.jpg', 'Warmy Smoked Maple 14937 RH V')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="White Cambric 44752 LNN RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="White Cambric 44752 LNN RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02003543/white-cambric-44752-lnn-rh-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="White Cambric 44752 LNN RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02001034/white-cambric-44752-lnn-rh-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02001034/white-cambric-44752-lnn-rh-textured-laminates-customised-kitchen-interior-designs.jpg', 'White Cambric 44752 LNN RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Berry Bunch 22105"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Berry Bunch 22105"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162710/berry-bunch-22105-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Berry Bunch 22105"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02193152/berry-bunch-22105-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02193152/berry-bunch-22105-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Berry Bunch 22105')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Black 21066"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Black 21066"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162713/black-21066-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Black 21066"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02193300/black-21066-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02193300/black-21066-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Black 21066')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Black Current 21172"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Black Current 21172"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162717/black-current-21172-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Black Current 21172"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02193406/black-current-21172-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02193406/black-current-21172-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Black Current 21172')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Bronze 99988 MT V"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Bronze 99988 MT V"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162721/bronze-99988-mt-v-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Bronze 99988 MT V"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02193514/bronze-99988-mt-v-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02193514/bronze-99988-mt-v-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Bronze 99988 MT V')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Brown Woodscar 14624 RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Brown Woodscar 14624 RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162725/brown-woodscar-14624-rh-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Brown Woodscar 14624 RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02193624/brown-woodscar-14624-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02193624/brown-woodscar-14624-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Brown Woodscar 14624 RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Canadian Walnut 10544"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Canadian Walnut 10544"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162729/canadian-walnut-10544-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Canadian Walnut 10544"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02193730/canadian-walnut-10544-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02193730/canadian-walnut-10544-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Canadian Walnut 10544')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Caramel 21155"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Caramel 21155"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162733/caramel-21155-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Caramel 21155"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02165403/caramel-21155-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02165403/caramel-21155-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Caramel 21155')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Cardinal 21065"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Cardinal 21065"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162338/cardinal-21065-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Cardinal 21065"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02165509/cardinal-21065-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02165509/cardinal-21065-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Cardinal 21065')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Carnival 21075"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Carnival 21075"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162342/carnival-21075-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Carnival 21075"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02165613/carnival-21075-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02165613/carnival-21075-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Carnival 21075')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Chalky Teak 10593"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Chalky Teak 10593"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162347/chalky-teak-10593-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Chalky Teak 10593"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02165717/chalky-teak-10593-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02165717/chalky-teak-10593-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Chalky Teak 10593')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Champagne 21187"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Champagne 21187"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162352/champagne-21187-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Champagne 21187"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02165820/champagne-21187-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02165820/champagne-21187-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Champagne 21187')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Chocolate 21028"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Chocolate 21028"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162357/chocolate-21028-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Chocolate 21028"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02165926/chocolate-21028-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02165926/chocolate-21028-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Chocolate 21028')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Cloudy Cambric 44754"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Cloudy Cambric 44754"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162401/cloudy-cambric-44754-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Cloudy Cambric 44754"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02170036/cloudy-cambric-44754-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02170036/cloudy-cambric-44754-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Cloudy Cambric 44754')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Doredos Cottage Pine 14613 RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Doredos Cottage Pine 14613 RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162406/doredos-cottage-pine-14613-rh-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Doredos Cottage Pine 14613 RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02170141/doredos-cottage-pine-14613-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02170141/doredos-cottage-pine-14613-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Doredos Cottage Pine 14613 RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Dove Grey 22079"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Dove Grey 22079"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162411/dove-grey-22079-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Dove Grey 22079"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02170244/dove-grey-22079-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02170244/dove-grey-22079-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Dove Grey 22079')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Ebony Aspen 14673 RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Ebony Aspen 14673 RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162416/ebony-aspen-14673-rh-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Ebony Aspen 14673 RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02170351/ebony-aspen-14673-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02170351/ebony-aspen-14673-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Ebony Aspen 14673 RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Ebony Peat 14674 RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Ebony Peat 14674 RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162420/ebony-peat-14674-rh-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Ebony Peat 14674 RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02170458/ebony-peat-14674-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02170458/ebony-peat-14674-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Ebony Peat 14674 RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Ebony Sepia 14675 RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Ebony Sepia 14675 RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162424/ebony-sepia-14675-rh-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Ebony Sepia 14675 RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02170607/ebony-sepia-14675-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02170607/ebony-sepia-14675-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Ebony Sepia 14675 RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Emerald 21013"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Emerald 21013"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162428/emerald-21013-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Emerald 21013"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02170712/emerald-21013-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02170712/emerald-21013-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Emerald 21013')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="English Ivy 21063"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="English Ivy 21063"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162432/english-ivy-21063-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="English Ivy 21063"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02170819/english-ivy-21063-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02170819/english-ivy-21063-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'English Ivy 21063')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Fade Concreto 44790 RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Fade Concreto 44790 RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162437/fade-concreto-44790-rh-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Fade Concreto 44790 RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02170929/fade-concreto-44790-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02170929/fade-concreto-44790-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Fade Concreto 44790 RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Fiesta Rose 22115"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Fiesta Rose 22115"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162440/fiesta-rose-22115-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Fiesta Rose 22115"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02171034/fiesta-rose-22115-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02171034/fiesta-rose-22115-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Fiesta Rose 22115')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Frosty White 21091"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Frosty White 21091"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162444/frosty-white-21091-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Frosty White 21091"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02171139/frosty-white-21091-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02171139/frosty-white-21091-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Frosty White 21091')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Gladiola 22157"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Gladiola 22157"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162448/gladiola-22157-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Gladiola 22157"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02171244/gladiola-22157-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02171244/gladiola-22157-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Gladiola 22157')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Gold 99998 MT V"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Gold 99998 MT V"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162451/gold-99998-mt-v-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Gold 99998 MT V"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02171351/gold-99998-mt-v-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02171351/gold-99998-mt-v-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Gold 99998 MT V')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Greigo Concreto 44791 RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Greigo Concreto 44791 RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162455/greigo-concreto-44791-rh-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Greigo Concreto 44791 RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02171500/greigo-concreto-44791-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02171500/greigo-concreto-44791-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Greigo Concreto 44791 RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Hazel Cambric 44753"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Hazel Cambric 44753"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162459/hazel-cambric-44753-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Hazel Cambric 44753"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02171622/hazel-cambric-44753-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02171622/hazel-cambric-44753-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Hazel Cambric 44753')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Hunter Green 21193"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Hunter Green 21193"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162503/hunter-green-21193-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Hunter Green 21193"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02171733/hunter-green-21193-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02171733/hunter-green-21193-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Hunter Green 21193')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Jaisalmer 21307"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Jaisalmer 21307"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162507/jaisalmer-21307-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Jaisalmer 21307"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02193833/jaisalmer-21307-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02193833/jaisalmer-21307-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Jaisalmer 21307')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Jurassic Macassar 10193 SF"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Jurassic Macassar 10193 SF"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162510/jurassic-macassar-10193-sf-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Jurassic Macassar 10193 SF"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02193946/jurassic-macassar-10193-sf-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02193946/jurassic-macassar-10193-sf-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Jurassic Macassar 10193 SF')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Khaki 21097"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Khaki 21097"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162514/khaki-21097-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Khaki 21097"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02173820/khaki-21097-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02173820/khaki-21097-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Khaki 21097')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Kingfisher Blue 21122"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Kingfisher Blue 21122"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162518/kingfisher-blue-21122-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Kingfisher Blue 21122"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02173932/kingfisher-blue-21122-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02173932/kingfisher-blue-21122-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Kingfisher Blue 21122')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Knotty Smoked Maple 14938 RH V"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Knotty Smoked Maple 14938 RH V"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162521/knotty-smoked-maple-14938-rh-v-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Knotty Smoked Maple 14938 RH V"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02174137/knotty-smoked-maple-14938-rh-v-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02174137/knotty-smoked-maple-14938-rh-v-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Knotty Smoked Maple 14938 RH V')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Lavender 21042"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Lavender 21042"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162525/lavender-21042-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Lavender 21042"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02174242/lavender-21042-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02174242/lavender-21042-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Lavender 21042')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Light Zebrano 10861"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Light Zebrano 10861"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162529/light-zebrano-10861-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Light Zebrano 10861"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02174351/light-zebrano-10861-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02174351/light-zebrano-10861-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Light Zebrano 10861')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Lilac 21012"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Lilac 21012"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162532/lilac-21012-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Lilac 21012"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02174454/lilac-21012-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02174454/lilac-21012-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Lilac 21012')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Marigold 21057"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Marigold 21057"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162536/marigold-21057-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Marigold 21057"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02174607/marigold-21057-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02174607/marigold-21057-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Marigold 21057')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Midnight Blue 21022"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Midnight Blue 21022"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162540/midnight-blue-21022-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Midnight Blue 21022"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02174722/midnight-blue-21022-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02174722/midnight-blue-21022-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Midnight Blue 21022')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Mysore Ivory 24087"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Mysore Ivory 24087"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162543/mysore-ivory-24087-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Mysore Ivory 24087"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02174831/mysore-ivory-24087-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02174831/mysore-ivory-24087-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Mysore Ivory 24087')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Orchard Delight 10592"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Orchard Delight 10592"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162547/orchard-delight-10592-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Orchard Delight 10592"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02174956/orchard-delight-10592-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02174956/orchard-delight-10592-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Orchard Delight 10592')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Poppy 21004"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Poppy 21004"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162551/poppy-21004-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Poppy 21004"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02175108/poppy-21004-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02175108/poppy-21004-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Poppy 21004')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Prairie Green 21003"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Prairie Green 21003"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162555/prairie-green-21003-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Prairie Green 21003"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02175218/prairie-green-21003-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02175218/prairie-green-21003-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Prairie Green 21003')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Rock Painting 44776 RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Rock Painting 44776 RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162559/rock-painting-44776-rh-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Rock Painting 44776 RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02194103/rock-painting-44776-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02194103/rock-painting-44776-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Rock Painting 44776 RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Rose Granium 22074"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Rose Granium 22074"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162602/rose-granium-22074-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Rose Granium 22074"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02194210/rose-granium-22074-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02194210/rose-granium-22074-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Rose Granium 22074')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Rustic Dreams 44773 RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Rustic Dreams 44773 RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162606/rustic-dreams-44773-rh-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Rustic Dreams 44773 RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02194315/rustic-dreams-44773-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02194315/rustic-dreams-44773-rh-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Rustic Dreams 44773 RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Saffron 21024"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Saffron 21024"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162610/saffron-21024-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Saffron 21024"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02194423/saffron-21024-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02194423/saffron-21024-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Saffron 21024')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Sandal 21077"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Sandal 21077"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162614/sandal-21077-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Sandal 21077"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02194526/sandal-21077-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02194526/sandal-21077-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Sandal 21077')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Shangrila 21055"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Shangrila 21055"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162617/shangrila-21055-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Shangrila 21055"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02191610/shangrila-21055-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02191610/shangrila-21055-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Shangrila 21055')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Shore 22122"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Shore 22122"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162621/shore-22122-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Shore 22122"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02191715/shore-22122-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02191715/shore-22122-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Shore 22122')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Silver 99999 MT V"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Silver 99999 MT V"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162625/silver-99999-mt-v-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Silver 99999 MT V"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02191825/silver-99999-mt-v-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02191825/silver-99999-mt-v-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Silver 99999 MT V')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Silver Grey 21069"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Silver Grey 21069"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162629/silver-grey-21069-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Silver Grey 21069"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02191926/silver-grey-21069-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02191926/silver-grey-21069-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Silver Grey 21069')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Sky Blue 21092"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Sky Blue 21092"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162632/sky-blue-21092-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Sky Blue 21092"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02192034/sky-blue-21092-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02192034/sky-blue-21092-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Sky Blue 21092')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Slate 22099"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Slate 22099"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162636/slate-22099-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Slate 22099"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02192139/slate-22099-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02192139/slate-22099-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Slate 22099')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Steel 99989 MT V"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Steel 99989 MT V"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162640/steel-99989-mt-v-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Steel 99989 MT V"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02192248/steel-99989-mt-v-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02192248/steel-99989-mt-v-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Steel 99989 MT V')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Tan 21127"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Tan 21127"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162643/tan-21127-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Tan 21127"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02192354/tan-21127-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02192354/tan-21127-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Tan 21127')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Tan Cambric 44755"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Tan Cambric 44755"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162647/tan-cambric-44755-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Tan Cambric 44755"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02192506/tan-cambric-44755-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02192506/tan-cambric-44755-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Tan Cambric 44755')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Tigress Teak 10523"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Tigress Teak 10523"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162651/tigress-teak-10523-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Tigress Teak 10523"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02192616/tigress-teak-10523-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02192616/tigress-teak-10523-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Tigress Teak 10523')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Trooper 22102"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Trooper 22102"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162655/trooper-22102-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Trooper 22102"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02192722/trooper-22102-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02192722/trooper-22102-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Trooper 22102')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Tropical Walnut 14530 SF"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Tropical Walnut 14530 SF"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162658/tropical-walnut-14530-sf-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="Tropical Walnut 14530 SF"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02192830/tropical-walnut-14530-sf-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02192830/tropical-walnut-14530-sf-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'Tropical Walnut 14530 SF')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="White Cambric 44752"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="White Cambric 44752"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162702/white-cambric-44752-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="White Cambric 44752"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02192935/white-cambric-44752-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02192935/white-cambric-44752-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'White Cambric 44752')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="White Metal 99987MT V"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="White Metal 99987MT V"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/02162706/white-metal-99987-mt-v-non-textured-laminates-kitchen-design.jpg"
                                                gallery-alt="White Metal 99987MT V"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/02193047/white-metal-99987-mt-v-non-textured-laminates-customised-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/02193047/white-metal-99987-mt-v-non-textured-laminates-customised-kitchen-interior-designs.jpg', 'White Metal 99987MT V')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Berry Bunch 22105 HGL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Berry Bunch 22105 HGL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131538/berry-bunch-22105-hgl-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Berry Bunch 22105 HGL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07131352/berry-bunch-22105-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07131352/berry-bunch-22105-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Berry Bunch 22105 HGL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Black 21066 MR+"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Black 21066 MR+"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131359/black-21066-mr-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Black 21066 MR+ high gloss finish modular kitchen design"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07124914/black-21066-mr-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07124914/black-21066-mr-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Black 21066 MR+ high gloss finish modular kitchen design')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Black Current 21172 HGL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Black Current 21172 HGL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131404/black-current-21172-hgl-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Black Current 21172 HGL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07125020/black-current-21172-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07125020/black-current-21172-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Black Current 21172 HGL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Cardinal 21065 HGL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Cardinal 21065 HGL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131409/cardinal-21065-hgl-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Cardinal 21065 HGL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07125128/cardinal-21065-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07125128/cardinal-21065-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Cardinal 21065 HGL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Carnival 21075 HGL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Carnival 21075 HGL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131414/carnival-21075-hgl-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Carnival 21075 HGL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07125244/carnival-21075-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07125244/carnival-21075-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Carnival 21075 HGL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Champagne 21187 HGL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Champagne 21187 HGL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131419/champagne-21187-hgl-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Champagne 21187 HGL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07125348/champagne-21187-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07125348/champagne-21187-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Champagne 21187 HGL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Champagne 22099 HGL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Champagne 22099 HGL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131424/champagne-22099-hgl-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Champagne 22099 HGL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07125454/champagne-22099-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07125454/champagne-22099-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Champagne 22099 HGL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Early Snow Cambric 49959 HGL SH V"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Early Snow Cambric 49959 HGL SH V"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131429/early-snow-cambric-49959-hgl-sh-v-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Early Snow Cambric 49959 HGL SH V"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07125603/early-snow-cambric-49959-hgl-sh-v-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07125603/early-snow-cambric-49959-hgl-sh-v-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Early Snow Cambric 49959 HGL SH V')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Fiesta Rose 22115 HGL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Fiesta Rose 22115 HGL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131433/fiesta-rose-22115-hgl-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Fiesta Rose 22115 HGL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07125709/fiesta-rose-22115-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07125709/fiesta-rose-22115-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Fiesta Rose 22115 HGL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Frosty White 21091 HGL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Frosty White 21091 HGL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131437/frosty-white-21091-hgl-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Frosty White 21091 HGL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07125814/frosty-white-21091-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07125814/frosty-white-21091-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Frosty White 21091 HGL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Handspun Cambric 49960 HGL SH V"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Handspun Cambric 49960 HGL SH V"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131442/handspun-cambric-49960-hgl-sh-v-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Handspun Cambric 49960 HGL SH V"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07125931/handspun-cambric-49960-hgl-sh-v-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07125931/handspun-cambric-49960-hgl-sh-v-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Handspun Cambric 49960 HGL SH V')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Knotty Smoked Maple 14938 HGL RH V"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Knotty Smoked Maple 14938 HGL RH V"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131446/knotty-smoked-maple-14938-hgl-rh-v-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Knotty Smoked Maple 14938 HGL RH V"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07130046/knotty-smoked-maple-14938-hgl-rh-v-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07130046/knotty-smoked-maple-14938-hgl-rh-v-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Knotty Smoked Maple 14938 HGL RH V')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Orchard Delight 10592 HGL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Orchard Delight 10592 HGL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131452/orchard-delight-10592-hgl-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Orchard Delight 10592 HGL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07130203/orchard-delight-10592-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07130203/orchard-delight-10592-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Orchard Delight 10592 HGL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Poppy 21004 HGL"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Poppy 21004 HGL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131457/poppy-21004-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Poppy 21004 HGL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07130314/poppy-21004-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07130314/poppy-21004-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Poppy 21004 HGL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Rock Painting 44776 HGL RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Rock Painting 44776 HGL RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131502/rock-painting-44776-hgl-rh-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Rock Painting 44776 HGL RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07130430/rock-painting-44776-hgl-rh-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07130430/rock-painting-44776-hgl-rh-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Rock Painting 44776 HGL RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Saffron 21024 HGL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Saffron 21024 HGL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131506/saffron-21024-hgl-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Saffron 21024 HGL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07130541/saffron-21024-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07130541/saffron-21024-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Saffron 21024 HGL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Shangrila 21055 HGL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Shangrila 21055 HGL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131510/shangrila-21055-hgl-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Shangrila 21055 HGL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07130650/shangrila-21055-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07130650/shangrila-21055-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Shangrila 21055 HGL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Shore 22122 HGL"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Shore 22122 HGL"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131515/shore-22122-hgl-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Shore 22122 HGL"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07130758/shore-22122-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07130758/shore-22122-hgl-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Shore 22122 HGL')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Shore 22122"
                                                class="img-fluid skip-lazy gallery-texture-image" alt="Shore 22122"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131520/shore-22122-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Shore 22122"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07130907/shore-22122-high-gloss-laminates-customised-modular-kitchen-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07130907/shore-22122-high-gloss-laminates-customised-modular-kitchen-designs.jpg', 'Shore 22122')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Trooper 22102 MR+"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Trooper 22102 MR+"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131524/trooper-22102-mr-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Trooper 22102 MR+"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07131017/trooper-22102-mr-high-gloss-laminates-customised-modular-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07131017/trooper-22102-mr-high-gloss-laminates-customised-modular-kitchen-interior-designs.jpg', 'Trooper 22102 MR+')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Tropical Walnut 14530 HGL RH"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Tropical Walnut 14530 HGL RH"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131529/tropical-walnut-14530-hgl-rh-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Tropical Walnut 14530 HGL RH"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07131131/tropical-walnut-14530-hgl-rh-high-gloss-laminates-customised-modular-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07131131/tropical-walnut-14530-hgl-rh-high-gloss-laminates-customised-modular-kitchen-interior-designs.jpg', 'Tropical Walnut 14530 HGL RH')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Warmy Smoked Maple 14937 HGL RH V"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Warmy Smoked Maple 14937 HGL RH V"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/07131533/warmy-smoked-maple-14937-hgl-rh-v-high-gloss-laminates-modular-kitchen-finish.jpg"
                                                gallery-alt="Warmy Smoked Maple 14937 HGL RH V"
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/07131244/warmy-smoked-maple-14937-hgl-rh-v-high-gloss-laminates-customised-modular-kitchen-interior-designs.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/07131244/warmy-smoked-maple-14937-hgl-rh-v-high-gloss-laminates-customised-modular-kitchen-interior-designs.jpg', 'Warmy Smoked Maple 14937 HGL RH V')"
                                                data-pin-nopin="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="image-gallery-5">
                                    <div class="galler-thumbnail-image-list">
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Beige Wood CL"
                                                class="img-fluid skip-lazy gallery-texture-image"
                                                alt="Beige Wood CL premium laminates abetti laminati finish for Modular Kitchen"
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170428/beige-wood-cl-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30143301/beige-wood-cl-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30143301/beige-wood-cl-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Black Sagar CL"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170433/black-sagar-cl-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30143414/black-sagar-cl-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30143414/black-sagar-cl-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Brazen Gold"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170437/brazen-gold-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30143522/brazen-gold-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30143522/brazen-gold-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Brown Kota"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170443/brown-kota-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30143634/brown-kota-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30143634/brown-kota-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Burch Wood"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170447/burch-wood-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30143743/burch-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30143743/burch-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Burnt Kota"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170453/burnt-kota-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30143856/burnt-kota-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30143856/burnt-kota-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Classic Teak"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170458/classic-teak-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30144008/classic-teak-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30144008/classic-teak-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Coal ST"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170503/coal-st-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30144121/coal-st-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30144121/coal-st-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Coco Walnut"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170508/coco-walnut-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30144229/coco-walnut-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30144229/coco-walnut-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Coffee Sagar CL"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170514/coffee-sagar-cl-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30144342/coffee-sagar-cl-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30144342/coffee-sagar-cl-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Creapo ST"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170518/creapo-st-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30144453/creapo-st-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30144453/creapo-st-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="CRM Kota"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170524/crm-kota-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30144604/crm-kota-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30144604/crm-kota-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Dahat Teak"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170530/dahat-teak-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30144716/dahat-teak-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30144716/dahat-teak-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Dinara Wood"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170536/dinara-wood-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30144836/dinara-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30144836/dinara-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Ebony"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170540/ebony-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30144946/ebony-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30144946/ebony-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Forest Root"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170546/forest-root-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30145117/forest-root-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30145117/forest-root-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Fossil Pine"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170552/fossil-pine-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30145228/fossil-pine-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30145228/fossil-pine-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Fungi Teak"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170557/fungi-teak-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30145345/fungi-teak-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30145345/fungi-teak-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Grey Kota"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170602/grey-kota-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30145501/grey-kota-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30145501/grey-kota-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Grey Lawa"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/07/30170423/grey-lawa-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/07/30143138/grey-lawa-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/07/30143138/grey-lawa-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Grey Oxido CL"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171042/grey-oxido-cl-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01164920/grey-oxido-cl-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01164920/grey-oxido-cl-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Havel Wood"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171047/havel-wood-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01165031/havel-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01165031/havel-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Java Teak"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171053/java-teak-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01165146/java-teak-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01165146/java-teak-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Kindel Wood"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171058/kindel-wood-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01165259/kindel-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01165259/kindel-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Mango SX"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171103/mango-sx-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01165403/mango-sx-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01165403/mango-sx-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Modern Wood"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171107/modern-wood-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01165516/modern-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01165516/modern-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="New Agate"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171112/new-agate-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01165627/new-agate-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01165627/new-agate-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Ovata Teak"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171116/ovata-teak-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01165737/ovata-teak-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01165737/ovata-teak-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Perugia Oak"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171120/perugia-oak-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01165848/perugia-oak-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01165848/perugia-oak-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Pitro ST"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171125/pitro-st-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01170005/pitro-st-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01170005/pitro-st-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Potomac Wood"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171129/potomac-wood-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01170114/potomac-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01170114/potomac-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="PRL White SX"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171134/prl-white-sx-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01170219/prl-white-sx-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01170219/prl-white-sx-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Resto Stone"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171138/resto-stone-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01170332/resto-stone-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01170332/resto-stone-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Rhino Teak"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171143/rhino-teak-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01170446/rhino-teak-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01170446/rhino-teak-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Rhino Wood"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171148/rhino-wood-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01170554/rhino-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01170554/rhino-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Rusto ST"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171153/rusto-st-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01170706/rusto-st-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01170706/rusto-st-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Sand CL"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171157/sand-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01170817/sand-cl-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01170817/sand-cl-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Scrape Teak"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171201/scrape-teak-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01170919/scrape-teak-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01170919/scrape-teak-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Scrap Steel"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171205/scrap-steel-st-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01171030/scrap-steel-st-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01171030/scrap-steel-st-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Shear Walnut"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01171037/shear-walnut-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01164809/shear-walnut-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01164809/shear-walnut-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Sheoak Wood"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204705/sheoak-wood-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01203611/sheoak-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01203611/sheoak-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Shimmer Stone"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204710/shimmer-stone-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01203720/shimmer-stone-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01203720/shimmer-stone-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Slato"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204714/slato-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01203827/slato-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01203827/slato-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Solano Wood"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204720/solano-wood-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01203940/solano-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01203940/solano-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="ST 01"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204724/st-01-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01204049/st-01-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01204049/st-01-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="ST 02"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204728/st-02-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01204201/st-02-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01204201/st-02-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="ST 03"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204732/st-03-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01204313/st-03-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01204313/st-03-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="ST 04"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204736/st-04-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01204425/st-04-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01204425/st-04-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Stch Slate"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204740/stch-slate-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01204541/stch-slate-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01204541/stch-slate-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Sugar Teak"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204744/sugar-teak-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01204653/sugar-teak-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01204653/sugar-teak-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Sunflower SX"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204749/sunflower-sx-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01202519/sunflower-sx-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01202519/sunflower-sx-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Tanned Ash"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204753/tanned-ash-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01202631/tanned-ash-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01202631/tanned-ash-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Tigress Wood"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204757/tigress-wood-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01202742/tigress-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01202742/tigress-wood-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Trieste Walnut"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204801/trieste-walnut-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01202853/trieste-walnut-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01202853/trieste-walnut-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="White Lawa"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204805/white-lawa-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01203004/white-lawa-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01203004/white-lawa-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="White ST"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204809/white-st-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01203114/white-st-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01203114/white-st-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="White Wood"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204813/white-wood-cl-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01203228/white-wood-cl-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01203228/white-wood-cl-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Wino ST"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204817/wino-st-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01203338/wino-st-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01203338/wino-st-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                        <div class="galler-thumbnail-image">
                                            <img data-toggle="tooltip" title="Wood VN"
                                                class="img-fluid skip-lazy gallery-texture-image" alt=""
                                                src="<?php echo base_url(); ?>assets/uploads/2020/08/01204659/wood-vn-premium-laminates.jpg"
                                                gallery-alt=""
                                                gallary-img="https://media.designcafe.com/wp-content/uploads/2020/08/01203451/wood-vn-abetti-laminati-modular-kitchen-premium-laminates.jpg"
                                                onclick="showImage('https://media.designcafe.com/wp-content/uploads/2020/08/01203451/wood-vn-abetti-laminati-modular-kitchen-premium-laminates.jpg', '')"
                                                data-pin-nopin="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="why-signing-up-title" style="text-align: center;">
                            <a class="common-link-button " data-toggle="modal" href="#contactUsModal">Book a Free Design
                                Consultation</a>
                            <a class="common-link-button new-cta-color-arrow-btn"
                                href="<?php echo base_url('web/modular_kitchen_design'); ?>">View More Kitchen Designs <i
                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
jQuery(document).ready(function($) {
    $('.galler-thumbnail-tab-name-list a').on('shown.bs.tab', function(e) {
        var first__img_url = $(
            ".gallary-image-tab-content .tab-pane.active .galler-thumbnail-image-list .galler-thumbnail-image:first-child img"
            ).attr('gallary-img');
        var first__alt_tag = $(
            ".gallary-image-tab-content .tab-pane.active .galler-thumbnail-image-list .galler-thumbnail-image:first-child img"
            ).attr('gallery-alt');
        $("#currentImg").attr('src', first__img_url);
        $("#currentImg").attr('alt', first__alt_tag);
    })
});
    </script>

    <div style="background: #ffffff">
        <div class="container">
            <p class="footer-description-text">
                Disclaimer: The images on our site are for reference only. Please contact us to discuss your specific
                needs and to tailor a unique design for you.</p>
        </div>
    </div>