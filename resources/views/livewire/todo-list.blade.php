<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card mx-auto mt-5" style="width: 40rem;">
        <div class="card-header">
            <h5 class="card-title text-center">Todo List</h5>
        </div>
        <div class="card-body ">
          <div class="row">
            <input type="text" class="form-control" wire:model="todo"  placeholder="Todo...">

            {{-- <input type="text" wire:model="todo" placeholder="Todo..." class="col-8">  --}}
     
            <button wire:click="add" class="col-3 btn btn-success">Add</button>

          </div>

          <ul class="list-group list-group-flush">
            
            @foreach ($todos as $todo)
            @if($todo)
                <li class="list-group-item">-{{ $todo }}</li>
            @endif
            @endforeach
          </ul>       
        </div>
        <div class="card-footer">
            &copy; All rights reserved @ 2024
        </div>
      </div>
    <div>
        
     
        
    </div>
</div>

@assets
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
@endassets
