<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"F:\wamp\www\tp\52/application/admin\view\student\creat.html";i:1480661199;}*/ ?>
<div class="l-segment l-border-0 example-layout pageLayout">
    <form action="./student/save" class="m-ajaxSubmit" callback='afterBack:afterBackTest'>
      <div class="l-row-padding">
    <div class="l-col-2 m-input">
        <label for="">学号</label>
        <input name='sno' type="text" validate='required:true,maxlength:20'>
    </div>
    <div class="l-col-2 m-input">
        <label for="">姓名</label>
        <input name='name' type="text">
    </div>
    <div class="l-col-2 m-input">
        <label for="">性别</label>
        <input name='sex' type="text" validate='required:true,maxlength:20'>
    </div>
    <div class="l-col-2 m-input">
        <label for="">家庭住址</label>
        <input name='address' type="text">
    </div>
    <div class="l-col-2 m-input">
        <label for="">身高</label>
        <input name='height' type="text" validate='required:true'>
    </div>
    <div class="l-col-2 m-input">
        <label for="">生日</label>
        <input name='birthday' class='m-date' date='dateFmt:"yyyy-MM"' type="text">
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
