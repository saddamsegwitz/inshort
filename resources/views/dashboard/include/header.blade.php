<!DOCTYPE html>
<html class="loaded" lang="en" data-textdirection="ltr" style="--vh: 7.21px;">
<!-- BEGIN: Head-->

<head>
    <style type="text/css">
        .tippy-iOS {
            cursor: pointer !important
        }

        .tippy-notransition {
            transition: none
        }

        .tippy-popper {
            transition-timing-function: cubic-bezier(.165, .84, .44, 1);
            max-width: calc(100% - 8px);
            pointer-events: none;
            outline: 0
        }

        .tippy-popper[x-placement^=top] .tippy-backdrop {
            border-radius: 40% 40% 0 0
        }

        .tippy-popper[x-placement^=top] .tippy-roundarrow {
            bottom: -7px;
            bottom: -6.5px;
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            margin: 0 3px
        }

        .tippy-popper[x-placement^=top] .tippy-roundarrow svg {
            position: absolute;
            left: 0;
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .tippy-popper[x-placement^=top] .tippy-arrow {
            border-top: 8px solid #333;
            border-right: 8px solid transparent;
            border-left: 8px solid transparent;
            bottom: -7px;
            margin: 0 3px;
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0
        }

        .tippy-popper[x-placement^=top] .tippy-backdrop {
            -webkit-transform-origin: 0 25%;
            transform-origin: 0 25%
        }

        .tippy-popper[x-placement^=top] .tippy-backdrop[data-state=visible] {
            -webkit-transform: scale(1) translate(-50%, -55%);
            transform: scale(1) translate(-50%, -55%)
        }

        .tippy-popper[x-placement^=top] .tippy-backdrop[data-state=hidden] {
            -webkit-transform: scale(.2) translate(-50%, -45%);
            transform: scale(.2) translate(-50%, -45%);
            opacity: 0
        }

        .tippy-popper[x-placement^=top] [data-animation=shift-toward][data-state=visible] {
            -webkit-transform: translateY(-10px);
            transform: translateY(-10px)
        }

        .tippy-popper[x-placement^=top] [data-animation=shift-toward][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateY(-20px);
            transform: translateY(-20px)
        }

        .tippy-popper[x-placement^=top] [data-animation=perspective] {
            -webkit-transform-origin: bottom;
            transform-origin: bottom
        }

        .tippy-popper[x-placement^=top] [data-animation=perspective][data-state=visible] {
            -webkit-transform: perspective(700px) translateY(-10px) rotateX(0);
            transform: perspective(700px) translateY(-10px) rotateX(0)
        }

        .tippy-popper[x-placement^=top] [data-animation=perspective][data-state=hidden] {
            opacity: 0;
            -webkit-transform: perspective(700px) translateY(0) rotateX(60deg);
            transform: perspective(700px) translateY(0) rotateX(60deg)
        }

        .tippy-popper[x-placement^=top] [data-animation=fade][data-state=visible] {
            -webkit-transform: translateY(-10px);
            transform: translateY(-10px)
        }

        .tippy-popper[x-placement^=top] [data-animation=fade][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateY(-10px);
            transform: translateY(-10px)
        }

        .tippy-popper[x-placement^=top] [data-animation=shift-away][data-state=visible] {
            -webkit-transform: translateY(-10px);
            transform: translateY(-10px)
        }

        .tippy-popper[x-placement^=top] [data-animation=shift-away][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }

        .tippy-popper[x-placement^=top] [data-animation=scale] {
            -webkit-transform-origin: bottom;
            transform-origin: bottom
        }

        .tippy-popper[x-placement^=top] [data-animation=scale][data-state=visible] {
            -webkit-transform: translateY(-10px) scale(1);
            transform: translateY(-10px) scale(1)
        }

        .tippy-popper[x-placement^=top] [data-animation=scale][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateY(-10px) scale(.5);
            transform: translateY(-10px) scale(.5)
        }

        .tippy-popper[x-placement^=bottom] .tippy-backdrop {
            border-radius: 0 0 30% 30%
        }

        .tippy-popper[x-placement^=bottom] .tippy-roundarrow {
            top: -7px;
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
            margin: 0 3px
        }

        .tippy-popper[x-placement^=bottom] .tippy-roundarrow svg {
            position: absolute;
            left: 0;
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }

        .tippy-popper[x-placement^=bottom] .tippy-arrow {
            border-bottom: 8px solid #333;
            border-right: 8px solid transparent;
            border-left: 8px solid transparent;
            top: -7px;
            margin: 0 3px;
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%
        }

        .tippy-popper[x-placement^=bottom] .tippy-backdrop {
            -webkit-transform-origin: 0 -50%;
            transform-origin: 0 -50%
        }

        .tippy-popper[x-placement^=bottom] .tippy-backdrop[data-state=visible] {
            -webkit-transform: scale(1) translate(-50%, -45%);
            transform: scale(1) translate(-50%, -45%)
        }

        .tippy-popper[x-placement^=bottom] .tippy-backdrop[data-state=hidden] {
            -webkit-transform: scale(.2) translate(-50%);
            transform: scale(.2) translate(-50%);
            opacity: 0
        }

        .tippy-popper[x-placement^=bottom] [data-animation=shift-toward][data-state=visible] {
            -webkit-transform: translateY(10px);
            transform: translateY(10px)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=shift-toward][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateY(20px);
            transform: translateY(20px)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=perspective] {
            -webkit-transform-origin: top;
            transform-origin: top
        }

        .tippy-popper[x-placement^=bottom] [data-animation=perspective][data-state=visible] {
            -webkit-transform: perspective(700px) translateY(10px) rotateX(0);
            transform: perspective(700px) translateY(10px) rotateX(0)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=perspective][data-state=hidden] {
            opacity: 0;
            -webkit-transform: perspective(700px) translateY(0) rotateX(-60deg);
            transform: perspective(700px) translateY(0) rotateX(-60deg)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=fade][data-state=visible] {
            -webkit-transform: translateY(10px);
            transform: translateY(10px)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=fade][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateY(10px);
            transform: translateY(10px)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=shift-away][data-state=visible] {
            -webkit-transform: translateY(10px);
            transform: translateY(10px)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=shift-away][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=scale] {
            -webkit-transform-origin: top;
            transform-origin: top
        }

        .tippy-popper[x-placement^=bottom] [data-animation=scale][data-state=visible] {
            -webkit-transform: translateY(10px) scale(1);
            transform: translateY(10px) scale(1)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=scale][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateY(10px) scale(.5);
            transform: translateY(10px) scale(.5)
        }

        .tippy-popper[x-placement^=left] .tippy-backdrop {
            border-radius: 50% 0 0 50%
        }

        .tippy-popper[x-placement^=left] .tippy-roundarrow {
            right: -12px;
            -webkit-transform-origin: 33.33333333% 50%;
            transform-origin: 33.33333333% 50%;
            margin: 3px 0
        }

        .tippy-popper[x-placement^=left] .tippy-roundarrow svg {
            position: absolute;
            left: 0;
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }

        .tippy-popper[x-placement^=left] .tippy-arrow {
            border-left: 8px solid #333;
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
            right: -7px;
            margin: 3px 0;
            -webkit-transform-origin: 0 50%;
            transform-origin: 0 50%
        }

        .tippy-popper[x-placement^=left] .tippy-backdrop {
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0
        }

        .tippy-popper[x-placement^=left] .tippy-backdrop[data-state=visible] {
            -webkit-transform: scale(1) translate(-50%, -50%);
            transform: scale(1) translate(-50%, -50%)
        }

        .tippy-popper[x-placement^=left] .tippy-backdrop[data-state=hidden] {
            -webkit-transform: scale(.2) translate(-75%, -50%);
            transform: scale(.2) translate(-75%, -50%);
            opacity: 0
        }

        .tippy-popper[x-placement^=left] [data-animation=shift-toward][data-state=visible] {
            -webkit-transform: translateX(-10px);
            transform: translateX(-10px)
        }

        .tippy-popper[x-placement^=left] [data-animation=shift-toward][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateX(-20px);
            transform: translateX(-20px)
        }

        .tippy-popper[x-placement^=left] [data-animation=perspective] {
            -webkit-transform-origin: right;
            transform-origin: right
        }

        .tippy-popper[x-placement^=left] [data-animation=perspective][data-state=visible] {
            -webkit-transform: perspective(700px) translateX(-10px) rotateY(0);
            transform: perspective(700px) translateX(-10px) rotateY(0)
        }

        .tippy-popper[x-placement^=left] [data-animation=perspective][data-state=hidden] {
            opacity: 0;
            -webkit-transform: perspective(700px) translateX(0) rotateY(-60deg);
            transform: perspective(700px) translateX(0) rotateY(-60deg)
        }

        .tippy-popper[x-placement^=left] [data-animation=fade][data-state=visible] {
            -webkit-transform: translateX(-10px);
            transform: translateX(-10px)
        }

        .tippy-popper[x-placement^=left] [data-animation=fade][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateX(-10px);
            transform: translateX(-10px)
        }

        .tippy-popper[x-placement^=left] [data-animation=shift-away][data-state=visible] {
            -webkit-transform: translateX(-10px);
            transform: translateX(-10px)
        }

        .tippy-popper[x-placement^=left] [data-animation=shift-away][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }

        .tippy-popper[x-placement^=left] [data-animation=scale] {
            -webkit-transform-origin: right;
            transform-origin: right
        }

        .tippy-popper[x-placement^=left] [data-animation=scale][data-state=visible] {
            -webkit-transform: translateX(-10px) scale(1);
            transform: translateX(-10px) scale(1)
        }

        .tippy-popper[x-placement^=left] [data-animation=scale][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateX(-10px) scale(.5);
            transform: translateX(-10px) scale(.5)
        }

        .tippy-popper[x-placement^=right] .tippy-backdrop {
            border-radius: 0 50% 50% 0
        }

        .tippy-popper[x-placement^=right] .tippy-roundarrow {
            left: -12px;
            -webkit-transform-origin: 66.66666666% 50%;
            transform-origin: 66.66666666% 50%;
            margin: 3px 0
        }

        .tippy-popper[x-placement^=right] .tippy-roundarrow svg {
            position: absolute;
            left: 0;
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg)
        }

        .tippy-popper[x-placement^=right] .tippy-arrow {
            border-right: 8px solid #333;
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
            left: -7px;
            margin: 3px 0;
            -webkit-transform-origin: 100% 50%;
            transform-origin: 100% 50%
        }

        .tippy-popper[x-placement^=right] .tippy-backdrop {
            -webkit-transform-origin: -50% 0;
            transform-origin: -50% 0
        }

        .tippy-popper[x-placement^=right] .tippy-backdrop[data-state=visible] {
            -webkit-transform: scale(1) translate(-50%, -50%);
            transform: scale(1) translate(-50%, -50%)
        }

        .tippy-popper[x-placement^=right] .tippy-backdrop[data-state=hidden] {
            -webkit-transform: scale(.2) translate(-25%, -50%);
            transform: scale(.2) translate(-25%, -50%);
            opacity: 0
        }

        .tippy-popper[x-placement^=right] [data-animation=shift-toward][data-state=visible] {
            -webkit-transform: translateX(10px);
            transform: translateX(10px)
        }

        .tippy-popper[x-placement^=right] [data-animation=shift-toward][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateX(20px);
            transform: translateX(20px)
        }

        .tippy-popper[x-placement^=right] [data-animation=perspective] {
            -webkit-transform-origin: left;
            transform-origin: left
        }

        .tippy-popper[x-placement^=right] [data-animation=perspective][data-state=visible] {
            -webkit-transform: perspective(700px) translateX(10px) rotateY(0);
            transform: perspective(700px) translateX(10px) rotateY(0)
        }

        .tippy-popper[x-placement^=right] [data-animation=perspective][data-state=hidden] {
            opacity: 0;
            -webkit-transform: perspective(700px) translateX(0) rotateY(60deg);
            transform: perspective(700px) translateX(0) rotateY(60deg)
        }

        .tippy-popper[x-placement^=right] [data-animation=fade][data-state=visible] {
            -webkit-transform: translateX(10px);
            transform: translateX(10px)
        }

        .tippy-popper[x-placement^=right] [data-animation=fade][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateX(10px);
            transform: translateX(10px)
        }

        .tippy-popper[x-placement^=right] [data-animation=shift-away][data-state=visible] {
            -webkit-transform: translateX(10px);
            transform: translateX(10px)
        }

        .tippy-popper[x-placement^=right] [data-animation=shift-away][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }

        .tippy-popper[x-placement^=right] [data-animation=scale] {
            -webkit-transform-origin: left;
            transform-origin: left
        }

        .tippy-popper[x-placement^=right] [data-animation=scale][data-state=visible] {
            -webkit-transform: translateX(10px) scale(1);
            transform: translateX(10px) scale(1)
        }

        .tippy-popper[x-placement^=right] [data-animation=scale][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateX(10px) scale(.5);
            transform: translateX(10px) scale(.5)
        }

        .tippy-tooltip {
            position: relative;
            color: #fff;
            border-radius: .25rem;
            font-size: .875rem;
            padding: .3125rem .5625rem;
            line-height: 1.4;
            text-align: center;
            background-color: #333
        }

        .tippy-tooltip[data-size=small] {
            padding: .1875rem .375rem;
            font-size: .75rem
        }

        .tippy-tooltip[data-size=large] {
            padding: .375rem .75rem;
            font-size: 1rem
        }

        .tippy-tooltip[data-animatefill] {
            overflow: hidden;
            background-color: transparent
        }

        .tippy-tooltip[data-interactive],
        .tippy-tooltip[data-interactive] path {
            pointer-events: auto
        }

        .tippy-tooltip[data-inertia][data-state=visible] {
            transition-timing-function: cubic-bezier(.54, 1.5, .38, 1.11)
        }

        .tippy-tooltip[data-inertia][data-state=hidden] {
            transition-timing-function: ease
        }

        .tippy-arrow,
        .tippy-roundarrow {
            position: absolute;
            width: 0;
            height: 0
        }

        .tippy-roundarrow {
            width: 18px;
            height: 7px;
            fill: #333;
            pointer-events: none
        }

        .tippy-backdrop {
            position: absolute;
            background-color: #333;
            border-radius: 50%;
            width: calc(110% + 2rem);
            left: 50%;
            top: 50%;
            z-index: -1;
            transition: all cubic-bezier(.46, .1, .52, .98);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .tippy-backdrop:after {
            content: "";
            float: left;
            padding-top: 100%
        }

        .tippy-backdrop+.tippy-content {
            transition-property: opacity;
            will-change: opacity
        }

        .tippy-backdrop+.tippy-content[data-state=visible] {
            opacity: 1
        }

        .tippy-backdrop+.tippy-content[data-state=hidden] {
            opacity: 0
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard analytics - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{ asset('admin-dashboard/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('admin-dashboard/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-dashboard/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-dashboard/app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-dashboard/app-assets/vendors/css/extensions/tether-theme-arrows.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-dashboard/app-assets/vendors/css/extensions/tether.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-dashboard/app-assets/vendors/css/extensions/shepherd-theme-default.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-dashboard/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-dashboard/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-dashboard/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-dashboard/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-dashboard/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-dashboard/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-dashboard/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-dashboard/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-dashboard/app-assets/css/pages/dashboard-analytics.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-dashboard/app-assets/css/pages/card-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-dashboard/app-assets/css/plugins/tour/tour.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-dashboard/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

    <style type="text/css">
        .apexcharts-canvas {
            position: relative;
            user-select: none;
            /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
        }

        /* scrollbar is not visible by default for legend, hence forcing the visibility */
        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px;
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        }

        .apexcharts-canvas.dark {
            background: #343F57;
        }

        .apexcharts-inner {
            position: relative;
        }

        .legend-mouseover-inactive {
            transition: 0.15s ease all;
            opacity: 0.20;
        }

        .apexcharts-series-collapsed {
            opacity: 0;
        }

        .apexcharts-gridline,
        .apexcharts-text {
            pointer-events: none;
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip.light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, 0.96);
        }

        .apexcharts-tooltip.dark {
            color: #fff;
            background: rgba(30, 30, 30, 0.8);
        }

        .apexcharts-tooltip * {
            font-family: inherit;
        }

        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-line {
            pointer-events: none;
        }

        .apexcharts-tooltip.active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px;
        }

        .apexcharts-tooltip.light .apexcharts-tooltip-title {
            background: #ECEFF1;
            border-bottom: 1px solid #ddd;
        }

        .apexcharts-tooltip.dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, 0.7);
            border-bottom: 1px solid #333;
        }

        .apexcharts-tooltip-text-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            font-weight: 600;
            margin-left: 5px;
        }

        .apexcharts-tooltip-text-z-label:empty,
        .apexcharts-tooltip-text-z-value:empty {
            display: none;
        }

        .apexcharts-tooltip-text-value,
        .apexcharts-tooltip-text-z-value {
            font-weight: 600;
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center;
        }

        .apexcharts-tooltip-series-group.active .apexcharts-tooltip-marker {
            opacity: 1;
        }

        .apexcharts-tooltip-series-group.active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px;
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important;
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px;
        }

        .apexcharts-tooltip-candlestick {
            padding: 4px 8px;
        }

        .apexcharts-tooltip-candlestick>div {
            margin: 4px 0;
        }

        .apexcharts-tooltip-candlestick span.value {
            font-weight: bold;
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px;
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777;
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .apexcharts-xaxistooltip {
            opacity: 0;
            padding: 9px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
            transition: 0.15s ease all;
        }

        .apexcharts-xaxistooltip.dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-xaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-left: -6px;
        }

        .apexcharts-xaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-left: -7px;
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%;
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%;
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #ECEFF1;
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-bottom.dark:after {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-bottom.dark:before {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #ECEFF1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-top.dark:after {
            border-top-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top.dark:before {
            border-top-color: rgba(0, 0, 0, 0.5);
        }


        .apexcharts-xaxistooltip.active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-yaxistooltip {
            opacity: 0;
            padding: 4px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
        }

        .apexcharts-yaxistooltip.dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-yaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-top: -6px;
        }

        .apexcharts-yaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-top: -7px;
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%;
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%;
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-left.dark:after {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-left.dark:before {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-right.dark:after {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right.dark:before {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip.active {
            opacity: 1;
        }

        .apexcharts-yaxistooltip-hidden {
            display: none;
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: 0.15s ease all;
        }

        .apexcharts-xcrosshairs.active,
        .apexcharts-ycrosshairs.active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0;
        }

        .apexcharts-zoom-rect {
            pointer-events: none;
        }

        .apexcharts-selection-rect {
            cursor: move;
        }

        .svg_select_points,
        .svg_select_points_rot {
            opacity: 0;
            visibility: hidden;
        }

        .svg_select_points_l,
        .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible;
            fill: #888;
        }

        .apexcharts-canvas.zoomable .hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-canvas.zoomable .hovering-pan {
            cursor: move
        }

        .apexcharts-xaxis,
        .apexcharts-yaxis {
            pointer-events: none;
        }

        .apexcharts-zoom-icon,
        .apexcharts-zoom-in-icon,
        .apexcharts-zoom-out-icon,
        .apexcharts-reset-zoom-icon,
        .apexcharts-pan-icon,
        .apexcharts-selection-icon,
        .apexcharts-menu-icon,
        .apexcharts-toolbar-custom-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6E8192;
            text-align: center;
        }


        .apexcharts-zoom-icon svg,
        .apexcharts-zoom-in-icon svg,
        .apexcharts-zoom-out-icon svg,
        .apexcharts-reset-zoom-icon svg,
        .apexcharts-menu-icon svg {
            fill: #6E8192;
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(0.76)
        }

        .dark .apexcharts-zoom-icon svg,
        .dark .apexcharts-zoom-in-icon svg,
        .dark .apexcharts-zoom-out-icon svg,
        .dark .apexcharts-reset-zoom-icon svg,
        .dark .apexcharts-pan-icon svg,
        .dark .apexcharts-selection-icon svg,
        .dark .apexcharts-menu-icon svg,
        .dark .apexcharts-toolbar-custom-icon svg {
            fill: #f3f4f5;
        }

        .apexcharts-canvas .apexcharts-zoom-icon.selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.selected svg,
        .apexcharts-canvas .apexcharts-reset-zoom-icon.selected svg {
            fill: #008FFB;
        }

        .light .apexcharts-selection-icon:not(.selected):hover svg,
        .light .apexcharts-zoom-icon:not(.selected):hover svg,
        .light .apexcharts-zoom-in-icon:hover svg,
        .light .apexcharts-zoom-out-icon:hover svg,
        .light .apexcharts-reset-zoom-icon:hover svg,
        .light .apexcharts-menu-icon:hover svg {
            fill: #333;
        }

        .apexcharts-selection-icon,
        .apexcharts-menu-icon {
            position: relative;
        }

        .apexcharts-reset-zoom-icon {
            margin-left: 5px;
        }

        .apexcharts-zoom-icon,
        .apexcharts-reset-zoom-icon,
        .apexcharts-menu-icon {
            transform: scale(0.85);
        }

        .apexcharts-zoom-in-icon,
        .apexcharts-zoom-out-icon {
            transform: scale(0.7)
        }

        .apexcharts-zoom-out-icon {
            margin-right: 3px;
        }

        .apexcharts-pan-icon {
            transform: scale(0.62);
            position: relative;
            left: 1px;
            top: 0px;
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6E8192;
            stroke-width: 2;
        }

        .apexcharts-pan-icon.selected svg {
            stroke: #008FFB;
        }

        .apexcharts-pan-icon:not(.selected):hover svg {
            stroke: #333;
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            top: 0px;
            right: 3px;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0px 6px 2px 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .apexcharts-toolbar svg {
            pointer-events: none;
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: 0.15s ease all;
            pointer-events: none;
        }

        .apexcharts-menu.open {
            opacity: 1;
            pointer-events: all;
            transition: 0.15s ease all;
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer;
        }

        .light .apexcharts-menu-item:hover {
            background: #eee;
        }

        .dark .apexcharts-menu {
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
        }

        @media screen and (min-width: 768px) {
            .apexcharts-toolbar {
                /*opacity: 0;*/
            }

            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1;
            }
        }

        .apexcharts-datalabel.hidden {
            opacity: 0;
        }

        .apexcharts-pie-label,
        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value {
            cursor: default;
            pointer-events: none;
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: 0.3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease;
        }

        .apexcharts-canvas .hidden {
            opacity: 0;
        }

        .apexcharts-hide .apexcharts-series-points {
            opacity: 0;
        }

        .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-radar-series path,
        .apexcharts-radar-series polygon {
            pointer-events: none;
        }

        /* markers */

        .apexcharts-marker {
            transition: 0.15s ease all;
        }

        @keyframes opaque {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
    <style type="text/css">
        @keyframes resizeanim {
            from {
                opacity: 0;
            }

            to {
                opacity: 0;
            }
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
        }

        .resize-triggers,
        .resize-triggers>div,
        .contract-trigger:before {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .resize-triggers>div {
            background: #eee;
            overflow: auto;
        }

        .contract-trigger:before {
            width: 200%;
            height: 200%;
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns navbar-floating footer-static pace-done menu-expanded"
    data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-shepherd-step="step-1">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                    class="nav-link nav-menu-main menu-toggle hidden-xs is-active" href="#"><i
                                        class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                            <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                            <!--     i.ficon.feather.icon-menu-->
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Todo"><i class="ficon feather icon-check-square"></i></a>
                            </li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Chat"><i class="ficon feather icon-message-square"></i></a>
                            </li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Email"><i class="ficon feather icon-mail"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calender.html"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Calendar"><i class="ficon feather icon-calendar"></i></a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i
                                        class="ficon feather icon-star warning"></i></a>
                                <div class="bookmark-input search-input">
                                    <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                    <input class="form-control input" type="text" placeholder="Explore Vuexy..."
                                        tabindex="0" data-search="template-list">
                                    <ul class="search-list search-list-bookmark ps">
                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;">
                                            </div>
                                        </div>
                                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;">
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                                <!-- select.bookmark-select-->
                                <!--   option Chat-->
                                <!--   option email-->
                                <!--   option todo-->
                                <!--   option Calendar-->
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                                id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                                    class="selected-language">English</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item"
                                    href="#" data-language="en"><i class="flag-icon flag-icon-us"></i>
                                    English</a><a class="dropdown-item" href="#" data-language="fr"><i
                                        class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item"
                                    href="#" data-language="de"><i class="flag-icon flag-icon-de"></i>
                                    German</a><a class="dropdown-item" href="#" data-language="pt"><i
                                        class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                    class="ficon feather icon-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i
                                    class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                                    data-search="template-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main ps">
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                    </div>
                                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                    </div>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label"
                                href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                                    class="badge badge-pill badge-primary badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">5 New</h3><span class="notification-title">App
                                            Notifications</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list ps"><a
                                        class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-plus-square font-medium-5 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">You have new order!</h6><small
                                                    class="notification-text"> Are your going to meet me
                                                    tonight?</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours
                                                    ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-download-cloud font-medium-5 success"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="success media-heading red darken-1">99% Server load</h6>
                                                <small class="notification-text">You got new order of goods.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour
                                                    ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                            <div class="media-body">
                                                <h6 class="danger media-heading yellow darken-3">Warning notifixation
                                                </h6><small class="notification-text">Server have 99% CPU
                                                    usage.</small>
                                            </div><small>
                                                <time class="media-meta"
                                                    datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-check-circle font-medium-5 info"></i></div>
                                            <div class="media-body">
                                                <h6 class="info media-heading">Complete the task</h6><small
                                                    class="notification-text">Cake sesame snaps cupcake</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                                    week</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-file font-medium-5 warning"></i></div>
                                            <div class="media-body">
                                                <h6 class="warning media-heading">Generate monthly report</h6><small
                                                    class="notification-text">Chocolate cake oat cake tiramisu
                                                    marzipan</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                                    month</time></small>
                                        </div>
                                    </a>
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                    </div>
                                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                    </div>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                        href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span
                                        class="user-name text-bold-600">{{ Auth::user()->name }}</span><span
                                        class="user-status">Available</span></div><span><img class="round"
                                        src="{{ asset('admin-dashboard/app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                                        alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                    href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a
                                    class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My
                                    Inbox</a><a class="dropdown-item" href="app-todo.html"><i
                                        class="feather icon-check-square"></i> Task</a><a class="dropdown-item"
                                    href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('auth.logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i
                                        class="feather icon-power"></i> Logout
                                </a>
                                <form id="frm-logout" action="{{ route('auth.logout') }}" method="POST"
                                    style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img
                            src="{{ asset('admin-dashboard/app-assets/images/icons/xls.png" alt="png" height="32') }}">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small
                            class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">'17kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img
                            src="{{ asset('admin-dashboard/app-assets/images/icons/jpg.png" alt="png" height="32') }}">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">'11kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img
                            src="{{ asset('admin-dashboard/app-assets/images/icons/pdf.png" alt="png" height="32') }}">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">'150kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img
                            src="{{ asset('admin-dashboard/app-assets/images/icons/doc.png" alt="png" height="32') }}">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">'256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img
                            src="{{ asset('admin-dashboard/app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32') }}">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img
                            src="{{ asset('admin-dashboard/app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32') }}">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img
                            src="{{ asset('admin-dashboard/app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32') }}">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                            Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img
                            src="{{ asset('admin-dashboard/app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32') }}">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span
                        class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->
