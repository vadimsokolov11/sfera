@extends('layouts.admin_layout')

@section('title', 'Редактирование услуги')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование услуги: {{ $servies['title'] }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{route('servies.update', $servies['id'])}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputTitle">Название</label>
                                    <input type="text" name='title' class="form-control" id="inputTitle" placeholder="Введите название услуги" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Описание</label>
                                    <input type="text" name="description" class="form-control" id="inputDescription" placeholder="Введите описание услуги">
                                </div>
                                <div class="form-group">
                                    <label for="inputPrice">Цена</label>
                                    <input type="text" name="price" class="form-control" id="inputPrice" placeholder="Ввведите цену услуги" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Загрузка изображения</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Выберите</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status">Статус</label>
                                    <input type="text" name="status" class="form-control" id="status" placeholder="Усановите статус от 0 до 1(по умолчанию 1)">
                                </div>
                            </div>
                            <!-- /.card-body -->
    
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection