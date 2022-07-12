@extends('personal.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Чаты</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Чаты</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="card mt-5 col-3">
            @for ($i = 0; $i < count($chats); $i++)
            <div class="card-header ">
                @foreach($names[$i] as $name)
                {{ $name->name }}
                @endforeach
                <a class="btn btn-primary" href="{{ route('personal.chat.show', $chats[$i]->id) }}">Чат</a>
            </div>
            @endfor
        </div>
    </section>
    <div class="container">

    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
