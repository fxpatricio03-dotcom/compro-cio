@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>{{ $title ?? '' }}</h5>
        </div>
        <div class="card-body">
            {{-- kalo update, tambahin $edit karna di function public memakai nama edit, lalu ambil id aja --}}
            <form action="{{ route('blog.update', $edit->id) }}" method="post">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">
                        No
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your fullname" value="{{ $edit->name }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        Category
                    </label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" value="{{ $edit->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        Title
                    </label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        Content
                    </label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        action
                    </label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
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
