@extends('back')
@section('Specific-Page-Vendor-CSS')
    <link rel="stylesheet" href="assets/vendor/select2/select2.css">
    <!-- Jquery -->
    <script src="//code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" type="text/css" href="vendor/word-rotate/word-rotate.css" />
@stop
@section('content')

<div class="row">


</div>


    <div class="row">
        <div class=" col-sm-offset-3 col-sm-6">
            {!! Form::open(['method' => 'POST', 'route' => 'sendSingle', 'class' => 'well']) !!}
            <div class="form-group">
                <select name="phone_number" class="select2-container form-control populate mb-md">
                    <option value="">Please select</option>
                    @foreach ( $response['result']['data'] as $contact )
                        <option value="{!! $contact['number'] !!}">{!! $contact['name'] !!} - {!! $contact['number'] !!}</option>
                    @endforeach
                </select>
                {!!  Form::textarea('smsmessage', null, ['class' => 'form-control textarea', 'required', 'rows' => 4, 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Pirms īsziņās tiks ielikts personalizēts sveicies Piem: Čau Mārtiņ!', 'maxlength' => '1000'])  !!}
            </div>
            <div class="pull-right label label-primary"><span class="count">0</span>/235</div>
            <div class="pull-left label label-primary"> Max sms: <snap class='sms'>0</snap>/4</div>
            <br>
            <div class="form-group">
              
                {!!  Form::submit('Send SMS', ['class' => 'btn btn-primary form-control'])  !!}

            </div>

            {!! Form::close() !!}
        </div>
    </div>
    </div>

@stop


@section('scripts')

    <script src="assets/vendor/select2/select2.js"></script>

    <script>
        $(".textarea").keyup(function(){
            $(".count").text($(this).val().length);
        });
        $(".textarea").keyup(function(){
            var num = $(this).val().length / 59 ;
            var numTruncated = parseFloat(num).toFixed(0);
            $(".sms").html(numTruncated);
        });
    </script>

    <script>
        $('.textarea').tooltip();
    </script>

    <script>
        function resizeInput() {
            $(this).attr('size', $(this).val().length - 3);
        }

        $('.uzruna')
            // event handler
                .keyup(resizeInput)
            // resize on page load
                .each(resizeInput);
        $(document).ready(function() {
            $(".select2-container").select2();
        });
    </script>

    <!-- your custom js -->
@stop
