<div class="form-group">
    <label for="name">Nombre</label>
    <input class="form-control" id="name" name="name" type="text" placeholder="Nombre del producto" value="{{ (isset($product->name) ? old('name', $product->name): '')}}">
</div>

<div class="form-group">
    <label for="category_id">Categoria</label>
    <input class="form-control" id="category_id" name="category_id" type="text" placeholder="Categoria" value="{{ (isset($product->category_id) ? old('name', $product->category_id): '')}}">
</div>


<input type="submit" class="btn btn-primary btn-block">
