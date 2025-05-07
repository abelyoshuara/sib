<x-layout title="Buku">
  <div class="container my-8">
    <h1 class="text-3xl font-bold mb-4">
      Book Page
    </h1>

    <div
      class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl p-4 md:p-5 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
      <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
              <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                <thead>
                  <tr>
                    <th scope="col"
                      class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                      No
                    </th>
                    <th scope="col"
                      class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                      Title
                    </th>
                    <th scope="col"
                      class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                      Author</th>
                    <th scope="col"
                      class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($books as $book)
                    <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                        {{ $loop->iteration }}
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                        {{ $book->title }}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                        {{ $book->author }}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <button type="button"
                          class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                        <button type="button"
                          class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                        <button type="button"
                          class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>
