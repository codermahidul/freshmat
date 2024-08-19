<!DOCTYPE html>
<html>
<head>
    <title>{{ mailData(2,'subject') }}</title>
</head>
<body>
    <?php

    $user_name = $OrderSuccessData['user_name'];
    $total_amount = '$'.$OrderSuccessData['total_amount'];
    $payment_method = $OrderSuccessData['payment_method'];
    $payment_status = $OrderSuccessData['payment_status'];
    $order_status = $OrderSuccessData['order_status'];
    $order_date = $OrderSuccessData['order_date']->format('d-M-Y');

    $content = mailData(2,'content');

    $content = str_replace("{{user_name}}","$user_name",$content);
    $content = str_replace("{{total_amount}}","$total_amount",$content);
    $content = str_replace("{{payment_method}}","$payment_method",$content);
    $content = str_replace("{{payment_status}}","$payment_status",$content);
    $content = str_replace("{{order_status}}","$order_status",$content);
    $content = str_replace("{{order_date}}","$order_date",$content);

    echo $content;
    ?>

</body>
</html>
