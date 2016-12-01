<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:55:"F:\wamp\www\tp\52/application/admin\view\menu\edit.html";i:1480580262;}*/ ?>
<div class="l-segment l-border-0 example-layout pageLayout">
    <form action="./menu/update" class="m-ajaxSubmit" callback='afterBack:afterBackTest'>
      <input type="hidden" name="main_id" value="<?php echo $menu['main_id']; ?>">
      <div class="l-row-padding">
    <div class="l-col-2 m-input">
        <label for="">id</label>
        <input value=<?php echo $menu['id']; ?> name='id' type="text" validate='required:true,maxlength:20'>
    </div>
    <div class="l-col-2 m-input">
        <label for="">自动刷新</label>
        <input type="text" value="<?php echo $menu['autoRefresh']; ?>" name="autoRefresh">
    </div>
    <div class="l-col-2 m-input">
        <label for="">标题</label>
        <input name='title' type="text" validate='required:true,maxlength:20' value="<?php echo $menu['title']; ?>">
    </div>
    <div class="l-col-2 m-input">
        <label for="">图标</label>
        <input type="text" name="ico" value="<?php echo $menu['ico']; ?>">
    </div>
    <div class="l-col-2 m-input">
        <label for="">地址</label>
        <input name='url' type="text" validate='required:true' value="<?php echo $menu['url']; ?>">
    </div>
    <div class="l-col-2 m-input">
        <label for="">是否固定</label>
        <input type="text" name="fixed" value="<?php echo $menu['fixed']; ?>">
    </div>
</div>
<div class="l-row-padding">
    <div class="l-col-1 m-input l-ml-10">
        <input type="submit" value="提交" class="m-button m-submit">
    </div>
    <div class="l-col-1 m-input">
        <input type="reset" value="重置" class="m-button-default m-reset">
    </div>
</div>
</form>
</div>
<script>
function afterBackTest(_dd){
console.info('这里是自定义成功回调'+_dd);
}
</script>
