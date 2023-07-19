
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
