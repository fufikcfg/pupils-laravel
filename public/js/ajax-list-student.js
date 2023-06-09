
$(document).ready(function () {

    $('#btn-drop').click(function(e) {

        e.preventDefault();

        let valueElement = $('.form-select option:selected').val();

        $.ajax({
            url: "/home/list/post",
            type: 'POST',
            dataType: 'json',
            data: {
                valueElement: valueElement
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            success: function (data) {

                let arrayStudents = data.arrayID;

                const tableData = arrayStudents.map(value => {
                    return (
                        `<tr>
                                   <td>${value.id}</td>
                                   <td>${value.SMidName}</td>
                                   <td>${value.SLastName}</td>
                                   <td>${value.SFirstName}</td>
                                   <td>${value.SBirthDate}</td>
                                   <td><a style="color: #b91d19" href="/home/delete/${value.id}" id="btn-del" class="link-danger">Удалить</a></td>
                                   <td><a style="color: #4592ff;" href="/home/edit/${value.id}" class="link-danger">Изменить</a></td>
                        </tr>`
                    );
                }).join('');
                const tableBody = document.querySelector("#tableBody");
                tableBody.innerHTML = tableData;

                $(document).ready(function () {
                    $('#btn-del').click(function(e){
                        var result = confirm("Are you sure you want to delete this user?");
                        if(!result) {
                            e.preventDefault();
                        }
                    });
                })
            }
        })
    });
})
