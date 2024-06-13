
    

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.49), rgba(0, 0, 0, 0.49)), url(/img/2.jpg);
            background-size:cover;
            /* opacity: ; */
            /* background: linear-gradient(0deg, rgba(0, 0, 0, 0.49), rgba(0, 0, 0, 0.49)), url(2.jpg); */
        }
        .login-container {
            background: rgba(230, 227, 227, 0.91);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            width: 25%;
            height: 50%;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            font-size: 30px;
        }
        .login-container input {
            width: 80%;
            padding: 20px;
            margin: 10px 0;
            /* border: 1px solid #ccc; */
            border-radius: 5px;
            background: rgba(230, 227, 227, 0.91);

        }
        .login-container button {
            width: 50%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #023768;
            color: white;
            font-size: 16px;
        }
        input{
            text-align: center;
            font-family: "Kaisei Tokumin";
        }
        .login-container a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>LOGIN</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="text" name="email" id="username" placeholder="Your Email" required>
            <input type="password" name="password" id="password" placeholder="Your Password" required>
            <button type="submit">Login</button>
            @error('email')
        <div class="alert alert-danger" role="alert">{{ $message }}</div>
    @enderror
    @error('password')
        <div class="alert alert-danger" role="alert">{{ $message }}</div>
    @enderror
        </form>
        <a href="/"><p>Back?</p></a>
    </div>
</body>
</html>
