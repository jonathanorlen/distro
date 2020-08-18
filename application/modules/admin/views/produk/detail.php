<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - FREE Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() . 'component/template/assets/css/bootstrap.css'?>" rel="stylesheet">
    <!--external css-->
    <link href= "<?php echo base_url() . 'component/template/assets/font-awesome/css/font-awesome.css'?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'component/template/assets/css/zabuto_calendar.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'component/template/assets/js/gritter/css/jquery.gritter.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'component/template/assets/lineicons/style.css'?>">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() . 'component/template/assets/css/style.css'?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'component/template/assets/css/style-responsive.css'?>" rel="stylesheet">

    <script src="<?php echo base_url() . 'component/template/assets/js/chart-master/Chart.js'?>"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>DASHGUM FREE</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="<?php echo base_url() . 'component/template/assets/img/ui-zac.jpg'?>"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="<?php echo base_url() . 'component/template/assets/img/ui-divya.jpg'?>"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="<?php echo base_url() . 'component/template/assets/img/ui-danro.jpg'?>"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="<?php echo base_url() . 'component/template/assets/img/ui-sherman.jpg'?>"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo base_url() . 'component/template/assets/img/ui-sam.jpg'?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Marcel Newman</h5>
              	  	
                  <li class="mt">
                      <a class="active" href="<?php echo base_url() . 'home'?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Data input</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url() . 'kategori'?>">kategori</a></li>
                          <li><a  href="<?php echo base_url() . 'produk'?>">produk</a></li>
                          <li><a  href="<?php echo base_url() . 'promo'?>">promo</a></li>
                      </ul>
                  </li>


                  <li class="sub-menu">
                      <a href="<?php echo base_url() . 'berita'?>" >
                          <i class="fa fa-cogs"></i>
                          <span>Berita</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row mt">
              <div class="col-lg-12">
                <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>detail produk</h4>
                      
                        <?php

						 $parameter = $_GET['id_produk'];
						    $ambil_data = $this->db->query(" SELECT * FROM produk where id= '$parameter' ");
						    $hasil_ambil_data = $ambil_data->row();

						?>

                          <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'produk/simpan_tambah' ?>">
                              <div class="form-group has-succes">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">nama produk</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" readonly id="inputSuccess" name="nama" value="<?php echo $hasil_ambil_data->nama;?>">
                                  </div>
                              </div>
                              <div class="form-group has-succes">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputWarning">Keterangan </label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" readonly id="inputWarning" name="keterangan" value="<?php echo $hasil_ambil_data->keterangan;?>">
                                  </div>
                              </div>
                              <div class="form-group has-succes">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputError">harga</label>
                                  <div class="col-lg-10">
                                      <input type="textarea" readonly class="form-control" id="inputError" name="harga"
                                      value="<?php echo $hasil_ambil_data->harga;?>">
                                  </div>
                              </div>
                              <div class="form-group has-succes">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputError">promo</label>
                                  <div class="col-lg-10">
                                      <input type="textarea" readonly class="form-control" id="inputError" name="promo"
                                      value="<?php echo $hasil_ambil_data->promo;?>">
                                  </div>
                              </div>
                               <div class="form-group has-succes">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputError">status</label>
                                  <div class="col-lg-10">
                                      <input type="textarea" readonly class="form-control" id="inputError" name="status"
                                      value="<?php echo $hasil_ambil_data->status;?>">
                                  </div>
                              </div>
                              <div class="form-group has-succes">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputError">kategori</label>
                                  <div class="col-lg-10">
                                      <input type="textarea" readonly class="form-control" id="inputError" name="kategori"
                                      value="<?php echo $hasil_ambil_data->kategori;?>">
                                  </div>
                              </div>
                              <div>
                               <input type="button" value="kembali" onclick="history.go(-1);">
                              </div>
                          </form>
                </div><!-- /form-panel -->
              </div><!-- /col-lg-12 -->
            </div><!-- /row -->
             
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url() . 'component/template/assets/js/jquery.js'?>"></script>
    <script src="<?php echo base_url() . 'component/template/assets/js/jquery-1.8.3.min.js'?>"></script>
    <script src="<?php echo base_url() . 'component/template/assets/js/bootstrap.min.js'?>"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url() . 'component/template/assets/js/jquery.dcjqaccordion.2.7.js'?>"></script>
    <script src="<?php echo base_url() . 'component/template/assets/js/jquery.scrollTo.min.js'?>"></script>
    <script src="<?php echo base_url() . 'component/template/assets/js/jquery.nicescroll.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url() . 'component/template/assets/js/jquery.sparkline.js'?>"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url() . 'component/template/assets/js/common-scripts.js'?>"></script>
    
    <script type="text/javascript" src="<?php echo base_url() . 'component/template/assets/js/gritter/js/jquery.gritter.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'component/template/assets/js/gritter-conf.js'?>"></script>

    <!--script for this page-->
    <script src="<?php echo base_url() . 'component/template/assets/js/sparkline-chart.js'?>"></script>    
	<script src="<?php echo base_url() . 'component/template/assets/js/zabuto_calendar.js'?>"></script>	
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>