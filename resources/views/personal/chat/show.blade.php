@extends('personal.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 mr-2">{{ $chat->name }}</h1>
{{--                    <a href="{{ route('admin.category.edit', $chat->id) }}" class="text-success"><i class="fa-solid fa-pen"></i></a>--}}
{{--                    <form action="{{ route('admin.category.delete', $chat->id) }}" method="post">--}}
{{--                        @csrf--}}
{{--                        @method('delete')--}}
{{--                        <button type="submit" class="border-0 bg-transparent">--}}
{{--                            <i class="fa-solid fa-trash text-danger" role="button"></i>--}}
{{--                        </button>--}}
{{--                    </form>--}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
{{--                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>--}}
{{--                        <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Категории</a></li>--}}
                        <li class="breadcrumb-item active">{{ $chat->name }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        <div class="card mt-5 col-8">
            <div class="card-header">{{ $chat->name }}</div>

            <div class="card-body">
                <ul id="messages" class="list-group">
                @foreach($messages as $message)
                    <li class="list-group-item"><b>{{$message->name}}</b>: {{$message->message}}</li>
                @endforeach
                </ul>
                <form id="send-message" class="mt-5">
                    @csrf
                    <div class="input-group mb-3">
                        <input required type="text" class="form-control" id="message" autocomplete="off" placeholder="Message">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
