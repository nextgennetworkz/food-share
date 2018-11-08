<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Share Food</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/food-share/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/food-share/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/food-share/css/styles.css" rel="stylesheet" type="text/css"/>

    <script src="../js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script src="../js/jquery-3.1.1.min.js" type="text/javascript"></script>
</head>
<body>
<script type="text/javascript">
    jssor_1_slider_init = function () {

        var jssor_1_SlideshowTransitions = [
            {
                $Duration: 500,
                $Delay: 12,
                $Cols: 10,
                $Rows: 5,
                $Opacity: 2,
                $Clip: 15,
                $SlideOut: true,
                $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                $Assembly: 2049,
                $Easing: $Jease$.$OutQuad
            },
            {
                $Duration: 500,
                $Delay: 40,
                $Cols: 10,
                $Rows: 5,
                $Opacity: 2,
                $Clip: 15,
                $SlideOut: true,
                $Easing: $Jease$.$OutQuad
            },
            {
                $Duration: 1000,
                x: -0.2,
                $Delay: 20,
                $Cols: 16,
                $SlideOut: true,
                $Formation: $JssorSlideshowFormations$.$FormationStraight,
                $Assembly: 260,
                $Easing: {$Left: $Jease$.$InOutExpo, $Opacity: $Jease$.$InOutQuad},
                $Opacity: 2,
                $Outside: true,
                $Round: {$Top: 0.5}
            },
            {
                $Duration: 1600,
                y: -1,
                $Delay: 40,
                $Cols: 24,
                $SlideOut: true,
                $Formation: $JssorSlideshowFormations$.$FormationStraight,
                $Easing: $Jease$.$OutJump,
                $Round: {$Top: 1.5}
            },
            {
                $Duration: 1200,
                x: 0.2,
                y: -0.1,
                $Delay: 16,
                $Cols: 10,
                $Rows: 5,
                $Opacity: 2,
                $Clip: 15,
                $During: {$Left: [0.3, 0.7], $Top: [0.3, 0.7]},
                $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                $Assembly: 260,
                $Easing: {$Left: $Jease$.$InWave, $Top: $Jease$.$InWave, $Clip: $Jease$.$OutQuad},
                $Round: {$Left: 1.3, $Top: 2.5}
            },
            {
                $Duration: 1500,
                x: 0.3,
                y: -0.3,
                $Delay: 20,
                $Cols: 10,
                $Rows: 5,
                $Opacity: 2,
                $Clip: 15,
                $During: {$Left: [0.2, 0.8], $Top: [0.2, 0.8]},
                $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                $Assembly: 260,
                $Easing: {$Left: $Jease$.$InJump, $Top: $Jease$.$InJump, $Clip: $Jease$.$OutQuad},
                $Round: {$Left: 0.8, $Top: 2.5}
            },
            {
                $Duration: 1500,
                x: 0.3,
                y: -0.3,
                $Delay: 20,
                $Cols: 10,
                $Rows: 5,
                $Opacity: 2,
                $Clip: 15,
                $During: {$Left: [0.1, 0.9], $Top: [0.1, 0.9]},
                $SlideOut: true,
                $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                $Assembly: 260,
                $Easing: {$Left: $Jease$.$InJump, $Top: $Jease$.$InJump, $Clip: $Jease$.$OutQuad},
                $Round: {$Left: 0.8, $Top: 2.5}
            }
        ];

        var jssor_1_options = {
            $AutoPlay: 1,
            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 1920;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>
<style>
    /*jssor slider loading skin spin css*/
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    /*jssor slider bullet skin 053 css*/
    .jssorb053 .i {
        position: absolute;
        cursor: pointer;
    }

    .jssorb053 .i .b {
        fill: #fff;
        fill-opacity: 0.5;
    }

    .jssorb053 .i:hover .b {
        fill-opacity: .7;
    }

    .jssorb053 .iav .b {
        fill-opacity: 1;
    }

    .jssorb053 .i.idn {
        opacity: .3;
    }

    /*jssor slider arrow skin 093 css*/
    .jssora093 {
        display: block;
        position: absolute;
        cursor: pointer;
    }

    .jssora093 .c {
        fill: none;
        stroke: #fff;
        stroke-width: 400;
        stroke-miterlimit: 10;
    }

    .jssora093 .a {
        fill: none;
        stroke: #fff;
        stroke-width: 400;
        stroke-miterlimit: 10;
    }

    .jssora093:hover {
        opacity: .8;
    }

    .jssora093.jssora093dn {
        opacity: .6;
    }

    .jssora093.jssora093ds {
        opacity: .3;
        pointer-events: none;
    }
</style>
<header></header>