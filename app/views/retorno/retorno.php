<br>
<?php '<br>' .
    $this->verMSG();
$this->verERRO() . '<br>'
?>
<div class="page-head">
    <div class="col-lg-12 col-sm-12">
        <a href="<?php echo URL_BASE ?>" type="submit" class="float-right btn btn-primary">Voltar</a>
    </div>
</div><br><br>





<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <div class="widget-content widget-content-area br-6">
        <div class="table-responsive mb-4 mt-4">
            <table id="datatable" class="table table-hover" style="width:100%">
                <thead>                                      
                    <tr>
                        <th>Tipo Movim:</th>
                        <th>banco:</th>
                        <th>Nosso Numero:</th>
                        <th>Cliente:.......................</th>
                        <th>Vencimento:</th>
                        <th>Pagamento:</th>
                        <th>valor:.....</th>
                        <th>Juros/Multa:</th>
                        <th>Parc:</th>
                        <th>Tarifa:</th>
                        <th>Recebido:</th>
                        <th>Liquido:</th>
                        <th>Doc:</th>

                    </tr>
                </thead>
                </thead>
                <tbody>
                    <?php foreach ($boletos as $retorno) {  ?>

                        <tr>
                            <td><?php

                                if ($retorno->codigo_movimento == 2) {
                                    echo "Entrada Confirmada";
                                }
                                if ($retorno->codigo_movimento == 3) {
                                    echo "Entrada Rejeitada";
                                }
                                if ($retorno->codigo_movimento == 4) {
                                    echo "TransferĂȘncia de Carteira/Entrada";
                                }
                                if ($retorno->codigo_movimento == 5) {
                                    echo "TransferĂȘncia de Carteira/Baixa";
                                }
                                if ($retorno->codigo_movimento == 6) {
                                    echo "LiquidaĂ§ĂŁo";
                                }
                                if ($retorno->codigo_movimento == 7) {
                                    echo "ConfirmaĂ§ĂŁo do Recebimento da InstruĂ§ĂŁo de Desconto";
                                }
                                if ($retorno->codigo_movimento == 8) {
                                    echo "ConfirmaĂ§ĂŁo do Recebimento do Cancelamento do Desconto";
                                }
                                if ($retorno->codigo_movimento == 9) {
                                    echo "Baixa";
                                }
                                if ($retorno->codigo_movimento == 11) {
                                    echo "TĂ­tulos em Carteira (Em Ser)";
                                }
                                if ($retorno->codigo_movimento == 12) {
                                    echo "ConfirmaĂ§ĂŁo Recebimento InstruĂ§ĂŁo de Abatimento";
                                }
                                if ($retorno->codigo_movimento == 13) {
                                    echo "ConfirmaĂ§ĂŁo Recebimento InstruĂ§ĂŁo de Cancelamento Abatimento";
                                }
                                if ($retorno->codigo_movimento == 14) {
                                    echo "ConfirmaĂ§ĂŁo Recebimento InstruĂ§ĂŁo AlteraĂ§ĂŁo de Vencimento";
                                }
                                if ($retorno->codigo_movimento == 15) {
                                    echo "Franco de Pagamento";
                                }
                                if ($retorno->codigo_movimento == 17) {
                                    echo "LiquidaĂ§ĂŁo ApĂłs Baixa ou LiquidaĂ§ĂŁo TĂ­tulo NĂŁo Registrado";
                                }
                                if ($retorno->codigo_movimento == 19) {
                                    echo "ConfirmaĂ§ĂŁo Recebimento InstruĂ§ĂŁo de Protesto";
                                }
                                if ($retorno->codigo_movimento == 20) {
                                    echo "ConfirmaĂ§ĂŁo Recebimento InstruĂ§ĂŁo de SustaĂ§ĂŁo/Cancelamento de Protesto";
                                }
                                if ($retorno->codigo_movimento == 23) {
                                    echo "Remessa a CartĂłrio (Aponte em CartĂłrio)";
                                }
                                if ($retorno->codigo_movimento == 24) {
                                    echo "Retirada de CartĂłrio e ManutenĂ§ĂŁo em Carteira";
                                }
                                if ($retorno->codigo_movimento == 25) {
                                    echo "Protestado e Baixado (Baixa por Ter Sido Protestado)";
                                }
                                if ($retorno->codigo_movimento == 26) {
                                    echo "InstruĂ§ĂŁo Rejeitada";
                                }
                                if ($retorno->codigo_movimento == 27) {
                                    echo "ConfirmaĂ§ĂŁo do Pedido de AlteraĂ§ĂŁo de Outros Dados";
                                }
                                if ($retorno->codigo_movimento == 28) {
                                    echo "DĂ©bito de Tarifas/Custas";
                                }
                                if ($retorno->codigo_movimento == 29) {
                                    echo "OcorrĂȘncias do Pagador";
                                }
                                if ($retorno->codigo_movimento == 30) {
                                    echo "AlteraĂ§ĂŁo de Dados Rejeitada";
                                }
                                if ($retorno->codigo_movimento == 33) {
                                    echo "ConfirmaĂ§ĂŁo da AlteraĂ§ĂŁo dos Dados do Rateio de CrĂ©dito";
                                }
                                if ($retorno->codigo_movimento == 34) {
                                    echo "ConfirmaĂ§ĂŁo do Cancelamento dos Dados do Rateio de CrĂ©dito";
                                }
                                if ($retorno->codigo_movimento == 35) {
                                    echo "ConfirmaĂ§ĂŁo do Desagendamento do DĂ©bito AutomĂĄtico";
                                }
                                if ($retorno->codigo_movimento == 36) {
                                    echo "ConfirmaĂ§ĂŁo de envio de e-mail/SMS";
                                }
                                if ($retorno->codigo_movimento == 37) {
                                    echo "Envio de e-mail/SMS rejeitado";
                                }
                                if ($retorno->codigo_movimento == 38) {
                                    echo "ConfirmaĂ§ĂŁo de alteraĂ§ĂŁo do Prazo Limite de Recebimento (a data deve ser";
                                }
                                if ($retorno->codigo_movimento == 39) {
                                    echo "ConfirmaĂ§ĂŁo de Dispensa de Prazo Limite de Recebimento";
                                }
                                if ($retorno->codigo_movimento == 40) {
                                    echo "ConfirmaĂ§ĂŁo da alteraĂ§ĂŁo do nĂșmero do tĂ­tulo dado pelo BeneficiĂĄrio";
                                }
                                if ($retorno->codigo_movimento == 41) {
                                    echo "ConfirmaĂ§ĂŁo da alteraĂ§ĂŁo do nĂșmero controle do Participante";
                                }
                                if ($retorno->codigo_movimento == 42) {
                                    echo "ConfirmaĂ§ĂŁo da alteraĂ§ĂŁo dos dados do Pagador";
                                }
                                if ($retorno->codigo_movimento == 43) {
                                    echo "ConfirmaĂ§ĂŁo da alteraĂ§ĂŁo dos dados do Pagadorr/Avalista";
                                }
                                if ($retorno->codigo_movimento == 44) {
                                    echo "TĂ­tulo pago com cheque devolvido";
                                }
                                if ($retorno->codigo_movimento == 45) {
                                    echo "TĂ­tulo pago com cheque compensado";
                                }
                                if ($retorno->codigo_movimento == 46) {
                                    echo "InstruĂ§ĂŁo para cancelar protesto confirmada";
                                }
                                if ($retorno->codigo_movimento == 47) {
                                    echo "InstruĂ§ĂŁo para protesto para fins falimentares confirmada";
                                }
                                if ($retorno->codigo_movimento == 48) {
                                    echo "ConfirmaĂ§ĂŁo de instruĂ§ĂŁo de transferĂȘncia de carteira/modalidade de cobranĂ§a";
                                }
                                if ($retorno->codigo_movimento == 49) {
                                    echo "AlteraĂ§ĂŁo de contrato de cobranĂ§a";
                                }
                                if ($retorno->codigo_movimento == 50) {
                                    echo "TĂ­tulo pago com cheque pendente de liquidaĂ§ĂŁo";
                                }
                                if ($retorno->codigo_movimento == 51) {
                                    echo "TĂ­tulo DDA reconhecido pelo Pagador";
                                }
                                if ($retorno->codigo_movimento == 52) {
                                    echo "TĂ­tulo DDA nĂŁo reconhecido pelo Pagador";
                                }
                                if ($retorno->codigo_movimento == 53) {
                                    echo "TĂ­tulo DDA recusado pela CIP";
                                }
                                if ($retorno->codigo_movimento == 54) {
                                    echo "ConfirmaĂ§ĂŁo da InstruĂ§ĂŁo de Baixa de TĂ­tulo Negativado sem Protesto";
                                }
                                if ($retorno->codigo_movimento == 55) {
                                    echo "ConfirmaĂ§ĂŁo de Pedido de Dispensa de Multa";
                                }
                                if ($retorno->codigo_movimento == 56) {
                                    echo "ConfirmaĂ§ĂŁo do Pedido de CobranĂ§a de Multa";
                                }
                                if ($retorno->codigo_movimento == 57) {
                                    echo "ConfirmaĂ§ĂŁo do Pedido de AlteraĂ§ĂŁo de CobranĂ§a de Juros";
                                }
                                if ($retorno->codigo_movimento == 58) {
                                    echo "ConfirmaĂ§ĂŁo do Pedido de AlteraĂ§ĂŁo do Valor/Data de Desconto";
                                }
                                if ($retorno->codigo_movimento == 59) {
                                    echo "ConfirmaĂ§ĂŁo do Pedido de AlteraĂ§ĂŁo do BeneficiĂĄrio do TĂ­tulo";
                                }
                                if ($retorno->codigo_movimento == 60) {
                                    echo "ConfirmaĂ§ĂŁo do Pedido de Dispensa de Juros de Mora";
                                }
                                if ($retorno->codigo_movimento == 85) {
                                    echo "ConfirmaĂ§ĂŁo de DesistĂȘncia de Protesto";
                                }
                                if ($retorno->codigo_movimento == 86) {
                                    echo "ConfirmaĂ§ĂŁo de cancelamento do Protesto";
                                }


                                ?></td>
                            <td><?php echo $retorno->codigo_banco ?></td>
                            <td><?php echo $retorno->nosso_numero ?></td>
                            <td><?php echo $retorno->nome_pagador ?></td>
                            <td><?php echo databr($retorno->vencimento) ?></td>
                            <td><?php echo databr($retorno->R3U->data_ocorrencia) ?></td>
                            <td>R$: <?php echo moedaBr($retorno->valor) ?></td>
                            <td> R$: <?php echo $retorno->R3U->vlr_juros_multa ?></td>
                            <td><?php echo $retorno->parcela ?></td>
                            <td>R$: <?php echo moedaBr($retorno->vlr_tarifa) ?></td>
                            <td>R$: <?php echo moedaBr($retorno->R3U->vlr_pago) ?></td>
                            <td>R$: <?php echo $retorno->R3U->vlr_liquido ?></td>
                            <td><?php echo $retorno->seu_numero ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>