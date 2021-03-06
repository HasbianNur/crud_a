<div class="navbar-main">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/">Hasbi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Posts") ? 'active' : '' }}" href="/posts">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Biodata") ? 'active' : '' }}" href="/biodata">Biodata</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link {{ ($title === "Galeri") ? 'active' : '' }}" href="/galeri">Galeri</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Data Siswa") ? 'active' : '' }}" href="/siswa">Data Siswa</a>
            </li>
          </ul>
        </div>
      </nav>
</div>