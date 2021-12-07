<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Admin</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <!-- <a href="<?= base_url('admin/addPage') ?>" type="button" class="btn btn-primary mb-3">
                <i class="fas fa-plus-circle"></i>
                Daftar Akun
            </a> -->
            <div class="table-responsive">
                <table class="table table-bordered text-center" id='dataTable' width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 0;
                        foreach ($queryAllUser as $row) {
                            $count++;
                        ?>
                            <tr>
                                <td><?= $count; ?></td>
                                <td><?= $row->name; ?></td>
                                <td><?= $row->email; ?></td>
                                <td><?= $row->password; ?></td>
                                <td>
                                    <a href="<?= base_url('/admin/deleteData') ?>/<?= $row->id ?>" type="button" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
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