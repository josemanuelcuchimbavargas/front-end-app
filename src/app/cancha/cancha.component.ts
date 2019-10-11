import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-cancha',
  templateUrl: './cancha.component.html',
  styleUrls: ['./cancha.component.css']
})
export class CanchaComponent implements OnInit {

  arrayEstado = [
    {'nombre': 'Activo', 'id': 1},
    {'nombre': 'Inactivo', 'id': 2}
  ];
  data: any = {};
  arrayCancha = [
    {'nombre': 'cancha 1', 'precio': 50000, 'imagen': 'url/imagen/img.jpg', 'estado': 'Activo'},
    {'nombre': 'cancha 2', 'precio': 50000, 'imagen': 'url/imagen/img.jpg', 'estado': 'Activo'},
    {'nombre': 'cancha 3', 'precio': 50000, 'imagen': 'url/imagen/img.jpg', 'estado': 'Activo'},
    {'nombre': 'cancha 4', 'precio': 50000, 'imagen': 'url/imagen/img.jpg', 'estado': 'Activo'},
    {'nombre': 'cancha 5', 'precio': 50000, 'imagen': 'url/imagen/img.jpg', 'estado': 'Activo'}
  ];
  constructor() { }

  ngOnInit() {
  }

  guardar() {
    console.log(this.data);
  }

  onFileComplete(data: any) {
    console.log(data); // We just print out data bubbled up from event emitter.
  }

}
