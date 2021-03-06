@extends('master')
@section('title')
Profil Petugas DC | JMDC Visitor
@endsection
<?php 
$user = Session::get('user');
?>
@section('content')
<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
          <img src="assets/img/logo-landscape.png" height="70" alt="View Badge User" data-app-dark-img="logo.png" data-app-light-img="logo.png"/>
          </div>

          <div class="menu-inner-shadow"></div>
          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="{{route('approval-check-in')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-fingerprint"></i>
                <div data-i18n="Analytics">Approval Check In</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{route('approval-registrasi')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-edit"></i>
                <div data-i18n="Analytics">Approval Registrasi</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{route('manajemen-petugas')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-pin"></i>
                <div data-i18n="Analytics">Manajemen Petugas DC</div>
              </a>
            </li>
            <li class="menu-item active">
              <a href="{{route('profil-petugas-dc')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Profil</div>
              </a>
            </li>
            
          </ul>
          
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              
                <div class="navbar-nav align-items-center">
                    <div class="nav-item d-flex align-items-center">
                        <b>JASA MARGA DATA CENTER VISITOR</b>
                    </div>
                </div>
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="{{route('profil-petugas-dc')}}">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{$user}}</span>
                            <small class="text-muted">Petugas Data Center</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4> -->

              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="assets/img/avatars/1.png"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                            />
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>

                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="form-edit-profil-petugas" action="{{route('edit-profil-petugas-dc')}}" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="row">
                          <input type="hidden" id="edit_id_petugas" name="edit_id_petugas" value="{{$PetugasDC['id_petugas']}}">
                          <div class="mb-3 col-md-6">
                            <label for="nama_lengkap_petugas" class="form-label">Nama Lengkap</label>
                            <input
                              class="form-control"
                              type="text"
                              id="edit_nama_lengkap_petugas"
                              name="edit_nama_lengkap_petugas"
                              value="{{$PetugasDC['nama_lengkap_petugas']}}"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="edit_npp_petugas" class="form-label">NPP</label>
                            <input class="form-control" type="text" name="edit_npp_petugas" id="edit_npp_petugas" value="{{$PetugasDC['npp_petugas']}}"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email_petugas" class="form-label">E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              id="edit_email_petugas"
                              name="edit_email_petugas"
                              value="{{$PetugasDC['email_petugas']}}" readonly
                            />
                          </div>
                          
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="nomor_hp_petugas">Nomor HP</label>
                            <div class="input-group input-group-merge">
                              <!-- <span class="input-group-text">ID (+62)</span> -->
                              <input
                                type="text"
                                id="edit_nomor_hp_petugas"
                                name="edit_nomor_hp_petugas"
                                class="form-control"
                                value="{{$PetugasDC['nomor_hp_petugas']}}"
                              />
                            </div>
                          </div>
                          
                          
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                 
                </div>
              </div>
            </div>
            <!-- / Content -->
@endsection