<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;
use App\Models\Link;
use App\Models\Organizacion;
use App\Models\Domicilio;
use App\Models\Telefono;

class OrganizacionController extends Controller
{
    public function registrarorganizacion(Request $request)
    {

        try
        {
            DB::beginTransaction();
            $datosOrganizacion = json_decode($request->getContent());
            $usuario = new Usuario;
            $organizacion = new Organizacion;

            $usuario->claveUsuario = $datosOrganizacion->claveUsuario;
            $usuario->emailUsuario = $datosOrganizacion->emailUsuario;
            $usuario->tokenGoogle = $datosOrganizacion->tokenGoogle;
            $usuario->urlFotoPerfilUsuario = $datosOrganizacion->urlFotoPerfilUsuario;
            $usuario->idRolUsuario = 2;
            $usuario->idEstadoUsuario = 1;
            $usuario->save();
            $organizacion->idUsuario = $usuario->idUsuario;
            $organizacion->razonSocial = $datosOrganizacion->razonSocial;
            $organizacion->idTipoOrganizacion = $datosOrganizacion->tipoOrganizacion->idTipoOrganizacion;
            $organizacion->save();
            $telefonos = $datosOrganizacion->telefonos;
            foreach ($telefonos as $telefonoActual)
            {
                $telefono = new Telefono;
                $telefono->codAreaTelefono = $telefonoActual->codAreaTelefono;
                $telefono->numeroTelefono = $telefonoActual->numeroTelefono;
                $telefono->idTipoTelefono = $telefonoActual->tipoTelefono->idTipoTelefono;
                $telefono->idUsuario = $usuario->idUsuario;
                $telefono->save();
            }
            $domicilios = $datosOrganizacion->domicilios;
            foreach ($domicilios as $domicilioActual)
            {
                $domicilio = new Domicilio;
                $domicilio->calle = $domicilioActual->calle;
                $domicilio->numero = $domicilioActual->numero;
                $domicilio->piso = $domicilioActual->piso;
                $domicilio->depto = $domicilioActual->depto;
                $domicilio->idLocalidad = $domicilioActual->localidad->idLocalidad;
                $domicilio->latitud = $domicilioActual->latitud;
                $domicilio->longitud= $domicilioActual->longitud;
                $domicilio->idUsuario = $usuario->idUsuario;
                $domicilio->save();
            }
            $links = $datosOrganizacion->links;

            foreach ($links as $linkActual)
            {
                $link = new Link;
                $link->urlLink = $linkActual->urlLink;
                $link->idTipoLink = $linkActual->tipoLink->idTipoLink;
                $link->idUsuario = $usuario->idUsuario;
                $link->save();
            }

            DB::commit();
        }
        catch (\Exception $e)
        {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'message' => "Registro exitoso"

        ]);
    }
}
