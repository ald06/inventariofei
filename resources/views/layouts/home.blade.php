@extends ('layouts.app')

@section ('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Proximos mantenimientos</h1>
        </div>
        <div class="card-body">
            {{-- <h5 class="card-title">Tabla con datatables</h5> --}}
            <table id="table" name="table" class="table table-hover display responsive no-wrap " width="100%">
              <thead class="thead text-white">
                <tr>
                  <th scope="col">lugar</th>
                  <th scope="col">fecha</th>
                  <th scope="col">encargado</th>
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
    ajax: "{{ url('salones/getdata') }}",
    columns: [
      { data: 'lugar' },
      { data: 'fecha' },
      { data: 'encargado' },
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