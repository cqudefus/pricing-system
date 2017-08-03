
<html>
<head>

</head>
<body style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif; background: #ffffff;">
<table width="100%" >
    <tr>
        <td style="color: gray; font-size: 12px;">
            <strong style="color: #000000; font-size: 14px;"><?=  date('m/d/Y h:i:s A', time()); ?></strong>
            <br/>
            <br/>
            www.cqudefus.com
            <br/>
            02171725389
            <br/>
            suport@cqudefus.com
            <br/>
            <br/>
            <br/>
        </td>
    </tr>
    <tr>
        <td>
            <table border="0" style="border:0px; border-collapse: collapse;font-weight: normal;width: 100%;">
                <thead>
                <tr style="background: #bbbbbd;height: 53px;border-bottom: 18px solid white;color: #343435;">
                    <th style="border: 0;padding: 10px;padding-left: 5px;">Name</th>
                    <th style="border: 0;padding: 10px;padding-left: 5px;">Estimated Hours</th>
                    <th style="border: 0;padding: 10px;padding-left: 5px;">Price</th>
                </tr>
                </thead>
                <tbody>
                <?php $total_hours = $total = 0?>
                <?php if(isset($template_data['options']) && sizeof($template_data['options']) > 0):?>
                    <?php foreach($template_data['options'] as $options) :?>

                        <?php if (!empty($previous_id) && $previous_id != $options['op_ref_feature'] || $options == $template_data['options'][0]): ?>
                            <tr style="padding: 10px; padding-left: 5px;background: #ededee;border-bottom: solid white 10px;border-top: solid white 10px;">
                                <td style="border: 0;padding: 10px;padding-left: 5px;">
                                    <strong style="color: #343435;" ><a ><?= ucwords($options['name'])?></a></strong>
                                </td>
                                <td style="border: 0;padding: 10px;padding-left: 5px;"></td>
                                <td style="border: 0;padding: 10px;padding-left: 5px;"></td>
                            </tr>
                            <?php $previous_id = $options['op_ref_feature'] ?>
                        <?php endif ?>

                        <tr style="padding: 10px; padding-left: 5px;border-bottom: solid white 10px;border-top: solid white 10px;">
                            <td style="border: 0;padding-top: 10px:; padding-left: 5px">
                                <strong><a href="#" style="color: #464444;text-decoration: none;font-weight: normal"><?= $options['op_name']?></a></strong>
                            </td>

                            <td style="border: 0;padding-top: 10px:; padding-left: 5px"><?= $options['op_hours']?></td>
                            <td style="border: 0;padding-top: 10px:; padding-left: 5px">R <?= $options['price']?></td>
                        </tr>
                        <?php
                        $total+= $options['price'];
                        $total_hours+= $options['op_hours'];
                        ?>
                    <?php endforeach ?>

                    <tr >
                        <td </td>
                        <td ><h4>Total Hours</h4> </td>
                        <td ><h4><?=$total_hours?></h4></td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td ><h3>Total Price</h3></td>
                        <td ><h3><strong>R <?=$total?></strong></h3></td>
                    </tr>
                    <tr>
                        <td >
                            Requested ID : <?= $template_data['requested_id'] ?>
                        </td>
                        <td >
                        </td>
                        <td >
                        </td>
                    </tr>
                <?php endif ?>
                </tbody>
            </table>
            <br/>
            <br/>
            <table style="width: 100%;">
                <tr>
                    <td style="width:100%;font-family:Helvetica,arial,sans-serif;font-size:11px;color:#9a9a9a;text-align:center;line-height:18px">
                        We are happy to answer any questions that you have via email <a  style="text-decoration:none!important;color:#337ab7">service@berka-ayowa.com</a>
                        or <span style="color:#337ab7">phone 086 556 4444</span>. Our support team will get back to you as quickly as possible.
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>

