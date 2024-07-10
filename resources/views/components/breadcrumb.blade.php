<div class="file-link">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url()->previous() }}">{{ $previous_file }}</a></li>
            <li class="breadcrumb-item" ><a href=" {{ url()->current() }} "> {{ $current_url }}</a></li>
            {{ $slot }}
        </ol>
      </nav>
 </div>