
<!--batas bagian posting berita-->





    <!-- Static Table Start -->
    <div class="data-table-area mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Data <span class="table-project-n">Berita</span> Tables</h1>
                                <div class="sparkline13-outline-icon">
                                    <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><i class="fa fa-wrench"></i></span>
                                    <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table"  data-show-columns="true"   data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                          
                                            <th >No</th>
                                            <th >Nama Judul</th>
                                            <th data-field="name" data-editable="true">Isi Berita</th>
                                            <th >Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                     <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($query->result() as $row){
                                echo "<tr>
                                
                                <td>".$no."</td>
                                <td>".$row->judul_berita."</td>
                                <td>".$row->isi_berita."</td>
                                <td><a href ='#' class ='on-default edit-row btn btn-primary' data-toggle='modal' data-target='#custom-width-modal' onClick=\"SetInput('".$row->id."','".$row->judul_berita."','".$row->isi_berita."')\"><i class ='fa fa-pencil'></i> Edit </a>
                                <a href ='#' class ='on-default remove-row btn btn-danger' data-toggle='modal' data-target='#delete-modal'onClick=\"SetInputs('".$row->id."','".$row->judul_berita."','".$row->isi_berita."')\"><i class ='fa fa-trash'></i> Hapus </a>
                             </td>
                               
                            
                                
                            </tr>";
                            $no++;
                                     
                            }  
                            ?> 
                                 </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                     <!-- end row -->

<div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:100%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Kategori</h4>
            </div>
        <form  method="post" action="<?php echo base_url(). 'readBerita2/add'; ?>" name="frmBerita" enctype="multipart/form-data">  
        <input type="hidden" id="id" name="id">
                                            <div >  
                                               
                                                <label  for="inputJudul">Judul</label>  
                                                <div >  
                                                    <input class="form-control"  type="text"  placeholder="Judul Berita" name="judul_berita" id="judul_berita" required >  
                                                </div>  
                                            </div>  
                                            <div >  
                                            
                                                <label  for="inputIsiBerita">Isi Berita</label>  
                                                <div >  
                                                    <textarea type="text" class="form-control" rows="10" cols="150"  name="isi_berita" id="isi_berita" ></textarea>  
                                                </div>  
                                            </div>  
                                            
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" style="width:55%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="custom-width-modalLabel">Konfirmasi Hapus</h4>
                                                    </div>
                                                    <form action="<?php echo base_url(). 'readBerita2/delete'; ?>" method="post" class="form-horizontal" role="form">
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin menghapus?</p>
                                                            <div>
                                                                <input type="hidden" id="id2" name="id2">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Tidak</button>
                                                        <button type="submit" class="btn btn-success waves-effect waves-light">Ya</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->            










                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->


    <script type="text/javascript">
    function SetInput(id, judul_berita,isi_berita){
        document.getElementById('id').value = id;
        document.getElementById('judul_berita').value = judul_berita;
        document.getElementById('isi_berita').value = isi_berita;
        
    }
    function SetInputs(id, judul_berita,isi_berita){
        
        document.getElementById('id2').value = id;
        document.getElementById('judul_berita2').value = judul_berita;
        document.getElementById('isi_berita2').value = isi_berita;
    }

   
</script>