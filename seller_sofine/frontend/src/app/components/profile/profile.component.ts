import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { JarwisService } from '../../services/jarwis.service';
import { TokenService } from '../../services/token.service';
import { Router } from '@angular/router';
@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit {
  constructor( private http: HttpClient,private Token: TokenService, private Jarwis: JarwisService,private router: Router) { }
  public response:any;
  // public form = {
  //   email:this.response.email,
  //   name: null,
  //   phone:null,
  //   role: null,
  //   file: null
  // };
 //  private info : any;
 

 ngOnInit() {
    this.displayprofile()
 }
displayprofile(){
 this.Jarwis.profile().subscribe(
   data=>{
   //console.log(data);
   this.response = data;
  console.log(this.response);
 })
 
}
uploadFile(event){
  let files =event.target.files[0];
  let reader = new FileReader();
  let vm = this;
  reader.onloadend =()=> {
    // body...
    this.response.file = reader.result;
   // console.log(this.response.file)
  }
  reader.readAsDataURL(files);
}
onSubmit() {
  console.log(this.response)
  this.Jarwis.updateprofile(this.response).subscribe(
     data => this.handleResponse(data),
    //error => this.handleError(error)
  );
}
handleResponse(data) {
 // this.Token.handle(data.access_token);
  this.router.navigateByUrl('/profile');
}

// handleError(error) {
//   this.error = error.error.errors;
// }
}
