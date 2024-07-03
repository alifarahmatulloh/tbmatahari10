<!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title mt-2"></li>

                            <li>
                                <a href="{{ url('/dashboard') }}">
                                    <i class="mdi mdi-view-dashboard-outline"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li class="menu-title mt-2">POS</li>

                            <li>
                                <a href="{{ route('pos.umum') }}">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                    <span> Kasir Umum </span>
                                </a>
                            </li>

                            <li>
                                <a href="#posgrosir">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                    <span> Kasir Grosir </span>
                                </a>
                            </li>


                            <li>
                                <a href="#pengeluaran" data-bs-toggle="collapse">
                                    <i class="mdi mdi-account-circle-outline"></i>
                                    <span> Pengeluaran </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="pengeluaran">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('today.pengeluaran') }}">Daftar Pengeluaran Harian</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('month.pengeluaran') }}">Daftar Pengeluaran Bulanan</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('year.pengeluaran') }}">Daftar Pengeluaran Tahunan</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('add.pengeluaran') }}">Tambah Pengeluaran</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-title mt-2">Manajemen</li>

                            <li>
                                <a href="#employee" data-bs-toggle="collapse">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                    <span> Manajemen Karyawan </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="employee">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.employee') }}">Daftar Karyawan</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('add.employee') }}">Tambah Karyawan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#customer" data-bs-toggle="collapse">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                    <span> Manajemen Customer </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="customer">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.customer') }}">Daftar Customer</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('add.customer') }}">Tambah Customer</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#supplier" data-bs-toggle="collapse">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                    <span> Manajemen Supplier </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="supplier">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.supplier') }}">Daftar Supplier</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('add.supplier') }}">Tambah Supplier</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#kategori" data-bs-toggle="collapse">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                    <span> Kategori Barang </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="kategori">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.kategori') }}">Daftar Kategori Barang</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#barang" data-bs-toggle="collapse">
                                    <i class="mdi mdi-email-multiple-outline"></i>
                                    <span> Manajemen Barang </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="barang">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.barang') }}">Daftar Barang</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('add.barang') }}">Tambah Barang</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('import.barang') }}">Import Barang</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            <li class="menu-title mt-2">Custom</li>

                            

                            <li>
                                <a href="#sidebarExpages" data-bs-toggle="collapse">
                                    <i class="mdi mdi-text-box-multiple-outline"></i>
                                    <span> Extra Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarExpages">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="pages-starter.html">Starter</a>
                                        </li>
                                        <li>
                                            <a href="pages-timeline.html">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="pages-sitemap.html">Sitemap</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->