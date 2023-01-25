<h2>Add Flight</h2> 

<form method="post" action="">
    @csrf
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="number" name="Mobile" placeholder="Number"><br><br>
    <button type="submit">Submit</button>
</form>