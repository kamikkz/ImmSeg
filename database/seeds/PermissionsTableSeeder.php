<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permisos de usuarios
        Permission::create([
            'name'   =>  'Navegar usuarios',
            'slug'   =>  'users.index', //es la ruta
            'description'   =>  'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'   =>  'Ver detalle de usuario',
            'slug'   =>  'users.show', //es la ruta
            'description'   =>  'Ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
            'name'   =>  'Crear usuarios',
            'slug'   =>  'users.create', //es la ruta
            'description'   =>  'Crea un nuevo usuario del sistema',
        ]);

        Permission::create([
            'name'   =>  'Edición de usuarios',
            'slug'   =>  'users.edit', //es la ruta
            'description'   =>  'Editar cualquier dato de un usuario del sistema',
        ]);

        Permission::create([
            'name'   =>  'Eliminar usuario',
            'slug'   =>  'users.destroy', //es la ruta
            'description'   =>  'Elimina cualquier usuario del sistema',
        ]);


    }
}
