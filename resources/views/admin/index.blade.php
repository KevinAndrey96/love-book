@extends('adminlte::page')

@section('title', 'Admin Love Books')

@section('content_header')
    <h1>Love Books</h1>
@stop

@section('content')
<div class="box">
    <div class="box-header" >
        <h3 class="box-title">Lista de Libros</h3>
    </div>
    <div class="box-body" style="background-color: #e1e7ff;">
        <table id="books-table" class="table table-bordered">
            <thead style="background-color: #cf1259; text-align: center; color: white">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>PDF</th>
                    <th>Estado</th>
                    <th>ID transaccion</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->pdf }}</td>
                        <td style="text-align: center">{{ $book->status }}</td>
                        <td>{{ $book->id_transaction }}</td>
                        <td style="text-align: center">
                            <a href="{{ route('download.pdf', ['id' => $book->id]) }}" class="btn btn-success">Descargar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    @yield('adminlte_js')
    <script>
        $(document).ready(function() {
            $('#books-table').DataTable({
                "lengthMenu": [10, 25, 50, 75, 100],
                "order": [[0, "desc"]],
            });
        });
    </script>
@stop
