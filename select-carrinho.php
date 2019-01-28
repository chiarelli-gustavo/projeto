<!doctype html>
<html>
        <?php include 'head.php'; ?>
	
    
<body>  
        <?php 
    include 'navbar.php';

            require_once 
            'conexao.php';

            $id = $_POST['id'];


            $sql = "SELECT * FROM livros WHERE id = $id";


            $result = mysqli_query($conn, $sql);


            if (mysqli_num_rows($result) >0) {



            while($row = mysqli_fetch_assoc($result)) {

        ?>   
    
        <div class="container">
            <div class="row mt-3">
                <div class="col-7">
                    <session class="display-3"><p class="text-right"><?php echo $row['titulo']; ?></p>
                            <p class="h4 text-muted text-right"> <?php echo $row['autor']; ?><br/>
                            <?php echo $row['estoque']; ?>
                            </p>
                    </session>
                    <session>
                        <hr>
                    <p><?php echo $row['preco']; ?></p>
                    </session>
                </div>
                <div class="col-1 px-3">
                                                
                         
                                                
                </div>
                
                <div class="col-4">
                <img src=imagens/"<?php echo $row['foto']; ?>" width="90%">
                <br/>
                    <br/>
                    <form name="form_seguir" action="seguir_insert.php" method="post">
                                <input type="hidden" name="seguir_id" value="<?php echo $row['id'] ?>">
                        <button type="submit" class="btn btn-success" value="seguir">Seguir</button>
                    </form>
            </div>           
        </div>
        
        <div class="text-right">
           <hr><hr>
        </div>          


    
        <?php 
            }
           } 
                    else {
                        echo "0 resultado";
                    }
                    mysqli_close($conn);  // sempre fechar a conexão para otimizar a performance do banco. Cada banco tem um total de 30 mil conexões.

                    ?>

</body>
</html>