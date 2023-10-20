<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
      href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ url('public') }}/assets/config/tailwind.css" />
    <link rel="stylesheet" href="{{ url('public') }}/assets/config/styles.css" />
  </head>
  <body class="login-screen">
   
    
    <form method="POST" action="{{ url('auth/login') }}" class="form-login">
        @csrf
        <div class="flex flex-col items-center justify-center pb-3">
          <h1 class="font-bold text-yellow-300 text-2xl mb-1">Alpha Wedding</h1>
          <span class="w-full h-1 bg-yellow-300 rounded-md  mb-5"></span>
        </div>
        <div class="login-form-group group">
            <label for="email" class="login-form-group-label">Email</label>
            <input type="email" name="email" id="email" class="login-form-group-input" placeholder="Email ..." autocomplete="off" required>
        </div>
        <div class="login-form-group group">
            <label for="password" class="login-form-group-label">Password</label>
            <input type="password" name="password" id="password" class="login-form-group-input" placeholder="Password" autocomplete="off" required>
        </div>
        <div class="flex item-center justify-end">
          <button type="submit" class="btn-login">LOGIN</button>
        </div>
    </form>
  

    <script src="{{ url('public') }}/assets/node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
