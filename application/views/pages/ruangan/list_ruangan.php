        <a href="<?php echo base_url()."Ruangan/add" ?>" class="btn btn-primary mb-3"> <span class="fa fa-plus-circle"></span> Tambah Data</a>
        <?php
        //Memunculkan Pemberitahuan Sukses/Gagalnya Delete
        echo $this->session->flashdata('delete_validation');
        ?>
        <div class="table-responsive">
            <table class="table datatable table-custom">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Ruangan</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($data_ruangan as $i){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $i->Nama_ruangan; ?></td>
                        <td>
                            <?php 
                                $dropdown['link'] = array(
                                    "Edit" => base_url().'Ruangan/edit/'.$i->idRuangan,
                                    "Delete" => array(base_url().'Ruangan/delete/'.$i->idRuangan)
                                );
                                $this->load->view("common/dropdown", $dropdown);
                            ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
