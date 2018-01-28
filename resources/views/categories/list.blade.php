@extends('common.sbadmin')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Categorias
            <div class="pull-right">
                <a href="{{action('CategoryController@create')}}" class="btn btn-success">
                    <span>
                        <i class="fa fa-plus"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <tr class="thead-dark">
                    <th>Nombre de categoria</th>
                    <th>Categoria Padre</th>
                    <th>Acciones</th>
                </tr>

                @foreach ($categories as $category)
                    <tr>
                        <td>
                            {{$category->name}}
                        </td>
                        <td>
                            {{$category->parent_category['name']}}
                        </td>
                        <td>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                    <a href="{{action('CategoryController@edit', ['id' => $category->id])}}" class="btn btn-primary">Editar</a>
                                </div>

                                <div class="btn-group" role="group" aria-label="Third group">
                                    <form method="POST" action="{{action('CategoryController@destroy', ['id' => $category->id] )}}">
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
                {{ $categories->links() }}
            </nav>
        </div>
    </div
@endsection