@extends('layout.master')

@section('head')
<style>
    .fail {
        color: red;
    }
</style>
@endsection

@section('content')
<h1>Home Index</h1>
<p>Hello!{{ $userName }}</p>
<div>{!! $lines !!}</div>

<ul>
    @foreach ($scoreList as $score)
    <li class="{{ ($score<60) ? 'fail' : '' }}">{{$score}}</li>
    @endforeach
</ul>

<select name="city" id="city">
    <option value="2" {{($cityID==2)?'selected':''}}>台北</option>
    <option value="4" {{($cityID==4)?'selected':''}}>台中</option>
    <option value="6" {{($cityID==6)?'selected':''}}>台南</option>
</select>
@endsection