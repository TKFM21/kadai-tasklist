@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>【ID:{{ $task->id }}】 Task Edit Page</h1>

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('content', 'TASK:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('UPDATE', ['class' => 'btn btn-primary btn-lg btn-block']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection