@extends('backEnd.layouts.master')
@section('title','Update Package')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h5 class="m-0 text-dark">Welcome !! {{auth::user()->name}}</h5>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Package</a></li>
            <li class="breadcrumb-item active">Update</li>
          </ol>
        </div>
      </div>
    </div>
  </div>


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-sm-12">
            <div class="manage-button">
              <div class="body-title">
                <h5>Update Package</h5>
              </div>
              <div class="quick-button">
                <a href="{{url('admin/package/manage')}}" class="btn btn-primary btn-actions btn-create">
                Manage Package
                </a>
                <a href="{{url('admin/package/create')}}" class="btn btn-primary btn-actions btn-create">
                Create Package
                </a>
              </div>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="box-content">
            <div class="row">
              <div class="col-sm-2"></div>
              <div class="col-lg-8 col-md-8 col-sm-8">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Package Update</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{url('admin/package/update')}}" method="POST" enctype="multipart/form-data" name="editForm">
                      @csrf
                      <input type="hidden" value="{{$edit_data->id}}" name="hidden_id">
                      <div class="card-body">

                        <!-- column end -->
                         <div class="col-sm-12">
                          <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ $edit_data->title}}" name="title" id="title">
                             
                               @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif
                          </div>
                        </div>
                        <!-- column end -->
                         <div class="col-sm-12">
                          <div class="form-group">
                              <label for="size">Size</label>
                              <input type="text" class="form-control {{ $errors->has('size') ? ' is-invalid' : '' }}" value="{{ $edit_data->size}}" name="size" id="size">
                             
                               @if ($errors->has('size'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('size') }}</strong>
                                </span>
                                @endif
                          </div>
                        </div>
                        <!-- column end -->
                         <div class="col-sm-12">
                          <div class="form-group">
                              <label for="capacity">Capacity</label>
                              <input type="text" class="form-control {{ $errors->has('capacity') ? ' is-invalid' : '' }}" value="{{ $edit_data->capacity}}" name="capacity" id="capacity">
                               @if ($errors->has('capacity'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('capacity') }}</strong>
                                </span>
                                @endif
                          </div>
                        </div>
                        <!-- column end -->
                         <div class="col-sm-12">
                          <div class="form-group">
                              <label for="bed">Bed</label>
                              <input type="text" class="form-control {{ $errors->has('bed') ? ' is-invalid' : '' }}" value="{{ $edit_data->bed}}" name="bed" id="bed">
                               @if ($errors->has('bed'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('bed') }}</strong>
                                </span>
                                @endif
                          </div>
                        </div>
                        <!-- column end -->
                         <div class="col-sm-12">
                          <div class="form-group">
                              <label for="packageservice">Package Service</label>
                              <input type="text" class="form-control {{ $errors->has('packageservice') ? ' is-invalid' : '' }}" value="{{ $edit_data->packageservice}}" name="packageservice" id="packageservice">
                               @if ($errors->has('packageservice'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('packageservice') }}</strong>
                                </span>
                                @endif
                          </div>
                        </div>
                        <!-- column end -->
                         <div class="col-sm-12">
                          <div class="form-group">
                              <label for="oldprice">Old Price</label>
                              <input type="text" class="form-control {{ $errors->has('oldprice') ? ' is-invalid' : '' }}" value="{{ $edit_data->oldprice}}" name="oldprice" id="oldprice">
                               @if ($errors->has('oldprice'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('oldprice') }}</strong>
                                </span>
                                @endif
                          </div>
                        </div>
                        <!-- column end -->
                         <div class="col-sm-12">
                          <div class="form-group">
                              <label for="newprice">New Price</label>
                              <input type="text" class="form-control {{ $errors->has('newprice') ? ' is-invalid' : '' }}" value="{{ $edit_data->newprice}}" name="newprice" id="newprice">
                               @if ($errors->has('newprice'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('newprice') }}</strong>
                                </span>
                                @endif
                          </div>
                        </div>
                        <!-- column end -->
                         <div class="col-sm-12">
                          <div class="form-group">
                              <label for="perday">Per Day</label>
                              <input type="text" class="form-control {{ $errors->has('perday') ? ' is-invalid' : '' }}" value="{{ $edit_data->perday}}" name="perday" id="perday">
                               @if ($errors->has('perday'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('perday') }}</strong>
                                </span>
                                @endif
                          </div>
                        </div>
                        <!-- column end -->

                        <div class="col-sm-12">
                          <div class="form-group">
                              <label for="description">Description</label>
                              <textarea name="description" id="description" cols="30" rows="10" class="summernote form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" >{{$edit_data->description}}</textarea>
                             
                               @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                          </div>
                        </div>
                        <!-- column end -->
                        <!-- /.form-group -->
                   <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                          <label for="image"> Package Image <span>*</span></label>

                            <div class="clone hide" style="display: none;">
                              <div class="control-group input-group" >
                                <input type="file" name="image[]" class="form-control">
                                <div class="input-group-btn"> 
                                  <button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
                                </div>
                              </div>
                            </div>

                            <div class="input-group control-group increment" >
                              <input type="file" name="image[]" class="form-control">
                              <div class="input-group-btn"> 
                                <button class="btn btn-success" type="button"><i class="fa fa-plus"></i></button>
                              </div>
                            </div>
                            @foreach($productimage as $image)
                               @if($edit_data->id==$image->product_id) 
                                <div class="edit-img">
                                  <input type="hidden" class="form-control" value="{{$image->id}}" name="hidden_img">
                                 <img src="{{asset($image->image)}}" class="editimage" alt="" style="width:80px; height:80px; margin-bottom:10px">
                                  <a href="{{url('admin/package/image/delete/'.$image->id)}}" class="btn btn-danger">Delete</a>
                                </div>
                               @endif
                            @endforeach
                          @if ($errors->has('image'))
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                          </span>
                          @endif
                        </div>
                      </div>
                        <!-- column end -->
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for="offer">Offer</label>
                             <input type="checkbox" class="{{ $errors->has('offer') ? ' is-invalid' : '' }}"  value="1" name="offer" id="offer" @if($edit_data->offer) checked @endif>
                             @if ($errors->has('offer'))
                                <span class="invalid-feedback">
                                  <strong>{{ $errors->first('offer') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="custom-label">
                            <label>Publication Status</label>
                          </div>
                          <div class="box-body pub-stat display-inline">
                              <input class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" type="radio" id="active" name="status" value="1">
                              <label for="active">Active</label>
                              @if ($errors->has('status'))
                              <span class="invalid-feedback">
                                <strong>{{ $errors->first('status') }}</strong>
                              </span>
                              @endif
                          </div>
                          <div class="box-body pub-stat display-inline">
                              <input class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" type="radio" name="status" value="0" id="inactive">
                              <label for="inactive">Inactive</label>
                              @if ($errors->has('status'))
                              <span class="invalid-feedback">
                                <strong>{{ $errors->first('status') }}</strong>
                              </span>
                              @endif
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
              </div>
              <!-- col end -->
              <div class="col-sm-2"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <script type="text/javascript">
      document.forms['editForm'].elements['status'].value="{{$edit_data->status}}"
    </script>
@endsection
