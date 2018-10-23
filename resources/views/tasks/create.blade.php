@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>NEW Task Create Page</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'Task:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'Status:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('Submit') !!}

    {!! Form::close() !!}

@endsection
