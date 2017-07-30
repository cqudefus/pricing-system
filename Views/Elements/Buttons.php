<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 no-padding-left no-padding-right">
    <ul class="pager pull-left">
        <?php if($passed_data['step'] != 'index') :?>
            <li class="pull-left"><button type="button"class="btn btn-primary" data-ajax = "/pages/<?=$passed_data['back']?>" panel="content">Previous</button></li>
        <?php endif ?>
        <?php if($passed_data['step'] != 'step_3') :?>
            <li class="pull-left">&nbsp;<button type="button" class="btn btn-primary" data-ajax = "/pages/<?=$passed_data['next']?>" panel="content">Next</button></li>
        <?php endif ?>
        <li class="pull-right"><button type="button" class="btn btn-default" href="/pages/clear">Clear</button></li>
    </ul>
</div>
<script>
   $app.initAjax();
   application.initPrice();
   //application.initPricePanel();
   //application.initFlash();
</script>