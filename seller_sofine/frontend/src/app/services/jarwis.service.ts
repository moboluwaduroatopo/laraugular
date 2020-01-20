import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable()
export class JarwisService {
  // public productdetail:any;
  private baseUrll = 'http://localhost/angularwork/seller_sofine/backend/public/api';  
  private baseUrl = 'http://localhost/angularwork/sofine/backend/public/api';
  public det: any;
  constructor(private http: HttpClient) { }
 
  signup(data) {
    return this.http.post(`${this.baseUrll}/signup`, data)
  }

  login(data) {
    return this.http.post(`${this.baseUrll}/login`, data)
  }
  product(data) {
    return this.http.post(`${this.baseUrl}/product`, data)
  }
 addshop(data) {
    return this.http.post(`${this.baseUrl}/addshop`, data)
  }
  addproduct(data) {
    return this.http.post(`${this.baseUrll}/addproduct`, data)
  }
  addshopdetails(data) {
    return this.http.post(`${this.baseUrl}/addshopdetails`, data)
  }
  profile() {
    return this.http.get(`${this.baseUrll}/me`,{headers:{
      Authorization:`Bearer ${localStorage.token}`
    }})
  }
  addcat(data) {
    return this.http.post(`${this.baseUrll}/addcat`,data,{headers:{
      Authorization:`Bearer ${localStorage.token}`
    }})
  }
  shop(id:string) {
    return this.http.get(`${this.baseUrl}/shop/${id}`)
  }
  cat() {
    return this.http.get(`${this.baseUrl}/cat`)
  }
  shopdetails(id:string) {
    return this.http.get(`${this.baseUrl}/shopdetails/${id}`)
  }
  catid() {
    return this.http.get(`${this.baseUrll}/catid`)
  }
  
  shopid() {
    return this.http.get(`${this.baseUrl}/shopid`)
  }
  tailor() {
    return this.http.get(`${this.baseUrl}/tailor`)
  }
   productdetails() {
    return this.http.get(`${this.baseUrl}/productdetail`)
  }
  // productdetail(data):Observable<MyNewInterface[]> {
  //   return this.http.get(`${this.baseUrl}/productdetail`, data)
  // }
  getid(data) {
     //console.log(data.user);
    this.det = data;
  }
  productdetail(data) {
    //console.log(data.user);
   this.det = data;
 }
  sendPasswordResetLink(data) {
    return this.http.post(`${this.baseUrl}/sendPasswordResetLink`, data)
  }
  
  changePassword(data) {
    return this.http.post(`${this.baseUrl}/resetPassword`, data)
  }
//   displayprofile(u){
// this.productdetail= u;
// }
updateprofile(data) {
  return this.http.post(`${this.baseUrl}/me`,data,{headers:{
    Authorization:`Bearer ${localStorage.token}`
  }})
}
//
}
