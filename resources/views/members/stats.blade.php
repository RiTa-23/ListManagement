<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('メンバー集計') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">

          <!-- 全体の人数表示 -->
          <h3 class="text-lg font-semibold">全体の人数</h3>
          <p>{{ $totalMembers }} 人</p>

          <!-- 学年ごとの人数表示 -->
          <h3 class="text-lg font-semibold mt-4">学年ごとの人数</h3>
          <table class="table-auto w-full">
            <thead>
              <tr>
                <th class="px-4 py-2">学年</th>
                <th class="px-4 py-2">人数</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($membersByGrade as $grade)
              <tr>
                <td class="border px-4 py-2">{{ $grade->grade }}</td>
                <td class="border px-4 py-2">{{ $grade->total }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <!-- 学部ごとの人数表示 -->
          <h3 class="text-lg font-semibold mt-4">学部ごとの人数</h3>
          <table class="table-auto w-full">
            <thead>
              <tr>
                <th class="px-4 py-2">学部</th>
                <th class="px-4 py-2">人数</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($membersByFaculty as $faculty)
              <tr>
                <td class="border px-4 py-2">{{ $faculty->faculty }}</td>
                <td class="border px-4 py-2">{{ $faculty->total }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <!-- 学科ごとの人数表示 -->
          <h3 class="text-lg font-semibold mt-4">学科ごとの人数</h3>
          <table class="table-auto w-full">
            <thead>
              <tr>
                <th class="px-4 py-2">学科</th>
                <th class="px-4 py-2">人数</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($membersByDepartment as $department)
              <tr>
                <td class="border px-4 py-2">{{ $department->department }}</td>
                <td class="border px-4 py-2">{{ $department->total }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
