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
    <form name="form-add-student" action="{{ route('update-student-submit', $student['id']) }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text">@</span>
            <div class="form-floating">
                <input value="{{ $student['SLastName'] }}" type="text" name="SLastName" class="form-control" id="floatingInputGroup1" placeholder="Фамилия">
            </div>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">@</span>
            <div class="form-floating">
                <input value="{{ $student['SFirstName'] }}" type="text" name="SFirstName" class="form-control" id="floatingInputGroup1" placeholder="Имя">
            </div>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">@</span>
            <div class="form-floating">
                <input value="{{ $student['SMidName'] }}" type="text" name="SMidName" class="form-control" id="floatingInputGroup1" placeholder="Отчество">
            </div>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">@</span>
            <div class="form-floating">
                <input value="{{ $student['SBirthDate']->format('Y-m-d') }}" type="date" name="SBirthDate" class="form-control" id="floatingInputGroup1" placeholder="Дата рождения">
            </div>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">@</span>
            <select name="classes_id" class="form-select" id="select-class" aria-label="Default select example">
                <option value="1" {{ $student['classes_id'] == 1 ? 'selected' : '' }}>1А класс</option>
                <option value="2" {{ $student['classes_id'] == 2 ? 'selected' : '' }}>1Б класс</option>
                <option value="3" {{ $student['classes_id'] == 3 ? 'selected' : '' }}>1В класс</option>
                <option value="4" {{ $student['classes_id'] == 4 ? 'selected' : '' }}>1Г класс</option>
            </select>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" style="width: 100%" type="submit">Изменить</button>
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
