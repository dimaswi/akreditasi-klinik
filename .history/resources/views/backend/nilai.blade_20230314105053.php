@extends('backend.layouts.app')

@section('SISMADAK KLINIK MUHAMMADIYAH KEDUNGADEM')

@section('content')
<style>
    .live__scroll {
        overflow-x: auto;
        overflow-y: hidden;
        white-space: nowrap;
    }

    .live__scroll .row {
        display: block;
    }

    .live__scroll .live__scroll--box {
        display: inline-block;
        float: none;
        padding: 15px;
        border: 1px solid red;
    }
</style>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>Penilaian</strong>
            </div>
            <div class="card-body">
                <div class="row" style="text-align: center;">
                    <div class="col-sm">
                        <p>Bab Penilaian</p>
                        <br>
                        @foreach($bab as $value)
                        <div class="row">
                            <div class="col-sm"><strong>{{ $value->BAB }}</strong></div>
                        </div>
                        <br>
                        @endforeach
                    </div>
                    <div class="col-sm">
                        <p>Standart Penilaian</p>
                    </div>
                    <div class="col-sm">
                        <p>Elemen Penilaian</p>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(document).ready(function() {

    })
</script>