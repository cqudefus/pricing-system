<?= berkaPhp\helpers\Element::load("ProgressBar", '', 3)?>

<div class="option">
    <div class="panel panel-default">
        <div class="panel-heading">
            Categories
        </div>
        <div class="panel-body">
            <div class="well" data-web-package="1">
                <?php if(isset($template_data['options']) && sizeof($template_data['options']) > 0):?>
                    <?php $previous_id = ''?>
                    <?php foreach($template_data['options'] as $options) :?>

                        <?php

                        if (!empty($previous_id) && $previous_id != $options['op_ref_feature'] || $options == $template_data['options'][0]) {
                            echo '<span class="list-title">'.$options['name'].'</span>';
                        }

                        $previous_id = $options['op_ref_feature'];
                        ?>
                        <div class="checkbox">
                            <p>
                                <?php
                                $is_checked = '';
                                if(isset($template_data['session_options']) && is_array($template_data['session_options'])) {
                                    $is_checked = array_search($options['op_id'], $template_data['session_options']) !== false ? 'checked' : '';
                                }
                                ?>

                                <input id="<?=$options['op_id']?>" data-update='option' <?=$is_checked?> type="checkbox" value="<?=$options['op_id']?>" price="200"/>
                                <label for="<?=$options['op_id']?>"> <?=ucwords($options['op_name'])?> </label>
                            </p>

                            <span class="price pull-right">
                                R <?= $options['price']?>
                            </span>

                            <?php if(!empty($feature['description'])):?>
                                <span class="glyphicon glyphicon-info-sign info_icon" data-toggle="modal" data-target="#<?=$options['op_id']?>"></span>
                                <div class="information">
                                    <?php berkaPhp\helpers\Element::load("Modal",'',[
                                        'title'=>$options['op_name'], 'body'=>$options['op_description'],'id'=>$options['op_id']
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

<?= berkaPhp\helpers\Element::load("Buttons",'',['step'=>'step_3','back'=>'step_2','next'=>''])?>