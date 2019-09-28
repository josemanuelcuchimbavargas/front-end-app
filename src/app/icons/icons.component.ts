import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-icons',
  templateUrl: './icons.component.html',
  styleUrls: ['./icons.component.css']
})
export class IconsComponent implements OnInit {

  constructor() { }

  arrayEstado = [{
    'nombre': 'Activo', 'id': 1
  },
  {
    'nombre': 'Inactivo', 'id': 2
  }];

  data: any = {};

  ngOnInit() {
  }

  guardar(){
      console.log(this.data);
  }

}
