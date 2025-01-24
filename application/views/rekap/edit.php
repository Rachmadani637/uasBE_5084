<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nilai</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            color: #333;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .form-control {
            border-radius: 20px;
            padding: 10px 15px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
            transform: scale(1.05);
        }

        .btn-secondary {
            background-color: #95a5a6;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            color: #fff;
            transition: all 0.3s;
        }

        .btn-secondary:hover {
            background-color: #7f8c8d;
            transform: scale(1.05);
        }

        .alert {
            border-radius: 20px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h3>Edit Nilai Mahasiswa</h3>
        <form action="<?= site_url('rekapitulasi/edit/' . $id_mahasiswa . '/' . $id_matakuliah) ?>" method="post">
            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" class="form-control" value="<?= $mahasiswa->nama_mahasiswa ?>" readonly>
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" value="<?= $mahasiswa->nim ?>" readonly>
            </div>
            <div class="form-group">
                <label>Nilai</label>
                <input type="number" name="nilai" class="form-control" value="<?= $mahasiswa->nilai ?>" min="0" max="100" required>
            </div>
            <div class="mt-4">
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success">
                        <?= $this->session->flashdata('success') ?>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= $this->session->flashdata('error') ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="text-center mt-4">
                <button type="submit" name="submit" value="1" class="btn btn-primary">Simpan</button>
                <a href="<?= site_url('rekapitulasi/detail/' . $id_matakuliah) ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
