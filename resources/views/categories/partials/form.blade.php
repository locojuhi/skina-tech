<div class="form-group">
    <label for="name">Nombre</label>
    <input class="form-control" id="name" name="name" type="text" placeholder="Nombre de categoria" value="{{ (isset($category->name) ? old('name', $category->name): '')}}">
</div>

<div class="form-group">
    <label for="parent_id">Categoria padre</label>
    <input class="form-control" id="parent_id" name="parent_id" type="text" placeholder="Categoria padre" value="{{ (isset($category->parent_id) ? old('name', $category->parent_id): '')}}">
</div>


<input type="submit" class="btn btn-primary btn-block">
