<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 no-padding-left no-padding-right">
    <ul class="pager pull-left">
        <?php if($passed_data['step'] != 'index') :?>
            <li class="pull-left"><a class="btn-bottom" data-ajax = "/pages/<?=$passed_data['back']?>" panel="content">Previous</a></li>
        <?php endif ?>
        <?php if($passed_data['step'] != 'step_3') :?>
            <li class="pull-left"><a class="btn-bottom" data-ajax = "/pages/<?=$passed_data['next']?>" panel="content">Next</a></li>
        <?php endif ?>
        <li class="pull-right"><a class="btn-bottom" href="/pages/clear">Clear</a></li>
    </ul>
</div>
<script>
   $app.initAjax();
   application.initPrice();
   //application.initFlash();
</script>