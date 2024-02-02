@extends('base')
@section('title', 'recettes')

@section('content')
<div class="d-flex justify-content-between">

    <h1>recette Lista
        <a href="{{route('products.create')}}" class="btn btn-primary"></a>
    </h1>
    <table class="talble">
        <thead>
            <tr>
            <th>id</th>
            <th>Name</th>
            <th>Description</th>
            <th>ingredients</th>
            <th>instructions</th>
            <th>img</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($recettes as $recette)

            <tr>
            <th>{{$recette->id}}</th>
            <th>{{$recette->Name}}</th>
            <th>{{$recette->Description}}</th>
            <th>{{$recette->ingredients}}</th>
            <th>{{$recette->instructions}}</th>
            <th><img width="100px" scr="stronge/{{$recette->img}}" alt=""></th>
            <th>
                <div class="btn-group">
                    <a href="{{route('recettte.edit', $recette)}}" class="btn btn-primary">Update</a>
                    <form method="post" action="{{route('recette.destroy', $recette)}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="delet">
                    </form>

                </div>
            </th>
            </tr>
            @empty

            <tr>
                <td colspan="6" align="center">
                    <h6 >No products</h6>
                </td>
            </tr>

            @endempty
            @endforelse

        </tbody>

    </table>
    {{$recettes->Links()}}
@endsectio



