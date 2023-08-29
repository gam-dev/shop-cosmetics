

@if (session()->has('user')) 
    @include('elements.menu_logined') 
@else
    @include('elements.menu_unlogin') 
@endif