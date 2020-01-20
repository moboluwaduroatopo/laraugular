import { Component, OnInit } from '@angular/core';
import { JarwisService } from '../../services/jarwis.service';
import { Router, ActivatedRoute } from '@angular/router';
@Component({
  selector: 'app-shop',
  templateUrl: './shop.component.html',
  styleUrls: ['./shop.component.css']
})
export class ShopComponent implements OnInit {
  public response:any;
  public det:any;
  public cat:any;
  public shop_id
  constructor(
    private Jarwis: JarwisService,
    private router: Router,
    public actRoute: ActivatedRoute
    
  ) { }
  shop(){
   
  }
  cate(){
    // this.response = this.Jarwis.det;
    // console.log(this.response);
    this.Jarwis.catid().subscribe(data=>{
      //console.log(data);
      this.cat = data;
     //console.log(this.cat);
    })
    
  }
  ngOnInit() {
    this.cate()
    this.shop()
    this.actRoute.paramMap.subscribe((params => {
      //console.log(this.shop_id)
      this.shop_id = params.get('id');
       //console.log(this.shop_id)
    this.Jarwis.shop(this.shop_id).subscribe(data=>{
    this.response = data;
    console.log(this.response)
    this.det=this.response.catname[0];
   console.log(this.det.cat_name);
  })
     // console.log(this.Jarwis.shop(id));
    }));
  //  this.actRoute.params.subscribe(params => {
  //     console.log(params.id)
  // })
  }

  navigate(id){
    this.router.navigate(['shopdetails/'+id+''])
  }
}
