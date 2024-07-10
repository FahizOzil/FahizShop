<div class="mb-2">
    <label for="" class="form-label"> {{ $label }} </label>
    <input class="form-control"  {{ $attributes->merge(["type" => "text" ]) }}>
    {{ $slot }}
</div>
