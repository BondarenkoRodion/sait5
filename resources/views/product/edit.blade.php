@extends('layouts.main')
@section('content')
    <div class = "container">
        <div>
        <h3>РЕДАГУВАТИ ТОВАР</h3>
            <form action="{{ route('product.update', $product->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="productName">Назва товару</label>
                    <input type="text" name="productName" class="form-control" id="productName" placeholder="НАЗВА ТОВАРУ" value="{{ $product->productName }}">
                </div>
                <div class="form-group">
                    <label for="productDescription">Опис товару</label>
                    <textarea class="form-control" name="productDescription" id="productDescription" placeholder="ОПИС ТОВАРУ">{{$product->productDescription}}</textarea>
                </div>
                <div class="form-group">
                    <label for="productID">Айді товару</label>
                    <input type="text" class="form-control" name="productID" id="productID" placeholder="АЙДІ ТОВАРУ" value="{{ $product->productID }}">
                </div>
                <div class="form-group">
                    <label for="productID">Кількість продажів</label>
                    <input type="text" class="form-control" name="productSales" id="productSales" placeholder="КІЛЬКІСТЬ ПРОДАЖІВ" value="{{ $product->productSales }}">
                </div>
                <div class="form-group">
                    <label for="tag"> Оберіть вид товару </label>
                    <select class="form-control" id="tag" name="category_id">
                        @foreach($categories as $category)
                        <option 
                        {{ $category->id == $product->category->id ? 'selected' : ''}}
                        
                        value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                    @foreach($tags as $tag)
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{ $tag->id }}" id="tag" name="tags[]"
                    @foreach($product->tags as $productTag)
                    {{ $tag->id == $productTag->id ? 'checked' : ''}}
                    @endforeach
                    >


                    <label class="form-check-label" for="tag">{{ $tag->title }}</label>
                    </div>
                    @endforeach
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary mb-3 mt-1">ЗМІНИТИ</button>
                        <a href="/products" class="btn btn-info mb-3 mt-1">НАЗАД</a>
                    </div>
               
            </form>
        </div>
    </div>
@endsection