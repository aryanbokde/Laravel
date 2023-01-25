<h2>Member List</h2> 
@if (session('success'))
    <div class="alert alert-success" role="alert" style="color: #155724; padding: 10px;">
        {{ session('success') }}
    </div>    
@endif
<form method="post" action="addmember">
    @csrf
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="text" name="address" placeholder="Address"><br><br>
    <button type="submit">Submit</button>
</form>