<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8ac536ba87.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <h1>Olympic 2023 <img src="images/logoolympic.png" alt="olympic"></h1>
            <ul class="nav_items">
                <li class="nav_list">
                    <a href="#" class="nav_link">Home</a>
                    <a href="#" class="nav_link">About</a>
                    <a href="#" class="nav_link">services</a>
                    <a href="#" class="nav_link">contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="home">
        <div class="form_container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="login_form">
                <form action="{{route('change.password')}}" method="POST">
                    @csrf
                    <h2>Forgot Password</h2>
                    <input type="hidden" name="email" value="{{old('email')}}" placeholder="Enter your email" readonly required>
                    <div class="input_box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="text" id="code" name="code" placeholder="Enter your code" required>
                    </div>
                    <div class="input_box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="input_box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" id="confirm-pws" name="password_confirmation" placeholder="Confirm password"
                            required>
                    </div>

                    <button type="submit" class="btn">Change Password</button>
                </form>
                    <div class="login-signup">
                        <p>Did not recieve code?
                            <button onclick="document.getElementById('resendform').submit()" class="btn-transparent" id="Login">Resend Code</button>
                        </p>
                    </div>

                <form action="{{route('resendemail')}}" method="post" id="resendform">
                    @csrf
                    <input type="hidden" id="email" name="email" value="{{old('email')}}" placeholder="Enter your email" readonly required>
                </form>
            </div>
        </div>
    </section>

</body>

</html>
