@extends("layouts.master")
@section("title")
    Inventory
@endsection
@section("content")
    <div class="w-100 overflow-x-scroll">
        <table class="table">
            <thead class="table-success">
            <tr>
                <td>
                    #
                </td>
                <td>
                    Title
                </td>
                <td>
                    Description
                </td>
                <td>
                    Action
                </td>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>
                    {{$category->id}}
                    <td>
                        {{$category->title}}
                    </td>
                    <td>
                        {{$category->description}}
                    </td>
                    <td>
                        <div class="mb-1 d-flex">
                            <a class="w-50 btn btn-primary rounded-0" href="{{route("category.show",$category->id)}}">View</a>
                            <a href="{{route("category.edit",$category->id)}}"
                               class="w-50 btn btn-outline-danger rounded-0">Edit</a>
                        </div>
                        <form action="{{route("category.destroy",$category->id)}}" class="d-block w-100" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-primary rounded-0 w-100">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <p>No category</p>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
