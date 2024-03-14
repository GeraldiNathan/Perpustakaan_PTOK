$(function(){
    $('.buku-uniqueBuku').on('click', function(){
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/Perpustakaan_PTOK/public/dashboard/getubah',
            data: {kodeBuku:id},
            method: 'post',
            dataType:'json',
            success: function(data){
                console.log(data)
                $('#_kode_buku').val(data.kode_buku);
                $('#_judul_buku').val(data.judul_buku);
                $('#_pengarang_buku').val(data.pengarang_buku);
                $('#_tahun_terbit').val(data.tahun_terbit);
                $('#_kategori_buku').val(data.kategori_buku);
                $('#_jumlah_hal').val(data.jumlah_hal);
            }
        });
    });

});