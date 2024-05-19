<x-admins.layout>
    @if (session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif
    <div class="bg-white rounded-lg p-4 shadow-md my-4">
        <div class="py-2 text-left w-full flex justify-between">
            <h2 class="text-2xl font-bold text-gray-600">News</h2>
            <a href="{{ route('dashboard.news.create') }}">
                <x-primary-button class="h-10">
                    {{ __('Create New') }}
                </x-primary-button>
            </a>
        </div>
        <table class="table-auto w-full my-2">
            <thead>
                <tr class="px-4 my-2 text-left border-b-2 text-ml font-bold text-gray-600">
                    <th>Title</th>
                    <th>Body</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $item)
                    <tr class="border-b w-full px-4 py-10 text-left">
                        <td>
                            {{ $item->title }}
                        </td>
                        <td>
                            {{ $item->body }}
                        </td>
                        <td>
                            <a href="{{ route('dashboard.news.edit', $item->id) }}">
                                <x-primary-button class="h-8">
                                    {{ __('Edit') }}
                                </x-primary-button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('dashboard.news.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <x-primary-button class="h-8" onclick="return confirm('Are you sure to delete');">
                                    {{ __('Delete') }}
                                </x-primary-button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">{{ $news->links() }}</div>
    </div>
</x-admins.layout>
