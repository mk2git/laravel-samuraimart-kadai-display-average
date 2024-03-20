@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>新しい商品を追加</h1>

    <form action="{{route('products.store')}}" method="post">
      @csrf
      <div class="form-group">
        <lavel for="product-name">商品名</lavel>
        <input type="text" name="name" id="product-name" class="form-control">
      </div>
      <div class="form-group">
        <lavel for="product-description">商品説明</lavel>
        <textarea name="description" id="product-description" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <lavel for="product-price">価格</lavel>
        <input type="number" class="form-control" name="price" id="product-price">
      </div>
      <div class="form-group">
        <lavel class="form-label">カテゴリー</lavel>
        <select name="category_id" id="product-category" class="form-control">
          @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-success">商品を登録</button>
    </form>
    <a href="{{route('products.index')}}">商品一覧に戻る</a>
  </div>
@endsection