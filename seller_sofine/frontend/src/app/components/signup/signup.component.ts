import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { JarwisService } from '../../services/jarwis.service';
import { TokenService } from '../../services/token.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.css']
})
export class SignupComponent implements OnInit {

  public form = {
    email: null,
    name: null,
    phone:null,
    shopname:null,
    password: null,
    password_confirmation: null,
    address:null,
    town:null,
    country:null,
    tin:null,
    brn:null,
    companyname:null,
    bankname:null,
    acctname:null,
    acctnumber:null,
    role:null
  };
  public error = [];
  public message = null;
  constructor(
    private Jarwis: JarwisService,
    private Token: TokenService,
    private router: Router
  ) { }

  onSubmit() {
    console.log(this.form)
    // return  this.http.post('http://localhost/angularwork/laravel-angular-authentication/backend/public/api/signup',this.form).subscribe(data=>{
    //   console.log(data),
    //   error => this.handleError(error)
    // this.Jarwis.login(this.form).subscribe(
    //   data => this.handleResponse(data),
     
   //  } );
    this.Jarwis.signup(this.form).subscribe(
      // data =>console.log(data),
      data => this.handleResponse(data),
      error => this.handleError(error)
    );
  }
  handleResponse(data) {
    this.message="Register Successful";
    this.Token.handle(data.access_token);
    this.router.navigateByUrl('/profile');
  }

  handleError(error) {
    this.error = error.error.errors;
  }

  ngOnInit() {
  }

}
