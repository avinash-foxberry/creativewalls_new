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

		.iti--allow-dropdown input[disabled]+.iti__flag-container:hover,
		.iti--allow-dropdown input[readonly]+.iti__flag-container:hover {
			cursor: default
		}

		.iti--allow-dropdown input[disabled]+.iti__flag-container:hover .iti__selected-flag,
		.iti--allow-dropdown input[readonly]+.iti__flag-container:hover .iti__selected-flag {
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

		@media(min-width:1920px) {
			.bg-text-title p {
				font-size: 60px
			}

			.bg-text-title h1,
			.bg-text-title h2 {
				font-size: 30px
			}

			.collection-category-description p {
				font-size: 24px
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
			background: var(--wpr-bg-2d1d36c5-bdd3-45a4-8f78-01981c6f7770) -78px -93px no-repeat
		}

		div.pp_default .pp_top .pp_middle {
			background: var(--wpr-bg-07a25dcb-95f3-46e6-a4a2-2e0c390876f9) top left repeat-x
		}

		div.pp_default .pp_top .pp_right {
			background: var(--wpr-bg-e495cf6b-589a-46d5-a8eb-e57a4396c5c6) -112px -93px no-repeat
		}

		div.pp_default .pp_content .ppt {
			color: #f8f8f8
		}

		div.pp_default .pp_content_container .pp_left {
			background: var(--wpr-bg-990bf1b7-efae-4ac1-8e6c-c3c3ead9de66) -7px 0 repeat-y;
			padding-left: 13px
		}

		div.pp_default .pp_content_container .pp_right {
			background: var(--wpr-bg-2ecd0ef2-4c31-4c04-aba7-34f7021c7b30) top right repeat-y;
			padding-right: 13px
		}

		div.pp_default .pp_next:hover {
			background: var(--wpr-bg-b0483f29-2dd7-49cf-b30a-cba0054b1d55) center right no-repeat;
			cursor: pointer
		}

		div.pp_default .pp_previous:hover {
			background: var(--wpr-bg-3287d862-884a-41c0-aa21-c2cd7eb2d078) center left no-repeat;
			cursor: pointer
		}

		div.pp_default .pp_expand {
			background: var(--wpr-bg-06f1dfc2-d82d-435f-9754-ac4faa18711f) 0 -29px no-repeat;
			cursor: pointer;
			width: 28px;
			height: 28px
		}

		div.pp_default .pp_expand:hover {
			background: var(--wpr-bg-fd0715c8-7b53-4ade-93e3-77d0059e48d7) 0 -56px no-repeat;
			cursor: pointer
		}

		div.pp_default .pp_contract {
			background: var(--wpr-bg-e7aed686-faf0-4e71-b2c3-272d51ae9e7f) 0 -84px no-repeat;
			cursor: pointer;
			width: 28px;
			height: 28px
		}

		div.pp_default .pp_contract:hover {
			background: var(--wpr-bg-8e88859e-c241-4dd0-bc23-00b5cccf075e) 0 -113px no-repeat;
			cursor: pointer
		}

		div.pp_default .pp_close {
			width: 30px;
			height: 30px;
			background: var(--wpr-bg-7f8f3345-3d0a-4091-bf42-ae7adb351cbd) 2px 1px no-repeat;
			cursor: pointer
		}

		div.pp_default .pp_gallery ul li a {
			background: var(--wpr-bg-f00b7b9d-b477-4ca7-9d19-11ba7cf505bc) center center #f8f8f8;
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
			background: var(--wpr-bg-604d5e94-ad6a-480a-8b00-ac3944bdff03) -51px 1px no-repeat;
			height: 30px;
			width: 30px
		}

		div.pp_default .pp_nav .pp_pause {
			background-position: -51px -29px
		}

		div.pp_default a.pp_arrow_next,
		div.pp_default a.pp_arrow_previous {
			background: var(--wpr-bg-3aa7716f-c493-4969-9d4a-eb0aec567af9) -31px -3px no-repeat;
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
			background: var(--wpr-bg-371bdb3e-0c68-454e-8b84-7d51d418bf2e) -78px -127px no-repeat
		}

		div.pp_default .pp_bottom .pp_middle {
			background: var(--wpr-bg-55353e47-2923-4af7-b1aa-0f25f6a6f219) bottom left repeat-x
		}

		div.pp_default .pp_bottom .pp_right {
			background: var(--wpr-bg-d196b8c0-baa6-4603-83e2-ca4818000860) -112px -127px no-repeat
		}

		div.pp_default .pp_loaderIcon {
			background: var(--wpr-bg-eb1aeaa7-4b32-4cc7-bb1d-b924cc304b50) center center no-repeat
		}

		div.facebook .pp_top .pp_left {
			background: var(--wpr-bg-74ad4fc0-b7f3-40aa-a135-b7b366ca9b1f) -88px -53px no-repeat
		}

		div.facebook .pp_top .pp_middle {
			background: var(--wpr-bg-09d2cd32-e931-4c0b-bd8b-3bba138d05dc) top left repeat-x
		}

		div.facebook .pp_top .pp_right {
			background: var(--wpr-bg-ee90ae80-775a-431a-8052-a3d799fd5cea) -110px -53px no-repeat
		}

		div.facebook .pp_content_container .pp_left {
			background: var(--wpr-bg-47ffa6bd-9a47-4fa0-b17d-31e7d1f74497) top left repeat-y
		}

		div.facebook .pp_content_container .pp_right {
			background: var(--wpr-bg-7b6e015a-f86b-43fd-b88c-4fc35580f1e8) top right repeat-y
		}

		div.facebook .pp_expand {
			background: var(--wpr-bg-dc0aad2d-21bd-48b9-80c1-5a0a1609009c) -31px -26px no-repeat;
			cursor: pointer
		}

		div.facebook .pp_expand:hover {
			background: var(--wpr-bg-5ab58625-8465-4f35-b28a-c260ecf4a3ff) -31px -47px no-repeat;
			cursor: pointer
		}

		div.facebook .pp_contract {
			background: var(--wpr-bg-fdf942e6-5a10-470e-852f-cb150ed63d23) 0 -26px no-repeat;
			cursor: pointer
		}

		div.facebook .pp_contract:hover {
			background: var(--wpr-bg-e7e145a0-7224-4583-bd06-8a094738769e) 0 -47px no-repeat;
			cursor: pointer
		}

		div.facebook .pp_close {
			width: 22px;
			height: 22px;
			background: var(--wpr-bg-8b6fe086-f489-45ed-bfd3-3043a36d35b9) -1px -1px no-repeat;
			cursor: pointer
		}

		div.facebook .pp_description {
			margin: 0 37px 0 0
		}

		div.facebook .pp_loaderIcon {
			background: var(--wpr-bg-f9f20842-63c9-4659-b33c-7b37dad8179d) center center no-repeat
		}

		div.facebook .pp_arrow_previous {
			background: var(--wpr-bg-8032e854-802f-4e4b-bdac-c7a2cd152d01) 0 -71px no-repeat;
			height: 22px;
			margin-top: 0;
			width: 22px
		}

		div.facebook .pp_arrow_previous.disabled {
			background-position: 0 -96px;
			cursor: default
		}

		div.facebook .pp_arrow_next {
			background: var(--wpr-bg-3fadb026-47b2-4c2e-bdf7-ee74a07f6b63) -32px -71px no-repeat;
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
			background: var(--wpr-bg-858d1866-ca05-4a23-b1bf-772b8b30e940) -1px -123px no-repeat;
			height: 22px;
			width: 22px
		}

		div.facebook .pp_nav .pp_pause {
			background: var(--wpr-bg-f5d9bffc-e363-411f-855c-d3f347006b1b) -32px -123px no-repeat;
			height: 22px;
			width: 22px
		}

		div.facebook .pp_next:hover {
			background: var(--wpr-bg-93980afd-5eed-4483-a0ac-5ead3a05f6c3) center right no-repeat;
			cursor: pointer
		}

		div.facebook .pp_previous:hover {
			background: var(--wpr-bg-e05c0309-4fc0-49c1-a19e-09716cc2e1d7) center left no-repeat;
			cursor: pointer
		}

		div.facebook .pp_bottom .pp_left {
			background: var(--wpr-bg-d44b13aa-7aa8-41d3-87cd-c27141f873be) -88px -80px no-repeat
		}

		div.facebook .pp_bottom .pp_middle {
			background: var(--wpr-bg-65dcb800-f1c6-4ae7-b8de-d638be972943) top left repeat-x
		}

		div.facebook .pp_bottom .pp_right {
			background: var(--wpr-bg-ab5d968d-db84-473d-b2cb-aca76c0691b6) -110px -80px no-repeat
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
			background: var(--wpr-bg-6c602d33-3979-41ab-bbd5-b1631a029f9b) no-repeat;
			display: block;
			height: 33px;
			width: 50px
		}

		.pp_gallery .pp_arrow_next,
		.pp_gallery .pp_arrow_previous {
			margin-top: 7px !important
		}

		a.pp_next {
			background: var(--wpr-bg-f41104cc-0335-4da5-bf0e-f6da9f74fd7f) 10000px 10000px no-repeat;
			display: block;
			float: right;
			height: 100%;
			text-indent: -10000px;
			width: 49%
		}

		a.pp_previous {
			background: var(--wpr-bg-8724bb27-5536-4420-8dab-613a011fba72) 10000px 10000px no-repeat;
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
		h3,
		h5 {
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

		blockquote {
			margin: 0 0 1rem
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
		input[type=datetime-local],
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

		template {
			display: none
		}

		[hidden] {
			display: none !important
		}

		h1,
		h2,
		h3,
		h5 {
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

		h5 {
			font-size: 1.25rem
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
		.col-5,
		.col-7,
		.col-lg-12,
		.col-lg-4,
		.col-lg-6,
		.col-lg-8,
		.col-md-12,
		.col-md-4,
		.col-md-8,
		.col-sm-6,
		.col-xl-3,
		.col-xl-9 {
			position: relative;
			width: 100%;
			padding-right: 15px;
			padding-left: 15px
		}

		.col-5 {
			-webkit-box-flex: 0;
			-ms-flex: 0 0 41.66667%;
			flex: 0 0 41.66667%;
			max-width: 41.66667%
		}

		.col-7 {
			-webkit-box-flex: 0;
			-ms-flex: 0 0 58.33333%;
			flex: 0 0 58.33333%;
			max-width: 58.33333%
		}

		.col-12 {
			-webkit-box-flex: 0;
			-ms-flex: 0 0 100%;
			flex: 0 0 100%;
			max-width: 100%
		}

		@media (min-width:576px) {
			.col-sm-6 {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 50%;
				flex: 0 0 50%;
				max-width: 50%
			}
		}

		@media (min-width:768px) {
			.col-md-4 {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 33.33333%;
				flex: 0 0 33.33333%;
				max-width: 33.33333%
			}

			.col-md-8 {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 66.66667%;
				flex: 0 0 66.66667%;
				max-width: 66.66667%
			}

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

			.col-lg-12 {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 100%;
				flex: 0 0 100%;
				max-width: 100%
			}
		}

		@media (min-width:1200px) {
			.col-xl-3 {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 25%;
				flex: 0 0 25%;
				max-width: 25%
			}

			.col-xl-9 {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 75%;
				flex: 0 0 75%;
				max-width: 75%
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

		.form-control:disabled,
		.form-control[readonly] {
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

			blockquote,
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

		.fa-refresh:before {
			content: ""
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

		.fa-filter:before {
			content: ""
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
			src: url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-italic.eot");
			src: url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-italic-1.eot") format("embedded-opentype"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-italic.woff") format("woff"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-italic.woff2") format("woff2"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-italic.ttf") format("truetype"), url("<?php echo base_url(); ?>assets/themes/creativewalls/fonts/lato-v20-latin-italic.svg") format("svg");
			font-weight: 400;
			font-style: italic
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
			background: var(--wpr-bg-6d5e9bad-fd83-40b1-93a9-5875caaf2289) no-repeat;
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

		.owl-project-slider-cls {
			min-height: 550px
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

			.owl-project-slider-cls {
				min-height: 240px
			}
		}

		@media (min-width:320px) and (max-width:479px) {
			.iti-mobile .iti--container {
				position: absolute !important
			}
		}

		.collection-cta-link.i-want-this-btn {
			text-align: left;
			padding: 20px 0 40px 15px
		}

		.collection-cta-link.i-want-this-btn a {
			font-size: 18px;
			padding: 15px 55px
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
			background-image: var(--wpr-bg-496080c2-8787-480d-b897-1c1c3623720f);
			background-repeat: no-repeat;
			background-size: 20px 20px;
			padding-left: 30px;
			background-position: left
		}

		button.loading {
			background-image: var(--wpr-bg-75fbf62f-510e-48dc-a319-2fa56244fd69);
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

		.collection-cta-link a {
			color: #fff;
			background: #C85514;
			padding: 15px;
			line-height: 1;
			font-size: 14px;
			font-weight: 500;
			transform: perspective(1px) translateZ(0);
			-webkit-transform: perspective(1px) translateZ(0);
			-webkit-transition-duration: .3s;
			transition-duration: .3s;
			-webkit-transition-property: color, background-color;
			transition-property: color, background-color
		}

		.collection-category-description {
			margin-top: 40px
		}

		.collection-title {
			margin-top: 20px
		}

		.collection-title h2 {
			font-size: 24px;
			font-weight: 500;
			line-height: 1
		}

		.collection-special-features-title h2 {
			font-size: 20px;
			font-weight: 500;
			line-height: 1
		}

		.collection-special-features-title h3 {
			font-size: 20px;
			font-weight: 500;
			line-height: 1
		}

		.collection-special-features-title span {
			font-size: 20px;
			font-weight: 500;
			line-height: 1
		}

		.collection-special-features-description {
			margin-top: 20px
		}

		.collection-special-features-description ul {
			list-style: none;
			padding-inline-start: 0
		}

		.collection-special-features-description ul li {
			position: relative;
			line-height: 16px;
			display: inline-block;
			margin-bottom: 15px;
			font-size: 16px
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

		.col-lg-12.mb-collection-gallary-wrap {
			padding: 0;
			max-width: 100%
		}

		.owl-collecttion-listing .item {
			padding-left: 10px;
			padding-right: 10px;
			padding-bottom: 20px;
			background-position: 10% center;
			background: linear-gradient(180deg, transparent 30%, #fff 0)
		}

		.project-detail-main-title {
			margin-top: 25px
		}

		.project-detail-main-title h3 {
			font-size: 20px;
			font-weight: 500;
			line-height: 1
		}

		.designed-by-project {
			font-size: 18px;
			font-weight: 500;
			margin-top: 1rem
		}

		.project-detail-grid {
			display: inline-flex;
			margin-top: 15px
		}

		.project-detail-list h5 {
			font-size: 18px;
			font-weight: 600;
			line-height: 1;
			margin-bottom: 20px
		}

		.project-detail-list p {
			font-size: 18px;
			font-weight: 400;
			line-height: 1.2
		}

		.project-detail-grid .project-detail-list {
			border-right: 1px solid #000;
			flex: 1;
			margin-right: 20px
		}

		.project-detail-grid .project-detail-list:last-child {
			border-right: none
		}

		.project-client-brief-section h3 {
			font-size: 20px;
			font-weight: 500;
			line-height: 1
		}

		.project-client-brief-section {
			margin-top: 30px
		}

		.project-client-brief-section p {
			font-size: 18px
		}

		.row.collection-listing-section.project-completed-wrap {
			padding-bottom: 10px;
			margin-bottom: 50px;
			background-color: #fff
		}

		body.page-template-projects-template {
			background: #f6f5f5
		}

		.collection-cta-link {
			text-align: right
		}

		.collection-cta-link a {
			color: #fff;
			background: #C85514;
			padding: 15px;
			line-height: 1;
			font-size: 14px;
			font-weight: 500;
			-webkit-transform: perspective(1px) translateZ(0);
			-webkit-transition-duration: .3s;
			transition-duration: .3s;
			-webkit-transition-property: color, background-color;
			transition-property: color, background-color
		}

		.collection-cta-link a:hover {
			background: #d5b58f;
			color: #fff
		}

		.collection-category-description {
			margin-top: 30px
		}

		.collection-category-description p {
			line-height: 1.5
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

		.collection-title {
			margin-top: 30px
		}

		.collection-title h2 {
			font-size: 24px;
			font-weight: 500;
			line-height: 1;
			color: #333
		}

		.collection-special-features-title {
			margin-top: 30px
		}

		.collection-special-features-title h2 {
			font-size: 22px;
			font-weight: 500;
			line-height: 1
		}

		.collection-special-features-title h3 {
			font-size: 22px;
			font-weight: 500;
			line-height: 1
		}

		.collection-special-features-title span {
			font-size: 22px;
			font-weight: 500;
			line-height: 1
		}

		.collection-special-features-description {
			margin-top: 10px
		}

		.collection-special-features-description ul {
			list-style: none;
			padding-inline-start: 0;
			padding: 0 0 0 6px
		}

		.collection-special-features-description ul li {
			position: relative;
			line-height: 25px;
			display: block;
			margin-bottom: 20px;
			font-size: 18px;
			padding-left: .4em;
			text-indent: -.4em
		}

		.collection-special-features-description ul li:before {
			content: "\2022";
			margin-right: 10px;
			font-size: 21px;
			display: inline-block;
			font-weight: 900;
			position: relative;
			color: #b1b1b1
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

		.collection-listing-section {
			padding-bottom: 70px
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

		.owl-std-navigation .owl-nav button.owl-prev {
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

		.owl-std-navigation .owl-dots {
			position: absolute;
			left: 0;
			right: 0;
			bottom: 20px;
			text-align: center;
			right: 5%
		}

		.owl-std-navigation .owl-nav button.owl-prev:hover {
			background: #000
		}

		.owl-std-navigation .owl-nav button.owl-next {
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

		.owl-std-navigation .owl-nav button.owl-next:hover {
			background: #000
		}

		.owl-std-navigation .owl-theme .owl-nav:hover {
			background-color: rgba(0, 0, 0, .5)
		}

		.owl-std-navigation .owl-theme .owl-nav:hover {
			background: #000;
			color: #fff;
			text-decoration: none
		}

		.owl-std-navigation .owl-nav {
			margin-top: 0
		}

		.owl-std-navigation .owl-theme .owl-nav .disabled {
			opacity: 1
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

		.custom-dot-navigation {
			position: relative
		}

		.custom-dot-navigation .owl-nav.disabled+.owl-dots {
			position: relative;
			bottom: 40px;
			margin: 0 50px
		}

		.custom-dot-navigation .owl-dots .owl-dot.active span,
		.custom-dot-navigation .owl-dots .owl-dot:hover span {
			background: #fff
		}

		.custom-dot-navigation .owl-dots .owl-dot span {
			width: 10px;
			height: 10px;
			margin: 5px 7px;
			background: 0 0;
			display: block;
			-webkit-backface-visibility: visible;
			transition: opacity .2s ease;
			border-radius: 30px;
			border: 3px solid #fff
		}

		.custom-dot-navigation .owl-dots .owl-dot:hover span {
			background: #adadad
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

			.collection-title h2 {
				font-size: 30px;
				font-weight: 500;
				line-height: 1
			}

			.designed-by-project {
				font-size: 20px;
				font-weight: 500;
				margin-top: 1rem
			}

			.project-detail-main-title h3 {
				font-size: 24px;
				font-weight: 500;
				line-height: 1
			}

			.project-detail-list h5 {
				font-size: 18px;
				font-weight: 600;
				line-height: 1;
				margin-bottom: 20px
			}

			.project-detail-list p {
				font-size: 18px;
				font-weight: 400;
				line-height: 1.2
			}

			.project-client-brief-section h3 {
				font-size: 24px;
				font-weight: 500;
				line-height: 1
			}

			.project-client-brief-section p {
				font-size: 18px
			}

			.collection-special-features-title h2 {
				font-size: 24px;
				font-weight: 500;
				line-height: 1
			}

			.collection-special-features-title h3 {
				font-size: 24px;
				font-weight: 500;
				line-height: 1
			}

			.collection-special-features-title span {
				font-size: 24px;
				font-weight: 500;
				line-height: 1
			}

			.collection-special-features-description ul li {
				position: relative;
				line-height: 18px;
				margin-bottom: 15px;
				font-size: 18px
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

			.bg-text-title p {
				font-size: 60px
			}

			.bg-text-title h1,
			.bg-text-title h2 {
				font-size: 30px
			}

			.collection-category-description p {
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

			.collection-special-features-description ul {
				list-style: none;
				padding-inline-start: 0;
				padding: 0 0 0 10px
			}

			.collection-special-features-description ul li {
				position: relative;
				line-height: 24px;
				margin-bottom: 10px;
				font-size: 18px;
				padding-left: .6em;
				text-indent: -.6em
			}

			.collection-title h2 {
				font-size: 20px;
				font-weight: 500;
				line-height: 1
			}

			.designed-by-project {
				font-size: 18px;
				font-weight: 500
			}

			.project-detail-main-title h3 {
				font-size: 18px;
				font-weight: 500;
				line-height: 1
			}

			.project-detail-list p {
				font-size: 18px;
				font-weight: 400;
				line-height: 1
			}

			.project-client-brief-section h3 {
				font-size: 18px;
				font-weight: 500;
				line-height: 1
			}

			.project-client-brief-section p {
				font-size: 18px
			}

			.collection-special-features-title h2 {
				font-size: 18px;
				font-weight: 500;
				line-height: 1
			}

			.collection-special-features-title h3 {
				font-size: 18px;
				font-weight: 500;
				line-height: 1
			}

			.collection-special-features-title span {
				font-size: 18px;
				font-weight: 500;
				line-height: 1
			}

			.collection-special-features-description {
				margin-top: 15px
			}

			.collection-title {
				margin-top: 15px
			}

			.collection-listing-section {
				padding-bottom: 10px
			}

			.contact-tab-fixed_new .collection-category-second-title {
				position: absolute;
				top: -8px
			}

			.contact-tab-fixed_new .project-filter-menu {
				top: 28px;
				float: right;
				right: -158px
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

			.collection-cta-link {
				text-align: left;
				padding: 20px 0;
				box-sizing: border-box;
				margin: 10px 0 0
			}

			.collection-cta-link a {
				padding: 15px 50px;
				font-size: 18px
			}

			.contact-tab-fixed_new .collection-category-second-title {
				position: absolute;
				top: -30px
			}

			.bg-text-title h1,
			.bg-text-title h2 {
				padding-left: 2px
			}

			.collection-category-description {
				margin-top: 30px
			}

			.collection-category-description p {
				line-height: 24px;
				font-size: 14px;
				color: #2b2828
			}

			.collection-title h2 {
				font-size: 24px;
				font-weight: 500;
				line-height: 1.2
			}

			.collection-special-features-title h2 {
				font-size: 20px;
				font-weight: 500;
				line-height: 1
			}

			.collection-special-features-title h3 {
				font-size: 20px;
				font-weight: 500;
				line-height: 1
			}

			.collection-special-features-title span {
				font-size: 20px;
				font-weight: 500;
				line-height: 1
			}

			.collection-special-features-description ul li:before {
				content: "\2022";
				margin-right: 8px;
				font-size: 20px;
				display: inline-block;
				font-weight: 900;
				position: relative;
				color: #b1b1b1
			}

			.collection-special-features-description ul {
				list-style: none;
				padding-inline-start: 0;
				padding: 0 0 0 6px;
				box-sizing: border-box;
				margin-bottom: 0
			}

			.collection-special-features-description ul li {
				position: relative;
				line-height: 20px;
				display: inline-block;
				margin-bottom: 5px;
				font-size: 16px;
				font-weight: 400;
				padding-left: .6em;
				text-indent: -.6em
			}

			.collection-special-features-description {
				margin-top: 15px
			}

			.collection-cta-link.i-want-this-btn a {
				font-size: 16px;
				padding: 15px 60px
			}

			.collection-listing-section {
				padding-bottom: 0
			}

			.mb-collection-gallary-wrap {
				width: 100%;
				max-width: 100%;
				padding-left: 0;
				padding-right: 0
			}

			.owl-collecttion-listing .owl-stage {
				left: -100px
			}

			.project-template-wrap {
				padding: 25px 0 0
			}

			.designed-by-project {
				font-size: 16px;
				font-weight: 500
			}

			.project-detail-main-title h3 {
				font-size: 20px;
				font-weight: 500;
				line-height: 1
			}

			.project-detail-grid {
				display: inline-flex;
				margin-top: 15px
			}

			.project-client-brief-section h3 {
				font-size: 20px;
				font-weight: 500;
				line-height: 1
			}

			.project-client-brief-section p {
				font-size: 16px
			}

			.project-feature-title {
				margin-top: 20px
			}

			.project-feature-title h3 {
				font-size: 20px
			}

			.project-feature-title p {
				font-size: 16px
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

			.collection-cta-link {
				text-align: left;
				padding: 20px 0;
				box-sizing: border-box
			}

			.collection-cta-link a {
				padding: 15px 50px;
				font-size: 16px
			}

			.collection-category-second-title {
				padding-top: 20px
			}

			.contact-tab-fixed_new .collection-category-second-title {
				position: absolute;
				top: -30px
			}

			.bg-text-title h1,
			.bg-text-title h2 {
				padding-left: 2px
			}

			.collection-category-description {
				margin-top: 30px
			}

			.collection-category-description p {
				line-height: 24px;
				font-size: 14px;
				color: #2b2828
			}

			.collection-title h2 {
				font-size: 24px;
				font-weight: 500;
				line-height: 1.2
			}

			.collection-title {
				margin-top: 15px
			}

			.collection-special-features-title h2 {
				font-size: 20px;
				font-weight: 500;
				line-height: 1
			}

			.collection-special-features-title h3 {
				font-size: 20px;
				font-weight: 500;
				line-height: 1
			}

			.collection-special-features-title span {
				font-size: 20px;
				font-weight: 500;
				line-height: 1
			}

			.collection-special-features-description ul li:before {
				content: "\2022";
				margin-right: 8px;
				font-size: 20px;
				display: inline-block;
				font-weight: 900;
				position: relative;
				color: #b1b1b1
			}

			.collection-special-features-description ul {
				list-style: none;
				padding-inline-start: 0;
				padding: 0 0 0 6px;
				box-sizing: border-box;
				margin-bottom: 0
			}

			.collection-special-features-description ul li {
				position: relative;
				line-height: 20px;
				display: inline-block;
				margin-bottom: 5px;
				font-size: 14px;
				font-weight: 400;
				padding-left: .6em;
				text-indent: -.6em
			}

			.collection-special-features-description {
				margin-top: 15px
			}

			.collection-cta-link.i-want-this-btn a {
				font-size: 16px;
				padding: 15px 60px
			}

			.collection-listing-section {
				padding-bottom: 0
			}

			.mb-collection-gallary-wrap {
				width: 100%;
				max-width: 100%;
				padding-left: 0;
				padding-right: 0
			}

			.owl-collecttion-listing .owl-stage {
				left: -20px
			}

			.project-detail-grid {
				display: block;
				margin-top: 15px
			}

			.project-detail-grid .project-detail-list {
				border-right: 0px solid #000;
				margin-right: 0;
				display: flex;
				border-bottom: 1px solid #000;
				margin-bottom: 15px
			}

			.project-detail-list h5 {
				font-size: 14px;
				font-weight: 600;
				line-height: 1;
				margin-bottom: 15px;
				flex-basis: 35%;
				margin-right: 10px
			}

			.project-detail-list p {
				font-size: 14px;
				font-weight: 400;
				line-height: 1;
				flex-basis: 70%;
				flex-direction: row;
				margin-bottom: 15px
			}

			.designed-by-project {
				font-size: 14px;
				margin-top: .6rem;
				margin-bottom: .5rem
			}

			.project-detail-main-title h3 {
				font-size: 16px;
				font-weight: 600;
				line-height: 1;
				color: #0c0b0b
			}

			.project-detail-main-title {
				margin-top: 10px
			}

			.project-client-brief-section h3 {
				font-size: 16px;
				font-weight: 600;
				line-height: 1
			}

			.project-client-brief-section p {
				font-size: 14px
			}

			.project-feature-title h2 {
				font-size: 16px;
				font-weight: 600
			}

			.project-feature-title h3 {
				font-size: 16px;
				font-weight: 600;
				margin: 20px 0 10px
			}

			.project-feature-title p {
				font-size: 14px
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

			.collection-cta-link {
				text-align: left;
				box-sizing: border-box;
				padding: 0;
				margin: 10px 0
			}

			.collection-cta-link a {
				padding: 10px 15px
			}

			.collection-category-second-title {
				padding: 20px 4% 0
			}

			.contact-tab-fixed_new .collection-category-second-title {
				position: absolute;
				left: 0;
				top: -42px
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

			.collection-category-description {
				margin-top: 30px
			}

			.collection-category-description p {
				line-height: 24px;
				font-size: 14px;
				color: #2b2828
			}

			.collection-title h2 {
				font-size: 16px;
				font-weight: 500;
				line-height: 1.5
			}

			.collection-title {
				margin-top: 15px
			}

			.collection-special-features-title h2 {
				font-size: 18px;
				font-weight: 500;
				line-height: 1
			}

			.collection-special-features-title h3 {
				font-size: 18px;
				font-weight: 500;
				line-height: 1
			}

			.collection-special-features-title span {
				font-size: 18px;
				font-weight: 500;
				line-height: 1
			}

			.collection-special-features-description ul li:before {
				content: "\2022";
				margin-right: 8px;
				font-size: 16px;
				display: inline-block;
				font-weight: 900;
				position: relative;
				color: #b1b1b1
			}

			.collection-special-features-description ul {
				list-style: none;
				padding-inline-start: 0;
				padding: 0 0 0 6px;
				box-sizing: border-box;
				margin-bottom: 0
			}

			.collection-special-features-description ul li {
				position: relative;
				line-height: 20px;
				display: inline-block;
				margin-bottom: 5px;
				font-size: 14px;
				font-weight: 400;
				padding-left: .6em;
				text-indent: -.6em
			}

			.collection-special-features-description {
				margin-top: 15px
			}

			.collection-cta-link.i-want-this-btn a {
				font-size: 14px;
				padding: 15px 25px
			}

			.collection-listing-section {
				padding-bottom: 0
			}

			.mb-collection-gallary-wrap {
				width: 100%;
				max-width: 100%;
				padding-left: 0;
				padding-right: 0
			}

			.owl-collecttion-listing .owl-stage {
				left: -20px
			}

			.project-detail-grid {
				display: block;
				margin-top: 15px
			}

			.project-detail-grid .project-detail-list {
				border-right: 0px solid #000;
				margin-right: 0;
				display: flex;
				border-bottom: 1px solid #000;
				margin-bottom: 15px
			}

			.project-detail-list h5 {
				font-size: 14px;
				font-weight: 500;
				line-height: 1;
				margin-bottom: 15px;
				flex-basis: 38%;
				margin-right: 10px
			}

			.project-detail-list p {
				font-size: 12px;
				font-weight: 400;
				line-height: 1;
				flex-basis: 70%;
				flex-direction: row;
				margin-bottom: 15px
			}

			.designed-by-project {
				font-size: 14px
			}

			.project-detail-main-title h3 {
				font-size: 14px;
				font-weight: 600;
				line-height: 1;
				color: #0c0b0b
			}

			.project-detail-main-title {
				margin-top: 10px
			}

			.project-client-brief-section h3 {
				font-size: 14px;
				font-weight: 600;
				line-height: 1
			}

			.project-client-brief-section p {
				font-size: 14px
			}

			.project-feature-title h2 {
				font-size: 14px;
				font-weight: 600
			}

			.project-feature-title h3 {
				font-size: 14px;
				font-weight: 600;
				margin: 20px 0 10px
			}

			.project-feature-title p {
				font-size: 14px
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

			.custom-dot-navigation .owl-nav.disabled+.owl-dots {
				position: relative;
				bottom: 0;
				margin: 0
			}

			.custom-dot-navigation .owl-dots .owl-dot span {
				width: 8px;
				height: 8px;
				margin: 5px 7px;
				background: 0 0;
				display: block;
				-webkit-backface-visibility: visible;
				transition: opacity .2s ease;
				border-radius: 30px;
				border: 1px solid #666
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
			.small-width-desktop {
				max-width: 80%;
				margin: auto
			}

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

		.new-collection-show {
			display: none
		}

		#cntry_field,
		.text-input-name {
			width: 100%
		}

		.show-more-text {
			font-size: 18px;
			font-weight: 600;
			color: #C85514;
			cursor: pointer
		}

		.show-more-text .arrow-change {
			display: inline-block;
			-moz-transform: rotate(90deg);
			-webkit-transform: rotate(90deg);
			-o-transform: rotate(90deg);
			-ms-transform: rotate(90deg);
			transform: rotate(90deg)
		}

		.collection-slider-img-section {
			position: relative
		}

		.contact-tab-fixed_new.collection-category-title {
			margin-top: 0
		}

		.collection-category-title {
			margin-top: 14px;
			margin-bottom: 30px
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

		.project-completed-new {
			align-items: center
		}

		.collection-cta-link.i-want-this-btn {
			text-align: right;
			padding: 20px 0 40px
		}

		.collection-cta-link.i-want-this-btn a {
			font-size: 18px;
			padding: 15px 55px;
			display: inline-block
		}

		.collection-special-features-title .client-testimonial-quote span {
			font-size: 14px;
			line-height: 1.5;
			font-weight: 400
		}

		.collection-special-features-title .client-testimonial-quote .quote-mark {
			font-weight: 600;
			font-size: 60px;
			font-family: "Times New Roman", Georgia, Serif;
			line-height: .6;
			color: rgba(0, 0, 0, .6);
			margin-right: 5px
		}

		blockquote.client-testimonial-quote {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			align-items: flex-start
		}

		.project-testimonial-section h2 {
			margin-bottom: 1.2rem
		}

		.project-filter-menu {
			text-align: right;
			margin-left: auto;
			margin-right: 20%
		}

		.project-clear {
			display: inline-block;
			font-size: 16px;
			text-decoration: underline;
			color: #169ba5;
			cursor: pointer
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

		.filter-expand-section-content {
			border-radius: 0;
			background-color: #e5e5e5;
			border: none
		}

		.alm-filters-container .property-type-class {
			display: -webkit-box !important;
			display: -ms-flexbox !important;
			display: flex !important;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			align-items: center
		}

		.alm-filters-container .property-type-class .alm-filter--checkbox {
			display: inline-block;
			margin: 0
		}

		.alm-filters-container .property-type-class .alm-filter--checkbox a:before {
			display: none
		}

		.alm-filters-container .property-type-class .alm-filter--checkbox a:after {
			display: none
		}

		.alm-filters-container .property-type-class .alm-filter--checkbox a {
			font-size: 18px;
			padding: 10px 15px;
			background-color: #fff;
			margin: 0 8px;
			border: 2px solid #5e5e5e;
			display: inline-block;
			line-height: 1;
			border-radius: 5px;
			font-weight: 500
		}

		.alm-filters-container .property-type-class .alm-filter--checkbox a.active {
			background-color: #5e5e5e;
			color: #fff
		}

		.alm-filters-container .property-type-class .alm-filter--title h3 {
			font-size: 18px;
			font-weight: 600;
			margin: 0;
			padding: 0;
			line-height: 1
		}

		.property-type-class .alm-filter--title {
			-webkit-box-flex: 0;
			-ms-flex: 0 0 15%;
			flex: 0 0 15%;
			max-width: 15%;
			margin-right: 10px
		}

		.alm-filters-container .location-type-class {
			display: -webkit-box !important;
			display: -ms-flexbox !important;
			display: flex !important;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			align-items: center;
			margin-bottom: 0 !important;
			padding-bottom: 0 !important
		}

		.alm-filters-container .location-type-class .alm-filter--checkbox {
			display: inline-block;
			margin: 0
		}

		.alm-filters-container .location-type-class .alm-filter--checkbox a:before {
			display: none
		}

		.alm-filters-container .location-type-class .alm-filter--checkbox a:after {
			display: none
		}

		.alm-filters-container .location-type-class .alm-filter--checkbox a {
			font-size: 18px;
			padding: 10px 15px;
			background-color: #fff;
			margin: 0 8px;
			border: 2px solid #5e5e5e;
			display: inline-block;
			line-height: 1;
			border-radius: 5px;
			font-weight: 500
		}

		.alm-filters-container .location-type-class .alm-filter--checkbox a.active {
			background-color: #5e5e5e;
			color: #fff
		}

		.alm-filters-container .location-type-class .alm-filter--title h3 {
			font-size: 18px;
			font-weight: 600;
			margin: 0;
			padding: 0;
			line-height: 1
		}

		.location-type-class .alm-filter--title {
			-webkit-box-flex: 0;
			-ms-flex: 0 0 15%;
			flex: 0 0 15%;
			max-width: 15%;
			margin-right: 10px
		}

		#alm-filters-projectcompletedfilter button[type=button] {
			padding: 0 15px;
			-webkit-border-radius: 3px;
			border-radius: 5px;
			max-width: 100%;
			width: auto;
			height: 42px;
			line-height: 42px;
			font-size: 15px;
			color: #fff;
			background-color: #169ba5;
			border: none;
			text-transform: none;
			font-weight: 600;
			cursor: pointer
		}

		.fliter-project-expand {
			font-weight: 700;
			background-color: #e5e5e5;
			border-radius: 0
		}

		.fliter-project-expand.collapsed {
			background-color: transparent
		}

		.collection-cta-link.i-want-this-btn.i-want-this-btn-new.project-desk-cta a {
			padding: 15px 30px
		}

		.row.collection-category-title.project-template-wrap {
			align-items: baseline;
			position: relative;
			top: 0
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
			.new-collection-show {
				display: none
			}

			.show-more-text {
				font-size: 20px;
				font-weight: 600;
				color: #C85514;
				cursor: pointer
			}

			.show-more-text .arrow-change {
				display: inline-block;
				-moz-transform: rotate(90deg);
				-webkit-transform: rotate(90deg);
				-o-transform: rotate(90deg);
				-ms-transform: rotate(90deg);
				transform: rotate(90deg)
			}

			.collection-slider-img-section {
				position: relative
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

			.project-completed-new {
				align-items: center
			}

			.collection-cta-link.i-want-this-btn {
				text-align: right;
				padding: 20px 0 40px
			}

			.collection-cta-link.i-want-this-btn a {
				font-size: 18px;
				padding: 15px 55px;
				display: inline-block
			}

			.collection-special-features-title .client-testimonial-quote span {
				font-size: 14px;
				line-height: 1.5;
				font-weight: 400
			}

			.collection-special-features-title .client-testimonial-quote .quote-mark {
				font-weight: 600;
				font-size: 60px;
				font-family: "Times New Roman", Georgia, Serif;
				line-height: .6;
				color: rgba(0, 0, 0, .6);
				margin-right: 5px
			}

			blockquote.client-testimonial-quote {
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
				align-items: flex-start
			}

			.project-testimonial-section h2 {
				margin-bottom: 1.2rem
			}

			.project-filter-menu {
				text-align: right;
				margin-left: auto;
				margin-right: 20%
			}

			.project-clear {
				display: inline-block;
				font-size: 18px;
				text-decoration: underline;
				color: #169ba5;
				cursor: pointer
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

			.filter-expand-section-content {
				border-radius: 0;
				background-color: #e5e5e5;
				border: none
			}

			.alm-filters-container .property-type-class {
				display: -webkit-box !important;
				display: -ms-flexbox !important;
				display: flex !important;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				align-items: center
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox {
				display: inline-block;
				margin: 0
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a:before {
				display: none
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a:after {
				display: none
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a {
				font-size: 18px;
				padding: 10px 15px;
				background-color: #fff;
				margin: 0 8px;
				border: 2px solid #5e5e5e;
				display: inline-block;
				line-height: 1;
				border-radius: 5px;
				font-weight: 500
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a.active {
				background-color: #5e5e5e;
				color: #fff
			}

			.alm-filters-container .property-type-class .alm-filter--title h3 {
				font-size: 18px;
				font-weight: 600;
				margin: 0;
				padding: 0;
				line-height: 1
			}

			.property-type-class .alm-filter--title {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 15%;
				flex: 0 0 15%;
				max-width: 15%;
				margin-right: 10px
			}

			.alm-filters-container .location-type-class {
				display: -webkit-box !important;
				display: -ms-flexbox !important;
				display: flex !important;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				align-items: center;
				margin-bottom: 0 !important;
				padding-bottom: 0 !important
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox {
				display: inline-block;
				margin: 0
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a:before {
				display: none
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a:after {
				display: none
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a {
				font-size: 18px;
				padding: 10px 15px;
				background-color: #fff;
				margin: 0 8px;
				border: 2px solid #5e5e5e;
				display: inline-block;
				line-height: 1;
				border-radius: 5px;
				font-weight: 500
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a.active {
				background-color: #5e5e5e;
				color: #fff
			}

			.alm-filters-container .location-type-class .alm-filter--title h3 {
				font-size: 18px;
				font-weight: 600;
				margin: 0;
				padding: 0;
				line-height: 1
			}

			.location-type-class .alm-filter--title {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 15%;
				flex: 0 0 15%;
				max-width: 15%;
				margin-right: 10px
			}

			#alm-filters-projectcompletedfilter button[type=button] {
				padding: 0 15px;
				-webkit-border-radius: 3px;
				border-radius: 5px;
				max-width: 100%;
				width: auto;
				height: 42px;
				line-height: 42px;
				font-size: 15px;
				color: #fff;
				background-color: #169ba5;
				border: none;
				text-transform: none;
				font-weight: 600;
				cursor: pointer
			}

			.fliter-project-expand {
				font-weight: 700;
				background-color: #e5e5e5;
				border-radius: 0;
				font-size: 18px
			}

			.fliter-project-expand.collapsed {
				background-color: transparent
			}

			.collection-cta-link.i-want-this-btn.i-want-this-btn-new.project-desk-cta a {
				padding: 15px 30px
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
			.new-collection-show {
				display: none
			}

			.show-more-text {
				font-size: 20px;
				font-weight: 600;
				color: #C85514;
				cursor: pointer
			}

			.show-more-text .arrow-change {
				display: inline-block;
				-moz-transform: rotate(90deg);
				-webkit-transform: rotate(90deg);
				-o-transform: rotate(90deg);
				-ms-transform: rotate(90deg);
				transform: rotate(90deg)
			}

			.collection-slider-img-section {
				position: relative
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

			.project-completed-new {
				align-items: center
			}

			.collection-cta-link.i-want-this-btn {
				text-align: right;
				padding: 20px 0 40px
			}

			.collection-cta-link.i-want-this-btn a {
				font-size: 18px;
				padding: 15px 55px;
				display: inline-block
			}

			.collection-special-features-title .client-testimonial-quote span {
				font-size: 14px;
				line-height: 1.5;
				font-weight: 400
			}

			.collection-special-features-title .client-testimonial-quote .quote-mark {
				font-weight: 600;
				font-size: 60px;
				font-family: "Times New Roman", Georgia, Serif;
				line-height: .6;
				color: rgba(0, 0, 0, .6);
				margin-right: 5px
			}

			blockquote.client-testimonial-quote {
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
				align-items: flex-start
			}

			.project-testimonial-section h2 {
				margin-bottom: 1.2rem
			}

			.project-filter-menu {
				text-align: right;
				margin-left: auto;
				margin-right: 20%
			}

			.project-clear {
				display: inline-block;
				font-size: 16px;
				text-decoration: underline;
				color: #169ba5;
				cursor: pointer
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

			.filter-expand-section-content {
				border-radius: 0;
				background-color: #e5e5e5;
				border: none
			}

			.alm-filters-container .property-type-class {
				display: -webkit-box !important;
				display: -ms-flexbox !important;
				display: flex !important;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				align-items: center
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox {
				display: inline-block;
				margin: 0
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a:before {
				display: none
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a:after {
				display: none
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a {
				font-size: 18px;
				padding: 10px 15px;
				background-color: #fff;
				margin: 0 8px;
				border: 2px solid #5e5e5e;
				display: inline-block;
				line-height: 1;
				border-radius: 5px;
				font-weight: 500
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a.active {
				background-color: #5e5e5e;
				color: #fff
			}

			.alm-filters-container .property-type-class .alm-filter--title h3 {
				font-size: 18px;
				font-weight: 600;
				margin: 0;
				padding: 0;
				line-height: 1
			}

			.property-type-class .alm-filter--title {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 15%;
				flex: 0 0 15%;
				max-width: 15%;
				margin-right: 10px
			}

			.alm-filters-container .location-type-class {
				display: -webkit-box !important;
				display: -ms-flexbox !important;
				display: flex !important;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				align-items: center;
				margin-bottom: 0 !important;
				padding-bottom: 0 !important
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox {
				display: inline-block;
				margin: 0
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a:before {
				display: none
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a:after {
				display: none
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a {
				font-size: 18px;
				padding: 10px 15px;
				background-color: #fff;
				margin: 0 8px;
				border: 2px solid #5e5e5e;
				display: inline-block;
				line-height: 1;
				border-radius: 5px;
				font-weight: 500
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a.active {
				background-color: #5e5e5e;
				color: #fff
			}

			.alm-filters-container .location-type-class .alm-filter--title h3 {
				font-size: 18px;
				font-weight: 600;
				margin: 0;
				padding: 0;
				line-height: 1
			}

			.location-type-class .alm-filter--title {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 15%;
				flex: 0 0 15%;
				max-width: 15%;
				margin-right: 10px
			}

			#alm-filters-projectcompletedfilter button[type=button] {
				padding: 0 15px;
				-webkit-border-radius: 3px;
				border-radius: 5px;
				max-width: 100%;
				width: auto;
				height: 42px;
				line-height: 42px;
				font-size: 15px;
				color: #fff;
				background-color: #169ba5;
				border: none;
				text-transform: none;
				font-weight: 600;
				cursor: pointer
			}

			.fliter-project-expand {
				font-weight: 700;
				background-color: #e5e5e5;
				border-radius: 0
			}

			.fliter-project-expand.collapsed {
				background-color: transparent
			}

			.collection-cta-link.i-want-this-btn.i-want-this-btn-new.project-desk-cta a {
				padding: 15px 30px
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
			.new-collection-show {
				display: none
			}

			.show-more-text {
				font-size: 18px;
				font-weight: 600;
				color: #C85514;
				cursor: pointer
			}

			.show-more-text .arrow-change {
				display: inline-block;
				-moz-transform: rotate(90deg);
				-webkit-transform: rotate(90deg);
				-o-transform: rotate(90deg);
				-ms-transform: rotate(90deg);
				transform: rotate(90deg)
			}

			.collection-slider-img-section {
				position: relative
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

			.project-completed-new {
				align-items: center
			}

			.collection-cta-link.i-want-this-btn {
				text-align: right;
				padding: 20px 0 40px
			}

			.collection-cta-link.i-want-this-btn a {
				font-size: 18px;
				padding: 15px 55px;
				display: inline-block
			}

			.collection-special-features-title .client-testimonial-quote span {
				font-size: 18px;
				line-height: 1.5;
				font-weight: 400
			}

			.collection-special-features-title .client-testimonial-quote .quote-mark {
				font-weight: 600;
				font-size: 60px;
				font-family: "Times New Roman", Georgia, Serif;
				line-height: .6;
				color: rgba(0, 0, 0, .6);
				margin-right: 5px
			}

			blockquote.client-testimonial-quote {
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
				align-items: flex-start
			}

			.project-testimonial-section h2 {
				margin-bottom: 1.2rem
			}

			.project-filter-menu {
				text-align: right;
				margin-left: auto;
				margin-right: 20%
			}

			.project-clear {
				display: inline-block;
				font-size: 16px;
				text-decoration: underline;
				color: #169ba5;
				cursor: pointer
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

			.filter-expand-section-content {
				border-radius: 0;
				background-color: #e5e5e5;
				border: none;
				padding: 20px 10px
			}

			.alm-filters-container .property-type-class {
				display: -webkit-box !important;
				display: -ms-flexbox !important;
				display: flex !important;
				-ms-flex-wrap: initial;
				flex-wrap: initial;
				align-items: center
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox {
				display: inline-block;
				margin: 0
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a:before {
				display: none
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a:after {
				display: none
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a {
				font-size: 18px;
				padding: 10px 15px;
				background-color: #fff;
				margin: 0 8px;
				border: 2px solid #5e5e5e;
				display: inline-block;
				line-height: 1;
				border-radius: 5px;
				font-weight: 500;
				margin-bottom: 10px
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a.active {
				background-color: #5e5e5e;
				color: #fff
			}

			.alm-filters-container .property-type-class .alm-filter--title h3 {
				font-size: 18px;
				font-weight: 600;
				margin: 0;
				padding: 0;
				line-height: 1
			}

			.property-type-class .alm-filter--title {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 14%;
				flex: 0 0 14%;
				max-width: 14%;
				margin-right: 10px
			}

			.alm-filters-container .location-type-class {
				display: -webkit-box !important;
				display: -ms-flexbox !important;
				display: flex !important;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				align-items: center;
				margin-bottom: 0 !important;
				padding-bottom: 0 !important
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox {
				display: inline-block;
				margin: 0
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a:before {
				display: none
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a:after {
				display: none
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a {
				font-size: 18px;
				padding: 10px 15px;
				background-color: #fff;
				margin: 0 8px;
				border: 2px solid #5e5e5e;
				display: inline-block;
				line-height: 1;
				border-radius: 5px;
				font-weight: 500
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a.active {
				background-color: #5e5e5e;
				color: #fff
			}

			.alm-filters-container .location-type-class .alm-filter--title h3 {
				font-size: 18px;
				font-weight: 600;
				margin: 0;
				padding: 0;
				line-height: 1
			}

			.location-type-class .alm-filter--title {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 14%;
				flex: 0 0 14%;
				max-width: 14%;
				margin-right: 10px
			}

			#alm-filters-projectcompletedfilter button[type=button] {
				padding: 0 15px;
				-webkit-border-radius: 3px;
				border-radius: 5px;
				max-width: 100%;
				width: auto;
				height: 42px;
				line-height: 42px;
				font-size: 15px;
				color: #fff;
				background-color: #169ba5;
				border: none;
				text-transform: none;
				font-weight: 600;
				cursor: pointer
			}

			.fliter-project-expand {
				font-weight: 700;
				background-color: #e5e5e5;
				border-radius: 0
			}

			.fliter-project-expand.collapsed {
				background-color: transparent
			}

			.property-type-class>ul {
				text-align: left
			}

			.collection-cta-link.i-want-this-btn.i-want-this-btn-new.project-desk-cta a {
				padding: 15px 30px
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
			.new-collection-show {
				display: none
			}

			.show-more-text {
				font-size: 18px;
				font-weight: 600;
				color: #C85514;
				cursor: pointer
			}

			.show-more-text .arrow-change {
				display: inline-block;
				-moz-transform: rotate(90deg);
				-webkit-transform: rotate(90deg);
				-o-transform: rotate(90deg);
				-ms-transform: rotate(90deg);
				transform: rotate(90deg)
			}

			.collection-slider-img-section {
				position: relative
			}

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

			.project-completed-new {
				align-items: center
			}

			.collection-cta-link.i-want-this-btn {
				text-align: right;
				padding: 20px 0 40px
			}

			.collection-cta-link.i-want-this-btn a {
				font-size: 18px;
				padding: 15px 55px;
				display: inline-block
			}

			.collection-special-features-title .client-testimonial-quote span {
				font-size: 18px;
				line-height: 1.5;
				font-weight: 400
			}

			.collection-special-features-title .client-testimonial-quote .quote-mark {
				font-weight: 600;
				font-size: 60px;
				font-family: "Times New Roman", Georgia, Serif;
				line-height: .6;
				color: rgba(0, 0, 0, .6);
				margin-right: 5px
			}

			blockquote.client-testimonial-quote {
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
				align-items: flex-start
			}

			.project-testimonial-section h2 {
				margin-bottom: 1.2rem
			}

			.project-filter-menu {
				text-align: right;
				margin-left: auto;
				margin-right: 20%
			}

			.project-clear {
				display: inline-block;
				font-size: 16px;
				text-decoration: underline;
				color: #169ba5;
				cursor: pointer
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

			.filter-expand-section-content {
				border-radius: 0;
				background-color: #e5e5e5;
				border: none;
				padding: 20px 10px
			}

			.alm-filters-container .property-type-class {
				display: -webkit-box !important;
				display: -ms-flexbox !important;
				display: flex !important;
				-ms-flex-wrap: initial;
				flex-wrap: initial;
				align-items: flex-start
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox {
				display: inline-block;
				margin: 0
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a:before {
				display: none
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a:after {
				display: none
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a {
				font-size: 18px;
				padding: 10px 15px;
				background-color: #fff;
				margin: 0 8px;
				border: 2px solid #5e5e5e;
				display: inline-block;
				line-height: 1;
				border-radius: 5px;
				font-weight: 500;
				margin-bottom: 10px
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a.active {
				background-color: #5e5e5e;
				color: #fff
			}

			.alm-filters-container .property-type-class .alm-filter--title h3 {
				font-size: 18px;
				font-weight: 600;
				margin: 0;
				padding: 0;
				line-height: 1
			}

			.property-type-class .alm-filter--title {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 20%;
				flex: 0 0 20%;
				max-width: 20%;
				margin-right: 10px;
				padding: 10px 0
			}

			.alm-filters-container .location-type-class {
				display: -webkit-box !important;
				display: -ms-flexbox !important;
				display: flex !important;
				-ms-flex-wrap: initial;
				flex-wrap: initial;
				align-items: flex-start;
				margin-bottom: 0 !important;
				padding-bottom: 0 !important
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox {
				display: inline-block;
				margin: 0
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a:before {
				display: none
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a:after {
				display: none
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a {
				font-size: 18px;
				padding: 10px 15px;
				background-color: #fff;
				margin: 0 8px;
				border: 2px solid #5e5e5e;
				display: inline-block;
				line-height: 1;
				border-radius: 5px;
				font-weight: 500
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a.active {
				background-color: #5e5e5e;
				color: #fff
			}

			.alm-filters-container .location-type-class .alm-filter--title h3 {
				font-size: 18px;
				font-weight: 600;
				margin: 0;
				padding: 0;
				line-height: 1
			}

			.location-type-class .alm-filter--title {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 20%;
				flex: 0 0 20%;
				max-width: 20%;
				margin-right: 10px;
				padding: 10px 0
			}

			#alm-filters-projectcompletedfilter button[type=button] {
				padding: 0 15px;
				-webkit-border-radius: 3px;
				border-radius: 5px;
				max-width: 100%;
				width: auto;
				height: 42px;
				line-height: 42px;
				font-size: 15px;
				color: #fff;
				background-color: #169ba5;
				border: none;
				text-transform: none;
				font-weight: 600;
				cursor: pointer;
				margin-top: 30px
			}

			.fliter-project-expand {
				font-weight: 700;
				background-color: #e5e5e5;
				border-radius: 0
			}

			.fliter-project-expand.collapsed {
				background-color: transparent
			}

			.property-type-class>ul {
				text-align: left
			}

			.location-type-class>ul {
				text-align: left
			}

			.collection-cta-link.i-want-this-btn.i-want-this-btn-new a {
				padding: 15px 30px
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
			.new-collection-show {
				display: none
			}

			.show-more-text {
				font-size: 20px;
				font-weight: 600;
				color: #C85514;
				cursor: pointer
			}

			.show-more-text .arrow-change {
				display: inline-block;
				-moz-transform: rotate(90deg);
				-webkit-transform: rotate(90deg);
				-o-transform: rotate(90deg);
				-ms-transform: rotate(90deg);
				transform: rotate(90deg)
			}

			.collection-slider-img-section {
				position: relative
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

			.project-completed-new {
				align-items: center
			}

			.collection-cta-link.i-want-this-btn {
				text-align: right;
				padding: 20px 0 40px
			}

			.collection-cta-link.i-want-this-btn a {
				font-size: 18px;
				padding: 15px 55px;
				display: inline-block
			}

			.collection-special-features-title .client-testimonial-quote span {
				font-size: 16px;
				line-height: 1.5;
				font-weight: 400
			}

			.collection-special-features-title .client-testimonial-quote .quote-mark {
				font-weight: 600;
				font-size: 46px;
				font-family: "Times New Roman", Georgia, Serif;
				line-height: .6;
				color: rgba(0, 0, 0, .6);
				margin-right: 5px
			}

			blockquote.client-testimonial-quote {
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
				align-items: flex-start
			}

			.project-testimonial-section h2 {
				margin-bottom: 1.2rem
			}

			.project-filter-menu {
				text-align: right;
				margin-left: auto;
				margin-right: 0
			}

			.project-clear {
				display: inline-block;
				font-size: 16px;
				text-decoration: underline;
				color: #169ba5;
				cursor: pointer
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

			.filter-expand-section-content {
				border-radius: 0;
				background-color: #e5e5e5;
				border: none;
				padding: 20px
			}

			.reset-col-section {
				padding-right: 0
			}

			.alm-filters-container .property-type-class {
				display: -webkit-box !important;
				display: -ms-flexbox !important;
				display: flex !important;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				align-items: flex-start
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox {
				display: inline-block;
				margin: 0
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a:before {
				display: none
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a:after {
				display: none
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a {
				font-size: 18px;
				padding: 10px 15px;
				background-color: #fff;
				margin: 0 8px;
				border: 2px solid #5e5e5e;
				display: inline-block;
				line-height: 1;
				border-radius: 5px;
				font-weight: 500;
				margin-bottom: 10px;
				margin-left: 0
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a.active {
				background-color: #5e5e5e;
				color: #fff
			}

			.alm-filters-container .property-type-class .alm-filter--title h3 {
				font-size: 18px;
				font-weight: 600;
				margin: 0;
				padding: 0;
				line-height: 1
			}

			.property-type-class .alm-filter--title {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 100%;
				flex: 0 0 100%;
				max-width: 100%;
				margin-right: 0;
				padding: 10px 0;
				text-align: left
			}

			.alm-filters-container .location-type-class {
				display: -webkit-box !important;
				display: -ms-flexbox !important;
				display: flex !important;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				align-items: center;
				margin-bottom: 0 !important;
				padding-bottom: 0 !important
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox {
				display: inline-block;
				margin: 0
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a:before {
				display: none
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a:after {
				display: none
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a {
				font-size: 18px;
				padding: 10px 15px;
				background-color: #fff;
				margin: 0 8px;
				border: 2px solid #5e5e5e;
				display: inline-block;
				line-height: 1;
				border-radius: 5px;
				font-weight: 500;
				margin-left: 0
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a.active {
				background-color: #5e5e5e;
				color: #fff
			}

			.alm-filters-container .location-type-class .alm-filter--title h3 {
				font-size: 18px;
				font-weight: 600;
				margin: 0;
				padding: 0;
				line-height: 1
			}

			.location-type-class .alm-filter--title {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 100%;
				flex: 0 0 100%;
				max-width: 100%;
				margin-right: 0;
				padding: 10px 0;
				text-align: left
			}

			#alm-filters-projectcompletedfilter button[type=button] {
				padding: 0 15px;
				-webkit-border-radius: 3px;
				border-radius: 5px;
				max-width: 100%;
				width: auto;
				height: 42px;
				line-height: 42px;
				font-size: 15px;
				color: #fff;
				background-color: #169ba5;
				border: none;
				text-transform: none;
				font-weight: 600;
				cursor: pointer;
				margin-top: 30px
			}

			.fliter-project-expand {
				font-weight: 700;
				background-color: #e5e5e5;
				border-radius: 0
			}

			.fliter-project-expand.collapsed {
				background-color: transparent
			}

			.property-type-class>ul {
				text-align: left
			}

			.location-type-class>ul {
				text-align: left
			}

			.collection-cta-link.i-want-this-btn.i-want-this-btn-new a {
				padding: 15px 30px
			}

			.row.collection-listing-section.project-completed-wrap {
				padding-bottom: 40px;
				margin-bottom: 50px;
				background-color: #fff
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
			.new-collection-show {
				display: none
			}

			.show-more-text {
				font-size: 18px;
				font-weight: 600;
				color: #C85514;
				cursor: pointer
			}

			.show-more-text .arrow-change {
				display: inline-block;
				-moz-transform: rotate(90deg);
				-webkit-transform: rotate(90deg);
				-o-transform: rotate(90deg);
				-ms-transform: rotate(90deg);
				transform: rotate(90deg)
			}

			.collection-slider-img-section {
				position: relative
			}

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

			.project-completed-new {
				align-items: center
			}

			.collection-cta-link.i-want-this-btn {
				text-align: right;
				padding: 20px 0 40px
			}

			.collection-cta-link.i-want-this-btn a {
				font-size: 18px;
				padding: 15px 55px;
				display: inline-block
			}

			.collection-special-features-title .client-testimonial-quote span {
				font-size: 14px;
				line-height: 1.5;
				font-weight: 400
			}

			.collection-special-features-title .client-testimonial-quote .quote-mark {
				font-weight: 600;
				font-size: 46px;
				font-family: "Times New Roman", Georgia, Serif;
				line-height: .6;
				color: rgba(0, 0, 0, .6);
				margin-right: 5px
			}

			blockquote.client-testimonial-quote {
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
				align-items: flex-start
			}

			.project-testimonial-section h2 {
				margin-bottom: 1.2rem
			}

			.project-filter-menu {
				text-align: right;
				margin-left: auto;
				margin-right: 20%;
				margin-left: -15px;
				margin-right: -15px
			}

			.project-clear {
				display: inline-block;
				font-size: 16px;
				text-decoration: underline;
				color: #169ba5;
				cursor: pointer
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

			.project-category-description {
				margin-top: 15px
			}

			.filter-expand-section-content {
				border-radius: 0;
				background-color: #e5e5e5;
				border: none;
				padding: 20px
			}

			.alm-filters-container .property-type-class {
				display: -webkit-box !important;
				display: -ms-flexbox !important;
				display: flex !important;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				align-items: flex-start;
				padding-bottom: 0 !important
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox {
				display: inline-block;
				margin: 0
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a:before {
				display: none
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a:after {
				display: none
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a {
				font-size: 18px;
				padding: 10px 15px;
				background-color: #fff;
				margin: 0 8px;
				border: 2px solid #5e5e5e;
				display: inline-block;
				line-height: 1;
				border-radius: 5px;
				font-weight: 500;
				margin-bottom: 10px;
				margin-left: 0
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a.active {
				background-color: #5e5e5e;
				color: #fff
			}

			.alm-filters-container .property-type-class .alm-filter--title h3 {
				font-size: 18px;
				font-weight: 600;
				margin: 0;
				padding: 0;
				line-height: 1
			}

			.property-type-class .alm-filter--title {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 100%;
				flex: 0 0 100%;
				max-width: 100%;
				margin-right: 0;
				padding: 10px 0;
				text-align: left
			}

			.alm-filters-container .location-type-class {
				display: -webkit-box !important;
				display: -ms-flexbox !important;
				display: flex !important;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				align-items: center;
				margin-bottom: 0 !important;
				padding-bottom: 0 !important
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox {
				display: inline-block;
				margin: 0
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a:before {
				display: none
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a:after {
				display: none
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a {
				font-size: 18px;
				padding: 10px 15px;
				background-color: #fff;
				margin: 0 8px;
				border: 2px solid #5e5e5e;
				display: inline-block;
				line-height: 1;
				border-radius: 5px;
				font-weight: 500;
				margin-left: 0;
				margin-bottom: 10px
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a.active {
				background-color: #5e5e5e;
				color: #fff
			}

			.alm-filters-container .location-type-class .alm-filter--title h3 {
				font-size: 18px;
				font-weight: 600;
				margin: 0;
				padding: 0;
				line-height: 1
			}

			.location-type-class .alm-filter--title {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 100%;
				flex: 0 0 100%;
				max-width: 100%;
				margin-right: 0;
				padding: 10px 0;
				text-align: left
			}

			#alm-filters-projectcompletedfilter button[type=button] {
				padding: 0 15px;
				-webkit-border-radius: 3px;
				border-radius: 5px;
				max-width: 100%;
				width: auto;
				height: 42px;
				line-height: 42px;
				font-size: 15px;
				color: #fff;
				background-color: #169ba5;
				border: none;
				text-transform: none;
				font-weight: 600;
				cursor: pointer;
				margin-top: 20px
			}

			.fliter-project-expand {
				font-weight: 700;
				background-color: #e5e5e5;
				border-radius: 0
			}

			.fliter-project-expand.collapsed {
				background-color: transparent
			}

			.property-type-class>ul {
				text-align: left
			}

			.location-type-class>ul {
				text-align: left
			}

			.collection-cta-link.i-want-this-btn.i-want-this-btn-new a {
				padding: 15px 30px
			}

			.row.collection-listing-section.project-completed-wrap {
				padding-bottom: 40px;
				margin-bottom: 50px;
				background-color: #fff
			}

			.collection-cta-link.i-want-this-btn.i-want-this-btn-new {
				padding: 0;
				text-align: center;
				margin-top: 20px
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
			.new-collection-show {
				display: none
			}

			div#noty-holder {
				display: none;
				height: 0
			}

			.show-more-text {
				font-size: 14px;
				font-weight: 600;
				color: #C85514;
				cursor: pointer
			}

			.show-more-text .arrow-change {
				display: inline-block;
				-moz-transform: rotate(90deg);
				-webkit-transform: rotate(90deg);
				-o-transform: rotate(90deg);
				-ms-transform: rotate(90deg);
				transform: rotate(90deg)
			}

			.collection-slider-img-section {
				position: relative
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

			.project-completed-new {
				align-items: center
			}

			.collection-cta-link.i-want-this-btn {
				text-align: right;
				padding: 20px 0 40px
			}

			.collection-cta-link.i-want-this-btn a {
				font-size: 18px;
				padding: 15px 55px;
				display: inline-block
			}

			.collection-special-features-title .client-testimonial-quote span {
				font-size: 14px;
				line-height: 1.5;
				font-weight: 400
			}

			.collection-special-features-title .client-testimonial-quote .quote-mark {
				font-weight: 600;
				font-size: 46px;
				font-family: "Times New Roman", Georgia, Serif;
				line-height: .6;
				color: rgba(0, 0, 0, .6);
				margin-right: 5px
			}

			blockquote.client-testimonial-quote {
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
				align-items: flex-start
			}

			.project-testimonial-section h2 {
				margin-bottom: 1.2rem
			}

			.project-filter-menu {
				text-align: right;
				margin-left: auto;
				margin-right: 20%;
				margin-left: -15px;
				margin-right: -15px
			}

			.project-clear {
				display: inline-block;
				font-size: 14px;
				text-decoration: underline;
				color: #169ba5;
				cursor: pointer
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

			.filter-expand-section-content {
				border-radius: 0;
				background-color: #e5e5e5;
				border: none;
				padding: 20px
			}

			.project-category-description {
				margin-top: 15px
			}

			.alm-filters-container .property-type-class {
				display: -webkit-box !important;
				display: -ms-flexbox !important;
				display: flex !important;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				align-items: flex-start;
				padding-bottom: 0 !important;
				margin: 5px 0 !important
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox {
				display: inline-block;
				margin: 0
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a:before {
				display: none
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a:after {
				display: none
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a {
				font-size: 14px;
				padding: 10px 15px;
				background-color: #fff;
				margin: 0 8px;
				border: 2px solid #5e5e5e;
				display: inline-block;
				line-height: 1;
				border-radius: 5px;
				font-weight: 500;
				margin-bottom: 10px;
				margin-left: 0
			}

			.alm-filters-container .property-type-class .alm-filter--checkbox a.active {
				background-color: #5e5e5e;
				color: #fff
			}

			.alm-filters-container .property-type-class .alm-filter--title h3 {
				font-size: 16px;
				font-weight: 600;
				margin: 0;
				padding: 0;
				line-height: 1
			}

			.property-type-class .alm-filter--title {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 100%;
				flex: 0 0 100%;
				max-width: 100%;
				margin-right: 0;
				padding: 10px 0;
				text-align: left;
				padding-top: 0
			}

			.alm-filters-container .location-type-class {
				display: -webkit-box !important;
				display: -ms-flexbox !important;
				display: flex !important;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				align-items: center;
				margin-bottom: 0 !important;
				padding-bottom: 0 !important
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox {
				display: inline-block;
				margin: 0
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a:before {
				display: none
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a:after {
				display: none
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a {
				font-size: 14px;
				padding: 10px 15px;
				background-color: #fff;
				margin: 0 8px;
				border: 2px solid #5e5e5e;
				display: inline-block;
				line-height: 1;
				border-radius: 5px;
				font-weight: 500;
				margin-left: 0;
				margin-bottom: 10px
			}

			.alm-filters-container .location-type-class .alm-filter--checkbox a.active {
				background-color: #5e5e5e;
				color: #fff
			}

			.alm-filters-container .location-type-class .alm-filter--title h3 {
				font-size: 16px;
				font-weight: 600;
				margin: 0;
				padding: 0;
				line-height: 1
			}

			.location-type-class .alm-filter--title {
				-webkit-box-flex: 0;
				-ms-flex: 0 0 100%;
				flex: 0 0 100%;
				max-width: 100%;
				margin-right: 0;
				padding: 10px 0;
				text-align: left;
				padding-top: 0
			}

			#alm-filters-projectcompletedfilter button[type=button] {
				padding: 0 15px;
				-webkit-border-radius: 3px;
				border-radius: 5px;
				max-width: 100%;
				width: auto;
				height: 42px;
				line-height: 42px;
				font-size: 14px;
				color: #fff;
				background-color: #169ba5;
				border: none;
				text-transform: none;
				font-weight: 600;
				cursor: pointer;
				margin-top: 5px
			}

			.fliter-project-expand {
				font-weight: 700;
				background-color: #e5e5e5;
				border-radius: 0;
				font-size: 14px
			}

			.fliter-project-expand.collapsed {
				background-color: transparent
			}

			.property-type-class>ul {
				text-align: left
			}

			.location-type-class>ul {
				text-align: left
			}

			.collection-cta-link.i-want-this-btn.i-want-this-btn-new a {
				padding: 15px 30px;
				font-size: 14px
			}

			.row.collection-listing-section.project-completed-wrap {
				padding-bottom: 30px;
				margin-bottom: 40px;
				background-color: #fff
			}

			.collection-cta-link.i-want-this-btn.i-want-this-btn-new {
				padding: 0;
				text-align: center;
				margin-top: 20px
			}

			.custom-dot-navigation .owl-dots .owl-dot.active span,
			.custom-dot-navigation .owl-dots .owl-dot:hover span {
				background: grey
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

		@media (min-width:1024px) {
			.project-mob-cta {
				display: none
			}
		}

		@media (max-width:1023px) {
			.project-desk-cta {
				display: none
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
			background: var(--wpr-bg-aa2b12e0-7579-4ebd-b00a-51f61bd68976) 15px center no-repeat;
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
			background: var(--wpr-bg-b6dcbd4c-6d00-46d5-bc19-8c0970efc3af) right no-repeat;
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

		.location-type-class .alm-filter--title p {
			margin-bottom: 0;
			font-weight: 700
		}

		.property-type-class .alm-filter--title p {
			margin-bottom: 0;
			font-weight: 700
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

		#alm-selected-filters {
			padding: 0 0 15px;
			margin: 0
		}

		#alm-selected-filters li {
			display: inline-block;
			margin: 0 5px 5px 0;
			padding: 0;
			list-style: none;
			background: 0 0
		}

		#alm-selected-filters li div {
			display: block;
			padding: 5px 10px;
			-webkit-border-radius: 2px;
			border-radius: 2px;
			background: #efefef;
			border: 1px solid #e7e7e7;
			color: #666;
			font-size: 13px;
			text-decoration: none;
			line-height: 1.1;
			cursor: pointer;
			outline: 0
		}

		#alm-selected-filters li div,
		#alm-selected-filters li div:before {
			-webkit-transition: .15s;
			-o-transition: .15s;
			transition: all .15s ease
		}

		#alm-selected-filters li div:before {
			content: "\D7";
			display: inline-block;
			vertical-align: top;
			margin: 0 4px 0 0;
			opacity: .3;
			color: #222;
			position: relative;
			left: -2px;
			text-shadow: 0 1px 1px hsla(0, 0%, 100%, .5)
		}

		#alm-selected-filters li div:focus,
		#alm-selected-filters li div:hover {
			background-color: #efefef;
			border-color: #ccc;
			color: #222;
			-webkit-box-shadow: 0 0 0 3px rgba(0, 0, 0, .075);
			box-shadow: 0 0 0 3px rgba(0, 0, 0, .075)
		}

		#alm-selected-filters li div:focus:before,
		#alm-selected-filters li div:hover:before {
			opacity: 1
		}

		.alm-range-slider--label,
		.alm-range-slider--reset {
			font-size: 14px;
			padding: 5px 0;
			line-height: 1
		}

		.alm-range-slider--reset {
			display: inline-block;
			-ms-flex-item-align: end;
			align-self: flex-end
		}

		.alm-filters:after {
			content: "";
			display: table;
			clear: both
		}

		.alm-filters-container {
			margin: 0;
			padding: 0;
			position: relative;
			-webkit-transition: opacity .25s;
			-o-transition: opacity .25s;
			transition: opacity .25s ease;
			margin-bottom: 20px
		}

		.alm-filters-container *,
		.alm-filters-container :after,
		.alm-filters-container :before {
			-webkit-box-sizing: border-box;
			box-sizing: border-box
		}

		.alm-filters-container.alm-filters-facets-loaded {
			opacity: 1;
			pointer-events: unset;
			cursor: unset
		}

		.alm-filters-container .alm-filter {
			display: block
		}

		.alm-filters-container .alm-filter.hidden {
			display: none
		}

		.alm-filters-container .alm-filter--inner {
			padding: 0 0 20px
		}

		.alm-filters-container .alm-filter label {
			font-weight: 600;
			font-size: 15px;
			display: block;
			margin: 0 0 10px;
			padding: 0;
			cursor: pointer
		}

		.alm-filters-container .alm-filter[data-fieldtype=range_slider] label,
		.alm-filters-container .alm-filter[data-fieldtype=text] label {
			display: block
		}

		.alm-filters-container .alm-filter ul {
			padding: 0;
			margin: 0
		}

		.alm-filters-container .alm-filter ul ul {
			padding-top: 5px;
			padding-left: 10px
		}

		.alm-filters-container .alm-filter li {
			padding: 0;
			margin: 0 0 5px;
			list-style: none;
			content: "";
			line-height: 1;
			display: block;
			clear: both;
			position: relative;
			background: 0 0
		}

		.alm-filters-container .alm-filter li div.alm-filter--link {
			display: block;
			padding: 0 10px 0 28px;
			min-height: 24px;
			line-height: 1.45;
			font-size: 15px;
			position: relative;
			text-decoration: none;
			color: #666;
			cursor: pointer
		}

		.alm-filters-container .alm-filter li div.alm-filter--link.disabled {
			opacity: .5;
			cursor: not-allowed;
			pointer-events: none
		}

		.alm-filters-container .alm-filter li div.alm-filter--link:before {
			position: absolute;
			left: 0;
			top: 0;
			width: 20px;
			height: 20px;
			background: #fff;
			border: 1px solid #ccc;
			display: block;
			content: "";
			-webkit-transition: .15s;
			-o-transition: .15s;
			transition: all .15s ease;
			-webkit-box-shadow: 0 0 0 1px transparent;
			box-shadow: 0 0 0 1px transparent
		}

		.alm-filters-container .alm-filter li div.alm-filter--link:after {
			position: absolute;
			display: block;
			content: "";
			z-index: 1;
			opacity: 0;
			visibility: hidden
		}

		.alm-filters-container .alm-filter li div.alm-filter--link:focus,
		.alm-filters-container .alm-filter li div.alm-filter--link:hover {
			color: #222;
			outline: 0
		}

		.alm-filters-container .alm-filter li div.alm-filter--link:focus:before,
		.alm-filters-container .alm-filter li div.alm-filter--link:hover:before {
			border-color: #898989;
			-webkit-box-shadow: 0 0 0 3px rgba(0, 0, 0, .075);
			box-shadow: 0 0 0 3px rgba(0, 0, 0, .075)
		}

		.alm-filters-container .alm-filter li div.alm-filter--link .alm-filter-counter {
			display: inline-block;
			padding: 1px 5px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			background-color: #f7f7f7;
			font-size: 13px;
			margin: 0 0 0 5px
		}

		.alm-filters-container .alm-filter li div.alm-filter--link.field-checkbox:before {
			-webkit-border-radius: 2px;
			border-radius: 2px
		}

		.alm-filters-container .alm-filter li div.alm-filter--link.field-checkbox:after {
			left: 7px;
			top: 3px;
			width: 6px;
			height: 11px;
			border: solid #fff;
			border-width: 0 3px 3px 0;
			-ms-transform: rotate(45deg);
			-webkit-transform: rotate(45deg);
			transform: rotate(45deg)
		}

		.alm-filters-container .alm-filter li div.alm-filter--link.active {
			color: #222
		}

		.alm-filters-container .alm-filter li div.alm-filter--link.active.field-checkbox:before {
			border-color: #898989;
			background-color: #898989
		}

		.alm-filters-container .alm-filter li div.alm-filter--link.active.field-checkbox:after {
			visibility: visible;
			opacity: 1
		}

		.alm-filters-container .alm-filter--title h3 {
			font-size: 18px;
			font-weight: 600;
			margin: 0 0 20px;
			padding: 0;
			line-height: 1.15
		}

		.alm-filters-container .alm-filter--title .alm-filter--toggle {
			position: relative;
			padding: 10px 20px 10px 0;
			margin: 0 0 10px;
			cursor: pointer;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none
		}

		.alm-filters-container .alm-filter--title .alm-filter--toggle:after {
			top: calc(50% - 3px);
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
			right: 10px;
			border: solid transparent;
			content: "";
			height: 0;
			width: 0;
			position: absolute;
			pointer-events: none;
			border-color: rgba(136, 183, 213, 0);
			border-bottom-color: #898989;
			border-width: 6px;
			margin-left: -6px
		}

		.alm-filters-container .alm-filter--title .alm-filter--toggle:hover:after {
			border-bottom-color: #565656
		}

		.alm-filters-container .alm-filter--title .alm-filter--toggle[aria-expanded=false]:after {
			border: solid transparent;
			border-top-color: #898989;
			border-width: 6px;
			top: calc(50% + 3px)
		}

		.alm-filters-container .alm-filter--title .alm-filter--toggle[aria-expanded=false]:hover:after {
			border-top-color: #565656
		}

		.alm-filters-container .alm-star--feedback {
			font-size: 14px;
			padding: 4px 6px 2px;
			font-style: italic;
			font-weight: 600
		}

		.alm-filters-container button[type=button],
		.alm-filters-container button[type=reset] {
			font-size: 15px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			border: none;
			text-transform: none;
			font-weight: 600;
			cursor: pointer;
			max-width: 100%;
			width: auto;
			height: 40px;
			line-height: 40px;
			padding: 0 15px;
			margin: 0
		}

		.alm-filters-container button[type=button] {
			color: #fff;
			background-color: #898989
		}

		.alm-filters-container button[type=button]:focus,
		.alm-filters-container button[type=button]:hover {
			color: #fff;
			background-color: #565656
		}

		.alm-filters-container button[type=reset] {
			font-size: 13px;
			font-weight: 400;
			height: 30px;
			line-height: 30px;
			color: #898989;
			background-color: transparent;
			padding: 0 3px
		}

		.alm-filters-container button[type=reset]:focus,
		.alm-filters-container button[type=reset]:hover {
			color: #565656;
			background-color: transparent
		}

		.alm-filters-container button[type=reset].hidden {
			display: none
		}

		.alm-filters-container.filtering {
			opacity: .6
		}

		.alm-filters-container.filtering .alm-filters--loading {
			display: block;
			cursor: default !important
		}

		.alm-filters-container .alm-filters--controls {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-pack: justify;
			-ms-flex-pack: justify;
			justify-content: space-between;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			width: 100%;
			margin: 0 0 15px
		}

		.alm-filters-container .alm-filters--submit {
			margin: 0 15px 0 0
		}

		.alm-filters-container .alm-filters--loading {
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			z-index: 1000;
			display: none
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

		@media (min-width:1100px) {
			.collection-slider-img-section {
				height: auto
			}
		}

		.owl-std-navigation .owl-dots {
			bottom: -15px !important
		}

		.custom-dot-navigation .owl-dots .owl-dot span {
			border-color: #000
		}

		.custom-dot-navigation .owl-dots .owl-dot.active span {
			background: #000
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
    <div class="container-fluid offer-section-row">
    <div class="row">
        <div class="col-md-12 offer-section-col">

            <div class="offer-section-main">
            </div>
        </div>
    </div>
</div>
<style type="text/css"></style>
<style type="text/css" id="wp-custom-css"></style>
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
				--wpr-bg-2d1d36c5-bdd3-45a4-8f78-01981c6f7770: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite.png');
			}

			div.pp_default .pp_top .pp_middle {
				--wpr-bg-07a25dcb-95f3-46e6-a4a2-2e0c390876f9: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite_x.png');
			}

			div.pp_default .pp_top .pp_right {
				--wpr-bg-e495cf6b-589a-46d5-a8eb-e57a4396c5c6: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite.png');
			}

			div.pp_default .pp_content_container .pp_left {
				--wpr-bg-990bf1b7-efae-4ac1-8e6c-c3c3ead9de66: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite_y.png');
			}

			div.pp_default .pp_content_container .pp_right {
				--wpr-bg-2ecd0ef2-4c31-4c04-aba7-34f7021c7b30: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite_y.png');
			}

			div.pp_default .pp_next:hover {
				--wpr-bg-b0483f29-2dd7-49cf-b30a-cba0054b1d55: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite_next.png');
			}

			div.pp_default .pp_previous:hover {
				--wpr-bg-3287d862-884a-41c0-aa21-c2cd7eb2d078: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite_prev.png');
			}

			div.pp_default .pp_expand {
				--wpr-bg-06f1dfc2-d82d-435f-9754-ac4faa18711f: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite.png');
			}

			div.pp_default .pp_expand:hover {
				--wpr-bg-fd0715c8-7b53-4ade-93e3-77d0059e48d7: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite.png');
			}

			div.pp_default .pp_contract {
				--wpr-bg-e7aed686-faf0-4e71-b2c3-272d51ae9e7f: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite.png');
			}

			div.pp_default .pp_contract:hover {
				--wpr-bg-8e88859e-c241-4dd0-bc23-00b5cccf075e: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite.png');
			}

			div.pp_default .pp_close {
				--wpr-bg-7f8f3345-3d0a-4091-bf42-ae7adb351cbd: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite.png');
			}

			div.pp_default .pp_gallery ul li a {
				--wpr-bg-f00b7b9d-b477-4ca7-9d19-11ba7cf505bc: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/default_thumb.png');
			}

			div.pp_default .pp_nav .pp_pause,
			div.pp_default .pp_nav .pp_play {
				--wpr-bg-604d5e94-ad6a-480a-8b00-ac3944bdff03: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite.png');
			}

			div.pp_default a.pp_arrow_next,
			div.pp_default a.pp_arrow_previous {
				--wpr-bg-3aa7716f-c493-4969-9d4a-eb0aec567af9: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite.png');
			}

			div.pp_default .pp_bottom .pp_left {
				--wpr-bg-371bdb3e-0c68-454e-8b84-7d51d418bf2e: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite.png');
			}

			div.pp_default .pp_bottom .pp_middle {
				--wpr-bg-55353e47-2923-4af7-b1aa-0f25f6a6f219: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite_x.png');
			}

			div.pp_default .pp_bottom .pp_right {
				--wpr-bg-d196b8c0-baa6-4603-83e2-ca4818000860: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/sprite.png');
			}

			div.pp_default .pp_loaderIcon {
				--wpr-bg-eb1aeaa7-4b32-4cc7-bb1d-b924cc304b50: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/default/loader.gif');
			}

			div.facebook .pp_top .pp_left {
				--wpr-bg-74ad4fc0-b7f3-40aa-a135-b7b366ca9b1f: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
			}

			div.facebook .pp_top .pp_middle {
				--wpr-bg-09d2cd32-e931-4c0b-bd8b-3bba138d05dc: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/contentPatternTop.png');
			}

			div.facebook .pp_top .pp_right {
				--wpr-bg-ee90ae80-775a-431a-8052-a3d799fd5cea: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
			}

			div.facebook .pp_content_container .pp_left {
				--wpr-bg-47ffa6bd-9a47-4fa0-b17d-31e7d1f74497: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/contentPatternLeft.png');
			}

			div.facebook .pp_content_container .pp_right {
				--wpr-bg-7b6e015a-f86b-43fd-b88c-4fc35580f1e8: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/contentPatternRight.png');
			}

			div.facebook .pp_expand {
				--wpr-bg-dc0aad2d-21bd-48b9-80c1-5a0a1609009c: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
			}

			div.facebook .pp_expand:hover {
				--wpr-bg-5ab58625-8465-4f35-b28a-c260ecf4a3ff: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
			}

			div.facebook .pp_contract {
				--wpr-bg-fdf942e6-5a10-470e-852f-cb150ed63d23: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
			}

			div.facebook .pp_contract:hover {
				--wpr-bg-e7e145a0-7224-4583-bd06-8a094738769e: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
			}

			div.facebook .pp_close {
				--wpr-bg-8b6fe086-f489-45ed-bfd3-3043a36d35b9: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
			}

			div.facebook .pp_loaderIcon {
				--wpr-bg-f9f20842-63c9-4659-b33c-7b37dad8179d: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/loader.gif');
			}

			div.facebook .pp_arrow_previous {
				--wpr-bg-8032e854-802f-4e4b-bdac-c7a2cd152d01: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
			}

			div.facebook .pp_arrow_next {
				--wpr-bg-3fadb026-47b2-4c2e-bdf7-ee74a07f6b63: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
			}

			div.facebook .pp_nav .pp_play {
				--wpr-bg-858d1866-ca05-4a23-b1bf-772b8b30e940: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
			}

			div.facebook .pp_nav .pp_pause {
				--wpr-bg-f5d9bffc-e363-411f-855c-d3f347006b1b: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
			}

			div.facebook .pp_next:hover {
				--wpr-bg-93980afd-5eed-4483-a0ac-5ead3a05f6c3: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/btnNext.png');
			}

			div.facebook .pp_previous:hover {
				--wpr-bg-e05c0309-4fc0-49c1-a19e-09716cc2e1d7: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/btnPrevious.png');
			}

			div.facebook .pp_bottom .pp_left {
				--wpr-bg-d44b13aa-7aa8-41d3-87cd-c27141f873be: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
			}

			div.facebook .pp_bottom .pp_middle {
				--wpr-bg-65dcb800-f1c6-4ae7-b8de-d638be972943: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/contentPatternBottom.png');
			}

			div.facebook .pp_bottom .pp_right {
				--wpr-bg-ab5d968d-db84-473d-b2cb-aca76c0691b6: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/sprite.png');
			}

			.pp_gallery li.default a {
				--wpr-bg-6c602d33-3979-41ab-bbd5-b1631a029f9b: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/facebook/default_thumbnail.gif');
			}

			a.pp_next {
				--wpr-bg-f41104cc-0335-4da5-bf0e-f6da9f74fd7f: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/light_rounded/btnNext.png');
			}

			a.pp_previous {
				--wpr-bg-8724bb27-5536-4420-8dab-613a011fba72: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/images/prettyPhoto/light_rounded/btnNext.png');
			}

			.owl-carousel .owl-video-play-icon {
				--wpr-bg-6d5e9bad-fd83-40b1-93a9-5875caaf2289: url('https://www.thecreativewalls.in/wp-content/themes/designcafe/css/owl.video.play.png');
			}

			.open-btn1.btnactive {
				--wpr-bg-aa2b12e0-7579-4ebd-b00a-51f61bd68976: url('../wp-content/themes/designcafe/images/icon_search.svg');
			}

			#search-wrap input[type=submit] {
				--wpr-bg-b6dcbd4c-6d00-46d5-bc19-8c0970efc3af: url('../wp-content/themes/designcafe/images/icon_search.svg');
			}

			.iti__flag {
				--wpr-bg-e7505fe2-bfed-47da-a22d-0850b4a3b78c: url('../ajax/libs/intl-tel-input/17.0.8/img/flags.png');
			}

			.iti__flag {
				--wpr-bg-dcf88330-bc4e-455b-9d93-d330013569c8: url('../ajax/libs/intl-tel-input/17.0.8/img/flags@2x.png');
			}

			button.loading {
				--wpr-bg-496080c2-8787-480d-b897-1c1c3623720f: url('../wp-content/uploads/2021/10/20190133/ajax-loader.gif');
			}

			button.loading {
				--wpr-bg-75fbf62f-510e-48dc-a319-2fa56244fd69: url('../wp-content/uploads/2021/10/20190133/ajax-loader.gif');
			}

			.rll-youtube-player .play {
				--wpr-bg-8b308528-b75f-49b4-9c95-dbe3490f8266: url('../wp-content/plugins/wp-rocket/assets/img/youtube.png');
			}
		</style>
	</noscript>
	<script type="application/javascript">
		const rocket_pairs = [{ "selector": "div.pp_default .pp_top .pp_left", "style": "div.pp_default .pp_top .pp_left{--wpr-bg-2d1d36c5-bdd3-45a4-8f78-01981c6f7770: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png');}", "hash": "2d1d36c5-bdd3-45a4-8f78-01981c6f7770", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png" }, { "selector": "div.pp_default .pp_top .pp_middle", "style": "div.pp_default .pp_top .pp_middle{--wpr-bg-07a25dcb-95f3-46e6-a4a2-2e0c390876f9: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite_x.png');}", "hash": "07a25dcb-95f3-46e6-a4a2-2e0c390876f9", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite_x.png" }, { "selector": "div.pp_default .pp_top .pp_right", "style": "div.pp_default .pp_top .pp_right{--wpr-bg-e495cf6b-589a-46d5-a8eb-e57a4396c5c6: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png');}", "hash": "e495cf6b-589a-46d5-a8eb-e57a4396c5c6", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png" }, { "selector": "div.pp_default .pp_content_container .pp_left", "style": "div.pp_default .pp_content_container .pp_left{--wpr-bg-990bf1b7-efae-4ac1-8e6c-c3c3ead9de66: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite_y.png');}", "hash": "990bf1b7-efae-4ac1-8e6c-c3c3ead9de66", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite_y.png" }, { "selector": "div.pp_default .pp_content_container .pp_right", "style": "div.pp_default .pp_content_container .pp_right{--wpr-bg-2ecd0ef2-4c31-4c04-aba7-34f7021c7b30: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite_y.png');}", "hash": "2ecd0ef2-4c31-4c04-aba7-34f7021c7b30", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite_y.png" }, { "selector": "div.pp_default .pp_next", "style": "div.pp_default .pp_next:hover{--wpr-bg-b0483f29-2dd7-49cf-b30a-cba0054b1d55: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite_next.png');}", "hash": "b0483f29-2dd7-49cf-b30a-cba0054b1d55", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite_next.png" }, { "selector": "div.pp_default .pp_previous", "style": "div.pp_default .pp_previous:hover{--wpr-bg-3287d862-884a-41c0-aa21-c2cd7eb2d078: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite_prev.png');}", "hash": "3287d862-884a-41c0-aa21-c2cd7eb2d078", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite_prev.png" }, { "selector": "div.pp_default .pp_expand", "style": "div.pp_default .pp_expand{--wpr-bg-06f1dfc2-d82d-435f-9754-ac4faa18711f: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png');}", "hash": "06f1dfc2-d82d-435f-9754-ac4faa18711f", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png" }, { "selector": "div.pp_default .pp_expand", "style": "div.pp_default .pp_expand:hover{--wpr-bg-fd0715c8-7b53-4ade-93e3-77d0059e48d7: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png');}", "hash": "fd0715c8-7b53-4ade-93e3-77d0059e48d7", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png" }, { "selector": "div.pp_default .pp_contract", "style": "div.pp_default .pp_contract{--wpr-bg-e7aed686-faf0-4e71-b2c3-272d51ae9e7f: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png');}", "hash": "e7aed686-faf0-4e71-b2c3-272d51ae9e7f", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png" }, { "selector": "div.pp_default .pp_contract", "style": "div.pp_default .pp_contract:hover{--wpr-bg-8e88859e-c241-4dd0-bc23-00b5cccf075e: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png');}", "hash": "8e88859e-c241-4dd0-bc23-00b5cccf075e", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png" }, { "selector": "div.pp_default .pp_close", "style": "div.pp_default .pp_close{--wpr-bg-7f8f3345-3d0a-4091-bf42-ae7adb351cbd: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png');}", "hash": "7f8f3345-3d0a-4091-bf42-ae7adb351cbd", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png" }, { "selector": "div.pp_default .pp_gallery ul li a", "style": "div.pp_default .pp_gallery ul li a{--wpr-bg-f00b7b9d-b477-4ca7-9d19-11ba7cf505bc: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/default_thumb.png');}", "hash": "f00b7b9d-b477-4ca7-9d19-11ba7cf505bc", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/default_thumb.png" }, { "selector": "div.pp_default .pp_nav .pp_pause,div.pp_default .pp_nav .pp_play", "style": "div.pp_default .pp_nav .pp_pause,div.pp_default .pp_nav .pp_play{--wpr-bg-604d5e94-ad6a-480a-8b00-ac3944bdff03: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png');}", "hash": "604d5e94-ad6a-480a-8b00-ac3944bdff03", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png" }, { "selector": "div.pp_default a.pp_arrow_next,div.pp_default a.pp_arrow_previous", "style": "div.pp_default a.pp_arrow_next,div.pp_default a.pp_arrow_previous{--wpr-bg-3aa7716f-c493-4969-9d4a-eb0aec567af9: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png');}", "hash": "3aa7716f-c493-4969-9d4a-eb0aec567af9", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png" }, { "selector": "div.pp_default .pp_bottom .pp_left", "style": "div.pp_default .pp_bottom .pp_left{--wpr-bg-371bdb3e-0c68-454e-8b84-7d51d418bf2e: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png');}", "hash": "371bdb3e-0c68-454e-8b84-7d51d418bf2e", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png" }, { "selector": "div.pp_default .pp_bottom .pp_middle", "style": "div.pp_default .pp_bottom .pp_middle{--wpr-bg-55353e47-2923-4af7-b1aa-0f25f6a6f219: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite_x.png');}", "hash": "55353e47-2923-4af7-b1aa-0f25f6a6f219", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite_x.png" }, { "selector": "div.pp_default .pp_bottom .pp_right", "style": "div.pp_default .pp_bottom .pp_right{--wpr-bg-d196b8c0-baa6-4603-83e2-ca4818000860: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png');}", "hash": "d196b8c0-baa6-4603-83e2-ca4818000860", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/sprite.png" }, { "selector": "div.pp_default .pp_loaderIcon", "style": "div.pp_default .pp_loaderIcon{--wpr-bg-eb1aeaa7-4b32-4cc7-bb1d-b924cc304b50: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/loader.gif');}", "hash": "eb1aeaa7-4b32-4cc7-bb1d-b924cc304b50", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/default\/loader.gif" }, { "selector": "div.facebook .pp_top .pp_left", "style": "div.facebook .pp_top .pp_left{--wpr-bg-74ad4fc0-b7f3-40aa-a135-b7b366ca9b1f: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png');}", "hash": "74ad4fc0-b7f3-40aa-a135-b7b366ca9b1f", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png" }, { "selector": "div.facebook .pp_top .pp_middle", "style": "div.facebook .pp_top .pp_middle{--wpr-bg-09d2cd32-e931-4c0b-bd8b-3bba138d05dc: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/contentPatternTop.png');}", "hash": "09d2cd32-e931-4c0b-bd8b-3bba138d05dc", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/contentPatternTop.png" }, { "selector": "div.facebook .pp_top .pp_right", "style": "div.facebook .pp_top .pp_right{--wpr-bg-ee90ae80-775a-431a-8052-a3d799fd5cea: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png');}", "hash": "ee90ae80-775a-431a-8052-a3d799fd5cea", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png" }, { "selector": "div.facebook .pp_content_container .pp_left", "style": "div.facebook .pp_content_container .pp_left{--wpr-bg-47ffa6bd-9a47-4fa0-b17d-31e7d1f74497: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/contentPatternLeft.png');}", "hash": "47ffa6bd-9a47-4fa0-b17d-31e7d1f74497", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/contentPatternLeft.png" }, { "selector": "div.facebook .pp_content_container .pp_right", "style": "div.facebook .pp_content_container .pp_right{--wpr-bg-7b6e015a-f86b-43fd-b88c-4fc35580f1e8: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/contentPatternRight.png');}", "hash": "7b6e015a-f86b-43fd-b88c-4fc35580f1e8", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/contentPatternRight.png" }, { "selector": "div.facebook .pp_expand", "style": "div.facebook .pp_expand{--wpr-bg-dc0aad2d-21bd-48b9-80c1-5a0a1609009c: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png');}", "hash": "dc0aad2d-21bd-48b9-80c1-5a0a1609009c", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png" }, { "selector": "div.facebook .pp_expand", "style": "div.facebook .pp_expand:hover{--wpr-bg-5ab58625-8465-4f35-b28a-c260ecf4a3ff: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png');}", "hash": "5ab58625-8465-4f35-b28a-c260ecf4a3ff", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png" }, { "selector": "div.facebook .pp_contract", "style": "div.facebook .pp_contract{--wpr-bg-fdf942e6-5a10-470e-852f-cb150ed63d23: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png');}", "hash": "fdf942e6-5a10-470e-852f-cb150ed63d23", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png" }, { "selector": "div.facebook .pp_contract", "style": "div.facebook .pp_contract:hover{--wpr-bg-e7e145a0-7224-4583-bd06-8a094738769e: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png');}", "hash": "e7e145a0-7224-4583-bd06-8a094738769e", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png" }, { "selector": "div.facebook .pp_close", "style": "div.facebook .pp_close{--wpr-bg-8b6fe086-f489-45ed-bfd3-3043a36d35b9: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png');}", "hash": "8b6fe086-f489-45ed-bfd3-3043a36d35b9", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png" }, { "selector": "div.facebook .pp_loaderIcon", "style": "div.facebook .pp_loaderIcon{--wpr-bg-f9f20842-63c9-4659-b33c-7b37dad8179d: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/loader.gif');}", "hash": "f9f20842-63c9-4659-b33c-7b37dad8179d", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/loader.gif" }, { "selector": "div.facebook .pp_arrow_previous", "style": "div.facebook .pp_arrow_previous{--wpr-bg-8032e854-802f-4e4b-bdac-c7a2cd152d01: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png');}", "hash": "8032e854-802f-4e4b-bdac-c7a2cd152d01", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png" }, { "selector": "div.facebook .pp_arrow_next", "style": "div.facebook .pp_arrow_next{--wpr-bg-3fadb026-47b2-4c2e-bdf7-ee74a07f6b63: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png');}", "hash": "3fadb026-47b2-4c2e-bdf7-ee74a07f6b63", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png" }, { "selector": "div.facebook .pp_nav .pp_play", "style": "div.facebook .pp_nav .pp_play{--wpr-bg-858d1866-ca05-4a23-b1bf-772b8b30e940: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png');}", "hash": "858d1866-ca05-4a23-b1bf-772b8b30e940", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png" }, { "selector": "div.facebook .pp_nav .pp_pause", "style": "div.facebook .pp_nav .pp_pause{--wpr-bg-f5d9bffc-e363-411f-855c-d3f347006b1b: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png');}", "hash": "f5d9bffc-e363-411f-855c-d3f347006b1b", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png" }, { "selector": "div.facebook .pp_next", "style": "div.facebook .pp_next:hover{--wpr-bg-93980afd-5eed-4483-a0ac-5ead3a05f6c3: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/btnNext.png');}", "hash": "93980afd-5eed-4483-a0ac-5ead3a05f6c3", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/btnNext.png" }, { "selector": "div.facebook .pp_previous", "style": "div.facebook .pp_previous:hover{--wpr-bg-e05c0309-4fc0-49c1-a19e-09716cc2e1d7: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/btnPrevious.png');}", "hash": "e05c0309-4fc0-49c1-a19e-09716cc2e1d7", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/btnPrevious.png" }, { "selector": "div.facebook .pp_bottom .pp_left", "style": "div.facebook .pp_bottom .pp_left{--wpr-bg-d44b13aa-7aa8-41d3-87cd-c27141f873be: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png');}", "hash": "d44b13aa-7aa8-41d3-87cd-c27141f873be", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png" }, { "selector": "div.facebook .pp_bottom .pp_middle", "style": "div.facebook .pp_bottom .pp_middle{--wpr-bg-65dcb800-f1c6-4ae7-b8de-d638be972943: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/contentPatternBottom.png');}", "hash": "65dcb800-f1c6-4ae7-b8de-d638be972943", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/contentPatternBottom.png" }, { "selector": "div.facebook .pp_bottom .pp_right", "style": "div.facebook .pp_bottom .pp_right{--wpr-bg-ab5d968d-db84-473d-b2cb-aca76c0691b6: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png');}", "hash": "ab5d968d-db84-473d-b2cb-aca76c0691b6", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/sprite.png" }, { "selector": ".pp_gallery li.default a", "style": ".pp_gallery li.default a{--wpr-bg-6c602d33-3979-41ab-bbd5-b1631a029f9b: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/default_thumbnail.gif');}", "hash": "6c602d33-3979-41ab-bbd5-b1631a029f9b", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/facebook\/default_thumbnail.gif" }, { "selector": "a.pp_next", "style": "a.pp_next{--wpr-bg-f41104cc-0335-4da5-bf0e-f6da9f74fd7f: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/light_rounded\/btnNext.png');}", "hash": "f41104cc-0335-4da5-bf0e-f6da9f74fd7f", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/light_rounded\/btnNext.png" }, { "selector": "a.pp_previous", "style": "a.pp_previous{--wpr-bg-8724bb27-5536-4420-8dab-613a011fba72: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/light_rounded\/btnNext.png');}", "hash": "8724bb27-5536-4420-8dab-613a011fba72", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/prettyPhoto\/light_rounded\/btnNext.png" }, { "selector": ".owl-carousel .owl-video-play-icon", "style": ".owl-carousel .owl-video-play-icon{--wpr-bg-6d5e9bad-fd83-40b1-93a9-5875caaf2289: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/css\/owl.video.play.png');}", "hash": "6d5e9bad-fd83-40b1-93a9-5875caaf2289", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/css\/owl.video.play.png" }, { "selector": ".open-btn1.btnactive", "style": ".open-btn1.btnactive{--wpr-bg-aa2b12e0-7579-4ebd-b00a-51f61bd68976: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/icon_search.svg');}", "hash": "aa2b12e0-7579-4ebd-b00a-51f61bd68976", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/icon_search.svg" }, { "selector": "#search-wrap input[type=submit]", "style": "#search-wrap input[type=submit]{--wpr-bg-b6dcbd4c-6d00-46d5-bc19-8c0970efc3af: url('https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/icon_search.svg');}", "hash": "b6dcbd4c-6d00-46d5-bc19-8c0970efc3af", "url": "https:\/\/www.designcafe.com\/wp-content\/themes\/designcafe\/images\/icon_search.svg" }, { "selector": ".iti__flag", "style": ".iti__flag{--wpr-bg-e7505fe2-bfed-47da-a22d-0850b4a3b78c: url('https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/intl-tel-input\/17.0.8\/img\/flags.png');}", "hash": "e7505fe2-bfed-47da-a22d-0850b4a3b78c", "url": "https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/intl-tel-input\/17.0.8\/img\/flags.png" }, { "selector": ".iti__flag", "style": ".iti__flag{--wpr-bg-dcf88330-bc4e-455b-9d93-d330013569c8: url('https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/intl-tel-input\/17.0.8\/img\/flags@2x.png');}", "hash": "dcf88330-bc4e-455b-9d93-d330013569c8", "url": "https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/intl-tel-input\/17.0.8\/img\/flags@2x.png" }, { "selector": "button.loading", "style": "button.loading{--wpr-bg-496080c2-8787-480d-b897-1c1c3623720f: url('https:\/\/media.designcafe.com\/wp-content\/uploads\/2021\/10\/20190133\/ajax-loader.gif');}", "hash": "496080c2-8787-480d-b897-1c1c3623720f", "url": "https:\/\/media.designcafe.com\/wp-content\/uploads\/2021\/10\/20190133\/ajax-loader.gif" }, { "selector": "button.loading", "style": "button.loading{--wpr-bg-75fbf62f-510e-48dc-a319-2fa56244fd69: url('https:\/\/media.designcafe.com\/wp-content\/uploads\/2021\/10\/20190133\/ajax-loader.gif');}", "hash": "75fbf62f-510e-48dc-a319-2fa56244fd69", "url": "https:\/\/media.designcafe.com\/wp-content\/uploads\/2021\/10\/20190133\/ajax-loader.gif" }, { "selector": ".rll-youtube-player .play", "style": ".rll-youtube-player .play{--wpr-bg-8b308528-b75f-49b4-9c95-dbe3490f8266: url('https:\/\/www.designcafe.com\/wp-content\/plugins\/wp-rocket\/assets\/img\/youtube.png');}", "hash": "8b308528-b75f-49b4-9c95-dbe3490f8266", "url": "https:\/\/www.designcafe.com\/wp-content\/plugins\/wp-rocket\/assets\/img\/youtube.png" }]; const rocket_excluded_pairs = [];</script>
<script type="text/javascript">
jQuery(".open-btn1").click(function() {
    jQuery(this).toggleClass("btnactive");
    jQuery("#search-wrap").toggleClass("panelactive");
    jQuery("#search-text").focus();
});
</script>


<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div
                class="row collection-category-title project-template-wrap fixed-collection-desk-lst collection-desk-lst">
                <div class="col-lg-6 col-sm-6 col-7">
                    <div class="collection-category-second-title">
                        <div class="bg-text-title">
                            <h1>Recent Projects</h1>
                            <p class="why-design-cafe-main-title-watermark">Recent Projects</p>
                        </div>
                        <div class="collection-category-description project-category-description">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-5 reset-col-section" style="position: initial;">
                    <div class="project-filter-menu">
                        <div class="project-clear" id="reset-project-filter"><i class="fa fa-refresh"
                                aria-hidden="true"></i></div>
                        <div class="btn fliter-project-expand collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseExample-new" aria-expanded="false"
                            aria-controls="collapseExample-new">
                            <i class="fa fa-filter" aria-hidden="true"></i> Filter
                        </div>
                        <div class="collapse filter-expand-section" id="collapseExample-new">
                            <div class="card card-body filter-expand-section-content">
                                <style type="text/css"></style>
                                <div class="alm-filters alm-filters-container filters-default"
                                    id="alm-filters-projectcompletedfilter" data-target="9463381164" data-style="button"
                                    data-id="projectcompletedfilter">
                                    <div class="alm-filter alm-filter--group alm-filter--taxonomy property-type-class"
                                        id="alm-filter-1" data-key="taxonomy" data-fieldtype="checkbox"
                                        data-taxonomy="projectcategory" data-taxonomy-operator="IN"
                                        data-taxonomy-include-children="true" data-selected-value=""
                                        data-default-value="" role="group"
                                        aria-labelledby="alm-filter-projectcategory-title">
                                        <div class="alm-filter--title">
                                            <h3 id="alm-filter-projectcategory-title">Property Type</h3>
                                        </div>
                                        <div class="alm-filter--inner">
                                            <ul>
                                                <li class="alm-filter--checkbox field-parent field-0">
                                                    <div class="alm-filter--link field-checkbox field-2-bhk "
                                                        id="checkbox-2-bhk-1" data-type="checkbox" data-value="2-bhk"
                                                        role="checkbox" tabindex="0" aria-checked="false">2 BHK</div>
                                                </li>
                                                <li class="alm-filter--checkbox field-parent field-1">
                                                    <div class="alm-filter--link field-checkbox field-2-5-bhk "
                                                        id="checkbox-2-5-bhk-1" data-type="checkbox"
                                                        data-value="2-5-bhk" role="checkbox" tabindex="0"
                                                        aria-checked="false">2.5 BHK</div>
                                                </li>
                                                <li class="alm-filter--checkbox field-parent field-2">
                                                    <div class="alm-filter--link field-checkbox field-3-bhk "
                                                        id="checkbox-3-bhk-1" data-type="checkbox" data-value="3-bhk"
                                                        role="checkbox" tabindex="0" aria-checked="false">3 BHK</div>
                                                </li>
                                                <li class="alm-filter--checkbox field-parent field-3">
                                                    <div class="alm-filter--link field-checkbox field-4-bhk "
                                                        id="checkbox-4-bhk-1" data-type="checkbox" data-value="4-bhk"
                                                        role="checkbox" tabindex="0" aria-checked="false">4 BHK</div>
                                                </li>
                                                <li class="alm-filter--checkbox field-parent field-4">
                                                    <div class="alm-filter--link field-checkbox field-independent-home-villa "
                                                        id="checkbox-independent-home-villa-1" data-type="checkbox"
                                                        data-value="independent-home-villa" role="checkbox" tabindex="0"
                                                        aria-checked="false">Independent Home / Villa</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="alm-filter alm-filter--group alm-filter--taxonomy location-type-class"
                                        id="alm-filter-2" data-key="taxonomy" data-fieldtype="checkbox"
                                        data-taxonomy="projectcity" data-taxonomy-operator="IN"
                                        data-taxonomy-include-children="true" data-selected-value=""
                                        data-default-value="" role="group"
                                        aria-labelledby="alm-filter-projectcity-title">
                                        <div class="alm-filter--title">
                                            <h3 id="alm-filter-projectcity-title">Location</h3>
                                        </div>
                                        <div class="alm-filter--inner">
                                            <ul>
                                                <li class="alm-filter--checkbox field-parent field-0">
                                                    <div class="alm-filter--link field-checkbox field-Pune "
                                                        id="checkbox-Pune-2" data-type="checkbox"
                                                        data-value="Pune" role="checkbox" tabindex="0"
                                                        aria-checked="false">Pune</div>
                                                </li>
                                                <li class="alm-filter--checkbox field-parent field-1">
                                                    <div class="alm-filter--link field-checkbox field-chennai "
                                                        id="checkbox-chennai-2" data-type="checkbox"
                                                        data-value="chennai" role="checkbox" tabindex="0"
                                                        aria-checked="false">Chennai</div>
                                                </li>
                                                <li class="alm-filter--checkbox field-parent field-2">
                                                    <div class="alm-filter--link field-checkbox field-hyderabad "
                                                        id="checkbox-hyderabad-2" data-type="checkbox"
                                                        data-value="hyderabad" role="checkbox" tabindex="0"
                                                        aria-checked="false">Hyderabad</div>
                                                </li>
                                                <li class="alm-filter--checkbox field-parent field-3">
                                                    <div class="alm-filter--link field-checkbox field-mumbai "
                                                        id="checkbox-mumbai-2" data-type="checkbox" data-value="mumbai"
                                                        role="checkbox" tabindex="0" aria-checked="false">Mumbai</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="alm-filters--controls">
                                        <div class="alm-filters--submit"><button type="button"
                                                class="alm-filters--button"><span>Apply Filters</span></button></div>
                                    </div>
                                    <div class="alm-filters--loading"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row filter-section">
            </div>
            <style></style>
            <style type="text/css"></style>
            <div id="ajax-load-more" class="ajax-load-more-wrap default alm-layouts" data-id="9463381164" data-alm-id=""
                data-canonical-url="<?php echo base_url(); ?>web/recent_projects_completed"
                data-slug="recent-projects-completed" data-post-id="363" data-localized="ajax_load_more_9463381164_vars"
                data-alm-object="ajax_load_more_9463381164">
                <div aria-live="polite" aria-atomic="true" class="alm-listing alm-ajax project-completed-load-more"
                    data-filters="true" data-filters-target="" data-filters-url="false" data-filters-paging="true"
                    data-filters-scroll="false" data-filters-scrolltop="30" data-filters-debug="" data-preloaded="true"
                    data-preloaded-amount="5" data-container-type="div" data-loading-style="default"
                    data-repeater="template_8" data-post-type="project" data-taxonomy-operator="IN" data-order="DESC"
                    data-orderby="date" data-offset="0" data-posts-per-page="5" data-pause="true"
                    data-button-label="Load more " data-button-loading-label="Loading more ">
                    <div id="1179"
                        class="row collection-listing-section project-completed-wrap small-width-desktop project-completed-new">
                        <div class="col-lg-12 mb-collection-gallary-wrap">
                            <div class="collection-image-gallary-section owl-project-slider-cls">
                                <div id="owl-project-slider"
                                    class="owl-carousel owl-theme custom-dot-navigation owl-project-slider owl-std-navigation">

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Interior companies in bangalore for master bedroom with an elegant look"
                                                src="<?php echo base_url(); ?>assets/uploads/2019/12/23111709/interior-companies-in-bangalore.jpg">

                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The master bedroom in the same neutral palette as the living shows
                                                    off an elegant look with sliding door wardrobes</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="White and royal blue kids rooom designed by ine of the top 10 interior designers in bangalore"
                                                src="<?php echo base_url(); ?>assets/uploads/2019/12/23111928/top-10-interior-designers-in-bangalore.jpg">
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>A kids/ second bedroom is dressed in a popular colour theme –
                                                    white and royal blue, and a tufted backrest is a touch of the
                                                    neo-classical</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Modern classic 3 bhk flat of debashish modular kitchen design in bannerghatta Pune designed by Creative walls"
                                                src="<?php echo base_url(); ?>assets/uploads/2019/12/17055019/modern-classic-3-bhk-flat-debashish-modular-kitchen-design-bannerghatta-Pune-1450x870.jpg">
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>Modular Kitchen in White and Yellow</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="a guest bedroom designed by residential interior designers in bangalore"
                                                src="<?php echo base_url(); ?>assets/uploads/2019/12/23142418/residential-interior-designers-in-bangalore.jpg">
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The guest bedroom borrows the hexagon from the living room and is
                                                    accentuated by a geometric patterned wallpaper. The study unit is
                                                    sleek, simple. A non-assuming bed with a bright orange headboard
                                                    adds a pop of colour.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Apartments interior designers in bangalore for living cum dingng room"
                                                src="<?php echo base_url(); ?>assets/uploads/2019/12/23111556/apartments-interior-designers-in-bangalore.jpg">
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>A matte 3D panel wall in the living cum dining room adds subtle
                                                    glamour.</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-8">
                            <div class="collection-title">
                                <h2>A Modern 3 BHK Flat Of Debashish Chakraborty</h2>
                                <p class="designed-by-project">Designed By: <span><strong>Divya Mathur</strong></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4">
                            <div class="collection-cta-link i-want-this-btn i-want-this-btn-new project-desk-cta">
                                <a id="i-want-this" class="" data-toggle="modal" href="#contactUsModal">
                                    Get Free Quote</a>
                            </div>
                        </div>
                        <div class="col-lg-12 responsive-space-cutter-left-bottom">
                            <div class="project-detail-section new-collection-show" id="collection-hide-section-1179">
                                <div class="project-detail-main-title">
                                    <h3>Project Details</h3>
                                </div>
                                <div class="project-detail-grid">
                                    <div class="project-detail-list">
                                        <h5>Project Name</h5>
                                        <p>Hiranandani Hill Crest</p>
                                    </div>
                                    <div class="project-detail-list">
                                        <h5>Property Area</h5>
                                        <p>Bannerghatta, Pune</p>
                                    </div>
                                    <div class="project-detail-list">
                                        <h5>Property Type</h5>
                                        <p>3 BHK Flat</p>
                                    </div>
                                </div>
                                <div class="project-client-brief-section">
                                    <h3>Client Brief</h3>
                                    <p><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Debashish Chakraborty wanted the interiors of his home to depict a clean and uncomplicated space. He wanted to redo the entire flat to look modern yet warm and cosy. &quot;}"
                                            data-sheets-userformat="{&quot;2&quot;:959,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:15724527},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:3}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:3}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;10&quot;:0,&quot;11&quot;:4,&quot;12&quot;:0}">Debashish
                                            Chakraborty wanted the interiors of his home to depict a clean and
                                            uncomplicated space. He wanted to redo the entire flat to look modern yet
                                            warm and cosy. </span></p>
                                </div>
                                <div class="collection-special-features-title project-feature-title">
                                    <h2>Design Solution</h2>
                                </div>
                                <div class="collection-special-features-description">
                                    <p><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Creative walls's team of experts designed this 3BHK apartment with modern and neo-classical style of interiors. The colour palette was kept mostly neutral with a mix of brown, white and beige to ensure the apartment exuded warmth.\nImage 1: A matte 3D panel wall in the living cum dining room adds subtle glamour.\nImage 2: The master bedroom in the same neutral palette as the living shows off an elegant look with sliding door wardrobes\nImage 3: A kids/ second bedroom is dressed in a popular colour theme – white and royal blue, and a tufted backrest is a touch of the neo-classical\nImage 4: The guest bedroom borrows the hexagon from the living room and is accentuated by a geometric patterned wallpaper. The study unit is sleek, simple. A non-assuming bed with a bright orange headboard adds a pop of colour.\r\n&quot;}"
                                            data-sheets-userformat="{&quot;2&quot;:959,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:15724527},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:3}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:3}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;10&quot;:0,&quot;11&quot;:4,&quot;12&quot;:0}">Design
                                            Cafe&#8217;s team of experts designed this 3BHK apartment with modern and
                                            neo-classical style of interiors. The colour palette was kept mostly neutral
                                            with a mix of brown, white and beige to ensure the apartment exuded
                                            warmth.</span></p>
                                </div>
                                <div
                                    class="collection-special-features-title project-feature-title project-testimonial-section">
                                    <h2>Client Feedback</h2>
                                    <blockquote class="client-testimonial-quote"> <span class="quote-mark">“</span>
                                        <span>Its the attitude which attends most to use & i find DC guys do have a
                                            customer centric attitude. than few exception or always there. That's why am
                                            happily giving my recommendations for DC. People are key. its the success of
                                            way organisation all the very best. </span></blockquote>
                                </div>
                            </div>
                            <div class="show-more-text" id="show-more-text-1179"><span class="text-change"
                                    id="text-change-1179">More Details</span> <span
                                    class="arrow-change arrow-change-project">›</span></div>
                            <div class="collection-cta-link i-want-this-btn i-want-this-btn-new project-mob-cta">
                                <a id="i-want-this" class="" data-toggle="modal" href="#contactUsModal">
                                    Get Free Quote</a>
                            </div>
                        </div>




                    </div>


                    <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $("#show-more-text-1179").click(function() {

                            if ($("#text-change-1179").text() == 'More Details') {
                                $(".new-collection-show").hide('slow');
                                $("#collection-hide-section-1179").slideToggle('slow');
                                $(".show-more-text .text-change").text('More Details');
                                $(".show-more-text .arrow-change-project").css("transform",
                                    "rotate(90deg)");
                                $("#text-change-1179").text('Less Details');
                                $("#show-more-text-1179 .arrow-change-project").css("transform",
                                    "rotate(-90deg)");
                            } else {
                                $("#collection-hide-section-1179").slideToggle('slow');
                                $("#text-change-1179").text('More Details');
                                $("#show-more-text-1179 .arrow-change-project").css("transform",
                                    "rotate(90deg)")
                            }
                        });
                    });
                    </script>
                    <style></style>
                    <div id="26843"
                        class="row collection-listing-section project-completed-wrap small-width-desktop project-completed-new">
                        <div class="col-lg-12 mb-collection-gallary-wrap">
                            <div class="collection-image-gallary-section owl-project-slider-cls">
                                <div id="owl-project-slider"
                                    class="owl-carousel owl-theme custom-dot-navigation owl-project-slider owl-std-navigation">

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Metal bullet wall decor in the kid's room with a cosy study kook with a study desk and storage option designed by best interiors in mumbai"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/10/25211754/metal-bullet-wall-decor-in-kids-room-with-a-study-desk-and-storage-option-designed-by-best-interiors-in-mumbai.jpg">
                                            
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The highlight of this kids bedroom is a wall installation of a
                                                    bike mounted right above the bed. A cosy study nook with a desk and
                                                    storage option makes this bedroom multifunctional.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Living cum dining room is designed with a sectional sofa, a four-seater dining table by budget interior designers in mumbai"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/10/25211731/budget-interior-designers-in-mumbai.jpg">
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The living cum dining room is designed with a sectional sofa, a
                                                    four-seater dining table and a green partition with storage and
                                                    display area.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="A modular kitchen in white and red with overhead and base cabinets designed by best residential interior designers in mumbai"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/10/25211800/modular-kitchen-in-white-and-red-with-overhead-and-base-cabinets-designed-by-best-residential-interior-designers-in-mumbai.jpg">
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>A modular kitchen in white and red with overhead and base
                                                    cabinets, drawers and multiple pullout units. The cabinet with a
                                                    frosted glass front adds an elegant look to the entire space.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="The master bedroom has a bed with a cushioned headboard and a wardrobe designed by best home interior designer in mumbai"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/10/25211748/master-bedroom-has-a-bed-with-a-cushioned-headboard-and-a-wardrobe-designed-by-best-home-interior-designer-in-mumbai.jpg">
                                            
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The master bedroom has a bed with a cushioned headboard and a
                                                    wardrobe finished in wood and blue laminate to blend in with the
                                                    colour scheme of this space. The wooden flooring makes this bedroom
                                                    extremely cosy.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Interior designed by famous interior designers in mumbai for Ritesh with is his wife and two kids"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/10/25211742/interior-designed-by-famous-interior-designers-in-mumbai-for-family.jpg">
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>Ritesh with is his wife and two kids in their Creative walls
                                                    home.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Guest bedroom comes with an intricate false ceiling, cove lights and beautiful pendant lights designed by top architects and interior designers in mumbai"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/10/25211736/guest-bedroom-comes-with-an-intricate-false-ceiling-cove-lights-designed-by-top-architects-and-interior-designers-in-mumbai.jpg">
                                           
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The guest bedroom comes with an intricate false ceiling, cove
                                                    lights and beautiful pendant lights. The bed with an extended
                                                    headboard and a floating side table adds to the beauty and
                                                    functionality of this space.</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-8">
                            <div class="collection-title">
                                <h2>Ritesh Tiwari&#8217;s 3BHK Home in Mumbai</h2>
                                <p class="designed-by-project">Designed By: <span><strong>Meenu</strong></span> </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4">
                            <div class="collection-cta-link i-want-this-btn i-want-this-btn-new project-desk-cta">
                                <a id="i-want-this" class="" data-toggle="modal" href="#contactUsModal">
                                    Get Free Quote</a>
                            </div>
                        </div>
                        <div class="col-lg-12 responsive-space-cutter-left-bottom">
                            <div class="project-detail-section new-collection-show" id="collection-hide-section-26843">
                                <div class="project-detail-main-title">
                                    <h3>Project Details</h3>
                                </div>
                                <div class="project-detail-grid">
                                    <div class="project-detail-list">
                                        <h5>Project Name</h5>
                                        <p>Lodha Splendora</p>
                                    </div>
                                    <div class="project-detail-list">
                                        <h5>Property Area</h5>
                                        <p>Mumbai</p>
                                    </div>
                                    <div class="project-detail-list">
                                        <h5>Property Type</h5>
                                        <p>3 BHK</p>
                                    </div>
                                </div>
                                <div class="project-client-brief-section">
                                    <h3>Client Brief</h3>
                                    <p><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Ritesh Tiwari wanted the home interiors of his home to be spacious, well-lit and classy. He wanted ample storage space and stylish interiors so his family could enjoy clutter-free living.&quot;}"
                                            data-sheets-userformat="{&quot;2&quot;:5055,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:15724527},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;10&quot;:0,&quot;11&quot;:4,&quot;12&quot;:0,&quot;15&quot;:&quot;EB Garamond&quot;}">Ritesh
                                            Tiwari wanted the home interiors of his home to be spacious, well-lit and
                                            classy. He wanted ample storage space and stylish interiors so his family
                                            could enjoy clutter-free living.</span></p>
                                </div>
                                <div class="collection-special-features-title project-feature-title">
                                    <h2>Design Solution</h2>
                                </div>
                                <div class="collection-special-features-description">
                                    <p><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;The team of designers designed this 3BHK home with modern interiors to match our client's taste. The colour palette has been kept neutral with a pop of green, blue, red so the home looked vibrant.The intelligent use of light fixtures makes this home look spacious and bright, just what our client desired! \n&quot;}"
                                            data-sheets-userformat="{&quot;2&quot;:5055,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:15724527},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;10&quot;:0,&quot;11&quot;:4,&quot;12&quot;:0,&quot;15&quot;:&quot;EB Garamond&quot;}">The
                                            team of designers designed this 3BHK home with modern interiors to match our
                                            client&#8217;s taste. The colour palette has been kept neutral with a pop of
                                            green, blue, red so the home looked vibrant.The intelligent use of light
                                            fixtures makes this home look spacious and bright, just what our client
                                            desired!<br>
                                        </span></p>
                                </div>
                            </div>
                            <div class="show-more-text" id="show-more-text-26843"><span class="text-change"
                                    id="text-change-26843">More Details</span> <span
                                    class="arrow-change arrow-change-project">›</span></div>
                            
                            <div class="collection-cta-link i-want-this-btn i-want-this-btn-new project-mob-cta">
                                <a id="i-want-this" class="" data-toggle="modal" href="#contactUsModal">
                                    Get Free Quote</a>
                            </div>
                        </div>




                    </div>


                    <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $("#show-more-text-26843").click(function() {

                            if ($("#text-change-26843").text() == 'More Details') {
                                $(".new-collection-show").hide('slow');
                                $("#collection-hide-section-26843").slideToggle('slow');
                                $(".show-more-text .text-change").text('More Details');
                                $(".show-more-text .arrow-change-project").css("transform",
                                    "rotate(90deg)");
                                $("#text-change-26843").text('Less Details');
                                $("#show-more-text-26843 .arrow-change-project").css("transform",
                                    "rotate(-90deg)");
                            } else {
                                $("#collection-hide-section-26843").slideToggle('slow');
                                $("#text-change-26843").text('More Details');
                                $("#show-more-text-26843 .arrow-change-project").css("transform",
                                    "rotate(90deg)")
                            }
                        });
                    });
                    </script>
                    <style></style>
                    <div id="18256"
                        class="row collection-listing-section project-completed-wrap small-width-desktop project-completed-new">
                        <div class="col-lg-12 mb-collection-gallary-wrap">
                            <div class="collection-image-gallary-section owl-project-slider-cls">
                                <div id="owl-project-slider"
                                    class="owl-carousel owl-theme custom-dot-navigation owl-project-slider owl-std-navigation">
                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="White modular kitchen designed by residential interior design bangalore"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/01/13191244/residential-interior-designers-bangalore.jpg">
                                            
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>This modular kitchen has been designed with a white acrylic
                                                    finish, a black and white island that is accentuated by rose gold
                                                    pendant lights and a black glossy backdrop</span>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="L shape sofa designed by Creative walls which is one of the top 5 interior designers in bangalore"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/01/13191306/top-5-interior-designers-in-bangalore.jpg">
                                            
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The texture of the wall in the living room complements the natural
                                                    hue of the white marble on the opposite wall</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Lobby designed by leading interior designers in bangalore"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/01/13191236/leading-interior-designers-in-bangalore.jpg">
                                            
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The lobby area is decorated with 3D tiles in black and rose
                                                    gold</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Grey dining table designed by top 10 interiors in bangalore"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/01/13191315/top-10-interiors-in-bangalore.jpg">
                                          
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The dining room's look with cove lighting and open ledges is in
                                                    sync with that of the kitchen.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Bedroom interior designed by one of the best interior designers in bangalore"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/01/13191259/the-best-interior-designers-in-bangalore.jpg">
                                         
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The highlight of the master bedroom is the back panel. Golden art
                                                    leather has been used on the headboard</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Contemporary bedroom designed by Creative walls residential interiors bangalore"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/01/13191251/residential-interiors-bangalore.jpg">
                                            
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The back panel of the second bedroom features wood rafters while
                                                    the false ceiling has a similar design</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-8">
                            <div class="collection-title">
                                <h2>Praveen And Shilpa Bysani&#8217;s 3 BHK Home In Pune</h2>
                                <p class="designed-by-project">Designed By: <span><strong>Swati Malani</strong></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4">
                            <div class="collection-cta-link i-want-this-btn i-want-this-btn-new project-desk-cta">
                                <a id="i-want-this" class="" data-toggle="modal" href="#contactUsModal">
                                    Get Free Quote</a>
                            </div>
                        </div>
                        <div class="col-lg-12 responsive-space-cutter-left-bottom">
                            <div class="project-detail-section new-collection-show" id="collection-hide-section-18256">
                                <div class="project-detail-main-title">
                                    <h3>Project Details</h3>
                                </div>
                                <div class="project-detail-grid">
                                    <div class="project-detail-list">
                                        <h5>Project Name</h5>
                                        <p>Fortuna Manomay Citadelle</p>
                                    </div>
                                    <div class="project-detail-list">
                                        <h5>Property Area</h5>
                                        <p>Pune</p>
                                    </div>
                                    <div class="project-detail-list">
                                        <h5>Property Type</h5>
                                        <p>3 BHK</p>
                                    </div>
                                </div>
                                <div class="project-client-brief-section">
                                    <h3>Client Brief</h3>
                                    <p><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Praveen and Shilpa Bysani sought to improve the decor throughout their modern home. They wanted to accentuate the aesthetics of their house with the use of modular furniture and natural tones.&quot;}"
                                            data-sheets-userformat="{&quot;2&quot;:5055,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:[null,2,15724527],&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:[null,2,0]},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:[null,2,0]},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:[null,2,0]},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:[null,2,0]},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;10&quot;:0,&quot;11&quot;:4,&quot;12&quot;:0,&quot;15&quot;:&quot;EB Garamond&quot;}">Praveen
                                            and Shilpa Bysani sought to improve the decor throughout their modern home.
                                            They wanted to accentuate the aesthetics of their house with the use of
                                            modular furniture and natural tones.</span></p>
                                </div>
                                <div class="collection-special-features-title project-feature-title">
                                    <h2>Design Solution</h2>
                                </div>
                                <div class="collection-special-features-description">
                                    <p><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;The Creative walls team, led by Swati Malani, initiated a complete makeover of the home. Our team of in-house designers used pops of gold throughout the house in line with the refined taste of the homeowners. \n\nImage 1: This modular kitchen has been designed with a white acrylic finish, a black and white island that is accentuated by rose gold pendant lights and a black glossy backdrop \nImage 2: The lobby area is decorated with 3D tiles in black and rose gold\nImage 3: The dining room's look with cove lighting and open ledges is in sync with that of the kitchen. \nImage 4: The texture of the wall in the living room complements the natural hue of the white marble on the opposite wall \nImage 5: The highlight of the master bedroom is the back panel. Golden art leather has been used on the headboard\nImage 6: The back panel of the second bedroom features wood rafters while the false ceiling has a similar design&quot;}"
                                            data-sheets-userformat="{&quot;2&quot;:5055,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:[null,2,15724527],&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:[null,2,0]},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:[null,2,0]},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:[null,2,0]},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:[null,2,0]},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;10&quot;:0,&quot;11&quot;:4,&quot;12&quot;:0,&quot;15&quot;:&quot;EB Garamond&quot;}">The
                                            Creative walls team, led by Swati Malani, initiated a complete makeover of the
                                            home. Our team of in-house designers used pops of gold throughout the house
                                            in line with the refined taste of the homeowners.<br>
                                        </span></p>
                                </div>
                            </div>
                            <div class="show-more-text" id="show-more-text-18256"><span class="text-change"
                                    id="text-change-18256">More Details</span> <span
                                    class="arrow-change arrow-change-project">›</span></div>
                      
                            <div class="collection-cta-link i-want-this-btn i-want-this-btn-new project-mob-cta">
                                <a id="i-want-this" class="" data-toggle="modal" href="#contactUsModal">
                                    Get Free Quote</a>
                            </div>
                        </div>




                    </div>


                    <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $("#show-more-text-18256").click(function() {

                            if ($("#text-change-18256").text() == 'More Details') {
                                $(".new-collection-show").hide('slow');
                                $("#collection-hide-section-18256").slideToggle('slow');
                                $(".show-more-text .text-change").text('More Details');
                                $(".show-more-text .arrow-change-project").css("transform",
                                    "rotate(90deg)");
                                $("#text-change-18256").text('Less Details');
                                $("#show-more-text-18256 .arrow-change-project").css("transform",
                                    "rotate(-90deg)");
                            } else {
                                $("#collection-hide-section-18256").slideToggle('slow');
                                $("#text-change-18256").text('More Details');
                                $("#show-more-text-18256 .arrow-change-project").css("transform",
                                    "rotate(90deg)")
                            }
                        });
                    });
                    </script>
                    <style></style>
                    <div id="31619"
                        class="row collection-listing-section project-completed-wrap small-width-desktop project-completed-new">
                        <div class="col-lg-12 mb-collection-gallary-wrap">
                            <div class="collection-image-gallary-section owl-project-slider-cls">
                                <div id="owl-project-slider"
                                    class="owl-carousel owl-theme custom-dot-navigation owl-project-slider owl-std-navigation">

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Master bedroom is designed with a king-sized bed with storage cabinets around by luxury interior designers in chennai"
                                                src="<?php echo base_url(); ?>assets/uploads/2022/02/10194934/master-bedroom-is-designed-with-a-king-sized-bed-with-storage-cabinets-around-by-luxury-interior-designers-in-chennai.jpg">
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The master bedroom is designed with a king-sized bed with storage
                                                    cabinets around, a modular wardrobe and two side tables with drawers
                                                    for ample storage space.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="interior designers in chennai where the foyer unit with drawers and a seating area elevates the functionality of the space"
                                                src="<?php echo base_url(); ?>assets/uploads/2022/02/10194919/interior-designers-in-chennai-where-the-foyer-unit-with-drawers-and-a-seating-area.jpg">
                                            
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The wooden panelling on the entryway adds definition to the
                                                    interiors, while the foyer unit with drawers and a seating area
                                                    elevates the functionality of the space.</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="best interior designers in chennai where the modular kitchen has handleless storage systems, pull-out units and a Morrocan tiled backsplash"
                                                src="<?php echo base_url(); ?>assets/uploads/2022/02/10194904/best-interior-designers-in-chennai-where-the-modular-kitchen-has-handleless-storage-systems.jpg">

                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The modular kitchen has handleless storage systems, pull-out units
                                                    and a Morrocan tiled backsplash for a unique culinary
                                                    experience.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Interior design in chennai where the entertainment unit in the living room is designed with a wall-mounted TV"
                                                src="<?php echo base_url(); ?>assets/uploads/2022/02/10194926/interior-design-in-chennai-where-the-entertainment-unit-in-the-living-room-is-designed-with-a-wall-mounted-tv.jpg">
  
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The entertainment unit in the living room is designed with a
                                                    wall-mounted TV, a low lying cabinet and a tall unit with open
                                                    storage and closed cabinets.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Interior design company in chennai where the brick cladding accent wall on the living room cuts the monotony of pastel colours"
                                                src="<?php echo base_url(); ?>assets/uploads/2022/02/10194911/interior-design-company-in-chennai-where-the-brick-cladding-accent-wall-on-the-living-room-cuts-the-monotony.jpg">

                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The brick cladding accent wall on the living room cuts the
                                                    monotony of pastel colours beautifully and adds a dimension to the
                                                    space.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="The kids room is designed in dual colours to amalgamate their preferences seamlessly by best budget interior designers in chennai"
                                                src="<?php echo base_url(); ?>assets/uploads/2022/02/10194940/the-kids-room-is-designed-in-dual-colours-to-amalgamate-their-preferences-seamlessly-by-best-budget-interior-designers-in-chennai.jpg">

                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The kids room is designed in dual colours to amalgamate their
                                                    preferences seamlessly. The two single beds and a separate study
                                                    unit provide them space to study and relax comfortably in their
                                                    room.</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="The bathoom is designed with a vanity unit with hidden storage to organise your personal care essentials by home interior designers in chennai"
                                                src="<?php echo base_url(); ?>assets/uploads/2022/02/10194857/bathoom-designed-with-a-vanity-unit-with-hidden-storage-to-organise-your-personal-care-essentials-by-home-interior-designers-in-chennai.jpg">

                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The bathoom is designed with a vanity unit with hidden storage to
                                                    organise your personal care essentials. The black wall tiles
                                                    highlight the shower area beautifully, while the glass partition
                                                    separates the wet area from the dry space.</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-8">
                            <div class="collection-title">
                                <h2>Aatheesh&#8217;s 3 BHK Home In Chennai</h2>
                                <p class="designed-by-project">Designed By: <span><strong>Ishwarya</strong></span> </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4">
                            <div class="collection-cta-link i-want-this-btn i-want-this-btn-new project-desk-cta">
                                <a id="i-want-this" class="" data-toggle="modal" href="#contactUsModal">
                                    Get Free Quote</a>
                            </div>
                        </div>
                        <div class="col-lg-12 responsive-space-cutter-left-bottom">
                            <div class="project-detail-section new-collection-show" id="collection-hide-section-31619">
                                <div class="project-detail-main-title">
                                    <h3>Project Details</h3>
                                </div>
                                <div class="project-detail-grid">
                                    <div class="project-detail-list">
                                        <h5>Project Name</h5>
                                        <p></p>
                                    </div>
                                    <div class="project-detail-list">
                                        <h5>Property Area</h5>
                                        <p>Chennai</p>
                                    </div>
                                    <div class="project-detail-list">
                                        <h5>Property Type</h5>
                                        <p>3 BHK</p>
                                    </div>
                                </div>
                                <div class="project-client-brief-section">
                                    <h3>Client Brief</h3>
                                    <p><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Aatheesh's family wanted a house designed with modern aesthetics to match their urban lifestyle. They wanted space-saving furniture, clean lines and minimalistic designs for a spacious vibe in their home without making the space look boring or monotonous.&quot;}"
                                            data-sheets-userformat="{&quot;2&quot;:5055,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:15724527},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;10&quot;:0,&quot;11&quot;:4,&quot;12&quot;:0,&quot;15&quot;:&quot;EB Garamond&quot;}">Aatheesh&#8217;s
                                            family wanted a house designed with modern aesthetics to match their urban
                                            lifestyle. They wanted space-saving furniture, clean lines and minimalistic
                                            designs for a spacious vibe in their home without making the space look
                                            boring or monotonous.</span></p>
                                </div>
                                <div class="collection-special-features-title project-feature-title">
                                    <h2>Design Solution</h2>
                                </div>
                                <div class="collection-special-features-description">
                                    <p><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Our expert designers came up with space-saving modular furniture and handleless drawers to provide ample storage space and lend a clutter-free look. We have worked with pastel shades paired with a pop of bold colours and accents.&quot;}"
                                            data-sheets-userformat="{&quot;2&quot;:13247,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:15724527},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;10&quot;:0,&quot;11&quot;:4,&quot;12&quot;:0,&quot;15&quot;:&quot;EB Garamond&quot;,&quot;16&quot;:11}">Our
                                            expert designers came up with space-saving modular furniture and handleless
                                            drawers to provide ample storage space and lend a clutter-free look. We have
                                            worked with pastel shades paired with a pop of bold colours and
                                            accents.</span></p>
                                </div>
                            </div>
                            <div class="show-more-text" id="show-more-text-31619"><span class="text-change"
                                    id="text-change-31619">More Details</span> <span
                                    class="arrow-change arrow-change-project">›</span></div>

                            <div class="collection-cta-link i-want-this-btn i-want-this-btn-new project-mob-cta">
                                <a id="i-want-this" class="" data-toggle="modal" href="#contactUsModal">
                                    Get Free Quote</a>
                            </div>
                        </div>




                    </div>


                    <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $("#show-more-text-31619").click(function() {

                            if ($("#text-change-31619").text() == 'More Details') {
                                $(".new-collection-show").hide('slow');
                                $("#collection-hide-section-31619").slideToggle('slow');
                                $(".show-more-text .text-change").text('More Details');
                                $(".show-more-text .arrow-change-project").css("transform",
                                    "rotate(90deg)");
                                $("#text-change-31619").text('Less Details');
                                $("#show-more-text-31619 .arrow-change-project").css("transform",
                                    "rotate(-90deg)");
                            } else {
                                $("#collection-hide-section-31619").slideToggle('slow');
                                $("#text-change-31619").text('More Details');
                                $("#show-more-text-31619 .arrow-change-project").css("transform",
                                    "rotate(90deg)")
                            }
                        });
                    });
                    </script>
                    <style></style>
                    <div id="27923"
                        class="row collection-listing-section project-completed-wrap small-width-desktop project-completed-new">
                        <div class="col-lg-12 mb-collection-gallary-wrap">
                            <div class="collection-image-gallary-section owl-project-slider-cls">
                                <div id="owl-project-slider"
                                    class="owl-carousel owl-theme custom-dot-navigation owl-project-slider owl-std-navigation">

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="The parallel kitchen comes with glossy laminate cabinets, tall storage units designed by budget interior designers in mumbai"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/11/18112516/the-parallel-kitchen-comes-with-glossy-laminate-cabinets-tall-storage-units-designed-by-budget-interior-designers-in-mumbai.jpg">

                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The parallel kitchen comes with glossy laminate cabinets, tall
                                                    storage units, and an appliance garage with a sliding door.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Bedroom with a unique wooden laminate TV unit with open shelves above designed by architects & interior designers in mumbai"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/11/18112441/bedroom-with-a-unique-wooden-laminate-tv-unit-with-open-shelves-above-designed-by-architects-and-interior-designers-in-mumbai.jpg">

                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The bedroom also has a unique wooden laminate TV unit with open
                                                    shelves above and a bench attached for extra seating space.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Interior design services in mumbai with master bedroom with a sliding door floor-to-ceiling wardrobe"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/11/18112509/interior-design-services-in-mumbai-with-master-bedroom-with-a-sliding-door-floor-to-ceiling-wardrobe.jpg">

                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>A master bedroom with a sliding door floor-to-ceiling wardrobe
                                                    that keeps the room clutter-free and organised.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Interior designers in south mumbai where the second bedroom has a floor-to-ceiling wardrobe in yellow with a sliding door mechanism"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/11/18112503/interior-designers-in-south-mumbai-where-the-second-bedroom-has-a-floor-to-ceiling-wardrobe-in-yellow-with-a-sliding-door-mechanism.jpg">
   
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The second bedroom also has a floor-to-ceiling wardrobe in yellow
                                                    with a sliding door mechanism and a lively leaf patterned wallpaper
                                                    in blue that makes a striking contrast.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="The third bedroom comes with a smart Murphy bed setup that can be pushed back into the wall designed by famous interior designers in mumbai"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/11/18112522/third-bedroom-comes-with-a-smart-murphy-bed-setup-that-can-be-pushed-back-into-the-wall-designed-by-famous-interior-designers-in-mumbai.jpg">
        
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>The third bedroom comes with a smart Murphy bed setup that can be
                                                    pushed back into the wall when not in use to become a comfortable
                                                    sofa when not in use.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Best residential interior designers in mumbai where a lively, bright living room with an elegant pink sofa and chaise lounge set"
                                                src="<?php echo base_url(); ?>assets/uploads/2021/11/18112456/best-residential-interior-designers-in-mumbai-where-a-lively-bright-living-room-with-an-elegant-pink-sofa-and-chaise-lounge-set.jpg">
                                         
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>A lively, bright living room with an elegant pink sofa and chaise
                                                    lounge set. A three-tiered coffee table completes the living room's
                                                    seating arrangement.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="collection-slider-img-section">


                                            <img class="img-fluid"
                                                alt="Best home interior designer in mumbai where the dining room's interior design is highlighted with a mirrored wall facing the table."
                                                src="<?php echo base_url(); ?>assets/uploads/2021/11/18112448/best-home-interior-designer-in-mumbai-where-the-dining-rooms-interior-design-is-highlighted-with-a-mirrored-wall-facing-the-table.jpg">
                                          
                                        </div>
                                        <div>
                                            <div
                                                style="padding: 10px;font-size: 16px;line-height: 20px; font-style: italic; text-align: center;">
                                                <span>This dining room's interior design is highlighted with a mirrored
                                                    wall facing the table. A crockery unit below provides space for
                                                    storage while the dining table set up with four open back dining
                                                    chairs complement the design scheme of this space.</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-8">
                            <div class="collection-title">
                                <h2>Mukesh Shah&#8217;s 3BHK Home In Mumbai</h2>
                                <p class="designed-by-project">Designed By: <span><strong>Virat Sarkar</strong></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4">
                            <div class="collection-cta-link i-want-this-btn i-want-this-btn-new project-desk-cta">
                                <a id="i-want-this" class="" data-toggle="modal" href="#contactUsModal">
                                    Get Free Quote</a>
                            </div>
                        </div>
                        <div class="col-lg-12 responsive-space-cutter-left-bottom">
                            <div class="project-detail-section new-collection-show" id="collection-hide-section-27923">
                                <div class="project-detail-main-title">
                                    <h3>Project Details</h3>
                                </div>
                                <div class="project-detail-grid">
                                    <div class="project-detail-list">
                                        <h5>Project Name</h5>
                                        <p>Ashford Royale</p>
                                    </div>
                                    <div class="project-detail-list">
                                        <h5>Property Area</h5>
                                        <p>Mumbai</p>
                                    </div>
                                    <div class="project-detail-list">
                                        <h5>Property Type</h5>
                                        <p>3 BHK</p>
                                    </div>
                                </div>
                                <div class="project-client-brief-section">
                                    <h3>Client Brief</h3>
                                    <p><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Mukesh Shah and his family wanted a well-structured home that looked modern, functional, and practical. They wanted their place to have setups with modular furniture pieces that are elegant and multifinctional. They also wanted the house to look spacious, airy and well-lit.\n&quot;}"
                                            data-sheets-userformat="{&quot;2&quot;:5055,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:15724527},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;10&quot;:0,&quot;11&quot;:4,&quot;12&quot;:0,&quot;15&quot;:&quot;EB Garamond&quot;}">Mukesh
                                            Shah and his family wanted a well-structured home that looked modern,
                                            functional, and practical. They wanted their place to have setups with
                                            modular furniture pieces that are elegant and multifinctional. They also
                                            wanted the house to look spacious, airy and well-lit.<br>
                                        </span></p>
                                </div>
                                <div class="collection-special-features-title project-feature-title">
                                    <h2>Design Solution</h2>
                                </div>
                                <div class="collection-special-features-description">
                                    <p><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;\nOur designers came up with a interior setup equipped with the best pieces of modular furniture. They created a design amalgamation of luxury and functionality to suit the Shah family's lifestyle.\n&quot;}"
                                            data-sheets-userformat="{&quot;2&quot;:13247,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:15724527},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;10&quot;:0,&quot;11&quot;:4,&quot;12&quot;:0,&quot;15&quot;:&quot;EB Garamond&quot;,&quot;16&quot;:11}">Our
                                            designers came up with an interior setup equipped with the best pieces of
                                            modular furniture. They created a design amalgamation of luxury and
                                            functionality to suit the Shah family&#8217;s lifestyle.<br>
                                        </span></p>
                                </div>
                            </div>
                            <div class="show-more-text" id="show-more-text-27923"><span class="text-change"
                                    id="text-change-27923">More Details</span> <span
                                    class="arrow-change arrow-change-project">›</span></div>
                            <!--<div class="collection-description project-feature-title">
							<h3>Description</h3>
													</div>-->
                            <div class="collection-cta-link i-want-this-btn i-want-this-btn-new project-mob-cta">
                                <a id="i-want-this" class="" data-toggle="modal" href="#contactUsModal">
                                    Get Free Quote</a>
                            </div>
                        </div>




                    </div>


                    <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $("#show-more-text-27923").click(function() {

                            if ($("#text-change-27923").text() == 'More Details') {
                                $(".new-collection-show").hide('slow');
                                $("#collection-hide-section-27923").slideToggle('slow');
                                $(".show-more-text .text-change").text('More Details');
                                $(".show-more-text .arrow-change-project").css("transform",
                                    "rotate(90deg)");
                                $("#text-change-27923").text('Less Details');
                                $("#show-more-text-27923 .arrow-change-project").css("transform",
                                    "rotate(-90deg)");
                            } else {
                                $("#collection-hide-section-27923").slideToggle('slow');
                                $("#text-change-27923").text('More Details');
                                $("#show-more-text-27923 .arrow-change-project").css("transform",
                                    "rotate(90deg)")
                            }
                        });
                    });
                    </script>
                    <style></style>
                </div><noscript>
                    <div class="alm-paging">Pages: <span class="page"><a href="index-1.htm?pg=1">1</a></span><span
                            class="page"><a href="index-2.htm?pg=2">2</a></span><span class="page"><a
                                href="index-3.htm?pg=3">3</a></span><span class="page"><a
                                href="index-4.htm?pg=4">4</a></span><span class="page"><a
                                href="index-5.htm?pg=5">5</a></span><span class="page"><a
                                href="index-6.htm?pg=6">6</a></span><span class="page"><a
                                href="index-7.htm?pg=7">7</a></span><span class="page"><a
                                href="index-8.htm?pg=8">8</a></span><span class="page"><a
                                href="index-9.htm?pg=9">9</a></span><span class="page"><a
                                href="index-10.htm?pg=10">10</a></span><span class="page"><a
                                href="index-11.htm?pg=11">11</a></span></div>
                </noscript>
                <div class="alm-btn-wrap" data-rel="ajax-load-more"><button class="alm-load-more-btn more "
                        type="button">Load more </button></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
    let clearBtn = document.getElementById('reset-project-filter');
    clearBtn.addEventListener('click', function(e) {
        almfilters.reset();
    });
});
</script>
