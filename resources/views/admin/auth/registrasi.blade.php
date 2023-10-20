<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        form{
            width: 100vw;
            height: 100vh;
            background: grey;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>

    <form action="{{ url("/registrasi") }}" method="post">
        @csrf
        <input type="text" name="nama" placeholder="Nama ..." required>
        <input type="text" name="email" placeholder="Email ..." required>
        <input type="text" name="password" placeholder="Password ..." required>
        <button>REGISTRASI</button>
        <a href="{{ url("/") }}">Login akun</a>
    </form>
    
</body>
</html>