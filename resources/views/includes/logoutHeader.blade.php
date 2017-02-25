<header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/dashboard" style="color:#FFFF00">Pangasinan State University Alaminos City Campus</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/dashboard">HOME</a></li>
      <li><a href="viewprofile">PROFILE</a></li>
      <li><a href="about">ABOUT</a></li>
       <li><a href="gallery">GALLERY</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="search">
      {{ csrf_field()}}
      <div class="form-group">
        <input type="text" class="form-control" name="q" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('logout')}}">Logout</a></li>
      </ul>
      </div>
      </div>
    </nav>
</header>