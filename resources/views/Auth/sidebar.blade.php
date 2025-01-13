<!-- resources/views/partials/sidebar.blade.php -->
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 100vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <span class="fs-4">My Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link {{ request()->routeIs('login') ? 'active' : 'link-dark' }}">
                <i class="bi bi-house"></i> Home
            </a>
        </li>
      
    </ul>
    <hr>
</div>
