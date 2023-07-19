
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
        {{-- @if($category == true)
        <li class="treeview {{ ($prefix=='/category')?'active':'' }} ">
          <a href="#">
            <i class="fa fa-list-alt fa-5x"></i>
            <span>Plot Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all.category') }}"><i class="ti-more"></i>All Category</a></li>
            <li><a href="{{ route('all.subcategory') }}"><i class="ti-more"></i>All Sub Category</a></li>
          </ul>
        </li>
        @else
        @endif --}}
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
            {{-- <li><a href="{{ route('bennar.manage') }}"><i class="ti-more"></i>Add Valley</a></li> --}}
            <li><a href="{{ route('bennar.show') }}"><i class="ti-more"></i>Create Valley</a></li>
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
              {{-- <li><a href="{{ route('bennar.manage') }}"><i class="ti-more"></i>Add Valley</a></li> --}}
              {{-- <li><a href="{{ route('plot.manage') }}"><i class="ti-more"></i>Create Plot Type</a></li> --}}
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
              {{-- <li><a href="{{ route('manage.cupon')}}"><i class="ti-more"></i>Manage Cupon </a></li> --}}
            </ul>
          </li>
        {{-- Ashim Banner Category --}}
        @if($shipping == true)
        <li class="treeview  {{ ($prefix=='/shipping')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-ship fa-5x"></i>
            <span>Shipping Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="{{ ($route == 'manage.division')? 'active':'' }}">
              <a href="{{ route('manage.division') }}"><i class="ti-more">
                </i>Shipping Division</a></li>

          <li class="{{ ($route == 'manage.district')? 'active':'' }}">
            <a href="{{ route('manage.district') }}"><i class="ti-more">
              </i>Shipping District</a></li>

              <li class="{{ ($route == 'manage.state')? 'active':'' }}">
                <a href="{{ route('manage.state') }}"><i class="ti-more">
                  </i>Shipping State</a></li>
          </ul>
        </li>
        @else
        @endif
        @if($orders == true)
        <li class="treeview  {{ ($prefix=='/orders')?'active':'' }}  ">
          <a href="#">
            <i class="fab fa-first-order"></i>
            <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'pending.orders')? 'active':'' }}">
              <a href="{{ route('pending.orders') }}"><i class="ti-more"></i>Pending Order</a></li>
              <li class="{{ ($route == 'confirmed-orders')? 'active':'' }}"><a href="{{ route('confirmed-orders') }}">
                <i class="ti-more"></i>Confirmed Orders</a></li>
              <li class="{{ ($route == 'confirm-processing')? 'active':'' }}"><a href="{{ route('confirm-processing') }}">
                <i class="ti-more"></i>Processing Orders</a></li>
            <li class="{{ ($route == 'picked-orders')? 'active':'' }}"><a href="{{ route('picked-orders') }}">
              <i class="ti-more"></i> Picked Orders</a></li>
            <li class="{{ ($route == 'shipped-orders')? 'active':'' }}"><a href="{{ route('shipped-orders') }}">
              <i class="ti-more"></i> Shipped Orders</a></li>
           <li class="{{ ($route == 'delivered-orders')? 'active':'' }}"><a href="{{ route('delivered-orders') }}">
            <i class="ti-more"></i> Delivered Orders</a></li>
        <li class="{{ ($route == 'cancel-orders')? 'active':'' }}"><a href="{{ route('cancel-orders') }}"><i class="ti-more"></i> Cancel Orders</a></li>
          </ul>
        </li>
        @else
        @endif
       @if($returnorder == true)
        <li class="treeview {{ ($prefix == '/return')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-undo fa-5x"></i>
            <span>Return Order</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'return.request')? 'active':'' }}"><a href="{{ route('return.request') }}"><i class="ti-more"></i>Return Request</a></li>
        <li class="{{ ($route == 'all.request')? 'active':'' }}"><a href="{{ route('all.request') }}"><i class="ti-more"></i>All Request</a></li>
          </ul>
        </li>
        @else
        @endif
        @if($stock == true)
        <li class="treeview {{ ($prefix == '/stock')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-list fa-5x"></i>
            <span>Manage Stock </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'product.stock')? 'active':'' }}"><a href="{{ route('product.stock') }}"><i class="ti-more"></i>Product Stock</a></li>
          </ul>
        </li>
        @else
        @endif
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
        {{-- ashim start --}}
         {{-- Ashim Start  Department  --}}
        {{-- @if($department == true) --}}
        <li class="treeview {{ ($prefix == '/department')?'active':'' }}  ">
            <a href="#">
              <i class="fa fa-building-o fa-5x"></i>

              <span>Department</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ ($route == 'department.view')? 'active':'' }}"><a href="{{route('department.view')}}"><i class="ti-more"></i>Manage Department</a></li>
                </ul>
          </li>
          {{-- @else --}}

          {{-- @endif --}}
          {{-- @if($employee == true) --}}
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
           <li class="treeview">
            <a href="#">
              <i class="fa fa-money fa-5x"></i>
              <span>Manage Salary</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">


            </ul>
          </li>

               <li class="treeview {{ ($prefix == '/expense')?'active':'' }}  ">
                 <a href="#">
                   <i data-feather="file"></i>
                   <span>Expanse </span>
                   <span class="pull-right-container">
                     <i class="fa fa-angle-right pull-right"></i>
                   </span>
                 </a>
                 <ul class="treeview-menu">
                 </ul>
               </li>

       @if($reports == true)

        <li class="treeview {{ ($prefix == '/reports')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>All Reports </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'all-reports')? 'active':'' }}">
        <li class="{{ ($route == 'all-reports')? 'active':'' }}"><a href="{{ route('all-reports') }}"><i class="ti-more"></i>Order Reports</a></li>
        <li class="{{ ($route == 'sallary-report-view')? 'active':'' }}"><a href="{{ route('sallary-report-view') }}"><i class="ti-more"></i>Salary Reports</a></li>
        <li class="{{ ($route == 'return-report-view')? 'active':'' }}"><a href="{{ route('return-report-view') }}"><i class="ti-more"></i>Return Product Reports</a></li>
        <li class="{{ ($route == 'User-activity-view')? 'active':'' }}"><a href="{{ route('User-activity-view') }}"><i class="ti-more"></i>User Active Reports</a></li>
        <li class="{{ ($route == 'profit.report')? 'active':'' }}"><a href="{{ route('profit.report') }}"><i class="ti-more"></i>Profit Reports</a></li>
          </ul>
        </li>

        @else
        @endif


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
        {{-- <li class="treeview  {{ ($prefix=='/orders')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-industry fa-5x"></i>
            <span>Suppliers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="{{ ($route == 'pending.orders')? 'active':'' }}">

              <a href="{{ route('suppliers.show') }}"><i class="ti-more"></i>All Suppliers</a></li>

          </ul>
        </li> --}}
        {{-- for purchase menu --}}


        {{-- @if($purchase == true) --}}
        {{-- <li class="treeview {{ ($prefix == '/purchase')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-shopping-cart fa-5x"></i>
            <span>Purchase</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'purchase.add')? 'active':'' }}"><a href="{{route('purchase.add')}}"><i class="ti-more"></i>Add Purchase</a></li>
            <li class="{{ ($route == 'purchase.view')? 'active':'' }}"><a href="{{route('purchase.view')}}"><i class="ti-more"></i>Manage Purchase</a></li>
          </ul>

        </li> --}}


        {{-- @else --}}

        {{-- @endif --}}

        {{-- end for purchase menu --}}



      </ul>
    </section>


  </aside>
