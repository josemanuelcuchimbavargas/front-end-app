import { NgModule } from '@angular/core';
import { RouterModule } from '@angular/router';
import { CommonModule } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { AdminLayoutRoutes } from './admin-layout.routing';
import { DashboardComponent } from '../../dashboard/dashboard.component';
import { UsuarioComponent } from '../../usuario/usuario.component';
import { CanchaComponent } from '../../cancha/cancha.component';
import { TypographyComponent } from '../../typography/typography.component';
import { EmpresaComponent } from '../../empresa/empresa.component';
import { NotificationsComponent } from '../../notifications/notifications.component';
import { MaterialFileUploadComponent } from '../../cancha/file-upload/file-upload.component';
import { HttpClientModule } from '@angular/common/http';

import {
  MatButtonModule,
  MatInputModule,
  MatRippleModule,
  MatFormFieldModule,
  MatTooltipModule,
  MatSelectModule,
  MatIconModule,
  MatProgressBarModule,
} from '@angular/material';
@NgModule({
  imports: [
    CommonModule,
    RouterModule.forChild(AdminLayoutRoutes),
    FormsModule,
    ReactiveFormsModule,
    MatButtonModule,
    MatRippleModule,
    MatFormFieldModule,
    MatInputModule,
    MatSelectModule,
    MatTooltipModule,
    MatIconModule,
    MatProgressBarModule,
    HttpClientModule
  ],
  declarations: [
    DashboardComponent,
    UsuarioComponent,
    CanchaComponent,
    TypographyComponent,
    EmpresaComponent,
    NotificationsComponent,
    MaterialFileUploadComponent
  ]
})

export class AdminLayoutModule {}
