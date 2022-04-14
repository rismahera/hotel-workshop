

                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Konsumen</h1>
                        
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Konsumen
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                   
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Depan</th>
                                            <th>Nama Tengah</th>
                                            <th>Nama Belakang</th>
                                            <th>Alamat</th>
                                            <th>Kota</th>
                                            <th>Provinsi</th>
                                            <th>Negara</th>
                                            <th>No Identitas</th>
                                            <th>No tlp</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                       
                                    <tbody>
                                         <?php $no = 1; 
                                            foreach($konsumen as $ksm) {?>  
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $ksm->nama_depan?></td>
                                            <td><?= $ksm->nama_tengah ?></td>
                                            <td><?= $ksm->nama_belakang?></td>
                                            <td><?= $ksm->alamat ?></td>
                                            <td><?= $ksm->kota ?></td>
                                            <td><?= $ksm->provinsi ?></td>
                                            <td><?= $ksm->negara ?></td>
                                            <td><?= $ksm->no_identitas ?></td>
                                            <td><?= $ksm->no_tlp ?></td>
                                            <td><?= $ksm->email ?></td>
                                            <td>
                                            <a href="<?= base_url('konsumen/hapus/'.$ksm->id_konsumen) ?>" align='center'>Hapus</a>
                                            </td>
                                            
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
               
