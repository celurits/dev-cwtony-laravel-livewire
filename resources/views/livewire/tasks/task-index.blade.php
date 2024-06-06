<!-- Form container with max-width: md and centered -->
<div class="max-w-md mx-auto p-4 bg-white rounded shadow-md">
    <form>
        <!-- Title input field -->
        <div class="mb-4">
            <x-input-label for="title" value="Title" />
            <x-text-input id="title" />
        </div>

        <!-- Slug input field -->
        <div class="mb-4">
            <x-input-label for="slug" value="Slug" />
            <x-text-input id="slug" />
        </div>

        <!-- Description textarea -->
        <div class="mb-4">
            <x-input-label for="description" value="Deskripsi" />
            <x-text-area id="description" />
        </div>

        <!-- Status select field -->
        <div class="mb-4">
            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
            <select id="status"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Select status</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>

        <!-- Priority select field -->
        <div class="mb-4">
            <label for="priority" class="block text-gray-700 text-sm font-bold mb-2">Priority</label>
            <select id="priority"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Select priority</option>
                <option value="high">High</option>
                <option value="medium">Medium</option>
                <option value="low">Low</option>
            </select>
        </div>

        <!-- Submit button -->
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

</div>
