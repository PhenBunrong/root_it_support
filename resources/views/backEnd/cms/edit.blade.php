@extends('layouts.master')


@section('title','CMS Page')

@section('content')
<section class="content-header">
    <h1>
        <i class="fas fa-database"></i> &nbsp;Add CMS Page
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">CMS Page</li>
    </ol>
</section>
<section class="content" data-aos="fade-up" data-aos-duration="3000">

        <div class="row">
          <!-- left column -->
          <div class="col-xs-12">
            <!-- general form elements -->
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fas fa-database"></i> &nbsp;Add CMS Page</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div class="box">
                    <div class="box-header">
                        <form action="{{ route('cms.update', $cm) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name<span style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" value="{{ old('name', $cm->name) }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="url" class="col-sm-2 control-label">Url<span style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" id="url" placeholder="url" value="{{ old('url', $cm->url) }}">
                                    @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-sm-2 control-label">status<span style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                    <select type="text" name="status" class="form-control @error('status') is-invalid @enderror" id="status">
                                        <option value="1" {{ old('status', $cm->status) === 1 ? 'selected' : ''}} >Active</option>
                                        <option value="0" {{ old('status', $cm->status) === 0 ? 'selected' : ''}}>Inactive</option>
                                    </select>
                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title<span style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                <textarea name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title">{{ old('title' , $cm->title) }}</textarea>
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Description<span style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                <textarea id="summernote" name="description" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="description">{{ old('description' , $cm->description) }}</textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="box-footer">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="{{ route('cms.index') }}" class="btn btn-default"><i class="fas fa-arrow-alt-circle-left"></i>&nbsp; Back</a>
                                    <!-- <button type="submit" class="btn btn-success">Save & Add More</button> -->
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div><!-- /.box-footer -->

                        </form>
                    </div>
                </div>
              </div>
          </div>
        </div>
        <!-- /.row -->
    </section>
@endsection
