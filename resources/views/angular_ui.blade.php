<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <base href="/demo/" />
    <title>Mobile Angular UI Demo</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimal-ui" />
    <meta name="apple-mobile-web-app-status-bar-style" content="yes" />
    <link rel="shortcut icon" href="<?= asset('asset/mobile-angular-ui/demo/favicon.png')?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?= asset('asset/mobile-angular-ui/dist/css/mobile-angular-ui-hover.min.css')?>" />
    <link rel="stylesheet" href="<?= asset('asset/mobile-angular-ui/dist/css/mobile-angular-ui-base.min.css')?>" />
    <link rel="stylesheet" href="<?= asset('asset/mobile-angular-ui/dist/css/mobile-angular-ui-desktop.min.css')?>" />
    <link rel="stylesheet" href="<?= asset('asset/mobile-angular-ui/demo/demo.css')?>" />
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular-route.min.js"></script>
    <script src="<?= asset('asset/mobile-angular-ui/dist/js/mobile-angular-ui.min.js')?>"></script>
    <!-- Required to use $touch, $swipe, $drag and $translate services -->
    <script src="<?= asset('asset/mobile-angular-ui/dist/js/mobile-angular-ui.gestures.min.js')?>"></script>
    <script src="<?= asset('asset/mobile-angular-ui/demo/demo.js')?>"></script>
  </head>

  <body
    ng-app="MobileAngularUiExamples"
    ng-controller="MainController"
    ui-prevent-touchmove-defaults
    >

    <!-- Sidebars -->
    <div ng-include="'../asset/mobile-angular-ui/demo/sidebar.html'"
            ui-track-as-search-param="true"
            class="sidebar sidebar-left"></div>

    <div ng-include="'../asset/mobile-angular-ui/demo/sidebarRight.html'"
            class="sidebar sidebar-right"></div>

    <div class="app"
         ui-swipe-right="Ui.turnOn('uiSidebarLeft')"
         ui-swipe-left="Ui.turnOff('uiSidebarLeft')">

      <!-- Navbars -->

      <div class="navbar navbar-app navbar-absolute-top">
        <div class="navbar-brand navbar-brand-center" ui-yield-to="title">
          Mobile Angular UI
        </div>
        <div class="btn-group pull-left">
          <div ui-toggle="uiSidebarLeft" class="btn sidebar-toggle">
            <i class="fa fa-bars"></i> Menu
          </div>
        </div>
        <div class="btn-group pull-right" ui-yield-to="navbarAction">
          <div ui-toggle="uiSidebarRight" class="btn sidebar-right-toggle">
            <i class="fa fa-comment"></i> Chat
          </div>
        </div>
      </div>

      <div class="navbar navbar-app navbar-absolute-bottom">
        <div class="btn-group justified">
          <a href="<?= url('http://mobileangularui.com/docs/');?>" class="btn btn-navbar"><i class="fa fa-home fa-navbar"></i> Docs</a>
          <a href="https://github.com/mcasimir/mobile-angular-ui" class="btn btn-navbar"><i class="fa fa-github fa-navbar"></i> Sources</a>
          <a href="https://github.com/mcasimir/mobile-angular-ui/issues" class="btn btn-navbar"><i class="fa fa-exclamation-circle fa-navbar"></i> Issues</a>
        </div>
      </div>

      <!-- App Body -->
      <div class="app-body" ng-class="{loading: loading}">
        <div ng-show="loading" class="app-content-loading">
          <i class="fa fa-spinner fa-spin loading-spinner"></i>
        </div>
        <div class="app-content">
          <ng-view></ng-view>
        </div>
      </div>

    </div><!-- ~ .app -->

    <div ui-yield-to="modals"></div>
  </body>
</html>