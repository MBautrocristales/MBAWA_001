<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sucursales
            <small>Modificar Sucursal</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/Usuario/logueado"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Sucursal/getSucursal"><i class="fa fa-stack-overflow"></i>Sucursales</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Sucursal/formUpSucursal"><i class="fa fa-stack-overflow"></i>Modificar Sucursal</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Sucursales</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php echo form_open('Sucursal/upSucursal'); ?>
                    <?php foreach ($sucursal as $suc){?>
                    <div class="box-body">
                        <input type="hidden" name="id" value="<?php echo $suc->idSucursal;?>">
                        <div class="form-group">
                            Sucursal:
                            <div class="form-group has-feedback">
                              <?php echo form_error('NombreSuc','<div class = "error">','</div>');?>
                                <input type="text" required="" name="NombreSuc" value="<?php echo $suc->NombreSuc;?>" placeholder="Sucursal">
                            </div>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" value="enviar" class="btn btn-primary">
                            <i class="fa"></i> Aceptar
                        </button>
                    </div>
                    <?php } ?>
                    <?php echo form_close(); ?>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
