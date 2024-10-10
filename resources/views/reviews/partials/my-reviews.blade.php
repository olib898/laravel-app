<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('My reviews') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("These are all of the reviews you have left on products") }}
        </p>
    </header>
        @if(count($reviews) < 1)
            <p>You haven't left any reviews yet!</p>
        @else
            <table class="w-full text-sm text-left rtl:text-right text-gray-900 dark:text-white mt-4">
                <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3">Title</th>
                        <th scope="col" class="px-6 py-3">Description</th>
                        <th scope="col" class="px-6 py-3">Rating</th>
                        <th scope="col" class="px-6 py-3">Last Updated</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($reviews as $review)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ $review['title'] }}</td>
                        <td class="px-6 py-4">{{ substr($review['description'],0, 25) }}...</th>
                        <td class="px-6 py-4">{{ $review['rating'] }}</th>
                        <td class="px-6 py-4">{{ $review['updated_at'] }}</th>
                    </tr>
                @endforeach
                </tbody>

            </table>
        @endif
</section>
