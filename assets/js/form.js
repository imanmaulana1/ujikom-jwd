$(document).ready(function () {
  const urlParam = new URLSearchParams(window.location.search);
  const message = urlParam.get('message');

  if (message === 'success') {
    alert('Data berhasil dimasukkan');
  }

  // Handle submit
  $('#myForm').on('submit', function (e) {
    e.preventDefault();

    if (!validateOptions()) return;

    this.submit();
  });

  // Validasi input option value
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

  // Validasi nilai IPK
  function meetsMinimumIPK() {
    const valueIPK = parseFloat($('#ipk').val());

    if (valueIPK < 3) {
      alert('Nilai IPK Anda tidak memenuhi syarat.');
      return false;
    }

    $('#beasiswa').focus();
    return true;
  }

  meetsMinimumIPK();
});
