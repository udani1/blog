@extends('dash.layout')
@section('content')

@section('content_header')
    Supplier Show
@endsection

@section('breadcrumb')
    <a href="{{url('supplier/')}}">Supplier</a> > <a href="{{url('supplier/show')}}">Supplier Show</a>
@endsection


{{-- {{$supplier->fname}}<br>
{{$supplier->lname}} --}}

<div class="card">
        <label>First Name :{{$supplier->fname}} </label>  
        <label>Last Name :{{$supplier->lname}} </label>    
        <label>Address Line 1 :{{$supplier->addLine1}} </label>    
        <label>Address Line 2 :{{$supplier->addLine2}} </label>    
        <label>Phone Number :{{$supplier->phone}}</label>    
        <label>Email Address :{{$supplier->email}}</label>  
</div> 
<br>
<a class="btn btn-primary" href="{{route('supplier.index') }}"> Back </a>

@endsection

{{-- checking the git hub...............
bhbbubuw
jnndn --}}