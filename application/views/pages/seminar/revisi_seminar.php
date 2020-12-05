<div class="card shadow py-2">
    <div class="card-body">
        <?php
        echo $this->session->flashdata('update_validation');
        echo $this->session->flashdata('delete_validation');
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered datatable table-custom">
                <thead>
                    <tr>
                        <?php
                        if ($_SESSION['kode_level'] == 12) {
                        ?>
                            <td>#</td>
                            <td>Judul Tugas Akhir</td>
                            <td>Status Revisi</td>
                            <td>Aksi</td>
                        <?php
                        } elseif ($_SESSION['id_login'] = $i->dosen_panelis) {
                        ?>
                            <td>#</td>
                            <td>NIM</td>
                            <td>Nama Mahasiswa</td>
                            <td>Judul Tugas Akhir</td>
                            <td>Status Revisi</td>
                            <td>Aksi</td>
                        <?php
                        } elseif ($_SESSION['id_login'] = $i->dosen_pembimbing) {
                        ?>
                            <td>#</td>
                            <td>NIM</td>
                            <td>Nama Mahasiswa</td>
                            <td>Judul Tugas Akhir</td>
                            <td>Status Revisi</td>
                        <?php
                        }
                        ?>

                    </tr>
                    1. Jika mahasiswa, akan melihat status revisi dan menampilkan form upload utk revisi
                    2. Jika panelis, bisa melihat dan mengACC revisi
                    3. Jika dosen pembimbing, bisa melihat revisi
                <tbody>
                    <?php
                    $nip = $_SESSION['id_login'] = $nip;
                    if ($_SESSION['kode_level'] == 12) {
                    ?>
                        <?php
                        $no = 1;
                        foreach ($revisi_seminar as $i) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $i->Judul_TA ?></td>
                                <td><?php echo $i->status_revisi ?></td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Option
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <a href="" class="edit-seminar dropdown-item" data-id="<?php echo $i->id_seminar ?>">Edit</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    <?php
                    } elseif ($_SESSION['id_login'] = $nip->dosen_panelis) {
                    ?>
                        <?php
                        $no = 1;
                        foreach ($revisi_seminar as $i) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $i->NIM ?></td>
                                <td><?php echo $i->NAMA ?></td>
                                <td><?php echo $i->Judul_TA ?></td>
                                <td><?php echo $i->status_revisi ?></td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Option
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <a href="" class="edit-seminar dropdown-item" data-id="<?php echo $i->id_seminar ?>">Edit</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    <?php
                    } elseif ($_SESSION['id_login'] = $nip->dosen_pembimbing) {
                    ?>
                        <?php
                        $no = 1;
                        foreach ($revisi_seminar as $i) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $i->NIM ?></td>
                                <td><?php echo $i->NAMA ?></td>
                                <td><?php echo $i->Judul_TA ?></td>
                                <td><?php echo $i->status_revisi ?></td>
                            </tr>
                        <?php
                        } ?>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>