<?php
// defined('_JEXEC') or die('Restricted access');

// phpinfo();
?>
<html>
    <head>
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
        <div id="splash">
            <div id="splash-img" layout="row" layout-align="center center">
                <md-progress-circular md-mode="indeterminate" class="md-warn" md-diameter="150"></md-progress-circular>
            </div>
        </div>
        

<div id="message-pane" class="message-pane hidden">
    <div class="message-pane-message-box">
        <div id="message-title" class="message-pane-title"></div>
        <div id="user-links-container">
            <ul class="links">
                <li id="user-logout-container" style="display: none;">
                    <span id="user-logout" class="link">log out</span>
                </li>
                <li>
                    <span id="user-home" class="link">home</span>
                </li>
            </ul>
        </div>
        <div id="message-content" class="message-pane-content"></div>
    </div>
</div>
        

<div id="banner-header" class="main-banner-header"></div>
<div id="banner-footer" class="main-banner-footer"></div>
        

<md-toolbar id="header" layout-align="space-between center" layout="row" class="md-small md-accent md-hue-1">
    <img id="nifi-logo" src="images/nifi-logo.svg">
    <div flex layout="row" layout-align="space-between center">
        <div id="component-container">
            <button title="{{appCtrl.serviceProvider.headerCtrl.toolboxCtrl.config.type.processor}}"
                    id="processor-component"
                    class="component-button icon icon-processor"
                    ng-disabled="!appCtrl.nf.CanvasUtils.canWriteCurrentGroup();"
                    nf-draggable="appCtrl.serviceProvider.headerCtrl.toolboxCtrl.draggableComponentConfig(appCtrl.serviceProvider.headerCtrl.toolboxCtrl.processorComponent);">
                <span class="component-button-grip"></span>
            </button>
            <button title="{{appCtrl.serviceProvider.headerCtrl.toolboxCtrl.config.type.inputPort}}"
                    id="port-in-component"
                    class="component-button icon icon-port-in"
                    ng-disabled="!appCtrl.nf.CanvasUtils.canWriteCurrentGroup();"
                    nf-draggable="appCtrl.serviceProvider.headerCtrl.toolboxCtrl.draggableComponentConfig(appCtrl.serviceProvider.headerCtrl.toolboxCtrl.inputPortComponent);">
                <span class="component-button-grip"></span>
            </button>
            <button title="{{appCtrl.serviceProvider.headerCtrl.toolboxCtrl.config.type.outputPort}}"
                    id="port-out-component"
                    class="component-button icon icon-port-out"
                    ng-disabled="!appCtrl.nf.CanvasUtils.canWriteCurrentGroup();"
                    nf-draggable="appCtrl.serviceProvider.headerCtrl.toolboxCtrl.draggableComponentConfig(appCtrl.serviceProvider.headerCtrl.toolboxCtrl.outputPortComponent);">
                <span class="component-button-grip"></span>
            </button>
            <button title="{{appCtrl.serviceProvider.headerCtrl.toolboxCtrl.config.type.processGroup}}"
                    id="group-component"
                    class="component-button icon icon-group"
                    ng-disabled="!appCtrl.nf.CanvasUtils.canWriteCurrentGroup();"
                    nf-draggable="appCtrl.serviceProvider.headerCtrl.toolboxCtrl.draggableComponentConfig(appCtrl.serviceProvider.headerCtrl.toolboxCtrl.groupComponent);">
                <span class="component-button-grip"></span>
            </button>
            <button title="{{appCtrl.serviceProvider.headerCtrl.toolboxCtrl.config.type.remoteProcessGroup}}"
                    id="group-remote-component"
                    class="component-button icon icon-group-remote"
                    ng-disabled="!appCtrl.nf.CanvasUtils.canWriteCurrentGroup();"
                    nf-draggable="appCtrl.serviceProvider.headerCtrl.toolboxCtrl.draggableComponentConfig(appCtrl.serviceProvider.headerCtrl.toolboxCtrl.remoteGroupComponent);">
                <span class="component-button-grip"></span>
            </button>
            <button title="{{appCtrl.serviceProvider.headerCtrl.toolboxCtrl.config.type.funnel}}"
                    id="funnel-component"
                    class="component-button icon icon-funnel"
                    ng-disabled="!appCtrl.nf.CanvasUtils.canWriteCurrentGroup();"
                    nf-draggable="appCtrl.serviceProvider.headerCtrl.toolboxCtrl.draggableComponentConfig(appCtrl.serviceProvider.headerCtrl.toolboxCtrl.funnelComponent);">
                <span class="component-button-grip"></span>
            </button>
            <button title="{{appCtrl.serviceProvider.headerCtrl.toolboxCtrl.config.type.template}}"
                    id="template-component"
                    class="component-button icon icon-template"
                    ng-disabled="!appCtrl.nf.CanvasUtils.canWriteCurrentGroup();"
                    nf-draggable="appCtrl.serviceProvider.headerCtrl.toolboxCtrl.draggableComponentConfig(appCtrl.serviceProvider.headerCtrl.toolboxCtrl.templateComponent);">
                <span class="component-button-grip"></span>
            </button>
            <button title="{{appCtrl.serviceProvider.headerCtrl.toolboxCtrl.config.type.label}}"
                    id="label-component"
                    class="component-button icon icon-label"
                    ng-disabled="!appCtrl.nf.CanvasUtils.canWriteCurrentGroup();"
                    nf-draggable="appCtrl.serviceProvider.headerCtrl.toolboxCtrl.draggableComponentConfig(appCtrl.serviceProvider.headerCtrl.toolboxCtrl.labelComponent);">
                <span class="component-button-grip"></span>
            </button>
        </div>
        <div layout="row" layout-align="space-between center">
            <div layout-align="space-between end" layout="column">
                <div layout="row" layout-align="space-between center" id="current-user-container">
                    <span id="anonymous-user-alert" class="hidden fa fa-warning"></span>
                    <div></div>
                    <div id="current-user"></div>
                </div>
                <div id="login-link-container">
                    <span id="login-link" class="link"
                          ng-click="appCtrl.serviceProvider.headerCtrl.loginCtrl.shell.launch();">log in</span>
                </div>
                <div id="logout-link-container" style="display: none;">
                    <span id="logout-link" class="link"
                          ng-click="appCtrl.serviceProvider.headerCtrl.logoutCtrl.logout();">log out</span>
                </div>
            </div>
            <md-menu md-position-mode="target-right target" md-offset="-1 44">
                <button md-menu-origin id="global-menu-button" ng-click="$mdMenu.open()">
                    <div class="fa fa-navicon"></div>
                </button>
                <md-menu-content id="global-menu-content">
                    <md-menu-item layout-align="space-around center">
                        <a id="reporting-link"
                           ng-click="appCtrl.serviceProvider.headerCtrl.globalMenuCtrl.summary.shell.launch();">
                            <i class="fa fa-table"></i>Summary
                        </a>
                    </md-menu-item>
                    <md-menu-item layout-align="space-around center">
                        <a id="counters-link"
                           ng-click="appCtrl.serviceProvider.headerCtrl.globalMenuCtrl.counters.shell.launch();"
                           ng-class="{disabled: !appCtrl.nf.Common.canAccessCounters()}">
                            <i class="icon icon-counter"></i>Counters
                        </a>
                    </md-menu-item>
                    <md-menu-item layout-align="space-around center">
                        <a id="bulletin-board-link"
                           ng-click="appCtrl.serviceProvider.headerCtrl.globalMenuCtrl.bulletinBoard.shell.launch();">
                            <i class="fa fa-sticky-note-o"></i>Bulletin Board
                        </a>
                    </md-menu-item>
                    <md-menu-divider></md-menu-divider>
                    <md-menu-item
                            layout-align="space-around center">
                        <a id="provenance-link"
                           ng-click="appCtrl.serviceProvider.headerCtrl.globalMenuCtrl.dataProvenance.shell.launch();"
                           ng-class="{disabled: !appCtrl.nf.Common.canAccessProvenance()}">
                            <i class="icon icon-provenance"></i>Data Provenance
                        </a>
                    </md-menu-item>
                    <md-menu-divider></md-menu-divider>
                    <md-menu-item layout-align="space-around center">
                        <a id="flow-settings-link"
                           ng-click="appCtrl.serviceProvider.headerCtrl.globalMenuCtrl.controllerSettings.shell.launch();">
                            <i class="fa fa-wrench"></i>Controller Settings
                        </a>
                    </md-menu-item>
                    <md-menu-item layout-align="space-around center">
                        <a id="parameter-contexts-link"
                           ng-click="appCtrl.serviceProvider.headerCtrl.globalMenuCtrl.parameterContexts.shell.launch();">
                            <i class="fa"></i>Parameter Contexts
                        </a>
                    </md-menu-item>
                    <md-menu-item ng-if="appCtrl.serviceProvider.headerCtrl.globalMenuCtrl.cluster.visible();"
                                  layout-align="space-around center">
                        <a id="cluster-link"
                           ng-click="appCtrl.serviceProvider.headerCtrl.globalMenuCtrl.cluster.shell.launch();"
                           ng-class="{disabled: !appCtrl.nf.Common.canAccessController()}">
                            <i class="fa fa-cubes"></i>Cluster
                        </a>
                    </md-menu-item>
                    <md-menu-item layout-align="space-around center">
                        <a id="history-link"
                           ng-click="appCtrl.serviceProvider.headerCtrl.globalMenuCtrl.flowConfigHistory.shell.launch();">
                            <i class="fa fa-history"></i>Flow Configuration History
                        </a>
                    </md-menu-item>
                    <md-menu-item layout-align="space-around center">
                        <a id="status-history-link"
                           ng-click="appCtrl.serviceProvider.headerCtrl.globalMenuCtrl.nodeStatusHistory.shell.launch();">
                            <i class="fa fa-area-chart"></i>Node Status History
                        </a>
                    </md-menu-item>
                    <md-menu-divider ng-if="appCtrl.nf.CanvasUtils.isManagedAuthorizer()"></md-menu-divider>
                    <md-menu-item layout-align="space-around center" ng-if="appCtrl.nf.CanvasUtils.isManagedAuthorizer()">
                        <a id="users-link" layout="row"
                           ng-click="appCtrl.serviceProvider.headerCtrl.globalMenuCtrl.users.shell.launch();"
                           ng-class="{disabled: !(appCtrl.nf.Common.canAccessTenants())}">
                            <i class="fa fa-users"></i>Users
                        </a>
                    </md-menu-item>
                    <md-menu-item layout-align="space-around center" ng-if="appCtrl.nf.CanvasUtils.isManagedAuthorizer()">
                        <a id="policies-link" layout="row"
                           ng-click="appCtrl.serviceProvider.headerCtrl.globalMenuCtrl.policies.shell.launch();"
                           ng-class="{disabled: !(appCtrl.nf.Common.canAccessTenants() && appCtrl.nf.Common.canModifyPolicies())}">
                            <i class="fa fa-key"></i>Policies
                        </a>
                    </md-menu-item>
                    <md-menu-divider></md-menu-divider>
                    <md-menu-item layout-align="space-around center">
                        <a id="templates-link"
                           ng-click="appCtrl.serviceProvider.headerCtrl.globalMenuCtrl.templates.shell.launch();">
                            <i class="icon icon-template"></i>Templates
                        </a>
                    </md-menu-item>
                    <md-menu-divider></md-menu-divider>
                    <md-menu-item layout-align="space-around center">
                        <a id="help-link"
                           ng-click="appCtrl.serviceProvider.headerCtrl.globalMenuCtrl.help.shell.launch();">
                            <i class="fa fa-question-circle"></i>Help
                        </a>
                    </md-menu-item>
                    <md-menu-item layout-align="space-around center">
                        <a id="about-link"
                           ng-click="appCtrl.serviceProvider.headerCtrl.globalMenuCtrl.about.modal.show();">
                            <i class="fa fa-info-circle"></i>About
                        </a>
                    </md-menu-item>
                </md-menu-content>
            </md-menu>
        </div>
    </div>
</md-toolbar>

        

<div id="flow-status" flex layout="row" layout-align="space-between center">
    <div id="flow-status-container" layout="row" layout-align="space-around center">
        <div class="fa fa-cubes" ng-if="appCtrl.nf.ClusterSummary.isClustered()" ng-class="appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.getExtraClusterStyles()"
             title="Connected nodes / Total number of nodes in the cluster">
            <span id="connected-nodes-count">{{appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.connectedNodesCount}}</span>
        </div>
        <div class="icon icon-threads" ng-class="appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.getExtraThreadStyles()"
             title="Active Threads{{appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.hasTerminatedThreads() ? ' (Terminated)' : ''}}">
            <span id="active-thread-count">{{appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.threadCounts}}</span>
        </div>
        <div class="fa fa-list" title="Total queued data">
            <span id="total-queued">{{appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.totalQueued}}</span>
        </div>
        <div class="fa fa-bullseye" title="Transmitting Remote Process Groups">
            <span id="controller-transmitting-count">{{appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.controllerTransmittingCount}}</span>
        </div>
        <div class="icon icon-transmit-false" title="Not Transmitting Remote Process Groups">
            <span id="controller-not-transmitting-count">{{appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.controllerNotTransmittingCount}}</span>
        </div>
        <div class="fa fa-play" title="Running Components">
            <span id="controller-running-count">{{appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.controllerRunningCount}}</span>
        </div>
        <div class="fa fa-stop" title="Stopped Components">
            <span id="controller-stopped-count">{{appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.controllerStoppedCount}}</span>
        </div>
        <div class="fa fa-warning" title="Invalid Components">
            <span id="controller-invalid-count">{{appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.controllerInvalidCount}}</span>
        </div>
        <div class="icon icon-enable-false" title="Disabled Components">
            <span id="controller-disabled-count">{{appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.controllerDisabledCount}}</span>
        </div>
        <div class="fa fa-check" title="Up to date Versioned Process Groups">
            <span id="controller-up-to-date-count">{{appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.controllerUpToDateCount}}</span>
        </div>
        <div class="fa fa-asterisk" title="Locally modified Versioned Process Groups">
            <span id="controller-locally-modified-count">{{appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.controllerLocallyModifiedCount}}</span>
        </div>
        <div class="fa fa-arrow-circle-up" title="Stale Versioned Process Groups">
            <span id="controller-stale-count">{{appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.controllerStaleCount}}</span>
        </div>
        <div class="fa fa-exclamation-circle" title="Locally modified and stale Versioned Process Groups">
            <span id="controller-locally-modified-and-stale-count">{{appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.controllerLocallyModifiedAndStaleCount}}</span>
        </div>
        <div class="fa fa-question" title="Sync failure Versioned Process Groups">
            <span id="controller-sync-failure-count">{{appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.controllerSyncFailureCount}}</span>
        </div>
        <div class="fa fa-refresh" title="Last refresh">
            <span id="stats-last-refreshed">{{appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.statsLastRefreshed}}</span>
        </div>
        <div id="canvas-loading-container" class="loading-container"></div>
    </div>
    <div layout="row" layout-align="end center">
        <div id="search-container">
            <button id="search-button" ng-click="appCtrl.serviceProvider.headerCtrl.flowStatusCtrl.search.toggleSearchField();"><i class="fa fa-search"></i></button>
            <input id="search-field" type="text" placeholder="Search"/>
        </div>
        <button id="bulletin-button"><i class="fa fa-sticky-note-o"></i></button>
    </div>
