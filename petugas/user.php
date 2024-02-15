<div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Pengguna</h4>
                    <p class="card-description">
                    <!-- Add class <code>.table</code> -->
                    <?php
                        if($level == "admin") {
                    ?>
                        
                        <a href="?page=tambah-user" title="Tambah User" 
                            class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                                <span class="text">Tambah User</span>
                        </a>
                        <?php } ?>
                    </p>

                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NamaUser</th>
                                    <th>Password</th>
                                    <th>level</th>
                                <?php
                                    if($level == "admin") {
                                 ?>
                                    <th>Pilihan</th>
                                    <?php } ?>
                             </p>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no = 1;
                                $sql = $con->query("SELECT * FROM user");
                                while ($data= $sql->fetch_assoc()) {
                                    
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['NamaUser']?></td>
                                <td><?php echo $data['Password']?></td>
                                <td><?php echo $data['level']?></td>
                                <?php
                                    if($level == "admin") {
                                 ?>
                                <td align="center" width="12%"><a href="?page=edit-user&UserID=<?= $data['UserID']; ?>" class="badge badge-primary p-2" title="Edit"><i class="">Edit</i></a> | <a href="?page=hapus-user&UserID=<?= $data['UserID']; ?>" class="badge badge=danger p-2 delete-data" title='delete'><i class="">Delete</i></a><td>
                                <?php } ?>
                                    </p>
                            
                            </tr>
                            <?php } ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>