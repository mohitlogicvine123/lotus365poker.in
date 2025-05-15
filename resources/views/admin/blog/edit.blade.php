@extends('layouts.layout')

@section('content')

<div class="row">
  <form action="{{ route('blog.update',$blog->id) }}" enctype="multipart/form-data" method="POST">
      @csrf
      @method('PUT')
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Edit Blog</div>
        </div>
        <div class="card-body">
          <div class="row g-4">
            <div class="col-md-12">
              <div class="form-group p-0">
                <label for="email2">Title</label>
                <input name="title"type="text"class="form-control" id="email2" placeholder="Enter Title" value="{{$blog->title}}">
                @error('title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group p-0">
                <label for="image">Image</label>
                <input name="image"
                  type="file"
                  class="form-control"
                  />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group p-0">
                <label for="email2">Image Alt</label>
                <input name="imagealt"type="text"class="form-control" id="email2" placeholder="Enter Image Alt" value="{{$blog->imagealt}}"/>
                  @error('imagealt')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group p-0">
                <label for="email2">Meta description</label>
                <input name="metadescription"type="text"class="form-control" id="email2" placeholder="Enter Your Meta description" value="{{$blog->metadescription}}"/>
                @error('metadescription')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group p-0">
                <label for="email2">Meta Title</label>
                <input name="metatital"type="text"class="form-control" id="email2" placeholder="Enter Meta Title" value="{{$blog->metatital}}"/>
                @error('metatital')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group p-0">
                <label for="email2">Meta Keyword</label>
                <input name="metakey"type="text"class="form-control" id="email2" placeholder="Enter Meta Keyword" value="{{$blog->metakey}}"/>
                  @error('metakey')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group p-0">
                <label for="url">Slug</label>
                <input
                  type="text" name="url"
                  class="form-control" value="{{$blog->url}}"
                  id="url"
                  placeholder="Enter Slug"/>
                    @error('url')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group p-0">
                <label for="email2">Author</label>
                <input name="author"type="text"class="form-control" id="email2" placeholder="Enter Author Name" value="{{$blog->author}}"/>
                @error('author')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group p-0">
                <label for="email2">Category</label>
  
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group p-0">
                <label for="text">Description</label>
                <textarea name="" id="myTextarea" class="form-control" name="Description" value="{{$blog->description}}"
                  id="password"
                  placeholder="Enter Your Description"></textarea>
                    @error('description')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
              </div>
            </div>
          </div>
        </div>
        <div class="card-action">
          <button class="btn btn-success" type="submit">Submit</button>
          <button class="btn btn-danger" type="reset">Re-Start</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
