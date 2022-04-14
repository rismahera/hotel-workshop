
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data User</h1>
                        
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data User
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                   
                                        <tr>
                                            <th>No</th>
                                            <th>Usename</th>
                                            <th>Password</th>
                                            <th>Hak Akses</th>
                                            <th>Aktivasi</th>
                                            <th>No tlp</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                       
                                    <tbody>
                                         <?php $no = 1; 
                                            foreach($user as $u) {?>  
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $u->username?></td>
                                            <td><?= $u->password ?></td>
                                            <td><?= $u->hak_akses?></td>
                                            <td><?= $u->aktivasi ?></td>
                                            <td><?= $u->no_hp ?></td>
                                            <td>
                                                <a href="<?= base_url('user/edit/'.$u->id_user) ?>" align='center'>Edit</a>
                                                <a href="<?= base_url('user/hapus/'.$u->id_user) ?>" align='center'>Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
               