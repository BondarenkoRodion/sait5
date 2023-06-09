@extends('layouts.main')
@section('content')
    <div class = "container">
    <section class="container signup-form">
    <h3>ВИДАЛИТИ ТОВАР ЗІ СПИСКУ</h3>
    <form action="{{ route('delete.submit') }}" method="post">
        @csrf
        <input type="text" name="id" class="mr-1 mb-1" placeholder="НАЗВА ТОВАРУ">
        <button type="submit" name="submit" class="btn btn-success">ВИДАЛИТИ</button>
    </form> </section>
    </div>
@endsection