
@extends('app')
@section('content')
@livewire('product-front-component', ['category' => $category,'category_type'=>$category_type,'sub_category'=>$sub_category])
@endsection