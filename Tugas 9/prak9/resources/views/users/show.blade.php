<x-app-layout title="Home">
    <x-slot name="heading">{{$user->name}}</x-slot>

    <div>{{$user->email}}</div>
    <div>Regitered at {{$user->created_at->diffForHumans()}}</div>
</x-app-layout>
