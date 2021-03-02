<div>
  <div class="flex">
    <div class="flex-shrink-0 mr-4">
      <img class="h-10 w-10 rounded-full" src="{{ $comment->user->avatar() }}" alt="{{ $comment->user->name }}">
    </div>
    <div class="flex-grow">
      <div>
        <a href="#" class="font-medium text-gray-900">{{ $comment->user->name }}</a>
      </div>
      <div class="mt-1 flex-grow w-full">
        <form wire:submit.prevent="editComment">
            <div>
              <label for="comment" class="sr-only">Comment body</label>
            </div>
            <div class="mt-3 flex items-center justify-between">
              <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Edit
              </button>
            </div>
        </form>
      </div>
      <div class="mt-2 space-x-2">
      </div>
    </div>
  </div>

  <div class="ml-14 mt-6">
  </div>
</div>
