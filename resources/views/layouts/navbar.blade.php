<nav class="main-sidebar ps-menu">
    <div class="sidebar-toggle action-toggle">
        <a href="#">
            <i class="fas fa-bars"></i>
        </a>
    </div>
    <div class="sidebar-opener action-toggle">
        <a href="#">
            <i class="ti-angle-right"></i>
        </a>
    </div>
    <div class="sidebar-header">
        <div class="text">AR</div>
        <div class="close-sidebar action-toggle">
            <i class="ti-close"></i>
        </div>
    </div>
    <div class="sidebar-content">
        <ul>
            <li class="active">
                <a href="index.html" class="link">
                    <i class="ti-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-desktop"></i>
                    <span>Produk</span>
                </a>
                <ul class="sub-menu ">
                    <li><a href="{{route('produk.index')}}" class="link"><span>Data</span></a></li>
                    <li><a href="produk/trash" class="link"><span>trash</span></a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-book"></i>
                    <span>Supplier</span>
                </a>
                <ul class="sub-menu ">
                    <li><a href="form-element.html" class="link">
                            <span>Data</span></a>
                    </li>
                    <li><a href="form-datepicker.html" class="link">
                            <span>jumlah</span></a>
                    </li>
                    <li><a href="form-select2.html" class="link">
                            <span>trash</span></a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
