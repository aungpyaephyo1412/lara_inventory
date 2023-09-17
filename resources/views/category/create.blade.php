@extends("layouts.master")
@section("title")
    Create Category
@endsection

@section("content")
    <form action="{{route("category.store")}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="category_title" class="form-label">Title</label>
            <input type="text" id="category_title" name="category_title" value="{{old("category_title")}}" class="form-control @error('category_title') is-invalid @enderror">
            @error("category_title")
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category_description" class="form-label">Description</label>
            <input type="text" id="category_description" name="category_description" value="{{old("category_description")}}" class="form-control @error('category_description') is-invalid @enderror">
            @error("category_description")
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button class="btn btn-primary">Create Item</button>
    </form>
@endsection
