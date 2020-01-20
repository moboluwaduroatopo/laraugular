@extends('layouts.navapp')
@section('my-content')
<div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Mailbox</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Mailbox</li>
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
  <!-- Column -->
  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-20 mt-0 align-self-center">Add new Product</h5>
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="relative">
              <div id="amazingslider-wrapper-1" class="mb-40">
                <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                  <ul class="amazingslider-slides" style="display:none;">
                    <li><a href="../assets/images/gallery/a-lightbox.jpg" class="html5lightbox"><img src="../assets/images/gallery/a.jpg" alt="" title="" /></a> </li>
                    <li><a href="../assets/images/gallery/4-lightbox.jpg" class="html5lightbox"><img src="../assets/images/gallery/4.jpg" alt="" title="" /></a> </li>
                    <li><a href="../assets/images/gallery/13-lightbox.jpg" class="html5lightbox"><img src="../assets/images/gallery/13.jpg" alt="" title="" /></a> </li>
                    <li><a href="../assets/images/gallery/19-lightbox.jpg" class="html5lightbox"><img src="../assets/images/gallery/19.jpg" alt="" title="" /></a> </li>
                  </ul>
                  <ul class="amazingslider-thumbnails" style="display:none;">
                    <li><img src="../assets/images/gallery/a-tn.jpg" alt="" title="" /></li>
                    <li><img src="../assets/images/gallery/4-tn.jpg" alt="" title="" /></li>
                    <li><img src="../assets/images/gallery/13-tn.jpg" alt="" title="" /></li>
                    <li><img src="../assets/images/gallery/19-tn.jpg"  alt="" title="" /></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="upload-photo">
              <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="" name="productfile"/>
            </div>
          </div>
          <!-- End of product slider -->
          <div class="col-lg-8 col-md-8">
            <div class="row">
              <div class="form-wrap form-wrap2 col-12 mt-4">
                <form class="form-horizontal">
                  <div class="col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label class="control-label text-primary font-12">Product Name</label>
                      <div>
                        <input type="text" class="form-control font-14"  name="name"  placeholder="Name">
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="row m-0">
                      <div class="col-sm-12 col-xs-12">
                        <label class="control-label font-14">Select Category</label>
                        <div>
                          <select class="custom-select font-14" name="cat_id" data-style="btn-default btn-outline">
                            <option  data-tokens="Category">Select Category </option>
                            <option data-tokens="Category 1">Category 1</option>
                            <option data-tokens="Category 2">Category 2</option>
                            <option data-tokens="Category 3">Category 3</option>
                          </select>
                        </div>
                      </div>
                      {{-- <div class="col-md-6 col-xs-12">
                        <label class="control-label font-14">SKU identification</label>
                        <div >
                          <input type="text" class="form-control font-14"  placeholder="SKU">
                        </div>
                      </div> --}}
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="row m-0">
                      <div class="col-md-6 col-xs-12">
                        <label class="control-label font-14"> Price</label>
                        <div>
                          <input type="text" class="form-control font-14" name="price"  placeholder="price">
                        </div>
                      </div>
                      
                      <div class="col-md-6 col-xs-12">
                        <label class="control-label">Quantity</label>
                        <div>
                          <input type="text" class="form-control font-14" name="qty"  placeholder="Quantity">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  {{-- <div class="form-group">
                    <div class="col-sm-12">
                      <label class="control-label">Tags</label>
                      <div class="tags-default">
                           <select multiple data-role="tagsinput">
                            <option value="Amsterdam">Amsterdam</option>
                            <option value="Washington">Washington</option>
                            <option value="Sydney">Sydney</option>
                        </select>
                      </div>
                    </div>
                  </div> --}}
                  <div class="col-md-6 col-xs-12">
                        <input type="hidden" class="form-control font-14" name="buyer_id"  placeholder="">
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label class="col-12">Description</label>
                      <div class="col-12">
                        <textarea class="form-control textarea-lg" name="description"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group bt-switch row">
                    <div class="col-md-6 pl-30">
                      <div class="">
                         <input type="checkbox" checked data-on-color="success" data-off-color="info" data-on-text="Yes" data-off-text="No">
                        <label class="m-l-10"> Available</label>
                      </div>
                    </div>
                    <div class="col-md-6 text-right pr-30">
                      <div class="5">
                        <button type="button" class="btn waves-effect waves-light btn-primary">Save</button>
                        <button type="button" class="btn waves-effect waves-light btn-outline-default">Cancel</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
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