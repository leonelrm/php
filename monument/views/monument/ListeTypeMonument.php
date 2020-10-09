<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php
      session_start();
      $listeLigneMetro = $_SESSION['listeLigneMetro'];
      
    ?>
</head>
<body style="text-align: center; margin: 200px;" >
    
    <div class='container'>
    <h1>Liste des Lignes de Metro</h1>
    <table border= "1px" class="w3-table">
        <thead style = "center; border-color: black; background: black;">
            <th style= "text-align: center; color: white;">Libelle</th>
            <th style= "text-align: center; color: white;">actions</th>            
        </thead>
        <tbody style = "text-align: center; border-color: black; background: gray;">
        <?php foreach($listeLigneMetro as $ligne) {?>
            <tr>
                <td><?php echo $ligne['Libelle_TYPE_Monument'];?></td>
                <td> <a href="../../controller/monument/MonumentVoir.php?idtypemonument=<?php echo $ligne['ID_TYPE_Monument']; ?>">voir</a>
                     <a href="../../controller/monument/MonumentModifierAcceptChercher.php?idtypemonument=<?php echo $ligne['ID_TYPE_Monument']; ?>">Modifier</a> 
                     <a href="../../controller/monument/MonumentSupprimerAcceptChercher.php?idtypemonument=<?php echo $ligne['ID_TYPE_Monument']; ?>">Supprimer</a></td>            
            </tr>           
            <?php
            }
            ?> 
                    
        </tbody>
                
    </table>
    </div>
    <br>
    <br>
    <button><a href="frmTypeMonumentCreer.php">Ajouter Un Libelle</a> </button>   



</body>


</html>