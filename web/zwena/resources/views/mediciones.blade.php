@extends('layouts.master')
@section('palta')

<div class="col col-md col-lg">
    <div class="card">
        <div class="card-body text-center bg-danger text-light">
            <span>Mediciones registradas</span>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered table-stripper">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Medidor</th>
                        <th>Valor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla-tbody" >
                  
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection
