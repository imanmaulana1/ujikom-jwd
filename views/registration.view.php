<section class="container">
    <div class="row mt-4 mb-3">
        <div class="col">
            <h1 class="title text-center mt-3">Daftar Beasiswa</h1>
        </div>
    </div>
    <div class="row mb-5 mb-md-0 mb-lg-5">
        <div class="col">
            <div class="box-wrapper p-4">
                <div class="row mb-4">
                    <div class="col">
                        <h2 class="subtitle">Registration Form</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form id="myForm" action="registration_results.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-4 row">
                                <label for="nama" class="col-sm-4 col-form-label">Masukkan Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" required>
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label for="email" class="col-sm-4 col-form-label">Masukkan Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required>
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label for="nohp" class="col-sm-4 col-form-label">Nomor Hp</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="nohp" name="nohp" required>
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label for="semester" class="col-sm-4 col-form-label">Semester saat ini</label>
                                <div class="col-sm-8">
                                    <select id="semester" name="semester" class="form-select mb-3">
                                        <option value="" selected>Pilih</option>
                                        <?php for ($i = 1; $i <= 8; $i++): ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label for="ipk" class="col-sm-4 col-form-label">IPK Terakhir</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="ipk" name="ipk" value="<?= IPK; ?>" aria-label="readonly input" disabled readonly>
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label for="beasiswa" class="col-sm-4 col-form-label">Pilihan Beasiswa</label>
                                <div class="col-sm-8">
                                    <select id="beasiswa" name="beasiswa" class="form-select mb-3" <?= meetsMinimumIPK(IPK) ? 'disabled' : '' ?>>
                                        <option value="" selected>Pilihan Beasiswa</option>
                                        <option value="Non Akademik">Non Akademik</option>
                                        <option value="Akademik">Akademik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label for="file" class="col-sm-4 col-form-label">Upload Berkas Syarat</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" id="file" name="file" <?= meetsMinimumIPK(IPK) ? 'disabled' : '' ?>>
                                </div>
                            </div>
                            <div class="pt-2 row justify-content-between g-4">
                                <div class="col-12 col-md-4">
                                    <button type="submit" class="btn btn-primary w-100">Daftar</button>
                                </div>
                                <div class="col-12 col-md-4">
                                    <button class="btn btn-danger w-100">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>