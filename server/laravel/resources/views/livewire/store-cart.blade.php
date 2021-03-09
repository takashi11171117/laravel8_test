<form wire:submit.prevent="storeCart" class="my-4" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <x-button class="mt-3">
        Add to cart
    </x-button>
</form>
