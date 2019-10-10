<!DOCTYPE html>
<html>
    <head>
        <title>Iruna Global Stall</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div>Welcome {{ Auth::user()->name }}</div>
        <a class="logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                @csrf
            </form>
    </body>
</html>