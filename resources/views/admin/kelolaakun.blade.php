@extends('layouts.appmaster')

@section('style')
<style>
    #filter-form-kelolaakun{
        display :none;
    }
    #add-form-kelolaakun{
        display :none;
    }
    #upload-form-kelolaakun{
        display :none;
    }
    #edit-form-kelolaakun{
        display :none;
    }
</style>

@endsection

@section('content')


        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Sewa Aula</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.kelolaakun') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kelola Akun</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.kelolaRuangAula') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Sewa</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.transaksi') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Transaksi</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.laporan') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Laporan</span></a>
            </li>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name;}}</span>
                                {{-- <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg"> --}}
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


                        <!-- FILTER FORM -->
                        <div class="card mb-4" id="filter-form-kelolaakun">
                            <div class="card-header">
                                FILTER FORM
                            </div>
                            <div class="card-body">
                                This card uses Bootstrap's default styling with no utility classes added. Global
                                styles are the only things modifying the look and feel of this default card example.
                            </div>
                            <div class="card-footer">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" id="filterShowForm" class="btn btn-danger"><i class="fas fa-solid fa-search"></i> Filter</button>
                                    <button type="button" class="btn btn-success"><i class="fas fa-solid fa-file-pdf"></i> Export</button>
                                    <button type="button" class="btn btn-danger" id="cancel-button-filter"><i class="fas fa-solid fa-file-pdf"></i> Cancel</button>
                                </div>
                            </div>
                        </div>


                        <!-- ADD FORM -->
                        <div class="card mb-4" id="add-form-kelolaakun">
                            <div class="card-header">
                                ADD FORM
                            </div>
                            <div class="card-body">
                                <form action="{{ route('adminKelolaAkunStore') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="name"  />
                                    </div>
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" name="email"  />
                                    </div>
                                    <div class="form-group">
                                        <label for="desc_info">Batch</label>
                                        <select class="form-control" name="is_admin" id="is_admin">
                                            <option value="">-- Select Batch --</option>
                                            @foreach ($userlist as $ul)
                                                <option value="{{ $ul->is_admin }}">
                                                    @if($ul->is_admin == 0 )
                                                    Admin
                                                    @elseif($ul->is_admin == 1 )
                                                    Kepala Puskesmas
                                                    @else
                                                    Reservator
                                                    @endif

                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input class="form-control" type="password" name="password" />
                                    </div>
                                    {{-- <div class="form-group">
                                        <label>Level <span class="text-danger">*</span></label>
                                        {{-- <select class="form-control" name="is_admin" value=""/> --}}
                                        {{-- @foreach($levels as $key => $val)
                                        @if($key==old('level'))
                                        <option value="{{ $key }}" selected>{{ $val }}</option>
                                        @else
                                        <option value="{{ $key }}">{{ $val }}</option>
                                        @endif
                                        @endforeach --}}
                                        {{-- </select>
                                    </div>  --}}
                                    <div class="form-group">
                                        <button class="btn btn-primary">Simpan</button>
                                        <a class="btn btn-danger" href="{{ route('admin.kelolaakun') }}">Kembali</a>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>


                        <!-- UPLOAD FILE FORM -->
                        <div class="card mb-4" id="upload-form-kelolaakun">
                            <div class="card-header">
                                UPLOAD FILE FORM
                            </div>
                            <div class="card-body">
                                <input  type="file" name="file" class="form-control file">
                            </div>
                            <div class="card-footer">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" id="" class="btn btn-danger"><i class="fas fa-solid fa-search"></i> UPLOAD</button>
                                    <button type="button" class="btn btn-danger" id="cancel-button-upload"><i class="fas fa-solid fa-file-pdf"></i> Cancel</button>
                                </div>
                            </div>
                        </div>

                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                                <button type="button" class="btn btn-success" id="button-add-kelolaakun"><i class="fas fa-plus"></i> Tambah Data</button>
                        </div>
                    <!-- Content Row -->

                    <div class="row">

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Kelola Akun</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($use as $u)
                                            <tr>
                                                <td>{{ $u->name }}</td>
                                                <td>{{ $u->email }}</td>
                                                <td>
                                                    @if($u->is_admin == 0)
                                                    <span class="badge bg-primary">Admin</span>
                                                    @elseif($u->is_admin == 1)
                                                    <span class="badge bg-secondary ">Kepala Puskesmas</span>
                                                    @else
                                                    <span class="badge bg-info ">Reservator</span>
                                                    @endif

                                                </td>
                                                <td>
                                                    <button  class="btn btn-primary btn-sm">Edit</button>
                                                    <a href="{{ route('adminKelolaAkunDestroy', auth()->user()->nickname) }}" class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                            {{-- @empty
                                            <div class="alert alert-danger">
                                                Data Pengguna belum Tersedia.
                                            </div>
                                        @endforelse --}}
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>





                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection

@section('script')
    <script>

        // Show and Hide Filter Form
    $(document).ready(function() {
        $("#button-filter-kelolaakun").click(function() {
            $("#filter-form-kelolaakun").toggle();
            $("#btn-group").hide();
        });
    });

        // Show and Hide Add Form
    $(document).ready(function() {
        $("#button-add-kelolaakun").click(function() {
            $("#add-form-kelolaakun").toggle();
            $("#btn-group").hide();
        });
    });

        // Show and Hide Upload Form
    $(document).ready(function() {
        $("#button-upload-kelolaakun").click(function() {
            $("#upload-form-kelolaakun").toggle();
            $("#btn-group").hide();
        });
    });

        // Cancel-filter
    $(document).ready(function() {
        $("#cancel-button-filter").click(function() {
            $("#btn-group").show();
            $("#filter-form-kelolaakun").hide();
        });
    });

        // Cancel-add
    $(document).ready(function() {
        $("#cancel-button-add").click(function() {
            $("#btn-group").show();
            $("#add-form-kelolaakun").hide();
        });
    });

        // Cancel-upload
    $(document).ready(function() {
        $("#cancel-button-upload").click(function() {
            $("#btn-group").show();
            $("#upload-form-kelolaakun").hide();
        });
    });

    </script>
@endsection
