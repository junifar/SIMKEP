@extends('layout')

@section('title')
    New Kecamatan
@endsection

@section('content-header')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">New Kecamatan</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kelurahan</label>
                                    <input type="text" class="form-control" id="textName" placeholder="Kelurahan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Wakil Lurah</label>
                                    <input type="text" class="form-control" id="textWakilLurah" placeholder="Wakil Lurah">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lurah</label>
                                    <input type="text" class="form-control" id="textLurah" placeholder="Lurah">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" rows="5" placeholder="Alamat"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
            </div>
        </div>
    </div>
@endsection