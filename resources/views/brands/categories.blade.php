@extends('layouts.app')

@section('content')
    <h2>Category List</h2>
    <a href="{{ route('categories.create') }}">Create Category</a>
    <table>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->code }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->status }}</td>
            <td>
                <a href="{{ route('categories.edit', $category) }}">Edit</a>
                <form action="{{ route('categories.destroy', $category) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $categories->links() }}
@endsection
