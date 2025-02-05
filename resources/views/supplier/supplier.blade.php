@extends('layout.master')
@section('title', 'Data Supplier')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Data supplier</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <!-- <li><a href="#"><span>Master Data</span></a></li> -->
                    <li class="active"><span>Data supplier</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <p>
                            <a href="supplier/addsupplier" class="btn btn-success"> Tambah Data</a>

                        </p>
                        <div class="clearfix"></div>
                        <div id="myTable1_wrapper" class="dataTables_wrapper">
                            <div class="dataTables_length" id="myTable1_length"><label>Show <select name="myTable1_length" aria-controls="myTable1" class="">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                            <div id="myTable1_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="myTable1"></label></div>
                            <table id="myTable1" class="table table-hover display dataTable dtr-inline" role="grid" aria-describedby="myTable1_info" style="width: 1253px;">
                        </div>
                    </div>

                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap">
                                <div class="container-fluid">


                                    <table id="myTable1" class="table table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Kode supplier</th>
                                                <th>Nama Supplier</th>
                                                <th>Email supplier</th>
                                                <th>Alamat supplier</th>
                                                <th>PIC supplier</th>
                                                <th>No HP supplier</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach($data_supplier as $data_supplier)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data_supplier->kode_supplier }}</td>
                                                <td>{{ $data_supplier->nama_supplier }}</td>
                                                <td>{{ $data_supplier->email_supplier }}</td>
                                                <td>{{ $data_supplier->alamat_supplier }}</td>
                                                <td>{{ $data_supplier->pic_supplier }}</td>
                                                <td>{{ $data_supplier->telp_supplier }}</td>
                                                <td>
                                                    <a href="/supplier/editSup/{{ $data_supplier->id_supplier }}"><button class="btn btn-success btn-icon-anim btn-square"><i class="fa fa-edit"></i></button></a>
                                                    <button class="btn btn-danger btn-icon-anim btn-square" data-toggle="modal" data-target="#hapussup{{ $data_supplier->id_supplier }}" action="( {{url('deletesupplier')}}/{{ $data_supplier->id_supplier }})"><i class="fa fa-trash"></i></button>

                                                </td>
                                            </tr>
                                            @include('supplier.hapus')
                                            @endforeach
                                        </tbody>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->
    </div>
    <!-- /#wrapper -->
    @endsection