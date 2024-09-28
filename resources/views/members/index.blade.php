<!-- resources/views/tweets/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('メンバーリスト') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach ($members as $member)
                    <div class="mb-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                        <table>
                            <tr>
                                <td>
                                    <p class="text-gray-800 dark:text-gray-300">学籍番号</p>
                                </td>
                                <td>
                                    <p class="text-gray-800 dark:text-gray-300">：{{ $member->studentID }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="text-gray-800 dark:text-gray-300">名前</p>
                                </td>
                                <td>
                                    <p class="text-gray-800 dark:text-gray-300">：{{ $member->name }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="text-gray-800 dark:text-gray-300">ニックネーム</p>
                                </td>
                                <td>
                                    <p class="text-gray-800 dark:text-gray-300">：{{ $member->nickname }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="text-gray-800 dark:text-gray-300">学部</p>
                                </td>
                                <td>
                                    <p class="text-gray-800 dark:text-gray-300">：{{ $member->faculty }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="text-gray-800 dark:text-gray-300">学科</p>
                                </td>
                                <td>
                                    <p class="text-gray-800 dark:text-gray-300">：{{ $member->department }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="text-gray-800 dark:text-gray-300">学年</p>
                                </td>
                                <td>
                                    <p class="text-gray-800 dark:text-gray-300">：{{ $member->grade }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="{{ route('members.edit', $member) }}"
                                        class="text-blue-500 hover:text-blue-700">編集</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-app-layout>