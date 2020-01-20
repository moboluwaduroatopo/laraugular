@extends('layouts.navapp')
@section('my-content')
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">ORDERS</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Datatable</li>
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
        <div class="col-12">
            
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Orders</h4>
                   
                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordered table-striped">
                          <thead>
          <tr>
            
            <th>ID</th>
            <th>Customer</th>
            <th>Delivery</th>
            <th>Total Price</th>
            <th>Status</th>
            <th>Date</th>
            <th class="op-0">&nbsp;</th>
            <th class="op-0">&nbsp;</th>
          </tr>
        </thead>
                            <tbody>
          <tr>
            
            <td>8524</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">Hakim Summers</a> </td>
            <td>Air Delivery</td>
            <td>$1175</td>
            <td>In Stock</td>
            <td>11.08.2018, 01:13</td>
            <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
          </tr>
          <tr>
          
            <td>1234</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">Eric Breinstorm</a> </td>
            <td>Post</td>
            <td>$750</td>
            <td>In Stock</td>
            <td>05.04.2018, 05:15</td>
            <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
          </tr>
          <tr>
            
            <td>2651</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">Mellissa Reynolds</a> </td>
            <td>American Ex.</td>
            <td>$375</td>
            <td>Out of Stock</td>
            <td>15.11.2018, 12:15</td>
            <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
          </tr>
          <tr>
            
            <td>4591</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">Jessica Abbingtom</a> </td>
            <td>FeedEx</td>
            <td>$175</td>
            <td>In Stock</td>
            <td>13.06.2018, 09:15</td>
            <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
          </tr>
          <tr>
            
            <td>9821</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">Mason Hudson</a> </td>
            <td>Air Delivery</td>
            <td>$515</td>
            <td>Out of Stock</td>
            <td>23.12.2018, 11:15</td>
            <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
          </tr>
          <tr>
           
            <td>5913</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">Sasha Rhodes</a> </td>
            <td>Post</td>
            <td>$2115</td>
            <td>In Stock</td>
            <td>28.11.2018, 8:15</td>
            <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
          </tr>
          <tr>
            
            <td>7815</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">Mitchell Jones</a> </td>
            <td>American Ex.</td>
            <td>$85</td>
            <td>In Stock</td>
            <td>25.05.2018, 02:15</td>
            <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
          </tr>
          <tr>
            
            <td>6581</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">Nina Fox</a> </td>
            <td>FedEx</td>
            <td>$456</td>
            <td>Out of Stock</td>
            <td>19.07.2018, 12:15</td>
            <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
          </tr>
<tr>
          
            <td>1234</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">Eric Breinstorm</a> </td>
            <td>Post</td>
            <td>$750</td>
            <td>In Stock</td>
            <td>05.04.2018, 05:15</td>
            <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
          </tr>
          <tr>
            
            <td>2651</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">Mellissa Reynolds</a> </td>
            <td>American Ex.</td>
            <td>$375</td>
            <td>Out of Stock</td>
            <td>15.11.2018, 12:15</td>
            <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
          </tr>
          <tr>
            
            <td>4591</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">Jessica Abbingtom</a> </td>
            <td>FeedEx</td>
            <td>$175</td>
            <td>In Stock</td>
            <td>13.06.2018, 09:15</td>
            <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
          </tr>
          <tr>
            
            <td>9821</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">Mason Hudson</a> </td>
            <td>Air Delivery</td>
            <td>$515</td>
            <td>Out of Stock</td>
            <td>23.12.2018, 11:15</td>
            <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
          </tr>
          <tr>
           
            <td>5913</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">Sasha Rhodes</a> </td>
            <td>Post</td>
            <td>$2115</td>
            <td>In Stock</td>
            <td>28.11.2018, 8:15</td>
            <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
          </tr>
          <tr>
            
            <td>7815</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">Mitchell Jones</a> </td>
            <td>American Ex.</td>
            <td>$85</td>
            <td>In Stock</td>
            <td>25.05.2018, 02:15</td>
            <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
          </tr>
          <tr>
            
            <td>6581</td>
            <td class="text-dark weight-600"><a href="ecommerce-order-page.html">Nina Fox</a> </td>
            <td>FedEx</td>
            <td>$456</td>
            <td>Out of Stock</td>
            <td>19.07.2018, 12:15</td>
            <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
          </tr>
        </tbody>
      </table>
   </table>
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