</div>
<div id="search-flow-results"></div>

        

<div id="nf-about">
    <div id="nf-about-pic-container">
        <div id="nf-about-pic"></div>
    </div>
    <div class="dialog-content">
        <div id="nf-about-content">
            <span id="nf-version"></span>
            <div id="nf-version-detail">
                <p id="nf-version-detail-timestamp">
                    <span id="nf-about-build-timestamp"></span>
                </p>
                <p id="nf-version-detail-tag">
                    Tagged <span id="nf-about-build-tag"></span>
                </p>
                <p id="nf-version-detail-commit">
                    From <span id="nf-about-build-revision"></span> on branch <span id="nf-about-build-branch"></span>
                </p>
            </div>
            <p>
                Apache NiFi is a framework to support highly scalable and flexible dataflows.
                It can be run on laptops up through clusters of enterprise class servers.
                Instead of dictating a particular dataflow or behavior it empowers you to design your own
                optimal dataflow tailored to your specific environment.
            </p>
        </div>
    </div>
</div>

        

<div id="nf-ok-dialog" class="hidden medium-short-dialog">
    <div class="dialog-content">
        <div id="nf-ok-dialog-content"></div>
    </div>
</div>
        

<div id="nf-yes-no-dialog" class="hidden small-dialog">
    <div class="dialog-content">
        <div id="nf-yes-no-dialog-content"></div>
    </div>
</div>
        

<div id="status-history-dialog" class="hidden large-dialog">
    <div id="status-history-refresh-container">
        <button id="status-history-refresh-button" class="refresh-button pointer fa fa-refresh" title="Refresh"></button>
        <div id="status-history-last-refreshed-container" class="last-refreshed-container">
            Last updated:&nbsp;<span id="status-history-last-refreshed"></span>
        </div>
        <div id="status-history-loading-container" class="loading-container"></div>
    </div>
    <div class="dialog-content">
        <div id="status-history-details"></div>
        <div id="status-history-metric-combo"></div>
        <div id="status-history-container">
            <div id="status-history-chart-container"></div>
            <div id="status-history-chart-control-container"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>

        

<div id="search-users-dialog" class="hidden">
    <div class="dialog-content">
        <div class="secure-port-setting">
            <input id="search-users-field" type="text" placeholder="User Identity"/>
        </div>
        <div class="secure-port-setting">
            <div class="setting-name">Selected Users</div>
            <div class="setting-field allowed-container">
                <ul id="allowed-users" class="allowed"></ul>
            </div>
        </div>
        <div class="secure-port-setting">
            <div class="setting-name">Selected Groups</div>
            <div class="setting-field allowed-container">
                <ul id="allowed-groups" class="allowed"></ul>
            </div>
        </div>
    </div>
</div>
<div id="search-users-results"></div>

        

<div id="disable-controller-service-dialog" layout="column" class="hidden large-dialog">
    <div class="dialog-content">
        <div class="settings-left">
            <div id="disable-controller-service-service-container" class="setting">
                <div class="setting-name">Service</div>
                <div class="setting-field">
                    <span id="disable-controller-service-id" class="hidden"></span>
                    <div id="disable-controller-service-name"></div>
                    <div id="disable-controller-service-bulletins"></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="disable-controller-service-scope-container" class="setting">
                <div class="setting-name">Scope</div>
                <div class="setting-field">
                    Service and referencing components
                    <div class="fa fa-question-circle" alt="Info" title="Referencing components must be disabled/stopped in order to disable this service."></div>
                </div>
            </div>
            <div id="disable-controller-service-progress-container" class="setting hidden">
                <div id="disable-progress-label" class="setting-name"></div>
                <div class="setting-field">
                    <ol id="disable-controller-service-progress">
                        <li>
                            Stopping referencing processors and reporting tasks
                            <div id="disable-referencing-schedulable" class="disable-referencing-components"></div>
                            <div class="clear"></div>
                        </li>
                        <li>
                            Disabling referencing controller services
                            <div id="disable-referencing-services" class="disable-referencing-components"></div>
                            <div class="clear"></div>
                        </li>
                        <li>
                            Disabling this controller service
                            <div id="disable-controller-service" class="disable-referencing-components"></div>
                            <div class="clear"></div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="spacer">&nbsp;</div>
        <div class="settings-right">
            <div class="setting">
                <div class="setting-name">
                    Referencing Components
                    <div class="fa fa-question-circle" alt="Info" title="Other components referencing this controller service."></div>
                </div>
                <div class="setting-field">
                    <div id="disable-controller-service-referencing-components"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="controller-service-canceling hidden unset">
        Canceling...
    </div>
</div>

        

<div id="enable-controller-service-dialog" layout="column" class="hidden large-dialog">
    <div class="dialog-content">
        <div class="settings-left">
            <div id="enable-controller-service-service-container" class="setting">
                <div class="setting-name">Service</div>
                <div class="setting-field">
                    <span id="enable-controller-service-id" class="hidden"></span>
                    <div id="enable-controller-service-name"></div>
                    <div id="enable-controller-service-bulletins"></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="enable-controller-service-scope-container" class="setting">
                <div class="setting-name">Scope</div>
                <div class="setting-field">
                    <div id="enable-controller-service-scope"></div>
                </div>
            </div>
            <div id="enable-controller-service-progress-container" class="setting hidden">
                <div id="enable-progress-label" class="setting-name"></div>
                <div class="setting-field">
                    <ol id="enable-controller-service-progress">
                        <li>
                            Enabling this controller service
                            <div id="enable-controller-service" class="enable-referencing-components"></div>
                            <div class="clear"></div>
                        </li>
                        <li class="referencing-component">
                            Enabling referencing controller services
                            <div id="enable-referencing-services" class="enable-referencing-components"></div>
                            <div class="clear"></div>
                        </li>
                        <li class="referencing-component">
                            Starting referencing processors and reporting tasks
                            <div id="enable-referencing-schedulable" class="enable-referencing-components"></div>
                            <div class="clear"></div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="spacer">&nbsp;</div>
        <div class="settings-right">
            <div class="setting">
                <div class="setting-name">
                    Referencing Components
                    <div class="fa fa-question-circle" alt="Info" title="Other components referencing this controller service."></div>
                </div>
                <div class="setting-field">
                    <div id="enable-controller-service-referencing-components"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="controller-service-canceling hidden unset">
        Canceling...
    </div>
</div>

        

<div id="new-controller-service-dialog" layout="column" class="hidden">
    <div class="dialog-content">
        <div layout="row" style="padding-bottom:0">
            <div flex="25" layout="row" layout-align="start center">
                <div class="setting-name" style="margin-top: 10px;">Source</div>
            </div>
            <div flex layout="row" layout-align="space-between center" id="controller-service-type-filter-controls" class="filter-status">
                <div id="controller-service-type-filter-status">
                    Displaying&nbsp;<span id="displayed-controller-service-types"></span>&nbsp;of&nbsp;<span id="total-controller-service-types"></span>
                </div>
                <div id="controller-service-type-filter-container">
                    <input type="text" id="controller-service-type-filter" placeholder="Filter"/>
                </div>
            </div>
        </div>
        <div flex layout="row" style="padding-top:0;height: 90%;">
            <div flex="25" id="controller-service-tag-cloud-container">
                <div class="setting">
                    <div class="setting-field">
                        <div id="controller-service-bundle-group-combo"></div>
                    </div>
                </div>
                <div class="setting">
                    <div class="setting-field">
                        <div id="controller-service-tag-cloud"></div>
                    </div>
                </div>
            </div>
            <div layout="column" flex id="controller-service-types-container">
                <div id="controller-service-types-table" class="unselectable"></div>
                <div id="controller-service-type-container">
                    <div id="controller-service-type-name"></div>
                    <div id="controller-service-type-bundle"></div>
                </div>
                <div id="controller-service-description-container" class="hidden">
                    <div id="controller-service-type-description" class="ellipsis multiline"></div>
                    <span class="hidden" id="selected-controller-service-name"></span>
                    <span class="hidden" id="selected-controller-service-type"></span>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

        

<div id="new-reporting-task-dialog" layout="column" class="hidden">
    <div class="dialog-content">
        <div layout="row" style="padding-bottom:0">
            <div flex="25" layout="row" layout-align="start center">
                <div class="setting-name" style="margin-top: 10px;">Source</div>
            </div>
            <div flex layout="row" layout-align="space-between center" id="reporting-task-type-filter-controls" class="filter-status">
                <div id="reporting-task-type-filter-status">
                    Displaying&nbsp;<span id="displayed-reporting-task-types"></span>&nbsp;of&nbsp;<span id="total-reporting-task-types"></span>
                </div>
                <div id="controller-service-type-filter-container">
                    <input type="text" id="reporting-task-type-filter" placeholder="Filter"/>
                </div>
            </div>
        </div>
        <div flex layout="row" style="padding-top:0;height: 90%;">
            <div flex="25" id="reporting-task-tag-cloud-container">
                <div class="setting">
                    <div class="setting-field">
                        <div id="reporting-task-bundle-group-combo"></div>
                    </div>
                </div>
                <div class="setting">
                    <div class="setting-field">
                        <div id="reporting-task-tag-cloud"></div>
                    </div>
                </div>
            </div>
            <div layout="column" flex id="reporting-task-types-container">
                <div id="reporting-task-types-table" class="unselectable"></div>
                <div id="reporting-task-type-container">
                    <div id="reporting-task-type-name"></div>
                    <div id="reporting-task-type-bundle"></div>
                </div>
                <div id="reporting-task-description-container" class="hidden">
                    <div id="reporting-task-type-description" class="ellipsis multiline"></div>
                    <span class="hidden" id="selected-reporting-task-name"></span>
                    <span class="hidden" id="selected-reporting-task-type"></span>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

        

<div id="parameter-context-dialog" layout="column" class="hidden read-only">
    <div id="parameter-context-status-bar"></div>
    <div class="parameter-context-tab-container dialog-content">
        <div id="parameter-context-tabs" class="tab-container"></div>
        <div id="parameter-context-tabs-content">
            <div id="parameter-context-standard-settings-tab-content" class="split-65-35 configuration-tab">
                <div class="settings-left">
                    <div id="parameter-context-id-setting" class="setting hidden">
                        <div class="setting-name">Id</div>
                        <div class="setting-field">
                            <div id="parameter-context-id-field" class="ellipsis"></div>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Name</div>
                        <div id="parameter-context-name-container" class="setting-field">
                            <input type="text" id="parameter-context-name" class="edit-mode" name="parameter-context-name"/>
                            <div id="parameter-context-name-read-only" class="read-only ellipsis"></div>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Description</div>
                        <div class="setting-field parameter-context-description-container">
                            <textarea id="parameter-context-description-field" class="edit-mode" rows="6"></textarea>
                            <div id="parameter-context-description-read-only" class="read-only"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="spacer">&nbsp;</div>
                <div class="settings-right">
                    <div class="setting">
                        <div class="setting-name">
                            Referencing Components
                            <div class="fa fa-question-circle" alt="Info" title="Other components referencing this parameter context."></div>
                        </div>
                        <div class="setting-field">
                            <div id="parameter-context-referencing-components"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="parameter-context-parameters-tab-content" class="split-65-35 configuration-tab">
                <div class="settings-left">
                    <div class="edit-mode">
                        <div id="add-parameter"><button class="button fa fa-plus"></button></div>
                        <div class="clear"></div>
                    </div>
                    <div id="parameter-table"></div>
                    <div id="parameter-context-update-status" class="hidden">
                        <div class="setting">
                            <div class="setting-name">
                                Steps to update parameters
                            </div>
                            <div class="setting-field">
                                <ol id="parameter-context-update-steps"></ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spacer">&nbsp;</div>
                <div id="parameter-context-usage" class="settings-right">
                    <div class="setting">
                        <div class="setting-name">
                            Parameter
                            <div class="referencing-components-loading"></div>
                        </div>
                        <div class="setting-field">
                            <div id="parameter-referencing-components-context" class="ellipsis"></div>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">
                            Referencing Components
                            <div class="fa fa-question-circle" alt="Info" title="Components referencing this parameter grouped by process group."></div>
                        </div>
                        <div id="parameter-referencing-components-container" class="setting-field">
                        </div>
                    </div>
                </div>
            </div>
            <div id="parameter-context-inheritance-tab-content" class="configuration-tab">
                <div id="parameter-context-inheritance-container">
                    <div class="settings-left">
                        <div class="setting">
                            <div class="setting-name">
                                Available Parameter Contexts
                                <div class="fa fa-question-circle" alt="Info" title="Available Parameter Contexts that could be inherited from."></div>
                            </div>
                            <div class="setting-field">
                                <ol id="parameter-context-available"></ol>
                            </div>
                        </div>
                    </div>
                    <div class="spacer">&nbsp;</div>
                    <div class="settings-right">
                        <div class="setting">
                            <div class="setting-name">
                                Selected Parameter Context
                                <div class="fa fa-question-circle" alt="Info" title="Parameter Contexts selected for inheritance."></div>
                            </div>
                            <div class="setting-field">
                                <ol id="parameter-context-selected"></ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="parameter-context-inheritance-container-read-only" style="display: none;">
                    <div class="settings-left">
                        <div class="setting">
                            <div class="setting-name">
                                Selected Parameter Context
                                <div class="fa fa-question-circle" alt="Info" title="Parameter Contexts selected for inheritance."></div>
                            </div>
                            <div class="setting-field">
                                <ol id="parameter-context-selected-read-only"></ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="inherited-parameter-contexts-message" class="ellipsis hidden">
        Inherited Parameter Contexts have been modified. Updated listing of Parameters is pending apply.
    </div>
</div>
<div id="parameter-dialog" class="dialog cancellable hidden">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-name">Name</div>
            <div class="setting-field new-parameter-name-container">
                <input id="parameter-name" type="text"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="setting">
            <div class="setting-name">
                Value
                <div class="fa fa-question-circle" alt="Info" title="Parameter values do not support Expression Language or embedded parameter references."></div>
            </div>
            <div class="setting-field new-parameter-value-container">
                <textarea id="parameter-value-field"></textarea>
                <div class="string-check-container">
                    <div id="parameter-set-empty-string-field" class="nf-checkbox string-check checkbox-unchecked"></div>
                    <span class="string-check-label nf-checkbox-label">Set empty string</span>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="setting">
            <div class="setting-field new-parameter-sensitive-value-container">
                <div class="setting-name">Sensitive value</div>
                <input id="parameter-sensitive-radio-button" type="radio" name="sensitive" value="sensitive"/> Yes
                <input id="parameter-not-sensitive-radio-button" type="radio" name="sensitive" value="plain" checked="checked" style="margin-left: 20px;"/> No
            </div>
            <div class="clear"></div>
        </div>
        <div class="setting">
            <div class="setting-name">Description</div>
            <div class="setting-field new-parameter-description-container">
                <textarea id="parameter-description-field" rows="6"></textarea>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="parameter-context-updating-status">
        <div class='parameter-context-step ajax-loading'></div>
        <div class='status-message ellipsis'>Updating parameter context</div>
    </div>
