<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <!-- <link rel="stylesheet" href="../../../public/assets/styles/login.css"> -->
  <style>
    body {
      font-family: sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0;
      padding: 0;
      background-size: cover;
    }

    .container-login {
      position: absolute;
      box-sizing: border-box;
      border: 1px solid #dadce0;
      -webkit-border-radius: 9px;
      border-radius: 9px;
      padding: 2.5rem;
      width: 25rem;
    }

    .container-login h2 {
      margin: 0px 0 -0.125rem;
      padding: 0;
      color: #fff;
      text-align: center;
      color: #202124;
      font-family: 'Google Sans', 'Noto Sans Myanmar UI', Arial, Helvetica, sans-serif;
      font-size: 30px;
      font-weight: 400;
    }

    .container-login p {
      font-size: 16px;
      font-weight: 400;
      letter-spacing: 1px;
      line-height: 1.5;
      margin-bottom: 25px;
      text-align: center;
      opacity: 0.6;
    }

    .container-login ul li {
      position: relative;
      list-style: none;
    }

    .container-login ul .inputUser input {
      width: 93%;
      padding: 0.625rem 10px;
      font-size: 1rem;
      letter-spacing: 0.062rem;
      margin-bottom: 1.875rem;
      border: 1px solid #ccc;
      background: transparent;
      border-radius: 4px;
    }

    .container-login ul .inputUser label {
      position: absolute;
      top: 0;
      left: 10px;
      padding: 0.625rem 0;
      font-size: 1rem;
      color: grey;
      pointer-events: none;
      transition: ease-out 0.5s;
    }

    .container-login ul .inputUser input:focus {
      outline: none;
      border: 2px solid #1a73e8;
    }

    .container-login ul .inputUser input:focus~label,
    .container-login ul .inputUser input:valid~label,
    .container-login ul .inputUser input:not([value=""])~label {
      top: -1rem;
      left: 10px;
      color: #1a73e8;
      font-size: .75rem;
      background-color: white;
      padding-left: 5px;
      padding-right: 5px;
      height: 10px;
    }

    .container-login ul li input[type="submit"] {
      border: none;
      outline: none;
      color: #fff;
      background-color: #1a73e8;
      padding: 0.625rem 1.25rem;
      cursor: pointer;
      border-radius: 0.312rem;
      font-size: 1rem;
      float: right;
    }

    .container-login ul li input[type="submit"]:hover {
      background-color: #287ae6;
      box-shadow: 0 1px 1px 0 rgba(66, 133, 244, 0.45), 0 1px 3px 1px rgba(66, 133, 244, 0.3);
    }

    .container-login ul li.remember {
      margin-top: -1rem;
      margin-bottom: 1rem;
    }

    .container-login ul li input[type="checkbox"]:checked {
      accent-color: #1a73e8;
      transform: scale(1.2);
      transition: 0.5s;
    }

    .container-login ul li input[type="checkbox"] {
      border: 1px solid #1a73e8;
      transition: 0.5s;
      border-radius: 2px;
      transform: translateY(1.4px);

    }
  </style>
</head>

<body>
  <div class="container-login">
    <h2>
      Login MariKerja
    </h2>
    <p>Use Gived Account <br> [username: fachri@gmail.com, pass: fachri]</p>
    <?php
    if (isset($error)) {
      echo "<p style='color:red; font-style:italic;'>username/password salah</p>";
    }
    ?>
    <form action="Login/auth" method="post">
      <ul>
        <li class="inputUser">
          <input type="text" name="email" id="email" required onkeyup="this.setAttribute('value', this.value);"
            value="" />
          <label for="email">email</label>
        </li>
        <li class="inputUser">
          <input type="password" name="password" id="password" required
            onkeyup="this.setAttribute('value', this.value);" value="" />
          <label for="password">Password</label>
        </li>
        <!-- <li class="remember">
          <input type="checkbox" name="remember" id="remember" />
          <label for="password">Remember me!</label>
        </li> -->
        <li>
          <input type="submit" name="login" value="Login!">
        </li>
      </ul>
    </form>
  </div>
</body>

</html>