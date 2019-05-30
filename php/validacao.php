<?php 
        if (!empty($_POST['nome']) && !empty($_POST['materia']) && !empty($_POST['turno'])){
            if(!is_numeric($_POST['nome']) ){
               
                require_once 'conexao.php';
                $btn = $_POST['btn'];


               if ($btn == 'inserir'){


                $nome = $_POST['nome'];
                $materia = $_POST['materia'];
                $turno = $_POST['turno'];
                $cpf = $_POST['cpf'];
                $nascimento = $_POST['nascimento'];
                $formAcademica = $_POST['formAcademica'];

                $btn = $_POST['btn'];

                $sql = "INSERT INTO Cadastro (nome, materia, periodo, nascimento, cpf, formacaoAcademica) VALUES ('$nome','$materia','$turno','$cpf','$nascimento','$formAcademica')";
                    
                    $retorno = mysqli_query($conn, $sql);
                    
                    if ($retorno == true) {
                        echo "<script>window.alert('Cadastro realizado com sucesso!')</script>";
                        echo "<script language='javascript'>";
                        echo "</script>";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    
                   mysqli_close($conn);
                }
            }else {
                  echo "<script>window.alert('Informe seu nome corretamente!')</script>";
                  echo "<script language='javascript'>";
                  echo "</script>";
            }
            
        }else {
            echo "<script>window.alert('Informe seus dados corretamente!')</script>";
            echo "<script language='javascript'>";
            echo "</script>";
        }
                    
?>

    