<h2>Member List</h2> 
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 50%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    .w-5{
        display: none;
    }
    </style>
@if (session('success'))
<p style="color: #155724; padding: 10px;">{{ session('success') }}</p>
@endif

<table style="border:1px">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Address</th>
      <th>Action</th>
    </tr>
    @foreach ($members as $item)
    <tr>
      <td>{{$item['id']}}</td>
      <td>{{$item['name']}}</td>
      <td>{{$item['email']}}</td>
      <td>{{$item['address']}}</td>
      <td><a href="{{"deletemember/" . $item['id']}}">Delete</a> / <a href="{{"edit/" . $item['id']}}">Edit</a></td>
    </tr>
    @endforeach
    
</table>
<div>
    {{$members->links()}}
</div>