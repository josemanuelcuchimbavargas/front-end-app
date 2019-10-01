import { Component, OnInit } from '@angular/core';

declare const $: any;
declare interface RouteInfo {
    path: string;
    title: string;
    icon: string;
    class: string;
}
export const ROUTES: RouteInfo[] = [
    { path: '/dashboard', title: 'Tablero',  icon: 'home', class: '' },
    { path: '/usuario', title: 'Usuarios',  icon:'person', class: '' },
    { path: '/cancha', title: 'Canchas',  icon:'content_paste', class: '' },
    { path: '/typography', title: 'Horarios',  icon:'av_timer', class: '' },
    { path: '/empresa', title: 'Empresas',  icon:'business', class: '' },    
    { path: '/notifications', title: 'Por definir',  icon:'notifications', class: '' }
];

@Component({
  selector: 'app-sidebar',
  templateUrl: './sidebar.component.html',
  styleUrls: ['./sidebar.component.css']
})
export class SidebarComponent implements OnInit {
  menuItems: any[];

  constructor() { }

  ngOnInit() {
    this.menuItems = ROUTES.filter(menuItem => menuItem);
  }
  isMobileMenu() {
      if ($(window).width() > 991) {
          return false;
      }
      return true;
  };
}
