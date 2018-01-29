@extends('common.sbadmin')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Categorias
            <div class="pull-right">
                <a href="{{action('ProductController@create')}}" class="btn btn-success">
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
                    <th>Categoria</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>

                @foreach ($products as $product)
                    <tr>
                        <td>
                            {{$product->name}}
                        </td>
                        <td>
                            {{$product->category['name']}}
                        </td>

                        <td>
                            {{$product->stock}}
                        </td>

                        <td>
                            {{$product->price}}
                        </td>
                        <td>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                    <a href="{{action('ProductController@edit', ['id' => $product->id])}}" class="btn btn-primary">Editar</a>
                                </div>
                                @if(auth()->user()->role_id != 2)
                                    <div class="btn-group" role="group" aria-label="Third group">
                                        <form method="POST" action="{{action('ProductController@destroy', ['id' => $product->id] )}}">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <input type="submit" class="btn btn-danger" value="Eliminar">
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
            <nav>
                {{ $products->links() }}
            </nav>
        </div>
    </div
@endsection