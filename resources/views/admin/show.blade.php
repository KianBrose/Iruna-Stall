<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Dashboard | Iruna Global Stall</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="manifest" href="manifest.json" >
    <script src="js/serviceLoader.js"></script>
  </head>
  <body>
      <style>
          td {
              color: white;
          }
          .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
  background-color: black;
} 
          </style>
    @include('layouts.admin_navbar')
    <section id="contents">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <i class="fa fa-align-right"></i>
            </button>
            <a class="navbar-brand" href="#">Iruna<span class="main-color">Stall</span></a>
          </div>
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My profile <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/account"><i class="fa fa-user-o fw"></i> My account</a></li>
                  <li><a href="#"><i class="fa fa-envelope-o fw"></i> My inbox</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/logout"><i class="fa fa-sign-out" onclick="event.preventDefault(); 
                  document.getElementById('logout').submit()"></i> Log out</a></li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-comments"></i><span>23</span></a></li>
              <li><a href="#"><i class="fa fa-bell-o"></i><span>98</span></a></li>
              <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i></a></li>
            </ul>
          </div>
          <form id="logout" action="/logout" method="POST" style="display:none;">
            @csrf
          </form>
        </div>
      </nav>
      <div class="welcome">
          @if($errors->any())
          <div class="alert alert-success"> {{$errors->first()}}</div>
          @endif
          <div class="container fluid">
          <form style="margin-top: 20px;" action="/admin/item/edit/{{$item->id}}" method="POST">
            @csrf
                        <div class="form-group">
                          <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="name" value="{{$item->name}}">
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <input type="text" name="description" class="form-control" aria-describedby="description" value="{{$item->description}}">
                            </div>
                        <div class="form-group">
                                <label for="inputState">Category</label>
                                <select id="inputState" class="form-control" name="category">
                                <option selected>{{$item->category}}</option>
                                  <option>Chests</option>
                                  <option>Ores</option>
                                  <option>Recovery</option>
                                  <option>Bows</option>
                                  <option>Claws</option>
                                  <option>Canes</option>
                                  <option>Collectibles</option>
                                  <option>Swords</option>
                                  <option>IslandItems</option>
                                  <option>Crystas</option>
                                  <option>Throwing</option>
                                  <option>Additional</option>
                                  <option>Special</option>
                                  <option>AlCrystas</option>
                                  <option>RelicCrystas</option>
                                </select>
                              </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                
          </div>
      </div>
      <script src='http://code.jquery.com/jquery-latest.js'></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>-->
      <script src='{{asset('js/admin.js')}}'></script>
    </section>
  </body>
</html>