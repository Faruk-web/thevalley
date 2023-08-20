@extends('admin.admin_master')

@section('admin')
<div class="row">


<div class="col-lg-12">
    <div class="box mt-2">
        <div class="box-header with-border">
          <h3 class="box-title">Update The Valley</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form   method="POST" action="{{ route('bannerCategory.update')  }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $bennars->id }}">
                <input type="hidden" name="old_img" value="{{ $bennars->bennar_img}}">
                        <div class="form-group">
                            <h5> <span class="text-danger">*</span>Name</h5>
                            <div class="controls">
                            <input type="text" id="category_name" value="{{ $bennars->category_name }}" name="category_name" class="form-control" >
                            @error('category_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                            </div>
                           <div class="form-group">
                           <h5>Img <span class="text-danger">*</span></h5>
                           <div class="controls">
                           <input type="file" id=" bennar_img"  name="bennar_img" class="form-control" required="Input Img">

                           @error('bennar_img')
                           <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                         </span>
                             @enderror
                        </div>
                           </div>
                           <div class="form-group">
                                <h5>Video Link <span class="text-danger">*</span></h5>
                                <input type="text" id="video_link" name="video_link" value="{{ $bennars->video_link }}" class="form-control">
                                </div>
                            </div>
                          <div class="form-group">
                          <h5>Short Descraption<span class="text-danger">*</span></h5>
                              <textarea name="plot_short_descrip" rows="3"  id="textarea" class="form-control">{!! $bennars->plot_short_descrip!!}</textarea>
                              @error('four_short_descrip')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
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
