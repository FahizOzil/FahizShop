<div class="file-link" style="top:34px">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route("home-page") }}"> Home   </a></li>
            <li class="breadcrumb-item active" ><a class="active" href="{{ url()->current() }} "> {{ pathinfo(url()->current() , PATHINFO_FILENAME) }}</a></li>
            {{ $slot }}
        </ol>
      </nav>
 </div>