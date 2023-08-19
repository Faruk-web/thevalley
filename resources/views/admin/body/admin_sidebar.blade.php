
 @php
$prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
@endphp

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
        <div class="user-profile">
			<div class="ulogo">
				 <a href="/">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center" >
						  <img src="   {{ asset('backend/images/backend_logo.png') }}" alt="logo" class="rounded-pill" height="70px" width="150px" style="background-color: white; ">
						  {{-- <h3><b>Classy</b> E-Commerce</h3> --}}
					 </div>
				</a>
			</div>
        </div>
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
		<li class=" {{($route=='dashboard')?'active':'' }}">
          <a href="{{ url('admin/dashboard') }}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>
        @php
        $brand = (auth()->guard('admin')->user()->brand == 1);
        $category = (auth()->guard('admin')->user()->category == 1);
        $product = (auth()->guard('admin')->user()->product == 1);
        $slider = (auth()->guard('admin')->user()->slider == 1);
        $cupons = (auth()->guard('admin')->user()->cupons == 1);
        $shipping = (auth()->guard('admin')->user()->shipping == 1);
        $setting = (auth()->guard('admin')->user()->setting == 1);
        $returnorder = (auth()->guard('admin')->user()->returnorder == 1);
        $review = (auth()->guard('admin')->user()->review == 1);
        $orders = (auth()->guard('admin')->user()->orders == 1);
        $stock = (auth()->guard('admin')->user()->stock == 1);
        $reports = (auth()->guard('admin')->user()->reports == 1);
        $alluser = (auth()->guard('admin')->user()->alluser == 1);
        $adminuserrole = (auth()->guard('admin')->user()->adminuserrole == 1);
        @endphp
        @if($brand == true)
        <li class="treeview {{ ($prefix=='/brand')?'active':'' }}">
          <a href="#">
            {{-- <i class="fab fa-app-store"></i> --}}
            <i class="fa fa-list-alt fa-5x"></i>
            <span>Brands</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all.brand') }}"><i class="ti-more"></i>All Brands</a></li>
          </ul>
        </li>
        @endif
        @if($slider == true)
        <li class="treeview  {{ ($prefix=='/slider')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-sliders fa-5x"></i>
            <span>Slider Option</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('manage.slider')}}"><i class="ti-more"></i>Manage Slider </a></li>

          </ul>
        </li>
        @else
        @endif
        <li class="treeview  {{ ($prefix=='/banner')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-picture-o fa-5x"></i>
            <span>The Valley</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('bennar.show') }}"><i class="ti-more"></i>Create Valley</a></li>
          </ul>
        </li>
        <li class="treeview  {{ ($prefix=='/nature')?'active':'' }}  ">
            <a href="#">
              <i class="fa fa-picture-o fa-5x"></i>
              <span>The Nature</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('nature.show') }}"><i class="ti-more"></i>Create Nature</a></li>
            </ul>
          </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-picture-o fa-5x"></i>
              <span>Plot Type</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('plot.show') }}"><i class="ti-more"></i> Plot Show</a></li>
            </ul>
          </li>
          <li class="treeview  {{ ($prefix=='/bannerCategory')?'active':'' }}  ">
            <a href="#">
              <i class="fa fa-picture-o fa-5x"></i>
              <span>Plot Category</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ ($route == 'bannerCategory.manage')? 'active':'' }}">
                <a href="{{ route('bannerCategory.manage') }}"><i class="ti-more"></i>Manage Plot Category</a></li>
            </ul>
          </li>
        @if($alluser == true)
        <li class="treeview {{ ($prefix == '/alluser')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-users fa-5x"></i>
            <span>All Users </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'all-users')? 'active':'' }}"><a href="{{ route('all-users') }}"><i class="ti-more"></i>All Users</a></li>
          </ul>
        </li>
        @else
        @endif
     @if($adminuserrole == true)
        <li class="treeview {{ ($prefix == '/adminuserrole')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-user-circle fa-5x"></i>
            <span>Admin User Role </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'all.admin.user')? 'active':'' }}">
          <a href="{{ route('all.admin.user') }}"><i class="ti-more"></i>All Admin user role </a></li>
          </ul>
        </li>
        @else
        @endif
          <li class="treeview {{ ($prefix == '/employee')?'active':'' }}  ">
            <a href="#">
              <i class="fa fa-user fa-5x"></i>
              <span>Employee Manage</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{($route == 'employee.add')? 'active':''}}"><a href="{{route('employee.addform')}}"><i class="ti-more"></i>Add Employee</a></li>
              <li class="{{ ($route == 'employee.view')? 'active':'' }}"><a href="{{route('employee.view')}}"><i class="ti-more"></i>Manage Employee</a></li>
                </ul>
          </li>
        @if($setting == true)
        <li class="treeview {{ ($prefix == '/setting')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-cog fa-5x"></i>
            <span>Manage Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'site.setting')? 'active':'' }}"><a href="{{ route('site.setting') }}"><i class="ti-more"></i>Site Setting</a></li>
        <li class="{{ ($route == 'seo.setting')? 'active':'' }}"><a href="{{ route('seo.setting') }}"><i class="ti-more"></i>Seo Setting</a></li>
          </ul>
        </li>
        @else
        @endif
      </ul>
    </section>
  </aside>
