<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"F:\wamp\www\tp\52/application/admin\view\form_unit\index.html";i:1480494706;}*/ ?>
<div class="l-segment l-border-0 example-layout">
  <form action="">
    <h3>表单组件</h3>
    <div class="l-divider-50"></div>
    <div class="l-row-padding">
        <div class="l-col-3 m-input">
            <label for="">日期</label>
            <input type="text" date='dateFmt:"yyyy-MM"' class="m-date">
        </div>
        <div class="l-col-3 m-input">
            <label for="">单选1</label>
            <input class='m-radio' type="radio" name="radio1" value="radio1" title='单选1'>
            <input class='m-radio' type="radio" name="radio1" value="radio2" title='单选1'>
            <input class='m-radio' type="radio" name="radio1" value="radio3" title='单选1'>
        </div>
        <div class="l-col-3 m-input">
            <label for="">单选2</label>
            <input class='m-radio' type="radio" name="radio2" value="radio1" title='单选1'>
            <input class='m-radio' type="radio" name="radio2" value="radio2" title='单选1'>
            <input class='m-radio' type="radio" name="radio2" value="radio3">
        </div>
        <div class="l-col-3 m-input">
            <label for="">单选3</label>
            <input class='m-radio' type="radio" name="radio3" value="radio1" title='单选1'>
            <span>(说明)</span>
            <input class='m-radio' type="radio" name="radio3" value="radio3">
            <span>(说明)</span>
          </div>
        </div>
        <div class="l-row-padding">
          <div class="l-col-3 m-input">
              <label for="">多选</label>
              <input class='m-checkbox' type="checkbox" name="checkbox1" value="checkbox1" title='多选1'>
              <input class='m-checkbox' type="checkbox" name="checkbox2" value="checkbox2" title='多选2'>
              <input class='m-checkbox' type="checkbox" name="checkbox3" value="checkbox3" title='多选3'>
          </div>
            <div class="l-col-3 m-input">
                <label for="">多选</label>
                <input class='m-checkbox' type="checkbox" name="checkbox1" value="checkbox1" title='多选1'>
                <input class='m-checkbox' type="checkbox" name="checkbox2" value="checkbox2" title='多选2'>
                <input class='m-checkbox' type="checkbox" name="checkbox3" value="checkbox3" >
            </div>
              <div class="l-col-3 m-input">
                  <label for="">多选</label>
                  <input class='m-checkbox' type="checkbox" name="checkbox1" value="checkbox1" title='多选1'>
                  <input class='m-checkbox' type="checkbox" name="checkbox2" value="checkbox2" title='多选2'>
                  <input class='m-checkbox' type="checkbox" name="checkbox3" value="checkbox3" title='多选2'><span>(说明)</span>
              </div>
        <div class="l-col-3 m-input">
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
    </form>
</div>
<script>
    function valueToLabel(num) {
        if (!num || num == 0) return '';
        return (Number(num).toFixed(2) + '').replace(/\d{1,3}(?=(\d{3})+(\.\d*)?$)/g, '$&,');
    }

    function valueToInput(num) {
        return (num + '').replace(/,/g, '');
    }
</script>
