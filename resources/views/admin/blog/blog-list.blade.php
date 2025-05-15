@extends('layouts.layout')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Blog List</div>
          </div>
          <div class="card-body">
            <div class="overflow-x-auto">
                <table class="table mt-3 border">
                  <thead>
                    <tr>
                      <th scope="col" class="border bg-light">Id</th>
                      <th scope="col" class="border bg-light">Title</th>
                      <th scope="col" class="border bg-light">Image</th>
                      <th scope="col" class="border bg-light">Category</th>
                      <th scope="col" class="border bg-light">Author</th>
                      <th scope="col" class="border bg-light">Button</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($blogs as $blog)

                    <tr>
                      <td class="border">{{$blog->id}}</td>
                      <td class="border">{{$blog->title}}</td>
                     <td class="border">
                        @if ($blog->hasMedia('image'))
                            <img src="{{ $blog->getFirstMediaUrl('image') }}" width="150" alt="Blog Image">
                        @else
                            <img src="/default.jpg" alt="No image" width="150">
                        @endif
                    </td>

                      <td class="border">{{$blog->category}}</td>
                      <td class="border">{{$blog->author}}</td>
                      <td class="border">
                        <span class="d-flex gap-2"> 
                          <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary btn-sm">Edit</a>
                          <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm"
                          onclick="return confirm('Are you sure?')">Delete</button>
                        </form>  
                        </span>
                      </td>
                    </tr>
                     @endforeach

                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
