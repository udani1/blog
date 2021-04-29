@extends('dash.layout')
@section('content')

@section('content_header')
    Supplier Create
@endsection

@section('breadcrumb')
    <a href="{{url('supplier/')}}">Supplier</a> > <a href="{{url('supplier/create')}}">Supplier Create</a>
@endsection

<style>
    .validate{
        color: red;
    }
</style>

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Create a supplier</h4>
        <hr>
        <p class="card-text">This is a sample model created only for demo,In this example you can learn how to use basic laravel validation </p>

        <form action="{{ route('supplier.store') }}" method="POST">
        @csrf
            <div class="form-row">
                <div class="col-md-4-mb-3">
                    <label for="">First name</label>
                    <input type="text" class="form-control {{ $errors->has('fname') ? 'is-invalid' : '' }}" id="" value="{{old('fname')}}" name="fname">
                    @if ($errors->has('fname'))
                    <div class="validate">
                        {{-- {{$errors->first('fname')}} --}}
                        {{-- or --}}
                        Please type first name. 
                    </div>
                    @endif
                </div>
                <div class="col-md-4-mb-3">
                    <label for="">Last name</label>
                    <input type="text" class="form-control{{$errors->has('lname') ? ' is-invalid' : '' }} " value="{{old('lname')}}" name="lname">
                    @if ($errors->has('lname'))
                    <div class="validate">
                        {{-- {{ $errors->first('lname')}} --}}
                        {{-- or --}}
                        Please type last name.
                    </div>
                    @endif
                </div>
            </div>
            
            <div class="form-row">
                <div class="col-md-4-mb-3">
                    <label for="">Addressn Line 1</label>
                    <input type="text" class="form-control {{ $errors->has('addLine1') ? ' is-invalid' : '' }}" value="{{old('addLine1')}}" name="addLine1">
                    @if ($errors->has('addLine1'))
                    <div class="validate">
                        {{-- {{ $errors->first('addLine1')}} --}}
                        {{-- or --}}
                        Please type Address line 1.
                    </div>
                    @endif
                </div>
                  
                <div class="col-md-4-mb-3">
                    <label for="">Addressn Line 2</label>
                    <input type="text" class="form-control {{ $errors->has('addLine2') ? ' is-invalid' : '' }}" value="{{old('addLine2')}}" name="addLine2">
                    @if ($errors->has('addLine2'))
                    <div class="validate">
                        {{-- {{ $errors->first('addLine2')}} --}}
                        {{-- or --}}
                        Please type Address line 2.                           
                    </div>
                    @endif
                </div>
            </div>
            
            <div class="form-row">    
                <div class="col-md-4-mb-3">
                    <label for="">Phone </label>
                    <input type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{old('phone')}}" name="phone">
                    @if ($errors->has('phone'))
                    <div class="validate">
                        {{-- {{ $errors->first('phone')}} --}}
                        {{-- or --}}
                        Please type Phone Number.
                    </div>
                    @endif
                </div>

                
                <div class="col-md-4-mb-3">
                    <label for="">Email </label>
                    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{old('email')}}" name="email">
                    @if ($errors->has('email'))
                    <div class="validate">
                        {{-- {{ $errors->first('email')}} --}}
                        {{-- or --}}
                        Please type EmailAddress.
                    </div>
                    @endif
                </div>
            </div>

            <input type="submit" value="Save" class="btn btn-primary"> 
            <input type="reset" value="Clear" class="btn btn-warning">
    
        </form>
    </div>
</div>

@endsection 

{{-- by sir --}}
{{-- @extends('extends.layout')

@section('content')
<style>
    .validate{
        color: red;
    }
</style>
<div class="card">
    <div class="card-body">
        <h4 class="card-title"> Create a supplier</h4>
        <hr>
        <p class="card-text">This is a sample model created only for demo, In this example you can learn how to use basic laravel validations</p>
        <form action="{{ route('supplier.store') }}" method="POST">
            @csrf
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="">First name</label>
                <input type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" id="" value="{{old('fname')}}" name="fname" >
                @if ($errors->has('fname'))
                    <div class="validate">
                        {{-- {{ $errors->first('fname') }} --}}
                        {{-- or -}}
                        Please type first name.
                    </div>
                @endif
            </div>
            <div class="col-md-4 mb-3">
                <label for=""> Last name</label>
                <input type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }} "  value="{{old('lname')}}" name="lname">
                @if ($errors->has('lname'))
                <div class="validate">
                    {{-- {{ $errors->first('lname') }} --}}
                    {{-- or -}}
                    Please type last name.
                </div>
            @endif
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="">Address line 1</label>
                <input type="text" class="form-control {{ $errors->has('addLine1') ? ' is-invalid' : '' }} " value="{{old('addLine1')}}" name="addLine1">
                @if ($errors->has('addLine1'))
                <div class="validate">
                    {{-- {{ $errors->first('addLine1') }} --}}
                    {{-- or -}}
                    Please type address line 1.
                </div>
            @endif
                
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Address line 2</label>
                <input type="text" class="form-control {{ $errors->has('addLine2') ? ' is-invalid' : '' }} "  value="{{old('addLine2')}}" name="addLine2">
                @if ($errors->has('addLine2'))
                <div class="validate">
                    {{-- {{ $errors->first('addLine2') }} --}}
                    {{-- or -]-}}
                    Please type address line 2.
                </div>
            @endif
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="">Phone</label>
                <input type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }} " id="" value="{{old('phone')}}" name="phone">
                @if ($errors->has('phone'))
                <div class="validate">
                    {{-- {{ $errors->first('phone') }} --}}
                    {{-- or -}}
                    Please type Phone number.
                </div>
            @endif
                
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Email</label>
                <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }} "  value="{{old('email')}}" name="email">
                @if ($errors->has('email'))
                <div class="validate">
                    {{ $errors->first('email') }}
                    {{-- or --}}
                    {{-- Please type frist name -}}
                </div>
            @endif
            </div>

        </div>
    <input type="submit" value="Save" class="btn btn-primary"> 
    <input type="reset" value="Clear" class="btn btn-warning">
    </form>
    </div>
</div>
<br>
@endsection --}}