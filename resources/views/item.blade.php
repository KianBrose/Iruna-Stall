<!DOCTYPE html>
<html>
<head>
<meta name="robots" content="index, follow"/>
<meta name="description" content="Find and sell items easily on Iruna Global Stall for free!"/>
<meta name="keywords" content="Iruna, Stall, Global, iruna, stall, global"/>
    <title>Irune Global stall</title>
</head>
<body>
    <h1>All item</h1>
    @foreach ($item as $item)
    <li><a href="{{ $item->routes }}">{{ $item->name }}</a></li>
    @endforeach
<script type="text/javascript" id="cookieinfo"
    src="//cookieinfoscript.com/js/cookieinfo.min.js">
</script>
</body>
</html>