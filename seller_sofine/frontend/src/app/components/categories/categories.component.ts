import { Component, OnInit } from '@angular/core';
import { JarwisService } from '../../services/jarwis.service';
import { TokenService } from '../../services/token.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-categories',
  templateUrl: './categories.component.html',
  styleUrls: ['./categories.component.css']
})
export class CategoriesComponent implements OnInit {

  constructor(private Token: TokenService, private Jarwis: JarwisService,private router: Router){ }
  public form = {
    cat_name: null,
    // description:null,
    // role: null,
    cat_type: null
  };
  public response:any;
  public message = null;
  public error = null;
displayprofil(){
 this.Jarwis.profile().subscribe(
   data=>{
   this.response = data;
 })
 
}
onSubmit() {
  //this.form.cat_type=this.response.role
  console.log(this.form)
  this.Jarwis.addcat(this.form).subscribe(
     data => this.handleResponse(data),
     error => this.handleError(error)
  );
}
handleResponse(data) {
  this.message=data.message;
  console.log(data);
 // this.Token.handle(data.access_token);
  this.router.navigateByUrl('/addcat');
}
handleError(error) {
  this.error = error.error.errors.cat_name[0];
//console.log(error.error.errors.cat_name[0]);

}
ngOnInit() {
  this.displayprofil()
}
}
