@extends('backend.layouts.app')

@section('SISMADAK KLINIK MUHAMMADIYAH KEDUNGADEM')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
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
                                <button type="button" class="btn btn-success" id="cariDokumen" style="margin-top:10px">Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive" id="tabel_dokumen" style="display: none;">
                    <table class="table display nowrap" cellspacing="0" width="100%" id="table-data">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>BAB Dokumen</th>
                                <th>Elemen Penilaian Dokumen</th>
                                <th>Nama Dokumen</th>
                                <th>Nilai</th>
                                <th>Tanggal Upload</th>
                                <th>Tanggal Dokumen Diperbaharui</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div><!--card-body-->
        </div><!--card-->
    </div><!--col-->
</div><!--row-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $('#cariDokumen').on('click', function(e) {
        e.preventDefault();

        var bab = $('#bab').val()
        var ep = $('#ep').val()


        $.ajax({
            type: "GET",
            url: "{{ route('admin.dokumenAkreditasi') }}",
            dataType: "JSON",
            data: {
                'bab': bab,
                'ep': ep,
            },
            success: function(data) {
                $('#table-data-kontrol').DataTable().destroy();

                $("#tabel_dokumen").show()
                var a = 1;
                console.log(data)
                $.each(data, function(key, value) {
                    $('table').find('tbody').append(`
                    <tr id="a">
                    <td>` + a++ + `</td>
                    <td>` + data[key]['bab'] + `</td>
                    <td>` + data[key]['elemen_penilaian'] + `</td>
                    <td>` + data[key]['filenames'] + `</td>
                    <td><button type="button" class="btn btn-warning" disabled>10/10</button></td>
                    <td>` + data[key]['created_at'] + `</td>
                    <td>` + data[key]['updated_at'] + `</td>
                    <td><button type="button" class="btn btn-success"><i class="fas fa-percent"></i> Nilai</button> <button type="button" class="btn btn-warning"><i class="fas fa-file-pdf"></i> Lihat</button> </td>
                    </tr>
                    `);
                });

                $(document).ready(function() {
                    $('#table-data').DataTable({
                        scrollX: true,
                        "bDestroy": true
                    });
                });
            },
            error: function(err) {

            }
        })
    })

    $('#bab').on('change', function(e) {
        e.preventDefault()
        var bab = $('#bab').val()
        $("#ep option").remove();


        $.ajax({
            type: "GET",
            url: "{{ route('admin.ajaxEP') }}",
            dataType: "JSON",
            data: {
                'bab': bab
            },
            success: function(data) {
                $.each(data, function(key, value) {
                    $("#ep").append('<option value="' + data[key]['elemen_penilaian'] + '">' + data[key]['elemen_penilaian'] + '</option>');
                });
            },
            error: function(err) {

            }
        })
    })
</script>
@endsection