<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('add-product')}}">
          <i class="mdi mdi-view-dashboard menu-icon"></i>
          <span class="menu-title">Add Products</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('view_products')}}">
          <i class="mdi mdi-plus menu-icon"></i>
          <span class="menu-title">View Products</span>
        </a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="{{asset('Documentation-Majestic.pdf')}}">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
    </ul>
  </nav>