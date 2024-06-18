<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIndexRequest;
use App\Http\Requests\UpdateIndexRequest;
use App\Models\Index;
use App\Models\Message;
use App\Models\Service;
use App\Models\Category;
use App\Models\General;
use App\Models\Testimony;
use App\Models\ClientLogos;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Stmt\TryCatch;
use App\Helpers\EmailConfig;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $servicios = Service::where('status', '=', true)->where('visible', '=', true)->get();
        $titulos = Category::where('status', '=', true)->where('visible', '=', true)->get();
        $testimonios = Testimony::where('status', '=', true)->where('visible', '=', true)->get();
        $logos = ClientLogos::all();
        $generales = General::all()->first();

        return view('public.index', compact('servicios', 'titulos', 'generales', 'testimonios', 'logos'));
    }

    public function servicios($id)
    {
        $servicioById = Service::where('id', '=', $id)->first();
        $servicios = Service::where('status', '=', true)->where('visible', '=', true)->get();
        $generales = General::all()->first();
        return view('public.servicios', compact('generales', 'servicios', 'servicioById'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIndexRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIndexRequest $request, Index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Index $index)
    {
        //
    }

    /**
     * Save contact from blade
     */
    public function guardarContacto(Request $request)
    {
        $data = $request->all();
        $data['full_name'] = $request->name . ' ' . $request->last_name;

        try {
            $reglasValidacion = [
                'name' => 'required|string|max:255',
                'document' => 'required|string|max:255',
                'cellphone' => 'required|string|max:99999999999',
            ];
            $mensajes = [
                'name.required' => 'El campo nombre es obligatorio.',
                'document' => 'Identificarse es obligatorio.',
                'cellphone.required' => 'El campo teléfono es obligatorio.',
                'cellphone.integer' => 'El campo teléfono debe ser un número entero.',
            ];

            $request->validate($reglasValidacion, $mensajes);
            $formlanding = Message::create($data);
            $this->envioCorreoAdmin($formlanding);
            $this->envioCorreoCliente($formlanding);

            return response()->json(['message' => 'Mensaje enviado con exito']);
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->validator->errors()], 400);
        }
    }

    private function envioCorreoAdmin($data)
    {
        $generales = General::first();
        // $name = $data['full_name'];
        $name = 'Administrador';
        $mensaje = 'tienes un nuevo mensaje - Hidromec Piscinas';
        $mail = EmailConfig::config($name, $mensaje);
        $emailadmin = 'ventas.digital@hidromecingenieros.com';
        $baseUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/mail';
        $baseUrllink = 'https://' . $_SERVER['HTTP_HOST'] . '/';

        try {
            $mail->addAddress($emailadmin);
            $mail->Body =
                '
          <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mundo web</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
    </style>
  </head>
  <body>
    <main>
      <table
        style="
          width: 600px;
          margin: 0 auto;
          text-align: center;
          background-image: url(' .
                $baseUrl .
                '/fondo.png);
          background-repeat: no-repeat;
          background-position: center;
          background-size: cover;
        "
      >
        <thead>
          <tr>
            <th
              style="
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                margin: 40px;
                padding: 0 200px;
              "
            >
              <a href="' .
                $baseUrllink .
                '" target="_blank" style="text-align:center" ><img src="' .
                $baseUrl .
                '/logo.png" alt="hpi" /></a>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <p
                style="
                  color: #ffffff;
                  font-weight: 500;
                  font-size: 40px;
                  text-align: center;
                  width: 500px;
                  margin: 0 auto;
                  padding: 20px 0;
                  font-family: Montserrat, sans-serif;
                "
              >
                <span style="display: block">Hola ' .
                $name .
                '</span>
                <span style="display: block">Tienes un nuevo mensaje</span>
              </p>
            </td>
          </tr>

          <tr>
            <td>
              <a
                target="_blank"
                href="' .
                $baseUrllink .
                '"
                style="
                  text-decoration: none;
                  background-color: #fdfefd;
                  color: #254f9a;
                  padding: 16px 20px;
                  display: inline-flex;
                  justify-content: center;
                  border-radius: 10px;
                  align-items: center;
                  gap: 10px;
                  font-weight: 600;
                  font-family: Montserrat, sans-serif;
                  font-size: 16px;
                  margin-bottom: 350px;
                "
              >
                <span>Visita nuestra web</span>
              </a>
            </td>
          </tr>
          <tr style="margin-top: 300px">
             <td>
              <a
                href="https://www.facebook.com/hidromecingenieros"
                target="_blank"
                style="padding: 0 5px 30px 0; display: inline-block"
              >
                <img src="' .
                $baseUrl .
                '/facebook.png" alt="facebook"
              /></a>

              <a
                href="https://www.instagram.com/hidromecingenieros/?hl=es"
                target="_blank"
                style="padding: 0 5px 30px 0; display: inline-block"
              >
                <img src="' .
                $baseUrl .
                '/instagram.png" alt="instagram"
              /></a>

              <a
                href="https://www.linkedin.com/company/hidromecingenieros/"
                target="_blank"
                style="padding: 0 5px 30px 0; display: inline-block"
              >
                <img src="' .
                $baseUrl .
                '/linkedin.png" alt="linkedin"
              /></a>

              <a
                href="https://www.youtube.com/channel/UC3VTnRz6b1aFrpQleveaxmw"
                target="_blank"
                style="padding: 0 5px 30px 0; display: inline-block"
              >
                <img src=" ' .
                $baseUrl .
                '/youtube.png" alt="youtube"
              /></a>
            </td>
          </tr>
        </tbody>
      </table>
    </main>
  </body>
</html>

        
';

            $mail->isHTML(true);
            $mail->send();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    private function envioCorreoCliente($data)
    {
        $generales = General::first();
        $name = $data['full_name'];
        $mensaje = 'Gracias por comunicarte - Hidromec Piscinas';
        $mail = EmailConfig::config($name, $mensaje);
        $baseUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/mail';
        $baseUrllink = 'https://' . $_SERVER['HTTP_HOST'] . '/';

        try {
            $mail->addAddress($data['email']);
            $mail->Body =
                '
              <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dimensión Lider</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
    </style>
  </head>
  <body>
    <main>
      <table
        style="
          width: 600px;
          margin: 0 auto;
          text-align: center;
          background-image: url(' .
                $baseUrl .
                '/fondo.png);
          background-repeat: no-repeat;
          background-position: center;
          background-size: cover;
        "
      >
        <thead>
          <tr>
            <th
              style="
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                margin: 40px;
                padding: 0 200px;
              "
            >
                <a href="' .
                $baseUrllink .
                '" target="_blank" style="text-align:center" ><img src="' .
                $baseUrl .
                '/logo.png" alt="hidromec" /></a>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <p
                style="
                  color: #ffffff;
                  font-weight: 500;
                  font-size: 18px;
                  text-align: center;
                  width: 500px;
                  margin: 0 auto;
                  padding: 20px 0;
                  font-family: Montserrat, sans-serif;
                "
              >
                <span style="display: block">Hola </span>
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <p
                style="
                  color: #ffffff;
                  font-size: 40px;
                  line-height: 20px;
                  font-family: Montserrat, sans-serif;
                "
              >
                ' .
                $name .
                '
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <p
                style="
                  color: #ffffff;
                  font-size: 40px;
                  line-height: 70px;
                  font-family: Montserrat, sans-serif;
                  font-weight: bold;
                "
              >
                ¡Gracias
                <span style="color: #ffffff">por escribirnos!</span>
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <p
                style="
                  color: #ffffff;
                  font-weight: 500;
                  font-size: 18px;
                  text-align: center;
                  width: 500px;
                  margin: 0 auto;
                  padding: 20px 0;
                  font-family: Montserrat, sans-serif;
                "
              >
                En breve estaremos comunicandonos contigo.
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <a
                 target="_blank"
                href="' .
                $baseUrllink .
                '"
                style="
                  text-decoration: none;
                  background-color: #fdfefd;
                  color: #254f9a;
                  padding: 16px 20px;
                  display: inline-flex;
                  justify-content: center;
                  border-radius: 10px;
                  align-items: center;
                  gap: 10px;
                  font-weight: 600;
                  font-family: Montserrat, sans-serif;
                  font-size: 16px;
                  margin-bottom: 350px;
                "
              >
                <span>Visita nuestra web</span>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <a
                href="https://www.facebook.com/hidromecingenieros"
                target="_blank"
                style="padding: 0 5px 30px 0; display: inline-block"
              >
                <img src="' .
                $baseUrl .
                '/facebook.png" alt="facebook"
              /></a>

              <a
                href="https://www.instagram.com/hidromecingenieros/?hl=es"
                target="_blank"
                style="padding: 0 5px 30px 0; display: inline-block"
              >
                <img src="' .
                $baseUrl .
                '/instagram.png" alt="instagram"
              /></a>

              <a
                href="https://www.linkedin.com/company/hidromecingenieros/"
                target="_blank"
                style="padding: 0 5px 30px 0; display: inline-block"
              >
                <img src="' .
                $baseUrl .
                '/linkedin.png" alt="linkedin"
              /></a>

              <a
                href="https://www.youtube.com/channel/UC3VTnRz6b1aFrpQleveaxmw"
                target="_blank"
                style="padding: 0 5px 30px 0; display: inline-block"
              >
                <img src=" ' .
                $baseUrl .
                '/youtube.png" alt="youtube"
              /></a>
            </td>
          </tr>
        </tbody>
      </table>
    </main>
  </body>
</html>

            ';
            $mail->isHTML(true);
            $mail->send();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
