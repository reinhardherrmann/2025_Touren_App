<?php

namespace Database\Seeders;

use App\Models\Stopp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Stopp::create(['id' => 1, 'store_id' => 5, 'date' => '2023-06-01', 'order_number' => '2', 'arrival_time' => '2023-06-01 00:00', 'departure_time' => '2023-06-01', 'remark' => 'heute nur 1 Tour ‚áí Tour strecken', 'trip_id' => 120]);


        Stopp::create(['id' => 7, 'store_id' => 14, 'date' => '2023-01-10', 'order_number' => '1', 'arrival_time' => '2023-01-10 00:00', 'departure_time' => '2023-01-10', 'remark' => 'NULL', 'trip_id' => 27]);
        Stopp::create(['id' => 8, 'store_id' => 116, 'date' => '2023-01-09', 'order_number' => '1', 'arrival_time' => '2023-01-09 00:00', 'departure_time' => '2023-01-09', 'remark' => 'NULL', 'trip_id' => 26]);
        Stopp::create(['id' => 9, 'store_id' => 62, 'date' => '2023-01-09', 'order_number' => '1', 'arrival_time' => '2023-01-09 00:00', 'departure_time' => '2023-01-09', 'remark' => 'NULL', 'trip_id' => 25]);
        Stopp::create(['id' => 10, 'store_id' => 130, 'date' => '2023-01-10', 'order_number' => '1', 'arrival_time' => '2023-01-10 00:00', 'departure_time' => '2023-01-10', 'remark' => 'NULL', 'trip_id' => 24]);
        Stopp::create(['id' => 11, 'store_id' => 150, 'date' => '2023-02-22', 'order_number' => '1', 'arrival_time' => '2023-02-23 09:10', 'departure_time' => '2023-02-23', 'remark' => 'Ordnungsamt gerufen Ladezone blockiert', 'trip_id' => 21]);


        Stopp::create(['id' => 14, 'store_id' => 33, 'date' => '2023-02-21', 'order_number' => '2', 'arrival_time' => '2023-02-21 10:00', 'departure_time' => '2023-02-21', 'remark' => 'NULL', 'trip_id' => 19]);
        Stopp::create(['id' => 15, 'store_id' => 25, 'date' => '2023-02-21', 'order_number' => '1', 'arrival_time' => '2023-02-21 06:31', 'departure_time' => '2023-02-21', 'remark' => 'NULL', 'trip_id' => 18]);
        Stopp::create(['id' => 16, 'store_id' => 54, 'date' => '2023-02-20', 'order_number' => '1', 'arrival_time' => '2023-02-20 05:16', 'departure_time' => '2023-02-20', 'remark' => 'NULL', 'trip_id' => 1]);
        Stopp::create(['id' => 17, 'store_id' => 45, 'date' => '2023-02-17', 'order_number' => '1', 'arrival_time' => '2023-02-17 18:00', 'departure_time' => '2023-02-17', 'remark' => 'NULL', 'trip_id' => 2]);
        Stopp::create(['id' => 18, 'store_id' => 3, 'date' => '2023-02-17', 'order_number' => '1', 'arrival_time' => '2023-02-17 19:10', 'departure_time' => '2023-02-17', 'remark' => 'NULL', 'trip_id' => 2]);
        Stopp::create(['id' => 19, 'store_id' => 54, 'date' => '2023-02-25', 'order_number' => '1', 'arrival_time' => '2023-02-25 05:31', 'departure_time' => '2023-02-25', 'remark' => 'NULL', 'trip_id' => 22]);
        Stopp::create(['id' => 20, 'store_id' => 45, 'date' => '2023-02-25', 'order_number' => '1', 'arrival_time' => '2023-02-25 07:26', 'departure_time' => '2023-02-25', 'remark' => 'NULL', 'trip_id' => 22]);
        Stopp::create(['id' => 21, 'store_id' => 161, 'date' => '2023-02-25', 'order_number' => '1', 'arrival_time' => '2023-02-25 08:07', 'departure_time' => '2023-02-25', 'remark' => 'NULL', 'trip_id' => 22]);
        Stopp::create(['id' => 22, 'store_id' => 62, 'date' => '2023-02-25', 'order_number' => '1', 'arrival_time' => '2023-02-25 11:07', 'departure_time' => '2023-02-25', 'remark' => 'NULL', 'trip_id' => 23]);
        Stopp::create(['id' => 23, 'store_id' => 197, 'date' => '2023-03-01', 'order_number' => '1', 'arrival_time' => '2023-03-01 05:44', 'departure_time' => '2023-03-01', 'remark' => 'NULL', 'trip_id' => 30]);


        Stopp::create(['id' => 27, 'store_id' => 18, 'date' => '2023-03-16', 'order_number' => '1', 'arrival_time' => '2023-03-16 18:00', 'departure_time' => '2023-03-16', 'remark' => 'NULL', 'trip_id' => 44]);
        Stopp::create(['id' => 28, 'store_id' => 35, 'date' => '2023-03-17', 'order_number' => '1', 'arrival_time' => '2023-03-17 00:00', 'departure_time' => '2023-03-17', 'remark' => 'NULL', 'trip_id' => 45]);
        Stopp::create(['id' => 29, 'store_id' => 15, 'date' => '2023-03-17', 'order_number' => '1', 'arrival_time' => '2023-03-17 00:00', 'departure_time' => '2023-03-17', 'remark' => 'NULL', 'trip_id' => 46]);
        Stopp::create(['id' => 30, 'store_id' => 22, 'date' => '2023-03-20', 'order_number' => '1', 'arrival_time' => '2023-03-20 05:35', 'departure_time' => '2023-03-20', 'remark' => 'NULL', 'trip_id' => 47]);
        Stopp::create(['id' => 31, 'store_id' => 11, 'date' => '2023-03-22', 'order_number' => '1', 'arrival_time' => '2023-03-22 05:00', 'departure_time' => '2023-03-22', 'remark' => 'NULL', 'trip_id' => 51]);
        Stopp::create(['id' => 32, 'store_id' => 84, 'date' => '2023-03-23', 'order_number' => '1', 'arrival_time' => '2023-03-23 09:31', 'departure_time' => '2023-03-23', 'remark' => 'NULL', 'trip_id' => 53]);
        Stopp::create(['id' => 33, 'store_id' => 3, 'date' => '2023-03-23', 'order_number' => '1', 'arrival_time' => '2023-03-23 00:00', 'departure_time' => '2023-03-23', 'remark' => 'NULL', 'trip_id' => 53]);
        Stopp::create(['id' => 34, 'store_id' => 63, 'date' => '2023-04-11', 'order_number' => '1', 'arrival_time' => '2023-04-11 14:06', 'departure_time' => '2023-04-11', 'remark' => 'NULL', 'trip_id' => 54]);
        Stopp::create(['id' => 35, 'store_id' => 22, 'date' => '2023-04-04', 'order_number' => '1', 'arrival_time' => '2023-04-11 18:37', 'departure_time' => '2023-04-11', 'remark' => 'NULL', 'trip_id' => 55]);
        Stopp::create(['id' => 36, 'store_id' => 63, 'date' => '2023-04-12', 'order_number' => '1', 'arrival_time' => '2023-04-12 14:04', 'departure_time' => '2023-04-12', 'remark' => 'NULL', 'trip_id' => 56]);
        Stopp::create(['id' => 37, 'store_id' => 14, 'date' => '2023-04-12', 'order_number' => '1', 'arrival_time' => '2023-04-12 14:04', 'departure_time' => '2023-04-12', 'remark' => 'NULL', 'trip_id' => 57]);
        Stopp::create(['id' => 38, 'store_id' => 40, 'date' => '2023-04-13', 'order_number' => '1', 'arrival_time' => '2023-04-13 13:40', 'departure_time' => '2023-04-13', 'remark' => 'NULL', 'trip_id' => 58]);

        Stopp::create(['id' => 40, 'store_id' => 175, 'date' => '2023-04-13', 'order_number' => '1', 'arrival_time' => '2023-04-13 00:00', 'departure_time' => '2023-04-13', 'remark' => 'NULL', 'trip_id' => 59]);
        Stopp::create(['id' => 41, 'store_id' => 67, 'date' => '2023-04-18', 'order_number' => '1', 'arrival_time' => '2023-04-18 05:22', 'departure_time' => '2023-04-18', 'remark' => 'NULL', 'trip_id' => 60]);
        Stopp::create(['id' => 42, 'store_id' => 136, 'date' => '2023-04-18', 'order_number' => '1', 'arrival_time' => '2023-04-18 06:32', 'departure_time' => '2023-04-18', 'remark' => 'NULL', 'trip_id' => 60]);

        Stopp::create(['id' => 44, 'store_id' => 104, 'date' => '2023-04-19', 'order_number' => '1', 'arrival_time' => '2023-04-19 05:38', 'departure_time' => '2023-04-19', 'remark' => 'NULL', 'trip_id' => 62]);
        Stopp::create(['id' => 45, 'store_id' => 199, 'date' => '2023-04-19', 'order_number' => '1', 'arrival_time' => '2023-04-19 06:09', 'departure_time' => '2023-04-19', 'remark' => 'NULL', 'trip_id' => 62]);
        Stopp::create(['id' => 46, 'store_id' => 26, 'date' => '2023-04-19', 'order_number' => '1', 'arrival_time' => '2023-04-19 11:03', 'departure_time' => '2023-04-19', 'remark' => 'NULL', 'trip_id' => 63]);

        Stopp::create(['id' => 48, 'store_id' => 187, 'date' => '2023-04-20', 'order_number' => '1', 'arrival_time' => '2023-04-20 00:00', 'departure_time' => '2023-04-20', 'remark' => 'NULL', 'trip_id' => 65]);
        Stopp::create(['id' => 49, 'store_id' => 81, 'date' => '2023-04-21', 'order_number' => '1', 'arrival_time' => '2023-04-21 00:00', 'departure_time' => '2023-04-21', 'remark' => 'NULL', 'trip_id' => 66]);

        Stopp::create(['id' => 51, 'store_id' => 86, 'date' => '2023-04-21', 'order_number' => '3', 'arrival_time' => '2023-04-21 00:00', 'departure_time' => '2023-04-21', 'remark' => 'NULL', 'trip_id' => 66]);
        Stopp::create(['id' => 52, 'store_id' => 26, 'date' => '2023-04-21', 'order_number' => '1', 'arrival_time' => '2023-04-21 00:00', 'departure_time' => '2023-04-21', 'remark' => 'NULL', 'trip_id' => 67]);
        Stopp::create(['id' => 53, 'store_id' => 2, 'date' => '2023-04-24', 'order_number' => '1', 'arrival_time' => '2023-04-24 00:00', 'departure_time' => '2023-04-24', 'remark' => 'NULL', 'trip_id' => 69]);

        Stopp::create(['id' => 55, 'store_id' => 159, 'date' => '2023-04-24', 'order_number' => '2', 'arrival_time' => '2023-04-24 00:00', 'departure_time' => '2023-04-24', 'remark' => 'NULL', 'trip_id' => 68]);
        Stopp::create(['id' => 56, 'store_id' => 143, 'date' => '2023-04-24', 'order_number' => '3', 'arrival_time' => '2023-04-24 00:00', 'departure_time' => '2023-04-24', 'remark' => 'NULL', 'trip_id' => 68]);
        Stopp::create(['id' => 57, 'store_id' => 76, 'date' => '2023-04-25', 'order_number' => '1', 'arrival_time' => '2023-04-25 00:00', 'departure_time' => '2023-04-25', 'remark' => 'NULL', 'trip_id' => 70]);

        Stopp::create(['id' => 59, 'store_id' => 86, 'date' => '2023-04-25', 'order_number' => '2', 'arrival_time' => '2023-04-25 00:00', 'departure_time' => '2023-04-25', 'remark' => 'NULL', 'trip_id' => 71]);
        Stopp::create(['id' => 60, 'store_id' => 95, 'date' => '2023-04-26', 'order_number' => '1', 'arrival_time' => '2023-04-26 00:00', 'departure_time' => '2023-04-26', 'remark' => 'NULL', 'trip_id' => 72]);

        Stopp::create(['id' => 62, 'store_id' => 118, 'date' => '2023-04-26', 'order_number' => '2', 'arrival_time' => '2023-04-26 00:00', 'departure_time' => '2023-04-26', 'remark' => 'NULL', 'trip_id' => 73]);
        Stopp::create(['id' => 63, 'store_id' => 170, 'date' => '2023-04-27', 'order_number' => '1', 'arrival_time' => '2023-04-27 00:00', 'departure_time' => '2023-04-27', 'remark' => 'NULL', 'trip_id' => 74]);
        Stopp::create(['id' => 64, 'store_id' => 114, 'date' => '2023-04-27', 'order_number' => '1', 'arrival_time' => '2023-04-27 00:00', 'departure_time' => '2023-04-27', 'remark' => 'NULL', 'trip_id' => 75]);
        Stopp::create(['id' => 65, 'store_id' => 46, 'date' => '2023-04-28', 'order_number' => '1', 'arrival_time' => '2023-04-28 00:00', 'departure_time' => '2023-04-28', 'remark' => 'NULL', 'trip_id' => 76]);
        Stopp::create(['id' => 66, 'store_id' => 18, 'date' => '2023-04-28', 'order_number' => '1', 'arrival_time' => '2023-04-28 00:00', 'departure_time' => '2023-04-28', 'remark' => 'NULL', 'trip_id' => 77]);
        Stopp::create(['id' => 67, 'store_id' => 151, 'date' => '2023-04-28', 'order_number' => '2', 'arrival_time' => '2023-04-28 00:00', 'departure_time' => '2023-04-28', 'remark' => 'NULL', 'trip_id' => 77]);
        Stopp::create(['id' => 68, 'store_id' => 25, 'date' => '2023-04-29', 'order_number' => '1', 'arrival_time' => '2023-04-29 00:00', 'departure_time' => '2023-04-29', 'remark' => 'NULL', 'trip_id' => 78]);
        Stopp::create(['id' => 69, 'store_id' => 86, 'date' => '2023-04-29', 'order_number' => '2', 'arrival_time' => '2023-04-29 00:00', 'departure_time' => '2023-04-29', 'remark' => 'NULL', 'trip_id' => 78]);
        Stopp::create(['id' => 70, 'store_id' => 25, 'date' => '2023-04-29', 'order_number' => '1', 'arrival_time' => '2023-04-29 00:00', 'departure_time' => '2023-04-29', 'remark' => 'NULL', 'trip_id' => 79]);

        Stopp::create(['id' => 72, 'store_id' => 34, 'date' => '2023-05-02', 'order_number' => '1', 'arrival_time' => '2023-05-02 00:00', 'departure_time' => '2023-05-02', 'remark' => 'NULL', 'trip_id' => 81]);

        Stopp::create(['id' => 74, 'store_id' => 50, 'date' => '2023-05-03', 'order_number' => '1', 'arrival_time' => '2023-05-03 00:00', 'departure_time' => '2023-05-03', 'remark' => 'NULL', 'trip_id' => 83]);
        Stopp::create(['id' => 75, 'store_id' => 157, 'date' => '2023-05-03', 'order_number' => '2', 'arrival_time' => '2023-05-03 00:00', 'departure_time' => '2023-05-03', 'remark' => 'NULL', 'trip_id' => 83]);
        Stopp::create(['id' => 76, 'store_id' => 158, 'date' => '2023-05-04', 'order_number' => '1', 'arrival_time' => '2023-05-04 00:00', 'departure_time' => '2023-05-04', 'remark' => 'NULL', 'trip_id' => 84]);

        Stopp::create(['id' => 78, 'store_id' => 65, 'date' => '2023-05-05', 'order_number' => '1', 'arrival_time' => '2023-05-05 00:00', 'departure_time' => '2023-05-05', 'remark' => 'NULL', 'trip_id' => 86]);
        Stopp::create(['id' => 79, 'store_id' => 14, 'date' => '2023-05-05', 'order_number' => '1', 'arrival_time' => '2023-05-05 00:00', 'departure_time' => '2023-05-05', 'remark' => 'NULL', 'trip_id' => 87]);
        Stopp::create(['id' => 80, 'store_id' => 5, 'date' => '2023-05-05', 'order_number' => '2', 'arrival_time' => '2023-05-05 00:00', 'departure_time' => '2023-05-05', 'remark' => 'Ausfahrt zugestellt
2 Europaletten Obst im Lager nicht zu finden', 'trip_id' => 87]);
        Stopp::create(['id' => 81, 'store_id' => 63, 'date' => '2023-05-08', 'order_number' => '1', 'arrival_time' => '2023-05-08 00:00', 'departure_time' => '2023-05-08', 'remark' => 'NULL', 'trip_id' => 88]);
        Stopp::create(['id' => 82, 'store_id' => 26, 'date' => '2023-05-08', 'order_number' => '1', 'arrival_time' => '2023-05-08 00:00', 'departure_time' => '2023-05-08', 'remark' => 'NULL', 'trip_id' => 89]);
        Stopp::create(['id' => 83, 'store_id' => 95, 'date' => '2023-05-09', 'order_number' => '1', 'arrival_time' => '2023-05-09 00:00', 'departure_time' => '2023-05-09', 'remark' => 'NULL', 'trip_id' => 90]);
        Stopp::create(['id' => 84, 'store_id' => 8, 'date' => '2023-05-09', 'order_number' => '1', 'arrival_time' => '2023-05-09 00:00', 'departure_time' => '2023-05-09', 'remark' => 'NULL', 'trip_id' => 91]);
        Stopp::create(['id' => 85, 'store_id' => 58, 'date' => '2023-05-10', 'order_number' => '1', 'arrival_time' => '2023-05-10 00:00', 'departure_time' => '2023-05-10', 'remark' => 'NULL', 'trip_id' => 92]);

        Stopp::create(['id' => 87, 'store_id' => 148, 'date' => '2023-05-11', 'order_number' => '1', 'arrival_time' => '2023-05-11 00:00', 'departure_time' => '2023-05-11', 'remark' => 'Vor Tour bei Mercedes', 'trip_id' => 95]);

        Stopp::create(['id' => 89, 'store_id' => 7, 'date' => '2023-05-12', 'order_number' => '1', 'arrival_time' => '2023-05-12 00:00', 'departure_time' => '2023-05-12', 'remark' => 'NULL', 'trip_id' => 97]);

        Stopp::create(['id' => 91, 'store_id' => 131, 'date' => '2023-05-12', 'order_number' => '1', 'arrival_time' => '2023-05-12 00:00', 'departure_time' => '2023-05-12', 'remark' => 'NULL', 'trip_id' => 98]);
        Stopp::create(['id' => 92, 'store_id' => 85, 'date' => '2023-05-15', 'order_number' => '1', 'arrival_time' => '2023-05-15 00:00', 'departure_time' => '2023-05-15', 'remark' => 'NULL', 'trip_id' => 99]);
        Stopp::create(['id' => 93, 'store_id' => 52, 'date' => '2023-05-15', 'order_number' => '2', 'arrival_time' => '2023-05-15 00:00', 'departure_time' => '2023-05-15', 'remark' => 'NULL', 'trip_id' => 99]);
        Stopp::create(['id' => 94, 'store_id' => 58, 'date' => '2023-05-15', 'order_number' => '3', 'arrival_time' => '2023-05-15 00:00', 'departure_time' => '2023-05-15', 'remark' => 'NULL', 'trip_id' => 99]);

        Stopp::create(['id' => 96, 'store_id' => 7, 'date' => '2023-05-16', 'order_number' => '1', 'arrival_time' => '2023-05-16 00:00', 'departure_time' => '2023-05-16', 'remark' => 'NULL', 'trip_id' => 101]);

        Stopp::create(['id' => 98, 'store_id' => 123, 'date' => '2023-05-16', 'order_number' => '3', 'arrival_time' => '2023-05-16 00:00', 'departure_time' => '2023-05-16', 'remark' => 'NULL', 'trip_id' => 101]);
        Stopp::create(['id' => 99, 'store_id' => 175, 'date' => '2023-05-17', 'order_number' => '1', 'arrival_time' => '2023-05-17 00:00', 'departure_time' => '2023-05-17', 'remark' => 'NULL', 'trip_id' => 102]);
        Stopp::create(['id' => 100, 'store_id' => 39, 'date' => '2023-05-17', 'order_number' => '2', 'arrival_time' => '2023-05-17 00:00', 'departure_time' => '2023-05-17', 'remark' => 'NULL', 'trip_id' => 102]);
        Stopp::create(['id' => 101, 'store_id' => 135, 'date' => '2023-05-17', 'order_number' => '1', 'arrival_time' => '2023-05-17 00:00', 'departure_time' => '2023-05-17', 'remark' => 'NULL', 'trip_id' => 103]);
        Stopp::create(['id' => 102, 'store_id' => 26, 'date' => '2023-05-19', 'order_number' => '1', 'arrival_time' => '2023-05-19 00:00', 'departure_time' => '2023-05-19', 'remark' => 'NULL', 'trip_id' => 104]);
        Stopp::create(['id' => 103, 'store_id' => 145, 'date' => '2023-05-19', 'order_number' => '2', 'arrival_time' => '2023-05-19 00:00', 'departure_time' => '2023-05-19', 'remark' => 'NULL', 'trip_id' => 104]);
        Stopp::create(['id' => 104, 'store_id' => 48, 'date' => '2023-05-19', 'order_number' => '1', 'arrival_time' => '2023-05-19 00:00', 'departure_time' => '2023-05-19', 'remark' => 'NULL', 'trip_id' => 105]);

        Stopp::create(['id' => 106, 'store_id' => 143, 'date' => '2023-05-22', 'order_number' => '2', 'arrival_time' => '2023-05-22 00:00', 'departure_time' => '2023-05-22', 'remark' => 'NULL', 'trip_id' => 106]);
        Stopp::create(['id' => 107, 'store_id' => 71, 'date' => '2023-05-22', 'order_number' => '3', 'arrival_time' => '2023-05-22 00:00', 'departure_time' => '2023-05-22', 'remark' => 'NULL', 'trip_id' => 106]);
        Stopp::create(['id' => 108, 'store_id' => 145, 'date' => '2023-05-22', 'order_number' => '1', 'arrival_time' => '2023-05-22 00:00', 'departure_time' => '2023-05-22', 'remark' => 'NULL', 'trip_id' => 107]);
        Stopp::create(['id' => 109, 'store_id' => 91, 'date' => '2023-05-23', 'order_number' => '1', 'arrival_time' => '2023-05-23 00:00', 'departure_time' => '2023-05-23', 'remark' => 'NULL', 'trip_id' => 108]);
        Stopp::create(['id' => 110, 'store_id' => 77, 'date' => '2023-05-23', 'order_number' => '2', 'arrival_time' => '2023-05-23 00:00', 'departure_time' => '2023-05-23', 'remark' => 'NULL', 'trip_id' => 108]);
        Stopp::create(['id' => 111, 'store_id' => 161, 'date' => '2023-05-23', 'order_number' => '1', 'arrival_time' => '2023-05-23 00:00', 'departure_time' => '2023-05-23', 'remark' => 'NULL', 'trip_id' => 109]);
        Stopp::create(['id' => 112, 'store_id' => 143, 'date' => '2023-05-25', 'order_number' => '1', 'arrival_time' => '2023-05-25 00:00', 'departure_time' => '2023-05-25', 'remark' => 'NULL', 'trip_id' => 110]);
        Stopp::create(['id' => 113, 'store_id' => 171, 'date' => '2023-05-25', 'order_number' => '1', 'arrival_time' => '2023-05-25 00:00', 'departure_time' => '2023-05-25', 'remark' => 'NULL', 'trip_id' => 111]);
        Stopp::create(['id' => 114, 'store_id' => 81, 'date' => '2023-05-26', 'order_number' => '1', 'arrival_time' => '2023-05-26 00:00', 'departure_time' => '2023-05-26', 'remark' => 'NULL', 'trip_id' => 112]);
        Stopp::create(['id' => 115, 'store_id' => 91, 'date' => '2023-05-26', 'order_number' => '1', 'arrival_time' => '2023-05-26 00:00', 'departure_time' => '2023-05-26', 'remark' => 'NULL', 'trip_id' => 112]);
        Stopp::create(['id' => 116, 'store_id' => 5, 'date' => '2023-05-26', 'order_number' => '1', 'arrival_time' => '2023-05-26 00:00', 'departure_time' => '2023-05-26', 'remark' => 'NULL', 'trip_id' => 113]);
        Stopp::create(['id' => 117, 'store_id' => 81, 'date' => '2023-05-27', 'order_number' => '1', 'arrival_time' => '2023-05-27 00:00', 'departure_time' => '2023-05-27', 'remark' => 'NULL', 'trip_id' => 114]);
        Stopp::create(['id' => 118, 'store_id' => 95, 'date' => '2023-05-27', 'order_number' => '1', 'arrival_time' => '2023-05-27 00:00', 'departure_time' => '2023-05-27', 'remark' => 'NULL', 'trip_id' => 114]);
        Stopp::create(['id' => 119, 'store_id' => 201, 'date' => '2023-05-27', 'order_number' => '3', 'arrival_time' => '2023-05-27 00:00', 'departure_time' => '2023-05-27', 'remark' => 'NULL', 'trip_id' => 114]);
        Stopp::create(['id' => 120, 'store_id' => 54, 'date' => '2023-05-27', 'order_number' => '1', 'arrival_time' => '2023-05-27 00:00', 'departure_time' => '2023-05-27', 'remark' => 'NULL', 'trip_id' => 115]);
        Stopp::create(['id' => 121, 'store_id' => 80, 'date' => '2023-05-30', 'order_number' => '1', 'arrival_time' => '2023-05-30 00:00', 'departure_time' => '2023-05-30', 'remark' => 'NULL', 'trip_id' => 116]);
        Stopp::create(['id' => 122, 'store_id' => 58, 'date' => '2023-05-30', 'order_number' => '2', 'arrival_time' => '2023-05-30 00:00', 'departure_time' => '2023-05-30', 'remark' => 'NULL', 'trip_id' => 116]);

        Stopp::create(['id' => 124, 'store_id' => 134, 'date' => '2023-05-31', 'order_number' => '1', 'arrival_time' => '2023-05-31 00:00', 'departure_time' => '2023-05-31', 'remark' => 'NULL', 'trip_id' => 117]);
        Stopp::create(['id' => 125, 'store_id' => 1, 'date' => '2023-06-01', 'order_number' => '1', 'arrival_time' => '2023-06-01 00:00', 'departure_time' => '2023-06-01', 'remark' => 'NULL', 'trip_id' => 119]);
        Stopp::create(['id' => 126, 'store_id' => 30, 'date' => '2023-06-01', 'order_number' => '1', 'arrival_time' => '2023-06-01 00:00', 'departure_time' => '2023-06-01', 'remark' => 'NULL', 'trip_id' => 120]);
        Stopp::create(['id' => 127, 'store_id' => 64, 'date' => '2023-07-10', 'order_number' => '2', 'arrival_time' => '2023-07-10 00:00', 'departure_time' => '2023-07-10', 'remark' => 'vorgeladen', 'trip_id' => 165]);


        Stopp::create(['id' => 131, 'store_id' => 55, 'date' => '2023-06-02', 'order_number' => '1', 'arrival_time' => '2023-06-02 00:00', 'departure_time' => '2023-06-02', 'remark' => 'NULL', 'trip_id' => 122]);
        Stopp::create(['id' => 132, 'store_id' => 55, 'date' => '2023-06-02', 'order_number' => '1', 'arrival_time' => '2023-06-02 00:00', 'departure_time' => '2023-06-02', 'remark' => 'NULL', 'trip_id' => 121]);
        Stopp::create(['id' => 133, 'store_id' => 47, 'date' => '2023-06-05', 'order_number' => '1', 'arrival_time' => '2023-06-05 00:00', 'departure_time' => '2023-06-05', 'remark' => 'NULL', 'trip_id' => 123]);
        Stopp::create(['id' => 134, 'store_id' => 5, 'date' => '2023-06-05', 'order_number' => '2', 'arrival_time' => '2023-06-05 00:00', 'departure_time' => '2023-06-05', 'remark' => 'NULL', 'trip_id' => 123]);
        Stopp::create(['id' => 135, 'store_id' => 59, 'date' => '2023-06-06', 'order_number' => '1', 'arrival_time' => '2023-06-06 00:00', 'departure_time' => '2023-06-06', 'remark' => 'NULL', 'trip_id' => 124]);
        Stopp::create(['id' => 136, 'store_id' => 140, 'date' => '2023-06-06', 'order_number' => '2', 'arrival_time' => '2023-06-06 00:00', 'departure_time' => '2023-06-06', 'remark' => 'NULL', 'trip_id' => 124]);
        Stopp::create(['id' => 137, 'store_id' => 56, 'date' => '2023-06-06', 'order_number' => '1', 'arrival_time' => '2023-06-06 00:00', 'departure_time' => '2023-06-06', 'remark' => 'NULL', 'trip_id' => 125]);
        Stopp::create(['id' => 138, 'store_id' => 57, 'date' => '2023-06-07', 'order_number' => '1', 'arrival_time' => '2023-06-07 00:00', 'departure_time' => '2023-06-07', 'remark' => 'NULL', 'trip_id' => 126]);
        Stopp::create(['id' => 139, 'store_id' => 29, 'date' => '2023-06-07', 'order_number' => '2', 'arrival_time' => '2023-06-07 00:00', 'departure_time' => '2023-06-07', 'remark' => 'NULL', 'trip_id' => 126]);
        Stopp::create(['id' => 140, 'store_id' => 51, 'date' => '2023-06-07', 'order_number' => '1', 'arrival_time' => '2023-06-07 00:00', 'departure_time' => '2023-06-07', 'remark' => 'NULL', 'trip_id' => 127]);
        Stopp::create(['id' => 141, 'store_id' => 21, 'date' => '2023-06-08', 'order_number' => '1', 'arrival_time' => '2023-06-08 00:00', 'departure_time' => '2023-06-08', 'remark' => 'NULL', 'trip_id' => 128]);
        Stopp::create(['id' => 142, 'store_id' => 171, 'date' => '2023-06-09', 'order_number' => '1', 'arrival_time' => '2023-06-09 00:00', 'departure_time' => '2023-06-09', 'remark' => 'NULL', 'trip_id' => 129]);
        Stopp::create(['id' => 143, 'store_id' => 192, 'date' => '2023-06-09', 'order_number' => '2', 'arrival_time' => '2023-06-09 00:00', 'departure_time' => '2023-06-09', 'remark' => 'NULL', 'trip_id' => 129]);
        Stopp::create(['id' => 144, 'store_id' => 163, 'date' => '2023-06-09', 'order_number' => '1', 'arrival_time' => '2023-06-09 00:00', 'departure_time' => '2023-06-09', 'remark' => 'NULL', 'trip_id' => 130]);
        Stopp::create(['id' => 145, 'store_id' => 28, 'date' => '2023-06-12', 'order_number' => '1', 'arrival_time' => '2023-06-12 00:00', 'departure_time' => '2023-06-12', 'remark' => 'NULL', 'trip_id' => 131]);
        Stopp::create(['id' => 146, 'store_id' => 29, 'date' => '2023-06-12', 'order_number' => '2', 'arrival_time' => '2023-06-12 00:00', 'departure_time' => '2023-06-12', 'remark' => 'NULL', 'trip_id' => 131]);
        Stopp::create(['id' => 147, 'store_id' => 25, 'date' => '2023-06-12', 'order_number' => '1', 'arrival_time' => '2023-06-12 00:00', 'departure_time' => '2023-06-12', 'remark' => 'NULL', 'trip_id' => 132]);

        Stopp::create(['id' => 149, 'store_id' => 48, 'date' => '2023-06-13', 'order_number' => '1', 'arrival_time' => '2023-06-13 00:00', 'departure_time' => '2023-06-13', 'remark' => 'NULL', 'trip_id' => 134]);
        Stopp::create(['id' => 150, 'store_id' => 59, 'date' => '2023-06-15', 'order_number' => '1', 'arrival_time' => '2023-06-15 00:00', 'departure_time' => '2023-06-15', 'remark' => 'NULL', 'trip_id' => 135]);

        Stopp::create(['id' => 152, 'store_id' => 71, 'date' => '2023-06-15', 'order_number' => '1', 'arrival_time' => '2023-06-15 00:00', 'departure_time' => '2023-06-15', 'remark' => 'NULL', 'trip_id' => 136]);
        Stopp::create(['id' => 153, 'store_id' => 81, 'date' => '2023-06-16', 'order_number' => '2', 'arrival_time' => '2023-06-16 00:00', 'departure_time' => '2023-06-16', 'remark' => 'NULL', 'trip_id' => 137]);
        Stopp::create(['id' => 154, 'store_id' => 91, 'date' => '2023-06-16', 'order_number' => '3', 'arrival_time' => '2023-06-16 00:00', 'departure_time' => '2023-06-16', 'remark' => 'NULL', 'trip_id' => 137]);
        Stopp::create(['id' => 155, 'store_id' => 78, 'date' => '2023-06-16', 'order_number' => '1', 'arrival_time' => '2023-06-16 00:00', 'departure_time' => '2023-06-16', 'remark' => 'NULL', 'trip_id' => 137]);


        Stopp::create(['id' => 158, 'store_id' => 108, 'date' => '2023-06-17', 'order_number' => '1', 'arrival_time' => '2023-06-17 00:00', 'departure_time' => '2023-06-17', 'remark' => 'NULL', 'trip_id' => 139]);
        Stopp::create(['id' => 159, 'store_id' => 28, 'date' => '2023-06-19', 'order_number' => '1', 'arrival_time' => '2023-06-19 00:00', 'departure_time' => '2023-06-19', 'remark' => 'alle Rampen besetzt! 04:47', 'trip_id' => 140]);
        Stopp::create(['id' => 160, 'store_id' => 29, 'date' => '2023-06-19', 'order_number' => '2', 'arrival_time' => '2023-06-19 00:00', 'departure_time' => '2023-06-19', 'remark' => 'NULL', 'trip_id' => 140]);
        Stopp::create(['id' => 161, 'store_id' => 197, 'date' => '2023-06-19', 'order_number' => '1', 'arrival_time' => '2023-06-19 00:00', 'departure_time' => '2023-06-19', 'remark' => 'NULL', 'trip_id' => 141]);

        Stopp::create(['id' => 163, 'store_id' => 82, 'date' => '2023-06-20', 'order_number' => '1', 'arrival_time' => '2023-06-20 00:00', 'departure_time' => '2023-06-20', 'remark' => 'NULL', 'trip_id' => 143]);


        Stopp::create(['id' => 168, 'store_id' => 46, 'date' => '2023-06-22', 'order_number' => '1', 'arrival_time' => '2023-06-22 00:00', 'departure_time' => '2023-06-22', 'remark' => 'NULL', 'trip_id' => 146]);
        Stopp::create(['id' => 169, 'store_id' => 12, 'date' => '2023-06-22', 'order_number' => '2', 'arrival_time' => '2023-06-22 00:00', 'departure_time' => '2023-06-22', 'remark' => 'NULL', 'trip_id' => 146]);
        Stopp::create(['id' => 170, 'store_id' => 82, 'date' => '2023-06-22', 'order_number' => '1', 'arrival_time' => '2023-06-22 00:00', 'departure_time' => '2023-06-22', 'remark' => 'NULL', 'trip_id' => 147]);
        Stopp::create(['id' => 171, 'store_id' => 91, 'date' => '2023-06-22', 'order_number' => '2', 'arrival_time' => '2023-06-22 00:00', 'departure_time' => '2023-06-22', 'remark' => 'NULL', 'trip_id' => 147]);
        Stopp::create(['id' => 172, 'store_id' => 59, 'date' => '2023-06-23', 'order_number' => '1', 'arrival_time' => '2023-06-23 00:00', 'departure_time' => '2023-06-23', 'remark' => 'NULL', 'trip_id' => 148]);
        Stopp::create(['id' => 173, 'store_id' => 140, 'date' => '2023-06-23', 'order_number' => '2', 'arrival_time' => '2023-06-23 00:00', 'departure_time' => '2023-06-23', 'remark' => 'NULL', 'trip_id' => 148]);
        Stopp::create(['id' => 174, 'store_id' => 114, 'date' => '2023-06-23', 'order_number' => '1', 'arrival_time' => '2023-06-23 00:00', 'departure_time' => '2023-06-23', 'remark' => 'NULL', 'trip_id' => 149]);
        Stopp::create(['id' => 175, 'store_id' => 12, 'date' => '2023-06-26', 'order_number' => '1', 'arrival_time' => '2023-06-26 00:00', 'departure_time' => '2023-06-26', 'remark' => 'NULL', 'trip_id' => 150]);
        Stopp::create(['id' => 176, 'store_id' => 8, 'date' => '2023-06-26', 'order_number' => '2', 'arrival_time' => '2023-06-26 00:00', 'departure_time' => '2023-06-26', 'remark' => 'NULL', 'trip_id' => 150]);
        Stopp::create(['id' => 177, 'store_id' => 102, 'date' => '2023-06-26', 'order_number' => '1', 'arrival_time' => '2023-06-26 00:00', 'departure_time' => '2023-06-26', 'remark' => 'NULL', 'trip_id' => 151]);
        Stopp::create(['id' => 178, 'store_id' => 38, 'date' => '2023-06-27', 'order_number' => '1', 'arrival_time' => '2023-06-27 00:00', 'departure_time' => '2023-06-27', 'remark' => 'NULL', 'trip_id' => 152]);
        Stopp::create(['id' => 179, 'store_id' => 59, 'date' => '2023-06-27', 'order_number' => '1', 'arrival_time' => '2023-06-27 00:00', 'departure_time' => '2023-06-27', 'remark' => 'NULL', 'trip_id' => 153]);
        Stopp::create(['id' => 180, 'store_id' => 191, 'date' => '2023-06-27', 'order_number' => '2', 'arrival_time' => '2023-06-27 00:00', 'departure_time' => '2023-06-27', 'remark' => 'NULL', 'trip_id' => 153]);
        Stopp::create(['id' => 181, 'store_id' => 109, 'date' => '2023-06-27', 'order_number' => '3', 'arrival_time' => '2023-06-27 00:00', 'departure_time' => '2023-06-27', 'remark' => 'NULL', 'trip_id' => 153]);
        Stopp::create(['id' => 182, 'store_id' => 7, 'date' => '2023-06-28', 'order_number' => '1', 'arrival_time' => '2023-06-28 00:00', 'departure_time' => '2023-06-28', 'remark' => 'NULL', 'trip_id' => 154]);
        Stopp::create(['id' => 183, 'store_id' => 50, 'date' => '2023-06-28', 'order_number' => '1', 'arrival_time' => '2023-06-28 00:00', 'departure_time' => '2023-06-28', 'remark' => 'NULL', 'trip_id' => 155]);
        Stopp::create(['id' => 184, 'store_id' => 5, 'date' => '2023-06-28', 'order_number' => '2', 'arrival_time' => '2023-06-28 00:00', 'departure_time' => '2023-06-28', 'remark' => 'NULL', 'trip_id' => 155]);
        Stopp::create(['id' => 185, 'store_id' => 4, 'date' => '2023-06-30', 'order_number' => '1', 'arrival_time' => '2023-06-30 00:00', 'departure_time' => '2023-06-30', 'remark' => 'NULL', 'trip_id' => 156]);

        Stopp::create(['id' => 187, 'store_id' => 5, 'date' => '2023-06-30', 'order_number' => '2', 'arrival_time' => '2023-06-30 00:00', 'departure_time' => '2023-06-30', 'remark' => 'NULL', 'trip_id' => 157]);
        Stopp::create(['id' => 188, 'store_id' => 26, 'date' => '2023-07-03', 'order_number' => '1', 'arrival_time' => '2023-07-03 00:00', 'departure_time' => '2023-07-03', 'remark' => 'NULL', 'trip_id' => 158]);
        Stopp::create(['id' => 189, 'store_id' => 188, 'date' => '2023-07-03', 'order_number' => '1', 'arrival_time' => '2023-07-03 00:00', 'departure_time' => '2023-07-03', 'remark' => 'NULL', 'trip_id' => 159]);
        Stopp::create(['id' => 190, 'store_id' => 8, 'date' => '2023-07-03', 'order_number' => '2', 'arrival_time' => '2023-07-03 00:00', 'departure_time' => '2023-07-03', 'remark' => 'NULL', 'trip_id' => 159]);
        Stopp::create(['id' => 191, 'store_id' => 4, 'date' => '2023-07-04', 'order_number' => '1', 'arrival_time' => '2023-07-04 00:00', 'departure_time' => '2023-07-04', 'remark' => 'NULL', 'trip_id' => 160]);
        Stopp::create(['id' => 192, 'store_id' => 15, 'date' => '2023-07-04', 'order_number' => '2', 'arrival_time' => '2023-07-04 00:00', 'departure_time' => '2023-07-04', 'remark' => 'NULL', 'trip_id' => 160]);

        Stopp::create(['id' => 194, 'store_id' => 67, 'date' => '2023-07-05', 'order_number' => '1', 'arrival_time' => '2023-07-05 00:00', 'departure_time' => '2023-07-05', 'remark' => 'NULL', 'trip_id' => 162]);

        Stopp::create(['id' => 196, 'store_id' => 126, 'date' => '2023-07-05', 'order_number' => '2', 'arrival_time' => '2023-07-05 00:00', 'departure_time' => '2023-07-05', 'remark' => 'NULL', 'trip_id' => 163]);
        Stopp::create(['id' => 197, 'store_id' => 28, 'date' => '2023-07-10', 'order_number' => '1', 'arrival_time' => '2023-07-10 00:00', 'departure_time' => '2023-07-10', 'remark' => 'NULL', 'trip_id' => 164]);
        Stopp::create(['id' => 198, 'store_id' => 29, 'date' => '2023-07-10', 'order_number' => '2', 'arrival_time' => '2023-07-10 00:00', 'departure_time' => '2023-07-10', 'remark' => 'Reihenfolge umgekehrt', 'trip_id' => 164]);
        Stopp::create(['id' => 199, 'store_id' => 64, 'date' => '2023-07-10', 'order_number' => '1', 'arrival_time' => '2023-07-10 00:00', 'departure_time' => '2023-07-10', 'remark' => 'vorgeladen ohne Zigaretten', 'trip_id' => 165]);
        Stopp::create(['id' => 200, 'store_id' => 5, 'date' => '2023-07-10', 'order_number' => '2', 'arrival_time' => '2023-07-10 00:00', 'departure_time' => '2023-07-10', 'remark' => 'vorgeladen ohne Zigaretten', 'trip_id' => 165]);
        Stopp::create(['id' => 201, 'store_id' => 27, 'date' => '2023-07-12', 'order_number' => '2', 'arrival_time' => '2023-07-12 00:00', 'departure_time' => '2023-07-12', 'remark' => 'NULL', 'trip_id' => 166]);
        Stopp::create(['id' => 202, 'store_id' => 106, 'date' => '2023-07-12', 'order_number' => '1', 'arrival_time' => '2023-07-12 00:00', 'departure_time' => '2023-07-12', 'remark' => 'NULL', 'trip_id' => 166]);
        Stopp::create(['id' => 203, 'store_id' => 189, 'date' => '2023-07-13', 'order_number' => '1', 'arrival_time' => '2023-07-13 00:00', 'departure_time' => '2023-07-13', 'remark' => 'NULL', 'trip_id' => 167]);
        Stopp::create(['id' => 204, 'store_id' => 168, 'date' => '2023-07-13', 'order_number' => '2', 'arrival_time' => '2023-07-13 00:00', 'departure_time' => '2023-07-13', 'remark' => 'NULL', 'trip_id' => 167]);
        Stopp::create(['id' => 205, 'store_id' => 64, 'date' => '2023-07-13', 'order_number' => '1', 'arrival_time' => '2023-07-13 00:00', 'departure_time' => '2023-07-13', 'remark' => 'vorladen', 'trip_id' => 168]);

        Stopp::create(['id' => 207, 'store_id' => 89, 'date' => '2023-07-14', 'order_number' => '1', 'arrival_time' => '2023-07-14 00:00', 'departure_time' => '2023-07-14', 'remark' => 'Nach Tour zur Werkstatt ', 'trip_id' => 169]);
        Stopp::create(['id' => 208, 'store_id' => 75, 'date' => '2023-07-14', 'order_number' => '2', 'arrival_time' => '2023-07-14 00:00', 'departure_time' => '2023-07-14', 'remark' => 'NULL', 'trip_id' => 169]);
        Stopp::create(['id' => 209, 'store_id' => 88, 'date' => '2023-07-14', 'order_number' => '3', 'arrival_time' => '2023-07-14 00:00', 'departure_time' => '2023-07-14', 'remark' => 'NULL', 'trip_id' => 169]);
        Stopp::create(['id' => 210, 'store_id' => 136, 'date' => '2023-07-15', 'order_number' => '1', 'arrival_time' => '2023-07-15 00:00', 'departure_time' => '2023-07-15', 'remark' => 'NULL', 'trip_id' => 170]);
        Stopp::create(['id' => 211, 'store_id' => 81, 'date' => '2023-07-15', 'order_number' => '2', 'arrival_time' => '2023-07-15 00:00', 'departure_time' => '2023-07-15', 'remark' => 'NULL', 'trip_id' => 170]);

        Stopp::create(['id' => 213, 'store_id' => 71, 'date' => '2023-07-15', 'order_number' => '1', 'arrival_time' => '2023-07-15 00:00', 'departure_time' => '2023-07-15', 'remark' => 'NULL', 'trip_id' => 171]);
        Stopp::create(['id' => 214, 'store_id' => 88, 'date' => '2023-07-17', 'order_number' => '1', 'arrival_time' => '2023-07-17 00:00', 'departure_time' => '2023-07-17', 'remark' => 'NULL', 'trip_id' => 172]);

        Stopp::create(['id' => 216, 'store_id' => 157, 'date' => '2023-07-17', 'order_number' => '3', 'arrival_time' => '2023-07-17 00:00', 'departure_time' => '2023-07-17', 'remark' => 'NULL', 'trip_id' => 172]);


        Stopp::create(['id' => 219, 'store_id' => 86, 'date' => '2023-07-18', 'order_number' => '2', 'arrival_time' => '2023-07-18 00:00', 'departure_time' => '2023-07-18', 'remark' => 'NULL', 'trip_id' => 174]);
        Stopp::create(['id' => 220, 'store_id' => 7, 'date' => '2023-07-19', 'order_number' => '1', 'arrival_time' => '2023-07-19 00:00', 'departure_time' => '2023-07-19', 'remark' => 'vorgeladen ', 'trip_id' => 176]);


        Stopp::create(['id' => 223, 'store_id' => 67, 'date' => '2023-07-20', 'order_number' => '1', 'arrival_time' => '2023-07-20 00:00', 'departure_time' => '2023-07-20', 'remark' => 'NULL', 'trip_id' => 178]);

        Stopp::create(['id' => 225, 'store_id' => 139, 'date' => '2023-07-20', 'order_number' => '3', 'arrival_time' => '2023-07-20 00:00', 'departure_time' => '2023-07-20', 'remark' => 'NULL', 'trip_id' => 178]);
        Stopp::create(['id' => 226, 'store_id' => 88, 'date' => '2023-07-21', 'order_number' => '1', 'arrival_time' => '2023-07-21 00:00', 'departure_time' => '2023-07-21', 'remark' => 'NULL', 'trip_id' => 179]);

        Stopp::create(['id' => 228, 'store_id' => 53, 'date' => '2023-07-21', 'order_number' => '3', 'arrival_time' => '2023-07-21 00:00', 'departure_time' => '2023-07-21', 'remark' => 'Werkstatt S√ºd von 08:55- 05:41', 'trip_id' => 179]);
        Stopp::create(['id' => 229, 'store_id' => 66, 'date' => '2023-07-24', 'order_number' => '1', 'arrival_time' => '2023-07-24 00:00', 'departure_time' => '2023-07-24', 'remark' => 'NULL', 'trip_id' => 180]);
        Stopp::create(['id' => 230, 'store_id' => 76, 'date' => '2023-07-24', 'order_number' => '1', 'arrival_time' => '2023-07-24 00:00', 'departure_time' => '2023-07-24', 'remark' => 'NULL', 'trip_id' => 181]);
        Stopp::create(['id' => 231, 'store_id' => 66, 'date' => '2023-07-25', 'order_number' => '1', 'arrival_time' => '2023-07-25 00:00', 'departure_time' => '2023-07-25', 'remark' => 'NULL', 'trip_id' => 182]);
        Stopp::create(['id' => 232, 'store_id' => 142, 'date' => '2023-07-25', 'order_number' => '1', 'arrival_time' => '2023-07-25 00:00', 'departure_time' => '2023-07-25', 'remark' => 'NULL', 'trip_id' => 183]);
        Stopp::create(['id' => 233, 'store_id' => 34, 'date' => '2023-07-26', 'order_number' => '1', 'arrival_time' => '2023-07-26 00:00', 'departure_time' => '2023-07-26', 'remark' => 'vorgeladen durch B. Hahn', 'trip_id' => 184]);
        Stopp::create(['id' => 234, 'store_id' => 134, 'date' => '2023-07-26', 'order_number' => '1', 'arrival_time' => '2023-07-26 00:00', 'departure_time' => '2023-07-26', 'remark' => 'NULL', 'trip_id' => 185]);
        Stopp::create(['id' => 235, 'store_id' => 32, 'date' => '2023-07-27', 'order_number' => '1', 'arrival_time' => '2023-07-27 00:00', 'departure_time' => '2023-07-27', 'remark' => 'muss nach OR zum Tanken da Tankreserve angezeigt wird', 'trip_id' => 186]);
        Stopp::create(['id' => 236, 'store_id' => 40, 'date' => '2023-07-27', 'order_number' => '2', 'arrival_time' => '2023-07-27 00:00', 'departure_time' => '2023-07-27', 'remark' => 'NULL', 'trip_id' => 186]);
        Stopp::create(['id' => 237, 'store_id' => 175, 'date' => '2023-07-27', 'order_number' => '1', 'arrival_time' => '2023-07-27 00:00', 'departure_time' => '2023-07-27', 'remark' => 'NULL', 'trip_id' => 187]);
        Stopp::create(['id' => 238, 'store_id' => 54, 'date' => '2023-07-28', 'order_number' => '1', 'arrival_time' => '2023-07-28 00:00', 'departure_time' => '2023-07-28', 'remark' => 'NULL', 'trip_id' => 188]);
        Stopp::create(['id' => 239, 'store_id' => 4, 'date' => '2023-07-28', 'order_number' => '2', 'arrival_time' => '2023-07-28 00:00', 'departure_time' => '2023-07-28', 'remark' => 'NULL', 'trip_id' => 188]);

        Stopp::create(['id' => 241, 'store_id' => 6, 'date' => '2023-08-03', 'order_number' => '1', 'arrival_time' => '2023-08-03 00:00', 'departure_time' => '2023-08-03', 'remark' => 'NULL', 'trip_id' => 191]);
        Stopp::create(['id' => 242, 'store_id' => 36, 'date' => '2023-08-03', 'order_number' => '2', 'arrival_time' => '2023-08-03 00:00', 'departure_time' => '2023-08-03', 'remark' => 'NULL', 'trip_id' => 191]);
        Stopp::create(['id' => 243, 'store_id' => 10, 'date' => '2023-08-04', 'order_number' => '1', 'arrival_time' => '2023-08-04 00:00', 'departure_time' => '2023-08-04', 'remark' => 'NULL', 'trip_id' => 192]);
        Stopp::create(['id' => 244, 'store_id' => 128, 'date' => '2023-08-04', 'order_number' => '1', 'arrival_time' => '2023-08-04 00:00', 'departure_time' => '2023-08-04', 'remark' => 'NULL', 'trip_id' => 193]);
        Stopp::create(['id' => 245, 'store_id' => 168, 'date' => '2023-08-07', 'order_number' => '1', 'arrival_time' => '2023-08-07 00:00', 'departure_time' => '2023-08-07', 'remark' => 'NULL', 'trip_id' => 194]);
        Stopp::create(['id' => 246, 'store_id' => 45, 'date' => '2023-08-07', 'order_number' => '2', 'arrival_time' => '2023-08-07 00:00', 'departure_time' => '2023-08-07', 'remark' => 'Warten Trinks', 'trip_id' => 194]);
        Stopp::create(['id' => 247, 'store_id' => 140, 'date' => '2023-08-08', 'order_number' => '1', 'arrival_time' => '2023-08-08 00:00', 'departure_time' => '2023-08-08', 'remark' => 'NULL', 'trip_id' => 196]);
        Stopp::create(['id' => 248, 'store_id' => 82, 'date' => '2023-08-08', 'order_number' => '2', 'arrival_time' => '2023-08-08 00:00', 'departure_time' => '2023-08-08', 'remark' => 'NULL', 'trip_id' => 196]);

        Stopp::create(['id' => 250, 'store_id' => 129, 'date' => '2023-08-09', 'order_number' => '1', 'arrival_time' => '2023-08-09 00:00', 'departure_time' => '2023-08-09', 'remark' => 'NULL', 'trip_id' => 198]);
        Stopp::create(['id' => 251, 'store_id' => 93, 'date' => '2023-08-09', 'order_number' => '2', 'arrival_time' => '2023-08-09 00:00', 'departure_time' => '2023-08-09', 'remark' => 'NULL', 'trip_id' => 198]);


        Stopp::create(['id' => 255, 'store_id' => 115, 'date' => '2023-08-10', 'order_number' => '1', 'arrival_time' => '2023-08-10 00:00', 'departure_time' => '2023-08-10', 'remark' => 'NULL', 'trip_id' => 201]);


        Stopp::create(['id' => 258, 'store_id' => 5, 'date' => '2023-08-11', 'order_number' => '1', 'arrival_time' => '2023-08-11 00:00', 'departure_time' => '2023-08-11', 'remark' => 'NULL', 'trip_id' => 203]);
        Stopp::create(['id' => 259, 'store_id' => 109, 'date' => '2023-08-28', 'order_number' => '1', 'arrival_time' => '2023-08-28 00:00', 'departure_time' => '2023-08-28', 'remark' => 'NULL', 'trip_id' => 204]);
        Stopp::create(['id' => 260, 'store_id' => 64, 'date' => '2023-08-28', 'order_number' => '2', 'arrival_time' => '2023-08-28 00:00', 'departure_time' => '2023-08-28', 'remark' => 'NULL', 'trip_id' => 204]);
        Stopp::create(['id' => 261, 'store_id' => 67, 'date' => '2023-08-28', 'order_number' => '1', 'arrival_time' => '2023-08-28 00:00', 'departure_time' => '2023-08-28', 'remark' => 'NULL', 'trip_id' => 205]);
        Stopp::create(['id' => 262, 'store_id' => 3, 'date' => '2023-08-29', 'order_number' => '1', 'arrival_time' => '2023-08-29 00:00', 'departure_time' => '2023-08-29', 'remark' => 'NULL', 'trip_id' => 206]);
        Stopp::create(['id' => 263, 'store_id' => 54, 'date' => '2023-08-29', 'order_number' => '2', 'arrival_time' => '2023-08-29 00:00', 'departure_time' => '2023-08-29', 'remark' => 'NULL', 'trip_id' => 206]);
        Stopp::create(['id' => 264, 'store_id' => 2, 'date' => '2023-08-29', 'order_number' => '1', 'arrival_time' => '2023-08-29 00:00', 'departure_time' => '2023-08-29', 'remark' => 'NULL', 'trip_id' => 207]);
        Stopp::create(['id' => 265, 'store_id' => 23, 'date' => '2023-08-30', 'order_number' => '1', 'arrival_time' => '2023-08-30 00:00', 'departure_time' => '2023-08-30', 'remark' => 'NULL', 'trip_id' => 208]);
        Stopp::create(['id' => 266, 'store_id' => 26, 'date' => '2023-08-30', 'order_number' => '1', 'arrival_time' => '2023-08-30 00:00', 'departure_time' => '2023-08-30', 'remark' => 'NULL', 'trip_id' => 209]);
        Stopp::create(['id' => 267, 'store_id' => 5, 'date' => '2023-08-30', 'order_number' => '2', 'arrival_time' => '2023-08-30 00:00', 'departure_time' => '2023-08-30', 'remark' => 'NULL', 'trip_id' => 209]);
        Stopp::create(['id' => 268, 'store_id' => 20, 'date' => '2023-08-31', 'order_number' => '1', 'arrival_time' => '2023-08-31 00:00', 'departure_time' => '2023-08-31', 'remark' => 'NULL', 'trip_id' => 210]);
        Stopp::create(['id' => 269, 'store_id' => 70, 'date' => '2023-08-31', 'order_number' => '1', 'arrival_time' => '2023-08-31 00:00', 'departure_time' => '2023-08-31', 'remark' => 'NULL', 'trip_id' => 211]);
        Stopp::create(['id' => 270, 'store_id' => 114, 'date' => '2023-09-01', 'order_number' => '1', 'arrival_time' => '2023-09-01 00:00', 'departure_time' => '2023-09-01', 'remark' => 'NULL', 'trip_id' => 212]);
        Stopp::create(['id' => 271, 'store_id' => 24, 'date' => '2023-09-01', 'order_number' => '2', 'arrival_time' => '2023-09-01 00:00', 'departure_time' => '2023-09-01', 'remark' => 'NULL', 'trip_id' => 212]);

        Stopp::create(['id' => 273, 'store_id' => 51, 'date' => '2023-09-04', 'order_number' => '1', 'arrival_time' => '2023-09-04 00:00', 'departure_time' => '2023-09-04', 'remark' => 'NULL', 'trip_id' => 214]);
        Stopp::create(['id' => 274, 'store_id' => 56, 'date' => '2023-09-04', 'order_number' => '2', 'arrival_time' => '2023-09-04 00:00', 'departure_time' => '2023-09-04', 'remark' => 'NULL', 'trip_id' => 214]);

        Stopp::create(['id' => 276, 'store_id' => 65, 'date' => '2023-09-04', 'order_number' => '1', 'arrival_time' => '2023-09-04 00:00', 'departure_time' => '2023-09-04', 'remark' => 'NULL', 'trip_id' => 215]);
        Stopp::create(['id' => 277, 'store_id' => 32, 'date' => '2023-09-04', 'order_number' => '1', 'arrival_time' => '2023-09-04 00:00', 'departure_time' => '2023-09-04', 'remark' => 'NULL', 'trip_id' => 215]);
        Stopp::create(['id' => 278, 'store_id' => 136, 'date' => '2023-09-05', 'order_number' => '1', 'arrival_time' => '2023-09-05 00:00', 'departure_time' => '2023-09-05', 'remark' => 'NULL', 'trip_id' => 216]);

        Stopp::create(['id' => 280, 'store_id' => 52, 'date' => '2023-09-05', 'order_number' => '1', 'arrival_time' => '2023-09-05 00:00', 'departure_time' => '2023-09-05', 'remark' => 'NULL', 'trip_id' => 217]);
        Stopp::create(['id' => 281, 'store_id' => 51, 'date' => '2023-09-06', 'order_number' => '1', 'arrival_time' => '2023-09-06 00:00', 'departure_time' => '2023-09-06', 'remark' => 'NULL', 'trip_id' => 218]);
        Stopp::create(['id' => 282, 'store_id' => 105, 'date' => '2023-09-07', 'order_number' => '1', 'arrival_time' => '2023-09-07 00:00', 'departure_time' => '2023-09-07', 'remark' => 'NULL', 'trip_id' => 219]);
        Stopp::create(['id' => 283, 'store_id' => 84, 'date' => '2023-09-07', 'order_number' => '2', 'arrival_time' => '2023-09-07 00:00', 'departure_time' => '2023-09-07', 'remark' => 'NULL', 'trip_id' => 219]);
        Stopp::create(['id' => 284, 'store_id' => 44, 'date' => '2023-09-08', 'order_number' => '1', 'arrival_time' => '2023-09-08 00:00', 'departure_time' => '2023-09-08', 'remark' => 'NULL', 'trip_id' => 220]);
        Stopp::create(['id' => 285, 'store_id' => 86, 'date' => '2023-09-08', 'order_number' => '2', 'arrival_time' => '2023-09-08 00:00', 'departure_time' => '2023-09-08', 'remark' => 'NULL', 'trip_id' => 220]);
        Stopp::create(['id' => 286, 'store_id' => 48, 'date' => '2023-09-08', 'order_number' => '1', 'arrival_time' => '2023-09-08 00:00', 'departure_time' => '2023-09-08', 'remark' => 'NULL', 'trip_id' => 221]);
        Stopp::create(['id' => 287, 'store_id' => 32, 'date' => '2023-09-18', 'order_number' => '1', 'arrival_time' => '2023-09-18 00:00', 'departure_time' => '2023-09-18', 'remark' => 'ladezone zugestellt, 15 Mir warten,
bis Fzg weg ist', 'trip_id' => 222]);
        Stopp::create(['id' => 288, 'store_id' => 40, 'date' => '2023-09-18', 'order_number' => '2', 'arrival_time' => '2023-09-18 00:00', 'departure_time' => '2023-09-18', 'remark' => 'NULL', 'trip_id' => 222]);
        Stopp::create(['id' => 289, 'store_id' => 42, 'date' => '2023-09-19', 'order_number' => '1', 'arrival_time' => '2023-09-19 00:00', 'departure_time' => '2023-09-19', 'remark' => '45 Min warten auf Ware', 'trip_id' => 223]);
        Stopp::create(['id' => 290, 'store_id' => 21, 'date' => '2023-09-20', 'order_number' => '1', 'arrival_time' => '2023-09-20 00:00', 'departure_time' => '2023-09-20', 'remark' => 'NULL', 'trip_id' => 224]);
        Stopp::create(['id' => 291, 'store_id' => 126, 'date' => '2023-09-20', 'order_number' => '2', 'arrival_time' => '2023-09-20 00:00', 'departure_time' => '2023-09-20', 'remark' => 'NULL', 'trip_id' => 224]);
        Stopp::create(['id' => 292, 'store_id' => 7, 'date' => '2023-09-20', 'order_number' => '1', 'arrival_time' => '2023-09-20 00:00', 'departure_time' => '2023-09-20', 'remark' => 'NULL', 'trip_id' => 225]);
        Stopp::create(['id' => 293, 'store_id' => 15, 'date' => '2023-09-20', 'order_number' => '2', 'arrival_time' => '2023-09-20 00:00', 'departure_time' => '2023-09-20', 'remark' => 'NULL', 'trip_id' => 225]);
        Stopp::create(['id' => 294, 'store_id' => 5, 'date' => '2023-09-21', 'order_number' => '1', 'arrival_time' => '2023-09-21 00:00', 'departure_time' => '2023-09-21', 'remark' => 'in OR nach fragen', 'trip_id' => 226]);

        Stopp::create(['id' => 296, 'store_id' => 14, 'date' => '2023-09-22', 'order_number' => '1', 'arrival_time' => '2023-09-22 00:00', 'departure_time' => '2023-09-22', 'remark' => 'NULL', 'trip_id' => 228]);

        Stopp::create(['id' => 298, 'store_id' => 119, 'date' => '2023-09-22', 'order_number' => '2', 'arrival_time' => '2023-09-22 00:00', 'departure_time' => '2023-09-22', 'remark' => 'NULL', 'trip_id' => 229]);
        Stopp::create(['id' => 299, 'store_id' => 28, 'date' => '2023-09-25', 'order_number' => '1', 'arrival_time' => '2023-09-25 00:00', 'departure_time' => '2023-09-25', 'remark' => 'Reihenfolge in Absprache Dispo ge√§ndert', 'trip_id' => 230]);
        Stopp::create(['id' => 300, 'store_id' => 29, 'date' => '2023-09-25', 'order_number' => '2', 'arrival_time' => '2023-09-25 00:00', 'departure_time' => '2023-09-25', 'remark' => 'Reihenfolge in Absprache Dispo ge√§ndert', 'trip_id' => 230]);
        Stopp::create(['id' => 301, 'store_id' => 28, 'date' => '2023-09-25', 'order_number' => '1', 'arrival_time' => '2023-09-25 00:00', 'departure_time' => '2023-09-25', 'remark' => 'NULL', 'trip_id' => 231]);
        Stopp::create(['id' => 302, 'store_id' => 76, 'date' => '2023-09-26', 'order_number' => '1', 'arrival_time' => '2023-09-26 06:00', 'departure_time' => '2023-09-26', 'remark' => 'Frische vor mir', 'trip_id' => 232]);
        Stopp::create(['id' => 303, 'store_id' => 144, 'date' => '2023-09-26', 'order_number' => '1', 'arrival_time' => '2023-09-26 00:00', 'departure_time' => '2023-09-26', 'remark' => 'NULL', 'trip_id' => 233]);
        Stopp::create(['id' => 304, 'store_id' => 127, 'date' => '2023-09-27', 'order_number' => '1', 'arrival_time' => '2023-09-27 00:00', 'departure_time' => '2023-09-27', 'remark' => 'NULL', 'trip_id' => 234]);
        Stopp::create(['id' => 305, 'store_id' => 29, 'date' => '2023-09-27', 'order_number' => '1', 'arrival_time' => '2023-09-27 00:00', 'departure_time' => '2023-09-27', 'remark' => 'NULL', 'trip_id' => 235]);
        Stopp::create(['id' => 306, 'store_id' => 115, 'date' => '2023-09-28', 'order_number' => '1', 'arrival_time' => '2023-09-28 00:00', 'departure_time' => '2023-09-28', 'remark' => 'NULL', 'trip_id' => 236]);
        Stopp::create(['id' => 307, 'store_id' => 169, 'date' => '2023-09-28', 'order_number' => '2', 'arrival_time' => '2023-09-28 00:00', 'departure_time' => '2023-09-28', 'remark' => 'NULL', 'trip_id' => 236]);
        Stopp::create(['id' => 308, 'store_id' => 52, 'date' => '2023-09-28', 'order_number' => '1', 'arrival_time' => '2023-09-28 00:00', 'departure_time' => '2023-09-28', 'remark' => 'NULL', 'trip_id' => 237]);
        Stopp::create(['id' => 309, 'store_id' => 107, 'date' => '2023-09-29', 'order_number' => '1', 'arrival_time' => '2023-09-29 00:00', 'departure_time' => '2023-09-29', 'remark' => 'NULL', 'trip_id' => 238]);
        Stopp::create(['id' => 310, 'store_id' => 77, 'date' => '2023-09-29', 'order_number' => '2', 'arrival_time' => '2023-09-29 00:00', 'departure_time' => '2023-09-29', 'remark' => 'NULL', 'trip_id' => 238]);

        Stopp::create(['id' => 312, 'store_id' => 29, 'date' => '2023-10-04', 'order_number' => '1', 'arrival_time' => '2023-10-04 00:00', 'departure_time' => '2023-10-04', 'remark' => '√ñffnet erst um 0700 ‚áí 45 Min Warten und umstellen', 'trip_id' => 239]);
        Stopp::create(['id' => 313, 'store_id' => 47, 'date' => '2023-10-04', 'order_number' => '2', 'arrival_time' => '2023-10-04 00:00', 'departure_time' => '2023-10-04', 'remark' => 'NULL', 'trip_id' => 239]);

        Stopp::create(['id' => 315, 'store_id' => 35, 'date' => '2023-10-05', 'order_number' => '1', 'arrival_time' => '2023-10-05 00:00', 'departure_time' => '2023-10-05', 'remark' => 'NULL', 'trip_id' => 241]);
        Stopp::create(['id' => 316, 'store_id' => 20, 'date' => '2023-10-06', 'order_number' => '1', 'arrival_time' => '2023-10-06 00:00', 'departure_time' => '2023-10-06', 'remark' => '40 Min warten bis zur √ñffnung ', 'trip_id' => 242]);


        Stopp::create(['id' => 321, 'store_id' => 110, 'date' => '2023-10-07', 'order_number' => '1', 'arrival_time' => '2023-10-07 00:00', 'departure_time' => '2023-10-07', 'remark' => 'NULL', 'trip_id' => 244]);
        Stopp::create(['id' => 322, 'store_id' => 66, 'date' => '2023-10-09', 'order_number' => '1', 'arrival_time' => '2023-10-09 00:00', 'departure_time' => '2023-10-09', 'remark' => 'NULL', 'trip_id' => 245]);
        Stopp::create(['id' => 323, 'store_id' => 163, 'date' => '2023-10-09', 'order_number' => '1', 'arrival_time' => '2023-10-09 00:00', 'departure_time' => '2023-10-09', 'remark' => 'NULL', 'trip_id' => 246]);
        Stopp::create(['id' => 324, 'store_id' => 66, 'date' => '2023-10-09', 'order_number' => '2', 'arrival_time' => '2023-10-09 00:00', 'departure_time' => '2023-10-09', 'remark' => 'NULL', 'trip_id' => 246]);

        Stopp::create(['id' => 326, 'store_id' => 43, 'date' => '2023-10-11', 'order_number' => '1', 'arrival_time' => '2023-10-11 00:00', 'departure_time' => '2023-10-11', 'remark' => 'NULL', 'trip_id' => 248]);
        Stopp::create(['id' => 327, 'store_id' => 117, 'date' => '2023-10-11', 'order_number' => '1', 'arrival_time' => '2023-10-11 00:00', 'departure_time' => '2023-10-11', 'remark' => 'NULL', 'trip_id' => 249]);
        Stopp::create(['id' => 328, 'store_id' => 156, 'date' => '2023-10-12', 'order_number' => '1', 'arrival_time' => '2023-10-12 00:00', 'departure_time' => '2023-10-12', 'remark' => 'NULL', 'trip_id' => 250]);
        Stopp::create(['id' => 329, 'store_id' => 113, 'date' => '2023-10-13', 'order_number' => '1', 'arrival_time' => '2023-10-13 00:00', 'departure_time' => '2023-10-13', 'remark' => 'NULL', 'trip_id' => 251]);
        Stopp::create(['id' => 330, 'store_id' => 49, 'date' => '2023-10-13', 'order_number' => '2', 'arrival_time' => '2023-10-13 00:00', 'departure_time' => '2023-10-13', 'remark' => 'NULL', 'trip_id' => 251]);
        Stopp::create(['id' => 331, 'store_id' => 159, 'date' => '2023-10-13', 'order_number' => '1', 'arrival_time' => '2023-10-13 00:00', 'departure_time' => '2023-10-13', 'remark' => 'NULL', 'trip_id' => 252]);
        Stopp::create(['id' => 332, 'store_id' => 113, 'date' => '2023-10-16', 'order_number' => '1', 'arrival_time' => '2023-10-16 00:00', 'departure_time' => '2023-10-16', 'remark' => 'NULL', 'trip_id' => 253]);

        Stopp::create(['id' => 334, 'store_id' => 58, 'date' => '2023-10-16', 'order_number' => '1', 'arrival_time' => '2023-10-16 00:00', 'departure_time' => '2023-10-16', 'remark' => 'NULL', 'trip_id' => 254]);
        Stopp::create(['id' => 335, 'store_id' => 94, 'date' => '2023-10-17', 'order_number' => '1', 'arrival_time' => '2023-10-17 00:00', 'departure_time' => '2023-10-17', 'remark' => 'NULL', 'trip_id' => 255]);
        Stopp::create(['id' => 336, 'store_id' => 20, 'date' => '2023-10-17', 'order_number' => '1', 'arrival_time' => '2023-10-17 00:00', 'departure_time' => '2023-10-17', 'remark' => 'NULL', 'trip_id' => 256]);
        Stopp::create(['id' => 337, 'store_id' => 169, 'date' => '2023-10-18', 'order_number' => '1', 'arrival_time' => '2023-10-18 00:00', 'departure_time' => '2023-10-18', 'remark' => 'NULL', 'trip_id' => 257]);
        Stopp::create(['id' => 338, 'store_id' => 114, 'date' => '2023-10-19', 'order_number' => '1', 'arrival_time' => '2023-10-19 00:00', 'departure_time' => '2023-10-19', 'remark' => 'NULL', 'trip_id' => 258]);
        Stopp::create(['id' => 339, 'store_id' => 148, 'date' => '2023-10-19', 'order_number' => '1', 'arrival_time' => '2023-10-19 00:00', 'departure_time' => '2023-10-19', 'remark' => 'NULL', 'trip_id' => 259]);
        Stopp::create(['id' => 340, 'store_id' => 51, 'date' => '2023-10-20', 'order_number' => '1', 'arrival_time' => '2023-10-20 00:00', 'departure_time' => '2023-10-20', 'remark' => 'NULL', 'trip_id' => 260]);
        Stopp::create(['id' => 341, 'store_id' => 4, 'date' => '2023-10-20', 'order_number' => '1', 'arrival_time' => '2023-10-20 00:00', 'departure_time' => '2023-10-20', 'remark' => 'NULL', 'trip_id' => 261]);
        Stopp::create(['id' => 342, 'store_id' => 45, 'date' => '2023-10-20', 'order_number' => '2', 'arrival_time' => '2023-10-20 00:00', 'departure_time' => '2023-10-20', 'remark' => 'NULL', 'trip_id' => 261]);
        Stopp::create(['id' => 343, 'store_id' => 76, 'date' => '2023-10-23', 'order_number' => '1', 'arrival_time' => '2023-10-23 00:00', 'departure_time' => '2023-10-23', 'remark' => 'NULL', 'trip_id' => 262]);
        Stopp::create(['id' => 344, 'store_id' => 29, 'date' => '2023-10-23', 'order_number' => '2', 'arrival_time' => '2023-10-23 00:00', 'departure_time' => '2023-10-23', 'remark' => 'NULL', 'trip_id' => 262]);
        Stopp::create(['id' => 345, 'store_id' => 76, 'date' => '2023-10-23', 'order_number' => '1', 'arrival_time' => '2023-10-23 00:00', 'departure_time' => '2023-10-23', 'remark' => 'NULL', 'trip_id' => 262]);

        Stopp::create(['id' => 347, 'store_id' => 76, 'date' => '2023-10-24', 'order_number' => '1', 'arrival_time' => '2023-10-24 00:00', 'departure_time' => '2023-10-24', 'remark' => 'NULL', 'trip_id' => 264]);


        Stopp::create(['id' => 351, 'store_id' => 178, 'date' => '2023-10-25', 'order_number' => '1', 'arrival_time' => '2023-10-25 00:00', 'departure_time' => '2023-10-25', 'remark' => 'NULL', 'trip_id' => 266]);
        Stopp::create(['id' => 352, 'store_id' => 196, 'date' => '2023-10-26', 'order_number' => '1', 'arrival_time' => '2023-10-26 00:00', 'departure_time' => '2023-10-26', 'remark' => 'NULL', 'trip_id' => 267]);
        Stopp::create(['id' => 353, 'store_id' => 97, 'date' => '2023-10-26', 'order_number' => '2', 'arrival_time' => '2023-10-26 00:00', 'departure_time' => '2023-10-26', 'remark' => 'NULL', 'trip_id' => 267]);
        Stopp::create(['id' => 354, 'store_id' => 47, 'date' => '2023-10-26', 'order_number' => '2', 'arrival_time' => '2023-10-26 00:00', 'departure_time' => '2023-10-26', 'remark' => 'NULL', 'trip_id' => 268]);
        Stopp::create(['id' => 355, 'store_id' => 152, 'date' => '2023-10-26', 'order_number' => '1', 'arrival_time' => '2023-10-26 00:00', 'departure_time' => '2023-10-26', 'remark' => 'NULL', 'trip_id' => 268]);
        Stopp::create(['id' => 356, 'store_id' => 161, 'date' => '2023-10-27', 'order_number' => '1', 'arrival_time' => '2023-10-27 00:00', 'departure_time' => '2023-10-27', 'remark' => 'NULL', 'trip_id' => 269]);
        Stopp::create(['id' => 357, 'store_id' => 168, 'date' => '2023-10-27', 'order_number' => '2', 'arrival_time' => '2023-10-27 00:00', 'departure_time' => '2023-10-27', 'remark' => 'NULL', 'trip_id' => 269]);
        Stopp::create(['id' => 358, 'store_id' => 28, 'date' => '2023-10-30', 'order_number' => '1', 'arrival_time' => '2023-10-30 00:00', 'departure_time' => '2023-10-30', 'remark' => 'NULL', 'trip_id' => 270]);
        Stopp::create(['id' => 359, 'store_id' => 5, 'date' => '2023-10-30', 'order_number' => '2', 'arrival_time' => '2023-10-30 00:00', 'departure_time' => '2023-10-30', 'remark' => 'NULL', 'trip_id' => 270]);
        Stopp::create(['id' => 360, 'store_id' => 200, 'date' => '2023-10-30', 'order_number' => '3', 'arrival_time' => '2023-10-30 00:00', 'departure_time' => '2023-10-30', 'remark' => 'NULL', 'trip_id' => 270]);

        Stopp::create(['id' => 362, 'store_id' => 122, 'date' => '2023-11-01', 'order_number' => '1', 'arrival_time' => '2023-11-01 00:00', 'departure_time' => '2023-11-01', 'remark' => 'NULL', 'trip_id' => 272]);

        Stopp::create(['id' => 364, 'store_id' => 105, 'date' => '2023-11-03', 'order_number' => '1', 'arrival_time' => '2023-11-03 00:00', 'departure_time' => '2023-11-03', 'remark' => 'NULL', 'trip_id' => 274]);
        Stopp::create(['id' => 365, 'store_id' => 161, 'date' => '2023-11-03', 'order_number' => '2', 'arrival_time' => '2023-11-03 00:00', 'departure_time' => '2023-11-03', 'remark' => 'NULL', 'trip_id' => 274]);

        Stopp::create(['id' => 367, 'store_id' => 91, 'date' => '2023-11-04', 'order_number' => '1', 'arrival_time' => '2023-11-04 00:00', 'departure_time' => '2023-11-04', 'remark' => 'NULL', 'trip_id' => 275]);

        Stopp::create(['id' => 369, 'store_id' => 81, 'date' => '2023-11-04', 'order_number' => '3', 'arrival_time' => '2023-11-04 00:00', 'departure_time' => '2023-11-04', 'remark' => 'NULL', 'trip_id' => 275]);
        Stopp::create(['id' => 370, 'store_id' => 94, 'date' => '2023-11-04', 'order_number' => '4', 'arrival_time' => '2023-11-04 00:00', 'departure_time' => '2023-11-04', 'remark' => 'NULL', 'trip_id' => 275]);
        Stopp::create(['id' => 371, 'store_id' => 28, 'date' => '2023-11-06', 'order_number' => '1', 'arrival_time' => '2023-11-06 00:00', 'departure_time' => '2023-11-06', 'remark' => 'NULL', 'trip_id' => 276]);
        Stopp::create(['id' => 372, 'store_id' => 5, 'date' => '2023-11-06', 'order_number' => '2', 'arrival_time' => '2023-11-06 00:00', 'departure_time' => '2023-11-06', 'remark' => 'NULL', 'trip_id' => 276]);
        Stopp::create(['id' => 373, 'store_id' => 200, 'date' => '2023-11-06', 'order_number' => '3', 'arrival_time' => '2023-11-06 00:00', 'departure_time' => '2023-11-06', 'remark' => 'NULL', 'trip_id' => 276]);

        Stopp::create(['id' => 375, 'store_id' => 171, 'date' => '2023-11-06', 'order_number' => '2', 'arrival_time' => '2023-11-06 00:00', 'departure_time' => '2023-11-06', 'remark' => 'vorladen', 'trip_id' => 277]);
        Stopp::create(['id' => 376, 'store_id' => 47, 'date' => '2023-11-07', 'order_number' => '1', 'arrival_time' => '2023-11-07 00:00', 'departure_time' => '2023-11-07', 'remark' => 'NULL', 'trip_id' => 278]);
        Stopp::create(['id' => 377, 'store_id' => 76, 'date' => '2023-11-07', 'order_number' => '2', 'arrival_time' => '2023-11-07 00:00', 'departure_time' => '2023-11-07', 'remark' => 'NULL', 'trip_id' => 278]);
        Stopp::create(['id' => 378, 'store_id' => 93, 'date' => '2023-11-08', 'order_number' => '1', 'arrival_time' => '2023-11-08 00:00', 'departure_time' => '2023-11-08', 'remark' => '1:09 Warten bis √ñffnung', 'trip_id' => 279]);
        Stopp::create(['id' => 379, 'store_id' => 200, 'date' => '2023-11-08', 'order_number' => '2', 'arrival_time' => '2023-11-08 00:00', 'departure_time' => '2023-11-08', 'remark' => '00:46 warten bis √ñffnung ', 'trip_id' => 279]);

        Stopp::create(['id' => 381, 'store_id' => 59, 'date' => '2023-11-09', 'order_number' => '2', 'arrival_time' => '2023-11-09 00:00', 'departure_time' => '2023-11-09', 'remark' => 'NULL', 'trip_id' => 281]);
        Stopp::create(['id' => 382, 'store_id' => 35, 'date' => '2023-11-09', 'order_number' => '1', 'arrival_time' => '2023-11-09 00:00', 'departure_time' => '2023-11-09', 'remark' => 'NULL', 'trip_id' => 282]);

        Stopp::create(['id' => 384, 'store_id' => 31, 'date' => '2023-11-10', 'order_number' => '2', 'arrival_time' => '2023-11-10 00:00', 'departure_time' => '2023-11-10', 'remark' => 'NULL', 'trip_id' => 283]);
        Stopp::create(['id' => 385, 'store_id' => 161, 'date' => '2023-11-10', 'order_number' => '1', 'arrival_time' => '2023-11-10 00:00', 'departure_time' => '2023-11-10', 'remark' => 'NULL', 'trip_id' => 283]);
        Stopp::create(['id' => 386, 'store_id' => 29, 'date' => '2023-11-10', 'order_number' => '1', 'arrival_time' => '2023-11-10 00:00', 'departure_time' => '2023-11-10', 'remark' => 'NULL', 'trip_id' => 284]);


        Stopp::create(['id' => 389, 'store_id' => 18, 'date' => '2023-11-13', 'order_number' => '1', 'arrival_time' => '2023-11-13 00:00', 'departure_time' => '2023-11-13', 'remark' => 'NULL', 'trip_id' => 286]);
        Stopp::create(['id' => 390, 'store_id' => 109, 'date' => '2023-11-14', 'order_number' => '1', 'arrival_time' => '2023-11-14 00:00', 'departure_time' => '2023-11-14', 'remark' => 'NULL', 'trip_id' => 287]);

        Stopp::create(['id' => 392, 'store_id' => 14, 'date' => '2023-11-15', 'order_number' => '1', 'arrival_time' => '2023-11-15 00:00', 'departure_time' => '2023-11-15', 'remark' => 'NULL', 'trip_id' => 288]);
        Stopp::create(['id' => 393, 'store_id' => 3, 'date' => '2023-11-15', 'order_number' => '1', 'arrival_time' => '2023-11-15 00:00', 'departure_time' => '2023-11-15', 'remark' => 'NULL', 'trip_id' => 289]);
        Stopp::create(['id' => 394, 'store_id' => 109, 'date' => '2023-11-15', 'order_number' => '2', 'arrival_time' => '2023-11-15 00:00', 'departure_time' => '2023-11-15', 'remark' => 'NULL', 'trip_id' => 289]);
        Stopp::create(['id' => 395, 'store_id' => 158, 'date' => '2023-11-16', 'order_number' => '1', 'arrival_time' => '2023-11-16 00:00', 'departure_time' => '2023-11-16', 'remark' => 'NULL', 'trip_id' => 290]);

        Stopp::create(['id' => 397, 'store_id' => 126, 'date' => '2023-11-17', 'order_number' => '1', 'arrival_time' => '2023-11-17 00:00', 'departure_time' => '2023-11-17', 'remark' => 'NULL', 'trip_id' => 292]);

        Stopp::create(['id' => 399, 'store_id' => 171, 'date' => '2023-11-20', 'order_number' => '1', 'arrival_time' => '2023-11-20 00:00', 'departure_time' => '2023-11-20', 'remark' => 'NULL', 'trip_id' => 294]);
        Stopp::create(['id' => 400, 'store_id' => 5, 'date' => '2023-11-20', 'order_number' => '1', 'arrival_time' => '2023-11-20 00:00', 'departure_time' => '2023-11-20', 'remark' => 'NULL', 'trip_id' => 294]);

        Stopp::create(['id' => 402, 'store_id' => 46, 'date' => '2023-11-21', 'order_number' => '1', 'arrival_time' => '2023-11-21 00:00', 'departure_time' => '2023-11-21', 'remark' => 'NULL', 'trip_id' => 296]);
        Stopp::create(['id' => 403, 'store_id' => 158, 'date' => '2023-11-21', 'order_number' => '2', 'arrival_time' => '2023-11-21 00:00', 'departure_time' => '2023-11-21', 'remark' => 'NULL', 'trip_id' => 296]);
        Stopp::create(['id' => 404, 'store_id' => 61, 'date' => '2023-11-21', 'order_number' => '1', 'arrival_time' => '2023-11-21 00:00', 'departure_time' => '2023-11-21', 'remark' => 'NULL', 'trip_id' => 297]);
        Stopp::create(['id' => 405, 'store_id' => 35, 'date' => '2023-11-22', 'order_number' => '1', 'arrival_time' => '2023-11-22 00:00', 'departure_time' => '2023-11-22', 'remark' => 'NULL', 'trip_id' => 298]);
        Stopp::create(['id' => 406, 'store_id' => 164, 'date' => '2023-11-22', 'order_number' => '1', 'arrival_time' => '2023-11-22 00:00', 'departure_time' => '2023-11-22', 'remark' => 'NULL', 'trip_id' => 299]);
        Stopp::create(['id' => 407, 'store_id' => 109, 'date' => '2023-11-22', 'order_number' => '2', 'arrival_time' => '2023-11-22 00:00', 'departure_time' => '2023-11-22', 'remark' => 'NULL', 'trip_id' => 299]);

        Stopp::create(['id' => 409, 'store_id' => 138, 'date' => '2023-11-24', 'order_number' => '1', 'arrival_time' => '2023-11-24 00:00', 'departure_time' => '2023-11-24', 'remark' => 'NULL', 'trip_id' => 301]);
        Stopp::create(['id' => 410, 'store_id' => 26, 'date' => '2023-11-24', 'order_number' => '2', 'arrival_time' => '2023-11-24 00:00', 'departure_time' => '2023-11-24', 'remark' => 'NULL', 'trip_id' => 301]);
        Stopp::create(['id' => 411, 'store_id' => 136, 'date' => '2023-12-04', 'order_number' => '1', 'arrival_time' => '2023-12-04 00:00', 'departure_time' => '2023-12-04', 'remark' => 'NULL', 'trip_id' => 302]);
        Stopp::create(['id' => 412, 'store_id' => 29, 'date' => '2023-12-04', 'order_number' => '2', 'arrival_time' => '2023-12-04 00:00', 'departure_time' => '2023-12-04', 'remark' => 'NULL', 'trip_id' => 302]);
        Stopp::create(['id' => 413, 'store_id' => 170, 'date' => '2023-12-05', 'order_number' => '1', 'arrival_time' => '2023-12-05 05:26', 'departure_time' => '2023-12-05', 'remark' => 'Warten ab 05:26 Tor noch geschlossen', 'trip_id' => 303]);
        Stopp::create(['id' => 414, 'store_id' => 76, 'date' => '2023-12-05', 'order_number' => '1', 'arrival_time' => '2023-12-05 00:00', 'departure_time' => '2023-12-05', 'remark' => 'NULL', 'trip_id' => 304]);
        Stopp::create(['id' => 415, 'store_id' => 196, 'date' => '2023-12-06', 'order_number' => '1', 'arrival_time' => '2023-12-06 00:00', 'departure_time' => '2023-12-06', 'remark' => 'NULL', 'trip_id' => 305]);

        Stopp::create(['id' => 417, 'store_id' => 16, 'date' => '2023-12-06', 'order_number' => '1', 'arrival_time' => '2023-12-06 00:00', 'departure_time' => '2023-12-06', 'remark' => 'NULL', 'trip_id' => 306]);
        Stopp::create(['id' => 418, 'store_id' => 22, 'date' => '2023-12-06', 'order_number' => '2', 'arrival_time' => '2023-12-06 00:00', 'departure_time' => '2023-12-06', 'remark' => 'NULL', 'trip_id' => 306]);

        Stopp::create(['id' => 420, 'store_id' => 84, 'date' => '2023-12-07', 'order_number' => '2', 'arrival_time' => '2023-12-07 00:00', 'departure_time' => '2023-12-07', 'remark' => 'NULL', 'trip_id' => 307]);
        Stopp::create(['id' => 421, 'store_id' => 198, 'date' => '2023-12-08', 'order_number' => '1', 'arrival_time' => '2023-12-08 00:00', 'departure_time' => '2023-12-08', 'remark' => 'NULL', 'trip_id' => 308]);

        Stopp::create(['id' => 423, 'store_id' => 145, 'date' => '2023-12-08', 'order_number' => '1', 'arrival_time' => '2023-12-08 00:00', 'departure_time' => '2023-12-08', 'remark' => 'NULL', 'trip_id' => 309]);
        Stopp::create(['id' => 424, 'store_id' => 16, 'date' => '2023-12-09', 'order_number' => '1', 'arrival_time' => '2023-12-09 00:00', 'departure_time' => '2023-12-09', 'remark' => 'wir 1 Runde da es Heidi nicht gut ging.
gem. Absprache Randy. ', 'trip_id' => 310]);
        Stopp::create(['id' => 425, 'store_id' => 30, 'date' => '2023-12-09', 'order_number' => '2', 'arrival_time' => '2023-12-09 00:00', 'departure_time' => '2023-12-09', 'remark' => 'NULL', 'trip_id' => 310]);
        Stopp::create(['id' => 426, 'store_id' => 22, 'date' => '2023-12-12', 'order_number' => '1', 'arrival_time' => '2023-12-12 00:00', 'departure_time' => '2023-12-12', 'remark' => 'NULL', 'trip_id' => 311]);

        Stopp::create(['id' => 428, 'store_id' => 124, 'date' => '2023-12-12', 'order_number' => '1', 'arrival_time' => '2023-12-12 00:00', 'departure_time' => '2023-12-12', 'remark' => 'NULL', 'trip_id' => 312]);
        Stopp::create(['id' => 429, 'store_id' => 124, 'date' => '2023-12-21', 'order_number' => '1', 'arrival_time' => '2023-12-21 00:00', 'departure_time' => '2023-12-21', 'remark' => 'NULL', 'trip_id' => 313]);
        Stopp::create(['id' => 430, 'store_id' => 108, 'date' => '2023-12-21', 'order_number' => '1', 'arrival_time' => '2023-12-21 00:00', 'departure_time' => '2023-12-21', 'remark' => 'NULL', 'trip_id' => 314]);
        Stopp::create(['id' => 431, 'store_id' => 127, 'date' => '2023-12-22', 'order_number' => '1', 'arrival_time' => '2023-12-22 00:00', 'departure_time' => '2023-12-22', 'remark' => 'NULL', 'trip_id' => 316]);
        Stopp::create(['id' => 432, 'store_id' => 157, 'date' => '2023-12-22', 'order_number' => '2', 'arrival_time' => '2023-12-22 00:00', 'departure_time' => '2023-12-22', 'remark' => 'NULL', 'trip_id' => 316]);

        Stopp::create(['id' => 434, 'store_id' => 110, 'date' => '2023-12-27', 'order_number' => '1', 'arrival_time' => '2023-12-27 00:00', 'departure_time' => '2023-12-27', 'remark' => 'vorgeladen f√ºr B.Hahn', 'trip_id' => 318]);
        Stopp::create(['id' => 435, 'store_id' => 16, 'date' => '2023-12-28', 'order_number' => '1', 'arrival_time' => '2023-12-28 05:50', 'departure_time' => '2023-12-28', 'remark' => 'Frische vor mir', 'trip_id' => 319]);
        Stopp::create(['id' => 436, 'store_id' => 104, 'date' => '2023-12-28', 'order_number' => '1', 'arrival_time' => '2023-12-28 00:00', 'departure_time' => '2023-12-28', 'remark' => 'NULL', 'trip_id' => 320]);
        Stopp::create(['id' => 437, 'store_id' => 161, 'date' => '2023-12-29', 'order_number' => '1', 'arrival_time' => '2023-12-29 00:00', 'departure_time' => '2023-12-29', 'remark' => 'NULL', 'trip_id' => 321]);
        Stopp::create(['id' => 438, 'store_id' => 198, 'date' => '2023-12-29', 'order_number' => '2', 'arrival_time' => '2023-12-29 07:00', 'departure_time' => '2023-12-29', 'remark' => 'Ankunft 07:00 warten bis 7 45 zur √ñffnung', 'trip_id' => 321]);
        Stopp::create(['id' => 439, 'store_id' => 186, 'date' => '2023-12-29', 'order_number' => '1', 'arrival_time' => '2023-12-29 00:00', 'departure_time' => '2023-12-29', 'remark' => 'NULL', 'trip_id' => 322]);
        Stopp::create(['id' => 440, 'store_id' => 16, 'date' => '2023-12-30', 'order_number' => '1', 'arrival_time' => '2023-12-30 00:00', 'departure_time' => '2023-12-30', 'remark' => 'NULL', 'trip_id' => 323]);
        Stopp::create(['id' => 441, 'store_id' => 188, 'date' => '2023-12-30', 'order_number' => '1', 'arrival_time' => '2023-12-30 00:00', 'departure_time' => '2023-12-30', 'remark' => 'NULL', 'trip_id' => 324]);
        Stopp::create(['id' => 442, 'store_id' => 125, 'date' => '2024-01-02', 'order_number' => '1', 'arrival_time' => '2024-01-02 00:00', 'departure_time' => '2024-01-02', 'remark' => 'NULL', 'trip_id' => 325]);
        Stopp::create(['id' => 443, 'store_id' => 88, 'date' => '2024-01-02', 'order_number' => '2', 'arrival_time' => '2024-01-02 00:00', 'departure_time' => '2024-01-02', 'remark' => 'NULL', 'trip_id' => 325]);
        Stopp::create(['id' => 444, 'store_id' => 157, 'date' => '2024-01-02', 'order_number' => '3', 'arrival_time' => '2024-01-02 00:00', 'departure_time' => '2024-01-02', 'remark' => 'NULL', 'trip_id' => 325]);
        Stopp::create(['id' => 445, 'store_id' => 34, 'date' => '2024-01-02', 'order_number' => '1', 'arrival_time' => '2024-01-02 00:00', 'departure_time' => '2024-01-02', 'remark' => 'NULL', 'trip_id' => 326]);
        Stopp::create(['id' => 446, 'store_id' => 143, 'date' => '2024-01-03', 'order_number' => '1', 'arrival_time' => '2024-01-03 00:00', 'departure_time' => '2024-01-03', 'remark' => 'NULL', 'trip_id' => 327]);
        Stopp::create(['id' => 447, 'store_id' => 142, 'date' => '2024-01-03', 'order_number' => '1', 'arrival_time' => '2024-01-03 00:00', 'departure_time' => '2024-01-03', 'remark' => 'NULL', 'trip_id' => 328]);
        Stopp::create(['id' => 448, 'store_id' => 53, 'date' => '2024-01-04', 'order_number' => '1', 'arrival_time' => '2024-01-04 00:00', 'departure_time' => '2024-01-04', 'remark' => 'NULL', 'trip_id' => 329]);
        Stopp::create(['id' => 449, 'store_id' => 158, 'date' => '2024-01-04', 'order_number' => '1', 'arrival_time' => '2024-01-04 00:00', 'departure_time' => '2024-01-04', 'remark' => 'Vorgeladen f√ºr B. Hahn
1 Palette 1 Flasche limo undicht dennoch verladen

1 Zwischenboden fehlt.', 'trip_id' => 330]);
        Stopp::create(['id' => 450, 'store_id' => 161, 'date' => '2024-01-05', 'order_number' => '1', 'arrival_time' => '2024-01-05 00:00', 'departure_time' => '2024-01-05', 'remark' => 'NULL', 'trip_id' => 331]);

        Stopp::create(['id' => 452, 'store_id' => 198, 'date' => '2024-01-05', 'order_number' => '3', 'arrival_time' => '2024-01-05 00:00', 'departure_time' => '2024-01-05', 'remark' => 'NULL', 'trip_id' => 331]);

        Stopp::create(['id' => 454, 'store_id' => 168, 'date' => '2024-01-07', 'order_number' => '2', 'arrival_time' => '2024-01-07 00:00', 'departure_time' => '2024-01-07', 'remark' => 'NULL', 'trip_id' => 332]);
        Stopp::create(['id' => 455, 'store_id' => 138, 'date' => '2024-01-07', 'order_number' => '1', 'arrival_time' => '2024-01-07 00:00', 'departure_time' => '2024-01-07', 'remark' => 'NULL', 'trip_id' => 332]);
        Stopp::create(['id' => 456, 'store_id' => 115, 'date' => '2024-01-08', 'order_number' => '1', 'arrival_time' => '2024-01-08 00:00', 'departure_time' => '2024-01-08', 'remark' => '20 Minuten warten auf Zigaretten ', 'trip_id' => 333]);

        Stopp::create(['id' => 458, 'store_id' => 61, 'date' => '2024-01-09', 'order_number' => '1', 'arrival_time' => '2024-01-09 00:00', 'departure_time' => '2024-01-09', 'remark' => 'NULL', 'trip_id' => 335]);
        Stopp::create(['id' => 459, 'store_id' => 160, 'date' => '2024-01-09', 'order_number' => '1', 'arrival_time' => '2024-01-09 00:00', 'departure_time' => '2024-01-09', 'remark' => 'NULL', 'trip_id' => 336]);
        Stopp::create(['id' => 460, 'store_id' => 115, 'date' => '2024-01-10', 'order_number' => '1', 'arrival_time' => '2024-01-10 00:00', 'departure_time' => '2024-01-10', 'remark' => 'Danach Werkstatt Robert Bosch Str. 2 in Nauen', 'trip_id' => 337]);

        Stopp::create(['id' => 462, 'store_id' => 25, 'date' => '2024-01-11', 'order_number' => '1', 'arrival_time' => '2024-01-11 00:00', 'departure_time' => '2024-01-11', 'remark' => 'NULL', 'trip_id' => 339]);
        Stopp::create(['id' => 463, 'store_id' => 115, 'date' => '2024-01-12', 'order_number' => '1', 'arrival_time' => '2024-01-12 00:00', 'departure_time' => '2024-01-12', 'remark' => 'NULL', 'trip_id' => 340]);
        Stopp::create(['id' => 464, 'store_id' => 103, 'date' => '2024-01-15', 'order_number' => '1', 'arrival_time' => '2024-01-15 00:00', 'departure_time' => '2024-01-15', 'remark' => 'NULL', 'trip_id' => 341]);
        Stopp::create(['id' => 465, 'store_id' => 34, 'date' => '2024-01-15', 'order_number' => '1', 'arrival_time' => '2024-01-15 00:00', 'departure_time' => '2024-01-15', 'remark' => 'NULL', 'trip_id' => 341]);

        Stopp::create(['id' => 467, 'store_id' => 56, 'date' => '2024-01-16', 'order_number' => '1', 'arrival_time' => '2024-01-16 00:00', 'departure_time' => '2024-01-16', 'remark' => 'vorgeladen von B.Hahn ', 'trip_id' => 343]);
        Stopp::create(['id' => 468, 'store_id' => 16, 'date' => '2024-01-16', 'order_number' => '2', 'arrival_time' => '2024-01-16 00:00', 'departure_time' => '2024-01-16', 'remark' => 'vorgeladen von B.Hahn ', 'trip_id' => 343]);

        Stopp::create(['id' => 470, 'store_id' => 173, 'date' => '2024-01-17', 'order_number' => '1', 'arrival_time' => '2024-01-17 00:00', 'departure_time' => '2024-01-17', 'remark' => 'NULL', 'trip_id' => 344]);

        Stopp::create(['id' => 472, 'store_id' => 94, 'date' => '2024-01-18', 'order_number' => '1', 'arrival_time' => '2024-01-18 00:00', 'departure_time' => '2024-01-18', 'remark' => 'NULL', 'trip_id' => 346]);
        Stopp::create(['id' => 473, 'store_id' => 15, 'date' => '2024-01-18', 'order_number' => '2', 'arrival_time' => '2024-01-18 00:00', 'departure_time' => '2024-01-18', 'remark' => 'NULL', 'trip_id' => 346]);
        Stopp::create(['id' => 474, 'store_id' => 7, 'date' => '2024-01-19', 'order_number' => '1', 'arrival_time' => '2024-01-19 00:00', 'departure_time' => '2024-01-19', 'remark' => 'NULL', 'trip_id' => 347]);
        Stopp::create(['id' => 475, 'store_id' => 157, 'date' => '2024-01-22', 'order_number' => '1', 'arrival_time' => '2024-01-22 00:00', 'departure_time' => '2024-01-22', 'remark' => 'NULL', 'trip_id' => 348]);
        Stopp::create(['id' => 476, 'store_id' => 96, 'date' => '2024-01-22', 'order_number' => '2', 'arrival_time' => '2024-01-22 00:00', 'departure_time' => '2024-01-22', 'remark' => 'NULL', 'trip_id' => 348]);
        Stopp::create(['id' => 477, 'store_id' => 89, 'date' => '2024-01-22', 'order_number' => '3', 'arrival_time' => '2024-01-22 00:00', 'departure_time' => '2024-01-22', 'remark' => 'NULL', 'trip_id' => 348]);
        Stopp::create(['id' => 478, 'store_id' => 190, 'date' => '2024-01-22', 'order_number' => '4', 'arrival_time' => '2024-01-22 00:00', 'departure_time' => '2024-01-22', 'remark' => 'NULL', 'trip_id' => 348]);
        Stopp::create(['id' => 479, 'store_id' => 161, 'date' => '2024-01-23', 'order_number' => '1', 'arrival_time' => '2024-01-23 00:00', 'departure_time' => '2024-01-23', 'remark' => 'NULL', 'trip_id' => 349]);
        Stopp::create(['id' => 480, 'store_id' => 84, 'date' => '2024-01-23', 'order_number' => '2', 'arrival_time' => '2024-01-23 00:00', 'departure_time' => '2024-01-23', 'remark' => 'NULL', 'trip_id' => 349]);
        Stopp::create(['id' => 481, 'store_id' => 178, 'date' => '2024-01-23', 'order_number' => '1', 'arrival_time' => '2024-01-23 00:00', 'departure_time' => '2024-01-23', 'remark' => 'vorgeladen', 'trip_id' => 350]);
        Stopp::create(['id' => 482, 'store_id' => 33, 'date' => '2024-01-25', 'order_number' => '1', 'arrival_time' => '2024-01-25 00:00', 'departure_time' => '2024-01-25', 'remark' => 'NULL', 'trip_id' => 351]);
        Stopp::create(['id' => 483, 'store_id' => 90, 'date' => '2024-01-25', 'order_number' => '1', 'arrival_time' => '2024-01-25 08:01', 'departure_time' => '2024-01-25', 'remark' => 'warten ab 08:01', 'trip_id' => 351]);
        Stopp::create(['id' => 484, 'store_id' => 24, 'date' => '2024-01-25', 'order_number' => '1', 'arrival_time' => '2024-01-25 00:00', 'departure_time' => '2024-01-25', 'remark' => 'Vorgeladen f√ºr B. Hahn', 'trip_id' => 352]);
        Stopp::create(['id' => 485, 'store_id' => 106, 'date' => '2024-01-26', 'order_number' => '1', 'arrival_time' => '2024-01-26 00:00', 'departure_time' => '2024-01-26', 'remark' => 'NULL', 'trip_id' => 353]);

        Stopp::create(['id' => 487, 'store_id' => 188, 'date' => '2024-01-27', 'order_number' => '1', 'arrival_time' => '2024-01-27 00:00', 'departure_time' => '2024-01-27', 'remark' => 'NULL', 'trip_id' => 355]);
        Stopp::create(['id' => 488, 'store_id' => 80, 'date' => '2024-01-29', 'order_number' => '1', 'arrival_time' => '2024-01-29 00:00', 'departure_time' => '2024-01-29', 'remark' => 'NULL', 'trip_id' => 356]);
        Stopp::create(['id' => 489, 'store_id' => 68, 'date' => '2024-01-29', 'order_number' => '12', 'arrival_time' => '2024-01-29 00:00', 'departure_time' => '2024-01-29', 'remark' => 'NULL', 'trip_id' => 356]);
        Stopp::create(['id' => 490, 'store_id' => 71, 'date' => '2024-01-29', 'order_number' => '3', 'arrival_time' => '2024-01-29 00:00', 'departure_time' => '2024-01-29', 'remark' => 'NULL', 'trip_id' => 356]);

        Stopp::create(['id' => 492, 'store_id' => 171, 'date' => '2024-01-30', 'order_number' => '1', 'arrival_time' => '2024-01-30 00:00', 'departure_time' => '2024-01-30', 'remark' => 'NULL', 'trip_id' => 358]);
        Stopp::create(['id' => 493, 'store_id' => 109, 'date' => '2024-01-30', 'order_number' => '2', 'arrival_time' => '2024-01-30 00:00', 'departure_time' => '2024-01-30', 'remark' => 'NULL', 'trip_id' => 358]);
        Stopp::create(['id' => 494, 'store_id' => 118, 'date' => '2024-01-31', 'order_number' => '1', 'arrival_time' => '2024-01-31 00:00', 'departure_time' => '2024-01-31', 'remark' => 'NULL', 'trip_id' => 359]);
        Stopp::create(['id' => 495, 'store_id' => 109, 'date' => '2024-01-31', 'order_number' => '1', 'arrival_time' => '2024-01-31 00:00', 'departure_time' => '2024-01-31', 'remark' => 'NULL', 'trip_id' => 360]);
        Stopp::create(['id' => 496, 'store_id' => 17, 'date' => '2024-02-01', 'order_number' => '1', 'arrival_time' => '2024-02-01 00:00', 'departure_time' => '2024-02-01', 'remark' => 'NULL', 'trip_id' => 361]);
        Stopp::create(['id' => 497, 'store_id' => 66, 'date' => '2024-02-01', 'order_number' => '1', 'arrival_time' => '2024-02-01 00:00', 'departure_time' => '2024-02-01', 'remark' => 'vorgeladen f√ºr B. Hahn', 'trip_id' => 362]);
        Stopp::create(['id' => 498, 'store_id' => 105, 'date' => '2024-02-02', 'order_number' => '1', 'arrival_time' => '2024-02-02 00:00', 'departure_time' => '2024-02-02', 'remark' => 'NULL', 'trip_id' => 363]);
        Stopp::create(['id' => 499, 'store_id' => 16, 'date' => '2024-02-02', 'order_number' => '2', 'arrival_time' => '2024-02-02 00:00', 'departure_time' => '2024-02-02', 'remark' => 'NULL', 'trip_id' => 363]);


        Stopp::create(['id' => 504, 'store_id' => 124, 'date' => '2024-02-05', 'order_number' => '1', 'arrival_time' => '2024-02-05 00:00', 'departure_time' => '2024-02-05', 'remark' => 'NULL', 'trip_id' => 365]);


        Stopp::create(['id' => 507, 'store_id' => 126, 'date' => '2024-02-07', 'order_number' => '1', 'arrival_time' => '2024-02-07 00:00', 'departure_time' => '2024-02-07', 'remark' => 'NULL', 'trip_id' => 368]);


        Stopp::create(['id' => 510, 'store_id' => 78, 'date' => '2024-02-08', 'order_number' => '1', 'arrival_time' => '2024-02-08 00:00', 'departure_time' => '2024-02-08', 'remark' => 'NULL', 'trip_id' => 371]);
        Stopp::create(['id' => 511, 'store_id' => 80, 'date' => '2024-02-08', 'order_number' => '1', 'arrival_time' => '2024-02-08 00:00', 'departure_time' => '2024-02-08', 'remark' => 'NULL', 'trip_id' => 371]);
        Stopp::create(['id' => 512, 'store_id' => 64, 'date' => '2024-02-09', 'order_number' => '1', 'arrival_time' => '2024-02-09 00:00', 'departure_time' => '2024-02-09', 'remark' => 'NULL', 'trip_id' => 372]);
        Stopp::create(['id' => 513, 'store_id' => 24, 'date' => '2024-02-09', 'order_number' => '1', 'arrival_time' => '2024-02-09 00:00', 'departure_time' => '2024-02-09', 'remark' => 'NULL', 'trip_id' => 372]);

        Stopp::create(['id' => 515, 'store_id' => 110, 'date' => '2024-02-12', 'order_number' => '1', 'arrival_time' => '2024-02-12 00:00', 'departure_time' => '2024-02-12', 'remark' => 'NULL', 'trip_id' => 374]);
        Stopp::create(['id' => 516, 'store_id' => 119, 'date' => '2024-02-13', 'order_number' => '1', 'arrival_time' => '2024-02-13 00:00', 'departure_time' => '2024-02-13', 'remark' => 'vorgeladen durch B. Hahn ', 'trip_id' => 375]);
        Stopp::create(['id' => 517, 'store_id' => 158, 'date' => '2024-02-13', 'order_number' => '1', 'arrival_time' => '2024-02-13 00:00', 'departure_time' => '2024-02-13', 'remark' => 'vorgeladen durch B. Hahn ', 'trip_id' => 375]);
        Stopp::create(['id' => 518, 'store_id' => 152, 'date' => '2024-02-13', 'order_number' => '1', 'arrival_time' => '2024-02-13 00:00', 'departure_time' => '2024-02-13', 'remark' => 'NULL', 'trip_id' => 376]);
        Stopp::create(['id' => 519, 'store_id' => 188, 'date' => '2024-02-14', 'order_number' => '1', 'arrival_time' => '2024-02-14 00:00', 'departure_time' => '2024-02-14', 'remark' => 'NULL', 'trip_id' => 377]);
        Stopp::create(['id' => 520, 'store_id' => 67, 'date' => '2024-02-14', 'order_number' => '1', 'arrival_time' => '2024-02-14 00:00', 'departure_time' => '2024-02-14', 'remark' => 'erst ab 16:00 Uhr anliefern', 'trip_id' => 378]);
        Stopp::create(['id' => 521, 'store_id' => 159, 'date' => '2024-02-15', 'order_number' => '1', 'arrival_time' => '2024-02-15 00:00', 'departure_time' => '2024-02-15', 'remark' => 'vorgeladen von B. Hahn', 'trip_id' => 379]);
        Stopp::create(['id' => 522, 'store_id' => 138, 'date' => '2024-02-15', 'order_number' => '1', 'arrival_time' => '2024-02-15 00:00', 'departure_time' => '2024-02-15', 'remark' => 'NULL', 'trip_id' => 380]);
        Stopp::create(['id' => 523, 'store_id' => 142, 'date' => '2024-02-16', 'order_number' => '1', 'arrival_time' => '2024-02-16 00:00', 'departure_time' => '2024-02-16', 'remark' => 'NULL', 'trip_id' => 381]);

        Stopp::create(['id' => 525, 'store_id' => 78, 'date' => '2024-02-19', 'order_number' => '1', 'arrival_time' => '2024-02-19 00:00', 'departure_time' => '2024-02-19', 'remark' => 'NULL', 'trip_id' => 383]);
        Stopp::create(['id' => 526, 'store_id' => 56, 'date' => '2024-02-19', 'order_number' => '1', 'arrival_time' => '2024-02-19 00:00', 'departure_time' => '2024-02-19', 'remark' => 'NULL', 'trip_id' => 383]);
        Stopp::create(['id' => 527, 'store_id' => 29, 'date' => '2024-02-19', 'order_number' => '2', 'arrival_time' => '2024-02-19 00:00', 'departure_time' => '2024-02-19', 'remark' => 'NULL', 'trip_id' => 383]);
        Stopp::create(['id' => 528, 'store_id' => 91, 'date' => '2024-02-20', 'order_number' => '1', 'arrival_time' => '2024-02-20 00:00', 'departure_time' => '2024-02-20', 'remark' => 'NULL', 'trip_id' => 384]);
        Stopp::create(['id' => 529, 'store_id' => 136, 'date' => '2024-02-20', 'order_number' => '1', 'arrival_time' => '2024-02-20 00:00', 'departure_time' => '2024-02-20', 'remark' => 'NULL', 'trip_id' => 384]);


        Stopp::create(['id' => 534, 'store_id' => 20, 'date' => '2024-02-22', 'order_number' => '1', 'arrival_time' => '2024-02-22 00:00', 'departure_time' => '2024-02-22', 'remark' => 'NULL', 'trip_id' => 388]);


        Stopp::create(['id' => 538, 'store_id' => 84, 'date' => '2024-02-23', 'order_number' => '1', 'arrival_time' => '2024-02-23 00:00', 'departure_time' => '2024-02-23', 'remark' => 'NULL', 'trip_id' => 390]);


        Stopp::create(['id' => 541, 'store_id' => 187, 'date' => '2024-02-24', 'order_number' => '1', 'arrival_time' => '2024-02-24 00:00', 'departure_time' => '2024-02-24', 'remark' => 'NULL', 'trip_id' => 392]);
        Stopp::create(['id' => 542, 'store_id' => 171, 'date' => '2024-02-24', 'order_number' => '1', 'arrival_time' => '2024-02-24 00:00', 'departure_time' => '2024-02-24', 'remark' => 'NULL', 'trip_id' => 391]);
        Stopp::create(['id' => 543, 'store_id' => 28, 'date' => '2024-02-26', 'order_number' => '1', 'arrival_time' => '2024-02-26 00:00', 'departure_time' => '2024-02-26', 'remark' => 'NULL', 'trip_id' => 393]);
        Stopp::create(['id' => 544, 'store_id' => 29, 'date' => '2024-02-26', 'order_number' => '2', 'arrival_time' => '2024-02-26 00:00', 'departure_time' => '2024-02-26', 'remark' => 'Frau Missi war nicht einverstanden, dass ich 8 TKT und 4RC sowie 110 ]ffco mitgenommen habe.

Ich habe Ihr erklaert, dass ich unoch Frische an Bord habe und daher keinen Abfall mitn√§hme', 'trip_id' => 393]);
        Stopp::create(['id' => 545, 'store_id' => 192, 'date' => '2024-02-26', 'order_number' => '3', 'arrival_time' => '2024-02-26 00:00', 'departure_time' => '2024-02-26', 'remark' => 'NULL', 'trip_id' => 393]);
        Stopp::create(['id' => 546, 'store_id' => 150, 'date' => '2024-02-26', 'order_number' => '1', 'arrival_time' => '2024-02-26 00:00', 'departure_time' => '2024-02-26', 'remark' => 'vorgeladen f√ºr B. Hahn', 'trip_id' => 394]);
        Stopp::create(['id' => 547, 'store_id' => 5, 'date' => '2024-02-26', 'order_number' => '2', 'arrival_time' => '2024-02-26 00:00', 'departure_time' => '2024-02-26', 'remark' => 'vorgeladen f√ºr B. Hahn
1RC nicht gescannt.', 'trip_id' => 394]);
        Stopp::create(['id' => 548, 'store_id' => 115, 'date' => '2024-02-27', 'order_number' => '1', 'arrival_time' => '2024-02-27 00:00', 'departure_time' => '2024-02-27', 'remark' => 'NULL', 'trip_id' => 395]);
        Stopp::create(['id' => 549, 'store_id' => 169, 'date' => '2024-02-27', 'order_number' => '2', 'arrival_time' => '2024-02-27 00:00', 'departure_time' => '2024-02-27', 'remark' => 'NULL', 'trip_id' => 395]);

        Stopp::create(['id' => 551, 'store_id' => 65, 'date' => '2024-02-28', 'order_number' => '1', 'arrival_time' => '2024-02-28 00:00', 'departure_time' => '2024-02-28', 'remark' => 'NULL', 'trip_id' => 397]);
        Stopp::create(['id' => 552, 'store_id' => 51, 'date' => '2024-02-28', 'order_number' => '1', 'arrival_time' => '2024-02-28 00:00', 'departure_time' => '2024-02-28', 'remark' => 'Vorgeladen f√ºr B.Hahn
', 'trip_id' => 398]);
        Stopp::create(['id' => 553, 'store_id' => 83, 'date' => '2024-02-29', 'order_number' => '1', 'arrival_time' => '2024-02-29 00:00', 'departure_time' => '2024-02-29', 'remark' => 'NULL', 'trip_id' => 399]);
        Stopp::create(['id' => 554, 'store_id' => 91, 'date' => '2024-02-29', 'order_number' => '2', 'arrival_time' => '2024-02-29 00:00', 'departure_time' => '2024-02-29', 'remark' => 'NULL', 'trip_id' => 399]);
        Stopp::create(['id' => 555, 'store_id' => 16, 'date' => '2024-02-29', 'order_number' => '1', 'arrival_time' => '2024-02-29 00:00', 'departure_time' => '2024-02-29', 'remark' => 'Vorgeladen f√ºr B. Hahn', 'trip_id' => 400]);
        Stopp::create(['id' => 556, 'store_id' => 153, 'date' => '2024-03-01', 'order_number' => '1', 'arrival_time' => '2024-03-01 00:00', 'departure_time' => '2024-03-01', 'remark' => 'NULL', 'trip_id' => 401]);
        Stopp::create(['id' => 557, 'store_id' => 171, 'date' => '2024-03-01', 'order_number' => '2', 'arrival_time' => '2024-03-01 00:00', 'departure_time' => '2024-03-01', 'remark' => 'NULL', 'trip_id' => 401]);
        Stopp::create(['id' => 558, 'store_id' => 5, 'date' => '2024-03-01', 'order_number' => '1', 'arrival_time' => '2024-03-01 00:00', 'departure_time' => '2024-03-01', 'remark' => 'NULL', 'trip_id' => 402]);
        Stopp::create(['id' => 559, 'store_id' => 64, 'date' => '2024-03-01', 'order_number' => '2', 'arrival_time' => '2024-03-01 00:00', 'departure_time' => '2024-03-01', 'remark' => 'NULL', 'trip_id' => 402]);
        Stopp::create(['id' => 560, 'store_id' => 160, 'date' => '2024-03-04', 'order_number' => '1', 'arrival_time' => '2024-03-04 00:00', 'departure_time' => '2024-03-04', 'remark' => 'wurde vorgeladen', 'trip_id' => 403]);
        Stopp::create(['id' => 561, 'store_id' => 104, 'date' => '2024-03-04', 'order_number' => '1', 'arrival_time' => '2024-03-04 00:00', 'departure_time' => '2024-03-04', 'remark' => 'NULL', 'trip_id' => 404]);

        Stopp::create(['id' => 563, 'store_id' => 120, 'date' => '2024-03-05', 'order_number' => '1', 'arrival_time' => '2024-03-05 00:00', 'departure_time' => '2024-03-05', 'remark' => 'NULL', 'trip_id' => 406]);
        Stopp::create(['id' => 564, 'store_id' => 142, 'date' => '2024-03-06', 'order_number' => '1', 'arrival_time' => '2024-03-06 00:00', 'departure_time' => '2024-03-06', 'remark' => 'NULL', 'trip_id' => 407]);
        Stopp::create(['id' => 565, 'store_id' => 5, 'date' => '2024-03-06', 'order_number' => '1', 'arrival_time' => '2024-03-06 00:00', 'departure_time' => '2024-03-06', 'remark' => 'NULL', 'trip_id' => 408]);
        Stopp::create(['id' => 566, 'store_id' => 162, 'date' => '2024-03-07', 'order_number' => '1', 'arrival_time' => '2024-03-07 00:00', 'departure_time' => '2024-03-07', 'remark' => 'NULL', 'trip_id' => 409]);


        Stopp::create(['id' => 570, 'store_id' => 134, 'date' => '2024-03-11', 'order_number' => '1', 'arrival_time' => '2024-03-11 00:00', 'departure_time' => '2024-03-11', 'remark' => 'NULL', 'trip_id' => 412]);

        Stopp::create(['id' => 572, 'store_id' => 121, 'date' => '2024-03-12', 'order_number' => '1', 'arrival_time' => '2024-03-12 00:00', 'departure_time' => '2024-03-12', 'remark' => 'NULL', 'trip_id' => 414]);
        Stopp::create(['id' => 573, 'store_id' => 47, 'date' => '2024-03-18', 'order_number' => '1', 'arrival_time' => '2024-03-18 00:00', 'departure_time' => '2024-03-18', 'remark' => 'NULL', 'trip_id' => 415]);

        Stopp::create(['id' => 575, 'store_id' => 34, 'date' => '2024-03-18', 'order_number' => '1', 'arrival_time' => '2024-03-18 00:00', 'departure_time' => '2024-03-18', 'remark' => 'Vorgeladen ', 'trip_id' => 416]);
        Stopp::create(['id' => 576, 'store_id' => 142, 'date' => '2024-03-18', 'order_number' => '1', 'arrival_time' => '2024-03-18 00:00', 'departure_time' => '2024-03-18', 'remark' => 'Vorgeladen ', 'trip_id' => 416]);

        Stopp::create(['id' => 578, 'store_id' => 140, 'date' => '2024-03-19', 'order_number' => '1', 'arrival_time' => '2024-03-19 00:00', 'departure_time' => '2024-03-19', 'remark' => 'NULL', 'trip_id' => 417]);

        Stopp::create(['id' => 580, 'store_id' => 138, 'date' => '2024-03-20', 'order_number' => '1', 'arrival_time' => '2024-03-20 00:00', 'departure_time' => '2024-03-20', 'remark' => 'NULL', 'trip_id' => 419]);
        Stopp::create(['id' => 581, 'store_id' => 44, 'date' => '2024-03-20', 'order_number' => '2', 'arrival_time' => '2024-03-20 00:00', 'departure_time' => '2024-03-20', 'remark' => 'warten Kolot Frische', 'trip_id' => 419]);
        Stopp::create(['id' => 582, 'store_id' => 135, 'date' => '2024-03-20', 'order_number' => '1', 'arrival_time' => '2024-03-20 00:00', 'departure_time' => '2024-03-20', 'remark' => 'NULL', 'trip_id' => 420]);

        Stopp::create(['id' => 584, 'store_id' => 86, 'date' => '2024-03-21', 'order_number' => '2', 'arrival_time' => '2024-03-21 00:00', 'departure_time' => '2024-03-21', 'remark' => 'NULL', 'trip_id' => 421]);
        Stopp::create(['id' => 585, 'store_id' => 46, 'date' => '2024-03-22', 'order_number' => '1', 'arrival_time' => '2024-03-22 00:00', 'departure_time' => '2024-03-22', 'remark' => 'NULL', 'trip_id' => 422]);

        Stopp::create(['id' => 587, 'store_id' => 151, 'date' => '2024-03-22', 'order_number' => '2', 'arrival_time' => '2024-03-22 00:00', 'departure_time' => '2024-03-22', 'remark' => 'NULL', 'trip_id' => 423]);
        Stopp::create(['id' => 588, 'store_id' => 106, 'date' => '2024-03-23', 'order_number' => '1', 'arrival_time' => '2024-03-23 00:00', 'departure_time' => '2024-03-23', 'remark' => 'NULL', 'trip_id' => 424]);
        Stopp::create(['id' => 589, 'store_id' => 170, 'date' => '2024-03-23', 'order_number' => '1', 'arrival_time' => '2024-03-23 00:00', 'departure_time' => '2024-03-23', 'remark' => 'NULL', 'trip_id' => 425]);
        Stopp::create(['id' => 590, 'store_id' => 84, 'date' => '2024-03-25', 'order_number' => '1', 'arrival_time' => '2024-03-25 00:00', 'departure_time' => '2024-03-25', 'remark' => 'NULL', 'trip_id' => 426]);


        Stopp::create(['id' => 593, 'store_id' => 168, 'date' => '2024-03-26', 'order_number' => '1', 'arrival_time' => '2024-03-26 00:00', 'departure_time' => '2024-03-26', 'remark' => 'NULL', 'trip_id' => 428]);
        Stopp::create(['id' => 594, 'store_id' => 84, 'date' => '2024-03-26', 'order_number' => '2', 'arrival_time' => '2024-03-26 00:00', 'departure_time' => '2024-03-26', 'remark' => 'NULL', 'trip_id' => 428]);
        Stopp::create(['id' => 595, 'store_id' => 138, 'date' => '2024-03-26', 'order_number' => '1', 'arrival_time' => '2024-03-26 00:00', 'departure_time' => '2024-03-26', 'remark' => 'vorgeladen f√ºr B. Hahn', 'trip_id' => 429]);
        Stopp::create(['id' => 596, 'store_id' => 8, 'date' => '2024-03-27', 'order_number' => '1', 'arrival_time' => '2024-03-27 00:00', 'departure_time' => '2024-03-27', 'remark' => 'NULL', 'trip_id' => 430]);
        Stopp::create(['id' => 597, 'store_id' => 45, 'date' => '2024-03-27', 'order_number' => '1', 'arrival_time' => '2024-03-27 00:00', 'departure_time' => '2024-03-27', 'remark' => 'NULL', 'trip_id' => 431]);
        Stopp::create(['id' => 598, 'store_id' => 88, 'date' => '2024-03-28', 'order_number' => '1', 'arrival_time' => '2024-03-28 00:00', 'departure_time' => '2024-03-28', 'remark' => 'NULL', 'trip_id' => 432]);
        Stopp::create(['id' => 599, 'store_id' => 92, 'date' => '2024-03-28', 'order_number' => '2', 'arrival_time' => '2024-03-28 00:00', 'departure_time' => '2024-03-28', 'remark' => 'NULL', 'trip_id' => 432]);
        Stopp::create(['id' => 600, 'store_id' => 89, 'date' => '2024-03-28', 'order_number' => '3', 'arrival_time' => '2024-03-28 00:00', 'departure_time' => '2024-03-28', 'remark' => 'NULL', 'trip_id' => 432]);


        Stopp::create(['id' => 603, 'store_id' => 16, 'date' => '2024-03-30', 'order_number' => '1', 'arrival_time' => '2024-03-30 00:00', 'departure_time' => '2024-03-30', 'remark' => 'NULL', 'trip_id' => 434]);

        Stopp::create(['id' => 605, 'store_id' => 135, 'date' => '2024-04-02', 'order_number' => '1', 'arrival_time' => '2024-04-02 00:00', 'departure_time' => '2024-04-02', 'remark' => 'NULL', 'trip_id' => 436]);


        Stopp::create(['id' => 608, 'store_id' => 63, 'date' => '2024-04-04', 'order_number' => '1', 'arrival_time' => '2024-04-04 00:00', 'departure_time' => '2024-04-04', 'remark' => 'NULL', 'trip_id' => 439]);
        Stopp::create(['id' => 609, 'store_id' => 63, 'date' => '2024-04-05', 'order_number' => '1', 'arrival_time' => '2024-04-05 00:00', 'departure_time' => '2024-04-05', 'remark' => 'vorgeladen von B Hahn', 'trip_id' => 441]);
        Stopp::create(['id' => 610, 'store_id' => 45, 'date' => '2024-04-05', 'order_number' => '1', 'arrival_time' => '2024-04-05 00:00', 'departure_time' => '2024-04-05', 'remark' => 'NULL', 'trip_id' => 442]);
        Stopp::create(['id' => 611, 'store_id' => 3, 'date' => '2024-04-08', 'order_number' => '1', 'arrival_time' => '2024-04-08 00:00', 'departure_time' => '2024-04-08', 'remark' => 'Vorgeladen', 'trip_id' => 443]);

        Stopp::create(['id' => 613, 'store_id' => 117, 'date' => '2024-04-08', 'order_number' => '2', 'arrival_time' => '2024-04-08 00:00', 'departure_time' => '2024-04-08', 'remark' => 'NULL', 'trip_id' => 443]);
        Stopp::create(['id' => 614, 'store_id' => 124, 'date' => '2024-04-09', 'order_number' => '1', 'arrival_time' => '2024-04-09 00:00', 'departure_time' => '2024-04-09', 'remark' => 'vorgeladen von B. Hahn', 'trip_id' => 444]);
        Stopp::create(['id' => 615, 'store_id' => 2, 'date' => '2024-04-09', 'order_number' => '1', 'arrival_time' => '2024-04-09 00:00', 'departure_time' => '2024-04-09', 'remark' => 'NULL', 'trip_id' => 445]);
        Stopp::create(['id' => 616, 'store_id' => 173, 'date' => '2024-04-10', 'order_number' => '1', 'arrival_time' => '2024-04-10 00:00', 'departure_time' => '2024-04-10', 'remark' => 'NULL', 'trip_id' => 446]);


        Stopp::create(['id' => 619, 'store_id' => 38, 'date' => '2024-04-11', 'order_number' => '2', 'arrival_time' => '2024-04-11 00:00', 'departure_time' => '2024-04-11', 'remark' => 'Vorgeladen vor B.Hahn
Rampe besetzt, Warten', 'trip_id' => 447]);
        Stopp::create(['id' => 620, 'store_id' => 116, 'date' => '2024-04-11', 'order_number' => '1', 'arrival_time' => '2024-04-11 00:00', 'departure_time' => '2024-04-11', 'remark' => 'Vorgeladen von B. Hanks', 'trip_id' => 447]);

        Stopp::create(['id' => 622, 'store_id' => 165, 'date' => '2024-04-12', 'order_number' => '1', 'arrival_time' => '2024-04-12 00:00', 'departure_time' => '2024-04-12', 'remark' => 'NULL', 'trip_id' => 449]);
        Stopp::create(['id' => 623, 'store_id' => 34, 'date' => '2024-04-12', 'order_number' => '2', 'arrival_time' => '2024-04-12 00:00', 'departure_time' => '2024-04-12', 'remark' => 'NULL', 'trip_id' => 449]);
        Stopp::create(['id' => 624, 'store_id' => 88, 'date' => '2024-04-15', 'order_number' => '1', 'arrival_time' => '2024-04-15 00:00', 'departure_time' => '2024-04-15', 'remark' => 'NULL', 'trip_id' => 450]);
        Stopp::create(['id' => 625, 'store_id' => 96, 'date' => '2024-04-15', 'order_number' => '2', 'arrival_time' => '2024-04-15 00:00', 'departure_time' => '2024-04-15', 'remark' => 'NULL', 'trip_id' => 450]);
        Stopp::create(['id' => 626, 'store_id' => 53, 'date' => '2024-04-15', 'order_number' => '3', 'arrival_time' => '2024-04-15 00:00', 'departure_time' => '2024-04-15', 'remark' => 'NULL', 'trip_id' => 450]);

        Stopp::create(['id' => 628, 'store_id' => 164, 'date' => '2024-04-17', 'order_number' => '1', 'arrival_time' => '2024-04-17 00:00', 'departure_time' => '2024-04-17', 'remark' => 'Warten auf Offung 72 Min.
warten Entsorgung', 'trip_id' => 451]);


        Stopp::create(['id' => 631, 'store_id' => 23, 'date' => '2024-04-17', 'order_number' => '3', 'arrival_time' => '2024-04-17 00:00', 'departure_time' => '2024-04-17', 'remark' => 'nicht geladen LKW voll', 'trip_id' => 452]);

        Stopp::create(['id' => 633, 'store_id' => 18, 'date' => '2024-04-18', 'order_number' => '1', 'arrival_time' => '2024-04-18 00:00', 'departure_time' => '2024-04-18', 'remark' => 'NULL', 'trip_id' => 454]);
        Stopp::create(['id' => 634, 'store_id' => 46, 'date' => '2024-04-19', 'order_number' => '1', 'arrival_time' => '2024-04-19 00:00', 'departure_time' => '2024-04-19', 'remark' => 'NULL', 'trip_id' => 455]);

        Stopp::create(['id' => 636, 'store_id' => 141, 'date' => '2024-04-20', 'order_number' => '1', 'arrival_time' => '2024-04-20 00:00', 'departure_time' => '2024-04-20', 'remark' => 'NULL', 'trip_id' => 457]);
        Stopp::create(['id' => 637, 'store_id' => 53, 'date' => '2024-04-20', 'order_number' => '2', 'arrival_time' => '2024-04-20 00:00', 'departure_time' => '2024-04-20', 'remark' => 'NULL', 'trip_id' => 457]);
        Stopp::create(['id' => 638, 'store_id' => 71, 'date' => '2024-04-20', 'order_number' => '1', 'arrival_time' => '2024-04-20 00:00', 'departure_time' => '2024-04-20', 'remark' => 'NULL', 'trip_id' => 458]);
        Stopp::create(['id' => 639, 'store_id' => 157, 'date' => '2024-04-22', 'order_number' => '1', 'arrival_time' => '2024-04-22 00:00', 'departure_time' => '2024-04-22', 'remark' => 'NULL', 'trip_id' => 459]);
        Stopp::create(['id' => 640, 'store_id' => 75, 'date' => '2024-04-22', 'order_number' => '2', 'arrival_time' => '2024-04-22 00:00', 'departure_time' => '2024-04-22', 'remark' => 'NULL', 'trip_id' => 459]);

        Stopp::create(['id' => 642, 'store_id' => 89, 'date' => '2024-04-22', 'order_number' => '4', 'arrival_time' => '2024-04-22 00:00', 'departure_time' => '2024-04-22', 'remark' => 'NULL', 'trip_id' => 459]);
        Stopp::create(['id' => 643, 'store_id' => 164, 'date' => '2024-04-23', 'order_number' => '1', 'arrival_time' => '2024-04-23 05:52', 'departure_time' => '2024-04-23', 'remark' => 'Warten Kunde', 'trip_id' => 460]);

        Stopp::create(['id' => 645, 'store_id' => 78, 'date' => '2024-04-24', 'order_number' => '1', 'arrival_time' => '2024-04-24 00:00', 'departure_time' => '2024-04-24', 'remark' => 'NULL', 'trip_id' => 461]);
        Stopp::create(['id' => 646, 'store_id' => 201, 'date' => '2024-04-24', 'order_number' => '2', 'arrival_time' => '2024-04-24 00:00', 'departure_time' => '2024-04-24', 'remark' => 'NULL', 'trip_id' => 461]);

        Stopp::create(['id' => 648, 'store_id' => 60, 'date' => '2024-04-25', 'order_number' => '1', 'arrival_time' => '2024-04-25 00:00', 'departure_time' => '2024-04-25', 'remark' => 'NULL', 'trip_id' => 463]);
        Stopp::create(['id' => 649, 'store_id' => 143, 'date' => '2024-04-25', 'order_number' => '1', 'arrival_time' => '2024-04-25 00:00', 'departure_time' => '2024-04-25', 'remark' => 'NULL', 'trip_id' => 464]);
        Stopp::create(['id' => 650, 'store_id' => 84, 'date' => '2024-04-26', 'order_number' => '1', 'arrival_time' => '2024-04-26 00:00', 'departure_time' => '2024-04-26', 'remark' => 'NULL', 'trip_id' => 465]);
        Stopp::create(['id' => 651, 'store_id' => 55, 'date' => '2024-04-26', 'order_number' => '2', 'arrival_time' => '2024-04-26 00:00', 'departure_time' => '2024-04-26', 'remark' => 'NULL', 'trip_id' => 465]);
        Stopp::create(['id' => 652, 'store_id' => 193, 'date' => '2024-04-26', 'order_number' => '3', 'arrival_time' => '2024-04-26 00:00', 'departure_time' => '2024-04-26', 'remark' => 'NULL', 'trip_id' => 465]);

        Stopp::create(['id' => 654, 'store_id' => 160, 'date' => '2024-04-29', 'order_number' => '1', 'arrival_time' => '2024-04-29 00:00', 'departure_time' => '2024-04-29', 'remark' => 'NULL', 'trip_id' => 467]);


        Stopp::create(['id' => 657, 'store_id' => 143, 'date' => '2024-05-02', 'order_number' => '1', 'arrival_time' => '2024-05-02 00:00', 'departure_time' => '2024-05-02', 'remark' => 'NULL', 'trip_id' => 470]);

        Stopp::create(['id' => 659, 'store_id' => 3, 'date' => '2024-05-02', 'order_number' => '2', 'arrival_time' => '2024-05-02 00:00', 'departure_time' => '2024-05-02', 'remark' => 'NULL', 'trip_id' => 471]);
        Stopp::create(['id' => 660, 'store_id' => 171, 'date' => '2024-05-03', 'order_number' => '1', 'arrival_time' => '2024-05-03 00:00', 'departure_time' => '2024-05-03', 'remark' => 'NULL', 'trip_id' => 472]);
        Stopp::create(['id' => 661, 'store_id' => 17, 'date' => '2024-05-03', 'order_number' => '1', 'arrival_time' => '2024-05-03 00:00', 'departure_time' => '2024-05-03', 'remark' => 'NULL', 'trip_id' => 473]);


        Stopp::create(['id' => 665, 'store_id' => 168, 'date' => '2024-05-16', 'order_number' => '1', 'arrival_time' => '2024-05-16 00:00', 'departure_time' => '2024-05-16', 'remark' => 'NULL', 'trip_id' => 476]);
        Stopp::create(['id' => 666, 'store_id' => 76, 'date' => '2024-05-17', 'order_number' => '1', 'arrival_time' => '2024-05-17 00:00', 'departure_time' => '2024-05-17', 'remark' => 'NULL', 'trip_id' => 477]);

        Stopp::create(['id' => 668, 'store_id' => 80, 'date' => '2024-05-17', 'order_number' => '1', 'arrival_time' => '2024-05-17 00:00', 'departure_time' => '2024-05-17', 'remark' => 'NULL', 'trip_id' => 478]);
        Stopp::create(['id' => 669, 'store_id' => 107, 'date' => '2024-05-18', 'order_number' => '1', 'arrival_time' => '2024-05-18 00:00', 'departure_time' => '2024-05-18', 'remark' => 'NULL', 'trip_id' => 479]);
        Stopp::create(['id' => 670, 'store_id' => 86, 'date' => '2024-05-18', 'order_number' => '2', 'arrival_time' => '2024-05-18 00:00', 'departure_time' => '2024-05-18', 'remark' => 'NULL', 'trip_id' => 479]);


        Stopp::create(['id' => 673, 'store_id' => 96, 'date' => '2024-05-21', 'order_number' => '2', 'arrival_time' => '2024-05-21 00:00', 'departure_time' => '2024-05-21', 'remark' => 'NULL', 'trip_id' => 481]);
        Stopp::create(['id' => 674, 'store_id' => 157, 'date' => '2024-05-21', 'order_number' => '3', 'arrival_time' => '2024-05-21 00:00', 'departure_time' => '2024-05-21', 'remark' => 'NULL', 'trip_id' => 481]);
        Stopp::create(['id' => 675, 'store_id' => 187, 'date' => '2024-05-21', 'order_number' => '1', 'arrival_time' => '2024-05-21 00:00', 'departure_time' => '2024-05-21', 'remark' => 'vorgeladen f√ºr B.Halm', 'trip_id' => 482]);
        Stopp::create(['id' => 676, 'store_id' => 172, 'date' => '2024-05-22', 'order_number' => '1', 'arrival_time' => '2024-05-22 00:00', 'departure_time' => '2024-05-22', 'remark' => 'NULL', 'trip_id' => 483]);

        Stopp::create(['id' => 678, 'store_id' => 169, 'date' => '2024-05-23', 'order_number' => '1', 'arrival_time' => '2024-05-23 00:00', 'departure_time' => '2024-05-23', 'remark' => 'NULL', 'trip_id' => 485]);


        Stopp::create(['id' => 682, 'store_id' => 119, 'date' => '2024-05-24', 'order_number' => '1', 'arrival_time' => '2024-05-24 00:00', 'departure_time' => '2024-05-24', 'remark' => 'NULL', 'trip_id' => 489]);
        Stopp::create(['id' => 683, 'store_id' => 23, 'date' => '2024-05-27', 'order_number' => '1', 'arrival_time' => '2024-05-27 00:00', 'departure_time' => '2024-05-27', 'remark' => 'NULL', 'trip_id' => 490]);

        Stopp::create(['id' => 685, 'store_id' => 154, 'date' => '2024-05-27', 'order_number' => '1', 'arrival_time' => '2024-05-27 00:00', 'departure_time' => '2024-05-27', 'remark' => 'NULL', 'trip_id' => 491]);
        Stopp::create(['id' => 686, 'store_id' => 30, 'date' => '2024-05-28', 'order_number' => '1', 'arrival_time' => '2024-05-28 00:00', 'departure_time' => '2024-05-28', 'remark' => 'NULL', 'trip_id' => 492]);
        Stopp::create(['id' => 687, 'store_id' => 5, 'date' => '2024-05-30', 'order_number' => '1', 'arrival_time' => '2024-05-30 00:00', 'departure_time' => '2024-05-30', 'remark' => 'NULL', 'trip_id' => 494]);

        Stopp::create(['id' => 689, 'store_id' => 4, 'date' => '2024-05-31', 'order_number' => '1', 'arrival_time' => '2024-05-31 00:00', 'departure_time' => '2024-05-31', 'remark' => 'vorgeladen von B. Hahn ', 'trip_id' => 495]);
        Stopp::create(['id' => 690, 'store_id' => 154, 'date' => '2024-05-31', 'order_number' => '1', 'arrival_time' => '2024-05-31 00:00', 'departure_time' => '2024-05-31', 'remark' => 'NULL', 'trip_id' => 496]);
        Stopp::create(['id' => 691, 'store_id' => 136, 'date' => '2024-06-03', 'order_number' => '1', 'arrival_time' => '2024-06-03 00:00', 'departure_time' => '2024-06-03', 'remark' => 'NULL', 'trip_id' => 497]);
        Stopp::create(['id' => 692, 'store_id' => 8, 'date' => '2024-06-03', 'order_number' => '2', 'arrival_time' => '2024-06-03 00:00', 'departure_time' => '2024-06-03', 'remark' => 'NULL', 'trip_id' => 497]);

        Stopp::create(['id' => 694, 'store_id' => 64, 'date' => '2024-06-04', 'order_number' => '1', 'arrival_time' => '2024-06-04 00:00', 'departure_time' => '2024-06-04', 'remark' => 'NULL', 'trip_id' => 498]);
        Stopp::create(['id' => 695, 'store_id' => 61, 'date' => '2024-06-04', 'order_number' => '1', 'arrival_time' => '2024-06-04 00:00', 'departure_time' => '2024-06-04', 'remark' => 'NULL', 'trip_id' => 499]);
        Stopp::create(['id' => 696, 'store_id' => 94, 'date' => '2024-06-05', 'order_number' => '1', 'arrival_time' => '2024-06-05 00:00', 'departure_time' => '2024-06-05', 'remark' => 'NULL', 'trip_id' => 500]);
        Stopp::create(['id' => 697, 'store_id' => 175, 'date' => '2024-06-05', 'order_number' => '1', 'arrival_time' => '2024-06-05 00:00', 'departure_time' => '2024-06-05', 'remark' => 'NULL', 'trip_id' => 501]);
        Stopp::create(['id' => 698, 'store_id' => 48, 'date' => '2024-06-06', 'order_number' => '1', 'arrival_time' => '2024-06-06 00:00', 'departure_time' => '2024-06-06', 'remark' => 'NULL', 'trip_id' => 502]);
        Stopp::create(['id' => 699, 'store_id' => 144, 'date' => '2024-06-06', 'order_number' => '1', 'arrival_time' => '2024-06-06 00:00', 'departure_time' => '2024-06-06', 'remark' => 'NULL', 'trip_id' => 503]);
        Stopp::create(['id' => 700, 'store_id' => 16, 'date' => '2024-06-07', 'order_number' => '1', 'arrival_time' => '2024-06-07 00:00', 'departure_time' => '2024-06-07', 'remark' => 'NULL', 'trip_id' => 504]);

        Stopp::create(['id' => 702, 'store_id' => 48, 'date' => '2024-06-10', 'order_number' => '1', 'arrival_time' => '2024-06-10 00:00', 'departure_time' => '2024-06-10', 'remark' => 'NULL', 'trip_id' => 506]);
        Stopp::create(['id' => 703, 'store_id' => 82, 'date' => '2024-06-10', 'order_number' => '2', 'arrival_time' => '2024-06-10 00:00', 'departure_time' => '2024-06-10', 'remark' => 'NULL', 'trip_id' => 506]);
        Stopp::create(['id' => 704, 'store_id' => 194, 'date' => '2024-06-11', 'order_number' => '2', 'arrival_time' => '2024-06-11 00:00', 'departure_time' => '2024-06-11', 'remark' => 'NULL', 'trip_id' => 507]);

        Stopp::create(['id' => 706, 'store_id' => 168, 'date' => '2024-06-15', 'order_number' => '1', 'arrival_time' => '2024-06-15 00:00', 'departure_time' => '2024-06-15', 'remark' => 'NULL', 'trip_id' => 509]);


        Stopp::create(['id' => 709, 'store_id' => 22, 'date' => '2024-06-17', 'order_number' => '1', 'arrival_time' => '2024-06-17 00:00', 'departure_time' => '2024-06-17', 'remark' => 'NULL', 'trip_id' => 511]);

        Stopp::create(['id' => 711, 'store_id' => 94, 'date' => '2024-06-17', 'order_number' => '3', 'arrival_time' => '2024-06-17 00:00', 'departure_time' => '2024-06-17', 'remark' => 'NULL', 'trip_id' => 511]);

        Stopp::create(['id' => 713, 'store_id' => 165, 'date' => '2024-06-17', 'order_number' => '1', 'arrival_time' => '2024-06-17 00:00', 'departure_time' => '2024-06-17', 'remark' => 'Vorgeladen f√ºr B Hahn', 'trip_id' => 512]);

        Stopp::create(['id' => 715, 'store_id' => 86, 'date' => '2024-06-18', 'order_number' => '1', 'arrival_time' => '2024-06-18 00:00', 'departure_time' => '2024-06-18', 'remark' => 'NULL', 'trip_id' => 514]);
        Stopp::create(['id' => 716, 'store_id' => 77, 'date' => '2024-06-18', 'order_number' => '1', 'arrival_time' => '2024-06-18 00:00', 'departure_time' => '2024-06-18', 'remark' => 'NULL', 'trip_id' => 514]);


        Stopp::create(['id' => 719, 'store_id' => 176, 'date' => '2024-06-20', 'order_number' => '1', 'arrival_time' => '2024-06-20 00:00', 'departure_time' => '2024-06-20', 'remark' => 'NULL', 'trip_id' => 517]);


        Stopp::create(['id' => 723, 'store_id' => 16, 'date' => '2024-06-21', 'order_number' => '1', 'arrival_time' => '2024-06-21 00:00', 'departure_time' => '2024-06-21', 'remark' => 'NULL', 'trip_id' => 520]);

        Stopp::create(['id' => 725, 'store_id' => 5, 'date' => '2024-06-24', 'order_number' => '1', 'arrival_time' => '2024-06-24 00:00', 'departure_time' => '2024-06-24', 'remark' => 'NULL', 'trip_id' => 521]);

        Stopp::create(['id' => 727, 'store_id' => 109, 'date' => '2024-06-25', 'order_number' => '1', 'arrival_time' => '2024-06-25 00:00', 'departure_time' => '2024-06-25', 'remark' => 'NULL', 'trip_id' => 523]);

        Stopp::create(['id' => 729, 'store_id' => 44, 'date' => '2024-06-25', 'order_number' => '1', 'arrival_time' => '2024-06-25 00:00', 'departure_time' => '2024-06-25', 'remark' => 'NULL', 'trip_id' => 524]);
        Stopp::create(['id' => 730, 'store_id' => 11, 'date' => '2024-06-26', 'order_number' => '1', 'arrival_time' => '2024-06-26 00:00', 'departure_time' => '2024-06-26', 'remark' => 'NULL', 'trip_id' => 525]);

        Stopp::create(['id' => 732, 'store_id' => 170, 'date' => '2024-06-26', 'order_number' => '1', 'arrival_time' => '2024-06-26 00:00', 'departure_time' => '2024-06-26', 'remark' => 'NULL', 'trip_id' => 526]);

        Stopp::create(['id' => 734, 'store_id' => 166, 'date' => '2024-06-27', 'order_number' => '2', 'arrival_time' => '2024-06-27 00:00', 'departure_time' => '2024-06-27', 'remark' => 'NULL', 'trip_id' => 527]);


        Stopp::create(['id' => 737, 'store_id' => 26, 'date' => '2024-06-28', 'order_number' => '1', 'arrival_time' => '2024-06-28 00:00', 'departure_time' => '2024-06-28', 'remark' => 'Reste', 'trip_id' => 530]);

        Stopp::create(['id' => 739, 'store_id' => 174, 'date' => '2024-07-01', 'order_number' => '1', 'arrival_time' => '2024-07-01 00:00', 'departure_time' => '2024-07-01', 'remark' => 'NULL', 'trip_id' => 532]);
        Stopp::create(['id' => 740, 'store_id' => 186, 'date' => '2024-07-02', 'order_number' => '1', 'arrival_time' => '2024-07-02 00:00', 'departure_time' => '2024-07-02', 'remark' => 'vorgeladen von B. Hahn ', 'trip_id' => 533]);


        Stopp::create(['id' => 743, 'store_id' => 67, 'date' => '2024-07-03', 'order_number' => '1', 'arrival_time' => '2024-07-03 00:00', 'departure_time' => '2024-07-03', 'remark' => 'NULL', 'trip_id' => 535]);


        Stopp::create(['id' => 746, 'store_id' => 16, 'date' => '2024-07-04', 'order_number' => '1', 'arrival_time' => '2024-07-04 00:00', 'departure_time' => '2024-07-04', 'remark' => 'NULL', 'trip_id' => 537]);
        Stopp::create(['id' => 747, 'store_id' => 145, 'date' => '2024-07-04', 'order_number' => '1', 'arrival_time' => '2024-07-04 00:00', 'departure_time' => '2024-07-04', 'remark' => 'NULL', 'trip_id' => 538]);
        Stopp::create(['id' => 748, 'store_id' => 160, 'date' => '2024-07-04', 'order_number' => '2', 'arrival_time' => '2024-07-04 00:00', 'departure_time' => '2024-07-04', 'remark' => 'NULL', 'trip_id' => 538]);
        Stopp::create(['id' => 749, 'store_id' => 16, 'date' => '2024-07-05', 'order_number' => '1', 'arrival_time' => '2024-07-05 00:00', 'departure_time' => '2024-07-05', 'remark' => 'vorgeladen von B. Hahn', 'trip_id' => 539]);

        Stopp::create(['id' => 751, 'store_id' => 157, 'date' => '2024-07-08', 'order_number' => '1', 'arrival_time' => '2024-07-08 00:00', 'departure_time' => '2024-07-08', 'remark' => 'NULL', 'trip_id' => 541]);
        Stopp::create(['id' => 752, 'store_id' => 75, 'date' => '2024-07-08', 'order_number' => '2', 'arrival_time' => '2024-07-08 00:00', 'departure_time' => '2024-07-08', 'remark' => 'NULL', 'trip_id' => 541]);
        Stopp::create(['id' => 753, 'store_id' => 88, 'date' => '2024-07-08', 'order_number' => '3', 'arrival_time' => '2024-07-08 00:00', 'departure_time' => '2024-07-08', 'remark' => 'NULL', 'trip_id' => 541]);

        Stopp::create(['id' => 755, 'store_id' => 72, 'date' => '2024-07-09', 'order_number' => '1', 'arrival_time' => '2024-07-09 00:00', 'departure_time' => '2024-07-09', 'remark' => 'NULL', 'trip_id' => 542]);
        Stopp::create(['id' => 756, 'store_id' => 113, 'date' => '2024-07-09', 'order_number' => '2', 'arrival_time' => '2024-07-09 00:00', 'departure_time' => '2024-07-09', 'remark' => 'NULL', 'trip_id' => 542]);


        Stopp::create(['id' => 760, 'store_id' => 170, 'date' => '2024-07-12', 'order_number' => '1', 'arrival_time' => '2024-07-12 00:00', 'departure_time' => '2024-07-12', 'remark' => 'NULL', 'trip_id' => 546]);
        Stopp::create(['id' => 761, 'store_id' => 45, 'date' => '2024-07-12', 'order_number' => '1',   'remark' => 'vorgeladen f√ºr B. Hahn', 'trip_id' => 547]);

        Stopp::create(['id' => 763, 'store_id' => 44, 'date' => '2024-07-13', 'order_number' => '1', 'arrival_time' => '2024-07-13 00:00', 'departure_time' => '2024-07-13', 'remark' => 'NULL', 'trip_id' => 549]);
        Stopp::create(['id' => 764, 'store_id' => 91, 'date' => '2024-07-13', 'order_number' => '1', 'arrival_time' => '2024-07-13 00:00', 'departure_time' => '2024-07-13', 'remark' => 'NULL', 'trip_id' => 549]);


        Stopp::create(['id' => 768, 'store_id' => 83, 'date' => '2024-07-16', 'order_number' => '1', 'arrival_time' => '2024-07-16 00:00', 'departure_time' => '2024-07-16', 'remark' => 'NULL', 'trip_id' => 552]);
        Stopp::create(['id' => 769, 'store_id' => 86, 'date' => '2024-07-16', 'order_number' => '2', 'arrival_time' => '2024-07-16 00:00', 'departure_time' => '2024-07-16', 'remark' => 'NULL', 'trip_id' => 552]);
        Stopp::create(['id' => 770, 'store_id' => 32, 'date' => '02024-07-16', 'order_number' => '1',   'remark' => 'Vorgeladen f√ºr B. Hahn', 'trip_id' => 553]);
        Stopp::create(['id' => 771, 'store_id' => 23, 'date' => '2024-07-16', 'order_number' => '2',  'departure_time' => '2024-04-12', 'remark' => 'Vorgeladen f√ºr B. Hahn', 'trip_id' => 553]);


        Stopp::create(['id' => 775, 'store_id' => 80, 'date' => '2024-07-17', 'order_number' => '2', 'arrival_time' => '2024-07-17 00:00', 'departure_time' => '2024-07-17', 'remark' => 'NULL', 'trip_id' => 555]);

        Stopp::create(['id' => 777, 'store_id' => 143, 'date' => '2024-07-18', 'order_number' => '1', 'arrival_time' => '2024-07-18 00:00', 'departure_time' => '2024-07-18', 'remark' => 'NULL', 'trip_id' => 557]);

        Stopp::create(['id' => 779, 'store_id' => 48, 'date' => '2024-07-19', 'order_number' => '1', 'arrival_time' => '2024-07-19 00:00', 'departure_time' => '2024-07-19', 'remark' => 'NULL', 'trip_id' => 559]);

        Stopp::create(['id' => 781, 'store_id' => 191, 'date' => '2024-07-19', 'order_number' => '3', 'arrival_time' => '2024-07-19 00:00', 'departure_time' => '2024-07-19', 'remark' => 'NULL', 'trip_id' => 559]);
        Stopp::create(['id' => 782, 'store_id' => 200, 'date' => '2024-07-19', 'order_number' => '4', 'arrival_time' => '2024-07-19 00:00', 'departure_time' => '2024-07-19', 'remark' => 'NULL', 'trip_id' => 559]);
        Stopp::create(['id' => 783, 'store_id' => 64, 'date' => '2024-07-22', 'order_number' => '1', 'arrival_time' => '2024-07-15 00:00', 'departure_time' => '2024-07-22', 'remark' => 'vorgeladen von B. Hahn ', 'trip_id' => 560]);


        Stopp::create(['id' => 788, 'store_id' => 158, 'date' => '2024-07-23', 'order_number' => '3', 'arrival_time' => '2024-07-23 00:00', 'departure_time' => '2024-07-23', 'remark' => 'NULL', 'trip_id' => 562]);

        Stopp::create(['id' => 790, 'store_id' => 11, 'date' => '2024-07-24', 'order_number' => '1', 'arrival_time' => '2024-07-24 00:00', 'departure_time' => '2024-07-24', 'remark' => 'NULL', 'trip_id' => 564]);

        Stopp::create(['id' => 792, 'store_id' => 48, 'date' => '2024-07-24', 'order_number' => '1', 'arrival_time' => '2024-07-24 00:00', 'departure_time' => '2024-07-24', 'remark' => 'NULL', 'trip_id' => 565]);
        Stopp::create(['id' => 793, 'store_id' => 158, 'date' => '2024-07-25', 'order_number' => '1', 'arrival_time' => '2024-07-25 00:00', 'departure_time' => '2024-07-25', 'remark' => 'NULL', 'trip_id' => 566]);

        Stopp::create(['id' => 795, 'store_id' => 38, 'date' => '2024-07-25', 'order_number' => '2', 'arrival_time' => '2024-07-25 00:00', 'departure_time' => '2024-07-25', 'remark' => 'NULL', 'trip_id' => 567]);


        Stopp::create(['id' => 798, 'store_id' => 3, 'date' => '2024-07-26', 'order_number' => '1', 'arrival_time' => '2024-07-26 00:00', 'departure_time' => '2024-07-26', 'remark' => 'NULL', 'trip_id' => 569]);

        Stopp::create(['id' => 800, 'store_id' => 48, 'date' => '2024-07-29', 'order_number' => '1', 'arrival_time' => '2024-07-29 00:00', 'departure_time' => '2024-07-29', 'remark' => 'NULL', 'trip_id' => 570]);
        Stopp::create(['id' => 801, 'store_id' => 145, 'date' => '2024-07-29', 'order_number' => '2', 'arrival_time' => '2024-07-29 00:00', 'departure_time' => '2024-07-29', 'remark' => 'NULL', 'trip_id' => 570]);


        Stopp::create(['id' => 804, 'store_id' => 111, 'date' => '2024-07-30', 'order_number' => '1', 'arrival_time' => '2024-07-30 00:00', 'departure_time' => '2024-07-30', 'remark' => 'NULL', 'trip_id' => 572]);
        Stopp::create(['id' => 805, 'store_id' => 144, 'date' => '2024-07-30', 'order_number' => '1', 'arrival_time' => '2024-07-30 00:00', 'departure_time' => '2024-07-30', 'remark' => 'NULL', 'trip_id' => 573]);
        Stopp::create(['id' => 806, 'store_id' => 5, 'date' => '2024-07-30', 'order_number' => '1', 'arrival_time' => '2024-07-30 00:00', 'departure_time' => '2024-07-30', 'remark' => 'NULL', 'trip_id' => 573]);

        Stopp::create(['id' => 808, 'store_id' => 17, 'date' => '2024-07-31', 'order_number' => '1', 'arrival_time' => '2024-07-31 00:00', 'departure_time' => '2024-07-31', 'remark' => 'NULL', 'trip_id' => 575]);

        Stopp::create(['id' => 810, 'store_id' => 14, 'date' => '2024-08-01', 'order_number' => '1', 'arrival_time' => '2024-08-01 00:00', 'departure_time' => '2024-08-01', 'remark' => 'NULL', 'trip_id' => 577]);
        Stopp::create(['id' => 811, 'store_id' => 79, 'date' => '2024-08-01', 'order_number' => '1', 'arrival_time' => '2024-08-01 00:00', 'departure_time' => '2024-08-01', 'remark' => 'NULL', 'trip_id' => 577]);
        Stopp::create(['id' => 812, 'store_id' => 48, 'date' => '2024-08-02', 'order_number' => '1', 'arrival_time' => '2024-08-02 00:00', 'departure_time' => '2024-08-02', 'remark' => 'NULL', 'trip_id' => 579]);
        Stopp::create(['id' => 813, 'store_id' => 113, 'date' => '2024-08-02', 'order_number' => '1', 'arrival_time' => '2024-08-02 00:00', 'departure_time' => '2024-08-02', 'remark' => 'NULL', 'trip_id' => 578]);


        Stopp::create(['id' => 817, 'store_id' => 160, 'date' => '2024-08-05', 'order_number' => '1', 'arrival_time' => '2024-08-05 00:00', 'departure_time' => '2024-08-05', 'remark' => 'NULL', 'trip_id' => 581]);


        Stopp::create(['id' => 821, 'store_id' => 175, 'date' => '2024-08-08', 'order_number' => '1', 'arrival_time' => '2024-08-08 00:00', 'departure_time' => '2024-08-08', 'remark' => 'NULL', 'trip_id' => 585]);
        Stopp::create(['id' => 822, 'store_id' => 76, 'date' => '2024-08-08', 'order_number' => '1', 'arrival_time' => '2024-08-08 00:00', 'departure_time' => '2024-08-08', 'remark' => 'NULL', 'trip_id' => 586]);

        Stopp::create(['id' => 824, 'store_id' => 172, 'date' => '2024-08-09', 'order_number' => '1', 'arrival_time' => '2024-08-09 00:00', 'departure_time' => '2024-08-09', 'remark' => 'NULL', 'trip_id' => 588]);
        Stopp::create(['id' => 825, 'store_id' => 119, 'date' => '2024-08-09', 'order_number' => '1', 'arrival_time' => '2024-08-09 00:00', 'departure_time' => '2024-08-09', 'remark' => 'NULL', 'trip_id' => 589]);


        Stopp::create(['id' => 828, 'store_id' => 193, 'date' => '2024-08-12', 'order_number' => '2', 'arrival_time' => '2024-08-12 00:00', 'departure_time' => '2024-08-12', 'remark' => 'NULL', 'trip_id' => 592]);
        Stopp::create(['id' => 829, 'store_id' => 16, 'date' => '2024-08-12', 'order_number' => '1', 'arrival_time' => '2024-08-12 00:00', 'departure_time' => '2024-08-12', 'remark' => 'NULL', 'trip_id' => 592]);
        Stopp::create(['id' => 830, 'store_id' => 28, 'date' => '2024-08-12', 'order_number' => '1', 'arrival_time' => '2024-08-12 00:00', 'departure_time' => '2024-08-12', 'remark' => 'Vorgeladen f√ºr I. Hahn', 'trip_id' => 593]);
        Stopp::create(['id' => 831, 'store_id' => 5, 'date' => '2024-08-12', 'order_number' => '2', 'arrival_time' => '2024-08-12 00:00', 'departure_time' => '2024-08-12', 'remark' => 'vorgeladen f√ºr B. Hahn', 'trip_id' => 593]);
        Stopp::create(['id' => 832, 'store_id' => 76, 'date' => '2024-08-13', 'order_number' => '1', 'arrival_time' => '2024-08-13 00:00', 'departure_time' => '2024-08-13', 'remark' => 'NULL', 'trip_id' => 594]);
        Stopp::create(['id' => 833, 'store_id' => 81, 'date' => '2024-08-13', 'order_number' => '1', 'arrival_time' => '2024-08-13 00:00', 'departure_time' => '2024-08-13', 'remark' => 'NULL', 'trip_id' => 595]);
        Stopp::create(['id' => 834, 'store_id' => 77, 'date' => '2024-08-13', 'order_number' => '2', 'arrival_time' => '2024-08-13 00:00', 'departure_time' => '2024-08-13', 'remark' => 'NULL', 'trip_id' => 595]);

        Stopp::create(['id' => 836, 'store_id' => 2, 'date' => '2024-08-14', 'order_number' => '1', 'arrival_time' => '2024-08-14 00:00', 'departure_time' => '2024-08-14', 'remark' => 'NULL', 'trip_id' => 596]);
        Stopp::create(['id' => 837, 'store_id' => 80, 'date' => '2024-08-14', 'order_number' => '2', 'arrival_time' => '2024-08-14 00:00', 'departure_time' => '2024-08-14', 'remark' => 'NULL', 'trip_id' => 596]);

        Stopp::create(['id' => 839, 'store_id' => 143, 'date' => '2024-08-15', 'order_number' => '1', 'arrival_time' => '2024-08-15 00:00', 'departure_time' => '2024-08-15', 'remark' => 'NULL', 'trip_id' => 599]);
        Stopp::create(['id' => 840, 'store_id' => 42, 'date' => '2024-08-19', 'order_number' => '1', 'arrival_time' => '2024-08-19 00:00', 'departure_time' => '2024-08-19', 'remark' => 'NULL', 'trip_id' => 600]);
        Stopp::create(['id' => 841, 'store_id' => 147, 'date' => '2024-08-19', 'order_number' => '2', 'arrival_time' => '2024-08-19 00:00', 'departure_time' => '2024-08-19', 'remark' => 'NULL', 'trip_id' => 600]);
        Stopp::create(['id' => 842, 'store_id' => 76, 'date' => '2024-08-19', 'order_number' => '1', 'arrival_time' => '2024-08-19 00:00', 'departure_time' => '2024-08-19', 'remark' => 'NULL', 'trip_id' => 601]);
        Stopp::create(['id' => 843, 'store_id' => 48, 'date' => '2024-08-20', 'order_number' => '1', 'arrival_time' => '2024-08-20 00:00', 'departure_time' => '2024-08-20', 'remark' => 'NULL', 'trip_id' => 602]);

        Stopp::create(['id' => 845, 'store_id' => 158, 'date' => '2024-08-20', 'order_number' => '1', 'arrival_time' => '2024-08-20 00:00', 'departure_time' => '2024-08-20', 'remark' => 'NULL', 'trip_id' => 603]);
        Stopp::create(['id' => 846, 'store_id' => 178, 'date' => '2024-08-21', 'order_number' => '1', 'arrival_time' => '2024-08-21 00:00', 'departure_time' => '2024-08-21', 'remark' => 'NULL', 'trip_id' => 604]);


        Stopp::create(['id' => 851, 'store_id' => 4, 'date' => '2024-08-23', 'order_number' => '1', 'arrival_time' => '2024-08-23 00:00', 'departure_time' => '2024-08-23', 'remark' => 'NULL', 'trip_id' => 609]);

        Stopp::create(['id' => 853, 'store_id' => 28, 'date' => '2024-08-26', 'order_number' => '1', 'arrival_time' => '2024-08-26 00:00', 'departure_time' => '2024-08-26', 'remark' => 'NULL', 'trip_id' => 611]);


        Stopp::create(['id' => 863, 'store_id' => 45, 'date' => '2024-08-30', 'order_number' => '1', 'arrival_time' => '2024-08-30 12:34', 'departure_time' => '2024-08-30', 'remark' => 'NULL', 'trip_id' => 619]);
        Stopp::create(['id' => 864, 'store_id' => 119, 'date' => '2024-09-16', 'order_number' => '1', 'arrival_time' => '2024-09-16 13:03', 'departure_time' => '2024-09-16', 'remark' => 'NULL', 'trip_id' => 621]);

        Stopp::create(['id' => 866, 'store_id' => 137, 'date' => '2024-09-16', 'order_number' => '3', 'arrival_time' => '2024-09-16 13:03', 'departure_time' => '2024-09-16', 'remark' => 'NULL', 'trip_id' => 621]);


        Stopp::create(['id' => 869, 'store_id' => 66, 'date' => '2024-09-17', 'order_number' => '1', 'arrival_time' => '2024-09-17 16:24', 'departure_time' => '2024-09-17', 'remark' => 'NULL', 'trip_id' => 624]);
        Stopp::create(['id' => 870, 'store_id' => 164, 'date' => '2024-09-18', 'order_number' => '1', 'arrival_time' => '2024-09-18 12:50', 'departure_time' => '2024-09-18', 'remark' => 'NULL', 'trip_id' => 625]);
        Stopp::create(['id' => 871, 'store_id' => 166, 'date' => '2024-09-18', 'order_number' => '1', 'arrival_time' => '2024-09-18 12:50', 'departure_time' => '2024-09-18', 'remark' => 'NULL', 'trip_id' => 625]);


        Stopp::create(['id' => 874, 'store_id' => 67, 'date' => '2024-09-19', 'order_number' => '1', 'arrival_time' => '2024-09-19 18:45', 'departure_time' => '2024-09-19', 'remark' => 'NULL', 'trip_id' => 628]);
        Stopp::create(['id' => 875, 'store_id' => 113, 'date' => '2024-09-20', 'order_number' => '1', 'arrival_time' => '2024-09-20 12:59', 'departure_time' => '2024-09-20', 'remark' => 'NULL', 'trip_id' => 629]);

        Stopp::create(['id' => 877, 'store_id' => 164, 'date' => '2024-10-07', 'order_number' => '1', 'arrival_time' => '2024-10-07 05:15', 'departure_time' => '2024-10-07', 'remark' => 'NULL', 'trip_id' => 631]);

        Stopp::create(['id' => 879, 'store_id' => 96, 'date' => '2025-01-02', 'order_number' => '1', 'arrival_time' => '2025-01-02 04:24', 'departure_time' => '2025-01-02', 'remark' => 'NULL', 'trip_id' => 633]);
        Stopp::create(['id' => 880, 'store_id' => 157, 'date' => '2025-01-02', 'order_number' => '1', 'arrival_time' => '2025-01-02 04:24', 'departure_time' => '2025-01-02', 'remark' => 'NULL', 'trip_id' => 633]);
        Stopp::create(['id' => 881, 'store_id' => 75, 'date' => '2025-01-02', 'order_number' => '1', 'arrival_time' => '2025-01-02 04:24', 'departure_time' => '2025-01-02', 'remark' => 'NULL', 'trip_id' => 633]);
        Stopp::create(['id' => 882, 'store_id' => 89, 'date' => '2025-01-02', 'order_number' => '1', 'arrival_time' => '2025-01-02 04:24', 'departure_time' => '2025-01-02', 'remark' => 'NULL', 'trip_id' => 633]);


        Stopp::create(['id' => 892, 'store_id' => 3, 'date' => '2025-01-06', 'order_number' => '1', 'arrival_time' => '2025-01-06 15:52', 'departure_time' => '2025-01-06', 'remark' => 'NULL', 'trip_id' => 640]);
        Stopp::create(['id' => 893, 'store_id' => 56, 'date' => '2025-01-06', 'order_number' => '2', 'arrival_time' => '2025-01-06 15:52', 'departure_time' => '2025-01-06', 'remark' => 'NULL', 'trip_id' => 640]);
        Stopp::create(['id' => 894, 'store_id' => 15, 'date' => '2025-01-07', 'order_number' => '1', 'arrival_time' => '2025-01-07 12:51', 'departure_time' => '2025-01-07', 'remark' => 'NULL', 'trip_id' => 641]);
        Stopp::create(['id' => 895, 'store_id' => 138, 'date' => '2025-01-07', 'order_number' => '1', 'arrival_time' => '2025-01-07 16:10', 'departure_time' => '2025-01-07', 'remark' => 'NULL', 'trip_id' => 642]);


        Stopp::create(['id' => 898, 'store_id' => 15, 'date' => '2025-01-09', 'order_number' => '1', 'arrival_time' => '2025-01-09 12:32', 'departure_time' => '2025-01-09', 'remark' => 'NULL', 'trip_id' => 645]);
        Stopp::create(['id' => 899, 'store_id' => 115, 'date' => '2025-01-10', 'order_number' => '1', 'arrival_time' => '2025-01-10 12:49', 'departure_time' => '2025-01-10', 'remark' => 'NULL', 'trip_id' => 646]);

        Stopp::create(['id' => 901, 'store_id' => 18, 'date' => '2025-01-13', 'order_number' => '2', 'arrival_time' => '2025-01-13 14:43', 'departure_time' => '2025-01-13', 'remark' => 'NULL', 'trip_id' => 647]);
        Stopp::create(['id' => 902, 'store_id' => 187, 'date' => '2025-01-14', 'order_number' => '1', 'arrival_time' => '2025-01-14 13:05', 'departure_time' => '2025-01-14', 'remark' => 'NULL', 'trip_id' => 648]);
        Stopp::create(['id' => 903, 'store_id' => 158, 'date' => '0000-00-00', 'order_number' => '2', 'arrival_time' => '2025-01-14 13:05', 'departure_time' => '2025-01-14', 'remark' => 'NULL', 'trip_id' => 648]);


        Stopp::create(['id' => 906, 'store_id' => 164, 'date' => '2025-01-15', 'order_number' => '1', 'arrival_time' => '2025-01-15 17:25', 'departure_time' => '2025-01-15', 'remark' => 'NULL', 'trip_id' => 650]);
        Stopp::create(['id' => 907, 'store_id' => 166, 'date' => '2025-01-15', 'order_number' => '2', 'arrival_time' => '2025-01-15 17:25', 'departure_time' => '2025-01-15', 'remark' => 'NULL', 'trip_id' => 650]);
        Stopp::create(['id' => 908, 'store_id' => 127, 'date' => '2025-01-16', 'order_number' => '1', 'arrival_time' => '2025-01-16 13:52', 'departure_time' => '2025-01-16', 'remark' => 'NULL', 'trip_id' => 651]);


        Stopp::create(['id' => 911, 'store_id' => 165, 'date' => '2025-01-17', 'order_number' => '1', 'arrival_time' => '2025-01-17 12:50', 'departure_time' => '2025-01-17', 'remark' => 'NULL', 'trip_id' => 652]);

        Stopp::create(['id' => 913, 'store_id' => 81, 'date' => '2025-01-20', 'order_number' => '1', 'arrival_time' => '2025-01-20 04:14', 'departure_time' => '2025-01-20', 'remark' => 'NULL', 'trip_id' => 654]);
        Stopp::create(['id' => 914, 'store_id' => 95, 'date' => '2025-01-20', 'order_number' => '2', 'arrival_time' => '2025-01-20 04:14', 'departure_time' => '2025-01-20', 'remark' => 'NULL', 'trip_id' => 654]);

        Stopp::create(['id' => 916, 'store_id' => 84, 'date' => '2025-01-21', 'order_number' => '1', 'arrival_time' => '2025-01-21 04:18', 'departure_time' => '2025-01-21', 'remark' => 'NULL', 'trip_id' => 655]);
        Stopp::create(['id' => 917, 'store_id' => 105, 'date' => '2025-01-21', 'order_number' => '2', 'arrival_time' => '2025-01-21 04:18', 'departure_time' => '2025-01-21', 'remark' => 'NULL', 'trip_id' => 655]);

        Stopp::create(['id' => 919, 'store_id' => 71, 'date' => '2025-01-21', 'order_number' => '2', 'arrival_time' => '2025-01-21 11:29', 'departure_time' => '2025-01-21', 'remark' => 'NULL', 'trip_id' => 656]);

        Stopp::create(['id' => 921, 'store_id' => 161, 'date' => '2025-01-23', 'order_number' => '2', 'arrival_time' => '2025-01-23 04:21', 'departure_time' => '2025-01-23', 'remark' => 'NULL', 'trip_id' => 657]);
        Stopp::create(['id' => 922, 'store_id' => 158, 'date' => '2025-01-23', 'order_number' => '1', 'arrival_time' => '2025-01-23 10:56', 'departure_time' => '2025-01-23', 'remark' => 'vorgeladen f√ºr B.Hahn ', 'trip_id' => 658]);
        Stopp::create(['id' => 923, 'store_id' => 110, 'date' => '2025-01-24', 'order_number' => '1', 'arrival_time' => '2025-01-24 04:41', 'departure_time' => '2025-01-24', 'remark' => 'NULL', 'trip_id' => 659]);
        Stopp::create(['id' => 924, 'store_id' => 82, 'date' => '2025-01-31', 'order_number' => '2', 'arrival_time' => '2025-01-24 04:41', 'departure_time' => '2025-01-24', 'remark' => 'NULL', 'trip_id' => 659]);

        Stopp::create(['id' => 926, 'store_id' => 106, 'date' => '2025-01-24', 'order_number' => '1', 'arrival_time' => '2025-01-24 09:52', 'departure_time' => '2025-01-24', 'remark' => 'vorgeladen f√ºr B.Hahn', 'trip_id' => 660]);


        Stopp::create(['id' => 929, 'store_id' => 94, 'date' => '2025-01-25', 'order_number' => '1', 'arrival_time' => '2025-01-25 11:59', 'departure_time' => '2025-01-25', 'remark' => 'NULL', 'trip_id' => 663]);

        Stopp::create(['id' => 931, 'store_id' => 25, 'date' => '2025-01-26', 'order_number' => '1', 'arrival_time' => '2025-01-25 12:02', 'departure_time' => '2025-01-25', 'remark' => 'Leergut noch OR zum Entsorgen', 'trip_id' => 664]);
        Stopp::create(['id' => 932, 'store_id' => 189, 'date' => '2025-01-28', 'order_number' => '1', 'arrival_time' => '2025-01-28 04:17', 'departure_time' => '2025-01-28', 'remark' => 'NULL', 'trip_id' => 665]);
        Stopp::create(['id' => 933, 'store_id' => 84, 'date' => '2025-01-28', 'order_number' => '2', 'arrival_time' => '2025-01-28 04:17', 'departure_time' => '2025-01-28', 'remark' => 'NULL', 'trip_id' => 665]);
        Stopp::create(['id' => 934, 'store_id' => 27, 'date' => '2025-01-29', 'order_number' => '1', 'arrival_time' => '2025-01-29 04:20', 'departure_time' => '2025-01-29', 'remark' => 'NULL', 'trip_id' => 666]);


        Stopp::create(['id' => 937, 'store_id' => 83, 'date' => '2025-01-30', 'order_number' => '1', 'arrival_time' => '2025-01-30 04:22', 'departure_time' => '2025-01-30', 'remark' => 'NULL', 'trip_id' => 669]);
        Stopp::create(['id' => 938, 'store_id' => 91, 'date' => '2025-01-30', 'order_number' => '2', 'arrival_time' => '2025-01-30 04:22', 'departure_time' => '2025-01-30', 'remark' => 'NULL', 'trip_id' => 669]);
        Stopp::create(['id' => 939, 'store_id' => 188, 'date' => '2025-01-30', 'order_number' => '1', 'arrival_time' => '2025-01-30 09:45', 'departure_time' => '2025-01-30', 'remark' => 'NULL', 'trip_id' => 668]);


        Stopp::create(['id' => 944, 'store_id' => 104, 'date' => '2025-02-03', 'order_number' => '1', 'arrival_time' => '2025-02-03 12:57', 'departure_time' => '2025-02-03', 'remark' => 'Vorgeladen von B.Hahn ', 'trip_id' => 671]);


        Stopp::create(['id' => 947, 'store_id' => 170, 'date' => '2025-02-04', 'order_number' => '1', 'arrival_time' => '2025-02-04 12:28', 'departure_time' => '2025-02-04', 'remark' => 'vorgeladen von B. Hahn', 'trip_id' => 673]);
        Stopp::create(['id' => 948, 'store_id' => 56, 'date' => '2025-02-04', 'order_number' => '1', 'arrival_time' => '2025-02-04 15:43', 'departure_time' => '2025-02-04', 'remark' => 'NULL', 'trip_id' => 674]);
        Stopp::create(['id' => 949, 'store_id' => 117, 'date' => '2025-02-04', 'order_number' => '2', 'arrival_time' => '2025-02-04 15:43', 'departure_time' => '2025-02-04', 'remark' => 'NULL', 'trip_id' => 674]);
        Stopp::create(['id' => 950, 'store_id' => 170, 'date' => '2025-02-05', 'order_number' => '1', 'arrival_time' => '2025-02-05 12:27', 'departure_time' => '2025-02-05', 'remark' => 'NULL', 'trip_id' => 675]);
        Stopp::create(['id' => 951, 'store_id' => 183, 'date' => '2025-02-05', 'order_number' => '1', 'arrival_time' => '2025-02-05 15:28', 'departure_time' => '2025-02-05', 'remark' => 'NULL', 'trip_id' => 676]);
        Stopp::create(['id' => 952, 'store_id' => 158, 'date' => '2025-02-06', 'order_number' => '1', 'arrival_time' => '2025-02-06 12:58', 'departure_time' => '2025-02-06', 'remark' => 'NULL', 'trip_id' => 677]);
        Stopp::create(['id' => 953, 'store_id' => 71, 'date' => '2025-02-06', 'order_number' => '1', 'arrival_time' => '2025-02-06 16:22', 'departure_time' => '2025-02-06', 'remark' => 'NULL', 'trip_id' => 678]);

        Stopp::create(['id' => 955, 'store_id' => 145, 'date' => '2025-02-07', 'order_number' => '1', 'arrival_time' => '2025-02-07 15:17', 'departure_time' => '2025-02-07', 'remark' => 'NULL', 'trip_id' => 680]);

        Stopp::create(['id' => 957, 'store_id' => 8, 'date' => '2025-02-10', 'order_number' => '1', 'arrival_time' => '2025-02-10 12:50', 'departure_time' => '2025-02-10', 'remark' => 'NULL', 'trip_id' => 682]);
        Stopp::create(['id' => 958, 'store_id' => 117, 'date' => '2025-02-10', 'order_number' => '2', 'arrival_time' => '2025-02-10 12:50', 'departure_time' => '2025-02-10', 'remark' => 'NULL', 'trip_id' => 682]);
        Stopp::create(['id' => 959, 'store_id' => 43, 'date' => '2025-02-20', 'order_number' => '1', 'arrival_time' => '2025-02-20 05:00', 'departure_time' => '2025-02-20', 'remark' => 'NULL', 'trip_id' => 683]);
        Stopp::create(['id' => 960, 'store_id' => 171, 'date' => '2025-02-20', 'order_number' => '1', 'arrival_time' => '2025-02-20 08:23', 'departure_time' => '2025-02-20', 'remark' => 'NULL', 'trip_id' => 684]);
        Stopp::create(['id' => 961, 'store_id' => 167, 'date' => '2025-02-21', 'order_number' => '1', 'arrival_time' => '2025-02-21 04:42', 'departure_time' => '2025-02-21', 'remark' => 'NULL', 'trip_id' => 685]);
        Stopp::create(['id' => 962, 'store_id' => 91, 'date' => '2025-02-21', 'order_number' => '2', 'arrival_time' => '2025-02-21 04:42', 'departure_time' => '2025-02-21', 'remark' => 'NULL', 'trip_id' => 685]);


        Stopp::create(['id' => 966, 'store_id' => 70, 'date' => '2025-02-22', 'order_number' => '1', 'arrival_time' => '2025-02-22 10:58', 'departure_time' => '2025-02-22', 'remark' => 'NULL', 'trip_id' => 689]);

        Stopp::create(['id' => 968, 'store_id' => 3, 'date' => '2025-02-24', 'order_number' => '1', 'arrival_time' => '2025-02-24 04:35', 'departure_time' => '2025-02-24', 'remark' => 'NULL', 'trip_id' => 691]);
        Stopp::create(['id' => 969, 'store_id' => 29, 'date' => '2025-02-24', 'order_number' => '2', 'arrival_time' => '2025-02-24 04:35', 'departure_time' => '2025-02-24', 'remark' => 'NULL', 'trip_id' => 691]);

        Stopp::create(['id' => 971, 'store_id' => 9, 'date' => '2025-02-25', 'order_number' => '1', 'arrival_time' => '2025-02-25 05:27', 'departure_time' => '2025-02-25', 'remark' => 'NULL', 'trip_id' => 693]);
        Stopp::create(['id' => 972, 'store_id' => 59, 'date' => '0000-00-00', 'order_number' => '2', 'arrival_time' => '2025-02-25 05:27', 'departure_time' => '2025-02-25', 'remark' => 'NULL', 'trip_id' => 693]);


        Stopp::create(['id' => 975, 'store_id' => 152, 'date' => '2025-02-27', 'order_number' => '1', 'arrival_time' => '2025-02-27 10:18', 'departure_time' => '2025-02-27', 'remark' => 'NULL', 'trip_id' => 696]);

        Stopp::create(['id' => 977, 'store_id' => 17, 'date' => '2025-02-27', 'order_number' => '1', 'arrival_time' => '2025-02-27 10:18', 'departure_time' => '2025-02-27', 'remark' => 'vorgeladen f√ºr B.Hahn', 'trip_id' => 697]);
        Stopp::create(['id' => 978, 'store_id' => 165, 'date' => '2025-02-27', 'order_number' => '2', 'arrival_time' => '2025-02-27 10:18', 'departure_time' => '2025-02-27', 'remark' => 'vorgeladen f√ºr B.Hahn', 'trip_id' => 697]);

        Stopp::create(['id' => 980, 'store_id' => 44, 'date' => '2025-02-28', 'order_number' => '1', 'arrival_time' => '2025-02-28 10:28', 'departure_time' => '2025-02-28', 'remark' => 'NULL', 'trip_id' => 699]);
        Stopp::create(['id' => 981, 'store_id' => 94, 'date' => '2025-02-28', 'order_number' => '2', 'arrival_time' => '2025-02-28 10:28', 'departure_time' => '2025-02-28', 'remark' => 'NULL', 'trip_id' => 699]);
        Stopp::create(['id' => 982, 'store_id' => 171, 'date' => '2025-02-28', 'order_number' => '1', 'arrival_time' => '2025-02-28 10:28', 'departure_time' => '2025-02-28', 'remark' => 'NULL', 'trip_id' => 700]);


        Stopp::create(['id' => 985, 'store_id' => 4, 'date' => '2025-03-04', 'order_number' => '1', 'arrival_time' => '2025-03-04 12:57', 'departure_time' => '2025-03-04', 'remark' => 'NULL', 'trip_id' => 703]);


        Stopp::create(['id' => 988, 'store_id' => 5, 'date' => '2025-03-05', 'order_number' => '2', 'arrival_time' => '2025-03-05 17:00', 'departure_time' => '2025-03-05', 'remark' => 'NULL', 'trip_id' => 706]);
        Stopp::create(['id' => 989, 'store_id' => 5, 'date' => '2025-03-06', 'order_number' => '1', 'arrival_time' => '2025-03-06 12:27', 'departure_time' => '2025-03-06', 'remark' => 'NULL', 'trip_id' => 707]);
        Stopp::create(['id' => 990, 'store_id' => 111, 'date' => '2025-03-06', 'order_number' => '1', 'arrival_time' => '2025-03-06 16:05', 'departure_time' => '2025-03-06', 'remark' => 'NULL', 'trip_id' => 708]);
        Stopp::create(['id' => 991, 'store_id' => 113, 'date' => '2025-03-07', 'order_number' => '1', 'arrival_time' => '2025-03-07 11:48', 'departure_time' => '2025-03-07', 'remark' => 'Vorgeladen von B. Hahn', 'trip_id' => 709]);
        Stopp::create(['id' => 992, 'store_id' => 51, 'date' => '2025-03-07', 'order_number' => '2', 'arrival_time' => '2025-03-07 11:48', 'departure_time' => '2025-03-07', 'remark' => 'NULL', 'trip_id' => 709]);
        Stopp::create(['id' => 993, 'store_id' => 160, 'date' => '2025-03-07', 'order_number' => '1', 'arrival_time' => '2025-03-07 16:47', 'departure_time' => '2025-03-07', 'remark' => 'NULL', 'trip_id' => 710]);
        Stopp::create(['id' => 994, 'store_id' => 64, 'date' => '2025-03-11', 'order_number' => '1', 'arrival_time' => '2025-03-11 12:35', 'departure_time' => '2025-03-11', 'remark' => 'NULL', 'trip_id' => 711]);
        Stopp::create(['id' => 995, 'store_id' => 34, 'date' => '2025-03-11', 'order_number' => '2', 'arrival_time' => '2025-03-11 12:35', 'departure_time' => '2025-03-11', 'remark' => 'NULL', 'trip_id' => 711]);
        Stopp::create(['id' => 996, 'store_id' => 165, 'date' => '2025-03-12', 'order_number' => '1', 'arrival_time' => '2025-03-12 12:28', 'departure_time' => '2025-03-12', 'remark' => 'NULL', 'trip_id' => 712]);
        Stopp::create(['id' => 997, 'store_id' => 43, 'date' => '2025-03-12', 'order_number' => '2', 'arrival_time' => '2025-03-12 12:28', 'departure_time' => '2025-03-12', 'remark' => 'NULL', 'trip_id' => 712]);
        Stopp::create(['id' => 998, 'store_id' => 34, 'date' => '2025-03-12', 'order_number' => '3', 'arrival_time' => '2025-03-12 12:28', 'departure_time' => '2025-03-12', 'remark' => 'NULL', 'trip_id' => 712]);
        Stopp::create(['id' => 999, 'store_id' => 38, 'date' => '2025-03-13', 'order_number' => '1', 'arrival_time' => '2025-03-13 12:30', 'departure_time' => '2025-03-13', 'remark' => 'NULL', 'trip_id' => 713]);
        Stopp::create(['id' => 1000, 'store_id' => 165, 'date' => '2025-03-13', 'order_number' => '2', 'arrival_time' => '2025-03-13 12:30', 'departure_time' => '2025-03-13', 'remark' => 'NULL', 'trip_id' => 713]);

        Stopp::create(['id' => 1002, 'store_id' => 51, 'date' => '2025-03-14', 'order_number' => '1', 'arrival_time' => '2025-03-14 12:28', 'departure_time' => '2025-03-14', 'remark' => 'NULL', 'trip_id' => 715]);
        Stopp::create(['id' => 1003, 'store_id' => 51, 'date' => '2025-03-14', 'order_number' => '1', 'arrival_time' => '2025-03-14 19:57', 'departure_time' => '2025-03-14', 'remark' => 'NULL', 'trip_id' => 716]);
        Stopp::create(['id' => 1004, 'store_id' => 170, 'date' => '2025-03-14', 'order_number' => '2', 'arrival_time' => '2025-03-14 19:57', 'departure_time' => '2025-03-14', 'remark' => 'NULL', 'trip_id' => 716]);
        Stopp::create(['id' => 1005, 'store_id' => 120, 'date' => '2025-03-17', 'order_number' => '1', 'arrival_time' => '2025-03-17 04:25', 'departure_time' => '2025-03-17', 'remark' => 'NULL', 'trip_id' => 717]);


        Stopp::create(['id' => 1008, 'store_id' => 85, 'date' => '2025-03-18', 'order_number' => '1', 'arrival_time' => '2025-03-18 08:06', 'departure_time' => '2025-03-18', 'remark' => 'NULL', 'trip_id' => 719]);


        Stopp::create(['id' => 1012, 'store_id' => 128, 'date' => '2025-03-20', 'order_number' => '1', 'arrival_time' => '2025-03-20 05:07', 'departure_time' => '2025-03-20', 'remark' => 'NULL', 'trip_id' => 723]);


        Stopp::create(['id' => 1016, 'store_id' => 192, 'date' => '2025-03-21', 'order_number' => '1', 'arrival_time' => '2025-03-21 07:59', 'departure_time' => '2025-03-21', 'remark' => 'NULL', 'trip_id' => 726]);

        Stopp::create(['id' => 1018, 'store_id' => 121, 'date' => '2025-03-31', 'order_number' => '1', 'arrival_time' => '2025-03-31 20:10', 'departure_time' => '2025-03-31', 'remark' => 'NULL', 'trip_id' => 727]);

        Stopp::create(['id' => 1020, 'store_id' => 7, 'date' => '2025-04-01', 'order_number' => '1', 'arrival_time' => '2025-04-01 12:30', 'departure_time' => '2025-04-01', 'remark' => 'NULL', 'trip_id' => 729]);
        Stopp::create(['id' => 1021, 'store_id' => 23, 'date' => '2025-04-01', 'order_number' => '2', 'arrival_time' => '2025-04-01 12:31', 'departure_time' => '2025-04-01', 'remark' => 'NULL', 'trip_id' => 729]);
        Stopp::create(['id' => 1022, 'store_id' => 130, 'date' => '2025-04-01', 'order_number' => '1', 'arrival_time' => '2025-04-01 20:45', 'departure_time' => '2025-04-01', 'remark' => 'NULL', 'trip_id' => 730]);
        Stopp::create(['id' => 1023, 'store_id' => 49, 'date' => '2025-04-02', 'order_number' => '1', 'arrival_time' => '2025-04-02 18:33', 'departure_time' => '2025-04-02', 'remark' => 'NULL', 'trip_id' => 731]);
        Stopp::create(['id' => 1024, 'store_id' => 188, 'date' => '2025-04-02', 'order_number' => '2', 'arrival_time' => '2025-04-02 18:33', 'departure_time' => '2025-04-02', 'remark' => 'NULL', 'trip_id' => 731]);

        Stopp::create(['id' => 1026, 'store_id' => 111, 'date' => '2025-04-03', 'order_number' => '1', 'arrival_time' => '2025-04-03 20:55', 'departure_time' => '2025-04-03', 'remark' => 'NULL', 'trip_id' => 733]);
        Stopp::create(['id' => 1027, 'store_id' => 112, 'date' => '2025-04-04', 'order_number' => '1', 'arrival_time' => '2025-04-04 12:52', 'departure_time' => '2025-04-04', 'remark' => 'NULL', 'trip_id' => 734]);
        Stopp::create(['id' => 1028, 'store_id' => 13, 'date' => '2025-04-04', 'order_number' => '1', 'arrival_time' => '2025-04-04 16:52', 'departure_time' => '2025-04-04', 'remark' => 'NULL', 'trip_id' => 735]);


        Stopp::create(['id' => 1031, 'store_id' => 60, 'date' => '2025-04-14', 'order_number' => '1', 'arrival_time' => '2025-04-14 09:25', 'departure_time' => '2025-04-14', 'remark' => 'NULL', 'trip_id' => 737]);


        Stopp::create(['id' => 1036, 'store_id' => 171, 'date' => '2025-04-16', 'order_number' => '1', 'arrival_time' => '2025-04-16 04:35', 'departure_time' => '2025-04-16', 'remark' => 'NULL', 'trip_id' => 741]);
        Stopp::create(['id' => 1037, 'store_id' => 113, 'date' => '2025-04-16', 'order_number' => '1', 'arrival_time' => '2025-04-16 09:47', 'departure_time' => '2025-04-16', 'remark' => 'Vorgeladen f√ºr B. Hahn ', 'trip_id' => 742]);
        Stopp::create(['id' => 1038, 'store_id' => 161, 'date' => '2025-04-17', 'order_number' => '1', 'arrival_time' => '2025-04-17 07:24', 'departure_time' => '2025-04-17', 'remark' => 'NULL', 'trip_id' => 743]);
        Stopp::create(['id' => 1039, 'store_id' => 16, 'date' => '2025-04-17', 'order_number' => '2', 'arrival_time' => '2025-04-17 07:24', 'departure_time' => '2025-04-17', 'remark' => 'NULL', 'trip_id' => 743]);


        Stopp::create(['id' => 1043, 'store_id' => 46, 'date' => '2025-04-19', 'order_number' => '1', 'arrival_time' => '2025-04-19 05:13', 'departure_time' => '2025-04-19', 'remark' => 'NULL', 'trip_id' => 747]);
        Stopp::create(['id' => 1044, 'store_id' => 22, 'date' => '2025-04-19', 'order_number' => '2', 'arrival_time' => '2025-04-19 05:13', 'departure_time' => '2025-04-19', 'remark' => 'NULL', 'trip_id' => 747]);
        Stopp::create(['id' => 1045, 'store_id' => 48, 'date' => '2025-04-22', 'order_number' => '1', 'arrival_time' => '2025-04-22 04:52', 'departure_time' => '2025-04-22', 'remark' => 'NULL', 'trip_id' => 748]);


        Stopp::create(['id' => 1049, 'store_id' => 84, 'date' => '2025-04-24', 'order_number' => '1', 'arrival_time' => '2025-04-24 04:10', 'departure_time' => '2025-04-24', 'remark' => 'NULL', 'trip_id' => 751]);
        Stopp::create(['id' => 1050, 'store_id' => 105, 'date' => '2025-04-24', 'order_number' => '2', 'arrival_time' => '2025-04-24 04:10', 'departure_time' => '2025-04-24', 'remark' => 'NULL', 'trip_id' => 751]);
        Stopp::create(['id' => 1051, 'store_id' => 66, 'date' => '2025-04-24', 'order_number' => '1', 'arrival_time' => '2025-04-24 11:13', 'departure_time' => '2025-04-24', 'remark' => 'vorgeladen f√ºr B. Hahn ', 'trip_id' => 752]);
        Stopp::create(['id' => 1052, 'store_id' => 57, 'date' => '2025-04-25', 'order_number' => '1', 'arrival_time' => '2025-04-25 05:10', 'departure_time' => '2025-04-25', 'remark' => 'NULL', 'trip_id' => 753]);
        Stopp::create(['id' => 1053, 'store_id' => 95, 'date' => '2025-04-25', 'order_number' => '2', 'arrival_time' => '2025-04-25 05:10', 'departure_time' => '2025-04-25', 'remark' => 'NULL', 'trip_id' => 753]);

        Stopp::create(['id' => 1055, 'store_id' => 166, 'date' => '2025-04-28', 'order_number' => '1', 'arrival_time' => '2025-04-28 16:51', 'departure_time' => '2025-04-28', 'remark' => 'NULL', 'trip_id' => 754]);


        Stopp::create(['id' => 1059, 'store_id' => 33, 'date' => '2025-04-30', 'order_number' => '1', 'arrival_time' => '2025-04-30 20:18', 'departure_time' => '2025-04-30', 'remark' => 'NULL', 'trip_id' => 756]);
        Stopp::create(['id' => 1060, 'store_id' => 32, 'date' => '2025-04-30', 'order_number' => '2', 'arrival_time' => '2025-04-30 20:18', 'departure_time' => '2025-04-30', 'remark' => '', 'trip_id' => 756]);
        Stopp::create(['id' => 1061, 'store_id' => 126, 'date' => '2025-04-30', 'order_number' => '3', 'arrival_time' => '2025-04-30 20:18', 'departure_time' => '2025-04-30', 'remark' => 'NULL', 'trip_id' => 756]);

        Stopp::create(['id' => 1063, 'store_id' => 32, 'date' => '2025-05-02', 'order_number' => '1', 'arrival_time' => '2025-05-02 12:46', 'departure_time' => '2025-05-02', 'remark' => 'NULL', 'trip_id' => 758]);
        Stopp::create(['id' => 1064, 'store_id' => 48, 'date' => '2025-05-02', 'order_number' => '1', 'arrival_time' => '2025-05-02 16:35', 'departure_time' => '2025-05-02', 'remark' => 'NULL', 'trip_id' => 759]);
        Stopp::create(['id' => 1065, 'store_id' => 66, 'date' => '2025-05-06', 'order_number' => '1', 'arrival_time' => '2025-05-06 12:34', 'departure_time' => '2025-05-06', 'remark' => 'danach Waschen', 'trip_id' => 760]);
        Stopp::create(['id' => 1066, 'store_id' => 171, 'date' => '2025-05-07', 'order_number' => '1', 'arrival_time' => '2025-05-07 12:27', 'departure_time' => '2025-05-07', 'remark' => 'NULL', 'trip_id' => 761]);

        Stopp::create(['id' => 1068, 'store_id' => 180, 'date' => '2025-05-07', 'order_number' => '1', 'arrival_time' => '2025-05-07 21:11', 'departure_time' => '2025-05-07', 'remark' => 'Tour mit Resten, MUTKT abzuholen (16) stck
abgeholt', 'trip_id' => 762]);
        Stopp::create(['id' => 1069, 'store_id' => 177, 'date' => '2025-05-12', 'order_number' => '1', 'arrival_time' => '2025-05-12 04:51', 'departure_time' => '2025-05-12', 'remark' => 'NULL', 'trip_id' => 763]);
        Stopp::create(['id' => 1070, 'store_id' => 28, 'date' => '2025-05-12', 'order_number' => '1', 'arrival_time' => '2025-05-12 04:51', 'departure_time' => '2025-05-12', 'remark' => 'NULL', 'trip_id' => 763]);

        Stopp::create(['id' => 1072, 'store_id' => 164, 'date' => '2025-05-13', 'order_number' => '1', 'arrival_time' => '2025-05-13 04:15', 'departure_time' => '2025-05-13', 'remark' => 'NULL', 'trip_id' => 765]);
        Stopp::create(['id' => 1073, 'store_id' => 33, 'date' => '2025-05-13', 'order_number' => '1', 'arrival_time' => '2025-05-13 04:15', 'departure_time' => '2025-05-13', 'remark' => 'NULL', 'trip_id' => 765]);
        Stopp::create(['id' => 1074, 'store_id' => 76, 'date' => '2025-05-15', 'order_number' => '1', 'arrival_time' => '2025-05-15 04:18', 'departure_time' => '2025-05-15', 'remark' => 'NULL', 'trip_id' => 766]);


        Stopp::create(['id' => 1077, 'store_id' => 124, 'date' => '2025-05-16', 'order_number' => '1', 'arrival_time' => '2025-05-16 04:13', 'departure_time' => '2025-05-16', 'remark' => 'NULL', 'trip_id' => 768]);
        Stopp::create(['id' => 1078, 'store_id' => 41, 'date' => '2025-05-16', 'order_number' => '2', 'arrival_time' => '2025-05-16 04:13', 'departure_time' => '2025-05-16', 'remark' => 'NULL', 'trip_id' => 768]);
        Stopp::create(['id' => 1079, 'store_id' => 161, 'date' => '2025-05-16', 'order_number' => '1', 'arrival_time' => '2025-05-16 08:22', 'departure_time' => '2025-05-16', 'remark' => 'NULL', 'trip_id' => 769]);


        Stopp::create(['id' => 1086, 'store_id' => 28, 'date' => '2025-05-19', 'order_number' => '2', 'arrival_time' => '2025-05-19 09:52', 'departure_time' => '2025-05-19', 'remark' => 'NULL', 'trip_id' => 772]);
        Stopp::create(['id' => 1087, 'store_id' => 5, 'date' => '2025-05-19', 'order_number' => '3', 'arrival_time' => '2025-05-19 09:52', 'departure_time' => '2025-05-19', 'remark' => 'NULL', 'trip_id' => 772]);

        Stopp::create(['id' => 1089, 'store_id' => 164, 'date' => '2025-05-20', 'order_number' => '2', 'arrival_time' => '2025-05-20 04:11', 'departure_time' => '2025-05-20', 'remark' => 'NULL', 'trip_id' => 773]);


    }
}
