<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"F:\wamp\www\tp\52/application/admin\view\student\edit.html";i:1480662118;}*/ ?>
<div class="l-segment l-border-0 example-layout pageLayout">
    <form action="./student/update" class="m-ajaxSubmit" callback='afterBack:afterBackTest'>
      <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
      <div class="l-row-padding">
    <div class="l-col-2 m-input">
        <label for="">学号</label>
        <input value=<?php echo $student['sno']; ?> name='sno' type="text" validate='required:true,maxlength:20'>
    </div>
    <div class="l-col-2 m-input">
        <label for="">姓名</label>
        <input type="text" value="<?php echo $student['name']; ?>" name="name">
    </div>
    <div class="l-col-2 m-input">
        <label for="">性别</label>
        <input name='sex' type="text" validate='required:true,maxlength:20' value="<?php echo $student['sex']; ?>">
    </div>
    <div class="l-col-2 m-input">
        <label for="">家庭住址</label>
        <input type="text" name="address" value="<?php echo $student['address']; ?>">
    </div>
    <div class="l-col-2 m-input">
        <label for="">身高</label>
        <input name='height' type="text" validate='required:true' value="<?php echo $student['height']; ?>">
    </div>
    <div class="l-col-2 m-input">
        <label for="">生日</label>
        <input type="text" name="birthday" value="<?php echo $student['birthday']; ?>">
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
