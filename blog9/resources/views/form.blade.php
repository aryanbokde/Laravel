<h1>Login Form</h1>
<form action="/form" method="post" >
    @csrf
    <input type="email" placeholder="Enter Your email" name="email"/>
    <input type="password" placeholder="Enter Your Password"  name="password"/>
    <input type="submit" value="Submit" name="submit"/>
</form>
