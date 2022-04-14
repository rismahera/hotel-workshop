
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Kamar</h1>
                        
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Kamar
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <center><a href="<?= base_url('kamar/tambah_data') ?>"><button class="btn btn-dark">Tambah</button</a></center>
                                        <tr>
                                            <th>No</th>
                                            <th>No Kamar</th>
                                            <th>Id Jenis</th>
                                            <th>Nama Kamar</th>
                                            <th>Keterangan</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                       
                                    <tbody>
                                         <?php $no = 1; foreach($kamar as $k) {?>  
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $k->nomor_kamar?></td>
                                            <td><?= $k->id_jenis ?></td>
                                            <td><?= $k->kamar ?></td>
                                            <td><?= $k->keterangan ?></td>
                                            <td><?= $k->harga ?></td>
                                            <td>
                                                <a href="<?= base_url('kamar/edit/'.$k->id_kamar) ?>" align='center'>Edit</a>
                                                <a href="<?= base_url('kamar/hapus/'.$k->id_kamar) ?>" align='center'>Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
             