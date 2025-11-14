@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
        <h5>{{ $title ?? '' }}</h5>
    </div>
    <div class="card-body">
        <!--munculin poto laravel enctype="multipart/form-data-->
        <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">
                    Category Blog
                </label>
                <select name="category_id" id="" class="form-control">
                    <option value="">Choose One</option>
                    @foreach ($categories as $category)
                    <option value=""{{ $category->id }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        Title
                    </label>
                    <input type="text" name="title" class="form-control" placeholder="Title Blog" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        content
                    </label>
                    <textarea name="content" id="summernote" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        photo
                    </label>
                    <input type="file" name="photo">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        status
                    </label>
                    <select name="status" id="" class="form-control">
                        <option value="1">Publish</option>
                        <option value="0">Draft</option>
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