</div>
<div id="referencing-components-template" class="referencing-components-template hidden clear">
    <div class="setting">
        <div class="setting-name">
            Referencing Processors
        </div>
        <div class="setting-field">
            <ul class="parameter-context-referencing-processors"></ul>
        </div>
    </div>
    <div class="setting">
        <div class="setting-name">
            Referencing Controller Services
        </div>
        <div class="setting-field">
            <ul class="parameter-context-referencing-controller-services"></ul>
        </div>
    </div>
    <div class="setting">
        <div class="setting-name">
            Unauthorized referencing components
        </div>
        <div class="setting-field">
            <ul class="parameter-context-referencing-unauthorized-components"></ul>
        </div>
    </div>
</div>

        

<div id="new-processor-dialog" layout="column" class="hidden">
    <div class="dialog-content">
        <div layout="row" style="padding-bottom:0">
            <div flex="25" layout="row" layout-align="start center">
                <div class="setting-name" style="margin-top: 10px;">Source</div>
            </div>
            <div flex layout="row" layout-align="space-between center" id="processor-type-filter-controls">
                <div id="processor-type-filter-status" class="filter-status">
                    Displaying&nbsp;<span id="displayed-processor-types"></span>&nbsp;of&nbsp;<span
                        id="total-processor-types"></span>
                </div>
                <div id="processor-type-filter-container">
                    <input type="text" placeholder="Filter" id="processor-type-filter"/>
                </div>
            </div>
        </div>
        <div flex layout="row" style="padding-top:0;height: 90%;">
            <div flex="25" id="processor-tag-cloud-container">
                <div class="setting">
                    <div class="setting-field">
                        <div id="processor-bundle-group-combo"></div>
                    </div>
                </div>
                <div class="setting">
                    <div class="setting-field">
                        <div id="processor-tag-cloud"></div>
                    </div>
                </div>
            </div>
            <div layout="column" flex id="processor-types-container">
                <div id="processor-types-table" class="unselectable"></div>
                <div id="processor-type-container">
                    <div id="processor-type-name"></div>
                    <div id="processor-type-bundle"></div>
                </div>
                <div id="processor-description-container">
                    <div id="processor-type-description" class="ellipsis multiline"></div>
                    <span class="hidden" id="selected-processor-name"></span>
                    <span class="hidden" id="selected-processor-type"></span>
                </div>
            </div>
        </div>
    </div>
</div>

        

<div id="new-port-dialog" class="hidden small-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-name"><span id="new-port-type">Input</span>&nbsp;port name</div>
            <div class="setting-field">
                <input id="new-port-name" type="text"/>
            </div>
        </div>
        <div id="port-allow-remote-access-setting" class="setting">
            <div class="setting-name">
                <span id="port-allow-remote-access-label"></span>
                <div id="port-allow-remote-access-info" class="fa fa-question-circle" alt="Info"></div>
            </div>
            <div class="setting-field">
                <div id="port-allow-remote-access"></div>
            </div>
        </div>
    </div>
</div>
        

<div id="new-process-group-dialog" class="hidden medium-short-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-name">Process group name</div>
            <div class="setting-field">
                <div id="select-file-button">
                    <button class="icon icon-template-import" id="upload-file-field-button" title="Browse"></button>
                    <form id="file-upload-form" enctype="multipart/form-data" method="post">
                        <input type="file" name="file" id="upload-file-field"/>
                    </form>
                </div>
                <input id="new-process-group-name" type="text" placeholder="Enter a name or select a file to upload"/>
            </div>
        </div>
        <div id="file-cancel-button-container">
            <button class="icon" id="file-cancel-button" aria-hidden="true" title="Cancel the selected file">
                <i class="fa fa-times"></i>
            </button>
        </div>
        <div class="setting">
            <div id="submit-file-container">
                <div class="setting-name">
                    <span id="file-to-upload" title="File to upload">
                        File to Upload:
                    </span>
                </div>
                <div id="selected-file-name"></div>
            </div>
        </div>
    </div>
    <div class="setting">
        <span id="import-process-group-link" class="link" title="Import a flow from a registry">
            <i class="fa fa-cloud-download" aria-hidden="true" style="margin-left: 5px; margin-right: 5px;"></i>
            Import from Registry...
        </span>
    </div>
</div>
        

<div id="new-remote-process-group-dialog" class="hidden large-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-name">URLs
                <div class="fa fa-question-circle" alt="Info" title="Specify the remote target NiFi URLs. Multiple URLs can be specified in comma-separated format. Different protocols cannot be mixed. If remote NiFi is a cluster, two or more node URLs are recommended for better connection establishment availability."></div>
             </div>
            <div class="setting-field">
                <input id="new-remote-process-group-uris" type="text" placeholder="https://remotehost:8443/nifi"/>
            </div>
        </div>
        <div class="setting">
            <div class="remote-process-group-setting-left">
                <div class="setting-name">
                    Transport Protocol
                    <div class="fa fa-question-circle" alt="Info" title="Specify the transport protocol to use for this Remote Process Group communication."></div>
                </div>
                <div class="setting-field">
                    <div id="new-remote-process-group-transport-protocol-combo"></div>
                </div>
            </div>
            <div class="remote-process-group-setting-right">
                <div class="setting-name">
                    Local Network Interface
                    <div class="fa fa-question-circle" alt="Info" title="The local network interface to send/receive data. If not specified, any local address is used. If clustered, all nodes must have an interface with this identifier."></div>
                </div>
                <div class="setting-field">
                    <input type="text" class="small-setting-input" id="new-remote-process-group-local-network-interface"/>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="setting">
            <div class="remote-process-group-setting-left">
                <div class="setting-name">
                    HTTP Proxy server hostname
                    <div class="fa fa-question-circle" alt="Info" title="Specify the proxy server's hostname to use. If not specified, HTTP traffics are sent directly to the target NiFi instance."></div>
                </div>
                <div class="setting-field">
                    <input type="text" class="small-setting-input" id="new-remote-process-group-proxy-host"/>
                </div>
            </div>
            <div class="remote-process-group-setting-right">
                <div class="setting-name">
                    HTTP Proxy server port
                    <div class="fa fa-question-circle" alt="Info" title="Specify the proxy server's port number, optional. If not specified, default port 80 will be used."></div>
                </div>
                <div class="setting-field">
                    <input type="text" class="small-setting-input" id="new-remote-process-group-proxy-port"/>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="setting">
            <div class="remote-process-group-setting-left">
                <div class="setting-name">
                    HTTP Proxy user
                    <div class="fa fa-question-circle" alt="Info" title="Specify an user name to connect to the proxy server, optional."></div>
                </div>
                <div class="setting-field">
                    <input type="text" class="small-setting-input" id="new-remote-process-group-proxy-user"/>
                </div>
            </div>
            <div class="remote-process-group-setting-right">
                <div class="setting-name">
                    HTTP Proxy password
                    <div class="fa fa-question-circle" alt="Info" title="Specify an user password to connect to the proxy server, optional."></div>
                </div>
                <div class="setting-field">
                    <input type="password" class="small-setting-input" id="new-remote-process-group-proxy-password"/>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="setting">
            <div class="remote-process-group-setting-left">
                <div class="setting-name">
                    Communications timeout
                    <div class="fa fa-question-circle" alt="Info" title="When communication with this remote process group takes longer than this amount of time, it will timeout."></div>
                </div>
                <div class="setting-field">
                    <input type="text" class="small-setting-input" id="new-remote-process-group-timeout"/>
                </div>
            </div>
            <div class="remote-process-group-setting-right">
                <div class="setting-name">
                    Yield duration
                    <div class="fa fa-question-circle" alt="Info" title="When communication with this remote process group fails, it will not be scheduled again until this amount of time elapses."></div>
                </div>
                <div class="setting-field">
                    <input type="text" class="small-setting-input" id="new-remote-process-group-yield-duration"/>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
        

<div id="new-template-dialog" class="hidden medium-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-name">Name</div>
            <div class="setting-field">
                <input id="new-template-name" class="new-template-field" type="text"/>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Description</div>
            <div class="setting-field">
                <textarea cols="30" rows="8" id="new-template-description" class="new-template-field"></textarea>
            </div>
        </div>
    </div>
</div>
        

<div id="upload-template-dialog" class="hidden small-dialog">
    <div class="dialog-content">
        <div id="select-template-container">
            <div id="template-browse-container">
                <span id="select-template-label">Select Template</span>
                <div id="select-template-button">
                    <button class="fa fa-search" id="template-file-field-button" title="Browse"></button>
                    <form id="template-upload-form" enctype="multipart/form-data" method="post">
                        <input type="file" name="template" id="template-file-field"/>
                    </form>
                </div>
            </div>
        </div>
        <div id="submit-template-container">
            <div id="selected-template-name"></div>
        </div>
        <div id="upload-template-status" class="import-status"></div>
    </div>
</div>
        

<div id="instantiate-template-dialog" class="hidden small-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-name">Choose Template:</div>
            <div id="available-templates" name="available-templates"></div>
        </div>
    </div>
</div>

        

<div id="fill-color-dialog" class="hidden">
    <div class="dialog-content">
        <div class="setting" style="margin-bottom: 0px;">
            <div class="setting-name">Color</div>
            <div class="setting-field">
                <input type="text" id="fill-color" value="#FFFFFF"/>
            </div>
            <div class="setting-name" style="margin-top: 10px;">Value</div>
            <div class="setting-field">
                <input type="text" id="fill-color-value" value="#FFFFFF"/>
            </div>
            <div class="setting-name" style="margin-top: 10px;">Preview</div>
            <div class="setting-field">
                <div id="fill-color-processor-preview">
                    <div id="fill-color-processor-preview-icon" class="icon icon-processor"></div>
                    <div id="fill-color-processor-preview-name" style="margin-left: 35px; line-height: 25px; font-size: 12px; height: 25px; color: #262626;">Processor Name</div>
                    <div style="width: 100%; height: 9px; border-bottom: 1px solid #c7d2d7; background-color: #f4f6f7;"></div>
                    <div style="width: 100%; height: 9px; border-bottom: 1px solid #c7d2d7; background-color: #ffffff;"></div>
                    <div style="width: 100%; height: 10px; border-bottom: 1px solid #c7d2d7; background-color: #f4f6f7;"></div>
                    <div style="width: 100%; height: 9px; background-color: #ffffff;"></div>
                </div>
                <div id="fill-color-label-preview">
                    <div id="fill-color-label-preview-value">Label Value</div>
                </div>
            </div>
        </div>
    </div>
</div>
        

<div id="connections-dialog" class="hidden">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-name">Selected component</div>
            <div class="setting-field">
                <div id="connections-context"></div>
            </div>
        </div>
        <div class="setting">
            <div id="connections-source" class="setting-name">Source</div>
            <div id="connections-destination" class="setting-name">Destination</div>
            <div class="clear"></div>
            <div class="setting-field">
                <div id="connections-container"></div>
            </div>
        </div>
    </div>
</div>
        

<div id="save-flow-version-dialog" layout="column" class="hidden large-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-name">Registry</div>
            <div class="setting-field">
                <div id="save-flow-version-registry-combo" class="hidden"></div>
                <div id="save-flow-version-registry" class="hidden"></div>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Bucket</div>
            <div class="setting-field">
                <div id="save-flow-version-bucket-combo" class="hidden"></div>
                <div id="save-flow-version-bucket" class="hidden"></div>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Flow Name</div>
            <div id="save-flow-version-registry-container" class="setting-field">
                <span id="save-flow-version-process-group-id" class="hidden"></span>
                <span id="save-flow-version-action" class="hidden"></span>
                <input type="text" id="save-flow-version-name-field" class="setting-input hidden"/>
                <div id="save-flow-version-name" class="hidden"></div>
                <div id="save-flow-version-label"></div>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Flow Description</div>
            <div class="setting-field">
                <textarea id="save-flow-version-description-field" class="setting-input hidden"></textarea>
                <div id="save-flow-version-description" class="hidden"></div>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Version Comments</div>
            <div class="setting-field">
                <textarea id="save-flow-version-change-comments" class="setting-input"></textarea>
            </div>
        </div>
    </div>
</div>
        

<div id="import-flow-version-dialog" layout="column" class="hidden large-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-name">Registry</div>
            <div class="setting-field">
                <div id="import-flow-version-registry-combo"></div>
                <div id="import-flow-version-registry" class="hidden"></div>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Bucket</div>
            <div class="setting-field">
                <div id="import-flow-version-bucket-combo"></div>
                <div id="import-flow-version-bucket" class="hidden"></div>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Flow Name</div>
            <div class="setting-field">
                <span id="import-flow-version-process-group-id" class="hidden"></span>
                <div id="import-flow-version-name-combo"></div>
                <div id="import-flow-version-name" class="hidden"></div>
            </div>
        </div>
        <div id="import-flow-version-container" class="setting hidden">
            <div class="setting-name">Current Version</div>
            <div class="setting-field">
                <div id="import-flow-version-label"></div>
            </div>
        </div>
        <div id="import-flow-version-table"></div>
    </div>
</div>
<div id="change-version-status-dialog" layout="column" class="hidden small-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-field">
                <div id="change-version-status-message"></div>
            </div>
            <div class="setting-field">
                <div id="change-version-percent-complete"></div>
            </div>
        </div>
    </div>
</div>
        

<div id="revert-local-changes-dialog" layout="column" class="hidden large-dialog">
    <div class="dialog-content">
        <div class="setting local-changes-message">
            <span id="revert-local-changes-message"></span>&nbsp;<span style="font-weight: bold;">Revert will remove all changes.</span>
        </div>
        <span id="revert-local-changes-process-group-id" class="hidden"></span>
        <div id="revert-local-changes-filter-controls">
            <div id="revert-local-changes-filter-status" class="filter-status">
                Displaying&nbsp;<span id="displayed-revert-local-changes-entries"></span>&nbsp;of&nbsp;<span id="total-revert-local-changes-entries"></span>
            </div>
            <div id="revert-local-changes-filter-container">
                <input type="text" id="revert-local-changes-filter" placeholder="Filter"/>
            </div>
        </div>
        <div id="revert-local-changes-table"></div>
    </div>
</div>
        

<div id="show-local-changes-dialog" layout="column" class="hidden large-dialog">
    <div class="dialog-content">
        <div class="setting local-changes-message">
            <span id="show-local-changes-message"></span>
        </div>
        <div id="show-local-changes-filter-controls">
            <div id="show-local-changes-filter-status" class="filter-status">
                Displaying&nbsp;<span id="displayed-show-local-changes-entries"></span>&nbsp;of&nbsp;<span id="total-show-local-changes-entries"></span>
            </div>
            <div id="show-local-changes-filter-container">
                <input type="text" id="show-local-changes-filter" placeholder="Filter"/>
            </div>
        </div>
        <div id="show-local-changes-table"></div>
    </div>
