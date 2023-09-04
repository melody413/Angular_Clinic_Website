import { HttpClient } from '@angular/common/http';
import { ChangeDetectorRef, Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { environment } from 'src/environments/environment';
@Component({
  selector: 'app-edit-tag',
  templateUrl: './edit-tag.component.html',
  styleUrls: ['./edit-tag.component.scss']
})
export class EditTagComponent implements OnInit{
  //directive valuable
  name_ar: string = "";
  name_en: string = "";
  excerpt_ar: string = "";
  excerpt_en: string = "";
  model: string = "default";
  answer_ar: string = "";
  answer_en: string= "";
  errorMessage1: string = "";
  errorMessage2: string = "";
  country_id: number = 1 ;
  specialty: number[] = [];
  category: number[] = [];
  is_active: boolean = true;
  //response data
  response_countries : any[] = [];
  response_specialities: any[] = [];
  response_categories: any[] = [];


  tag: any;
  tag_id: number;

  constructor(private http: HttpClient, private cdr: ChangeDetectorRef,private router: Router, private route: ActivatedRoute,) {}


  toggleCheckbox_specialty(event : any){
    const index = this.specialty.indexOf(event.target.value);
    if (index === -1) {
      this.specialty.push(event.target.value);
    } else {
      this.specialty.splice(index, 1);
    }
    console.log(this.specialty.toString());
  }

  toggleCheckbox_category(event : any){
    const index = this.category.indexOf(event.target.value);
    if (index === -1) {
      this.category.push(event.target.value);
    } else {
      this.category.splice(index, 1);
    }
    console.log(this.category.toString());
  }

  ngOnInit(): void {
    this.route.params.subscribe(params => {
      this.tag_id = params['id'];
    });

    //get country
    this.http.get<any>(environment.apiUrl + "country/getall")
        .subscribe((response)=>{
          this.response_countries = Object.entries(response.countries);
          console.log(this.response_countries);
          this.country_id = this.response_countries[0][0];
          this.cdr.detectChanges();
        });

    //get speciallity
    this.http.get<any>(environment.apiUrl + "qanswer/getSpeciality")
        .subscribe((response)=>{
          this.response_specialities = response.specialities ;
          this.cdr.detectChanges();
        });
    
    //get category
    this.http.get<any>(environment.apiUrl + "qanswer/getCategory")
    .subscribe((response)=>{
      this.response_categories = response.categories ;
      this.cdr.detectChanges();
    });

    this.http.get<any>(environment.apiUrl + "tag/edit/" + this.tag_id)
        .subscribe((response)=>{
          this.tag = response.item;
          this.name_ar = this.tag.translations[0]['name'];
          this.name_en = this.tag.translations[1]['name'];
          this.excerpt_ar = this.tag.translations[0]['excerpt'];
          this.excerpt_en = this.tag.translations[1]['excerpt'];
          this.answer_ar = this.tag.translations[0]['description'];
          this.answer_en = this.tag.translations[1]['description'];
          this.country_id = this.tag.country_id;
          this.model = this.tag.module_name;
          if(this.model === "medicine") this.category = response.categoryIds;
          else{this.specialty = response.specialityIds;}
          this.is_active = this.tag.is_active == "1" ? true : false;
          this.cdr.detectChanges();
        })

  }

  create(){
    if(this.name_ar === "" || this.name_en === "" ){
      if(this.name_ar === "") this.errorMessage1 = "*Please input the ar name";
      if(this.name_en === "") this.errorMessage2 = "*Please input the en name";
      return;
    }
    const formData = new FormData();
    formData.append("item_id", this.tag_id.toString());
    formData.append("module_name", this.model);
    formData.append("ar[name]", this.name_ar);
    formData.append("en[name]", this.name_en);
    formData.append("ar[excerpt]", this.excerpt_ar);
    formData.append("en[excerpt]", this.excerpt_en);
    formData.append("ar[description]", this.answer_ar);
    formData.append("en[description]", this.answer_en);
    if(this.country_id) formData.append("country_id", this.country_id.toString());


    if(this.model === "medicine"){
      for(let i = 0 ; this.category.length ; i++)
        if (this.category[i] !== undefined) 
          formData.append("medicine_categories[]", this.category[i].toString());
    }else{
      for (let j = 0; j < this.specialty.length; j++) {
        if (this.specialty[j] !== undefined) 
          formData.append("specialties[]", this.specialty[j].toString());
      }
    }
    formData.append("is_active", this.is_active? "1" : "0");
    this.http.post<any>(environment.apiUrl + "tag/store", formData)
        .subscribe((response)=>{
          if(response.id){
            alert("success");
            this.router.navigate(["/tag/list"]);
          }
        });
    

  }
}