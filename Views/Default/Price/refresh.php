<div class="panel panel-primary">
    <div class="panel-heading price_panel">
        <strong>Details</strong>
        <strong>
			<span id="totalPrice" total-price="1">

			</span>
        </strong>
    </div>
    <div class="panel-body">
        <div class="well">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Estimated hours</th>
                    <th class="text-center">Price</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($template_data['options']) && sizeof($template_data['options']) > 0):?>
                    <?php $total_hours = $total = 0?>
                    <?php foreach($template_data['options'] as $options) :?>
                        <tr>
                            <td class="">
                                <strong class="media-heading"><a href="#"><?= $options['op_name']?></a></strong>
                            </td>

                            <td class="text-center"><strong><?= $options['op_hours']?></strong></td>
                            <td class="text-center"><strong>R <?= $options['price']?></strong></td>
                        </tr>
                        <?php
                            $total+= $options['price'];
                            $total_hours+= $options['op_hours'];
                        ?>
                    <?php endforeach ?>
                <?php endif ?>
                <tr>
                    <td> </td>
                    <td><h4>Total Hours</h4> </td>
                    <td class="text-center"><h4><?=$total_hours?></h4></td>
                </tr>
                <tr>
                    <td>   </td>
                    <td><h3>Total Price</h3></td>
                    <td class="text-right"><h3><strong>R <?=$total?></strong></h3></td>
                </tr>
                <tr>
                    <td>
                        <button type="button" class="btn btn-default">
                            <span class=""></span>Forward to me
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-default">
                            <span class=""></span>Download PDF
                        </button></td>
                    <td>
                        <button type="button" class="btn btn-success">
                            Get In touch <span class=""></span>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>