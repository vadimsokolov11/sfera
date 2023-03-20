@extends('layouts.user_layout')



@section('content')

<!-- слайдер -->
<section class="slider">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="user/img/video.png" class="d-block w-100" />
            </div>
            <div class="carousel-item">
                <img src="user/img/pojar.PNG" class="d-block w-100" />
            </div>
            <div class="carousel-item">
                <img src="user/img/support.PNG" class="d-block w-100" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>

</section>

<!-- услуги -->
<section class="servis" id="servis">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Наши услуги</h1>
        </div>

        @foreach($servise as $item)
        <div class="card mb-3 setting-card">

            <div class="row g-0">
                <!-- <div class="col-md-4">
                    <img src="	{{$item->image}}
" class="img-fluid rounded-start" alt="..." />
                </div> -->
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                        <p class="card-text">
                            {{$item->description}}
                        </p>
                        <p class="card-text">
                            <small class="text-muted">от {{$item->price}} руб.</small>
                        </p>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Заказать</button>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
        <div class="modal"></div>
</section>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Заказать услугу
                </h1>

            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Фамилия</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Иванов">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Имя</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Александр">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Отчество</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Александрович">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Номер телефона</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="+7 904 960 4712">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Комментарий</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Закрыть
                </button>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">
                    Отправить заявку
                </button>
            </div>
        </div>
    </div>
</div>
<!-- о нас -->
<section class="about" id="about">
    <div class="container">
        <div class="row align-items-start">
            <div class="col setting-text">
                <h2>Сфера</h2>
                <h4>Охрана наши клиентов стоит на первом месте</h4>
                описание компании
            </div>
            <div class="col setting-text">
                описание компании
            </div>
        </div>
    </div>
</section>

<!-- директор -->
<section class="employees" id="contact">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Контакты</h1>
        </div>
        <div class="row">
            @foreach ($contact as $item)
            <div class="col">

                <div class="text-center">
                    <div class="card-header">
                        <img src="https://sfera.iacon.ru/img/people.jpg" class="setting-img-card" />
                    </div>
                    <div class="card-body">
                        <h5 class="position">{{$item->surname}} {{$item->name}}</h5>
                        <div class="text-emploees">{{$item->position}}</div>
                        <div class="row">
                            <p class="icon">
                            <ul class="social">
                                <li><a href="#"><ion-icon name="logo-vk"></ion-icon></a></li>
                                <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- контакты -->
<section class="contact">
    <div class="container">
        <div class="row">
            <h1 class="text-center title">Как с нами связаться</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($contactInformation as $item)
            <div class="col">
                <div class="card h-100">
                    <img src="{{$item->image}}" class="card-img-top img-contact" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-contact-title">{{$item->description}}</h5>
                        <h6 class="card-title text-contact">{{$item->content}}</h6>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
    </div>
</section>
<footer>
    <div class="waves">
        <div class="wave" id="wave1"></div>
    </div>
    <ul class="social">
        <li><a href="#"><ion-icon name="logo-vk"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
    </ul>
    <ul class="menu">
        <li><a href="#">Главная</a></li>
        <li><a href="#servis">Услуги</a></li>
        <li><a href="#about">О нас</a></li>
        <li><a href="#contact">Контакты</a></li>
    </ul>
    <p>©2022 Сфера</p>
</footer>

@endsection