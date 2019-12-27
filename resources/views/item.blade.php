<!DOCTYPE html>
<html>
<head>
<meta name="robots" content="index, follow"/>
<meta name="description" content="Find, buy and sell items for free on the Iruna Online Global Stall! In the Global Stall, you can post your items as a seller and search for items as a buyer. The stall is free to use and requires no account to search for items."/>
<meta name="keywords" content="Iruna, Stall, Global, iruna, stall, global"/>
    <title>Irune Global stall</title>
       
    <!-- manifest for PWA -->
    <link rel="manifest" href="manifest.json" >
    <script src="js/serviceLoader.js"></script>
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
