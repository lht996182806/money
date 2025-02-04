<?php if (!defined('THINK_PATH')) exit();?>
                <!-- ngView: undefined -->

<div class="scrollable ng-scope" style="padding-top: 6px; ">
    <div class="scrollable-header section" style="padding:3px 8px">
        
    </div>

    <div class="scrollable-content section overthrow" style="padding:3px 8px">

<form id="DepositForm" class="ng-pristine ng-valid" method="post" action="<?php echo U('User/recharge');?>"> 
    <label class="control-label">充值金额（最小充值金额50元）</label>
    <div class="container">
        <div class="row field-row">
            <div class="col-xs-6 btn-group">
                <div class="btn btn-default btn-block" ng-click="changeDepositAmount(50)" ng-class="{ 'active' : vm.DepositAmount == 50 }" ui-exclusion-group="depositAmount" ui-class="{'active': amount_50 }" ui-state="amount_50" ui-turn-on="amount_50">
                    <span>5</span><span>0</span>
                </div>
            </div>
            <div class="col-xs-6 btn-group">
                <div class="btn btn-default btn-block" ng-click="changeDepositAmount(500)" ng-class="{ 'active' : vm.DepositAmount == 500 }" ui-exclusion-group="depositAmount" ui-class="{'active': amount_500 }" ui-state="amount_500" ui-turn-on="amount_500">
                    <span>5</span><span>0</span><span>0</span>
                </div>
            </div>
        </div>
        <div class="row field-row">
            <div class="col-xs-6 btn-group">
                <div class="btn btn-default btn-block" ng-click="changeDepositAmount(1000)" ng-class="{ 'active' : vm.DepositAmount == 1000 }" ui-exclusion-group="depositAmount" ui-class="{'active': amount_1000 }" ui-state="amount_1000" ui-turn-on="amount_1000">
                    <span>1</span><span>0</span><span>0</span><span>0</span>
                </div>
            </div>
            <div class="col-xs-6 btn-group">
                <div class="btn btn-default btn-block" ng-click="changeDepositAmount(5000)" ng-class="{ 'active' : vm.DepositAmount == 5000 }" ui-exclusion-group="depositAmount" ui-class="{'active': amount_5000 }" ui-state="amount_5000" ui-turn-on="amount_5000">
                    <span>5</span><span>0</span><span>0</span><span>0</span>
                </div>
            </div>
        </div>
        <div class="row field-row">
            <div class="col-xs-6 btn-group">
                <div class="btn btn-default btn-block active" ng-click="changeDepositAmount(0)" ng-class="{ 'active' : vm.DepositAmount != 50 &amp;&amp; vm.DepositAmount != 500 &amp;&amp; vm.DepositAmount != 1000 &amp;&amp; vm.DepositAmount != 5000 }" ui-exclusion-group="depositAmount" ui-class="{'active': amount_other }" ui-state="amount_other" ui-turn-on="amount_other">其他</div>
            </div>
            <div class="col-xs-6 ng-isolate-scope" focus-input="">
                <input id="DepositAmount" type="text" class="form-control ng-pristine ng-untouched ng-valid needsclick" name="tfee1" ng-model="vm.DepositAmount">
            </div>
        </div>
    </div>
    <!-- <label class="control-label">充值方式</label>-->
    <div class="container">
       <!--  <div class="row field-row">
            <div class="col-xs-6 btn-group">
                <button class="btn btn-default btn-block active" ng-click="changeChannel(1)" ng-class="{ 'active' : vm.Channel == 1 }" ui-exclusion-group="channel" ui-class="{'active': unionPay }" ui-state="unionPay" ui-turn-on="unionPay">银联充值</button>
            </div>
            <div class="col-xs-6 btn-group">
                <button class="btn btn-default btn-block" ng-click="changeChannel(4)" ng-class="{ 'active' : vm.Channel == 4 }" ui-exclusion-group="channel" ui-class="{'active': weixinPay }" ui-state="weixinPay" ui-turn-on="weixinPay">微信充值</button>
            </div>
        </div> -->
        <div class="row field-row">
            <!-- ngRepeat: alert in alerts -->
        </div>
        <div class="row">
            <button class="btn btn-primary btn-block" ng-click="deposit()" ng-disabled="btnDepositDisabled" type="button">提交充值</button>
        </div>
    </div>
