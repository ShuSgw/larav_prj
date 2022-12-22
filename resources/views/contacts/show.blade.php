<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            contact list
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    show
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul>
                        <li>{{ $ms->name }}</li>
                        <li>{{ $ms->email }}</li>
                        <li>{{ $ms->text }}</li>
                    </ul>
                </div>
                {{-- <form method="post" action="{{ route('modify', ['id' => $ms->id]) }}">
                    @csrf

                    nameという属性を勝手にstoreメソッドがポストする
                    <input type="text" id="name" name="formAtt" autocomplete="off">

                    <input type="text" id="name" name="name" autocomplete="off" placeholder="name"
                        value="{{ $ms->name }}">
                    <input type="email" id="email" name='email' autocomplete="off" placeholder="email"
                        value="{{ $ms->email }}">
                    <input type="text" value="{{ $ms->text }}" id="text" name="text" autocomplete="off"
                        placeholder="ms">
                    <button>SEND</button>
                </form> --}}
            </div>
        </div>
    </div>

</x-app-layout>
