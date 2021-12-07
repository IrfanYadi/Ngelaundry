<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Transaksi</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="<?= base_url('transaksi/addPage') ?>" type="button" class="btn btn-primary mb-3">
                <i class="fas fa-plus-circle"></i>
                Tambah Data
            </a>
            <div class="table-responsive">
                <table class="table table-bordered" id='dataTable' width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Struk</th>
                            <th>Tanggal Transaksi</th>
                            <th>Pelanggan</th>
                            <th>Berat(kg)</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 0;
                        foreach ($queryAllLaundry as $row) {
                            $count++;
                        ?>
                            <tr>
                                <td><?= $count; ?></td>
                                <td>Struk-<?= $row->struk; ?></td>
                                <td><?= $row->tanggal; ?></td>
                                <td><?= $row->pelanggan; ?></td>
                                <td><?= $row->berat; ?></td>
                                <td>Rp<?= $row->harga ?></td>
                                <td>
                                    <?php
                                    if ($row->status == "Proses") { ?>
                                        <span class="badge badge-pill badge-warning"><?= $row->status ?></span>
                                    <?php } elseif ($row->status == "Selesai") { ?>
                                        <span class="badge badge-pill badge-success"><?= $row->status ?></span>
                                    <?php } else { ?>
                                        <?= $row->status ?>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('/transaksi/updatePage') ?>/<?= $row->struk ?>" type="button" class="btn btn-success"><i class="fas fa-edit"></i> Update</a>
                                    <a href="<?= base_url('/transaksi/deleteData') ?>/<?= $row->struk ?>" type="button" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->