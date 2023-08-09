<?php

use app\models\Pengguna;
use yii\helpers\Url;
use yii\helpers\Html;

?>


<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" href="index.html">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= Url::to(['prodi/index']) ?>">
            <i class="bi bi-circle"></i><span>Data Prodi</span>
          </a>
        </li>
        <?php


        ?>
        <li>
          <a href="<?= Url::to(['fakultas/index']) ?>">
            <i class="bi bi-circle"></i><span>Data Fakultas</span>
          </a>
        </li>
      </ul>
    </li><!-- End Components Nav -->

    <!--
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="forms-elements.html">
          <i class="bi bi-circle"></i><span>Form Elements</span>
        </a>
      </li>
      <li>
        <a href="forms-layouts.html">
          <i class="bi bi-circle"></i><span>Form Layouts</span>
        </a>
    </ul>
  </li><!-- End Forms Nav -->
    <!--
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="tables-general.html">
          <i class="bi bi-circle"></i><span>General Tables</span>
        </a>
      </li>
      <li>
        <a href="tables-data.html">
          <i class="bi bi-circle"></i><span>Data Tables</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->
    <!--
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="charts-chartjs.html">
          <i class="bi bi-circle"></i><span>Chart.js</span>
        </a>
      </li>
    </ul>
  </li><!-- End Charts Nav -->
    <!--
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="icons-bootstrap.html">
          <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
        </a>
      </li>
    </ul>
  </li>-->
    <!-- End Icons Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= Url::to(['mahasiswa/index']) ?>">
        <i class="bi bi-person"></i>
        <!--didalam sini admin dapat melakukan Proses CRUD-->
        <span>Mahasiswa</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-faq.html">
        <i class="bi bi-question-circle"></i>
        <span>Dosen</span>
      </a>
    </li><!-- End F.A.Q Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-contact.html">
        <i class="bi bi-envelope"></i>
        <span>Lihat Data</span>
      </a>
    </li><!-- End Contact Page Nav -->
    <!--
  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-register.html">
      <i class="bi bi-card-list"></i>
      <span>Register</span>
    </a>
  </li>-->
    <!-- End Register Page Nav -->



    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="forms-elements.html">
            <i class="bi bi-circle"></i><span>Laporan Data Skripsi</span>
          </a>
        </li>
        <li>
          <a href="forms-layouts.html">
            <i class="bi bi-circle"></i><span>Form Layouts</span>
          </a>
      </ul>


    <li class="nav-item">
      <?php

      if (Yii::$app->user->isGuest) {
        echo Html::tag('div', Html::a('Login', ['/site/login'], ['class' => ['nav-item','nav-link collapsed','bi bi-box-arrow-in-right']]), ['class' => ['d-flex']]);
      } else {
        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
          . Html::submitButton(

            'Logout ',
            ['class' => 'nav-item','nav-link collapsed','bi bi-box-arrow-in-right']
          )
          . Html::endForm();
      }

      ?>
    </li>
    <!-- End Login Page Nav -->



    --Logout-
    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= Url::to(['site/signup']) ?>">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Logout</span>
      </a>
    </li>
    <!-- End Login Page Nav -->

  </ul>

</aside><!-- End Sidebar-->