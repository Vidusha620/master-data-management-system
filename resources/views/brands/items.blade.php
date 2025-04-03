@extends('layouts.app')

@section('content')
    <h2>Item List</h2>
    <a href="{{ route('items.create') }}">Create Item</a>
    <table>
        <tr>
            <th>Code</th><th>Name</th><th>Status</th><th>Actions</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->code }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->status }}</td>
            <td>
                <a href="{{ route('items.edit', $item) }}">Edit</a>
                <form action="{{ route('items.destroy', $item) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $items->links() }}
@endsection
