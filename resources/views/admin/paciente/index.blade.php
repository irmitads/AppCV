<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <table class="table">
                    <caption>List de pacientes</caption>
                    <thead>
                        <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($pacientes as $p)
                        <tr>
                        <th scope="row">{{$p->nombre}}</th>
                        <td>{{$p->edad}}</td>
                        <td>{{$p->peso}}</td>
                        <td>{{$p->sexo}}</td>
                        <td class="td-actions">
                            <button type="button" rel="tooltip" title="Ver paciente" class="btn btn-info btn-simple btn.xs">
                                Ver 
                            </button>
                            <a href="{{url ('/admin/pacientes/'.$p->id.'{id}/edit') }}" type="button" rel="tooltip" title="Editar paciente" class="btn btn-info btn-simple btn.xs">
                                Editar
                            </a>
                            <form method= "post" action="{{url ('/admin/pacientes/'.$p->id.'{id}/delete') }}">
                                {{ csrf_field() }}
                                <button type="submit" rel="tooltip" title="Eliminar paciente" class="btn btn-info btn-simple btn.xs">
                                    Eliminar
                                </button>
                            </form>
                            
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
