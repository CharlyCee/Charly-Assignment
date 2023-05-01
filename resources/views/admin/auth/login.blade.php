<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminlogin</title>
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

        <div class="login_form">
            <h2>Admin-Login</h2>
            <div class="input_box">
                <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input_box">
                <span class="icon"><i class="fa-solid fa-lock"></i></span>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
            </div>
            </form>
        </div>
        </div>
    </section>

</body>

</html>