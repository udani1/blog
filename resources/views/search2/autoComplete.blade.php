{{-- searching view page without using SELECT2 Application --}}
@extends('extends.layout')
@section('content')
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<br/>
<div class="container box">
    <h3 align="center">Ajax Autocomplete Textbox in Laravel using JQuery (In a basic way)</h3><br/>

    <div class="form-group">
        <input type="text" name="product_name" id="product_name" class="form-control input-lg"/>
        <div id="productList"></div>
    </div>
    {{ csrf_field() }}
</div>

<script>
        $(function(){

            $('#product_name').keyup(function(){ 
                var query = $(this).val();
                if(query != '')
                {
                 var _token = $('input[name="_token"]').val();
                 $.ajax({
                  url:"{{ route('search.fetchdata') }}",
                  method:"POST",
                  data:{query:query, _token:_token},
                  success:function(data){
                   $('#productList').fadeIn();  
                            $('#productList').html(data);
                  }
                 });
                }
            });
        
            $(document).on('click', 'li', function(){  
                $('#product_name').val($(this).text());  
                $('#productList').fadeOut();  
            });  
          
          });
    </script>

@endsection