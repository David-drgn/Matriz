<?php
echo "<script>
        var agree = confirm('Deseja deletar os dados?');
        if (agree == true){window.location.href = 'ExcluirEquipe.php';}  
        else{window.location.href = 'EditaEquipes.php';}
        </script>";
?>