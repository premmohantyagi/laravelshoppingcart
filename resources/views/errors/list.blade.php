@if($errors->any())
<div class="alert alert-danger">
	
	<ul class="errors">
		@foreach($errors->all() as $message)
			<li><i class="fa fa-ban"></i> {!! $message !!}</li>
		@endforeach
	</ul>
</div>
@endif