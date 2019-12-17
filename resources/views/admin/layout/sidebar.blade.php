<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('user_images',$user->userimage)}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->lastname.' '.Auth::user()->firstname}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <li>

        <a href="{{route('dashboard.index')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            {{-- <i class="fa fa-angle-left pull-right"></i> --}}
          </span>
        </a>

      </li>

      {{-- <li><a href="{{route('user.profile')}}"><i class="fa fa-picture-o"></i> Upload Profile Photo</a></li> --}}
      {{-- <li><a href="{{route('comment.index')}}"><i class="fa fa-comment-o"></i> Comments</a></li> --}}

      
      {{-- @if (Auth::user()->role->id==1||Auth::user()->role->id==3) --}}

      <li><a href="{{route('complain.index')}}"><i class="fa fa-comments-o"></i> Complains</a></li>
      <li><a href="{{route('staff.index')}}"><i class="fa fa-users"></i> Staff</a></li>

      {{-- @endif --}}

     

      <li>
        <form id="logout-user" style="display: none" action="{{ route('user.logout') }}" method="post">
          {{ csrf_field() }}
        </form>
        <a href="" onclick="
        if (confirm('Are you sure you want to logout?')) {
            event.preventDefault();
        document.getElementById('logout-user').submit();
        } else {
            event.preventDefault();
        }">
          <i class="fa fa-sign-out"></i> Logout
        </a>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>