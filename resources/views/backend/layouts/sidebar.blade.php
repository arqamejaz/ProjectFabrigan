  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>Accessories</p>
                <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin.addaccessory') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Accessory</p>
                    <i class="right fas fa-angle-left"></i>
                  </a>
                  <a href="{{ route('admin.listaccessories') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Accessories</p>
                    <i class="right fas fa-angle-left"></i>
                  </a>
                </li>
              </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Catalogues
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('admin.addcatalogue') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Catalogue</p>
                    <i class="right fas fa-angle-left"></i>
                  </a>
                  <a href="{{ route('admin.listcatalogues') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Catalogues</p>
                    <i class="right fas fa-angle-left"></i>
                  </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Categories
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('admin.addcategory') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Category</p>
                    <i class="right fas fa-angle-left"></i>
                  </a>
                  <a href="{{ route('admin.listcategories') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Categories</p>
                    <i class="right fas fa-angle-left"></i>
                  </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Products
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('admin.addproduct') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Product</p>
                    <i class="right fas fa-angle-left"></i>
                  </a>
                  <a href="{{ route('admin.listproducts') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Products</p>
                    <i class="right fas fa-angle-left"></i>
                  </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Events
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('admin.addevent') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Event</p>
                    <i class="right fas fa-angle-left"></i>
                  </a>
                  <a href="{{ route('admin.listevents') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Events</p>
                    <i class="right fas fa-angle-left"></i>
                  </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Media
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('admin.addmedia') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Media</p>
                    <i class="right fas fa-angle-left"></i>
                  </a>
                  <a href="{{ route('admin.listmedia') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Media</p>
                    <i class="right fas fa-angle-left"></i>
                  </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>Sliders</p>
                <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.addslider') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Slider</p>
                        <i class="right fas fa-angle-left"></i>
                      </a>
                      <a href="{{ route('admin.listsliders') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Sliders</p>
                        <i class="right fas fa-angle-left"></i>
                      </a>
                </li>
              </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>Why Choose Us</p>
                <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.choose') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Image</p>
                        <i class="right fas fa-angle-left"></i>
                      </a>
                      <a href="{{ route('admin.listsliders') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Images</p>
                        <i class="right fas fa-angle-left"></i>
                      </a>
                </li>
              </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>Settings</p>
                <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.settings') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>General</p>
                        <i class="right fas fa-angle-left"></i>
                      </a>
                      <a href="{{ route('admin.aboutus') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>About Us</p>
                        <i class="right fas fa-angle-left"></i>
                      </a>
                      <a href="{{ route('admin.contactus') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Contact Us</p>
                        <i class="right fas fa-angle-left"></i>
                      </a>
                </li>
              </ul>
        </li>
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="nav-link btn btn-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>Logout</p>
                </button>
            </form>
        </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
