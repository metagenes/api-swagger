<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
   /**
     * @OA\Info(
     *   title="Data API",
     *   version="1.0.0",
     *   description="API Docs Swagger",
     * 
     *   @OA\Contact(
     *     email="yudiprayogaraharja@gmail.com"
     *   ),
     * )
     * 
     * @OA\Schema(
     *   schema="DataItem",
     *   type="object",
     * 
     *   @OA\Property(
     *     property="status",
     *     type="integer",
     *     description="status"
     *   ),
     *   @OA\Property(
     *     property="message",
     *     type="string",
     *     description="return message (optional)",
     *   ),
     *   @OA\Property(
     *     property="data",
     *     type="object",
     *     description="return data"
     *   ),
     * )
     * 
     * @OA\Get(
     *   path="/api/ping",
     *   summary="hit ping endpoint",
     *   description="This endpoint returns ping.",
     * 
     *   @OA\Response(
     *     response=200,
     *     description="Successful operation",
     * 
     *     @OA\JsonContent(
     *       type="object",
     * 
     *       @OA\Property(property="status", type="integer", example="1"),
     *       @OA\Property(property="message", type="string", example="success"),
     *       @OA\Property(property="data", type="string", example="pong"),
     *     )
     *   ),
     *   @OA\Response(
     *     response=500,
     *     description="Unexpected error",
     * 
     *     @OA\JsonContent(
     *       type="object",
     * 
     *       @OA\Property(property="status", type="integer", example="0"),
     *       @OA\Property(property="message", type="string", example="internal server error"),
     *       @OA\Property(property="data", example=null)
     *     )
     *   )
     * )
     */


    public function index() {
        try {
            return response()->json([
                'status' => 1,
                'message' => 'Success',
                'data' => 'pong!'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 0,
                'message' => 'internal server error',
                'data' => null
            ]);    
        }
        
    }
}
