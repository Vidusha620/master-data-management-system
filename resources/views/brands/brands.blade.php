@extends('layouts.app')

@section('content')
    <h2>Brand List</h2>
    <a href="{{ route('brands.create') }}">Create Brand</a>
    <table>
        <tr>
            <th>Code</th><th>Name</th><th>Status</th><th>Actions</th>
        </tr>
        @foreach($brands as $brand)
        <tr>
            <td>{{ $brand->code }}</td>
            <td>{{ $brand->name }}</td>
            <td>{{ $brand->status }}</td>
            <td>
                <a href="{{ route('brands.edit', $brand) }}">Edit</a>
                <form action="{{ route('brands.destroy', $brand) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $brands->links() }}
@endsection
