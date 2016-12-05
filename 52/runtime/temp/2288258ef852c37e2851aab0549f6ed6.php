<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"F:\wamp\www\tp\52/application/admin\view\page_div\index.html";i:1480908606;}*/ ?>
<div class="l-segment l-border-0 example-layout pageLayout">
    <form action="./page_div/index.html" class="m-pageSubmit">


    </form>
    <div class="l-row x-pageDiv">
        <div class="l-col-1 l-ml-1"><?php echo $total['pageNow']; ?>--<?php echo $total['pageNow']; ?>--<?php echo $total['pageNow']; ?></div>
        <div class="l-col-1 l-ml-1"><?php echo $total['pageNow']; ?>--<?php echo $total['pageNow']; ?>--<?php echo $total['pageNow']; ?></div>
        <div class="l-col-1 l-ml-1"><?php echo $total['pageNow']; ?>--<?php echo $total['pageNow']; ?>--<?php echo $total['pageNow']; ?></div>
        <div class="l-col-1 l-ml-1"><?php echo $total['pageNow']; ?>--<?php echo $total['pageNow']; ?>--<?php echo $total['pageNow']; ?></div>
        <div class="l-col-1 l-ml-1"><?php echo $total['pageNow']; ?>--<?php echo $total['pageNow']; ?>--<?php echo $total['pageNow']; ?></div>
        <div class="l-col-1 l-ml-1"><?php echo $total['pageNow']; ?>--<?php echo $total['pageNow']; ?>--<?php echo $total['pageNow']; ?></div>
    </div>
    <div class="m-pageBar" page-total=<?php echo $total['pageTotal']; ?> page-now=<?php echo $total['pageNow']; ?> page-length=<?php echo $total['pageLength']; ?> data-total=<?php echo $total['dataTotal']; ?>></div>
</div>


<style>
    .x-pageDiv .l-col-1 {
        padding: 50px 0;
        background: #aaa;
        color: #fff;
        text-align: center;
    }
</style>