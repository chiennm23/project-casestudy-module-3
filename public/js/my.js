$(document).ready(function () {
    $('#search-card').on('keyup', function () {
        let keyword = $(this).val();
        if (keyword) {
            let location = window.location.origin;
            $('#ul-card').html('');
            $.ajax({
                url: location + '/customers/search',
                method: 'GET',
                type: 'json',
                data: {
                    card: keyword
                },
                success: function (result) {
                    let html = '';
                    $.each(result, function (index, item) {
                        html += '<li class="list-group-item list-group-item-action card-customer" data-id="' + item.id + '">';
                        html += item.name + '-' + item.idCard;
                        html += '</li>';
                    });
                    $('#ul-card').append(html);
                },
                error: function (error) {
                }
            });
        } else {
            $('#ul-card').html('');
        }
    });

    $('body').on('click', '.card-customer', function () {

        let idCustomer = $(this).attr('data-id');
        let location = window.location.origin;
        $.ajax({
            url: location + '/customers/' + idCustomer + '/detail',
            type: 'GET',
            success: function (result) {
                console.log(result)
                $('#name-customer').val(result.name);
                $('#search-card').val(result.idCard);
                $('#name-phone').val(result.phone);
                $('#ul-card').html('');
            }
        });
    });
    $('#locked').click(function () {
        alert('1');
    })
});
