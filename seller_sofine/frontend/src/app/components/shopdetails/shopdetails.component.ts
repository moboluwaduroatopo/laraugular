import { Component, OnInit } from '@angular/core';
import { JarwisService } from '../../services/jarwis.service';
import { TokenService } from '../../services/token.service';
import { Router, ActivatedRoute } from '@angular/router';
@Component({
  selector: 'app-shopdetails',
  templateUrl: './shopdetails.component.html',
  styleUrls: ['./shopdetails.component.css']
})
export class ShopdetailsComponent implements OnInit {

  constructor(private Token: TokenService, 
    private Jarwis: JarwisService,
    private router: Router,
    public actRoute: ActivatedRoute){ }
  public response:any;
  public responseshop:any;
  public message = null;
  public error = null;
  public sdet;
// displayshopdetails(){
//  this.Jarwis.shopdetails().subscribe(
//    data=>{
//    this.response = data;
//  })
 
// }
  ngOnInit() {
    // this.displayshopdetails();
    this.actRoute.paramMap.subscribe((params => {
      //console.log(this.shop_id)
      let id = params.get('id');
       console.log(id)
    this.Jarwis.shopdetails(id).subscribe(data=>{
    this.response = data;
    this.sdet=this.response.shop[0];
  console.log(this.response);
  })
     // console.log(this.Jarwis.shop(id));
    }));
  }

}
