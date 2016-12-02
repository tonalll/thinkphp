<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"F:\wamp\www\tp\52/application/admin\view\student\index.html";i:1480672869;}*/ ?>
<div class="l-segment l-border-0 example-layout pageLayout">
    <form action="./student/index.html" class="m-pageSubmit">
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
            <div class="l-col-1"><span class="m-button" layer='title:"菜单添加",url:"./student/creat.html"' >添加</span></div>
            <div class="l-col-1"><span class="m-button" layer='title:"查看菜单",url:"./student/edit.html",beforeAdd:global.beforeAdd_id'>编辑</span></div>
            <div class="l-col-1"><span class="m-button" layer='title:"查看菜单",url:"./student/read.html",beforeAdd:global.beforeAdd_id'>查看</span></div>
            <div class="l-col-1"><span class="m-button" m-ajax='message:"确定要删除吗！",url:"./student/delete.html",beforeBack:global.beforeBack_id'>删除</span></div>
          </div>
        </div>
        <div class="m-grid-head">
                      <table>
                <thead>
                    <tr>
                      <th width=4>序列号</th>
                      <th width=4>id</th>
                      <th width=8>学号</th>
                      <th select="select" width=10>
                        <input class='m-checkbox' type="checkbox" name="checkbox1" value="checkbox1">
                      </th>
                        <th width=10>姓名</th>
                        <th width=10>性别</th>
                        <th width=10>家庭住址</th>
                        <th width=10>身高</th>
                        <th width=10>生日</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="m-grid-body m-scrollbar">
            <table>
                <tbody>
                  <?php if(is_array($student) || $student instanceof \think\Collection): $i = 0; $__LIST__ = $student;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$student_): $mod = ($i % 2 );++$i;?>
                  <tr data-id='<?php echo $student_['id']; ?>'>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo $student_['id']; ?></td>
                    <td><?php echo $student_['sno']; ?></td>
                    <td select="select">
                      <input class='m-checkbox' type="checkbox" name="id" value="<?php echo $student_['id']; ?>">
                    </td>
                    <td><?php echo $student_['name']; ?></td>
                    <td><?php echo $student_['sex']; ?></td>
                    <td><?php echo $student_['address']; ?></td>
                    <td><?php echo $student_['height']; ?></td>
                    <td><?php echo $student_['birthday']; ?></td>
                </tr>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="m-pageBar" page-total=<?php echo $total['pageTotal']; ?> page-now=<?php echo $total['pageNow']; ?> page-length=<?php echo $total['pageLength']; ?> data-total=<?php echo $total['dataTotal']; ?>></div>
</div>
<script type="text/javascript">

seajs.use(["zxl/grid","zxl/global","zxl/msg"], function (grid,global,msg) {
  // console.info('grid');
  // console.info('global');
  // 查看、编辑前回调
  global.beforeAdd_id=function (_options,_$this){
    var $select=grid.getSelect(_$this.closest('.m-gird').find('.m-grid-body'));
    // console.info(_options);
    // console.info(_$this);
if($select.length==0){
  msg.alert('请选择要查看的行！');
return false;
}else{
  _options.data.id=$select.first().val();
  return true;
  }
}
// 删除前回调
global.beforeBack_id=function(_options,_$this){
  var $select=grid.getSelect(_$this.closest('.m-gird').find('.m-grid-body'));
  if($select.length==0){
    msg.alert('请选择要删除的数据！');
  return false;
  }else{
    var id=[];
    $select.each(function(i,e){
      id+=$(this).val()+',';
    });
    _options.data.id=id;
    return true;
    }
}
});


</script>
