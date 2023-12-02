$(function(){
    $('.editData').click(function(e){
        e.preventDefault();
        const id = $(this).data('id');
        $('.formModalLabel').html('Form Edit Data');
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getUbah',
            data: {id : id},
            method: 'POST',
            dataType: 'json',
            header: 'Content-Type: application/json',
            success: function(response){
                console.log(response);
                $('.form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubahData');
                $('#namaData').val(response.nama);
                $('#nrpData').val(response.nrp);
                $('#emailData').val(response.email);
                $('#jurusanData').val(response.jurusan);
                $('#id').val(response.id);

            },
            error: function(error){
                console.log(error);
            }
        });
    });
})