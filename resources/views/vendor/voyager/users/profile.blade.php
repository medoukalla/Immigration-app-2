@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing'))

@section('content')


@livewire('user-profile', ['user' => $user])


@stop