<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Login') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex">
                    <div class="w-1/2">
                        <img src="{{ asset('images/bca-logo.png') }}" alt="Logo BCA" class="w-full h-48">
                        <p class="text-center text-gray-500">Senantiasa di Sisi Anda</p>
                    </div>
                    <div class="w-1/2">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html><x-app-layout>
