# escuela
practica de un sistema mvc realizado en php 

Estructura del Proyecto

/var/www/html/escuela/
D:\WebProjects\escuela

├── app
    └── inicio.php
    └── controladores/
        └── login.php
    └── libs/
        └── control.php
        └── mariadb.php
    └── modelos/
    └── vistas/
└── public/
    └── index.php
    └── css/
    └── fotos/
    └── img/
    └── js/
    └── temarios/
        

/var/www/html/escuela/
D:\WebProjects\escuela\     ← (versión en Windows si usas Nginx en tu PC)
├── app/
│   ├── inicio.php
│   ├── controladores/
│   ├── libs/
│   │   ├── control.php
│   │   └── mariadb.php    ← Aquí vive tu clase Mariadb
│   ├── modelos/
│   └── vistas/
└── public/
    ├── index.php           ← Punto de entrada del sitio (Nginx apunta aquí)
    ├── css/
    ├── fotos/
    ├── img/
    ├── js/
    └── temarios/
