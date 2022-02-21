<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Administradores
        User::create([
            'name' => 'Administrador',
            'email' => 'adm@fvl.com.br',
            'role' => '9',
            'cpf' => '199.506.820-96',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Pedro',
            'email' => 'pivow@fvl.com.br',
            'role' => '9',
            'cpf' => '146.316.670-28',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Lucas',
            'email' => 'lucas@fvl.com',
            'cpf' => '567.680.520-04',
            'role' => '9',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Fabio',
            'email' => 'fabio@fvl.com.br',
            'cpf' => '716.273.590-87',
            'role' => '9',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Gustavo',
            'email' => 'gustavo@fvl.com.br',
            'cpf' => '453.599.660-17',
            'role' => '9',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Leal',
            'email' => 'leal@fvl.com.br',
            'cpf' => '237.522.220-26',
            'role' => '9',
            'password' => bcrypt('123456')
        ]);
        //Professores
        
        User::create([
            'name' => ' Jhonatan Gnomo',
            'email' => 'Jhonatan@fvl.com.br',
            'cpf' => '028.583.750-89',
            'role' => '1',
            'password' => bcrypt('123456')
        ]);
        
        User::create([
            'name' => ' Geraldo',
            'email' => 'Geraldo@fvl.com.br',
            'cpf' => '256.869.060-76',
            'role' => '1',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => ' Hamenom',
            'email' => 'Hamenom@fvl.com.br',
            'cpf' => '895.946.280-22',
            'role' => '1',
            'password' => bcrypt('123456')
        ]);

        //Alunos
        
        User::create([
            'name' => 'Breno',
            'email' => 'Breno@fvl.com.br',
            'cpf' => '066.200.250-48',
            'role' => '0',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'Bruna',
            'email' => 'Bruna@fvl.com.br',
            'cpf' => '009.189.770-02',
            'role' => '0',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'Felipe',
            'email' => 'Felipe@fvl.com.br',
            'cpf' => '265.153.230-42',
            'role' => '0',
            'password' => bcrypt('123456')
        ]);
    }
}