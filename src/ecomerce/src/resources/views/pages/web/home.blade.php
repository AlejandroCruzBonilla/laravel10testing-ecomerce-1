@section('title','Home Page')
@section('description','Home Page description')

<x-app-layout>
    <x-slot name="title">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home Page') }}
        </h2>
    </x-slot>
</x-app-layout>
