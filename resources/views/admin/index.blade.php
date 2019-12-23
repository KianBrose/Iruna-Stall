<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="manifest" href="manifest.json" >
    <script src="js/serviceLoader.js"></script>
  </head>
  <body>
    <aside class="side-nav" id="show-side-navigation1">
      <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
      <div class="heading">
        <div class="info">
        <h3><a href="#">{{ auth()->user()->name }}</a></h3>
          <p>Adminstrator</p>
        </div>
      </div>
      <div class="search">
        <input type="text" placeholder="Type here"><i class="fa fa-search"></i>
      </div>
      <ul class="categories">
        <li><i class="fa fa-home fa-fw" aria-hidden="true"></i><a href="">Back to website</a>
          <ul class="side-nav-dropdown">
            <li><a href="/">Home</a></li>
            <li><a href="/account">Account</a></li>
            <li><a href="/additem">Add item</a></li>
            <li><a href="/about"></a></li>
            <li><a href="/viewitem">View item</a></li>
          </ul>
        </li>
        <li><i class="fa fa-bolt fa-fw"></i><a href="#">Manage iruna item</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Add iruna item</a></li>
            <li><a href="#">Delete iruna item</a></li>
            <li><a href="#">Find iruna item</a></li>
            <li><a href="#">Update iruna item</a></li>
          </ul>
        </li>
        <li><i class="fa fa-users fa-fw"></i><a href="#">Manage user</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Find user</a></li>
            <li><a href="#">Delete user</a></li>
            <li><a href="#">Update user</a></li>
          </ul>
        </li>
        <li><i class="fa fa-bolt fa-fw"></i><a href="#">Something else</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">ipsum dolor</a></li>
            <li><a href="#">dolor ipsum</a></li>
            <li><a href="#">amet consectetur</a></li>
            <li><a href="#">ipsum dolor sit</a></li>
          </ul>
        </li>
        <p>Example:</p>
        <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="#">Mailbox <span class="num dang">56</span></a></li>
        <li><i class="fa fa-wrench fa-fw"></i><a href="#"> Settings <span class="num prim">6</span></a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Coming soon</a></li>
            <li><a href="#">Coming soon</a></li>
            <li><a href="#">Coming soon</a></li>
            <li><a href="#">Coming soon</a></li>
            <li><a href="#">iComing soon</a></li>
          </ul>
        </li>
        <li><i class="fa fa-laptop fa-fw"></i><a href="#"> About UI &amp; UX <span class="num succ">43</span></a></li>
        <li><i class="fa fa-comments-o fa-fw"></i><a href="#"> Something else</a></li>
      </ul>
    </aside>
    <section id="contents">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <i class="fa fa-align-right"></i>
            </button>
            <a class="navbar-brand" href="#">my<span class="main-color">Dashboard</span></a>
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
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="content">
                <h2>Welcome to Dashboard</h2>
                <p>Here is the recent activity of our website</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <div class="box">
                <i class="fa fa-envelope fa-fw bg-primary"></i>
                <div class="info">
                  <h3>1,245</h3> <span>Emails</span>
                  <p></p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <i class="fa fa-file fa-fw danger"></i>
                <div class="info">
                  <h3>34</h3> <span>Items</span>
                  <p></p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <i class="fa fa-users fa-fw success"></i>
                <div class="info">
                  <h3>5,245</h3> <span>Users</span>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="charts">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="chart-container">
                <h3>Chart</h3>
                <canvas id="myChart"></canvas>
              </div>
            </div>
            <div class="col-md-6">
              <div class="chart-container">
                <h3>Chart2</h3>
                <canvas id="myChart2"></canvas>
              </div>
            </div>
          </div>
        </div>
      </section>
      
        <section class='statis text-center'>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                <div class="box bg-primary">
                  <i class="fa fa-eye"></i>
                  <h3>5,154</h3>
                  <p class="lead">Page views</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="box danger">
                  <i class="fa fa-user-o"></i>
                  <h3>245</h3>
                  <p class="lead">User registered</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="box warning">
                  <i class="fa fa-shopping-cart"></i>
                  <h3>5,154</h3>
                  <p class="lead">Items stored</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="box success">
                  <i class="fa fa-handshake-o"></i>
                  <h3>5,154</h3>
                  <p class="lead">Transactions</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="chrt3">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-9">
                <div class="chart-container">
                  <canvas id="chart3" width="100%"></canvas>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box">
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <script src='http://code.jquery.com/jquery-latest.js'></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
      <script src='js/admin.js'></script>
      </body>
    </html>
