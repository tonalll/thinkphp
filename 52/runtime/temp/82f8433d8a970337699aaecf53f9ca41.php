<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"F:\wamp\www\tp\52/application/admin\view\menu\index.html";i:1480067393;}*/ ?>
<div class="l-segment l-border-0 example-layout pageLayout">
    <form action="./sea-modules/zxl/ajax/ajaxSubmit.json" class="m-ajaxSubmit" callback='afterBack:afterBackTest'>
      <div class="l-row-padding">
    <div class="l-col-2 m-input">
        <label for="">id</label>
        <input type="text">
    </div>
    <div class="l-col-2 m-input">
        <label for="">自动刷新</label>
        <input type="text">
    </div>
    <div class="l-col-2 m-input">
        <label for="">标题</label>
        <input type="text">
    </div>
    <div class="l-col-2 m-input">
        <label for="">图标</label>
        <input type="text">
    </div>
    <div class="l-col-2 m-input">
        <label for="">地址</label>
        <input type="text">
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

<div class="l-segment l-border-0 example-layout">
    <h3>表单组件</h3>
    <div class="l-divider-50"></div>
    <div class="l-row-padding">
        <div class="l-col-2 m-input">
            <label for="">日期</label>
            <input type="text" date='dateFmt:"yyyy-MM"' class="m-date">
        </div>
        <div class="l-col-2 m-input">
            <label for="">输入项</label>
            <input type="text">
        </div>
        <div class="l-col-2 m-input">
            <label for="">输入项</label>
            <input type="text">
        </div>
        <div class="l-col-2 m-input">
            <label for="">输入项</label>
            <input type="text">
        </div>
        <div class="l-col-2 m-input">
            <label for="">输入项</label>
            <input type="text">
        </div>
        <div class="l-col-2 m-input">
            <label for="">输入项</label>
            <input type="text">
        </div>
    </div>
    <div class="l-row">
        <div class="l-col-1 m-input">
            <label for="">变量1</label>
            <span edit='url:"./sea-modules/zxl/ajax/edit.json",reg:/^(-?)+[0-9]+(.[0-9]{1,2})?$/,error:console.info,errorClass:"editError",name:"name",class:"asdf",style:"background:#fff;color:#000;",after:console.info,valueToLabel:valueToLabel,valueToInput:valueToInput' class="x-layout">10</span>
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
    <br>
</div>
