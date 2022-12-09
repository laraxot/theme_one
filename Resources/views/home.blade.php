<x-app-layout>
    <!-- Simple Bootstrap Alert-->
    <div class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
    </div>

    <livewire:slideover.search />

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

 
    <button  class="btn btn-primary" onclick="Livewire.emit('slide-over.open', 'slideover.search')">Open</button>

    <livewire:broad />broad
    
</x-app-layout>
