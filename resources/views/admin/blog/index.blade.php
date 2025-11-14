@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>{{($title ?? '')}}</h3>
        </div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('blog.create') }}" class="btn btn-primary">Create Blog</a>
            </div>
            <table class="table table-bordered">
                <thead class="bg-primary">
                    <tr>
                        <th >No</th>
                        <th >Photo</th>
                        <th >Category</th>
                        <th >Title</th>
                        <th >Content</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $key=> $data)

                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>
                            <img src="{{ asset('storage/' . $data->photo) }}" alt="{{$data->title}}">
                            </td>
                        <td>{{$data->category->name}}</td>
                        <td>{{$data->title}}</td>
                        <td>{{$data->content}}</td>
                        <td>
                            <a href="{{route('blog.edit', $data->id)}}" class="btn btn-sm btn-success btn-icon">
                                <span class="tf-icons bx bx-pencil bx-22px"></span>
                            </a>
                            <form action="{{ route('blog.destroy', $data->id) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm btn-icon">
                                    <span class="tf-icons bx bx-trash bx-22px"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

{{--  --}}
