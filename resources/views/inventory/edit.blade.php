@extends("layouts.master")
@section("title")
    Edit Inventory
@endsection

@section("content")
    <form action="{{route("inventory.update",$item->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="item_name" class="form-label">Item Name</label>
            <input type="text" id="item_name" name="item_name" value="{{$item->name}}" class="form-control @error('item_name') is-invalid @enderror">
            @error("item_name")
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="item_price" class="form-label">Item Price</label>
            <input type="text" id="item_price" name="item_price" value="{{$item->price}}" class="form-control @error('item_price') is-invalid @enderror">
            @error("item_price")
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="item_stock" class="form-label">Item Stock</label>
            <input type="number" id="item_stock" name="item_stock" value="{{$item->stock}}" class="form-control @error('item_stock') is-invalid @enderror">
            @error("item_stock")
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button class="btn btn-primary">Update Item</button>
    </form>
@endsection
