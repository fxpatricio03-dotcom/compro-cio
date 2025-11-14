@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
        <h5>{{ $title ?? '' }}</h5>
    </div>
    <div class="card-body">
        <!--munculin poto laravel enctype="multipart/form-data-->
        <form action="{{ route('blog.update', $edit->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="" class="form-label">
                    Category Blog
                </label>
                <select name="category_id" id="" class="form-control">
                    <option {{ $edit->category_id == $category->id ? 'selected' : '' }} value="">Choose One</option>
                    @foreach ($categories as $category)
                    <option value=""{{ $category->id }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        Title
                    </label>
                    <input type="text" name="title" class="form-control" placeholder="Title Blog" value="{{ $edit->title }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        Content
                    </label>
                    <textarea name="content" id="summernote" cols="30" rows="10" class="form-control">{{ $edit->content }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        Photo
                    </label>
                    <input type="file" name="photo">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        Status
                    </label>
                    <select name="status" id="" class="form-control">
                        <option {{ $edit->status == 1 ? 'selected' : '' }}value="1">Publish</option>
                        <option {{ $edit->status == 0 ? 'selected' : '' }}value="0">Draft</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <label for="" class="theme-switch">
            <input type="checkbox" id="theme-toggle">
            <span class="slider"></span>
        </label>
    </div>
@endsection

<script src="script.js"></script>