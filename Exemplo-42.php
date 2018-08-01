<?php

$hierarquia = array(
     array(
         'nome_cargo' => 'CEO',
			'subordinados'=>array(
			    // inicio: Diretor Comercial
			    array(
			        'nome_cargo'=>'Diretor Comercial',
			        'subordinados'=>array(
			            // inicio: Gerente de Vendas
			            array(
			                'nome_cargo'=>'Gerente de Vendas'
			            )
			        // fim: Gerente de Vendas
			        )
			    ),
			    // fim: Diretor Comercial
			    // inicio: Diretor Financeiro
			    array(
			    'nome_cargo'=>'Diretor Financeiro',
			    'subordinados'=>array(
			        // inicio: Gerente de Contas a Pagar
			        array(
			            'nome_cargo'=>'Gerente de Contas a Pagar', 
			            'subordinados'=>array(
			                // inicio: Supervisor de Pagamentos 
			                array(
			                    'nome_cargo'=>'Supervisor de Pagamentos'
			                )
			                // fim: Supervisor de Pagamentos
			            )
			        ), 
			        // fim: Gerente de Contas a Pagar
			        // inicio: Gerente de Compras
			        array(
			            'nome_cargo'=>'Gerente de Compras',
			            'subordinados'=>array(
			                //inicio: Supervisor de Suprimentos
			                array(
			                    'nome_cargo'=>'Supervisor de Suprimentos',
			                    'subordinados'=> array(
			                    	array (
			                    		'nome_cargo'=>'Funcionario'
			                    	)

			                    )
			                )
			                //fim: Supervisor de Suprimentos
			          )
			     )
			        // fim: Gerente de Compras
			 )
		)
	)
		// fim: Diretor Financeiro
	)
);

function exibe($cargos)
    {
        $html = "<ul>";

        foreach ($cargos as $cargo) {

            $html .= "<li>";
            $html .= $cargo['nome_cargo'];

            if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0)
            {
                $html .= exibe($cargo['subordinados']);
            }

            $html .= "</li>";
        }

        $html .= "</ul>";

        return $html;

        // "count" é pra ver quantos elementos tem no array
    }

    echo exibe($hierarquia);

?>