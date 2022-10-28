<!-- Begin Page Content -->
< class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $title; ?>
    </h1>

    <div class="col-md-8 pl-5 pb-4 pt-4">
        <form action="<?= base_url('form/insert')?>" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">NIK</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nik" aria-describedby="emailHelp"
                    placeholder="Masukan Nomor Induk Koperasi">
            </div>
            <button type="submit" class="btn btn-primary">Masukan</button>
        </form>
    </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->