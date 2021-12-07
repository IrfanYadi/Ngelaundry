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
            <form action="<?= base_url('/transaksi/updateData') ?>" method="post">
                <div class="form-group">
                    <label for="struk">Struk</label>
                    <input name="struk" class="form-control" id="struk" value="<?= $queryLndryDetail->struk ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?= $queryLndryDetail->tanggal ?>" required>
                </div>
                <div class="form-group">
                    <label for="pelanggan">Pelanggan</label>
                    <input type="text" name="pelanggan" class="form-control" id="pelanggan" value="<?= $queryLndryDetail->pelanggan ?>" required>
                </div>
                <div class="form-group">
                    <label for="berat">Berat(kg)</label>
                    <input type="number" name="berat" min="1" class="form-control" id="berat" value="<?= $queryLndryDetail->berat ?>" required>
                </div>
                <div class="form-group">
                    <label for="harga">Total Harga</label>
                    <input type="text" name="harga" class="form-control" id="harga" value="<?= $queryLndryDetail->harga ?>" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <div align="center">
        <h1>Update Data Laundry</h1>
        <form action="<?= base_url('/transaksi/updateData') ?>" method="post">
        <table>
            <tr>
                <td><label for="struk">Struk</label></td>
                <td><input type="type" name="struk"  value="<?= $queryLndryDetail->struk ?>" readonly></td>
            </tr>
            <tr>
                <td><label for="tanggal">Tanggal</label></td>
                <td><input type="date" name="tanggal" id="tanggal" value="<?= $queryLndryDetail->tanggal ?>" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label for="Pelanggan">Pelanggan</label></td>
                <td><input type="text" name="pelanggan" id="pelanggan" placeholder="Masukkan Pelanggan" value="<?= $queryLndryDetail->pelanggan ?>" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label for="berat">Berat(kg)</label></td>
                <td><input type="number" name="berat" id="berat" min="1" placeholder="Masukkan Laundry" value="<?= $queryLndryDetail->berat ?>" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label for="harga">Harga</label></td>
                <td><input type="text" name="harga" id="harga" value="<?= $queryLndryDetail->harga ?>" readonly required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Update">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html> -->