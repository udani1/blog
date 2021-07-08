@extends('extends.layout')
@section('content')

{{-- Bootstrap CDN --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
{{-- JQuery CDN --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
{{-- DataTable CDN --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>


<div class="row">
    <div class="col-sm-12">
        <div class="pull-left">
            <h3>Index Page</h3>
        </div>
        <div class="pull-right">
            <a class="btn btn-success"  href="{{ route('blogs.create') }}">Add new Record</a>
        </div>
    </div>
</div>
<div class="container mt-3">
    <table class="table table-bordered table-hover" id="table1" role="grid">
        <thead>
            <tr role="row">
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                {{-- <th>Action</th> --}}
            </tr>
        </thead>

        <tbody> </tbody>

    </table>
</div> 

<script>
    // $(document).ready( function () {
    //     $('#table1').DataTable();
    // } );

    $(document).ready( function () {

        var BASE = "{{ URL('/') }} /" ;

        $('#table1').DataTable( {
            "ajax": "{!! route('ajax.datatable') !!}" ,
            columns: [
                {data: 'id' , name: 'id'} ,
                {data: 'title' , name: 'title'} ,
                {data: 'body' , name: 'body'} ,
                //{data: 'action' , name: 'action'} ,
            ]
        }
           
       );
    } );


</script>


@endsection

