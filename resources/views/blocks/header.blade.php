<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4">Simple header</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ route('projects.index') }}" class="nav-link">Projects</a></li>
            <li class="nav-item"><a href="{{ route('releases.index') }}" class="nav-link">Releases</a></li>
            <li class="nav-item"><a href="{{ route('features.index') }}" class="nav-link">Features</a></li>
        </ul>
    </header>
</div>
