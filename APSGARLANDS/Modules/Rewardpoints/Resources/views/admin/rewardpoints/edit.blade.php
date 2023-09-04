@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.edit', ['resource' => trans('rewardpoints::rewardpoints.rewardpoints')]))
    @slot('subtitle', $rewardpoints->name)

    <li><a href="{{ route('admin.rewardpoints.index') }}">{{ trans('rewardpoints::rewardpoints.rewardpoints') }}</a></li>
    <li class="active">{{ trans('admin::resource.edit', ['resource' => trans('rewardpoints::rewardpoints.rewardpoints')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.rewardpoints.update', $rewardpoints) }}" class="form-horizontal" id="rewardpoints-edit-form" novalidate>
        {{ csrf_field() }}
        {{ method_field('put') }}

        {!! $tabs->render(compact('rewardpoints')) !!}
    </form>
@endsection

@include('rewardpoints::admin.rewardpoints.partials.scripts')
