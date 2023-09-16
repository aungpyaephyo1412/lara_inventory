@extends("layouts.master")
@section("title")
    Show Inventory
@endsection

@section("content")
    <table class="table">
        <tbody>
            <tr>
                <td>
                    Name
                </td>
                <td>
                    {{$item->name}}
                </td>
            </tr>
            <tr>
                <td>
                    Price
                </td>
                <td>
                    {{$item->price}}
                </td>
            </tr>
            <tr>
                <td>
                    Stock
                </td>
                <td>
                    {{$item->stock}}
                </td>
            </tr>
        </tbody>
    </table>
@endsection
