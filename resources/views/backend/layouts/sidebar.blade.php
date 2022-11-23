<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items justify-content" href="{{route('admin')}}">
      <div class="sidebar-brand-text mx-3">Admin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item ">
      <a class="nav-link collapsed" href="{{route('admin')}}">Dashboard</a>
    </li>
    <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Shop
        </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('category.index')}}">Category</a>       
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('product.index')}}">Products</a>        
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('brand.index')}}">Brands- Producer</a>       
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('order.index')}}">
            Orders
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('coupon.index')}}">
          Coupon</a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('users.index')}}">
          User
      </a>
  </li>

</ul>