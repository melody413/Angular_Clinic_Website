import { Component, OnInit, OnChanges, Input, ChangeDetectorRef, ViewChild, AfterViewChecked, AfterViewInit   } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { environment } from 'src/environments/environment';
import { MatPaginator,PageEvent } from '@angular/material/paginator';

@Component({
  selector: 'app-lab-service-list',
  templateUrl: './lab-service-list.component.html',
  styleUrls: ['./lab-service-list.component.scss']
})

export class LabServiceListComponent {
  @ViewChild(MatPaginator) paginator: MatPaginator;
  @Input() tableData: any[];
  pageSize : number ;
  search_result: any[];
  search_index: string = "";

  constructor(private http: HttpClient, private cdr: ChangeDetectorRef) {}
  ngOnInit(): void {
    this.http.get<any>(environment.apiUrl + "lab_services/list").
      subscribe((response) => {        
        this.tableData = response.lab_services["data"];
        this.paginator.pageSize = 15;
        this.paginator.length = response.lab_services["total"];
      });
  }
  onPageChange(event: any) {
    this.pageChange();
  }

  onSelectChange(event : any) {
    this.pageSize = event.target.value;
    this.paginator.pageSize = event.target.value;
    this.paginator.pageIndex = 0;
    this.pageChange();
  }

  //search with the index
  search(){
    if(this.search_index == ""){
      this.ngOnInit();
    }else{
      this.http.post<any>(environment.apiUrl + "lab_services/table", {"search_index": this.search_index.toString()})   
          .subscribe((response)=>{
            this.tableData = response.search_result;
            this.paginator.pageSize = response.search_result.length;
            this.paginator.length = response.search_result.length;
            this.paginator.pageIndex = response.search_result["current_page"]-1;
            this.cdr.detectChanges(); // Manually trigger change detection
          })   
    }
  }
  pageChange(){
    if(this.paginator.pageIndex == 0 && this.paginator.pageSize == 10){
      this.pageSize = 10;
      this.ngOnInit();
    }else{
      this.http.post<any>(environment.apiUrl + "lab_services/table", {
        params: new HttpParams()
          .set('pageSize', this.paginator.pageSize.toString())
          .set('pageIndex', this.paginator.pageIndex.toString())
      }).subscribe((response)=>{
        this.tableData = response.search_result["data"];
        this.paginator.pageSize = response.search_result["per_page"];
        this.paginator.length = response.search_result["total"];
        this.paginator.pageIndex = response.search_result["current_page"]-1;
        this.cdr.detectChanges(); // Manually trigger change detection
        this.cdr.detectChanges(); // Manually trigger change detection
      })
    }
  }

  //delete the data
  delete(id: number){
    if(confirm("Do you really delete the data?1")){
      this.http.get<any>(environment.apiUrl+ "lab_services/delete/" + id)
      .subscribe((response)=>{
        this.ngOnInit();
      })
    }
  }
}
