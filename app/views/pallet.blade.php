@extends('layout')

@section('content')


{{ Form::model($pallet, array('route' => array('make.pallet', ''))) }}

{{ Form::label('Layout', 'Pallet layout') }}

{{ Form::select('Layout', array(
    'versq' =>'Vertical square',
    'verint'=>'Vertical interleaved',
    'horint'=>'Horizontal interleaved',
    'horsq' =>'Horizontal square',
    'horpyr'=>'Horizontal pyramid',
)) }}

<br> {{ Form::label('rollwidth_mm', 'Roll width mm') }} {{ Form::text('rollwidth_mm', $pallet->rollwidth_mm) }}
<br> {{ Form::label('diam_mm', 'Roll diameter mm') }} {{ Form::text('diam_mm', $pallet->diam_mm) }}
<br> {{ Form::label('rows', 'Pallet vertical rows') }} {{ Form::text('rows', $pallet->rows) }}
<br> {{ Form::label('plength_mm', 'Pallet length') }} {{ Form::text('plength_mm', $pallet->plength_mm) }}

<br>
{{ Form::submit('Calculate') }}

{{ Form::close() }}

{{--
{{ Form::model($pallet) }}

{{ Form::close() }}
{{ Form::model($pallet, array('route' => array('pallet', 'makePallet'))) }}

{{ Form::open(array('url' => 'users', 'method' => 'put')) }}
@foreach($users as $user)
         <p>{{ $user->name }}</p>
    @endforeach
--}}
@stop