<x-backend>

    @php

        $id = $category->id;
        $name = $category->name;
        $photo = $category->photo;

    @endphp

	 <main class="app-content">
            <div class="app-title">
                <div>
                    <h1> <i class="icofont-list"></i> Category Form </h1>
                </div>
                <ul class="app-breadcrumb breadcrumb side">
                    <a href="{{ route('backside.category.index') }}" class="btn btn-outline-primary">
                        <i class="icofont-double-left icofont-1x"></i>
                    </a>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <form action="{{ route('backside.category.update',$id) }}" method="POST" enctype="multipart/form-data">

                                @csrf {{-- to prevent from hackers --}}
                                @method('PUT')
                                
                                <input type="hidden" name="oldPhoto" value="{{ $photo }}">

                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="name_id" name="name" value="{{ $name }}">
                                      <div class="text-danger" form-control-feedback>
                                          {{ $errors->first('name') }}
                                      </div>
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label for="photo_id" class="col-sm-2 col-form-label"> Photo </label>
                                    <div class="col-sm-10">
                                      
                                    
                                    <nav>
                                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Profile</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Profile</a>
                                        
                                      </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><img src="{{ asset($photo) }}" width="200" alt=""></div>
                                      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                          <input type="file" id="photo_id" name="photo">
                                          <div class="text-danger" form-control-feedback>
                                              {{ $errors->first('name') }}
                                          </div>                                          
                                      </div>
                                      </div>
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
</x-backend>
	