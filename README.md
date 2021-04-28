# Splitpayment para Woocommerce com a API pagar.me

### Visão Geral:

O objetivo do script é mostrar de forma simplificada o uso da API do pagar.me para fazer splits de pagamentos para lojas virtuais que estejam utilizando WordPress e Woocommerce.

******
### Requisitos:

O exemplo de código mostrado foi aplicado em um site WordPress juntamente com o Woocommerce, mas o script pode ser adaptado para aplicar em sites que utilizam tecnologias diferentes. Os requisitos são:

*Site WordPress;
*Conta Pagar.me do proprietário da Loja;
*Instalação e configuração dos plugins: Woocommerce e Pagar.me for WooCommerce;

******
### Observações:

O script disponibilizado foi testado com os plugins Pagar.me for WooCommerce na versão 2.5.0 e Woocommerce versão 4.7.1.

#### Funcionamento:

No final do script, esta linha é responsável por adicionar uma ação no WordPress toda vez que um pagamento for registrado pelo Gateway do Pagar.me, adicionando a execução da função wc_pagarme_slip_rules que fará o Splitpayment. Isso fará com que o Splitpayment ocorra toda vez que for feito um pagamento via Pagar.me.

    
    add_action( 'wc_pagarme_transaction_data', 'wc_pagarme_slip_rules', 10, 2 );
    

As variáveis de configuração definem o ID de recebedor da conta Pagar.me do proprietário da loja, ID de receber do fornecedor registrado na conta Pagar.me do proprietário e suas comissões (em porcentagem).

    
    $id_receiver_owner= 'ID_1111';
    $porcentage_owner = '15';

    $id_receiver_vendor = 'ID_0000';
    $porcentage_vendor = '85';
    

No caso do ID do fornecedor, é possível adaptar uma consulta a um banco de dados para buscar o ID de recebedor do fornecedor que cadastrou o produto, caso a loja virtual tenha mais de um fornecedor.

******
<p align="center"><a href="https://github.com/igorzs" target="_blank">Igor Silveira</a></p>
<p align="center">
<a href="https://www.linkedin.com/in/igor-zollim/" target="_blank"><img src="https://img.shields.io/badge/-Igor%20Silveira-2978b5?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/igor-zollim/"/></a>
<a href="mailto:igorzollimsilveira@gmail.com"><img src="https://img.shields.io/badge/-igorzollimsilveira@gmail.com-2978b5?style=flat-square&logo=Gmail&logoColor=white&link=mailto:igorzollimsilveira@gmail.com"/></a>
<a href="https://www.facebook.com/igor.zollim/"><img src="https://img.shields.io/badge/-Facebook-2978b5?style=flat-square&logo=Facebook&logoColor=white&link=https://www.facebook.com/igor.zollim/"/></a>
<a href="https://www.instagram.com/igor.zollim/"><img src="https://img.shields.io/badge/-Instagram-2978b5?style=flat-square&logo=Instagram&logoColor=white&link=https://www.instagram.com/igor.zollim/"/></a>
<a href="https://igorzs.github.io/portfolio/"><img src="https://img.shields.io/badge/-Acessar%20Portf%C3%B3lio-2978b5?style=flat-square&logo=github&logoColor=white&link=https://igorzs.github.io/portfolio/"/></a>
</p>
