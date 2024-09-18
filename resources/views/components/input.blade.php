@props(['name'])

<input name="{{$name}}"  {{$attributes}} >
<div>

    @error($name) <p class="text-danger">{{ $message }}</p> @enderror 
</div>