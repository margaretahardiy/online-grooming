<form method ="POST" action="/login">
  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Username" name="email" required>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <button type="submit">Login</button>
    @if(Session::get('alert'))
    <div class="alert">
        {{ Session::get('alert') }}
    </div>
    @endif
  </div>
</form>

<a href="{{ url('/register') }}">Sign Up</a>