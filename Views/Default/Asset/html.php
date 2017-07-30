<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;">
<table align="center" style="padding: 20px;border: 1px solid #f3f3f3;margin-top: 65px;">
    <tr>
        <td>
            <table border="0" style="border:0px; border-collapse: collapse;font-weight: normal;width: 100%;">
                <thead>
                <tr>
                    <th style="padding: 5px; text-align: left">Name</th>
                    <th style="padding: 5px;text-align: left">Estimated Hours</th>
                    <th style="padding: 5px;text-align: left">Price</th>
                </tr>
                </thead>
                <tbody>
                <?php $total_hours = $total = 0?>
                <?php if(isset($template_data['options']) && sizeof($template_data['options']) > 0):?>
                    <?php foreach($template_data['options'] as $options) :?>

                        <?php if (!empty($previous_id) && $previous_id != $options['op_ref_feature'] || $options == $template_data['options'][0]): ?>
                            <tr style="background: #e6e6e6;border-bottom: solid white 10px;border-top: solid white 10px;">
                                <td style="background: #e6e6e6;border: 0;padding: 10px; padding-left: 5px;">
                                    <strong class="media-heading"><a href="#" style="text-decoration: none; color: #5d5858;"><?= ucwords($options['name'])?></a></strong>
                                </td>
                                <td style="border: 0;padding: 10px;padding-left: 5px;"></td>
                                <td style="border: 0;padding: 10px;padding-left: 5px;"></td>
                            </tr>
                            <?php $previous_id = $options['op_ref_feature'] ?>
                        <?php endif ?>

                        <tr>
                            <td style="border: 0;padding: 5px">
                                <strong class="media-heading"><a href="#" style="color: #464444;text-decoration: none;font-weight: normal"><?= $options['op_name']?></a></strong>
                            </td>

                            <td style="border: 0;padding: 5px"><?= $options['op_hours']?></td>
                            <td style="border: 0;padding: 5px">R <?= $options['price']?></td>
                        </tr>
                        <?php
                        $total+= $options['price'];
                        $total_hours+= $options['op_hours'];
                        ?>
                    <?php endforeach ?>

                    <tr style="border-top: 15px solid #ffffff;">
                        <td style="border: 0;padding: 5px"> </td>
                        <td style="border: 0;padding: 5px"><h4>Total Hours</h4> </td>
                        <td style="border: 0;padding: 5px"><h4><?=$total_hours?></h4></td>
                    </tr>
                    <tr>
                        <td style="border: 0;padding: 5px"></td>
                        <td style="border: 0;padding: 5px"><h3>Total Price</h3></td>
                        <td style="border: 0;padding: 5px"><h3><strong>R <?=$total?></strong></h3></td>
                    </tr>
                    <tr>
                        <td style="border: 0;padding: 5px">

                        </td>
                        <td style="border: 0;padding: 5px">
                            <button type="button" class="btn btn-default">
                                <span class=""></span>Download PDF
                            </button></td>
                        <td style="border: 0;padding: 5px">
                            <button type="button" class="btn btn-success">
                                Get In touch <span class=""></span>
                            </button>
                        </td>
                    </tr>

                <?php endif ?>
                </tbody>
            </table>
            <br/>
            <table>
                <tr>
                    <td style="font-family:Helvetica,arial,sans-serif;font-size:13px;color:#9a9a9a;text-align:center;line-height:18px">
                        We are happy to answer any questions that you have via email <a href="?&amp;cs=wh&amp;v=b&amp;to=service@zando.co.za" style="text-decoration:none!important;color:#337ab7" target="_blank" rel="noreferrer">service@berka-ayowa.com</a><br>
                        or <span style="color:#337ab7">phone 086 556 4444</span>. Our support team will get back to you as quickly as possible.
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>
