<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        // Array de usuarios (expandido a 20)
        $usuarios = [
            ['id' => 1, 'nombre' => 'Juan Pérez', 'email' => 'juan@example.com'],
            ['id' => 2, 'nombre' => 'María Gómez', 'email' => 'maria@example.com'],
            ['id' => 3, 'nombre' => 'Carlos López', 'email' => 'carlos@example.com'],
            ['id' => 4, 'nombre' => 'Ana Martínez', 'email' => 'ana@example.com'],
            ['id' => 5, 'nombre' => 'Roberto Silva', 'email' => 'roberto@example.com'],
            ['id' => 6, 'nombre' => 'Laura Torres', 'email' => 'laura@example.com'],
            ['id' => 7, 'nombre' => 'Pedro Ramírez', 'email' => 'pedro@example.com'],
            ['id' => 8, 'nombre' => 'Carmen Ruiz', 'email' => 'carmen@example.com'],
            ['id' => 9, 'nombre' => 'Miguel Soto', 'email' => 'miguel@example.com'],
            ['id' => 10, 'nombre' => 'Isabel Castro', 'email' => 'isabel@example.com'],
            ['id' => 11, 'nombre' => 'Fernando Díaz', 'email' => 'fernando@example.com'],
            ['id' => 12, 'nombre' => 'Patricia Vargas', 'email' => 'patricia@example.com'],
            ['id' => 13, 'nombre' => 'Ricardo Morales', 'email' => 'ricardo@example.com'],
            ['id' => 14, 'nombre' => 'Diana Flores', 'email' => 'diana@example.com'],
            ['id' => 15, 'nombre' => 'Gabriel Rojas', 'email' => 'gabriel@example.com'],
            ['id' => 16, 'nombre' => 'Mónica Herrera', 'email' => 'monica@example.com'],
            ['id' => 17, 'nombre' => 'Andrés Mendoza', 'email' => 'andres@example.com'],
            ['id' => 18, 'nombre' => 'Valentina Cruz', 'email' => 'valentina@example.com'],
            ['id' => 19, 'nombre' => 'Héctor Ortiz', 'email' => 'hector@example.com'],
            ['id' => 20, 'nombre' => 'Lucía Paredes', 'email' => 'lucia@example.com'],
        ];

        // Array de códigos de certificados
        $codigos = [
            ['id' => 1, 'codigo' => 'CERT-2024-001'],
            ['id' => 2, 'codigo' => 'CERT-2024-002'],
            ['id' => 3, 'codigo' => 'CERT-2024-003'],
            ['id' => 4, 'codigo' => 'CERT-2024-004'],
            ['id' => 5, 'codigo' => 'CERT-2024-005'],
            ['id' => 6, 'codigo' => 'CERT-2024-006'],
            ['id' => 7, 'codigo' => 'CERT-2024-007'],
            ['id' => 8, 'codigo' => 'CERT-2024-008'],
            ['id' => 9, 'codigo' => 'CERT-2024-009'],
            ['id' => 10, 'codigo' => 'CERT-2024-010'],
            ['id' => 11, 'codigo' => 'CERT-2024-011'],
            ['id' => 12, 'codigo' => 'CERT-2024-012'],
            ['id' => 13, 'codigo' => 'CERT-2024-013'],
            ['id' => 14, 'codigo' => 'CERT-2024-014'],
            ['id' => 15, 'codigo' => 'CERT-2024-015'],
            ['id' => 16, 'codigo' => 'CERT-2024-016'],
            ['id' => 17, 'codigo' => 'CERT-2024-017'],
            ['id' => 18, 'codigo' => 'CERT-2024-018'],
            ['id' => 19, 'codigo' => 'CERT-2024-019'],
            ['id' => 20, 'codigo' => 'CERT-2024-020'],
        ];

        // Array de grupos de certificación
        $grupos_certificacion = [
            ['id' => 1, 'nombre' => 'Grupo de Certificación PMI 2024-I'],
            ['id' => 2, 'nombre' => 'Grupo de Certificación SCRUM 2024-I'],
            ['id' => 3, 'nombre' => 'Grupo de Certificación AGILE 2024-I'],
            ['id' => 4, 'nombre' => 'Grupo de Certificación PRINCE2 2024-I'],
            ['id' => 5, 'nombre' => 'Grupo de Certificación ITIL 2024-I'],
            ['id' => 6, 'nombre' => 'Grupo de Certificación PMI 2024-II'],
            ['id' => 7, 'nombre' => 'Grupo de Certificación SCRUM 2024-II'],
            ['id' => 8, 'nombre' => 'Grupo de Certificación AGILE 2024-II'],
            ['id' => 9, 'nombre' => 'Grupo de Certificación PRINCE2 2024-II'],
            ['id' => 10, 'nombre' => 'Grupo de Certificación ITIL 2024-II'],
            ['id' => 11, 'nombre' => 'Grupo de Certificación PMI 2024-III'],
            ['id' => 12, 'nombre' => 'Grupo de Certificación SCRUM 2024-III'],
            ['id' => 13, 'nombre' => 'Grupo de Certificación AGILE 2024-III'],
            ['id' => 14, 'nombre' => 'Grupo de Certificación PRINCE2 2024-III'],
            ['id' => 15, 'nombre' => 'Grupo de Certificación ITIL 2024-III'],
            ['id' => 16, 'nombre' => 'Grupo de Certificación PMI 2024-IV'],
            ['id' => 17, 'nombre' => 'Grupo de Certificación SCRUM 2024-IV'],
            ['id' => 18, 'nombre' => 'Grupo de Certificación AGILE 2024-IV'],
            ['id' => 19, 'nombre' => 'Grupo de Certificación PRINCE2 2024-IV'],
            ['id' => 20, 'nombre' => 'Grupo de Certificación ITIL 2024-IV'],
        ];

        // Array de fechas de emisión
        $fechas_emision = [
            ['id' => 1, 'fecha' => '2024-01-15'],
            ['id' => 2, 'fecha' => '2024-02-20'],
            ['id' => 3, 'fecha' => '2024-03-10'],
            ['id' => 4, 'fecha' => '2024-03-25'],
            ['id' => 5, 'fecha' => '2024-04-05'],
            ['id' => 6, 'fecha' => '2024-04-20'],
            ['id' => 7, 'fecha' => '2024-05-15'],
            ['id' => 8, 'fecha' => '2024-05-30'],
            ['id' => 9, 'fecha' => '2024-06-10'],
            ['id' => 10, 'fecha' => '2024-06-25'],
            ['id' => 11, 'fecha' => '2024-07-15'],
            ['id' => 12, 'fecha' => '2024-07-30'],
            ['id' => 13, 'fecha' => '2024-08-10'],
            ['id' => 14, 'fecha' => '2024-08-25'],
            ['id' => 15, 'fecha' => '2024-09-15'],
            ['id' => 16, 'fecha' => '2024-09-30'],
            ['id' => 17, 'fecha' => '2024-10-15'],
            ['id' => 18, 'fecha' => '2024-10-30'],
            ['id' => 19, 'fecha' => '2024-11-15'],
            ['id' => 20, 'fecha' => '2024-11-30'],
        ];

        // Crear array de certificados combinando la información
        $certificados = [];
        for ($i = 0; $i < 20; $i++) {
            $certificados[] = [
                'id' => $i + 1,
                'codigo' => $codigos[$i]['codigo'],
                'titular' => $usuarios[$i]['nombre'],
                'grupo_certificacion' => $grupos_certificacion[$i]['nombre'],
                'fecha_emision' => $fechas_emision[$i]['fecha']
            ];
        }

        // Guardar los certificados en la sesión si no existen
        if (!session()->has('certificados')) {
            session(['certificados' => $certificados]);
        }
        
        $certificadosActuales = collect(session('certificados'));
        $perPage = 10;
        $currentPage = request()->get('page', 1);
        $certificadosPaginados = new \Illuminate\Pagination\LengthAwarePaginator(
            $certificadosActuales->forPage($currentPage, $perPage),
            $certificadosActuales->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url()]
        );

        // Si es una petición AJAX, devolver solo la vista parcial
        if ($request->ajax()) {
            return view('admin.dashboard', compact('certificadosPaginados'))
                ->fragment('certificados');
        }

        return view('admin.dashboard', compact('certificadosPaginados'));
    }

    public function destroy($id)
    {
        // Obtener los certificados de la sesión
        $certificados = collect(session('certificados'));
        
        // Convertir $id a array si es un string
        $ids = is_array($id) ? $id : [$id];
        
        // Eliminar los certificados
        $certificados = $certificados->filter(function ($certificado) use ($ids) {
            return !in_array($certificado['id'], $ids);
        })->values();
        
        // Actualizar la sesión
        session(['certificados' => $certificados->all()]);
        
        // Si es una petición AJAX, devolver respuesta JSON
        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }
        
        return redirect()->back();
    }

    public function restaurar()
    {
        // Restaurar los certificados originales
        $certificados = [];
        
        // Array de usuarios (expandido a 20)
        $usuarios = [
            ['id' => 1, 'nombre' => 'Juan Pérez', 'email' => 'juan@example.com'],
            ['id' => 2, 'nombre' => 'María Gómez', 'email' => 'maria@example.com'],
            ['id' => 3, 'nombre' => 'Carlos López', 'email' => 'carlos@example.com'],
            ['id' => 4, 'nombre' => 'Ana Martínez', 'email' => 'ana@example.com'],
            ['id' => 5, 'nombre' => 'Roberto Silva', 'email' => 'roberto@example.com'],
            ['id' => 6, 'nombre' => 'Laura Torres', 'email' => 'laura@example.com'],
            ['id' => 7, 'nombre' => 'Pedro Ramírez', 'email' => 'pedro@example.com'],
            ['id' => 8, 'nombre' => 'Carmen Ruiz', 'email' => 'carmen@example.com'],
            ['id' => 9, 'nombre' => 'Miguel Soto', 'email' => 'miguel@example.com'],
            ['id' => 10, 'nombre' => 'Isabel Castro', 'email' => 'isabel@example.com'],
            ['id' => 11, 'nombre' => 'Fernando Díaz', 'email' => 'fernando@example.com'],
            ['id' => 12, 'nombre' => 'Patricia Vargas', 'email' => 'patricia@example.com'],
            ['id' => 13, 'nombre' => 'Ricardo Morales', 'email' => 'ricardo@example.com'],
            ['id' => 14, 'nombre' => 'Diana Flores', 'email' => 'diana@example.com'],
            ['id' => 15, 'nombre' => 'Gabriel Rojas', 'email' => 'gabriel@example.com'],
            ['id' => 16, 'nombre' => 'Mónica Herrera', 'email' => 'monica@example.com'],
            ['id' => 17, 'nombre' => 'Andrés Mendoza', 'email' => 'andres@example.com'],
            ['id' => 18, 'nombre' => 'Valentina Cruz', 'email' => 'valentina@example.com'],
            ['id' => 19, 'nombre' => 'Héctor Ortiz', 'email' => 'hector@example.com'],
            ['id' => 20, 'nombre' => 'Lucía Paredes', 'email' => 'lucia@example.com'],
        ];

        // Array de códigos de certificados
        $codigos = [
            ['id' => 1, 'codigo' => 'CERT-2024-001'],
            ['id' => 2, 'codigo' => 'CERT-2024-002'],
            ['id' => 3, 'codigo' => 'CERT-2024-003'],
            ['id' => 4, 'codigo' => 'CERT-2024-004'],
            ['id' => 5, 'codigo' => 'CERT-2024-005'],
            ['id' => 6, 'codigo' => 'CERT-2024-006'],
            ['id' => 7, 'codigo' => 'CERT-2024-007'],
            ['id' => 8, 'codigo' => 'CERT-2024-008'],
            ['id' => 9, 'codigo' => 'CERT-2024-009'],
            ['id' => 10, 'codigo' => 'CERT-2024-010'],
            ['id' => 11, 'codigo' => 'CERT-2024-011'],
            ['id' => 12, 'codigo' => 'CERT-2024-012'],
            ['id' => 13, 'codigo' => 'CERT-2024-013'],
            ['id' => 14, 'codigo' => 'CERT-2024-014'],
            ['id' => 15, 'codigo' => 'CERT-2024-015'],
            ['id' => 16, 'codigo' => 'CERT-2024-016'],
            ['id' => 17, 'codigo' => 'CERT-2024-017'],
            ['id' => 18, 'codigo' => 'CERT-2024-018'],
            ['id' => 19, 'codigo' => 'CERT-2024-019'],
            ['id' => 20, 'codigo' => 'CERT-2024-020'],
        ];

        // Array de grupos de certificación
        $grupos_certificacion = [
            ['id' => 1, 'nombre' => 'Grupo de Certificación PMI 2024-I'],
            ['id' => 2, 'nombre' => 'Grupo de Certificación SCRUM 2024-I'],
            ['id' => 3, 'nombre' => 'Grupo de Certificación AGILE 2024-I'],
            ['id' => 4, 'nombre' => 'Grupo de Certificación PRINCE2 2024-I'],
            ['id' => 5, 'nombre' => 'Grupo de Certificación ITIL 2024-I'],
            ['id' => 6, 'nombre' => 'Grupo de Certificación PMI 2024-II'],
            ['id' => 7, 'nombre' => 'Grupo de Certificación SCRUM 2024-II'],
            ['id' => 8, 'nombre' => 'Grupo de Certificación AGILE 2024-II'],
            ['id' => 9, 'nombre' => 'Grupo de Certificación PRINCE2 2024-II'],
            ['id' => 10, 'nombre' => 'Grupo de Certificación ITIL 2024-II'],
            ['id' => 11, 'nombre' => 'Grupo de Certificación PMI 2024-III'],
            ['id' => 12, 'nombre' => 'Grupo de Certificación SCRUM 2024-III'],
            ['id' => 13, 'nombre' => 'Grupo de Certificación AGILE 2024-III'],
            ['id' => 14, 'nombre' => 'Grupo de Certificación PRINCE2 2024-III'],
            ['id' => 15, 'nombre' => 'Grupo de Certificación ITIL 2024-III'],
            ['id' => 16, 'nombre' => 'Grupo de Certificación PMI 2024-IV'],
            ['id' => 17, 'nombre' => 'Grupo de Certificación SCRUM 2024-IV'],
            ['id' => 18, 'nombre' => 'Grupo de Certificación AGILE 2024-IV'],
            ['id' => 19, 'nombre' => 'Grupo de Certificación PRINCE2 2024-IV'],
            ['id' => 20, 'nombre' => 'Grupo de Certificación ITIL 2024-IV'],
        ];

        // Array de fechas de emisión
        $fechas_emision = [
            ['id' => 1, 'fecha' => '2024-01-15'],
            ['id' => 2, 'fecha' => '2024-02-20'],
            ['id' => 3, 'fecha' => '2024-03-10'],
            ['id' => 4, 'fecha' => '2024-03-25'],
            ['id' => 5, 'fecha' => '2024-04-05'],
            ['id' => 6, 'fecha' => '2024-04-20'],
            ['id' => 7, 'fecha' => '2024-05-15'],
            ['id' => 8, 'fecha' => '2024-05-30'],
            ['id' => 9, 'fecha' => '2024-06-10'],
            ['id' => 10, 'fecha' => '2024-06-25'],
            ['id' => 11, 'fecha' => '2024-07-15'],
            ['id' => 12, 'fecha' => '2024-07-30'],
            ['id' => 13, 'fecha' => '2024-08-10'],
            ['id' => 14, 'fecha' => '2024-08-25'],
            ['id' => 15, 'fecha' => '2024-09-15'],
            ['id' => 16, 'fecha' => '2024-09-30'],
            ['id' => 17, 'fecha' => '2024-10-15'],
            ['id' => 18, 'fecha' => '2024-10-30'],
            ['id' => 19, 'fecha' => '2024-11-15'],
            ['id' => 20, 'fecha' => '2024-11-30'],
        ];

        // Recrear array de certificados combinando la información
        for ($i = 0; $i < 20; $i++) {
            $certificados[] = [
                'id' => $i + 1,
                'codigo' => $codigos[$i]['codigo'],
                'titular' => $usuarios[$i]['nombre'],
                'grupo_certificacion' => $grupos_certificacion[$i]['nombre'],
                'fecha_emision' => $fechas_emision[$i]['fecha']
            ];
        }
        
        // Guardar en la sesión
        session(['certificados' => $certificados]);
        
        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }
        
        return redirect()->back();
    }
}
