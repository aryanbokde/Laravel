@if (session('success'))
<p style="color: #155724; padding: 10px;">{{ session('success') }}</p>
@endif


<h2>Flight List</h2> 

<table style="border:1px">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Action</th>
    </tr>
    @foreach ($data as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->Mobile}}</td>
      <td><a href="{{"delflight/" . $item->id}}">Delete</a> / <a href="{{"editflight/" . $item->id}}">Edit</a></td>
    </tr>
    @endforeach
    
</table>
<div>
    {{-- {{$data->links()}} --}}
</div>










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
