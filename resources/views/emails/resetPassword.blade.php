<!DOCTYPE html>
<html>
<head>
    <title>Reset Your Password</title>
</head>
<body>
    <p>Hello,</p>

    <p>You are receiving this email because we received a password reset request for your account.</p>

    <p>
        Click the link below to reset your password:<br>
        <a href="{{ route('userPasswordReset',['token' => $data , 'email' => $data->data['email']]) }}">Reset Password</a>
    </p>

    <p>If you did not request a password reset, no further action is required.</p>

    <p>Thank you!</p>
</body>
</html>
