<?php include 'include_head.php';?>
<style type="text/css">.panel-header-lg{
	height: 0px;
}</style>
<body class="">
  <div class="wrapper ">
<?php include 'include_sidemenu.php';?>
    <div class="main-panel" id="main-panel">
<?php include 'include_nav.php';?>
      <!-- End Navbar -->
  <div class="panel-header panel-header-lg">
<!--     <canvas id="bigDashboardChart"></canvas> -->
  </div>
<?php $this->load->view('Apps/page/'.$page_name);?>    
<!-- <?php include 'include_footer.php';?> -->
    </div>
  </div>
  <!--   Core JS Files   -->
<?php include'include_js.php';?>
</body>
</html>