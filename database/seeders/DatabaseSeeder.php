<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call([
      PaisSeeder::class,
      DepartamentoSeeder::class,
      CiudadSeeder::class,
      TipoDocSeeder::class,
      RolesSeeder::class,
      UsuarioSeeder::class,
      DireccionesSeeder::class,
      CorreosSeeder::class,
      TelefonosSeeder::class,
      AdministradorSeeder::class,
      EmpleadoSeeder::class,
      ClienteSeeder::class,
      ProveedorSeeder::class,
      DivisasSeeder::class,
      TRMSeeder::class,
      OrdenCompraSeeder::class,
      EstadosCotizacionSeeder::class,
      CotizacionSeeder::class,
      ProformaVentaSeeder::class,
      CategoriasProductoSeeder::class,
      ProductoSeeder::class,
      DocumentoDetalladoSeeder::class,
      BodegaSeeder::class,
      BodegaProductoSeeder::class,
      EstadosFidelizacionSeeder::class,
      SoporteTecnicoSeeder::class,
      TipoSolicitudSeeder::class,
      PQRSSeeder::class,
      FelicitacionSeeder::class,
      CalificacionSeeder::class,
      TipoServicioSeeder::class,
      EstadosAgendaSeeder::class,
      AgendaSeeder::class,
    ]);
  }
}
