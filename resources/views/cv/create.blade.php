@extends('layout')

@section('content')
    <h1 class="title">My CV</h1>
    <div class="d-flex">
        <section>
{{--            <h2 class="sub-title">Create</h2>--}}
            <form method="POST" action="/cv" id="post-form" class="form-search needs-validation">
                @csrf
                <div class="form-column">

                    <div class="mb-3">
                        <label for="cv_name">Назва</label>
                        <input type="text" class="form-control" id="cv_name" name="cv_name" required>
                        <div class="invalid-feedback">
                            Введіть назву!
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description">Опис</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                        <div class="invalid-feedback">
                            Введіть опис!
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="type_of_working">Тип діяльності</label>
                        <select id="type_of_working" name="type_of_working"
                                class="form-control @error('type') is-invalid @enderror" required>
                            <option value="IT-сфера">IT-сфера</option>
                            <option value="Електрика">Електрика</option>
                            <option value="Водій">Водій</option>
                            <option value="Мореплавець">Мореплавець</option>
                        </select>
                        <div class="invalid-feedback">
                            Вкажіть тип дільності!
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="city">Місто проживання</label>
                        <select id="city" name="city"
                                class="form-control @error('type') is-invalid @enderror" required>
                            <option value="Одеса">Одеса</option>
                            <option value="Киів">Киів</option>
                            <option value="Харків">Харків</option>
                            <option value="Херсон">Херсон</option>
                            <option value="Херсон">Луцьк</option>
                        </select>
                        <div class="invalid-feedback">
                            Вкажіть тип дільності!
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="post">Посада</label>
                        <input type="text" class="form-control" id="post" name="post"
                        >
                        <div class="invalid-feedback">
                            Вкажіть посаду!
                        </div>
                    </div>
                    <button class="btn btn-primary mb-3" id="send-form" type="submit">Додати</button>
                </div>
            </form>
        </section>
        @if(count($CVs) > 0)
        <section>
{{--            <h2 class="sub-title">My CV</h2>--}}
            <div id="wrap-cv" class="wrap-info">

            </div>
            @foreach($CVs as $cv)
                <form method="POST" action="{{$cv->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit"><span>Видалили</span></button>
                </form>
                <div class="wrap">
                    <div class="my-account-wrap-info">
                        <span>{{$cv -> title}}</span>
                        <a href="{{$cv->id}}">Переглянути</a>
                    </div>
                </div>
            @endforeach
        </section>
        @endif
    </div>
@endsection

