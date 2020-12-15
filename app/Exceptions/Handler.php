<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {


        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {

        $statut="";
        $description="";
        if ($this->isHttpException($exception)) {
            if ($exception->getStatusCode() == 401) {
                $description="utilisateur non authentifié ";

            }
            if ($exception->getStatusCode() == 404) {
                $description="La page que vous avez demandé n'exisste pas'";

            }

            if ($exception->getStatusCode() == 500) {
                $description="erreur serveur essayez plus tard";

            }
            if ($exception instanceof \Illuminate\Session\TokenMismatchException) {
                return redirect()->route('login');
            }
            $statut=$exception->getStatusCode();
            return response()->view('error.error',['statut'=>$statut,'description'=>$description]);

        }
        return parent::render($request, $exception);
    }
}