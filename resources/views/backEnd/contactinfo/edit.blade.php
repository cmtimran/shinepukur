@extends('backEnd.layouts.master')
@section('title','Update Contact Info')
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
            <li class="breadcrumb-item active"><a href="#">Contact Info</a></li>
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
                <h5>Update Contact Info</h5>
              </div>
              <div class="quick-button">
                <a href="{{url('admin/contactinfo/manage')}}" class="btn btn-primary btn-actions btn-create">
                Manage Contact Info
                </a>
                <a href="{{url('admin/contactinfo/create')}}" class="btn btn-primary btn-actions btn-create">
                Create Contact Info
                </a>
              </div>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="box-content">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Contact Info Update</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{url('admin/contactinfo/update')}}" method="POST" enctype="multipart/form-data" name="editForm">
                      @csrf
                      <input type="hidden" value="{{$edit_data->id}}" name="hidden_id">
                      <div class="card-body">
                      <div class="row">
                        
                        <div class="col-sm-12">
                          <div class="form-group">
                              <label for="phone">Phone <span>*</span></label>
                              <textarea name="phone" id="phone" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" >{!! $edit_data->phone !!}</textarea>
                             
                               @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                                @endif
                          </div>
                        </div>
                        <!-- column end -->
                        <div class="col-sm-12">
                          <div class="form-group">
                              <label for="address">Address <span>*</span></label>
                              <textarea name="address" id="address" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" >{!! $edit_data->address !!}</textarea>
                             
                               @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                          </div>
                        </div>
                        <!-- column end -->
                        <div class="col-sm-12">
                          <div class="form-group">
                              <label for="time">Time <span>*</span></label>
                              <textarea name="time" id="time" class="form-control {{ $errors->has('time') ? ' is-invalid' : '' }}" >{!! $edit_data->time !!}</textarea>
                             
                               @if ($errors->has('time'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('time') }}</strong>
                                </span>
                                @endif
                          </div>
                        </div>
                        <!-- column end -->
                        <div class="col-sm-12">
                          <div class="form-group">
                              <label for="email">Email <span>*</span></label>
                              <textarea name="email" id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" >{!! $edit_data->email !!}</textarea>
                             
                               @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                          </div>
                        </div>
                        <!-- column end -->
                        <div class="col-sm-12">
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
                        </div>
                        <!-- column end -->
                        </div>
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
