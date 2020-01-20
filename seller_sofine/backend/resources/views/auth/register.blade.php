@extends('layouts.app')

@section('content')
<div class="container">
   
        {{-- <p>If you are member <a href="" class="text-red" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-sign-in-alt mr-2"></i>Login</a></p> --}}
        <div class="stepwizard col-md-offset-3">
            <div class="stepwizard-row setup-panel">
              <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Seller Account Information</p>
              </div>
              <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Business Information</p>
              </div>
              <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p> Bank Account Information</p>
              </div>
            </div>
          </div>
          
          <form #loginForm=ngForm (ngSubmit)="onSubmit()">
           
            <div class="row setup-content" id="step-1">
              <div class="col-xs-12 col-md-offset-3">
                <div class="col-md-12">
                  <h3> Seller Account Information</h3>
                  <div class="form-group">
                    <label class="control-label">Full Name</label>
                    {{-- <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Full Name" name="name"  [(ngModel)]="form.name"/> --}}
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                  </div>
                  <div class="form-group">
                    <label class="control-label">Phone Number</label>
                    <input maxlength="100" type="text" class="form-control" required="required" placeholder="Enter phone" name="phone" />
                    
                  </div>
                  <div class="form-group">
                    <label class="control-label">Email</label>
                    {{-- <input maxlength="100" type="email" required="required" class="form-control" placeholder="Enter Email" name="email" [(ngModel)]="form.email"/> --}}
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                  </div>
                  <div class="form-group">
                    <label class="control-label">Display name/Shop name</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Display name/Shop name" name="shopname" />
                    
                  </div>
                  <div class="form-group">
                    <label class="control-label">Password</label>
                    {{-- <input maxlength="100" type="password" required="required" class="form-control" placeholder="Enter password" name="password"  [(ngModel)]="form.password"/> --}}
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  </div>
                  <div class="form-group ">
                    <label class=" col-form-label">Confirm Password</label>
                      <input type="password" name="password_confirmation" class="form-control" id="inputPassword3" placeholder="Password" name="password_confirmation"
                        required>               
                  </div>
                  <div class="form-group ">
                    <label class=" col-form-label">Role</label>
                  <select  class="form-control" name="role" >
                    <option  value="shop">Shop</option>
                    <option value="tailor">Tailor</option>
                  </select>
                  </div>
                  <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
              </div>
            </div>
            <div class="row setup-content" id="step-2">
              <div class="col-xs-6 col-md-offset-3">
                <div class="col-md-12">
                  <h3> Business Information</h3>
                  <div class="form-group">
                    <label class="control-label">Address</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Address" name="address" />
                    
                  </div>
                  <div class="form-group">
                    <label class="control-label">City/Town</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter City" name="town" />
                    
                  </div>
                  <div class="form-group">
                    <label class="control-label">Country</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Country" name="country"  />
                    
                  </div>
                  <div class="form-group">
                    <label class="control-label">TIN(Tax Identification Number)</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter TIN" name="tin"  />
                   
                  </div>
                  <div class="form-group">
                    <label class="control-label">Business Registration Number</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="" name="brn"  [(ngModel)]="form.brn"/>
                    
                  </div>
                  <div class="form-group">
                    <label class="control-label">Company Name</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="" name="companyname" />
                    
                  </div>
                  <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
              </div>
            </div>
            <div class="row setup-content" id="step-3">
              <div class="col-xs-6 col-md-offset-3">
                <div class="col-md-12">
                  <h3> Bank Account Information</h3>
                  <div class="form-group">
                    <label class="control-label">Bank Name</label>
                    <input maxlength="200" type="text" required="required"  class="form-control" placeholder="" name="bankname"/>
                    
                  </div>
                  <div class="form-group">
                    <label class="control-label">Account Name</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder=""  name="acctname" />
                    
                  </div>
                  <div class="form-group">
                    <label class="control-label">Account Number</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="" name="acctnumber"  />
                   
                  </div>
                  <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
                </div>
              </div>
            </div>
          </form>
          {{-- <app-login></app-login> --}}
        
</div>
@endsection
