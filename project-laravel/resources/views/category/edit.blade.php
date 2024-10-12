@extends('layout.master')

@section('title')
Edit Category
@endsection

@section('content')
<a href="/category" class="btn btn-sm btn-secondary">Kembali</a>
<form action="/category/{{ $category->id }}" method="post" class="mt-4">
    @method('put')
    {{-- Validation --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- Form Input --}}
    @csrf
    <div class="form-group">
      <label for="name">Category Name</label>
      <input type="text" value="{{$category->name}}" class="form-control" id="name" name="name" aria-describedby="nameHelp">
      <small id="nameHelp" class="form-text text-muted">Add new book category.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