</div>
        

<div id="registry-configuration-dialog" layout="column" class="hidden medium-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-name">Name</div>
            <div class="setting-field">
                <span id="registry-id" class="hidden"></span>
                <input type="text" id="registry-name" class="setting-input"/>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">URL</div>
            <div class="setting-field">
                <input type="text" id="registry-location" class="setting-input" placeholder="https://remotehost:8443"/>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Description</div>
            <div class="setting-field">
                <textarea id="registry-description" class="setting-input"></textarea>
            </div>
        </div>
    </div>
</div>

        <div id="canvas-container" class="unselectable"></div>
        <div id="canvas-tooltips">
            <div id="processor-tooltips"></div>
            <div id="port-tooltips"></div>
            <div id="process-group-tooltips"></div>
            <div id="remote-process-group-tooltips"></div>
            <div id="connection-tooltips"></div>
        </div>
        

<nf-breadcrumbs
        breadcrumbs="appCtrl.serviceProvider.breadcrumbsCtrl.getBreadcrumbs();"
        click-func="appCtrl.nf.CanvasUtils.getComponentByType('ProcessGroup').enterGroup"
        highlight-crumb-id="appCtrl.nf.CanvasUtils.getGroupId();"
        separator-func="appCtrl.nf.Common.isDefinedAndNotNull"
        is-tracking="appCtrl.serviceProvider.breadcrumbsCtrl.isTracking"
        get-version-control-class="appCtrl.serviceProvider.breadcrumbsCtrl.getVersionControlClass"
        get-version-control-tooltip="appCtrl.serviceProvider.breadcrumbsCtrl.getVersionControlTooltip">
</nf-breadcrumbs>
<div id="graph-controls">
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
    </div>
    <div id="operation-control" class="graph-control">
        <div class="graph-control-docked pointer fa fa-hand-o-up" title="Operate"
             ng-click="appCtrl.serviceProvider.graphControlsCtrl.undock($event)">
        </div>
        <div class="graph-control-header-container hidden pointer"
             ng-click="appCtrl.serviceProvider.graphControlsCtrl.expand($event)">
            <div class="graph-control-header-icon fa fa-hand-o-up">
            </div>
            <div class="graph-control-header">Operate</div>
            <div class="graph-control-header-action">
                <div class="graph-control-expansion fa fa-plus-square-o pointer"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="graph-control-content hidden">
            <div id="operation-context">
                <div id="operation-context-logo">
                    <i class="icon" ng-class="appCtrl.serviceProvider.graphControlsCtrl.getContextIcon()"></i>
                </div>
                <div id="operation-context-details-container">
                    <div id="operation-context-name">{{appCtrl.serviceProvider.graphControlsCtrl.getContextName()}}</div>
                    <div id="operation-context-type" ng-class="appCtrl.serviceProvider.graphControlsCtrl.hide()">{{appCtrl.serviceProvider.graphControlsCtrl.getContextType()}}</div>
                </div>
                <div class="clear"></div>
                <div id="operation-context-id" ng-class="appCtrl.serviceProvider.graphControlsCtrl.hide()">{{appCtrl.serviceProvider.graphControlsCtrl.getContextId()}}</div>
            </div>
            <div id="operation-buttons">
                <div>
                    <div id="operate-configure" class="action-button" title="Configuration">
                        <button ng-click="appCtrl.serviceProvider.graphControlsCtrl.openConfigureOrDetailsView();"
                                ng-disabled="!(appCtrl.serviceProvider.graphControlsCtrl.canConfigureOrOpenDetails())">
                            <div class="graph-control-action-icon fa fa-gear"></div></button>
                    </div>
                    <div class="button-spacer-small" ng-if="appCtrl.nf.CanvasUtils.isManagedAuthorizer()">&nbsp;</div>
                    <div id="operate-policy" class="action-button" title="Access Policies" ng-if="appCtrl.nf.CanvasUtils.isManagedAuthorizer()">
                        <button ng-click="appCtrl.nf.Actions['managePolicies'](appCtrl.nf.CanvasUtils.getSelection());"
                                ng-disabled="!(appCtrl.nf.CanvasUtils.canManagePolicies())">
                            <div class="graph-control-action-icon fa fa-key"></div></button>
                    </div>
                    <div class="button-spacer-large">&nbsp;</div>
                    <div id="operate-enable" class="action-button" title="Enable">
                        <button ng-click="appCtrl.nf.Actions['enable'](appCtrl.nf.CanvasUtils.getSelection());"
                                ng-disabled="!appCtrl.nf.CanvasUtils.getSelection().empty() && !appCtrl.nf.CanvasUtils.canModify(appCtrl.nf.CanvasUtils.getSelection());">
                            <div class="graph-control-action-icon fa fa-flash"></div></button>
                    </div>
                    <div class="button-spacer-small">&nbsp;</div>
                    <div id="operate-disable" class="action-button" title="Disable">
                        <button ng-click="appCtrl.nf.Actions['disable'](appCtrl.nf.CanvasUtils.getSelection());"
                                ng-disabled="!appCtrl.nf.CanvasUtils.getSelection().empty() && !appCtrl.nf.CanvasUtils.canModify(appCtrl.nf.CanvasUtils.getSelection());">
                            <div class="graph-control-action-icon icon icon-enable-false"></div></button>
                    </div>
                    <div class="button-spacer-large">&nbsp;</div>
                    <div id="operate-start" class="action-button" title="Start">
                        <button ng-click="appCtrl.nf.Actions['start'](appCtrl.nf.CanvasUtils.getSelection());"
                                ng-disabled="!appCtrl.nf.CanvasUtils.getSelection().empty() && !appCtrl.nf.CanvasUtils.canModify(appCtrl.nf.CanvasUtils.getSelection());">
                            <div class="graph-control-action-icon fa fa-play"></div></button>
                    </div>
                    <div class="button-spacer-small">&nbsp;</div>
                    <div id="operate-stop" class="action-button" title="Stop">
                        <button ng-click="appCtrl.nf.Actions['stop'](appCtrl.nf.CanvasUtils.getSelection());"
                                ng-disabled="!appCtrl.nf.CanvasUtils.getSelection().empty() && !appCtrl.nf.CanvasUtils.canModify(appCtrl.nf.CanvasUtils.getSelection());">
                            <div class="graph-control-action-icon fa fa-stop"></div></button>
                    </div>
                    <div class="button-spacer-large">&nbsp;</div>
                    <div id="operate-template" class="action-button" title="Create Template">
                        <button ng-click="appCtrl.nf.Actions['template'](appCtrl.nf.CanvasUtils.getSelection());"
                                ng-disabled="!(appCtrl.nf.CanvasUtils.canWriteCurrentGroup() && (appCtrl.nf.CanvasUtils.getSelection().empty() || appCtrl.nf.CanvasUtils.canRead(appCtrl.nf.CanvasUtils.getSelection())));">
                            <div class="graph-control-action-icon icon icon-template-save"></div></button>
                    </div>
                    <div class="button-spacer-small">&nbsp;</div>
                    <div id="operate-template-upload" class="action-button" title="Upload Template">
                        <button ng-click="appCtrl.nf.Actions['uploadTemplate']();"
                                ng-disabled="!(appCtrl.nf.CanvasUtils.canWriteCurrentGroup() && appCtrl.nf.CanvasUtils.getSelection().empty());">
                            <div class="graph-control-action-icon icon icon-template-import"></div></button>
                    </div>
                    <div class="clear"></div>
                </div>
                <div style="margin-top: 5px;">
                    <div id="operate-copy" class="action-button" title="Copy">
                        <button ng-click="appCtrl.nf.Actions['copy'](appCtrl.nf.CanvasUtils.getSelection());"
                                ng-disabled="!appCtrl.nf.CanvasUtils.isCopyable(appCtrl.nf.CanvasUtils.getSelection());">
                            <div class="graph-control-action-icon fa fa-copy"></div></button>
                    </div>
                    <div class="button-spacer-small">&nbsp;</div>
                    <div id="operate-paste" class="action-button" title="Paste">
                        <button ng-click="appCtrl.nf.Actions['paste'](appCtrl.nf.CanvasUtils.getSelection());"
                                ng-disabled="!appCtrl.nf.CanvasUtils.isPastable()">
                            <div class="graph-control-action-icon fa fa-paste"></div></button>
                    </div>
                    <div class="button-spacer-large">&nbsp;</div>
                    <div id="operate-group" class="action-button" title="Group">
                        <button ng-click="appCtrl.nf.Actions['group'](appCtrl.nf.CanvasUtils.getSelection());"
                                ng-disabled="!(appCtrl.nf.CanvasUtils.getComponentByType('Connection').isDisconnected(appCtrl.nf.CanvasUtils.getSelection()) && appCtrl.nf.CanvasUtils.canModify(appCtrl.nf.CanvasUtils.getSelection()));">
                            <div class="graph-control-action-icon icon icon-group"></div></button>
                    </div>
                    <div class="button-spacer-large">&nbsp;</div>
                    <div id="operate-color" class="action-button" title="Change Color">
                        <button ng-click="appCtrl.nf.Actions['fillColor'](appCtrl.nf.CanvasUtils.getSelection());"
                                ng-disabled="!appCtrl.nf.CanvasUtils.isColorable(appCtrl.nf.CanvasUtils.getSelection());">
                            <div class="graph-control-action-icon fa fa-paint-brush"></div></button>
                    </div>
                    <div class="button-spacer-large">&nbsp;</div>
                    <div id="operate-delete" class="action-button" title="Delete">
                        <button ng-click="appCtrl.nf.Actions['delete'](appCtrl.nf.CanvasUtils.getSelection());"
                                ng-disabled="!appCtrl.nf.CanvasUtils.areDeletable(appCtrl.nf.CanvasUtils.getSelection());">
                            <div class="graph-control-action-icon fa fa-trash"></div><span>Delete</span></button>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>
        

<div id="settings" class="hidden">
    <div id="settings-header-text" class="settings-header-text">NiFi Settings</div>
    <div class="settings-container">
        <div>
            <div id="settings-tabs" class="settings-tabs tab-container"></div>
            <div class="clear"></div>
        </div>
        <div id="settings-tabs-content">
            <button id="new-service-or-task" class="add-button fa fa-plus" title="Create a new reporting task controller service" style="display: block;"></button>
            <div id="general-settings-tab-content" class="configuration-tab">
                <div id="general-settings">
                    <div class="setting">
                        <div class="setting-name">
                            Maximum timer driven thread count
                            <div class="fa fa-question-circle" alt="Info" title="The maximum number of threads for timer driven processors available to the system."></div>
                        </div>
                        <div class="editable setting-field">
                            <input type="text" id="maximum-timer-driven-thread-count-field" class="setting-input"/>
                        </div>
                        <div class="read-only setting-field">
                            <span id="read-only-maximum-timer-driven-thread-count-field"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">
                            Maximum event driven thread count
                            <div class="fa fa-question-circle" alt="Info" title="The maximum number of threads for event driven processors available to the system."></div>
                        </div>
                        <div class="editable setting-field">
                            <input type="text" id="maximum-event-driven-thread-count-field" class="setting-input"/>
                        </div>
                        <div class="read-only setting-field">
                            <span id="read-only-maximum-event-driven-thread-count-field"></span>
                        </div>
                    </div>
                    <div class="editable settings-buttons">
                        <div id="settings-save" class="button">Apply</div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div id="controller-services-tab-content" class="configuration-tab controller-settings-table">
                <div id="controller-services-table" class="settings-table"></div>
            </div>
            <div id="reporting-tasks-tab-content" class="configuration-tab controller-settings-table">
                <div id="reporting-tasks-table" class="settings-table"></div>
            </div>
            <div id="registries-tab-content" class="configuration-tab controller-settings-table">
                <div id="registries-table" class="settings-table"></div>
            </div>
        </div>
    </div>
    <div id="settings-refresh-container">
        <button id="settings-refresh-button" class="refresh-button pointer fa fa-refresh" title="Refresh"></button>
        <div id="settings-last-refreshed-container" class="last-refreshed-container">
            Last updated:&nbsp;<span id="settings-last-refreshed" class="value-color"></span>
        </div>
        <div id="settings-loading-container" class="loading-container"></div>
        <div id="controller-cs-availability" class="hidden">Listed services are available to all Reporting Tasks and services defined in the Controller Settings.</div>
        <div class="clear"></div>
    </div>
</div>

        

<div id="parameter-contexts" class="hidden">
    <button id="new-parameter-context" class="add-button fa fa-plus" title="Create a new parameter context" style="display: block;"></button>
    <div id="parameter-contexts-header-text" class="parameter-contexts-header-text">NiFi Parameter Contexts</div>
    <div class="parameter-contexts-container">
        <div id="parameter-contexts-table" class="parameter-contexts-table"></div>
    </div>
    <div id="parameter-contexts-refresh-container">
        <button id="parameter-contexts-refresh-button" class="refresh-button pointer fa fa-refresh" title="Refresh"></button>
        <div id="parameter-contexts-last-refreshed-container" class="last-refreshed-container">
            Last updated:&nbsp;<span id="parameter-contexts-last-refreshed" class="value-color"></span>
        </div>
        <div id="parameter-contexts-loading-container" class="loading-container"></div>
        <div class="clear"></div>
    </div>
</div>

        

<div id="shell-dialog" class="hidden cancellable">
    <div id="shell-container" class="dialog-content">
        <div id="shell-close-container">
            <button id="shell-undock-button" class="undock-normal pointer " title="Open in New Window">
                <div class="fa fa-external-link-square"></div>
            </button>
            <button id="shell-close-button" class="close-normal pointer" title="Close">
                <div class="fa fa-times"></div>
            </button>
            <div class="clear"></div>
        </div>
        <div id="shell"></div>
    </div>
</div>
        

<div id="controller-service-configuration" class="hidden large-dialog">
    <div class="controller-service-configuration-tab-container dialog-content">
        <div id="controller-service-configuration-tabs" class="tab-container"></div>
        <div id="controller-service-configuration-tabs-content">
            <div id="controller-service-standard-settings-tab-content" class="configuration-tab">
                <div class="settings-left">
                    <div class="setting">
                        <div class="setting-name">Name</div>
                        <div class="controller-service-editable setting-field">
                            <input type="text" id="controller-service-name" name="controller-service-name" class="setting-input"/>
                        </div>
                        <div class="controller-service-read-only setting-field hidden">
                            <span id="read-only-controller-service-name"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Id</div>
                        <div class="setting-field">
                            <span id="controller-service-id"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Type</div>
                        <div class="setting-field">
                            <span id="controller-service-type"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Bundle</div>
                        <div id="controller-service-bundle" class="setting-field"></div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Supports Controller Service</div>
                        <div id="controller-service-compatible-apis" class="setting-field"></div>
                    </div>
                </div>
                <div class="spacer">&nbsp;</div>
                <div class="settings-right">
                    <div class="setting">
                        <div class="setting-name">
                            Referencing Components
                            <div class="fa fa-question-circle" alt="Info" title="Other components referencing this controller service."></div>
                        </div>
                        <div class="setting-field">
                            <div id="controller-service-referencing-components"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="controller-service-properties-tab-content" class="configuration-tab">
                <div id="controller-service-properties"></div>
                <div id="controller-service-properties-verification-results" class="verification-results">
                    <div class="verification-results-header">Verification Results</div>
                    <div id="controller-service-properties-verification-results-listing" class="verification-results-listing"></div>
                </div>
            </div>
            <div id="controller-service-comments-tab-content" class="configuration-tab">
                <textarea cols="30" rows="4" id="controller-service-comments" name="controller-service-comments" class="controller-service-editable setting-input"></textarea>
                <div class="setting controller-service-read-only hidden">
                    <div class="setting-name">Comments</div>
                    <div class="setting-field">
                        <span id="read-only-controller-service-comments"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="new-controller-service-property-container"></div>

        

