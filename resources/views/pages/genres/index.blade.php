<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Жанры') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-primary-button class="ms-3">
            <a href="{{route('genres.create')}}">
                Добавить новый жанр
            </a>
        </x-primary-button>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach($genres as $genre)
                        <div class="row">
                            <div class="col-sm-4 mb-3">
                                {{$genre->name}}
                            </div>
                            <div class="col-sm-4 text-end mb-3">
                                <a href="{{route('genres.edit', $genre->id)}}" class="btn btn-sm btn-warning">
                                    Редактировать
                                </a>
                            </div>
                            <div class="col-sm-4 text-center mb-3">
                                <form action="{{route('genres.destroy', $genre->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Вы уверены, что хотите удалить данный жарн?')">
                                        Удалить
                                    </button>

                                </form>

                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
