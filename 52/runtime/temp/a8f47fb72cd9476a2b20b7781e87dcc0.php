<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"F:\wamp\www\tp\52/application/admin\view\menu\creat.html";i:1480558979;}*/ ?>
<div class="l-segment l-border-0 example-layout pageLayout">
    <form action="./menu/save" class="m-ajaxSubmit" callback='afterBack:afterBackTest'>
      <div class="l-row-padding">
    <div class="l-col-2 m-input">
        <label for="">id</label>
        <input name='id' type="text" validate='required:true,maxlength:20'>
    </div>
    <div class="l-col-2 m-input">
        <label for="">自动刷新</label>
        <input type="text">
    </div>
    <div class="l-col-2 m-input">
        <label for="">标题</label>
        <input name='title' type="text" validate='required:true,maxlength:20'>
    </div>
    <div class="l-col-2 m-input">
        <label for="">图标</label>
        <input type="text">
    </div>
    <div class="l-col-2 m-input">
        <label for="">地址</label>
        <input name='url' type="text" validate='required:true'>
    </div>
    <div class="l-col-2 m-input">
        <label for="">是否固定</label>
        <input type="text">
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
