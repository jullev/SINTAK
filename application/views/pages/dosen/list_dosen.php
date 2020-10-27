<div class="card shadow py-2">
    <div class="card-body">
        <a href="<?php echo base_url()."Dosen/add" ?>" class="btn btn-primary mb-3"> <span class="fa fa-plus-circle"></span> Add New Record</a>
        <?php
        //Memunculkan Pemberitahuan Sukses/Gagalnya Delete
        echo $this->session->flashdata('delete_validation');
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered datatable table-custom">
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
                        <td class="text-center">
                            <?php 
                                $dropdown['link'] = array(
                                    "Edit" => base_url().'Dosen/edit/'.$i->NIP,
                                    "Delete" => base_url().'Dosen/delete/'.$i->NIP
                                );
                                $this->load->view("common/dropdown", $dropdown);
                            ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
