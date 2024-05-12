<?php
namespace App\Http\Controllers;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *    title="Docare API",
 *    version="1.0.0",
 *    description="API pour le système de gestion Docare"
 * )
 * @OA\SecurityScheme(
 *       securityScheme="bearerAuth",
 *       in="header",
 *       name="bearerAuth",
 *       type="http",
 *       scheme="bearer",
 *       bearerFormat="JWT"
 * )
 */
abstract class Controller
{
    //
}
