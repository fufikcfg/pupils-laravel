$(document).ready(function () {
    $('#btn-drop').click(function(e) {


        e.preventDefault();

        let valueElement = $('.form-select option:selected').val();

        console.log(valueElement)



        $.ajax({
            url: '',
            type: 'GET',
            dataType: 'json',
            data: {
                valueElement: valueElement
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            success: function (data) {

                let arrayStudents = data.arrayID;

                $('.td-stud').remove();

                let ruDate = new Intl.DateTimeFormat('ru');

                let table = document.querySelector('.table');


                for (let i = 0; i < arrayStudents.length; i++) {

                    let tr = document.createElement('tr');


                    for (let j = 0; j < arrayStudents[i].length; j++) {

                        let td = document.createElement('td');

                        td.classList.add("td-stud");

                        td.innerHTML = arrayStudents[i][j];
                        tr.appendChild(td);

                    }

                    table.appendChild(tr);
                }
            }
        })
    });
})

