<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"F:\wamp\www\tp\52/application/admin\view\menu\index.html";i:1480663636;}*/ ?>
<div class="l-segment l-border-0 example-layout pageLayout">
    <form action="./menu/index.html" class="m-pageSubmit">
        <div class="l-row-padding">
            <div class="l-col-2 m-input">
                <label for="">输入项</label>
                <input type="text" name='name'>
            </div>
            <div class="l-col-2 m-input">
                <label for="">输入项</label>
                <input type="text" name='name'>
            </div>
            <div class="l-col-2 m-input">
                <label for="">输入项</label>
                <input type="text" name='name'>
            </div>
            <div class="l-col-1 m-input">
                <input type="submit" value="提交" class="m-button m-submit">
            </div>
            <div class="l-col-1 m-input">
                <input type="reset" value="重置" class="m-button-default m-reset">
            </div>
        </div>

    </form>
    <div class="m-gird">
        <div class="m-gridBar">
          <div class="l-row">
            <div class="l-col-1"><span class="m-button" layer='title:"菜单添加",url:"./menu/creat.html"' >添加</span></div>
            <div class="l-col-1"><span class="m-button" layer='title:"查看菜单",url:"./menu/edit.html",beforeAdd:global.beforeAdd_main_id'>编辑</span></div>
            <div class="l-col-1"><span class="m-button" layer='title:"查看菜单",url:"./menu/read.html",beforeAdd:global.beforeAdd_main_id'>查看</span></div>
            <div class="l-col-1"><span class="m-button" m-ajax='message:"确定要删除吗！",url:"./menu/delete.html",beforeBack:global.beforeBack_main_id'>删除</span></div>
          </div>
        </div>
        <div class="m-grid-head">
                      <table>
                <thead>
                    <tr>
                      <th width=4>编号</th>
                      <th select="select" width=10>
                        <input class='m-checkbox' type="checkbox" name="checkbox1" value="checkbox1">
                      </th>
                        <th width=10>id</th>
                        <th width=10>自动刷新</th>
                        <th width=10>标题</th>
                        <th width=10>图标</th>
                        <th width=10>url</th>
                        <th width=10>固定</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="m-grid-body m-scrollbar">
            <table>
                <tbody>
                  <?php if(is_array($menu) || $menu instanceof \think\Collection): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu_): $mod = ($i % 2 );++$i;?>
                  <tr data-id='<?php echo $menu_['main_id']; ?>'>
                    <td><?php echo $key+1; ?></td>
                    <td select="select">
                      <input class='m-checkbox' type="checkbox" name="main_id" value="<?php echo $menu_['main_id']; ?>">
                    </td>
                    <td><?php echo $menu_['id']; ?></td>
                    <td><?php echo $menu_['autoRefresh']; ?></td>
                    <td><?php echo $menu_['title']; ?></td>
                    <td><?php echo $menu_['ico']; ?></td>
                    <td><?php echo $menu_['url']; ?></td>
                    <td><?php echo $menu_['fixed']; ?></td>
                </tr>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="m-pageBar" page-total=300 page-now=1 page-length=30 data-total=9000></div>
</div>
<script type="text/javascript">

seajs.use(["zxl/grid","zxl/global","zxl/msg"], function (grid,global,msg) {
  // console.info('grid');
  // console.info('global');
  // 查看、编辑前回调
  global.beforeAdd_main_id=function (_options,_$this){
    var $select=grid.getSelect(_$this.closest('.m-gird').find('.m-grid-body'));
    // console.info(_options);
    // console.info(_$this);
if($select.length==0){
  msg.alert('请选择要查看的行！');
return false;
}else{
  _options.data.main_id=$select.first().val();
  return true;
  }
}
// 删除前回调
global.beforeBack_main_id=function(_options,_$this){
  var $select=grid.getSelect(_$this.closest('.m-gird').find('.m-grid-body'));
  if($select.length==0){
    msg.alert('请选择要删除的数据！');
  return false;
  }else{
    var main_id=[];
    $select.each(function(i,e){
      main_id+=$(this).val()+',';
    });
    _options.data.main_id=main_id;
    return true;
    }
}
});


</script>
