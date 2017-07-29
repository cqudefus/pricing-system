<?= berkaPhp\helpers\Element::load("ProgressBar", '', 2)?>

<div class="option">
    <div class="panel panel-default">
        <div class="panel-heading">
            Features
        </div>
        <div class="panel-body">
            <div class="well" data-web-package="1">
                <?php if(isset($template_data['features']) && sizeof($template_data['features']) > 0):?>
                    <?php $previous_id = ''?>
                    <?php foreach($template_data['features'] as $feature) :?>

                        <?php

                            if (!empty($previous_id) && $previous_id != $feature['ref_cat_id'] || $feature == $template_data['features'][0]) {
                                echo '<span class="list-title">'.$feature['cat_name'].'</span>';
                            }

                            $previous_id = $feature['ref_cat_id'];
                        ?>
                        <div class="checkbox">
                            <p>

                                <?php
                                $is_checked = '';
                                if(isset($template_data['session_features']) && is_array($template_data['session_features'])) {
                                    $is_checked = array_search($feature['id'], $template_data['session_features']) !== false ? 'checked' : '';
                                }
                                ?>

                                <input id="<?=$feature['id']?>" data-update='feature' <?=$is_checked?> type="checkbox" value="<?=$feature['id']?>" price="200" />
                                <label for="<?=$feature['id']?>"> <?=ucwords($feature['name'])?> </label>
                            </p>

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
                <?php endif ?>
            </div>
        </div>
    </div>
</div>

<?= berkaPhp\helpers\Element::load("Buttons",'',['step'=>'step_2','back'=>'index/back','next'=>'step_3'])?>
