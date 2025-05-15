@extends('layouts.layout')

@section('content')

<div class="row">
  <form action="{{ route('blog.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Blog Add Form</div>
        </div>
        <div class="card-body">
          <div class="row g-4">
            <div class="col-md-12">
              <div class="form-group p-0">
                <label for="email2">Title</label>
                <input name="title"type="text"class="form-control" id="email2" placeholder="Enter Title">
                @error('title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group p-0">
                <label for="email2">Meta Description</label>
                <input name="metadescription"type="text"class="form-control" id="email2" placeholder="Enter Meta Description"/>
                @error('metadescription')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group p-0">
                <label for="email2">Meta Title</label>
                <input name="metatital"type="text"class="form-control" id="email2" placeholder="Enter Meta Title"/>
                @error('metatital')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group p-0">
                <label for="email2">Meta Keyword</label>
                <input name="metakey"type="text"class="form-control" id="email2" placeholder="Enter Meta Keyword"/>
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
                  class="form-control"
                  id="url"
                  placeholder="Enter Slug"/>
                      @error('url')
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
                @error('image')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group p-0">
                <label for="email2">Image Alt Tag</label>
                <input name="imagealt"type="text"class="form-control" id="email2" placeholder="Enter Image Alt"/>
                @error('imagealt')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group p-0">
                <label for="email2">Author</label>
                <input name="author"type="text"class="form-control" id="email2" placeholder="Enter Author Name"/>
                @error('author')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group p-0">
                <label for="email2">Category</label>
                <input name="category"type="text"class="form-control" id="category" placeholder="Enter Category"/>
                @error('category')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group p-0">
                <label for="text">Description </label>
                <textarea name="description" id="myTextarea" class="form-control" name="description"
                  id="password"
                  placeholder="Enter Description">
                </textarea>
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
