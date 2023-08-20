@extends('admin.admin_master')

@section('admin')
<div class="row">
<div class="col-lg-12">
    <div class="box mt-2">
        <div class="box-header with-border">
          <h3 class="box-title">Gallery Feture Update</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form   method="POST" action="{{ route('gallery.update')  }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $gallery->id }}">
                <input type="hidden" name="old_img" value="{{ $gallery->image}}">
                <input type="hidden" name="old_b_img" value="{{ $gallery->b_image}}">
                        <div class="form-group">
                            <h5> <span class="text-danger">*</span> Name</h5>
                            <div class="controls">
                            <input type="text" id="category_name" value="{{ $gallery->name }}" name="name" class="form-control" >
                            @error('category_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                           <div class="form-group">
                                <h5>Image <span class="text-danger">*</span></h5>
                                <div class="controls">
                                <input type="file" id=" image"  name="image" class="form-control">

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                           </div>
                           <div class="form-group">
                            <h5>Background Image <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <input type="file" id="b_image"  name="b_image" class="form-control">

                            @error('b_image')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                       </div>
                          <div class="form-group">
                            <h5>Long Descraption<span class="text-danger">*</span></h5>
                                <textarea name="long_descrip" rows="3"  id="textarea" class="form-control">{!! $gallery->long_descrip!!}</textarea>
                                @error('long_descrip')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5> <span class="text-danger">*</span> Date</h5>
                                <div class="controls">
                                <input type="date" id="date" value="{{ $gallery->date }}" name="date" class="form-control" >
                                @error('date')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                   <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-info" value="Update">
                </div>
               </form>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
@endsection
