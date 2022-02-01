<div tabindex="0" aria-label="card {{ $card->id }}" wire:sortable.item="{{ $card->id }}"
    wire:key="card-{{ $card->id }}" class="p-6 bg-white border border-gray-300 rounded shadow-xl focus:outline-none">
    @if (!$editForm)
        <div class="flex items-center pb-6 transition duration-300 ease-in-out delay-700 border-b border-gray-200">
            <img src="https://cdn.tuk.dev/assets/components/misc/doge-coin.png" alt="coin avatar"
                class="w-12 h-12 rounded-full" />
            <div class="flex items-start justify-between w-full">
                <div class="w-full pl-3">
                    <p tabindex="0" class="text-xl font-medium leading-5 text-gray-800 focus:outline-none">
                        {{ $card->name }}</p>
                    <p tabindex="0" class="pt-2 text-sm leading-normal text-gray-500 focus:outline-none">
                        {{ $card->id }}
                        members</p>
                </div>
                <div role="img" aria-label="bookmark" wire:click="startEdit"
                    class="text-gray-300 hover:text-gray-700 hover:cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div role="img" aria-label="bookmark" wire:sortable.handle
                    class="text-gray-300 hover:text-gray-700 hover:cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="px-2">
            <p tabindex="0" class="py-4 text-sm leading-5 text-gray-600 focus:outline-none">
                @if($card->content)
                    {{ $card->content }}
                @else
                A group of people
                interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and
                love. These cases are perfectly simple and easy to distinguish.
                @endif
                </p>
            <div tabindex="0" class="flex focus:outline-none">
                <div class="px-4 py-2 text-xs leading-3 text-blue-700 bg-blue-100 rounded-full">#dogecoin
                </div>
                <div class="px-4 py-2 ml-3 text-xs leading-3 text-indigo-700 bg-blue-100 rounded-full">#crypto
                </div>
            </div>
        </div>
    @else
        <div class="flex items-center transition duration-300 ease-in-out delay-700">
            <form wire:submit.prevent="submit">
                <div class="flex items-start justify-between">
                    <div class="w-80">
                        {{ $this->form }}
                    </div>
                    <button role="img" type="submit" aria-label="bookmark"
                        class="w-16 text-gray-500 hover:text-gray-900 hover:cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    @endif
</div>
