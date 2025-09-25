@extends('layouts.main')
@section('title')
    Главная
@endsection
@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="storage/img/11.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="storage/img/1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="storage/img/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="storage/img/3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <p></p>
    <div class="row align-items-start">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="storage/img/port.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Портовые услуги</h5>
                    <p class="card-text">ООО «МРТС Терминал» оказывает комплексные логистические услуги по хранению и
                        перевалке
                        грузов железнодорожным,
                        автомобильным и водным транспортом.</p>
                </div>

            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="storage/img/trassa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Близость к федеральной трассе</h5>
                    <p class="card-text">Инфраструктура ООО «МРТС Терминал» располагается в максимальной близости к
                        автомобильной трассе М-8, в сравнении с
                        другими терминалами порта Архангельск.</p>
                </div>
            </div>

        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="storage/img/prichal.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Причалы </h5>
                    <p class="card-text">В эксплуатации причалы № 118, 119, длина по 180 м, максимальная осадка 7,4 м.
                        Имеется развитая система собственных
                        железнодорожных путей, обслуживаемых собственными локомотивами.</p>
                </div>
            </div>

        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="storage/img/sklad.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Складское хранение</h5>
                    <p class="card-text">
                    <ul>
                        <li>Общая площадь открытых складов – 300 000 м2;</li>
                        <li>Площадь крытых складов – 4 500 м2, теплый склад – 2 000 м2;</li>
                        <li>Площадь причальных площадок для формирования судовых партий – 16 700 м2;</li>
                        <li>Площади хранения опасных грузов (3 кл. опасности) – 7 500 тн (селитра) / 30 000 тн (селитра в
                            виде удобрений).
                        </li>
                    </ul>
                    </p>
                </div>
            </div>

        </div>
    </div>

    <img src="storage/img/2.jpg" class="d-block w-100" alt="...">
@endsection
