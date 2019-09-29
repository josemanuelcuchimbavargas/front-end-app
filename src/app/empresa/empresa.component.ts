import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-empresa',
  templateUrl: './empresa.component.html',
  styleUrls: ['./empresa.component.css']
})
export class EmpresaComponent implements OnInit {

  constructor() { }

  arrayEstado = [
    {'nombre': 'Activo', 'id': 1},
    {'nombre': 'Inactivo', 'id': 2}
  ];
  data: any = {};
  arrayEmpresa=[
    {'nit':1053893331,'nombre':'8 Gol','direccion':'Calle 32 #43-1','telefono':8769976,'email':'email@gmail.com','estado':'Activo'},
    {'nit':1053893332,'nombre':'El golazo','direccion':'Calle 32 #43-1','telefono':8769976,'email':'email@gmail.com','estado':'Activo'},
    {'nit':1053893333,'nombre':'Cancha sintetica canaima','direccion':'Calle 32 #43-1','telefono':8769976,'email':'email@gmail.com','estado':'Activo'},    
  ];
  ngOnInit() {
  }

  guardar(){
      console.log(this.data);
  }

}
