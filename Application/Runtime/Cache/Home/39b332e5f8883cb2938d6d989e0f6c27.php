<?php if (!defined('THINK_PATH')) exit();?>
                <!-- ngView: undefined --><div class="scrollable ng-scope" style="padding-top: 52px; ">
    <div class="scrollable-header section" style="padding:0;">
        

<div class="container" style="background-color:#2C2C2C;color:white;">
<!-- #f5f5f5 -->
    <div class="row">
            <div class="col-xs-4" style="padding: 2px 1px 2px 0;">
                <div class="btn btn-block" ng-click="changeGoods('AG', 2)" style="padding:0; line-height:24px;">
                    <div style="font-size:12px; ">纪念银币</div>
                    <div class="btn-hq btn-hq-up" style="font-size:18px;" goods-hq="AG">4218.00 <i class="fa fa-long-arrow-up"></i></div>
                </div>
                <div ng-style="selectGoodsButtonStyles['AG']" style="border: 1px solid rgb(163, 133, 95); margin-top: 0px; "></div>
            </div>
            <div class="col-xs-4" style="padding: 2px 1px 2px 1px;">
                <div class="btn btn-block" ng-click="changeGoods('FU', 4)" style="padding: 0; line-height:24px;">
                    <div style="font-size:12px;">成品琥珀</div>
                    <div class="btn-hq btn-hq-up" style="font-size:18px;" goods-hq="FU">320.08 <i class="fa fa-long-arrow-down"></i>
                    
                    </div>
                </div>
                <div ng-style="selectGoodsButtonStyles['FU']" style="margin-top: 0px; "></div>
            </div>
            <div class="col-xs-4" style="padding: 2px 0 2px 1px;">
                <div class="btn btn-block" ng-click="changeGoods('CU', 6)" style="padding: 0; line-height:24px;">
                    <div style="font-size:12px;">毛主席纪念铜章</div>
                    <div class="btn-hq btn-hq-up" style="font-size:18px;" goods-hq="CU">32389.00 <i class="fa fa-long-arrow-up"></i></div>
                </div>
                <div ng-style="selectGoodsButtonStyles['CU']" style="margin-top: 0px; "></div>
            </div>

    </div>
</div>

    </div>

    <div class="scrollable-content section overthrow" style="padding:3px 8px;background-color:#2C2C2C;color:white">
        