</form>

<form id="DepositForms" style="display:none" class="ng-pristine ng-valid" method="post" action="http://www.520jpj.com/Extend/weipay/jsapi.php">
    <label class="control-label">充值金额（最小充值金额50元）</label>
    <div class="container">
        <div class="row field-row">
            <div class="col-xs-6 btn-group">
                <div class="btn btn-default btn-block" ng-click="changeDepositAmount(50)" ng-class="{ 'active' : vm.DepositAmount == 50 }" ui-exclusion-group="depositAmount" ui-class="{'active': amount_50 }" ui-state="amount_50" ui-turn-on="amount_50">
                    <span>5</span><span>0</span>
                </div>
            </div>
            <div class="col-xs-6 btn-group">
                <div class="btn btn-default btn-block" ng-click="changeDepositAmount(500)" ng-class="{ 'active' : vm.DepositAmount == 500 }" ui-exclusion-group="depositAmount" ui-class="{'active': amount_500 }" ui-state="amount_500" ui-turn-on="amount_500">
                    <span>5</span><span>0</span><span>0</span>
                </div>
            </div>
        </div>
        <div class="row field-row">
            <div class="col-xs-6 btn-group">
                <div class="btn btn-default btn-block" ng-click="changeDepositAmount(1000)" ng-class="{ 'active' : vm.DepositAmount == 1000 }" ui-exclusion-group="depositAmount" ui-class="{'active': amount_1000 }" ui-state="amount_1000" ui-turn-on="amount_1000">
                    <span>1</span><span>0</span><span>0</span><span>0</span>
                </div>
            </div>
            <div class="col-xs-6 btn-group">
                <div class="btn btn-default btn-block" ng-click="changeDepositAmount(5000)" ng-class="{ 'active' : vm.DepositAmount == 5000 }" ui-exclusion-group="depositAmount" ui-class="{'active': amount_5000 }" ui-state="amount_5000" ui-turn-on="amount_5000">
                    <span>5</span><span>0</span><span>0</span><span>0</span>
                </div>
            </div>
        </div>
        <div class="row field-row">
            <div class="col-xs-6 btn-group">
                <div class="btn btn-default btn-block active" ng-click="changeDepositAmount(0)" ng-class="{ 'active' : vm.DepositAmount != 50 &amp;&amp; vm.DepositAmount != 500 &amp;&amp; vm.DepositAmount != 1000 &amp;&amp; vm.DepositAmount != 5000 }" ui-exclusion-group="depositAmount" ui-class="{'active': amount_other }" ui-state="amount_other" ui-turn-on="amount_other">其他</div>
            </div>
            <div class="col-xs-6 ng-isolate-scope" focus-input="">
                <input id="DepositAmount" type="text" class="form-control ng-pristine ng-untouched ng-valid needsclick" value="<?php echo ($balc["bpprice"]); ?>" name="tfee" ng-model="vm.DepositAmount">
            </div>
        </div>
    </div>
    <!-- <label class="control-label">充值方式</label>-->
    <div class="container">
       <!--  <div class="row field-row">
            <div class="col-xs-6 btn-group">
                <button class="btn btn-default btn-block active" ng-click="changeChannel(1)" ng-class="{ 'active' : vm.Channel == 1 }" ui-exclusion-group="channel" ui-class="{'active': unionPay }" ui-state="unionPay" ui-turn-on="unionPay">银联充值</button>
            </div>
            <div class="col-xs-6 btn-group">
                <button class="btn btn-default btn-block" ng-click="changeChannel(4)" ng-class="{ 'active' : vm.Channel == 4 }" ui-exclusion-group="channel" ui-class="{'active': weixinPay }" ui-state="weixinPay" ui-turn-on="weixinPay">微信充值</button>
            </div>
        </div> -->
        <div class="row field-row">
            <!-- ngRepeat: alert in alerts -->
        </div>
        <div class="row">
        <input id="order_id" type="hidden"  name="order_id" value="<?php echo ($balc["bpno"]); ?>">
            <button class="btn btn-primary btn-block" ng-click="deposit()" ng-disabled="btnDepositDisabled" type="button">提交充值</button>
        </div>
    </div>
</form>




    </div>

    
</div>