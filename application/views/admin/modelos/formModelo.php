<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Modelos
            <small>Nueva Modelo</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Auto/getAuto"><i class="fa fa-stack-overflow"></i>Autos</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Modelo/formModelo"><i class="fa fa-stack-overflow"></i>Agregar Modelo</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Modelos</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php echo form_open('Modelo/addModelo'); ?>

                    <div class="box-body">
                         <div class="form-group">
                            Modelo:
                            <div class="form-group has-feedback">
                                <input type="text" required="" class="form-control" name="ModAuto" placeholder="Modelo">

                            </div>
                        </div>
                        <div class="form-group">
                            Bodega:
                            <select name="idAuto" class="form-control select2" style="width: 100%;">
                                <option value="0" selected="">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>

                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa"></i> Aceptar
                        </button>
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-close"></i> Cancelar
                        </button>
                    </div>
                    <?php echo form_close(); ?>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
