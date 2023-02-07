<h2>Employee List</h2> 

<table style="border:1px">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Designation</th>
      <th>salary</th>
      <th>DOJ</th>
    </tr>
    @for ($i=0; $i < count($data); $i++)       
      <tr>
        <td>{{$data[$i]['id']}}</td>
        <td><a href="/employee/detail/{{$data[$i]['id']}}">{{$data[$i]['name']}}</a></td>       
        <td>{{$data[$i]['email']}}</td>
        <td>{{$data[$i]['designation']}}</td>
        <td>{{$data[$i]['salary']}}</td>
        <td>{{$data[$i]['DOJ']}}</td>
      </tr>
    @endfor
    
   
    
</table>
<div>
    {{-- {{$data->links()}} --}}
</div>

<?php 
  
  

?>
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