<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Confrim your Account </h1>
    <p>Hello, {{ $user['username'] }}</p>
    <p>Thank you for signing up for our Lizay Consmetic. To complete your account setup, please confirm your email address by clicking the link below:</p>
    <h1 class="text-center"> Your OTP is {{ $otp }}  </h1>
    <p>If you did not request this email, please ignore it. Your account will remain unverified until you confirm your email address
</body>
</html>