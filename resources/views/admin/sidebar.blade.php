<nav id="sidebar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title">
      <h1 class="h5">Mark Stephen</h1>
      <p>Web Designer</p>
    </div>
  </div>
  <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
  <ul class="list-unstyled">
          <li class="active"><a href="{{url('home')}}"> <i class="icon-home"></i>Hotel Rooms </a></li>
        
          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="{{url('create_room')}}">Add Rooms</a></li>
              <li><a href="{{url('view_room')}}">View rooms</a></li>
            </ul>
          </li>

          <li class=""><a href="{{url('bookings')}}"> <i class="icon-home"></i>Bookings </a></li>

          <li class=""><a href="{{url('view_gallary')}}"> <i class="icon-home"></i>Gallary </a></li>


  </ul>
</nav>