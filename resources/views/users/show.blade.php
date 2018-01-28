@extends('common.sbadmin')

@section('content')
    <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-primary">{{ucfirst($user->first_name.' '.$user->last_name)}}</div>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">
                    <div class="col-md-4"><a href="{{action('UserController@edit', ['id' => $user->id])}}" class="btn btn-primary">Editar</a></div>
                    <div class="col-md-4">
                        <form method="POST" action="{{action('UserController@destroy', ['id' => $user->id] )}}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-danger" value="Eliminar">
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
    </div>
@endsection