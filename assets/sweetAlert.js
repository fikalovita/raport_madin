
const flashData = $('.flash-data').val()
if (flashData) {

    Swal.fire({
        title: 'Berhasil!',
        text: 'Data berhasil ' + flashData,
        icon: 'success',
    });
    
};

//tombol hapus


$('.hapus').on('click', function (event) {
    event.preventDefault()
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Yakin Hapus?',
        text: "Anda akan menghapus data ini!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
      if (result.isConfirmed) {
       if (result.isConfirmed) {
        document.location.href = href;
    };
};

});
});
