<style>
  ::-webkit-scrollbar {
  display: none !important;  /* Chrome, Safari, and Opera */
}

</style>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-light hide-scrollbar" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0 " href="" target="">
        <img src="/img/enggal.gif" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-0 font-weight-bold fs-4 align-middle text-center"  style="font-family: 'Roboto', 'Helvetica', 'Arial', 'sans-serif'; color:#344767;">Rekam Medis</span>
      </a>
    </div>
    <br>
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
          <li class="nav-item d-flex flex-column justify-content-center align-items-center" style="cursor: pointer">
            {{-- <div class="dropdown-btn col-lg-10 d-flex  {{ ($title === 'pendaftaran') ? 'active' : '' }}" style="">
              <div class="item">
                <a class="text-decoration-none text-white text-center ms-1 me-2 d-flex align-items-center">
                  <i class="fa-solid fa-stethoscope me-2"></i>
                  <span class="nav-link-text ms-1  text-end">Pendaftaran</span>
                  <i class="fas fa-angle-right dropdown me-4" style=""></i>
                </a>
              </div>
            </div> --}}
          
            <div class="dropdown-btn col-lg-10 d-flex justify-content-between align-items-center">
              <div class="item">
                <a class="text-decoration-none text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-stethoscope me-2"></i>
                  <span class="nav-link-text ms-1">Pendaftaran</span>
                </a>
              </div>
              <div class="item">
                <i class="fas fa-angle-right dropdown"></i>
              </div>
            </div>

            <div class="sub-menu">

              <a class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'pendaftaran') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-clipboard-user me-2"></i>
                  <span class="nav-link-text ms-2">Data Pasien</span>
                </div>
              </a>

              <a class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'create-pasien') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user-plus me-2" style="font-size: 12px"></i>
                  <span class="nav-link-text ms-1">Create Data Pasien</span>
                </div>
              </a>
            </div>
          </li>

          <li class="nav-item d-flex flex-column justify-content-center align-items-center" style="cursor: pointer">
            <div class="dropdown-btn col-lg-10 d-flex justify-content-between align-items-center" style="">
              <div class="item">
                <a class="text-decoration-none text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-stethoscope me-2"></i>
                  <span class="nav-link-text ms-1">Master Perawat</span>
                </a>
              </div>
              <div class="item">
                <i class="fas fa-angle-right dropdown"></i>
              </div>
            </div>
          
            <div class="sub-menu">

              <a href="/dashboard/perawat/data-perawat" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'data-perawat') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-clipboard-user me-2"></i>
                  <span class="nav-link-text ms-2">Data Perawat</span>
                </div>
              </a>

              <a href="/dashboard/perawat/create-perawat" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'create-perawat') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user-plus me-2" style="font-size: 12px"></i>
                  <span class="nav-link-text ms-1">Create Data Perawat</span>
                </div>
              </a>

            </div>
          </li>

          <li class="nav-item d-flex flex-column justify-content-center align-items-center" style="cursor: pointer">
            <div class="dropdown-btn col-lg-10 d-flex justify-content-between align-items-center" style="">
              <div class="item">
                <a class="text-decoration-none text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-stethoscope me-2"></i>
                  <span class="nav-link-text ms-1">Master Tenaga Medis</span>
                </a>
              </div>
              <div class="item">
                <i class="fas fa-angle-right dropdown"></i>
              </div>
            </div>
          
            <div class="sub-menu">

              <a href="/tenaga-medis/data-tenaga-medis" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'data-dokter') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-clipboard-user me-2"></i>
                  <span class="nav-link-text ms-2">Data Tenaga Medis</span>
                </div>
              </a>
             
              <a href="/tenaga-medis/create-tenaga-medis" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'data-dokter') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-clipboard-user me-2"></i>
                  <span class="nav-link-text ms-2">Create Dokter</span>
                </div>
              </a>
          
              <a href="/tenaga-medis/jadwal-dokter" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'jadwal-dokter') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user-plus me-2" style="font-size: 12px"></i>
                  <span class="nav-link-text ms-1">Jadwal Dokter</span>
                </div>
              </a>
              
              <a href="/tenaga-medis/create-jadwal-dokter" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'create-jadwal-dokter') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user-plus me-2" style="font-size: 12px"></i>
                  <span class="nav-link-text ms-1">Create Jadwal Dokter</span>
                </div>
              </a>

            </div>
          </li>

          <li class="nav-item d-flex flex-column justify-content-center align-items-center" style="cursor: pointer">
            <div class="dropdown-btn col-lg-10 d-flex justify-content-between align-items-center" style="">
              <div class="item">
                <a class="text-decoration-none text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-stethoscope me-2"></i>
                  <span class="nav-link-text ms-1">Master Layanan</span>
                </a>
              </div>
              <div class="item">
                <i class="fas fa-angle-right dropdown"></i>
              </div>
            </div>
            <div class="sub-menu">
              <a href="/layanan/data-layanan" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'data-layanan') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-clipboard-user me-2"></i>
                  <span class="nav-link-text ms-2">Data Layanan</span>
                </div>
              </a>
              <a href="/layanan/create-layanan" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'create-layanan') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user-plus me-2" style="font-size: 12px"></i>
                  <span class="nav-link-text ms-1">Create Layanan</span>
                </div>
              </a>
            </div>
          </li>

          <li class="nav-item d-flex flex-column justify-content-center align-items-center" style="cursor: pointer">
            <div class="dropdown-btn col-lg-10 d-flex justify-content-between align-items-center" style="">
              <div class="item">
                <a class="text-decoration-none text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-stethoscope me-2"></i>
                  <span class="nav-link-text ms-1">Master Kamar</span>
                </a>
              </div>
              <div class="item">
                <i class="fas fa-angle-right dropdown"></i>
              </div>
            </div>
            <div class="sub-menu">
              <a href="/kamar/data-kamar" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'data-kamar') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-clipboard-user me-2"></i>
                  <span class="nav-link-text ms-2">Data Kamar</span>
                </div>
              </a>
              <a href="/kamar/create-kamar" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'create-kamar') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user-plus me-2" style="font-size: 12px"></i>
                  <span class="nav-link-text ms-1">Create Kamar</span>
                </div>
              </a>
            </div>
          </li>

          <li class="nav-item d-flex flex-column justify-content-center align-items-center" style="cursor: pointer">
            <div class="dropdown-btn col-lg-10 d-flex justify-content-between align-items-center" style="">
              <div class="item">
                <a class="text-decoration-none text-white text-center ms-1 me-2 d-flex align-items-center justify-content-around">
                  <i class="fa-solid fa-stethoscope me-2"></i>
                  <span class="nav-link-text ms-1">Master Bed</span>
                </a>
              </div>
              <div class="item">
                <i class="fas fa-angle-right dropdown"></i>
              </div>
            </div>
            <div class="sub-menu">
              <a href="/bed/data-bed" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'data-bed') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-clipboard-user me-2"></i>
                  <span class="nav-link-text ms-2">Data Bed</span>
                </div>
              </a>
              <a href="/bed/create-bed" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'create-bed') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user-plus me-2" style="font-size: 12px"></i>
                  <span class="nav-link-text ms-1">Create Bed</span>
                </div>
              </a>
            </div>
          </li>

          <li class="nav-item d-flex flex-column justify-content-center align-items-center" style="cursor: pointer">
            <div class="dropdown-btn col-lg-10 d-flex justify-content-between align-items-center" style="">
              <div class="item">
                <a class="text-decoration-none text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-stethoscope me-2"></i>
                  <span class="nav-link-text ms-1">Tarif</span>
                </a>
              </div>
              <div class="item">
                <i class="fas fa-angle-right dropdown"></i>
              </div>
            </div>
            <div class="sub-menu">
              <a href="/tarif/data-tarif-kamar" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'data-tarif-kamar') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user-plus me-2" style="font-size: 12px"></i>
                  <span class="nav-link-text ms-1">Data Tarif Kamar</span>
                </div>
              </a>
              <a href="/tarif/group-tarif" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'group-tarif') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user-plus me-2" style="font-size: 12px"></i>
                  <span class="nav-link-text ms-1">Group Tarif</span>
                </div>
              </a>
              <a href="/tarif/create-group-tarif" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'create-group-tarif') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user-plus me-2" style="font-size: 12px"></i>
                  <span class="nav-link-text ms-1">Create Group Tarif</span>
                </div>
              </a>
              <a href="/tarif/group-tarif-tindakan" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'data-group-tarif-tindakan') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user-plus me-2" style="font-size: 12px"></i>
                  <span class="nav-link-text ms-1" style="font-size: 13px; text-align:left;">Group Tarif Tindakan</span>
                </div>
              </a>
              <a href="/tarif/create-group-tarif-tindakan" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'create-group-tarif-tindakan') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user-plus me-2" style="font-size: 12px"></i>
                  <span class="nav-link-text ms-1" style="font-size: 13px; text-align:left;">Create Group Tarif Tindakan</span>
                </div>
              </a>
              <a href="/tarif/data-tarif-pendaftaran" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'data-tarif-pendaftaran') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user-plus me-2" style="font-size: 12px"></i>
                  <span class="nav-link-text ms-1" style="font-size: 13px; text-align:left;">Tarif Pendaftaran</span>
                </div>
              </a>
              <a href="/tarif/create-tarif-pendaftaran" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'create-tarif-pendaftaran') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user-plus me-2" style="font-size: 12px"></i>
                  <span class="nav-link-text ms-1" style="font-size: 13px; text-align:left;">Create Tarif Pendaftaran</span>
                </div>
              </a>
              <a href="/tarif/data-tarif-tindakan" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'data-tarif-tindakan') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user-plus me-2" style="font-size: 12px"></i>
                  <span class="nav-link-text ms-1" style="font-size: 13px; text-align:left;">Tarif Tindakan</span>
                </div>
              </a>
              <a href="/tarif/create-tarif-tindakan" class="dropdown-menu col-lg-10 d-flex mt-1 {{ ($title === 'create-tarif-tindakan') ? 'active' : '' }} text-decoration-none">
                <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user-plus me-2" style="font-size: 12px"></i>
                  <span class="nav-link-text ms-1" style="font-size: 13px; text-align:left;">Create Tarif Tindakan</span>
                </div>
              </a>
            </div>
          </li>
      </ul>


          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
          <script>
         $(document).ready(function() {
            $('.dropdown-btn').click(function() {
              $(this).find('.dropdown').toggleClass('rotate'); // Menemukan elemen <i> dengan kelas .dropdown
              $(this).next('.sub-menu').slideToggle(); // Menampilkan atau menyembunyikan sub-menu
            });
          });
            $(document).ready(function() {
              $('.sub-menu').click(function() {
                $(this).next('.super-sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
              });
            });
          </script>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <form action="/logout" method="POST">
         @csrf
          {{-- <button type="submit" class="btn btn-outline-success mt-4 w-100"><i class="bi bi-box-arrow-right"> Logout</i></button> --}}
          <button type="submit" class="btn bg-gradient-success w-100"><i class="bi bi-box-arrow-right"> Logout</i></button>
        </form>  
      </div>
    </div>
  </aside>