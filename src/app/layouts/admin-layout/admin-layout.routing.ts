import { Routes } from '@angular/router';

import { DashboardComponent } from '../../dashboard/dashboard.component';
import { UsuarioComponent } from '../../usuario/usuario.component';
import { CanchaComponent } from '../../cancha/cancha.component';
import { TypographyComponent } from '../../typography/typography.component';
import { EmpresaComponent } from '../../empresa/empresa.component';
import { NotificationsComponent } from '../../notifications/notifications.component';

export const AdminLayoutRoutes: Routes = [
    { path: 'dashboard',      component: DashboardComponent },
    { path: 'usuario',   component: UsuarioComponent },
    { path: 'cancha',     component: CanchaComponent },
    { path: 'typography',     component: TypographyComponent },
    { path: 'empresa',          component: EmpresaComponent }, 
    { path: 'notifications',  component: NotificationsComponent }
];
