<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .panel{margin-top: 10px}
    </style>
</head>

<body>
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-warning">
            <div class="panel-heading text-center">
            <h1>This is create first Form </h1>
            <h6>Udani Kumari </h6> 
            </div>

            <div class="panel panel-body">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <h3> Create New Blogs </h3> 

                        {{-- when check validation from system sometime found have some errors then below help to show error msg --}}
                        @if ($errors->any())
                        <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                        </div> 
                        @endif
                       
                       <form action="{{route('blogs.store')}}" method="POST">
                        @csrf
                            <div class="form-group">
                            <button type="clear"class="btn btn-warning btn-sm"> Back </button>
                            </div>
                            <div class="form-group">
                            <label>Title :</label>
                            <input type="name" name="title" class="form-control" value="{{old('title')}}">
                            </div>
                            <div class="form-group">
                            <label>Description :</label>
                            <textarea type="text" class="form-control" rows="12" name="body"> {{old('body')}}</textarea>
                            </div>
                            <div class="form-group text-center">
                            <button type="submit"class="btn btn-success btn-sm ">Submit </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>

<div class="footer text-muted">
    <p>Footer</p>
</div>

</html>


