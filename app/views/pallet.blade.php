@extends('layout')
@section('content')
<p> In pallet.blade.php, lets make a form with pallet specifications:</p>

{{ Form::model($pallet, array('url' => 'palletmake')) }}
    {{ Form::label('Layout', 'Pallet layout') }}
    {{ Form::select('Layout', array(
        'versq' =>'Vertical square',
        'verint'=>'Vertical interleaved',
        'horint'=>'Horizontal interleaved',
        'horsq' =>'Horizontal square',
        'horpyr'=>'Horizontal pyramid',
    )) }}

    <br> {{ Form::label('rollwidth_mm', 'Roll width mm') }} {{ Form::text('rollwidth_mm') }}
    <br> {{ Form::label('diam_mm', 'Roll diameter mm') }}   {{ Form::text('diam_mm') }}
    <br> {{ Form::label('rows', 'Pallet vertical rows') }}  {{ Form::text('rows') }}
    <br> {{ Form::label('plength_mm', 'Pallet length') }}   {{ Form::text('plength_mm') }}

    <br>
    {{ Form::submit('Calculate') }}
{{ Form::close() }}

{{--   COMMENTS:

{{ Form::model($pallet) }}
{{ Form::model($pallet, array('route' => array('palletmake', ''))) }}
{{ Form::close() }}
{{ Form::model($pallet, array('route' => array('pallet', 'makePallet'))) }}
    <br> {{ Form::label('rollwidth_mm', 'Roll width mm') }} {{ Form::text('rollwidth_mm', $pallet->rollwidth_mm) }}

{{ Form::open(array('url' => 'users', 'method' => 'put')) }}
@foreach($users as $user)
         <p>{{ $user->name }}</p>
    @endforeach
--}}
@stop