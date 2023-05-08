@extends('home')

@section('forms')
    <script>
        $(document).ready(function () {
            $('#btn-drop').click(function(e) {


                e.preventDefault();

                let valueElement = $('.form-select option:selected').val();

                console.log(valueElement)



                $.ajax({
                    url: "{{ route('studentsList') }}",
                    type: 'POST',
                    data: {
                        valueElement: valueElement
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    success: function (data) {

                        $('.fsdfg').html(data.arrayID)

                        // let arrayStudents = data.arrayID;
                        //
                        // $('.td-stud').remove();
                        //
                        // let table = document.querySelector('.table');
                        //
                        // for (let i = 0; i < arrayStudents.length; i++) {
                        //
                        //     let tr = document.createElement('tr');
                        //
                        //     for (let j = 0; j < arrayStudents[i].length; j++) {
                        //
                        //         let td = document.createElement('td');
                        //
                        //         td.classList.add("td-stud");
                        //
                        //         td.innerHTML = arrayStudents[i][j];
                        //         tr.appendChild(td);
                        //
                        //     }
                        //
                        //     table.appendChild(tr);
                        // }
                    }
                })
            });
        })
    </script>
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
    <tr>
        <th>id</th>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Дата рождения</th>
        <th>Класс</th>
    </tr>
</table>
    <div class="fsdfg"></div>
@endsection
{{--<script src="../assets/js/jquery-3.6.4.min.js"></script>--}}
{{--<script src="../assets/js/ajax-list-students.js"></script>--}}
{{--<script src="../assets/js/bootstrap.bundle.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
