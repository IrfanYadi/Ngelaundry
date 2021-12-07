<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> <a href="<?= base_url('transaksi') ?>">
                <i class="fas fa-chevron-left"></i></a> Data Transaksi</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= base_url('/transaksi/addData') ?>" method="post">
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="pelanggan">Pelanggan</label>
                    <input type="text" name="pelanggan" class="form-control" id="pelanggan" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="berat">Berat(kg)</label>
                    <input type="number" name="berat" min="1" class="form-control" id="berat" required autocomplete="off">
                </div>
                <div>
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option>Proses</option>
                        <option>Selesai</option>
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->