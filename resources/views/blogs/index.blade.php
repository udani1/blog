@extends('lte.layout')
@section('body')

<div class="card">
    <div class="card-hearder">
        <div class="col-lg-12 margins-tb">
            <div class="pull-left">
            <h2>Check all Blogs</h2>
            </div>
            <div class="pull-right">
            <a href="{{route('blogs.create') }}" class="btn btn-info"><i class="far fa-file-alt"></i> New Blog </a>
            </div>
        </div>
    </div>

{{-- from index funtion has wtritten redirect index pg with success( keyword) with blog created(message) --}}
@if ($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<div class="card-body card-success card-outline">
<table class="table table-striped">
    <tr>
        <th> </th>
        <th>Title</th> 
        <th>Description</th>
        <th>Action</th>
    </tr>

    @foreach ($blogs as $blog)
    <tr>
        <td><span><i class="far fa-badge"></i></span></td>
        <td>{{$blog->title}}</td>
        <td>{{$blog->body}}</td>
        <td>
            <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
                @csrf
                @method('DELETE')
            <a href="{{route('blogs.show',$blog->id) }}" class ="btn btn-info"><i class="fas fa-seedling"></i> Show </a>
            <a href="{{route('blogs.edit',$blog->id) }}" class ="btn btn-primary"><i class="fas fa-user-edit"></i> Edit </a>
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</div>

</div>
@endsection
