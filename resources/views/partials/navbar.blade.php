
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand">ADMIN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{  ($title === "Home") ? 'active' : '' }}"href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{  ($title === "Transaksi") ? 'active' : '' }}" href="/transaksi">Transaksi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{  ($title === "Laporan") ? 'active' : '' }}" href="/laporan">Laporan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{  ($title === "About") ? 'active' : '' }}" href="/about"> Tentang</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
