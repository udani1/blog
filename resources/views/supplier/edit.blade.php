@extends('dash.layout')
@section('content')

@section('content_header')
    Supplier Edit
@endsection
@section('breadcrumb')
    <a href="{{url('supplier/')}}">Supplier</a> > <a href="{{url('supplier/edit')}}">Supplier Edit</a>
@endsection

<style>
    .validate{
        color: red;
    }
</style>
<div class="card">
    <div class="card-body">
        <h4 class="card-title"> Edit a supplier</h4>
        <hr>
        {{-- <p class="card-text">This is a sample model created only for demo, In this example you can learn how to use basic laravel validations</p> --}}
        <form action="{{ route('supplier.update',$supplier->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="">First name</label>
                <input type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" id="" value="{{$supplier->fname}}" name="fname" >
            </div>
            <div class="col-md-4 mb-3">
                <label for=""> Last name</label>
                <input type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }} "  value="{{$supplier->lname}}" name="lname">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="">Address line 1</label>
                <input type="text" class="form-control {{ $errors->has('addLine1') ? ' is-invalid' : '' }} " value="{{$supplier->addLine1}}" name="addLine1">
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Address line 2</label>
                <input type="text" class="form-control {{ $errors->has('addLine2') ? ' is-invalid' : '' }} "  value="{{$supplier->addLine2}}" name="addLine2">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="">Phone</label>
                <input type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }} " id="" value="{{$supplier->phone}}" name="phone">
                {{-- @if ($errors->has('phone'))
                <div class="validate">
                    {{-- {{ $errors->first('phone') }} --}}
                    {{-- or -}}
                    Please type Phone number.
                </div>
                @endif --}}
            </div>

            <div class="col-md-4 mb-3">
                <label for="">Email</label>
                <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }} "  value="{{$supplier->email}}" name="email">
                {{-- @if ($errors->has('email'))
                <div class="validate">
                    {{ $errors->first('email') }}
                    {{-- or --}}
                    {{-- Please type frist name -}}
                </div> 
            @endif --}}
            </div>

        </div>
    <input type="submit" value="Save" class="btn btn-primary">
     {{-- <input type="reset" value="Clear" class="btn btn-warning"> --}}
    </form>
    </div>
</div>
<br>
@endsection