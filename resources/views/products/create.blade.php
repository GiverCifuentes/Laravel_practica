<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Create a Product</h1>
<form action="{{ route('products.store') }}" method="post">
    @csrf
    <div class="form-row">
        <label>Title</label>
    <input class="form-control" type="text" name="title" value="{{ old('title') }}" required>
    </div>
    <div class="form-row">
        <label>Description</label>
    <input class="form-control" type="text" name="description" value="{{ old('description') }}" required>
    </div>
    <div class="form-row">
        <label>Price</label>
    <input class="form-control" type="number" name="price" min="1.0" step="0.1" value="{{ old('price') }}" required>
    </div>
    <div class="form-row">
        <label>Stock</label>
    <input class="form-control" type="number" name="stock" min="0" step="1" value="{{ old('stock') }}" required>
    </div>
    <div class="form-row">
        <label>Status</label>
        <select class="custom-select" name="status" required>
            <option value="" selected></option>
            <option {{ (old('status') == 'Disponible' ? 'selected' : '' ) }} value="Disponible">Disponible</option>
            <option {{ (old('status') == 'No Disponible' ? 'selected' : '') }} value="No Disponible">No Disponible</option>
        </select>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary btn-lg mt-3">Crear</button>
    </div>
    </form>
</body>
</html>
