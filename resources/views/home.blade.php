@extends('layouts.app')

@section('title-block', 'Головна сторінка')

@section('content')
    <h1>Головна сторінка</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, aliquid aperiam at corporis culpa dolores
        dolorum eaque enim, eos esse fuga harum iusto molestiae obcaecati officia quasi quidem quos ratione reiciendis
        rem, repudiandae similique suscipit ullam. Eligendi eum excepturi iure.</p>
@endsection

@section('aside')
    @parent
    <p>Доповнений текст</p>
@endsection
