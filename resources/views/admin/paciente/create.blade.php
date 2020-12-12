@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de paciente</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/admin/pacientes') }}">
                        {{ csrf_field() }}

                        <div>
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nombre" required autofocus>
                            </div>
                        </div>

                        <div>
                            <label for="name" class="col-md-4 control-label">Edad</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control" name="edad" required>
                            </div>
                        </div>

                        <div>
                            <label for="name" class="col-md-4 control-label">Peso</label>

                            <div class="col-md-6">
                                <input id="name" type="number" step="any" class="form-control" name="peso" required>
                            </div>
                        </div>

                        <div>
                            <label for="name" class="col-md-4 control-label">Sexo</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="sexo" required >
                            </div>
                        </div>
                        <div>
                            <label for="name" class="col-md-4 control-label">Tipo Animal - 1</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="tipoanimal_id" required >
                            </div>
                        </div>
                        <div>
                            <label for="name" class="col-md-4 control-label">IdDueño - 1</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="dueno_id" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar Paciente
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
