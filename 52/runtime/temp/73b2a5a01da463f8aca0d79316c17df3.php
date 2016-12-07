<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"F:\wamp\www\tp\52/application/admin\view\validate\index.html";i:1480909231;}*/ ?>
<div class="l-segment l-border-0 example-layout pageLayout">
    <form action="./validate/save.html" class="m-ajaxSubmit" callback='afterBack:afterBackTest'>
        <div class="l-row-padding">
            <div class="l-col-2 m-input">
                <label for="">输入项1</label>
                <input name='name1' type="text" validate='required:true,maxlength:20'>
            </div>
            <div class="l-col-2 m-input">
                <label for="">输入项2</label>
                <input name='name2' type="text">
            </div>
            <div class="l-col-2 m-input">
                <label for="">输入项3</label>
                <input name='name3' type="text">
            </div>
            <div class="l-col-1 m-input">
                <input name='name' type="submit" value="提交" class="m-button m-submit">
            </div>
            <div class="l-col-1 m-input">
                <input name='name' type="reset" value="重置" class="m-button-default m-reset">
            </div>
        </div>
    </form>
</div>
<script>
    function afterBackTest(_dd) {
        console.info('这里是自定义成功回调' + _dd);
    }
</script>