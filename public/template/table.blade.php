<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <!-- Header + tombol create -->
    <div class="flex items-center justify-between p-5 bg-white dark:bg-gray-800 border-b dark:border-gray-700">
        <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Our Products</h2>
        <a href="{{ url('/products/create') }}"
            class="inline-block px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600">
            + Create Product
        </a>
    </div>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Product name</th>
                <th scope="col" class="px-6 py-3">Color</th>
                <th scope="col" class="px-6 py-3">Category</th>
                <th scope="col" class="px-6 py-3">Price</th>
                <th scope="col" class="px-6 py-3 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">Silver</td>
                <td class="px-6 py-4">Laptop</td>
                <td class="px-6 py-4">$2999</td>
                <td class="px-6 py-4 flex justify-center gap-4">
                    <a href="#"
                        class="inline-flex items-center px-3 py-1 text-sm font-medium text-blue-600 rounded-lg hover:underline dark:text-blue-400">
                        Edit
                    </a>
                    <a href="#" onclick="return confirm('Are you sure you want to delete this item?')"
                        class="inline-flex items-center px-3 py-1 text-sm font-medium text-red-600 rounded-lg hover:underline dark:text-red-400">
                        Delete
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
