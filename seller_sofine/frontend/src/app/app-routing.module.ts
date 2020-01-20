import { NgModule, Component } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LoginComponent } from './components/login/login.component';
import { SignupComponent } from './components/signup/signup.component';
import { HomeComponent } from './home/home.component';
import { ProfileComponent } from './components/profile/profile.component';
import { RequestResetComponent } from './components/password/request-reset/request-reset.component';
import { ResponseResetComponent } from './components/password/response-reset/response-reset.component';
import { BeforeLoginService } from './services/before-login.service';
import { AfterLoginService } from './services/after-login.service';
import { AddproductComponent } from './components/addproduct/addproduct.component';
import { CategoriesComponent } from './components/categories/categories.component';
import { AddshopComponent } from './components/addshop/addshop.component';
import { ShopComponent } from './components/shop/shop.component';
import { AddshopdetailsComponent } from './components/addshopdetails/addshopdetails.component';
import { ShopdetailsComponent } from './components/shopdetails/shopdetails.component';


const appRoutes: Routes = [
 {
    path: '',
    redirectTo: 'signup', 
    pathMatch: 'full'
    
  },
  {
    path: 'shop/:id',
    component: ShopComponent,
  },
  {
    path: 'shopdetails/:id',
    component: ShopdetailsComponent,
  },
  {
    path: 'addproduct',
    component: AddproductComponent,
    canActivate: [AfterLoginService]
  },
  {
    path: 'home',
    component: HomeComponent,
    canActivate: [AfterLoginService]
  },
  {
    path: 'addcat',
    component: CategoriesComponent,
    canActivate: [AfterLoginService]
  },
  {
    path: 'addshop',
    component: AddshopComponent,
    canActivate: [AfterLoginService]
  },
  {
    path: 'addshopdetails',
    component: AddshopdetailsComponent,
    canActivate: [AfterLoginService]
  },
  
  // {
  //   path: 'login',
  //   component: LoginComponent,
  //   canActivate: [BeforeLoginService]
  // },
  {
    path: 'signup',
    component: SignupComponent,
    // canActivate: [BeforeLoginService]
  },
  {
    path: 'profile',
    component: ProfileComponent,
    canActivate: [AfterLoginService]
  },
  {
    path: 'request-password-reset',
    component: RequestResetComponent,
    canActivate: [BeforeLoginService]
  },
  {
    path: 'response-password-reset',
    component: ResponseResetComponent,
    canActivate: [BeforeLoginService]
  },
];

@NgModule({
  imports: [
    RouterModule.forRoot(appRoutes)
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