<div class="panel">
    <div class="panel-body">
        <input id="hqChartUrl" type="hidden" value="http://hq.gz.1251923837.clb.myqcloud.com/ZhongJiang/HQ" class="needsclick">

        <div style="height:325px;">
            <iframe id="hqIframe" style="width:100%;height:100%;border:none;" scrolling="no" src="http://hq.gz.1251923837.clb.myqcloud.com/ZhongJiang/HQ?goodsCode=AG&amp;lineType=1"></iframe>
        </div>
		<div style="width:100%">
		
			 <?php if(is_array($yin)): $i = 0; $__LIST__ = $yin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$yvo): $mod = ($i % 2 );++$i;?><div style="text-align:center;color:black;border:1px #E8E8E8 solid;height:50px;margin-top:8px">
					
					<div style="float:left;width:25%;border:1px #E8E8E8 solid;height:48px;background:#F2F7F2;line-height:50px;color:#CD0000" ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($yvo["pid"]); ?>, 1,<?php echo ($yvo["uprice"]); ?>,'<?php echo ($yvo["ptitle"]); ?>')" class="zhang">买涨&nbsp;&nbsp;<i class="fa fa-long-arrow-up"></i></div>
					
					<div style="float:left;margin-top:2px;margin-left:4px;">
					<?php echo ($yvo["ptitle"]); ?> &nbsp;&nbsp;<text style="#E8E8E8;font-size:10px;color:#DEDBDB">波动盈亏<?php echo ($yvo["wave"]); ?>元</text><br>
					<div style="float:left;clear:left;margin-top:4px;margin-left:4px;color:#D7B983"><?php echo ($yvo["uprice"]); ?>元/每手</div>
					</div>
					<div style="float:right;width:25%;border:1px #E8E8E8 solid;height:48px;background:#F2F7F2;line-height:50px;color:#0C670C" ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($yvo["pid"]); ?>, 2,<?php echo ($yvo["uprice"]); ?>,'<?php echo ($yvo["ptitle"]); ?>')"  class="zhang" >买跌&nbsp;&nbsp;<i class="fa fa-long-arrow-down"></i></div>
					 
				</div><?php endforeach; endif; else: echo "" ;endif; ?>  
		  <?php if(is_array($you)): $i = 0; $__LIST__ = $you;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="text-align:center;color:black;border:1px #E8E8E8 solid;height:50px;margin-top:8px">
					
					<div style="float:left;width:25%;border:1px #E8E8E8 solid;height:48px;background:#F2F7F2;line-height:50px;color:#CD0000" ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($vo["pid"]); ?>, 1,<?php echo ($vo["uprice"]); ?>,'<?php echo ($vo["ptitle"]); ?>')" >买涨&nbsp;&nbsp;<i class="fa fa-long-arrow-up"></i></div>
					<div style="float:left;margin-top:2px;margin-left:4px;">
					<?php echo ($vo["ptitle"]); ?> &nbsp;&nbsp;<text style="#E8E8E8;font-size:10px;color:#DEDBDB">波动盈亏<?php echo ($vo["wave"]); ?>元</text><br>
					<div style="float:left;clear:left;margin-top:4px;margin-left:4px;color:#D7B983"><?php echo ($vo["uprice"]); ?>元/每手</div>
					</div>
					<div style="float:right;width:25%;border:1px #E8E8E8 solid;height:48px;background:#F2F7F2;line-height:50px;color:#0C670C" ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($vo["pid"]); ?>, 2,<?php echo ($vo["uprice"]); ?>,'<?php echo ($vo["ptitle"]); ?>')" >买跌&nbsp;&nbsp;<i class="fa fa-long-arrow-down"></i></div>
					 
				</div><?php endforeach; endif; else: echo "" ;endif; ?>  
		  <?php if(is_array($tong)): $i = 0; $__LIST__ = $tong;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tvo): $mod = ($i % 2 );++$i;?><div style="text-align:center;color:black;border:1px #E8E8E8 solid;height:50px;margin-top:8px">
					
					<div style="float:left;width:25%;border:1px #E8E8E8 solid;height:48px;background:#F2F7F2;line-height:60px;color:#CD0000" ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($tvo["pid"]); ?>, 1,<?php echo ($tvo["uprice"]); ?>,'<?php echo ($tvo["ptitle"]); ?>')" >买涨&nbsp;&nbsp;<i class="fa fa-long-arrow-up"></i></div>
					<div style="float:left;margin-top:2px;margin-left:4px;">
					<?php echo ($tvo["ptitle"]); ?> &nbsp;&nbsp;<text style="#E8E8E8;font-size:10px;color:#DEDBDB">波动盈亏<?php echo ($tvo["wave"]); ?>元</text><br>
					<div style="float:left;clear:left;margin-top:4px;margin-left:4px;color:#D7B983"><?php echo ($tvo["uprice"]); ?>元/每手</div>
					</div>
					<div style="float:right;width:25%;border:1px #E8E8E8 solid;height:48px;background:#F2F7F2;line-height:50px;color:#0C670C" ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($tvo["pid"]); ?>, 2,<?php echo ($tvo["uprice"]); ?>,'<?php echo ($tvo["ptitle"]); ?>')" >买跌&nbsp;&nbsp;<i class="fa fa-long-arrow-down"></i></div>
					 
				</div><?php endforeach; endif; else: echo "" ;endif; ?>  
		</table>
		
		</div>
     <!-- <!--  <div class="swiper-container swiper-container-horizontal swiper-container-android" style="margin:15px 0 0 0;" ng-init="swiperSlideCount=8">
            <div class="swiper-wrapper" style="height: 140px; -webkit-transform: translate3d(-343px, 0px, 0px); -webkit-transition: 0ms; ">
           <?php if(is_array($yin)): $i = 0; $__LIST__ = $yin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$yvo): $mod = ($i % 2 );++$i;?><div class="swiper-slide swiper-slide-active" data-transactiongoodsid="1" data-transactiongoodscode="AG" style="overflow: hidden; border: rgb(215, 185, 131); width: 166.5px; margin-right: 5px; " data-swiper-slide-index="0">
                    <table style="margin: 2px 0 0 0; width:100.5%;">
                        <tbody><tr style="font-size:16px;line-height:24px;color:#D7B983;">
                            <td colspan="3" style="font-weight:700;"><?php echo ($yvo["uprice"]); ?>元/手</td>
                        </tr>
                        <tr style="font-size:12px;line-height:20px;">
                            <td colspan="3"><?php echo ($yvo["ptitle"]); ?></td>
                        </tr>
                        <tr style="font-size:12px;line-height:22px;color:#ccc;">
                            <td colspan="3">波动盈亏： <?php echo ($yvo["wave"]); ?> 元</td>
                        </tr>
                           <?php if($yvo['pid'] == $yin1): ?><tr style="line-height:30px;background-color:#CD0000; color:#fff;">
                        
                                <td ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($yvo["pid"]); ?>, 1,<?php echo ($yvo["uprice"]); ?>)" style="width:50%;border-bottom-left-radius:8px;">
                               买涨 <i class="fa fa-long-arrow-up"></i>
                                </td>
                                <td>
                                    <div class="x1"></div>
                                </td>
                                <td ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($yvo["pid"]); ?>, 2,<?php echo ($yvo["uprice"]); ?>)" style="width:50%;border-bottom-right-radius:8px;">
                                    买跌 <i class="fa fa-long-arrow-down"></i>
                                </td>
                            </tr>
                        
                        
                        <?php else: ?>
                        
                            <tr style="line-height:30px;background-color:#D7B983; color:#fff;">
                                <td ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($yvo["pid"]); ?>, 1,<?php echo ($yvo["uprice"]); ?>)" style="width:50%;border-bottom-left-radius:8px;">
                                    买涨 <i class="fa fa-long-arrow-up"></i>
                                </td>
                                <td>
                                    <div class="x"></div>
                                </td>
                                <td ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($yvo["pid"]); ?>, 2,<?php echo ($yvo["uprice"]); ?>)" style="width:50%;border-bottom-right-radius:8px;">
                                    买跌 <i class="fa fa-long-arrow-down"></i>
                                </td>
                            </tr><?php endif; ?>
                    </tbody></table>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>  
            <?php if(is_array($you)): $i = 0; $__LIST__ = $you;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="swiper-slide" data-transactiongoodsid="5" data-transactiongoodscode="FU" style="overflow: hidden; border: rgb(215, 185, 131); width: 166.5px; margin-right: 5px; " data-swiper-slide-index="4">
                    <table style="margin: 2px 0 0 0; width:100.5%;">
                        <tbody><tr style="font-size:16px;line-height:24px;color:#D7B983;">
                            <td colspan="3" style="font-weight:700;"><?php echo ($vo["uprice"]); ?>元/手</td>
                        </tr>
                        <tr style="font-size:12px;line-height:20px;">
                            <td colspan="3"><?php echo ($vo["ptitle"]); ?></td>
                        </tr>
                        <tr style="font-size:12px;line-height:22px;color:#ccc;">
                            <td colspan="3">波动盈亏： <?php echo ($vo["wave"]); ?> 元</td>
                        </tr>
                        <?php if($vo['pid'] == $you1): ?><tr style="line-height:30px;background-color:#CD0000; color:#fff;">
                        
                                <td ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($vo["pid"]); ?>, 1,<?php echo ($vo["uprice"]); ?>)" style="width:50%;border-bottom-left-radius:8px;">
                                  买涨 <i class="fa fa-long-arrow-up"></i>
                                </td>
                                <td>
                                    <div class="x1"></div>
                                </td>
                                <td ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($vo["pid"]); ?>, 2,<?php echo ($vo["uprice"]); ?>)" style="width:50%;border-bottom-right-radius:8px;">
                                    买跌 <i class="fa fa-long-arrow-down"></i>
                                </td>
                            </tr>
                        
                        
                        <?php else: ?>
                        
                            <tr style="line-height:30px;background-color:#D7B983; color:#fff;">
                                <td ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($vo["pid"]); ?>, 1,<?php echo ($vo["uprice"]); ?>)" style="width:50%;border-bottom-left-radius:8px;">
                                   买涨 <i class="fa fa-long-arrow-up"></i>
                                </td>
                                <td>
                                    <div class="x"></div>
                                </td>
                                <td ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($vo["pid"]); ?>, 2,<?php echo ($vo["uprice"]); ?>)" style="width:50%;border-bottom-right-radius:8px;">
                                    买跌 <i class="fa fa-long-arrow-down"></i>
                                </td>
                            </tr><?php endif; ?>
                    </tbody></table>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
              
                 <?php if(is_array($tong)): $i = 0; $__LIST__ = $tong;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tvo): $mod = ($i % 2 );++$i;?><div class="swiper-slide" data-transactiongoodsid="7" data-transactiongoodscode="CU" style="overflow: hidden; border: rgb(215, 185, 131); width: 166.5px; margin-right: 5px; " data-swiper-slide-index="6">
                    <table style="margin: 2px 0 0 0; width:100.5%;">
                        <tbody><tr style="font-size:16px;line-height:24px;color:#D7B983;">
                            <td colspan="3" style="font-weight:700;"><?php echo ($tvo["uprice"]); ?>元/手</td>
                        </tr>
                        <tr style="font-size:12px;line-height:20px;">
                            <td colspan="3"><?php echo ($tvo["ptitle"]); ?></td>
                        </tr>
                        <tr style="font-size:12px;line-height:22px;color:#ccc;">
                            <td colspan="3">波动盈亏： <?php echo ($tvo["wave"]); ?> 元</td>
                        </tr>
                           <?php if($tvo['pid'] == $tong1): ?><tr style="line-height:30px;background-color:#CD0000; color:#fff;">
                        
                                <td ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($tvo["pid"]); ?>, 1,<?php echo ($tvo["uprice"]); ?>)" style="width:50%;border-bottom-left-radius:8px;">
                          买涨 <i class="fa fa-long-arrow-up"></i>
                                </td>
                                <td>
                                    <div class="x1"></div>
                                </td>
                                <td ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($tvo["pid"]); ?>, 2,<?php echo ($tvo["uprice"]); ?>)" style="width:50%;border-bottom-right-radius:8px;">
                                    买跌 <i class="fa fa-long-arrow-down"></i>
                                </td>
                            </tr>
                        
                        
                        <?php else: ?>
                        
                            <tr style="line-height:30px;background-color:#D7B983; color:#fff;">
                                <td ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($tvo["pid"]); ?>, 1,<?php echo ($tvo["uprice"]); ?>)" style="width:50%;border-bottom-left-radius:8px;">
                                    买涨 <i class="fa fa-long-arrow-up"></i>
                                </td>
                                <td>
                                    <div class="x"></div>
                                </td>
                                <td ui-turn-on="modalBuy" ng-click="setBuyTransactionGoods(<?php echo ($tvo["pid"]); ?>, 2,<?php echo ($tvo["uprice"]); ?>)" style="width:50%;border-bottom-right-radius:8px;">
                                    买跌 <i class="fa fa-long-arrow-down"></i>
                                </td>
                            </tr><?php endif; ?>
                    </tbody></table>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
           
               </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
        </div> --> 
		</div>
