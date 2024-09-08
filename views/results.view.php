<section class="container mt-5">
    <h1 class="title mt-4">Hasil</h1>
    <div class="table-responsive">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="text-center">
                    <tr>
                        <th class="bg-primary text-white">No.</th>
                        <th class="bg-primary text-white">Nama</th>
                        <th class="bg-primary text-white">Email</th>
                        <th class="bg-primary text-white">No.Hp</th>
                        <th class="bg-primary text-white">Semester</th>
                        <th class="bg-primary text-white">IPK Terakhir</th>
                        <th class="bg-primary text-white">Beasiswa</th>
                        <th class="bg-primary text-white">Berkas</th>
                        <th class="bg-primary text-white">Status Pengajuan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($data)): ?>
                        <tr>
                            <td colspan="9" class="text-center">No data available</td>
                        </tr>
                    <?php else: ?>
                        <?php
                        $index = 1;
                        foreach ($data as $item): ?>
                            <tr>
                                <td scope="row"><?= $index++ ?></td>
                                <td scope="row"><?= htmlspecialchars($item['nama']) ?></td>
                                <td scope="row"><?= htmlspecialchars($item['email']) ?></td>
                                <td scope="row"><?= htmlspecialchars($item['nohp']) ?></td>
                                <td scope="row"><?= htmlspecialchars($item['semester']) ?></td>
                                <td scope="row"><?= htmlspecialchars($item['ipk']) ?></td>
                                <td scope="row"><?= htmlspecialchars($item['beasiswa'] === '1' ? 'Akademik' : 'Non Akademik') ?></td>
                                <td scope="row">
                                    <?php
                                    $filePath = './uploads/' . htmlspecialchars($item['berkas']);
                                    $fileType = mime_content_type($filePath);
                                    ?>
                                    <a href="<?= htmlspecialchars($filePath) ?>" download>Download (<?= $item['berkas'] ?>)</a>
                                </td>
                                <td scope="row"><?= htmlspecialchars($item['status_ajuan'] === '0' ? 'Pending' : 'Accepted') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>