<div id="reporting-task-configuration" class="hidden large-dialog">
    <div class="reporting-task-configuration-tab-container dialog-content">
        <div id="reporting-task-configuration-tabs" class="tab-container"></div>
        <div id="reporting-task-configuration-tabs-content">
            <div id="reporting-task-standard-settings-tab-content" class="configuration-tab">
                <div class="settings-left">
                    <div class="setting">
                        <div class="setting-name">Name</div>
                        <div class="reporting-task-editable setting-field">
                            <input type="text" id="reporting-task-name" name="reporting-task-name"/>
                            <div class="reporting-task-enabled-container">
                                <div id="reporting-task-enabled" class="nf-checkbox checkbox-unchecked"></div>
                                <span class="nf-checkbox-label"> Enabled</span>
                            </div>
                        </div>
                        <div class="reporting-task-read-only setting-field hidden">
                            <span id="read-only-reporting-task-name"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Id</div>
                        <div class="setting-field">
                            <span id="reporting-task-id"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Type</div>
                        <div class="setting-field">
                            <span id="reporting-task-type"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Bundle</div>
                        <div id="reporting-task-bundle" class="setting-field"></div>
                    </div>
                </div>
                <div class="spacer">&nbsp;</div>
                <div class="settings-right">
                    <div class="setting">
                        <div class="setting-name">
                            Scheduling strategy
                            <div class="fa fa-question-circle" alt="Info" title="The strategy used to schedule this reporting task."></div>
                        </div>
                        <div class="reporting-task-editable setting-field">
                            <div id="reporting-task-scheduling-strategy-combo"></div>
                        </div>
                        <div class="reporting-task-read-only setting-field hidden">
                            <span id="read-only-reporting-task-scheduling-strategy"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">
                            Run schedule
                            <div class="fa fa-question-circle" alt="Info" title="The amount of time that should elapse between task executions."></div>
                        </div>
                        <div class="reporting-task-editable setting-field">
                            <input type="text" id="reporting-task-timer-driven-scheduling-period" class="reporting-task-scheduling-period"/>
                            <input type="text" id="reporting-task-cron-driven-scheduling-period" class="reporting-task-scheduling-period"/>
                        </div>
                        <div class="reporting-task-read-only setting-field hidden">
                            <span id="read-only-reporting-task-scheduling-period"></span>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div id="reporting-task-properties-tab-content" class="configuration-tab">
                <div id="reporting-task-properties"></div>
                <div id="reporting-task-properties-verification-results" class="verification-results">
                    <div class="verification-results-header">Verification Results</div>
                    <div id="reporting-task-properties-verification-results-listing" class="verification-results-listing"></div>
                </div>
            </div>
            <div id="reporting-task-comments-tab-content" class="configuration-tab">
                <textarea cols="30" rows="4" id="reporting-task-comments" name="reporting-task-comments" class="reporting-task-editable setting-input"></textarea>
                <div class="setting reporting-task-read-only hidden">
                    <div class="setting-name">Comments</div>
                    <div class="setting-field">
                        <span id="read-only-reporting-task-comments"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="new-reporting-task-property-container"></div>

        

<div id="processor-configuration" layout="column" class="hidden large-dialog">
    <div id="processor-configuration-status-bar"></div>
    <div class="processor-configuration-tab-container dialog-content">
        <div id="processor-configuration-tabs" class="tab-container"></div>
        <div id="processor-configuration-tabs-content">
            <div id="processor-standard-settings-tab-content" class="configuration-tab">
                <div class="settings-left">
                    <div class="setting">
                        <div class="setting-name">Name</div>
                        <div id="processor-name-container" class="setting-field">
                            <input type="text" id="processor-name" name="processor-name"/>
                            <div class="processor-enabled-container">
                                <div id="processor-enabled" class="nf-checkbox checkbox-unchecked"></div>
                                <span class="nf-checkbox-label"> Enabled</span>
                            </div>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Id</div>
                        <div class="setting-field">
                            <span id="processor-id"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Type</div>
                        <div class="setting-field">
                            <span id="processor-type"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Bundle</div>
                        <div id="processor-bundle" class="setting-field"></div>
                    </div>
                    <div class="setting">
                        <div class="penalty-duration-setting">
                            <div class="setting-name">
                                Penalty duration
                                <div class="fa fa-question-circle" alt="Info" title="The amount of time used when this processor penalizes a FlowFile."></div>
                            </div>
                            <div class="setting-field">
                                <input type="text" id="penalty-duration" name="penalty-duration" class="small-setting-input"/>
                            </div>
                        </div>
                        <div class="yield-duration-setting">
                            <div class="setting-name">
                                Yield duration
                                <div class="fa fa-question-circle" alt="Info" title="When a processor yields, it will not be scheduled again until this amount of time elapses."></div>
                            </div>
                            <div class="setting-field">
                                <input type="text" id="yield-duration" name="yield-duration" class="small-setting-input"/>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="setting">
                        <div class="bulletin-setting">
                            <div class="setting-name">
                                Bulletin level
                                <div class="fa fa-question-circle" alt="Info" title="The level at which this processor will generate bulletins."></div>
                            </div>
                            <div class="setting-field">
                                <div id="bulletin-level-combo"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="spacer">&nbsp;</div>
                <div class="settings-right">
                    <div class="setting">
                        <div class="setting-name">
                            Automatically terminate relationships
                            <div class="fa fa-question-circle" alt="Info" title="Will automatically terminate FlowFiles sent to a given relationship if it is not defined elsewhere."></div>
                        </div>
                        <div class="setting-field">
                            <div id="auto-terminate-relationship-names"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="processor-scheduling-tab-content" class="configuration-tab">
                <div class="settings-left">
                    <div class="setting">
                        <div class="scheduling-strategy-setting">
                            <div class="setting-name">
                                Scheduling strategy
                                <div class="fa fa-question-circle" alt="Info" title="The strategy used to schedule this processor."></div>
                            </div>
                            <div class="setting-field">
                                <div type="text" id="scheduling-strategy-combo"></div>
                            </div>
                        </div>
                        <div id="event-driven-warning" class="hidden">
                            <div class="processor-configuration-warning-icon"></div>
                            This strategy is experimental
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="timer-driven-options" class="setting">
                        <div class="concurrently-schedulable-tasks-setting">
                            <div class="setting-name">
                                Concurrent tasks
                                <div class="fa fa-question-circle" alt="Info" title="The number of tasks that should be concurrently scheduled for this processor."></div>
                            </div>
                            <div class="setting-field">
                                <input type="text" id="timer-driven-concurrently-schedulable-tasks" name="timer-driven-concurrently-schedulable-tasks" class="small-setting-input"/>
                            </div>
                        </div>
                        <div class="scheduling-period-setting">
                            <div class="setting-name">
                                Run schedule
                                <div class="fa fa-question-circle" alt="Info" title="The amount of time that should elapse between task executions."></div>
                            </div>
                            <div class="setting-field">
                                <input type="text" id="timer-driven-scheduling-period" name="timer-driven-scheduling-period" class="small-setting-input"/>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="event-driven-options" class="setting">
                        <div class="concurrently-schedulable-tasks-setting">
                            <div class="setting-name">
                                Concurrent tasks
                                <div class="fa fa-question-circle" alt="Info" title="The number of tasks that should be concurrently scheduled for this processor."></div>
                            </div>
                            <div class="setting-field">
                                <input type="text" id="event-driven-concurrently-schedulable-tasks" name="event-driven-concurrently-schedulable-tasks" class="small-setting-input"/>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="cron-driven-options" class="setting">
                        <div class="concurrently-schedulable-tasks-setting">
                            <div class="setting-name">
                                Concurrent tasks
                                <div class="fa fa-question-circle" alt="Info" title="The number of tasks that should be concurrently scheduled for this processor."></div>
                            </div>
                            <div class="setting-field">
                                <input type="text" id="cron-driven-concurrently-schedulable-tasks" name="cron-driven-concurrently-schedulable-tasks" class="small-setting-input"/>
                            </div>
                        </div>
                        <div class="scheduling-period-setting">
                            <div class="setting-name">
                                Run schedule
                                <div class="fa fa-question-circle" alt="Info" title="The CRON expression that defines when this processor should run."></div>
                            </div>
                            <div class="setting-field">
                                <input type="text" id="cron-driven-scheduling-period" name="cron-driven-scheduling-period" class="small-setting-input"/>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="execution-node-options" class="setting">
                        <div class="execution-node-setting">
                            <div class="setting-name">
                                Execution
                                <div class="fa fa-question-circle" alt="Info" title="The node(s) that this processor will be scheduled to run on when clustered."></div>
                            </div>
                            <div class="setting-field">
                                <div id="execution-node-combo"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="spacer">&nbsp;</div>
                <div id="run-duration-setting-container" class="settings-right">
                    <div class="setting">
                        <div class="setting-name">
                            Run duration
                            <div class="fa fa-question-circle" alt="Info"
                                 title="When scheduled to run, the processor will continue running for up to this duration. A run duration of 0ms will execute once when scheduled."></div>
                        </div>
                        <div class="setting-field" style="overflow: visible;">
                            <div id="run-duration-container">
                                <div id="run-duration-labels">
                                    <div id="run-duration-zero">0ms</div>
                                    <div id="run-duration-one">25ms</div>
                                    <div id="run-duration-two">50ms</div>
                                    <div id="run-duration-three">100ms</div>
                                    <div id="run-duration-four">250ms</div>
                                    <div id="run-duration-five">500ms</div>
                                    <div id="run-duration-six">1s</div>
                                    <div id="run-duration-seven">2s</div>
                                    <div class="clear"></div>
                                </div>
                                <div id="run-duration-slider"></div>
                                <div id="run-duration-explanation">
                                    <div id="min-run-duration-explanation">Lower latency</div>
                                    <div id="max-run-duration-explanation">Higher throughput</div>
                                    <div class="clear"></div>
                                </div>
                                <div id="run-duration-data-loss" class="hidden">
                                    <div class="processor-configuration-warning-icon"></div>
                                    Source Processors with a run duration greater than 0ms and no incoming connections could lose data when NiFi is shutdown.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="processor-properties-tab-content" class="configuration-tab">
                <div id="processor-properties"></div>
                <div id="processor-properties-verification-results" class="verification-results">
                    <div class="verification-results-header">Verification Results</div>
                    <div id="processor-properties-verification-results-listing" class="verification-results-listing"></div>
                </div>
            </div>
            <div id="processor-comments-tab-content" class="configuration-tab">
                <textarea cols="30" rows="4" id="processor-comments" name="processor-comments" class="setting-input"></textarea>
            </div>
        </div>
    </div>
</div>
<div id="new-processor-property-container"></div>

        

<div id="processor-details" class="hidden large-dialog">
    <div id="processor-details-status-bar"></div>
    <div class="dialog-content">
        <div id="processor-details-tabs" class="tab-container"></div>
        <div id="processor-details-tabs-content">
            <div id="details-standard-settings-tab-content" class="details-tab">
                <div class="settings-left">
                    <div class="setting">
                        <div class="setting-name">Name</div>
                        <div class="setting-field">
                            <span id="read-only-processor-name"></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Id</div>
                        <div class="setting-field">
                            <span id="read-only-processor-id"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Type</div>
                        <div id="read-only-processor-type" class="setting-field"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Bundle</div>
                        <div id="read-only-processor-bundle" class="setting-field"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="setting">
                        <div class="penalty-duration-setting">
                            <div class="setting-name">
                                Penalty duration
                                <div class="fa fa-question-circle" alt="Info" title="The amount of time used when this processor penalizes a FlowFile."></div>
                            </div>
                            <div class="setting-field">
                                <span id="read-only-penalty-duration"></span>
                            </div>
                        </div>
                        <div class="yield-duration-setting">
                            <div class="setting-name">
                                Yield duration
                                <div class="fa fa-question-circle" alt="Info" title="When a processor yields, it will not be scheduled again until this amount of time elapses."></div>
                            </div>
                            <div class="setting-field">
                                <span id="read-only-yield-duration"></span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="setting">
                        <div class="bulletin-setting">
                            <div class="setting-name">
                                Bulletin level
                                <div class="fa fa-question-circle" alt="Info" title="The level at which this processor will generate bulletins."></div>
                            </div>
                            <div class="setting-field">
                                <span id="read-only-bulletin-level"></span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="spacer">&nbsp;</div>
                <div class="settings-right">
                    <div class="setting">
                        <div class="setting-name">
                            Automatically terminate relationships
                            <div class="fa fa-question-circle" alt="Info" title="Will automatically terminate FlowFiles sent to all relationships in bold."></div>
                        </div>
                        <div class="setting-field">
                            <div id="read-only-auto-terminate-relationship-names"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="details-scheduling-tab-content" class="details-tab">
                <div class="settings-left">
                    <div class="setting">
                        <div class="scheduling-strategy-setting">
                            <div class="setting-name">
                                Scheduling strategy
                                <div class="fa fa-question-circle" alt="Info" title="The strategy used to schedule this processor."></div>
                            </div>
                            <div class="setting-field">
                                <span id="read-only-scheduling-strategy"></span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="setting">
                        <div class="concurrently-schedulable-tasks-setting">
                            <div class="setting-name">
                                Concurrent tasks
                                <div class="fa fa-question-circle" alt="Info" title="The number of tasks that should be concurrently scheduled for this processor."></div>
                            </div>
                            <div class="setting-field">
                                <span id="read-only-concurrently-schedulable-tasks"></span>
                            </div>
                        </div>
                        <div id="read-only-run-schedule" class="scheduling-period-setting">
                            <div class="setting-name">
                                Run schedule
                                <div class="fa fa-question-circle" alt="Info" title="The minimum number of seconds that should elapse between task executions."></div>
                            </div>
                            <div class="setting-field">
                                <span id="read-only-scheduling-period"></span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="read-only-execution-node-options" class="setting">
                        <div class="execution-node-setting">
                            <div class="setting-name">
                                Execution
                                <div class="fa fa-question-circle" alt="Info" title="The node(s) that this processor will be scheduled to run on."></div>
                            </div>
                            <div class="setting-field">
                                <span id="read-only-execution-node"></span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="spacer">&nbsp;</div>
                <div class="settings-right">
                    <div class="setting">
                        <div class="setting-name">
                            Run duration
                            <div class="fa fa-question-circle" alt="Info" title="When scheduled to run, the processor will continue running for up to this duration. A run duration of 0ms will execute once when scheduled."></div>
                        </div>
                        <div class="setting-field">
                            <span id="read-only-run-duration"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="details-processor-properties-tab-content" class="details-tab">
                <div id="read-only-processor-properties"></div>
            </div>
            <div id="details-processor-comments-tab-content" class="details-tab">
                <div class="setting">
                    <div class="setting-name">Comments</div>
                    <div class="setting-field">
                        <div id="read-only-processor-comments"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

        

