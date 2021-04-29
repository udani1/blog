@extends('extends.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Blog</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('blogs.index') }}" class="btn btn-primary"> Back </a>
        </div>
    </div>
</div>

{{-- @if ($errors->any())
<div class="alert alert-danger">
    <strong>Warning! </strong> Please Check input field code <br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }} </li>    
        @endforeach
    </ul>
</div>
@endif --}}

<form action="{{ route ('blogs.update',$blog->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title: </strong>
                <input type="text" name="title" value="{{ $blog->title }}" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group form-group-md">
            <strong>Discription: </strong>  
            <textarea style="height: 150px" name="body" class="form-control" placeholder="Discription">{{ $blog->body }}</textarea>
            </div>
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit </button>
        </div>
    </div>
    
</form>

@endsection