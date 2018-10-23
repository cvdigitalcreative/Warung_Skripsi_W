 <div class="content-wrapper">
      <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0"> Data Mahasiswa</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- main body --> 
      <div class="row">   
        <div class="col-xl-12 mb-30">     
          <div class="card card-statistics h-100"> 
            <div class="card-body">
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered p-0">
                <thead>
                    <tr>
                        <th style="width: 18px;">No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Kontak</th>
                        <th>Tanggal Daftar</th>
                        <th style="width: 80px;">Aksi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                      $no=0;
                      foreach ($data->result_array() as $i) :
                         $no++;
                                   $mahasiswa_id=$i['mahasiswa_id'];
                                   $mahasiswa_nama=$i['mahasiswa_nama'];
                                   $mahasiswa_email=$i['mahasiswa_email'];
                                   $mahasiswa_kontak=$i['mahasiswa_kontak'];
                                   $mahasiswa_tanggal=$i['tanggal'];
                                ?>
                            <tr>
                              <td><?php echo $no;?></td>
                              <td><?php echo $mahasiswa_nama;?></td>
                              <td><?php echo $mahasiswa_email;?></td>
                              <td><?php echo $mahasiswa_kontak;?></td>
                              <td><?php echo $mahasiswa_tanggal;?></td>
                              
                              <td style="text-align:left;">
                                    <a href="" style="margin-right: 20px" data-toggle="modal" data-target="#ModalEdit<?php echo $mahasiswa_id;?>"><span class="ti-pencil"></span></a>
                                    <a href="" data-toggle="modal" data-target="#ModalHapus<?php echo $mahasiswa_id;?>"><span class="ti-trash"></span></a>
                              </td>
                            </tr>
                        <?php endforeach;?>
                </tbody>                
            </table>
            </div>
            </div>
          </div>   
        </div>
        

        <?php foreach ($data->result_array() as $i) :
              $mahasiswa_id=$i['mahasiswa_id'];
              $mahasiswa_nama=$i['mahasiswa_nama'];
              $mahasiswa_email=$i['mahasiswa_email'];
              $mahasiswa_kontak=$i['mahasiswa_kontak'];
              $mahasiswa_tanggal=$i['tanggal'];
        ?>
        <div class="modal" tabindex="-1" role="dialog" id="ModalEdit<?php echo $mahasiswa_id;?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit data mahasiswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body p-20">
                        <form action="<?php echo base_url().'Admin/Mahasiswa/update_mahasiswa'?>" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="kode" value="<?php echo $mahasiswa_id;?>"/> 
                                    <label class="control-label">Nama Mahasiswa</label>
                                    <input class="form-control form-white" placeholder="Enter Nama" type="text" name="xnama" value="<?php echo $mahasiswa_nama;?>" required/>
                                    <label class="control-label">Email Mahasiswa</label>
                                    <input class="form-control form-white" placeholder="Enter Email" type="email" name="xemail" value="<?php echo $mahasiswa_email;?>" required/>
                                    <label class="control-label">Kontak Mahasiswa</label>
                                    <input class="form-control form-white" placeholder="Enter Kontak" type="text" name="xkontak" value="<?php echo $mahasiswa_kontak;?>" required/>
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success ripple save-category">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach;?> 

        <?php foreach ($data->result_array() as $i) :
              $mahasiswa_id=$i['mahasiswa_id'];
              $mahasiswa_nama=$i['mahasiswa_nama'];
              $mahasiswa_email=$i['mahasiswa_email'];
              $mahasiswa_kontak=$i['mahasiswa_kontak'];
              $mahasiswa_tanggal=$i['tanggal'];
        ?>
        <div class="modal" tabindex="-1" role="dialog" id="ModalHapus<?php echo $mahasiswa_id;?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Mahasiswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body p-20">
                        <form action="<?php echo base_url().'Admin/Mahasiswa/hapus_kategori'?>" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="kode" value="<?php echo $mahasiswa_id;?>"/> 
                                    <p>Apakah kamu yakin ingin menghapus data mahasiswa <b><i><?php echo $mahasiswa_nama;?></i></b></p>
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success ripple save-category">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach;?> 
    </div> 
<!--=================================
 wrapper -->
      
<!--=================================
 footer -->

    <footer class="bg-white p-4">
      <div class="row">
        <div class="col-md-6">
          <div class="text-center text-md-left">
              <p class="mb-0"> &copy; Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span>. <a href="https://www.digitalcreative.web.id" target="blank"> Digital Creative </a> All Rights Reserved. </p>
          </div>
        </div>
        <div class="col-md-6">
          <ul class="text-center text-md-right">
            <li class="list-inline-item"><a href="#">Terms & Conditions </a> </li>
            <li class="list-inline-item"><a href="#">API Use Policy </a> </li>
            <li class="list-inline-item"><a href="#">Privacy Policy </a> </li>
          </ul>
        </div>
      </div>
    </footer>
    </div><!-- main content wrapper end-->
  </div>
</div>
</div>

<!--=================================
 footer -->


 
<!--=================================
 jquery -->

<!-- jquery -->
<script src="<?php echo base_url()?>assets/admin/js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="<?php echo base_url()?>assets/admin/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = '<?php echo base_url()?>assets/admin/js/';</script>

<!-- chart -->
<script src="<?php echo base_url()?>assets/admin/js/chart-init.js"></script>

<!-- calendar -->
<script src="<?php echo base_url()?>assets/admin/js/calendar.init.js"></script>

<!-- charts sparkline -->
<script src="<?php echo base_url()?>assets/admin/js/sparkline.init.js"></script>

<!-- charts morris -->
<script src="<?php echo base_url()?>assets/admin/js/morris.init.js"></script>

<!-- datepicker -->
<script src="<?php echo base_url()?>assets/admin/js/datepicker.js"></script>

<!-- sweetalert2 -->
<script src="<?php echo base_url()?>assets/admin/js/sweetalert2.js"></script>

<!-- toastr -->
<!-- <script src="<?php echo base_url()?>assets/admin/js/toastr.js"></script> -->

<!-- validation -->
<script src="<?php echo base_url()?>assets/admin/js/validation.js"></script>

<!-- lobilist -->
<script src="<?php echo base_url()?>assets/admin/js/lobilist.js"></script>
 
<!-- custom -->
<script src="<?php echo base_url()?>assets/admin/js/custom.js"></script>
<script src="<?php echo base_url().'assets/admin/js/jquery.toast.min.js'?>"></script>
 
</body>
</html>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>
    
    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Berita Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Berita berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Berita Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>


