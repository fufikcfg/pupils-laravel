@extends('home')

@section('forms')
<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Фамилия</th>
        <th scope="col">Имя</th>
        <th scope="col">Отчество</th>
        <th scope="col">Дата рождения</th>
        <th scope="col">Класс</th>
        <th scope="col"><a>Удалить</a></th>
    </tr>
    <form class="get-id-checkbox">
        @foreach($list as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->SLastName }}</td>
            <td>{{ $item->SFirstName }}</td>
            <td>{{ $item->SMidName }}</td>
            <td>{{ $item->SBirthDate }}</td>
            <td>{{ $item->SClass }}</td>
            <td><a href="{{ route('destroy-student', $item->id) }}" class="link-danger">Удалить</a></td>
        </tr>
        @endforeach
    </form>
    </thead>
</table>
<button style="width: 100%" type="button" id="btn-confirm" class="btn btn-primary">Принять</button>
@endsection
