<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>中轩国际外汇首页</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-status-bar-style" content="yes" />
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="/css/mobile-angular-ui-hover.min.css" />
    <link rel="stylesheet" href="/css/mobile-angular-ui-base.min.css" />
    <link rel="stylesheet" href="/css/swiper.min.css" />
    <link rel="stylesheet" href="/css/app.css" />
	<script src="/js/jquery-1.7.1.min.js"></script>

    <script src="/js/angular.min.js"></script>
    <script src="/js/angular-route.min.js"></script>
    <script src="/js/mobile-angular-ui.min.js"></script>
    <script src="/js/mobile-angular-ui.gestures.min.js"></script>
    <script src="/js/swiper.min.js"></script>
    
    <script src="/js/all.js"></script>
	<script>
	$('.zhang').click(function(){
	alert(123)
	})
	</script>
</head>
<body id="weipan"
      ng-app="weipan"
      ng-controller="startupController"
      ui-prevent-touchmove-defaults
      get-transaction-goods>

    <div class="app">
        <div class="navbar navbar-app navbar-absolute-top" style="background-color:#D7B983;">
            <div class="btn-group pull-left">
                <img src='<?php echo ($user["portrait"]); ?>' class="img-circle" style="width: 44px; height:44px; margin: 3px 3px 3px 5px; border:1px solid #CCC;" />
            </div>
            <div class="btn-group pull-right">
                <div style="line-height:50px;color:#fff;">
                    <span style="height:20px;line-height:18px; font-size:12px;">个人资产：</span>
                    <span style="height:20px;line-height:18px; font-size:12px;" ><?php echo ($user["price"]); ?></span>
                    <span style="height:20px;line-height:18px; font-size:12px;">元</span>
                    <a href="#/deposit" class="btn btn-xs btn-primary" style="color:#fff; line-height: 22px; width:48px;margin-right:8px; background-color:#CD0000;">充值</a>
                </div>
            </div>
        </div>
        <div class="navbar navbar-app navbar-absolute-bottom">
            <div class="btn-group justified">
                <a href="#/home" class="btn btn-default btn-navbar"><i class="fa fa-home fa-2x"></i><div class="btn-navbar-bottom-text">首页</div></a>
                <a href="#/myBuyTransactions" class="btn btn-default btn-navbar"><i class="fa fa-inbox fa-2x"></i><div class="btn-navbar-bottom-text">持仓</div></a>
                <a href="#/my" class="btn btn-default btn-navbar"><i class="fa fa-user fa-2x"></i><div class="btn-navbar-bottom-text">我的</div></a>
            </div>
        </div>
        <!-- App Body -->
        <div class="app-body" ng-class="{loading: loading}">
            <div ng-show="loading" class="app-content-loading">
                <i class="fa fa-spinner fa-spin loading-spinner"></i>
            </div>
            <div class="app-content">
                <ng-view>
                </ng-view>
            </div>
        </div>

    </div><!-- ~ .app -->

    <div ui-yield-to="modals"></div>
	
	<!-- uiIf: modalTransactionPassword -->
    <div class="modal"  ui-if='modalTransactionPassword' ui-state='modalTransactionPassword' style="padding-top: 90px; hide">
        <div class="modal-backdrop in"></div>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">输入交易密码</h4>
                </div>
                <div class="modal-body container">
                    <div class="row">
                        <div class="col-xs-12" focus-input>
                            <input ng-model="vm.TransactionPassword.TransactionPassword" type="password" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 field-label" focus-input>
                            <a class="btn btn-sm" href="#/forgetPassword" style="font-size:12px; color:#D7B983;">忘记交易密码</a>
                        </div>
                    </div>
                    <div role="alert" class="alert alert-dismissible alert-{{alert.type}}" ng-repeat="alert in alerts">
<button aria-label="Close" data-dismiss="alert" ng-click="alert.close()" class="close" type="button"><span aria-hidden="true" >×</span></button>
    <span style="white-space: pre;" ng-bind= "alert.msg" ></span>
</div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-block" ng-click="checkTransactionPassword()">确认</button>
                </div>
            </div>
        </div>
    </div>
	<!-- end uiIf: modalTransactionPassword -->
</body>
</html>