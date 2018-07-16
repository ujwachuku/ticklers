@if(session('success'))
<br>
<div class="col-md-12">
    <div class="alert-success">        	
        <p>{{ session('success') }}</p>
    </div>
</div>
@endif

@if(count($errors) > 0)
<br>
<div class="col-md-12">
    <div class="alert-danger">
    	@foreach($errors->all() as $error)
        	<p>{{ $error }}</p>
        @endforeach
    </div>
</div>
@endif

@if(session('error'))
<br>
<div class="col-md-12">
    <div class="alert-danger">
    	<p>{{ $error }}</p>
    </div>
</div>
@endif