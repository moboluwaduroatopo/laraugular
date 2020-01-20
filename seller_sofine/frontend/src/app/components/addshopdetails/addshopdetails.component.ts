import { Component, OnInit } from '@angular/core';
import { JarwisService } from '../../services/jarwis.service';
import { TokenService } from '../../services/token.service';
import { Router } from '@angular/router';
@Component({
  selector: 'app-addshopdetails',
  templateUrl: './addshopdetails.component.html',
  styleUrls: ['./addshopdetails.component.css']
})
export class AddshopdetailsComponent implements OnInit {

  constructor(private Token: TokenService, private Jarwis: JarwisService,private router: Router){ }
  public form = {
    shop_id: null,
    product_name:null,
     file: null,
    price: null
  };
  public response:any;
  public responseshop:any;
  public message = null;
  public error = null;
// displayshopdetails(){
//  this.Jarwis.shopdetails().subscribe(
//    data=>{
//    this.response = data;
//  })
 
// }
displayshopid(){
  this.Jarwis.shopid().subscribe(
    data=>{
    //console.log(data);
    this.responseshop = data;
   // this.responses.shop=data;
   console.log(this.responseshop);
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
  //this.form.shop_id=this.responseshop.shopid.id
  //this.form.user_id=this.response.id
  console.log(this.form)
  this.Jarwis.addshopdetails(this.form).subscribe(
     data => this.handleResponse(data),
     error => this.handleError(error)
  );
}
handleResponse(data) {
  this.message=data.message;
  console.log(data);
 // this.Token.handle(data.access_token);
  this.router.navigateByUrl('/addshopdetails');
}
handleError(error) {
  this.error = error.error.errors.cat_name[0];
//console.log(error.error.errors.cat_name[0]);

}
ngOnInit() {
  // this.displayshopdetails();
  this.displayshopid()
}
}
