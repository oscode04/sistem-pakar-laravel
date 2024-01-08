 <!-- navbar -->
 <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">Dokter Tanaman</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse justify-content-end"
        id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{route("landing-page")}}"
            >Home</a
          >
          <a class="nav-link ms-lg-4" href="{{ route("information") }}">Informasi Penyakit</a>
          <a class="nav-link ms-lg-4" href="{{route("konsultasi")}}">Konsultasi</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- end navbar -->