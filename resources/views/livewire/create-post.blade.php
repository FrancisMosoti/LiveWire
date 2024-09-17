@assets
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
@endassets


<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card mx-auto mt-5" style="width: 40rem;">
        <div class="card-header">
            <h5 class="card-title text-center">Create Post</h5>
        </div>
        <div class="card-body ">
            <form wire:submit.prevent="save">
                <label for="title">Post Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model="title"  placeholder="Post Title...">
            @error('title') <p class="text-danger">{{ $message }}</p> @enderror 
            
            
            <div class="form-floating my-3">
                <textarea class="form-control  @error('content') is-invalid @enderror" wire:model="content"  id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Post Body</label>
                @error('content') <p class="text-danger">{{ $message }}</p> @enderror
              </div>

            {{-- <input type="text" wire:model="todo" placeholder="Todo..." class="col-8">  --}}
     
            <div>
                <button type="submit" class="col-3 btn btn-success">Add Post</button>
                <span wire:loading>Saving...</span>
                {{-- <button type="button" class="col-3 btn btn-success" wire:click="$refresh">Refresh</button> --}}
                
            </div>
            </form>

       

               
        </div>
        <div class="card-footer">
            &copy; All rights reserved @ 2024
        </div>
      </div>
    <div>
        
     
        
    </div>
</div>
