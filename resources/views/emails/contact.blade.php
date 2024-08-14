<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <?php
    $name = $data['name'];
    $email = $data['email'];
    $email = $data['subject'];
    $message = $data['message'];

    $content = mailData(1,'content');
    $content = str_replace("{{name}}","$name",$content);
    $content = str_replace("{{email}}","$email",$content);
    $content = str_replace("{{subject}}","$subject",$content);
    $content = str_replace("{{message}}","$message",$content);
    echo $content;
    ?>

</body>
</html>
