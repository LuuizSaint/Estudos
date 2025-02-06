<?php
/** TTFB (Time to First Byte) 
 * É o tempo que um navegador leva para receber o primeiro byte de resposta do servidor após fazer uma requisição.
 * 
 * Requisição do Cliente -> Processamento no Servidor -> Primeira Resposta do Servidor.
 * TTFB = Tempo de conexão + Tempo de processamento no servidor + Tempo de envio do primeiro byte.
 * 
 * Excelente: < 100ms
 * Bom: 100ms – 500ms
 * Ruim: > 500ms
 * Muito Ruim: > 1s (precisa de otimização urgente).
 * 
 * app/library/Cache.php
 * public/cache/cache.json
 */
?>