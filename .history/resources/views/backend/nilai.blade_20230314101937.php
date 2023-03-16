@extends('backend.layouts.app')

@section('SISMADAK KLINIK MUHAMMADIYAH KEDUNGADEM')

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>Penilaian</strong>
            </div>
            <div class="card-body" style="text-align: center;border: 1px solid black;">
                <div class="row" id="jumlahDiv" style="border: 1px solid black;">
                    <div class="col-sm">BAB Penilaian</div>
                    <div class="col-sm">Standart Penilaian</div>
                    <div class="col-sm">Elemen Penilaian</div>
                </div>
                @foreach($bab as $value)
                <div class="row"><div class="colombab" style="font-weight: bold; border: 1px solid black;">{{ $value->BAB }}</div></div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var a = $("#jumlahDiv > div").length
        var colom = 12/a

        $('.colombab').addClass('col-sm-'+colom)
    })

</script>