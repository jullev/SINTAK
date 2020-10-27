<div class="card shadow py-2">
    <div class="card-body">
        <a href="<?php echo base_url()."Topik/add" ?>" class="btn btn-primary mb-3"> <span class="fa fa-plus-circle"></span> Add New Record</a>
        <?php
        //Memunculkan Pemberitahuan Sukses/Gagalnya Delete
        echo $this->session->flashdata('delete_validation');
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered datatable table-custom">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Topik</td>
                        <td>Deskripsi</td>
                        <td>Icon</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($data_topik as $i){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $i->Topik; ?></td>
                        <td><?php echo $i->Deskripsi; ?></td>
                        <td><?php echo $i->icon; ?></td>
                        <td class="text-center">
                            <?php 
                                $dropdown['link'] = array(
                                    "Edit" => base_url().'Topik/edit/'.$i->idTopik,
                                    "Delete" => base_url().'Topik/delete/'.$i->idTopik
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
