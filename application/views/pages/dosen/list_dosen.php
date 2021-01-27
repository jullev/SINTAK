        <a href="<?php echo base_url()."Dosen/add" ?>" class="btn btn-primary mb-3"> <span class="fa fa-plus-circle"></span> Tambah Data</a>
        <?php
        //Memunculkan Pemberitahuan Sukses/Gagalnya Delete
        echo $this->session->flashdata('delete_validation');
        ?>
        <div class="table-responsive">
            <table class="table datatable table-custom">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>NIP</td>
                        <td>NIDN</td>
                        <td>Nama</td>
                        <td>Alamat</td>
                        <td>No. HP</td>
                        <td>Role</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($data_dosen as $i){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $i->NIP; ?></td>
                        <td><?php echo $i->NIDN; ?></td>
                        <td><?php echo $i->NAMA; ?></td>
                        <td><?php echo $i->Alamat; ?></td>
                        <td><?php echo $i->No_hp; ?></td>
                        <td><?php echo $i->Role; ?></td>
                        <td>
                            <?php 
                                $dropdown['link'] = array(
                                    "Edit" => base_url().'Dosen/edit/'.$i->NIP,
                                    "Delete" => array(base_url().'Dosen/delete/'.$i->NIP,"confirm")
                                );
                                $this->load->view("common/dropdown", $dropdown);
                            ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
