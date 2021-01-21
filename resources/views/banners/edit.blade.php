@extends('template')
@section('main_content')

  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                
                <form class="form-horizontal" method="post" action="{{url('/banners/update')}}" enctype="multipart/form-data" autocomplete="off">
                  @csrf
                      <div class="card-body">
                        <h5 class="card-title m-b-0"><?php echo $title; ?></h5>
                      </div>
                      <div class="card-body border-top">
                        <div class="row">

                            <div class="col-md-12">
                                @if ($errors->any())
                                      <div class="alert alert-danger" role="alert">
                                          @foreach ($errors->all() as $error)
                                            {{ $error }}<br>
                                          @endforeach
                                      </div><br>
                                  @endif
                                  @if(Session::has('success_msg'))
                                    <div class="alert alert-success">{{Session::get('success_msg')}}</div><br>
                                  @endif
                                  @if(Session::has('error_msg'))
                                    <div class="alert alert-danger">{{Session::get('error_msg')}}</div><br>
                                  @endif
                            </div>

                            <input type="hidden" name="banner_id" value="{{$banner->id}}">

                            <div class="col-md-6">                                
                                <div class="form-group">
                                    <label for="title_1">Title 1 <span class="text-danger">*</span></label>
                                    <input type="text" id="title_1" class="form-control" name="title_1" placeholder="Enter banner title" value="{{$banner->title_1 ? $banner->title_1 : ''}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="title_2">Title 2</label>
                                    <input type="text" id="title_2" class="form-control" name="title_2" placeholder="Enter banner title 2" value="{{$banner->title_2 ? $banner->title_2 : ''}}">
                                </div>

                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="link" id="link" class="form-control" name="link" placeholder="Enter banner link" value="{{$banner->link ? $banner->link : ''}}">
                                </div>

                                <div class="form-group ">
                                    <label></label>
                                    <div class="row">
                                        <label class="col-md-2">Status <span class="text-danger">*</span></label>
                                        <div class="custom-control col-md-3 custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="status" value="active" <?php echo $banner->status == "active" ? "checked" : ""; ?>>
                                            <label class="custom-control-label" for="customControlValidation3">Active</label>
                                        </div>
                                        <div class="custom-control col-md-3 custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation4" name="status" value="inactive" <?php echo $banner->status == "inactive" ? "checked" : ""; ?>>
                                            <label class="custom-control-label" for="customControlValidation4">Inactive</label>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">Description </label>
                                    <textarea class="form-control" name="description" id="description" placeholder="Enter Description" rows="3">{{$banner->description ? $banner->description : ''}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="confirm_passqord">Banner Photo</label>
                                    <div class="custom-file">
                                        <input type="file" name="banner_image" class="custom-file-input" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">Choose
                                            file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>

                                

                            </div>
                            
                        </div>
                      </div>

                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-success">Update</button>
                                <a class="btn btn-danger" href="{{URL::to('banners')}}">Cancel</a>
                            </div>
                        </div>
                  </form>
              </div>

          </div>        
    </div>
  </div>
@endsection