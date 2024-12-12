<html lang="en">
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script>

<head>
    <meta charset="UTF-8">


    <link rel="apple-touch-icon" type="image/png"
        href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

    <link rel="mask-icon" type="image/x-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg"
        color="#111">






    <title>Simple responsive website using HTML CSS and Bootstrap 5</title>

    <link rel="canonical" href="https://codepen.io/codingyaar/pen/oNJvOZO">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        :root {
            --accent-color: #f5a841;
        }

        section [class^="container"] {
            padding: 4rem 2rem;
        }

        @media screen and (min-width: 1024px) {
            section [class^="container"] {
                padding: 4rem;
            }

            nav [class^="container"] {
                padding: 0 4rem;
            }
        }

        section:not(:first-of-type) {
            text-align: center;
        }

        section:nth-child(2n) {
            background-color: #ecf2ff;
        }

        .container a {
            color: #000000;
            text-decoration: none;
        }

        .container a:hover {
            color: var(--accent-color);
        }

        section .card,
        .btn-outline-dark {
            border: 2px solid #000000;
            box-shadow: 4px 4px #000000;
            transition: all 0.4s;
        }

        .btn-outline-dark:hover {
            box-shadow: 4px 4px var(--accent-color);
        }

        /* NAVBAR */

        .navbar {
            background-color: #ffffff;
        }

        .navbar-nav .nav-link {
            color: #000000;
            font-size: 1.1rem;
            transition: all 0.5s;
        }

        .navbar-nav .nav-link:hover {
            color: var(--accent-color);
        }

        @media screen and (min-width: 1024px) {
            .navbar-nav .nav-item {
                padding: 0 1rem;
            }

            .navbar-brand {
                font-size: 1.5rem;
            }
        }

        /* HERO */

        section.hero {
            padding-top: 72px;
        }

        @media screen and (max-width: 576px) {
            section.hero {
                text-align: center;
            }

            section.hero img {
                width: 80%;
                margin: 0.5rem 0;
            }
        }

        /* category */

        section.category i {
            font-size: 2rem;
            margin: 1rem auto 0;
            border: 2px solid #000000;
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--accent-color);
        }

        section .card {
            max-width: 22rem;
            margin-inline: auto;
        }

        /* ABOUT */
        @media screen and (min-width: 1024px) {

            section.about .container,
            section.testimonials .container {
                width: 60%;
            }
        }

        /* PROJECTS */
        section.projects .card {
            max-width: 17rem;
            text-align: left;
        }

        section.projects .card img {
            max-width: 70%;
            margin: 1rem auto;
        }

        /* TESTIMONIALS */

        section.testimonials .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }

        section.testimonials .carousel-item p {
            max-width: 80%;
            border-left: 5px solid var(--accent-color);
            padding-left: 1rem;
            text-align: left;
        }

        section.testimonials .carousel-item h5 {
            text-align: left;
        }

        section.testimonials .carousel-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        section.testimonials .carousel.carousel-fade .carousel-item {
            transition: opacity 0.5s;
        }

        /* CONTACT */
        section.contact .social-media a {
            padding: 0 0.5rem;
            font-size: 1.3rem;
        }
    </style>

    <script>
        window.console = window.console || function(t) {};
    </script>



    <style type="text/css">
        .lf-progress {
            -webkit-appearance: none;
            -moz-apperance: none;
            width: 100%;
            /* margin: 0 10px; */
            height: 4px;
            border-radius: 3px;
            cursor: pointer;
        }

        .lf-progress:focus {
            outline: none;
            border: none;
        }

        .lf-progress::-moz-range-track {
            cursor: pointer;
            background: none;
            border: none;
            outline: none;
        }

        .lf-progress::-webkit-slider-thumb {
            -webkit-appearance: none !important;
            height: 13px;
            width: 13px;
            border: 0;
            border-radius: 50%;
            background: #0fccce;
            cursor: pointer;
        }

        .lf-progress::-moz-range-thumb {
            -moz-appearance: none !important;
            height: 13px;
            width: 13px;
            border: 0;
            border-radius: 50%;
            background: #0fccce;
            cursor: pointer;
        }

        .lf-progress::-ms-track {
            width: 100%;
            height: 3px;
            cursor: pointer;
            background: transparent;
            border-color: transparent;
            color: transparent;
        }

        .lf-progress::-ms-fill-lower {
            background: #ccc;
            border-radius: 3px;
        }

        .lf-progress::-ms-fill-upper {
            background: #ccc;
            border-radius: 3px;
        }

        .lf-progress::-ms-thumb {
            border: 0;
            height: 15px;
            width: 15px;
            border-radius: 50%;
            background: #0fccce;
            cursor: pointer;
        }

        .lf-progress:focus::-ms-fill-lower {
            background: #ccc;
        }

        .lf-progress:focus::-ms-fill-upper {
            background: #ccc;
        }

        .lf-player-container :focus {
            outline: 0;
        }

        .lf-popover {
            position: relative;
        }

        .lf-popover-content {
            display: inline-block;
            position: absolute;
            opacity: 1;
            visibility: visible;
            transform: translate(0, -10px);
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
            transition: all 0.3s cubic-bezier(0.75, -0.02, 0.2, 0.97);
        }

        .lf-popover-content.hidden {
            opacity: 0;
            visibility: hidden;
            transform: translate(0, 0px);
        }

        .lf-player-btn-container {
            display: flex;
            align-items: center;
        }

        .lf-player-btn {
            cursor: pointer;
            fill: #999;
            width: 14px;
        }

        .lf-player-btn.active {
            fill: #555;
        }

        .lf-popover {
            position: relative;
        }

        .lf-popover-content {
            display: inline-block;
            position: absolute;
            background-color: #ffffff;
            opacity: 1;

            transform: translate(0, -10px);
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
            transition: all 0.3s cubic-bezier(0.75, -0.02, 0.2, 0.97);
            padding: 10px;
        }

        .lf-popover-content.hidden {
            opacity: 0;
            visibility: hidden;
            transform: translate(0, 0px);
        }

        .lf-arrow {
            position: absolute;
            z-index: -1;
            content: '';
            bottom: -9px;
            border-style: solid;
            border-width: 10px 10px 0px 10px;
        }

        .lf-left-align,
        .lf-left-align .lfarrow {
            left: 0;
            right: unset;
        }

        .lf-right-align,
        .lf-right-align .lf-arrow {
            right: 0;
            left: unset;
        }

        .lf-text-input {
            border: 1px #ccc solid;
            border-radius: 5px;
            padding: 3px;
            width: 60px;
            margin: 0;
        }

        .lf-color-picker {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            height: 90px;
        }

        .lf-color-selectors {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .lf-color-component {
            display: flex;
            flex-direction: row;
            font-size: 12px;
            align-items: center;
            justify-content: center;
        }

        .lf-color-component strong {
            width: 40px;
        }

        .lf-color-component input[type='range'] {
            margin: 0 0 0 10px;
        }

        .lf-color-component input[type='number'] {
            width: 50px;
            margin: 0 0 0 10px;
        }

        .lf-color-preview {
            font-size: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            padding-left: 5px;
        }

        .lf-preview {
            height: 60px;
            width: 60px;
        }

        .lf-popover-snapshot {
            width: 150px;
        }

        .lf-popover-snapshot h5 {
            margin: 5px 0 10px 0;
            font-size: 0.75rem;
        }

        .lf-popover-snapshot a {
            display: block;
            text-decoration: none;
        }

        .lf-popover-snapshot a:before {
            content: '⥼';
            margin-right: 5px;
        }

        .lf-popover-snapshot .lf-note {
            display: block;
            margin-top: 10px;
            color: #999;
        }

        .lf-player-controls>div {
            margin-right: 5px;
            margin-left: 5px;
        }

        .lf-player-controls>div:first-child {
            margin-left: 0px;
        }

        .lf-player-controls>div:last-child {
            margin-right: 0px;
        }
    </style>
    <style></style>
    <style></style>
    <style></style>
    <style></style>
    <style></style>
    <style>
        @font-face {
            font-family: "wticons";
            font-display: block;
            src: url(data:font/woff2;charset=utf-8;base64,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) format("woff2");
        }

        .wticons {
            line-height: 1;
        }

        .wticons:before {
            font-family: wticons !important;
            font-style: normal;
            font-weight: normal !important;
            vertical-align: top;
        }

        .wticon-account:before {
            content: "\f101";
        }

        .wticon-add:before {
            content: "\f102";
        }

        .wticon-cardResizeDrag:before {
            content: "\f103";
        }

        .wticon-casual:before {
            content: "\f104";
        }

        .wticon-check:before {
            content: "\f105";
        }

        .wticon-checkSmall:before {
            content: "\f106";
        }

        .wticon-chevron:before {
            content: "\f107";
        }

        .wticon-copy:before {
            content: "\f108";
        }

        .wticon-copySmall:before {
            content: "\f109";
        }

        .wticon-dismiss:before {
            content: "\f10a";
        }

        .wticon-downChevron:before {
            content: "\f10b";
        }

        .wticon-error:before {
            content: "\f10c";
        }

        .wticon-expand:before {
            content: "\f10d";
        }

        .wticon-feedback:before {
            content: "\f10e";
        }

        .wticon-filledDownArrow:before {
            content: "\f10f";
        }

        .wticon-find:before {
            content: "\f110";
        }

        .wticon-formal:before {
            content: "\f111";
        }

        .wticon-gift:before {
            content: "\f112";
        }

        .wticon-grayLogo:before {
            content: "\f113";
        }

        .wticon-grayW:before {
            content: "\f114";
        }

        .wticon-ignore:before {
            content: "\f115";
        }

        .wticon-info:before {
            content: "\f116";
        }

        .wticon-leftChevron:before {
            content: "\f117";
        }

        .wticon-logo:before {
            content: "\f118";
        }

        .wticon-love:before {
            content: "\f119";
        }

        .wticon-noRecommendations:before {
            content: "\f11a";
        }

        .wticon-paragraphRewrite:before {
            content: "\f11b";
        }

        .wticon-paste:before {
            content: "\f11c";
        }

        .wticon-pin:before {
            content: "\f11d";
        }

        .wticon-premium:before {
            content: "\f11e";
        }

        .wticon-premiumDetail:before {
            content: "\f11f";
        }

        .wticon-premiumFull:before {
            content: "\f120";
        }

        .wticon-recommendationLight:before {
            content: "\f121";
        }

        .wticon-recommendationLightCard:before {
            content: "\f122";
        }

        .wticon-recommendationLightNoSuggestions:before {
            content: "\f123";
        }

        .wticon-refine:before {
            content: "\f124";
        }

        .wticon-rewrite:before {
            content: "\f125";
        }

        .wticon-rightChevron:before {
            content: "\f126";
        }

        .wticon-rocket:before {
            content: "\f127";
        }

        .wticon-sentenceExamples:before {
            content: "\f128";
        }

        .wticon-settings:before {
            content: "\f129";
        }

        .wticon-shorten:before {
            content: "\f12a";
        }

        .wticon-tutorial:before {
            content: "\f12b";
        }

        .wticon-Unlimited:before {
            content: "\f12c";
        }

        .wticon-unlock:before {
            content: "\f12d";
        }

        .wticon-warn:before {
            content: "\f12e";
        }

        .wticon-WordtuneButton:before {
            content: "\f12f";
        }

        .wticon-x:before {
            content: "\f130";
        }

        /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy9jbGllbnQvc2hhcmVkL0ljb25zLmZvbnQuanMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7Q0FDQyxzQkFBc0I7Q0FDdEIsbUJBQW1CO0NBQ25CLDREQUFpeVQ7QUFDbHlUOztBQUVBO0NBQ0MsY0FBYztBQUNmOztBQUVBO0NBQ0MsK0JBQStCO0NBQy9CLGtCQUFrQjtDQUNsQiw4QkFBOEI7Q0FDOUIsbUJBQW1CO0FBQ3BCOztBQUVBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQiIsInNvdXJjZXNDb250ZW50IjpbIkBmb250LWZhY2Uge1xuXHRmb250LWZhbWlseTogXCJ3dGljb25zXCI7XG5cdGZvbnQtZGlzcGxheTogYmxvY2s7XG5cdHNyYzogdXJsKFwiZGF0YTpmb250L3dvZmYyO2NoYXJzZXQ9dXRmLTg7YmFzZTY0LGQwOUdNZ0FCQUFBQUFCMG9BQXNBQUFBQU45Z0FBQnpWQUFFQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFISWxDQm1BQWpFSUt5RVM3TndFMkFpUURnbEFMZ1NvQUJDQUZoQW9IaFdvYjJDOTFCR3djZ0JEbWIrZUlDazV2RktWaXM1YjkvMStTRzJORWlVZzlCSzJ0eFpMUmtKYUcwQ0lXbmFHNU1EV0plVVNqL1J1dVU2OStFOGs2M2VsRGxpOCsvbGg3aGhpcTRvM2tzcitpU1VwZnJ0MGZVK1FNY0lmSjdIa2c5cXU5LzNjUE1hMjZvaWNxVGNRVEZqVVJNc04wa21paTJYVFJlc3ZZbkJkNVZSRGx1d05nZU5ybXZ3dGE4STQyS1FrTEVheWdMUXpLR25NWWM5T3RkUm5HS3N4Vk9SZmRManJkRHpJQUFHWUd1eVpoMVhSeitmM2FxTTNGVW9URVNxeEE0ckEyLzFzejFWOFhKVHZVZ2FVQU93UXNDQURkL05xNVNEMUtyN2NaalhlZHNHRnNieERMWk5obXF0UDcrc09VTm1ZcnBjd3lDSjRZSkU2SWZ6c1JZUCsvWDh0aVViVGFKTFRIZjk3NjNNSDBzWWtrSmlYZ0hTSWhycVdOaURaU3BKSTZJV1I2WlA3blRKc2VVb1owNU81TktDS0xTdjZmcHJ2ODVPajNxSEJFR2FjSGhFTlBvSUJrMmxGaGtJeXdIYUthTUh0K2NvcU1abTNIT2xYRUlQVUdVendsb3MrT01mZmZTV3VJbzIySVJvaUtlQzJrOGY2TVFBWmt0ODhJZ0QxbVZqeFZOVTFkRHN3TXJzdzVBL0V2QnVDd01aaVpIQiswYXpRSTVWUUVmSDlJdE1OaFBTZGYrczBydUJLMGhkclFIVzRNUDhGLzJTVHlJdklSNVVmelBMQU1pOWZDQWtFeG5JZE5FTHhpSmc3NlRGaHpOeUppVGhJVXpYQXRhU3ZTM0JvV3NKVzNzRk9wU3N4R21kMzBObkZTeXlaMmdoUEtmNVJGTUFnMlo5QzhSSUVYVlpIY0JVbG1EaUJqR0xPUjREdG10aUNPYUJJZ1AzRlFKWThSNWpoWHJSbVI4U0hmWWpWSFNHNEZ5ME5ZUlpEZVQxeWtYTFZwRFBCeTdSQ2JRZUduL3R4OS9yRnYvZXlxV25XcG40cXNiYVY5SkJialNXdDZYak1hM2J3aEs5MTlSZnZtZFVuUjh4MGh1V1BtRkxTOWRqRytrZE5hdWJXYklveldoVEcxL00zUGpLV0VZVE1uc1lwbVF4eFNUV2JKNWpQZzZvbnBZVHd1V0dUNnVtWHVvRWFac2I3UHA4eDRGYk5yeHVER0p4T2tSTGlhZ3JSZlk3eE1XZ2JDM0NUbXF3czZrbnlQV0thelpnbHJSRW9YeDJScWNRVGl1a21McnE0WnlBb2FkaUlDbG51WW5Lemxkdzg3eXNNaVpoNUdyTGg5Vmd4dlA3ZU8vVW41dzNVRU5WOFYxbkQzUVJIcW9NUzRndm5kalV1Q2ZOOHErYmdYWERqRzgrYzRzSnJUeW14a1ZsdVFDVlR4TElNRThCMi9PVWlkMmdEemVjTHFZZTErM0lpR2l3Tk04LzFkN1BiWjRSdlpMYTNORGlIalNHc0xNaFh4QXJkMXIvM3R3bzNDMWZzUnY0MVprYWJHbFhwTGZCUjJEaWJNS0RjK3U3WlJvMDZERmgyaTRhM2dpUUt3UHhxK3hJUE45d2ZmUVN3SVFjaUo4Ri9RTmxZOTRtM2wyeVAvQVFOUnZZTTdBdGt2QVFWQUJMam1Cb2ZDaXZ5cG9JaTltNzNHRnVCOVZUUTRCSndRWThOT21yVG8xSzNYcEFWYjIzczh5bnRGSGEwSFRWdmFkb28vRzhpbzBhTEc4Z1hYZy9Cam5lcVYrR3JWckUzT1hvY1dNWGR4NGdGTWxBNjdGTmtwVTJXV09NbmU5c3pVVVoxYnpvcFpMbmNhY2VCUktoKy9nS0NROEh4M1ZFeGNRdEpLZnBFenNuTHlDb3BLeWlxcWF1b2FtbHJhT3JwNitnYUdSc1ltcG1ZZzJNSFAwTlJaWDlMK2hvWk9raHRFdlcyeHhrVkczOWJsOE84dnEwb2xUcEF0NVBSNHVWVzdCT2YyZ1Jmb09sMG9EOUdFQ25TaUV2V29RZ2xRalhiVWRMZktPdkROWU9FQWJlam96cW1NcXUzdTl0Q0JYclJnRURGZ0NJMFlSaHdZUVFZWVJSNFlRd1BHVVFwTW9CeVRLQUttVVlFWmxHRVdWWmhEQ3BoSEFsaEFEWmFRQlpaUkNLd2dEYXdpQ2F5aEd1dW93d1p1QVp1b3hWWkxNZGdHYUNNd1I0S1FZQ1FFQ1VYQ2tIQWtBb2xFb3BCb0pBYUpSZUtRZUNRQlNVU1NrR1FrQlVsRjBwQjBKQVBKUkxLUWJDUUh5VVh5a0h5a0FDbEVpcEJpcEFRcFJjcVFjcVFDcVVTcWtHcWtCcWxGNnBCNmhjTGpNL0dNcHh6MmMwL0lRSDROM1ljRW84MERJSmR3bTFrWThFVUFMd1hTamJ3RUd5WVVPQWtYbTVxN3NKdXp2VXpzN0lrL1U3enJ2anNQYkNHME1LMU9DQnpyUkFmNlloNkMwWVlkK3U1bUxxMUtxVlQ2b0Y2Ym1MU3JOWXR2WGhrdUJBV2xsUGtQM1IxV1M0R1VXZ3Y3MWhEaGROeU1wbzJadzJ5aE1jdHkyQVl5aTdmVnRQWDZQWHE5V2xpSS9tcjNnNUl5OHo5Mk95alF0RkVCa2pVRGpHZ0hLTjc2Tk8rckxYNCsvN21lKzNUdXkrejlGcWgyMnpTYlNEYU9xeWUvbTE4ZnlZZS82TjhlUzNIMERSaEh3S1ZoT0NxYlRkTnVxMVpMTnhvd0ZBMzVmTWpJRFRoWGNOeGlQUzdNSTRTTGIxR0gvSmNNRnJrb1VDMUtzZUN1dTRqaVM0TzBCUmc2MERqRGQ3SXp1MEVzUFozbEY3S01UaEpCQnFVN2NFcDlmU3l0SlcyOEl4bnpOYVRVKzczcFZDWmdOMFJTR1pZaFBKbEpwWE83cVNKRHVrdXdQVHkzN3lOT2FGM0hFRmFzWU1nZlUveTc3VHpQUDFiaWI3Y1pLT1h2TmUwcmVvSlZ2c0M2cHVxRWNEc3lqTXRvR0tiMUJDNWlVNVVPSlQwakNjWXNrazRZREtwRDhnZENPMHhUbDhqTG1DcnFrQWszZFZYVGlhd1NMcFBucXRKTmxaNGU3QUlUQWY5K1RodHF4cUdCU1dMYU8xalZUSW5WRjZybXJFbGhKYkJheUlKZzFIRzN1YjVncnIvRDE4ZHhCRGhnS2pEaUdNME1NTC9Sd2xnM2VpbldMeDhpTkJTbEVZWTBrbzllWFFIOCt4TU5wVHorN2JpcUVHSktpT0ZjL1VGMzRZWm5qc2dXcy9sT3gzcjlYdTJ2VmphODFpbTdxdXVlelNObTRvdmowZmhYckwrN24zK3A1UW00NklSNUpFK0VXU2ZwYlMrSmUySlExck1ZaWlkSlI0dXBZZjlJaTlJbldzZ1FvVFRzSXdpbnpKUUlIYXB4M1RpTitBQ2VKNlRqNUUrVkFmQU03SGtXQ0k2R1lHMXRVUmlwUEEvajdBSUlMZmlCWW1MRUpXNFV1YjFJdW9DSk9kVjYxaFpJOFlrWXUxR0FFU3BPN1RpSGVFTFNZWGlSaFc1UVhobnJmK1MvNW4rNHlaVUNSaWllUFFwek1ub3MyUVczNWxKbG9tdGJsTldoakV3TW90TmluVWNJQTBFRllnVFpKWVRoZlpGbklyZnpMSzFBbUF1WGNCUkx4Z2dTZEJHUW9jNmpDNEVhSHNwVUdZNkk4ZDJ3V0JCdnFtaUNLdWNnVHE0QTcyWTlRamRhZWZOTkVkTmMxTmVGbXZUV1ZBUnhmbHpNaHZpQUFtbktML1FVN3ZiRW52THNNWXpqblpBWXlYZm1iOTN1Y3Axa1hBbHFhd1VMVzEvMWpJVitHWkI2N1VETFFncHZna0VVKzNVL1JoQWFaUzFDYUZTK1U2SStOK3FMU2lZdHN6SUYzQkhqcHUzU0N6K3UrL1dlMk84cDlOd2RXNkRvMHEzT1JtV0NPcGxqdlJzakM4Rnl2QlNqd1hEV1FvVnBSaklkNlFQUExpSmg0NjZselVrcnJHT1pWS3NqRkFxRFNEcVVSVmRJN2ZFblZCdWJDeWJ5dlEzVzE0VUFidmM4eE5TMGJCaWV1Tlo1cmJkQm13bWhjUWF5d01WeGxKMkFsM2k1MjBQSnduRmhzYWpMTlVQZVhjMzNGRWFLSGtSQTBtMGhsa3pGWWVoWnYxQjQwTWhmc1M3QmtZcy83cVJXZ2R3MmdjUXFNVXNxVTN6dlJxczk4dWFNZ2gvVDZOSjVjSVNSckQ3bldpUHJKQUdwVEZ5WkVoK3k1NGxvYzdqUi9SZHZZZk9kdm5UNjZsS2d6VnRIbFlZTCtwZUg4dEcwNnJMcUx0Zi9mOHJYVXg0OHNka3p3ZnFYN05UcHRkK29hcmVKK1hWUy9YZmlzalZUQjVaV2hHVG56dDMvVFg0L3ZjOTlMcG5LVnZJVUZpN0lTVW5XeEpvZTBOME9IQnpwR00reU01T1BELzVnMEpIT2k0RGR3bWxkQTVTOHBDdDB0dFdJYmcwanNtNldOQ0QyeEpaU2JrT0hVaFl6MXNnNElWQXVrQU5PVVUrd3BXWitiZDRkclU4RjlJRjg5Q3ZKY0x1SS9sQ2hHckhPU0kwUFhleUUzRjEwbkhYWHNCUUkxdlpqUkRqS0FLUlJocHVKZHFZbHBWd0xHTXBHUTdkYTBNRDRvMjE3aWV3eUVSNmdWb25YL2w1OVRRTHpMNUp2eHpYb29CWXZ2d2Yxdi9sWFpxdS9FdE1lYS91UFBhNDNOYjlQcVQwV3JzSmdKRU04U05zRElxN1U5UlFsbC9YZHlwNU1mcGg4dW5ibmlybnVicFNvcndvWG1wWEE1bzVRSVJxMU1KVHV2R25Td05nVlZ2NEtuSWx2ZG5OYlJ2TTZpZzdOZC9XNTdxbXFPWUFFUHlHcmhKZzZBRDd5UWtqN2RodEtnYzhFL2JMZ0E0THdaV0RPOEloQTJVNStTZXlpQndHZmhRNmpRYjNMdVkwZEw5VU5jYis5NFRQYisrRG5pOThZajkvL3BuOTUreERKNWpwVWxjZStoY3RoOGZ2cDMzMG9hRmNPNUF4TkxUcDdqUStzK0FmYW4wSEUyWFIyQUtYWVMzTE9oSUtzSURidUMvVzIwRkRYbEMrNFZSZjB3cGRMazZsdkZyeFkxRjZ6NzgyVXIyYzhnRDgyTnVtRjhsT2pwNnc5emdIVlRUdFJhQ3A3a3BVeitlM0NaRnhoeW9NVmsxOHVmZHNZZFVRM0dsTzhxU2xlSWV3citXOVdmRDNqb2sxVXJWWW1YUkRJVGhaRnVod2ZhNDhuNDZnTU1kYlc0ODhubnlKcmhwRisxY090OVVWTWFuNzQra1FSeDRTWUNMRm5rendVR2Uzb1BxcThFV0k2WFZ5Yk1KOWpPcmVZWGNpbnN0Njg3QnBPcDRsRjFmSHpHQkVMS2xPV3NCbDhaSUhYSnZLcnlocVY3OHpYNnIxK2U0S0dUcWc3OEFhL1RBd3ZZUkdybW5hS0ZkM0lUSXlWeDhrbnhsc1dIR1dJQ1JDSXBERGxZaC9sd01RQlY2dHNRN1N2dHBsb1JXeHd4MHRKREp1SWxzRmc3UzFIZ3kzQTBzSEtYNEZoMDlCeUdHVGNaZEF1c1BrZ0dVUFV4YnBUOW1OTHdCN1lVVGZ2NUZzOWVmSFdaVFpHTlloeVlWa1VkaWJQNDJtWVNZdDJMSy85bHNPZ3Z2dEwvL0lOSWwyRkVDR3NFOVJ4RHlveUtOV1FSbDhVQnpzSUJPMUhCSEp2Z0RtODJSNDVRZEp2c3VkTVVPYkhDcjlIRGR5MEN6amY3RjQ4V3ZNUk53WlRONVUyTHRJMVUxYVhjVlFCc0czd1VTdmhmeE1ZUW9xenc3TkNRN1BDTEx2Q3NrTXpzOTY0c0owT0JLNGR3ckozaFZsQ3M3SkNzOE5IZlNwZW1YclduR0ErbTdxeWVKNi9MU3c5YmZUb3RMa09QQzQ5YkZjdTZ4TDh6TkhtL0V5TmV3SVVXR24wMnJwNlEzMmRIdFNoYStlRW1UREh6aTI0SERqN1J2MG1aV0t6OTF5RGVhSTdkN0l0ZmdBUVBua3kxN3VtaHJwMnhnMXp3SEo1Z1dKalV1L0V4TjdKbWRiYWRmeEY3Vlc3ZDYvUmQvNTBQN3hkelptN0VhMUVEYkdRS1JUVUdOZXViWHo4NlBIakJqQzhlT2JNendjT3pGL3dQd2dlK2FtaWQ4bjdOSFVxd0JkRWx5U1d0Q2EwK3VDWGFuVjhuTDlsK1gybXJkOG0zalZkcXc3SWE2SkwrTGhQYTBKYlNVRkM3cURDTGwxYnVZODNHaDQvZnZKNEJIZzhHUUZMRWp4NUFoNVBPdXg3ZG5hTGcrOU5SNndST2VIaE9SSFd3d1RhY1U2NE5lSXdvMHZjYkNhaVhlYUV6UmFwTnZlSFZ0b2EyLy9JbFdwYkU5TEJmUzZGdjE2ODNwbC9DeDhoSG9GZmN6cmJ4RkhpenAyK3dpN055V3NVaGNCQm5ZeXVyZGlaNjFKam9mMEJtSGxDcUFwb0RERE9tUEdPTUVQYlNPcWVNeVpURThQSWVOY2p3aGIxbXMvdWxOT0lHMWcxU3RZRzkzNTVkdWMxSFdzamxHOWdBNG41aWk4VkxGR1ZiTmxhUDRDbk53Mk03Ulh0Y3NXNDQ1NzJpaEc0WUdzSEQ0b0YxT05VK3VDMFNhR0pXN2JnRXZ5aVhCTzUzeEZzbGh1TmNuTndCNEVLRkVhRnVRTllZV0lJQmFHd205d1ViSjVVVWl2T3FuSTY5VTZUdWNveXlPUk1kM0t5eXNkSUNBUk1TeVFPVXhCbTJtWU5PUGFzQmpFck5XMlU4Z2xwS1JGTEk4d3BFNmpsclFIL2JPM04zWkU3M0hnb1krSmUvNjMvQkR6MXAyMzF0OXJyUS90YlJGTjZ0WG1sMENoRkg4SGRPKzVHRk9wZUh4bGZKSVVkOXpTMnBkNmMzSklPMnZhL2gza244aFA3dWtjTHUycnlrdnRSUnRuSXpnWG5sLzQrbTZTQ3NJTVZ2Y2tZVTkza1AzdFFuZFc3LzE5M0R5cXBsL0U4RGxTeldqNHFEbkF1Y2hJdVJZSmYyN0lUdC83Y0NpY290Z0hLaDEvZWZUeWdBS1dUSUthVUdCYkFrMlFxQ1NRaXpOVDVrQkFHbHFUZ0RJZzFtZFFWODFDZFRpUVJBMmY1RGhUUmFuQVVSc2xSQ0pSWk1JYUxmdC82TWtJNEpKT1pXSkZxVEFoSDRodzBpSVJDTU1CZ3dpNGpEc3NpdkNOaVdHSU5wb1ZWVVJDRXdnUXlNWFZBREJTRVl6Z0J4a1Q2NkNocGNVcHhBQ0FSeGdmSWgrZU95TzBqUjRwNlpidEpQdjU1TFBRSGEyVHhuM3hoUGVsZ05nUzFTRnVDR3I1UkR1QUhXS0g5S0c2RlNVK2l6TVg5ZVZZZWJzUEptY0hjY1Z4cTlFc1NOa0kySENPOWpLWlRMdUFIbUFmcnRoU3BtSGdxTjlXYjZSM0lEWFJ5clZ5NjdEWEpHMkdGOFVJcDB4Z2QxSkdFTU80T2hhcUpZL0QrM0JZTUtRMUlVdUwwYVpmeUZUVFdDRmw5MEhCbWIxSUhHWXNBN3p0WTdMRnBSU2s5WEliR0VyYWJ0RnVKMmMzOFgvUlF1L3ltUzNnUXNacGJ2Q090ZjFwUjMrZlV1aUhhd2NMQk9sRkZIOG1Zd3B2N21ydDVBcHAzQUQvWExCbHUwRi9MbTl0Y2tUOXQvT2tCeGZ4MXJiSERvZml4R09vMlJTUEJOQXFkRTk2ZkNWblNlMnQwdWp6S2ZLREh5bHMyVHU4eHRpNFpNV2laMUUzVFBYWExXa1RNa25zeHhxYWlERG9lSWgvOG5zTjhlcVBzMUV3ajZIdG9UL21Vb1pNZzhwMjF2YWVqZDJNRzdxOGZlN1ZQMHErNGpIeUpVSVF6V1Q0OE9wVW1LekEybDQ2MWhJOWJZZ2J5RTZHVnh5c2JjNFE1Zjh6Q1M4SzQwSEpYbDhVU0IrcmlZcWZXcGRabDFhWFVkYWZkdHJtTU5SN2VzNnRJL0ZIbVVNb0JSUTNhNk52NDNBY3FndnMyZG5jM1J2ODI0UDJXVWVQdjFURDBYb1lvMjhuV3kweHpCQTZVUkl0RWdwWG5OY0ljUElPYXh6THVQV3BwbWpMQjJQL3FRMitLeGRROGRQdU9rM1doenpaQkgwWDhWVks3YjZPdVgzcVNsZytoL2lYVWZBUWtjQXg1MWwxN0xuWnVSb2RCY0tuSXhpMi9vdC84OUYzdDdodEhCNWZXT0JvR2xKR3BDTW1lU1dNem9DUlpSc1ZrSWg4LzNOaWU4SU9lRFZucjIvRFZqNmJWMzNrMlVWeGI0VEJHVnlVbCtLcDVURTdVdW9XQzlOUVoxVE1XclZHWHJjaWJXN3I5N0VEWDRsbGpKNTVsWmdpbVVKcGhyR2VkanFWbnBVOGFxTzJYa3RKUE94QW1jSERCWnBEZ3FsZVZKb0ZDZ1RVd1o4TGZtT3orcGxQZ2Z5eXhjOXZzdlE5ZW5ULy82a0hIMG0zdGljZjhBMzJKeUxaakNQRmFmNDNLN2xCcGhEY1hUTGtwMHRoVkgxRk5lQ0tSZi96RGh6OWR6LzdNb2JZcmlJbkVOb0gvdHNSMitTVzY2RzVEREM4ck5Gd1RJV2NHL0tpVXVhU0YwNmNYU2wyeWl3UUNkK2ZTUXBucklrZDgyUVZYVDgvWXNWNWVuMTZkYWs5UnNIWVNYY0s0VHRmUUFhTkhYMmRJR1BVOGphNWhBTmJoTklhRS9qRlFoK1pDQklTU1ZZa2g4TlFSTUFHbUcxWmdTTk9zU3FLb0hIYkQzaU9jU1NJT1VrZ01La3dNWWxlNXNoMEdmRmsxYlBIZkhFM09YekZiN0RGNGdnTUNVN29Fc1lLdTVNRFdaOFpkZUNNemx0bUliOXM4WHd0Tm0vU0NycFRBdDd6RlZQVlN6bFlpLzhoa3R6cFlXMCtObThtZWl3cld6eHFqaVpkT2NwRUMrc0lrbERIT2tvb1RoTGxFb1l0SlJKa0Q3VmFSekphL0tuYlZuZjZydkZjQlN2SnVjUHJtU0NKV1JVaHlRR0ZLUks1U21lczJJTFprcDFNQjFjZzhyUnd6RncvUkN2VENyTUtzMFBUUWtQREkyZ29DRGk0NnREQkxMOVFLaW9kZzV2M0NEU2tiaENDMlRDblRCd1ZPZU9rOVZtbzU2c0JmeUpjVEFvUDBXWHJ6eU9oV1VYUmV5dkx6ajVsQmVvcytmZjJXdkpSb1VXdjBTTE8rNDNWeWF6TE40K1gyOGdEL3NOL0NKWi94Vy9panhRTm0vd3dTTzRxanRocUxIV0xqMmJEZVJHRVo0a2E4aDl2YmI0aXdnQ0F4eXFycWtZMXpMditmanZMTXJUNkk2cmdBbnB1WFMyRXR4TWpTeG1EcytKM2Yvb2RWME1qK0FNWW04MkVFbnJjRFlnTGxBRkRzZm1oNU9tWGpqQm1NSFl6Rk15WnVPNFl5bDRqTGVvTEkxSC8vWFZiVUY0TEdjVXhERTBOWm9iZXFmMXROQ29OY2JsQ1lyT25oeGpIL2xxYWhXN0JpNmI5andvM3BWbGlTR3d4eWt3S281MWZXNXRRK3pJNDhyMXd4OGM1dHMxWmFyVVJmNjdwc2gxYldMc1B5c1p5UVl4bWxkSWgxT3JGRG1acFNuV1BDS3JIMlhwd3BaNjJZcWhRN2REcEhtTDFpODlmWm93VWpPeHRTR2pwSENxS3h6djF0TlRMUHVwOVJOckVzNDh0OVVXUkNYR2xaZkMyQlhzaUVTTkY5VUg3alNmWnVPVWFXaDkxb3E4Z1pmQjh2ZmhnTGthS29yNDQ3UzhCQ1F6dEYzY1JlanZKMlRISkZLclIxbEpnNkZnMFZMSnRScXc2bVB4cE9sQTFCQmlQNHRGS2ppS3VxSUlWVUpONWIzc2pxUXJHTU9mazdsdnVPaDVHbFB1Zm5PSkxKVjdIOEszS0lHTmw5ZjA5RlQ4QmxvWTJ1TGdidkFGOEJVREpJT204bHZoOGl3eG9qWDVzMjh5NjJBUS9seTZiK2thZXBEZXBHREIvdWpyZXJFdk0xR1h6N2lCRUZmdWxxWjZMS0dsc3lER2JpeTI3elBPSDA0cm12dDFvUnZjSVl6TmN6SFk2cnBWd3ZZNlg0YUF3aUs1T0FYMTBSZVVyYUl5STJxUURCTW1nOVNGcHVXc2hndUQ1YnN1UlNSQTRuazVkYkZxSE15MVBlVVhWSHluTTgzTXdGV1pzT3Fld0xWTmQrWU95Y1pFTllUT2JFREJxaWNrbC9mMkNVa1RwSXphUldJcU9NZnNzbEZhSzBqTXlKTVdFR1U3T0ZZak9GUjNzU1cyZlRRWkthNlUwUHlNeUkzNWd2OXNrYk5jSExGVVYzRGFvYTdMUExMTTZJejJSaXJBejFXVnpBSHpTaGFBaGZ1Q1FqTGhPL3RQUmpUaWMzMmo3dFltMjd4VFZOZ2dNcDlIYUFneS9QbktrY29tVnJoMVIyeWpwTFNsNngybVJ0clBmbEpaMHlwNnh6WmZ1ckVrZzRjMGFFaXg4Uzc4V2w3OEJJUTJEanJkblp0N29iWXZ5V1dmWXJQYURwKzlSQmo4ZHRMMlhySXZNZzl2TFk1S3JFeWo1SlZjbC9xcE1yazI1QlN0V2ZsR29CZ0ozNXB5cTV6OFI4Y25Wa01LeEdkQTl4Z3BpQVA5VERvNUhBK284bktzblJJV3FVN3lWQmd6UUV0VklJd2tYRld1L2xFSHdzc0JhaXVYUktuQTBiVUg4am5BZGpWbk5pT0tKeHZrSXZsK3R6NVFhOVRCRmdVdXNUd1dvd3FJLytrZjZoZm9ReXJOUm9Dc3drWklCQVZoVUJUc240UVNDdlV2OVIvMGsvTWlCTE9waVg2K3NLU3R5UmZsRWFGQzA4Wm5nb2NuM2tmdUtTT00way9lSTRKSmdCSXcxTlE5eHhKVEV4SlhIdVp3UkNKVi9YSFQ5alhyUDJ3WGFIM2I3c3IrTXZRRHVtVDNoZjY1M21aVEtYNys2NHlzb1VNU0VsUHpGSWc1VzdaeU5FU1JiVndVNC9mNnhuODhJNWFiT3VmY1I4czN1dm0zTDh4S21tTUhncCtGOGR2eXE2WXZrNmUvLzBaQ3NmSnRMZEZBc0RZU1ZJalVUcnFUMFBPNjhRV2dETC9Vci83RlJ4MVhUbDZUL05vMnpZeTZPRGg5WTRXZ2JXVUdnb09UK2J6bUV3azNoRnd5WVRmZFNQMnhZbC9CemRCM0kyYkdUdWZ0VGUvUGJwSk0zVUNvZkpWSldkNEtmaHM3alIrMXBFV2RhWm8yY3UycTB1MithZU8yVEhuUWtETnMwZU8rODlNMXMwamJvVVlwYnNNYkxObkt6S2wyZmx5cDVDcDhDK3dBejgwWkdUSDNhK3FSL3B3QlVQK0Vuckkzb2taRU8rUmZTa0EvNFlSSVdQNUVCYjRkSEpsWkJvR0FaL1Foang4QlNlM283WWdGd1BOUWZaRUdFMmZBcE9CL0lZMHFHL2poQ0J6RURxVWgrQXIzV2dxNDRtcUZDcENnZlBReGdlajM0ZjhoUlM1OEcvZEhWK1M3YkRxL1QreUNrZ2w4SzNSbmZCUXp6LzZlOGdDU1JoQ1N5YklrUldKR2RDM2d5RmR5UDMweTRqQzZwVUFpTXFwVWR1Z1crUVpVaC84ankwbnh5SEJBWTlROXF5NFRPSXltT2FYS256UWgwWnZxdit1L0g4d1BsWmZWbTl2Sk4ra21uSUc0Q2dZc3J6d3hNM1NuMXA4U1ZrQUFNd1ZPbkp2L0ZNSGcrL3diKzdSamtXVFFqN3dvV2tpK3RGMWhSNURXaHZsZldnblpDczBqUEpyU244U1UzRFZkRnFmeHgrWlFnQTRJQmtnQUU4REFDZzBuUUFQSkNLZ2RPM0lCVUNKR0VPL0QwOW1uUlFJSzRNQmVyS0NTWUFHdkFQSmdJU2tBZFRRU2hRbnBnR1dLQUlJQUJDS1FBQ0ROQy9wNEJkUnlzUTEwWUY2dG9jVEFCY3NEcVlDQmhnZnpBVjVJT3o1MElETXNqdjVqUVlwdktCdmthUWtXcDlwQitVRXBpYUU2V0tlUkszU0NpZ2FKdmhwQ21kUDFWMWpSTk96UTJUWW96Y1pPRS9OSHJZcXVhem80aEszanQzYURnTmVnMkdxWHlncnhHRTMwQkMrSU5TQ0RYY3ZlYms4RGhmY2N1UlNIaFF0TnJoSkM1Zk9uK3FWT3Vhc0xKd2FtN2tLRUVVQ2VJNWwvbjhIeHFpUDJ3bCtIeDJSRHR5b3R4aHhkSEpQcmtIbzFIZnRwT0d4QWpFU1pBa1JmcWZuVDkzUjU0Q1JVcUNLTW1LcXVtR2FkbU82L2xCR01WSm11VkZXZFZOMi9YRE9NM0x1dTNIZWQzUCsvM2xGWlZWMVRXMWRmVU5qVTNOTGExdDdSMmRYZDBoQmhLTTRVbzZBOWF1R3hEN2dTWDg0NVdBbnpkUUtzUTUwNklaTGNlQ3p3UXhMdXhOZE1JMGF6aFBsaUk2TGNPR2tsaTByRmp1NlRMN0V1ZFFoR1VleHhuSUxqcEVPd1F6Mm5BaFJyUlhJdWg4YWFTZmRZSHN2R01wd3Rxc0QwNFh2Y0RraVQzUGJjL2hkejU0WXNIWlFJNVhJanBWakdkak5vemtkcmhGL0lHR1UwS3lvSUdwYkdhb1ArQTE1ZllEZXdtS2N4bUs0a3dPdEpBRlU2aHBiVlA4Q2hWQ1hFbnM4cWJHdUNNRjdkRlQ4SzBlc09nU3E4NGFYcVVYL3F6ZVk5RkNPeTlvV2dvdXlEeCtWYVJvN1VYbmhjMElkYk1nS1dVYnZCNUR5aEhMWWtIVlFMNHNsSllsM2RLaVZtVUpFSmUrS1lha2dyZnpsYUxrU3o3Ymc5RDZMNHZWU25oUlZabklNV0N3aWloTGZFQkY4TytLRjdWR1BpV2RiS0ozeVJrNjkrVFhqUmZYdmwwRUFBQUFcIikgZm9ybWF0KFwid29mZjJcIik7XG59XG5cbi53dGljb25zIHtcblx0bGluZS1oZWlnaHQ6IDE7XG59XG5cbi53dGljb25zOmJlZm9yZSB7XG5cdGZvbnQtZmFtaWx5OiB3dGljb25zICFpbXBvcnRhbnQ7XG5cdGZvbnQtc3R5bGU6IG5vcm1hbDtcblx0Zm9udC13ZWlnaHQ6IG5vcm1hbCAhaW1wb3J0YW50O1xuXHR2ZXJ0aWNhbC1hbGlnbjogdG9wO1xufVxuXG4ud3RpY29uLWFjY291bnQ6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMDFcIjtcbn1cbi53dGljb24tYWRkOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTAyXCI7XG59XG4ud3RpY29uLWNhcmRSZXNpemVEcmFnOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTAzXCI7XG59XG4ud3RpY29uLWNhc3VhbDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwNFwiO1xufVxuLnd0aWNvbi1jaGVjazpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwNVwiO1xufVxuLnd0aWNvbi1jaGVja1NtYWxsOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTA2XCI7XG59XG4ud3RpY29uLWNoZXZyb246YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMDdcIjtcbn1cbi53dGljb24tY29weTpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwOFwiO1xufVxuLnd0aWNvbi1jb3B5U21hbGw6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMDlcIjtcbn1cbi53dGljb24tZGlzbWlzczpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwYVwiO1xufVxuLnd0aWNvbi1kb3duQ2hldnJvbjpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwYlwiO1xufVxuLnd0aWNvbi1lcnJvcjpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwY1wiO1xufVxuLnd0aWNvbi1leHBhbmQ6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMGRcIjtcbn1cbi53dGljb24tZmVlZGJhY2s6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMGVcIjtcbn1cbi53dGljb24tZmlsbGVkRG93bkFycm93OmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTBmXCI7XG59XG4ud3RpY29uLWZpbmQ6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTBcIjtcbn1cbi53dGljb24tZm9ybWFsOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTExXCI7XG59XG4ud3RpY29uLWdpZnQ6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTJcIjtcbn1cbi53dGljb24tZ3JheUxvZ286YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTNcIjtcbn1cbi53dGljb24tZ3JheVc6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTRcIjtcbn1cbi53dGljb24taWdub3JlOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTE1XCI7XG59XG4ud3RpY29uLWluZm86YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTZcIjtcbn1cbi53dGljb24tbGVmdENoZXZyb246YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTdcIjtcbn1cbi53dGljb24tbG9nbzpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExOFwiO1xufVxuLnd0aWNvbi1sb3ZlOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTE5XCI7XG59XG4ud3RpY29uLW5vUmVjb21tZW5kYXRpb25zOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTFhXCI7XG59XG4ud3RpY29uLXBhcmFncmFwaFJld3JpdGU6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMWJcIjtcbn1cbi53dGljb24tcGFzdGU6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMWNcIjtcbn1cbi53dGljb24tcGluOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTFkXCI7XG59XG4ud3RpY29uLXByZW1pdW06YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMWVcIjtcbn1cbi53dGljb24tcHJlbWl1bURldGFpbDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExZlwiO1xufVxuLnd0aWNvbi1wcmVtaXVtRnVsbDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEyMFwiO1xufVxuLnd0aWNvbi1yZWNvbW1lbmRhdGlvbkxpZ2h0OmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTIxXCI7XG59XG4ud3RpY29uLXJlY29tbWVuZGF0aW9uTGlnaHRDYXJkOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTIyXCI7XG59XG4ud3RpY29uLXJlY29tbWVuZGF0aW9uTGlnaHROb1N1Z2dlc3Rpb25zOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTIzXCI7XG59XG4ud3RpY29uLXJlZmluZTpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEyNFwiO1xufVxuLnd0aWNvbi1yZXdyaXRlOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTI1XCI7XG59XG4ud3RpY29uLXJpZ2h0Q2hldnJvbjpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEyNlwiO1xufVxuLnd0aWNvbi1yb2NrZXQ6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMjdcIjtcbn1cbi53dGljb24tc2VudGVuY2VFeGFtcGxlczpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEyOFwiO1xufVxuLnd0aWNvbi1zZXR0aW5nczpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEyOVwiO1xufVxuLnd0aWNvbi1zaG9ydGVuOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTJhXCI7XG59XG4ud3RpY29uLXR1dG9yaWFsOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTJiXCI7XG59XG4ud3RpY29uLVVubGltaXRlZDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEyY1wiO1xufVxuLnd0aWNvbi11bmxvY2s6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMmRcIjtcbn1cbi53dGljb24td2FybjpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEyZVwiO1xufVxuLnd0aWNvbi1Xb3JkdHVuZUJ1dHRvbjpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEyZlwiO1xufVxuLnd0aWNvbi14OmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTMwXCI7XG59XG4iXSwic291cmNlUm9vdCI6IiJ9 */
    </style>
    <script bis_use="true" type="text/javascript" charset="utf-8"
        data-bis-config="[&quot;facebook.com/&quot;,&quot;twitter.com/&quot;,&quot;youtube-nocookie.com/embed/&quot;,&quot;//vk.com/&quot;,&quot;//www.vk.com/&quot;,&quot;linkedin.com/&quot;,&quot;//www.linkedin.com/&quot;,&quot;//instagram.com/&quot;,&quot;//www.instagram.com/&quot;,&quot;//www.google.com/recaptcha/api2/&quot;,&quot;//hangouts.google.com/webchat/&quot;,&quot;//www.google.com/calendar/&quot;,&quot;//www.google.com/maps/embed&quot;,&quot;spotify.com/&quot;,&quot;soundcloud.com/&quot;,&quot;//player.vimeo.com/&quot;,&quot;//disqus.com/&quot;,&quot;//tgwidget.com/&quot;,&quot;//js.driftt.com/&quot;,&quot;friends2follow.com&quot;,&quot;/widget&quot;,&quot;login&quot;,&quot;//video.bigmir.net/&quot;,&quot;blogger.com&quot;,&quot;//smartlock.google.com/&quot;,&quot;//keep.google.com/&quot;,&quot;/web.tolstoycomments.com/&quot;,&quot;moz-extension://&quot;,&quot;chrome-extension://&quot;,&quot;/auth/&quot;,&quot;//analytics.google.com/&quot;,&quot;adclarity.com&quot;,&quot;paddle.com/checkout&quot;,&quot;hcaptcha.com&quot;,&quot;recaptcha.net&quot;,&quot;2captcha.com&quot;,&quot;accounts.google.com&quot;,&quot;www.google.com/shopping/customerreviews&quot;,&quot;buy.tinypass.com&quot;,&quot;gstatic.com&quot;,&quot;secureir.ebaystatic.com&quot;,&quot;docs.google.com&quot;,&quot;contacts.google.com&quot;,&quot;github.com&quot;,&quot;mail.google.com&quot;,&quot;chat.google.com&quot;,&quot;audio.xpleer.com&quot;,&quot;keepa.com&quot;,&quot;static.xx.fbcdn.net&quot;,&quot;sas.selleramp.com&quot;,&quot;1plus1.video&quot;,&quot;console.googletagcategory.com&quot;,&quot;//lnkd.demdex.net/&quot;,&quot;//radar.cedexis.com/&quot;,&quot;//li.protechts.net/&quot;,&quot;challenges.cloudflare.com/&quot;,&quot;ogs.google.com&quot;]"
        src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/../executers/vi-tr.js"></script>
</head>

<body translate="no" __processed_cbbf023f-aa28-4d0f-b739-6211c63ce73a__="true" bis_status="ok" bis_frame_id="961">
    <nav class="navbar navbar-expand-lg fixed-top shadow-sm">
        <div class="container-lg">
            <a class="navbar-brand fw-bold" href="#">Jane Doe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('categories.index')}}">category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                </ul>
                <a class="btn btn-outline-dark d-none d-lg-block" href="#contact">Let's Talk</a>
            </div>
        </div>
    </nav>

    <section class="hero" id="hero">
        <div class="container-lg">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h1 class="display-2 fw-bold">Jane Doe</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum laoreet finibus. Sed porta
                        lobortis metus sed commodo. Fusce convallis vestibulum velit, id imperdiet metus faucibus nec.
                    </p>
                    <button class="btn btn-outline-dark btn-lg">Projects</button>
                </div>
                <div class="col-sm-6 text-center">
                    <img src="https://codingyaar.com/wp-content/uploads/barista.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="category" id="category">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">category</h2>
            <div class="row">
                <div class="col-lg col-sm-6 mt-4">
                    <div class="card">
                        <i class="bi bi-cup-hot-fill"></i>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-sm-6 mt-4">
                    <div class="card">
                        <i class="bi bi-cup-hot-fill"></i>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-sm-6 m-auto mt-4">
                    <div class="card">
                        <i class="bi bi-cup-hot-fill"></i>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">About Me</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum est id pulvinar mollis. Nullam
                rhoncus dignissim ipsum, ac pulvinar tellus sodales ut. Vestibulum tincidunt malesuada consectetur.
                Nulla vel fermentum leo. Mauris rhoncus blandit justo, at congue dui rhoncus sit amet.</p>
            <p>Proin molestie
                sapien vel nulla accumsan, sit amet viverra metus ornare. Mauris iaculis ex vitae mollis pulvinar.
                Phasellus fringilla neque sed ligula lacinia iaculis.</p>
        </div>
    </section>

    <section class="projects" id="projects">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">Projects</h2>
            <div class="row">
                <div class="col-lg col-sm-6 mt-4">
                    <div class="card">
                        <img src="https://codingyaar.com/wp-content/uploads/image-plcaeholder.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-outline-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-sm-6 mt-4">
                    <div class="card">
                        <img src="https://codingyaar.com/wp-content/uploads/image-plcaeholder.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-outline-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-sm-6 mt-4">
                    <div class="card">
                        <img src="https://codingyaar.com/wp-content/uploads/image-plcaeholder.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-outline-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-sm-6 mt-4">
                    <div class="card">
                        <img src="https://codingyaar.com/wp-content/uploads/image-plcaeholder.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-outline-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials" id="testimonials">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">Testimonials</h2>
            <div id="carouselExample" class="carousel slide carousel-dark carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis orci enim, ac
                            auctor ex iaculis ut. Mauris ut elit mi. Sed nec quam bibendum, congue augue ut, molestie
                            tellus. Fusce vel semper dolor." </p>
                        <h5>John Doe</h5>
                    </div>
                    <div class="carousel-item">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at tortor a massa facilisis
                            venenatis sit amet non libero. Etiam vel sem venenatis tellus laoreet feugiat eu in mi."
                        </p>
                        <h5>June Doe</h5>
                    </div>
                    <div class="carousel-item">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non metus eu sem ultrices
                            tincidunt sit amet ac nisi. In hac habitasse platea dictumst. Aliquam pellentesque diam non
                            eros feugiat maximus." </p>
                        <h5>Johnny Doe</h5>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">Contact Me</h2>
            <div class="row">
                <div class="col-sm-4 mt-4">
                    <a href="#"><i class="bi bi-envelope-fill"></i> jane@mymail.com</a>
                </div>
                <div class="col-sm-4 mt-4">
                    <div class="social-media">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
                <div class="col-sm-4 mt-4">
                    <a href="#"><i class="bi bi-telephone-fill"></i> +1234567890</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center p-3 bg-body-tertiary">
        <div>© 2023. All Rights Reserved.</div>
    </footer>

    <p class="mt-5 text-center">Get a step-by-step written explanation here: <a
            href="https://codingyaar.com/portfolio-website-html-css-bootstrap/" target="_blank">How To Create
            Portfolio Website HTML CSS Bootstrap</a> </p>

    <p class="mt-3 text-center">Get a step-by-step video explanation here: <a href="https://youtu.be/4j_1LWZL0kE"
            target="_blank">How To Create Portfolio Website HTML CSS Bootstrap</a> </p>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>





</body>

</html>
