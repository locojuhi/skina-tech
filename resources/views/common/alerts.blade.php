@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible" role="alert">
        <buttom type="buttom" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </buttom>
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
@endif