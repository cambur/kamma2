<div class="">
    <div class="bg-white max-w-lg mx-auto shadow-md rounded px-8 pt-6 pb-8 mt-4">
        @if ($success)
            {{ $success }}
        @else
            <div class="flex mb-4">
                <div class="w-full h-12">
                    <h2 class="text-xl font-bold">Send to a friend</h2>
                    <p class="text-gray-500 text-xs pt-2">Share this great deal with friends!</p>
                </div>
            </div>

            <form class="" wire:submit.prevent="sentToFriend">
                <div class="flex mb-4 w-full">
                    <div class="w-1/6"></div>
                    <div class="w-2/6">
                        <label class="block text-black text-sm text-right pr-5 font-bold mb-2" for="your_name">
                            Your name *
                        </label>
                    </div>
                    <div class="w-1/2">
                        <input
                            class="appearance-none border w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline"
                            id="your_name"
                            type="text"
                            wire:model="your_name">
                        @error('your_name')
                        <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex mb-4 w-full">
                    <div class="w-1/6"></div>
                    <div class="w-2/6">
                        <label class="block text-black text-sm text-right pr-5 font-bold mb-2" for="friends_name">
                            Friend's name *
                        </label>
                    </div>
                    <div class="w-1/2">
                        <input
                            class="appearance-none border w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline"
                            id="friends_name"
                            type="text"
                            wire:model="friends_name">
                        @error('friends_name')
                        <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex mb-4 w-full">
                    <div class="w-1/6"></div>
                    <div class="w-2/6">
                        <label class="block text-black text-sm text-right pr-5 font-bold mb-2" for="friends_email">
                            Friend's email *
                        </label>
                    </div>
                    <div class="w-1/2">
                        <input
                            class="appearance-none border w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline"
                            id="friends_email"
                            type="text"
                            wire:model="friends_email">
                        @error('friends_email')
                        <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex mb-4 w-full">
                    <div class="w-1/2"></div>
                    <div class="w-1/2">
                        <button class="hover:font-bold text-black inline-flex items-center"
                                type="submit">
                            <svg viewBox="0 0 16 16"
                                 class="fill-current w-4 h-4 mr-2 bi bi-arrow-right-square-fill"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="fill: #1e7372">
                                <path fill-rule="evenodd"
                                      d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 8.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z"/>
                            </svg>
                            <span>SUBMIT</span>
                        </button>
                    </div>
                </div>
            </form>
        @endif
    </div>
</div>
