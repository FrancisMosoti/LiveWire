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
                <x-input name="title" type='text' wire:model.blur="title" id="title" class="form-control {{$errors->has('title')? 'is-invalid':'is-valid'}}" placeholder="Post Title..."/> 

                    <div class="mb-3">
                        
                        <label for="formFile" class="form-label">Post Photo</label>
                        <div>
                            @if ($photo) 
                            <img src="{{ $photo->temporaryUrl() }}" width="100px" height="100px">
                        @endif
                        </div>
                        <div
        x-data="{ uploading: false, progress: 0 }"
        x-on:livewire-upload-start="uploading = true"
        x-on:livewire-upload-finish="uploading = false"
        x-on:livewire-upload-cancel="uploading = false"
        x-on:livewire-upload-error="uploading = false"
        x-on:livewire-upload-progress="progress = $event.detail.progress"
    >


                        <x-input class="form-control {{$errors->has('photo')? 'is-invalid':'is-valid'}}" wire:model.blur="photo" name="photo" type="file" id="formFile" />
                            <!-- Progress Bar -->
                            <div class="progress mt-2" x-show="uploading" role="progressbar" aria-label="Success example" aria-valuemin="0" aria-valuemax="100">
                                <progress class="progress-bar bg-success"  max="100" x-bind:value="progress"></progress>
                                {{-- <div class="progress-bar bg-success" max="100" x-bind:value="progress"></div> --}}
                              </div>
        {{-- <div x-show="uploading">
            <progress max="100" x-bind:value="progress"></progress>
        </div> --}}
                            <div wire:loading wire:target="photo">Uploading...</div>
                       
                      </div>
            
            
            
            <div class="form-floating my-3">
                <textarea class="form-control  {{$errors->has('content')? 'is-invalid':'is-valid'}}" wire:model.blur="content"  id="floatingTextarea2" style="height: 100px"></textarea>
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
