$(document).ready(function() {
    $('.num').click(function () {
        const _this = $(this)
        $('.veprime').val(function () {
            return $(this).val() + _this.val()
        })
    })

    $('#baraz').click(function () {
        $.ajax({
            method: 'POST',
            url: 'index1.php',
            data: {veprimi: $('.veprime').val()},
            success: function (res) {
                $('.rezultati').text(res)
            },
            error: function (e) {
                console.log(e)
            }
        })
    })
});
