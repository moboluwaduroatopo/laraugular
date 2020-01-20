import { Component, OnInit } from '@angular/core';
import { JarwisService } from '../../services/jarwis.service';
import { TokenService } from '../../services/token.service';
import { Router } from '@angular/router';
@Component({
  selector: 'app-addshop',
  templateUrl: './addshop.component.html',
  styleUrls: ['./addshop.component.css']
})
export class AddshopComponent implements OnInit {

  constructor(private Token: TokenService, private Jarwis: JarwisService,private router: Router){ }
  public form = {
    cat_id: null,
    description:null,
     file: null,
    user_id: null
  };
  public response:any;
  public responsecat:any;
  public message = null;
  public error = null;
displayuserid(){
 this.Jarwis.profile().subscribe(
   data=>{
   this.response = data;
   console.log(this.response);
 })
 
}
displaycatid(){
  this.Jarwis.catid().subscribe(
    data=>{
    //console.log(data);
    this.responsecat = data;
   // this.responses.shop=data;
   console.log(this.responsecat);
  })
  
 }
 uploadFile(event){
  let files =event.target.files[0];
  let reader = new FileReader();
  let vm = this;
  reader.onloadend =()=> {
    // body...
    this.form.file = reader.result;
   // console.log(this.form.file)
  }
  reader.readAsDataURL(files);
}
onSubmit() {
  // this.form.cat_id=this.responsecat.id
  this.form.user_id=this.response.id
  console.log(this.form.cat_id)
  this.Jarwis.addshop(this.form).subscribe(
     data => this.handleResponse(data),
     error => this.handleError(error)
  );
}
handleResponse(data) {
  this.message=data.message;
  console.log(data);
 // this.Token.handle(data.access_token);
  this.router.navigateByUrl('/addshop');
}
handleError(error) {
  this.error = error.error.errors.cat_name[0];
//console.log(error.error.errors.cat_name[0]);

}
ngOnInit() {
  this.displayuserid();
  this.displaycatid()
}

}
