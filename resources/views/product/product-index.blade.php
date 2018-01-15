<h1>{{ $name }}</h1>
<ul>
	@foreach($product as $key => $value)
	   <li>{{ $value->name}}</li>
	 @endforeach
</ul>