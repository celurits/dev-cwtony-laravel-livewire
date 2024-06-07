<!-- Form container with max-width: md and centered -->
<div class="max-w-md mx-auto p-4 bg-white rounded shadow-md">
    <form wire:submit="save">
        <!-- Title input field -->
        <div class="mb-4">
            <x-label for="title" value="Title" />
            <x-input id="title" wire:model="title" />
        </div>

        <!-- Slug input field -->
        <div class="mb-4">
            <x-label for="slug" value="Slug" />
            <x-input id="slug" wire:model="slug" />
        </div>

        <!-- Description textarea -->
        <div class="mb-4">
            <x-label for="description" value="Deskripsi" />
            <x-textarea id="description" wire:model="description" />
        </div>

        <!-- Status select field -->
        <div class="mb-4">
            <x-label for="status" value="Status" />
            <x-select id="status" wire:model="status">
                @foreach (\App\Enums\StatusType::cases() as $status)
                    <option value="{{ $status->value }}">{{ $status->name }}</option>
                @endforeach
            </x-select>
        </div>

        <!-- Priority select field -->
        <div class="mb-4">
            <x-label for="prioruty" value="Priority" />
            <x-select id="priority" wire:model="priority">
                @foreach (\App\Enums\PriorityType::cases() as $priority)
                    <option value="{{ $priority->value }}">{{ $priority->name }}</option>
                @endforeach
            </x-select>
        </div>

        <!-- Deadline -->
        <div class="mb-4">
            <x-label for="deadline" value="Deadline" />
            <x-input type="date" id="deadline" wire:model="deadline" />
        </div>

        <!-- Submit button -->
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

</div>
