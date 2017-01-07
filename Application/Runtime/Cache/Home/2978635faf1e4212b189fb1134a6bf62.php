<?php if (!defined('THINK_PATH')) exit();?>
                <!-- ngView: undefined -->

<div class="scrollable ng-scope" style="padding-top: 6px; ">
    <div class="scrollable-header section" style="padding:3px 8px">
        
    </div>

    <div class="scrollable-content section overthrow" style="padding:3px 8px">
        <div class="panel">
    <div class="panel-heading">交易历史</div>
    <div class="panel-body" style="font-size:12px;padding: 8px 0">
        <table class="table table-condensed">
            <tbody><tr>
                <td style="text-align:center;width:33.3%;">
                    <label class="control-label">总单数</label>
                    <span class="form-control"><?php echo ($trading["count"]); ?></span>
                </td>
                <td style="text-align:center;width:33.3%;">
                    <label class="control-label">总手数</label>
                    <span class="form-control"><?php echo ($trading["onumber"]); ?></span>
                </td>
                <td style="text-align:center;width:33.3%;">
                    <label class="control-label">总盈亏</label>
                    <span class="form-control" style="color:#CD0000;">
                     <?php if($trading["money"] > 0): ?>+<?php echo (round($trading["money"],2)); else: ?>
          <?php echo (round($trading["money"],2)); endif; ?>
                    </span>
                </td>
            </tr>
        </tbody></table>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><table class="table table-condensed table-striped">
			<tr>
				<td rowspan='2' class='middle'><?php echo (date('Y-m-d',$vo["selltime"])); ?></td>
				<td><?php echo ($vo["ptitle"]); ?> </td>
				<td rowspan='2' class='red middle'>
				 <?php if($vo['ploss'] > 0): ?>+
                        <?php echo ($vo['ploss']); else: ?>
                         <?php echo ($vo['ploss']); endif; ?>
				</td>
			</tr>
			<tr>
				<td><?php echo ($vo["onumber"]); ?> 手 <span class='red'>买 <?php if($vo["ostyle"] == 1): ?>跌<?php else: ?>涨<?php endif; ?></span></td>
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