<?php
// defined('_JEXEC') or die('Restricted access');

// phpinfo();
?>
<html>
<head>
    <link rel="stylesheet" href="css/graph.css" type="text/css" />
        <title>NiFi</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="shortcut icon" href="images/nifi16.ico"/>
        <link rel="stylesheet" href="assets/reset.css/reset.css" type="text/css" />
        <link rel="stylesheet" href="css/nf-canvas-all.css?1.15.3" type="text/css" />
<link rel="stylesheet" href="css/message-pane.css?1.15.3" type="text/css" />
<link rel="stylesheet" href="css/nf-common-ui.css?1.15.3" type="text/css" />
        <link rel="stylesheet" href="js/codemirror/lib/codemirror.css" type="text/css" />
        <link rel="stylesheet" href="js/codemirror/addon/hint/show-hint.css" type="text/css" />
        <link rel="stylesheet" href="js/jquery/nfeditor/jquery.nfeditor.css?1.15.3" type="text/css" />
        <link rel="stylesheet" href="js/jquery/nfeditor/languages/nfeditor.css?1.15.3" type="text/css" />
        <link rel="stylesheet" href="js/jquery/tabbs/jquery.tabbs.css?1.15.3" type="text/css" />
        <link rel="stylesheet" href="js/jquery/combo/jquery.combo.css?1.15.3" type="text/css" />
        <link rel="stylesheet" href="js/jquery/propertytable/jquery.propertytable.css?1.15.3" type="text/css" />
        <link rel="stylesheet" href="js/jquery/tagcloud/jquery.tagcloud.css?1.15.3" type="text/css" />
        <link rel="stylesheet" href="js/jquery/modal/jquery.modal.css?1.15.3" type="text/css" />
        <link rel="stylesheet" href="js/jquery/statusbar/jquery.statusbar.css?1.15.3" type="text/css" />
        <link rel="stylesheet" href="assets/qtip2/dist/jquery.qtip.min.css?" type="text/css" />
        <link rel="stylesheet" href="assets/jquery-ui-dist/jquery-ui.min.css" type="text/css" />
        <link rel="stylesheet" href="assets/jquery-minicolors/jquery.minicolors.css" type="text/css" />
        <link rel="stylesheet" href="assets/slickgrid/slick.grid.css" type="text/css" />
        <link rel="stylesheet" href="css/slick-nifi-theme.css" type="text/css" />
        <link rel="stylesheet" href="fonts/flowfont/flowfont.css" type="text/css" />
        <link rel="stylesheet" href="assets/angular-material/angular-material.min.css" type="text/css" />
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css" />
        <script>
            //force browsers to use URLSearchParams polyfill do to bugs and inconsistent browser implementations
            URLSearchParams = undefined;
        </script>
        <script type="text/javascript" src="assets/url-search-params/build/url-search-params.js"></script>
        <script type="text/javascript" src="js/codemirror/lib/codemirror-compressed.js"></script>
        <script type="text/javascript" src="assets/d3/build/d3.min.js"></script>
        <script type="text/javascript" src="assets/d3-selection-multi/build/d3-selection-multi.min.js"></script>
        <script type="text/javascript" src="assets/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="assets/jquery-ui-dist/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery/jquery.base64.js"></script>
        <script type="text/javascript" src="js/jquery/jquery.center.js"></script>
        <script type="text/javascript" src="js/jquery/jquery.ellipsis.js"></script>
        <script type="text/javascript" src="js/jquery/jquery.each.js"></script>
        <script type="text/javascript" src="js/jquery/jquery.tab.js"></script>
        <script type="text/javascript" src="assets/jquery-form/jquery.form.js"></script>
        <script type="text/javascript" src="js/jquery/tabbs/jquery.tabbs.js?1.15.3"></script>
        <script type="text/javascript" src="js/jquery/combo/jquery.combo.js?1.15.3"></script>
        <script type="text/javascript" src="js/jquery/modal/jquery.modal.js?1.15.3"></script>
        <script type="text/javascript" src="assets/jquery-minicolors/jquery.minicolors.min.js"></script>
        <script type="text/javascript" src="assets/lodash-core/distrib/lodash-core.min.js"></script>
        <script type="text/javascript" src="assets/moment/min/moment.min.js"></script>
        <script type="text/javascript" src="assets/qtip2/dist/jquery.qtip.min.js"></script>
        <script type="text/javascript" src="assets/slickgrid/lib/jquery.event.drag-2.3.0.js"></script>
        <script type="text/javascript" src="assets/slickgrid/plugins/slick.cellrangeselector.js"></script>
        <script type="text/javascript" src="assets/slickgrid/plugins/slick.cellselectionmodel.js"></script>
        <script type="text/javascript" src="assets/slickgrid/plugins/slick.rowselectionmodel.js"></script>
        <script type="text/javascript" src="assets/slickgrid/plugins/slick.autotooltips.js"></script>
        <script type="text/javascript" src="assets/slickgrid/slick.formatters.js"></script>
        <script type="text/javascript" src="assets/slickgrid/slick.editors.js"></script>
        <script type="text/javascript" src="assets/slickgrid/slick.dataview.js"></script>
        <script type="text/javascript" src="assets/slickgrid/slick.core.js"></script>
        <script type="text/javascript" src="assets/slickgrid/slick.grid.js"></script>
        <script type="text/javascript" src="assets/angular/angular.min.js"></script>
        <script type="text/javascript" src="assets/angular-messages/angular-messages.min.js"></script>
        <script type="text/javascript" src="assets/angular-resource/angular-resource.min.js"></script>
        <script type="text/javascript" src="assets/angular-route/angular-route.min.js"></script>
        <script type="text/javascript" src="assets/angular-aria/angular-aria.min.js"></script>
        <script type="text/javascript" src="assets/angular-animate/angular-animate.min.js"></script>
        <script type="text/javascript" src="assets/angular-material/angular-material.min.js"></script>
        <script type="text/javascript" src="assets/JSON2/json2.js"></script>
        <script type="text/javascript" src="js/nf/nf-namespace.js?1.15.3"></script>
        <script type="text/javascript" src="js/nf/nf-ng-namespace.js?1.15.3"></script>
        <script type="text/javascript" src="js/nf/canvas/nf-ng-canvas-namespace.js?1.15.3"></script>
        <script type="text/javascript" src="js/nf/canvas/nf-canvas-all.js?1.15.3"></script>
        <script type="text/javascript" src="js/jquery/nfeditor/languages/nfel.js?1.15.3"></script>
        <script type="text/javascript" src="js/jquery/nfeditor/languages/nfpr.js?1.15.3"></script>
        <script type="text/javascript" src="js/jquery/nfeditor/jquery.nfeditor.js?1.15.3"></script>
        <script type="text/javascript" src="js/jquery/propertytable/jquery.propertytable.js?1.15.3"></script>
        <script type="text/javascript" src="js/jquery/tagcloud/jquery.tagcloud.js?1.15.3"></script>
        <script type="text/javascript" src="js/jquery/statusbar/jquery.statusbar.js?1.15.3"></script>

