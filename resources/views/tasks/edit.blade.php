@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>id: {{ $task->id }} : Task Edit Page</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'TASK:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'Status:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('UPDATE') !!}

    {!! Form::close() !!}

@endsection