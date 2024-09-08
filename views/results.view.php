<section class="container mt-5">
    <h1 class="title mt-4">Hasil</h1>
    <div class="table-responsive">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="bg-primary text-white">Field</th>
                        <th class="bg-primary text-white">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $result): ?>
                        <tr>
                            <th scope="row"><?= htmlspecialchars($result['label']) ?></th>
                            <?php if ($result['label'] === 'File Berkas'): ?>
                                <td>
                                    <?php
                                    $filePath = './uploads/' . $result['value']['name'];
                                    $fileType = mime_content_type($filePath);
                                    ?>
                                    <a href="<?= htmlspecialchars($filePath) ?>" download>Download Berkas</a>
                                </td>
                            <?php else: ?>
                                <td> <?= htmlspecialchars($result['value']) ?></td>
                            <?php endif ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>