<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Truva - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="<?php echo base_url() ?>assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url() ?>assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url() ?>assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo base_url() ?>assets/plugins/summernote/css/summernote.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo base_url() ?>truva/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="<?php echo base_url() ?>truva/css/pages.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
      .stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#fff;
    background-color: #ccc;
}
/*.stepwizard-row:before {
    top: 38px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}*/
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
    margin: 4px;
    padding:0px;
}
.stepwizard-step:before {
    top: 38px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
    margin-left: 10px;
}
.stepwizard-step:last-child:before {
    top: 38px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 0%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.btn-circle {
    width: 70px;
    height: 70px;
    text-align: center;
    padding: 20px 0;
    font-size: 20px;
    line-height: 1.428571429;
    border-radius: 50%;
}
    </style>
    <!--[if lte IE 9]>
	<link href="<?php echo base_url() ?>assets/plugins/codrops-dialogFx/dialog.ie.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->
  </head>
  <body class="fixed-header ">
    <?php $this->load->view("sidebar"); ?>
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
      <?php $this->load->view("header"); ?>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
          <!-- START JUMBOTRON -->
          <div class="jumbotron  no-margin" data-pages="parallax">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
            <div class="inner" style="transform: translateY(0px); opacity: 1;">
            <h3 class="">Musluk Sihirbazı</h3>
            </div>
            </div>
            </div>
          <!-- END JUMBOTRON -->
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg m-t-10">
            <!-- BEGIN PlACE PAGE CONTENT HERE -->
            <div class="stepwizard">
              <div class="stepwizard-row setup-panel">
                  <div class="stepwizard-step col-xs-1"> 
                      <a href="#step-1" type="button" class="btn btn-circle btn-success">1</a>
                      <p><small>Toplayıcı</small></p>
                  </div>
                  <div class="stepwizard-step col-xs-1"> 
                      <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                      <p><small>Musluk Id</small></p>
                  </div>
                  <div class="stepwizard-step col-xs-1"> 
                      <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                      <p><small>Musluk Adı</small></p>
                  </div>
                  <div class="stepwizard-step col-xs-1"> 
                      <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                      <p><small>Holding</small></p>
                  </div>
                  <div class="stepwizard-step col-xs-1"> 
                      <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                      <p><small>Şirket</small></p>
                  </div>
                  <div class="stepwizard-step col-xs-1"> 
                      <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                      <p><small>Bar Grubu</small></p>
                  </div>
                  <div class="stepwizard-step col-xs-1"> 
                      <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
                      <p><small>İçki Tipi</small></p>
                  </div>
                  <div class="stepwizard-step col-xs-1"> 
                      <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">8</a>
                      <p><small>İçki Markası</small></p>
                  </div>
                  <div class="stepwizard-step col-xs-1"> 
                      <a href="#step-9" type="button" class="btn btn-default btn-circle" disabled="disabled">9</a>
                      <p><small>Fiyat</small></p>
                  </div>
                  <div class="stepwizard-step col-xs-1"> 
                      <a href="#step-10" type="button" class="btn btn-default btn-circle" disabled="disabled">10</a>
                      <p><small>Button</small></p>
                  </div>
                  <div class="stepwizard-step col-xs-1"> 
                      <a href="#step-11" type="button" class="btn btn-default btn-circle" disabled="disabled">11</a>
                      <p><small>Tamamla</small></p>
                  </div>
              </div>
          </div>
          <form role="form" class="col-md-6 col-md-offset-3" style="margin-top:100px">
              <div class="panel panel-default setup-content" id="step-1">
                <div class="panel-heading separator">
                  <div class="panel-title">Toplayıcı Seçimi
                  </div>
                  <div class="pull-right bold">1</div>
                </div>
                <div class="panel-body">
                  <div class="col-md-12 form-group form-group-default form-group-default-select2 required m-t-10">
                        <label class="">Toplayıcı seçin</label>
                          <select class="full-width collectors" data-placeholder="Toplayıcı seçin" data-init-plugin="select2" required>
                          <option value="0">Lütfen seçin</option>
                            <?php
                            foreach ($collectors as $key => $collector) {
                              echo '<option value='.$collector->collector_id.'>'.$collector->device_key.'</option>';
                            }
                            ?>
                          </select>
                  </div>
                </div>
                <div class="panel-footer">
                  <div class="pull-right">
                    <button type="button" class="btn btn-success nextBtn">İleri</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="panel panel-default setup-content unvisible" id="step-2">
                <div class="panel-heading separator">
                  <div class="panel-title">Musluk Id Eşleştirme
                  </div>
                  <div class="pull-right bold">2</div>
                </div>
                <div class="panel-body">
                  <div class="form-group form-group-default required m-t-10">
                    <label>Musluk Id</label>
                    <div class="controls">
                    <input type="text" class="form-control" name="muslukId" id="muslukId" required data-msg="Bu alan zorunludur.">
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <div class="pull-right">
                    <button type="button" class="btn btn-danger backBtn">Geri</button>
                    <button type="button" class="btn btn-success nextBtn">İleri</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="panel panel-default setup-content unvisible" id="step-3">
                <div class="panel-heading separator">
                  <div class="panel-title">Musluk Adı Belirle
                  </div>
                  <div class="pull-right bold">3</div>
                </div>
                <div class="panel-body">
                  <div class="form-group form-group-default required m-t-10">
                    <label>Musluk Adı</label>
                    <div class="controls">
                    <input type="text" class="form-control" name="muslukName" id="muslukName" required data-msg="Bu alan zorunludur.">
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <div class="pull-right">
                    <button type="button" class="btn btn-danger backBtn">Geri</button>
                    <button type="button" class="btn btn-success nextBtn">İleri</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="panel panel-default setup-content unvisible" id="step-4">
                <div class="panel-heading separator">
                  <div class="panel-title">Holding Seçimi
                  </div>
                  <div class="pull-right bold">4</div>
                </div>
                <div class="panel-body">
                  <div class="col-md-8 form-group form-group-default form-group-default-select2 required m-t-10">
                        <label class="">Holding seçin</label>
                          <select class="full-width holdings" data-placeholder="Holding seçin" data-init-plugin="select2">
                          <option value="0">Lütfen seçin</option>
                            <?php
                            foreach ($holdings as $key => $holding) {
                              echo '<option value='.$holding->HoldingID.'>'.$holding->HoldingName.'</option>';
                            }
                            ?>
                          </select>
                  </div>
                  <div class="col-md-4 m-t-10">
                    <button type="button" class="btn btn-primary pull-left addNewHolding" data-toggle="modal" data-target="#addNewHoldingModal">Yeni Holding Ekle</button>
                  </div>
                </div>
                <div class="panel-footer">
                  <div class="pull-right">
                    <button type="button" class="btn btn-danger backBtn">Geri</button>
                    <button type="button" class="btn btn-success nextBtn">İleri</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="panel panel-default setup-content unvisible" id="step-5">
                <div class="panel-heading separator">
                  <div class="panel-title">Şirket Seçimi
                  </div>
                  <div class="pull-right bold">5</div>
                </div>
                <div class="panel-body">
                  <div class="col-md-8 form-group form-group-default form-group-default-select2 required m-t-10">
                        <label class="">Şirket seçin</label>
                          <select class="full-width companies" data-placeholder="Şirket seçin" data-init-plugin="select2" required>
                          <option value="0">Lütfen seçin</option>
                            <?php
                            foreach ($companies as $key => $company) {
                              echo '<option value='.$company->CompanyID.'>'.$company->CompanyName.'</option>';
                            }
                            ?>
                          </select>
                  </div>
                  <div class="col-md-4 m-t-10">
                    <button type="button" class="btn btn-primary pull-left addNewCompany" data-toggle="modal" data-target="#addNewCompanyModal">Yeni Şirket Ekle</button>
                  </div>
                </div>
                <div class="panel-footer">
                  <div class="pull-right">
                    <button type="button" class="btn btn-danger backBtn">Geri</button>
                    <button type="button" class="btn btn-success nextBtn">İleri</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="panel panel-default setup-content unvisible" id="step-6">
                <div class="panel-heading separator">
                  <div class="panel-title">Bar Grubu Seçimi
                  </div>
                  <div class="pull-right bold">6</div>
                </div>
                <div class="panel-body">
                  <div class="col-md-8 form-group form-group-default form-group-default-select2 required m-t-10">
                        <label class="">Bar Grubu seçin</label>
                          <select class="full-width bars" data-placeholder="Bar Grubu seçin" data-init-plugin="select2" required>
                          <option value="0">Lütfen seçin</option>
                            <?php
                            foreach ($barGroups as $key => $barGroup) {
                              echo '<option value='.$barGroup->BarGroupID.'>'.$barGroup->Name.'</option>';
                            }
                            ?>
                          </select>
                  </div>
                  <div class="col-md-4 m-t-10">
                    <button type="button" class="btn btn-primary pull-left addNewBarGroup m-b-10" data-toggle="modal" data-target="#addNewBarGroupModal">Yeni Bar Grubu Ekle</button>
                  </div>
                </div>
                <div class="panel-footer">
                  <div class="pull-right">
                    <button type="button" class="btn btn-danger backBtn">Geri</button>
                    <button type="button" class="btn btn-success nextBtn">İleri</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="panel panel-default setup-content unvisible" id="step-7">
                <div class="panel-heading separator">
                  <div class="panel-title">İçki Tipi Seçimi
                  </div>
                  <div class="pull-right bold">7</div>
                </div>
                <div class="panel-body">
                  <div class="col-md-8 form-group form-group-default form-group-default-select2 required m-t-10">
                        <label class="">İçki Tipi seçin</label>
                          <select class="full-width alcoholTypes" data-placeholder="İçki Tipi seçin" data-init-plugin="select2" required>
                          <option value="0">Lütfen seçin</option>
                            <?php
                            foreach ($alcoholTypes as $key => $alcoholType) {
                              echo '<option value='.$alcoholType->AlcoholTypeID.'>'.$alcoholType->Name.'</option>';
                            }
                            ?>
                          </select>
                  </div>
                  <div class="col-md-4 m-t-10">
                    <button type="button" class="btn btn-primary pull-left addNewAlcoholType m-b-10" data-toggle="modal" data-target="#addNewAlcoholTypeModal">Yeni Alkol Tipi Ekle</button>
                  </div>
                </div>
                <div class="panel-footer">
                  <div class="pull-right">
                    <button type="button" class="btn btn-danger backBtn">Geri</button>
                    <button type="button" class="btn btn-success nextBtn">İleri</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="panel panel-default setup-content unvisible" id="step-8">
                <div class="panel-heading separator">
                  <div class="panel-title">İçki Markası Seçimi
                  </div>
                  <div class="pull-right bold">8</div>
                </div>
                <div class="panel-body">
                  <div class="col-md-8 form-group form-group-default form-group-default-select2 required m-t-10">
                        <label class="">İçki Markası seçin</label>
                          <select class="full-width alcoholBrands" data-placeholder="İçki Markası seçin" data-init-plugin="select2" required>
                          <option value="0">Lütfen seçin</option>
                            <?php
                            foreach ($alcoholBrands as $key => $alcoholBrand) {
                              echo '<option value='.$alcoholBrand->AlcoholBrandID.'>'.$alcoholBrand->Name.'</option>';
                            }
                            ?>
                          </select>
                  </div>
                  <div class="col-md-4 m-t-10">
                    <button type="button" class="btn btn-primary pull-left addNewAlcoholBrand m-b-10" data-toggle="modal" data-target="#addNewAlcoholBrandModal">Yeni Alkol Markası Ekle</button>
                  </div>
                </div>
                <div class="panel-footer">
                  <div class="pull-right">
                    <button type="button" class="btn btn-danger backBtn">Geri</button>
                    <button type="button" class="btn btn-success nextBtn">İleri</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="panel panel-default setup-content unvisible" id="step-9">
                <div class="panel-heading separator">
                  <div class="panel-title">CL Bazında Fiyat
                  </div>
                  <div class="pull-right bold">9</div>
                </div>
                <div class="panel-body">
                  <div class="form-group form-group-default required m-t-10">
                    <label>CL Başı Maliyet</label>
                    <div class="controls">
                    <input type="text" class="form-control" name="pricePerCl" id="pricePerCl" data-msg="Bu alan zorunludur." data-a-dec="." data-a-sep="," placeholder="0.00">
                    </div>
                  </div>
                  <div class="form-group form-group-default m-t-10">
                    <label>Satış Fiyatı</label>
                    <div class="controls">
                    <input type="text" class="form-control" name="priceForSale" id="priceForSale" data-a-dec="." data-a-sep="," placeholder="0.00">
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <div class="pull-right">
                    <button type="button" class="btn btn-danger backBtn">Geri</button>
                    <button type="button" class="btn btn-success nextBtn">İleri</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="panel panel-default setup-content unvisible" id="step-10">
                <div class="panel-heading separator">
                  <div class="panel-title">Button Ekle
                  </div>
                  <div class="pull-right bold">10</div>
                </div>
                <div class="panel-body">
                  <div class="row">
                  <div class="col-md-4">
                  <div class="form-group form-group-default required m-t-10">
                    <label>Button Adı</label>
                    <div class="controls">
                    <input type="text" class="form-control" name="buttonName" id="buttonName">
                    </div>
                  </div>
                  <div class="form-group form-group-default required m-t-10">
                    <label>Button CL Real</label>
                    <div class="controls">
                    <input type="text" class="form-control" name="buttonClReal" id="buttonClReal" placeholder="0.00">
                    </div>
                  </div>
                  <div class="form-group form-group-default required m-t-10">
                    <label>Button CL Shown</label>
                    <div class="controls">
                    <input type="text" class="form-control" name="buttonClShown" id="buttonClShown" placeholder="0.00">
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary pull-right addButtonDataToTable"><i class="fa fa-angle-double-right"></i></button>
                  </div>
                  <div class="col-md-8">
                    <table class="table table-striped">
                        <thead>
                          <th style="text-transform: none !important">Button Adı</th>
                          <th style="text-transform: none !important">Button CL Real</th>
                          <th style="text-transform: none !important">Button CL Shown</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                  </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <div class="pull-right">
                    <button type="button" class="btn btn-danger backBtn">Geri</button>
                    <button type="button" class="btn btn-success nextBtn">İleri</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="panel panel-default setup-content unvisible" id="step-11">
                <div class="panel-heading separator">
                  <div class="panel-title">Tamamla
                  </div>
                  <div class="pull-right bold">11</div>
                </div>
                <div class="panel-body">
                  <div class="form-group form-group-default disabled m-t-10">
                    <label>Toplayıcı</label>
                    <div class="controls">
                    <input type="text" class="form-control disabled" name="collectorinLastLevel" id="collectorinLastLevel" disabled="disabled">
                    </div>
                  </div>
                  <div class="form-group form-group-default disabled m-t-10">
                    <label>Musluk Id</label>
                    <div class="controls">
                    <input type="text" class="form-control disabled" name="muslukIdinLastLevel" id="muslukIdinLastLevel" disabled="disabled">
                    </div>
                  </div>
                  <div class="form-group form-group-default disabled m-t-10">
                    <label>Musluk Adı</label>
                    <div class="controls">
                    <input type="text" class="form-control disabled" name="tapNameinLastLevel" id="tapNameinLastLevel" disabled="disabled">
                    </div>
                  </div>
                  <div class="form-group form-group-default disabled m-t-10">
                    <label>Holding</label>
                    <div class="controls">
                    <input type="text" class="form-control disabled" name="holdinginLastLevel" id="holdinginLastLevel" disabled="disabled">
                    </div>
                  </div>
                  <div class="form-group form-group-default disabled m-t-10">
                    <label>Şirket</label>
                    <div class="controls">
                    <input type="text" class="form-control disabled" name="companyinLastLevel" id="companyinLastLevel" disabled="disabled">
                    </div>
                  </div>
                  <div class="form-group form-group-default disabled m-t-10">
                    <label>Bar Grubu</label>
                    <div class="controls">
                    <input type="text" class="form-control disabled" name="barGroupinLastLevel" id="barGroupinLastLevel" disabled="disabled">
                    </div>
                  </div>
                  <div class="form-group form-group-default disabled m-t-10">
                    <label>İçki Tipi</label>
                    <div class="controls">
                    <input type="text" class="form-control disabled" name="alcoholTypeinLastLevel" id="alcoholTypeinLastLevel" disabled="disabled">
                    </div>
                  </div>
                  <div class="form-group form-group-default disabled m-t-10">
                    <label>İçki Markası</label>
                    <div class="controls">
                    <input type="text" class="form-control disabled" name="alcoholBrandinLastLevel" id="alcoholBrandinLastLevel" disabled="disabled">
                    </div>
                  </div>
                  <div class="form-group form-group-default disabled m-t-10">
                    <label>Fiyat</label>
                    <div class="controls">
                    <input type="text" class="form-control disabled" name="pricePerClinLastLevel" id="pricePerClinLastLevel" disabled="disabled">
                    </div>
                  </div>
                  <div class="form-group form-group-default disabled m-t-10">
                    <label>Butonlar</label>
                    <table class="table table-striped">
                        <thead>
                          <th style="text-transform: none !important">Button Adı</th>
                          <th style="text-transform: none !important">Button CL Real</th>
                          <th style="text-transform: none !important">Button CL Shown</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                  </div>
                </div>
                <div class="panel-footer">
                  <div class="pull-right">
                    <button type="button" class="btn btn-danger backBtn">Geri</button>
                    <button type="button" class="btn btn-info">Tamamla</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
          </form>
            <!-- END PLACE PAGE CONTENT HERE -->
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <?php $this->load->view("footer"); ?>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <div class="modal fade stick-up disable-scroll" id="addNewHoldingModal" role="dialog" aria-hidden="false">
      <div class="modal-dialog ">
        <div class="modal-content-wrapper">
          <div class="modal-content">
            <div class="modal-header clearfix text-left">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
              </button>
              <h5>Yeni Holding <span class="semi-bold">Ekle</span></h5>
            </div>
            <div class="modal-body">
              <form role="form" class="form-group" id="appendNewHoldingData">
              <?php
              $i = 0; 
              echo '
              <div class="row">
              ';
              foreach ($holdingFields as $key => $field) {
                $i++;
                $message = "Bu alan zorunludur";
                if($field["type"] == "email"){
                  $message = "Lütfen geçerli bir mail adresi giriniz.";
                }
                if($i%2==1 && $i!=1){
                    echo '</div>
                    <div class="row">
                    ';
                  }
                if($field["type"]!="select"){
                  echo '
                  <div class="col-sm-6">
                        <div class="form-group form-group-default required">
                          <label>'.$field["name"].':</label>
                          <div class="controls">
                          <input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'">
                          </div>
                        </div>
                  </div>';
                }else{
                  if($field["id"] == "CountryID"){
                  echo '
                  <div class="col-sm-6">
                  <div class="form-group form-group-default form-group-default-select2 required">
                        <label class="">'.$field["name"].'</label>
                          <select class="full-width '.$field["class"].' '.$field["disabled"].'" name="'.$field["id"].'" id="'.$field["id"].'" data-placeholder="Ülke seçin" data-init-plugin="select2" required data-msg="'.$message.'">
                          <option value="0">Lütfen seçin</option>';
                            foreach ($countries as $key => $country) {
                              echo '
                              <option value='.$country->CountryID.'>'.$country->CountryName.'</option>
                              ';
                            }
                          echo '</select>
                        </div>
                  </div>';
                }else{
                  echo '
                  <div class="col-sm-6">
                  <div class="form-group form-group-default form-group-default-select2 required">
                        <label class="">'.$field["name"].'</label>
                          <select class="full-width '.$field["class"].' '.$field["disabled"].'" '.$field["disabled"].' name="'.$field["id"].'" id="'.$field["id"].'" data-placeholder="Ülke seçin" data-init-plugin="select2" required data-msg="'.$message.'">
                          <option value="0">Lütfen seçin</option>
                          </select>
                        </div>
                  </div>';
                }
                }
              }
              ?>
                <button type="submit" class="btn btn-primary btn-block">Yeni Holding Ekle</button>
                <div class="alert alert-danger modalError unvisible m-t-10"></div>
              </form>
            </div>
          </div>
        </div>
        </div>
        </div>
      </div>
      <div class="modal fade stick-up disable-scroll" id="addNewCompanyModal" role="dialog" aria-hidden="false">
      <div class="modal-dialog ">
        <div class="modal-content-wrapper">
          <div class="modal-content">
            <div class="modal-header clearfix text-left">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
              </button>
              <h5>Yeni Şirket <span class="semi-bold">Ekle</span></h5>
            </div>
            <div class="modal-body" style="overflow:hidden;">
              <form role="form" class="form-group" id="appendNewCompanyData">
              <?php
             $i=0;
              echo '<div class="row">';
              foreach ($companyFields as $key => $field) {
                $i++;
                $message = "Bu alan zorunludur";
                if($field["type"] == "email"){
                  $message = "Lütfen geçerli bir mail adresi giriniz.";
                }
                $class = "";
                if($field["type"] == "hidden"){
                  $class ="unvisible";
                }
                if($i%2==1 && $i!=1){
                  echo '</div><div class="row">';
                }
                if($field["type"]!="select"){
                  echo '<div class="col-sm-6">
                  <div class="form-group form-group-default required '.$class.' ">
                    <label>'.$field["name"].':</label>
                    <div class="controls">
                      <input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'">
                    </div>
                  </div>
                </div>';
                }else{
                  if($field["id"] == "CountryID"){
                    echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
                    <label class="">'.$field["name"].'</label>
                    <select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Ülke seçin" data-init-plugin="select2">
                      <option value="0">Lütfen seçin</option>';
                      foreach ($countries as $key => $country) {
                        echo '<option value='.$country->CountryID.'>'.$country->CountryName.'</option>';
                      }
                      echo '</select>
                    </div></div>';
                  }else
                  if($field["id"] == "HoldingID"){
                    echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
                    <label class="">'.$field["name"].'</label>
                    <select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Holding seçin" data-init-plugin="select2">
                      <option value="0">Lütfen seçin</option>';
                      foreach ($holdings as $key => $holding) {
                        echo '<option value='.$holding->HoldingID.'>'.$holding->HoldingName.'</option>';
                      }
                      echo '</select>
                    </div></div>';
                  }else
                  if($field["id"] == "CompanyTypeID"){
                    echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
                    <label class="">'.$field["name"].'</label>
                    <select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Şirket Tipi seçin" data-init-plugin="select2">
                      <option value="0">Lütfen seçin</option>';
                      foreach ($companyTypes as $key => $companyType) {
                        echo '<option value='.$companyType->CompanyTypeID.'>'.$companyType->Name.'</option>';
                      }
                      echo '</select>
                    </div></div>';
                  }else{
                    echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
                    <label class="">'.$field["name"].'</label>
                    <select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" '.$field["disabled"].' data-placeholder="Ülke seçin" data-init-plugin="select2">
                      <option value="0">Lütfen seçin</option>
                    </select>
                  </div></div>';
                  }
                }
              }
              ?>
                <button type="submit" class="btn btn-primary btn-block">Yeni Şirket Ekle</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="modal fade stick-up disable-scroll" id="addNewBarGroupModal" role="dialog" aria-hidden="false">
      <div class="modal-dialog ">
        <div class="modal-content-wrapper">
          <div class="modal-content">
            <div class="modal-header clearfix text-left">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
              </button>
              <h5>Yeni Bar Grubu <span class="semi-bold">Ekle</span></h5>
            </div>
            <div class="modal-body" style="overflow:hidden;">
              <form role="form" class="form-group" id="appendNewBarGroupData">
              <?php 
              foreach ($barGroupFields as $key => $field) {
                $message = "Bu alan zorunludur";
                if($field["type"] == "email"){
                  $message = "Lütfen geçerli bir mail adresi giriniz.";
                }
                if($field["type"]!="select"){
                  echo '<div class="row"><div class="col-sm-12">
                        <div class="form-group form-group-default required">
                          <label>'.$field["name"].':</label>
                          <div class="controls">
                          <input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'">
                          </div>
                        </div>
                      </div></div>';
                }else{
                  if($field["id"] == "CompanyID"){
                  echo '<div class="form-group form-group-default form-group-default-select2 required">
                        <label class="">'.$field["name"].'</label>
                          <select class="full-width '.$field["class"].' '.$field["disabled"].'" name="'.$field["id"].'" id="'.$field["id"].'" data-placeholder="Alkol grubu seçin" data-init-plugin="select2" required data-msg="'.$message.'">
                          <option value="0">Lütfen seçin</option>';
                            foreach ($companies as $key => $company) {
                              echo '<option value='.$company->CompanyID.'>'.$company->CompanyName.'</option>';
                            }
                          echo '</select>
                        </div>';
                }
                }
              }
              ?>
                <button type="submit" class="btn btn-primary addNewBarGroupButton">Yeni Alkol Grubu Ekle</button>
                <div class="alert alert-success modalError unvisible m-t-10"></div>
              </form>
            </div>
          </div>
        </div>
        </div>
    </div>
    <div class="modal fade stick-up disable-scroll" id="addNewAlcoholTypeModal" role="dialog" aria-hidden="false">
      <div class="modal-dialog ">
        <div class="modal-content-wrapper">
          <div class="modal-content">
            <div class="modal-header clearfix text-left">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
              </button>
              <h5>Yeni Alkol Tipi <span class="semi-bold">Ekle</span></h5>
            </div>
            <div class="modal-body" style="overflow:hidden;">
              <form role="form" class="form-group" id="appendNewAlcoholTypeData">
              <?php 
              foreach ($alcoholTypeFields as $key => $field) {
                $message = "Bu alan zorunludur";
                if($field["type"] == "email"){
                  $message = "Lütfen geçerli bir mail adresi giriniz.";
                }
                if($field["type"]!="select"){
                  echo '<div class="row"><div class="col-sm-12">
                        <div class="form-group form-group-default required">
                          <label>'.$field["name"].':</label>
                          <div class="controls">
                          <input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'">
                          </div>
                        </div>
                      </div></div>';
                }else{
                  if($field["id"] == "AlcoholGroupID"){
                  echo '<div class="form-group form-group-default form-group-default-select2 required">
                        <label class="">'.$field["name"].'</label>
                          <select class="full-width '.$field["class"].' '.$field["disabled"].'" name="'.$field["id"].'" id="'.$field["id"].'" data-placeholder="Alkol grubu seçin" data-init-plugin="select2">
                          <option value="0">Lütfen seçin</option>';
                            foreach ($alcoholGroups as $key => $alcoholGroup) {
                              echo '<option value='.$alcoholGroup->AlcoholGroupID.'>'.$alcoholGroup->Name.'</option>';
                            }
                          echo '</select>
                        </div>';
                }
                }
              }
              ?>
                <button type="submit" class="btn btn-primary addNewAlcoholTypeButton">Yeni Alkol Tipi Ekle</button>
                <div class="alert alert-success modalError unvisible m-t-10"></div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="modal fade stick-up disable-scroll" id="addNewAlcoholBrandModal" role="dialog" aria-hidden="false">
      <div class="modal-dialog ">
        <div class="modal-content-wrapper">
          <div class="modal-content">
            <div class="modal-header clearfix text-left">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
              </button>
              <h5>Yeni Alkol Markası <span class="semi-bold">Ekle</span></h5>
            </div>
            <div class="modal-body" style="overflow:hidden;">
              <form role="form" class="form-group" id="appendNewAlcoholBrandData">
              <?php 
              foreach ($alcoholBrandFields as $key => $field) {
                $message = "Bu alan zorunludur";
                if($field["type"] == "email"){
                  $message = "Lütfen geçerli bir mail adresi giriniz.";
                }
                if($field["type"]!="select"){
                  echo '<div class="row"><div class="col-sm-12">
                        <div class="form-group form-group-default required">
                          <label>'.$field["name"].':</label>
                          <div class="controls">
                          <input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'">
                          </div>
                        </div>
                      </div></div>';
                }else{
                  if($field["id"] == "AlcoholTypeID"){
                  echo '<div class="form-group form-group-default form-group-default-select2 required">
                        <label class="">'.$field["name"].'</label>
                          <select class="full-width '.$field["class"].' '.$field["disabled"].'" name="'.$field["id"].'" id="'.$field["id"].'" data-placeholder="Alkol grubu seçin" data-init-plugin="select2" required data-msg="'.$message.'">
                          <option value="0">Lütfen seçin</option>';
                            foreach ($alcoholTypes as $key => $alcoholType) {
                              echo '<option value='.$alcoholType->AlcoholTypeID.'>'.$alcoholType->Name.'</option>';
                            }
                          echo '</select>
                        </div>';
                }
                }
              }
              ?>
                <button type="submit" class="btn btn-primary addNewAlcoholBrandButton">Yeni Alkol Markası Ekle</button>
                <div class="alert alert-success modalError unvisible m-t-10"></div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="modal fade slide-up disable-scroll" id="modalSlideUpSmall" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-sm">
      <div class="modal-content-wrapper">
      <div class="modal-content">
      <div class="modal-body text-center m-t-20">
      <h4 class="no-margin p-b-10">Bu holding'e ait şirket yok.</h4>
      <button type="button" class="btn btn-primary btn-cons" data-dismiss="modal">Tamam</button>
      </div>
      </div>
      </div>
       
      </div>
      </div>
    <!-- END PAGE CONTAINER -->
    <!-- BEGIN VENDOR JS -->
    <script src="<?php echo base_url() ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/jquery-autonumeric/autoNumeric.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/classie/classie.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="<?php echo base_url() ?>truva/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="<?php echo base_url() ?>assets/js/functions.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/jquery-inputmask/jquery.inputmask.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/lodash.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/scripts.js?v=<?php echo time(); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>truva/js/pages.min.js"></script>
    <script type="text/javascript">
      $(function(){
        var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');
        allBackBtn = $('.backBtn');
        navListItems.on("click",function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);
                $item.parent().nextAll().find("a").attr("disabled","disabled").removeClass('btn-success').addClass('btn-default');
                $target.nextAll().find("input").val('');
                $target.nextAll().find("select").val(0).change();
                isDisabled = $item.is('[disabled=disabled]');
                if(!isDisabled){
                  navListItems.removeClass('btn-success').addClass('btn-default');
                  $item.addClass('btn-success').removeClass("btn-default");
                  allWells.addClass("unvisible");
                  $target.removeClass("unvisible");
                  $target.find('input:eq(0)').focus();
                }
        });
        allBackBtn.on("click",function(){
          var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                backStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");
                $('a[href="#' + curStepBtn + '"]').attr("disabled","disabled").removeClass('btn-success').addClass('btn-default');
                backStepWizard.trigger('click');
        })
        allNextBtn.on("click",function () {
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],select"),
                isValid = true;
            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                var required = $(curInputs[i]).attr("required");
                if (($(curInputs[i]).val() == 0 || $(curInputs[i]).val().length == 0) && required) {
                    var type = $(curInputs[i]).get(0).nodeName;
                    if(type == "SELECT"){
                      var placeholder = $(curInputs[i]).data("placeholder");
                      $("#modalSlideUpSmall").find("h4").html("Lütfen "+placeholder);
                      $("#modalSlideUpSmall").modal();
                    }
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }
            if(curStepBtn != "step-10"){
              if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
            }else{
              $("#collectorinLastLevel").val($(".collectors option:selected").text());
              $("#muslukIdinLastLevel").val($("#muslukId").val());
              $("#tapNameinLastLevel").val($("#muslukName").val());
              $("#holdinginLastLevel").val($(".holdings option:selected").text());
              $("#companyinLastLevel").val($(".companies option:selected").text());
              $("#barGroupinLastLevel").val($(".bars option:selected").text());
              $("#alcoholTypeinLastLevel").val($(".alcoholTypes option:selected").text());
              $("#alcoholBrandinLastLevel").val($(".alcoholBrands option:selected").text());
              $("#pricePerClinLastLevel").val($("#pricePerCl").val());
              var tableLength = $("#step-10 .table tbody tr").length;
              if(tableLength<4){
                $("#modalSlideUpSmall").find("h4").html("Lütfen en az 4 buton girin.");
                $("#modalSlideUpSmall").modal();
              }else{
                if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
              }
            }
        });
        getCitiesInModal();
        getDistrictsInModal();
        getAreasInModal();
        $("#appendNewHoldingData").validate({
            rules: {
              CountryID:{min:1},
              CityID:{min:1},
              CountyID:{min:1},
              AreaID:{min:1}
          },
          submitHandler: function(form) {
            addNewHolding();
            }
        });
        $("#appendNewBarGroupData").validate({
          submitHandler: function(form) {
            addNewBarGroup();
            }
        });
        $("#appendNewCompanyData").validate({
          rules: {
            CountryID:{min:1},
            CityID:{min:1},
            CountyID:{min:1},
            AreaID:{min:1},
            HoldingID:{min:1},
            CompanyTypeID:{min:1}
        },
          submitHandler: function(form) {
            addNewCompany();
            }
        });
        $("#appendNewAlcoholBrandData").validate({
          rules: {
            required: true,
            AlcoholTypeID:{min:1}
          },
          submitHandler: function(form) {
            addNewAlcoholBrand();
            }
        });
        $("#appendNewAlcoholTypeData").validate({
          rules: {
            AlcoholGroupID:{min:1},
          },
          submitHandler: function(form) {
            addNewAlcoholType();
            }
        });
        $('#buttonClReal,#buttonClShown,#pricePerCl,#priceForSale').autoNumeric('init');
        $("body").on("click",".addButtonDataToTable",function(){
          var buttonName = $("#buttonName").val();
          var buttonClReal = $("#buttonClReal").val();
          var buttonClShown = $("#buttonClShown").val();
          var tableLength = $("#step-10 .table tbody tr").length;
          if(tableLength < 4 && buttonName.length!=0 && buttonClReal.length!=0 && buttonClShown.length!=0){
            $(".table tbody").append('<tr><td>'+buttonName+'</td><td>'+buttonClReal+'</td><td>'+buttonClShown+'</td></tr>');
          }else{
            if(tableLength>=4){
              $("#modalSlideUpSmall").find("h4").html("4 butondan fazla giremezsiniz.");
            }else{
              $("#modalSlideUpSmall").find("h4").html("Lütfen bütün alanları doldurun.");
            }
            $("#modalSlideUpSmall").modal();
          }
        })
      })
    </script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>