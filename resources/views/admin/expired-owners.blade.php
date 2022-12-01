<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            削除済オーナー【一覧】
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-4 mx-auto">
                            <x-flash-message status="session('status')" />
                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                <table class="table-auto w-full text-left whitespace-no-wrap">
                                <thead>
                                    <tr>
                                    <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">オーナーID</th>
                                    <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">オーナー名</th>
                                    <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メールアドレス</th>
                                    <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">削除日時</th>
                                    <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"></th>
                                    <th class="md:px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($expiredOwners as $owner)
                                    <tr>
                                    <td class="border-t-2 border-gray-200 md:px-4 py-3">{{ $owner->id }}</td>
                                    <td class="border-t-2 border-gray-200 md:px-4 py-3">{{ $owner->name }}</td>
                                    <td class="border-t-2 border-gray-200 md:px-4 py-3">{{ $owner->email }}</td>
                                    <td class="border-t-2 border-gray-200 md:px-4 py-3">{{ $owner->deleted_at->diffForHumans() }}</td>
                                    <form method="post" action="{{ route('admin.expired-owners.restore', ['owner' => $owner->id]) }}">
                                        @csrf
                                        @method('patch')
                                        <td class="border-t-2 border-gray-200 px-2 py-3">
                                            <button type="submit" class="text-white bg-gray-500 border-0 py-2 px-8 focus:outline-none hover:bg-gray-600 rounded flex ml-auto w-fit">復元</button>
                                        </td>
                                    </form>
                                    <form id="delete_{{ $owner->id }}" method="post" action="{{ route('admin.expired-owners.destroy', ['owner' => $owner->id]) }}">
                                        @csrf
                                        <td class="border-t-2 border-gray-200 px-2 py-3">
                                            <a href="#" data-id="{{ $owner->id }}" onclick="deletePost(this)" class="text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded flex ml-auto w-fit">削除</a>
                                        </td>
                                    </form>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                                {{ $expiredOwners->links() }}
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deletePost(e) {
            'use strict';
            if (confirm('OKを押すと完全に削除されます。本当に削除してもよろしいですか？')) {
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>
</x-app-layout>
