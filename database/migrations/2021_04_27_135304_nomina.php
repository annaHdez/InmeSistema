<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nomina extends Migration
{
    public function up()
    {
        Schema::create('nomina', function (Blueprint $table){
            $table->string('id_nomina',20)->primary();
            $table->string('nombre_colab',50);
                $table->foreign('nombre_colab')->cascadeOnDelete()->references('nombre')->on('colaboradores');
            $table->string('apat_colab',50);
                $table->foreign('apat_colab')->cascadeOnDelete()->references('ape_pat')->on('colaboradores');
            $table->string('amat_colab',50);
                $table->foreign('amat_colab')->cascadeOnDelete()->references('ape_mat')->on('colaboradores');
            $table->boolean('estatus_colab');
                $table->foreign('estatus_colab')->cascadeOnDelete()->references('estatus')->on('colaboradores');
            $table->double('sueldo_base',8,2);
                $table->foreign('sueldo_base')->cascadeOnDelete()->references('sueldoC')->on('colaboradores');
            $table->double('sd_imss',8,2);
                $table->foreign('sd_imss')->cascadeOnDelete()->references('SD_IMSS')->on('colaboradores');
            $table->double('sdi',8,2);
                $table->foreign('SDI')->cascadeOnDelete()->references('SDI')->on('colaboradores');
            $table->double('retenciones',8,2);
            $table->double('bono',8,2);
            $table->integer('jueves_proyExt');
            $table->integer('jueves_hrsExt');
            $table->integer('viernes_proy');
            $table->integer('viernes_proyExt');
            $table->integer('viernes_hrsExt');
            $table->integer('sabado_proyExt');
            $table->integer('sabado_hrsExt');
            $table->integer('domingo_proyExt');
            $table->integer('domingo_hrsExt');
            $table->integer('lunes_proy');
            $table->integer('lunes_proyExt');
            $table->integer('lunes_hrsExt');
            $table->integer('martes_proy');
            $table->integer('martes_proyExt');
            $table->integer('martes_hrsExt');
            $table->integer('miercoles_proy');
            $table->integer('miercoles_proyExt');
            $table->integer('miercoles_hrsExt');
            $table->integer('jueves_proy');
            $table->double('costoHoraExtra',8,2)->index();
            $table->double('totalHrsExt',8,2)->index();
            $table->double('costo_totalHrsExt',8,2);
            $table->double('seguroInfonavit',8,2);
            $table->integer('diasIncapacidad_EG');
            $table->integer('diasIncapacidad_RT');
            $table->double('montoIncapacidad_EG',8,2);
            $table->double('montoIncapacidad_RT',8,2);
            $table->double('infonavit',8,2);
            $table->integer('totalRetardos');
            $table->double('montoRetardos',8,2);
            $table->double('descuentoHora',8,2);
            $table->double('ajusteInfonavit',8,2);
            $table->double('prestamo',8,2);
            $table->integer('diasVacaciones');
            $table->double('primaVacaciones',8,2);
            $table->double('descHerramienta',8,2);
            $table->double('descAntidoping',8,2);
            $table->double('uniforme',8,2);
            $table->double('pensionAlimen',8,2);
            $table->double('cubrebocas',8,2);
            $table->double('descJuguetes',8,2);
            $table->double('diaSabatino',8,2);
            $table->double('septimoDia',8,2);
            $table->integer('totalFaltas');
            $table->double('costoTotal_Faltas',8,2);
            $table->double('finiquitoFiscal',8,2);
            $table->double('finiquitoInterno',8,2);
            $table->double('nomina',8,2);
            $table->double('percepciones',8,2);
            $table->double('deducciones',8,2);
            $table->double('total',8,2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('nomina');
    }
}
