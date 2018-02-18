<?php

use Illuminate\Database\Seeder;

class ScheduleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = $this->findType('Денна');
        if (!$type->exists) {
            $type->fill([
                'type_name'        => "Денна",
                'order'            => 1,
            ])->save();
        }

        $type = $this->findType('Заочна');
        if (!$type->exists) {
            $type->fill([
                'type_name'        => "Заочна",
                'order'            => 2,
            ])->save();
        }
    }

    protected function findType($type_name)
    {
        return \App\ScheduleType::firstOrNew(['type_name' => $type_name]);
    }
}