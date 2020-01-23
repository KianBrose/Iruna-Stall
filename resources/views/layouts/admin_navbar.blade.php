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
      <li><i class="fa fa-home fa-fw" aria-hidden="true"></i><a href="#">Back to website</a>
        <ul class="side-nav-dropdown">
          <li><a href="/">Home</a></li>
          <li><a href="/account">Account</a></li>
          <li><a href="/additem">Add item</a></li>
          <li><a href="/about"></a>About</li>
          <li><a href="/viewitem">View item</a></li>
        </ul>
      </li>
      <li><i class="fa fa-bolt fa-fw"></i><a href="#">Manage iruna item</a>
        <ul class="side-nav-dropdown">
          <li><a href="/admin/createitem">Add iruna item</a></li>
          <li><a href="#">Delete iruna item</a></li>
          <li><a href="/admin/irunaitem">Find iruna item</a></li>
          <li><a href="/admin/irunaitem">Update iruna item</a></li>
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