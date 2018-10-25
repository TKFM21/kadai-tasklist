@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>【ID:{{ $task->id }}】 Task Detail</h1>

    <table class="table table-striped table-hover">
        <tr>
            <th class="warning">ID</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th class="info">Task</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th class="success">Status</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'EDIT', ['id' => $task->id], ['class' => 'btn btn-info btn-lg btn-block']) !!}
    
    <br>
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('DELETE', ['class' => 'btn btn-danger btn-lg btn-block']) !!}
    {!! Form::close() !!}

@endsection