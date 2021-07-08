@extends('extends.layout')
@section('content')
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</head>

<body class="bg-dark">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <h4>Laravel - Dynamic autocomplete search using select2 JS Ajax</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <select class="itemName form-control" name="itemName"></select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
$('.itemName').select2({
    placeholder: 'Select an item',
    ajax: {
        url: '/select2-autocomplete',
        dataType: 'json',
        delay: 250 ,
        processResults: function (data) {
            return {
                results: $.map(data, function(item) {
                    return {
                        text: item.fname,
                        id: item.id
                    }
                })
            };
        },
        cache: true
    }
});
</script>

@endsection


