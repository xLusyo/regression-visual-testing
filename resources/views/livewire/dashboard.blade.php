<div class="container">
    <form wire:submit="scrape" class="flex gap-4 justify-center">
        <input type="url" class="border-2 border-primary-900 px-2 rounded-2xl focus:outline-0" wire:model="website"  placeholder="Enter url...">
        <button type="submit" class="btn-primary">Submit</button>
    </form>
</div>
