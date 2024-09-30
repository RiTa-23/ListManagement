<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('メンバー検索') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">

          <!-- 検索フォーム -->
          <form action="{{ route('members.search') }}" method="GET" class="mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <!-- 各フィールドごとの検索条件 -->
              <div>
                <input type="text" name="studentID" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="学籍番号" value="{{ request('studentID') }}">
              </div>
              <div>
                <input type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="名前" value="{{ request('name') }}">
              </div>
              <div>
                <input type="text" name="nickname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="ニックネーム" value="{{ request('nickname') }}">
              </div>
              <div>
                <input type="text" name="faculty" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="学部" value="{{ request('faculty') }}">
              </div>
              <div>
                <input type="text" name="department" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="学科" value="{{ request('department') }}">
              </div>
              <div>
                <input type="text" name="grade" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="学年" value="{{ request('grade') }}">
              </div>
            </div>
            <div class="mt-4">
              <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700">
                検索
              </button>
            </div>
          </form>

          <!-- 検索結果表示 -->
          @if ($members->count())
            <!-- ページネーション -->
            <div class="mb-4">
              {{ $members->appends(request()->input())->links() }}
            </div>

            @foreach ($members as $member)
              <div class="mb-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                <!-- メンバー情報表示 -->
                <table>
                  <tr><td><p class="text-gray-800 dark:text-gray-300">学籍番号</p></td><td><p class="text-gray-800 dark:text-gray-300">：{{ $member->studentID }}</p></td></tr>
                  <tr><td><p class="text-gray-800 dark:text-gray-300">名前</p></td><td><p class="text-gray-800 dark:text-gray-300">：{{ $member->name }}</p></td></tr>
                  <tr><td><p class="text-gray-800 dark:text-gray-300">ニックネーム</p></td><td><p class="text-gray-800 dark:text-gray-300">：{{ $member->nickname }}</p></td></tr>
                  <tr><td><p class="text-gray-800 dark:text-gray-300">学部</p></td><td><p class="text-gray-800 dark:text-gray-300">：{{ $member->faculty }}</p></td></tr>
                  <tr><td><p class="text-gray-800 dark:text-gray-300">学科</p></td><td><p class="text-gray-800 dark:text-gray-300">：{{ $member->department }}</p></td></tr>
                  <tr><td><p class="text-gray-800 dark:text-gray-300">学年</p></td><td><p class="text-gray-800 dark:text-gray-300">：{{ $member->grade }}</p></td></tr>
                  <tr><td><a href="{{ route('members.edit', $member) }}" class="text-blue-500 hover:text-blue-700">編集</a></td></tr>
                </table>
              </div>
            @endforeach

            <!-- ページネーション -->
            <div class="mt-4">
              {{ $members->appends(request()->input())->links() }}
            </div>
          @else
            <p>No members found.</p>
          @endif
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
