

                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Transaksi</h1>
                        
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Transaksi
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                   
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Konsumen</th>
                                            <th>Nama Kamar</th>
                                            <th>Nomor Kamar</th>
                                            <th>Waktu Sewa</th>
                                            <th>Harga</th>
                                            <th>Total</th>
                                            <th>Jenis Pembayaran</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                       
                                    <tbody>
                                         <?php $no = 1; if (!empty($transaksi)) : ?>
                                            <?php foreach ($transaksi as $t) :
                                                $harga      = $t->harga;
                                                $waktu_sewa = $t->waktu_sewa;
                                                $total      = $t->harga * $t->waktu_sewa;
                                                echo "$total";
                                            ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $t->nama_konsumen?></td>
                                            <td><?= $t->kamar ?></td>
                                            <td><?= $t->nomor_kamar ?></td>
                                            <td><?= $t->waktu_sewa ." Hari"?></td>
                                            <td><?= "Rp.".number_format($t->harga); ?></td>
                                            <td><?= "Rp.".number_format($total); ?></td>
                                            <td><?= $t->jenis_pembayaran?></td>
                                           
                                            <td>
                                                <a href="<?= base_url('transaksi/drop/'.$t->id_transaksi)?>" class="btn btn-dark btn-"><i class="fa fa-trash"></i></a>
                                                <a href="<?= base_url('transaksi/edit/'.$t->id_transaksi)?>"class="btn btn-dark btn-"><i class="fa fa-edit"></i></a>
                                                <a href="<?=base_url('transaksi/print_transaksi/'.$t->id_transaksi)?>" class="btn btn-dark btn-"><i class="fa fa-print"></i></a>
                                            </td>
                                            
                                        </tr>
                                        <?php endforeach ?>
                                        <?php endif ?>
                                           
        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
               