</head>
<body ng-controller="ngCanvasAppCtrl" id="canvas-body">
    <div id="canvas-container" class="unselectable" style="height: 1156px; bottom: 0px">
        <svg height="1156" width="1368">
            <g transform="rotate(45 50 50)">
              <rect class="border" x="120" width="352" height="128" fill="transparent" stroke="transparent"></rect>
              <line x1="10" y1="10" x2="85" y2="10"
                  style="stroke: #006600;"/>

              <rect x="10" y="20" height="50" width="75"
                  style="stroke: #006600; fill: #006600"/>

              <text x="10" y="90" style="stroke: #660000; fill: #660000">
                Text grouped with shapes</text>
            </g>

        </svg>
    </div>
    <div id="graph-controls">
        <g>
          <line x1="10" y1="10" x2="85" y2="10"
              style="stroke: #006600;"/>

          <rect x="10" y="20" height="50" width="75"
              style="stroke: #006600; fill: #006600"/>

          <text x="10" y="90" style="stroke: #660000; fill: #660000">
            Text grouped with shapes</text>
        </g>
        <div id="navigation-control" class="graph-control">
        <div class="graph-control-docked pointer fa fa-compass" title="Navigate"
             ng-click="appCtrl.serviceProvider.graphControlsCtrl.undock($event)">
        </div>
        <div class="graph-control-header-container hidden pointer"
             ng-click="appCtrl.serviceProvider.graphControlsCtrl.expand($event)">
            <div class="graph-control-header-icon fa fa-compass">
            </div>
            <div class="graph-control-header">Navigate</div>
            <div class="graph-control-header-action">
                <div class="graph-control-expansion fa fa-plus-square-o pointer"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="graph-control-content hidden">
            <div id="navigation-buttons">
                <div id="naviagte-zoom-in" class="action-button" title="Zoom In"
                     ng-click="appCtrl.serviceProvider.graphControlsCtrl.navigateCtrl.zoomIn();">
                    <button><div class="graph-control-action-icon fa fa-search-plus"></div></button>
                </div>
                <div class="button-spacer-small">&nbsp;</div>
                <div id="naviagte-zoom-out" class="action-button" title="Zoom Out"
                     ng-click="appCtrl.serviceProvider.graphControlsCtrl.navigateCtrl.zoomOut();">
                    <button><div class="graph-control-action-icon fa fa-search-minus"></div></button>
                </div>
                <div class="button-spacer-large">&nbsp;</div>
                <div id="naviagte-zoom-fit" class="action-button" title="Fit"
                     ng-click="appCtrl.serviceProvider.graphControlsCtrl.navigateCtrl.zoomFit();">
                    <button><div class="graph-control-action-icon icon icon-zoom-fit"></div></button>
                </div>
                <div class="button-spacer-small">&nbsp;</div>
                <div id="naviagte-zoom-actual-size" class="action-button" title="Actual"
                     ng-click="appCtrl.serviceProvider.graphControlsCtrl.navigateCtrl.zoomActualSize();">
                    <button><div class="graph-control-action-icon icon icon-zoom-actual"></div></button>
                </div>
                <div class="clear"></div>
            </div>
            <div id="birdseye"></div>
        </div>

        </dev>
    </div>
</body>
</html>

