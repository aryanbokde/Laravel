<h2>Add Salary</h2> 
@if (session('success'))
    <div class="alert alert-success" role="alert" style="color: #155724; padding: 10px;">
        {{ session('success') }}
    </div>    
@endif
<form method="post" action="addsalary">
  @csrf
  <select required class="" name="empId">
    @foreach ($data as $emp)
    <option class="" value="{{$emp->id}}">{{$emp->name}}</option>
    @endforeach
  </select><br/><br/>
  <input type="number" name="salary" placeholder="Enter Salary"/><br/><br/>
  <input type="date" name="date" placeholder=""/><br/><br/>
  <button type="submit" name="submit" >Submit</button>
</form>

