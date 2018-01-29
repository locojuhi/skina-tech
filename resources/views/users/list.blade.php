@extends('common.sbadmin')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Categorias
            <div class="pull-right">
                <a href="{{action('UserController@create')}}" class="btn btn-success">
                    <span>
                        <i class="fa fa-plus"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <tr class="thead-dark">
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>username</th>
                    <th>Acciones</th>
                </tr>

                @foreach ($users as $user)
                    <tr>
                        <td>
                            {{ucfirst($user->first_name)}}
                        </td>
                        <td>
                            {{ucfirst($user->last_name)}}
                        </td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->username}}</td>
                        <td>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                    <a href="{{action('UserController@edit', ['id' => $user->id])}}" class="btn btn-primary">Editar</a>
                                </div>

                                <div class="btn-group" role="group" aria-label="Third group">
                                    <form method="POST" action="{{action('UserController@destroy', ['id' => $user->id] )}}">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <input type="submit" class="btn btn-danger" value="Eliminar">
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
            <nav>
                {{ $users->links() }}
            </nav>
        </div>
    </div
@endsection