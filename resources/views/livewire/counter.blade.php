<div style="text-align: center" class="flex justify-center items-center space-x-8 my-10">
    <button wire:click="decrement" class="text-white bg-indigo-500 p-2 rounded w-12">-</button>
    <h1>{{ $count }}</h1>
    <button wire:click="increment" class="text-white bg-indigo-500 p-2 rounded w-12">+</button>
</div>
