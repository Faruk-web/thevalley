
 @extends('admin.admin_master')
 {{-- section id is yeild name  --}}
 @section('admin')
 <div class="container-full">
    <!-- Main content -->
    <section class="content">
        <div class="row">
     {{-- Total Admin, User, Employee, Salary View  Section Start--}}
     <div class="col-xl-4 col-6">
        <div class="box overflow-hidden pull-up">
            <div class="box-body">
                <div class="icon bg-primary-light rounded w-60 h-60">
                    <i class="text-info mr-0 font-size-24 mdi mdi-account-multiple"></i>
                </div>
                <div>
                    @php
                        $admins = App\Models\Admin::all()->count();
                    @endphp
                    <p class="text-mute mt-20 mb-0 font-size-16">Total Admin</p>
                    <h3 class="text-white mb-0 font-weight-500">{{$admins}}</h3>
            </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-6">
        <div class="box overflow-hidden pull-up">
            <div class="box-body">
                <div class="icon bg-warning-light rounded w-60 h-60">
                    <i class="text-info mr-0 font-size-24 mdi mdi-account-multiple"></i>
                </div>
                <div>
                    @php
                        $employees = App\Models\Employee::all()->count();
                    @endphp
                    <p class="text-mute mt-20 mb-0 font-size-16">Total Employee</p>
                    <h3 class="text-white mb-0 font-weight-500">{{ $employees }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-6">
        <div class="box overflow-hidden pull-up">
            <div class="box-body">
                <div class="icon bg-info-light rounded w-60 h-60">
                    <i class="text-info mr-0 font-size-24 mdi mdi-account-multiple"></i>
                </div>
                <div>
                    @php
                        $users = App\Models\User::all()->count();
                    @endphp
                    <p class="text-mute mt-20 mb-0 font-size-16">Total User</p>
                    <h3 class="text-white mb-0 font-weight-500">{{$users}}</h3>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>
    {{-- Total Admin, User, Employee, Salary View  Section End--}}
            <div class="col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title align-items-start flex-column">
                            Recent All Orders
                        </h4>
                    </div>
                    @php
                    $orders = App\Models\Order::where('status','pending')->orderBy('id','DESC')->get();
                        @endphp
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-border">
                                <thead>
                                    <tr class="text-uppercase bg-lightest">
                                        <th style="min-width: 250px"><span class="text-white">Order Date</span></th>
                                        <th style="min-width: 100px"><span class="text-fade">Invoice</span></th>
                                        <th style="min-width: 100px"><span class="text-fade">Amount</span></th>
                                        <th style="min-width: 150px"><span class="text-fade">Payment</span></th>
                                        <th style="min-width: 130px"><span class="text-fade">Status</span></th>
                                        <th style="min-width: 120px"><span class="text-fade">Process</span> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $item)
                                    <tr>
                                        <td class="pl-0 py-8">
                                             <span class="text-white font-weight-600 d-block font-size-16">
                                                 @php
                                                    $data = new Carbon\Carbon($item->order_date);
                                                 @endphp

                                                {{ $data->diffForHumans()  }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                {{ $item->invoice_no }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-fade font-weight-600 d-block font-size-16">
                                                $ {{ $item->amount }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                {{ $item->payment_method }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary-light badge-lg">{{ $item->status }}</span>
                                        </td>
                                        <td class="">
                                            <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                            <a href="" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    {{-- Ashim Graph--}}
    </div>
    </div>
    </section>
    <!-- /.content -->
  </div>
  {{-- {{dd() }} --}}
  @endsection
  @push("js")

 @endpush
