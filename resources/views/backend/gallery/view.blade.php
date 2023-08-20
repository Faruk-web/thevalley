@extends('admin.admin_master')
@section('admin')
<div class="row">
    <div class="col-lg-8">
        <div class="box mt-2">
            <div class="box-header with-border text-center bg-secondary">
              <h3 class="box-title ">Gallery Feture List</h3>
          </div>
        <!-- /.box-header -->
  <div class="box-body">
    <div class="table-responsive">
        <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Edite</th>
                    <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gallery as $item)
                    <tr>
                        <td>
                            {{$item->name}}
                        </td>
                        <td>
                            <img src="{{asset($item->image)}}" width="60px;" height="60px;">
                        </td>
                        <td>
                            {{$item->date}}
                        </td>
                        <td>
                            <a href="{{route('gallery.edit',$item->id )}}" class="btn btn-primary">edit</a>
                        </td>
                        <td>
                        <a href="{{route('gallery.delete',$item->id)}}" class="btn btn-primary">Delete</a>
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
<div class="col-lg-4">
    <div class="box mt-2">
        <div class="box-header with-border">
          <h3 class="box-title">Create Gallery Feture</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <form method="POST" action="{{ route('gallery.store')  }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <h5> <span class="text-danger">*</span> Name</h5>
                <div class="controls">
                <input type="text" id="name" name="name" class="form-control" >
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
               </div>
                </div>
           <div class="form-group">
             <h5>Image <span class="text-danger">*</span></h5>
             <div class="controls">
                 <input type="file" id="image" name="image" class="form-control" required="Input Img">
                 @error('image')
                 <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
               @enderror
           </div>
           <div class="form-group">
            <h5>Background Image <span class="text-danger">*</span></h5>
            <div class="controls">
                <input type="file" id="b_image" name="b_image" class="form-control">
                @error('b_image')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
          </div>
          <div class="form-group">
            <h5>Long Descraption<span class="text-danger">*</span></h5>
                <textarea name="long_descrip" rows="3"  id="textarea" class="form-control"></textarea>
                @error('long_short_descrip')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <h5> <span class="text-danger">*</span> Date</h5>
                <div class="controls">
                <input type="date" id="date" name="date" class="form-control" >
               </div>
            </div>
          <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-info" value="Add Gallery">
        </div>
  </form>
</div>
<!-- /.box-body -->
</div>
</div>
</div>
@endsection














