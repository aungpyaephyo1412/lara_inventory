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
                    Name
                </td>
                <td>
                    Price
                </td>
                <td>
                    Stock
                </td>
                <td>
                    Action
                </td>
            </tr>
            </thead>
            <tbody>
            @forelse($items as $item)
                <tr>
                    <td>
                    {{$item->id}}

                    <td>
                        {{$item->name}}
                    </td>
                    <td>
                        {{$item->price}}
                    </td>
                    <td>
                        {{$item->stock}}
                    </td>
                    <td>
                        <div class="mb-1 d-flex">
                            <a class="w-50 btn btn-primary rounded-0" href="{{route("inventory.show",$item->id)}}">View</a>
                            <a href="{{route("inventory.edit",$item->id)}}" class="w-50 btn btn-outline-danger rounded-0">Edit</a>
                        </div>
                        <form action="{{route("inventory.delete",$item->id)}}" class="d-block w-100" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-primary rounded-0 w-100">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <p>No items</p>
            @endforelse
            </tbody>
        </table>
        {{$items->onEachSide(1)->links()}}
    </div>
@endsection
