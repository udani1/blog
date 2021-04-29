@extends('dash.layout')
@section('content')

{{-- used breadcrum (4-10 lines) --}}
@section('content_header')
    Supplier
@endsection
@section('breadcrumb')
    <a href="{{url('supplier/')}}">Supplier</a>
@endsection

<h3>Check all Blogs</h3>

<a href="{{route('supplier.create') }}" class="btn btn-info"> Create New Blog </a>

@if ($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<div class="card">
    <div class="card-hearder">
    <h5 class="card-title">View all Suppliers</h5>   
    </div>
    <div class="card-body">
            <table class="table table-bordered" width="100%" cellspacing="0">
            <tr>
                {{-- <th>('_')</th> --}}
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address Line1</th>
                <th>Address Line1</th>
                <th>Phone Number</th>
                <th>Email Address</th>
                <th></th>
            </tr>
        
            @foreach ($suppliers as $supplier)
            <tr>
                {{-- <td></td> --}}
                <td>{{$supplier->fname}}</td>
                <td>{{$supplier->lname}}</td>
                <td>{{$supplier->addLine1}}</td>
                <td>{{$supplier->addLine2}}</td>
                <td>{{$supplier->phone}}</td>
                <td>{{$supplier->email}}</td>
        
                <td>
                    <form action="{{ route ('supplier.destroy',$supplier->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Delete </button>
                    <a href="{{route('supplier.show',$supplier->id) }}" class ="btn btn-info"> Show </a>
                    <a href="{{route('supplier.edit',$supplier->id) }}" class ="btn btn-primary"> Edit </a>
                    </form>
                </td>
            </tr>
            @endforeach
        
            </table>
    </div>    
</div> 

@endsection