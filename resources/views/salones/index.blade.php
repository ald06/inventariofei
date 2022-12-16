@extends('layouts.app')

@section('links')
<link rel="stylesheet" type="text/css" href="{{ asset('datatables/dataTables.min.css') }}">
@endsection

@section('content')
  <div class="container-fluid">
    <div class="card text-center">
      <div class="card-header">
        <h3 class="float-left">Salones</h3>
        <a href="{{url('salones/create')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right">
          <i class="fas fa-plus"></i>
        </a>
      </div>
      <div class="card-body">
        {{-- <h5 class="card-title">Tabla con datatables</h5> --}}
        <table id="table" name="table" class="table table-hover display responsive no-wrap " width="100%">
          <thead class="thead text-white">
            <tr>
              <th scope="col">Lugar</th>
              <th scope="col">Fecha</th>
              <th scope="col">Status</th>
              <th scope="col">Encargado</th>
              <th scope="col">Observaciones</th>
              <th scope="col" data-priority="1" class="title text-white">Acciones</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
<script src="{{ asset ('datatables/dataTables.min.js')}}"></script>
<script>
$(document).ready( function () {
  var tabla = $('#table').DataTable({
    responsive: true,
    fixedHeader: true,
    processing: true,
    serverSide: true,
    dom: "<'row mx-auto'<'col-md-12 mx-auto'B>>"+"<'row text-center'<'col-md-6 text-left'l><'col-md-6'f>>" + 'rt'+"<'row text-center'<'col-md-6 text-left'i><'col-md-6'p>>",
      buttons: [
        {//excel
          text: '<i class="fas fa-file-excel fa-3x" data-toggle="tooltip" data-placement="top" title="Excel"></i>',
          extend: 'excelHtml5',
          fieldSeparator: '\t',
          title : 'Salones',
            exportOptions: {
              columns: [ 0, ':visible' ]
            }
        },
        {//csv
          text: '<i class="fas fa-file-csv fa-3x" data-toggle="tooltip" data-placement="top" title="CSV"></i>',
          extend: 'csvHtml5',
          fieldSeparator: '\t',
          title : 'Salones',
          exportOptions: {
            columns: [ 0, ':visible' ]
          }
        },
        {//pdfHtml5
          text: '<i class="fas fa-file-pdf fa-3x" data-toggle="tooltip" data-placement="top" title="PDF"></i>',
          extend: 'pdfHtml5',
          fieldSeparator: '\t',
          title : 'Salones',
          exportOptions: {
            columns: [ 0, ':visible' ]
          }
        },
        {//Print
          text: '<i class="fas fa-print fa-3x" data-toggle="tooltip" data-placement="top" title="Imprimir"></i>',
          extend: 'print',
          fieldSeparator: '\t',
          title : 'Salones',
          exportOptions: {
            columns: [ 0, ':visible' ]
          }
        },
        // {//ColumnVisual
        //   text: '<i class="fas fa-columns fa-3x" data-toggle="tooltip" data-placement="top" title="Mostrar/Ocultar columnas"></i>',
        //   extend: 'colvis',
        //   fieldSeparator: '\t',
        //   title : 'Columnas',
        // },
    ],
    ajax: "{{ url('salones/getdata') }}",
    columns: [
      { data: 'lugar' },
      { data: 'fecha' },
      { data: 'estatus_id' },
      { data: 'encargado' },
      { data: 'observaciones' },
      { data: 'actions', className: "center", defaultContent: '<button class="edit btn btn-light disabled"> NO </button>' }
    ],
    language: {
      "url": "{{asset('dataTables/spanish.json')}}"
    },
    "fnDrawCallback": function( oSettings ) {
      $('[data-toggle="tooltip"]').tooltip({
        trigger : 'hover',
      });
      $('.dropdown-toggle').dropdown();
      $(".dtbutton").click(function() {

        Swal.fire({
          title: '¿Está Seguro?',
          text: "El registro de borrará",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#6f2923',
          cancelButtonColor: '#5e5e5e',
          confirmButtonText: 'Borrar',
          cancelButtonText: 'Cancelar',
        }).then((result) => {
          if (result.value) {//after confirn, do the submit
              var sw = $(this).parent().attr('id');
              $('#'+sw).submit();
            }
        })
      });
    }
  });
});
</script>
@endsection