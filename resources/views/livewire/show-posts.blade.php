<div >
    @foreach ($posts as $post)
    <div class="card text-center my-3 mx-auto" style="width: 30rem" wire:key="{{ $post->id }}">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">

      <h5 class="card-title">{{ $post->title }}</h5>
      <p class="card-text">{{ $post->content }}</p>
      <button class="btn btn-danger" wire:confirm="Are you sure you want to delete this post?" wire:click="delete({{ $post->id }})">Delete</button>
    </div>
    <div class="card-footer text-body-secondary">
      2 days ago
    </div>
  </div>
  @endforeach
</div>

@assets
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
@endassets