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
        background-image: url("../../ajax/libs/intl-tel-input/17.0.8/img/flags.png");
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
            background-image: url("../../ajax/libs/intl-tel-input/17.0.8/img/flags@2x.png")
        }
    }

    .contact-us-location-listing {
        text-align: center
    }

    .single-blog-entry-content h2 {
        font-size: 24px
    }

    .single-blog-entry-content dl:not(:last-child),
    .single-blog-entry-content hr:not(:last-child),
    .single-blog-entry-content p:not(:last-child),
    .single-blog-entry-content table:not(:last-child),
    .single-blog-entry-content ul:not(:last-child) {
        margin-bottom: 32px
    }

    .single-blog-entry-content h1,
    .single-blog-entry-content h2,
    .single-blog-entry-content h3 {
        font-weight: 500;
        text-transform: capitalize;
        letter-spacing: .4px
    }

    .blog-widget-area .widget:first-child {
        padding: 0 0 35px
    }

    .search-form {
        align-items: center
    }

    @media(min-width:320px) and (max-width:479px) {
        span.wpcf7-not-valid-tip {
            font-size: 16px;
            padding: 10px 0
        }

        .site-info {
            padding: 0 50px
        }

        .single-blog-entry-content {
            padding-top: 15px
        }

        .single-blog-entry-content dl:not(:last-child),
        .single-blog-entry-content hr:not(:last-child),
        .single-blog-entry-content p:not(:last-child),
        .single-blog-entry-content table:not(:last-child),
        .single-blog-entry-content ul:not(:last-child) {
            margin-bottom: 30px
        }

        .single-blog-entry-content em {
            font-weight: 300
        }

        .single-blog-entry-content h2 {
            font-size: 18px;
            line-height: 22px
        }

        .fa-facebook:before,
        .fa-linkedin:before,
        .fa-twitter:before,
        .fa-whatsapp:before {
            margin-right: 6px
        }

        .single-blog-entry-content p:first-child {
            margin-bottom: 20px
        }

        .single-blog-entry-content ul {
            margin-bottom: 0
        }
    }

    @media(min-width:480px) and (max-width:767px) {
        span.wpcf7-not-valid-tip {
            font-size: 16px;
            padding: 10px 0
        }

        .site-info {
            padding: 0
        }

        .single-blog-entry-content {
            padding-top: 15px
        }

        .single-blog-entry-content dl:not(:last-child),
        .single-blog-entry-content hr:not(:last-child),
        .single-blog-entry-content p:not(:last-child),
        .single-blog-entry-content table:not(:last-child),
        .single-blog-entry-content ul:not(:last-child) {
            margin-bottom: 30px
        }

        .single-blog-entry-content em {
            font-weight: 300
        }

        .single-blog-entry-content h2 {
            font-size: 18px;
            line-height: 22px
        }

        .fa-facebook:before,
        .fa-linkedin:before,
        .fa-twitter:before,
        .fa-whatsapp:before {
            margin-right: 6px
        }

        .single-blog-entry-content p:first-child {
            margin-bottom: 20px
        }

        .single-blog-entry-content ul {
            margin-bottom: 0
        }
    }

    @media(min-width:768px) and (max-width:1023px) {
        span.wpcf7-not-valid-tip {
            font-size: 16px;
            padding: 10px 0
        }

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
        background: var(--wpr-bg-c28b4623-6868-4fb7-8f02-4fb8dd189f47) -78px -93px no-repeat
    }

    div.pp_default .pp_top .pp_middle {
        background: var(--wpr-bg-e44d701f-97e7-419e-a096-bcd4b497c3d5) top left repeat-x
    }

    div.pp_default .pp_top .pp_right {
        background: var(--wpr-bg-7ab1ef04-5229-4c9d-8cdc-77cc3ff7ee89) -112px -93px no-repeat
    }

    div.pp_default .pp_content .ppt {
        color: #f8f8f8
    }

    div.pp_default .pp_content_container .pp_left {
        background: var(--wpr-bg-665c2357-df9c-4498-890b-b0fec2a8d946) -7px 0 repeat-y;
        padding-left: 13px
    }

    div.pp_default .pp_content_container .pp_right {
        background: var(--wpr-bg-41ff6839-1371-49ef-a3b1-efa512955ca1) top right repeat-y;
        padding-right: 13px
    }

    div.pp_default .pp_next:hover {
        background: var(--wpr-bg-d9e30e9b-2479-4b0b-8ccb-f2d396c58c09) center right no-repeat;
        cursor: pointer
    }

    div.pp_default .pp_previous:hover {
        background: var(--wpr-bg-eaf21d81-0c5e-47de-8e15-4805dd9ef9b6) center left no-repeat;
        cursor: pointer
    }

    div.pp_default .pp_expand {
        background: var(--wpr-bg-cc6500df-1c0b-48f1-8825-45f1ab756a2d) 0 -29px no-repeat;
        cursor: pointer;
        width: 28px;
        height: 28px
    }

    div.pp_default .pp_expand:hover {
        background: var(--wpr-bg-74f8cdd7-225c-44a8-b536-f93fd57e5359) 0 -56px no-repeat;
        cursor: pointer
    }

    div.pp_default .pp_contract {
        background: var(--wpr-bg-d238d68d-e54a-4077-b65b-d1c34d95c46b) 0 -84px no-repeat;
        cursor: pointer;
        width: 28px;
        height: 28px
    }

    div.pp_default .pp_contract:hover {
        background: var(--wpr-bg-15643c17-8093-48e1-82ca-ad04e8d39920) 0 -113px no-repeat;
        cursor: pointer
    }

    div.pp_default .pp_close {
        width: 30px;
        height: 30px;
        background: var(--wpr-bg-fdb081b3-54c1-4e5f-a142-f15e2446dfc8) 2px 1px no-repeat;
        cursor: pointer
    }

    div.pp_default .pp_gallery ul li a {
        background: var(--wpr-bg-52b223d3-4033-4ff5-8e23-7400d25ff5b3) center center #f8f8f8;
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
        background: var(--wpr-bg-76f02098-0523-4e47-a8d5-cdad1017f083) -51px 1px no-repeat;
        height: 30px;
        width: 30px
    }

    div.pp_default .pp_nav .pp_pause {
        background-position: -51px -29px
    }

    div.pp_default a.pp_arrow_next,
    div.pp_default a.pp_arrow_previous {
        background: var(--wpr-bg-d051ab07-ec26-4670-bd5c-3dcf42ea0168) -31px -3px no-repeat;
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
        background: var(--wpr-bg-2c1b3fc0-afe7-4cd9-a3e8-0f0a9489e891) -78px -127px no-repeat
    }

    div.pp_default .pp_bottom .pp_middle {
        background: var(--wpr-bg-3b65263f-e6c6-4aea-aef7-509c6cd2d220) bottom left repeat-x
    }

    div.pp_default .pp_bottom .pp_right {
        background: var(--wpr-bg-f79c4f04-3d19-4798-b412-3639dd5cb591) -112px -127px no-repeat
    }

    div.pp_default .pp_loaderIcon {
        background: var(--wpr-bg-1dd4c65b-17a4-4987-8369-7f50aa437936) center center no-repeat
    }

    div.facebook .pp_top .pp_left {
        background: var(--wpr-bg-3daa91b1-80aa-4681-bc35-0931d257a033) -88px -53px no-repeat
    }

    div.facebook .pp_top .pp_middle {
        background: var(--wpr-bg-729b1d92-a29a-455d-bbd0-18eb0d653de7) top left repeat-x
    }

    div.facebook .pp_top .pp_right {
        background: var(--wpr-bg-651eeb6b-c081-4fcc-ba56-612832c146b7) -110px -53px no-repeat
    }

    div.facebook .pp_content_container .pp_left {
        background: var(--wpr-bg-25859d50-11e8-469b-a5c1-5a07adedb4e1) top left repeat-y
    }

    div.facebook .pp_content_container .pp_right {
        background: var(--wpr-bg-d2bea238-58b6-4fad-82fa-63d57f4542ef) top right repeat-y
    }

    div.facebook .pp_expand {
        background: var(--wpr-bg-4dbf00ac-3d67-4eb8-8a09-57ff55e147d0) -31px -26px no-repeat;
        cursor: pointer
    }

    div.facebook .pp_expand:hover {
        background: var(--wpr-bg-02d74212-1939-439b-9786-a8607fb0a692) -31px -47px no-repeat;
        cursor: pointer
    }

    div.facebook .pp_contract {
        background: var(--wpr-bg-4979420d-8b16-4acf-96b3-e43e75774690) 0 -26px no-repeat;
        cursor: pointer
    }

    div.facebook .pp_contract:hover {
        background: var(--wpr-bg-fbec5127-97c9-45a5-a547-da5efd141e13) 0 -47px no-repeat;
        cursor: pointer
    }

    div.facebook .pp_close {
        width: 22px;
        height: 22px;
        background: var(--wpr-bg-eaf27d4d-c007-4afe-bee8-69d1a211ed76) -1px -1px no-repeat;
        cursor: pointer
    }

    div.facebook .pp_description {
        margin: 0 37px 0 0
    }

    div.facebook .pp_loaderIcon {
        background: var(--wpr-bg-44c88206-846b-40df-b101-6d0e5ff5eca1) center center no-repeat
    }

    div.facebook .pp_arrow_previous {
        background: var(--wpr-bg-e063a3b9-64d8-412a-b968-8495d9f4be6b) 0 -71px no-repeat;
        height: 22px;
        margin-top: 0;
        width: 22px
    }

    div.facebook .pp_arrow_previous.disabled {
        background-position: 0 -96px;
        cursor: default
    }

    div.facebook .pp_arrow_next {
        background: var(--wpr-bg-1e90ab6f-3700-42ae-8ad3-72a91ba5ecdf) -32px -71px no-repeat;
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
        background: var(--wpr-bg-bb660b0f-6b39-4523-9e71-bb2aa5f43ee4) -1px -123px no-repeat;
        height: 22px;
        width: 22px
    }

    div.facebook .pp_nav .pp_pause {
        background: var(--wpr-bg-9a189d14-d62f-45c5-a07b-b80ff8c9f9d8) -32px -123px no-repeat;
        height: 22px;
        width: 22px
    }

    div.facebook .pp_next:hover {
        background: var(--wpr-bg-d2ae82de-3bb9-4d6c-adf3-22ef513d15e7) center right no-repeat;
        cursor: pointer
    }

    div.facebook .pp_previous:hover {
        background: var(--wpr-bg-64705d11-1ab3-48f0-bce4-efd0fe3edadc) center left no-repeat;
        cursor: pointer
    }

    div.facebook .pp_bottom .pp_left {
        background: var(--wpr-bg-f412697e-7b15-4b37-9e79-d4832facc1df) -88px -80px no-repeat
    }

    div.facebook .pp_bottom .pp_middle {
        background: var(--wpr-bg-65994a50-8831-438a-a0ac-c36605fcc18e) top left repeat-x
    }

    div.facebook .pp_bottom .pp_right {
        background: var(--wpr-bg-ac506f46-3cb4-41d6-8638-a8a71ce550aa) -110px -80px no-repeat
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
        background: var(--wpr-bg-bb781192-885c-469e-872f-e6bb387dc305) no-repeat;
        display: block;
        height: 33px;
        width: 50px
    }

    .pp_gallery .pp_arrow_next,
    .pp_gallery .pp_arrow_previous {
        margin-top: 7px !important
    }

    a.pp_next {
        background: var(--wpr-bg-9d5965e3-f957-4dec-b257-4857fa8b77e6) 10000px 10000px no-repeat;
        display: block;
        float: right;
        height: 100%;
        text-indent: -10000px;
        width: 49%
    }

    a.pp_previous {
        background: var(--wpr-bg-9dd17490-4eb7-476e-b712-f80207cddec0) 10000px 10000px no-repeat;
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

    :root :where(.wp-block-separator.is-style-dots) {
        height: auto;
        line-height: 1;
        text-align: center
    }

    :root :where(.wp-block-separator.is-style-dots):before {
        color: currentColor;
        content: "···";
        font-family: serif;
        font-size: 1.5em;
        letter-spacing: 2em;
        padding-left: 2em
    }

    :root :where(.wp-block-site-logo.is-style-rounded) {
        border-radius: 9999px
    }

    :root :where(.wp-block-site-title a) {
        color: inherit
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link {
        background-color: #f0f0f0;
        color: #444
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-amazon {
        background-color: #f90;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-bandcamp {
        background-color: #1ea0c3;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-behance {
        background-color: #0757fe;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-bluesky {
        background-color: #0a7aff;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-codepen {
        background-color: #1e1f26;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-deviantart {
        background-color: #02e49b;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-dribbble {
        background-color: #e94c89;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-dropbox {
        background-color: #4280ff;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-etsy {
        background-color: #f45800;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-facebook {
        background-color: #1778f2;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-fivehundredpx {
        background-color: #000;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-flickr {
        background-color: #0461dd;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-foursquare {
        background-color: #e65678;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-github {
        background-color: #24292d;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-goodreads {
        background-color: #eceadd;
        color: #382110
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-google {
        background-color: #ea4434;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-gravatar {
        background-color: #1d4fc4;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-instagram {
        background-color: #f00075;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-lastfm {
        background-color: #e21b24;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-linkedin {
        background-color: #0d66c2;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-mastodon {
        background-color: #3288d4;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-medium {
        background-color: #000;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-meetup {
        background-color: #f6405f;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-patreon {
        background-color: #000;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-pinterest {
        background-color: #e60122;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-pocket {
        background-color: #ef4155;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-reddit {
        background-color: #ff4500;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-skype {
        background-color: #0478d7;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-snapchat {
        background-color: #fefc00;
        color: #fff;
        stroke: #000
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-soundcloud {
        background-color: #ff5600;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-spotify {
        background-color: #1bd760;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-telegram {
        background-color: #2aabee;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-threads {
        background-color: #000;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-tiktok {
        background-color: #000;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-tumblr {
        background-color: #011835;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-twitch {
        background-color: #6440a4;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-twitter {
        background-color: #1da1f2;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-vimeo {
        background-color: #1eb7ea;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-vk {
        background-color: #4680c2;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-wordpress {
        background-color: #3499cd;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-whatsapp {
        background-color: #25d366;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-x {
        background-color: #000;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-yelp {
        background-color: #d32422;
        color: #fff
    }

    :where(.wp-block-social-links:not(.is-style-logos-only)) .wp-social-link-youtube {
        background-color: red;
        color: #fff
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link {
        background: 0 0
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link svg {
        height: 1.25em;
        width: 1.25em
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-amazon {
        color: #f90
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-bandcamp {
        color: #1ea0c3
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-behance {
        color: #0757fe
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-bluesky {
        color: #0a7aff
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-codepen {
        color: #1e1f26
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-deviantart {
        color: #02e49b
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-dribbble {
        color: #e94c89
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-dropbox {
        color: #4280ff
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-etsy {
        color: #f45800
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-facebook {
        color: #1778f2
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-fivehundredpx {
        color: #000
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-flickr {
        color: #0461dd
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-foursquare {
        color: #e65678
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-github {
        color: #24292d
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-goodreads {
        color: #382110
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-google {
        color: #ea4434
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-gravatar {
        color: #1d4fc4
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-instagram {
        color: #f00075
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-lastfm {
        color: #e21b24
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-linkedin {
        color: #0d66c2
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-mastodon {
        color: #3288d4
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-medium {
        color: #000
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-meetup {
        color: #f6405f
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-patreon {
        color: #000
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-pinterest {
        color: #e60122
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-pocket {
        color: #ef4155
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-reddit {
        color: #ff4500
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-skype {
        color: #0478d7
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-snapchat {
        color: #fff;
        stroke: #000
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-soundcloud {
        color: #ff5600
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-spotify {
        color: #1bd760
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-telegram {
        color: #2aabee
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-threads {
        color: #000
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-tiktok {
        color: #000
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-tumblr {
        color: #011835
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-twitch {
        color: #6440a4
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-twitter {
        color: #1da1f2
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-vimeo {
        color: #1eb7ea
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-vk {
        color: #4680c2
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-whatsapp {
        color: #25d366
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-wordpress {
        color: #3499cd
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-x {
        color: #000
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-yelp {
        color: #d32422
    }

    :where(.wp-block-social-links.is-style-logos-only) .wp-social-link-youtube {
        color: red
    }

    :root :where(.wp-block-social-links .wp-social-link a) {
        padding: .25em
    }

    :root :where(.wp-block-social-links.is-style-logos-only .wp-social-link a) {
        padding: 0
    }

    :root :where(.wp-block-social-links.is-style-pill-shape .wp-social-link a) {
        padding-left: .66667em;
        padding-right: .66667em
    }

    :root :where(.wp-block-tag-cloud.is-style-outline) {
        display: flex;
        flex-wrap: wrap;
        gap: 1ch
    }

    :root :where(.wp-block-tag-cloud.is-style-outline a) {
        border: 1px solid;
        font-size: unset !important;
        margin-right: 0;
        padding: 1ch 2ch;
        text-decoration: none !important
    }

    :where(.wp-block-term-description) {
        margin-bottom: var(--wp--style--block-gap);
        margin-top: var(--wp--style--block-gap)
    }

    :where(pre.wp-block-verse) {
        font-family: inherit
    }

    :root {
        --wp--preset--font-size--normal: 16px;
        --wp--preset--font-size--huge: 42px
    }

    .aligncenter {
        clear: both
    }

    html :where(.has-border-color) {
        border-style: solid
    }

    html :where([style*=border-top-color]) {
        border-top-style: solid
    }

    html :where([style*=border-right-color]) {
        border-right-style: solid
    }

    html :where([style*=border-bottom-color]) {
        border-bottom-style: solid
    }

    html :where([style*=border-left-color]) {
        border-left-style: solid
    }

    html :where([style*=border-width]) {
        border-style: solid
    }

    html :where([style*=border-top-width]) {
        border-top-style: solid
    }

    html :where([style*=border-right-width]) {
        border-right-style: solid
    }

    html :where([style*=border-bottom-width]) {
        border-bottom-style: solid
    }

    html :where([style*=border-left-width]) {
        border-left-style: solid
    }

    html :where(img[class*=wp-image-]) {
        height: auto;
        max-width: 100%
    }

    :where(figure) {
        margin: 0 0 1em
    }

    html :where(.is-position-sticky) {
        --wp-admin--admin-bar--position-offset: var(--wp-admin--admin-bar--height, 0px)
    }

    @media screen and (max-width:600px) {
        html :where(.is-position-sticky) {
            --wp-admin--admin-bar--position-offset: 0px
        }
    }

    :root {
        --wp--preset--aspect-ratio--square: 1;
        --wp--preset--aspect-ratio--4-3: 4/3;
        --wp--preset--aspect-ratio--3-4: 3/4;
        --wp--preset--aspect-ratio--3-2: 3/2;
        --wp--preset--aspect-ratio--2-3: 2/3;
        --wp--preset--aspect-ratio--16-9: 16/9;
        --wp--preset--aspect-ratio--9-16: 9/16;
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, .2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, .4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, .2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1)
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

    :root :where(.wp-block-pullquote) {
        font-size: 1.5em;
        line-height: 1.6
    }

    a.pinit-button.custom,
    a.pinit-button.old_default {
        text-indent: -9999em !important
    }

    a.pinit-button.custom span,
    a.pinit-button.old_default span {
        display: block;
        background-color: transparent !important;
        background-repeat: no-repeat !important;
        background-position: 0 0 !important
    }

    a.pinit-button.old_default span {
        background-image: var(--wpr-bg-8540589b-3440-4db6-8e42-76517d8579f6) !important
    }

    a.pinit-button.default {
        display: block;
        overflow: hidden;
        text-decoration: none;
        color: #fff;
        background-color: #bd081c
    }

    a.pinit-button.default:hover {
        background-color: #a50718
    }

    a.pinit-button.default [class*=" jpibfi-icon-"],
    a.pinit-button.default [class^=jpibfi-icon-] {
        color: #fff;
        display: block
    }

    a.pinit-button.default [class*=" jpibfi-icon-"]:hover,
    a.pinit-button.default [class^=jpibfi-icon-]:hover {
        color: #fff
    }

    a.pinit-button.default [class*=" jpibfi-icon-"]:before,
    a.pinit-button.default [class^=jpibfi-icon-]:before {
        display: block;
        position: absolute;
        top: 50%;
        left: 50%
    }

    [class*=" jpibfi-icon-"],
    [class^=jpibfi-icon-] {
        font-family: jpibfi-font !important;
        speak: none;
        font-style: normal;
        font-weight: 400;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    a.pinit-button {
        position: absolute;
        display: none
    }

    :root {
        --blue: #007bff;
        --indigo: #6610f2;
        --purple: #6f42c1;
        --pink: #e83e8c;
        --red: #dc3545;
        --orange: #fd7e14;
        --yellow: #ffc107;
        --green: #28a745;
        --teal: #20c997;
        --cyan: #17a2b8;
        --white: #fff;
        --gray: #6c757d;
        --gray-dark: #343a40;
        --primary: #7C008C;
        --secondary: #6c757d;
        --success: #28a745;
        --info: #17a2b8;
        --warning: #ffc107;
        --danger: #dc3545;
        --light: #f8f9fa;
        --dark: #343a40;
        --breakpoint-xs: 0;
        --breakpoint-sm: 576px;
        --breakpoint-md: 768px;
        --breakpoint-lg: 992px;
        --breakpoint-xl: 1200px;
        --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
    }

    *,
    ::after,
    ::before {
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: transparent
    }

    article,
    footer,
    header,
    main,
    nav,
    section {
        display: block
    }

    body {
        margin: 0;
        font-family: Montserrat, sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff
    }

    [tabindex="-1"]:focus {
        outline: 0 !important
    }

    hr {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        height: 0;
        overflow: visible
    }

    h1,
    h2,
    h3 {
        margin-top: 0;
        margin-bottom: .5rem
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem
    }

    address {
        margin-bottom: 1rem;
        font-style: normal;
        line-height: inherit
    }

    dl,
    ul {
        margin-top: 0;
        margin-bottom: 1rem
    }

    ul ul {
        margin-bottom: 0
    }

    dt {
        font-weight: 700
    }

    dd {
        margin-bottom: .5rem;
        margin-left: 0
    }

    b,
    strong {
        font-weight: bolder
    }

    small {
        font-size: 80%
    }

    sup {
        position: relative;
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline
    }

    sup {
        top: -.5em
    }

    a {
        color: #7c008c;
        text-decoration: none;
        background-color: transparent
    }

    a:hover {
        color: #380040;
        text-decoration: underline
    }

    a:not([href]):not([tabindex]) {
        color: inherit;
        text-decoration: none
    }

    a:not([href]):not([tabindex]):focus,
    a:not([href]):not([tabindex]):hover {
        color: inherit;
        text-decoration: none
    }

    a:not([href]):not([tabindex]):focus {
        outline: 0
    }

    code,
    pre {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        font-size: 1em
    }

    pre {
        margin-top: 0;
        margin-bottom: 1rem;
        overflow: auto
    }

    img {
        vertical-align: middle;
        border-style: none
    }

    svg {
        overflow: hidden;
        vertical-align: middle
    }

    table {
        border-collapse: collapse
    }

    caption {
        padding-top: .75rem;
        padding-bottom: .75rem;
        color: #6c757d;
        text-align: left;
        caption-side: bottom
    }

    th {
        text-align: inherit
    }

    label {
        display: inline-block;
        margin-bottom: .5rem
    }

    button {
        border-radius: 0
    }

    button:focus {
        outline: dotted 1px;
        outline: -webkit-focus-ring-color auto 5px
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit
    }

    button,
    input {
        overflow: visible
    }

    button,
    select {
        text-transform: none
    }

    select {
        word-wrap: normal
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
        -webkit-appearance: button
    }

    [type=button]:not(:disabled),
    [type=reset]:not(:disabled),
    [type=submit]:not(:disabled),
    button:not(:disabled) {
        cursor: pointer
    }

    [type=button]::-moz-focus-inner,
    [type=reset]::-moz-focus-inner,
    [type=submit]::-moz-focus-inner,
    button::-moz-focus-inner {
        padding: 0;
        border-style: none
    }

    input[type=checkbox],
    input[type=radio] {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0
    }

    input[type=date],
    input[type=month],
    input[type=time] {
        -webkit-appearance: listbox
    }

    textarea {
        overflow: auto;
        resize: vertical
    }

    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0
    }

    legend {
        display: block;
        width: 100%;
        max-width: 100%;
        padding: 0;
        margin-bottom: .5rem;
        font-size: 1.5rem;
        line-height: inherit;
        color: inherit;
        white-space: normal
    }

    progress {
        vertical-align: baseline
    }

    [type=number]::-webkit-inner-spin-button,
    [type=number]::-webkit-outer-spin-button {
        height: auto
    }

    [type=search] {
        outline-offset: -2px;
        -webkit-appearance: none
    }

    [type=search]::-webkit-search-decoration {
        -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button
    }

    output {
        display: inline-block
    }

    template {
        display: none
    }

    [hidden] {
        display: none !important
    }

    h1,
    h2,
    h3 {
        margin-bottom: .5rem;
        font-weight: 500;
        line-height: 1.2
    }

    h1 {
        font-size: 2.5rem
    }

    h2 {
        font-size: 2rem
    }

    h3 {
        font-size: 1.75rem
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1)
    }

    .small,
    small {
        font-size: 80%;
        font-weight: 400
    }

    .img-fluid {
        max-width: 100%;
        height: auto
    }

    code {
        font-size: 87.5%;
        color: #e83e8c;
        word-break: break-word
    }

    a>code {
        color: inherit
    }

    pre {
        display: block;
        font-size: 87.5%;
        color: #212529
    }

    pre code {
        font-size: inherit;
        color: inherit;
        word-break: normal
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
    }

    @media (min-width:576px) {
        .container {
            max-width: 540px
        }
    }

    @media (min-width:768px) {
        .container {
            max-width: 720px
        }
    }

    @media (min-width:992px) {
        .container {
            max-width: 960px
        }
    }

    @media (min-width:1200px) {
        .container {
            max-width: 1140px
        }
    }

    .container-fluid {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
    }

    .row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px
    }

    .col-12,
    .col-lg-4,
    .col-lg-6,
    .col-lg-8,
    .col-md-12 {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px
    }

    .col-12 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    @media (min-width:768px) {
        .col-md-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }
    }

    @media (min-width:992px) {
        .col-lg-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .col-lg-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-lg-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
            max-width: 66.66667%
        }
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529
    }

    .table td,
    .table th {
        padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6
    }

    .table tbody+tbody {
        border-top: 2px solid #dee2e6
    }

    .form-control,
    .wpcf7 input[type=color],
    .wpcf7 input[type=date],
    .wpcf7 input[type=email],
    .wpcf7 input[type=file],
    .wpcf7 input[type=month],
    .wpcf7 input[type=number],
    .wpcf7 input[type=range],
    .wpcf7 input[type=search],
    .wpcf7 input[type=submit],
    .wpcf7 input[type=tel],
    .wpcf7 input[type=text],
    .wpcf7 input[type=time],
    .wpcf7 input[type=url],
    .wpcf7 input[type=week],
    .wpcf7 select,
    .wpcf7 textarea {
        display: block;
        width: 100%;
        height: calc(1.5em + .75rem + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        -webkit-transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {

        .form-control,
        .wpcf7 input[type=color],
        .wpcf7 input[type=date],
        .wpcf7 input[type=email],
        .wpcf7 input[type=file],
        .wpcf7 input[type=month],
        .wpcf7 input[type=number],
        .wpcf7 input[type=range],
        .wpcf7 input[type=search],
        .wpcf7 input[type=submit],
        .wpcf7 input[type=tel],
        .wpcf7 input[type=text],
        .wpcf7 input[type=time],
        .wpcf7 input[type=url],
        .wpcf7 input[type=week],
        .wpcf7 select,
        .wpcf7 textarea {
            -webkit-transition: none;
            transition: none
        }
    }

    .form-control::-ms-expand,
    .wpcf7 input[type=color]::-ms-expand,
    .wpcf7 input[type=date]::-ms-expand,
    .wpcf7 input[type=email]::-ms-expand,
    .wpcf7 input[type=file]::-ms-expand,
    .wpcf7 input[type=month]::-ms-expand,
    .wpcf7 input[type=number]::-ms-expand,
    .wpcf7 input[type=range]::-ms-expand,
    .wpcf7 input[type=search]::-ms-expand,
    .wpcf7 input[type=submit]::-ms-expand,
    .wpcf7 input[type=tel]::-ms-expand,
    .wpcf7 input[type=text]::-ms-expand,
    .wpcf7 input[type=time]::-ms-expand,
    .wpcf7 input[type=url]::-ms-expand,
    .wpcf7 input[type=week]::-ms-expand,
    .wpcf7 select::-ms-expand,
    .wpcf7 textarea::-ms-expand {
        background-color: transparent;
        border: 0
    }

    .form-control:focus,
    .wpcf7 input:focus[type=color],
    .wpcf7 input:focus[type=date],
    .wpcf7 input:focus[type=email],
    .wpcf7 input:focus[type=file],
    .wpcf7 input:focus[type=month],
    .wpcf7 input:focus[type=number],
    .wpcf7 input:focus[type=range],
    .wpcf7 input:focus[type=search],
    .wpcf7 input:focus[type=submit],
    .wpcf7 input:focus[type=tel],
    .wpcf7 input:focus[type=text],
    .wpcf7 input:focus[type=time],
    .wpcf7 input:focus[type=url],
    .wpcf7 input:focus[type=week],
    .wpcf7 select:focus,
    .wpcf7 textarea:focus {
        color: #495057;
        background-color: #fff;
        border-color: #e30dff;
        outline: 0;
        -webkit-box-shadow: 0 0 0 .2rem rgba(124, 0, 140, .25);
        box-shadow: 0 0 0 .2rem rgba(124, 0, 140, .25)
    }

    .form-control::-webkit-input-placeholder,
    .wpcf7 input[type=color]::-webkit-input-placeholder,
    .wpcf7 input[type=date]::-webkit-input-placeholder,
    .wpcf7 input[type=email]::-webkit-input-placeholder,
    .wpcf7 input[type=file]::-webkit-input-placeholder,
    .wpcf7 input[type=month]::-webkit-input-placeholder,
    .wpcf7 input[type=number]::-webkit-input-placeholder,
    .wpcf7 input[type=range]::-webkit-input-placeholder,
    .wpcf7 input[type=search]::-webkit-input-placeholder,
    .wpcf7 input[type=submit]::-webkit-input-placeholder,
    .wpcf7 input[type=tel]::-webkit-input-placeholder,
    .wpcf7 input[type=text]::-webkit-input-placeholder,
    .wpcf7 input[type=time]::-webkit-input-placeholder,
    .wpcf7 input[type=url]::-webkit-input-placeholder,
    .wpcf7 input[type=week]::-webkit-input-placeholder,
    .wpcf7 select::-webkit-input-placeholder,
    .wpcf7 textarea::-webkit-input-placeholder {
        color: #6c757d;
        opacity: 1
    }

    .form-control::-moz-placeholder,
    .wpcf7 input[type=color]::-moz-placeholder,
    .wpcf7 input[type=date]::-moz-placeholder,
    .wpcf7 input[type=email]::-moz-placeholder,
    .wpcf7 input[type=file]::-moz-placeholder,
    .wpcf7 input[type=month]::-moz-placeholder,
    .wpcf7 input[type=number]::-moz-placeholder,
    .wpcf7 input[type=range]::-moz-placeholder,
    .wpcf7 input[type=search]::-moz-placeholder,
    .wpcf7 input[type=submit]::-moz-placeholder,
    .wpcf7 input[type=tel]::-moz-placeholder,
    .wpcf7 input[type=text]::-moz-placeholder,
    .wpcf7 input[type=time]::-moz-placeholder,
    .wpcf7 input[type=url]::-moz-placeholder,
    .wpcf7 input[type=week]::-moz-placeholder,
    .wpcf7 select::-moz-placeholder,
    .wpcf7 textarea::-moz-placeholder {
        color: #6c757d;
        opacity: 1
    }

    .form-control:-ms-input-placeholder,
    .wpcf7 input[type=color]:-ms-input-placeholder,
    .wpcf7 input[type=date]:-ms-input-placeholder,
    .wpcf7 input[type=email]:-ms-input-placeholder,
    .wpcf7 input[type=file]:-ms-input-placeholder,
    .wpcf7 input[type=month]:-ms-input-placeholder,
    .wpcf7 input[type=number]:-ms-input-placeholder,
    .wpcf7 input[type=range]:-ms-input-placeholder,
    .wpcf7 input[type=search]:-ms-input-placeholder,
    .wpcf7 input[type=submit]:-ms-input-placeholder,
    .wpcf7 input[type=tel]:-ms-input-placeholder,
    .wpcf7 input[type=text]:-ms-input-placeholder,
    .wpcf7 input[type=time]:-ms-input-placeholder,
    .wpcf7 input[type=url]:-ms-input-placeholder,
    .wpcf7 input[type=week]:-ms-input-placeholder,
    .wpcf7 select:-ms-input-placeholder,
    .wpcf7 textarea:-ms-input-placeholder {
        color: #6c757d;
        opacity: 1
    }

    .form-control::-ms-input-placeholder,
    .wpcf7 input[type=color]::-ms-input-placeholder,
    .wpcf7 input[type=date]::-ms-input-placeholder,
    .wpcf7 input[type=email]::-ms-input-placeholder,
    .wpcf7 input[type=file]::-ms-input-placeholder,
    .wpcf7 input[type=month]::-ms-input-placeholder,
    .wpcf7 input[type=number]::-ms-input-placeholder,
    .wpcf7 input[type=range]::-ms-input-placeholder,
    .wpcf7 input[type=search]::-ms-input-placeholder,
    .wpcf7 input[type=submit]::-ms-input-placeholder,
    .wpcf7 input[type=tel]::-ms-input-placeholder,
    .wpcf7 input[type=text]::-ms-input-placeholder,
    .wpcf7 input[type=time]::-ms-input-placeholder,
    .wpcf7 input[type=url]::-ms-input-placeholder,
    .wpcf7 input[type=week]::-ms-input-placeholder,
    .wpcf7 select::-ms-input-placeholder,
    .wpcf7 textarea::-ms-input-placeholder {
        color: #6c757d;
        opacity: 1
    }

    .form-control::placeholder,
    .wpcf7 input[type=color]::placeholder,
    .wpcf7 input[type=date]::placeholder,
    .wpcf7 input[type=email]::placeholder,
    .wpcf7 input[type=file]::placeholder,
    .wpcf7 input[type=month]::placeholder,
    .wpcf7 input[type=number]::placeholder,
    .wpcf7 input[type=range]::placeholder,
    .wpcf7 input[type=search]::placeholder,
    .wpcf7 input[type=submit]::placeholder,
    .wpcf7 input[type=tel]::placeholder,
    .wpcf7 input[type=text]::placeholder,
    .wpcf7 input[type=time]::placeholder,
    .wpcf7 input[type=url]::placeholder,
    .wpcf7 input[type=week]::placeholder,
    .wpcf7 select::placeholder,
    .wpcf7 textarea::placeholder {
        color: #6c757d;
        opacity: 1
    }

    .form-control:disabled,
    .wpcf7 input:disabled[type=color],
    .wpcf7 input:disabled[type=date],
    .wpcf7 input:disabled[type=email],
    .wpcf7 input:disabled[type=file],
    .wpcf7 input:disabled[type=month],
    .wpcf7 input:disabled[type=number],
    .wpcf7 input:disabled[type=range],
    .wpcf7 input:disabled[type=search],
    .wpcf7 input:disabled[type=submit],
    .wpcf7 input:disabled[type=tel],
    .wpcf7 input:disabled[type=text],
    .wpcf7 input:disabled[type=time],
    .wpcf7 input:disabled[type=url],
    .wpcf7 input:disabled[type=week],
    .wpcf7 select:disabled,
    .wpcf7 textarea:disabled {
        background-color: #e9ecef;
        opacity: 1
    }

    .wpcf7 select:focus::-ms-value,
    select.form-control:focus::-ms-value {
        color: #495057;
        background-color: #fff
    }

    .wpcf7 select[multiple],
    .wpcf7 select[size],
    select.form-control[multiple],
    select.form-control[size] {
        height: auto
    }

    .wpcf7 textarea,
    textarea.form-control {
        height: auto
    }

    .form-group,
    .wpcf7 .wpcf7-form p {
        margin-bottom: 1rem
    }

    .form-inline {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    @media (min-width:576px) {
        .form-inline label {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-bottom: 0
        }

        .form-inline .form-group,
        .form-inline .wpcf7 .wpcf7-form p,
        .wpcf7 .wpcf7-form .form-inline p {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 0
        }

        .form-inline .form-control,
        .form-inline .wpcf7 input[type=color],
        .form-inline .wpcf7 input[type=date],
        .form-inline .wpcf7 input[type=email],
        .form-inline .wpcf7 input[type=file],
        .form-inline .wpcf7 input[type=month],
        .form-inline .wpcf7 input[type=number],
        .form-inline .wpcf7 input[type=range],
        .form-inline .wpcf7 input[type=search],
        .form-inline .wpcf7 input[type=submit],
        .form-inline .wpcf7 input[type=tel],
        .form-inline .wpcf7 input[type=text],
        .form-inline .wpcf7 input[type=time],
        .form-inline .wpcf7 input[type=url],
        .form-inline .wpcf7 input[type=week],
        .form-inline .wpcf7 select,
        .form-inline .wpcf7 textarea,
        .wpcf7 .form-inline input[type=color],
        .wpcf7 .form-inline input[type=date],
        .wpcf7 .form-inline input[type=email],
        .wpcf7 .form-inline input[type=file],
        .wpcf7 .form-inline input[type=month],
        .wpcf7 .form-inline input[type=number],
        .wpcf7 .form-inline input[type=range],
        .wpcf7 .form-inline input[type=search],
        .wpcf7 .form-inline input[type=submit],
        .wpcf7 .form-inline input[type=tel],
        .wpcf7 .form-inline input[type=text],
        .wpcf7 .form-inline input[type=time],
        .wpcf7 .form-inline input[type=url],
        .wpcf7 .form-inline input[type=week],
        .wpcf7 .form-inline select,
        .wpcf7 .form-inline textarea {
            display: inline-block;
            width: auto;
            vertical-align: middle
        }

        .form-inline .input-group {
            width: auto
        }

        .form-inline .custom-control {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .form-inline .custom-control-label {
            margin-bottom: 0
        }
    }

    .btn,
    .wpcf7 input[type=submit] {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: .25rem;
        -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {

        .btn,
        .wpcf7 input[type=submit] {
            -webkit-transition: none;
            transition: none
        }
    }

    .btn:hover,
    .wpcf7 input:hover[type=submit] {
        color: #212529;
        text-decoration: none
    }

    .btn.focus,
    .btn:focus,
    .wpcf7 input.focus[type=submit],
    .wpcf7 input:focus[type=submit] {
        outline: 0;
        -webkit-box-shadow: 0 0 0 .2rem rgba(124, 0, 140, .25);
        box-shadow: 0 0 0 .2rem rgba(124, 0, 140, .25)
    }

    .btn.disabled,
    .btn:disabled,
    .wpcf7 input.disabled[type=submit],
    .wpcf7 input:disabled[type=submit] {
        opacity: .65
    }

    a.btn.disabled,
    fieldset:disabled a.btn {
        pointer-events: none
    }

    .btn-info {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8
    }

    .btn-info:hover {
        color: #fff;
        background-color: #138496;
        border-color: #117a8b
    }

    .btn-info.focus,
    .btn-info:focus {
        -webkit-box-shadow: 0 0 0 .2rem rgba(58, 176, 195, .5);
        box-shadow: 0 0 0 .2rem rgba(58, 176, 195, .5)
    }

    .btn-info.disabled,
    .btn-info:disabled {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8
    }

    .btn-info:not(:disabled):not(.disabled).active,
    .btn-info:not(:disabled):not(.disabled):active,
    .show>.btn-info.dropdown-toggle {
        color: #fff;
        background-color: #117a8b;
        border-color: #10707f
    }

    .btn-info:not(:disabled):not(.disabled).active:focus,
    .btn-info:not(:disabled):not(.disabled):active:focus,
    .show>.btn-info.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 .2rem rgba(58, 176, 195, .5);
        box-shadow: 0 0 0 .2rem rgba(58, 176, 195, .5)
    }

    .btn-light {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa
    }

    .btn-light:hover {
        color: #212529;
        background-color: #e2e6ea;
        border-color: #dae0e5
    }

    .btn-light.focus,
    .btn-light:focus {
        -webkit-box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5);
        box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5)
    }

    .btn-light.disabled,
    .btn-light:disabled {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa
    }

    .btn-light:not(:disabled):not(.disabled).active,
    .btn-light:not(:disabled):not(.disabled):active,
    .show>.btn-light.dropdown-toggle {
        color: #212529;
        background-color: #dae0e5;
        border-color: #d3d9df
    }

    .btn-light:not(:disabled):not(.disabled).active:focus,
    .btn-light:not(:disabled):not(.disabled):active:focus,
    .show>.btn-light.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5);
        box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5)
    }

    .wpcf7 input[type=submit] {
        color: #7c008c;
        border-color: #7c008c
    }

    .wpcf7 input:hover[type=submit] {
        color: #fff;
        background-color: #7c008c;
        border-color: #7c008c
    }

    .wpcf7 input.focus[type=submit],
    .wpcf7 input:focus[type=submit] {
        -webkit-box-shadow: 0 0 0 .2rem rgba(124, 0, 140, .5);
        box-shadow: 0 0 0 .2rem rgba(124, 0, 140, .5)
    }

    .wpcf7 input.disabled[type=submit],
    .wpcf7 input:disabled[type=submit] {
        color: #7c008c;
        background-color: transparent
    }

    .wpcf7 .show>input.dropdown-toggle[type=submit],
    .wpcf7 input:not(:disabled):not(.disabled).active[type=submit],
    .wpcf7 input:not(:disabled):not(.disabled):active[type=submit] {
        color: #fff;
        background-color: #7c008c;
        border-color: #7c008c
    }

    .wpcf7 .show>input.dropdown-toggle:focus[type=submit],
    .wpcf7 input:not(:disabled):not(.disabled).active:focus[type=submit],
    .wpcf7 input:not(:disabled):not(.disabled):active:focus[type=submit] {
        -webkit-box-shadow: 0 0 0 .2rem rgba(124, 0, 140, .5);
        box-shadow: 0 0 0 .2rem rgba(124, 0, 140, .5)
    }

    .btn-link {
        font-weight: 400;
        color: #7c008c;
        text-decoration: none
    }

    .btn-link:hover {
        color: #380040;
        text-decoration: underline
    }

    .btn-link.disabled,
    .btn-link:disabled {
        color: #6c757d;
        pointer-events: none
    }

    .btn-group-sm>.btn,
    .btn-sm,
    .wpcf7 .btn-group-sm>input[type=submit] {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem
    }

    .btn-block {
        display: block;
        width: 100%
    }

    .btn-block+.btn-block {
        margin-top: .5rem
    }

    input[type=button].btn-block,
    input[type=reset].btn-block,
    input[type=submit].btn-block {
        width: 100%
    }

    .fade {
        -webkit-transition: opacity .15s linear;
        transition: opacity .15s linear
    }

    @media (prefers-reduced-motion:reduce) {
        .fade {
            -webkit-transition: none;
            transition: none
        }
    }

    .fade:not(.show) {
        opacity: 0
    }

    .collapse:not(.show) {
        display: none
    }

    .collapsing {
        position: relative;
        height: 0;
        overflow: hidden;
        -webkit-transition: height .35s;
        transition: height .35s ease
    }

    @media (prefers-reduced-motion:reduce) {
        .collapsing {
            -webkit-transition: none;
            transition: none
        }
    }

    .dropdown,
    .dropleft,
    .dropright,
    .dropup {
        position: relative
    }

    .dropdown-toggle {
        white-space: nowrap
    }

    .dropdown-toggle::after {
        display: inline-block;
        margin-left: .255em;
        vertical-align: .255em;
        content: "";
        border-top: .3em solid;
        border-right: .3em solid transparent;
        border-bottom: 0;
        border-left: .3em solid transparent
    }

    .dropdown-toggle:empty::after {
        margin-left: 0
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 10rem;
        padding: .5rem 0;
        margin: .125rem 0 0;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: .25rem
    }

    .dropdown-menu-left {
        right: auto;
        left: 0
    }

    .dropdown-menu-right {
        right: 0;
        left: auto
    }

    .dropup .dropdown-menu {
        top: auto;
        bottom: 100%;
        margin-top: 0;
        margin-bottom: .125rem
    }

    .dropup .dropdown-toggle::after {
        display: inline-block;
        margin-left: .255em;
        vertical-align: .255em;
        content: "";
        border-top: 0;
        border-right: .3em solid transparent;
        border-bottom: .3em solid;
        border-left: .3em solid transparent
    }

    .dropup .dropdown-toggle:empty::after {
        margin-left: 0
    }

    .dropright .dropdown-menu {
        top: 0;
        right: auto;
        left: 100%;
        margin-top: 0;
        margin-left: .125rem
    }

    .dropright .dropdown-toggle::after {
        display: inline-block;
        margin-left: .255em;
        vertical-align: .255em;
        content: "";
        border-top: .3em solid transparent;
        border-right: 0;
        border-bottom: .3em solid transparent;
        border-left: .3em solid
    }

    .dropright .dropdown-toggle:empty::after {
        margin-left: 0
    }

    .dropright .dropdown-toggle::after {
        vertical-align: 0
    }

    .dropleft .dropdown-menu {
        top: 0;
        right: 100%;
        left: auto;
        margin-top: 0;
        margin-right: .125rem
    }

    .dropleft .dropdown-toggle::after {
        display: inline-block;
        margin-left: .255em;
        vertical-align: .255em;
        content: ""
    }

    .dropleft .dropdown-toggle::after {
        display: none
    }

    .dropleft .dropdown-toggle::before {
        display: inline-block;
        margin-right: .255em;
        vertical-align: .255em;
        content: "";
        border-top: .3em solid transparent;
        border-right: .3em solid;
        border-bottom: .3em solid transparent
    }

    .dropleft .dropdown-toggle:empty::after {
        margin-left: 0
    }

    .dropleft .dropdown-toggle::before {
        vertical-align: 0
    }

    .dropdown-menu[x-placement^=bottom],
    .dropdown-menu[x-placement^=left],
    .dropdown-menu[x-placement^=right],
    .dropdown-menu[x-placement^=top] {
        right: auto;
        bottom: auto
    }

    .dropdown-divider {
        height: 0;
        margin: .5rem 0;
        overflow: hidden;
        border-top: 1px solid #e9ecef
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: .25rem 1.5rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0
    }

    .dropdown-item:focus,
    .dropdown-item:hover {
        color: #16181b;
        text-decoration: none;
        background-color: #f8f9fa
    }

    .dropdown-item.active,
    .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: #7c008c
    }

    .dropdown-item.disabled,
    .dropdown-item:disabled {
        color: #6c757d;
        pointer-events: none;
        background-color: transparent
    }

    .dropdown-menu.show {
        display: block
    }

    .dropdown-header {
        display: block;
        padding: .5rem 1.5rem;
        margin-bottom: 0;
        font-size: .875rem;
        color: #6c757d;
        white-space: nowrap
    }

    .btn-group {
        position: relative;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        vertical-align: middle
    }

    .btn-group>.btn,
    .wpcf7 .btn-group>input[type=submit] {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto
    }

    .btn-group>.btn:hover,
    .wpcf7 .btn-group>input:hover[type=submit] {
        z-index: 1
    }

    .btn-group>.btn.active,
    .btn-group>.btn:active,
    .btn-group>.btn:focus,
    .wpcf7 .btn-group>input.active[type=submit],
    .wpcf7 .btn-group>input:active[type=submit],
    .wpcf7 .btn-group>input:focus[type=submit] {
        z-index: 1
    }

    .btn-group>.btn-group:not(:first-child),
    .btn-group>.btn:not(:first-child),
    .wpcf7 .btn-group>input:not(:first-child)[type=submit] {
        margin-left: -1px
    }

    .btn-group>.btn-group:not(:last-child)>.btn,
    .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
    .wpcf7 .btn-group>.btn-group:not(:last-child)>input[type=submit],
    .wpcf7 .btn-group>input:not(:last-child):not(.dropdown-toggle)[type=submit] {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .btn-group>.btn-group:not(:first-child)>.btn,
    .btn-group>.btn:not(:first-child),
    .wpcf7 .btn-group>.btn-group:not(:first-child)>input[type=submit],
    .wpcf7 .btn-group>input:not(:first-child)[type=submit] {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .input-group {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        width: 100%
    }

    .input-group>.form-control,
    .wpcf7 .input-group>input[type=color],
    .wpcf7 .input-group>input[type=date],
    .wpcf7 .input-group>input[type=email],
    .wpcf7 .input-group>input[type=file],
    .wpcf7 .input-group>input[type=month],
    .wpcf7 .input-group>input[type=number],
    .wpcf7 .input-group>input[type=range],
    .wpcf7 .input-group>input[type=search],
    .wpcf7 .input-group>input[type=submit],
    .wpcf7 .input-group>input[type=tel],
    .wpcf7 .input-group>input[type=text],
    .wpcf7 .input-group>input[type=time],
    .wpcf7 .input-group>input[type=url],
    .wpcf7 .input-group>input[type=week],
    .wpcf7 .input-group>select,
    .wpcf7 .input-group>textarea {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        width: 1%;
        margin-bottom: 0
    }

    .input-group>.form-control+.form-control,
    .wpcf7 .input-group>.form-control+input[type=color],
    .wpcf7 .input-group>.form-control+input[type=date],
    .wpcf7 .input-group>.form-control+input[type=email],
    .wpcf7 .input-group>.form-control+input[type=file],
    .wpcf7 .input-group>.form-control+input[type=month],
    .wpcf7 .input-group>.form-control+input[type=number],
    .wpcf7 .input-group>.form-control+input[type=range],
    .wpcf7 .input-group>.form-control+input[type=search],
    .wpcf7 .input-group>.form-control+input[type=submit],
    .wpcf7 .input-group>.form-control+input[type=tel],
    .wpcf7 .input-group>.form-control+input[type=text],
    .wpcf7 .input-group>.form-control+input[type=time],
    .wpcf7 .input-group>.form-control+input[type=url],
    .wpcf7 .input-group>.form-control+input[type=week],
    .wpcf7 .input-group>.form-control+select,
    .wpcf7 .input-group>.form-control+textarea,
    .wpcf7 .input-group>input[type=color]+.form-control,
    .wpcf7 .input-group>input[type=color]+input[type=color],
    .wpcf7 .input-group>input[type=color]+input[type=date],
    .wpcf7 .input-group>input[type=color]+input[type=email],
    .wpcf7 .input-group>input[type=color]+input[type=file],
    .wpcf7 .input-group>input[type=color]+input[type=month],
    .wpcf7 .input-group>input[type=color]+input[type=number],
    .wpcf7 .input-group>input[type=color]+input[type=range],
    .wpcf7 .input-group>input[type=color]+input[type=search],
    .wpcf7 .input-group>input[type=color]+input[type=submit],
    .wpcf7 .input-group>input[type=color]+input[type=tel],
    .wpcf7 .input-group>input[type=color]+input[type=text],
    .wpcf7 .input-group>input[type=color]+input[type=time],
    .wpcf7 .input-group>input[type=color]+input[type=url],
    .wpcf7 .input-group>input[type=color]+input[type=week],
    .wpcf7 .input-group>input[type=color]+select,
    .wpcf7 .input-group>input[type=color]+textarea,
    .wpcf7 .input-group>input[type=date]+.form-control,
    .wpcf7 .input-group>input[type=date]+input[type=color],
    .wpcf7 .input-group>input[type=date]+input[type=date],
    .wpcf7 .input-group>input[type=date]+input[type=email],
    .wpcf7 .input-group>input[type=date]+input[type=file],
    .wpcf7 .input-group>input[type=date]+input[type=month],
    .wpcf7 .input-group>input[type=date]+input[type=number],
    .wpcf7 .input-group>input[type=date]+input[type=range],
    .wpcf7 .input-group>input[type=date]+input[type=search],
    .wpcf7 .input-group>input[type=date]+input[type=submit],
    .wpcf7 .input-group>input[type=date]+input[type=tel],
    .wpcf7 .input-group>input[type=date]+input[type=text],
    .wpcf7 .input-group>input[type=date]+input[type=time],
    .wpcf7 .input-group>input[type=date]+input[type=url],
    .wpcf7 .input-group>input[type=date]+input[type=week],
    .wpcf7 .input-group>input[type=date]+select,
    .wpcf7 .input-group>input[type=date]+textarea,
    .wpcf7 .input-group>input[type=email]+.form-control,
    .wpcf7 .input-group>input[type=email]+input[type=color],
    .wpcf7 .input-group>input[type=email]+input[type=date],
    .wpcf7 .input-group>input[type=email]+input[type=email],
    .wpcf7 .input-group>input[type=email]+input[type=file],
    .wpcf7 .input-group>input[type=email]+input[type=month],
    .wpcf7 .input-group>input[type=email]+input[type=number],
    .wpcf7 .input-group>input[type=email]+input[type=range],
    .wpcf7 .input-group>input[type=email]+input[type=search],
    .wpcf7 .input-group>input[type=email]+input[type=submit],
    .wpcf7 .input-group>input[type=email]+input[type=tel],
    .wpcf7 .input-group>input[type=email]+input[type=text],
    .wpcf7 .input-group>input[type=email]+input[type=time],
    .wpcf7 .input-group>input[type=email]+input[type=url],
    .wpcf7 .input-group>input[type=email]+input[type=week],
    .wpcf7 .input-group>input[type=email]+select,
    .wpcf7 .input-group>input[type=email]+textarea,
    .wpcf7 .input-group>input[type=file]+.form-control,
    .wpcf7 .input-group>input[type=file]+input[type=color],
    .wpcf7 .input-group>input[type=file]+input[type=date],
    .wpcf7 .input-group>input[type=file]+input[type=email],
    .wpcf7 .input-group>input[type=file]+input[type=file],
    .wpcf7 .input-group>input[type=file]+input[type=month],
    .wpcf7 .input-group>input[type=file]+input[type=number],
    .wpcf7 .input-group>input[type=file]+input[type=range],
    .wpcf7 .input-group>input[type=file]+input[type=search],
    .wpcf7 .input-group>input[type=file]+input[type=submit],
    .wpcf7 .input-group>input[type=file]+input[type=tel],
    .wpcf7 .input-group>input[type=file]+input[type=text],
    .wpcf7 .input-group>input[type=file]+input[type=time],
    .wpcf7 .input-group>input[type=file]+input[type=url],
    .wpcf7 .input-group>input[type=file]+input[type=week],
    .wpcf7 .input-group>input[type=file]+select,
    .wpcf7 .input-group>input[type=file]+textarea,
    .wpcf7 .input-group>input[type=month]+.form-control,
    .wpcf7 .input-group>input[type=month]+input[type=color],
    .wpcf7 .input-group>input[type=month]+input[type=date],
    .wpcf7 .input-group>input[type=month]+input[type=email],
    .wpcf7 .input-group>input[type=month]+input[type=file],
    .wpcf7 .input-group>input[type=month]+input[type=month],
    .wpcf7 .input-group>input[type=month]+input[type=number],
    .wpcf7 .input-group>input[type=month]+input[type=range],
    .wpcf7 .input-group>input[type=month]+input[type=search],
    .wpcf7 .input-group>input[type=month]+input[type=submit],
    .wpcf7 .input-group>input[type=month]+input[type=tel],
    .wpcf7 .input-group>input[type=month]+input[type=text],
    .wpcf7 .input-group>input[type=month]+input[type=time],
    .wpcf7 .input-group>input[type=month]+input[type=url],
    .wpcf7 .input-group>input[type=month]+input[type=week],
    .wpcf7 .input-group>input[type=month]+select,
    .wpcf7 .input-group>input[type=month]+textarea,
    .wpcf7 .input-group>input[type=number]+.form-control,
    .wpcf7 .input-group>input[type=number]+input[type=color],
    .wpcf7 .input-group>input[type=number]+input[type=date],
    .wpcf7 .input-group>input[type=number]+input[type=email],
    .wpcf7 .input-group>input[type=number]+input[type=file],
    .wpcf7 .input-group>input[type=number]+input[type=month],
    .wpcf7 .input-group>input[type=number]+input[type=number],
    .wpcf7 .input-group>input[type=number]+input[type=range],
    .wpcf7 .input-group>input[type=number]+input[type=search],
    .wpcf7 .input-group>input[type=number]+input[type=submit],
    .wpcf7 .input-group>input[type=number]+input[type=tel],
    .wpcf7 .input-group>input[type=number]+input[type=text],
    .wpcf7 .input-group>input[type=number]+input[type=time],
    .wpcf7 .input-group>input[type=number]+input[type=url],
    .wpcf7 .input-group>input[type=number]+input[type=week],
    .wpcf7 .input-group>input[type=number]+select,
    .wpcf7 .input-group>input[type=number]+textarea,
    .wpcf7 .input-group>input[type=range]+.form-control,
    .wpcf7 .input-group>input[type=range]+input[type=color],
    .wpcf7 .input-group>input[type=range]+input[type=date],
    .wpcf7 .input-group>input[type=range]+input[type=email],
    .wpcf7 .input-group>input[type=range]+input[type=file],
    .wpcf7 .input-group>input[type=range]+input[type=month],
    .wpcf7 .input-group>input[type=range]+input[type=number],
    .wpcf7 .input-group>input[type=range]+input[type=range],
    .wpcf7 .input-group>input[type=range]+input[type=search],
    .wpcf7 .input-group>input[type=range]+input[type=submit],
    .wpcf7 .input-group>input[type=range]+input[type=tel],
    .wpcf7 .input-group>input[type=range]+input[type=text],
    .wpcf7 .input-group>input[type=range]+input[type=time],
    .wpcf7 .input-group>input[type=range]+input[type=url],
    .wpcf7 .input-group>input[type=range]+input[type=week],
    .wpcf7 .input-group>input[type=range]+select,
    .wpcf7 .input-group>input[type=range]+textarea,
    .wpcf7 .input-group>input[type=search]+.form-control,
    .wpcf7 .input-group>input[type=search]+input[type=color],
    .wpcf7 .input-group>input[type=search]+input[type=date],
    .wpcf7 .input-group>input[type=search]+input[type=email],
    .wpcf7 .input-group>input[type=search]+input[type=file],
    .wpcf7 .input-group>input[type=search]+input[type=month],
    .wpcf7 .input-group>input[type=search]+input[type=number],
    .wpcf7 .input-group>input[type=search]+input[type=range],
    .wpcf7 .input-group>input[type=search]+input[type=search],
    .wpcf7 .input-group>input[type=search]+input[type=submit],
    .wpcf7 .input-group>input[type=search]+input[type=tel],
    .wpcf7 .input-group>input[type=search]+input[type=text],
    .wpcf7 .input-group>input[type=search]+input[type=time],
    .wpcf7 .input-group>input[type=search]+input[type=url],
    .wpcf7 .input-group>input[type=search]+input[type=week],
    .wpcf7 .input-group>input[type=search]+select,
    .wpcf7 .input-group>input[type=search]+textarea,
    .wpcf7 .input-group>input[type=submit]+.form-control,
    .wpcf7 .input-group>input[type=submit]+input[type=color],
    .wpcf7 .input-group>input[type=submit]+input[type=date],
    .wpcf7 .input-group>input[type=submit]+input[type=email],
    .wpcf7 .input-group>input[type=submit]+input[type=file],
    .wpcf7 .input-group>input[type=submit]+input[type=month],
    .wpcf7 .input-group>input[type=submit]+input[type=number],
    .wpcf7 .input-group>input[type=submit]+input[type=range],
    .wpcf7 .input-group>input[type=submit]+input[type=search],
    .wpcf7 .input-group>input[type=submit]+input[type=submit],
    .wpcf7 .input-group>input[type=submit]+input[type=tel],
    .wpcf7 .input-group>input[type=submit]+input[type=text],
    .wpcf7 .input-group>input[type=submit]+input[type=time],
    .wpcf7 .input-group>input[type=submit]+input[type=url],
    .wpcf7 .input-group>input[type=submit]+input[type=week],
    .wpcf7 .input-group>input[type=submit]+select,
    .wpcf7 .input-group>input[type=submit]+textarea,
    .wpcf7 .input-group>input[type=tel]+.form-control,
    .wpcf7 .input-group>input[type=tel]+input[type=color],
    .wpcf7 .input-group>input[type=tel]+input[type=date],
    .wpcf7 .input-group>input[type=tel]+input[type=email],
    .wpcf7 .input-group>input[type=tel]+input[type=file],
    .wpcf7 .input-group>input[type=tel]+input[type=month],
    .wpcf7 .input-group>input[type=tel]+input[type=number],
    .wpcf7 .input-group>input[type=tel]+input[type=range],
    .wpcf7 .input-group>input[type=tel]+input[type=search],
    .wpcf7 .input-group>input[type=tel]+input[type=submit],
    .wpcf7 .input-group>input[type=tel]+input[type=tel],
    .wpcf7 .input-group>input[type=tel]+input[type=text],
    .wpcf7 .input-group>input[type=tel]+input[type=time],
    .wpcf7 .input-group>input[type=tel]+input[type=url],
    .wpcf7 .input-group>input[type=tel]+input[type=week],
    .wpcf7 .input-group>input[type=tel]+select,
    .wpcf7 .input-group>input[type=tel]+textarea,
    .wpcf7 .input-group>input[type=text]+.form-control,
    .wpcf7 .input-group>input[type=text]+input[type=color],
    .wpcf7 .input-group>input[type=text]+input[type=date],
    .wpcf7 .input-group>input[type=text]+input[type=email],
    .wpcf7 .input-group>input[type=text]+input[type=file],
    .wpcf7 .input-group>input[type=text]+input[type=month],
    .wpcf7 .input-group>input[type=text]+input[type=number],
    .wpcf7 .input-group>input[type=text]+input[type=range],
    .wpcf7 .input-group>input[type=text]+input[type=search],
    .wpcf7 .input-group>input[type=text]+input[type=submit],
    .wpcf7 .input-group>input[type=text]+input[type=tel],
    .wpcf7 .input-group>input[type=text]+input[type=text],
    .wpcf7 .input-group>input[type=text]+input[type=time],
    .wpcf7 .input-group>input[type=text]+input[type=url],
    .wpcf7 .input-group>input[type=text]+input[type=week],
    .wpcf7 .input-group>input[type=text]+select,
    .wpcf7 .input-group>input[type=text]+textarea,
    .wpcf7 .input-group>input[type=time]+.form-control,
    .wpcf7 .input-group>input[type=time]+input[type=color],
    .wpcf7 .input-group>input[type=time]+input[type=date],
    .wpcf7 .input-group>input[type=time]+input[type=email],
    .wpcf7 .input-group>input[type=time]+input[type=file],
    .wpcf7 .input-group>input[type=time]+input[type=month],
    .wpcf7 .input-group>input[type=time]+input[type=number],
    .wpcf7 .input-group>input[type=time]+input[type=range],
    .wpcf7 .input-group>input[type=time]+input[type=search],
    .wpcf7 .input-group>input[type=time]+input[type=submit],
    .wpcf7 .input-group>input[type=time]+input[type=tel],
    .wpcf7 .input-group>input[type=time]+input[type=text],
    .wpcf7 .input-group>input[type=time]+input[type=time],
    .wpcf7 .input-group>input[type=time]+input[type=url],
    .wpcf7 .input-group>input[type=time]+input[type=week],
    .wpcf7 .input-group>input[type=time]+select,
    .wpcf7 .input-group>input[type=time]+textarea,
    .wpcf7 .input-group>input[type=url]+.form-control,
    .wpcf7 .input-group>input[type=url]+input[type=color],
    .wpcf7 .input-group>input[type=url]+input[type=date],
    .wpcf7 .input-group>input[type=url]+input[type=email],
    .wpcf7 .input-group>input[type=url]+input[type=file],
    .wpcf7 .input-group>input[type=url]+input[type=month],
    .wpcf7 .input-group>input[type=url]+input[type=number],
    .wpcf7 .input-group>input[type=url]+input[type=range],
    .wpcf7 .input-group>input[type=url]+input[type=search],
    .wpcf7 .input-group>input[type=url]+input[type=submit],
    .wpcf7 .input-group>input[type=url]+input[type=tel],
    .wpcf7 .input-group>input[type=url]+input[type=text],
    .wpcf7 .input-group>input[type=url]+input[type=time],
    .wpcf7 .input-group>input[type=url]+input[type=url],
    .wpcf7 .input-group>input[type=url]+input[type=week],
    .wpcf7 .input-group>input[type=url]+select,
    .wpcf7 .input-group>input[type=url]+textarea,
    .wpcf7 .input-group>input[type=week]+.form-control,
    .wpcf7 .input-group>input[type=week]+input[type=color],
    .wpcf7 .input-group>input[type=week]+input[type=date],
    .wpcf7 .input-group>input[type=week]+input[type=email],
    .wpcf7 .input-group>input[type=week]+input[type=file],
    .wpcf7 .input-group>input[type=week]+input[type=month],
    .wpcf7 .input-group>input[type=week]+input[type=number],
    .wpcf7 .input-group>input[type=week]+input[type=range],
    .wpcf7 .input-group>input[type=week]+input[type=search],
    .wpcf7 .input-group>input[type=week]+input[type=submit],
    .wpcf7 .input-group>input[type=week]+input[type=tel],
    .wpcf7 .input-group>input[type=week]+input[type=text],
    .wpcf7 .input-group>input[type=week]+input[type=time],
    .wpcf7 .input-group>input[type=week]+input[type=url],
    .wpcf7 .input-group>input[type=week]+input[type=week],
    .wpcf7 .input-group>input[type=week]+select,
    .wpcf7 .input-group>input[type=week]+textarea,
    .wpcf7 .input-group>select+.form-control,
    .wpcf7 .input-group>select+input[type=color],
    .wpcf7 .input-group>select+input[type=date],
    .wpcf7 .input-group>select+input[type=email],
    .wpcf7 .input-group>select+input[type=file],
    .wpcf7 .input-group>select+input[type=month],
    .wpcf7 .input-group>select+input[type=number],
    .wpcf7 .input-group>select+input[type=range],
    .wpcf7 .input-group>select+input[type=search],
    .wpcf7 .input-group>select+input[type=submit],
    .wpcf7 .input-group>select+input[type=tel],
    .wpcf7 .input-group>select+input[type=text],
    .wpcf7 .input-group>select+input[type=time],
    .wpcf7 .input-group>select+input[type=url],
    .wpcf7 .input-group>select+input[type=week],
    .wpcf7 .input-group>select+select,
    .wpcf7 .input-group>select+textarea,
    .wpcf7 .input-group>textarea+.form-control,
    .wpcf7 .input-group>textarea+input[type=color],
    .wpcf7 .input-group>textarea+input[type=date],
    .wpcf7 .input-group>textarea+input[type=email],
    .wpcf7 .input-group>textarea+input[type=file],
    .wpcf7 .input-group>textarea+input[type=month],
    .wpcf7 .input-group>textarea+input[type=number],
    .wpcf7 .input-group>textarea+input[type=range],
    .wpcf7 .input-group>textarea+input[type=search],
    .wpcf7 .input-group>textarea+input[type=submit],
    .wpcf7 .input-group>textarea+input[type=tel],
    .wpcf7 .input-group>textarea+input[type=text],
    .wpcf7 .input-group>textarea+input[type=time],
    .wpcf7 .input-group>textarea+input[type=url],
    .wpcf7 .input-group>textarea+input[type=week],
    .wpcf7 .input-group>textarea+select,
    .wpcf7 .input-group>textarea+textarea {
        margin-left: -1px
    }

    .input-group>.form-control:focus,
    .wpcf7 .input-group>input:focus[type=color],
    .wpcf7 .input-group>input:focus[type=date],
    .wpcf7 .input-group>input:focus[type=email],
    .wpcf7 .input-group>input:focus[type=file],
    .wpcf7 .input-group>input:focus[type=month],
    .wpcf7 .input-group>input:focus[type=number],
    .wpcf7 .input-group>input:focus[type=range],
    .wpcf7 .input-group>input:focus[type=search],
    .wpcf7 .input-group>input:focus[type=submit],
    .wpcf7 .input-group>input:focus[type=tel],
    .wpcf7 .input-group>input:focus[type=text],
    .wpcf7 .input-group>input:focus[type=time],
    .wpcf7 .input-group>input:focus[type=url],
    .wpcf7 .input-group>input:focus[type=week],
    .wpcf7 .input-group>select:focus,
    .wpcf7 .input-group>textarea:focus {
        z-index: 3
    }

    .input-group>.form-control:not(:last-child),
    .wpcf7 .input-group>input:not(:last-child)[type=color],
    .wpcf7 .input-group>input:not(:last-child)[type=date],
    .wpcf7 .input-group>input:not(:last-child)[type=email],
    .wpcf7 .input-group>input:not(:last-child)[type=file],
    .wpcf7 .input-group>input:not(:last-child)[type=month],
    .wpcf7 .input-group>input:not(:last-child)[type=number],
    .wpcf7 .input-group>input:not(:last-child)[type=range],
    .wpcf7 .input-group>input:not(:last-child)[type=search],
    .wpcf7 .input-group>input:not(:last-child)[type=submit],
    .wpcf7 .input-group>input:not(:last-child)[type=tel],
    .wpcf7 .input-group>input:not(:last-child)[type=text],
    .wpcf7 .input-group>input:not(:last-child)[type=time],
    .wpcf7 .input-group>input:not(:last-child)[type=url],
    .wpcf7 .input-group>input:not(:last-child)[type=week],
    .wpcf7 .input-group>select:not(:last-child),
    .wpcf7 .input-group>textarea:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .input-group>.form-control:not(:first-child),
    .wpcf7 .input-group>input:not(:first-child)[type=color],
    .wpcf7 .input-group>input:not(:first-child)[type=date],
    .wpcf7 .input-group>input:not(:first-child)[type=email],
    .wpcf7 .input-group>input:not(:first-child)[type=file],
    .wpcf7 .input-group>input:not(:first-child)[type=month],
    .wpcf7 .input-group>input:not(:first-child)[type=number],
    .wpcf7 .input-group>input:not(:first-child)[type=range],
    .wpcf7 .input-group>input:not(:first-child)[type=search],
    .wpcf7 .input-group>input:not(:first-child)[type=submit],
    .wpcf7 .input-group>input:not(:first-child)[type=tel],
    .wpcf7 .input-group>input:not(:first-child)[type=text],
    .wpcf7 .input-group>input:not(:first-child)[type=time],
    .wpcf7 .input-group>input:not(:first-child)[type=url],
    .wpcf7 .input-group>input:not(:first-child)[type=week],
    .wpcf7 .input-group>select:not(:first-child),
    .wpcf7 .input-group>textarea:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .input-group-prepend {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    .input-group-prepend .btn,
    .input-group-prepend .wpcf7 input[type=submit],
    .wpcf7 .input-group-prepend input[type=submit] {
        position: relative;
        z-index: 2
    }

    .input-group-prepend .btn:focus,
    .input-group-prepend .wpcf7 input:focus[type=submit],
    .wpcf7 .input-group-prepend input:focus[type=submit] {
        z-index: 3
    }

    .input-group-prepend .btn+.btn,
    .input-group-prepend .btn+.input-group-text,
    .input-group-prepend .input-group-text+.btn,
    .input-group-prepend .input-group-text+.input-group-text,
    .input-group-prepend .wpcf7 .btn+input[type=submit],
    .input-group-prepend .wpcf7 .input-group-text+input[type=submit],
    .input-group-prepend .wpcf7 input[type=submit]+.btn,
    .input-group-prepend .wpcf7 input[type=submit]+.input-group-text,
    .input-group-prepend .wpcf7 input[type=submit]+input[type=submit],
    .wpcf7 .input-group-prepend .btn+input[type=submit],
    .wpcf7 .input-group-prepend .input-group-text+input[type=submit],
    .wpcf7 .input-group-prepend input[type=submit]+.btn,
    .wpcf7 .input-group-prepend input[type=submit]+.input-group-text,
    .wpcf7 .input-group-prepend input[type=submit]+input[type=submit] {
        margin-left: -1px
    }

    .input-group-prepend {
        margin-right: -1px
    }

    .input-group-text {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: .375rem .75rem;
        margin-bottom: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        text-align: center;
        white-space: nowrap;
        background-color: #e9ecef;
        border: 1px solid #ced4da;
        border-radius: .25rem
    }

    .input-group-text input[type=checkbox],
    .input-group-text input[type=radio] {
        margin-top: 0
    }

    .input-group>.input-group-prepend>.btn,
    .input-group>.input-group-prepend>.input-group-text,
    .wpcf7 .input-group>.input-group-prepend>input[type=submit] {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
    .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),
    .input-group>.input-group-prepend:not(:first-child)>.btn,
    .input-group>.input-group-prepend:not(:first-child)>.input-group-text,
    .wpcf7 .input-group>.input-group-prepend:first-child>input:not(:first-child)[type=submit],
    .wpcf7 .input-group>.input-group-prepend:not(:first-child)>input[type=submit] {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .custom-control {
        position: relative;
        display: block;
        min-height: 1.5rem;
        padding-left: 1.5rem
    }

    .custom-control-input {
        position: absolute;
        z-index: -1;
        opacity: 0
    }

    .custom-control-input:checked~.custom-control-label::before {
        color: #fff;
        border-color: #7c008c;
        background-color: #7c008c
    }

    .custom-control-input:focus~.custom-control-label::before {
        -webkit-box-shadow: 0 0 0 .2rem rgba(124, 0, 140, .25);
        box-shadow: 0 0 0 .2rem rgba(124, 0, 140, .25)
    }

    .custom-control-input:focus:not(:checked)~.custom-control-label::before {
        border-color: #e30dff
    }

    .custom-control-input:not(:disabled):active~.custom-control-label::before {
        color: #fff;
        background-color: #e940ff;
        border-color: #e940ff
    }

    .custom-control-input:disabled~.custom-control-label {
        color: #6c757d
    }

    .custom-control-input:disabled~.custom-control-label::before {
        background-color: #e9ecef
    }

    .custom-control-label {
        position: relative;
        margin-bottom: 0;
        vertical-align: top
    }

    .custom-control-label::before {
        position: absolute;
        top: .25rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        pointer-events: none;
        content: "";
        background-color: #fff;
        border: 1px solid #adb5bd
    }

    .custom-control-label::after {
        position: absolute;
        top: .25rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        content: "";
        background: 50%/50% 50% no-repeat
    }

    .custom-radio .custom-control-label::before {
        border-radius: 50%
    }

    .custom-radio .custom-control-input:checked~.custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")
    }

    .custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
        background-color: rgba(124, 0, 140, .5)
    }

    .custom-control-label::before {
        -webkit-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .custom-control-label::before {
            -webkit-transition: none;
            transition: none
        }
    }

    .nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
    }

    .nav-link {
        display: block;
        padding: .5rem 1rem
    }

    .nav-link:focus,
    .nav-link:hover {
        text-decoration: none
    }

    .nav-link.disabled {
        color: #6c757d;
        pointer-events: none;
        cursor: default
    }

    .navbar {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: .5rem 1rem
    }

    .navbar>.container,
    .navbar>.container-fluid {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .navbar-brand {
        display: inline-block;
        padding-top: .3125rem;
        padding-bottom: .3125rem;
        margin-right: 1rem;
        font-size: 1.25rem;
        line-height: inherit;
        white-space: nowrap
    }

    .navbar-brand:focus,
    .navbar-brand:hover {
        text-decoration: none
    }

    .navbar-nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
    }

    .navbar-nav .nav-link {
        padding-right: 0;
        padding-left: 0
    }

    .navbar-nav .dropdown-menu {
        position: static;
        float: none
    }

    .navbar-collapse {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .navbar-toggler {
        padding: .25rem .75rem;
        font-size: 1.25rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: .25rem
    }

    .navbar-toggler:focus,
    .navbar-toggler:hover {
        text-decoration: none
    }

    .navbar-toggler-icon {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        vertical-align: middle;
        content: "";
        background: center center no-repeat;
        background-size: 100% 100%
    }

    @media (max-width:991.98px) {

        .navbar-expand-lg>.container,
        .navbar-expand-lg>.container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media (min-width:992px) {
        .navbar-expand-lg {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .navbar-expand-lg .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-lg>.container,
        .navbar-expand-lg>.container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap
        }

        .navbar-expand-lg .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto
        }

        .navbar-expand-lg .navbar-toggler {
            display: none
        }
    }

    .navbar-light .navbar-brand {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-brand:focus,
    .navbar-light .navbar-brand:hover {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, .5)
    }

    .navbar-light .navbar-nav .nav-link:focus,
    .navbar-light .navbar-nav .nav-link:hover {
        color: rgba(0, 0, 0, .7)
    }

    .navbar-light .navbar-nav .nav-link.disabled {
        color: rgba(0, 0, 0, .3)
    }

    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.active,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .show>.nav-link {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, .5);
        border-color: rgba(0, 0, 0, .1)
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
    }

    .navbar-dark .navbar-brand {
        color: #fff
    }

    .navbar-dark .navbar-brand:focus,
    .navbar-dark .navbar-brand:hover {
        color: #fff
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, .5)
    }

    .navbar-dark .navbar-nav .nav-link:focus,
    .navbar-dark .navbar-nav .nav-link:hover {
        color: rgba(255, 255, 255, .75)
    }

    .navbar-dark .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, .25)
    }

    .navbar-dark .navbar-nav .active>.nav-link,
    .navbar-dark .navbar-nav .nav-link.active,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .show>.nav-link {
        color: #fff
    }

    .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, .5);
        border-color: rgba(255, 255, 255, .1)
    }

    .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
    }

    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .25rem
    }

    .card>hr {
        margin-right: 0;
        margin-left: 0
    }

    .card>.list-group:first-child .list-group-item:first-child {
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem
    }

    .card>.list-group:last-child .list-group-item:last-child {
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: .25rem
    }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem
    }

    .card-header {
        padding: .75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, .03);
        border-bottom: 1px solid rgba(0, 0, 0, .125)
    }

    .card-header:first-child {
        border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
    }

    .card-header+.list-group .list-group-item:first-child {
        border-top: 0
    }

    .pagination {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding-left: 0;
        list-style: none;
        border-radius: .25rem
    }

    .alert {
        position: relative;
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .25rem
    }

    .alert-info {
        color: #0c5460;
        background-color: #d1ecf1;
        border-color: #bee5eb
    }

    .alert-info hr {
        border-top-color: #abdde5
    }

    .progress {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        height: 1rem;
        overflow: hidden;
        font-size: .75rem;
        background-color: #e9ecef;
        border-radius: .25rem
    }

    .list-group {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0
    }

    .list-group-item {
        position: relative;
        display: block;
        padding: .75rem 1.25rem;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, .125)
    }

    .list-group-item:first-child {
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem
    }

    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: .25rem
    }

    .list-group-item.disabled,
    .list-group-item:disabled {
        color: #6c757d;
        pointer-events: none;
        background-color: #fff
    }

    .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: #7c008c;
        border-color: #7c008c
    }

    .close {
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5
    }

    .close:hover {
        color: #000;
        text-decoration: none
    }

    .close:not(:disabled):not(.disabled):focus,
    .close:not(:disabled):not(.disabled):hover {
        opacity: .75
    }

    button.close {
        padding: 0;
        background-color: transparent;
        border: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none
    }

    a.close.disabled {
        pointer-events: none
    }

    .toast {
        max-width: 350px;
        overflow: hidden;
        font-size: .875rem;
        background-color: rgba(255, 255, 255, .85);
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .1);
        -webkit-box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .1);
        box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .1);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        opacity: 0;
        border-radius: .25rem
    }

    .toast:not(:last-child) {
        margin-bottom: .75rem
    }

    .toast.showing {
        opacity: 1
    }

    .toast.show {
        display: block;
        opacity: 1
    }

    .toast.hide {
        display: none
    }

    .modal-open {
        overflow: hidden
    }

    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto
    }

    .modal {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1050;
        display: none;
        width: 100%;
        height: 100%;
        overflow: hidden;
        outline: 0
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: .5rem;
        pointer-events: none
    }

    .modal.fade .modal-dialog {
        -webkit-transition: -webkit-transform .3s ease-out;
        transition: -webkit-transform .3s ease-out;
        transition: transform .3s ease-out;
        transition: transform .3s ease-out, -webkit-transform .3s ease-out;
        -webkit-transform: translate(0, -50px);
        transform: translate(0, -50px)
    }

    @media (prefers-reduced-motion:reduce) {
        .modal.fade .modal-dialog {
            -webkit-transition: none;
            transition: none
        }
    }

    .modal.show .modal-dialog {
        -webkit-transform: none;
        transform: none
    }

    .modal-dialog-scrollable {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        max-height: calc(100% - 1rem)
    }

    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 1rem);
        overflow: hidden
    }

    .modal-dialog-scrollable .modal-body {
        overflow-y: auto
    }

    .modal-dialog-centered {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        min-height: calc(100% - 1rem)
    }

    .modal-dialog-centered::before {
        display: block;
        height: calc(100vh - 1rem);
        content: ""
    }

    .modal-dialog-centered.modal-dialog-scrollable {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        height: 100%
    }

    .modal-dialog-centered.modal-dialog-scrollable .modal-content {
        max-height: none
    }

    .modal-dialog-centered.modal-dialog-scrollable::before {
        content: none
    }

    .modal-content {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: .3rem;
        outline: 0
    }

    .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1040;
        width: 100vw;
        height: 100vh;
        background-color: #000
    }

    .modal-backdrop.fade {
        opacity: 0
    }

    .modal-backdrop.show {
        opacity: .5
    }

    .modal-body {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1rem
    }

    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll
    }

    @media (min-width:576px) {
        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto
        }

        .modal-dialog-scrollable {
            max-height: calc(100% - 3.5rem)
        }

        .modal-dialog-scrollable .modal-content {
            max-height: calc(100vh - 3.5rem)
        }

        .modal-dialog-centered {
            min-height: calc(100% - 3.5rem)
        }

        .modal-dialog-centered::before {
            height: calc(100vh - 3.5rem)
        }
    }

    .tooltip {
        position: absolute;
        z-index: 1070;
        display: block;
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: .875rem;
        word-wrap: break-word;
        opacity: 0
    }

    .tooltip.show {
        opacity: .9
    }

    .tooltip .arrow {
        position: absolute;
        display: block;
        width: .8rem;
        height: .4rem
    }

    .tooltip .arrow::before {
        position: absolute;
        content: "";
        border-color: transparent;
        border-style: solid
    }

    .tooltip-inner {
        max-width: 200px;
        padding: .25rem .5rem;
        color: #fff;
        text-align: center;
        background-color: #000;
        border-radius: .25rem
    }

    .popover {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1060;
        display: block;
        max-width: 276px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: .875rem;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: .3rem
    }

    .popover .arrow {
        position: absolute;
        display: block;
        width: 1rem;
        height: .5rem;
        margin: 0 .3rem
    }

    .popover .arrow::after,
    .popover .arrow::before {
        position: absolute;
        display: block;
        content: "";
        border-color: transparent;
        border-style: solid
    }

    .popover-header {
        padding: .5rem .75rem;
        margin-bottom: 0;
        font-size: 1rem;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ebebeb;
        border-top-left-radius: calc(.3rem - 1px);
        border-top-right-radius: calc(.3rem - 1px)
    }

    .popover-header:empty {
        display: none
    }

    .popover-body {
        padding: .5rem .75rem;
        color: #212529
    }

    .carousel {
        position: relative
    }

    .carousel.pointer-event {
        -ms-touch-action: pan-y;
        touch-action: pan-y
    }

    .carousel-item {
        position: relative;
        display: none;
        float: left;
        width: 100%;
        margin-right: -100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: -webkit-transform .6s ease-in-out;
        transition: -webkit-transform .6s ease-in-out;
        transition: transform .6s ease-in-out;
        transition: transform .6s ease-in-out, -webkit-transform .6s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .carousel-item {
            -webkit-transition: none;
            transition: none
        }
    }

    .carousel-item-next,
    .carousel-item-prev,
    .carousel-item.active {
        display: block
    }

    .active.carousel-item-right,
    .carousel-item-next:not(.carousel-item-left) {
        -webkit-transform: translateX(100%);
        transform: translateX(100%)
    }

    .active.carousel-item-left,
    .carousel-item-prev:not(.carousel-item-right) {
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%)
    }

    .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 15;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding-left: 0;
        margin-right: 15%;
        margin-left: 15%;
        list-style: none
    }

    .carousel-indicators li {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        -webkit-box-flex: 0;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        width: 30px;
        height: 3px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #fff;
        background-clip: padding-box;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        opacity: .5;
        -webkit-transition: opacity .6s;
        transition: opacity .6s ease
    }

    @media (prefers-reduced-motion:reduce) {
        .carousel-indicators li {
            -webkit-transition: none;
            transition: none
        }
    }

    .carousel-indicators .active {
        opacity: 1
    }

    @-webkit-keyframes spinner-border {
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @keyframes spinner-border {
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    .spinner-border {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        vertical-align: text-bottom;
        border: .25em solid currentColor;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: .75s linear infinite spinner-border;
        animation: .75s linear infinite spinner-border
    }

    .spinner-border-sm {
        width: 1rem;
        height: 1rem;
        border-width: .2em
    }

    .border {
        border: 1px solid #dee2e6 !important
    }

    .d-none {
        display: none !important
    }

    @media (min-width:576px) {
        .d-sm-none {
            display: none !important
        }
    }

    @media (min-width:768px) {
        .d-md-none {
            display: none !important
        }
    }

    @media (min-width:992px) {
        .d-lg-block {
            display: block !important
        }
    }

    .position-static {
        position: static !important
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030
    }

    @supports ((position:-webkit-sticky) or (position:sticky)) {
        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020
        }
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        overflow: visible;
        clip: auto;
        white-space: normal
    }

    .my-1 {
        margin-top: .25rem !important
    }

    .my-1 {
        margin-bottom: .25rem !important
    }

    .mx-2 {
        margin-right: .5rem !important
    }

    .mx-2 {
        margin-left: .5rem !important
    }

    .aligncenter {
        margin-right: auto !important
    }

    .aligncenter,
    .ml-auto {
        margin-left: auto !important
    }

    .text-success {
        color: #28a745 !important
    }

    a.text-success:focus,
    a.text-success:hover {
        color: #19692c !important
    }

    .text-danger {
        color: #dc3545 !important
    }

    a.text-danger:focus,
    a.text-danger:hover {
        color: #a71d2a !important
    }

    .text-muted {
        color: #6c757d !important
    }

    .visible {
        visibility: visible !important
    }

    @media print {

        *,
        ::after,
        ::before {
            text-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important
        }

        a:not(.btn) {
            text-decoration: underline
        }

        pre {
            white-space: pre-wrap !important
        }

        pre {
            border: 1px solid #adb5bd;
            page-break-inside: avoid
        }

        img,
        tr {
            page-break-inside: avoid
        }

        h2,
        h3,
        p {
            orphans: 3;
            widows: 3
        }

        h2,
        h3 {
            page-break-after: avoid
        }

        @page {
            size: a3
        }

        body {
            min-width: 992px !important
        }

        .container {
            min-width: 992px !important
        }

        .navbar {
            display: none
        }

        .table {
            border-collapse: collapse !important
        }

        .table td,
        .table th {
            background-color: #fff !important
        }
    }

    .wrapper {
        padding: 30px 0
    }

    .sticky {
        font-size: inherit
    }

    #secondary img,
    article img,
    img {
        max-width: 100%;
        height: auto
    }

    a.skip-link {
        position: fixed;
        z-index: 1000;
        top: 0;
        right: 0
    }

    .navbar-dark .navbar-nav .dropdown-menu .nav-link {
        display: block;
        width: 100%;
        padding: .25rem 1.5rem;
        clear: both;
        font-weight: 400;
        color: #212529 !important;
        text-align: inherit;
        white-space: nowrap;
        background: 0 0;
        border: 0
    }

    .navbar-dark .navbar-nav .dropdown-menu .nav-link:focus,
    .navbar-dark .navbar-nav .dropdown-menu .nav-link:hover {
        color: #16181b !important;
        text-decoration: none;
        background-color: #f8f9fa
    }

    .navbar-dark .navbar-nav .dropdown-menu .nav-link.active,
    .navbar-dark .navbar-nav .dropdown-menu .nav-link:active {
        color: #fff !important;
        text-decoration: none;
        background-color: #7c008c
    }

    .navbar-dark .navbar-nav .dropdown-menu .nav-link.disabled,
    .navbar-dark .navbar-nav .dropdown-menu .nav-link:disabled {
        color: #6c757d !important;
        background-color: transparent
    }

    .navbar-light .navbar-brand a {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-brand a:focus,
    .navbar-light .navbar-brand a:hover {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-dark .navbar-brand a {
        color: #fff
    }

    .navbar-dark .navbar-brand a:focus,
    .navbar-dark .navbar-brand a:hover {
        color: #fff
    }

    .navbar h1 {
        font-weight: 400
    }

    @font-face {
        font-family: FontAwesome;
        src: url("../../wp-content/themes/designcafe/fonts/fontawesome-webfont.eot");
        src: url("../../wp-content/themes/designcafe/fonts/fontawesome-webfont-1.eot") format("embedded-opentype"), url("../../wp-content/themes/designcafe/fonts/fontawesome-webfont.woff") format("woff"), url("../../wp-content/themes/designcafe/fonts/fontawesome-webfont.ttf") format("truetype"), url("../../wp-content/themes/designcafe/fonts/fontawesome-webfont.svg") format("svg");
        font-weight: 400;
        font-display: swap;
        font-style: normal
    }

    .fa {
        display: inline-block;
        font: 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .fa-search:before {
        content: ""
    }

    .fa-plus:before {
        content: ""
    }

    .fa-twitter:before {
        content: ""
    }

    .fa-facebook:before {
        content: ""
    }

    .fa-pinterest:before {
        content: ""
    }

    .fa-linkedin:before {
        content: ""
    }

    .fa-angle-left:before {
        content: ""
    }

    .fa-angle-right:before {
        content: ""
    }

    .fa-youtube-play:before {
        content: ""
    }

    .fa-instagram:before {
        content: ""
    }

    .fa-whatsapp:before {
        content: ""
    }

    .wpcf7 {
        max-width: 600px;
        margin: 0 auto !important
    }

    .wpcf7 .wpcf7-form label {
        width: 100%
    }

    .wpcf7 .wpcf7-not-valid-tip {
        color: #dc3545
    }

    @font-face {
        font-display: swap;
        font-family: Lato;
        src: url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-300.eot");
        src: url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-300-1.eot") format("embedded-opentype"), url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-300.woff") format("woff"), url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-300.woff2") format("woff2"), url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-300.ttf") format("truetype"), url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-300.svg") format("svg");
        font-weight: 300;
        font-style: normal
    }

    @font-face {
        font-display: swap;
        font-family: Lato;
        src: url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-700.eot");
        src: url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-700-1.eot") format("embedded-opentype"), url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-700.woff") format("woff"), url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-700.woff2") format("woff2"), url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-700.ttf") format("truetype"), url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-700.svg") format("svg");
        font-weight: 700;
        font-style: normal
    }

    @font-face {
        font-display: swap;
        font-family: Lato;
        src: url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-italic.eot");
        src: url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-italic-1.eot") format("embedded-opentype"), url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-italic.woff") format("woff"), url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-italic.woff2") format("woff2"), url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-italic.ttf") format("truetype"), url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-italic.svg") format("svg");
        font-weight: 400;
        font-style: italic
    }

    @font-face {
        font-display: swap;
        font-family: Lato;
        src: url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-regular.eot");
        src: url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-regular-1.eot") format("embedded-opentype"), url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-regular.woff") format("woff"), url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-regular.woff2") format("woff2"), url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-regular.ttf") format("truetype"), url("../../wp-content/themes/designcafe/fonts/lato-v20-latin-regular.svg") format("svg");
        font-weight: 400;
        font-style: normal
    }

    .whatsapp.cta-header-btn .fa-whatsapp {
        font-size: 2.5em;
        color: #25d366;
        transition: .3s
    }

    .whatsapp.cta-header-btn a i:hover {
        font-size: 3.25em
    }

    .footer-social-media .fa:hover {
        opacity: .7
    }

    .footer-social-media .fa-facebook {
        background: #3b5998;
        color: #fff
    }

    .footer-social-media .fa-twitter {
        background: #55acee;
        color: #fff
    }

    .footer-social-media .fa-linkedin {
        background: #007bb5;
        color: #fff
    }

    .footer-social-media .fa-youtube-play {
        background: #b00;
        color: #fff
    }

    .footer-social-media .fa-instagram {
        background: #e4405f;
        color: #fff
    }

    .footer-social-media .fa-pinterest {
        background: #cb2027;
        color: #fff
    }

    .footer-social-media .fa {
        padding: 8px;
        font-size: 10px;
        width: 30px;
        text-align: center;
        text-decoration: none;
        margin: 3px
    }

    body {
        font-family: Lato, sans-serif;
        font-size: 18px;
        top: 78px;
        margin: 0;
        overscroll-behavior: none;
        line-height: 30px;
        font-weight: 400;
        color: #222;
        -webkit-font-smoothing: subpixel-antialiased;
        overflow-x: hidden;
        position: relative
    }

    p {
        line-height: 30px;
        font-weight: 400;
        color: #222
    }

    button:focus {
        outline: dotted 0;
        outline: -webkit-focus-ring-color auto 0
    }

    a {
        color: #C85514;
        text-decoration: none;
        background-color: transparent;
        transition: .3s
    }

    a:hover {
        text-decoration: none;
        color: #d5b58f;
        transition: .3s
    }

    .comment-form {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .form-control:focus,
    .wpcf7 input:focus[type=color],
    .wpcf7 input:focus[type=date],
    .wpcf7 input:focus[type=email],
    .wpcf7 input:focus[type=file],
    .wpcf7 input:focus[type=month],
    .wpcf7 input:focus[type=number],
    .wpcf7 input:focus[type=range],
    .wpcf7 input:focus[type=search],
    .wpcf7 input:focus[type=submit],
    .wpcf7 input:focus[type=tel],
    .wpcf7 input:focus[type=text],
    .wpcf7 input:focus[type=time],
    .wpcf7 input:focus[type=url],
    .wpcf7 input:focus[type=week],
    .wpcf7 select:focus,
    .wpcf7 textarea:focus {
        color: #495057;
        background-color: #fff;
        border-color: #ccc;
        outline: 0;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .wpcf7 .show>input.dropdown-toggle:focus[type=submit],
    .wpcf7 input:not(:disabled):not(.disabled).active:focus[type=submit],
    .wpcf7 input:not(:disabled):not(.disabled):active:focus[type=submit] {
        -webkit-box-shadow: none;
        box-shadow: none
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
        background: var(--wpr-bg-65d3d3ac-92af-4973-acef-3b2d9619ad46) no-repeat;
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

    .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info,
    .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:active,
    .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:focus,
    .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:hover {
        color: rgba(255, 255, 255, .5)
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

    .form-inline .bootstrap-select,
    .form-inline .bootstrap-select.form-control:not([class*=col-]) {
        width: auto
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

    .form-group .bootstrap-select,
    .form-inline .bootstrap-select {
        margin-bottom: 0
    }

    .form-inline .bootstrap-select .form-control {
        width: 100%
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

    .guide-main-content-new {
        padding-top: 55px
    }

    .franchisee-min-ht-slider,
    .homepage-min-ht-slider {
        min-height: 80vh
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

    button.alm-load-more-btn.more.done {
        opacity: .2
    }

    button.loading {
        background-image: var(--wpr-bg-fc5aacba-70d3-48df-968f-3a709b5f3429);
        background-repeat: no-repeat;
        background-size: 20px 20px;
        padding-left: 30px;
        background-position: left
    }

    button.loading {
        background-image: var(--wpr-bg-871209c0-1b98-4a0e-a2b0-9a76b1a133b0);
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

    .single-blog-entry-content h2 {
        font-size: 20px
    }

    .single-blog-entry-content h3 {
        font-size: 20px
    }

    .single-blog-entry-content dl:not(:last-child),
    .single-blog-entry-content hr:not(:last-child),
    .single-blog-entry-content p:not(:last-child),
    .single-blog-entry-content table:not(:last-child),
    .single-blog-entry-content ul:not(:last-child) {
        margin-bottom: 32px;
        margin-top: 20px
    }

    .single-blog-entry-content h1,
    .single-blog-entry-content h2,
    .single-blog-entry-content h3 {
        font-weight: 600;
        text-transform: capitalize;
        letter-spacing: .4px
    }

    .single-blog-entry-content h1,
    .single-blog-entry-content h2,
    .single-blog-entry-content h3 {
        line-height: 1.3;
        margin: 23px 0
    }

    .subcription-newsletter-head-1 {
        font-weight: 500 !important
    }

    .jpibfi_container .custom-select-qa-list .custom-control-label::before {
        width: 12px;
        height: 12px
    }

    .jpibfi_container .custom-select-qa-list .custom-control-label::after {
        top: .15rem;
        left: -1.6rem
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

    .guide-single-content h2 {
        font-size: 25px;
        margin-bottom: 1rem;
        line-height: 40px
    }

    .guide-entry-title h1 {
        font-size: 25px;
        font-weight: 600;
        margin-bottom: 25px
    }

    .lead-form-ext {
        display: flex;
        flex-direction: column;
        padding-left: 0;
        margin-right: 10px;
        flex: 0.26
    }

    .lead-form-mobile-section {
        display: flex
    }

    .lead-input span .form-control,
    .wpcf7 input[type=text] {
        background: #f6f5f5;
        font-size: 18px;
        padding: 26px 20px;
        font-family: Raleway, sans-serif;
        margin: 0 0 5px
    }

    .lead-input span .form-control,
    .wpcf7 input[type=text],
    .wpcf7 select {
        background: #f6f5f5;
        font-size: 14px;
        padding: 10px 15px;
        font-family: Raleway, sans-serif;
        margin: 0 0 10px;
        height: auto;
        -webkit-appearance: none;
        -moz-appearance: none;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0;
        border-radius: 0;
        color: #222
    }

    .lead-input span .form-control,
    .wpcf7 input[type=text] {
        color: #222 !important
    }

    .lead-input span .form-control,
    .wpcf7 input[type=text]::-webkit-input-placeholder {
        color: #222 !important
    }

    .lead-input {
        margin: 0 0 10px
    }

    .lead-input span.wpcf7-not-valid-tip {
        color: red;
        font-size: 18px;
        font-weight: 400;
        display: block
    }

    .lead-input textarea {
        height: 120px;
        resize: none;
        width: 100%;
        border: none;
        border-radius: 10px;
        background-color: #f6f5f5
    }

    input.leadform-input.form-control {
        background: #f6f5f5;
        font-size: 14px;
        padding: 10px 15px;
        font-family: Raleway, sans-serif;
        margin: 0 0 10px;
        height: auto;
        border: none;
        border-radius: 10px;
        color: #222 !important
    }

    input.leadform-input.form-control.error {
        margin: 0;
        border: 1px solid #dc3545
    }

    .bootstrap-select.leadform-input.form-control button.dropdown-toggle {
        background: #f6f5f5;
        font-size: 14px;
        padding: 10px 15px;
        font-family: Raleway, sans-serif;
        margin: 0 0 10px;
        height: auto;
        border: none;
        border-radius: 10px;
        color: #222
    }

    .bootstrap-select.leadform-input.form-control select.error+button.dropdown-toggle {
        border: 1px solid #dc3545
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

    .bootstrap-select.leadform-input .dropdown-item.selected.active,
    .bootstrap-select.leadform-input .dropdown-item.selected:active {
        color: #000;
        background-color: #f8f9fa
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

    input.leadform-input::-webkit-input-placeholder {
        color: #b7b5b5
    }

    input.leadform-input::-moz-placeholder {
        color: #b7b5b5
    }

    input.leadform-input:-ms-input-placeholder {
        color: #b7b5b5
    }

    input.leadform-input:-moz-placeholder {
        color: #b7b5b5
    }

    .bootstrap-select.leadform-input>.dropdown-toggle.bs-placeholder,
    .bootstrap-select.leadform-input>.dropdown-toggle.bs-placeholder:active,
    .bootstrap-select.leadform-input>.dropdown-toggle.bs-placeholder:focus,
    .bootstrap-select.leadform-input>.dropdown-toggle.bs-placeholder:hover {
        color: #b7b5b5 !important
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

    .video-testimonial-meta .vdo-testimonial-title,
    .video-testimonial-meta h2 {
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

    .guide-single-content.guide-details-description-wrapper h1,
    .guide-single-content.guide-details-description-wrapper h2,
    .guide-single-content.guide-details-description-wrapper h3 {
        font-size: 20px;
        margin-bottom: 1rem;
        line-height: 40px
    }

    .guide-single-content img {
        margin-bottom: 15px;
        max-width: 100%;
        width: 100%
    }

    .leadform-input.error {
        border: 1px solid #dc3545
    }

    .leadform-input.error+label.error {
        color: #dc3545;
        font-size: 12px;
        margin-bottom: 0
    }

    .bootstrap-select.leadform-input+label.error {
        color: #dc3545;
        font-size: 12px;
        margin-bottom: 0
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

    button.alm-load-more-btn.more.done {
        opacity: .2;
        display: none
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

        .owl-collecttion-listing .owl-stage {
            left: -100px
        }

        .project-template-wrap {
            padding: 25px 0 0
        }

        .video-testimonial-meta .vdo-testimonial-title,
        .video-testimonial-meta h2 {
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

        .guide-entry-title h1 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px
        }

        .guide-main-content {
            margin-top: 10px
        }

        .lead-input span .form-control,
        .wpcf7 input[type=text],
        .wpcf7 select {
            background: #f6f5f5;
            font-size: 14px;
            padding: 8px 10px;
            font-family: Raleway, sans-serif;
            margin: 0 0 10px;
            height: auto;
            -webkit-appearance: none;
            -moz-appearance: none;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0;
            border-radius: 4px;
            border: 0
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

        input.leadform-input.form-control {
            margin: 0 0 5px;
            padding: 5px 8px
        }

        .bootstrap-select>.dropdown-toggle.bs-placeholder:active,
        .bootstrap-select>.dropdown-toggle.bs-placeholder:focus,
        .bootstrap-select>.dropdown-toggle.bs-placeholder:hover {
            padding: 5px 10px;
            margin: 0 0 5px
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
        .alm-load-more-btn {
            font-size: 14px
        }

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

        .wpcf7 input[type=submit] {
            padding: 4px 0
        }

        .owl-collecttion-listing .owl-stage {
            left: -20px
        }

        .video-testimonial-meta .vdo-testimonial-title,
        .video-testimonial-meta h2 {
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

        .guide-entry-title h1 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px
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

        .lead-input span .form-control,
        .wpcf7 input[type=text],
        .wpcf7 select {
            background: #f6f5f5;
            font-size: 14px;
            padding: 8px 10px;
            font-family: Raleway, sans-serif;
            margin: 0 0 10px;
            height: auto;
            -webkit-appearance: none;
            -moz-appearance: none;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0;
            border-radius: 4px;
            border: 0
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

        input.leadform-input.form-control {
            margin: 0 0 5px;
            padding: 5px 8px
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

        .owl-collecttion-listing .owl-stage {
            left: -20px
        }

        .video-testimonial-meta .vdo-testimonial-title,
        .video-testimonial-meta h2 {
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

        .guide-entry-title h1 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px
        }

        .guide-main-content {
            margin-top: 10px
        }

        .guide-single-content.guide-details-description-wrapper h1,
        .guide-single-content.guide-details-description-wrapper h2,
        .guide-single-content.guide-details-description-wrapper h3 {
            font-size: 18px;
            line-height: 24px;
            margin-bottom: 10px
        }

        .lead-input span .form-control,
        .wpcf7 input[type=text],
        .wpcf7 select:after {
            content: "\f078";
            float: right;
            padding: 0;
            font-size: 20px
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

        .lead-input span .form-control,
        .wpcf7 input[type=text],
        .wpcf7 select {
            background: #f6f5f5;
            font-size: 14px;
            padding: 8px 10px;
            font-family: Raleway, sans-serif;
            margin: 0 0 10px;
            height: auto;
            -webkit-appearance: none;
            -moz-appearance: none;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0;
            border-radius: 4px;
            border: 0
        }

        .alm-load-more-btn {
            font-size: 14px
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

        .lead-form-ext {
            margin-right: 12px;
            margin-top: -18px
        }

        input.leadform-input.form-control {
            margin: 0 0 5px;
            padding: 5px 8px
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

    .local .cta {
        margin-top: 25px
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
        .local .cta {
            margin-top: 20px
        }

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

    .subcription-newsletter-section {
        background-color: #e0b584b5;
        padding: 40px;
        text-align: center
    }

    .center-align-form {
        justify-content: center
    }

    .subcription-newsletter-head-1 {
        font-size: 20px;
        margin-bottom: 30px;
        margin-top: 12px
    }

    .form-inline .form-group .subcription-newsletter-email {
        padding: 10px 15px;
        font-size: 20px;
        border-radius: 5px;
        line-height: 1;
        height: auto;
        width: 365px !important
    }

    .form-inline {
        display: inline-flex
    }

    .form-inline .form-group .blog-subscription-form {
        padding: 12px 50px;
        font-size: 20px;
        border-radius: 5px;
        background-color: #981f1f;
        line-height: 1;
        color: #fff !important;
        margin-left: 15px;
        border: initial;
        height: auto
    }

    .blog-or-text {
        font-size: 30px;
        margin: 30px 0;
        line-height: 1
    }

    .blog-widget-area .widget {
        padding: 30px 0;
        border-bottom: 1px solid rgba(0, 0, 0, .2)
    }

    .textwidget .alm-load-more-btn {
        background: 0 0;
        border: 0;
        text-decoration: none;
        color: #45b1bb
    }

    .textwidget .alm-btn-wrap {
        text-align: center
    }

    .blog-widget-area .widget_text {
        padding: 30px 0
    }

    .lockdown-offer-content {
        text-align: center
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

    form#ContactUsFormMainHome .leadform-mobile-input {
        padding-right: 105px
    }

    form#ContactUsFormMainHome .bootstrap-select.leadform-input.form-control button.dropdown-toggle {
        font-size: 20px;
        border-radius: 0;
        margin-bottom: 0;
        border-radius: 5px
    }

    form#ContactUsFormMainHome .lead-form-mobile-section {
        margin-bottom: 5px
    }

    .lead-form-mobile-section {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
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

    .lead-input span.wpcf7-not-valid-tip {
        color: red;
        font-size: 12px;
        font-weight: 400;
        display: block;
        line-height: 1
    }

    .modal-body {
        padding: 0
    }

    .wpcf7 input:not(:disabled):not(.disabled):active[type=submit] {
        -webkit-box-shadow: initial;
        box-shadow: initial
    }

    .wpcf7 input:not(:disabled):not(.disabled):active[type=submit] {
        color: #fff;
        background-color: #062639;
        border-color: #062639
    }

    .wpcf7 input:focus[type=submit] {
        background-color: #062639
    }

    .wpcf7 input:hover[type=submit] {
        color: #fff;
        background-color: #062639;
        border-color: #062639;
        height: auto
    }

    .tooltip-inner {
        background-color: #c5996a
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
        border: 1px solid #981f1f;
        color: #fff;
        background-color: #981f1f
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
        background-color: #981f1f;
        font-size: 16px;
        line-height: 1;
        display: inline-block;
        border: 1px solid #981f1f
    }

    .fancybox-slide {
        padding-left: 0 !important;
        padding-right: 0 !important
    }

    .guide-main-content-new {
        padding: 80px 0
    }

    .guide-single-content.guide-details-description-wrapper h2 {
        font-size: 22px;
        font-weight: 600;
        line-height: 1.5
    }

    .guide-right-main-cont {
        margin-bottom: 30px
    }

    .guide-right-main-cont .subcription-newsletter-section {
        margin-bottom: 30px
    }

    .guide-category {
        border: none;
        border-radius: 0
    }

    .guide-category-name a {
        font-size: 18px;
        color: #1b1919;
        font-weight: 600;
        padding-left: 0
    }

    .guide-full-list {
        padding: 0
    }

    .guide-category-name {
        background-color: transparent;
        padding-left: 22px
    }

    .guide-full-list>div {
        padding: 20px;
        border-bottom: 1px solid rgba(0, 0, 0, .125);
        padding-left: 27px
    }

    .guide-full-list a {
        color: #1c1919;
        font-size: 18px
    }

    .btn:focus {
        -webkit-box-shadow: initial;
        box-shadow: initial
    }

    .guide-right-main-cont .subcription-newsletter-section .form-inline {
        display: inline-flex
    }

    .guide-section-1 {
        padding-top: 40px;
        border-top: 5px solid #4f9ca7
    }

    .guide-entry-title h1 {
        font-size: 30px;
        font-weight: 600;
        margin-bottom: 20px;
        color: #4f9da7
    }

    .guide-load-more>div {
        padding-bottom: 20px
    }

    .guide-qa-section-1 {
        background-color: #e0c8ac;
        padding: 40px 50px
    }

    .custom-select-qa-list .custom-control-label::before {
        border-radius: 35%
    }

    .custom-select-qa-list .custom-control-label {
        color: #fff;
        font-size: 16px;
        width: 100%;
        cursor: pointer
    }

    .custom-select-qa-list {
        width: 100%;
        max-width: 650px;
        margin: auto;
        margin-bottom: 16px;
        line-height: 1.3;
        padding-left: 2.7rem;
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: #C85514;
        cursor: pointer
    }

    .guide-qa-section-1-content {
        max-width: 650px;
        text-align: center;
        margin: auto;
        margin-bottom: 22px
    }

    .custom-select-qa:checked~.custom-control-label::before {
        color: #000;
        border-color: #000;
        background-color: #000
    }

    .custom-select-qa:not(:disabled):active~.custom-control-label::before {
        color: #fff;
        background-color: #000;
        border-color: #000
    }

    .custom-select-qa:focus~.custom-control-label::before {
        -webkit-box-shadow: initial;
        box-shadow: initial
    }

    .guide-qa-section-1-link-section {
        display: none;
        text-align: center
    }

    .guide-qa-section-1-link {
        color: #C85514;
        display: inline-block;
        line-height: 1;
        padding: 14px 118px;
        background-color: #fff;
        font-size: 16px
    }

    .custom-image-qa-list {
        position: relative;
        display: inline-block;
        margin: auto
    }

    .custom-image-qa-list input[type=radio]:checked+label>img {
        border: 5px solid #C85514
    }

    .custom-image-qa-list input[type=radio]+label>img {
        width: 200px;
        height: 200px;
        transition: .5s all;
        margin: 0 20px;
        cursor: pointer
    }

    .guide-full-list .active {
        border-left: 3px solid #C85514
    }

    .error_Msg {
        color: red;
        text-align: center;
        font-size: .8rem
    }

    .form-inline .form-group .guide-ext-no {
        padding: 9px 0 9px 5px;
        font-size: 20px;
        border-radius: 5px;
        line-height: 1;
        height: auto;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border: 0;
        border-right: 1px solid #ced4da
    }

    .success_Msg {
        color: #28a745;
        text-align: center;
        font-size: .8rem;
        width: 100%
    }

    .form-inline .guide-subscription-confirm {
        font-size: 14px;
        line-height: initial;
        margin-top: 10px;
        text-align: left;
        width: 100%;
        margin-left: 100px;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .form-inline .guide-subscription-confirm>input {
        margin-right: 5px
    }

    .error-validation {
        color: red;
        text-align: center;
        font-size: .8rem
    }

    .form-inline .lead-form-mobile-section {
        align-items: flex-start
    }

    .subcription-newsletter-head-1-guide {
        font-size: 26px
    }

    .blog-or-text-guide {
        font-size: 18px
    }

    .guide-form-title {
        font-size: 1rem
    }

    .lead-form-ext-guide {
        position: absolute;
        z-index: 999
    }

    .form-inline .form-group .whatsapp-phone-number {
        padding-left: 80px
    }

    .form-inline .form-group .ContactFormSubmitBtn {
        padding: 12px 50px
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

        .subcription-newsletter-section {
            background-color: #e0c8ac;
            padding: 40px;
            text-align: center
        }

        .center-align-form {
            justify-content: center
        }

        .subcription-newsletter-head-1 {
            font-size: 20px;
            margin-bottom: 30px;
            font-weight: 500
        }

        .form-inline .form-group .subcription-newsletter-email {
            padding: 20px 15px;
            font-size: 20px;
            border-radius: 5px;
            line-height: 1;
            height: auto;
            width: 430px !important
        }

        .form-inline .form-group .blog-subscription-form {
            padding: 20px 50px;
            font-size: 20px;
            border-radius: 5px;
            background-color: #981f1f;
            line-height: 1;
            color: #fff;
            margin-left: 15px
        }

        .blog-or-text {
            font-size: 30px;
            margin: 30px 0;
            line-height: 1
        }

        .blog-widget-area .widget {
            padding: 30px 0;
            border-bottom: 1px solid rgba(0, 0, 0, .2)
        }

        .blog-widget-area .widget_text {
            padding: 30px 0
        }

        .lockdown-offer-content {
            text-align: center
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

        .form-inline .form-group .guide-ext-no {
            padding: 20px 15px;
            font-size: 20px;
            border-radius: 5px;
            line-height: 1;
            height: auto;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border: 0;
            border-right: 1px solid #ced4da
        }

        .form-inline .form-group .whatsapp-phone-number {
            padding-left: 100px
        }

        .form-inline .guide-subscription-confirm {
            margin-left: 140px
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

        .subcription-newsletter-section {
            background-color: #e0c8ac;
            padding: 40px;
            text-align: center
        }

        .center-align-form {
            justify-content: center
        }

        .subcription-newsletter-head-1 {
            font-size: 20px;
            margin-bottom: 30px;
            font-weight: 500
        }

        .form-inline .form-group .subcription-newsletter-email {
            padding: 20px 15px;
            font-size: 20px;
            border-radius: 5px;
            line-height: 1;
            height: auto;
            width: 385px !important
        }

        .form-inline .form-group .blog-subscription-form {
            padding: 20px 50px;
            font-size: 20px;
            border-radius: 5px;
            background-color: #981f1f;
            line-height: 1;
            color: #fff;
            margin-left: 15px
        }

        .blog-or-text {
            font-size: 30px;
            margin: 30px 0;
            line-height: 1
        }

        .blog-widget-area .widget {
            padding: 30px 0;
            border-bottom: 1px solid rgba(0, 0, 0, .2)
        }

        .blog-widget-area .widget_text {
            padding: 30px 0
        }

        .lockdown-offer-content {
            text-align: center
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

        .form-inline .guide-subscription-confirm {
            font-size: 14px;
            line-height: initial;
            margin-top: 10px;
            text-align: left;
            width: 100%;
            margin-left: 120px
        }

        .error-validation {
            color: red;
            text-align: center;
            font-size: .8rem
        }

        .form-inline .lead-form-mobile-section {
            align-items: flex-start
        }

        .subcription-newsletter-head-1-guide {
            font-size: 26px
        }

        .blog-or-text-guide {
            font-size: 18px
        }

        .guide-form-title {
            font-size: 1rem
        }

        .lead-form-ext-guide {
            position: absolute;
            z-index: 999
        }

        .form-inline .form-group .guide-ext-no {
            padding: 20px 15px;
            font-size: 20px;
            border-radius: 5px;
            line-height: 1;
            height: auto;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border: 0;
            border-right: 1px solid #ced4da
        }

        .form-inline .form-group .whatsapp-phone-number {
            padding-left: 100px
        }

        .form-inline .form-group .ContactFormSubmitBtn {
            padding: 22px 50px
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

        .subcription-newsletter-section {
            background-color: #e0c8ac;
            padding: 30px;
            text-align: center
        }

        .center-align-form {
            justify-content: center
        }

        .subcription-newsletter-head-1 {
            font-size: 20px;
            margin-bottom: 20px;
            font-weight: 500
        }

        .form-inline .form-group .subcription-newsletter-email {
            padding: 10px;
            font-size: 18px;
            border-radius: 5px;
            line-height: 1;
            height: auto;
            width: 340px !important
        }

        .form-inline .form-group .blog-subscription-form {
            padding: 12px 50px;
            font-size: 20px;
            border-radius: 5px;
            background-color: #981f1f;
            line-height: 1;
            color: #fff;
            margin-left: 15px
        }

        .blog-or-text {
            font-size: 18px;
            margin: 20px 0;
            line-height: 1
        }

        .blog-widget-area .widget {
            padding: 25px 0;
            border-bottom: 1px solid rgba(0, 0, 0, .2)
        }

        .textwidget .alm-load-more-btn {
            background: 0 0;
            border: 0;
            color: #45b1bb
        }

        .textwidget .alm-btn-wrap {
            text-align: center
        }

        .blog-widget-area .widget_text {
            padding: 30px 0
        }

        .lockdown-offer-content {
            text-align: center
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

        .error_Msg {
            color: red;
            text-align: center;
            font-size: .8rem
        }

        .form-inline .form-group .guide-ext-no {
            padding: 8px 0 8px 5px;
            font-size: 20px;
            border-radius: 5px;
            line-height: 1;
            height: auto;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border: 0;
            border-right: 1px solid #ced4da
        }

        .success_Msg {
            color: #28a745;
            text-align: center;
            font-size: .8rem;
            width: 100%
        }

        .form-inline .guide-subscription-confirm {
            font-size: 14px;
            line-height: initial;
            margin-top: 10px;
            text-align: left;
            width: 100%;
            margin-left: 114px;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .form-inline .guide-subscription-confirm>input {
            margin-right: 5px
        }

        .error-validation {
            color: red;
            text-align: center;
            font-size: .8rem
        }

        .form-inline .lead-form-mobile-section {
            align-items: flex-start
        }

        .subcription-newsletter-head-1-guide {
            font-size: 24px
        }

        .blog-or-text-guide {
            font-size: 18px
        }

        .guide-form-title {
            font-size: 1rem
        }

        .lead-form-ext-guide {
            position: absolute;
            z-index: 999
        }

        .form-inline .form-group .whatsapp-phone-number {
            padding-left: 80px
        }

        .form-inline .form-group .ContactFormSubmitBtn {
            padding: 12px 50px
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

        .subcription-newsletter-section {
            background-color: #e0c8ac;
            padding: 30px;
            text-align: center
        }

        .center-align-form {
            justify-content: center
        }

        .subcription-newsletter-head-1 {
            font-size: 20px;
            margin-bottom: 20px;
            font-weight: 500
        }

        .form-inline .form-group .subcription-newsletter-email {
            padding: 10px;
            font-size: 18px;
            border-radius: 5px;
            line-height: 1;
            height: auto;
            width: 280px !important
        }

        .form-inline .form-group .whatsapp-phone-number {
            margin-left: 70px;
            width: 210px !important
        }

        .form-inline .form-group .blog-subscription-form {
            padding: 10px 50px;
            font-size: 18px;
            border-radius: 5px;
            background-color: #981f1f;
            line-height: 1;
            color: #fff;
            margin-left: 15px
        }

        .blog-or-text {
            font-size: 26px;
            margin: 20px 0;
            line-height: 1
        }

        .blog-widget-area .widget {
            padding: 25px 0;
            border-bottom: 1px solid rgba(0, 0, 0, .2)
        }

        .textwidget .alm-load-more-btn {
            background: 0 0;
            border: 0;
            color: #45b1bb
        }

        .textwidget .alm-btn-wrap {
            text-align: center
        }

        .lockdown-offer-content {
            text-align: center
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

        .subcription-newsletter-section {
            background-color: #e0c8ac;
            padding: 30px 10px;
            text-align: center;
            margin-left: -6%;
            margin-right: -6%
        }

        .center-align-form {
            justify-content: center
        }

        .center-align-form .form-group {
            margin-bottom: 0
        }

        .subcription-newsletter-head-1 {
            font-size: 20px;
            margin-bottom: 30px;
            font-weight: 500
        }

        .form-inline .form-group .subcription-newsletter-email {
            padding: 20px 10px;
            font-size: 20px;
            border-radius: 5px;
            line-height: 1;
            height: auto;
            width: 430px !important
        }

        .form-inline .form-group .blog-subscription-form {
            padding: 20px 50px;
            font-size: 20px;
            border-radius: 5px;
            background-color: #981f1f;
            line-height: 1;
            color: #fff;
            margin-left: 15px;
            height: auto
        }

        .blog-or-text {
            font-size: 24px;
            margin: 30px 0;
            line-height: 1
        }

        .blog-widget-area .widget {
            padding: 40px 0;
            border-bottom: 1px solid rgba(0, 0, 0, .2)
        }

        .textwidget .alm-load-more-btn {
            background: 0 0;
            border: 0;
            color: #45b1bb
        }

        .textwidget .alm-btn-wrap {
            text-align: center
        }

        .fa-facebook:before,
        .fa-linkedin:before,
        .fa-twitter:before,
        .fa-whatsapp:before {
            margin-right: 0
        }

        .single-blog-entry-content h2 {
            font-size: 16px
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

        .lockdown-offer-content {
            text-align: center
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

        .guide-entry-title h1 {
            font-size: 24px
        }

        .guide-right-main-cont .subcription-newsletter-section .form-inline {
            display: inline-flex;
            justify-content: center
        }

        .guide-qa-section-1 {
            padding: 20px 10px;
            margin-left: -5%;
            margin-right: -5%
        }

        .custom-select-qa-list .custom-control-label {
            font-size: 14px
        }

        .custom-select-qa-list .custom-control-label::after,
        .custom-select-qa-list .custom-control-label::before {
            top: .13rem;
            left: -1.5rem;
            width: 15px;
            height: 15px
        }

        .guide-single-content.guide-details-description-wrapper .guide-qa-section-1-title h2 {
            font-size: 20px;
            line-height: 1.3
        }

        .guide-qa-section-1-title {
            margin-bottom: 20px
        }

        .custom-image-qa-list input[type=radio]+label>img {
            width: 200px;
            height: 200px
        }

        .guide-qa-section-1-link {
            padding: 10px 20px;
            background-color: #fff
        }

        .guide-details-description-wrapper .white {
            margin-left: -5%;
            margin-right: -5%
        }

        .custom-image-qa-list input[type=radio]:checked+label>img {
            border: 3px solid #C85514
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

        .subcription-newsletter-section {
            background-color: #e0c8ac;
            padding: 20px 10px;
            text-align: center;
            margin-left: -5%;
            margin-right: -5%
        }

        .center-align-form {
            justify-content: center
        }

        .center-align-form .form-group {
            margin-bottom: 0
        }

        .subcription-newsletter-head-1 {
            font-size: 20px;
            margin-bottom: 15px;
            font-weight: 500
        }

        .form-inline .form-group .subcription-newsletter-email {
            padding: 8px 10px;
            font-size: 10px;
            border-radius: 5px;
            line-height: 1;
            height: auto
        }

        .form-inline .form-group .blog-subscription-form {
            padding: 8px;
            font-size: 10px;
            border-radius: 5px;
            background-color: #981f1f;
            line-height: 2;
            color: #fff;
            margin-left: 15px
        }

        .blog-or-text {
            font-size: 22px;
            margin: 15px 0;
            line-height: 1
        }

        .blog-widget-area .widget {
            padding: 20px 0;
            border-bottom: 1px solid rgba(0, 0, 0, .2)
        }

        .textwidget .alm-load-more-btn {
            background: 0 0;
            border: 0;
            color: #45b1bb
        }

        .textwidget .alm-btn-wrap {
            text-align: center
        }

        .fa-facebook:before,
        .fa-linkedin:before,
        .fa-twitter:before,
        .fa-whatsapp:before {
            margin-right: 0
        }

        .single-blog-entry-content h2 {
            font-size: 16px
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

        .lockdown-offer-content {
            text-align: center
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

        .video-testimonial-meta h2 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 1rem
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

        .guide-entry-title h1 {
            font-size: 24px
        }

        .guide-qa-section-1 {
            padding: 20px 10px;
            margin-left: -5%;
            margin-right: -5%
        }

        .custom-select-qa-list .custom-control-label {
            font-size: 12px
        }

        .custom-select-qa-list .custom-control-label::after,
        .custom-select-qa-list .custom-control-label::before {
            top: .15rem;
            left: -1rem;
            width: 10px;
            height: 10px
        }

        .guide-single-content.guide-details-description-wrapper .guide-qa-section-1-title h2 {
            font-size: 20px;
            line-height: 1.3
        }

        .guide-qa-section-1-title {
            margin-bottom: 20px
        }

        .custom-image-qa-list input[type=radio]+label>img {
            width: 100px;
            height: 100px
        }

        .guide-qa-section-1-link {
            padding: 10px 20px;
            background-color: #fff
        }

        .guide-details-description-wrapper .white {
            margin-left: -5%;
            margin-right: -5%
        }

        .custom-image-qa-list input[type=radio]:checked+label>img {
            border: 3px solid #C85514
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

        .subcription-newsletter-section {
            background-color: #e0c8ac;
            padding: 20px;
            text-align: center;
            margin-left: -15px;
            margin-right: -15px
        }

        .center-align-form {
            justify-content: center
        }

        .center-align-form .form-group {
            margin-bottom: 0
        }

        .subcription-newsletter-head-1 {
            font-size: 16px;
            margin-bottom: 15px;
            font-weight: 500
        }

        .form-inline .form-group .subcription-newsletter-email {
            padding: 8px 10px;
            font-size: 10px;
            border-radius: 5px;
            line-height: 2;
            height: auto
        }

        .form-inline .form-group .blog-subscription-form {
            padding: 8px;
            font-size: 10px;
            margin-top: 34px;
            border-radius: 5px;
            background-color: #981f1f;
            line-height: 2;
            color: #fff;
            display: inherit
        }

        .blog-or-text {
            font-size: 16px;
            margin: 15px 0;
            line-height: 1
        }

        .subcription-newsletter-section .form-group {
            margin-bottom: 0
        }

        .blog-widget-area .widget {
            padding: 20px 0;
            border-bottom: 1px solid rgba(0, 0, 0, .2)
        }

        .textwidget .alm-load-more-btn {
            background: 0 0;
            border: 0;
            color: #45b1bb
        }

        .textwidget .alm-btn-wrap {
            text-align: center
        }

        .fa-facebook:before,
        .fa-linkedin:before,
        .fa-twitter:before,
        .fa-whatsapp:before {
            margin-right: 0
        }

        .single-blog-entry-content h2 {
            font-size: 17px
        }

        .single-blog-entry-content h3 {
            font-size: 16px
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

        .lockdown-offer-content {
            text-align: center
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

        .video-testimonial-meta h2 {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 1rem
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

        .guide-entry-title h1 {
            font-size: 24px
        }

        .guide-qa-section-1 {
            padding: 20px 10px;
            margin-left: -5%;
            margin-right: -5%
        }

        .custom-select-qa-list .custom-control-label {
            font-size: 12px
        }

        .custom-select-qa-list .custom-control-label::after,
        .custom-select-qa-list .custom-control-label::before {
            top: .15rem;
            left: -1rem;
            width: 10px;
            height: 10px
        }

        .guide-single-content.guide-details-description-wrapper .guide-qa-section-1-title h2 {
            font-size: 20px;
            line-height: 1.3
        }

        .guide-qa-section-1-title {
            margin-bottom: 20px
        }

        .custom-image-qa-list input[type=radio]+label>img {
            width: 100px;
            height: 100px
        }

        .guide-qa-section-1-link {
            padding: 10px 20px;
            background-color: #fff
        }

        .guide-details-description-wrapper .white {
            margin-left: -5%;
            margin-right: -5%
        }

        .custom-image-qa-list input[type=radio]:checked+label>img {
            border: 3px solid #C85514
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
        .guide-container-wrapper {
            padding: 0 5%
        }

        .guide-section-1 {
            padding: 30px 0
        }

        .jpibfi_container .custom-control-label::before {
            position: absolute;
            top: .1rem;
            left: -1.6rem;
            display: block;
            width: 8px;
            height: 8px;
            pointer-events: none;
            content: "";
            background-color: #fff;
            border: 1px solid #adb5bd
        }

        .form-inline .form-group .subcription-newsletter-email {
            width: 175px !important
        }

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

        .lead-form-mobile-section {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .form-inline .form-group .guide-ext-no {
            padding: 7px 0 7px 2px;
            font-size: 10px;
            border-radius: 5px;
            line-height: 1;
            height: auto;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border: 0;
            border-right: 1px solid #ced4da;
            border: 1px solid #ced4da
        }

        .form-inline .form-group .subcription-newsletter-email {
            width: 202px !important
        }

        .form-inline .form-group .whatsapp-phone-number {
            padding-left: 50px
        }

        .lead-form-ext-guide {
            flex: initial
        }

        .form-inline .guide-subscription-confirm {
            font-size: 10px;
            line-height: 1;
            margin-top: 10px;
            text-align: left;
            width: initial;
            margin-left: initial;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-bottom: 0
        }

        .guide-form-title {
            font-size: 14px
        }

        .blog-or-text-guide {
            font-size: 12px;
            margin: 0 0 15px
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

        .single-blog-entry-content dl:not(:last-child),
        .single-blog-entry-content hr:not(:last-child),
        .single-blog-entry-content p:not(:last-child),
        .single-blog-entry-content table:not(:last-child),
        .single-blog-entry-content ul:not(:last-child) {
            margin-bottom: 20px;
            margin-top: 0
        }

        form#ContactUsFormMainHome .bootstrap-select.leadform-input.form-control button.dropdown-toggle {
            font-size: 14px
        }

        form#ContactUsFormMainHome .leadform-mobile-input {
            padding-right: 103px;
            text-align: left;
            padding: 10px 15px
        }

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
        background: var(--wpr-bg-c017faa5-623f-4d3f-a9ef-1323adf904f7) 15px center no-repeat;
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
        background: var(--wpr-bg-4651b085-8574-458a-9987-2901610cd9a0) right no-repeat;
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

        .lead-form-ext {
            margin-right: 12px;
            margin-top: 0
        }

        .form-inline {
            display: flex
        }
    }

    .wpcf7 {
        max-width: 100%
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

    .pinit-hover {
        opacity: .8 !important
    }

    a.pinit-button {
        border-bottom: 0 !important;
        box-shadow: none !important;
        margin-bottom: 0 !important
    }

    a.pinit-button::after {
        display: none
    }

    .form-radio-gp {
        margin-bottom: 1%
    }

    .footerForm .select2-selection--single {
        width: 85px
    }

    .guide-category-name a {
        text-align: left
    }

    .form-inline .form-group .blog-subscription-form {
        height: auto
    }

    #contactUsModal {
        z-index: 999999
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

    .alm-btn-wrap {
        text-align: center;
        padding: 0 0 20px
    }

    .alm-load-more-btn {
        border: none;
        font-size: 20px;
        color: #C85514;
        background: 0 0;
        font-weight: 500
    }

    @media (min-width:768px) and (max-width:1023px) {
        .alm-load-more-btn {
            font-size: 14px
        }
    }

    @media (min-width:480px) and (max-width:767px) {
        .alm-load-more-btn {
            font-size: 14px
        }
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

        .alm-load-more-btn {
            font-size: 14px
        }
    }

    .alm-layouts .alm-listing.flex .alm-layout.alm-3-col,
    .alm-layouts .alm-listing.flex .alm-layout.alm-4-col {
        width: 30.6333%;
        margin-right: 4%
    }

    .last:is(.alm-layouts .alm-listing.flex .alm-layout.alm-3-col, .alm-layouts .alm-listing.flex .alm-layout.alm-4-col) {
        margin-right: 0
    }

    @media screen and (max-width:1024px) {
        .alm-layouts .alm-listing.flex .alm-layout.alm-4-col {
            width: 48%;
            margin-right: 4%
        }

        :is(.alm-layouts .alm-listing.flex .alm-layout.alm-4-col):nth-child(2n) {
            margin-right: 0
        }
    }

    .alm-layouts .alm-listing {
        margin: 0;
        padding: 0
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

    .wpcf7 .screen-reader-response {
        position: absolute;
        overflow: hidden;
        clip: rect(1px, 1px, 1px, 1px);
        clip-path: inset(50%);
        height: 1px;
        width: 1px;
        margin: -1px;
        padding: 0;
        border: 0;
        word-wrap: normal !important
    }

    .wpcf7 form .wpcf7-response-output {
        margin: 2em .5em 1em;
        padding: .2em 1em;
        border: 2px solid #00a0d2
    }

    .wpcf7 form.init .wpcf7-response-output,
    .wpcf7 form.resetting .wpcf7-response-output,
    .wpcf7 form.submitting .wpcf7-response-output {
        display: none
    }

    .wpcf7 form.sent .wpcf7-response-output {
        border-color: #46b450
    }

    .wpcf7 form.aborted .wpcf7-response-output,
    .wpcf7 form.failed .wpcf7-response-output {
        border-color: #dc3232
    }

    .wpcf7 form.spam .wpcf7-response-output {
        border-color: #f56e28
    }

    .wpcf7 form.invalid .wpcf7-response-output,
    .wpcf7 form.payment-required .wpcf7-response-output,
    .wpcf7 form.unaccepted .wpcf7-response-output {
        border-color: #ffb900
    }

    .wpcf7-form-control-wrap {
        position: relative
    }

    .wpcf7-not-valid-tip {
        color: #dc3232;
        font-size: 1em;
        font-weight: 400;
        display: block
    }

    .use-floating-validation-tip .wpcf7-not-valid-tip {
        position: relative;
        top: -2ex;
        left: 1em;
        z-index: 100;
        border: 1px solid #dc3232;
        background: #fff;
        padding: .2em .8em;
        width: 24em
    }

    .wpcf7-spinner {
        visibility: hidden;
        display: inline-block;
        background-color: #23282d;
        opacity: .75;
        width: 24px;
        height: 24px;
        border: none;
        border-radius: 100%;
        padding: 0;
        margin: 0 24px;
        position: relative
    }

    form.submitting .wpcf7-spinner {
        visibility: visible
    }

    .wpcf7-spinner::before {
        content: '';
        position: absolute;
        background-color: #fbfbfc;
        top: 4px;
        left: 4px;
        width: 6px;
        height: 6px;
        border: none;
        border-radius: 100%;
        transform-origin: 8px 8px;
        animation-name: spin;
        animation-duration: 1s;
        animation-timing-function: linear;
        animation-iteration-count: infinite
    }

    @media (prefers-reduced-motion:reduce) {
        .wpcf7-spinner::before {
            animation-name: blink;
            animation-duration: 2s
        }
    }

    @keyframes spin {
        from {
            transform: rotate(0)
        }

        to {
            transform: rotate(360deg)
        }
    }

    @keyframes blink {
        from {
            opacity: 0
        }

        50% {
            opacity: 1
        }

        to {
            opacity: 0
        }
    }

    .wpcf7 [inert] {
        opacity: .5
    }

    .wpcf7 input[type=file] {
        cursor: pointer
    }

    .wpcf7 input[type=file]:disabled {
        cursor: default
    }

    .wpcf7 .wpcf7-submit:disabled {
        cursor: not-allowed
    }

    .wpcf7 input[type=email],
    .wpcf7 input[type=tel],
    .wpcf7 input[type=url] {
        direction: ltr
    }
</style>

<noscript>
    <style id="rocket-lazyload-nojs-css">
        .rll-youtube-player,
        [data-lazy-src] {
            display: none !important;
        }
    </style>
</noscript>
<style id="wpr-lazyload-bg-container"></style>
<style id="wpr-lazyload-bg-exclusion"></style>
<noscript>
    <style id="wpr-lazyload-bg-nostyle">
        div.pp_default .pp_top .pp_left {
            --wpr-bg-c28b4623-6868-4fb7-8f02-4fb8dd189f47: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite.png');
        }

        div.pp_default .pp_top .pp_middle {
            --wpr-bg-e44d701f-97e7-419e-a096-bcd4b497c3d5: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite_x.png');
        }

        div.pp_default .pp_top .pp_right {
            --wpr-bg-7ab1ef04-5229-4c9d-8cdc-77cc3ff7ee89: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite.png');
        }

        div.pp_default .pp_content_container .pp_left {
            --wpr-bg-665c2357-df9c-4498-890b-b0fec2a8d946: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite_y.png');
        }

        div.pp_default .pp_content_container .pp_right {
            --wpr-bg-41ff6839-1371-49ef-a3b1-efa512955ca1: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite_y.png');
        }

        div.pp_default .pp_next:hover {
            --wpr-bg-d9e30e9b-2479-4b0b-8ccb-f2d396c58c09: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite_next.png');
        }

        div.pp_default .pp_previous:hover {
            --wpr-bg-eaf21d81-0c5e-47de-8e15-4805dd9ef9b6: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite_prev.png');
        }

        div.pp_default .pp_expand {
            --wpr-bg-cc6500df-1c0b-48f1-8825-45f1ab756a2d: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite.png');
        }

        div.pp_default .pp_expand:hover {
            --wpr-bg-74f8cdd7-225c-44a8-b536-f93fd57e5359: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite.png');
        }

        div.pp_default .pp_contract {
            --wpr-bg-d238d68d-e54a-4077-b65b-d1c34d95c46b: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite.png');
        }

        div.pp_default .pp_contract:hover {
            --wpr-bg-15643c17-8093-48e1-82ca-ad04e8d39920: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite.png');
        }

        div.pp_default .pp_close {
            --wpr-bg-fdb081b3-54c1-4e5f-a142-f15e2446dfc8: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite.png');
        }

        div.pp_default .pp_gallery ul li a {
            --wpr-bg-52b223d3-4033-4ff5-8e23-7400d25ff5b3: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/default_thumb.png');
        }

        div.pp_default .pp_nav .pp_pause,
        div.pp_default .pp_nav .pp_play {
            --wpr-bg-76f02098-0523-4e47-a8d5-cdad1017f083: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite.png');
        }

        div.pp_default a.pp_arrow_next,
        div.pp_default a.pp_arrow_previous {
            --wpr-bg-d051ab07-ec26-4670-bd5c-3dcf42ea0168: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite.png');
        }

        div.pp_default .pp_bottom .pp_left {
            --wpr-bg-2c1b3fc0-afe7-4cd9-a3e8-0f0a9489e891: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite.png');
        }

        div.pp_default .pp_bottom .pp_middle {
            --wpr-bg-3b65263f-e6c6-4aea-aef7-509c6cd2d220: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite_x.png');
        }

        div.pp_default .pp_bottom .pp_right {
            --wpr-bg-f79c4f04-3d19-4798-b412-3639dd5cb591: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/sprite.png');
        }

        div.pp_default .pp_loaderIcon {
            --wpr-bg-1dd4c65b-17a4-4987-8369-7f50aa437936: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/default/loader.gif');
        }

        div.facebook .pp_top .pp_left {
            --wpr-bg-3daa91b1-80aa-4681-bc35-0931d257a033: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
        }

        div.facebook .pp_top .pp_middle {
            --wpr-bg-729b1d92-a29a-455d-bbd0-18eb0d653de7: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/contentPatternTop.png');
        }

        div.facebook .pp_top .pp_right {
            --wpr-bg-651eeb6b-c081-4fcc-ba56-612832c146b7: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
        }

        div.facebook .pp_content_container .pp_left {
            --wpr-bg-25859d50-11e8-469b-a5c1-5a07adedb4e1: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/contentPatternLeft.png');
        }

        div.facebook .pp_content_container .pp_right {
            --wpr-bg-d2bea238-58b6-4fad-82fa-63d57f4542ef: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/contentPatternRight.png');
        }

        div.facebook .pp_expand {
            --wpr-bg-4dbf00ac-3d67-4eb8-8a09-57ff55e147d0: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
        }

        div.facebook .pp_expand:hover {
            --wpr-bg-02d74212-1939-439b-9786-a8607fb0a692: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
        }

        div.facebook .pp_contract {
            --wpr-bg-4979420d-8b16-4acf-96b3-e43e75774690: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
        }

        div.facebook .pp_contract:hover {
            --wpr-bg-fbec5127-97c9-45a5-a547-da5efd141e13: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
        }

        div.facebook .pp_close {
            --wpr-bg-eaf27d4d-c007-4afe-bee8-69d1a211ed76: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
        }

        div.facebook .pp_loaderIcon {
            --wpr-bg-44c88206-846b-40df-b101-6d0e5ff5eca1: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/loader.gif');
        }

        div.facebook .pp_arrow_previous {
            --wpr-bg-e063a3b9-64d8-412a-b968-8495d9f4be6b: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
        }

        div.facebook .pp_arrow_next {
            --wpr-bg-1e90ab6f-3700-42ae-8ad3-72a91ba5ecdf: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
        }

        div.facebook .pp_nav .pp_play {
            --wpr-bg-bb660b0f-6b39-4523-9e71-bb2aa5f43ee4: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
        }

        div.facebook .pp_nav .pp_pause {
            --wpr-bg-9a189d14-d62f-45c5-a07b-b80ff8c9f9d8: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
        }

        div.facebook .pp_next:hover {
            --wpr-bg-d2ae82de-3bb9-4d6c-adf3-22ef513d15e7: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/btnNext.png');
        }

        div.facebook .pp_previous:hover {
            --wpr-bg-64705d11-1ab3-48f0-bce4-efd0fe3edadc: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/btnPrevious.png');
        }

        div.facebook .pp_bottom .pp_left {
            --wpr-bg-f412697e-7b15-4b37-9e79-d4832facc1df: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
        }

        div.facebook .pp_bottom .pp_middle {
            --wpr-bg-65994a50-8831-438a-a0ac-c36605fcc18e: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/contentPatternBottom.png');
        }

        div.facebook .pp_bottom .pp_right {
            --wpr-bg-ac506f46-3cb4-41d6-8638-a8a71ce550aa: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
        }

        .pp_gallery li.default a {
            --wpr-bg-bb781192-885c-469e-872f-e6bb387dc305: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/facebook/default_thumbnail.gif');
        }

        a.pp_next {
            --wpr-bg-9d5965e3-f957-4dec-b257-4857fa8b77e6: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/light_rounded/btnNext.png');
        }

        a.pp_previous {
            --wpr-bg-9dd17490-4eb7-476e-b712-f80207cddec0: url('<?php echo base_url(); ?>assets/themes/designcafe/images/prettyPhoto/light_rounded/btnNext.png');
        }

        .owl-carousel .owl-video-play-icon {
            --wpr-bg-65d3d3ac-92af-4973-acef-3b2d9619ad46: url('<?php echo base_url(); ?>assets/themes/designcafe/css/owl.video.play.png');
        }

        .open-btn1.btnactive {
            --wpr-bg-c017faa5-623f-4d3f-a9ef-1323adf904f7: url('../../wp-content/themes/designcafe/images/icon_search.svg');
        }

        #search-wrap input[type=submit] {
            --wpr-bg-4651b085-8574-458a-9987-2901610cd9a0: url('../../wp-content/themes/designcafe/images/icon_search.svg');
        }

        .iti__flag {
            --wpr-bg-918cd379-52ce-45b0-89d0-4c5d8400499c: url('../../ajax/libs/intl-tel-input/17.0.8/img/flags.png');
        }

        .iti__flag {
            --wpr-bg-f804c577-fa7e-434f-b79f-a8447d6192fc: url('../../ajax/libs/intl-tel-input/17.0.8/img/flags@2x.png');
        }

        a.pinit-button.old_default span {
            --wpr-bg-8540589b-3440-4db6-8e42-76517d8579f6: url('../../wp-content/plugins/jquery-pin-it-button-for-images/css/images/pinit-button.png');
        }

        button.loading {
            --wpr-bg-fc5aacba-70d3-48df-968f-3a709b5f3429: url('../../wp-content/uploads/2021/10/20190133/ajax-loader.gif');
        }

        button.loading {
            --wpr-bg-871209c0-1b98-4a0e-a2b0-9a76b1a133b0: url('../../wp-content/uploads/2021/10/20190133/ajax-loader.gif');
        }

        .rll-youtube-player .play {
            --wpr-bg-76fab090-38f1-4086-bb9a-eae2f6ee0b01: url('../../wp-content/plugins/wp-rocket/assets/img/youtube.png');
        }
    </style>
</noscript>


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
            jQuery(".open-btn1").click(function () {
                jQuery(this).toggleClass("btnactive");
                jQuery("#search-wrap").toggleClass("panelactive");
                jQuery("#search-text").focus();
            });
        </script>
        <div class="container-fluid">

            <!--  -->
            <!--  -->

            <div class="row custom-guide-head">
                <div class="container guide-container-wrapper">
                    <div class="row guide-main-content-new">
                        <div class="col-lg-4 left-sidebar-guide d-none d-lg-block">
                            <div class="guide-left-main">

                                <div id="guides-accordion">

                                    <div class="card guide-category">
                                        <div class="card-header guide-category-name" id="guide-">

                                            <a class="btn collapsed" data-toggle="collapse" data-target="#collapse-21"
                                                aria-expanded="true" href="#collapse-21" aria-controls="collapse-21">
                                                Modular Kitchen Design Guides </a>

                                        </div>
                                        <div id="collapse-21" class="show collapse guide-category-collapse"
                                            aria-labelledby="heading-21" data-parent="#guides-accordion">
                                            <div class="card-body guide-full-list">
                                                <div class="active" id="7424">
                                                    <a id="7424" href="index.htm">5 Things To Know Before You Start</a>
                                                </div>
                                                <div class="post-6713 guide type-guide status-publish has-post-thumbnail guidescategory-kitchen"
                                                    id="post-6713">
                                                    <a id="6713"
                                                        href="../difference-between-modular-kitchen-and-civil-kitchen/index.htm">Modular
                                                        vs Civil Kitchen</a>
                                                </div>
                                                <div class="post-11166 guide type-guide status-publish has-post-thumbnail guidescategory-kitchen"
                                                    id="post-11166">
                                                    <a id="11166"
                                                        href="../process-of-planning-your-kitchen-interior-design/index.htm">How
                                                        To Plan Your Kitchen Interiors</a>
                                                </div>
                                                <div class="post-2791 guide type-guide status-publish has-post-thumbnail guidescategory-kitchen"
                                                    id="post-2791">
                                                    <a id="2791"
                                                        href="../modular-kitchen-design-types/index.htm">Modular Kitchen
                                                        Designs</a>
                                                </div>
                                                <div class="post-6815 guide type-guide status-publish has-post-thumbnail guidescategory-kitchen"
                                                    id="post-6815">
                                                    <a id="6815" href="../modular-kitchen-styles/index.htm">Modular
                                                        Kitchen Styles</a>
                                                </div>
                                                <div class="post-1407 guide type-guide status-publish has-post-thumbnail guidescategory-kitchen"
                                                    id="post-1407">
                                                    <a id="1407"
                                                        href="../different-types-of-kitchen-layouts/index.htm">Types of
                                                        Kitchen Layouts</a>
                                                </div>
                                                <div class="post-6205 guide type-guide status-publish has-post-thumbnail guidescategory-kitchen"
                                                    id="post-6205">
                                                    <a id="6205"
                                                        href="../how-to-choose-kitchen-layout/index.htm">Choosing A
                                                        Kitchen Layout</a>
                                                </div>
                                                <div class="post-7425 guide type-guide status-publish has-post-thumbnail guidescategory-kitchen"
                                                    id="post-7425">
                                                    <a id="7425"
                                                        href="../modular-kitchen-colour-combinations/index.htm">Kitchen
                                                        Colour Combinations</a>
                                                </div>
                                                <div class="post-1402 guide type-guide status-publish has-post-thumbnail guidescategory-kitchen"
                                                    id="post-1402">
                                                    <a id="1402"
                                                        href="../maximize-storage-space-in-your-modular-kitchen/index.htm">Maximize
                                                        Storage Space in Kitchen</a>
                                                </div>
                                                <div class="post-11323 guide type-guide status-publish has-post-thumbnail guidescategory-kitchen guidescategory-storage-and-organisation"
                                                    id="post-11323">
                                                    <a id="11323" href="../different-types-of-kitchen-units/index.htm">A
                                                        Guide To Different Kitchen Units</a>
                                                </div>
                                                <div class="post-13480 guide type-guide status-publish has-post-thumbnail guidescategory-materials-and-finishes guidescategory-kitchen"
                                                    id="post-13480">
                                                    <a id="13480"
                                                        href="../how-to-choose-best-material-for-kitchen-countertop/index.htm">Choosing
                                                        A Kitchen Countertop</a>
                                                </div>
                                                <div class="post-11209 guide type-guide status-publish has-post-thumbnail guidescategory-kitchen"
                                                    id="post-11209">
                                                    <a id="11209" href="../kitchen-backsplash-materials/index.htm">A
                                                        Guide To Kitchen Backsplash Materials</a>
                                                </div>
                                                <div class="post-11097 guide type-guide status-publish has-post-thumbnail guidescategory-kitchen"
                                                    id="post-11097">
                                                    <a id="11097"
                                                        href="../all-you-need-to-know-about-kitchen-flooring/index.htm">All
                                                        About Kitchen Flooring</a>
                                                </div>
                                                <div class="post-7530 guide type-guide status-publish has-post-thumbnail guidescategory-kitchen"
                                                    id="post-7530">
                                                    <a id="7530" href="../how-to-choose-a-kitchen-chimney/index.htm">How
                                                        To Choose A Chimney</a>
                                                </div>
                                                <div class="post-12316 guide type-guide status-publish has-post-thumbnail guidescategory-kitchen"
                                                    id="post-12316">
                                                    <a id="12316"
                                                        href="../everything-know-about-kitchen-islands/index.htm">A
                                                        Guide To Kitchen Islands</a>
                                                </div>

                                            </div>
                                        </div>





                                        <div class="card-header guide-category-name" id="guide-23">

                                            <a class="btn collapsed" data-toggle="collapse" data-target="#collapse-23"
                                                aria-expanded="true" href="#collapse-23" aria-controls="collapse-21">
                                                Bedroom Interior Design Guides </a>

                                        </div>
                                        <div id="collapse-23" class="collapse guide-category-collapse"
                                            aria-labelledby="heading-23" data-parent="#guides-accordion">
                                            <div class="card-body guide-full-list">

                                                <div class="post-43498 guide type-guide status-publish has-post-thumbnail guidescategory-bedroom"
                                                    id="post-43498">
                                                    <a
                                                        href="../checklist-for-small-bedroom-furniture-arrangement/index.htm">Checklist
                                                        For Arranging Furniture In A Small Bedroom</a>
                                                </div>
                                                <div class="post-41073 guide type-guide status-publish has-post-thumbnail guidescategory-bedroom"
                                                    id="post-41073">
                                                    <a
                                                        href="../different-types-of-bedroom-lighting-for-your-home/index.htm">Different
                                                        Types Of Bedroom Lighting For Your Home</a>
                                                </div>
                                                <div class="post-1475 guide type-guide status-publish has-post-thumbnail guidescategory-bedroom"
                                                    id="post-1475">
                                                    <a href="../bedroom-interior-design-checklist/index.htm">Bedroom
                                                        Design Checklist</a>
                                                </div>
                                                <div class="post-1478 guide type-guide status-publish has-post-thumbnail guidescategory-bedroom"
                                                    id="post-1478">
                                                    <a href="../10-interior-design-styles-for-your-bedroom/index.htm">Bedroom
                                                        Design Styles</a>
                                                </div>
                                                <div class="post-7750 guide type-guide status-publish has-post-thumbnail guidescategory-bedroom"
                                                    id="post-7750">
                                                    <a href="../bedroom-colour-combinations/index.htm">Bedroom Colour
                                                        Combinations</a>
                                                </div>
                                                <div class="post-34701 guide type-guide status-publish has-post-thumbnail guidescategory-bedroom"
                                                    id="post-34701">
                                                    <a href="../how-to-design-10-by-12-and-12-by-15-bedroom/index.htm">How
                                                        To Design A 10 x 12 And 12 x 15 Bedroom</a>
                                                </div>
                                                <div class="post-9940 guide type-guide status-publish has-post-thumbnail guidescategory-bedroom"
                                                    id="post-9940">
                                                    <a href="../wardrobe-for-different-types-of-bedrooms/index.htm">Wardrobe
                                                        Designs To Suit Your Bedroom</a>
                                                </div>
                                                <div class="post-8710 guide type-guide status-publish has-post-thumbnail guidescategory-bedroom"
                                                    id="post-8710">
                                                    <a href="../compartments-for-your-wardrobe/index.htm">Wardrobe
                                                        Compartments</a>
                                                </div>
                                                <div class="post-5236 guide type-guide status-publish has-post-thumbnail guidescategory-bedroom"
                                                    id="post-5236">
                                                    <a href="../how-to-choose-wardrobe-for-bedroom/index.htm">How To
                                                        Choose A Wardrobe</a>
                                                </div>
                                                <div class="post-11237 guide type-guide status-publish has-post-thumbnail guidescategory-bedroom"
                                                    id="post-11237">
                                                    <a href="../everything-you-must-know-about-beds/index.htm">All About
                                                        Beds</a>
                                                </div>
                                                <div class="post-5274 guide type-guide status-publish has-post-thumbnail guidescategory-bedroom"
                                                    id="post-5274">
                                                    <a href="../choose-bed-for-bedroom/index.htm">How To Choose A
                                                        Bed</a>
                                                </div>
                                                <div class="post-15100 guide type-guide status-publish has-post-thumbnail guidescategory-bedroom"
                                                    id="post-15100">
                                                    <a href="../bedroom-decor/index.htm">A Comprehensive Guide To
                                                        Bedroom Decor</a>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-header guide-category-name" id="guide-157">

                                            <a class="btn collapsed" data-toggle="collapse" data-target="#collapse-157"
                                                aria-expanded="true" href="#collapse-157" aria-controls="collapse-21">
                                                Kids Room Interior Design Guides </a>

                                        </div>
                                        <div id="collapse-157" class="collapse guide-category-collapse"
                                            aria-labelledby="heading-157" data-parent="#guides-accordion">
                                            <div class="card-body guide-full-list">

                                                <div class="post-5304 guide type-guide status-publish has-post-thumbnail guidescategory-kids-room-interior-design-guides"
                                                    id="post-5304">
                                                    <a href="../kids-bedroom-design-ideas/index.htm">Kids Room Design
                                                        Checklist</a>
                                                </div>
                                                <div class="post-7490 guide type-guide status-publish has-post-thumbnail guidescategory-kids-room-interior-design-guides"
                                                    id="post-7490">
                                                    <a href="../kids-bedroom-styles/index.htm">Kids Bedroom Design
                                                        Styles</a>
                                                </div>
                                                <div class="post-7511 guide type-guide status-publish has-post-thumbnail guidescategory-kids-room-interior-design-guides"
                                                    id="post-7511">
                                                    <a href="../kids-room-colour-combinations/index.htm">Kids Room
                                                        Colour Combinations</a>
                                                </div>
                                                <div class="post-11307 guide type-guide status-publish has-post-thumbnail guidescategory-kids-room-interior-design-guides guidescategory-storage-and-organisation"
                                                    id="post-11307">
                                                    <a href="../kids-room-storage-and-organisation/index.htm">Kids Room
                                                        Storage Design Ideas</a>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-header guide-category-name" id="guide-22">

                                            <a class="btn collapsed" data-toggle="collapse" data-target="#collapse-22"
                                                aria-expanded="true" href="#collapse-22" aria-controls="collapse-21">
                                                Living Room Interior Design Guides </a>

                                        </div>
                                        <div id="collapse-22" class="collapse guide-category-collapse"
                                            aria-labelledby="heading-22" data-parent="#guides-accordion">
                                            <div class="card-body guide-full-list">

                                                <div class="post-45964 guide type-guide status-publish has-post-thumbnail guidescategory-living-room"
                                                    id="post-45964">
                                                    <a href="../living-room-storage-and-organisation-guide/index.htm">The
                                                        Ultimate Living Room Storage And Organisation Guide</a>
                                                </div>
                                                <div class="post-43718 guide type-guide status-publish has-post-thumbnail guidescategory-living-room"
                                                    id="post-43718">
                                                    <a href="../different-types-of-tv-units/index.htm">Multi-Functional
                                                        To Space-Saving: Different Types Of TV Units For Your Living
                                                        Room</a>
                                                </div>
                                                <div class="post-46805 guide type-guide status-publish has-post-thumbnail guidescategory-living-room"
                                                    id="post-46805">
                                                    <a href="../designing-and-maximising-small-living-room/index.htm">A
                                                        Comprehensive Guide For Designing And Maximising Small Living
                                                        Rooms</a>
                                                </div>
                                                <div class="post-1482 guide type-guide status-publish has-post-thumbnail guidescategory-living-room"
                                                    id="post-1482">
                                                    <a href="../living-room-interior-design-checklist/index.htm">Living
                                                        Room Design Checklist</a>
                                                </div>
                                                <div class="post-12259 guide type-guide status-publish has-post-thumbnail guidescategory-living-room"
                                                    id="post-12259">
                                                    <a href="../living-room-layouts/index.htm">How To Plan Your Living
                                                        Room Layouts</a>
                                                </div>
                                                <div class="post-1485 guide type-guide status-publish has-post-thumbnail guidescategory-living-room"
                                                    id="post-1485">
                                                    <a href="../living-room-interior-styles/index.htm">Living Room
                                                        Design Styles</a>
                                                </div>
                                                <div class="post-7292 guide type-guide status-publish has-post-thumbnail guidescategory-living-room"
                                                    id="post-7292">
                                                    <a href="../living-room-colour-combinations/index.htm">Living Room
                                                        Colour Combinations</a>
                                                </div>
                                                <div class="post-12521 guide type-guide status-publish has-post-thumbnail guidescategory-living-room"
                                                    id="post-12521">
                                                    <a href="../living-room-walls/index.htm">Living Room Wall Design
                                                        Ideas</a>
                                                </div>
                                                <div class="post-33635 guide type-guide status-publish has-post-thumbnail guidescategory-living-room"
                                                    id="post-33635">
                                                    <a
                                                        href="../furniture-arrangement-in-rectangular-living-room/index.htm">Everything
                                                        You Need To Know About Arranging Furniture In A Rectangular
                                                        Living Room</a>
                                                </div>
                                                <div class="post-12648 guide type-guide status-publish has-post-thumbnail guidescategory-living-room"
                                                    id="post-12648">
                                                    <a href="../all-about-living-room-seating/index.htm">Living Room
                                                        Seating Ideas</a>
                                                </div>
                                                <div class="post-33727 guide type-guide status-publish has-post-thumbnail guidescategory-living-room"
                                                    id="post-33727">
                                                    <a href="../how-to-design-kid-friendly-living-room/index.htm">A
                                                        Complete Guide To Modern Kid-Friendly Living Room Designs</a>
                                                </div>
                                                <div class="post-13585 guide type-guide status-publish has-post-thumbnail guidescategory-living-room"
                                                    id="post-13585">
                                                    <a href="../living-room-flooring/index.htm">Living Room Flooring
                                                        Ideas</a>
                                                </div>
                                                <div class="post-12506 guide type-guide status-publish has-post-thumbnail guidescategory-living-room"
                                                    id="post-12506">
                                                    <a href="../all-about-living-room-decor/index.htm">All About Living
                                                        Room Decor</a>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-header guide-category-name" id="guide-147">

                                            <a class="btn collapsed" data-toggle="collapse" data-target="#collapse-147"
                                                aria-expanded="true" href="#collapse-147" aria-controls="collapse-21">
                                                Dining Room Interior Design Guides </a>

                                        </div>
                                        <div id="collapse-147" class="collapse guide-category-collapse"
                                            aria-labelledby="heading-147" data-parent="#guides-accordion">
                                            <div class="card-body guide-full-list">

                                                <div class="post-5272 guide type-guide status-publish has-post-thumbnail guidescategory-dining-room"
                                                    id="post-5272">
                                                    <a href="../dining-room-interior-design-ideas/index.htm">Dining Room
                                                        Design Checklist</a>
                                                </div>
                                                <div class="post-3003 guide type-guide status-publish has-post-thumbnail guidescategory-dining-room"
                                                    id="post-3003">
                                                    <a href="../dining-room-design-styles/index.htm">Dining Room Design
                                                        Styles</a>
                                                </div>
                                                <div class="post-8278 guide type-guide status-publish has-post-thumbnail guidescategory-dining-room"
                                                    id="post-8278">
                                                    <a href="../dining-room-colour-combinations/index.htm">Dining Room
                                                        Colour Combinations</a>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-header guide-category-name" id="guide-148">

                                            <a class="btn collapsed" data-toggle="collapse" data-target="#collapse-148"
                                                aria-expanded="true" href="#collapse-148" aria-controls="collapse-21">
                                                Study Room Interior Design Guides </a>

                                        </div>
                                        <div id="collapse-148" class="collapse guide-category-collapse"
                                            aria-labelledby="heading-148" data-parent="#guides-accordion">
                                            <div class="card-body guide-full-list">

                                                <div class="post-2997 guide type-guide status-publish has-post-thumbnail guidescategory-study-room"
                                                    id="post-2997">
                                                    <a href="../study-room-interior-design-ideas/index.htm">Study Room
                                                        Design Checklist</a>
                                                </div>
                                                <div class="post-7474 guide type-guide status-publish has-post-thumbnail guidescategory-study-room"
                                                    id="post-7474">
                                                    <a href="../study-room-styles/index.htm">Study Room Design
                                                        Styles</a>
                                                </div>
                                                <div class="post-7448 guide type-guide status-publish has-post-thumbnail guidescategory-study-room"
                                                    id="post-7448">
                                                    <a href="../study-room-colour-combinations/index.htm">Study Room
                                                        Colour Combinations</a>
                                                </div>
                                                <div class="post-6766 guide type-guide status-publish has-post-thumbnail guidescategory-study-room"
                                                    id="post-6766">
                                                    <a href="../choose-a-desk-for-home-office/index.htm">Choosing A Desk
                                                        For Home Office</a>
                                                </div>
                                                <div class="post-13517 guide type-guide status-publish has-post-thumbnail guidescategory-storage-and-organisation guidescategory-study-room"
                                                    id="post-13517">
                                                    <a href="../everything-know-about-study-room-storage/index.htm">Study
                                                        Room Storage Design Ideas</a>
                                                </div>
                                                <div class="post-13473 guide type-guide status-publish has-post-thumbnail guidescategory-study-room"
                                                    id="post-13473">
                                                    <a href="../study-room-lighting/index.htm">Study Room Lighting
                                                        Ideas</a>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-header guide-category-name" id="guide-170">

                                            <a class="btn collapsed" data-toggle="collapse" data-target="#collapse-170"
                                                aria-expanded="true" href="#collapse-170" aria-controls="collapse-21">
                                                Bathroom Design Guides </a>

                                        </div>
                                        <div id="collapse-170" class="collapse guide-category-collapse"
                                            aria-labelledby="heading-170" data-parent="#guides-accordion">
                                            <div class="card-body guide-full-list">

                                                <div class="post-12332 guide type-guide status-publish has-post-thumbnail guidescategory-bathroom"
                                                    id="post-12332">
                                                    <a href="../bathroom-flooring/index.htm">A Guide To Bathroom
                                                        Flooring Materials</a>
                                                </div>
                                                <div class="post-12166 guide type-guide status-publish has-post-thumbnail guidescategory-bathroom"
                                                    id="post-12166">
                                                    <a href="../bathroom-interior-design-checklist/index.htm">Bathroom
                                                        Design Checklist</a>
                                                </div>
                                                <div class="post-12379 guide type-guide status-publish has-post-thumbnail guidescategory-bathroom"
                                                    id="post-12379">
                                                    <a href="../different-types-of-bathrooms/index.htm">How To Design
                                                        Different Bathrooms</a>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-header guide-category-name" id="guide-169">

                                            <a class="btn collapsed" data-toggle="collapse" data-target="#collapse-169"
                                                aria-expanded="true" href="#collapse-169" aria-controls="collapse-21">
                                                Storage And Organisation </a>

                                        </div>
                                        <div id="collapse-169" class="collapse guide-category-collapse"
                                            aria-labelledby="heading-169" data-parent="#guides-accordion">
                                            <div class="card-body guide-full-list">

                                                <div class="post-45826 guide type-guide status-publish has-post-thumbnail guidescategory-storage-and-organisation"
                                                    id="post-45826">
                                                    <a href="../bedroom-storage-and-organisation/index.htm">Ultimate
                                                        Guide to Bedroom Storage: Maximising Space and Organisation</a>
                                                </div>
                                                <div class="post-11307 guide type-guide status-publish has-post-thumbnail guidescategory-kids-room-interior-design-guides guidescategory-storage-and-organisation"
                                                    id="post-11307">
                                                    <a href="../kids-room-storage-and-organisation/index.htm">Kids Room
                                                        Storage Design Ideas</a>
                                                </div>
                                                <div class="post-44995 guide type-guide status-publish has-post-thumbnail guidescategory-storage-and-organisation"
                                                    id="post-44995">
                                                    <a href="../bathroom-storage-and-organisation/index.htm">A Guide To
                                                        Bathroom Storage and Organisation</a>
                                                </div>
                                                <div class="post-11323 guide type-guide status-publish has-post-thumbnail guidescategory-kitchen guidescategory-storage-and-organisation"
                                                    id="post-11323">
                                                    <a href="../different-types-of-kitchen-units/index.htm">A Guide To
                                                        Different Kitchen Units</a>
                                                </div>
                                                <div class="post-18832 guide type-guide status-publish has-post-thumbnail guidescategory-storage-and-organisation"
                                                    id="post-18832">
                                                    <a href="../kitchen-storage-and-organisation-solutions/index.htm">A
                                                        Guide To Kitchen Storage And Organisation Solutions</a>
                                                </div>
                                                <div class="post-13517 guide type-guide status-publish has-post-thumbnail guidescategory-storage-and-organisation guidescategory-study-room"
                                                    id="post-13517">
                                                    <a href="../everything-know-about-study-room-storage/index.htm">Study
                                                        Room Storage Design Ideas</a>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-header guide-category-name" id="guide-153">

                                            <a class="btn collapsed" data-toggle="collapse" data-target="#collapse-153"
                                                aria-expanded="true" href="#collapse-153" aria-controls="collapse-21">
                                                Materials And Finishes </a>

                                        </div>
                                        <div id="collapse-153" class="collapse guide-category-collapse"
                                            aria-labelledby="heading-153" data-parent="#guides-accordion">
                                            <div class="card-body guide-full-list">

                                                <div class="post-43039 guide type-guide status-publish has-post-thumbnail guidescategory-materials-and-finishes"
                                                    id="post-43039">
                                                    <a href="../maintaining-different-types-of-finishes/index.htm">Guide
                                                        To Different Types Of Finishes And How To Maintain Them</a>
                                                </div>
                                                <div class="post-13480 guide type-guide status-publish has-post-thumbnail guidescategory-materials-and-finishes guidescategory-kitchen"
                                                    id="post-13480">
                                                    <a
                                                        href="../how-to-choose-best-material-for-kitchen-countertop/index.htm">Choosing
                                                        A Kitchen Countertop</a>
                                                </div>
                                                <div class="post-8734 guide type-guide status-publish has-post-thumbnail guidescategory-materials-and-finishes"
                                                    id="post-8734">
                                                    <a
                                                        href="../list-of-low-maintenance-finishes-for-your-home/index.htm">Low
                                                        Maintenance Materials & Finishes</a>
                                                </div>
                                                <div class="post-8721 guide type-guide status-publish has-post-thumbnail guidescategory-materials-and-finishes"
                                                    id="post-8721">
                                                    <a href="../what-is-the-ideal-time-to-paint-your-home/index.htm">What
                                                        Is The Ideal Time To Paint Your Home?</a>
                                                </div>
                                                <div class="post-7548 guide type-guide status-publish has-post-thumbnail guidescategory-materials-and-finishes"
                                                    id="post-7548">
                                                    <a href="../bedroom-material-and-finishes/index.htm"> Materials And
                                                        Finishes For Bedroom</a>
                                                </div>
                                                <div class="post-7398 guide type-guide status-publish has-post-thumbnail guidescategory-materials-and-finishes"
                                                    id="post-7398">
                                                    <a href="../material-finish-for-a-balcony/index.htm">List Of Common
                                                        Materials And Finishes For A Balcony</a>
                                                </div>
                                                <div class="post-7388 guide type-guide status-publish has-post-thumbnail guidescategory-materials-and-finishes"
                                                    id="post-7388">
                                                    <a href="../budget-friendy-materials-finishes/index.htm">Budget
                                                        Friendly Materials And Finishes</a>
                                                </div>
                                                <div class="post-7329 guide type-guide status-publish has-post-thumbnail guidescategory-materials-and-finishes"
                                                    id="post-7329">
                                                    <a href="../materials-and-finishes-difference/index.htm">Difference
                                                        Between A Material And A Finish</a>
                                                </div>
                                                <div class="post-7371 guide type-guide status-publish has-post-thumbnail guidescategory-materials-and-finishes"
                                                    id="post-7371">
                                                    <a href="../modular-kitchen-materials-and-finishes/index.htm">Materials
                                                        And Finishes For A Modular Kitchen</a>
                                                </div>
                                                <div class="post-7351 guide type-guide status-publish has-post-thumbnail guidescategory-materials-and-finishes"
                                                    id="post-7351">
                                                    <a href="../types-of-paint-finishes/index.htm">A List Of Different
                                                        Types Of Paint Finishes</a>
                                                </div>
                                                <div class="post-7339 guide type-guide status-publish has-post-thumbnail guidescategory-materials-and-finishes"
                                                    id="post-7339">
                                                    <a href="../types-of-wall-finishes/index.htm">Types Of Wall
                                                        Finishes</a>
                                                </div>
                                                <div class="post-6753 guide type-guide status-publish has-post-thumbnail guidescategory-materials-and-finishes"
                                                    id="post-6753">
                                                    <a href="../types-of-false-ceiling-materials/index.htm">A Guide To
                                                        Different Types Of False Ceiling Materials</a>
                                                </div>
                                                <div class="post-6288 guide type-guide status-publish has-post-thumbnail guidescategory-materials-and-finishes"
                                                    id="post-6288">
                                                    <a href="../different-types-of-wallpapers/index.htm">A Guide To
                                                        Different Types Of Wallpapers For Your Home</a>
                                                </div>
                                                <div class="post-12431 guide type-guide status-publish has-post-thumbnail guidescategory-materials-and-finishes"
                                                    id="post-12431">
                                                    <a href="../bathroom-materials-and-finishes/index.htm">A Guide To
                                                        Materials And Finishes For A Bathroom</a>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-header guide-category-name" id="guide-172">

                                            <a class="btn collapsed" data-toggle="collapse" data-target="#collapse-172"
                                                aria-expanded="true" href="#collapse-172" aria-controls="collapse-21">
                                                Balcony Design Guides </a>

                                        </div>
                                        <div id="collapse-172" class="collapse guide-category-collapse"
                                            aria-labelledby="heading-172" data-parent="#guides-accordion">
                                            <div class="card-body guide-full-list">

                                                <div class="post-20371 guide type-guide status-publish has-post-thumbnail guidescategory-balcony"
                                                    id="post-20371">
                                                    <a href="../how-to-choose-balcony-grill-design/index.htm">How To
                                                        Choose A Balcony Grill Design</a>
                                                </div>
                                                <div class="post-15896 guide type-guide status-publish has-post-thumbnail guidescategory-balcony"
                                                    id="post-15896">
                                                    <a href="../balcony-flooring/index.htm">A Complete Guide To Balcony
                                                        Flooring</a>
                                                </div>
                                                <div class="post-13958 guide type-guide status-publish has-post-thumbnail guidescategory-balcony"
                                                    id="post-13958">
                                                    <a href="../how-to-design-your-balcony/index.htm">How To Plan Your
                                                        Balcony Interiors</a>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-header guide-category-name" id="guide-44">

                                            <a class="btn collapsed" data-toggle="collapse" data-target="#collapse-44"
                                                aria-expanded="true" href="#collapse-44" aria-controls="collapse-21">
                                                General </a>

                                        </div>
                                        <div id="collapse-44" class="collapse guide-category-collapse"
                                            aria-labelledby="heading-44" data-parent="#guides-accordion">
                                            <div class="card-body guide-full-list">

                                                <div class="post-46676 guide type-guide status-publish has-post-thumbnail guidescategory-guides"
                                                    id="post-46676">
                                                    <a
                                                        href="../16-things-to-know-before-start-your-interiors/index.htm">16
                                                        Interior Design Tips To Know Before You Start Your Interiors</a>
                                                </div>
                                                <div class="post-45071 guide type-guide status-publish has-post-thumbnail guidescategory-guides"
                                                    id="post-45071">
                                                    <a href="../designing-compact-spaces/index.htm">The Ultimate Guide
                                                        To Designing Compact Spaces At Home</a>
                                                </div>
                                                <div class="post-42268 guide type-guide status-publish has-post-thumbnail guidescategory-guides"
                                                    id="post-42268">
                                                    <a
                                                        href="../difference-between-architect-and-interior-designer/index.htm">Explained:
                                                        The Difference Between An Architect And An Interior Designer</a>
                                                </div>
                                                <div class="post-35319 guide type-guide status-publish has-post-thumbnail guidescategory-guides"
                                                    id="post-35319">
                                                    <a
                                                        href="../all-about-symmetrical-balance-in-interior-design/index.htm">Does
                                                        Symmetrical Balance In Interior Design Add Any Value? Let’s
                                                        Figure Out</a>
                                                </div>
                                                <div class="post-16786 guide type-guide status-publish has-post-thumbnail guidescategory-guides"
                                                    id="post-16786">
                                                    <a href="../interior-design-for-different-sizes-of-homes/index.htm">Interior
                                                        Design For Different Sizes of Homes</a>
                                                </div>
                                                <div class="post-33617 guide type-guide status-publish has-post-thumbnail guidescategory-guides"
                                                    id="post-33617">
                                                    <a href="../all-about-entryway-design/index.htm">A Complete Guide To
                                                        Designing The Perfect Entryway At Home</a>
                                                </div>
                                                <div class="post-16028 guide type-guide status-publish has-post-thumbnail guidescategory-guides"
                                                    id="post-16028">
                                                    <a href="../home-lightings-and-its-benefits/index.htm">A Guide To
                                                        Home Lighting And Its Benefits</a>
                                                </div>
                                                <div class="post-16021 guide type-guide status-publish has-post-thumbnail guidescategory-guides"
                                                    id="post-16021">
                                                    <a href="../colour-tones/index.htm">A Complete Guide To Colour Tones
                                                        For Your Home</a>
                                                </div>
                                                <div class="post-3416 guide type-guide status-publish guidescategory-guides"
                                                    id="post-3416">
                                                    <a href="../wardrobe-interior-design-ideas/index.htm">Wardrobe
                                                        Interior Design Ideas</a>
                                                </div>
                                                <div class="post-3001 guide type-guide status-publish guidescategory-guides"
                                                    id="post-3001">
                                                    <a href="../drawing-room-interior-design-ideas/index.htm">Drawing
                                                        Room Interior Design Ideas</a>
                                                </div>
                                                <div class="post-2963 guide type-guide status-publish guidescategory-guides"
                                                    id="post-2963">
                                                    <a href="../living-room-furniture-decor/index.htm">Living Room
                                                        Furniture Designs</a>
                                                </div>
                                                <div class="post-2959 guide type-guide status-publish guidescategory-guides"
                                                    id="post-2959">
                                                    <a href="../guest-room-design-ideas/index.htm">Guest Room Design
                                                        Ideas</a>
                                                </div>
                                                <div class="post-2947 guide type-guide status-publish guidescategory-guides"
                                                    id="post-2947">
                                                    <a href="../scandinavian-style-bedroom-design-ideas/index.htm">Scandinavian
                                                        Style Bedroom Ideas</a>
                                                </div>
                                                <div class="post-2949 guide type-guide status-publish guidescategory-guides"
                                                    id="post-2949">
                                                    <a href="../staircase-interior-design-ideas/index.htm">Staircase
                                                        Interior Design Ideas</a>
                                                </div>
                                                <div class="post-2946 guide type-guide status-publish guidescategory-guides"
                                                    id="post-2946">
                                                    <a href="../interior-design-ideas-for-small-home/index.htm">Interior
                                                        Design Ideas for Small Home</a>
                                                </div>
                                                <div class="post-2942 guide type-guide status-publish guidescategory-guides"
                                                    id="post-2942">
                                                    <a href="../apartment-interior-design-ideas/index.htm">Apartment
                                                        Interior Design Ideas</a>
                                                </div>
                                                <div class="post-2923 guide type-guide status-publish guidescategory-guides"
                                                    id="post-2923">
                                                    <a href="../rustic-bedroom-design-ideas/index.htm">Rustic Bedroom
                                                        Design Ideas</a>
                                                </div>
                                                <div class="post-2940 guide type-guide status-publish guidescategory-guides"
                                                    id="post-2940">
                                                    <a href="../bungalow-interior-design-ideas/index.htm">Bungalow
                                                        Interior Design Ideas</a>
                                                </div>
                                                <div class="post-2937 guide type-guide status-publish guidescategory-guides"
                                                    id="post-2937">
                                                    <a href="../farmhouse-interior-design-ideas/index.htm">Farmhouse
                                                        Interior Design Ideas</a>
                                                </div>
                                                <div class="post-2924 guide type-guide status-publish guidescategory-guides"
                                                    id="post-2924">
                                                    <a href="../penthouse-interior-design-ideas/index.htm">Penthouse
                                                        Interior Design Ideas</a>
                                                </div>
                                                <div class="post-2894 guide type-guide status-publish has-post-thumbnail guidescategory-guides"
                                                    id="post-2894">
                                                    <a href="../industrial-style-bedroom-design-ideas/index.htm">Industrial
                                                        Style Bedroom Design Ideas</a>
                                                </div>
                                                <div class="post-2883 guide type-guide status-publish guidescategory-guides"
                                                    id="post-2883">
                                                    <a href="../country-style-bedroom-design-ideas/index.htm">Country
                                                        Style Bedroom Design Ideas</a>
                                                </div>
                                                <div class="post-2850 guide type-guide status-publish guidescategory-guides"
                                                    id="post-2850">
                                                    <a href="../villa-interior-design-ideas/index.htm">Villa Interior
                                                        Design Ideas</a>
                                                </div>
                                                <div class="post-2867 guide type-guide status-publish guidescategory-guides"
                                                    id="post-2867">
                                                    <a href="../master-bedroom-design-ideas/index.htm">Master Bedroom
                                                        Design Ideas</a>
                                                </div>
                                                <div class="post-2828 guide type-guide status-publish guidescategory-guides"
                                                    id="post-2828">
                                                    <a href="../bedroom-interior-design-ideas/index.htm">Bedroom
                                                        Interior Design Ideas</a>
                                                </div>
                                                <div class="post-2772 guide type-guide status-publish guidescategory-guides"
                                                    id="post-2772">
                                                    <a href="../modular-kitchen-design-ideas/index.htm">Modular Kitchen
                                                        Design Ideas</a>
                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="col-lg-8 guide-right-main-cont">
                            <!-- <form action="https://designcafe.us8.list-manage.com/subscribe/post?u=a1ddc267486e278538036ee04&amp;id=1f13570abf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="form-inline center-align-form validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll form-group">
  
  <input type="email" value="" name="EMAIL" class="form-control subcription-newsletter-email" id="mce-EMAIL" placeholder="Enter Your Email" required>
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a1ddc267486e278538036ee04_1f13570abf" tabindex="-1" value=""></div>
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn blog-subscription-form">
     <div id="subscribe-result">
    </div>
    </div>
</form> -->







                            <style></style>
                            <style type="text/css"></style>
                            <div id="ajax-load-more" class="ajax-load-more-wrap default alm-layouts" data-id="946338132"
                                data-alm-id=""
                                data-canonical-url="https://www.thecreativewalls.in/guides/5-things-to-know-before-designing-a-modular-kitchen/"
                                data-slug="5-things-to-know-before-designing-a-modular-kitchen" data-post-id="7424"
                                data-localized="ajax_load_more_946338132_vars"
                                data-alm-object="ajax_load_more_946338132">
                                <div aria-live="polite" aria-atomic="true"
                                    class="alm-listing alm-ajax guide-load-more guide-category-listing"
                                    data-single-post="true" data-single-post-id="7424" data-single-post-order="latest"
                                    data-single-post-taxonomy="guidescategory" data-single-post-title-template=""
                                    data-single-post-site-title="DesignCafe"
                                    data-single-post-site-tagline="Complete Home Interiors | Best Home Interiors Company in Bangalore, Mumbai and Hyderabad"
                                    data-single-post-scroll="false" data-single-post-scrolltop="30"
                                    data-single-post-controls="1" data-single-post-progress-bar=""
                                    data-container-type="div" data-loading-style="default" data-repeater="template_9"
                                    data-post-type="guide" data-taxonomy-operator="IN" data-order="DESC"
                                    data-orderby="date" data-offset="0" data-posts-per-page="1"
                                    data-pause-override="false" data-button-label="Load more"
                                    data-button-loading-label="Loading more" data-images-loaded="true">
                                    <div class="alm-single-post post-7424"
                                        data-url="https://www.thecreativewalls.in/guides/5-things-to-know-before-designing-a-modular-kitchen/"
                                        data-title="5 Things To Know Before Designing A Modular Kitchen" data-id="7424"
                                        data-page="0">
                                        <div class="guide-section-1">
                                            <script type="text/javascript">
                                                var guideId = '7424';
                                            </script>
                                            <div class="guide-entry-title">


                                                <h1>5 Things To Know Before Designing A Modular Kitchen</h1>
                                            </div>
                                            <div class="guide-single-content guide-details-description-wrapper">
                                                <input class="jpibfi" type="hidden">
                                                <p>Modular kitchens are a popular choice among modern homeowners because
                                                    they utilise every nook and corner of available space. The market
                                                    today has several <a
                                                        href="../../interior-design/modular-kitchen-design/index.htm">designs
                                                        of modular kitchens</a> keeping in mind different tastes,
                                                    budgets, and family sizes. So be wise, choose smart and pick one
                                                    that’s most suited to your kitchen space but your cooking style.
                                                    Here are five things to keep in mind before designing a modular
                                                    kitchen.</p>
                                                <h2>The Golden Triangle Rule</h2>
                                                <p>The golden triangle rule says that</p>
                                                <p>the preparation slab (<i>sink</i>), the storage unit
                                                    (<i>refrigerator)</i>, cooking range, (<i>stove</i>), must be
                                                    installed within a gap of four-nine feet. The sink, stove, and
                                                    refrigerator are the focal points of the kitchen and therefore need
                                                    to be placed strategically. An excellent is placing your stove and
                                                    refrigerator opposite to each other with the sink in the centre —
                                                    forming a tentative triangle. Consider little details like putting
                                                    your frequently used appliances closer to the refrigerator to make
                                                    this golden triangle far more user-friendly. Do remember to
                                                    segregate and bundle everything as per the functionality.</p>
                                                <p><img fetchpriority="high" decoding="async"
                                                        class="alignnone wp-image-7434 size-full"
                                                        src="../../wp-content/uploads/2020/04/21015251/slab-storage-unit-cooking-range-modular-kitchen-design.jpg"
                                                        alt="Modular kitchen cabinet in red and grey colour" width="800"
                                                        height="533" data-jpibfi-post-excerpt=""
                                                        data-jpibfi-post-url="https://www.thecreativewalls.in/guides/5-things-to-know-before-designing-a-modular-kitchen/"
                                                        data-jpibfi-post-title="5 Things To Know Before Designing A Modular Kitchen"
                                                        data-jpibfi-src="https://media.designcafe.com/wp-content/uploads/2020/04/21015251/slab-storage-unit-cooking-range-modular-kitchen-design.jpg"
                                                        srcset="../../wp-content/uploads/2020/04/21015251/slab-storage-unit-cooking-range-modular-kitchen-design.jpg 800w, ../../wp-content/uploads/2020/04/21015251/slab-storage-unit-cooking-range-modular-kitchen-design-300x200.jpg 300w, ../../wp-content/uploads/2020/04/21015251/slab-storage-unit-cooking-range-modular-kitchen-design-768x512.jpg 768w, ../../wp-content/uploads/2020/04/21015251/slab-storage-unit-cooking-range-modular-kitchen-design-150x100.jpg 150w"
                                                        sizes="(max-width: 800px) 100vw, 800px"></p>
                                                <h2>Incorporate Low-Maintenance Materials</h2>
                                                <p>Any experienced interior designer will tell you why your modular
                                                    kitchen needs low-maintenance materials like wood or glass for
                                                    cabinets, stainless sinks, and <a
                                                        href="../../blog/modular-kitchen-interiors/marble-kitchen-countertops/index.htm">marble
                                                        kitchen countertops</a>. Such materials make cleaning your space
                                                    simple and quick. Remember, the purpose of a modular kitchen is to
                                                    make life simple with easy access to every nook and corner of your
                                                    kitchen. Easy-to-maintain materials make working easy.</p>
                                                <p><img decoding="async" class="alignnone size-full wp-image-7429"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20533'%3E%3C/svg%3E"
                                                        alt="Modular kitchen materials are to make life simple with low-maintenance."
                                                        width="800" height="533" data-jpibfi-post-excerpt=""
                                                        data-jpibfi-post-url="https://www.thecreativewalls.in/guides/5-things-to-know-before-designing-a-modular-kitchen/"
                                                        data-jpibfi-post-title="5 Things To Know Before Designing A Modular Kitchen"
                                                        data-jpibfi-src="https://media.designcafe.com/wp-content/uploads/2020/04/21015234/low-maintance-modular-kitchen-materials.jpg"
                                                        data-lazy-srcset="https://media.designcafe.com/wp-content/uploads/2020/04/21015234/low-maintance-modular-kitchen-materials.jpg 800w, https://media.designcafe.com/wp-content/uploads/2020/04/21015234/low-maintance-modular-kitchen-materials-300x200.jpg 300w, https://media.designcafe.com/wp-content/uploads/2020/04/21015234/low-maintance-modular-kitchen-materials-768x512.jpg 768w, https://media.designcafe.com/wp-content/uploads/2020/04/21015234/low-maintance-modular-kitchen-materials-150x100.jpg 150w"
                                                        data-lazy-sizes="(max-width: 800px) 100vw, 800px"
                                                        data-lazy-src="https://media.designcafe.com/wp-content/uploads/2020/04/21015234/low-maintance-modular-kitchen-materials.jpg"><noscript><img
                                                            decoding="async" class="alignnone size-full wp-image-7429"
                                                            src="../../wp-content/uploads/2020/04/21015234/low-maintance-modular-kitchen-materials.jpg"
                                                            alt="Modular kitchen materials are to make life simple with low-maintenance."
                                                            width="800" height="533" data-jpibfi-post-excerpt=""
                                                            data-jpibfi-post-url="https://www.thecreativewalls.in/guides/5-things-to-know-before-designing-a-modular-kitchen/"
                                                            data-jpibfi-post-title="5 Things To Know Before Designing A Modular Kitchen"
                                                            data-jpibfi-src="https://media.designcafe.com/wp-content/uploads/2020/04/21015234/low-maintance-modular-kitchen-materials.jpg"
                                                            srcset="../../wp-content/uploads/2020/04/21015234/low-maintance-modular-kitchen-materials.jpg 800w, ../../wp-content/uploads/2020/04/21015234/low-maintance-modular-kitchen-materials-300x200.jpg 300w, ../../wp-content/uploads/2020/04/21015234/low-maintance-modular-kitchen-materials-768x512.jpg 768w, ../../wp-content/uploads/2020/04/21015234/low-maintance-modular-kitchen-materials-150x100.jpg 150w"
                                                            sizes="(max-width: 800px) 100vw, 800px"></noscript></p>

                                                <div class="guide-qa-section-1">
                                                    <div class="guide-qa-section-1-title">

                                                        <h2 class="subcription-newsletter-head-1"
                                                            style="text-align: center;">Do you have kids?</h2>
                                                    </div>
                                                    <div class="guide-qa-section-1-options-list">


                                                        <form action="/action_page.php">
                                                            <div
                                                                class="custom-control custom-radio custom-select-qa-list">
                                                                <input type="radio" data-id="7424"
                                                                    class="custom-control-input custom-select-qa"
                                                                    id="customRadio17424" name="qa-1"
                                                                    data-content="Great! Check Out These Amazing Kids Bedroom Ideas For Your Little One"
                                                                    data-link="https://www.thecreativewalls.in/blog/kids-bedroom-interiors/">
                                                                <label class="custom-control-label"
                                                                    for="customRadio17424">Yes</label>
                                                            </div>
                                                            <div
                                                                class="custom-control custom-radio custom-select-qa-list">
                                                                <input type="radio" data-id="7424"
                                                                    class="custom-control-input custom-select-qa"
                                                                    id="customRadio27424" name="qa-1"
                                                                    data-content="Explore These Home Office Design Ideas For Your Home"
                                                                    data-link="https://www.thecreativewalls.in/blog/home-interiors/home-office-design-ideas/">
                                                                <label class="custom-control-label"
                                                                    for="customRadio27424">No</label>
                                                            </div>
                                                            <div
                                                                class="custom-control custom-radio custom-select-qa-list">
                                                                <input type="radio" data-id="7424"
                                                                    class="custom-control-input custom-select-qa"
                                                                    id="customRadio37424" name="qa-1"
                                                                    data-content="Awesome! Check Out These Playful Nursery Ideas"
                                                                    data-link="https://www.thecreativewalls.in/blog/home-interiors/nursery-design-ideas/">
                                                                <label class="custom-control-label"
                                                                    for="customRadio37424">Planning A Family</label>
                                                            </div>
                                                        </form>


                                                    </div>
                                                    <div class="guide-qa-section-1-content" id="">
                                                        <p id="qa_description7424"></p>
                                                    </div>
                                                    <div class="guide-qa-section-1-link-section" id="qa1-cta7424">
                                                        <a href="" class="guide-qa-section-1-link">View Recommendations
                                                            ></a>
                                                    </div>
                                                </div>


                                                <h2>The L Shaped Feature</h2>
                                                <p>An <a
                                                        href="../../blog/modular-kitchen-interiors/l-shape-kitchen-indian-home/index.htm">L-shaped
                                                        kitchen</a> fits in perfectly well with the golden triangle
                                                    rule. An L-shaped design is an excellent pick for small and
                                                    medium-sized kitchen spaces. It incorporates the efficiency of the
                                                    golden triangle with a cooking range and storage units no more than
                                                    1200 millimetres apart. The L-shaped feature helps utilise every
                                                    nook and corner of your kitchen space. You can either place the sink
                                                    in the corner leaving space for other appliances. Consider a
                                                    foldable door underneath the corner to use dead space inside for a
                                                    pull-out storage unit.</p>
                                                <p><img decoding="async" class="alignnone wp-image-7430 size-full"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20533'%3E%3C/svg%3E"
                                                        alt="L-shaped modular kitchen design: perfect for small and medium-sized spaces."
                                                        width="800" height="533" data-jpibfi-post-excerpt=""
                                                        data-jpibfi-post-url="https://www.thecreativewalls.in/guides/5-things-to-know-before-designing-a-modular-kitchen/"
                                                        data-jpibfi-post-title="5 Things To Know Before Designing A Modular Kitchen"
                                                        data-jpibfi-src="https://media.designcafe.com/wp-content/uploads/2020/04/21015239/l-shaped-modular-kitchen-for-your-home.jpg"
                                                        data-lazy-srcset="https://media.designcafe.com/wp-content/uploads/2020/04/21015239/l-shaped-modular-kitchen-for-your-home.jpg 800w, https://media.designcafe.com/wp-content/uploads/2020/04/21015239/l-shaped-modular-kitchen-for-your-home-300x200.jpg 300w, https://media.designcafe.com/wp-content/uploads/2020/04/21015239/l-shaped-modular-kitchen-for-your-home-768x512.jpg 768w, https://media.designcafe.com/wp-content/uploads/2020/04/21015239/l-shaped-modular-kitchen-for-your-home-150x100.jpg 150w"
                                                        data-lazy-sizes="(max-width: 800px) 100vw, 800px"
                                                        data-lazy-src="https://media.designcafe.com/wp-content/uploads/2020/04/21015239/l-shaped-modular-kitchen-for-your-home.jpg"><noscript><img
                                                            decoding="async" class="alignnone wp-image-7430 size-full"
                                                            src="../../wp-content/uploads/2020/04/21015239/l-shaped-modular-kitchen-for-your-home.jpg"
                                                            alt="L-shaped modular kitchen design: perfect for small and medium-sized spaces."
                                                            width="800" height="533" data-jpibfi-post-excerpt=""
                                                            data-jpibfi-post-url="https://www.thecreativewalls.in/guides/5-things-to-know-before-designing-a-modular-kitchen/"
                                                            data-jpibfi-post-title="5 Things To Know Before Designing A Modular Kitchen"
                                                            data-jpibfi-src="https://media.designcafe.com/wp-content/uploads/2020/04/21015239/l-shaped-modular-kitchen-for-your-home.jpg"
                                                            srcset="../../wp-content/uploads/2020/04/21015239/l-shaped-modular-kitchen-for-your-home.jpg 800w, ../../wp-content/uploads/2020/04/21015239/l-shaped-modular-kitchen-for-your-home-300x200.jpg 300w, ../../wp-content/uploads/2020/04/21015239/l-shaped-modular-kitchen-for-your-home-768x512.jpg 768w, ../../wp-content/uploads/2020/04/21015239/l-shaped-modular-kitchen-for-your-home-150x100.jpg 150w"
                                                            sizes="(max-width: 800px) 100vw, 800px"></noscript></p>
                                                <p><img decoding="async" class="aligncenter wp-image-39355 size-full"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201039%202560'%3E%3C/svg%3E"
                                                        alt="The future of kitchen design: modular solutions"
                                                        width="1039" height="2560" data-jpibfi-post-excerpt=""
                                                        data-jpibfi-post-url="https://www.thecreativewalls.in/guides/5-things-to-know-before-designing-a-modular-kitchen/"
                                                        data-jpibfi-post-title="5 Things To Know Before Designing A Modular Kitchen"
                                                        data-jpibfi-src="https://media.designcafe.com/wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-scaled.jpg"
                                                        data-lazy-srcset="https://media.designcafe.com/wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-scaled.jpg 1039w, https://media.designcafe.com/wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-122x300.jpg 122w, https://media.designcafe.com/wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-416x1024.jpg 416w, https://media.designcafe.com/wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-768x1892.jpg 768w, https://media.designcafe.com/wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-624x1536.jpg 624w, https://media.designcafe.com/wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-831x2048.jpg 831w, https://media.designcafe.com/wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-150x369.jpg 150w"
                                                        data-lazy-sizes="(max-width: 1039px) 100vw, 1039px"
                                                        data-lazy-src="https://media.designcafe.com/wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-scaled.jpg"><noscript><img
                                                            decoding="async"
                                                            class="aligncenter wp-image-39355 size-full"
                                                            src="../../wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-scaled.jpg"
                                                            alt="The future of kitchen design: modular solutions"
                                                            width="1039" height="2560" data-jpibfi-post-excerpt=""
                                                            data-jpibfi-post-url="https://www.thecreativewalls.in/guides/5-things-to-know-before-designing-a-modular-kitchen/"
                                                            data-jpibfi-post-title="5 Things To Know Before Designing A Modular Kitchen"
                                                            data-jpibfi-src="https://media.designcafe.com/wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-scaled.jpg"
                                                            srcset="../../wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-scaled.jpg 1039w, ../../wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-122x300.jpg 122w, ../../wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-416x1024.jpg 416w, ../../wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-768x1892.jpg 768w, ../../wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-624x1536.jpg 624w, ../../wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-831x2048.jpg 831w, ../../wp-content/uploads/2020/03/15170220/seven-creative-modular-kitchen-solutions-for-your-home-150x369.jpg 150w"
                                                            sizes="(max-width: 1039px) 100vw, 1039px"></noscript></p>
                                                <h2>Include Smart Storage Options</h2>
                                                <p>Another important factor to keep in mind as you design a modular
                                                    kitchen is optimum use of space with smart storage options.
                                                    Compartmentalise a dedicated space for spices, appliances, pots and
                                                    pans, and utensils. Sectional drawers, for instance, are quite a
                                                    trend these days with modern modular kitchen designs. They help you
                                                    to efficiently organise and maintain your kitchen cleverly. A
                                                    pull-out pantry, a standard pantry unit (with winged door mechanism)
                                                    to store crockery or dry food items is another storage marvel.</p>
                                                <p><img decoding="async" class="alignnone size-full wp-image-7436"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20533'%3E%3C/svg%3E"
                                                        alt="Optimum use of space with smart kitchen storage options while designing a modular kitchen."
                                                        width="800" height="533" data-jpibfi-post-excerpt=""
                                                        data-jpibfi-post-url="https://www.thecreativewalls.in/guides/5-things-to-know-before-designing-a-modular-kitchen/"
                                                        data-jpibfi-post-title="5 Things To Know Before Designing A Modular Kitchen"
                                                        data-jpibfi-src="https://media.designcafe.com/wp-content/uploads/2020/04/21015257/storage-option-in-modular-kitchen-design.jpg"
                                                        data-lazy-srcset="https://media.designcafe.com/wp-content/uploads/2020/04/21015257/storage-option-in-modular-kitchen-design.jpg 800w, https://media.designcafe.com/wp-content/uploads/2020/04/21015257/storage-option-in-modular-kitchen-design-300x200.jpg 300w, https://media.designcafe.com/wp-content/uploads/2020/04/21015257/storage-option-in-modular-kitchen-design-768x512.jpg 768w, https://media.designcafe.com/wp-content/uploads/2020/04/21015257/storage-option-in-modular-kitchen-design-150x100.jpg 150w"
                                                        data-lazy-sizes="(max-width: 800px) 100vw, 800px"
                                                        data-lazy-src="https://media.designcafe.com/wp-content/uploads/2020/04/21015257/storage-option-in-modular-kitchen-design.jpg"><noscript><img
                                                            decoding="async" class="alignnone size-full wp-image-7436"
                                                            src="../../wp-content/uploads/2020/04/21015257/storage-option-in-modular-kitchen-design.jpg"
                                                            alt="Optimum use of space with smart kitchen storage options while designing a modular kitchen."
                                                            width="800" height="533" data-jpibfi-post-excerpt=""
                                                            data-jpibfi-post-url="https://www.thecreativewalls.in/guides/5-things-to-know-before-designing-a-modular-kitchen/"
                                                            data-jpibfi-post-title="5 Things To Know Before Designing A Modular Kitchen"
                                                            data-jpibfi-src="https://media.designcafe.com/wp-content/uploads/2020/04/21015257/storage-option-in-modular-kitchen-design.jpg"
                                                            srcset="../../wp-content/uploads/2020/04/21015257/storage-option-in-modular-kitchen-design.jpg 800w, ../../wp-content/uploads/2020/04/21015257/storage-option-in-modular-kitchen-design-300x200.jpg 300w, ../../wp-content/uploads/2020/04/21015257/storage-option-in-modular-kitchen-design-768x512.jpg 768w, ../../wp-content/uploads/2020/04/21015257/storage-option-in-modular-kitchen-design-150x100.jpg 150w"
                                                            sizes="(max-width: 800px) 100vw, 800px"></noscript></p>
                                                <p>Also, check out <a
                                                        href="../../blog/modular-kitchen-interiors/space-saving-ideas-for-small-kitchen/index.htm">5
                                                        Space Saving Ideas For Your Small Kitchen</a></p>
                                                <h2>Keep The Quality In Check</h2>
                                                <p>While designing a modular kitchen, it is imperative you do not
                                                    compromise on quality be it the materials, finishes or hardware. You
                                                    want a kitchen to last you through the years and the days of endless
                                                    activity, hence opt for the best! If your budget is holding you
                                                    back, opt for moderately priced modular kitchen fittings, instead of
                                                    something from a luxury brand. Worry not, there are countless
                                                    options to choose from when it gets to choosing the right materials
                                                    and fittings for your modular kitchen so that it matches your taste,
                                                    budget and requirements perfectly and is durable too.</p>
                                                <p><img decoding="async" class="alignnone size-full wp-image-7432"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20533'%3E%3C/svg%3E"
                                                        alt="Quality check, choosing the right kitchen materials and fittings on budget and requirements perfectly and durable too."
                                                        width="800" height="533" data-jpibfi-post-excerpt=""
                                                        data-jpibfi-post-url="https://www.thecreativewalls.in/guides/5-things-to-know-before-designing-a-modular-kitchen/"
                                                        data-jpibfi-post-title="5 Things To Know Before Designing A Modular Kitchen"
                                                        data-jpibfi-src="https://media.designcafe.com/wp-content/uploads/2020/04/21015247/modular-kitchen-keep-the-quality-in-check.jpg"
                                                        data-lazy-srcset="https://media.designcafe.com/wp-content/uploads/2020/04/21015247/modular-kitchen-keep-the-quality-in-check.jpg 800w, https://media.designcafe.com/wp-content/uploads/2020/04/21015247/modular-kitchen-keep-the-quality-in-check-300x200.jpg 300w, https://media.designcafe.com/wp-content/uploads/2020/04/21015247/modular-kitchen-keep-the-quality-in-check-768x512.jpg 768w, https://media.designcafe.com/wp-content/uploads/2020/04/21015247/modular-kitchen-keep-the-quality-in-check-150x100.jpg 150w"
                                                        data-lazy-sizes="(max-width: 800px) 100vw, 800px"
                                                        data-lazy-src="https://media.designcafe.com/wp-content/uploads/2020/04/21015247/modular-kitchen-keep-the-quality-in-check.jpg"><noscript><img
                                                            decoding="async" class="alignnone size-full wp-image-7432"
                                                            src="../../wp-content/uploads/2020/04/21015247/modular-kitchen-keep-the-quality-in-check.jpg"
                                                            alt="Quality check, choosing the right kitchen materials and fittings on budget and requirements perfectly and durable too."
                                                            width="800" height="533" data-jpibfi-post-excerpt=""
                                                            data-jpibfi-post-url="https://www.thecreativewalls.in/guides/5-things-to-know-before-designing-a-modular-kitchen/"
                                                            data-jpibfi-post-title="5 Things To Know Before Designing A Modular Kitchen"
                                                            data-jpibfi-src="https://media.designcafe.com/wp-content/uploads/2020/04/21015247/modular-kitchen-keep-the-quality-in-check.jpg"
                                                            srcset="../../wp-content/uploads/2020/04/21015247/modular-kitchen-keep-the-quality-in-check.jpg 800w, ../../wp-content/uploads/2020/04/21015247/modular-kitchen-keep-the-quality-in-check-300x200.jpg 300w, ../../wp-content/uploads/2020/04/21015247/modular-kitchen-keep-the-quality-in-check-768x512.jpg 768w, ../../wp-content/uploads/2020/04/21015247/modular-kitchen-keep-the-quality-in-check-150x100.jpg 150w"
                                                            sizes="(max-width: 800px) 100vw, 800px"></noscript></p>
                                                <p>Design Tip: Regardless of what design you pick, don&#8217;t overlook
                                                    ventilation as it is a must for every kitchen. Windows are one
                                                    option, however, modular kitchens are incomplete without chimneys
                                                    over the stove or exhaust. You don’t want your guests or yourself on
                                                    a sneezing spree when you fry those chillies, do you?</p>
                                                <p>Do you have some tips to make a modular kitchen smarter? Please share
                                                    them with us in the comments section below.</p>
                                            </div>
                                        </div>





                                        <div class="subcription-newsletter-section">
                                            <div
                                                class="subcription-newsletter-head-1 subcription-newsletter-head-1-guide">
                                                Like our Modular Kitchen Guides? Get the full PDF on Email or WhatsApp
                                            </div>
                                            <div class="subcription-newsletter-form">
                                                <div id="mc_embed_signup">
                                                    <h3 class="guide-form-title">On Email</h3>
                                                    <!-- <form action="https://designcafe.us8.list-manage.com/subscribe/post?u=a1ddc267486e278538036ee04&id=1f13570abf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="form-inline center-align-form validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll form-group">
  
  <input type="email" value="" name="EMAIL" class="form-control subcription-newsletter-email" id="mce-EMAIL" placeholder="Enter Your Email" required>
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a1ddc267486e278538036ee04_1f13570abf" tabindex="-1" value=""></div>
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn blog-subscription-form">
     <div id="subscribe-result">
    </div>
    </div>
</form> -->


                                                    <div class="wpcf7 no-js" id="wpcf7-f14094-p7424-o1" lang="en-US"
                                                        dir="ltr">
                                                        <div class="screen-reader-response">
                                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                            <ul></ul>
                                                        </div>
                                                        <form
                                                            action="/guides/5-things-to-know-before-designing-a-modular-kitchen/#wpcf7-f14094-p7424-o1"
                                                            method="post" class="wpcf7-form init"
                                                            aria-label="Contact form" novalidate="novalidate"
                                                            data-status="init">
                                                            <div style="display: none;">
                                                                <input type="hidden" name="_wpcf7" value="14094">
                                                                <input type="hidden" name="_wpcf7_version"
                                                                    value="5.9.8">
                                                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                                <input type="hidden" name="_wpcf7_unit_tag"
                                                                    value="wpcf7-f14094-p7424-o1">
                                                                <input type="hidden" name="_wpcf7_container_post"
                                                                    value="7424">
                                                                <input type="hidden" name="_wpcf7_posted_data_hash"
                                                                    value="">
                                                                <input type="hidden" name="_wpcf7_recaptcha_response"
                                                                    value="">
                                                            </div>
                                                            <div class="form-inline">
                                                                <div class="form-group">
                                                                    <p><span class="wpcf7-form-control-wrap"
                                                                            data-name="email-342"><input size="40"
                                                                                maxlength="400"
                                                                                class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control subcription-newsletter-email"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                                placeholder="Enter Your Email" value=""
                                                                                type="email" name="email-342"></span>
                                                                    </p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <p><input
                                                                            class="wpcf7-form-control wpcf7-submit has-spinner btn blog-subscription-form"
                                                                            type="submit" value="Send">
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="blog-or-text blog-or-text-guide">
                                                Or
                                            </div>
                                            <div class="subcription-newsletter-form">
                                                <div id="mc_embed_signup">
                                                    <h3 class="guide-form-title">On Whatsapp</h3>
                                                    <form action="" method="post" id="mc-embedded-subscribe-form-7424"
                                                        name="mc-embedded-subscribe-form"
                                                        class="form-inline center-align-form validate" novalidate="">
                                                        <div class="lead-input lead-form-mobile-section form-group">
                                                            <div class="lead-form-ext lead-form-ext-guide">
                                                                <select name="your-phone-ext"
                                                                    class="leadform-input form-control guide-ext-no"
                                                                    id="NumberextNew-7424" title="+91">
                                                                    <option value="+91">+91</option>
                                                                    <option value="+01">+01</option>
                                                                    <option value="+65">+65</option>
                                                                    <option value="+44">+44</option>
                                                                    <option value="+971">+971</option>
                                                                    <option value="+61">+61</option>


                                                                    <option value="+7"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06163950/7.png">
                                                                        +7</option>
                                                                    <option value="+41"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06163953/41.png">
                                                                        +41
                                                                    </option>
                                                                    <option value="+49"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06163958/49.png">
                                                                        +49
                                                                    </option>
                                                                    <option value="+66"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06164006/66.png">
                                                                        +66
                                                                    </option>
                                                                    <option value="+81"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06164009/81.png">
                                                                        +81
                                                                    </option>
                                                                    <option value="+90"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06164012/90.png">
                                                                        +90
                                                                    </option>
                                                                    <option value="+92"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06164019/92.png">
                                                                        +92
                                                                    </option>
                                                                    <option value="+93"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06164021/93.png">
                                                                        +93</option>
                                                                    <option value="+95"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06164024/95.png">
                                                                        +95
                                                                    </option>
                                                                    <option value="+96"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06164026/96.png">
                                                                        +96
                                                                    </option>
                                                                    <option value="+98"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06164029/98.png">
                                                                        +98
                                                                    </option>
                                                                    <option value="+230"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06164032/230.png">
                                                                        +230
                                                                    </option>
                                                                    <option value="+234"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06164034/234.png">
                                                                        +234
                                                                    </option>
                                                                    <option value="+852"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06164037/852.png">
                                                                        +852
                                                                    </option>
                                                                    <option value="+886"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06164039/886.png">
                                                                        +886
                                                                    </option>
                                                                    <option value="+966"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06164044/966.png">
                                                                        +966
                                                                    </option>
                                                                    <option value="+974"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06164049/974.png">
                                                                        +974
                                                                    </option>
                                                                    <option value="+977"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06164052/977.png">
                                                                        +977
                                                                    </option>
                                                                    <option value="+993"
                                                                        data-img_src="https://media.designcafe.com/wp-content/uploads/2021/10/06164042/933.png">
                                                                        +993
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <div class="lead-input-mobile-3">
                                                                <input id="whatsapp-phone-7424" type="tel"
                                                                    class="leadform-mobile-input subcription-newsletter-email form-control whatsapp-phone-number"
                                                                    name="your-mobilenumber"
                                                                    data-category="Kitchen Guides"
                                                                    data-pdf-link="https://designcafe-dev.s3.ap-south-1.amazonaws.com/Guides/Modular+Kitchen/guides-modular-kitchen-design-04.17.2020.pdf"
                                                                    placeholder="9xxxxxxxxx">


                                                            </div>

                                                            <div class="lead-input form-group">
                                                                <button type="submit" id="ContactFormSubmitBtn-7424"
                                                                    class="btn btn-block btn-info blog-subscription-form ContactFormSubmitBtn">Send
                                                                    <i class='spinner-border spinner-border-sm'
                                                                        style="display: none;"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="error_Msg" style="display: none;"> Enter a valid
                                                            mobile phone number. </div>
                                                        <div class="success_Msg"></div>
                                                        <div class="error-validation" style="display: none;">Please
                                                            agree to receive a message on WhatsApp.</div>
                                                        <label class="guide-subscription-confirm"><input type="checkbox"
                                                                required="" checked="" name="terms"> I agree to receive
                                                            a message on WhatsApp.</label>

                                                    </form>
                                                </div>
                                            </div>



                                        </div>
                                        <script type="text/javascript">
                                            window.onload = function () {
                                                jQuery(document).ready(function ($) {
                                                    $('.error_Msg').hide();
                                                    $('.success_Msg').hide();
                                                    $(".custom-select-qa-list input[name='qa-1']").on('change', function () {

                                                        if ($(this).val() !== "" && $(this).is(':checked')) {
                                                            // console.log("testing", $(this).attr("data-id"));
                                                            $(".custom-select-qa").parent(".custom-select-qa-list").css("background", "#C85514");
                                                            $(this).parent(".custom-select-qa-list").css("background", "#0E4145");




                                                            var qa1_input_id = $(this).attr("data-id");

                                                            data_content = $(this).attr("data-content");
                                                            data_link = $(this).attr("data-link");
                                                            $("#qa_description" + qa1_input_id).html(data_content);
                                                            $("#qa1-cta" + qa1_input_id).show();
                                                            $("#qa1-cta" + qa1_input_id + " > a").attr("href", data_link);
                                                        } else {

                                                        }
                                                    });
                                                    $(".custom-image-qa-list input[name='qa-2']").on('change', function () {

                                                        if ($(this).val() !== "") {
                                                            var qa2_input_id = $(this).attr("data-id");
                                                            data_content = $(this).attr("data-content");
                                                            data_link = $(this).attr("data-link");
                                                            $("#qa1_description" + qa2_input_id).html(data_content);
                                                            $("#qa2-cta" + qa2_input_id).show();
                                                            $("#qa2-cta" + qa2_input_id + " > a").attr("href", data_link);
                                                        }
                                                    });
                                                    $(window).scroll(function () {
                                                        var windscroll = $(window).scrollTop();
                                                        //console.log("windscroll", windscroll);
                                                        if (windscroll >= 100) {
                                                            $('.guide-load-more > div').each(function (i) {
                                                                if ($(this).position().top <= windscroll) {
                                                                    qa2_input_id = $(this).attr("data-id");
                                                                    $('.guide-full-list > div.active').removeClass('active');
                                                                    $('.guide-full-list > div').eq(i).addClass('active');
                                                                    $('.custom-guide-drp > a.active').removeClass('active');
                                                                    $('.custom-guide-drp > a').eq(i).addClass('active');
                                                                }
                                                            });

                                                        } else {
                                                            $('.guide-full-list > div.active').removeClass('active');
                                                            $('.guide-full-list > div:first').addClass('active');
                                                            $('.custom-guide-drp > a.active').removeClass('active');
                                                            $('.custom-guide-drp > a:first').addClass('active');
                                                        }

                                                    }).scroll();


                                                    $('input[name="terms"]').change(function () {
                                                        if (this.checked) {
                                                            $('.error_Msg').hide();
                                                            $('.error-validation').hide();
                                                            $('.success_Msg').hide();
                                                        }
                                                    });
                                                    $('#mc-embedded-subscribe-form-7424').on('submit', function (e) {
                                                        e.preventDefault();
                                                        var error = 0;
                                                        if (error === 0) {
                                                            var ext_number = $('select', this).val();
                                                            var phone_number = $('input[name="your-mobilenumber"]', this).val();
                                                            var data_pdf_link = $('input[name="your-mobilenumber"]', this).attr("data-pdf-link");
                                                            var data_pdf_cat = $('input[name="your-mobilenumber"]', this).attr("data-category");
                                                            var data_phone = $('input[name="your-mobilenumber"]', this).val();
                                                            if (phone_validate(data_phone)) {
                                                                if ($('input[name="terms"]', this).is(':checked')) {
                                                                    $('.error_Msg').hide();  // hides error msg if validation is true
                                                                    webengage.track("Whatsapp_User_Created", {
                                                                        "Phone Extension": ext_number,
                                                                        "Phone Number": phone_number,
                                                                        "Category": data_pdf_cat

                                                                    });

                                                                    console.log('Whatsapp_User_Created', {
                                                                        "Phone Extension": ext_number,
                                                                        "Phone Number": phone_number,
                                                                        "Category": data_pdf_cat
                                                                    });
                                                                    jQuery.ajax({
                                                                        url: DynamicAjax.ajaxurl,
                                                                        data: {
                                                                            action: 'sendWhatsAppGuides',
                                                                            nonce: DynamicAjax.nonce,
                                                                            ext: ext_number,
                                                                            number: phone_number,
                                                                            category: data_pdf_cat,
                                                                            link: data_pdf_link
                                                                        },
                                                                        type: 'POST',
                                                                        dataType: 'json',
                                                                        beforeSend: function () {
                                                                            $(".spinner-border").show();
                                                                        },
                                                                        success: function (data) {
                                                                            var data_obj = JSON.parse(data);
                                                                            //console.log(data_obj);
                                                                            if (data_obj.success === true) {
                                                                                $(".spinner-border").hide();
                                                                                $('.error-validation', this).hide();
                                                                                success_msg = data_obj.message;
                                                                                $('#mc-embedded-subscribe-form-7424 .success_Msg').show().html(success_msg);
                                                                                $('#mc-embedded-subscribe-form-7424 input[name="your-mobilenumber"]').val('');
                                                                                $('input[name="terms"]').prop('checked', false);
                                                                            } else {
                                                                                // $("#contactErrorMsg").val(data_obj.message);
                                                                            }
                                                                        }
                                                                    });
                                                                } else {
                                                                    $('.error_Msg').hide();
                                                                    $('.error-validation', this).show();
                                                                    $('.success_Msg', this).hide();
                                                                }


                                                            }
                                                            else {
                                                                $('.error_Msg', this).show();
                                                                $('.error-validation', this).hide();
                                                                $('.success_Msg', this).hide();
                                                                $('#mc-embedded-subscribe-form-7424 input[name="your-mobilenumber"]').val('');
                                                                // shows validation msg if validation is false
                                                                event.preventDefault();
                                                            }

                                                        }
                                                    });
                                                    function phone_validate(phno) {
                                                        var regexPattern = new RegExp(/^[1-9]d{9}$|^[1-9]d{9}$/);    // regular expression pattern
                                                        return regexPattern.test(phno);
                                                    }
                                                });
                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="alm-btn-wrap" data-rel="ajax-load-more"><button
                                        class="alm-load-more-btn more " type="button">Load more</button></div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>



        <div style="background: #ffffff">
            <div class="container">
                <p class="footer-description-text">
                    Disclaimer: The images on our site are for reference only. Please contact us to discuss your
                    specific needs and to tailor a unique design for you.</p>
            </div>
        </div>
        