<!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row bg-title">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Order</h4>
                        </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Order</li>
                            </ol>
                        </div>
                    </div>
                   
                    <!-- /.row -->
                    <button class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#modal-tambah" style="float: right; padding-top: -20px;"><i class="fa fa-plus"></i> Tambah Order</button>
                    <br>
                    <br><br>
                    <div class="alert alert-success">
                         Berhasil!
                     </div>
                     <div class="alert alert-danger">
                         Gagal!
                     </div>
                    <!-- .row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="white-box">


                            <ul class="nav nav-pills">
                            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-table"></i> Order</a></li>
                            <li><a data-toggle="tab" href="#menu1"><i class="fa  fa-list-ul"></i> Histori</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="table-responsive" id="tampil">
                                    <table class="table" id="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Meja</th>
                                            <th>Tanggal</th>
                                            <th>User</th>
                                            <th>Keterangan</th>
                                            <th>Status </th>
                                           
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                </table>
                                    
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="table-responsive" id="tampil">
                                    <table class="table table-history table-striped" style="width: 100%;" id="tbl-histori">
                                        <thead>
                                         <tr>
                                            <th>No</th>
                                            <th>No Meja</th>
                                            <th>Tanggal</th>
                                            <th>User</th>
                                            <th>Keterangan</th>
                                            <th>Status </th>
                                           
                                        </tr>
                                        </thead>
                                    </table>
                                        
                                </div>
                            </div>






                        </div>     
                      </div>
                     </div>
                    <style type="text/css">
                        label{
                            color: #333;
                        }
                    </style>
                    <!-- /.row -->