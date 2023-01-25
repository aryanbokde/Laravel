<h2>Employee Detail</h2>

<div class="container">
    <ul class="empDetail">
        <li><p><strong>Name : </strong> {{$data['empData']->name}}</P></li>
        <li><p><strong>Last Name : </strong> {{$data['empData']->lname}}</P></li>
        <li><p><strong>Email : </strong> {{$data['empData']->email}}</P></li>
        <li><p><strong>Designation : </strong> {{$data['empData']->designation}}</P></li>
        <li><p><strong>Salary : </strong> {{$data['empData']->salary}}</P></li>
        <li><p><strong>DOJ : </strong> {{$data['empData']->DOJ}}</P></li>
    </ul>
</div>

<h2>Salary Detail</h2>
<div class="container">
    <div class="empSalary">
        <table>
            <tr>
                <th>Date</th>
                <th>Salary</th>
            </tr>
            @foreach($data['empSalary'] as  $value)
            <tr>                
                <td>{{$value->date}}</td>
                <td>{{$value->salary}}</td>
            </tr>
            @endforeach
            
            
        </table>
    </div>
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