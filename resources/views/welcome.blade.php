<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Iruna Global Stall</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Iruna Global Stall</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Guides
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Pets Guide</a>
                        <a class="dropdown-item" href="#">Classes</a>
                        <a class="dropdown-item" href="#">Stats</a>
                        <a class="dropdown-item" href="#">Abilities</a>
                        <a class="dropdown-item" href="#">Apostolia</a>
                        <a class="dropdown-item" href="#">Refinement</a>
                        <a class="dropdown-item" href="#">Quests</a>
                        <a class="dropdown-item" href="#">Raids</a>
                        <a class="dropdown-item" href="#">Lottery</a>
                        <a class="dropdown-item" href="#">Background Music</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Events
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Anniversary</a>
                        <a class="dropdown-item" href="#">Academy</a>
                        <a class="dropdown-item" href="#">Setsubun</a>
                        <a class="dropdown-item" href="#">Valentienes Day</a>
                        <a class="dropdown-item" href="#">White Day</a>
                        <a class="dropdown-item" href="#">Easter</a>
                        <a class="dropdown-item" href="#">Summer</a>
                        <a class="dropdown-item" href="#">Halloween</a>
                        <a class="dropdown-item" href="#">Christmas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Zones
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Zones: Episode 1</a>
                        <a class="dropdown-item" href="#">Zones: Episode 2</a>
                        <a class="dropdown-item" href="#">Zones: Episode 3</a>
                        <a class="dropdown-item" href="#">Zones: Episode 4</a>
                        <a class="dropdown-item" href="#">Zones: Episode 5</a>
                        <a class="dropdown-item" href="#">Zones: Episode 6</a>
                        <a class="dropdown-item" href="#">Raids</a>
                        <a class="dropdown-item" href="#">Events</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Items
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Recovery</a>
                        <a class="dropdown-item" href="#">Status</a>
                        <a class="dropdown-item" href="#">Strengthening</a>
                        <a class="dropdown-item" href="#">Teleport</a>
                        <a class="dropdown-item" href="#">Skills</a>
                        <a class="dropdown-item" href="#">Chests</a>
                        <a class="dropdown-item" href="#">Collectables</a>
                        <a class="dropdown-item" href="#">Ores</a>
                        <a class="dropdown-item" href="#">Island Objects</a>
                        <a class="dropdown-item" href="#">Store Items</a>
                        <a class="dropdown-item" href="#">Pets</a>
                        <a class="dropdown-item" href="#">Others</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Items
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Recovery</a>
                        <a class="dropdown-item" href="#">Status</a>
                        <a class="dropdown-item" href="#">Strengthening</a>
                        <a class="dropdown-item" href="#">Teleport</a>
                        <a class="dropdown-item" href="#">Skills</a>
                        <a class="dropdown-item" href="#">Chests</a>
                        <a class="dropdown-item" href="#">Collectables</a>
                        <a class="dropdown-item" href="#">Ores</a>
                        <a class="dropdown-item" href="#">Island Objects</a>
                        <a class="dropdown-item" href="#">Store Items</a>
                        <a class="dropdown-item" href="#">Pets</a>
                        <a class="dropdown-item" href="#">Others</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Equipment
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Swords</a>
                        <a class="dropdown-item" href="#">Bows</a>
                        <a class="dropdown-item" href="#">Canes</a>
                        <a class="dropdown-item" href="#">Claws</a>
                        <a class="dropdown-item" href="#">Throwing</a>
                        <a class="dropdown-item" href="#">Armour</a>
                        <a class="dropdown-item" href="#">Additional</a>
                        <a class="dropdown-item" href="#">Special</a>
                        <a class="dropdown-item" href="#">Crystas</a>
                        <a class="dropdown-item" href="#">Al crystas</a>
                        <a class="dropdown-item" href="#">Relic crystas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Production
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Smithing</a>
                        <a class="dropdown-item" href="#">Carpentry</a>
                        <a class="dropdown-item" href="#">Tailoring</a>
                        <a class="dropdown-item" href="#">Chasing</a>
                        <a class="dropdown-item" href="#">Alchemy</a>
                        <a class="dropdown-item" href="#">Cooking</a>
                        <a class="dropdown-item" href="#">Calculator</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About Us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">About Us</a>
                        <a class="dropdown-item" href="#">Contact Us</a>
                    </div>
                </li>
                @if (Route::has('login')) 
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif 
                    @endauth 
                @endif

            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row" >
            <div class="col-md-7 offset-md-3" >

                <div style="height: auto !important;">
					<br>
                    <h4>Welcome!</h4>
                    <hr>

                    <form class="form-horizontal" name="form1" id="form1" action="/search" method="get">
                        <div class="row">
                            <div class="col-md-7 col-xs-8">
                                <input type="text" class="form-control" name="search" id="search" value="">
                            </div>
							<div class="form-group">
								<select id="searchtype" class="form-control" name="searchtype">
									<option value="equipment" selected="selected">Equipment</option>
									<option value="items">Items</option>
									<option value="xtal">Xtal</option>
									<option value="al">AL crystal</option>
									<option value="relic">Relic</option>
									<option value="ability">Ability</option>
								</select>
							</div>
                            <div class="col-md-2 col-xs-3">
                                <input type="button" class="btn btn-default btn-block" name="search_button" id="search_button" value="Search">
                            </div>
                        </div>
                    </form>
                    <div class="row divider" role="separator" ></div>

                    <p>Welcome to our Iruna Database</p>
					<p>Enter the item name, select type and press search</p>

                    <div class="row divider" role="separator" style="margin-top:20px;"></div>
                </div>
                <div></div>
            </div>
            <div class="col-md-2">
                <div>

                    <h4>&nbsp;</h4>
                    <hr>


                    <div>
                        <h4>Useful Links</h4></div>
                    <ul class="decoration_none">
                        <li><a href="http://iruna-online.com/">Official Iruna Website</a></li>
                        <li><a href="http://irunaonline.boards.net/">Iruna Boards Forum</a></li>
                        <li><a href="http://iruna-online.weebly.com/">Iruna Weebly</a></li>
                        <li><a href="https://wikiwiki.jp/iruna-online/">Iruna JP Wiki</a></li>
                    </ul>
                    <br>

                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>