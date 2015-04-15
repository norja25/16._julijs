@if( $errors->any())
    <div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

		<script type="text/javascript">
		$(function(){
			 PNotify.desktop.permission();
			@foreach($errors->all() as $error)
			new PNotify({
			    title: '{{ $error }}',
			    text: '',
			    type: '{{ Session::get('flash_notification.level') }}',
			    icon: 'fa fa-info',
			    nonblock: {
			        nonblock: true,
			        nonblock_opacity: .2
			    },
			    desktop: {
			        desktop: true
			    }
			});
			@endforeach
		});
		</script>
@endif