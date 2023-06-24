@extends('adminlte::page')

@section('title', 'librodeamor.co')

@section('content_header')
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Lista de Libros</h3>
    </div>
    <div class="box-body" style="background-color: #e1e7ff;">
        <table id="books-table" class="table table-bordered">
            <thead style="background-color: #cf1259; text-align: center; color: white">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>ID transacción</th>
                    <th>Información de transacción</th>
                    <th>Descargar</th>
                    <th>Cambiar Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->name }}</td>
                        <td style="text-align: center">{{ $book->status }}</td>
                        <td>{{ $book->id_transaction }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#transactionModal{{ $book->id }}">Ver información</button>
                        </td>
                        <td style="text-align: center">
                            <a href="{{ route('download.pdf', ['id' => $book->id]) }}" class="btn btn-success">Descargar</a>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Cambiar Estado
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item change-status" href="#" data-id="{{ $book->id }}" data-status="Entregado">Entregado</a>
                                    <a class="dropdown-item change-status" href="#" data-id="{{ $book->id }}" data-status="Cancelado">Cancelado</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="transactionModal{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="transactionModalLabel{{ $book->id }}">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h4 class="modal-title text-white" id="transactionModalLabel{{ $book->id }}">Información de Transacción</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <pre>{{ $book->transaction_info }}</pre>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop




@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @yield('adminlte_js')
    <script>
        $(document).ready(function() {
            $('#books-table').DataTable({
                "lengthMenu": [10, 25, 50, 75, 100],
                "order": [[0, "desc"]],
            });

            $('.change-status').click(function(e) {
    e.preventDefault();

    var status = $(this).data('status');
    var statusColumn = $(this).closest('tr').find('td:eq(2)');

    // Mostrar una alerta con SweetAlert2
    Swal.fire({
        title: 'Cambiar estado',
        text: '¿Estás seguro de cambiar el estado?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            // Realizar la solicitud de actualización del estado en la base de datos
            var bookId = $(this).data('id');
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                type: 'PUT',
                url: '/books/' + bookId + '/status',
                data: {
                    _token: csrfToken, // Incluir el token CSRF en la solicitud
                    status: status
                },
                success: function(response) {
                    // Actualizar la columna de estado en la tabla
                    statusColumn.text(status);
                    // Mostrar una alerta de éxito
                    Swal.fire('Éxito', response.message, 'success');
                },
                error: function(xhr, status, error) {
                    // Mostrar una alerta de error
                    Swal.fire('Error', 'No se pudo cambiar el estado', 'error');
                }
            });
        }
    });
});
});

    </script>
@stop