<div id="variable-registry-dialog" class="hidden">
    <div class="dialog-content">
        <div class="settings-left">
            <div class="setting">
                <div style="float: left;">
                    <div class="setting-name">Process Group</div>
                    <div class="setting-field">
                        <span id="process-group-variable-registry"></span>
                        <span id="variable-registry-process-group-id" class="hidden"></span>
                    </div>
                </div>
                <div id="add-variable"><button class="button fa fa-plus"></button></div>
                <div class="clear"></div>
            </div>
            <div id="variable-registry-table"></div>
            <div id="variable-update-status" class="hidden">
                <div class="setting">
                    <div class="setting-name">
                        Steps to update variables
                    </div>
                    <div class="setting-field">
                        <ol id="variable-update-steps"></ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer">&nbsp;</div>
        <div class="settings-right">
            <div class="setting">
                <div class="setting-name">
                    Variables
                    <div class="referencing-components-loading"></div>
                </div>
                <div class="setting-field">
                    <div id="variable-affected-components-context"></div>
                </div>
            </div>
            <div class="setting">
                <div class="setting-name">
                    Referencing Processors
                    <div class="fa fa-question-circle" alt="Info" title="Processors referencing this variable."></div>
            </div>
                <div class="setting-field">
                    <ul id="variable-registry-affected-processors"></ul>
                </div>
            </div>
            <div class="setting">
                <div class="setting-name">
                    Referencing Controller Services
                    <div class="fa fa-question-circle" alt="Info" title="Controller Services referencing this variable."></div>
                </div>
                <div class="setting-field">
                    <ul id="variable-registry-affected-controller-services"></ul>
                </div>
            </div>
            <div class="setting">
                <div class="setting-name">
                    Unauthorized referencing components
                    <div class="fa fa-question-circle" alt="Info" title="Referencing components for which READ or WRITE permissions are not granted."></div>
                </div>
                <div class="setting-field">
                    <ul id="variable-registry-affected-unauthorized-components"></ul>
                </div>
            </div>
        </div>
    </div>
    <div id="variable-message" class="ellipsis" title="Parameters are replacing variables. Learn more about the greater power and security of parameters.">
        Parameters are replacing variables. <span id="parameters-documentation-link" class="link" title="Learn more about parameters">Learn more</span> about the greater power and security of parameters.
    </div>
</div>
<div id="new-variable-dialog" class="dialog cancellable small-dialog hidden">
    <div class="dialog-content">
        <div>
            <div class="setting-name">Variable name</div>
            <div class="setting-field new-variable-name-container">
                <input id="new-variable-name" type="text"/>
            </div>
        </div>
    </div>
</div>

        

<div id="process-group-configuration">
    <div id="process-group-configuration-header-text" class="settings-header-text">Process Group Configuration</div>
    <div class="settings-container">
        <div>
            <div id="process-group-configuration-tabs" class="settings-tabs tab-container"></div>
            <div class="clear"></div>
        </div>
        <div id="process-group-configuration-tabs-content">
            <button id="add-process-group-configuration-controller-service" class="add-button fa fa-plus" title="Create a new controller service"></button>
            <div id="general-process-group-configuration-tab-content" class="configuration-tab">
                <div id="general-process-group-configuration">
                    <div class="setting">
                        <div class="setting-name">Process group name</div>
                        <span id="process-group-id" class="hidden"></span>
                        <div class="editable setting-field">
                            <input type="text" id="process-group-name" class="setting-input"/>
                        </div>
                        <div class="read-only setting-field">
                            <span id="read-only-process-group-name" class="unset"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Process group parameter context</div>
                        <div class="editable setting-field">
                            <div id="process-group-parameter-context-combo"></div>
                        </div>
                        <div class="read-only setting-field">
                            <span id="read-only-process-group-parameter-context" class="unset">Unauthorized</span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Process group comments</div>
                        <div class="editable setting-field">
                            <textarea id="process-group-comments" class="setting-input"></textarea>
                        </div>
                        <div class="read-only setting-field">
                            <span id="read-only-process-group-comments" class="unset"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Process group FlowFile concurrency</div>
                        <div class="editable setting-field">
                            <div id="process-group-flowfile-concurrency-combo"></div>
                        </div>
                        <div class="read-only setting-field">
                            <span id="read-only-process-group-flowfile-concurrency" class="unset"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Process group outbound policy</div>
                        <div class="editable setting-field">
                            <div id="process-group-outbound-policy-combo"></div>
                        </div>
                        <div class="read-only setting-field">
                            <span id="read-only-process-group-outbound-policy" class="unset"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Default FlowFile Expiration</div>
                        <div class="editable setting-field">
                            <input type="text" id="process-group-default-flowfile-expiration" class="setting-input"/>
                        </div>
                        <div class="read-only setting-field">
                            <span id="read-only-process-group-default-flowfile-expiration" class="unset"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Default Back Pressure Object Threshold</div>
                        <div class="editable setting-field">
                            <input type="text" id="process-group-default-back-pressure-object-threshold" class="setting-input"/>
                        </div>
                        <div class="read-only setting-field">
                            <span id="read-only-process-group-default-back-pressure-object-threshold" class="unset"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Default Back Pressure Data Size Threshold</div>
                        <div class="editable setting-field">
                            <input type="text" id="process-group-default-back-pressure-data-size-threshold" class="setting-input"/>
                        </div>
                        <div class="read-only setting-field">
                            <span id="read-only-process-group-default-back-pressure-data-size-threshold" class="unset"></span>
                        </div>
                    </div>

                    <div class="editable settings-buttons">
                        <div id="process-group-configuration-save" class="button">Apply</div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div id="process-group-controller-services-tab-content" class="configuration-tab">
                <div id="process-group-controller-services-table" class="settings-table"></div>
            </div>
        </div>
    </div>
    <div id="process-group-refresh-container">
        <button id="process-group-configuration-refresh-button" class="refresh-button pointer fa fa-refresh" title="Refresh"></button>
        <div class="last-refreshed-container">
            Last updated:&nbsp;<span id="process-group-configuration-last-refreshed" class="last-refreshed"></span>
        </div>
        <div id="process-group-configuration-loading-container" class="loading-container"></div>
        <div id="flow-cs-availability" class="hidden">Listed services are available to all descendant Processors and services of this Process Group.</div>
        <div class="clear"></div>
    </div>
</div>

        

<div id="override-policy-dialog" class="hidden small-dialog">
    <div class="dialog-content">
        <div>Do you want to override with a copy of the inherited policy or an empty policy?</div>
        <div style="margin-top: 10px;">
            <label for="copy-policy-radio-button"><input id="copy-policy-radio-button" type="radio" name="emptyOrCopy" value="copy" checked="checked"/> Copy</label>
            <label for="empty-policy-radio-button"><input id="empty-policy-radio-button" type="radio" name="emptyOrCopy" value="policy"/> Empty</label>
        </div>
    </div>
</div>
        

<div id="policy-management">
    <div id="policy-management-header-text">Access Policies</div>
    <div id="policy-controls-container">
        <span id="selected-policy-action" class="hidden"></span>
        <span id="selected-policy-type" class="hidden"></span>
        <div id="policy-message-container">
            <div id="policy-message"></div>
            <div id="new-policy-message" class="hidden"><span id="create-policy-link" class="link">Create</span> a new policy.</div>
            <div id="override-policy-message" class="hidden"><span id="override-policy-link" class="link">Override</span> this policy.</div>
            <div id="add-local-admin-message" class="hidden"><span id="add-local-admin-link" class="link">Add</span> policy for additional administrators.</div>
            <div class="clear"></div>
        </div>
        <div id="global-policy-controls" class="hidden policy-controls">
            <div id="policy-type-list"></div>
            <div id="controller-policy-target" class="hidden"></div>
            <div id="restricted-component-required-permissions" class="hidden"></div>
            <div class="clear"></div>
        </div>
        <div id="component-policy-controls" class="hidden policy-controls">
            <div id="policy-selected-component-container" class="hidden policy-selected-component-container">
                <div class="policy-selected-component-type-icon">
                    <i class="icon icon-drop" ng-class="appCtrl.serviceProvider.graphControlsCtrl.getContextIcon()"></i>
                </div>
                <div class="policy-selected-component-details-container">
                    <div class="policy-selected-component-name">{{appCtrl.serviceProvider.graphControlsCtrl.getContextName()}}</div>
                    <div class="policy-selected-component-type" ng-class="appCtrl.serviceProvider.graphControlsCtrl.hide()">{{appCtrl.serviceProvider.graphControlsCtrl.getContextType()}}</div>
                </div>
                <div class="clear"></div>
            </div>
            <div id="policy-selected-template-container" class="hidden policy-selected-component-container">
                <div class="policy-selected-component-type-icon">
                    <i class="icon icon-template"></i>
                </div>
                <div class="policy-selected-component-details-container">
                    <div class="policy-selected-component-name"></div>
                    <div class="policy-selected-component-type">Template</div>
                </div>
                <div class="clear"></div>
            </div>
            <div id="policy-selected-controller-service-container" class="hidden policy-selected-component-container">
                <div class="policy-selected-component-type-icon">
                    <i class="icon icon-drop"></i>
                </div>
                <div class="policy-selected-component-details-container">
                    <div class="policy-selected-component-name"></div>
                    <div class="policy-selected-component-type">Controller Service</div>
                </div>
                <div class="clear"></div>
            </div>
            <div id="policy-selected-reporting-task-container" class="hidden policy-selected-component-container">
                <div class="policy-selected-component-type-icon">
                    <i class="icon icon-drop"></i>
                </div>
                <div class="policy-selected-component-details-container">
                    <div class="policy-selected-component-name"></div>
                    <div class="policy-selected-component-type">Reporting Task</div>
                </div>
                <div class="clear"></div>
            </div>
            <div id="policy-selected-parameter-context-container" class="hidden policy-selected-component-container">
                <div class="policy-selected-component-type-icon">
                    <i class="icon icon-drop"></i>
                </div>
                <div class="policy-selected-component-details-container">
                    <div class="policy-selected-component-name"></div>
                    <div class="policy-selected-component-type">Parameter Context</div>
                </div>
                <div class="clear"></div>
            </div>
            <div id="selected-policy-component-id" class="hidden"></div>
            <div id="selected-policy-component-type" class="hidden"></div>
            <div id="component-policy-target"></div>
            <div class="clear"></div>
        </div>
        <button id="delete-policy-button" class="fa fa-trash policy-button" title="Delete this policy"></button>
        <button id="new-policy-user-button" class="fa fa-user-plus policy-button" title="Add users/groups to this policy"></button>
        <div class="clear"></div>
    </div>
    <div id="policy-table"></div>
    <div id="policy-refresh-container">
        <button id="policy-refresh-button" class="refresh-button pointer fa fa-refresh" title="Refresh"></button>
        <div class="last-refreshed-container">
            Last updated:&nbsp;<span id="policy-last-refreshed" class="last-refreshed"></span>
        </div>
        <div id="policy-loading-container" class="loading-container"></div>
        <div id="admin-policy-message" class="hidden">Only listing component specific administrators. Inherited administrators not shown.</div>
        <div id="restriction-message" class="hidden">Only listing restriction specific users. Users with permission "regardless of restrictions" not shown but are also allowed.</div>
        <div class="clear"></div>
    </div>
</div>

        

<div id="remote-process-group-configuration" class="hidden large-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-name">Name</div>
            <div class="setting-field">
                <span id="remote-process-group-name"></span>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Id</div>
            <div class="setting-field">
                <span id="remote-process-group-id"></span>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">URLs</div>
            <div class="setting-field">
                <input type="text" id="remote-process-group-urls" class="setting-input"/>
            </div>
        </div>
        <div class="setting">
            <div class="remote-process-group-setting-left">
                <div class="setting-name">
                    Transport Protocol
                    <div class="fa fa-question-circle" alt="Info" title="Specify the transport protocol to use for this Remote Process Group communication."></div>
                </div>
                <div class="setting-field">
                    <div id="remote-process-group-transport-protocol-combo"></div>
                </div>
            </div>
            <div class="remote-process-group-setting-right">
                <div class="setting-name">
                    Local Network Interface
                    <div class="fa fa-question-circle" alt="Info" title="The local network interface to send/receive data. If not specified, any local address is used. If clustered, all nodes must have an interface with this identifier."></div>
                </div>
                <div class="setting-field">
                    <input type="text" class="small-setting-input" id="remote-process-group-local-network-interface"/>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="setting">
            <div class="remote-process-group-setting-left">
                <div class="setting-name">
                    HTTP Proxy server hostname
                    <div class="fa fa-question-circle" alt="Info" title="Specify the proxy server's hostname to use. If not specified, HTTP traffics are sent directly to the target NiFi instance."></div>
                </div>
                <div class="setting-field">
                    <input type="text" class="small-setting-input" id="remote-process-group-proxy-host"/>
                </div>
            </div>
            <div class="remote-process-group-setting-right">
                <div class="setting-name">
                    HTTP Proxy server port
                    <div class="fa fa-question-circle" alt="Info" title="Specify the proxy server's port number, optional. If not specified, default port 80 will be used."></div>
                </div>
                <div class="setting-field">
                    <input type="text" class="small-setting-input" id="remote-process-group-proxy-port"/>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="setting">
            <div class="remote-process-group-setting-left">
                <div class="setting-name">
                    HTTP Proxy user
                    <div class="fa fa-question-circle" alt="Info" title="Specify an user name to connect to the proxy server, optional."></div>
                </div>
                <div class="setting-field">
                    <input type="text" class="small-setting-input" id="remote-process-group-proxy-user"/>
                </div>
            </div>
            <div class="remote-process-group-setting-right">
                <div class="setting-name">
                    HTTP Proxy password
                    <div class="fa fa-question-circle" alt="Info" title="Specify an user password to connect to the proxy server, optional."></div>
                </div>
                <div class="setting-field">
                    <input type="password" class="small-setting-input" id="remote-process-group-proxy-password"/>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="setting">
            <div class="remote-process-group-setting-left">
                <div class="setting-name">
                    Communications timeout
                    <div class="fa fa-question-circle" alt="Info" title="When communication with this remote process group takes longer than this amount of time, it will timeout."></div>
                </div>
                <div class="setting-field">
                    <input type="text" class="small-setting-input" id="remote-process-group-timeout"/>
                </div>
            </div>
            <div class="remote-process-group-setting-right">
                <div class="setting-name">
                    Yield duration
                    <div class="fa fa-question-circle" alt="Info" title="When communication with this remote process group fails, it will not be scheduled again until this amount of time elapses."></div>
                </div>
                <div class="setting-field">
                    <input type="text" class="small-setting-input" id="remote-process-group-yield-duration"/>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
        

