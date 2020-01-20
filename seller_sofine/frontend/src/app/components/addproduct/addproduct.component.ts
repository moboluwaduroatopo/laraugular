import { Component, OnInit } from '@angular/core';
import { JarwisService } from '../../services/jarwis.service';
import { Router } from '@angular/router';
@Component({
  selector: 'app-addproduct',
  templateUrl: './addproduct.component.html',
  styleUrls: ['./addproduct.component.css']
})
export class AddproductComponent implements OnInit {
  public det : any;
  public response:any;
  constructor(private Jarwis: JarwisService,private router: Router){ }

  public form = {
   product_name: null,
    price: null,
    // quantity:null,
    productfile:null,
    user_id:null,
    cat_id:null,
    destription:null
  };
  //public response:any;
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
    this.form.productfile = reader.result;
   // console.log(this.form.file)
  }
  reader.readAsDataURL(files);
}
onSubmit() {
  // this.form.cat_id=this.responsecat.id
  this.form.user_id=this.response.id
  console.log(this.form)
  this.Jarwis.addproduct(this.form).subscribe(
     data => this.handleResponse(data),
     error => this.handleError(error)
  );
}
handleResponse(data) {
  this.message=data.message;
  console.log(data);
 // this.Token.handle(data.access_token);
  this.router.navigateByUrl('/addproduct');
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
