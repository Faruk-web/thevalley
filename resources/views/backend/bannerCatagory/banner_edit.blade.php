@extends('admin.admin_master')

@section('admin')
<div class="row">


<div class="col-lg-12">
    <div class="box mt-2">
        <div class="box-header with-border">
          <h3 class="box-title">Plot Category Update</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form   method="POST" action="{{ route('bannerCategory.update')  }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $bennars->id }}">
                <input type="hidden" name="old_img" value="{{ $bennars->bennar_img}}">
                        <div class="form-group">
                            <h5> <span class="text-danger">*</span> Category Name</h5>
                            <div class="controls">
                            <input type="text" id="category_name" value="{{ $bennars->category_name }}" name="category_name" class="form-control" >
                            @error('category_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                            </div>
                           <div class="form-group">
                           <h5> Banner Img <span class="text-danger">*</span></h5>
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
                            <h5>Plot Type <span class="text-danger">*</span></h5>
                            <select name="plot_type" class="form-control"  >
                              <option value="" selected="" disabled="">Select plot</option>
                              <option value="{{ $bennars->plot_type }}" {{$bennars->plot_type ? 'selected': '' }}  >{{ $bennars->plot_type }}</option>
                              <option value="3katha">3 Katha </option>
                              <option value="4katha">4 Katha</option>
                              <option value="5katha">5 Katha</option>
                              <option value="6katha">6 Katha</option>
                              <option value="7katha">7 Katha</option>
                          </select>
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
