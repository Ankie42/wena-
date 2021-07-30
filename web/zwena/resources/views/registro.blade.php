@extends('layouts/master')
@section('palta')

<div class="row">
    <div class="col-12 col-md-6 col-lg-5 mx-auto">
        <div class="card-header bg-dark text-white">
            <span>Registrar lectura</span>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="fecha-txt class="form-label">Fecha</label>
                <input type="date" id="fecha-txt" class="form-control">
            </div>
            <div class="mb-3">
                <label for="medidor-txt" class="form-label">Medidor</label>
                <select class="form-control" id="medidor-txt">
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                    <option>06</option>
                    <option>07</option>
                    <option>08</option>
                    <option>09</option>
                    <option>10</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="direccion-txt" class="form-label">Dirección</label>
                <input type="text" id="direccion-txt" class="form-control">
            </div>
            <div class="mb=3">
                <label class="form-label" for="precio-txt">Valor</label>
                <input class="form-control" type="number" id="valor-txt" min="1" max="501">
            </div>
            <div class="mb-3">
                <label for="tipo-txt" class="form-label">Tipo de Medida</label>
                <select class="form-control" id="tipo-txt">
                    <option>Kilowatts</option>
                    <option>Watts</option>
                    <option>Temperatura</option>
                </select>
            </div>




        </div>
        <div class="card-footer d-grid gap-1">
            <button class="btn btn-info">Registrar</button>
        </div>
    </div>
</div>

@endsection