<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="info.php" method="post">
                <h1>Create Account</h1>
                <p>Name:<input type="text" placeholder="Name" name="Name"/></p>
                <p>UserName:<input type="text" placeholder="Username" name="UserName" /></p>
                <p>Email:<input type="email" placeholder="Email" name="Email"/></p>
                <p>Create a password:<input type="password" placeholder="Create a Password" name="password"/></p>
                <p>Repeat password:<input type="password" placeholder="Repeat Password"/></p>
                <button name="signup">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="info.php" method="post">
                <h1>Sign In</h1>
                <p>Name:<input type="text" placeholder="Username" name="Email"/></p>
                <p>password:<input type="password" placeholder="Password" name="password"/></p>
                <button name="login">Login</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us, please sign in with your personal info</p>
                    <button class="ghost" id="signIn">Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start your journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
