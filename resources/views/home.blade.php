@extends('layouts.app')

@section('content')

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <a class="nav-link active" aria-current="page" href="{{route('create')}}"><h1>Add a new student</h1></a>
            </div>
            <div class="col">
                <a class="nav-link" href="{{route('list')}}"><h1>List of students</h1></a>
            </div>
            <div class="col">
                <a class="nav-link" href="{{ route('editByList') }}"><h1>Edit student list</h1></a>
            </div>
            <div class="col">
                <a class="nav-link" href="{{ route('report') }}"><h1>Report</h1></a>
            </div>
        </div>
    </div>
    <div>
        @yield('forms')
    </div>
@endsection
