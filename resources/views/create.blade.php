@extends('home')

@section('forms')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form name="form-add-student" action="{{ route('create-student-submit') }}" method="post">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text">@</span>
        <div class="form-floating">
            <input type="text" name="surname" class="form-control" id="floatingInputGroup1" placeholder="Фамилия">
        </div>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">@</span>
        <div class="form-floating">
            <input type="text" name="name" class="form-control" id="floatingInputGroup1" placeholder="Имя">
        </div>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">@</span>
        <div class="form-floating">
            <input type="text" name="otchestvo" class="form-control" id="floatingInputGroup1" placeholder="Отчество">
        </div>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">@</span>
        <div class="form-floating">
            <input type="date" name="date" class="form-control" id="floatingInputGroup1" placeholder="Дата рождения">
        </div>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">@</span>
        <div class="form-floating">
            <input type="number" name="class" class="form-control" id="floatingInputGroup1" placeholder="Класс обучения">
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" style="width: 100%" type="submit">Отправить</button>
    </div>
    <div class="container overflow-hidden text-center">
        <div class="row gx-5">
            <div class="col">
                <div class="p-3 invalid-validation" style="color: red"></div>
            </div>
        </div>
    </div>
</form>
@endsection
