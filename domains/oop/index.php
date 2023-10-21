<?php
   class Car
 {
   $name='';
   public $color='';

   public function start()
   {
     echo '1,2,3... Start!';
   }

   public function stop()
   {
      echo 'Stop!';
   }

 }
   $car1 = new Car();
   echo $car1 ->name;
   echo $car1 -> start();
   ?>