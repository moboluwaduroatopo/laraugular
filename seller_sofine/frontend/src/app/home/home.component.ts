import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { JarwisService } from '../services/jarwis.service';
import { AddproductComponent } from '../components/addproduct/addproduct.component';
// import {NgxPaginationModule} from 'ngx-pagination';
@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  constructor( private http: HttpClient, private Jarwis: JarwisService) { }
 public profile={
   email:null,
   password:null
 }
//  private info : any;
 public response:any;
 public res:any;
  ngOnInit() {
     this.displaycat()
     this.displaytailor()
  }
displaycat(){
  // this.response = this.Jarwis.det;
  // console.log(this.response);
  this.Jarwis.catid().subscribe(data=>{
    //console.log(data);
    this.response = data;
   // console.log(this.response);
  })
  
}
displaytailor(){
  // this.response = this.Jarwis.det;
  // console.log(this.response);
  this.Jarwis.tailor().subscribe(data=>{
    
    this.res = data;
    console.log(this.res);
  //  console.log(this.res.tailor.current_page);
  //  console.log(this.res.tailor.per_page);
  })
  
}
}
