@extends("layouts.app")
@section("title","Welcome")
<br>
<br>
<br>
<ol>
@foreach($fruits as $fruits)
<li>
{{$fruits}}
</li>
@endforeach
</ol>
