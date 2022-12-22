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
                    <form method="post" action="{{ route('store') }}">
                        @csrf


                        {{-- nameという属性を勝手にstoreメソッドがポストする --}}
                        {{-- <input type="text" id="name" name="formAtt" autocomplete="off"> --}}

                        <input type="text" id="name" name="name" autocomplete="off" placeholder="name">
                        <input type="email" id="email" name='email' autocomplete="off" placeholder="email">
                        <input type="text" id="text" name="text" autocomplete="off" placeholder="ms">
                        <button>SEND</button>
                    </form>

                    <li>
                        <a href="{{ route('create') }}" class="">create</a>
                    </li>
                    <li>
                        <a href="{{ route('store') }}" class="">test</a>
                    </li>

                    <h1>data</h1>
                    @if (isset($vals))
                        @foreach ($vals as $val)
                            <a href={{ route('list', ['id' => $val->id]) }}>
                                <div
                                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $val->id }}, {{ $val->name }}
                                    </h5>
                                    <p class="font-normal text-gray-700 dark:text-gray-400">
                                        {{ $val->email }}
                                    </p>
                                    <p class="font-normal text-gray-700 dark:text-gray-400">
                                        MS: {{ $val->text }}
                                    </p>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <p>No Controller</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
