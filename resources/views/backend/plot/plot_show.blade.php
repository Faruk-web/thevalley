@extends('admin.admin_master')

@section('admin')
<div class="row">
    <div class="col-lg-12">
        <div class="box mt-2">
            <div class="box-header with-border text-center bg-secondary">
              <h3 class="box-title ">Plot Show</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
                <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row" class="btn-primary">
                                <th >Plot Img</th>
                                <th>Name</th>
                                <th >Discription</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($valleys as $item)
                            <tr>
                                <td>
                                    <img src="{{asset($item->frist_image)}}" width="50px;" height="40px;">
                                </td>
                                <td>{{$item->frist_name}}</td>
                                <td>{{$item->frist_descrip}}</td>
                                <td>
                                    <a href="{{route('plot.edit',$item->id )}}" class="btn btn-primary">Update</a>
                                    {{-- <a href="{{route('bennar.delete',$item->id)}}" class="btn btn-primary">Delete</a> --}}
                                </td>
                           </tr>

                           @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
   </div>
</div>
<!-- /.box-body -->
</div>
</div>
</div>
@endsection

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> --}}