<div id="remote-process-group-details" class="hidden medium-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-name">Name</div>
            <div class="setting-field">
                <span id="read-only-remote-process-group-name"></span>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Id</div>
            <div class="setting-field">
                <span id="read-only-remote-process-group-id"></span>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">URLs</div>
            <div class="setting-field">
                <span id="read-only-remote-process-group-urls"></span>
            </div>
        </div>
        <div class="setting">
            <div class="remote-process-group-setting-left">
                <div class="setting-name">
                    Transport Protocol
                    <div class="fa fa-question-circle" alt="Info" title="Transport protocol to use for this Remote Process Group communication."></div>
                </div>
                <div class="setting-field">
                    <div id="read-only-remote-process-group-transport-protocol"></div>
                </div>
            </div>
            <div class="remote-process-group-setting-right">
                <div class="setting-name">
                    Local Network Interface
                    <div class="fa fa-question-circle" alt="Info" title="The local network interface to send/receive data. If not specified, any local address is used. If clustered, all nodes must have an interface with this identifier."></div>
                </div>
                <div class="setting-field">
                    <span id="read-only-remote-process-group-local-network-interface"></span>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="setting">
            <div class="remote-process-group-setting-left">
                <div class="setting-name">
                    HTTP Proxy server hostname
                    <div class="fa fa-question-circle" alt="Info" title="Specify the proxy server's hostname to use. If not specified, HTTP traffics are sent directly to the target NiFi instance."></div>
                </div>
                <div class="setting-field">
                    <span id="read-only-remote-process-group-proxy-host"></span>
                </div>
            </div>
            <div class="remote-process-group-setting-right">
                <div class="setting-name">
                    HTTP Proxy server port
                    <div class="fa fa-question-circle" alt="Info" title="Specify the proxy server's port number, optional. If not specified, default port 80 will be used."></div>
                </div>
                <div class="setting-field">
                    <span id="read-only-remote-process-group-proxy-port"></span>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="setting">
            <div class="remote-process-group-setting-left">
                <div class="setting-name">
                    HTTP Proxy user
                    <div class="fa fa-question-circle" alt="Info" title="Specify an user name to connect to the proxy server, optional."></div>
                </div>
                <div class="setting-field">
                    <span id="read-only-remote-process-group-proxy-user"></span>
                </div>
            </div>
            <div class="remote-process-group-setting-right">
                <div class="setting-name">
                    HTTP Proxy password
                    <div class="fa fa-question-circle" alt="Info" title="Specify an user password to connect to the proxy server, optional."></div>
                </div>
                <div class="setting-field">
                    <span id="read-only-remote-process-group-proxy-password"></span>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="setting">
            <div class="remote-process-group-setting-left">
                <div class="setting-name">
                    Communications timeout
                    <div class="fa fa-question-circle" alt="Info" title="When communication with this remote process group takes longer than this amount of time, it will timeout."></div>
                </div>
                <div class="setting-field">
                    <span id="read-only-remote-process-group-timeout"></span>
                </div>
            </div>
            <div class="remote-process-group-setting-right">
                <div class="setting-name">
                    Yield duration
                    <div class="fa fa-question-circle" alt="Info" title="When communication with this remote process group fails, it will not be scheduled again until this amount of time elapses."></div>
                </div>
                <div class="setting-field">
                    <span id="read-only-remote-process-group-yield-duration"></span>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
        

<div id="remote-process-group-ports" class="hidden large-dialog">
    <div class="dialog-content">
        <span id="remote-process-group-ports-id" class="hidden"></span>
        <div class="settings-left">
            <div class="setting">
                <div class="setting-name">Name</div>
                <div class="setting-field">
                    <span id="remote-process-group-ports-name"></span>
                </div>
            </div>
            <div class="remote-port-header">
                <div>Input ports</div>
            </div>
            <div id="remote-process-group-input-ports-container" class="remote-ports-container"></div>
        </div>
        <div class="spacer">&nbsp;</div>
        <div class="settings-right">
            <div class="setting">
                <div class="setting-name">URLs</div>
                <div class="setting-field">
                    <span id="remote-process-group-ports-urls"></span>
                </div>
            </div>
            <div class="remote-port-header">
                <div>Output ports</div>
            </div>
            <div id="remote-process-group-output-ports-container" class="remote-ports-container"></div>
        </div>
    </div>
</div>
        

<div id="remote-port-configuration" class="hidden medium-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-name">Name</div>
            <div class="setting-field">
                <span id="remote-port-id" class="hidden"></span>
                <span id="remote-port-type" class="hidden"></span>
                <div id="remote-port-name" class="ellipsis"></div>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">
                Concurrent tasks
                <div class="fa fa-question-circle" alt="Info" title="The number of tasks that should be concurrently scheduled for this port."></div>
            </div>
            <div class="setting-field">
                <input id="remote-port-concurrent-tasks" type="text"/>
                <div id="remote-port-use-compression-container">
                    <div id="remote-port-use-compression" class="nf-checkbox"></div>
                    <span class="nf-checkbox-label">Compressed</span>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="batch-settings">
            <div class="setting-name">
                Batch Settings:
            </div>
            <div class="setting batch-setting">
                <div class="setting-name">
                    Count
                    <div class="fa fa-question-circle" alt="Info" title="The preferred number of flow files to include in a transaction for this port."></div>
                </div>
                <div class="setting-field">
                    <input id="remote-port-batch-count" type="text"/>
                </div>
            </div>
            <div class="setting batch-setting">
                <div class="setting-name">
                    Size
                    <div class="fa fa-question-circle" alt="Info" title="The preferred number of bytes to include in a transaction for this port."></div>
                </div>
                <div class="setting-field">
                    <input id="remote-port-batch-size" type="text"/>
                </div>
            </div>
            <div class="setting batch-setting">
                <div class="setting-name">
                    Duration
                    <div class="fa fa-question-circle" alt="Info" title="The preferred amount of time that a transaction should span for this port."></div>
                </div>
                <div class="setting-field">
                    <input id="remote-port-batch-duration" type="text"/>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

        

<div id="port-configuration" class="hidden medium-dialog">
    <div class="dialog-content">
        <div class="port-setting">
            <div class="setting-name">Port name</div>
            <div class="setting-field">
                <div id="port-name-container">
                    <input type="text" id="port-name"/>
                    <div class="port-enabled-container">
                        <div id="port-enabled" class="port-enabled nf-checkbox checkbox-unchecked"></div>
                        <span class="nf-checkbox-label"> Enabled</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="port-setting">
            <div class="setting-name">
                Id
            </div>
            <div class="setting-field">
                <span id="port-id"></span>
            </div>
        </div>
        <div id="port-concurrent-task-container" class="port-setting">
            <div class="setting-name">
                Concurrent tasks
                <div class="fa fa-question-circle" alt="Info" title="The number of tasks that should be concurrently scheduled for this port."></div>
            </div>
            <div class="setting-field">
                <input type="text" id="port-concurrent-tasks" class="port-field"></divnput>
            </div>
        </div>
        <div class="port-setting">
            <div class="setting-name">Comments</div>
            <div class="setting-field">
                <textarea cols="30" rows="4" id="port-comments" class="port-field"></textarea>
            </div>
        </div>
    </div>
</div>
        

<div id="port-details" class="hidden medium-dialog">
    <div class="dialog-content">
        <div class="port-setting">
            <div class="setting-name">Port name</div>
            <div class="setting-field">
                <span id="read-only-port-name"></span>
            </div>
        </div>
        <div class="port-setting">
            <div class="setting-name">Id</div>
            <div class="setting-field">
                <span id="read-only-port-id"></span>
            </div>
        </div>
        <div class="port-setting">
            <div class="setting-name">Allow Remote Access
                <div class="fa fa-question-circle" alt="Info" title="Whether this port can be accessed as a RemoteGroupPort via Site-to-Site protocol."></div>
            </div>
            <div class="setting-field">
                <span id="read-only-port-allow-remote-access"></span>
            </div>
        </div>
        <div class="port-setting">
            <div class="setting-name">Concurrent Tasks
                <div class="fa fa-question-circle" alt="Info" title="The number of tasks that should be concurrently scheduled for this port."></div>
            </div>
            <div class="setting-field">
                <span id="read-only-port-concurrent-tasks"></span>
            </div>
        </div>
        <div class="port-setting">
            <div class="setting-name">Comments</div>
            <div class="setting-field">
                <div id="read-only-port-comments"></div>
            </div>
        </div>
    </div>
</div>
        

<div id="label-configuration" class="hidden medium-dialog">
    <div id="label-configuration-contents" class="dialog-content">
        <div class="setting">
            <div class="setting-name">Label Value</div>
            <div class="setting-field">
                <textarea cols="30" rows="4" id="label-value" class="setting-input"></textarea>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Font Size</div>
            <div class="setting-field">
                <div id="label-font-size"></div>
            </div>
        </div>
    </div>
</div>
        

<div id="connection-configuration" layout="column" class="hidden large-dialog">
    <div class="connection-configuration-tab-container dialog-content">
        <div id="connection-configuration-tabs" class="tab-container"></div>
        <div id="connection-configuration-tabs-content">
            <div id="connection-settings-tab-content" class="configuration-tab">
                <div class="settings-left">
                    <div class="setting">
                        <div class="setting-name">Name</div>
                        <div class="setting-field">
                            <input type="text" id="connection-name" name="connection-name" class="setting-input"/>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Id</div>
                        <div class="setting-field">
                            <span type="text" id="connection-id"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">
                            FlowFile expiration
                            <div class="fa fa-question-circle" alt="Info" title="The maximum amount of time an object may be in the flow before it will be automatically aged out of the flow."></div>
                        </div>
                        <div class="setting-field">
                            <input type="text" id="flow-file-expiration" name="flow-file-expiration" class="setting-input"/>
                        </div>
                    </div>
                    <div class="multi-column-settings">
                        <div class="setting">
                            <div class="setting-name">
                                Back Pressure<br/>Object threshold
                                <div class="fa fa-question-circle" alt="Info" title="The maximum number of objects that can be queued before back pressure is applied."></div>
                            </div>
                            <div class="setting-field">
                                <input type="text" id="back-pressure-object-threshold" name="back-pressure-object-threshold" class="setting-input"/>
                            </div>
                        </div>
                        <div class="separator">&nbsp;</div>
                        <div class="setting">
                            <div class="setting-name">
                                &nbsp;<br/>Size threshold
                                <div class="fa fa-question-circle" alt="Info" title="The maximum data size of objects that can be queued before back pressure is applied."></div>
                            </div>
                            <div class="setting-field">
                                <input type="text" id="back-pressure-data-size-threshold" name="back-pressure-data-size-threshold" class="setting-input"/>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="multi-column-settings">
                            <div class="setting">
                                <div class="setting-name">
                                    Load Balance Strategy
                                    <div class="fa fa-question-circle" alt="Info" title="How to load balance the data in this Connection across the nodes in the cluster."></div>
                                </div>
                                <div class="setting-field">
                                    <div id="load-balance-strategy-combo"></div>
                                </div>
                            </div>
                            <div id="load-balance-partition-attribute-setting-separator" class="separator">&nbsp;</div>
                            <div id="load-balance-partition-attribute-setting" class="setting">
                                <div class="setting-name">
                                    Attribute Name
                                    <div class="fa fa-question-circle" alt="Info" title="The FlowFile Attribute to use for determining which node a FlowFile will go to."></div>
                                </div>
                                <div class="setting-field">
                                    <input type="text" id="load-balance-partition-attribute" name="load-balance-partition-attribute" class="setting-input"/>
                                </div>
                            </div>
                        </div>
                        <div id="load-balance-compression-setting" class="setting">
                            <div class="setting-name">
                                Load Balance Compression
                                <div class="fa fa-question-circle" alt="Info" title="Whether or not data should be compressed when being transferred between nodes in the cluster."></div>
                            </div>
                            <div class="setting-field">
                                <div id="load-balance-compression-combo"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spacer">&nbsp;</div>
                <div class="settings-right">
                    <div class="setting">
                        <div class="setting-name">
                            Available prioritizers
                            <div class="fa fa-question-circle" alt="Info" title="Available prioritizers that could reprioritize FlowFiles in this work queue."></div>
                        </div>
                        <div class="setting-field">
                            <ul id="prioritizer-available"></ul>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">
                            Selected prioritizers
                            <div class="fa fa-question-circle" alt="Info" title="Prioritizers that have been selected to reprioritize FlowFiles in this work queue."></div>
                        </div>
                        <div class="setting-field">
                            <ul id="prioritizer-selected"></ul>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="connection-uri" name="connection-uri"/>
                <input type="hidden" id="connection-source-component-id" name="connection-source-component-id"/>
                <input type="hidden" id="connection-source-id" name="connection-source-id"/>
                <input type="hidden" id="connection-source-group-id" name="connection-source-group-id"/>
                <input type="hidden" id="connection-destination-component-id" name="connection-destination-component-id"/>
                <input type="hidden" id="connection-destination-id" name="connection-destination-id"/>
                <input type="hidden" id="connection-destination-group-id" name="connection-destination-group-id"/>
            </div>
            <div id="connection-details-tab-content" class="configuration-tab">
                <div class="settings-left">
                    <div id="read-only-output-port-source" class="setting hidden">
                        <div class="setting-name">From output</div>
                        <div class="setting-field connection-terminal-label">
                            <div id="read-only-output-port-name" class="ellipsis"></div>
                        </div>
                    </div>
                    <div id="output-port-source" class="setting hidden">
                        <div class="setting-name">From output</div>
                        <div class="setting-field connection-terminal-label">
                            <div id="output-port-options"></div>
                        </div>
                    </div>
                    <div id="input-port-source" class="setting hidden">
                        <div class="setting-name">From input</div>
                        <div class="setting-field connection-terminal-label">
                            <div id="input-port-source-name" class="label ellipsis"></div>
                        </div>
                    </div>
                    <div id="funnel-source" class="setting hidden">
                        <div class="setting-name">From funnel</div>
                        <div class="setting-field connection-terminal-label">
                            <div id="funnel-source-name" class="label ellipsis" title="funnel">funnel</div>
                        </div>
                    </div>
                    <div id="processor-source" class="setting hidden">
                        <div class="setting-name">From processor</div>
                        <div class="setting-field connection-terminal-label">
                            <div id="processor-source-details">
                                <div id="processor-source-name" class="label ellipsis"></div>
                                <div id="processor-source-type" class="ellipsis"></div>
                            </div>
                        </div>
                    </div>
                    <div id="connection-source-group" class="setting">
                        <div class="setting-name">Within group</div>
                        <div class="setting-field">
                            <div id="connection-source-group-name"></div>
                        </div>
                        <div class="setting-field">
                            <div id="connection-remote-source-url" class="hidden"></div>
                        </div>
                    </div>
                    <div id="relationship-names-container" class="hidden">
                        <div class="setting-name">For relationships</div>
                        <div class="setting-field">
                            <div id="relationship-names"></div>
                        </div>
                    </div>
                </div>
                <div class="spacer">&nbsp;</div>
                <div class="settings-right">
                    <div id="input-port-destination" class="setting hidden">
                        <div class="setting-name">To input</div>
                        <div class="setting-field connection-terminal-label">
                            <div id="input-port-options"></div>
                        </div>
                    </div>
                    <div id="output-port-destination" class="setting hidden">
                        <div class="setting-name">To output</div>
                        <div class="setting-field connection-terminal-label">
                            <div id="output-port-destination-name" class="label ellipsis"></div>
                        </div>
                    </div>
                    <div id="funnel-destination" class="setting hidden">
                        <div class="setting-name">To funnel</div>
                        <div class="setting-field connection-terminal-label">
                            <div id="funnel-destination-name" class="label ellipsis" title="funnel">funnel</div>
                        </div>
                    </div>
                    <div id="processor-destination" class="setting hidden">
                        <div class="setting-name">To processor</div>
                        <div class="setting-field connection-terminal-label">
                            <div id="processor-destination-details">
                                <div id="processor-destination-name" class="label ellipsis"></div>
                                <div id="processor-destination-type" class="ellipsis"></div>
                            </div>
                        </div>
                    </div>
                    <div id="connection-destination-group" class="setting">
                        <div class="setting-name">Within group</div>
                        <div class="setting-field">
                            <div id="connection-destination-group-name"></div>
                        </div>
                        <div class="setting-field">
                            <div id="connection-remote-destination-url" class="hidden"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        

