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

        .contact-us-form-section {
            padding: 50px 0 0 69px
        }

        .contact-section-1 {
            align-items: center
        }

        .contact-us-section-1-title h2 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 26px
        }

        .contact-us-location-listing {
            text-align: center
        }

        .contact-us-content-row {
            align-items: center
        }

        .contact-us-content-left h2 {
            font-size: 24px;
            font-weight: 600;
            line-height: 1;
            margin-bottom: 40px
        }

        .contact-us-map-link {
            flex: 1;
            text-align: right;
            font-size: 20px;
            flex-basis: 30%
        }

        .contact-us-map-link a {
            color: #4ca1a8
        }

        .blog-widget-area .widget:first-child {
            padding: 0 0 35px
        }

        .search-form {
            align-items: center
        }

        @media(min-width:320px) and (max-width:479px) {
            .contact-us-content {
                padding: 40px 0 0
            }

            .contact-us-section-1-title h2 {
                font-size: 16px;
                margin-bottom: 20px;
                box-sizing: border-box;
                text-align: center
            }

            .contact-us-section-1-description p {
                font-size: 14px;
                font-weight: 400;
                text-align: center;
                margin: 0
            }

            .contact-us-form-section h2 {
                font-size: 30px
            }

            .contact-us-form-section {
                padding: 0
            }

            .contact-us-content-left h2 {
                font-size: 16px
            }

            .contact-us-content-left-desc p:first-child {
                font-size: 14px
            }

            .contact-us-content-left-desc p {
                font-size: 14px;
                line-height: 1.5
            }

            .contact-us-map-link {
                font-size: 14px
            }

            .contact-us-section-1 .contact-section-1 {
                margin: 0
            }

            .contact-us-section-1-content {
                padding: 30px 0
            }

            .contact-us-location-section {
                padding-top: 40px
            }

            .contact-us-location-details {
                padding-top: 30px
            }

            .contact-us-content-left h2 {
                margin-bottom: 18px
            }

            .contact-us-click-to-call {
                display: flex;
                padding: 10px;
                background-color: #20b4c0;
                color: #fff;
                font-size: 14px;
                border-radius: 10px;
                max-width: 134px;
                margin: 30px 0
            }

            .contact-us-click-to-call-text {
                margin-left: 10px
            }

            .contact-us-map-title {
                margin-bottom: 0;
                padding-bottom: 15px
            }

            .contact-map-gap {
                padding-bottom: 20px;
                padding-top: 20px
            }

            .contact-map-gap:first-child {
                padding-top: 0
            }

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
            .contact-us-content {
                padding: 30px 0 0
            }

            .contact-us-section-1-title h2 {
                font-size: 16px;
                padding: 0 50px;
                text-align: center;
                margin-bottom: 20px
            }

            .contact-us-section-1-description p {
                font-size: 14px;
                font-weight: 400;
                text-align: center;
                margin: 0;
                padding: 0 40px
            }

            .contact-us-form-section h2 {
                font-size: 36px;
                margin-bottom: 40px
            }

            .contact-us-form-section {
                padding: 0 20px
            }

            .contact-us-content-left h2 {
                font-size: 16px
            }

            .contact-us-content-left-desc p:first-child {
                font-size: 14px
            }

            .contact-us-content-left-desc p {
                font-size: 14px
            }

            .contact-us-map-link {
                font-size: 14px
            }

            .contact-us-section-1 .contact-section-1 {
                margin: 0
            }

            .contact-us-section-1-content {
                padding: 30px 0
            }

            .contact-us-location-section {
                padding-top: 45px
            }

            .contact-us-location-details {
                padding-top: 0
            }

            .contact-us-content-left h2 {
                margin-bottom: 18px
            }

            .contact-us-click-to-call {
                display: flex;
                padding: 10px;
                background-color: #20b4c0;
                color: #fff;
                font-size: 14px;
                border-radius: 10px;
                max-width: 150px;
                margin: 20px 0 40px
            }

            .contact-us-click-to-call-text {
                margin-left: 10px
            }

            .contact-us-map-title {
                margin-bottom: 15px;
                padding-bottom: 0
            }

            .contact-map-gap {
                padding-bottom: 30px;
                padding-top: 30px
            }

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
            .contact-us-content {
                padding: 40px 0 0
            }

            .contact-us-section-1-title h2 {
                font-size: 18px;
                padding: 0 180px;
                text-align: center
            }

            .contact-us-section-1-description p {
                font-size: 16px;
                font-weight: 400;
                text-align: center;
                margin: 0;
                padding: 0 50px
            }

            .contact-us-form-section h2 {
                font-size: 36px;
                margin-bottom: 40px
            }

            .contact-us-form-section {
                padding: 0 0 20px
            }

            .contact-us-content-left h2 {
                font-size: 18px
            }

            .contact-us-content-left-desc p:first-child {
                font-size: 16px
            }

            .contact-us-content-left-desc p {
                font-size: 16px;
                line-height: 1.4
            }

            .contact-us-map-link {
                font-size: 16px
            }

            .contact-section-1 {
                margin: 0
            }

            .contact-us-section-1-content {
                padding: 40px 0
            }

            .contact-us-location-section {
                padding-top: 45px
            }

            .contact-us-location-details {
                padding-top: 0
            }

            .contact-us-content-left h2 {
                margin-bottom: 28px
            }

            .contact-us-content-row .contact-us-content-left .contact-us-click-to-call {
                display: flex !important;
                padding: 10px 25px;
                background-color: #20b4c0;
                color: #fff;
                font-size: 20px;
                border-radius: 10px;
                max-width: 180px;
                margin: 30px 0 40px
            }

            .contact-us-click-to-call-text {
                margin-left: 10px;
                font-size: 16px
            }

            .contact-us-map-title {
                line-height: 1
            }

            .contact-map-gap {
                padding-bottom: 30px;
                padding-top: 30px
            }

            .contact-map-gap:first-child {
                padding-top: 44px
            }

            .contact-us-content-right {
                max-width: initial
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

        @media(min-width:1024px) and (max-width:1279px) {
            .contact-us-content {
                padding: 40px 0 0
            }

            .contact-us-section-1-title h2 {
                font-size: 22px;
                padding: 0;
                text-align: left
            }

            .contact-us-section-1-description p {
                font-size: 18px;
                font-weight: 400;
                text-align: left;
                margin: 0
            }

            .contact-us-form-section h2 {
                font-size: 24px;
                margin-bottom: 35px;
                text-align: right
            }

            .contact-us-form-section {
                padding: 40px 0 0
            }

            .contact-us-content-left h2 {
                font-size: 22px
            }

            .contact-us-content-left-desc p:first-child {
                font-size: 18px
            }

            .contact-us-content-left-desc p {
                font-size: 18px
            }

            .contact-us-map-link {
                font-size: 18px
            }

            .contact-section-1 {
                margin: 0
            }

            .contact-us-section-1-content {
                padding: 40px 0
            }

            .contact-us-location-section {
                padding-top: 44px
            }

            .contact-us-location-details {
                padding-top: 0
            }

            .contact-us-content-left h2 {
                margin-bottom: 30px
            }

            .contact-us-click-to-call {
                display: flex;
                padding: 10px;
                background-color: #20b4c0;
                color: #fff;
                font-size: 20px;
                border-radius: 10px;
                max-width: 180px;
                margin: 30px 0
            }

            .contact-us-click-to-call-text {
                margin-left: 10px
            }

            .contact-us-map-title {
                margin-bottom: 0
            }

            .resp-container iframe {
                height: 220px
            }

            .contact-map-gap {
                padding-bottom: 7px
            }

            .contact-us-content-right {
                max-width: initial
            }
        }

        @media(min-width:1920px) {
            .resp-container iframe {
                height: 281px
            }

            .contact-us-content-left-desc p:first-child {
                margin-bottom: 40px
            }

            .contact-map-gap:first-child {
                padding-top: 50px
            }

            .contact-us-form-section {
                padding: 50px 0 0 69px
            }

            .contact-us-section-1-title h2 {
                font-size: 32px;
                padding: 0 75px 0 0
            }

            .contact-us-section-1-description p {
                font-size: 24px
            }

            .contact-us-content-left h2 {
                font-size: 32px
            }

            .contact-us-content-left-desc p:last-child {
                margin-bottom: 0
            }

            .contact-us-content-left-desc p {
                font-size: 24px;
                margin-bottom: 40px;
                line-height: 1.5
            }

            .contact-us-map-title {
                padding-bottom: 15px
            }

            .contact-map-gap {
                padding-top: 35px;
                padding-bottom: 35px
            }

            .contact-us-map-link {
                font-size: 24px
            }

            .contact-us-location-section {
                padding-top: 62px
            }

            .contact-us-content-right {
                max-width: 575px
            }

            .contact-us-content {
                padding: 70px 0 0
            }

            .bg-text-title p {
                font-size: 60px
            }

            .bg-text-title h1,
            .bg-text-title h2 {
                font-size: 30px
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

            .bg-text-title p {
                font-size: 84px
            }

            .bg-text-title h2 {
                font-size: 42px
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
            background: var(--wpr-bg-567a5f41-a4cd-4060-89ba-bfecb1da134c) -78px -93px no-repeat
        }

        div.pp_default .pp_top .pp_middle {
            background: var(--wpr-bg-34929131-59ae-49df-81b6-8aab819b9222) top left repeat-x
        }

        div.pp_default .pp_top .pp_right {
            background: var(--wpr-bg-853c28f3-6b78-43f5-a84e-d13f7696a893) -112px -93px no-repeat
        }

        div.pp_default .pp_content .ppt {
            color: #f8f8f8
        }

        div.pp_default .pp_content_container .pp_left {
            background: var(--wpr-bg-447f69ea-1fc1-47f4-a4d4-01db8b286771) -7px 0 repeat-y;
            padding-left: 13px
        }

        div.pp_default .pp_content_container .pp_right {
            background: var(--wpr-bg-061ff1ae-6a56-4048-8bcf-9fedac81c454) top right repeat-y;
            padding-right: 13px
        }

        div.pp_default .pp_next:hover {
            background: var(--wpr-bg-f4930d5a-b7e7-415c-8ee8-2d0cc39dc275) center right no-repeat;
            cursor: pointer
        }

        div.pp_default .pp_previous:hover {
            background: var(--wpr-bg-49a3bda5-7853-40e1-90a6-351316feb204) center left no-repeat;
            cursor: pointer
        }

        div.pp_default .pp_expand {
            background: var(--wpr-bg-1ac5683b-0f11-4567-a796-340ba65fa892) 0 -29px no-repeat;
            cursor: pointer;
            width: 28px;
            height: 28px
        }

        div.pp_default .pp_expand:hover {
            background: var(--wpr-bg-3f88008b-a1bb-40d0-86a3-411d9442ecf1) 0 -56px no-repeat;
            cursor: pointer
        }

        div.pp_default .pp_contract {
            background: var(--wpr-bg-76ade860-8122-4e2e-9317-21f14cddab7d) 0 -84px no-repeat;
            cursor: pointer;
            width: 28px;
            height: 28px
        }

        div.pp_default .pp_contract:hover {
            background: var(--wpr-bg-78c49733-8eb9-4667-887b-d44db700817c) 0 -113px no-repeat;
            cursor: pointer
        }

        div.pp_default .pp_close {
            width: 30px;
            height: 30px;
            background: var(--wpr-bg-9f82db18-c60e-4b4b-ac07-a78a9789b3fe) 2px 1px no-repeat;
            cursor: pointer
        }

        div.pp_default .pp_gallery ul li a {
            background: var(--wpr-bg-fda5c106-4d3a-4e77-b948-bc87851a99e0) center center #f8f8f8;
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
            background: var(--wpr-bg-f7b41e97-b191-4763-9659-bc26e56d45be) -51px 1px no-repeat;
            height: 30px;
            width: 30px
        }

        div.pp_default .pp_nav .pp_pause {
            background-position: -51px -29px
        }

        div.pp_default a.pp_arrow_next,
        div.pp_default a.pp_arrow_previous {
            background: var(--wpr-bg-42a39b0d-9201-4d15-a630-e1e6b36da5c6) -31px -3px no-repeat;
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
            background: var(--wpr-bg-fb0a166c-63be-4a36-a4ef-85bcd6c7c357) -78px -127px no-repeat
        }

        div.pp_default .pp_bottom .pp_middle {
            background: var(--wpr-bg-596b214c-b9a5-4ad1-9c2a-38b5184e5f35) bottom left repeat-x
        }

        div.pp_default .pp_bottom .pp_right {
            background: var(--wpr-bg-ce0acb59-e3bd-458f-9439-d2f7a3c23eed) -112px -127px no-repeat
        }

        div.pp_default .pp_loaderIcon {
            background: var(--wpr-bg-42ac1817-d0a6-4efa-bbc3-e56a55302bfc) center center no-repeat
        }

        div.facebook .pp_top .pp_left {
            background: var(--wpr-bg-1c7193cb-f63e-4d94-b275-bc517a494514) -88px -53px no-repeat
        }

        div.facebook .pp_top .pp_middle {
            background: var(--wpr-bg-5b318442-bccb-4d46-a5af-fe27794f0955) top left repeat-x
        }

        div.facebook .pp_top .pp_right {
            background: var(--wpr-bg-3efad0c7-3f12-4c52-8ad0-c6984169bff2) -110px -53px no-repeat
        }

        div.facebook .pp_content_container .pp_left {
            background: var(--wpr-bg-4e40c820-c14a-45d3-a79b-54710f8daec1) top left repeat-y
        }

        div.facebook .pp_content_container .pp_right {
            background: var(--wpr-bg-a00a1a81-92b0-42e7-ac0c-33fd5bc373d1) top right repeat-y
        }

        div.facebook .pp_expand {
            background: var(--wpr-bg-de87cfb8-12dd-4003-b82a-a0aeaead219e) -31px -26px no-repeat;
            cursor: pointer
        }

        div.facebook .pp_expand:hover {
            background: var(--wpr-bg-c71d27e2-3195-4da3-acbd-b2ef7780095c) -31px -47px no-repeat;
            cursor: pointer
        }

        div.facebook .pp_contract {
            background: var(--wpr-bg-a8259f2b-6396-4d01-b27c-8c8cfaba7adc) 0 -26px no-repeat;
            cursor: pointer
        }

        div.facebook .pp_contract:hover {
            background: var(--wpr-bg-8bf1bd4a-093b-4105-a174-808d353ac290) 0 -47px no-repeat;
            cursor: pointer
        }

        div.facebook .pp_close {
            width: 22px;
            height: 22px;
            background: var(--wpr-bg-2690b900-ecd4-4ee0-bb97-258c798d4a59) -1px -1px no-repeat;
            cursor: pointer
        }

        div.facebook .pp_description {
            margin: 0 37px 0 0
        }

        div.facebook .pp_loaderIcon {
            background: var(--wpr-bg-74cc65b1-112d-494e-8619-d327ce138b46) center center no-repeat
        }

        div.facebook .pp_arrow_previous {
            background: var(--wpr-bg-c25a89d4-0b7a-459a-90e3-dd2065e40fe3) 0 -71px no-repeat;
            height: 22px;
            margin-top: 0;
            width: 22px
        }

        div.facebook .pp_arrow_previous.disabled {
            background-position: 0 -96px;
            cursor: default
        }

        div.facebook .pp_arrow_next {
            background: var(--wpr-bg-aa90a3a4-a100-458b-9bc5-25b8a26f5380) -32px -71px no-repeat;
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
            background: var(--wpr-bg-45aa7a29-3d3b-4838-abf0-02f9e0d4db4d) -1px -123px no-repeat;
            height: 22px;
            width: 22px
        }

        div.facebook .pp_nav .pp_pause {
            background: var(--wpr-bg-b8345377-669c-434c-be5c-87579313318f) -32px -123px no-repeat;
            height: 22px;
            width: 22px
        }

        div.facebook .pp_next:hover {
            background: var(--wpr-bg-da61345d-b462-46e7-81d3-06fa4eae99c6) center right no-repeat;
            cursor: pointer
        }

        div.facebook .pp_previous:hover {
            background: var(--wpr-bg-b96dd5b3-90bb-41ab-9990-40f8f87b87f5) center left no-repeat;
            cursor: pointer
        }

        div.facebook .pp_bottom .pp_left {
            background: var(--wpr-bg-6b006d5e-8b9c-42fa-83a2-4e98be82c1a4) -88px -80px no-repeat
        }

        div.facebook .pp_bottom .pp_middle {
            background: var(--wpr-bg-c7106b0d-75d5-4235-bf72-366315fda5ef) top left repeat-x
        }

        div.facebook .pp_bottom .pp_right {
            background: var(--wpr-bg-c6071f12-7f9b-4a6c-b143-a509607cee08) -110px -80px no-repeat
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
            background: var(--wpr-bg-7e59a7e2-53ee-4b60-bdce-0aad149f5742) no-repeat;
            display: block;
            height: 33px;
            width: 50px
        }

        .pp_gallery .pp_arrow_next,
        .pp_gallery .pp_arrow_previous {
            margin-top: 7px !important
        }

        a.pp_next {
            background: var(--wpr-bg-1365e9ef-49ff-4cda-8c6f-1c3cfe0dce35) 10000px 10000px no-repeat;
            display: block;
            float: right;
            height: 100%;
            text-indent: -10000px;
            width: 49%
        }

        a.pp_previous {
            background: var(--wpr-bg-193b2dfa-b497-4e4b-a53d-50d27db7517b) 10000px 10000px no-repeat;
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

        footer,
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

        .col,
        .col-12,
        .col-lg-1,
        .col-lg-5,
        .col-lg-6,
        .col-md-12,
        .col-md-9 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px
        }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        @media (min-width:768px) {
            .col-md-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-md-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }
        }

        @media (min-width:992px) {
            .col-lg-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.33333%;
                flex: 0 0 8.33333%;
                max-width: 8.33333%
            }

            .col-lg-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.66667%;
                flex: 0 0 41.66667%;
                max-width: 41.66667%
            }

            .col-lg-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
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

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6
        }

        .form-control {
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
            .form-control {
                -webkit-transition: none;
                transition: none
            }
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #e30dff;
            outline: 0;
            -webkit-box-shadow: 0 0 0 .2rem rgba(124, 0, 140, .25);
            box-shadow: 0 0 0 .2rem rgba(124, 0, 140, .25)
        }

        .form-control::-webkit-input-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control::-moz-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control:-ms-input-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control::-ms-input-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control::placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control:disabled {
            background-color: #e9ecef;
            opacity: 1
        }

        select.form-control:focus::-ms-value {
            color: #495057;
            background-color: #fff
        }

        select.form-control[multiple],
        select.form-control[size] {
            height: auto
        }

        textarea.form-control {
            height: auto
        }

        .form-group {
            margin-bottom: 1rem
        }

        .form-row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -5px;
            margin-left: -5px
        }

        .form-row>.col,
        .form-row>[class*=col-] {
            padding-right: 5px;
            padding-left: 5px
        }

        .btn {
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
            .btn {
                -webkit-transition: none;
                transition: none
            }
        }

        .btn:hover {
            color: #212529;
            text-decoration: none
        }

        .btn.focus,
        .btn:focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 .2rem rgba(124, 0, 140, .25);
            box-shadow: 0 0 0 .2rem rgba(124, 0, 140, .25)
        }

        .btn.disabled,
        .btn:disabled {
            opacity: .65
        }

        a.btn.disabled,
        fieldset:disabled a.btn {
            pointer-events: none
        }

        .btn-primary {
            color: #fff;
            background-color: #7c008c;
            border-color: #7c008c
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #5a0066;
            border-color: #4f0059
        }

        .btn-primary.focus,
        .btn-primary:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(144, 38, 157, .5);
            box-shadow: 0 0 0 .2rem rgba(144, 38, 157, .5)
        }

        .btn-primary.disabled,
        .btn-primary:disabled {
            color: #fff;
            background-color: #7c008c;
            border-color: #7c008c
        }

        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #4f0059;
            border-color: #44004c
        }

        .btn-primary:not(:disabled):not(.disabled).active:focus,
        .btn-primary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-primary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(144, 38, 157, .5);
            box-shadow: 0 0 0 .2rem rgba(144, 38, 157, .5)
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

        .btn-lg {
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem
        }

        .btn-group-sm>.btn,
        .btn-sm {
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

        .btn-group>.btn {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }

        .btn-group>.btn:hover {
            z-index: 1
        }

        .btn-group>.btn.active,
        .btn-group>.btn:active,
        .btn-group>.btn:focus {
            z-index: 1
        }

        .btn-group>.btn-group:not(:first-child),
        .btn-group>.btn:not(:first-child) {
            margin-left: -1px
        }

        .btn-group>.btn-group:not(:last-child)>.btn,
        .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group>.btn-group:not(:first-child)>.btn,
        .btn-group>.btn:not(:first-child) {
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

        .input-group>.form-control {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            width: 1%;
            margin-bottom: 0
        }

        .input-group>.form-control+.form-control {
            margin-left: -1px
        }

        .input-group>.form-control:focus {
            z-index: 3
        }

        .input-group>.form-control:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group>.form-control:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .input-group-prepend {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .input-group-prepend .btn {
            position: relative;
            z-index: 2
        }

        .input-group-prepend .btn:focus {
            z-index: 3
        }

        .input-group-prepend .btn+.btn,
        .input-group-prepend .btn+.input-group-text,
        .input-group-prepend .input-group-text+.btn,
        .input-group-prepend .input-group-text+.input-group-text {
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
        .input-group>.input-group-prepend>.input-group-text {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
        .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),
        .input-group>.input-group-prepend:not(:first-child)>.btn,
        .input-group>.input-group-prepend:not(:first-child)>.input-group-text {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
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

            .d-md-block {
                display: block !important
            }
        }

        @media (min-width:992px) {
            .d-lg-none {
                display: none !important
            }

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

        .w-100 {
            width: 100% !important
        }

        .m-0 {
            margin: 0 !important
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

        .p-0 {
            padding: 0 !important
        }

        .ml-auto {
            margin-left: auto !important
        }

        .text-capitalize {
            text-transform: capitalize !important
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

            thead {
                display: table-header-group
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
            src: url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/fontawesome-webfont.eot");
            src: url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/fontawesome-webfont-1.eot") format("embedded-opentype"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/fontawesome-webfont.woff") format("woff"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/fontawesome-webfont.ttf") format("truetype"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/fontawesome-webfont.svg") format("svg");
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

        .fa-phone:before {
            content: ""
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

        @font-face {
            font-display: swap;
            font-family: Raleway;
            src: url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/Raleway-Regular.eot");
            src: url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/Raleway-Regular-1.eot") format("embedded-opentype"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/Raleway-Regular.woff") format("woff"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/Raleway-Regular.ttf") format("truetype"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/Raleway-Regular.svg") format("svg");
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-display: swap;
            font-family: Lato;
            src: url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-300.eot");
            src: url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-300-1.eot") format("embedded-opentype"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-300.woff") format("woff"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-300.woff2") format("woff2"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-300.ttf") format("truetype"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-300.svg") format("svg");
            font-weight: 300;
            font-style: normal
        }

        @font-face {
            font-display: swap;
            font-family: Lato;
            src: url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-700.eot");
            src: url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-700-1.eot") format("embedded-opentype"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-700.woff") format("woff"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-700.woff2") format("woff2"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-700.ttf") format("truetype"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-700.svg") format("svg");
            font-weight: 700;
            font-style: normal
        }

        @font-face {
            font-display: swap;
            font-family: Lato;
            src: url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-regular.eot");
            src: url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-regular-1.eot") format("embedded-opentype"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-regular.woff") format("woff"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-regular.woff2") format("woff2"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-regular.ttf") format("truetype"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-regular.svg") format("svg");
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

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #ccc;
            outline: 0;
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
            background: var(--wpr-bg-8039e3fd-2cac-4447-accb-664b4ccbc750) no-repeat;
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
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:hover,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:active,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:focus,
        .bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:hover {
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

        button.loading {
            background-image: var(--wpr-bg-9d71442a-2cdf-4bb4-87f9-a9ad3fe7d5a4);
            background-repeat: no-repeat;
            background-size: 20px 20px;
            padding-left: 30px;
            background-position: left
        }

        button.loading {
            background-image: var(--wpr-bg-1fdd5404-2ea8-4bf5-b0cc-b3539371164e);
            background-repeat: no-repeat;
            background-size: 20px 20px;
            padding-left: 30px
        }

        .bg-text-title {
            position: relative;
            width: 100%
        }

        .bg-text-title h1,
        .bg-text-title h2 {
            position: absolute;
            width: 100%;
            font-size: 25px;
            font-weight: 700;
            bottom: 0;
            display: flex;
            align-items: flex-start;
            padding-left: 2px;
            margin-bottom: 0;
            z-index: 99;
            color: #333
        }

        .bg-text-title p {
            position: relative;
            width: 100%;
            font-size: 50px;
            font-weight: 700;
            line-height: 1;
            color: #e6e6e6;
            display: flex;
            align-items: end;
            margin-bottom: 0;
            opacity: 0
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

        .contact-map-gap {
            padding-bottom: 70px
        }

        .why-design-cafe-main-title-watermark {
            position: absolute;
            color: #f1f0f0;
            top: 0;
            font-weight: 700;
            font-size: 96px
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

        .cta-header-btn i.fa.fa-phone {
            margin: 10px 3px 0 0;
            font-size: 27px;
            color: #1c9ba6
        }

        .cta-header-btn i.fa.fa-phone:hover {
            color: #8a591d
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

        .why-design-cafe-main-title-watermark {
            position: absolute;
            color: #f1f0f0;
            top: 0;
            font-weight: 700;
            font-size: 96px;
            margin-bottom: 0
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

        .contact-us-content {
            padding: 50px 0 10px
        }

        .contact-us-section-1-content {
            padding: 55px 38px 70px 0
        }

        .contact-us-form-section {
            padding: 30px 0 0 69px
        }

        .contact-section-1 {
            align-items: inherit
        }

        .contact-us-section-1-title p {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 26px
        }

        .contact-us-section-1-description p {
            font-size: 20px
        }

        .contact-us-form-section h2 {
            font-size: 36px;
            text-align: center;
            line-height: 1;
            margin-bottom: 25px
        }

        .contact-us-location-section {
            padding-top: 55px;
            line-height: 1
        }

        .contact-us-content-left-desc strong {
            font-weight: 600
        }

        .contact-us-location-listing {
            text-align: center;
            background-color: #fff
        }

        .contact-us-location-details {
            padding-top: 10px
        }

        .contact-us-content-row {
            align-items: center;
            margin-bottom: 50px
        }

        .contact-us-content-left p {
            font-size: 24px;
            font-weight: 600;
            line-height: 1;
            margin-bottom: 40px
        }

        .contact-us-content-left-desc p:first-child {
            font-weight: 400;
            font-size: 24px;
            margin-bottom: 20px;
            line-height: 1
        }

        .contact-us-content-left-desc h3 {
            font-weight: 400;
            font-size: 24px;
            margin-bottom: 20px;
            line-height: 1
        }

        .contact-us-content-left-desc p {
            font-size: 20px;
            margin-bottom: 20px;
            font-weight: 300;
            line-height: 1.2
        }

        .contact-us-content-right {
            max-width: 460px;
            margin: 0 auto;
            margin-right: 0
        }

        .contact-map-gap {
            padding-bottom: 20px;
            padding-top: 40px;
            border-bottom: 1px solid #dee5e7
        }

        .contact-map-gap:last-child {
            border-bottom: none
        }

        .contact-us-map-title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            line-height: 1;
            padding-bottom: 20px
        }

        .contact-us-map-link {
            flex: 1;
            text-align: left;
            font-size: 20px;
            flex-basis: 30%;
            color: #4ca1a8
        }

        .contact-us-map-link .btn-primary {
            background-color: #4ca1a8;
            border-color: #4ca1a8
        }

        .contact-us-map-link .btn-lg {
            padding: 12px 50px;
            font-size: 20px
        }

        .contact-us-map-link a {
            color: #fff
        }

        .contact-us-map-link .btn-primary:focus {
            box-shadow: none
        }

        .resp-container {
            position: relative;
            overflow: hidden;
            padding-top: 56.25%
        }

        .resp-iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0
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

        .lead-form-wrapper div {
            max-width: 100%
        }

        .lead-input-mobile {
            display: flex;
            flex-direction: column;
            flex: 1
        }

        .lead-form-mobile-section {
            display: flex
        }

        .lead-input span .form-control {
            background: #f6f5f5;
            font-size: 18px;
            padding: 26px 20px;
            font-family: Raleway, sans-serif;
            margin: 0 0 5px
        }

        .lead-input span .form-control {
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

        .lead-input span .form-control {
            color: #222 !important
        }

        .lead-input {
            margin: 0 0 10px
        }

        .lead-input textarea {
            height: 120px;
            resize: none;
            width: 100%;
            border: none;
            border-radius: 10px;
            background-color: #f6f5f5
        }

        .sales-txt-label {
            font-size: 14px;
            line-height: normal !important;
            margin: 16px 0;
            width: 50%
        }

        #ContactUsFormMain p.sales-txt-label,
        #blogContactUsFormMain p.sales-txt-label {
            width: 100% !important
        }

        .contact-us-sales .sales-txt-label {
            font-size: 15px
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

        .contact-us-sales input.leadform-input.form-control {
            background: #f6f5f5;
            font-size: 14px;
            font-family: Raleway, sans-serif;
            margin: 0 0 10px;
            height: auto;
            border: none;
            border-radius: 5px;
            color: #222 !important;
            height: 42px
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

        .contact-us-sales .bootstrap-select.leadform-input.form-control button.dropdown-toggle {
            font-size: 14px;
            border-radius: 0
        }

        .contact-us-sales .lead-input textarea {
            height: 120px;
            resize: none;
            width: 100%;
            border: none;
            border-radius: 0;
            background-color: #f6f5f5;
            padding: 10px 15px;
            font-size: 20px
        }

        .bootstrap-select.leadform-input.form-control select.error+button.dropdown-toggle {
            border: 1px solid #dc3545
        }

        .contact-us-sales .lead-input {
            margin: 0 0 4px
        }

        .contact-us-sales .lead-form-btn {
            border-radius: 5px
        }

        .contact-us-sales .message-txt-fld {
            margin-top: 10px
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

        .lead-form-btn {
            background: #C85514;
            border: 0;
            color: #fff;
            font-size: 16px;
            padding: 15px 0;
            height: auto;
            border-radius: 12px;
            width: 100%;
            margin: 20px 0 0
        }

        .lead-form-btn:hover:not(:disabled) {
            background-color: #d5b58f;
            transition: .3s
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

        .contact-us-first-title .bg-text-title h2 {
            font-size: 26px
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

            .cta-header-btn i.fa.fa-phone {
                margin: 0 5px 0 0
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

            .bg-text-title h1,
            .bg-text-title h2 {
                top: 30px
            }

            .resp-container iframe {
                height: 281px
            }

            .contact-us-content-left-desc p:first-child {
                margin-bottom: 40px
            }

            .contact-us-content-left-desc h3 {
                margin-bottom: 40px
            }

            .contact-map-gap:first-child {
                padding-top: 50px
            }

            .contact-us-form-section {
                padding: 50px 0 0 69px
            }

            .contact-us-section-1-title p {
                font-size: 32px;
                padding: 0 75px 0 0
            }

            .contact-us-section-1-description p {
                font-size: 24px
            }

            .contact-us-content-left p {
                font-size: 32px
            }

            .contact-us-content-left-desc p:last-child {
                margin-bottom: 0
            }

            .contact-us-content-left-desc p {
                font-size: 24px;
                margin-bottom: 40px;
                line-height: 1.5
            }

            .contact-us-map-title {
                padding-bottom: 15px
            }

            .contact-map-gap {
                padding-top: 35px;
                padding-bottom: 35px
            }

            .contact-us-map-link {
                font-size: 24px;
                margin-top: 20px
            }

            .contact-us-location-section {
                padding-top: 62px
            }

            .contact-us-content-right {
                max-width: 575px
            }

            .contact-us-content {
                padding: 50px 0 0
            }

            .bg-text-title p {
                font-size: 60px
            }

            .bg-text-title h1,
            .bg-text-title h2 {
                font-size: 30px
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

            .bg-text-title p {
                font-size: 40px
            }

            .bg-text-title h1,
            .bg-text-title h2 {
                font-size: 20px;
                padding-left: 0
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

            .contact-us-content {
                padding: 30px 0 0
            }

            .contact-us-section-1-title p {
                font-size: 22px;
                padding: 0;
                text-align: left
            }

            .contact-us-section-1-description p {
                font-size: 18px;
                font-weight: 400;
                text-align: left;
                margin: 0
            }

            .contact-us-section-1-description p:nth-child(2) {
                padding-bottom: 15px
            }

            .contact-us-form-section h2 {
                font-size: 24px;
                margin-bottom: 35px;
                text-align: right
            }

            .contact-us-form-section {
                padding: 40px 0 0
            }

            .contact-us-content-left p {
                font-size: 22px
            }

            .contact-us-content-left-desc p:first-child {
                font-size: 18px
            }

            .contact-us-content-left-desc h3 {
                font-size: 18px
            }

            .contact-us-content-left-desc p {
                font-size: 18px
            }

            .contact-us-map-link {
                font-size: 18px
            }

            .contact-section-1 {
                margin: 0
            }

            .contact-us-section-1-content {
                padding: 40px 0
            }

            .contact-us-location-section {
                padding-top: 44px
            }

            .contact-us-location-details {
                padding-top: 0
            }

            .contact-us-content-left p {
                margin-bottom: 30px
            }

            .contact-us-click-to-call {
                display: flex;
                padding: 10px;
                background-color: #20b4c0;
                color: #fff;
                font-size: 20px;
                border-radius: 10px;
                max-width: 180px;
                margin: 30px 0
            }

            .contact-us-click-to-call-text {
                margin-left: 10px
            }

            .contact-us-map-title {
                margin-bottom: 0
            }

            .resp-container iframe {
                height: 220px
            }

            .contact-map-gap {
                padding-bottom: 7px
            }

            .contact-us-content-right {
                max-width: initial
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

            .bg-text-title p {
                font-size: 28px
            }

            .bg-text-title h1,
            .bg-text-title h2 {
                font-size: 18px;
                top: 10px
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

            .bg-text-title h1,
            .bg-text-title h2 {
                padding-left: 2px
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

            .contact-us-content {
                padding: 30px 0 0
            }

            .contact-us-section-1-title p {
                font-size: 18px;
                padding: 0 180px;
                text-align: center
            }

            .contact-us-section-1-description p:nth-child(2) {
                padding-bottom: 15px
            }

            .contact-us-section-1-description p strong {
                font-size: 16px
            }

            .contact-us-section-1-description p:nth-child(4) {
                padding: 5px 0
            }

            .contact-us-section-1-description p {
                font-size: 16px;
                font-weight: 400;
                text-align: center;
                margin: 0;
                padding: 0 50px
            }

            .contact-us-form-section h2 {
                font-size: 36px;
                margin-bottom: 40px
            }

            .contact-us-form-section {
                padding: 0 0 20px
            }

            .contact-us-content-left p {
                font-size: 18px
            }

            .contact-us-content-left-desc p:first-child {
                font-size: 16px
            }

            .contact-us-content-left-desc h3 {
                font-size: 16px
            }

            .contact-us-content-left-desc p {
                font-size: 16px;
                line-height: 1.4
            }

            .contact-us-map-link {
                font-size: 16px
            }

            .contact-section-1 {
                margin: 0
            }

            .contact-us-section-1-content {
                padding: 40px 0
            }

            .contact-us-location-section {
                padding-top: 45px
            }

            .contact-us-location-details {
                padding-top: 0
            }

            .contact-us-content-left p {
                margin-bottom: 28px
            }

            .contact-us-map-link .btn-lg {
                padding: 8px 38px;
                font-size: 18px
            }

            .contact-us-content-row .contact-us-content-left .contact-us-click-to-call {
                display: flex !important;
                padding: 10px 20px;
                background-color: #20b4c0;
                color: #fff;
                font-size: 20px;
                border-radius: 10px;
                max-width: 180px;
                margin: 30px 0 40px
            }

            .contact-us-click-to-call-text a {
                color: #fff
            }

            .contact-us-click-to-call-text span {
                margin-right: 10px
            }

            .contact-us-click-to-call-text {
                margin-left: 10px;
                font-size: 16px
            }

            .contact-us-map-title {
                line-height: 1
            }

            .contact-map-gap {
                padding-bottom: 30px;
                padding-top: 30px
            }

            .contact-map-gap:first-child {
                padding-top: 44px
            }

            .contact-us-content-right {
                max-width: initial
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

            .lead-input span .form-control {
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

            .contact-us-first-title .bg-text-title h2 {
                top: inherit;
                font-size: 18px
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

            input.lead-form-btn {
                background: #C85514;
                border: 0;
                color: #fff;
                font-size: 14px;
                padding: 6px 0;
                height: auto;
                border-radius: 12px;
                width: 100%;
                margin: 5px 0 0
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

            .bg-text-title h1,
            .bg-text-title h2 {
                font-size: 22px
            }

            .bg-text-title p {
                font-size: 28px
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

            .bg-text-title h1,
            .bg-text-title h2 {
                padding-left: 2px
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

            .contact-us-content {
                padding: 30px 0 0
            }

            .contact-us-section-1-title p {
                font-size: 16px;
                padding: 0 50px;
                text-align: center;
                margin-bottom: 20px
            }

            .contact-us-section-1-description p {
                font-size: 14px;
                font-weight: 400;
                text-align: center;
                margin: 0;
                padding: 0 40px
            }

            .contact-us-section-1-description p:nth-child(2) {
                padding-bottom: 15px
            }

            .contact-us-section-1-description p strong {
                font-size: 14px
            }

            .contact-us-section-1-description p:nth-child(4) {
                padding: 5px 0
            }

            .contact-us-form-section h2 {
                font-size: 36px;
                margin-bottom: 40px
            }

            .contact-us-form-section {
                padding: 0 20px
            }

            .contact-us-content-left p {
                font-size: 16px
            }

            .contact-us-content-left-desc p:first-child {
                font-size: 14px
            }

            .contact-us-content-left-desc h3 {
                font-size: 14px
            }

            .contact-us-content-left-desc p {
                font-size: 14px
            }

            .contact-us-map-link {
                font-size: 14px
            }

            .contact-us-section-1 .contact-section-1 {
                margin: 0
            }

            .contact-us-section-1-content {
                padding: 30px 0
            }

            .contact-us-location-section {
                padding-top: 45px
            }

            .contact-us-location-details {
                padding-top: 0
            }

            .contact-us-content-left p {
                margin-bottom: 18px
            }

            .contact-us-click-to-call {
                display: none;
                padding: 10px;
                background-color: #20b4c0;
                color: #fff;
                font-size: 14px;
                border-radius: 10px;
                max-width: 150px;
                margin: 20px 0 40px
            }

            .contact-us-map-link .btn-lg {
                padding: 7px 27px;
                font-size: 14px
            }

            .contact-us-content-row {
                margin-bottom: 0
            }

            .contact-us-click-to-call-text {
                margin-left: 10px
            }

            .contact-us-click-to-call-text a {
                color: #fff
            }

            .contact-us-click-to-call-text span {
                margin-right: 5px
            }

            .contact-us-map-title {
                margin-bottom: 15px;
                padding-bottom: 0
            }

            .contact-map-gap {
                padding-bottom: 30px;
                padding-top: 30px
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

            .contact-section-1 {
                align-items: center;
                padding: 0 5%
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

            .lead-input span .form-control {
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

            .contact-us-first-title .bg-text-title h2 {
                top: inherit;
                font-size: 16px
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

            input.lead-form-btn {
                background: #C85514;
                border: 0;
                color: #fff;
                font-size: 14px;
                padding: 8px 0;
                height: auto;
                border-radius: 12px;
                width: 100%;
                margin: 5px 0 0
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

            .bg-text-title h2 {
                font-size: 20px
            }

            .bg-text-title p {
                font-size: 26px
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

            .bg-text-title h1,
            .bg-text-title h2 {
                padding-left: 2px;
                top: 8px;
                font-size: 20px
            }

            .project-template-wrap .bg-text-title h1 {
                font-size: 18px
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

            .contact-us-content {
                padding: 30px 0 0
            }

            .contact-us-section-1-title p {
                font-size: 16px;
                margin-bottom: 20px;
                box-sizing: border-box;
                text-align: center
            }

            .contact-us-section-1-description p {
                font-size: 14px;
                font-weight: 400;
                text-align: center;
                margin: 0
            }

            .contact-us-section-1-description p:nth-child(2) {
                padding-bottom: 15px
            }

            .contact-us-section-1-description p strong {
                font-size: 14px
            }

            .contact-us-section-1-description p:nth-child(4) {
                padding: 5px 0
            }

            .contact-us-form-section h2 {
                font-size: 30px
            }

            .contact-us-form-section {
                padding: 0
            }

            .contact-us-content-left p {
                font-size: 16px
            }

            .contact-us-content-left-desc p:first-child {
                font-size: 14px
            }

            .contact-us-content-left-desc h3 {
                font-size: 14px
            }

            .contact-us-content-left-desc p {
                font-size: 14px;
                line-height: 1.5
            }

            .contact-us-map-link {
                font-size: 14px
            }

            .contact-us-section-1 .contact-section-1 {
                margin: 0
            }

            .contact-us-section-1-content {
                padding: 30px 0
            }

            .contact-us-location-section {
                padding-top: 40px
            }

            .contact-us-location-details {
                padding-top: 30px
            }

            .contact-us-content-left p {
                margin-bottom: 18px
            }

            .contact-us-click-to-call {
                display: none;
                padding: 10px;
                background-color: #20b4c0;
                color: #fff;
                font-size: 14px;
                border-radius: 10px;
                max-width: 134px;
                margin: 0
            }

            .contact-us-map-link .btn-lg {
                padding: 7px 27px;
                font-size: 14px
            }

            .contact-us-content-row {
                margin-bottom: 0
            }

            .contact-us-click-to-call-text {
                margin-left: 5px
            }

            .contact-us-click-to-call-text a {
                color: #fff
            }

            .contact-us-click-to-call-text span {
                margin-right: 5px
            }

            .contact-us-map-title {
                margin-bottom: 0;
                padding-bottom: 15px
            }

            .contact-map-gap {
                padding-bottom: 20px;
                padding-top: 20px
            }

            .contact-map-gap:first-child {
                padding-top: 0
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

            .contact-section-1 {
                align-items: center
            }

            .guide-main-content {
                margin-top: 10px
            }

            .lead-input span .form-control {
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

            .lead-input span .form-control {
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

            .contact-us-first-title .bg-text-title h2 {
                top: inherit;
                font-size: 16px
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

            .lead-form-mobile-section .lead-input-mobile .leadform-mobile-input {
                padding: 10px
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

            input.lead-form-btn {
                background: #C85514;
                border: 0;
                color: #fff;
                font-size: 14px;
                padding: 6px 0;
                height: auto;
                border-radius: 12px;
                width: 100%;
                margin: 5px 0 0
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

        @media (max-width:767px) {
            .contact-us-sales .sales-txt-label {
                font-size: 14px;
                margin-bottom: 5px
            }

            .contact-us-sales input.leadform-input.form-control {
                font-size: 14px
            }

            .contact-us-sales .bootstrap-select.leadform-input.form-control button.dropdown-toggle {
                font-size: 14px
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

        .dc-cnt-fm-flag .iti__selected-flag {
            padding: 3px 6px 8px 8px !important;
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
            .dc-cnt-fm-flag .iti__selected-flag {
                padding: 4px 6px 14px 8px !important;
                height: auto
            }

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

        .contact-us-location-listing .contact-us-visit-us-title {
            display: flex;
            width: 100%
        }

        .contact-us-location-listing .contact-us-visit-us-title .bg-text-title h2 {
            top: 5px !important
        }

        .contact-us-location-listing .drop-down-select {
            width: 280px;
            border-radius: 4px;
            border: 1px solid #d2d2d2;
            padding: 10px
        }

        .contact-us-location-listing .contact-tab-fixed {
            display: block !important
        }

        .contact-us-location-listing .contact-tab-fixed .contact-us-visit-us-title {
            margin-top: 10px
        }

        @media (min-width:320px) and (max-width:479px) {
            #home-slider .owl-dots {
                display: block !important;
                bottom: -5px !important
            }

            .contact-us-visit-us-title {
                display: block !important;
                margin: 0
            }

            .drop-down-select {
                width: 100% !important;
                margin-top: 20px
            }

            .contact-us-location-listing {
                height: auto !important;
                display: block !important;
                width: 100% !important;
                left: 0 !important
            }

            .contact-tab-fixed .contact-us-visit-us-title {
                padding: 15px
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

        form#ContactUsFormMainHome .lead-input-mobile {
            margin-bottom: 0
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

        form#ContactUsFormMainHome button.lead-form-btn:hover:not(:disabled) {
            background-color: #062639;
            transition: .3s
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

        .contact-us-sales select {
            border-radius: 5px
        }

        .modal-body {
            padding: 0
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
            background: var(--wpr-bg-2ab2c46c-0143-421a-9600-71d030c33564) 15px center no-repeat;
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
            background: var(--wpr-bg-ec4c112d-e799-4b6f-b209-7ed4f13dc0f3) right no-repeat;
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

        .contact-us-sales input.leadform-input.form-control {
            height: 42px
        }

        .iti-mobile .iti--container {
            z-index: 1000000 !important
        }

        .iti-mobile .iti__country-list {
            max-height: 30%
        }

        @media (min-width:320px) and (max-width:479px) {
            .bg-text-title h2 {
                top: -10px
            }

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
            background-color: #189ba6 !important
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

    <div class="row contact-us-content">
        <div class="container">
            <!-- <div class="row contact-us-content-main-row"> -->
            <div class="row contact-us-section-1">
                <div class="row contact-section-1">
                    <div class="col-md-12">
                        <div class="contact-us-first-title">
                            <div class="bg-text-title">
                                <h1>Contact Us</h1>
                                <p class="why-design-cafe-main-title-watermark">Contact Us </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-us-section-1-content">
                            <div class="contact-us-section-1-title">
                                <p>We’d love to hear from you</p>
                            </div>
                            <div class="contact-us-section-1-description">
                                <p>
                                <p>Whether your query is about features, materials, pricing, or anything else, our team is ready to answer all your questions.</p>
                                <p>&nbsp;</p>
                                <p>For info: <a href="mailto:info@creativewalls.in" target="_blank"
                                        rel="noopener"><strong>info@creativewalls.in</strong></a></p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-12"></div>
                    <div class="col-lg-5 col-md-12">
                        <div class="contact-us-form contact-us-form-section">
                            <div class="lead-form-wrapper contact-us-sales">
                                <form id="ContactUsFormMain" action="<?php echo base_url('web/enquiry_form'); ?>" method="POST">
                                    <div class="w-100">
                                        <div class="lead-input">
                                            <div class="sales-txt-label">Full Name*</div>
                                            <input type="text" class="leadform-input form-control" name="fullname" value="" size="40" placeholder="Rxxxx Sxxx">
                                        </div>

                                        <div class="lead-input lead-form-mobile-section form-row">

                                            <div class="lead-input lead-input-mobile col-md-9 p-0 dc-cnt-fm-flag">
                                                <div class="sales-txt-label"><span> Mobile No.*</span></div>
                                                <span id="contact_flag" class="contact-flag flag"></span>
                                                <input type="tel" id="contact_cntry_field"
                                                    class="leadform-input leadform-mobile-input form-control country_cntry_field cntry_field"
                                                    name="mobilenumber" placeholder="9xxxxxxxxx">
                                                <input type="hidden" class="contact-dc-cntry-code" name="your-phone-ext"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="lead-input">
                                            <div class="sales-txt-label">Email Id*</div>
                                            <input type="text" class="leadform-input form-control" name="email"
                                                placeholder="Email Id*">
                                        </div>
                                        <div class="lead-input">
                                            <div class="sales-txt-label">Select Location*</div>
                                            <select name="yourcity" class="selectpicker leadform-input form-control"
                                                data-live-search="true" id="ContactCitySelect" title="Select Location*">
                                                <option value="">Select Location*</option>
                                                <option value="Pune">Pune</option>
                                                <option value="Nagpur">Nagpur</option>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Navi Mumbai">Navi Mumbai</option>
                                                <option value="Thane">Thane</option>
                                            </select>
                                        </div>
                                        <div class="lead-input message-txt-fld">
                                            <div class="sales-txt-label">Message</div>
                                            <textarea cols="40" rows="10" name="message"></textarea>
                                        </div>
                                        <div class="lead-input">
                                            <button type="submit" id="ContactFormSubmitBtn"
                                                class="btn btn-block btn-info lead-form-btn">Submit <i
                                                    class='spinner-border spinner-border-sm'
                                                    style="display: none;"></i></button>
                                            <label id="contactErrorMsg" class="m-0 text-danger text-capitalize"
                                                style="font-size: 12px;"></label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row contact-us-location-section">
                <div class="col-md-12 contact-us-location-section-col">

                    <div class="contact-us-location-details">
                        
                          <div id="Pune" class="contact-map-gap">
                            <div class="row contact-us-content-row">
                                <div class="col-lg-6">
                                    <div class="contact-us-content-left">
                                        <p>Pune</p>
                                        <div class="contact-us-content-left-desc">
                                            <h3><strong>Creative Walls Experience Centre, Pune </strong></h3>
                                            <p>Above central Bank,Near ramkrushana mangal karlaya Pimple gurav Pune, Maharashtra 411061</p>
                                            <p>Landmark: Katepuram chowk road</p>
                                            <p>Phone: 08766443223</p>
                                        </div>
                                        <div class="contact-us-map-link">
                                            <a href="https://maps.app.goo.gl/5Mo9kc9HdxXyDBjy7" target="_blank"
                                                class="btn btn-primary btn-lg" rel="”noopener”">Get Direction</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-us-content-right">
                                        <div class="contact-us-map-title">
                                            <div class="contact-us-click-to-call d-md-block d-lg-none">
                                                <div class="contact-us-click-to-call-icon">

                                                </div>
                                                <div class="contact-us-click-to-call-text">
                                                    <a href="tel:08766443223">
                                                        <span class="fa fa-phone" aria-hidden="true"></span>
                                                        Click To Call </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact-us-map">
                                            <div class="resp-container">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2009.218250993957!2d73.82091979219526!3d18.5835888564444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b8b766b67615%3A0x73a68dee1be71509!2sRamKrishna%20Mangal%20Karyalay!5e0!3m2!1sen!2sin!4v1738829630518!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.getElementById('selectcitylink').addEventListener('change', function() {
    console.log('You selected: ', this.value);
    location.href = this.value
});
</script>