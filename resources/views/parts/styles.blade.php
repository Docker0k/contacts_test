<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css"
      integrity="sha512-WEQNv9d3+sqyHjrqUZobDhFARZDko2wpWdfcpv44lsypsSuMO0kHGd3MQ8rrsBn/Qa39VojphdU6CMkpJUmDVw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>
<style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    a {
        background-color: transparent
    }

    [hidden] {
        display: none
    }

    html {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        line-height: 1.5
    }

    *, :after, :before {
        box-sizing: border-box;
        border: 0 solid #e2e8f0
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    svg, video {
        display: block;
        vertical-align: middle
    }

    video {
        max-width: 100%;
        height: auto
    }

    .bg-gray-100 {
        --bg-opacity: 1;
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252)
    }

    .flex {
        display: flex
    }

    .justify-center {
        justify-content: center
    }

    .min-h-screen {
        min-height: 88vh
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .relative {
        position: relative
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .justify-right {
        justify-content: flex-end;
    }

    .pt-30 {
        padding-top: 30px;
    }

    @media (min-width: 640px) {
        .sm\:items-center {
            align-items: center
        }

        .sm\:pt-0 {
            padding-top: 0
        }
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-900 {
            --bg-opacity: 1;
            background-color: #1a202c;
            background-color: rgba(26, 32, 44)
        }
    }

    body {
        font-family: 'Nunito', sans-serif;
    }

    .pagination, .nav-menu {
        padding: 0;
        list-style: none;
        display: inline-flex;
        align-items: center;
        margin: 0 -5px;
    }

    .pagination__item, .nav-item {
        padding: 0 5px;
        flex-shrink: 0;
    }

    .pagination__link.is-active, .nav-link.is-active {
        color: #f24942;
        border-color: #f24942;
    }

    .pagination__link, .nav-link {
        padding: 0 5px;
        display: block;
        font-size: .875rem;
        font-weight: 700;
        color: #929292;
        border-bottom: 2px solid transparent;
        transition: .3s;
        text-decoration: none;
    }

    .table-scroll {
        width: 100%;
        display: block;
        empty-cells: show;

    }

    .table-scroll thead {
        background-color: #f1f1f1;
        position: relative;
        display: block;
        width: 100%;
    }

    .table-scroll tbody {
        /* Position */
        display: block;
        position: relative;
        width: 100%;
        overflow-y: scroll;
        /* Decoration */
        border-top: 1px solid rgba(0, 0, 0, 0.2);
    }

    .table-scroll tr {
        width: 100%;
        display: flex;
    }

    .table-scroll td, .table-scroll th {
        flex-basis: 100%;
        flex-grow: 2;
        display: block;
        padding: 1rem;
        text-align: left;
    }

    /* Other options */

    .table-scroll.small-first-col td:first-child,
    .table-scroll.small-first-col th:first-child {
        flex-basis: 20%;
        flex-grow: 1;
    }

    .table-scroll tbody tr:nth-child(2n) {
        background-color: rgba(130, 130, 170, 0.1);
    }

    .body-screen {
        max-height: 50vh;
    }

    .small-col {
        flex-basis: 10%;
    }

    .btn {
        display: inline-block;
        margin-bottom: 0;
        font-weight: normal;
        text-align: center;
        vertical-align: middle;
        touch-action: manipulation;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        white-space: nowrap;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        border-radius: 4px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        margin: 0 2px;
    }

    .btn:focus, .btn:active:focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn.active.focus {
        outline: thin dotted;
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px
    }

    .btn:hover, .btn:focus, .btn.focus {
        color: #333;
        text-decoration: none
    }

    .btn:active, .btn.active {
        outline: 0;
        background-image: none;
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125)
    }

    .btn.disabled, .btn[disabled], fieldset[disabled] .btn {
        cursor: not-allowed;
        opacity: .65;
        filter: alpha(opacity=65);
        -webkit-box-shadow: none;
        box-shadow: none
    }

    a.btn.disabled, fieldset[disabled] a.btn {
        pointer-events: none
    }

    .btn-default {
        color: #333;
        background-color: #fff;
        border-color: #ccc
    }

    .btn-default:focus, .btn-default.focus {
        color: #333;
        background-color: #e6e6e6;
        border-color: #8c8c8c
    }

    .btn-default:hover {
        color: #333;
        background-color: #e6e6e6;
        border-color: #adadad
    }

    .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default {
        color: #333;
        background-color: #e6e6e6;
        border-color: #adadad
    }

    .btn-default:active:hover, .btn-default.active:hover, .open > .dropdown-toggle.btn-default:hover, .btn-default:active:focus, .btn-default.active:focus, .open > .dropdown-toggle.btn-default:focus, .btn-default:active.focus, .btn-default.active.focus, .open > .dropdown-toggle.btn-default.focus {
        color: #333;
        background-color: #d4d4d4;
        border-color: #8c8c8c
    }

    .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default {
        background-image: none
    }

    .btn-default.disabled, .btn-default[disabled], fieldset[disabled] .btn-default, .btn-default.disabled:hover, .btn-default[disabled]:hover, fieldset[disabled] .btn-default:hover, .btn-default.disabled:focus, .btn-default[disabled]:focus, fieldset[disabled] .btn-default:focus, .btn-default.disabled.focus, .btn-default[disabled].focus, fieldset[disabled] .btn-default.focus, .btn-default.disabled:active, .btn-default[disabled]:active, fieldset[disabled] .btn-default:active, .btn-default.disabled.active, .btn-default[disabled].active, fieldset[disabled] .btn-default.active {
        background-color: #fff;
        border-color: #ccc
    }

    .btn-default .badge {
        color: #fff;
        background-color: #333
    }

    .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4
    }

    .btn-primary:focus, .btn-primary.focus {
        color: #fff;
        background-color: #286090;
        border-color: #122b40
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #286090;
        border-color: #204d74
    }

    .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #286090;
        border-color: #204d74
    }

    .btn-primary:active:hover, .btn-primary.active:hover, .open > .dropdown-toggle.btn-primary:hover, .btn-primary:active:focus, .btn-primary.active:focus, .open > .dropdown-toggle.btn-primary:focus, .btn-primary:active.focus, .btn-primary.active.focus, .open > .dropdown-toggle.btn-primary.focus {
        color: #fff;
        background-color: #204d74;
        border-color: #122b40
    }

    .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
        background-image: none
    }

    .btn-primary.disabled, .btn-primary[disabled], fieldset[disabled] .btn-primary, .btn-primary.disabled:hover, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary:hover, .btn-primary.disabled:focus, .btn-primary[disabled]:focus, fieldset[disabled] .btn-primary:focus, .btn-primary.disabled.focus, .btn-primary[disabled].focus, fieldset[disabled] .btn-primary.focus, .btn-primary.disabled:active, .btn-primary[disabled]:active, fieldset[disabled] .btn-primary:active, .btn-primary.disabled.active, .btn-primary[disabled].active, fieldset[disabled] .btn-primary.active {
        background-color: #337ab7;
        border-color: #2e6da4
    }

    .btn-primary .badge {
        color: #337ab7;
        background-color: #fff
    }

    .btn-success {
        color: #fff;
        background-color: #1d9d74;
        border-color: #198764
    }

    .btn-success:focus, .btn-success.focus {
        color: #fff;
        background-color: #157254;
        border-color: #051c15
    }

    .btn-success:hover {
        color: #fff;
        background-color: #157254;
        border-color: #0f543e
    }

    .btn-success:active, .btn-success.active, .open > .dropdown-toggle.btn-success {
        color: #fff;
        background-color: #157254;
        border-color: #0f543e
    }

    .btn-success:active:hover, .btn-success.active:hover, .open > .dropdown-toggle.btn-success:hover, .btn-success:active:focus, .btn-success.active:focus, .open > .dropdown-toggle.btn-success:focus, .btn-success:active.focus, .btn-success.active.focus, .open > .dropdown-toggle.btn-success.focus {
        color: #fff;
        background-color: #0f543e;
        border-color: #051c15
    }

    .btn-success:active, .btn-success.active, .open > .dropdown-toggle.btn-success {
        background-image: none
    }

    .btn-success.disabled, .btn-success[disabled], fieldset[disabled] .btn-success, .btn-success.disabled:hover, .btn-success[disabled]:hover, fieldset[disabled] .btn-success:hover, .btn-success.disabled:focus, .btn-success[disabled]:focus, fieldset[disabled] .btn-success:focus, .btn-success.disabled.focus, .btn-success[disabled].focus, fieldset[disabled] .btn-success.focus, .btn-success.disabled:active, .btn-success[disabled]:active, fieldset[disabled] .btn-success:active, .btn-success.disabled.active, .btn-success[disabled].active, fieldset[disabled] .btn-success.active {
        background-color: #1d9d74;
        border-color: #198764
    }

    .btn-success .badge {
        color: #1d9d74;
        background-color: #fff
    }

    .btn-info {
        color: #fff;
        background-color: #5bc0de;
        border-color: #46b8da
    }

    .btn-info:focus, .btn-info.focus {
        color: #fff;
        background-color: #31b0d5;
        border-color: #1b6d85
    }

    .btn-info:hover {
        color: #fff;
        background-color: #31b0d5;
        border-color: #269abc
    }

    .btn-info:active, .btn-info.active, .open > .dropdown-toggle.btn-info {
        color: #fff;
        background-color: #31b0d5;
        border-color: #269abc
    }

    .btn-info:active:hover, .btn-info.active:hover, .open > .dropdown-toggle.btn-info:hover, .btn-info:active:focus, .btn-info.active:focus, .open > .dropdown-toggle.btn-info:focus, .btn-info:active.focus, .btn-info.active.focus, .open > .dropdown-toggle.btn-info.focus {
        color: #fff;
        background-color: #269abc;
        border-color: #1b6d85
    }

    .btn-info:active, .btn-info.active, .open > .dropdown-toggle.btn-info {
        background-image: none
    }

    .btn-info.disabled, .btn-info[disabled], fieldset[disabled] .btn-info, .btn-info.disabled:hover, .btn-info[disabled]:hover, fieldset[disabled] .btn-info:hover, .btn-info.disabled:focus, .btn-info[disabled]:focus, fieldset[disabled] .btn-info:focus, .btn-info.disabled.focus, .btn-info[disabled].focus, fieldset[disabled] .btn-info.focus, .btn-info.disabled:active, .btn-info[disabled]:active, fieldset[disabled] .btn-info:active, .btn-info.disabled.active, .btn-info[disabled].active, fieldset[disabled] .btn-info.active {
        background-color: #5bc0de;
        border-color: #46b8da
    }

    .btn-info .badge {
        color: #5bc0de;
        background-color: #fff
    }

    .btn-warning {
        color: #fff;
        background-color: #f0ad4e;
        border-color: #eea236
    }

    .btn-warning:focus, .btn-warning.focus {
        color: #fff;
        background-color: #ec971f;
        border-color: #985f0d
    }

    .btn-warning:hover {
        color: #fff;
        background-color: #ec971f;
        border-color: #d58512
    }

    .btn-warning:active, .btn-warning.active, .open > .dropdown-toggle.btn-warning {
        color: #fff;
        background-color: #ec971f;
        border-color: #d58512
    }

    .btn-warning:active:hover, .btn-warning.active:hover, .open > .dropdown-toggle.btn-warning:hover, .btn-warning:active:focus, .btn-warning.active:focus, .open > .dropdown-toggle.btn-warning:focus, .btn-warning:active.focus, .btn-warning.active.focus, .open > .dropdown-toggle.btn-warning.focus {
        color: #fff;
        background-color: #d58512;
        border-color: #985f0d
    }

    .btn-warning:active, .btn-warning.active, .open > .dropdown-toggle.btn-warning {
        background-image: none
    }

    .btn-warning.disabled, .btn-warning[disabled], fieldset[disabled] .btn-warning, .btn-warning.disabled:hover, .btn-warning[disabled]:hover, fieldset[disabled] .btn-warning:hover, .btn-warning.disabled:focus, .btn-warning[disabled]:focus, fieldset[disabled] .btn-warning:focus, .btn-warning.disabled.focus, .btn-warning[disabled].focus, fieldset[disabled] .btn-warning.focus, .btn-warning.disabled:active, .btn-warning[disabled]:active, fieldset[disabled] .btn-warning:active, .btn-warning.disabled.active, .btn-warning[disabled].active, fieldset[disabled] .btn-warning.active {
        background-color: #f0ad4e;
        border-color: #eea236
    }

    .btn-warning .badge {
        color: #f0ad4e;
        background-color: #fff
    }

    .btn-danger {
        color: #fff;
        background-color: #d9534f;
        border-color: #d43f3a
    }

    .btn-danger:focus, .btn-danger.focus {
        color: #fff;
        background-color: #c9302c;
        border-color: #761c19
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #c9302c;
        border-color: #ac2925
    }

    .btn-danger:active, .btn-danger.active, .open > .dropdown-toggle.btn-danger {
        color: #fff;
        background-color: #c9302c;
        border-color: #ac2925
    }

    .btn-danger:active:hover, .btn-danger.active:hover, .open > .dropdown-toggle.btn-danger:hover, .btn-danger:active:focus, .btn-danger.active:focus, .open > .dropdown-toggle.btn-danger:focus, .btn-danger:active.focus, .btn-danger.active.focus, .open > .dropdown-toggle.btn-danger.focus {
        color: #fff;
        background-color: #ac2925;
        border-color: #761c19
    }

    .btn-danger:active, .btn-danger.active, .open > .dropdown-toggle.btn-danger {
        background-image: none
    }

    .btn-danger.disabled, .btn-danger[disabled], fieldset[disabled] .btn-danger, .btn-danger.disabled:hover, .btn-danger[disabled]:hover, fieldset[disabled] .btn-danger:hover, .btn-danger.disabled:focus, .btn-danger[disabled]:focus, fieldset[disabled] .btn-danger:focus, .btn-danger.disabled.focus, .btn-danger[disabled].focus, fieldset[disabled] .btn-danger.focus, .btn-danger.disabled:active, .btn-danger[disabled]:active, fieldset[disabled] .btn-danger:active, .btn-danger.disabled.active, .btn-danger[disabled].active, fieldset[disabled] .btn-danger.active {
        background-color: #d9534f;
        border-color: #d43f3a
    }

    .btn-danger .badge {
        color: #d9534f;
        background-color: #fff
    }

    .btn-link {
        color: #21b384;
        font-weight: normal;
        border-radius: 0
    }

    .btn-link, .btn-link:active, .btn-link.active, .btn-link[disabled], fieldset[disabled] .btn-link {
        background-color: transparent;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .btn-link, .btn-link:hover, .btn-link:focus, .btn-link:active {
        border-color: transparent
    }

    .btn-link:hover, .btn-link:focus {
        color: #198764;
        text-decoration: underline;
        background-color: transparent
    }

    .btn-link[disabled]:hover, fieldset[disabled] .btn-link:hover, .btn-link[disabled]:focus, fieldset[disabled] .btn-link:focus {
        color: #777;
        text-decoration: none
    }

    .btn-lg, .btn-group-lg > .btn {
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px
    }

    .btn-sm, .btn-group-sm > .btn {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }

    .btn-xs, .btn-group-xs > .btn {
        padding: 1px 5px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }

    .btn-block {
        display: block;
        width: 100%
    }

    .btn-block + .btn-block {
        margin-top: 5px
    }

    input[type="submit"].btn-block, input[type="reset"].btn-block, input[type="button"].btn-block {
        width: 100%
    }

    .box {
        position: relative;
        border-radius: 3px;
        background: #ffffff;
        border-top: 3px solid #d2d6de;
        margin-bottom: 20px;
        width: 100%;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
    }

    .box.box-primary {
        border-top-color: #3c8dbc
    }

    .box.box-info {
        border-top-color: #00c0ef
    }

    .box.box-danger {
        border-top-color: #dd4b39
    }

    .box.box-warning {
        border-top-color: #f39c12
    }

    .box.box-success {
        border-top-color: #00a65a
    }

    .box.box-default {
        border-top-color: #d2d6de
    }

    .box.collapsed-box .box-body, .box.collapsed-box .box-footer {
        display: none
    }

    .box .nav-stacked > li {
        border-bottom: 1px solid #f4f4f4;
        margin: 0
    }

    .box .nav-stacked > li:last-of-type {
        border-bottom: none
    }

    .box.height-control .box-body {
        max-height: 300px;
        overflow: auto
    }

    .box .border-right {
        border-right: 1px solid #f4f4f4
    }

    .box .border-left {
        border-left: 1px solid #f4f4f4
    }

    .box.box-solid {
        border-top: 0
    }

    .box.box-solid > .box-header .btn.btn-default {
        background: transparent
    }

    .box.box-solid > .box-header .btn:hover, .box.box-solid > .box-header a:hover {
        background: rgba(0, 0, 0, 0.1)
    }

    .box.box-solid.box-default {
        border: 1px solid #d2d6de
    }

    .box.box-solid.box-default > .box-header {
        color: #444;
        background: #d2d6de;
        background-color: #d2d6de
    }

    .box.box-solid.box-default > .box-header a, .box.box-solid.box-default > .box-header .btn {
        color: #444
    }

    .box.box-solid.box-primary {
        border: 1px solid #3c8dbc
    }

    .box.box-solid.box-primary > .box-header {
        color: #fff;
        background: #3c8dbc;
        background-color: #3c8dbc
    }

    .box.box-solid.box-primary > .box-header a, .box.box-solid.box-primary > .box-header .btn {
        color: #fff
    }

    .box.box-solid.box-info {
        border: 1px solid #00c0ef
    }

    .box.box-solid.box-info > .box-header {
        color: #fff;
        background: #00c0ef;
        background-color: #00c0ef
    }

    .box.box-solid.box-info > .box-header a, .box.box-solid.box-info > .box-header .btn {
        color: #fff
    }

    .box.box-solid.box-danger {
        border: 1px solid #dd4b39
    }

    .box.box-solid.box-danger > .box-header {
        color: #fff;
        background: #dd4b39;
        background-color: #dd4b39
    }

    .box.box-solid.box-danger > .box-header a, .box.box-solid.box-danger > .box-header .btn {
        color: #fff
    }

    .box.box-solid.box-warning {
        border: 1px solid #f39c12
    }

    .box.box-solid.box-warning > .box-header {
        color: #fff;
        background: #f39c12;
        background-color: #f39c12
    }

    .box.box-solid.box-warning > .box-header a, .box.box-solid.box-warning > .box-header .btn {
        color: #fff
    }

    .box.box-solid.box-success {
        border: 1px solid #00a65a
    }

    .box.box-solid.box-success > .box-header {
        color: #fff;
        background: #00a65a;
        background-color: #00a65a
    }

    .box.box-solid.box-success > .box-header a, .box.box-solid.box-success > .box-header .btn {
        color: #fff
    }

    .box.box-solid > .box-header > .box-tools .btn {
        border: 0;
        box-shadow: none
    }

    .box.box-solid[class*='bg'] > .box-header {
        color: #fff
    }

    .box .box-group > .box {
        margin-bottom: 5px
    }

    .box .knob-label {
        text-align: center;
        color: #333;
        font-weight: 100;
        font-size: 12px;
        margin-bottom: 0.3em
    }

    .box > .overlay, .overlay-wrapper > .overlay, .box > .loading-img, .overlay-wrapper > .loading-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%
    }

    .box .overlay, .overlay-wrapper .overlay {
        z-index: 50;
        background: rgba(255, 255, 255, 0.7);
        border-radius: 3px
    }

    .box .overlay > .fa, .overlay-wrapper .overlay > .fa {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -15px;
        margin-top: -15px;
        color: #000;
        font-size: 30px
    }

    .box .overlay.dark, .overlay-wrapper .overlay.dark {
        background: rgba(0, 0, 0, 0.5)
    }

    .box-header:before, .box-body:before, .box-footer:before, .box-header:after, .box-body:after, .box-footer:after {
        content: " ";
        display: table
    }

    .box-header:after, .box-body:after, .box-footer:after {
        clear: both
    }

    .box-header {
        color: #444;
        display: block;
        padding: 10px;
        position: relative
    }

    .box-header.with-border {
        border-bottom: 1px solid #f4f4f4
    }


    .buttons-block {
        text-align: right;
        display: block;
        margin: 10px 0;
    }

    .buttons-block--sticky {
        position: sticky;
        top: 5px;
        z-index: 9;
    }

    .buttons-block--sticky .btn {
        box-shadow: 0 0 0 5px #ecf0f5;
    }

    .buttons-block button {
        margin-right: 5px;
    }

    .form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
        box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }

    .form-control:focus {
        border-color: #3c8dbc;
        box-shadow: none
    }

    .form-control::-moz-placeholder, .form-control:-ms-input-placeholder, .form-control::-webkit-input-placeholder {
        color: #bbb;
        opacity: 1
    }

    .form-control:not(select) {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none
    }

    .input-group .input-group-addon {
        border-radius: 0;
        border-color: #d2d6de;
        background-color: #fff
    }

    .modal-dialog {
        width: 600px;
        margin: 30px auto;
    }

    .modal-content {
        position: relative;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        outline: 0;
        -webkit-box-shadow: 0 3px 9px rgb(0 0 0 / 50%);
        box-shadow: 0 3px 9px rgb(0 0 0 / 50%);
    }

    .mfp-container {
        text-align: center;
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        padding: 0 8px;
        box-sizing: border-box;
    }

    .mfp-content {
        position: relative;
        display: inline-block;
        vertical-align: middle;
        margin: 0 auto;
        text-align: left;
        z-index: 1045;
    }

    .modal-body {
        position: relative;
        padding: 15px;
        border-radius: 5px;
    }
</style>
