<form action="<?php echo URL_BASE . "Boleto/Retorno" ?>" method="POST" enctype="multipart/form-data">
    <?php
    $this->verMSG();
    $this->verERRO();
    ?>
    <div id="fuSingleFile" class="col-lg-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Buscar arquivo de retorno</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="custom-file-container" data-upload-id="myFirstImage">
                    <label>arquivo selecionado <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Limpar">x</a></label>
                    <label class="custom-file-container__custom-file">
                        <input type="file" class="custom-file-container__custom-file__custom-file-input" name="arquivo" id="arquivo">
                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                    </label>
                    <div class="custom-file-container__image-preview"></div>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" value="Gerar relatorio" class="btn d-table m-auto">
</form>

