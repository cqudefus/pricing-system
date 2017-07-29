<?= berkaPhp\helpers\Element::load("ProgressBar")?>
<div class="option">
    <div class="panel panel-default">
        <div class="panel-heading">
            Categories
        </div>
        <div class="panel-body">
            <div class="well" data-web-package="1">
                <?php foreach($template_data['categories'] as $category) :?>
                <div class="checkbox">
                    <p>

                        <?php
                            $is_checked = '';
                            if(isset($template_data['session_categories']) && is_array($template_data['session_categories'])) {
                                $is_checked = array_search($category['cat_id'], $template_data['session_categories']) !== false ? 'checked' : '';
                            }
                        ?>

                        <input id="<?=$category['cat_id']?>" data-update='category' <?=$is_checked?> type="checkbox" value="<?=$category['cat_id']?>" price="200"/>
                        <label for="<?=$category['cat_id']?>"> <?=ucwords($category['cat_name'])?> </label>
                    </p>

                    <?php if(!empty($category['cat_description'])):?>
                        <span class="glyphicon glyphicon-info-sign info_icon" data-toggle="modal" data-target="#<?=$category['cat_id']?>"></span>
                        <div class="information">
                            <?php berkaPhp\helpers\Element::load("Modal",'',[
                                'title'=>$category['cat_name'], 'body'=>$category['cat_description'],'id'=>$category['cat_id']
                            ]) ?>
                        </div>
                    <?php endif ?>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<?= berkaPhp\helpers\Element::load("Buttons",'',['step'=>'index', 'next'=>'step_2'])?>
