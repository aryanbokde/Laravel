<h3>Store Data</h3>
@if (session('name'))
    <h3>{{ session('name') }} your data has been saved.</h3>
@endif
<form action="store" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name"> <br><br>
    <input type="email" name="email" placeholder="email"> <br><br>
    <input type="password" name="password" placeholder="password"><br><br>
    <button type="submt">Add New Data</button>
</form>