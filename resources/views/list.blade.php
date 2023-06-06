@extends('home')

@section('forms')
<select class="form-select" id="select-class" aria-label="Default select example">
    <option value="1">1А класс</option>
    <option value="2">1Б класс</option>
    <option value="3">1В класс</option>
    <option value="4">1Г класс</option>
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
        <th>Удалить</th>
        <th>Изменить</th>
    </tr>
    </thead>
    <tbody id="tableBody">

    </tbody>
</table>
@endsection
