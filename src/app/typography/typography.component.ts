import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-typography',
  templateUrl: './typography.component.html',
  styleUrls: ['./typography.component.css']
})
export class TypographyComponent implements OnInit {

data: any = {};
arrayEstado = [{'nombre': 'Activo', 'id': 1}, {'nombre': 'Inactivo', 'id': 2}];
arrayHorario = [
    {'horaInicio': '08:00 AM', 'horaFin': '09:00 AM', 'estado': 'Activo'},
    {'horaInicio': '09:00 AM', 'horaFin': '10:00 AM', 'estado': 'Activo'},
    {'horaInicio': '10:00 AM', 'horaFin': '11:00 AM', 'estado': 'Activo'},
    {'horaInicio': '11:00 AM', 'horaFin': '12:00 PM', 'estado': 'Activo'},
    {'horaInicio': '12:00 PM', 'horaFin': '13:00 PM', 'estado': 'Activo'}

  ];

  constructor() { }

  ngOnInit() {
  }

  guardar(){

    console.log(this.data);

  }

}
