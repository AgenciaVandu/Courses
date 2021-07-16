@extends('adminlte::page')

@section('title', 'SiteCourses')

@section('content_header')
    <h1>Edit price</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($price, ['route' => ['admin.prices.update', $price], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Type name from price']) !!}
            </div>
            @error('name')
                <span class="text-danger text-sm">{{ $message }}</span>
            @enderror
            <div class="form-group">
                {!! Form::label('value', 'Value') !!}
                {!! Form::number('value', null, ['class' => 'form-control', 'placeholder' => 'Type value from price']) !!}
            </div>
            @error('value')
                <span class="text-danger text-sm">{{ $message }}</span>
            @enderror

            {!! Form::submit('Update price', ['class' => 'btn btn-primary float-right']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
