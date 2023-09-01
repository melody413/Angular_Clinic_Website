import { Component, OnInit, OnChanges, Input, ChangeDetectorRef, ViewChild, AfterViewChecked, AfterViewInit   } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';
import { MatPaginator,PageEvent } from '@angular/material/paginator';


@Component({
  selector: 'app-lab-category-list',
  templateUrl: './lab-category-list.component.html',
  styleUrls: ['./lab-category-list.component.scss']
})
export class LabCategoryListComponent {
  @ViewChild(MatPaginator) paginator: MatPaginator;
  @Input() tableData: any[];
  pageSize : number ;
  src: string = environment.url + "uploads/lab_categories/";
  default_src: string = environment.url + "assets/frontend/images/general/doctorak_default_logo_img.png";
  
  constructor(private http: HttpClient, private cdr: ChangeDetectorRef) {}
  ngOnInit(): void {
    this.http.get<any>(environment.apiUrl + "lab_category/list").
      subscribe((response) => {        
        this.tableData = response.lab_categories["data"];
        this.paginator.pageSize = 10;
        this.pageSize = 10;
        this.paginator.length = response.lab_categories["total"];
      });
  }
  onPageChange(event: any) {
    console.log("--------" + this.paginator.length);
  }

  onSelectChange(event : any) {
    this.pageSize = event.target.value;
    this.ngAfterViewInit();
  }
  onSearchChange(event : any){
    const searchTerm = event.target.value.toLowerCase();
    this.tableData = this.tableData.filter(item => {
      return item[2].toLowerCase().includes(searchTerm) || item[3].toLowerCase().includes(searchTerm);
    });
    this.cdr.detectChanges();
    // console.log(event.target.value);
  }

  ngAfterViewInit() {
    this.paginator.pageSize = this.pageSize;
  }

  delete(id: number){
    if(confirm("Do you delete this data?")){
      this.http.get<any>(environment.apiUrl+ "lab_category/delete/" + id)
      .subscribe((response)=>{
        this.ngOnInit();
      })
    }
  }
}