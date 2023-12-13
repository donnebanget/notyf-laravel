<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <div class="flex items-center text-green-600 font-semibold">
                            <span class="text-sm">
                                {{ __('Saved!') }}
                            </span>
                        </div>
                    @endif
                    <form wire:submit="updateProfile" class="flex flex-col gap-4">
                        <x-input label="Name" name="name" wire:model="name" />
                        <x-input label="Email" name="email" wire:model="email" />
                        <x-button primary type="submit" spinner="updateProfile">Save</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
