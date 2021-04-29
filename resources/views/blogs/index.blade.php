@extends('extends.layout')
@section('content')

<div class="col-lg-12 margins-tb">
    <div class="pull-left">
    <h1>Check all Blogs</h1>
    </div>
    <div class="pull-right">
    <a href="{{route('blogs.create') }}" class="btn btn-info"> Create New Blog </a>
    </div>
</div>

{{-- from index funtion has wtritten redirect index pg with success( keyword) with blog created(message) --}}
@if ($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<table class="table table-borderd">
    <tr>
        {{-- <th></th> --}}
        <th>Title</th> 
        <th>Description</th>
        <th width="150px">Action</th>
    </tr>

    @foreach ($blogs as $blog)
    <tr>
        {{-- <td>:heart:</td> --}}
        <td>{{$blog->title}}</td>
        <td>{{$blog->body}}</td>
        <td>
            <form action="{{ route ('blogs.destroy',$blog->id) }}" method="POST">
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger"> Delete </button>

            <a href="{{route('blogs.show',$blog->id) }}" class ="btn btn-info"> Show </a>
            <a href="{{route('blogs.edit',$blog->id) }}" class ="btn btn-primary"> Edit </a>
            </form>
        </td>

    </tr>
    @endforeach
</table>
@endsection
