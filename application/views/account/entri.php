<?php
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
$this->load->view('template/section');
?>


<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="<?php echo $hal->judul_icon?>"></i>  <?php echo $hal->sub_judul?></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
          <!-- form start -->
            <form role="form" action="<?php echo site_url(''.base_akses().'account/addproses')?>" method="post">
              <div class="box-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Nama Akun</label>
                      <input type="text" class="form-control"  placeholder="Nama Akun" name="nama_akun" required="">
                    </div>
                    <div class="form-group">
                      <label>Nama Profile</label>
                      <input type="text" class="form-control"  placeholder="nama profile" name="nama_profile" required="">
                    </div>
                    <div class="form-group">
                      <label>Hak Akses</label>
                      <select class="form-control" name="id_group">
                        <?php foreach ($group as $g): ?>
                          <option value="<?php echo $g->id_group?>"><?php echo $g->nama_group?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control"  placeholder="Username" name="username" required="">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control"  placeholder="Password" name="password" required="">
                    </div>
                  </div>

                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>

          </div>
        </div><!-- /.box-body -->

    </div><!-- /.box -->

</section><!-- /.content -->

<?php
$this->load->view('template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template/foot');
?>
