<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Reset</title>
</head>
<body>
    <h4>Dear {{ $data['username'] }}</h4>
    <p>Your Password reset code is <strong>{{ $data['code'] }}</strong> </p>
</body>
</html>
