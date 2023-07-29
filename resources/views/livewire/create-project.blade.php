<div>
    {{-- In work, do what you enjoy. --}}

    <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-indigo-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
            <div class="relative px-4 py-10 shadow-lg sm:rounded-3xl sm:p-20">
                <form class="space-y-8" wire:submit.prevent="save">
                    <div>
                        @if (session()->has('message'))
                            <div class="p-2 bg-green-300 text-green-800 rounded shadow-sm">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>

                    <div>
                        <x-input wire:model="title" placeholder="Project Title" class="mt-1 block w-full rounded-md shadow-sm text-gray-700 focus:ring-indigo-500 focus:border-indigo-500"></x-input>
                    </div>

                    <div>
                        <x-textarea wire:model="description" placeholder="Project Description" class="mt-1 block w-full rounded-md shadow-sm text-gray-700 focus:ring-indigo-500 focus:border-indigo-500"></x-textarea>
                    </div>

                    <div class="mt-1">
                        <x-button class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>


