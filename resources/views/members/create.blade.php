<!-- resources/views/tweets/create.blade.php -->

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
          <form method="POST" action="{{ route('members.store') }}">
            @csrf
            <div class="mb-4">
              <label for="studentID" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">学籍番号</label>
              <input type="text" name="studentID" id="studentID" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="name" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">名前</label>
              <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="nickname" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">ニックネーム</label>
              <input type="text" name="nickname" id="nickname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="faculty" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">学部</label>
              <input type="text" name="faculty" id="faculty" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="department" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">学科</label>
              <input type="text" name="department" id="department" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="grade" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">学年</label>
              <input type="number" name="grade" id="grade" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              @error('member')
              <span class="text-red-500 text-xs italic">{{ $message }}</span>
              @enderror
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">追加</button>
          </form>

            @if (session('success'))
            <br>
             <div class="text-gray-600 dark:text-gray-400 text-sm">
            {{ session('success') }}
            </div>
            @endif

            @if (session('error'))
            <br>
            <div class="text-gray-600 dark:text-gray-400 text-sm">
            {{ session('error') }}
            </div>
            @endif
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
