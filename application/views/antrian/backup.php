<div class="container">
    <div class="row">
        <div class="col-md-4 kotak">
            <h4>TIMBANG PASIEN</h4>
            <h1><?= $sedangDitimbang ?></h1>
            <p>Selanjutnya:</p>
            <h5><?= $belumDitimbang ?></h5>
        </div>
        <!-- <div class="col-md-8"> -->
                <!-- <div class="mt-5 text-center">
                    <h1>ANTRIAN KONSULTASI PASIEN</h1>
                </div> -->
                <div class="col-md-4">
                    <div class="card mt-4" style="width: 20rem;">
                        <div class="card-header">
                            Sedang Dipanggil/Belum Dipanggil
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php foreach ($sedangDipanggil as $sdgDipanggil) {?>
                                <li class="list-group-item" id="aktif">
                                    <?= $sdgDipanggil['mr']; ?>/<?= $sdgDipanggil['nama']; ?>
                                </li>
                            <?php } ?>
                        </ul>
                        <ul class="list-group list-group-flush">
                            <?php foreach ($belumDipanggil as $blmDipanggil) {?>
                                <li class="list-group-item">
                                    <?= $blmDipanggil['mr']; ?>/<?= $blmDipanggil['nama']; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-4 " style="width: 20rem;">
                        <div class="card-header">
                            Sudah Dipanggil
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php foreach ($sudahDipanggil as $sdhDipanggil) {?>
                                <li class="list-group-item">
                                    <?= $sdhDipanggil['mr']; ?>/<?= $sdhDipanggil['nama']; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
        <!-- </div> -->
    </div>
</div>
