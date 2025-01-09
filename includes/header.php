<header class="navbar navbar-expand-lg navbar-dark bgNav p-2 pe-lg-4 ps-lg-4 pe-md-3 ps-md-3 justify-content-center">
  <!-- Navbar -->
  <nav class="container-xxl">
    <div class="homeLink">
      <!-- <a class="navbar-brand fw-bold ms-2 ms-md-3" href="#"><img class="img-fluid d-inline-block"
          src="assets/favicon.ico" width="50" alt="ContentSynth-Logo" width="85"></a> -->
      <a href="index.php" class="appTitle">
        <div class="l-container">
          <p class="text-center m-0 fw-bold logo">INETE</p>
        </div>
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon text-white"></span>
    </button>
    <div class="navbar-collapse collapse" id="menu">
      <nav class="navbar-nav ms-md-auto">
        <a class="nav-link fw-bold" id="index" href="index.php">INICIO</a>
        <!-- Dropdown "LMD" -->
        <div class="dropdown">
          <button class="nav-link fw-bold dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            LMD
          </button>
          <ul class="dropdown-menu dropdown-menu-dark bgDropdown p-2">
            <li><a class="dropdown-item" href="../lmd/who_can_apply.php">¿Quienes pueden optar?</a></li>
            <li><a class="dropdown-item" href="../lmd/lmd_doc.php">Documentación a aportar</a></li>
            <hr class="text-warning border border-2">
            <li><a class="dropdown-item" href="../lmd/request_certifications.php">Solicitar certificaciones
                registrales</a></li>
          </ul>
        </div>
        <!-- Dropdown "NACIONALIDAD" -->
        <div class="dropdown">
          <button class="nav-link fw-bold dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            NACIONALIDAD
          </button>
          <ul class="dropdown-menu dropdown-menu-dark bgDropdown p-2">
            <li><a class="dropdown-item" href="../nationality/residence.php">Nacionalidad española por residencia</a>
            </li>
            <li><a class="dropdown-item" href="../nationality/doc_for_adults.php">Documentación para mayores de edad</a>
            </li>
            <li><a class="dropdown-item" href="../nationality/doc_for_minors.php">Documentación para menores de edad</a>
            </li>
            <hr class="text-warning border border-2">
            <li><a class="dropdown-item" href="../nationality/doc_for_specific_cases.php">Documentación para casos
                específicos</a></li>
            <li><a class="dropdown-item" href="../nationality/countries.php">Paises a viajar con pasaporte español</a>
            </li>
          </ul>
        </div>
        <!-- Dropdown "AUTORIZACIONES" -->
        <div class="dropdown">
          <button class="nav-link fw-bold dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            AUTORIZACIONES
          </button>
          <ul class="dropdown-menu dropdown-menu-dark bgDropdown p-2">
            <li><a class="dropdown-item" href="../authorizations/stay_for_studies.php">Autorización de estancia por
                estudios</a></li>
            <li><a class="dropdown-item" href="../authorizations/doc_for_authorization.php">Documentación para la
                autorización</a>
            </li>
            <hr class="text-warning border border-2">
            <li><a class="dropdown-item" href="../authorizations/visa_application.php">Solicitud de visados</a></li>
            <li><a class="dropdown-item" href="../authorizations/doc_for_application.php">Documentación para la
                solicitud</a>
          </ul>
        </div>
        <a class="nav-link fw-bold" id="about-us" href="about-us.php">SOBRE NOSOTROS</a>
      </nav>
    </div>
  </nav>
</header>