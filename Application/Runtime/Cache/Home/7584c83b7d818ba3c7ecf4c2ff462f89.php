<?php if (!defined('THINK_PATH')) exit();?>
                <!-- ngView: undefined -->

<div class="scrollable ng-scope" style="padding-top: 6px; ">
    <div class="scrollable-header section" style="padding:3px 8px">
        
    </div>

    <div class="scrollable-content section overthrow" style="padding:3px 8px">
        <div class="panel">
    <div class="panel-heading">收支明细</div>
    <div class="panel-body" style="font-size:12px;padding: 8px 0">
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><table class="table table-condensed table-striped">
        	<tr>
				<td class='title'>交易号：</td>
				<td colspan='3'><?php echo ($vo["jno"]); ?></td>
			</tr>
			<tr>
				<td class='title'>余额：</td>
				<td colspan='3'><?php echo ($vo["balance"]); ?></td>
			</tr>
			<tr>
				<td  class='title'>类型：</td>
				<td>买入</td>
				<td  class='title'>金额：</td>
				<td class='green'> <?php if($vo["jtype"] == '建仓'): ?>-<?php echo ($vo["jincome"]); ?>
            <?php else: ?>
              +<?php echo ($vo["jincome"]); endif; ?></td>
			</tr>
			<tr>
				<td class='title'>商品：</td>
				<td><?php echo ($vo["jtype"]); ?>(<?php echo ($vo["remarks"]); ?> <?php echo ($vo["number"]); ?>手)</td>
				<td class='title'>时间：</td>
				<td><?php echo (date('Y-m-d H:i:s',$vo["jtime"])); ?></td>
			</tr>
        </table><?php endforeach; endif; else: echo "" ;endif; ?>
        <div style="padding-left: 8px;">
            <div class="btn-group">
            <?php for($i = 1;$i<=$pagecount;$i++){ ?>
<a class="btn btn-default btn-sm " ui-class="<?php if($py == $i){ ?>{'active':true}<?php } ?>" ng-click="pager(<?php echo $i; ?>)"><?php echo $i; ?></a>
<?php } ?>
</div>

        </div>
    </div>
</div>
    </div>

    
</div>