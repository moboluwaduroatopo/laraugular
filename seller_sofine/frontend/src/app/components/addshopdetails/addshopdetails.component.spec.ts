import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AddshopdetailsComponent } from './addshopdetails.component';

describe('AddshopdetailsComponent', () => {
  let component: AddshopdetailsComponent;
  let fixture: ComponentFixture<AddshopdetailsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AddshopdetailsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AddshopdetailsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
