@extends('layouts.main')
@section('content')
    <div class = "container">
    <section class="container signup-form">
    <h3>ДОДАТИ ТОВАР</h3>
    <form action="{{ route('form.submit') }}" method="post">
        @csrf
        <input type="text" name="productName" class="mr-1 mb-1" placeholder="НАЗВА ТОВАРУ">
        <input type="text" name="productDescription" class="mr-1 mb-1" placeholder="ОПИС ТОВАРУ">
        <input type="text" name="productID" class="mr-1 mb-1" placeholder="АЙДІ ТОВАРУ">
        <input type="text" name="productSales" class="mr-1 mb-1" placeholder="КІЛЬКІСТЬ ПРОДАЖІВ">
        <button type="submit" name="submit" class="btn btn-success">ДОДАТИ</button>
    </form> </section>
    </div>
@endsection