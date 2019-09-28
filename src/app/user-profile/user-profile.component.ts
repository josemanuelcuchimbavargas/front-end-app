import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-user-profile',
  templateUrl: './user-profile.component.html',
  styleUrls: ['./user-profile.component.css']
})
export class UserProfileComponent implements OnInit {
data:any={};
arrayPerfil=[{'nombre':'Administrador', 'id':2}, {'nombre':'Usuario', 'id':3}];
arrayEstado = [{
  'nombre': 'Activo', 'id': 1
},
{
  'nombre': 'Inactivo', 'id': 2
}];
  constructor() { }

  ngOnInit() {
  }

  guardar(){

    console.log(this.data);
    
  }

}
