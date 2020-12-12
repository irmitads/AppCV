@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar paciente</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/admin/pacientes/'.$p->id.'/edit') }}">
                        {{ csrf_field() }}

                        <div>
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nombre" required autofocus value = "{{ $p->nombre }}">
                            </div>
                        </div>

                        <div>
                            <label for="name" class="col-md-4 control-label">Edad</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control" name="edad" required value = "{{ $p->edad }}">
                            </div>
                        </div>

                        <div>
                            <label for="name" class="col-md-4 control-label">Peso</label>

                            <div class="col-md-6">
                                <input id="name" type="number" step="any" class="form-control" name="peso" required value = "{{ $p->peso }}">
                            </div>
                        </div>

                        <div>
                            <label for="name" class="col-md-4 control-label">Sexo</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="sexo" required value = "{{ $p->sexo }}">
                            </div>
                        </div>
                        <div>
                            <label for="name" class="col-md-4 control-label">Tipo Animal - 1</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="tipoanimal_id" value = "1" >
                            </div>
                        </div>
                        <div>
                            <label for="name" class="col-md-4 control-label">IdDueño - 1</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="dueno_id" value = "1" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar Paciente
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
