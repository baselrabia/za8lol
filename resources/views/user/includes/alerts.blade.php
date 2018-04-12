@if(session()->exists('errors'))
<div class="alert alert-danger">
    @foreach(session()->get('errors', []) as $k => $v)
        @foreach($v as $x => $y)
        <p>{{ $k }} : {{ $y }}</p>
        @endforeach
    @endforeach
</div>    
@endif

@if(session()->exists('error'))
<div class="alert alert-danger">
	{{ session()->get('error') }}
</div>    
@endif