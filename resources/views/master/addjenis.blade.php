@extends('layout.master')
@section('title', 'Data Jenis')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">tambah jenis barang</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">master data</a></li>
                    <li><a href="#"><span>jenis barang</span></a></li>
                    <li class="active"><span>tambah jenis barang</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view ">
                    <!-- <div class="panel-heading">
                                <div class="clearfix"></div>
                            </div> -->
                    <div class="panel-wrapper collapse in ">
                        <div class="panel-body">
                            <div class="form-wrap mt-3">
                                <form action="{{ url('addjenis2') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left" for="example-email">Jenis barang <span class="help"> </span></label>
                                        <input type="text" id="jenis_barang" name="jenis_barang" class="form-control" placeholder="" required="required" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);">
                                        @if ($errors->has('jenis_barang'))
                                        <div class="alert alert-danger">{{$errors->first('jenis_barang')}}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left" for="example-email">Keterangan <span class="help"> </span></label>
                                        <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="">
                                        @if ($errors->has('keterangan'))
                                        <div class="alert alert-danger">{{$errors->first('keterangan')}}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary">Simpan</button>
                                        <button class="btn btn-danger  " name="reset" type="reset">Batal</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->
        <!-- /Main Content -->
    </div>
    <!-- /#wrapper -->
    @endsection