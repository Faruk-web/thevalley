
@extends('admin.admin_master')
@section('admin')

{{-- js for sub category  --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="container-full">
    <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                <h4 class="box-title">The Valley </h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <div class="row">
                    <div class="col">
              <form action="{{ route('valley.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                 <div class="col-12">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 style="text-align: center;">  <b class="btn btn-dark btn-lg" style="height: 25%; width:100%">Frist Section Info </b> </h1>
                    </div>
                </div>
            <div class="row"> <!-- start 2nd row  -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Name <span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="text" name="frist_name" class="form-control" > </div>

                         @error('frist_name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Photo<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="frist_image" class="form-control" onchange="mainThamUrl(this)" > </div>
                         @error('frist_image')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                         <img src="" id="mainThmb"  />
                        </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Descraption <span class="text-danger">*</span></h5>
                        <div class="controls">
                         <textarea type="text" name="frist_descrip" class="form-control"  ></textarea> </div>
                         @error('frist_descrip')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                </div> <!-- end col md 2 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Short Descraption<span class="text-danger">*</span></h5>
                          <textarea name="frist_short_descrip" rows="3"  id="textarea" class="form-control"></textarea>
                         @error('frist_short_descrip')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div>
                </div> <!-- end col md 4 -->
            </div> <!-- end 2nd row  -->
            <br> <br>
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="text-align: center;">  <b class="btn btn-dark btn-lg" style="height: 25%; width:100%">Second Section Info </b> </h1>
                </div>
            </div>
            <div class="row"> <!-- start 2nd row  -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Name <span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="text" name="sec_name" class="form-control" > </div>

                         @error('sec_name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Photo<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="sec_image" class="form-control" onchange="mainThamUrl2nd(this)" > </div>
                         @error('sec_image')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                         <img src="" id="mainThmb2nd"  />
                        </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Descraption <span class="text-danger">*</span></h5>
                        <div class="controls">
                         <textarea type="text" name="sec_descrip" class="form-control"  ></textarea> </div>
                         @error('sec_description')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                </div> <!-- end col md 2 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Short Descraption<span class="text-danger">*</span></h5>
                          <textarea name="sec_short_descrip" rows="3"  id="textarea" class="form-control"></textarea>
                         @error('sec_short_descrip')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div>
                </div> <!-- end col md 4 -->
            </div> <!-- end 2nd row  -->
        <br><br>
        <div class="row">
            <div class="col-lg-12">
                <h1 style="text-align: center;">  <b class="btn btn-dark btn-lg" style="height: 25%; width:100%">Third Section Info </b> </h1>
            </div>
        </div>
        <div class="row"> <!-- start 2nd row  -->
            <div class="col-md-4">
                <div class="form-group">
                    <h5>Name <span class="text-danger">*</span></h5>
                    <div class="controls">
                     <input type="text" name="thi_name" class="form-control" > </div>

                     @error('thi_name')
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                </div>
            </div> <!-- end col md 4 -->
            <div class="col-md-4">
                <div class="form-group">
                    <h5>Vedie Link <span class="text-danger">*</span></h5>
                    <div class="controls">
                     <input type="text" name="vedio_link" class="form-control" > </div>
                     @error('vedio_link')
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                </div>
            </div> <!-- end col md 4 -->
            <div class="col-md-4">
                <div class="form-group">
                    <h5>Photo<span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="file" name="thi_image" class="form-control" onchange="mainThamUrl3rd(this)" > </div>
                     @error('thi_image')
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                     <img src="" id="mainThmb3rd"  />
                    </div>
            </div> <!-- end col md 4 -->
            <div class="col-md-4">
                <div class="form-group">
                    <h5>Descraption <span class="text-danger">*</span></h5>
                    <div class="controls">
                     <textarea type="text" name="thi_descrip" class="form-control"  ></textarea> </div>
                     @error('thi_description')
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                </div>
            </div> <!-- end col md 2 -->
            <div class="col-md-4">
                <div class="form-group">
                    <h5>Short Descraption<span class="text-danger">*</span></h5>
                      <textarea name="thi_short_descrip" rows="3"  id="textarea" class="form-control"></textarea>
                     @error('thi_short_descrip')
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                    </div>
            </div> <!-- end col md 4 -->
        </div> <!-- end 2nd row  -->
       <br>
       <br>
          <div class="text-align-center">
            <input type="submit" class="btn btn-rounded btn-primary mb-5 " value="Save Data" >
        </div>
     </form>

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->

</section>
<!-- /.content -->
</div>
{{-- // Img Tham script --}}
<script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
    // --------------------------2nd-----------------
    function mainThamUrl2nd(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb2nd').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
    // ----------------2rd----------------------
    function mainThamUrl3rd(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb3rd').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
{{-- ---------------------------Show Multi Image JavaScript Code ------------------------ --}}
@endsection
