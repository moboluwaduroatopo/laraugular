import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { JarwisService } from '../../services/jarwis.service';
import { TokenService } from '../../services/token.service';
import { Router } from '@angular/router';
import { AuthService } from '../../services/auth.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
public role;
  public form = {
    email: null,
    password: null
  };

  public error = null;

  constructor( 
    private Jarwis: JarwisService,
    private Token: TokenService,
    private router: Router,
    private Auth: AuthService
  ) { }

  onSubmit() {
    console.log(this.form)
    // return  this.http.post('http://localhost/angularwork/laravel-angular-authentication/backend/public/api/login',this.form).subscribe(data=>{
    //   console.log(data),
      
    this.Jarwis.login(this.form).subscribe(
      // data=>
      //   console.log(data),
      data => this.handleResponse(data),
      error => this.handleError(error)
      );
  }
  handleResponse(data) {
    //this.Jarwis.authuser(data);
    this.Token.handle(data.access_token);
    //localStorage.setItem(data.user);
    this.Auth.changeAuthStatus(true);
  //console.log(this.Jarwis.authuser(data));
  //console.log(data);
    // this.role=data;
    // if (this.role.role =="admin"){

    // }else{

    // }
    this.router.navigateByUrl('/profile');
  }

  handleError(error) {
    this.error = error.error.error;
  }
  ngOnInit() {
  }

}
