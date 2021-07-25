<?php
/*
-> P  representação de periodo: vem antes de dia. mês, ano e semana

   Y  anos

   M  meses

   D  dias

   w  semanas

-> T  representação de tempo:vem antes de hora, minuto e segundo

   H  horas

   M  minutos

   S  segundos


*/

$data1 = new DateTime();

$intervalo = new DateInterval('P5Y10M5DT10H50M10S');

$data1->sub($intervalo);



$data2 = new DateTime();

$intervalo2 = new DateInterval('P5DT10H50M');

$data2->sub($intervalo2);

var_dump($data1);

var_dump($data2->format('d-m-Y-H:i:s'));
