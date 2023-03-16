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
                        <thead>
                            <tr>
                                <th>BAB Penilaian</th>
                                <th>Standart Penilaian</th>
                                <th>Elemen Penilaian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($bab as $value)
                                <td><strong>{{ $value->bab }}</strong></td>
                                <td><strong>{{ $value->elemen_penilaian }}</strong></td>
                                <td><strong>{{ $value->ep }}</strong></td>
                                @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection