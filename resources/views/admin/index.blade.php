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
    <div class="box-body" style="background-color: #42efff;">
    <table id="books-table" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>PDF</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->pdf }}</td>
                        <td>{{ $book->status }}</td>
                        <td>
                            <a href="{{ route('download.pdf', ['id' => $book->id]) }}" class="btn btn-danger">Download</a>
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
@stop

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop


