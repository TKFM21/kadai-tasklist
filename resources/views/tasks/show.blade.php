@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>id = {{ $task->id }} : Task Detail</h1>

    <p>{{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'This task is edit.', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('DELETE') !!}
    {!! Form::close() !!}

@endsection