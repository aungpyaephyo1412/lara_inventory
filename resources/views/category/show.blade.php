@extends("layouts.master")
@section("title")
    Show Category
@endsection

@section("content")
    <table class="table">
        <tbody>
            <tr>
                <td>
                    Title
                </td>
                <td>
                    {{$category->title}}
                </td>
            </tr>
            <tr>
                <td>
                    Description
                </td>
                <td>
                    {{$category->description}}
                </td>
            </tr>
        </tbody>
    </table>
@endsection
