<div>
    <h1>Create post page</h1>
    <p>Care about people's approval and you will be their prisoner. </p>

    <form wire:submit="save">
        <div>
            <label for="title">Title:</label>
     
            <input type="text" id="title" wire:model="title"> 
        </div>

        <div>
            <label for="body">Body:</label>
     
            <input type="text" id="body" wire:model="body"> 
        </div>
        <div>
            <button type="submit">Save</button>
        </div>
         
    </form>
</div>
