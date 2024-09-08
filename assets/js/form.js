$(document).ready(function () {
  $('#myForm').on('submit', function (e) {
    e.preventDefault();

    if (!validateOptions()) return;

    this.submit();
  });

  function validateOptions() {
    const semester = $('#semester').val();
    const beasiswa = $('#beasiswa').val();
    const fileBerkas = $('#file').val();

    let message = '';

    if (semester === '' && beasiswa === '') {
      message = 'Mohon pilih opsi beasiswa dan semester';
    } else if (beasiswa === '') {
      message = 'Mohon pilih opsi beasiswa';
    } else if (semester === '') {
      message = 'Mohon pilih opsi semester';
    } else if (fileBerkas === '') {
      message = 'Mohon masukkan syarat berkas';
    }

    if (message) {
      alert(message);
      return false;
    }

    return true;
  }

  function meetsMinimumIPK() {
    const valueIPK = parseFloat($('#ipk').val());

    if (valueIPK < 3) {
      alert('Nilai IPK Anda tidak memenuhi syarat.');
      return false;
    }

    $('#semester').focus();
    return true;
  }

  meetsMinimumIPK();
});
