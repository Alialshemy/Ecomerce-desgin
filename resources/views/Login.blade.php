<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href={{asset('css\Login_Style.css')}}>
</head>
<body>
<div class="login-box" style="text-align: center">
    <h1>Login</h1>
    <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Username">
    </div>

    <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Password">
    </div>

    <input type="button" class="btn" value="Sign in">
    <input type="button" class="btn" value="Sign up">
    <a href="{{route('user.index')}}" style="color: white; text-decoration: none; font-size: small;" class="login-guest-btn">As a guest</a>
</div>
</body>
</html>
