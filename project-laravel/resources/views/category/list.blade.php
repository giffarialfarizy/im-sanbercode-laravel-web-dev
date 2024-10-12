@extends('layout.master')

@section('title')
Category List
@endsection

@section('content')
<a href="/category/create" class="btn btn-sm btn-primary">Tambah Kategori</a>

<table class="table mt-4">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $category)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $category->name }}</td>
            <td>
                <form action="/category/{{ $category->id }}" method="post">
                    <a href="/category/{{ $category->id }}" class="btn btn-sm btn-info">Detail</a>
                    <a href="/category/edit/{{ $category->id }}" class="btn btn-sm btn-warning">Edit</a>
                    @method("delete")
                    @csrf
                    <input type="submit" class="btn btn-sm btn-danger" value="Delete" >
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td class="text-muted">Tidak ada kategori</td>
        </tr>

        @endforelse
    </tbody>
</table>
@endsection
