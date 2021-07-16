@extends('adminlte::page')

@section('title', 'SiteCourses')

@section('content_header')
    <h1>Create new level</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.levels.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Type name from level']) !!}
            </div>
            @error('name')
                <span class="text-danger text-sm">{{ $message }}</span>
            @enderror

            {!! Form::submit('Create level', ['class' => 'btn btn-primary float-right']) !!}
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
