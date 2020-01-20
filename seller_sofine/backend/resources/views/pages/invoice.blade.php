@extends('layouts.navapp')
@section('my-content')
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Invoice</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Invoice</li>
            </ol>
        </div>
        
        <div class="">
            <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right ml-10"><i class="ti-settings text-white"></i></button>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body text-dark printableArea">
                <div class="row">
            <div class="col-md-12 pa-3">
              <div class="pull-left">
                <h3 class="text-center"> <img src="../assets/images/favicon.png" alt="" title=""> 
  <span class="clearfix"></span>
  <img src="../assets/images/logo-text.png" alt="" title=""></h3>
              </div>
              <div class="pull-right text-right">
                <address>
                <div class="font-bold">
                Invoice 120-545K
                </div>
                <p class="mt-20 mb-0"><b class="text-muted font-bold text-dark">Date :</b> 23rd June 2018</p>
                <p><b class="text-muted font-bold text-dark">Due Date :</b> 25th June 2018</p>
                </address>
              </div>
            </div>
            <div class="row col-md-12 pt-40">
              <div class="col">
                <address>
                <div class="text-uppercase font-16 font-bold mb-10">Bill From:</div>
                <div class="font-medium m-b-10">Mintone Agency</div>
                <p class="mb-10">Piccadily St. 5, London, UK, 12003</p>
                <p class="mb-10">(049) 450 00 567</p>
                <p class="mb-10">Creativeagency@gmail.com</p>
                </address>
              </div>
              <div class="col">
                <address>
                <div class="text-uppercase font-16 font-bold mb-10">Bill To:</div>
                <div class="font-medium mb-10">Rosewood Caffe</div>
                <p class="mb-10">Barber St. 45/6, LA, USA, 44030</p>
                <p class="mb-10">(049) 450 00 567</p>
                <p class="mb-10">rosewoodcaffe@gmail.com</p>
                </address>
              </div>
            </div>
            <div class="col-md-12">
              <div class="table-responsive mt-40">
                <table class="table  color-table mb-0 invoice-table">
                  <thead>
                    <tr>
                      <th class="font-bold" style="width:291px">Services</th>
                      <th class="font-bold" style="width:183px">Unit</th>
                      <th class="font-bold" style="width:155px">Unit Price</th>
                      <th class="font-bold" style="width:92px">Quantity</th>
                      <th class="font-bold" style="width:61px">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Product research</td>
                      <td>Hours</td>
                      <td>$15</td>
                      <td>17</td>
                      <td>$255</td>
                    </tr>
                    <tr>
                      <td>Wireframin</td>
                      <td>Hours</td>
                      <td>$15</td>
                      <td>17</td>
                      <td>$255</td>
                    </tr>
                    <tr>
                      <td>Design</td>
                      <td>Hours</td>
                      <td>$15</td>
                      <td>17</td>
                      <td>$255</td>
                    </tr>
                    <tr>
                      <td class="invoice-bottom-top" rowspan="3">Note:<br>
                        <span class="text-muted">Please pay the total sum via bank transfer during 7 days of receive moment. Thank you!</span></td>
                      <td class="invoice-bottom-top">&nbsp;</td>
                      <td class="invoice-bottom-top" colspan="2">Subtotal Price:</td>
                      <td class="invoice-bottom-top">$1389</td>
                    </tr>
                    <tr>
                      <td class="invoice-bottom">&nbsp;</td>
                      <td class="invoice-bottom" colspan="2">Tax 20%:</td>
                      <td class="invoice-bottom">-10%</td>
                    </tr>
                    <tr>
                      <td class="invoice-bottom">&nbsp;</td>
                      <td class="invoice-bottom" colspan="2">Discount:</td>
                      <td class="invoice-bottom">39</td>
                    </tr>
                  </tbody>
                  
                    <tr>
                      <th>&nbsp;</th>
                      <th>&nbsp;</th>
                      <th colspan="2">Unit Price</th>
                      <th>$1418</th>
                    </tr>
                 
                </table>
              </div>
            </div>
            <div class="row col-md-12 pt-40">
              <div class="col">
                <address>
                <div class="text-uppercase font-16 font-medium mb-10">Transfer details</div>
                <p class="mb-0">Account Name: Some Company</p>
                <p class="mb-0">Bank Name: Credit Agricole Bank</p>
                <p class="mb-0">Account No: 4520 0012 0125 KJ</p>
                </address>
              </div>
              <div class="col">
                <div class="row">
                  <div class="col">
                    <h5 class="mb-10 mt-20"><span class="text-uppercase font-16 font-medium ">Alex Robertson</span><br>
                      <span class="text-muted small">Creative Agency Director</span> </h5>
                  </div>
                  <div class="col pt-10" > <img src="../assets/images/signature.png" class="img-fluid" alt=""> </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <hr>
              <div class="text-right">
                <button class="btn btn-primary" type="submit"> Proceed to payment </button>
                <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
              </div>
            </div>
          </div>
        
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="mt-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="d-block mt-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                </ul>
                
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
@endsection