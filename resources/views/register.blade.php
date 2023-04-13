<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('stylereg.css')}}">
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
            <div class="login_form">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <h2>Register</h2>
                    <div class="input_box">
                        <span class="icon"><i class="fa-solid fa-user"></i> </span>
                        <input type="text" id="username" value="{{old('username')}}" name="username" placeholder="Username">
                    </div>
                    <div class="input_box">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" id="email" value="{{old('email')}}" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input_box">
                        <span class="icon"><i class="fa-solid fa-phone"></i></span>
                        <input type="tel" placeholder="123-456-7890" value="{{old('phone')}}" name="phone">
                    </div>
                    <div class="input_box">
                        <span class="icon"><i class="fa-solid fa-person-half-dress"></i></span>
                        <select id="gender" name="gender" required>
                            <option value="">Select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="input_box">
                        <span class="icon"><i class="fa-solid fa-globe"></i></span>
                        <input type="text" id="nationality" value="{{old('country')}}" name="country" placeholder="Enter your country">
                    </div>
                    <div class="input_box">
                        <span class="icon"><i class="fa-solid fa-arrow-pointer"></i></span>
                        <select id="sports-select" name="sport" onkeyup="filterSports()">
                            <option value="0" disabled selected>Select Sport</option>
                            <option value="Athletics">Athletics (track and field)</option>
                            <option value="Swimming">Swimming</option>
                            <option value="Gymnastics">Gymnastics</option>
                            <option value="Cycling">Cycling</option>
                            <option value="Boxing">Boxing</option>
                            <option value="Wrestling">Wrestling</option>
                            <option value="Judo">Judo</option>
                            <option value="Taekwondo">Taekwondo</option>
                            <option value="Basketball">Basketball</option>
                            <option value="Volleyball">Volleyball</option>
                            <option value="Football">Football (Soccer)</option>
                            <option value="Tennis">Tennis</option>
                            <option value="Table Tennis">Table Tennis</option>
                            <option value="Fencing">Fencing</option>
                            <option value="Shooting">Shooting</option>
                            <option value="Weightlifting">Weightlifting</option>
                            <option value="Diving">Diving</option>
                            <option value="Sailing">Sailing</option>
                            <option value="Canoeing">Canoeing</option>
                            <option value="Rowing">Rowing</option>
                            <option value="Hockey">Hockey</option>
                            <option value="Handball">Handball</option>
                            <option value="Golf">Golf</option>
                            <option value="Rugby Sevens">Rugby Sevens</option>
                            <option value="Skateboarding">Skateboarding</option>
                            <option value="Sport Climbing">Sport Climbing</option>
                            <option value="Surfing">Surfing</option>
                        </select>
                    </div>
                    <div class="input_box">
                        <span class="icon"><i class="fa-solid fa-calendar-week"></i></i></i></span>
                        <input type="datetime-local" class="date_time" value="{{old('date')}}" id="datetime" name="date"
                            value="2023-04-01T10:30:00">
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

                    <div class="tems_privacy">
                        <span><input type="checkbox" name="terms" required>
                            I accept the <a href="/terms">terms and privacy policy</a></span>
                    </div>

                    <button type="submit" class="btn">Sign Up</button>

                    <div class="login-signup">
                        <p>have an account?
                            <a href="{{url('/login')}}" id="Login">Login</a>
                        </p>

                    </div>
</body>

<script>
function filterSports() {
    var input, filter, options, i, txtValue;
    input = document.getElementById(" sports-select-search");
    filter = input.value.toUpperCase();
    options = document.getElementById("sports-select").getElementsByTagName("option");
    for (i = 0; i <
        options.length; i++) {
        txtValue = options[i].textContent || options[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            options[i].style.display = "";
        } else {
            options[i].style.display = "none";
        }
    }
}
</script>


</html>
