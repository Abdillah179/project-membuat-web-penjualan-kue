const flashData = $('.flash-data').data('flashdata');

if (flashData) {

Swal.fire({
    title: 'Registrasi',
    text: flashData,
    type: 'success'
    });

}