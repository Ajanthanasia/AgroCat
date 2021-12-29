
@extends('home.index')
@section('content-1')

<section class="home" id="home">

    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>

    <div class="content">
        <div class="loginbox">
        <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" required class="login">
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required class="login">
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="#">Signup</a>
        </div>
      </form>
    </div>

        </div>
    

</section>


@endsection
