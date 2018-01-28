<div class="form-group">
    <label for="name">Nombre</label>
    <input class="form-control" id="name" name="name" type="text" placeholder="Nombre de categoria" value="{{ (isset($category->name) ? old('name', $category->name): '')}}">
</div>

<div class="form-group">
    <label for="parent_id">Categoria padre</label>
    <select class="form-control" name="parent_id" id="parent_id">
        @foreach($categories as $category)
            @if(isset($category))
                @if($category->id == $category->parent_id)
                    <option value="{{$category->id}}" selected >{{$category->name}}</option>
                @else
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endif
            @else
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endif
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="status_id">Estado</label>
    <select class="form-control" name="status_id" id="status_id">
        @foreach($statuses as $status)
            @if(isset($category))
                @if($status->id == $category->status_id)
                    <option value="{{$status->id}}" selected >{{$status->name}}</option>
                @else
                    <option value="{{$status->id}}">{{$status->name}}</option>
                @endif
            @else
                <option value="{{$status->id}}">{{$status->name}}</option>
            @endif
        @endforeach
    </select>
</div>

<input type="submit" class="btn btn-primary btn-block">
