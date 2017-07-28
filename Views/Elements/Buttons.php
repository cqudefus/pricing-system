<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 no-padding-left">
    <ul class="pager pull-left">
        <?php if($passed_data['step'] != 'index') :?>
         <li><a data-ajax = "/pages/<?=$passed_data['back']?>" panel="content">Previous</a></li>
        <?php endif ?>
        <?php if($passed_data['step'] != 'step_3') :?>
        <li><a data-ajax = "/pages/<?=$passed_data['next']?>" panel="content">Next</a></li>
        <?php endif ?>
    </ul>
</div>
<script>
   $app.initAjax();
   application.initPrice();
</script>