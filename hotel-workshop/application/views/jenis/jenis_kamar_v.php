<div class="container">
            <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
            <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4" align="center">Data Jenis Kamar</h1>
                        
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Jenis Kamar
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <center><a href="<?= base_url('jenis/tambah_data') ?>"><button class="btn btn-dark">Tambah</button</a></center>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kamar</th>
                                            <th>Keterangan</th>
                                            <th>Harga</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                       
                                    <tbody>
                                         <?php $no = 1; 
                                            foreach($jeniskamar as $jk) {?>  
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $jk->kamar?></td>
                                            <td><?= $jk->keterangan ?></td>     
                                            <td><?= $jk->harga ?></td>
                                            <td><img src="<?= base_url('assets/img/').$jk->foto;?>" width="200px"></td>
                                            <td>
                                                <a href="<?= base_url('jenis/edit/'.$jk->id_jenis) ?>" align='center'>Edit</a>
                                                <a href="<?= base_url('jenis/hapus/'.$jk->id_jenis) ?>" align='center'>Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
</div>
             