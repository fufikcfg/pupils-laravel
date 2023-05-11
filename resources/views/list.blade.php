@extends('home')

@section('forms')
<select class="form-select" id="select-class" aria-label="Default select example">
    <option value="1">1 класс</option>
    <option value="2">2 класс</option>
    <option value="3">3 класс</option>
    <option value="4">4 класс</option>
    <option value="5">5 класс</option>
    <option value="6">6 класс</option>
    <option value="7">7 класс</option>
    <option value="8">8 класс</option>
    <option value="9">9 класс</option>
    <option value="10">10 класс</option>
    <option value="11">11 класс</option>
</select>
<button class="btn btn-success" id="btn-drop" typeof="submit">Показать</button>
<table class="table">
    <thead>
    <tr>
        <th>id</th>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Дата рождения</th>
        <th>Класс</th>
        <th>Удалить</th>
    </tr>
    </thead>
    <tbody id="tableBody">

    </tbody>
</table>
@endsection
