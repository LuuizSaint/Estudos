<?php
date_default_timezone_set('America/Sao_Paulo'); //Deve ser definido para o horário local!!!

// $date = date('F j, Y, g:i a');
// $date = date('m.d.y');
// $date = date('j, n, Y');
// $date = date('Ymd');
// $date = date('h-i-s, j-m-y');
// $date = date('D M j G:i:s T Y');
// $date = date('H:m:s m \i\s\ \m\o\n\t\h');
// $date = date('Y-m-d H:i:s'); //Formato DATETIME do MySQL
$date = date('Y-m-d H:i:s');
// date(formato, timestamp); Formata data para apresentação
$date; //Out: 2025-02-04 09:21:31

/**
 * Dia:
 * j - Dia, sem zero. (4)
 * d - Dia. (04)
 * D - Dia da semana. (Tue)
 * l - Dia da semana completo. (Tuesday)
 * z - Dia do ano. (34)
 * 
 * Mês: 
 * F - Mês completo. (February)
 * M - Mês abreviado. (Feb)
 * m - Representação numerica do mês. (02)
 * n - Representação numerica do mês, sem zero. (2)
 * t - Quantos dias tem o mês. (28)
 * 
 * Ano:
 * Y || o - Ano completo. (2025)
 * y - Ano com 2 digitos. (25)
 * 
 * Hora:
 * G - Hora, sem zero. (9)
 * H - Hora. (09)
 * i - Minutos. (04)
 * s - Segundos. (54)
 * 
 * Outros:
 * e - timezone. (America/Sao_Paulo) padrão é UTC
 */

//mktime(hour, minute, second, month, day, year) Cria uma data
$mkTime = mktime(0, 0, 0, 9, 23, 23);
date("d, F - Y - e", $mkTime); //Out: 23, September - 2023 - America/Sao_Paulo

$mkTime = mktime(4, 20, 0, 9, 23, 23);
echo date("H:i", $mkTime); //Out: 04:20
























































?>