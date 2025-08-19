$(document).ready(function () {
    $('#ydata').on('change', function () {
        $('.loader').fadeIn();
        if ($(this).val() != "") {
            try {
                $.ajax({
                    url: 'assets/js/filterA.php',
                    type: 'POST',
                    data: { ydata: $(this).val() },
                    success: function (data) {
                        if (data != '') {
                            $('#fdata').html(data);
                            setTimeout(() => {
                                $('.loader').fadeOut();
                            }, 300);
                        }
                    },
                });
            } catch (e) {
                console.error('Error on fetching data');
            }
        } else {
            $('.loader').fadeOut();
        }
    });
});