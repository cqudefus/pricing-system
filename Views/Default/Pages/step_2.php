<?= berkaPhp\helpers\Element::load("ProgressBar", '', 2)?>

<div class="option">
    <div class="panel panel-default">
        <div class="panel-heading">
            Categories
        </div>
        <div class="panel-body">
            <div class="well" data-web-package="1">

                <?php foreach($template_data['features'] as $feature) :?>
                    <div class="checkbox">
                        <label>

                            <?php
                            $is_checked = array_search($feature['id'], $template_data['session_features']) ? 'checked' : '';
                            ?>

                            <input data-update='feature' <?=$is_checked?> type="checkbox" value="<?=$feature['id']?>" price="200">
                            <?=ucwords($feature['name'])?>
                        </label>

                        <?php if(!empty($feature['description'])):?>
                            <span class="glyphicon glyphicon-info-sign info_icon" data-toggle="modal" data-target="#<?=$feature['id']?>"></span>
                            <div class="information">
                                <?php berkaPhp\helpers\Element::load("Modal",'',[
                                    'title'=>$feature['name'], 'body'=>$feature['description'],'id'=>$feature['id']
                                ]) ?>
                            </div>
                        <?php endif ?>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
</div>

<?= berkaPhp\helpers\Element::load("Buttons",'',['step'=>'step_2','back'=>'index/back','next'=>'step_3'])?>
