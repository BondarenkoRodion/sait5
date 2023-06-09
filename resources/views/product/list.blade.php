@extends('layouts.main')

@section('content')
    @php 
        $user = Auth::user();
    @endphp
    <h3>Список товарів користувача: <strong>{{ $user->name }}</strong></h3>
    <div>
        @if(session('success'))
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <h4>Вітаю!<h4>
                <p class="mb-0">Новий товар було успішно додано!</p>
            </div>
        @endif
        <div class="container">
            <div class="product-grid">
                @if(auth()->check())
                    @foreach (auth()->user()->products as $product)
                        <div class="product-frame">
                            <div class="product-card">
                                <div class="image-container">
                                    @if ($product->photos->count() > 0)
                                        <img src="/product_photos/{{ $product->photos[0]->image }}" alt="Product Image">
                                    @else
                                        Фото недоступне!
                                    @endif
                                </div>
                                <div class="product-details">
                                    <h5 class="card-title">{{ $product->productName }}</h5>
                                    <p class="card-text">{{ $product->productDescription }}</p>
                                    <p class="card-text">Айді товару: {{ $product->productID }}</p>
                                    <p class="card-text">Продажі: {{ $product->productSales }}</p>
                                    <p class="card-text">Категорія: {{ $product->category->title }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3>Увійдіть в акаунт!</h3>
                @endif
            </div>
        </div>
    </div>


    <style>
.product-frame {
    border: 1px solid #ccc;
    padding: 20px;
    margin-bottom: 20px;
}

.product-frame:last-child {
    margin-bottom: 0;
}

.product-card {
    display: flex;
}

.image-container {
    width: 200px;
    height: 200px;
}

.image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-details {
    flex-grow: 1;
    margin-left: 20px;
}
</style>
@endsection
