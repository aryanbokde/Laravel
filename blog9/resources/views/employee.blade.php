<h2>Employee List</h2> 

<table style="border:1px">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Designation</th>
      <th>salary</th>
      <th>DOJ</th>
    </tr>
    @foreach ($data as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td><a href="/employee/detail/{{$item->id}}">{{$item->name}}</a></td>
      <td>{{$item->lname}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->designation}}</td>
      <td>{{$item->salary}}</td>
      <td>{{$item->DOJ}}</td>
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