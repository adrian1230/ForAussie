@extends('components.layout')

@section('content')

<div class="mt-3 jumbotron">
    <h1 class="display-3">
        This is SocSpo
        <strong>!!</strong>
    </h1>
    <p class="ml-3 lead">
        Here create you own blog post for free!
    </p>
    <p class="ml-3 lead">
        See What Others Have Been 
        <a href="/blog">
            Posting!
        </a>
    </p>
    <a href="/new">
        <button class="btn border-secondary border ml-3">
            <strong>Create</strong>
        </button>
    </a>
</div>

@stop

