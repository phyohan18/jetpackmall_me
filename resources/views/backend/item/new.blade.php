<x-backend>
	<main class="app-content">
        <div class="app-title">
            <div>
                <h1> <i class="icofont-list"></i> Add Item Form </h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <a href="{{ route('backside.item.index') }}" class="btn btn-outline-primary">
                    <i class="icofont-double-left"></i>
                </a>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form action="{{ route('backside.item.store') }}" method="post" enctype="multipart/form-data">
                            
                           @csrf 

                           <div class="form-group row">
                            <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="name_id" name="name">
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="photo_id" class="col-sm-2 col-form-label"> Photo </label>
                        <div class="col-sm-10">
                          <div class="input-images"></div>
                      </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                       <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Unit Price</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Discount</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                           <input type="number" class="form-control" id="name_id" name="unitprice" value="">
                       </div>
                       <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col 12">
                         <input type="number" class="form-control" id="name_id" name="discount" >

                     </div>
                 </div>

             </div>
         </div>
     </div>

     <div class="form-group row">
        <label for="name_id" class="col-sm-2 col-form-label"> Description </label>
        <div class="col-sm-10">
           <textarea class="form-control" id="i_description" rows="3" name="description"></textarea>
       </div>
   </div>
   <div class="form-group row">
       <label for="photo_id" class="col-sm-2 col-form-label"> Brand </label>
       <div class="col-sm-10">
         <select class="form-control" name="brandid">
            <option> Choose Brand </option>
            @foreach($brands as $brand)
            <option value="{{ $brand->id }}"> {{ $brand->name }} </option>
            @endforeach
        </select>
     </div>
 </div>
 <div class="form-group row">
  <label for="photo_id" class="col-sm-2 col-form-label"> Sub-Category </label>
  <div class="col-sm-10">
    <select class="form-control" name="subcategoryid">
      <option> Choose Subcategory </option>
      @foreach($subcategories as $subcategory)
      <option value="{{ $subcategory->id }}"> {{ $subcategory->name }} </option>
      @endforeach
      </select>   
  </div>
</div>
<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">
            <i class="icofont-save"></i>
            Save
        </button>
    </div>
</div>

</form>
</div>
</div>
</div>
</div>
</main>


@section('script_content')
<script type="text/javascript">
    $(document).ready(function(){
        $('#i_description').summernote();
        $('.input-images').imageUploader();
    });
</script>
@endsection
</x-backend>
