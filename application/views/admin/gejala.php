<?php  ?>

<?php  ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Gejala
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Gejala</li>
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
              Add gejala
            </button>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

            <?= $this->session->flashdata('message')?> 
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Gejala</th>
                  <th>Gejala</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach ($gejala as $data) {

                  ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?= $data['kode_gejala']; ?></td>
                    <td><?= $data['gejala']; ?></td>
                    <td>
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#edit-<?= $data['kode_gejala'];?>" title="Edit gejala"><span class="fa fa-edit"></span></a>
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#delete-<?= $data['kode_gejala'];?>" title="Delete gejala"><span class="fa fa-trash"></span></a>  
                    </td>
                  </tr>

                  <!-- Modal -->
                  <div class="modal fade" id="edit-<?= $data['kode_gejala']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Edit Gejala</h4>
                        </div>

                        <form action="<?php echo base_url()?>admin/edit_gejala" method="POST">
                        <input type="hidden" name="kode_gejala" value="<?= $data['kode_gejala'];?>">
                          <div class="modal-body">

                            <div class="form-group">
                              <label for="email">Gejala:</label>
                              <input type="text" name="gejala" class="form-control" id="email" value="<?= $data['gejala']; ?>">
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
                  <div class="modal fade" id="delete-<?= $data['kode_gejala']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Delete Gejala</h4>
                        </div>

                        <form action="<?php echo base_url()?>admin/delete_gejala" method="POST">
                          <div class="modal-body">
                            <h5>Are You Sure You Want To Delete This Data?</h5>
                            <input type="hidden" name="kode_gejala" value="<?= $data['kode_gejala'];?>">
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
          <h4 class="modal-title">Add Gejala</h4>
        </div>

        <form action="<?php echo base_url()?>admin/add_gejala" method="POST">
          <div class="modal-body">

            <div class="form-group">
              <label for="email">Gejala:</label>
              <input type="text" name="gejala" class="form-control" id="email">
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

  

