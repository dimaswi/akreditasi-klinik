@extends('backend.layouts.app')

@section('SISMADAK KLINIK MUHAMMADIYAH KEDUNGADEM')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>SISMADAK</strong>
            </div><!--card-header-->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-sm-4">
                                <strong>BAB </strong>
                            </div>
                            <div class="col-sm-8">
                                <select name="bab" id="bab" class="form-control">
                                    <option value="" selected> Pilih BAB Dokumen</option>
                                    @foreach($bab as $value)
                                    <option value="{{ $value->BAB }}">{{ $value->BAB }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-4">
                                <strong>Elemen Penilian </strong>
                            </div>
                            <div class="col-sm-8">
                                <select name="ep" id="ep" class="form-control">

                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-4">

                            </div>
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--card-body-->
        </div><!--card-->
    </div><!--col-->
</div><!--row-->
@endsection