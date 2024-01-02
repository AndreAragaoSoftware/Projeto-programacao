<?php include 'cabecalho_econmendas.php'; ?>

<body>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered text-center table-sm table-md">
            <thead>
                <tr>
                    <th>Data da Entrega</th>
                    <th>Hora de Chegada</th>
                    <th>Fornecedor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../../ligaBD.php';

                $query = "SELECT encomendas.idEncomenda, encomendas.dataEncomenda, encomendas.horaChegada, fornecedores.nome AS nomeFornecedor
                    FROM encomendas
                    INNER JOIN fornecedores ON encomendas.idFornecedor = fornecedores.idFornecedor";
                $sql_query = mostraDados($query) or die("Falha na execução do código SQL");

                while ($rows = mysqli_fetch_assoc($sql_query)) {
                    echo "<tr>
                            <td>{$rows['dataEncomenda']}</td>
                            <td>{$rows['horaChegada']}</td>
                            <td>{$rows['nomeFornecedor']}</td>
                            <td>
                             <a class=' btn btn-primary btn-sm' href='edita_encomenda.php?idEncomenda=" . $rows['idEncomenda'] . " '> 
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
                                class='bi bi-pencil' viewBox='0 0 16 16'>
                        <path
                            d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z' />
                    </svg>
                </a>
                
                &nbsp;&nbsp;
                
                <a class=' btn btn-secondary btn-sm' href='visualiza_encomenda.php?idEncomenda=" . $rows['idEncomenda'] . " '> 
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0'/>
                </svg>
                </a>
                
                &nbsp;&nbsp;
                
                <a class=' btn btn-success btn-sm' href='add_produto_encomenda.php?idEncomenda=" . $rows['idEncomenda'] . " '> 
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus-circle' viewBox='0 0 16 16'>
                <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16'/>
                 <path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4'/>
                </svg>
                </a>
                  
                &nbsp;&nbsp;
               
                      </td></tr>  ";
                }
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>