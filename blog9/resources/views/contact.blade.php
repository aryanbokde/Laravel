<x-header componentName="Contact"/>
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <h1 style="color:rgb(239, 59, 45)">Contact Page</h1>
            <a href="{{ URL:: to('/')}}">Home</a> |<a href="{{URL::to('/about')}}">About</a> | <a href="{{URL::to('/contact')}}">contact</a>
            <h3 style="color:rgb(21, 13, 183)">Current Url {{URL:: current()}}</h3>
            <h3 style="color:rgb(0, 0, 0)">Full Url {{URL:: full()}}</h3>
            <h3 style="color:rgb(2, 115, 2)">Previous Url {{URL:: previous()}}</h3>
        </div>
    </div>
</div>
<x-footer/>

