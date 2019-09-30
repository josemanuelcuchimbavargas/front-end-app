import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-usuario',
  templateUrl: './usuario.component.html',
  styleUrls: ['./usuario.component.css']
})
export class UsuarioComponent implements OnInit {
data: any = {};
arrayPerfil = [{'nombre': 'Administrador', 'id': 2}, {'nombre': 'Usuario', 'id': 3}];
arrayEstado = [{'nombre': 'Activo', 'id': 1}, {'nombre': 'Inactivo', 'id': 2}];
arrayUsuario = [
    {'numeroDocumento': 1053893331, 'nombre': 'Juan Carlos', 'direccion': 'Calle 32 #43-1', 'telefono': 8769976, 'perfil': 'Administrador', 'estado': 'Activo'},
    {'numeroDocumento': 1053893332, 'nombre': 'David camilo', 'direccion': 'Calle 32 #43-1', 'telefono': 8769976, 'perfil': 'Usuario', 'estado': 'Activo'},
    {'numeroDocumento': 1053893333, 'nombre': 'Esteban', 'direccion': 'Calle 32 #43-1', 'telefono': 8769976, 'perfil': 'Usuario', 'estado': 'Activo'},
    {'numeroDocumento': 1053893334, 'nombre': 'Camilo andres', 'direccion': 'Calle 32 #43-1', 'telefono': 8769976, 'perfil': 'Usuario', 'estado': 'Acitvo'},
    {'numeroDocumento': 1053893335, 'nombre': 'Mario felipe', 'direccion': 'Calle 32 #43-1', 'telefono': 8769976, 'perfil': 'Usuario', 'estado': 'Activo'},
    {'numeroDocumento': 1053893336, 'nombre': 'Marlon', 'direccion': 'Calle 32 #43-1', 'telefono': 8769976, 'perfil': 'Usuario', 'estado': 'Activo'}
  ];
  constructor() { }

  ngOnInit() {
  }

  guardar(){

    console.log(this.data);
    
  }

}
