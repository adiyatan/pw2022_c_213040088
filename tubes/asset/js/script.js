$(document).ready(function() {
    // hilangkan tombol cari
    $('#tombol-cari').hide();

    // event ketika keyword ditulis
    $('#keyword').on('keyup', function() {
        // munculkan icon loading
        $('.loader').show();

        $.get('../asset/ajax/sabun.php?keyword=' + $('#keyword').val(), function(data) {

            $('#tabel-sabun').html(data);
            $('.loader').hide();

        });

    });

});
