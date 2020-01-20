import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { environment } from '../environments/environment';
import { AppComponent } from './app.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { LoginComponent } from './components/login/login.component';
import { SignupComponent } from './components/signup/signup.component';
import { ProfileComponent } from './components/profile/profile.component';
import { RequestResetComponent } from './components/password/request-reset/request-reset.component';
import { ResponseResetComponent } from './components/password/response-reset/response-reset.component';
import { AppRoutingModule } from './/app-routing.module';
import { FormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';
import { ServiceWorkerModule } from '@angular/service-worker';
import { HomeComponent } from './home/home.component';
import { JarwisService } from './services/jarwis.service';
import { TokenService } from './services/token.service';
import { AuthService } from './services/auth.service';
import { BeforeLoginService } from './services/before-login.service';
import { AfterLoginService } from './services/after-login.service';
import { AddproductComponent } from './components/addproduct/addproduct.component';
import { CategoriesComponent } from './components/categories/categories.component';
import { AddshopComponent } from './components/addshop/addshop.component';
import { AddshopdetailsComponent } from './components/addshopdetails/addshopdetails.component';
import { ShopComponent } from './components/shop/shop.component';
import { ShopdetailsComponent } from './components/shopdetails/shopdetails.component';
import { SidebarComponent } from './components/sidebar/sidebar.component';




@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    LoginComponent,
    SignupComponent,
    ProfileComponent,
    RequestResetComponent,
    ResponseResetComponent,
    HomeComponent,
    AddproductComponent,
    CategoriesComponent,
    AddshopComponent,
    AddshopdetailsComponent,
    ShopComponent,
    ShopdetailsComponent,
    SidebarComponent
  ],
  imports: [
    BrowserModule,
    ServiceWorkerModule.register('ngsw-worker.js', { enabled: environment.production }),
    AppRoutingModule,
    FormsModule,
    HttpClientModule
   
  ],
  providers: [JarwisService,TokenService,AuthService,BeforeLoginService,AfterLoginService],
  bootstrap: [AppComponent]
})
export class AppModule { }
