<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"F:\wamp\www\tp\52/application/admin\view\upload\index.html";i:1470642866;}*/ ?>
<div class="l-segment l-border-0 example-layout">
    <div class="l-row-padding">
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
        <div class="l-col-2 m-input">
            <label for="">输入项</label>
            <input type="text">
        </div>
    </div>
    <div class="l-segment l-border-0">
        <div upload='server:"./sea-modules/zxl/ajax/upload.json",eventsBack:uoloadEventsBack'>上传</div>
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
    <div class="l-divider-100"></div>
    <br>


</div>
<script>
    var uoloadEventsBack = {
        uploadSuccess: function (file, data) {
            console.info(file);
            console.info(data);
            seajs.use('msg', function () {
                msg.notice(data.message);
            });
            //当文件上传成功时触发
            // File对象
            // data 服务端返回的数据
        }
    }
</script>