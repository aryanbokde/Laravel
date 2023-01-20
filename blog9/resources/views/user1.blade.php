<h1>User Login</h1>

<form action="users" method="post">
    @csrf
    {{ method_field('PUT') }}
    <input type="text" placeholder="Email" name="email" class="form-control">
    <input type="password" placeholder="Password" name='password' class="form-control">
    <input type="submit" name='submit' value="Submit" >
</form>
    

{{-- <table width="100" style="margin-top:50px;">
    <tr>
        <th>Id</th>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Img</th>
    </tr>
    @foreach ($collection as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td> {{$item['email']}}</td>
        <td>{{$item['first_name']}}</td>
        <td>{{$item['last_name']}}</td>
        <td><img src="{{$item['avatar']}}" alt="{{$item['first_name']}}"/> </td>
    </tr>
    @endforeach
</table> --}}