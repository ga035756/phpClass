<x-app-layout>
    @if(Auth::check())
    {{ Auth::user()['name'];}} login success
    @else
    hello world!!
    @endif
</x-app-layout>