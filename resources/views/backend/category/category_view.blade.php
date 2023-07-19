@extends('admin.admin_master')

{{-- section id is yeild name  --}}

@section('admin')

<div class="container-full">
 <section class="content">

<div class="row">
    <div class="col-lg-8">

       <div class="box">
         <div class="box-header with-border">
           <h3 class="box-title">Plot Category List</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
             <div class="table-responsive">
               <table id="example1" class="table table-bordered table-striped">
                 <thead>
                     <tr>
                         <th>Category Id</th>
                         <th>Plot Type</th>
                         <th>Category Name</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                   @foreach ($category as $item)
                   <tr>
                    <td>  {{ $item->id }}</td>
                    <td> {{ $item->plot_type }} </td>
                     <td>{{ $item->category_name }}</td>
                       <td width="35%">
                           <a href="{{ route('category.edit', $item->id ) }}" class="btn btn-success">Edit</a>

                           <a href="{{ route('category.delete', $item->id ) }}" class="btn btn-danger" >Delete</a>
                       </td>
                   </tr>
                   @endforeach
                 </tbody>
               </table>
               </div> <!-- table res.. end -->
             </div>  <!-- box body end -->
          </div>      <!-- box end -->
     </div> <!-- col end -->
<!--================================form add Category======================================- -->
<div class="col-lg-4">
 <div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Add Plot Category</h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
       <div class="table-responsive">
         <form  method="POST" action="{{ route('category.store') }}" >
            @csrf
                  <div class="form-group">
                      <h5> <span class="text-danger">*</span> Category Name</h5>
                      <div class="controls">
                      <input type="text" id="category_name" name="category_name" class="form-control" >

                      @error('category_name')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                     </div>
                      </div>
                      <div class="form-group">
                        <h5>Photo<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="bennar_img" class="form-control" onchange="mainThamUrlfour(this)" > </div>
                         @error('image')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                         <img src="" id="mainThmbfour"  />
                        </div>
                  <div class="form-group">
                      <h5>Plot Type <span class="text-danger">*</span></h5>
                      <select name="plot_type" class="form-control"  >
                        <option value="" selected="" disabled="">Select plot</option>
                        <option value="3katha">3 Katha </option>
                        <option value="4katha">4 Katha</option>
                        <option value="5katha">5 Katha</option>
                        <option value="6katha">6 Katha</option>
                        <option value="7katha">7 Katha</option>
                    </select>
                      </div>
                    <div class="form-group">
                    <h5>Short Descraption<span class="text-danger">*</span></h5>
                        <textarea name="plot_short_descrip" rows="3"  id="textarea" class="form-control"></textarea>
                        @error('four_short_descrip')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
               </div>
                  <div class="text-xs-right">
                  <input type="submit" class="btn btn-rounded btn-info" value="Add Category">
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
<script>
      function mainThamUrlfour(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmbfour').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
