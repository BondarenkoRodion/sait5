@extends('layouts.main')
@section('content')
    <div class = "container">
        <div>
        <h3>ДОДАТИ ТОВАР</h3>
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="productName">Введіть назву</label>
                    <input value="{{ old('productName') }}" type="text" name="productName" class="form-control" id="productName" placeholder="НАЗВА ТОВАРУ">
                    @error('productName')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="productDescription">Введіть опис</label>
                    <textarea class="form-control" name="productDescription" id="productDescription" placeholder="ОПИС ТОВАРУ">{{ old('productDescription') }}</textarea>
                    @error('productDescription')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="files">Завантажте зображення</label>
                    <input type="file" name="photos[]" class="form-control" accept="image/*" multiple>
                </div>
                <div class="form-group">
                    <label for="productID">Введіть номер</label>
                    <input value="{{ old('productID') }}"type="text" class="form-control" name="productID" id="productID" placeholder="АЙДІ ТОВАРУ">
                    @error('productID')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                </div>
                <div class="form-group">
                    <label for="productID">Введіть кількість продажів</label>
                    <input value="{{ old('productID') }}"type="text" class="form-control" name="productID" id="productID" placeholder="КІЛЬКІСТЬ ПРОДАЖІВ">
                    @error('productSales')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category_id"> Оберіть вид товару </label>
                    <select class="form-control" id="category_id" name="category_id">
                        @foreach($categories as $category)
                        <option 
                        {{ $category->id == old('category_id') ? 'selected' : ''}}
                        
                        value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                    @foreach($tags as $tag)
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{ $tag->id }}" id="tag" name="tags[]">
                    <label class="form-check-label" for="tag">{{ $tag->title }}</label>
                    </div>
                    @endforeach
                <div class='d-flex justify-content-between'>
                    <button type="submit" class="btn btn-primary mt-2">ДОДАТИ</button> <a href="/products" class="btn btn-info mt-2">НАЗАД</a>
                </div>
            </form>
        </div>
    </div>
@endsection