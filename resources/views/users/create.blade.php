@extends('layouts.app')

@section('title', 'Створення користувача')

@if ($canView)
    @section('h-btn-title', 'Всі працівники')
    @section('h-btn-icon', 'arrow_back')
    @section('h-btn-href', '/users')
    @section('h-btn-class', 'md-raised')
@endif

@section('content')

    <users-page inUser="{{ json_encode() }}"
                action="{{ $action }}"
                can-edit="{{ $canEdit }}"
                can-view="{{ $canView }}"
                can-delete="{{ $canDelete }}"
    ></users-page>

@endsection
