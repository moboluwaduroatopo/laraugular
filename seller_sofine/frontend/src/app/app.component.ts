import { Component } from '@angular/core';
import { AuthService } from './services/auth.service';
import { Router } from '@angular/router';
import { TokenService } from './services/token.service';
import { JarwisService } from './services/jarwis.service';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'app';
  public loggedIn: boolean;

  constructor(
    private Auth: AuthService,
    private router: Router,
    private Jarwis: JarwisService,
    private Token: TokenService
  ) { }
  public response:any;
  public res:any;
  ngOnInit() {
    this.Auth.authStatus.subscribe(value => this.loggedIn = value);
    this.displaycat()
    this.displaytailor()
  }
  
displaycat(){
 this.Jarwis.cat().subscribe(
   data=>{
   //console.log(data);
   this.response = data;
  // this.responses.shop=data;
  console.log(this.response);
 })
 
}
displaytailor(){
  // this.response = this.Jarwis.det;
  // console.log(this.response);
  this.Jarwis.catid().subscribe(data=>{
    //console.log(data);
    this.res = data;
      console.log(this.res);
  //  console.log(this.res.tailor.current_page);
  //  console.log(this.res.tailor.per_page);
  })
  
}
  logout(event: MouseEvent) {
    event.preventDefault();
    this.Token.remove();
    this.Auth.changeAuthStatus(false);
    this.router.navigateByUrl('/login');
  }
}
