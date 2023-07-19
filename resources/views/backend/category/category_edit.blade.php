@extends('admin.admin_master')

{{-- section id is yeild name  --}}

@section('admin')
<div class="container-full">
 <section class="content">
<div class="row">
<!--================================form add Category======================================->
   /.box-header -->
   <div class="box-body">
       <div class="table-responsive">
         <form  method="POST" action="{{ route('category.update', $category->id ) }}" >
             @csrf
             <input type="hidden" name="id" value="{{ $category->id }}" />
                  <div class="form-group">
                      <h5> <span class="text-danger">*</span> Category Name</h5>
                      <div class="controls">
                      <input type="text" id="category_name" value="{{ $category->category_name }}" name="category_name" class="form-control" >
                      @error('category_name')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                     </div>
                      </div>
                      <div class="form-group">
                        <h5>Plot Type <span class="text-danger">*</span></h5>
                        <select name="plot_type" class="form-control"  >
                          <option value="" selected="" disabled="">Select plot</option>
                          <option value="{{ $category->plot_type }}" {{$category->plot_type ? 'selected': '' }}  >{{ $category->plot_type }}</option>
                          <option value="3katha">3 Katha </option>
                          <option value="4katha">4 Katha</option>
                          <option value="5katha">5 Katha</option>
                          <option value="6katha">6 Katha</option>
                          <option value="7katha">7 Katha</option>
                      </select>
                        </div>
                      <div class="form-group">
                      <h5>Short Descraption<span class="text-danger">*</span></h5>
                          <textarea name="plot_short_descrip" rows="3"  id="textarea" class="form-control">{!! $category->plot_short_descrip!!}</textarea>
                          @error('four_short_descrip')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
               </div>
                  <div class="text-xs-right">
                  <input type="submit" class="btn btn-rounded btn-info" value="Update Category">
              </div>
          </form>
         </div> <!-- table res.. end -->
       </div>  <!-- box body end -->
    </div>      <!-- box end -->
</div> <!-- col end -->
</div> <!--  row end-->
</section> <!--  content end-->
</div> <!--  row end-->

@endsection

