<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('New Review') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Add a review to a product that you have recently purchased.") }}
        </p>
    </header>

    <x-validation-errors></x-validation-errors>
    <form method="post" action="{{ route('reviews.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>
        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-area id="description" name="description" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>
        <div>
            <x-input-label for="rating" :value="__('Rating')" />
            <x-text-input id="rating" name="rating" type="number" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('rating')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
