@extends('base')
@section('title', ($isUpdate?'Update':'create').'recette')

@php
    $route = route('recettes.store');
    if($isUpdate){
        route('recettes.edit',$recette);
    }
@endphp

@section('content')
<form action="{{route('recettes.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{old('title',$recette->description)}}">
    </div>
    <div class="form-group">
        <label for="description">description</label>
        <textarea name="description" id="title" class="form-control">{{old('description', $recette->description)}}</textarea>
    </div>
    <div class="form-group">
        <label for="ingredients">ingredients</label>
        <textarea type="text" name="" id="title" class="form-control">{{old('ingredients' $recette->ingredients)}}</textarea>
    </div>

    <div class="form-group">
        <label for="instructions">instructions</label>
        <input type="text" name="" id="title" class="form-control" value="{{old(instruction $recette->instructions)}}">
    </div>
    <div class="form-group">
        <label for="title">image</label>
        <input type="text" name="title" id="title" class="form-control">
        @if($recette->image)
        <img src="storage/{{$recette->image}}" alt="">
        @endif
    </div>
    <div class="form-group my-3">
        <input type="submit" class="btn btn-primary w-100" value="{{$isUpdate?'edit': 'create'}}">
    </div>
</form>
@endsection
