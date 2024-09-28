<!-- resources/views/tweets/edit.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('メンバー編集') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <a href="{{ route('members.index', $member) }}" class="text-blue-500 hover:text-blue-700 mr-2">メンバーリストに戻る</a>
          <form method="POST" action="{{ route('members.update', $member) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
              <label for="studentID" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">学籍番号</label>
              <input type="text" name="studentID" id="studentID" value="{{$member->studentID}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="name" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">名前</label>
              <input type="text" name="name" id="name" value="{{$member->name}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="nickname" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">ニックネーム</label>
              <input type="text" name="nickname" id="nickname" value="{{$member->nickname}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="faculty" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">学部</label>
              <input type="text" name="faculty" id="faculty" value="{{$member->faculty}}"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="department" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">学科</label>
              <input type="text" name="department" id="department" value="{{$member->department}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="grade" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">学年</label>
              <input type="number" name="grade" id="grade" value="{{$member->grade}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              @error('member')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
              @enderror
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
