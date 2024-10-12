<?php $this->load->view('Tamplates/header');?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
              <ol class="breadcrumb breadcrumb-bg-red">
                  <li class="active"><i class="material-icons">library_books</i>
                  <a href="<?php echo base_url('Profile/List_profile')?>" target="_blank">Profile</a>
                  </li>
              </ol>
            </div>
            <!-- Example Tab -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Profile
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Call</th>
                                            <th>Mail</th>
                                            <th>Web</th>
                                            <th>Home</th>
                                            <th>Describe Yourself</th>
                                            <th>Twitter</th>
                                            <th>Facebook</th>
                                            <th>Instagram</th>
                                            <th>Linkedin</th>
                                            <th>Hobbies</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Call</th>
                                            <th>Mail</th>
                                            <th>Web</th>
                                            <th>Home</th>
                                            <th>Describe Yourself</th>
                                            <th>Twitter</th>
                                            <th>Facebook</th>
                                            <th>Instagram</th>
                                            <th>Linkedin</th>
                                            <th>Hobbies</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $no=0;
                                    foreach($Profile as $row){
                                      $no++;
                                    ?>
                                    <tr>
                                      <td><?php echo $no ?></td>
                                      <td><?php echo $row->nama_lengkap ?></td>
                                      <td><?php echo $row->call ?></td>
                                      <td><?php echo $row->mail ?></td>
                                      <td><?php echo $row->web ?></td>
                                      <td><?php echo $row->home ?></td>
                                      <td><?php echo $row->describe_yourself ?></td>
                                      <td><?php echo $row->twitter ?></td>
                                      <td><?php echo $row->facebook ?></td>
                                      <td><?php echo $row->instagram ?></td>
                                      <td><?php echo $row->linkedin ?></td>
                                      <td><?php echo $row->hobbies ?></td>
                                      <td style="width: 25%;">
                                        <!-- START CODING EDIT -->
                                        <a href="<?php echo base_url('Profile/editProfile/'.$row->id_profile);?>"><button class="btn bg-blue btn waves-effect">Edit</button></a>
                                        <!-- END CODING EDIT -->
                                      </td>
                                    </tr>
                                    <?php }?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      <!-- #END# Exportable Table -->
                    </div>

<script>
        function hanyaAngka(evt) {//START CODING LOCK NUMBER IN TEXTBOX
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
 
            return false;
          return true;
        }//END CODING LOCK NUMBER IN TEXTBOX

    $('#date_from, #date_until').datepicker({
        dateFormat: 'yy-mm-dd'
    });

</script>

<script>

    
</script>

<?php $this->load->view('Tamplates/footer');?>

