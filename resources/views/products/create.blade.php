@extends('common.sbadmin')

@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Crear categoria</div>
                    <div class="card-body">
                        <form method="POST" action ="{{action('ProductController@store')}}">
                            {{ method_field('POST') }}
        
                            {{ csrf_field() }}
        
                            @include('products.partials.form')
        
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection