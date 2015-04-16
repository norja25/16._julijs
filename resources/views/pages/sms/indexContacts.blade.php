@extends('back')
@section('Specific-Page-Vendor-CSS')
    <!-- Jquery -->
    <script src="//code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" type="text/css" href="vendor/word-rotate/word-rotate.css" />
@stop
@section('content')

<div class="row">
    {{ $response['result']['data'][1]['name']  }}
</div>


    <div class="row">
        <div class=" col-sm-offset-3 col-sm-6">
            {!! Form::open(['method' => 'POST', 'class' => 'well']) !!}
            <div class="form-group">
                {!!  Form::label('text', 'Ziņa GuP Jaunišu ģimenei:' )  !!}
                {!!  Form::textarea('smsmessage', null, ['class' => 'form-control textarea', 'required', 'rows' => 4, 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Pirms īsziņās tiks ielikts personalizēts sveicies Piem: Čau Mārtiņ!', 'maxlength' => '1000'])  !!}
            </div>
            <div class="pull-right label label-primary"><span class="count">0</span>/500</div>
            <div class="pull-left label label-primary"> Max sms: <snap class='sms'>0</snap>/8</div>
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
    </script>

    <!-- your custom js -->
@stop
