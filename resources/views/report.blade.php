@extends('home')

@section('forms')
    <ul class="list-group">
        <li class="list-group-item">Самый младший первоклассник из всей школы:</li>
       @foreach($little as $itemLittle)
       <li class="list-group-item">{{ $itemLittle->SLastName }}</li>
       <li class="list-group-item">{{ $itemLittle->SFirstName }}</li>
       <li class="list-group-item">{{ $itemLittle->SMidName }}</li>
       <li class="list-group-item">{{ \Carbon\Carbon::createFromTimestamp(strtotime($itemLittle->SBirthDate))->format('d.m.Y')}}</li>
       <li class="list-group-item">{{ $itemLittle->SClass }}</li>
       @endforeach
    </ul>
    <div><br></div>
    <ul class="list-group">
        <li class="list-group-item">Количество учеников во всех вторых классах:</li>
        <li class="list-group-item">{{ $countTwoClass }}</li>
    </ul>
    <div><br></div>
    <h1>Список именинников в июле:</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Имя</th>
            <th scope="col">Отчество</th>
            <th scope="col">Дата рождения</th>
            <th scope="col">Класс</th>
        </tr>
        @foreach($bornInJuly as $bornItem)
            <tr>
                <td>{{ $bornItem->id }}</td>
                <td>{{ $bornItem->SLastName }}</td>
                <td>{{ $bornItem->SFirstName }}</td>
                <td>{{ $bornItem->SMidName }}</td>
                <td>{{ \Carbon\Carbon::createFromTimestamp(strtotime($bornItem->SBirthDate))->format('d.m.Y') }}</td>
                <td>{{ $bornItem->SClass }}</td>
            </tr>
        @endforeach
        </thead>
    </table>
@endsection
