<?php  ?>

<?php  ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Hama Dan Penyakit
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Hama Dan Penyakit</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add"> 
              Add Hama Dan Penyakit
            </button>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

            <?= $this->session->flashdata('message')?> 
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Hama Dan Penyakit</th>
                  <th>Solusi</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach ($hamapenyakit as $data) {

                  ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?= $data['kode_hp']; ?></td>
                    <td><?= $data['hamapenyakit']; ?></td>
                    <td><?= $data['solusi']; ?></td>
                    <td>
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#edit-<?= $data['kode_hp'];?>" title="Edit Hama Dan Penyakit"><span class="fa fa-edit"></span></a>
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#delete-<?= $data['kode_hp'];?>" title="Delete Hama Dan Penyakit"><span class="fa fa-trash"></span></a>  
                    </td>
                  </tr>

                  <!-- Modal -->
                  <div class="modal fade" id="edit-<?= $data['kode_hp']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Edit Hama Dan Penyakit</h4>
                        </div>

                        <form action="<?php echo base_url()?>admin/edit_hamapenyakit" method="POST">
                        <input type="hidden" name="kode_hp" value="<?= $data['kode_hp'];?>">
                          <div class="modal-body">

                            <div class="form-group">
                              <label for="email">hamapenyakit:</label>
                              <input type="text" name="hamapenyakit" class="form-control" id="email" value="<?= $data['hamapenyakit']; ?>">
                            </div>

                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>


                  <!-- Modal -->
                  <div class="modal fade" id="delete-<?= $data['kode_hp']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Delete Hama Dan Penyakit</h4>
                        </div>

                        <form action="<?php echo base_url()?>admin/delete_hamapenyakit" method="POST">
                          <div class="modal-body">
                            <h5>Are You Sure You Want To Delete This Data?</h5>
                            <input type="hidden" name="kode_hp" value="<?= $data['kode_hp'];?>">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>


                  <?php $no++;  } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Modal -->
  <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Hama Dan Penyakit</h4>
        </div>

        <form action="<?php echo base_url()?>admin/add_hamapenyakit" method="POST">
          <div class="modal-body">

            <div class="form-group">
              <label for="email">hamapenyakit:</label>
              <input type="text" name="hamapenyakit" class="form-control" id="email">
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  

