@extends('layout.master')

@section('title')
Category Detail
@endsection

@section('content')
<a href="/category" class="btn btn-sm btn-secondary">Kembali</a>
<h1 class="mt-4">{{ $category->name }}</h1>
@endsection
