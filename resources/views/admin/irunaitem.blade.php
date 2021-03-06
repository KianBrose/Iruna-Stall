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
          <div class="container fluid">
              <form action="/admin/search" method="GET">
                @csrf
              <div class="container mt-3" style="margin-top: 20px;">
                    <input class="form-control" id="myInput" type="text" name="search" placeholder="Find item">
              
          </div>
        </form>
                    <br>          

            <table class="table table-hover">
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($irunaitem as $item)
                <tr>
                <td>{{$item->id }}</td>
                <td><a style="color:white;" href="/admin/item/{{$item->id}}">{{ $item->name }}</a></td>
                <td>{{$item->category}}</td>
                </tr>
                @endforeach
                
            </tbody>
            {{ $irunaitem->links() }}
        </table>
                </div>
          </div>
      </div>
      <script src='http://code.jquery.com/jquery-latest.js'></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>-->
      <script src='{{asset('js/admin.js')}}'></script>
      <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                let value = $(this).val().toLowerCase();
                console.log(value)
                $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
        </script>
    </section>
  </body>
</html>