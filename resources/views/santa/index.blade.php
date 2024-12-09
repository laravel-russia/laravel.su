@extends('layout')
@section('title', 'Кодица')

@section('content')

    <div data-controller="santa"></div>


    <x-header image="/img/ui/santa/blob.svg">
        <x-slot:sup>Станьте частью волшебства!</x-slot>
        <x-slot:title>Клуб дедов морозов 2025</x-slot>

        <x-slot:description>
            Поделитесь волшебным настроением с окружающими! 🎁
        </x-slot>

        <x-slot:actions>
            <a href="{{ route('santa.start') }}" class="btn btn-primary btn-lg px-4">{{ $participant->exists ? 'Посмотерть статус' : 'Присоединится' }}</a>
            <a href="{{ route('santa.rules') }}" class="d-none d-md-inline-flex link-body-emphasis text-decoration-none icon-link icon-link-hover">
                Полные правила
                <x-icon path="i.arrow-right" class="bi"/>
            </a>
        </x-slot>
    </x-header>

    <x-container>
        <div class="text-primary mb-3 d-block text-uppercase fw-semibold ls-xl">Как это работает</div>
        <div class="bg-body-secondary p-5 rounded-5 overflow-hidden">
            <div class="row gx-5 gy-4 gy-md-5 row-cols-1 row-cols-lg-3 text-balance">
                <div class="col">
                    <p class="display-1 text-primary fw-bolder">1</p>
                    <h3 class="fs-2 fw-bolder">Регистрация</h3>
                    <hr class="w-25 text-primary">
                    <p>
                        Зарегистрируйте участие используя существующий аккаунт на сайте.
                        Это поможет нам подготовить все необходимое для вашего участия.
                    </p>
                </div>
                <div class="col">
                    <p class="display-1 text-primary fw-bolder">2</p>
                    <h3 class="fs-2 fw-bolder">Получение пары</h3>
                    <hr class="w-25 text-primary">
                    <p>Дождитесь 2 декабря и мы найдем вам пару! Она будет доступна на странице в указанный день.</p>
                </div>
                <div class="col">
                    <p class="display-1 text-primary fw-bolder">3</p>
                    <h3 class="fs-2 fw-bolder">Подготовка подарка</h3>
                    <hr class="w-25 text-primary">
                    <p>Не забудьте подготовить подарок для своего получателя и отправить его по почте.</p>
                </div>
                <div class="col">
                    <p class="display-1 text-primary fw-bolder">4</p>
                    <h3 class="fs-2 fw-bolder">Отправка подарка</h3>
                    <hr class="w-25 text-primary">
                    <p>Укажите номер трека для отправления на странице Тайного Санты, чтобы ваш получатель мог отслеживать подарок.</p>
                </div>
                <div class="col">
                    <p class="display-1 text-primary fw-bolder">5</p>
                    <h3 class="fs-2 fw-bolder">Волшебство</h3>
                    <hr class="w-25 text-primary">
                    <p>Осталось немного подождать вашего подарка!</p>
                </div>

                <div class="col">
                    <div class="p-4 p-xl-5 bg-body rounded d-flex flex-column h-100 position-relative d-flex align-items-center">
                        <span class="text-decoration-none d-block text-center my-auto opacity-75">
                            <span class="d-block mb-3 display-1">
                              🎅
                            </span>
                            Я в деле!
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </x-container>


    {{--
    <x-container>
        <div class="row g-4 g-md-5">
            <div class="col-12 col-md-6">
                <div class="text-primary mb-3 d-block text-uppercase fw-semibold ls-xl">Деды морозы</div>
                <div class="row row-cols-3 row-cols-lg-6 text-center justify-content-center" style="filter:grayscale(100%)">
                    @foreach(\App\Models\User::all() as $user)
                        <div class="col">
                            <img class="img-fluid rounded-circle mb-3" src="{{ $user->avatar }}" alt="{{ $user->name }}" style="aspect-ratio: 1/1">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="text-primary mb-3 d-block text-uppercase fw-semibold ls-xl">Гринчи</div>
                <div class="row row-cols-3 row-cols-lg-6 text-center justify-content-center" style="filter:grayscale(100%)">
                    @foreach(\App\Models\User::all() as $user)
                        <div class="col">
                            <img class="img-fluid rounded-circle mb-3" src="{{ $user->avatar }}" alt="{{ $user->name }}" style="aspect-ratio: 1/1">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-container>
    --}}


    <x-container>
        <div class="row g-4 g-md-5  align-items-start position-relative mb-5">
            <div class="col-xl-4 py-3">
                <div class="mb-4">
                    <div
                        class="feature-icon-small d-inline-flex align-items-center justify-content-center border border-primary text-primary fs-4 rounded-3">
                        <x-icon path="i.faq"/>
                    </div>
                </div>
                <h5 class="fs-4 mt-2 fw-semibold">Часто задаваемые вопросы</h5>
                <p class="mb-0">Не можете найти ответ, который ищете?</p>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4 g-md-5">

            <div class="col">
                <h6 class="fw-bolder mb-3">Как поучаствовать?</h6>
                <p class="text-muted">
                    Войдите в свой аккаунт на сайте и оставьте заявку до 1 декабря.
                </p>
            </div>

            <div class="col">
                <h6 class="fw-bolder mb-3">Какую информацию мне нужно указать?</h6>
                <p class="text-muted">
                    Укажите ваше полное имя, адрес, а также кратко расскажите о себе, чтобы ваш Тайный Санта мог выбрать подарок по вашему вкусу.
                </p>
            </div>

            <div class="col">
                <h6 class="fw-bolder mb-3">Кто станет моим Тайным Сантой?</h6>
                <p class="text-muted">
                    Другой пользователь, оставивший заявку. Мы выберем его случайным образом.
                </p>
            </div>

            <div class="col">
                <h6 class="fw-bolder mb-3">До какого числа нужно отправить подарок?</h6>
                <p class="text-muted">
                    Все подарки должны быть отправлены до 20 декабря.
                </p>
            </div>

            <div class="col">
                <h6 class="fw-bolder mb-3">Каким должен быть мой подарок?</h6>
                <p class="text-muted">
                    Это зависит только от вас, конкретных критериев на стоимость подарков нет.
                </p>
            </div>

            <div class="col">
                <h6 class="fw-bolder mb-3">У меня еще остались вопросы!</h6>
                <p class="text-muted">
                    Подробные правила и ответы на вопросы читайте в статье на нашем сайте.
                </p>
            </div>
        </div>

    </x-container>


@endsection
