<x-header componentName="Home"/>
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <h1 style="color:rgb(239, 59, 45)">Home Page</h1>
            <a href="{{ URL:: to('/')}}">Home</a> |<a href="{{URL::to('/about')}}">About</a> | <a href="{{URL::to('/contact')}}">contact</a>
        </div>
    </div>
</div>
<x-footer/>





