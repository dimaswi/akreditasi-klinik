@extends('backend.layouts.app')

@section('SISMADAK KLINIK MUHAMMADIYAH KEDUNGADEM')

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>Penilaian</strong>
            </div>
            <div class="card-body">
                <div>
                    <table class="table" style="border: 1px solid black; text-align: center;">
                        <tbody>
                            <tr>
                                <td>BAB Penilaian</td>
                                <td>Standart Penilaian</td>
                                <td>Elemen Penilaian</td>
                                <td>Nilai</td>
                                <td>Dokumen</td>
                            </tr>
                            @foreach($bab as $value)
                            <tr>
                                <td ><strong class="bab">{{ $value->bab }}</strong></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

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
        console.log($('.bab').html())
    })

</script>