</div>




    </div>
<div ui-content-for="modals">
    <!-- uiIf: modalBuy -->
<div class="modal ng-scope" ui-if="modalBuy" ui-state="modalBuy" style="padding-top: 90px;" >
    <div class="modal-backdrop in"></div>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="padding: 10px;">
                <button class="close fa fa-close" ui-turn-off="modalBuy"></button>
                <h4 class="modal-title ng-binding"><span ng-bind="vm.ptitle"></span> <span ng-bind="vm.Type">123</span> 手续费:<span>0</span></h4>
            </div>
            <div class="modal-body" style="padding-top: 5px; padding-bottom: 0;">
                <form name="BuyTransactionForm" role="form" class="ng-pristine ng-valid ng-valid-parse ng-valid-maxlength">
                    <input name="BuyType" type="hidden" ng-model="vm.BuyType" class="ng-pristine ng-untouched ng-valid needsclick">
                    <input name="TransactionGoodsId" type="hidden" ng-model="vm.TransactionGoods.Id" class="ng-pristine ng-untouched ng-valid needsclick">
                    <input name="AmountType" type="hidden" ng-model="vm.TransactionGoods.AmountType" class="ng-pristine ng-untouched ng-valid needsclick">
                    <div>
                        <div class="row field-row">
                            <div class="col-xs-4 field-label">
                                <label class="control-label" for="buyTransaction_StopProfit">止盈（%）</label>
                            </div>
                            <div class="col-xs-2 field">
                                <div class="btn btn-block btn-primary fa fa-minus" ng-click="increase(vm, 'StopProfit', -10, 0, 90)"></div>
                            </div>
                            <div class="col-xs-3 field ng-isolate-scope" focus-input="">
                                <input class="form-control ng-pristine ng-untouched ng-valid needsclick ng-valid-parse ng-valid-maxlength" ng-model="vm.StopProfit" id="buyTransaction_StopProfit" name="StopProfit" type="text" value="0" maxlength="2" style="text-align:center;">
                            </div>
                            <div class="col-xs-2 field">
                                <div class="btn btn-block btn-primary fa fa-plus" ng-click="increase(vm, 'StopProfit', 10, 0, 90)"></div>
                            </div>
                        </div>
                        <div class="row field-row">
                            <div class="col-xs-4 field-label">
                                <label class="control-label" for="buyTransaction_StopDeficit">止损（%）</label>
                            </div>
                            <div class="col-xs-2 field">
                                <div class="btn btn-block btn-primary fa fa-minus" ng-click="increase(vm, 'StopDeficit', -10, 0, 60)"></div>
                            </div>
                            <div class="col-xs-3 field ng-isolate-scope" focus-input="">
                                <input class="form-control ng-pristine ng-untouched ng-valid needsclick ng-valid-parse ng-valid-maxlength" ng-model="vm.StopDeficit" id="buyTransaction_StopDeficit" name="StopDeficit" type="text" value="0" maxlength="2" style="text-align:center;">
                            </div>
                            <div class="col-xs-2 field">
                                <div class="btn btn-block btn-primary fa fa-plus" ng-click="increase(vm, 'StopDeficit', 10, 0, 60)"></div>
                            </div>
                        </div>
                        <div class="row field-row">
                            <div class="col-xs-4 field-label">
                                <label class="control-label" for="buyTransaction_BuyNumber">购买数量</label>
                            </div>
                            <div class="col-xs-2 field">
                                <div class="btn btn-block btn-primary fa fa-minus" ng-click="increase(vm, 'BuyNumber', -1, 1, vm.TransactionGoods.MaxStorageNumber)"></div>
                            </div>
                            <div class="col-xs-3 field ng-isolate-scope" focus-input="">
                                <input class="form-control ng-pristine ng-untouched ng-valid needsclick ng-valid-parse ng-valid-maxlength" ng-model="vm.BuyNumber" ng-change="caculateBuyTransactionAmount()" id="buyTransaction_BuyNumber" name="BuyNumber" type="text" value="0" maxlength="2" style="text-align:center;">
                            </div>
                            <div class="col-xs-2 field">
                                <div class="btn btn-block btn-primary fa fa-plus" ng-click="increase(vm, 'BuyNumber', 1, 1, vm.TransactionGoods.MaxStorageNumber)"></div>
                            </div>
                        </div>
                        <div class="row field-row">
                            <div class="col-xs-4 field-label">
                                <label class="control-label">预付款</label>
                            </div>
                            <div class="col-xs-7 field">
                                <span class="form-control ng-binding" ng-bind="vm.PayAmount">0</span>
                            </div>
                        </div>
                        <div class="row field-row">
                            <div class="col-xs-4 field-label">
                                <label class="control-label">合同总价值</label>
                            </div>
							
                            <div class="col-xs-7 field">
                                <span class="form-control ng-binding" ng-bind="vm.TotalAmount">0</span>
                            </div>
                        </div>
                        <div class="row field-row">
                            <div class="col-xs-12">
                                <!-- ngRepeat: alert in alerts -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="padding-top: 8px; padding-bottom: 8px;">
                <button class="btn btn-primary btn-block" ng-click="buy()" ng-disabled="vm.PayAmount == 0 || btnBuyDisabled" type="button" disabled="disabled">确认订立合同</button>
            </div>
        </div>
    </div>
</div><!-- end uiIf: modalBuy -->
</div>
</div>