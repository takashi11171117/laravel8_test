<form wire:submit.prevent="destroyCart" method="post">
    @csrf
    @method('DELETE')
    <button class="text-indigo-500">Remove</button>
</form>
