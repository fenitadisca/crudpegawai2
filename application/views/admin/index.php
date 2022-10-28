<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $title; ?>
    </h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <body>
        <!-- Container-->
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Data Pegawai
                </div>
                <div class="card-body">
                    <form action="" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="katakunci" placeholder="Masukan Kata Kunci"
                                aria-label="Masukan Kata Kunci" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
                        </div>
                    </form>
                    <!-- Modal -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Tambah Data Pegawai
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Pegawai</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST">
                                        <div class="alert alert-danger error" role="alert"
                                            style="display: none; font-size:12pt;">
                                        </div>
                                        <div class="alert alert-primary sukses" role="alert"
                                            style="display: none; font-size:12pt;">
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputNama">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputNip" class="col-sm-2 col-form-label">NIP</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputNip">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputTgllahir" class="col-sm-2 col-form-label">Tanggal
                                                Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="inputTgllahir">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputEmail">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputKet" class="col-sm-2 col-form-label">Ket</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputKet">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                    <button type="button" class="btn btn-primary" id="tombolSimpan">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Tanggal Lahir</th>
                                <th>Email</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nama</td>
                                <td>NIP</td>
                                <td>Tanggal Lahir</td>
                                <td>Email</td>
                                <td>Keterampilan</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        <script>
        $('#tombolSimpan').on('click', function() {

            var $nama = $('#inputNama').val();
            var $nip = $('#inputNip').val();
            var $tgllahir = $('#inputTgllahir').val();
            var $email = $('#inputEmail').val();
            var $ket = $('#inputKet').val();




            $.ajax({
                url: "<?= base_url("admin/simpan");?>",
                type: "POST",
                success: function(hasil) {
                    console.log(hasil)
                    var $obj = JSON.parse(hasil);
                    if ($obj.sukses == false) {
                        $('.sukses').hide();
                        $('.error').show();
                        $('.error').html($obj.error);
                    } else {
                        $('.error').hide();
                        $('.sukses').show();
                        $('.sukses').html($obj.sukses);
                    }
                }

            });
        });
        </script>
    </body>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->