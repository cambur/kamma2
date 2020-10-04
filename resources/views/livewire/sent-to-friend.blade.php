<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @if ($success)
            {{ $success }}
        @else
            <div class="w-full max-w-xs">
                <h2 class="text-xl font-bold">Send to a friend</h2>
                <p>Share this great deal with friends!</p>

                <form class="" wire:submit.prevent="sentToFriend">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="your_name">
                            Your name *
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="your_name"
                            type="text"
                            wire:model="your_name">
                        @error('your_name')
                        <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="friends_name">
                            Friend's name *
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="friends_name"
                            type="text"
                            wire:model="friends_name">
                        @error('friends_name')
                        <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="friends_email">
                            Friend's email *
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="friends_email"
                            type="text"
                            wire:model="friends_email">
                        @error('friends_email')
                        <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        @endif
    </div>
</div>
