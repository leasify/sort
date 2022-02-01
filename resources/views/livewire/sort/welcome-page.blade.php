<div>

    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <div>
        <div class="sm:hidden">
            <label for="tabs" class="sr-only">Select a tab</label>
            <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
            <select id="tabs" name="tabs"
                class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                <option>My Account</option>

                <option>Company</option>

                <option selected>Team Members</option>

                <option>Billing</option>
            </select>
        </div>
        <div class="hidden sm:block">
            <div class="border-b border-gray-200">
                <nav class="flex -mb-px space-x-8" aria-label="Tabs">
                    <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                    <a href="#"
                        class="inline-flex items-center px-1 py-4 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300 group">
                        <!--
            Heroicon name: solid/user

            Current: "text-indigo-500", Default: "text-gray-400 group-hover:text-gray-500"
          -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="text-gray-400 group-hover:text-gray-500 -ml-0.5 mr-2 h-5 w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                        </svg>
                        <span>Mina sidor</span>
                    </a>

                    <a href="#"
                        class="inline-flex items-center px-1 py-4 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300 group">
                        <!-- Heroicon name: solid/office-building -->
                        <svg class="text-gray-400 -ml-0.5 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path
                                d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                        </svg>
                        <span>Bolaget</span>
                    </a>

                    <a href="#"
                        class="inline-flex items-center px-1 py-4 text-sm font-medium text-blue-500 border-b-2 border-blue-500 group"
                        aria-current="page">
                        <!-- Heroicon name: solid/users -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 -ml-0.5 mr-2 h-5 w-5"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Min översikt</span>
                    </a>

                    <a href="#"
                        class="inline-flex items-center px-1 py-4 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="text-gray-400 group-hover:text-gray-500 -ml-0.5 mr-2 h-5 w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Ny dashboard</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>



    <div aria-label="group of cards" tabindex="0" class="w-full py-8 focus:outline-none">
        <div class="grid grid-cols-3 gap-3" wire:sortable="updateTaskOrder">

            @foreach ($cards as $card)
                <livewire:sort.card :card="$card" />
            @endforeach

        </div>
    </div>

</div>
