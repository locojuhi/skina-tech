<div class="form-group">
    <label for="first_name">Nombre</label>
    <input class="form-control" id="first_name" name="first_name" type="text" placeholder="Nombre" value="{{ (isset($user->first_name) ? old('first_name', $user->first_name): '')}}">
</div>

<div class="form-group">
    <label for="last_name">Apellido</label>
    <input class="form-control" id="last_name" name="last_name" type="text" placeholder="Apellido" value="{{ (isset($user->last_name) ? old('last_name', $user->last_name): '')}}">
</div>

<div class="form-group">
    <label for="username">Username</label>
    <input class="form-control" id="username" name="username" type="text" placeholder="Username" value="{{ (isset($user->username) ? old('username', $user->username): '')}}">
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input class="form-control" id="email" name="email" type="text" placeholder="Email" value="{{ (isset($user->email) ? old('email', $user->email): '')}}">
</div>

<div class="form-group">
    <label for="role_id">Rol</label>
    <select class="form-control" name="role_id" id="role_id">
        @foreach($roles as $role)
            @if(isset($user))
                @if($role->id == $user->role_id)
                    <option value="{{$role->id}}" selected >{{$role->name}}</option>
                @else
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endif
            @else
                <option value="{{$role->id}}">{{$role->name}}</option>
            @endif
                
           
        @endforeach
    </select>
</div>


<div class="form-group">
    <label for="password">Contraseña</label>
    <input class="form-control" id="password" name="password" type="password">
</div>

<div class="form-group">
    <label for="password_confirmation ">Repetir Contraseña</label>
    <input class="form-control" id="password_confirmation" name="password_confirmation" type="password">
</div>

<input type="submit" class="btn btn-primary btn-block">
