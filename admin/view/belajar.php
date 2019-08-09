
<div id="page-wrapper">
 <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data of Materials
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID kelas</th>
                                            <th>Nama Jurusan</th>
                                            <th>Nama Kelas</th>
                                            <th>Aksi</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                    	<?php

                                    	$guru = "select * from kelas join jurusan on kelas.id_jurusan=jurusan.id_jurusan";
                                    	$qry_guru = mysql_query($guru);
                                    	while($tampil = mysql_fetch_array($qry_guru)){?>

                                        <tr class="odd gradeX">
                                            <td><?php echo $tampil['id_kelas'];?></td>
                                            <td><?php echo $tampil['nama_jurusan'];?></td>
                                            <td><?php echo $tampil['nama_kelas'];?></td>
                                            <td><a href="index.php?view=edit_belajar&id_kelas=<?php echo $tampil['id_kelas'];?>"> <span class="fa fa-edit">edit</span> </a> </td>
                                        </tr>

                                        <?php }?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          </div>

           <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
