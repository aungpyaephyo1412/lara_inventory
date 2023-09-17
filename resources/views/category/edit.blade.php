@extends("layouts.master")
@section("title")
    Edit Category
@endsection

@section("content")
    <form action="{{route("category.update",$category->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="category_title" class="form-label">Title</label>
            <input type="text" id="category_title" name="category_title" value="{{$category->title}}" class="form-control @error('category_title') is-invalid @enderror">
            @error("category_title")
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category_description" class="form-label">Description</label>
            <input type="text" id="category_description" name="category_description" value="{{$category->description}}" class="form-control @error('category_description') is-invalid @enderror">
            @error("category_description")
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button class="btn btn-primary">Update Category</button>
    </form>
@endsection
