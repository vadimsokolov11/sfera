<!-- подключение шапки -->
@extends('layouts.admin_layout')

@section('title', 'Все услуги')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Все услуги</h1>
            </div><!-- /.col -->
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    id
                                </th>
                                <th style="width: 20%">
                                    Название
                                </th>
                                <th style="width: 30%">
                                    Описание
                                </th>
                                <th>
                                    Цена
                                </th>
                                <th>
                                    Статус
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servies as $servie)
                            <tr>
                                <td>
                                    {{$servie['id']}}
                                </td>
                                <td>
                                    <a>
                                        {{$servie['title']}}
                                    </a>
                                    <br>
                                    <small>
                                        {{$servie['created_at']}}
                                    </small>
                                </td>
                                <td>
                                    {{$servie['description']}}
                                </td>
                                <td>
                                    {{$servie['price']}}
                                </td>

                                <td class="project-state">
                                    <span class="badge badge-success">Success</span>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        Смотреть
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ route('servies.edit', $servie['id']) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Редактировать
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Удалить
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
    </div>
</section>
@endsection