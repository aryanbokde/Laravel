<h2>Member Edit</h2> 
@if (session('success'))
    <div class="alert alert-success" role="alert" style="color: #155724; padding: 10px;">
        {{ session('success') }}
    </div>    
@endif
<form method="post" action="/edit">
    @csrf
    <input type="hidden" name="id" value={{$data['id']}}>
    <input type="text" name="name" placeholder="Name" value="{{$data['name']}}"><br><br>
    <input type="email" name="email" placeholder="Email" value="{{$data['email']}}"><br><br>
    <input type="text" name="address" placeholder="Address" value="{{$data['address']}}"><br><br>
    <button type="submit">Submit</button>
</form>