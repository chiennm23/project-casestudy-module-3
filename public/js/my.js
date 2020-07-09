$(document).ready(function () {
    $('#search-card').on('keyup', function () {
        let keyword = $(this).val();
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        if (keyword) {
            let location = window.location.origin;
            $('#ul-card').html('');
            $.ajax({
                url: location + '/booking/id/create',
                method: 'GET',
                type: 'json',
                data: {
                    card: keyword
                },
                success: function (result) {
                    let html = '';
                    $.each(result, function (index, item) {
                        html += '<li>';
                        html += item.idCard;
                        html += '</li>';
                    })
                    $('#ul-card').append(html)
                },
                error: function (error) {
                }
            })
        } else {
            $('#ul-card').html('');
        }
    })
});
