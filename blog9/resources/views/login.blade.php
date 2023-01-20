<h3>User Login</h3>

<form action="login" method="post">
    @csrf
    <input type="email" name="email" placeholder="email"> <br><br>
    <input type="password" name="password" placeholder="password"><br><br>
    <button type="submt">Login</button>
</form>