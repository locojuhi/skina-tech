<div class="form-group">
    <label for="name">Nombre</label>
    <input class="form-control" id="name" name="name" type="text" placeholder="Nombre del producto" value="{{ (isset($product->name) ? old('name', $product->name): '')}}">
</div>

<div class="form-group">
    <label for="category_id">Categoria</label>
    <select class="form-control" name="category_id" id="category_id">
        @foreach($categories as $category)
            @if($category->id == 1)
                @continue
            @endif
            @if($category->id == $product->category_id)
                <option value="{{$category->id}}" selected >{{$category->name}}</option>
            @else
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endif
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="stock">Cantidaden inventario</label>
    <input class="form-control" id="stock" name="stock" type="text" placeholder="Cantidad en inventario" value="{{ (isset($product->stock) ? old('name', $product->stock): '')}}">
</div>

<div class="form-group">
    <label for="price">Precio</label>
    <input class="form-control" id="price" name="price" type="text" placeholder="Precio" value="{{ (isset($product->price) ? old('name', $product->price): '')}}">
</div>




<input type="submit" class="btn btn-primary btn-block">
