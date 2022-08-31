<x-header componentName="User" />
<h1>User page</h1>
@csrf
{{-- @if($names == "Gagan")
    <p>Hello, {{$names}}</p>
@elseif($names == "Sam")
    <p>Hi, {{$names}}</p>
@else
    <p>Hi, unknown</p>
@endif --}}

@for($i=1;$i<=10;$i++)
    <h4>{{ $i }}</h4>
@endfor

@foreach ($names as $user)
    <h6>Hello, {{ $user }}</h6>    
@endforeach
<?php
// able to use php tag
// echo "yes";
?>
@include('inner')
<script>
    var data = @json($names);
    console.table(data);
</script>