<div id="drop-request-status-dialog" layout="column" class="hidden small-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-field">
                <div id="drop-request-status-message"></div>
            </div>
            <div class="setting-field">
                <div id="drop-request-percent-complete"></div>
            </div>
        </div>
    </div>
</div>

        

<div id="flowfile-details-dialog" layout="column" class="hidden large-dialog">
    <div id="flowfile-details-dialog-content" class="dialog-content">
        <div id="flowfile-details-tabs" class="tab-container"></div>
        <div id="flowfile-details-tabs-content">
            <div id="flowfile-details-tab-content" class="details-tab">
                <span id="flowfile-uri" class="hidden"></span>
                <span id="flowfile-cluster-node-id" class="hidden"></span>
                <div class="settings-left">
                    <div id="flowfile-details">
                        <div class="flowfile-header">FlowFile Details</div>
                        <div class="flowfile-detail">
                            <div class="detail-name">UUID</div>
                            <div id="flowfile-uuid" class="detail-value"></div>
                            <div class="clear"></div>
                        </div>
                        <div class="flowfile-detail">
                            <div class="detail-name">Filename</div>
                            <div id="flowfile-filename" class="detail-value"></div>
                            <div class="clear"></div>
                        </div>
                        <div class="flowfile-detail">
                            <div class="detail-name">File Size</div>
                            <div id="flowfile-file-size" class="detail-value"></div>
                            <div class="clear"></div>
                        </div>
                        <div class="flowfile-detail">
                            <div class="detail-name">Queue Position</div>
                            <div id="flowfile-queue-position" class="detail-value"></div>
                            <div class="clear"></div>
                        </div>
                        <div class="flowfile-detail">
                            <div class="detail-name">Queued Duration</div>
                            <div id="flowfile-queued-duration" class="detail-value"></div>
                            <div class="clear"></div>
                        </div>
                        <div class="flowfile-detail">
                            <div class="detail-name">Lineage Duration</div>
                            <div id="flowfile-lineage-duration" class="detail-value"></div>
                            <div class="clear"></div>
                        </div>
                        <div class="flowfile-detail">
                            <div class="detail-name">Penalized</div>
                            <div id="flowfile-penalized" class="detail-value"></div>
                            <div class="clear"></div>
                        </div>
                        <div id="additional-flowfile-details"></div>
                    </div>
                </div>
                <div class="spacer">&nbsp;</div>
                <div class="settings-right">
                    <div id="flowfile-with-no-content" class="content-details">
                        <div class="flowfile-header">Content Claim</div>
                        <div class="flowfile-info unset">No Content Available</div>
                    </div>
                    <div id="flowfile-content-details" class="content-details">
                        <div class="flowfile-header">Content Claim</div>
                        <div class="flowfile-detail">
                            <div class="content-detail-name">Container</div>
                            <div id="content-container" class="content-detail-value"></div>
                            <div class="clear"></div>
                        </div>
                        <div class="flowfile-detail">
                            <div class="content-detail-name">Section</div>
                            <div id="content-section" class="content-detail-value"></div>
                            <div class="clear"></div>
                        </div>
                        <div class="flowfile-detail">
                            <div class="content-detail-name">Identifier</div>
                            <div id="content-identifier" class="content-detail-value"></div>
                            <div class="clear"></div>
                        </div>
                        <div class="flowfile-detail">
                            <div class="content-detail-name">Offset</div>
                            <div id="content-offset" class="content-detail-value"></div>
                            <div class="clear"></div>
                        </div>
                        <div class="flowfile-detail">
                            <div class="content-detail-name">Size</div>
                            <div id="content-size" class="content-detail-value"></div>
                            <div id="content-bytes" class="content-detail-value hidden"></div>
                            <div class="clear"></div>
                        </div>
                        <div class="flowfile-detail">
                            <div id="content-download" class="secondary-button fa fa-download button-icon"><span>Download</span></div>
                            <div id="content-view" class="secondary-button fa fa-eye button-icon hidden"><span>View</span></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div id="flowfile-attributes-tab-content" class="details-tab">
                <div id="flowfile-attributes-details">
                    <div id="flowfile-attributes-header" class="flowfile-header">Attribute Values</div>
                    <div class="clear"></div>
                    <div id="flowfile-attributes-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>

        

<div id="listing-request-status-dialog" layout="column" class="hidden small-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-field">
                <div id="listing-request-status-message"></div>
            </div>
            <div class="setting-field">
                <div id="listing-request-percent-complete"></div>
            </div>
        </div>
    </div>
</div>

        

<div id="verification-request-status-dialog" layout="column" class="hidden small-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-field">
                <div id="verification-request-status-message"></div>
            </div>
            <div class="setting-field">
                <div id="verification-request-percent-complete"></div>
            </div>
        </div>
    </div>
</div>

        

<div id="referenced-attributes-dialog" class="hidden medium-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div id="referenced-attributes-header">
                <div id="referenced-attributes-title" class="setting-name">
                    Enter Attribute Values
                    <div class="fa fa-question-circle" alt="Info"
                         title="Supply attribute values that should be considered when performing property verification."></div>
                </div>
                <div id="add-referenced-attribute">
                    <button class="button fa fa-plus"></button>
                </div>
                <div class="clear"></div>
            </div>
            <div class="setting-field">
                <div id="referenced-attributes-table"></div>
            </div>
        </div>
    </div>
</div>
<div id="new-referenced-attribute-dialog" class="dialog cancellable small-dialog hidden">
    <div class="dialog-content">
        <div>
            <div class="setting-name">Attribute name</div>
            <div class="setting-field">
                <input id="new-referenced-attribute-name" type="text"/>
            </div>
        </div>
    </div>
</div>

        

<div id="queue-listing-container" class="hidden" class="hidden medium-dialog">
    <div id="queue-listing-header-container">
        <div id="queue-listing-header-text"></div>
    </div>
    <div id="queue-listing-stats-container">
        <div id="queue-listing-stats" class="filter-status">
            Displaying&nbsp;<span id="displayed-flowfiles"></span>&nbsp;of&nbsp;<span id="total-flowfiles-count"></span>&nbsp;(<span id="total-flowfiles-size"></span>)
        </div>
        <div class="clear"></div>
    </div>
    <div id="queue-listing-table"></div>
    <div id="queue-listing-message" class="hidden"></div>
    <div id="queue-listing-refresh-container">
        <button id="queue-listing-refresh-button" class="refresh-button pointer fa fa-refresh" title="Refresh"></button>
        <div id="queue-listing-last-refreshed-container" class="last-refreshed-container">
            Last updated:&nbsp;<span id="queue-listing-last-refreshed"></span>
        </div>
        <div id="queue-listing-loading-container" class="loading-container"></div>
    </div>
</div>

        

<div id="component-state-dialog" layout="column" class="hidden large-dialog">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-name">Name</div>
            <div class="setting-field">
                <div id="component-state-name"></div>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Description</div>
            <div id="component-state-description" class="ellipsis multiline"></div>
        </div>
        <div>
            <div id="component-state-partial-results-container" class="hidden">
                Showing partial results
            </div>
            <div id="component-state-filter-controls">
                <div id="component-state-filter-status" class="filter-status">
                    Displaying&nbsp;<span id="displayed-component-state-entries"></span>&nbsp;of&nbsp;<span id="total-component-state-entries"></span>
                </div>
                <div id="component-state-filter-container">
                    <input type="text" id="component-state-filter" placeholder="Filter"/>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="component-state-table"></div>
        <div id="clear-link-container">
            <span id="clear-link" class="link">Clear state</span>
        </div>
    </div>
</div>
        

<div id="component-version-dialog" layout="column" class="hidden">
    <div class="dialog-content">
        <div class="setting">
            <div class="setting-name">Name</div>
            <div class="setting-field">
                <div id="component-version-name"></div>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Bundle</div>
            <div class="setting-field">
                <div id="component-version-bundle"></div>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Version</div>
            <div class="setting-field">
                <div id="component-version-selector"></div>
            </div>
        </div>
        <div id="component-version-controller-service-apis-container" class="setting hidden">
            <div class="setting-name">Supports Controller Services</div>
            <div class="setting-field">
                <div id="component-version-controller-service-apis"></div>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Tags</div>
            <div class="setting-field">
                <div id="component-version-tags"></div>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Restriction</div>
            <div class="setting-field">
                <div id="component-version-restriction"></div>
            </div>
        </div>
        <div class="setting">
            <div class="setting-name">Description</div>
            <div class="setting-field">
                <div id="component-version-description"></div>
            </div>
        </div>
    </div>
</div>
        

<div id="connection-details">
    <div class="connection-details-tab-container dialog-content">
        <div id="connection-details-tabs" class="tab-container"></div>
        <div id="connection-details-tabs-content">
            <div id="read-only-connection-details-tab-content" class="configuration-tab">
                <div class="settings-left">
                    <div class="setting">
                        <div id="read-only-connection-source-label" class="setting-name"></div>
                        <div class="setting-field connection-terminal-label">
                            <div id="read-only-connection-source" class="ellipsis"></div>
                        </div>
                    </div>
                    <div id="read-only-connection-source-group" class="setting">
                        <div class="setting-name">Within group</div>
                        <div class="setting-field">
                            <div id="read-only-connection-source-group-name"></div>
                        </div>
                        <div class="setting-field">
                            <div id="read-only-connection-remote-source-url" class="hidden"></div>
                        </div>
                    </div>
                    <div id="read-only-relationship-names-container" class="setting">
                        <div class="setting-name">
                            Relationships
                            <div class="fa fa-question-circle" alt="Info" title="Selected relationships are in bold."></div>
                        </div>
                        <div class="setting-field">
                            <div id="read-only-relationship-names"></div>
                        </div>
                    </div>
                </div>
                <div class="spacer">&nbsp;</div>
                <div class="settings-right">
                    <div class="setting">
                        <div id="read-only-connection-target-label" class="setting-name"></div>
                        <div class="setting-field connection-terminal-label">
                            <div id="read-only-connection-target" class="ellipsis"></div>
                        </div>
                    </div>
                    <div id="read-only-connection-target-group" class="setting">
                        <div class="setting-name">Within group</div>
                        <div class="setting-field">
                            <div id="read-only-connection-target-group-name"></div>
                        </div>
                        <div class="setting-field">
                            <div id="read-only-connection-remote-target-url" class="hidden"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="read-only-connection-settings-tab-content" class="configuration-tab">
                <div class="settings-left">
                    <div class="setting">
                        <div class="setting-name">Name</div>
                        <div class="setting-field">
                            <span id="read-only-connection-name"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">Id</div>
                        <div class="setting-field">
                            <span id="read-only-connection-id"></span>
                        </div>
                    </div>
                    <div class="setting">
                        <div class="setting-name">
                            FlowFile expiration
                            <div class="fa fa-question-circle" alt="Info" title="The maximum amount of time an object may be in the flow before it will be automatically aged out of the flow."></div>
                        </div>
                        <div class="setting-field">
                            <span id="read-only-flow-file-expiration"></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="multi-column-settings">
                        <div class="setting">
                            <div class="setting-name">
                                Back Pressure<br/>Object threshold
                                <div class="fa fa-question-circle" alt="Info" title="The maximum number of objects that can be queued before back pressure is applied."></div>
                            </div>
                            <div class="setting-field">
                                <span id="read-only-back-pressure-object-threshold"></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="separator">&nbsp;</div>
                        <div class="setting">
                            <div class="setting-name">
                                &nbsp;<br/>Size threshold
                                <div class="fa fa-question-circle" alt="Info" title="The maximum data size of objects that can be queued before back pressure is applied."></div>
                            </div>
                            <div class="setting-field">
                                <span id="read-only-back-pressure-data-size-threshold"></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div>
                        <div class="multi-column-settings">
                            <div class="setting">
                                <div class="setting-name">
                                    Load Balance Strategy
                                    <div class="fa fa-question-circle" alt="Info" title="How to load balance the data in this Connection across the nodes in the cluster."></div>
                                </div>
                                <div class="setting-field">
                                    <div id="read-only-load-balance-strategy"></div>
                                </div>
                            </div>
                            <div class="separator">&nbsp;</div>
                            <div id="read-only-load-balance-partition-attribute-setting" class="setting">
                                <div class="setting-name">
                                    Attribute Name
                                    <div class="fa fa-question-circle" alt="Info" title="The FlowFile Attribute to use for determining which node a FlowFile will go to."></div>
                                </div>
                                <div class="setting-field">
                                    <span id="read-only-load-balance-partition-attribute"></span>
                                </div>
                            </div>
                        </div>
                        <div id="read-only-load-balance-compression-setting" class="setting">
                            <div class="setting-name">
                                Load Balance Compression
                                <div class="fa fa-question-circle" alt="Info" title="Whether or not data should be compressed when being transferred between nodes in the cluster."></div>
                            </div>
                            <div class="setting-field">
                                <div id="read-only-load-balance-compression"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spacer">&nbsp;</div>
                <div class="settings-right">
                    <div class="setting">
                        <div class="setting-name">
                            Prioritizers
                            <div class="fa fa-question-circle" alt="Info" title="Prioritizers that have been selected to reprioritize FlowFiles in this processors work queue."></div>
                        </div>
                        <div class="setting-field">
                            <div id="read-only-prioritizers"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <div id="context-menu" class="context-menu unselectable"></div>
        <span id="nifi-content-viewer-url" class="hidden"></span>
    </body>
</html>
