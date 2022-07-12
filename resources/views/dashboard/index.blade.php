@extends('dashboard.template.master')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card bg-analytics text-white">
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('admin-dashboard/app-assets/images/elements/decore-left.png') }}"
                                            class="img-left" alt="
            card-img-left">
                                        <img src="{{ asset('admin-dashboard/app-assets/images/elements/decore-right.png') }}"
                                            class="img-right" alt="
            card-img-right">
                                        <div class="avatar avatar-xl bg-primary shadow mt-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-award white font-large-1"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="mb-2 text-white">Congratulations John,</h1>
                                            <p class="m-auto w-75">You have done <strong>57.6%</strong> more sales today.
                                                Check your new badge in your profile.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">92.6k</h2>
                                    <p class="mb-0">Subscribers Gained</p>
                                </div>
                                <div class="card-content" style="position: relative;">
                                    <div id="subscribe-gain-chart" style="min-height: 100px;">
                                        <div id="apexcharts65i7i936i" class="apexcharts-canvas apexcharts65i7i936i light"
                                            style="width: 255px; height: 100px;"><svg id="SvgjsSvg1854" width="255"
                                                height="100" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background-color: transparent;">
                                                <g id="SvgjsG1856" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1855">
                                                        <clipPath id="gridRectMask65i7i936i">
                                                            <rect id="SvgjsRect1860" width="257.5" height="102.5"
                                                                x="-1.25" y="-1.25" rx="0" ry="0"
                                                                fill="#ffffff" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask65i7i936i">
                                                            <rect id="SvgjsRect1861" width="257" height="102"
                                                                x="-1" y="-1" rx="0" ry="0"
                                                                fill="#ffffff" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1867" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1868" stop-opacity="0.7"
                                                                stop-color="rgba(115,103,240,0.7)" offset="0"></stop>
                                                            <stop id="SvgjsStop1869" stop-opacity="0.5"
                                                                stop-color="rgba(241,240,254,0.5)" offset="0.8"></stop>
                                                            <stop id="SvgjsStop1870" stop-opacity="0.5"
                                                                stop-color="rgba(241,240,254,0.5)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <line id="SvgjsLine1859" x1="0" y1="0" x2="0"
                                                        y2="100" stroke="#b6b6b6" stroke-dasharray="3"
                                                        class="apexcharts-xcrosshairs" x="0" y="0"
                                                        width="1" height="100" fill="#b1b9c4" filter="none"
                                                        fill-opacity="0.9" stroke-width="1"></line>
                                                    <g id="SvgjsG1873" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1874" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1877" class="apexcharts-grid">
                                                        <line id="SvgjsLine1879" x1="0" y1="100"
                                                            x2="255" y2="100" stroke="transparent"
                                                            stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine1878" x1="0" y1="1"
                                                            x2="0" y2="100" stroke="transparent"
                                                            stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG1863"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1864" class="apexcharts-series"
                                                            seriesName="Subscribers" data:longestSeries="true"
                                                            rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1871"
                                                                d="M 0 100L 0 77.77777777777777C 14.874999999999998 77.77777777777777 27.625 51.111111111111114 42.5 51.111111111111114C 57.375 51.111111111111114 70.125 60 85 60C 99.875 60 112.625 24.444444444444443 127.5 24.444444444444443C 142.375 24.444444444444443 155.125 55.55555555555556 170 55.55555555555556C 184.875 55.55555555555556 197.625 6.666666666666657 212.5 6.666666666666657C 227.375 6.666666666666657 240.125 17.777777777777786 255 17.777777777777786C 255 17.777777777777786 255 17.777777777777786 255 100M 255 17.777777777777786z"
                                                                fill="url(#SvgjsLinearGradient1867)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="0" clip-path="url(#gridRectMask65i7i936i)"
                                                                pathTo="M 0 100L 0 77.77777777777777C 14.874999999999998 77.77777777777777 27.625 51.111111111111114 42.5 51.111111111111114C 57.375 51.111111111111114 70.125 60 85 60C 99.875 60 112.625 24.444444444444443 127.5 24.444444444444443C 142.375 24.444444444444443 155.125 55.55555555555556 170 55.55555555555556C 184.875 55.55555555555556 197.625 6.666666666666657 212.5 6.666666666666657C 227.375 6.666666666666657 240.125 17.777777777777786 255 17.777777777777786C 255 17.777777777777786 255 17.777777777777786 255 100M 255 17.777777777777786z"
                                                                pathFrom="M -1 140L -1 140L 42.5 140L 85 140L 127.5 140L 170 140L 212.5 140L 255 140">
                                                            </path>
                                                            <path id="SvgjsPath1872"
                                                                d="M 0 77.77777777777777C 14.874999999999998 77.77777777777777 27.625 51.111111111111114 42.5 51.111111111111114C 57.375 51.111111111111114 70.125 60 85 60C 99.875 60 112.625 24.444444444444443 127.5 24.444444444444443C 142.375 24.444444444444443 155.125 55.55555555555556 170 55.55555555555556C 184.875 55.55555555555556 197.625 6.666666666666657 212.5 6.666666666666657C 227.375 6.666666666666657 240.125 17.777777777777786 255 17.777777777777786"
                                                                fill="none" fill-opacity="1" stroke="#7367f0"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2.5" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMask65i7i936i)"
                                                                pathTo="M 0 77.77777777777777C 14.874999999999998 77.77777777777777 27.625 51.111111111111114 42.5 51.111111111111114C 57.375 51.111111111111114 70.125 60 85 60C 99.875 60 112.625 24.444444444444443 127.5 24.444444444444443C 142.375 24.444444444444443 155.125 55.55555555555556 170 55.55555555555556C 184.875 55.55555555555556 197.625 6.666666666666657 212.5 6.666666666666657C 227.375 6.666666666666657 240.125 17.777777777777786 255 17.777777777777786"
                                                                pathFrom="M -1 140L -1 140L 42.5 140L 85 140L 127.5 140L 170 140L 212.5 140L 255 140">
                                                            </path>
                                                            <g id="SvgjsG1865" class="apexcharts-series-markers-wrap">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle1885" r="0"
                                                                        cx="0" cy="0"
                                                                        class="apexcharts-marker wzt3kqfm5 no-pointer-events"
                                                                        stroke="#ffffff" fill="#7367f0" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1866" class="apexcharts-datalabels"></g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1880" x1="0" y1="0"
                                                        x2="255" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1881" x1="0" y1="0"
                                                        x2="255" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1882" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1883" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1884" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1858" width="0" height="0" x="0"
                                                    y="0" rx="0" ry="0" fill="#fefefe"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0">
                                                </rect>
                                                <g id="SvgjsG1875" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-21, 0)">
                                                    <g id="SvgjsG1876" class="apexcharts-yaxis-texts-g"></g>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                            <div class="apexcharts-tooltip light">
                                                <div class="apexcharts-tooltip-series-group"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(115, 103, 240);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 256px; height: 101px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-package text-warning font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">97.5K</h2>
                                    <p class="mb-0">Orders Received</p>
                                </div>
                                <div class="card-content" style="position: relative;">
                                    <div id="orders-received-chart" style="min-height: 100px;">
                                        <div id="apexcharts84epbkmv" class="apexcharts-canvas apexcharts84epbkmv light"
                                            style="width: 255px; height: 100px;"><svg id="SvgjsSvg1889" width="255"
                                                height="100" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background-color: transparent;">
                                                <g id="SvgjsG1891" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1890">
                                                        <clipPath id="gridRectMask84epbkmv">
                                                            <rect id="SvgjsRect1895" width="257.5" height="102.5"
                                                                x="-1.25" y="-1.25" rx="0"
                                                                ry="0" fill="#ffffff" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0">
                                                            </rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask84epbkmv">
                                                            <rect id="SvgjsRect1896" width="257" height="102"
                                                                x="-1" y="-1" rx="0"
                                                                ry="0" fill="#ffffff" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0">
                                                            </rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1902" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1903" stop-opacity="0.7"
                                                                stop-color="rgba(255,159,67,0.7)" offset="0"></stop>
                                                            <stop id="SvgjsStop1904" stop-opacity="0.5"
                                                                stop-color="rgba(255,245,236,0.5)" offset="0.8"></stop>
                                                            <stop id="SvgjsStop1905" stop-opacity="0.5"
                                                                stop-color="rgba(255,245,236,0.5)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <line id="SvgjsLine1894" x1="0" y1="0"
                                                        x2="0" y2="100" stroke="#b6b6b6"
                                                        stroke-dasharray="3" class="apexcharts-xcrosshairs"
                                                        x="0" y="0" width="1" height="100"
                                                        fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                        stroke-width="1"></line>
                                                    <g id="SvgjsG1908" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1909" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1912" class="apexcharts-grid">
                                                        <line id="SvgjsLine1914" x1="0" y1="100"
                                                            x2="255" y2="100" stroke="transparent"
                                                            stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine1913" x1="0" y1="1"
                                                            x2="0" y2="100" stroke="transparent"
                                                            stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG1898"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1899" class="apexcharts-series" seriesName="Orders"
                                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1906"
                                                                d="M 0 100L 0 60C 14.874999999999998 60 27.625 10 42.5 10C 57.375 10 70.125 80 85 80C 99.875 80 112.625 10 127.5 10C 142.375 10 155.125 90 170 90C 184.875 90 197.625 40 212.5 40C 227.375 40 240.125 80 255 80C 255 80 255 80 255 100M 255 80z"
                                                                fill="url(#SvgjsLinearGradient1902)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="0" clip-path="url(#gridRectMask84epbkmv)"
                                                                pathTo="M 0 100L 0 60C 14.874999999999998 60 27.625 10 42.5 10C 57.375 10 70.125 80 85 80C 99.875 80 112.625 10 127.5 10C 142.375 10 155.125 90 170 90C 184.875 90 197.625 40 212.5 40C 227.375 40 240.125 80 255 80C 255 80 255 80 255 100M 255 80z"
                                                                pathFrom="M -1 160L -1 160L 42.5 160L 85 160L 127.5 160L 170 160L 212.5 160L 255 160">
                                                            </path>
                                                            <path id="SvgjsPath1907"
                                                                d="M 0 60C 14.874999999999998 60 27.625 10 42.5 10C 57.375 10 70.125 80 85 80C 99.875 80 112.625 10 127.5 10C 142.375 10 155.125 90 170 90C 184.875 90 197.625 40 212.5 40C 227.375 40 240.125 80 255 80"
                                                                fill="none" fill-opacity="1" stroke="#ff9f43"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2.5" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMask84epbkmv)"
                                                                pathTo="M 0 60C 14.874999999999998 60 27.625 10 42.5 10C 57.375 10 70.125 80 85 80C 99.875 80 112.625 10 127.5 10C 142.375 10 155.125 90 170 90C 184.875 90 197.625 40 212.5 40C 227.375 40 240.125 80 255 80"
                                                                pathFrom="M -1 160L -1 160L 42.5 160L 85 160L 127.5 160L 170 160L 212.5 160L 255 160">
                                                            </path>
                                                            <g id="SvgjsG1900" class="apexcharts-series-markers-wrap">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle1920" r="0"
                                                                        cx="0" cy="0"
                                                                        class="apexcharts-marker wiym6j9xgi no-pointer-events"
                                                                        stroke="#ffffff" fill="#ff9f43" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1901" class="apexcharts-datalabels"></g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1915" x1="0" y1="0"
                                                        x2="255" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1916" x1="0" y1="0"
                                                        x2="255" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1917" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1918" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1919" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1893" width="0" height="0" x="0"
                                                    y="0" rx="0" ry="0" fill="#fefefe"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0">
                                                </rect>
                                                <g id="SvgjsG1910" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-21, 0)">
                                                    <g id="SvgjsG1911" class="apexcharts-yaxis-texts-g"></g>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                            <div class="apexcharts-tooltip light">
                                                <div class="apexcharts-tooltip-series-group"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 159, 67);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 256px; height: 101px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row pb-50">
                                            <div
                                                class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                                                <div>
                                                    <h2 class="text-bold-700 mb-25">2.7K</h2>
                                                    <p class="text-bold-500 mb-75">Avg Sessions</p>
                                                    <h5 class="font-medium-2">
                                                        <span class="text-success">+5.2% </span>
                                                        <span>vs last 7 days</span>
                                                    </h5>
                                                </div>
                                                <a href="#"
                                                    class="btn btn-primary shadow waves-effect waves-light">View Details <i
                                                        class="feather icon-chevrons-right"></i></a>
                                            </div>
                                            <div
                                                class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                                                <div class="dropdown chart-dropdown">
                                                    <button
                                                        class="btn btn-sm border-0 dropdown-toggle p-0 waves-effect waves-light"
                                                        type="button" id="dropdownItem5" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Last 7 Days
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownItem5">
                                                        <a class="dropdown-item" href="#">Last 28 Days</a>
                                                        <a class="dropdown-item" href="#">Last Month</a>
                                                        <a class="dropdown-item" href="#">Last Year</a>
                                                    </div>
                                                </div>
                                                <div id="avg-session-chart" style="min-height: 200px;">
                                                    <div id="apexchartsjcsg9f7t"
                                                        class="apexcharts-canvas apexchartsjcsg9f7t light"
                                                        style="width: 234px; height: 200px;"><svg id="SvgjsSvg1636"
                                                            width="234" height="200"
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                            style="background-color: transparent;">
                                                            <g id="SvgjsG1638"
                                                                class="apexcharts-inner apexcharts-graphical"
                                                                transform="translate(0, 0)">
                                                                <defs id="SvgjsDefs1637">
                                                                    <linearGradient id="SvgjsLinearGradient1640"
                                                                        x1="0" y1="0" x2="0"
                                                                        y2="1">
                                                                        <stop id="SvgjsStop1641" stop-opacity="0.4"
                                                                            stop-color="rgba(216,227,240,0.4)"
                                                                            offset="0"></stop>
                                                                        <stop id="SvgjsStop1642" stop-opacity="0.5"
                                                                            stop-color="rgba(190,209,230,0.5)"
                                                                            offset="1"></stop>
                                                                        <stop id="SvgjsStop1643" stop-opacity="0.5"
                                                                            stop-color="rgba(190,209,230,0.5)"
                                                                            offset="1"></stop>
                                                                    </linearGradient>
                                                                    <clipPath id="gridRectMaskjcsg9f7t">
                                                                        <rect id="SvgjsRect1645" width="234"
                                                                            height="200" x="0" y="0"
                                                                            rx="0" ry="0" fill="#ffffff"
                                                                            opacity="1" stroke-width="0"
                                                                            stroke="none" stroke-dasharray="0"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="gridRectMarkerMaskjcsg9f7t">
                                                                        <rect id="SvgjsRect1646" width="236"
                                                                            height="202" x="-1" y="-1"
                                                                            rx="0" ry="0" fill="#ffffff"
                                                                            opacity="1" stroke-width="0"
                                                                            stroke="none" stroke-dasharray="0"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <rect id="SvgjsRect1644" width="15.356249999999998"
                                                                    height="200" x="0" y="0"
                                                                    rx="0" ry="0"
                                                                    fill="url(#SvgjsLinearGradient1640)" opacity="1"
                                                                    stroke-width="0" stroke-dasharray="3"
                                                                    class="apexcharts-xcrosshairs" y2="200"
                                                                    filter="none" fill-opacity="0.9"></rect>
                                                                <g id="SvgjsG1658" class="apexcharts-xaxis"
                                                                    transform="translate(0, 0)">
                                                                    <g id="SvgjsG1659" class="apexcharts-xaxis-texts-g"
                                                                        transform="translate(0, -4)"></g>
                                                                </g>
                                                                <g id="SvgjsG1662" class="apexcharts-grid">
                                                                    <line id="SvgjsLine1664" x1="0"
                                                                        y1="200" x2="234" y2="200"
                                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                                    <line id="SvgjsLine1663" x1="0"
                                                                        y1="1" x2="0" y2="200"
                                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                                </g>
                                                                <g id="SvgjsG1648"
                                                                    class="apexcharts-bar-series apexcharts-plot-series">
                                                                    <g id="SvgjsG1649" class="apexcharts-series"
                                                                        rel="1" seriesName="Sessions"
                                                                        data:realIndex="0">
                                                                        <path id="SvgjsPath1651"
                                                                            d="M 6.946875000000001 200L 6.946875000000001 141.3390625Q 14.625 133.66093750000002 22.303124999999998 141.3390625L 22.303124999999998 200L 6.946875000000001 200"
                                                                            fill="rgba(231,238,247,0.85)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="0" stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="0"
                                                                            clip-path="url(#gridRectMaskjcsg9f7t)"
                                                                            pathTo="M 6.946875000000001 200L 6.946875000000001 141.3390625Q 14.625 133.66093750000002 22.303124999999998 141.3390625L 22.303124999999998 200L 6.946875000000001 200"
                                                                            pathFrom="M 6.946875000000001 200L 6.946875000000001 200L 22.303124999999998 200L 22.303124999999998 200L 6.946875000000001 200"
                                                                            cy="137.5" cx="22.303124999999998"
                                                                            j="0" val="75"
                                                                            barHeight="62.5"
                                                                            barWidth="15.356249999999998"></path>
                                                                        <path id="SvgjsPath1652"
                                                                            d="M 41.07187499999999 200L 41.07187499999999 99.67239583333333Q 48.74999999999999 91.99427083333333 56.42812499999999 99.67239583333333L 56.42812499999999 200L 41.07187499999999 200"
                                                                            fill="rgba(231,238,247,0.85)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="0" stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="0"
                                                                            clip-path="url(#gridRectMaskjcsg9f7t)"
                                                                            pathTo="M 41.07187499999999 200L 41.07187499999999 99.67239583333333Q 48.74999999999999 91.99427083333333 56.42812499999999 99.67239583333333L 56.42812499999999 200L 41.07187499999999 200"
                                                                            pathFrom="M 41.07187499999999 200L 41.07187499999999 200L 56.42812499999999 200L 56.42812499999999 200L 41.07187499999999 200"
                                                                            cy="95.83333333333333" cx="56.428124999999994"
                                                                            j="1" val="125"
                                                                            barHeight="104.16666666666667"
                                                                            barWidth="15.356249999999998"></path>
                                                                        <path id="SvgjsPath1653"
                                                                            d="M 75.196875 200L 75.196875 16.3390625Q 82.875 8.660937500000003 90.55312500000001 16.3390625L 90.55312500000001 200L 75.196875 200"
                                                                            fill="rgba(115,103,240,0.85)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="0" stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="0"
                                                                            clip-path="url(#gridRectMaskjcsg9f7t)"
                                                                            pathTo="M 75.196875 200L 75.196875 16.3390625Q 82.875 8.660937500000003 90.55312500000001 16.3390625L 90.55312500000001 200L 75.196875 200"
                                                                            pathFrom="M 75.196875 200L 75.196875 200L 90.55312500000001 200L 90.55312500000001 200L 75.196875 200"
                                                                            cy="12.5" cx="90.553125" j="2"
                                                                            val="225" barHeight="187.5"
                                                                            barWidth="15.356249999999998"></path>
                                                                        <path id="SvgjsPath1654"
                                                                            d="M 109.321875 200L 109.321875 58.005729166666654Q 117 50.32760416666665 124.67812500000001 58.005729166666654L 124.67812500000001 200L 109.321875 200"
                                                                            fill="rgba(231,238,247,0.85)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="0" stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="0"
                                                                            clip-path="url(#gridRectMaskjcsg9f7t)"
                                                                            pathTo="M 109.321875 200L 109.321875 58.005729166666654Q 117 50.32760416666665 124.67812500000001 58.005729166666654L 124.67812500000001 200L 109.321875 200"
                                                                            pathFrom="M 109.321875 200L 109.321875 200L 124.67812500000001 200L 124.67812500000001 200L 109.321875 200"
                                                                            cy="54.16666666666666" cx="124.678125"
                                                                            j="3" val="175"
                                                                            barHeight="145.83333333333334"
                                                                            barWidth="15.356249999999998"></path>
                                                                        <path id="SvgjsPath1655"
                                                                            d="M 143.446875 200L 143.446875 99.67239583333333Q 151.125 91.99427083333333 158.803125 99.67239583333333L 158.803125 200L 143.446875 200"
                                                                            fill="rgba(231,238,247,0.85)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="0" stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="0"
                                                                            clip-path="url(#gridRectMaskjcsg9f7t)"
                                                                            pathTo="M 143.446875 200L 143.446875 99.67239583333333Q 151.125 91.99427083333333 158.803125 99.67239583333333L 158.803125 200L 143.446875 200"
                                                                            pathFrom="M 143.446875 200L 143.446875 200L 158.803125 200L 158.803125 200L 143.446875 200"
                                                                            cy="95.83333333333333" cx="158.803125"
                                                                            j="4" val="125"
                                                                            barHeight="104.16666666666667"
                                                                            barWidth="15.356249999999998"></path>
                                                                        <path id="SvgjsPath1656"
                                                                            d="M 177.571875 200L 177.571875 141.3390625Q 185.25 133.66093750000002 192.928125 141.3390625L 192.928125 200L 177.571875 200"
                                                                            fill="rgba(231,238,247,0.85)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="0" stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="0"
                                                                            clip-path="url(#gridRectMaskjcsg9f7t)"
                                                                            pathTo="M 177.571875 200L 177.571875 141.3390625Q 185.25 133.66093750000002 192.928125 141.3390625L 192.928125 200L 177.571875 200"
                                                                            pathFrom="M 177.571875 200L 177.571875 200L 192.928125 200L 192.928125 200L 177.571875 200"
                                                                            cy="137.5" cx="192.928125" j="5"
                                                                            val="75" barHeight="62.5"
                                                                            barWidth="15.356249999999998"></path>
                                                                        <path id="SvgjsPath1657"
                                                                            d="M 211.69687499999998 200L 211.69687499999998 183.00572916666667Q 219.37499999999997 175.32760416666667 227.05312499999997 183.00572916666667L 227.05312499999997 200L 211.69687499999998 200"
                                                                            fill="rgba(231,238,247,0.85)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="0" stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="0"
                                                                            clip-path="url(#gridRectMaskjcsg9f7t)"
                                                                            pathTo="M 211.69687499999998 200L 211.69687499999998 183.00572916666667Q 219.37499999999997 175.32760416666667 227.05312499999997 183.00572916666667L 227.05312499999997 200L 211.69687499999998 200"
                                                                            pathFrom="M 211.69687499999998 200L 211.69687499999998 200L 227.05312499999997 200L 227.05312499999997 200L 211.69687499999998 200"
                                                                            cy="179.16666666666666"
                                                                            cx="227.05312499999997" j="6"
                                                                            val="25" barHeight="20.833333333333336"
                                                                            barWidth="15.356249999999998"></path>
                                                                        <g id="SvgjsG1650" class="apexcharts-datalabels">
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <line id="SvgjsLine1665" x1="0" y1="0"
                                                                    x2="234" y2="0" stroke="#b6b6b6"
                                                                    stroke-dasharray="0" stroke-width="1"
                                                                    class="apexcharts-ycrosshairs"></line>
                                                                <line id="SvgjsLine1666" x1="0" y1="0"
                                                                    x2="234" y2="0" stroke-dasharray="0"
                                                                    stroke-width="0"
                                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                                <g id="SvgjsG1667" class="apexcharts-yaxis-annotations">
                                                                </g>
                                                                <g id="SvgjsG1668" class="apexcharts-xaxis-annotations">
                                                                </g>
                                                                <g id="SvgjsG1669" class="apexcharts-point-annotations">
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1660" class="apexcharts-yaxis" rel="0"
                                                                transform="translate(-21, 0)">
                                                                <g id="SvgjsG1661" class="apexcharts-yaxis-texts-g"></g>
                                                            </g>
                                                        </svg>
                                                        <div class="apexcharts-legend"></div>
                                                        <div class="apexcharts-tooltip light">
                                                            <div class="apexcharts-tooltip-series-group"><span
                                                                    class="apexcharts-tooltip-marker"
                                                                    style="background-color: rgb(231, 238, 247);"></span>
                                                                <div class="apexcharts-tooltip-text"
                                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                    <div class="apexcharts-tooltip-y-group"><span
                                                                            class="apexcharts-tooltip-text-label"></span><span
                                                                            class="apexcharts-tooltip-text-value"></span>
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-z-group"><span
                                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                                            class="apexcharts-tooltip-text-z-value"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="resize-triggers">
                                                    <div class="expand-trigger">
                                                        <div style="width: 264px; height: 221px;"></div>
                                                    </div>
                                                    <div class="contract-trigger"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row avg-sessions pt-50">
                                            <div class="col-6">
                                                <p class="mb-0">Goal: $100000</p>
                                                <div class="progress progress-bar-primary mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                                        aria-valuemin="50" aria-valuemax="100" style="width:50%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Users: 100K</p>
                                                <div class="progress progress-bar-warning mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                                        aria-valuemin="60" aria-valuemax="100" style="width:60%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Retention: 90%</p>
                                                <div class="progress progress-bar-danger mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                        aria-valuemin="70" aria-valuemax="100" style="width:70%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Duration: 1yr</p>
                                                <div class="progress progress-bar-success mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                                        aria-valuemin="90" aria-valuemax="100" style="width:90%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title">Support Tracker</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-0 waves-effect waves-light"
                                            type="button" id="dropdownItem4" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Last 7 Days
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                                                <h1 class="font-large-2 text-bold-700 mt-2 mb-0">163</h1>
                                                <small>Tickets</small>
                                            </div>
                                            <div class="col-sm-10 col-12 d-flex justify-content-center">
                                                <div id="support-tracker-chart" style="min-height: 290px;">
                                                    <div id="apexchartsk88hxyok"
                                                        class="apexcharts-canvas apexchartsk88hxyok light"
                                                        style="width: 300px; height: 290px;"><svg id="SvgjsSvg1823"
                                                            width="300" height="290"
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                            style="background-color: transparent;">
                                                            <g id="SvgjsG1825"
                                                                class="apexcharts-inner apexcharts-graphical"
                                                                transform="translate(44.5, 20)">
                                                                <defs id="SvgjsDefs1824">
                                                                    <clipPath id="gridRectMaskk88hxyok">
                                                                        <rect id="SvgjsRect1826" width="215"
                                                                            height="237" x="-1" y="-1"
                                                                            rx="0" ry="0" fill="#ffffff"
                                                                            opacity="1" stroke-width="0"
                                                                            stroke="none" stroke-dasharray="0"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="gridRectMarkerMaskk88hxyok">
                                                                        <rect id="SvgjsRect1827" width="215"
                                                                            height="237" x="-1" y="-1"
                                                                            rx="0" ry="0" fill="#ffffff"
                                                                            opacity="1" stroke-width="0"
                                                                            stroke="none" stroke-dasharray="0"></rect>
                                                                    </clipPath>
                                                                    <linearGradient id="SvgjsLinearGradient1833"
                                                                        x1="0" y1="1" x2="1"
                                                                        y2="1">
                                                                        <stop id="SvgjsStop1834" stop-opacity="1"
                                                                            stop-color="rgba(115,103,240,1)"
                                                                            offset="0"></stop>
                                                                        <stop id="SvgjsStop1835" stop-opacity="1"
                                                                            stop-color="rgba(255,255,255,1)"
                                                                            offset="1"></stop>
                                                                        <stop id="SvgjsStop1836" stop-opacity="1"
                                                                            stop-color="rgba(255,255,255,1)"
                                                                            offset="1"></stop>
                                                                    </linearGradient>
                                                                    <linearGradient id="SvgjsLinearGradient1844"
                                                                        x1="0" y1="1" x2="1"
                                                                        y2="1">
                                                                        <stop id="SvgjsStop1845" stop-opacity="1"
                                                                            stop-color="rgba(115,103,240,1)"
                                                                            offset="0"></stop>
                                                                        <stop id="SvgjsStop1846" stop-opacity="1"
                                                                            stop-color="rgba(234,84,85,1)" offset="1">
                                                                        </stop>
                                                                        <stop id="SvgjsStop1847" stop-opacity="1"
                                                                            stop-color="rgba(234,84,85,1)" offset="1">
                                                                        </stop>
                                                                    </linearGradient>
                                                                </defs>
                                                                <g id="SvgjsG1829" class="apexcharts-radialbar">
                                                                    <g id="SvgjsG1830">
                                                                        <g id="SvgjsG1831" class="apexcharts-tracks">
                                                                            <g id="SvgjsG1832"
                                                                                class="apexcharts-radialbar-track apexcharts-track"
                                                                                rel="1">
                                                                                <path id="apexcharts-radialbarTrack-0"
                                                                                    d="M 49.93749999999995 215.4691238031146 A 113.125 113.125 0 1 1 163.0625 215.4691238031146"
                                                                                    fill="none" fill-opacity="1"
                                                                                    stroke="rgba(255,255,255,0.85)"
                                                                                    stroke-opacity="1"
                                                                                    stroke-linecap="butt"
                                                                                    stroke-width="21.25"
                                                                                    stroke-dasharray="0"
                                                                                    class="apexcharts-radialbar-area"
                                                                                    data:pathOrig="M 49.93749999999995 215.4691238031146 A 113.125 113.125 0 1 1 163.0625 215.4691238031146">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                        <g id="SvgjsG1838">
                                                                            <g id="SvgjsG1843"
                                                                                class="apexcharts-series apexcharts-radial-series"
                                                                                seriesName="CompletedxTickets"
                                                                                rel="1" data:realIndex="0">
                                                                                <path id="SvgjsPath1848"
                                                                                    d="M 49.93749999999995 215.4691238031146 A 113.125 113.125 0 1 1 218.23224352982496 135.1966488576761"
                                                                                    fill="none" fill-opacity="0.85"
                                                                                    stroke="url(#SvgjsLinearGradient1844)"
                                                                                    stroke-opacity="1"
                                                                                    stroke-linecap="butt"
                                                                                    stroke-width="21.25"
                                                                                    stroke-dasharray="8"
                                                                                    class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                                    data:angle="249" data:value="83"
                                                                                    index="0" j="0"
                                                                                    data:pathOrig="M 49.93749999999995 215.4691238031146 A 113.125 113.125 0 1 1 218.23224352982496 135.1966488576761">
                                                                                </path>
                                                                            </g>
                                                                            <circle id="SvgjsCircle1839" r="97.5"
                                                                                cx="106.5" cy="117.5"
                                                                                class="apexcharts-radialbar-hollow"
                                                                                fill="transparent"></circle>
                                                                            <g id="SvgjsG1840"
                                                                                class="apexcharts-datalabels-group"
                                                                                transform="translate(0, 0)"
                                                                                style="opacity: 1;"><text
                                                                                    id="SvgjsText1841"
                                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                                    x="106.5" y="117.5"
                                                                                    text-anchor="middle"
                                                                                    dominant-baseline="auto"
                                                                                    font-size="16px" font-weight="regular"
                                                                                    fill="#ea5455"
                                                                                    class="apexcharts-datalabel-label"
                                                                                    style="font-family: Helvetica, Arial, sans-serif;">Completed
                                                                                    Tickets</text><text id="SvgjsText1842"
                                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                                    x="106.5" y="163.5"
                                                                                    text-anchor="middle"
                                                                                    dominant-baseline="auto"
                                                                                    font-size="2rem" font-weight="regular"
                                                                                    fill="#99a2ac"
                                                                                    class="apexcharts-datalabel-value"
                                                                                    style="font-family: Helvetica, Arial, sans-serif;">83%</text>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <line id="SvgjsLine1849" x1="0" y1="0"
                                                                    x2="213" y2="0" stroke="#b6b6b6"
                                                                    stroke-dasharray="0" stroke-width="1"
                                                                    class="apexcharts-ycrosshairs"></line>
                                                                <line id="SvgjsLine1850" x1="0" y1="0"
                                                                    x2="213" y2="0" stroke-dasharray="0"
                                                                    stroke-width="0"
                                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                            </g>
                                                        </svg>
                                                        <div class="apexcharts-legend"></div>
                                                    </div>
                                                </div>
                                                <div class="resize-triggers">
                                                    <div class="expand-trigger">
                                                        <div style="width: 437px; height: 291px;"></div>
                                                    </div>
                                                    <div class="contract-trigger"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between">
                                            <div class="text-center">
                                                <p class="mb-50">New Tickets</p>
                                                <span class="font-large-1">29</span>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-50">Open Tickets</p>
                                                <span class="font-large-1">63</span>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-50">Response Time</p>
                                                <span class="font-large-1">1d</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-4 col-12">
                            <div class="card" style="height: 581.5px;">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4>Product Orders</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-0 waves-effect waves-light"
                                            type="button" id="dropdownItem2" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Last 7 Days
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem2">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body" style="position: relative;">
                                        <div id="product-order-chart" class="mb-3" style="min-height: 350px;">
                                            <div id="apexchartstd3s0huzj"
                                                class="apexcharts-canvas apexchartstd3s0huzj light"
                                                style="width: 307px; height: 350px;"><svg id="SvgjsSvg1769"
                                                    width="307" height="350" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background-color: transparent;">
                                                    <g id="SvgjsG1771" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(20.5, 0)">
                                                        <defs id="SvgjsDefs1770">
                                                            <clipPath id="gridRectMasktd3s0huzj">
                                                                <rect id="SvgjsRect1772" width="270" height="292"
                                                                    x="-1" y="-1" rx="0"
                                                                    ry="0" fill="#ffffff" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMasktd3s0huzj">
                                                                <rect id="SvgjsRect1773" width="270" height="292"
                                                                    x="-1" y="-1" rx="0"
                                                                    ry="0" fill="#ffffff" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0"></rect>
                                                            </clipPath>
                                                            <linearGradient id="SvgjsLinearGradient1779" x1="0"
                                                                y1="0" x2="0" y2="1">
                                                                <stop id="SvgjsStop1780" stop-opacity="1"
                                                                    stop-color="rgba(242,242,242,1)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop1781" stop-opacity="1"
                                                                    stop-color="rgba(143,128,249,1)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1782" stop-opacity="1"
                                                                    stop-color="rgba(143,128,249,1)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <linearGradient id="SvgjsLinearGradient1785" x1="0"
                                                                y1="0" x2="0" y2="1">
                                                                <stop id="SvgjsStop1786" stop-opacity="1"
                                                                    stop-color="rgba(242,242,242,1)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop1787" stop-opacity="1"
                                                                    stop-color="rgba(143,128,249,1)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1788" stop-opacity="1"
                                                                    stop-color="rgba(143,128,249,1)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <linearGradient id="SvgjsLinearGradient1791" x1="0"
                                                                y1="0" x2="0" y2="1">
                                                                <stop id="SvgjsStop1792" stop-opacity="1"
                                                                    stop-color="rgba(242,242,242,1)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop1793" stop-opacity="1"
                                                                    stop-color="rgba(143,128,249,1)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1794" stop-opacity="1"
                                                                    stop-color="rgba(143,128,249,1)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <linearGradient id="SvgjsLinearGradient1802" x1="0"
                                                                y1="0" x2="0" y2="1">
                                                                <stop id="SvgjsStop1803" stop-opacity="1"
                                                                    stop-color="rgba(115,103,240,1)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop1804" stop-opacity="1"
                                                                    stop-color="rgba(143,128,249,1)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1805" stop-opacity="1"
                                                                    stop-color="rgba(143,128,249,1)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <linearGradient id="SvgjsLinearGradient1808" x1="0"
                                                                y1="0" x2="0" y2="1">
                                                                <stop id="SvgjsStop1809" stop-opacity="1"
                                                                    stop-color="rgba(255,159,67,1)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop1810" stop-opacity="1"
                                                                    stop-color="rgba(255,192,133,1)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1811" stop-opacity="1"
                                                                    stop-color="rgba(255,192,133,1)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <linearGradient id="SvgjsLinearGradient1814" x1="0"
                                                                y1="0" x2="0" y2="1">
                                                                <stop id="SvgjsStop1815" stop-opacity="1"
                                                                    stop-color="rgba(234,84,85,1)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop1816" stop-opacity="1"
                                                                    stop-color="rgba(242,146,146,1)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1817" stop-opacity="1"
                                                                    stop-color="rgba(242,146,146,1)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <g id="SvgjsG1775" class="apexcharts-radialbar">
                                                            <g id="SvgjsG1776">
                                                                <g id="SvgjsG1777" class="apexcharts-tracks">
                                                                    <g id="SvgjsG1778"
                                                                        class="apexcharts-radialbar-track apexcharts-track"
                                                                        rel="1">
                                                                        <path id="apexcharts-radialbarTrack-0"
                                                                            d="M 134 11 A 123 123 0 1 1 133.97853245030944 11.000001873397125"
                                                                            fill="none" fill-opacity="1"
                                                                            stroke="rgba(242,242,242,0.85)"
                                                                            stroke-opacity="1" stroke-linecap="round"
                                                                            stroke-width="18" stroke-dasharray="0"
                                                                            class="apexcharts-radialbar-area"
                                                                            data:pathOrig="M 134 11 A 123 123 0 1 1 133.97853245030944 11.000001873397125">
                                                                        </path>
                                                                    </g>
                                                                    <g id="SvgjsG1784"
                                                                        class="apexcharts-radialbar-track apexcharts-track"
                                                                        rel="2">
                                                                        <path id="apexcharts-radialbarTrack-1"
                                                                            d="M 134 44 A 90 90 0 1 1 133.98429203681178 44.00000137077838"
                                                                            fill="none" fill-opacity="1"
                                                                            stroke="rgba(242,242,242,0.85)"
                                                                            stroke-opacity="1" stroke-linecap="round"
                                                                            stroke-width="18" stroke-dasharray="0"
                                                                            class="apexcharts-radialbar-area"
                                                                            data:pathOrig="M 134 44 A 90 90 0 1 1 133.98429203681178 44.00000137077838">
                                                                        </path>
                                                                    </g>
                                                                    <g id="SvgjsG1790"
                                                                        class="apexcharts-radialbar-track apexcharts-track"
                                                                        rel="3">
                                                                        <path id="apexcharts-radialbarTrack-2"
                                                                            d="M 134 77 A 57 57 0 1 1 133.99005162331412 77.00000086815965"
                                                                            fill="none" fill-opacity="1"
                                                                            stroke="rgba(242,242,242,0.85)"
                                                                            stroke-opacity="1" stroke-linecap="round"
                                                                            stroke-width="18" stroke-dasharray="0"
                                                                            class="apexcharts-radialbar-area"
                                                                            data:pathOrig="M 134 77 A 57 57 0 1 1 133.99005162331412 77.00000086815965">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG1796">
                                                                    <g id="SvgjsG1801"
                                                                        class="apexcharts-series apexcharts-radial-series"
                                                                        seriesName="Finished" rel="1"
                                                                        data:realIndex="0">
                                                                        <path id="SvgjsPath1806"
                                                                            d="M 134 11 A 123 123 0 1 1 17.020048495696116 172.00909030811854"
                                                                            fill="none" fill-opacity="0.85"
                                                                            stroke="url(#SvgjsLinearGradient1802)"
                                                                            stroke-opacity="1" stroke-linecap="round"
                                                                            stroke-width="18" stroke-dasharray="0"
                                                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                            data:angle="252" data:value="70"
                                                                            index="0" j="0"
                                                                            data:pathOrig="M 134 11 A 123 123 0 1 1 17.020048495696116 172.00909030811854">
                                                                        </path>
                                                                    </g>
                                                                    <g id="SvgjsG1807"
                                                                        class="apexcharts-series apexcharts-radial-series"
                                                                        seriesName="Pending" rel="2"
                                                                        data:realIndex="1">
                                                                        <path id="SvgjsPath1812"
                                                                            d="M 134 44 A 90 90 0 1 1 123.03175909353673 223.32915364771898"
                                                                            fill="none" fill-opacity="0.85"
                                                                            stroke="url(#SvgjsLinearGradient1808)"
                                                                            stroke-opacity="1" stroke-linecap="round"
                                                                            stroke-width="18" stroke-dasharray="0"
                                                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-1"
                                                                            data:angle="187" data:value="52"
                                                                            index="0" j="1"
                                                                            data:pathOrig="M 134 44 A 90 90 0 1 1 123.03175909353673 223.32915364771898">
                                                                        </path>
                                                                    </g>
                                                                    <g id="SvgjsG1813"
                                                                        class="apexcharts-series apexcharts-radial-series"
                                                                        seriesName="Rejected" rel="3"
                                                                        data:realIndex="2">
                                                                        <path id="SvgjsPath1818"
                                                                            d="M 134 77 A 57 57 0 0 1 190.86115086480999 137.97611900341514"
                                                                            fill="none" fill-opacity="0.85"
                                                                            stroke="url(#SvgjsLinearGradient1814)"
                                                                            stroke-opacity="1" stroke-linecap="round"
                                                                            stroke-width="18" stroke-dasharray="0"
                                                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-2"
                                                                            data:angle="94" data:value="26"
                                                                            index="0" j="2"
                                                                            data:pathOrig="M 134 77 A 57 57 0 0 1 190.86115086480999 137.97611900341514">
                                                                        </path>
                                                                    </g>
                                                                    <circle id="SvgjsCircle1797" r="43"
                                                                        cx="134" cy="134"
                                                                        class="apexcharts-radialbar-hollow"
                                                                        fill="transparent"></circle>
                                                                    <g id="SvgjsG1798"
                                                                        class="apexcharts-datalabels-group"
                                                                        transform="translate(0, 0)" style="opacity: 1;">
                                                                        <text id="SvgjsText1799"
                                                                            font-family="Helvetica, Arial, sans-serif"
                                                                            x="134" y="134"
                                                                            text-anchor="middle"
                                                                            dominant-baseline="auto" font-size="18px"
                                                                            font-weight="regular" fill="#373d3f"
                                                                            class="apexcharts-datalabel-label"
                                                                            style="font-family: Helvetica, Arial, sans-serif;">Total</text><text
                                                                            id="SvgjsText1800"
                                                                            font-family="Helvetica, Arial, sans-serif"
                                                                            x="134" y="166"
                                                                            text-anchor="middle"
                                                                            dominant-baseline="auto" font-size="16px"
                                                                            font-weight="regular" fill="#373d3f"
                                                                            class="apexcharts-datalabel-value"
                                                                            style="font-family: Helvetica, Arial, sans-serif;">42459</text>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1819" x1="0" y1="0"
                                                            x2="268" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1820" x1="0" y1="0"
                                                            x2="268" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" class="apexcharts-ycrosshairs-hidden">
                                                        </line>
                                                    </g>
                                                </svg>
                                                <div class="apexcharts-legend"></div>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-1">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle-o text-bold-700 text-primary"></i>
                                                <span class="text-bold-600 ml-50">Finished</span>
                                            </div>
                                            <div class="product-result">
                                                <span>23043</span>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-1">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle-o text-bold-700 text-warning"></i>
                                                <span class="text-bold-600 ml-50">Pending</span>
                                            </div>
                                            <div class="product-result">
                                                <span>14658</span>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-75">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle-o text-bold-700 text-danger"></i>
                                                <span class="text-bold-600 ml-50">Rejected</span>
                                            </div>
                                            <div class="product-result">
                                                <span>4758</span>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 350px; height: 534px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="card" style="height: 581.5px;">
                                <div class="card-header d-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="card-title">Sales Stats</h4>
                                        <p class="text-muted mt-25 mb-0">Last 6 months</p>
                                    </div>
                                    <p class="mb-0"><i
                                            class="feather icon-more-vertical font-medium-3 text-muted cursor-pointer"></i>
                                    </p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body px-0" style="position: relative;">
                                        <div id="sales-chart" style="min-height: 415px;">
                                            <div id="apexcharts5maadpp7"
                                                class="apexcharts-canvas apexcharts5maadpp7 light"
                                                style="width: 349px; height: 400px;"><svg id="SvgjsSvg1674"
                                                    width="349" height="400" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background-color: transparent;">
                                                    <foreignObject x="0" y="0" width="349"
                                                        height="400">
                                                        <div class="apexcharts-legend left position-top"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="right: 0px; position: absolute; left: 0px; top: 5px;">
                                                            <div class="apexcharts-legend-series" rel="1"
                                                                data:collapsed="false" style="margin: 0px 5px;"><span
                                                                    class="apexcharts-legend-marker" rel="1"
                                                                    data:collapsed="false"
                                                                    style="background-color: rgb(115, 103, 240); color: rgb(115, 103, 240); height: 10px; width: 10px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-top-left-radius: 12px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px;"></span><span
                                                                    class="apexcharts-legend-text" rel="1"
                                                                    i="0" data:default-text="Sales"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 16px; font-family: Helvetica, Arial, sans-serif;">Sales</span>
                                                            </div>
                                                            <div class="apexcharts-legend-series" rel="2"
                                                                data:collapsed="false" style="margin: 0px 5px;"><span
                                                                    class="apexcharts-legend-marker" rel="2"
                                                                    data:collapsed="false"
                                                                    style="background-color: rgb(13, 204, 225); color: rgb(13, 204, 225); height: 10px; width: 10px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-top-left-radius: 12px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px;"></span><span
                                                                    class="apexcharts-legend-text" rel="2"
                                                                    i="1" data:default-text="Visit"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 16px; font-family: Helvetica, Arial, sans-serif;">Visit</span>
                                                            </div>
                                                        </div>
                                                        <style type="text/css">
                                                            .apexcharts-legend {
                                                                display: flex;
                                                                overflow: auto;
                                                                padding: 0 10px;
                                                            }

                                                            .apexcharts-legend.position-bottom,
                                                            .apexcharts-legend.position-top {
                                                                flex-wrap: wrap
                                                            }

                                                            .apexcharts-legend.position-right,
                                                            .apexcharts-legend.position-left {
                                                                flex-direction: column;
                                                                bottom: 0;
                                                            }

                                                            .apexcharts-legend.position-bottom.left,
                                                            .apexcharts-legend.position-top.left,
                                                            .apexcharts-legend.position-right,
                                                            .apexcharts-legend.position-left {
                                                                justify-content: flex-start;
                                                            }

                                                            .apexcharts-legend.position-bottom.center,
                                                            .apexcharts-legend.position-top.center {
                                                                justify-content: center;
                                                            }

                                                            .apexcharts-legend.position-bottom.right,
                                                            .apexcharts-legend.position-top.right {
                                                                justify-content: flex-end;
                                                            }

                                                            .apexcharts-legend-series {
                                                                cursor: pointer;
                                                                line-height: normal;
                                                            }

                                                            .apexcharts-legend.position-bottom .apexcharts-legend-series,
                                                            .apexcharts-legend.position-top .apexcharts-legend-series {
                                                                display: flex;
                                                                align-items: center;
                                                            }

                                                            .apexcharts-legend-text {
                                                                position: relative;
                                                                font-size: 14px;
                                                            }

                                                            .apexcharts-legend-text *,
                                                            .apexcharts-legend-marker * {
                                                                pointer-events: none;
                                                            }

                                                            .apexcharts-legend-marker {
                                                                position: relative;
                                                                display: inline-block;
                                                                cursor: pointer;
                                                                margin-right: 3px;
                                                            }

                                                            .apexcharts-legend.right .apexcharts-legend-series,
                                                            .apexcharts-legend.left .apexcharts-legend-series {
                                                                display: inline-block;
                                                            }

                                                            .apexcharts-legend-series.no-click {
                                                                cursor: auto;
                                                            }

                                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                                display: none !important;
                                                            }

                                                            .inactive-legend {
                                                                opacity: 0.45;
                                                            }
                                                        </style>
                                                    </foreignObject>
                                                    <g id="SvgjsG1676" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(12, 48)">
                                                        <defs id="SvgjsDefs1675">
                                                            <clipPath id="gridRectMask5maadpp7">
                                                                <rect id="SvgjsRect1678" width="327" height="312"
                                                                    x="0" y="0" rx="0"
                                                                    ry="0" fill="#ffffff" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMask5maadpp7">
                                                                <rect id="SvgjsRect1679" width="329" height="314"
                                                                    x="-1" y="-1" rx="0"
                                                                    ry="0" fill="#ffffff" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0"></rect>
                                                            </clipPath>
                                                            <linearGradient id="SvgjsLinearGradient1686" x1="0"
                                                                y1="1" x2="1" y2="1">
                                                                <stop id="SvgjsStop1687" stop-opacity="1"
                                                                    stop-color="rgba(159,142,215,1)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop1688" stop-opacity="1"
                                                                    stop-color="rgba(115,103,240,1)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1689" stop-opacity="1"
                                                                    stop-color="rgba(115,103,240,1)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1690" stop-opacity="1"
                                                                    stop-color="rgba(159,142,215,1)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <filter id="SvgjsFilter1693">
                                                                <feFlood id="SvgjsFeFlood1694" flood-color="#000000"
                                                                    flood-opacity="0.2" result="SvgjsFeFlood1694Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1695"
                                                                    in="SvgjsFeFlood1694Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite1695Out">
                                                                </feComposite>
                                                                <feOffset id="SvgjsFeOffset1696" dx="1"
                                                                    dy="1" result="SvgjsFeOffset1696Out"
                                                                    in="SvgjsFeComposite1695Out"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1697"
                                                                    stdDeviation="8 "
                                                                    result="SvgjsFeGaussianBlur1697Out"
                                                                    in="SvgjsFeOffset1696Out"></feGaussianBlur>
                                                                <feBlend id="SvgjsFeBlend1698" in="SourceGraphic"
                                                                    in2="SvgjsFeGaussianBlur1697Out" mode="normal"
                                                                    result="SvgjsFeBlend1698Out"></feBlend>
                                                            </filter>
                                                            <linearGradient id="SvgjsLinearGradient1714" x1="0"
                                                                y1="1" x2="1" y2="1">
                                                                <stop id="SvgjsStop1715" stop-opacity="1"
                                                                    stop-color="rgba(30,222,197,1)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop1716" stop-opacity="1"
                                                                    stop-color="rgba(13,204,225,1)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1717" stop-opacity="1"
                                                                    stop-color="rgba(13,204,225,1)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1718" stop-opacity="1"
                                                                    stop-color="rgba(30,222,197,1)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <filter id="SvgjsFilter1721">
                                                                <feFlood id="SvgjsFeFlood1722" flood-color="#000000"
                                                                    flood-opacity="0.2" result="SvgjsFeFlood1722Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1723"
                                                                    in="SvgjsFeFlood1722Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite1723Out">
                                                                </feComposite>
                                                                <feOffset id="SvgjsFeOffset1724" dx="1"
                                                                    dy="1" result="SvgjsFeOffset1724Out"
                                                                    in="SvgjsFeComposite1723Out"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1725"
                                                                    stdDeviation="8 "
                                                                    result="SvgjsFeGaussianBlur1725Out"
                                                                    in="SvgjsFeOffset1724Out"></feGaussianBlur>
                                                                <feBlend id="SvgjsFeBlend1726" in="SourceGraphic"
                                                                    in2="SvgjsFeGaussianBlur1725Out" mode="normal"
                                                                    result="SvgjsFeBlend1726Out"></feBlend>
                                                            </filter>
                                                        </defs>
                                                        <g id="SvgjsG1757" class="apexcharts-grid">
                                                            <line id="SvgjsLine1759" x1="0" y1="312"
                                                                x2="327" y2="312" stroke="transparent"
                                                                stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine1758" x1="0" y1="1"
                                                                x2="0" y2="312" stroke="transparent"
                                                                stroke-dasharray="0"></line>
                                                        </g>
                                                        <g id="SvgjsG1681" class="apexcharts-radar-series"
                                                            data:innerTranslateX="163.5" data:innerTranslateY="131"
                                                            transform="translate(163.5, 156)">
                                                            <polygon id="SvgjsPolygon1745"
                                                                points="0,-137.3928571428571 118.98570458424052,-68.69642857142857 118.98570458424054,68.69642857142853 1.6825772272570953e-14,137.3928571428571 -118.98570458424048,68.69642857142861 -118.98570458424058,-68.69642857142847 "
                                                                fill="#ffffff" stroke="#e8e8e8"></polygon>
                                                            <polygon id="SvgjsPolygon1746"
                                                                points="0,-103.04464285714283 89.23927843818039,-51.52232142857143 89.2392784381804,51.5223214285714 1.2619329204428214e-14,103.04464285714283 -89.23927843818036,51.52232142857146 -89.23927843818043,-51.522321428571345 "
                                                                fill="#ffffff" stroke="transparent"></polygon>
                                                            <polygon id="SvgjsPolygon1747"
                                                                points="0,-68.69642857142856 59.49285229212026,-34.348214285714285 59.49285229212027,34.34821428571426 8.412886136285476e-15,68.69642857142856 -59.49285229212024,34.348214285714306 -59.49285229212029,-34.348214285714235 "
                                                                fill="#ffffff" stroke="transparent"></polygon>
                                                            <polygon id="SvgjsPolygon1748"
                                                                points="0,-34.34821428571428 29.74642614606013,-17.174107142857142 29.746426146060134,17.17410714285713 4.206443068142738e-15,34.34821428571428 -29.74642614606012,17.174107142857153 -29.746426146060145,-17.174107142857117 "
                                                                fill="#ffffff" stroke="transparent"></polygon>
                                                            <polygon id="SvgjsPolygon1749"
                                                                points="0,0 0,0 0,0 0,0 0,0 0,0 " fill="#ffffff"
                                                                stroke="transparent"></polygon>
                                                            <line id="SvgjsLine1739" x1="0"
                                                                y1="-137.3928571428571" x2="0" y2="0"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine1740" x1="118.98570458424052"
                                                                y1="-68.69642857142857" x2="0" y2="0"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine1741" x1="118.98570458424054"
                                                                y1="68.69642857142853" x2="0" y2="0"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine1742" x1="1.6825772272570953e-14"
                                                                y1="137.3928571428571" x2="0" y2="0"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine1743" x1="-118.98570458424048"
                                                                y1="68.69642857142861" x2="0" y2="0"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine1744" x1="-118.98570458424058"
                                                                y1="-68.69642857142847" x2="0" y2="0"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                            <g id="SvgjsG1750" class="apexcharts-datalabels"><text
                                                                    id="SvgjsText1751"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="0" y="-147.3928571428571"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="11px" font-weight="regular"
                                                                    fill="#b9c3cd" class="apexcharts-datalabel"
                                                                    cx="0" cy="-147.3928571428571"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">Jan</text><text
                                                                    id="SvgjsText1752"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="128.98570458424052" y="-68.69642857142857"
                                                                    text-anchor="start" dominant-baseline="auto"
                                                                    font-size="11px" font-weight="regular"
                                                                    fill="#b9c3cd" class="apexcharts-datalabel"
                                                                    cx="128.98570458424052" cy="-68.69642857142857"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">Feb</text><text
                                                                    id="SvgjsText1753"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="128.98570458424052" y="68.69642857142853"
                                                                    text-anchor="start" dominant-baseline="auto"
                                                                    font-size="11px" font-weight="regular"
                                                                    fill="#b9c3cd" class="apexcharts-datalabel"
                                                                    cx="128.98570458424052" cy="68.69642857142853"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">Mar</text><text
                                                                    id="SvgjsText1754"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="1.6825772272570953e-14" y="147.3928571428571"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="11px" font-weight="regular"
                                                                    fill="#b9c3cd" class="apexcharts-datalabel"
                                                                    cx="1.6825772272570953e-14" cy="147.3928571428571"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">Apr</text><text
                                                                    id="SvgjsText1755"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="-128.98570458424047" y="68.69642857142861"
                                                                    text-anchor="end" dominant-baseline="auto"
                                                                    font-size="11px" font-weight="regular"
                                                                    fill="#b9c3cd" class="apexcharts-datalabel"
                                                                    cx="-128.98570458424047" cy="68.69642857142861"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">May</text><text
                                                                    id="SvgjsText1756"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="-128.98570458424058" y="-68.69642857142847"
                                                                    text-anchor="end" dominant-baseline="auto"
                                                                    font-size="11px" font-weight="regular"
                                                                    fill="#b9c3cd" class="apexcharts-datalabel"
                                                                    cx="-128.98570458424058" cy="-68.69642857142847"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">Jun</text>
                                                            </g>
                                                            <g id="SvgjsG1682" class="apexcharts-yaxis"></g>
                                                            <g id="SvgjsG1683" class="apexcharts-series"
                                                                seriesName="Sales" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1685"
                                                                    d="M 0 -103.04464285714283L 0 -103.04464285714283L 49.57737691010021 -28.623511904761905L 85.27308828537238 49.23244047619045L 5.608590757523651e-15 45.79761904761904L -99.15475382020041 57.247023809523846L -19.830950764040097 -11.449404761904743Z"
                                                                    fill="none" fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0" class="apexcharts-radar"
                                                                    index="0"
                                                                    pathTo="M 0 -103.04464285714283L 0 -103.04464285714283L 49.57737691010021 -28.623511904761905L 85.27308828537238 49.23244047619045L 5.608590757523651e-15 45.79761904761904L -99.15475382020041 57.247023809523846L -19.830950764040097 -11.449404761904743Z"
                                                                    pathFrom="M 0 0"></path>
                                                                <path id="SvgjsPath1691"
                                                                    d="M 0 -103.04464285714283L 0 -103.04464285714283L 49.57737691010021 -28.623511904761905L 85.27308828537238 49.23244047619045L 5.608590757523651e-15 45.79761904761904L -99.15475382020041 57.247023809523846L -19.830950764040097 -11.449404761904743Z"
                                                                    fill="url(#SvgjsLinearGradient1686)"
                                                                    fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0" class="apexcharts-radar"
                                                                    index="0"
                                                                    pathTo="M 0 -103.04464285714283L 0 -103.04464285714283L 49.57737691010021 -28.623511904761905L 85.27308828537238 49.23244047619045L 5.608590757523651e-15 45.79761904761904L -99.15475382020041 57.247023809523846L -19.830950764040097 -11.449404761904743Z"
                                                                    pathFrom="M 0 0" filter="url(#SvgjsFilter1693)">
                                                                </path>
                                                                <g id="SvgjsG1684"
                                                                    class="apexcharts-series-markers-wrap">
                                                                    <g id="SvgjsG1700"
                                                                        class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1699" r="0"
                                                                            cx="0" cy="-103.04464285714283"
                                                                            class="apexcharts-marker" stroke="#ffffff"
                                                                            fill="#7367f0" fill-opacity="1"
                                                                            stroke-width="1" stroke-opacity="1"
                                                                            rel="0" j="0"
                                                                            index="0" default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                    <g id="SvgjsG1702"
                                                                        class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1701" r="0"
                                                                            cx="49.57737691010021"
                                                                            cy="-28.623511904761905"
                                                                            class="apexcharts-marker" stroke="#ffffff"
                                                                            fill="#7367f0" fill-opacity="1"
                                                                            stroke-width="1" stroke-opacity="1"
                                                                            rel="1" j="1"
                                                                            index="0" default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                    <g id="SvgjsG1704"
                                                                        class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1703" r="0"
                                                                            cx="85.27308828537238"
                                                                            cy="49.23244047619045"
                                                                            class="apexcharts-marker" stroke="#ffffff"
                                                                            fill="#7367f0" fill-opacity="1"
                                                                            stroke-width="1" stroke-opacity="1"
                                                                            rel="2" j="2"
                                                                            index="0" default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                    <g id="SvgjsG1706"
                                                                        class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1705" r="0"
                                                                            cx="5.608590757523651e-15"
                                                                            cy="45.79761904761904"
                                                                            class="apexcharts-marker" stroke="#ffffff"
                                                                            fill="#7367f0" fill-opacity="1"
                                                                            stroke-width="1" stroke-opacity="1"
                                                                            rel="3" j="3"
                                                                            index="0" default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                    <g id="SvgjsG1708"
                                                                        class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1707" r="0"
                                                                            cx="-99.15475382020041"
                                                                            cy="57.247023809523846"
                                                                            class="apexcharts-marker" stroke="#ffffff"
                                                                            fill="#7367f0" fill-opacity="1"
                                                                            stroke-width="1" stroke-opacity="1"
                                                                            rel="4" j="4"
                                                                            index="0" default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                    <g id="SvgjsG1710"
                                                                        class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1709" r="0"
                                                                            cx="-19.830950764040097"
                                                                            cy="-11.449404761904743"
                                                                            class="apexcharts-marker" stroke="#ffffff"
                                                                            fill="#7367f0" fill-opacity="1"
                                                                            stroke-width="1" stroke-opacity="1"
                                                                            rel="5" j="5"
                                                                            index="0" default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1765" r="0"
                                                                            cx="0" cy="0"
                                                                            class="apexcharts-marker w8urpv5vxl"
                                                                            stroke="#ffffff" fill="#7367f0"
                                                                            fill-opacity="1" stroke-width="1"
                                                                            stroke-opacity="1" default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1711" class="apexcharts-series"
                                                                seriesName="Visit" rel="2" data:realIndex="1">
                                                                <path id="SvgjsPath1713"
                                                                    d="M 0 -80.14583333333331L 0 -80.14583333333331L 74.36606536515032 -42.935267857142854L 69.40832767414031 40.07291666666664L 1.0656322439294937e-14 87.01547619047616L -19.830950764040082 11.44940476190477L -84.28154074717041 -48.65997023809516Z"
                                                                    fill="none" fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0" class="apexcharts-radar"
                                                                    index="1"
                                                                    pathTo="M 0 -80.14583333333331L 0 -80.14583333333331L 74.36606536515032 -42.935267857142854L 69.40832767414031 40.07291666666664L 1.0656322439294937e-14 87.01547619047616L -19.830950764040082 11.44940476190477L -84.28154074717041 -48.65997023809516Z"
                                                                    pathFrom="M 0 0"></path>
                                                                <path id="SvgjsPath1719"
                                                                    d="M 0 -80.14583333333331L 0 -80.14583333333331L 74.36606536515032 -42.935267857142854L 69.40832767414031 40.07291666666664L 1.0656322439294937e-14 87.01547619047616L -19.830950764040082 11.44940476190477L -84.28154074717041 -48.65997023809516Z"
                                                                    fill="url(#SvgjsLinearGradient1714)"
                                                                    fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0" class="apexcharts-radar"
                                                                    index="1"
                                                                    pathTo="M 0 -80.14583333333331L 0 -80.14583333333331L 74.36606536515032 -42.935267857142854L 69.40832767414031 40.07291666666664L 1.0656322439294937e-14 87.01547619047616L -19.830950764040082 11.44940476190477L -84.28154074717041 -48.65997023809516Z"
                                                                    pathFrom="M 0 0" filter="url(#SvgjsFilter1721)">
                                                                </path>
                                                                <g id="SvgjsG1712"
                                                                    class="apexcharts-series-markers-wrap">
                                                                    <g id="SvgjsG1728"
                                                                        class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1727" r="0"
                                                                            cx="0" cy="-80.14583333333331"
                                                                            class="apexcharts-marker" stroke="#ffffff"
                                                                            fill="#0dcce1" fill-opacity="1"
                                                                            stroke-width="1" stroke-opacity="1"
                                                                            rel="0" j="0"
                                                                            index="1" default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                    <g id="SvgjsG1730"
                                                                        class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1729" r="0"
                                                                            cx="74.36606536515032"
                                                                            cy="-42.935267857142854"
                                                                            class="apexcharts-marker" stroke="#ffffff"
                                                                            fill="#0dcce1" fill-opacity="1"
                                                                            stroke-width="1" stroke-opacity="1"
                                                                            rel="1" j="1"
                                                                            index="1" default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                    <g id="SvgjsG1732"
                                                                        class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1731" r="0"
                                                                            cx="69.40832767414031"
                                                                            cy="40.07291666666664"
                                                                            class="apexcharts-marker" stroke="#ffffff"
                                                                            fill="#0dcce1" fill-opacity="1"
                                                                            stroke-width="1" stroke-opacity="1"
                                                                            rel="2" j="2"
                                                                            index="1" default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                    <g id="SvgjsG1734"
                                                                        class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1733" r="0"
                                                                            cx="1.0656322439294937e-14"
                                                                            cy="87.01547619047616"
                                                                            class="apexcharts-marker" stroke="#ffffff"
                                                                            fill="#0dcce1" fill-opacity="1"
                                                                            stroke-width="1" stroke-opacity="1"
                                                                            rel="3" j="3"
                                                                            index="1" default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                    <g id="SvgjsG1736"
                                                                        class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1735" r="0"
                                                                            cx="-19.830950764040082"
                                                                            cy="11.44940476190477"
                                                                            class="apexcharts-marker" stroke="#ffffff"
                                                                            fill="#0dcce1" fill-opacity="1"
                                                                            stroke-width="1" stroke-opacity="1"
                                                                            rel="4" j="4"
                                                                            index="1" default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                    <g id="SvgjsG1738"
                                                                        class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1737" r="0"
                                                                            cx="-84.28154074717041"
                                                                            cy="-48.65997023809516"
                                                                            class="apexcharts-marker" stroke="#ffffff"
                                                                            fill="#0dcce1" fill-opacity="1"
                                                                            stroke-width="1" stroke-opacity="1"
                                                                            rel="5" j="5"
                                                                            index="1" default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1766" r="0"
                                                                            cx="0" cy="0"
                                                                            class="apexcharts-marker w9o36rxku"
                                                                            stroke="#ffffff" fill="#0dcce1"
                                                                            fill-opacity="1" stroke-width="1"
                                                                            stroke-opacity="1" default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1760" x1="0" y1="0"
                                                            x2="327" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1761" x1="0" y1="0"
                                                            x2="327" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" class="apexcharts-ycrosshairs-hidden">
                                                        </line>
                                                        <g id="SvgjsG1762" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1763" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1764" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg>
                                                <div class="apexcharts-tooltip light">
                                                    <div class="apexcharts-tooltip-title"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(115, 103, 240);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-label"></span><span
                                                                    class="apexcharts-tooltip-text-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(13, 204, 225);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-label"></span><span
                                                                    class="apexcharts-tooltip-text-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 351px; height: 458px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="card" style="height: 581.5px;">
                                <div class="card-header">
                                    <h4 class="card-title">Activity Timeline</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="activity-timeline timeline-left list-unstyled">
                                            <li>
                                                <div class="timeline-icon bg-primary">
                                                    <i class="feather icon-plus font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Client Meeting</p>
                                                    <span class="font-small-3">Bonbon macaroon jelly beans gummi bears
                                                        jelly lollipop apple</span>
                                                </div>
                                                <small class="text-muted">25 mins ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-warning">
                                                    <i class="feather icon-alert-circle font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Email Newsletter</p>
                                                    <span class="font-small-3">Cupcake gummi bears soufflé caramels
                                                        candy</span>
                                                </div>
                                                <small class="text-muted">15 days ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-danger">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Plan Webinar</p>
                                                    <span class="font-small-3">Candy ice cream cake. Halvah gummi
                                                        bears</span>
                                                </div>
                                                <small class="text-muted">20 days ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-success">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Launch Website</p>
                                                    <span class="font-small-3">Candy ice cream cake. </span>
                                                </div>
                                                <small class="text-muted">25 days ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-primary">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Marketing</p>
                                                    <span class="font-small-3">Candy ice cream. Halvah bears Cupcake gummi
                                                        bears.</span>
                                                </div>
                                                <small class="text-muted">28 days ago</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Dispatched Orders</h4>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive mt-1">
                                        <table class="table table-hover-animation mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ORDER</th>
                                                    <th>STATUS</th>
                                                    <th>OPERATORS</th>
                                                    <th>LOCATION</th>
                                                    <th>DISTANCE</th>
                                                    <th>START DATE</th>
                                                    <th>EST DEL. DT</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#879985</td>
                                                    <td><i class="fa fa-circle font-small-3 text-success mr-50"></i>Moving
                                                    </td>
                                                    <td class="p-1">
                                                        <ul
                                                            class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Vinnie Mostowy"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-5.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Elicia Rieske"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Julee Rossignol"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-10.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Darcey Nooner"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-8.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>Anniston, Alabama</td>
                                                    <td>
                                                        <span>130 km</span>
                                                        <div class="progress progress-bar-success mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 80%" aria-valuenow="80"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>14:58 26/07/2018</td>
                                                    <td>28/07/2018</td>
                                                </tr>
                                                <tr>
                                                    <td>#156897</td>
                                                    <td><i
                                                            class="fa fa-circle font-small-3 text-warning mr-50"></i>Pending
                                                    </td>
                                                    <td class="p-1">
                                                        <ul
                                                            class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Trina Lynes"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-1.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Lilian Nenez"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-2.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Alberto Glotzbach"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-3.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>Cordova, Alaska</td>
                                                    <td>
                                                        <span>234 km</span>
                                                        <div class="progress progress-bar-warning mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 60%" aria-valuenow="60"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>14:58 26/07/2018</td>
                                                    <td>28/07/2018</td>
                                                </tr>
                                                <tr>
                                                    <td>#568975</td>
                                                    <td><i class="fa fa-circle font-small-3 text-success mr-50"></i>Moving
                                                    </td>
                                                    <td class="p-1">
                                                        <ul
                                                            class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Lai Lewandowski"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Elicia Rieske"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Darcey Nooner"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-8.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Julee Rossignol"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-10.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Jeffrey Gerondale"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-9.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>Florence, Alabama</td>
                                                    <td>
                                                        <span>168 km</span>
                                                        <div class="progress progress-bar-success mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 70%" aria-valuenow="70"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>14:58 26/07/2018</td>
                                                    <td>28/07/2018</td>
                                                </tr>
                                                <tr>
                                                    <td>#245689</td>
                                                    <td><i
                                                            class="fa fa-circle font-small-3 text-danger mr-50"></i>Canceled
                                                    </td>
                                                    <td class="p-1">
                                                        <ul
                                                            class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Vinnie Mostowy"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-5.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Elicia Rieske"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>Clifton, Arizona</td>
                                                    <td>
                                                        <span>125 km</span>
                                                        <div class="progress progress-bar-danger mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 95%" aria-valuenow="95"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>14:58 26/07/2018</td>
                                                    <td>28/07/2018</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none;"></div>
    <div class="drag-target" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none;"></div>
@endsection
