<h2>Member Edit</h2> 

<form method="post" action="/editflights">
    @csrf
    <input type="hidden" name="id" value={{$data['id']}}>
    <input type="text" name="name" value="{{$data['name']}}"><br><br>
    <input type="email" name="email" value="{{$data['email']}}"><br><br>
    <input type="number" name="Mobile" value="{{$data['Mobile']}}"><br><br>
    <button type="submit">Submit</button>
</form>