@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    

    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            <h1>NEW Task Create Page</h1>
            {!! Form::model($task, ['route' => 'tasks.store']) !!}

                <div class="form-group">
                    {!! Form::label('content', 'TASK:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ADD', ['class' => 'btn btn-primary btn-lg btn-block']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection
