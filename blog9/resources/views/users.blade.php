<h1>Hello, {{$users[0]}}</h1>


<h2>Using For Loop</h2>
@for($i = 0; $i < count($users); $i++)
    <h4>User name is {{ $users[$i] }}.</h4>
@endfor


<h2>Using For Foreach Loop</h2>
@if(count($users) > 0 )
@foreach($users as $user)
<h4>First User Name {{ $user }}.</h4>
@endforeach
@endif


<h2>Conditional Loop</h2>
@foreach($users as $user)
@if($user == "Rakesh")
<h4>First User Name {{ $user }}.</h4>
@elseif($user == "Anil")
<h4>Second User Name {{ $user }}.</h4>
@else
    <h4>Unknown User {{ $user }}.</h4>
@endif
@endforeach


<h2>Using For Foreach Loop Include Blade Template</h2>
@if(count($users) > 0 )
@foreach($users as $user)
    @include('inner')
@endforeach
@endif


@csrf


<script>
    // var data = @json($users);
    // console.log(data);
    // console.log(data[0]);
</script>